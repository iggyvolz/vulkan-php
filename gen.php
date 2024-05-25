<?php

use FFI\CData;
use iggyvolz\vulkan\enum\VkResult;
use iggyvolz\vulkan\generator\MethodGenerator\MethodGenerator;
use iggyvolz\vulkan\generator\Registry\Command\Parameter;
use iggyvolz\vulkan\generator\Registry\EnumType;
use iggyvolz\vulkan\generator\Registry\Registry;
use iggyvolz\vulkan\generator\Registry\Type\Bitmask;
use iggyvolz\vulkan\generator\Registry\Type\Enum;
use iggyvolz\vulkan\generator\Registry\Type\Handle;
use iggyvolz\vulkan\generator\Registry\Type\Struct;
use iggyvolz\vulkan\generator\Transformer\DummyTransformer;
use iggyvolz\vulkan\generator\Transformer\NonConstTransformer;
use iggyvolz\vulkan\generator\Transformer\Transformer;
use iggyvolz\vulkan\generator\Transformer\VoidTransformer;
use iggyvolz\vulkan\util\BitmapEnum;
use iggyvolz\vulkan\util\VkResultAssert;
use iggyvolz\vulkan\util\VulkanBase;
use iggyvolz\vulkan\util\VulkanFfi;
use iggyvolz\vulkan\util\VulkanInstanceBase;
use iggyvolz\vulkan\util\VulkanNew;
use iggyvolz\vulkan\Vulkan;
use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\PsrPrinter;

require_once __DIR__ . "/vendor/autoload.php";

const REPORT = false;

$targetDirectory = __DIR__ . DIRECTORY_SEPARATOR . "src" . DIRECTORY_SEPARATOR . "vk";

function removeDirectory(string $directory): void {
    // Check if the directory exists
    if (!file_exists($directory)) {
        return;
    }

    // If the directory is a file, delete it
    if (!is_dir($directory)) {
        unlink($directory);
        return;
    }

    // Iterate through each item in the directory
    foreach (scandir($directory) as $item) {
        if ($item !== '.' && $item !== '..') {
            removeDirectory($directory . DIRECTORY_SEPARATOR . $item);
        }
    }

    // Delete the directory
    rmdir($directory);
}
$notOkayTypes = [];
function transformer(string $type, bool $report = true): Transformer
{
    global $notOkayTypes;
    $transformer = Transformer::get($type);
    if($report && $transformer instanceof NonConstTransformer) {
        $notOkayTypes[$type] ??= 0;
        $notOkayTypes[$type]++;
    }
    return $transformer;
}
removeDirectory($targetDirectory);
mkdir($targetDirectory);
mkdir("$targetDirectory/enum");
mkdir("$targetDirectory/struct");
mkdir("$targetDirectory/ext");
$extensionClasses = [];
$extensionFiles = [];
$registry = Registry::get(cacheDirectory: __DIR__ . "/cache");
file_put_contents(__DIR__ . "/registry.json", json_encode($registry, flags: JSON_PRETTY_PRINT));
ob_start();
var_dump($registry);
file_put_contents(__DIR__ . "/registry.txt", ob_get_clean());
$printer = new PsrPrinter();

$cdefs = [];
foreach($registry->getTypes(Enum::class) as $enum) {
    if(!is_null($enum->alias)) continue;
    $file = new PhpFile();
    $file->setStrictTypes();
    $namespace = $file->addNamespace("iggyvolz\\vulkan\\enum");
    $enumClass = $namespace->addEnum($enum->name)->setType("int");
    foreach($enum->enums as $k => $v) {
        $enumClass->addCase($k, $v);
    }
    if($enum->enumType === EnumType::Bitmask) $enumClass->addTrait(BitmapEnum::class);
    if($enum->name === "VkResult") $enumClass->addTrait(VkResultAssert::class);
    file_put_contents($targetDirectory . "/enum/$enum->name.php", $printer->printFile($file));
    $cdefs[] = "typedef int $enum->name;";
}
// handle flagbits types
foreach($registry->getTypes(Bitmask::class) as $bitmask) {
    $cdefs[] = "typedef int $bitmask->name;";
}
function nullable(string $type): string
{
    if($type === "mixed" || str_contains($type, "?")) {
        return $type;
    } else {
        return "null|$type";
    }
}

$structClasses = [];
$structFiles = [];

foreach($registry->getTypes(Handle::class) as $handle) {
    $structFiles[$filename = $targetDirectory . "/struct/$handle->name.php"] = $file = new PhpFile();
    $file->setStrictTypes();
    $namespace = $file->addNamespace("iggyvolz\\vulkan\\struct");
    $structClasses[$handle->name] = $class = $namespace->addClass($handle->name)->setFinal();
    if($handle->name === "VkInstance") $class->addTrait(VulkanInstanceBase::class);
    $class->addImplement(JsonSerializable::class)->addMethod("jsonSerialize")->setReturnType("array")->addBody("return ['_type' => static::class];");
    $constructor = $class->addMethod("__construct");
    $constructor->addComment("@internal");
    $constructor->addPromotedParameter("cdata")->addComment("@internal")->setPublic()->setType(CData::class);
    $cdefs[] = "typedef void* $handle->name;";

    // Put a temporary copy of the file, some methods could get added later that's fine
    file_put_contents($filename, $printer->printFile($file));
}
foreach($registry->getTypes(Struct::class) as $struct) {
    $structFiles[$filename = $targetDirectory . "/struct/$struct->name.php"] = $file = new PhpFile();
    $file->setStrictTypes();
    $namespace = $file->addNamespace("iggyvolz\\vulkan\\struct");
    $structClasses[$struct->name] = $class = $namespace->addClass($struct->name)->setFinal();
    $class->addImplement(JsonSerializable::class);
    $jsonSerialize = $class->addMethod("jsonSerialize")->setReturnType("array");
    $jsonSerialize->addBody("return [\n  '_type' => static::class,");
    $constructor = $class->addMethod("__construct");
    $constructor->addComment("@internal");
    $constructor->addPromotedParameter("cdata")->addComment("@internal")->setPublic()->setType(CData::class);
    $create = $class->addMethod("create")->setPublic()->setStatic()->setReturnType("self");
    $create->addParameter("vk")->setType(VulkanFfi::class);
    $create->addBody('$self = new self( $vk->ffi->new(' . var_export($struct->name, true) . ', false));');
    $cdef = "typedef struct {";
    foreach($struct->members as $member) {
        $memberType = \transformer($member->type);
        $getter = $class->addMethod("get" . ucfirst($member->name));
        $getter->addBody('$cValue = $this->cdata->' . $member->name . ';');
        $getter->addBody($memberType->fromC());
        $getter->addBody('return $phpValue;');
        $getter->setReturnType($memberType->phpType());
        $setter = $class->addMethod("set" . ucfirst($member->name))->setReturnType('void');
        $setter->addParameter("phpValue")->setType($memberType->phpType());
        $setter->addBody($memberType->toC());
        $setter->addBody('$this->cdata->' . $member->name . ' = $cValue;');
        $create->addParameter($member->name)->setType(nullable($memberType->phpType()))->setDefaultValue(null);
        $create->addBody('if(!is_null($' . $member->name . ')) $self->set' . ucfirst($member->name) . '($' . $member->name . ');');
        $getter->addComment($memberType->cTypePrefix() . "/" . $memberType->cTypeSuffix());
        $cdef.=$memberType->cTypePrefix() . ' ' . $member->name . ' ' . $memberType->cTypeSuffix() . ';';
        $jsonSerialize->addBody("  \"$member->name\" => \$this->" . $getter->getName() . "(),");
    }
    $create->addBody('return $self;');
    $jsonSerialize->addBody("];");
    $cdef .= "} $struct->name;";
    $cdefs[] = $cdef;
    // Put a temporary copy of the file, some methods could get added later that's fine
    file_put_contents($filename, $printer->printFile($file));
}

$vulkanClass = ($vulkanFile = new PhpFile())->setStrictTypes()->addNamespace("iggyvolz\\vulkan")->addClass("Vulkan");
$vulkanClass->addTrait(VulkanBase::class);
function desnake(string $name): string
{
    $expl = explode("_", $name);
    $expl = array_map(strtolower(...), $expl);
    $expl = array_map(ucfirst(...), $expl);
    return implode("", $expl);
}
foreach ($registry->commands as $command) {
    foreach($command->availableIn as $ext) {
        $cls = desnake($ext);
        if(!array_key_exists($cls, $extensionClasses)) {
            $extensionClasses[$cls] = ($extensionFiles[__DIR__ . "/src/vk/ext/$cls.php"] = new PhpFile())->addNamespace("iggyvolz\\vulkan\\ext")->addClass($cls);
            $extensionClasses[$cls]->addImplement(VulkanFfi::class);
            $extensionClasses[$cls]->addMethod("getFfi")->setReturnType(\iggyvolz\vulkan\util\FFIProxy::class)->addBody('return $this->vulkan->ffi;');
            $extensionClassConstructor = $extensionClasses[$cls]->addMethod("__construct");
            $extensionClassConstructor->addPromotedParameter("vulkan")->setType(VulkanNew::class);
        }
        $extensionClass = $extensionClasses[$cls];
        MethodGenerator::generate($extensionClass, $command);
    }
    $cdefs[] = "typedef " . \transformer($command->type)->cTypePrefix() . " (*PFN_PHP_" . $command->name . ")(" . implode(",", array_map(fn(Transformer $t, Parameter $p): string => $t->cTypePrefix() . " " . $p->name . $t->cTypeSuffix(), array_map(fn(Parameter $p) => Transformer::get($p->type), $command->parameters), $command->parameters)) . ");";
}

// quick and dirty organization of these to try and sum up some categories
function tag(string $key): string {
    if(preg_match("/^u?int[0-9]+_t *\\[[0-9A-Z_]+]$/", $key)) {
        return "Primitive Array";
    }
    if(preg_match("/^float *\\[[0-9A-Z_]+]$/", $key)) {
        return "Primitive Array";
    }
    if(preg_match("/^float *\\[[0-9A-Z_]+][[0-9A-Z_]+]$/", $key)) {
        return "Primitive 2D Array";
    }
    if(preg_match("/^const u?int[0-9]+_t *\\[[0-9A-Z_]+]$/", $key)) {
        return "Const Primitive Array";
    }
    if(preg_match("/^const float *\\[[0-9A-Z_]+]$/", $key)) {
        return "Const Primitive Array";
    }
    if(preg_match("/^Vk[a-zA-Z0-9]+$/", $key)) {
        return "Plain Vulkan Type";
    }
    if(preg_match("/^Vk[a-zA-Z0-9]+ *:[0-9]+$/", $key)) {
        return "Plain Vulkan Type with Bitfield";
    }
    if(preg_match("/^[a-zA-Z0-9_]+$/", $key)) {
        return "Plain Unknown Type";
    }
    if(preg_match("/^Vk[a-zA-Z0-9]+ *\\[[0-9A-Z_]+]$/", $key)) {
        return "Vulkan Type Array";
    }
    if(preg_match("/^(const )?[a-zA-Z0-9]+ *\\[[0-9A-Z_]+]$/", $key)) {
        return "Non-Vulkan Type Array";
    }
    if(preg_match("/^PFN_.+$/", $key)) {
        return "Vulkan Function Pointer";
    }
    if(preg_match("/^const Vk[a-zA-Z0-9_]+\\*$/", $key)) {
        return "Const Vulkan Pointer";
    }
    if(preg_match("/^Vk[a-zA-Z0-9_]+\\*$/", $key)) {
        return "Vulkan Pointer";
    }
    if(preg_match("/^const (struct )?[a-zA-Z0-9_]+\\*$/", $key)) {
        return "Const Non-Vulkan Pointer";
    }
    if(preg_match("/^(struct )?[a-zA-Z0-9_]+\\*$/", $key)) {
        return "Non-Vulkan Pointer";
    }
    if(str_contains($key, "**") || str_contains($key, "* const*")) {
        return "Miscellaneous Double Pointer";
    }
    return "UNKNOWN";
}

if(REPORT) {
// Some reporting - usually hack around this or dump it into the README
    arsort($notOkayTypes);
    echo "- total number of unique incomplete types: " . count($notOkayTypes) . "\n\n";
    echo "number of types by usages:\n";
    echo "- more than 5 usages: " . count(array_filter($notOkayTypes, fn(int $x) => $x > 5)) . "\n";
    $uniqueByTag = [];
    $usagesByTag = [];
    for ($i = 5; $i > 0; $i--) {
        echo "- $i usages: " . count(array_filter($notOkayTypes, fn(int $x) => $x === $i)) . "\n";
    }
    echo "types:\n";
    foreach (($notOkayTypes) as $key => $count) {
        echo "- $key ($count)\n";
        $tag = tag($key);
        $uniqueByTag[$tag] ??= 0;
        $usagesByTag[$tag] ??= 0;
        $uniqueByTag[$tag]++;
        $usagesByTag[$tag] += $count;
    }
    echo "\n";
    arsort($uniqueByTag);
    arsort($usagesByTag);
    echo "\nunique types by tag:\n";
    foreach ($uniqueByTag as $tag => $count) {
        echo "- $tag ($count)\n";
    }
    echo "\nusages by tag:\n";
    foreach ($usagesByTag as $tag => $count) {
        echo "- $tag ($count)\n";
    }
}
// Add in loader function
$cdefs[] = "void* vkGetInstanceProcAddr(VkInstance, const char*);";
$cdefs[] = "void* vkGetDeviceProcAddr(VkDevice, const char*);";

foreach($structFiles as $fileName => $structFile) {
    file_put_contents($fileName, $printer->printFile($structFile));
}
foreach($extensionFiles as $fileName => $extensionFile) {
    file_put_contents($fileName, $printer->printFile($extensionFile));
}
file_put_contents($targetDirectory . "/Vulkan.php", $printer->printFile($vulkanFile));
file_put_contents($targetDirectory . "/vulkan.h", implode("\n", $cdefs));
