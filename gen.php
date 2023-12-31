<?php

use FFI\CData;
use iggyvolz\vulkan\enum\VkResult;
use iggyvolz\vulkan\generator\Registry\EnumType;
use iggyvolz\vulkan\generator\Registry\Registry;
use iggyvolz\vulkan\generator\Registry\Type\Bitmask;
use iggyvolz\vulkan\generator\Registry\Type\Enum;
use iggyvolz\vulkan\generator\Registry\Type\Handle;
use iggyvolz\vulkan\generator\Registry\Type\Struct;
use iggyvolz\vulkan\generator\Transformer\DummyTransformer;
use iggyvolz\vulkan\generator\Transformer\Transformer;
use iggyvolz\vulkan\generator\Transformer\VoidTransformer;
use iggyvolz\vulkan\util\BitmapEnum;
use iggyvolz\vulkan\util\ResultEvent;
use iggyvolz\vulkan\util\VkResultAssert;
use iggyvolz\vulkan\util\VulkanBase;
use iggyvolz\vulkan\Vulkan;
use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\PsrPrinter;

require_once __DIR__ . "/vendor/autoload.php";
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
function registerNotOkayType(string $type): void
{
    global $notOkayTypes;
    $notOkayTypes[$type] ??= 0;
    $notOkayTypes[$type]++;
}
removeDirectory($targetDirectory);
mkdir($targetDirectory);
mkdir("$targetDirectory/enum");
mkdir("$targetDirectory/struct");
mkdir("$targetDirectory/event");
$registry = Registry::get(cacheDirectory: __DIR__ . "/cache");
file_put_contents(__DIR__ . "/registry.json", json_encode($registry, flags: JSON_PRETTY_PRINT));
ob_start();
var_dump($registry);
file_put_contents(__DIR__ . "/registry.txt", ob_get_clean());
$printer = new PsrPrinter();

$cdefsClass = ($cdefsFile = new PhpFile())->setStrictTypes()->addNamespace("iggyvolz\\vulkan")->addClass("CDefs")->setFinal();
$cdefsClass->addImplement(Stringable::class);
$cdefsClass->addMethod("__toString")->setReturnType("string")->addBody('return implode("\n", $this->cdefs);');
$cdefsClass->addProperty("cdefs", [])->setType("array")->addComment("@var list<string>")->setPrivate();
$cdefsConstructor = $cdefsClass->addMethod("__construct")->setPublic();
$cdefsAdd = $cdefsClass->addMethod("addExtension")->setReturnType("void");
$cdefsAdd->addParameter("extension")->setType("string");
function addCDef(string $cdef, ?string $extension = null): void
{
    global $cdefsConstructor, $cdefsAdd;
    if(is_null($extension)) {
        $cdefsConstructor->addBody('$this->cdefs[] = ' . var_export($cdef, true) . ';');
    } else {
        $cdefsAdd->addBody('if($extension === '. var_export($extension, true).') $this->cdefs[] = ' . var_export($cdef, true) . ';');
    }
}
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
    addCDef("typedef int $enum->name;");
}
// handle flagbits types
foreach($registry->getTypes(Bitmask::class) as $bitmask) {
    addCDef("typedef int $bitmask->name;");
}
// Generate events for each VkResult
foreach(VkResult::cases() as $result) {
    $file = new PhpFile();
    $file->setStrictTypes();
    $namespace = $file->addNamespace("iggyvolz\\vulkan\\event");
    $className = $result->name . "Event";
    if(str_starts_with($className, "Error")) {
        $className = substr($className, strlen("Error"));
    }
    $eventClass = $namespace->addClass("$className")->setFinal()->setReadOnly()->setExtends(ResultEvent::class);
    $eventClass->addMethod("__construct")->addBody("parent::__construct(\\".VkResult::class."::$result->name);");
    file_put_contents($targetDirectory . "/event/$className.php", $printer->printFile($file));
}
function nullable(string $type): string
{
    if($type === "mixed" || str_contains($type, "?")) {
        return $type;
    } else {
        return "null|$type";
    }
}



foreach($registry->getTypes(Handle::class) as $handle) {
    $file = new PhpFile();
    $file->setStrictTypes();
    $namespace = $file->addNamespace("iggyvolz\\vulkan\\struct");
    $class = $namespace->addClass($handle->name)->setFinal();
    $constructor = $class->addMethod("__construct");
    $constructor->addComment("@internal");
    $constructor->addPromotedParameter("cdata")->addComment("@internal")->setPublic()->setType(CData::class);
    $constructor->addPromotedParameter("ffi")->addComment("@internal")->setPublic()->setType(FFI::class);
    file_put_contents($targetDirectory . "/struct/$handle->name.php", $printer->printFile($file));
    addCDef("typedef void* $handle->name;");
}
$totalStructs = 0;
$totalStructMembers = 0;
$okayStructs = 0;
$okayStructMembers = 0;
foreach($registry->getTypes(Struct::class) as $struct) {
    $structIsOkay = true;
    $file = new PhpFile();
    $file->setStrictTypes();
    $namespace = $file->addNamespace("iggyvolz\\vulkan\\struct");
    $class = $namespace->addClass($struct->name)->setFinal();
    $constructor = $class->addMethod("__construct");
    $constructor->addComment("@internal");
    $constructor->addPromotedParameter("cdata")->addComment("@internal")->setPublic()->setType(CData::class);
    $constructor->addPromotedParameter("ffi")->addComment("@internal")->setPublic()->setType(FFI::class);
    $create = $class->addMethod("create")->setPublic()->setStatic()->setReturnType("self");
    $create->addParameter("vulkan")->setType(Vulkan::class);
    $create->addBody('$self = new self( $vulkan->ffi->new(' . var_export($struct->name, true) . ', false), $vulkan->ffi);');
//    $class->addMethod("__destruct")->addBody('\FFI::free($this->cdata);');
    $cdef = "typedef struct {";
    foreach($struct->members as $member) {
        $memberType = Transformer::get($member->type);
        if($memberType instanceof DummyTransformer){
            $structIsOkay = false;
            registerNotOkayType($member->type);
        } else {
            $okayStructMembers++;
        }
        $totalStructMembers++;
        $getter = $class->addMethod("get" . ucfirst($member->name));
        $getter->addBody('$ffi = $this->ffi;');
        $getter->addBody('$cValue = $this->cdata->' . $member->name . ';');
        $getter->addBody($memberType->fromC());
        $getter->addBody('return $phpValue;');
        $getter->setReturnType($memberType->phpType());
        $setter = $class->addMethod("set" . ucfirst($member->name))->setReturnType('void');
        $setter->addParameter("phpValue")->setType($memberType->phpType());
        $setter->addBody('$ffi = $this->ffi;');
        $setter->addBody($memberType->toC());
        $setter->addBody('$this->cdata->' . $member->name . ' = $cValue;');
        $create->addParameter($member->name)->setType(nullable($memberType->phpType()))->setDefaultValue(null);
        $create->addBody('if(!is_null($' . $member->name . ')) $self->set' . ucfirst($member->name) . '($' . $member->name . ');');
        $getter->addComment($memberType->cTypePrefix() . "/" . $memberType->cTypeSuffix());
        $cdef.=$memberType->cTypePrefix() . ' ' . $member->name . ' ' . $memberType->cTypeSuffix() . ';';
    }
    $create->addBody('return $self;');
    file_put_contents($targetDirectory . "/struct/$struct->name.php", $printer->printFile($file));
    $cdef .= "} $struct->name;";
    addCDef($cdef);
    if($structIsOkay) $okayStructs++;
    $totalStructs++;
}
$pctStructs = round(100 * ($okayStructs / $totalStructs), 2);
$pctMembers = round(100 * ($okayStructMembers / $totalStructMembers), 2);

$vulkanClass = ($vulkanFile = new PhpFile())->setStrictTypes()->addNamespace("iggyvolz\\vulkan")->addClass("Vulkan");
$vulkanClass->addTrait(VulkanBase::class);
$totalMethods = 0;
$okayMethods = 0;
$notOkayMethods=[];
foreach ($registry->commands as $command) {
    $isOkay = true;
    $method = $vulkanClass->addMethod($command->name);
    $returnTypeTransformer = Transformer::get($command->type);
    if($returnTypeTransformer instanceof DummyTransformer) {
        $isOkay = false;
        registerNotOkayType($command->type);
    }
    $cdef = $returnTypeTransformer->cTypePrefix() . " " . $command->name . "(";
    $first = true;
    foreach($command->parameters as $parameter) {
        if($first) {
            $first = false;
        } else {
            $cdef .= ",";
        }
        $param = $method->addParameter($parameter->name);
        $paramType = Transformer::get($parameter->type);
        if($paramType instanceof DummyTransformer)
        {
            $isOkay = false;
            registerNotOkayType($parameter->type);
        }
        $param->setType($paramType->phpType());
        $method->addComment("@param " . $paramType->phpDocType() . " \$$parameter->name $parameter->type");
        $method->addBody("\$phpValue = \$$parameter->name;");
        $method->addBody($paramType->toC());
        $method->addBody("\${$parameter->name}C = \$cValue;");
        $cdef .= $paramType->cTypePrefix() . " " . $parameter->name . $paramType->cTypeSuffix();
    }
    $method->addBody("\$cValue = \$this->ffi->$command->name(");
    foreach($command->parameters as $parameter) {
        $method->addBody("    \${$parameter->name}C,");
    }
    $method->addBody(");");
    if($returnTypeTransformer instanceof VoidTransformer) {
        $method->setReturnType("void");
    } else {
        $method->addComment("returns $command->type");
        $method->setReturnType($returnTypeTransformer->phpType());
        $method->addBody($returnTypeTransformer->fromC());
        $method->addBody('return $phpValue;');
    }
    $cdef .= ");";
    foreach($command->availableIn as $featureOrExtension) {
        addCDef($cdef, $featureOrExtension);
    }
    $totalMethods++;
    if($isOkay) $okayMethods++; else $notOkayMethods[] = $method->getName();
}
// Some reporting - usually hack around this or dump it into the README
$pctMethods = round(100 * ($okayMethods / $totalMethods), 2);
echo "- $okayStructs/$totalStructs ($pctStructs%) structs are complete\n";
echo "- $okayStructMembers/$totalStructMembers ($pctMembers%) struct members are complete\n";
echo "- $okayMethods/$totalMethods ($pctMethods%) methods are callable\n";
arsort($notOkayTypes);
echo "- total number of unique incomplete types: " . count($notOkayTypes) . "\n\n";
echo "number of types by usages:\n";
echo "- more than 5 usages: " . count(array_filter($notOkayTypes, fn(int $x) => $x > 5)) . "\n";
$uniqueByTag = [];
$usagesByTag = [];
for($i = 5; $i > 0; $i--) {
    echo "- $i usages: " . count(array_filter($notOkayTypes, fn(int $x) => $x === $i)) . "\n";
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
//echo "\nPlain Vulkan Type by count:\n";
foreach(($notOkayTypes) as $key => $count) {
    $tag = tag($key);
    $uniqueByTag[$tag] ??= 0;
    $usagesByTag[$tag] ??= 0;
    $uniqueByTag[$tag]++;
    $usagesByTag[$tag]+=$count;
//    if($tag === "Plain Vulkan Type") echo "- $key ($count) [$tag]\n";
}

arsort($uniqueByTag);
arsort($usagesByTag);
echo "\nunique types by tag:\n";
foreach($uniqueByTag as $tag => $count) {
    echo "- $tag ($count)\n";
}
echo "\nusages by tag:\n";
foreach($usagesByTag as $tag => $count) {
    echo "- $tag ($count)\n";
}
file_put_contents($targetDirectory . "/Vulkan.php", $printer->printFile($vulkanFile));
file_put_contents($targetDirectory . "/CDefs.php", $printer->printFile($cdefsFile));
