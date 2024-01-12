<?php

use FFI\CData;
use iggyvolz\vulkan\enum\VkResult;
use iggyvolz\vulkan\generator\Registry\Command\Parameter;
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
use iggyvolz\vulkan\util\VulkanInstanceBase;
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
    $constructor->addPromotedParameter("vulkan")->addComment("@internal")->setPublic()->setType(Vulkan::class);
    $cdefs[] = "typedef void* $handle->name;";

    // Put a temporary copy of the file, some methods could get added later that's fine
    file_put_contents($filename, $printer->printFile($file));
}
$totalStructs = 0;
$totalStructMembers = 0;
$okayStructs = 0;
$okayStructMembers = 0;
foreach($registry->getTypes(Struct::class) as $struct) {
    $structIsOkay = true;
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
    $constructor->addPromotedParameter("vulkan")->addComment("@internal")->setPublic()->setType(Vulkan::class);
    $create = $class->addMethod("create")->setPublic()->setStatic()->setReturnType("self");
    $create->addParameter("vulkan")->setType(Vulkan::class);
    $create->addBody('$self = new self( $vulkan->ffi->new(' . var_export($struct->name, true) . ', false), $vulkan);');
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
        $getter->addBody('$ffi = $this->vulkan->ffi;');
        $getter->addBody('$cValue = $this->cdata->' . $member->name . ';');
        $getter->addBody($memberType->fromC());
        $getter->addBody('return $phpValue;');
        $getter->setReturnType($memberType->phpType());
        $setter = $class->addMethod("set" . ucfirst($member->name))->setReturnType('void');
        $setter->addParameter("phpValue")->setType($memberType->phpType());
        $setter->addBody('$ffi = $this->vulkan->ffi;');
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
    if($structIsOkay) $okayStructs++;
    $totalStructs++;
    // Put a temporary copy of the file, some methods could get added later that's fine
    file_put_contents($filename, $printer->printFile($file));
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
    $returnTypeTransformer = Transformer::get($command->type);
    if($returnTypeTransformer instanceof DummyTransformer) {
        $isOkay = false;
        registerNotOkayType($command->type);
    }
    $cdef = "typedef " . $returnTypeTransformer->cTypePrefix() . " (*PFN_PHP_" . $command->name . ")(";
    $methodName = lcfirst(substr($command->name, 2));
    $phpParameters = $command->parameters; // Parameters that will be used by PHP (skips the first if $this is used as context)
    if(in_array($command->parameters[0]->type, ["VkCommandBuffer", "VkDevice", "VkPhysicalDevice", "VkInstance", "VkQueue"])) {
        $targetClass = $structClasses[$command->parameters[0]->type];
        array_shift($phpParameters);
        $phpParameters = array_values($phpParameters);
    } else {
        $targetClass = $vulkanClass;
    }
    $method = $targetClass->addMethod($methodName);
    if(str_starts_with($methodName, "enumerate")) {
        // Create a method that does the "make a pointer, call the function with null, then allocate an array(s) with that many things then re-call
        $counts = array_filter($phpParameters, fn(Parameter $parameter) => str_ends_with($parameter->name, "Count"));
        if(count($counts) !== 1) goto skip;
        $countIndex = array_key_first($counts);
        if(count($phpParameters) !== $countIndex + 2) goto skip; // todo support items with multiple entries (currently (enumeratePhysicalDeviceQueueFamilyPerformanceQueryCountersKHR)
        $itemsParam = $phpParameters[array_key_last($phpParameters)];
        if(!str_ends_with($itemsParam->type, "*")) {
            goto skip;
        }
        $entryTransformer = Transformer::get(substr($itemsParam->type, 0, -1));
        $getMethod = $targetClass->addMethod("get" . substr($methodName, strlen("enumerate")));
        $getMethod->setReturnType("array");
//        $count = IntPointer::new("uint32_t", $this->vulkan);
//        $this->enumerateInstanceExtensionProperties(...[...\func_get_args(), $count, ObjectPointer::null()])->assert(VkResult::Incomplete);
//        $ptr = ObjectPointer::new($this->vulkan, "VkExtensionProperties", $count->get());
//        $this->enumerateInstanceExtensionProperties(...[...\func_get_args(), $count, $ptr])->assert();
//        return $ptr->getLen($count->get());
        $vulkanRef = "\$this" . ($targetClass->getName() === "Vulkan" ? "" : "->vulkan");
        $getMethod->addBody("\$count = \\iggyvolz\\vulkan\\util\\IntPointer::new('uint32_t', $vulkanRef);");
        $getMethod->addBody("\$this->$methodName(...[...\\func_get_args(), \$count, \\iggyvolz\\vulkan\\util\\ObjectPointer::null($vulkanRef)])->assert(\\iggyvolz\\vulkan\\enum\\VkResult::Incomplete);");
        $getMethod->addBody("\$ptr = \\iggyvolz\\vulkan\\util\\ObjectPointer::new($vulkanRef, ". var_export($entryTransformer->phpType(), true).", \$count->get());");
        $getMethod->addBody("\$this->$methodName(...[...\\func_get_args(), \$count, \$ptr])->assert();");
        $getMethod->addBody("return \$ptr->getLen(\$count->get());");
        foreach($phpParameters as $parameter) {
            if(str_ends_with($parameter->name, "Count")) break; // Reached the count param
            $param = $getMethod->addParameter($parameter->name);
            $paramTransformer = Transformer::get($parameter->type);
            $param->setType($paramTransformer->phpType());
            $getMethod->addComment("@param " . $paramTransformer->phpDocType() . " $parameter->name");
        }
        $getMethod->addComment("@return list<" . $entryTransformer->phpDocType() . ">");
        skip:
    }
    $cdef .= implode(",", array_map(fn(Transformer $t, Parameter $p): string => $t->cTypePrefix() . " " . $p->name . $t->cTypeSuffix(), array_map(fn(Parameter $p) => Transformer::get($p->type), $command->parameters), $command->parameters));
    foreach($phpParameters as $parameter) {
        $paramType = Transformer::get($parameter->type);
        if($paramType instanceof DummyTransformer)
        {
            $isOkay = false;
            registerNotOkayType($parameter->type);
        }
        $param = $method->addParameter($parameter->name);
        $param->setType($paramType->phpType());
        $method->addComment("@param " . $paramType->phpDocType() . " \$$parameter->name $parameter->type");
        $method->addBody("\$phpValue = \$$parameter->name;");
        $method->addBody($paramType->toC());
        $method->addBody("\${$parameter->name}C = \$cValue;");
    }
    $method->addBody('$cValue = $this->exec(' . var_export($command->name, true) . ',');
    foreach($phpParameters as $parameter) {
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
    $cdefs[] = $cdef;
    $totalMethods++;
    if($isOkay) $okayMethods++; else $notOkayMethods[] = $method->getName();
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
    for ($i = 5; $i > 0; $i--) {
        echo "- $i usages: " . count(array_filter($notOkayTypes, fn(int $x) => $x === $i)) . "\n";
    }
//echo "\nPlain Vulkan Type by count:\n";
    foreach (($notOkayTypes) as $key => $count) {
        $tag = tag($key);
        $uniqueByTag[$tag] ??= 0;
        $usagesByTag[$tag] ??= 0;
        $uniqueByTag[$tag]++;
        $usagesByTag[$tag] += $count;
//    if($tag === "Plain Vulkan Type") echo "- $key ($count) [$tag]\n";
    }
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
file_put_contents($targetDirectory . "/Vulkan.php", $printer->printFile($vulkanFile));
file_put_contents($targetDirectory . "/vulkan.h", implode("\n", $cdefs));
