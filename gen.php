<?php

use FFI\CData;
use iggyvolz\vulkan\enum\VkResult;
use iggyvolz\vulkan\generator\Registry\EnumType;
use iggyvolz\vulkan\generator\Registry\Registry;
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
//file_put_contents(__DIR__ . "/registry.json", json_encode($registry, flags: JSON_PRETTY_PRINT));
$printer = new PsrPrinter();

$cdefsClass = ($cdefsFile = new PhpFile())->setStrictTypes()->addNamespace("iggyvolz\\vulkan")->addClass("CDefs")->setFinal();
$cdefsClass->addImplement(Stringable::class);
$cdefsClass->addMethod("__toString")->addBody('return implode("\n", $this->cdefs);');
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
    if($isOkay) $okayMethods++;
}
$pctMethods = round(100 * ($okayMethods / $totalMethods), 2);
echo "$okayStructs/$totalStructs ($pctStructs%) structs are complete\n";
echo "$okayStructMembers/$totalStructMembers ($pctMembers%) struct members are complete\n";
echo "$okayMethods/$totalMethods ($pctMethods%) methods are callable\n";
arsort($notOkayTypes);
foreach(($notOkayTypes) as $key => $count) {
    if($count < 5) continue;
    echo "- $key ($count)\n";
}
file_put_contents($targetDirectory . "/Vulkan.php", $printer->printFile($vulkanFile));
file_put_contents($targetDirectory . "/CDefs.php", $printer->printFile($cdefsFile));
