<?php

namespace iggyvolz\vulkan\generator\MethodGenerator;

use iggyvolz\vulkan\generator\Registry\Command\Command;
use iggyvolz\vulkan\generator\Registry\Command\Parameter;
use iggyvolz\vulkan\generator\Transformer\NonConstPointerTransformer;
use iggyvolz\vulkan\generator\Transformer\Transformer;
use Nette\PhpGenerator\ClassType;

readonly class EnumMethodGenerator extends MethodGenerator
{
    #[\Override]
    public static function generate(ClassType $class, Command $command): void
    {
        if(!$class->hasMethod($command->name))
        {
            $paramNames = array_map(fn(Parameter $p) => $p->name . ":" . $p->type, $command->parameters);
            $countIndex = array_key_first(array_filter($command->parameters, fn(Parameter $p) => str_ends_with($p->name, "Count") && $p->type === "uint32_t*"));
            $outIndeces = array_keys(array_filter($command->parameters, fn(Parameter $p, int $i) => $i !== $countIndex && Transformer::get($p->type) instanceof NonConstPointerTransformer, ARRAY_FILTER_USE_BOTH));
            $method = $class->addMethod($command->name);
            $method->setReturnType("array");
            foreach($command->parameters as $i => $parameter) {
                if($i === $countIndex) continue; // skip
                if(in_array($i, $outIndeces)) continue;
                $param = $method->addParameter($parameter->name);
                $paramTypeTransformer = transformer($parameter->type);
                $param->setType($paramTypeTransformer->phpType());
                $method->addComment("@param ".$paramTypeTransformer->phpDocType()." \$$parameter->name");
                $method->addBody("\$phpValue = \$$parameter->name;");
                $method->addBody("// $parameter->type => " . get_class($paramTypeTransformer));
                $method->addBody($paramTypeTransformer->toC());
                $method->addBody("\$$parameter->name = \$cValue;");
            }
            $method->addBody("\$count = \$this->vulkan->ffi->new(\"uint32_t\");");
            $method->addBody("\$this->vulkan->call(");
            $method->addBody("\t" . var_export($command->name, true) . ",");
            foreach($command->parameters as $i => $parameter) {
                if($i === $countIndex) {
                    $method->addBody("\t\\FFI::addr(\$count),");
                } elseif(in_array($i, $outIndeces)) {
                    $method->addBody("\tnull,");
                } else {
                    $method->addBody("\t\$$parameter->name,");
                }
            }
            $method->addBody(");");
            foreach($outIndeces as $outIndex) {
                $method->addBody("\$" . $command->parameters[$outIndex]->name . " = null;");
            }
            $method->addBody("do {");
            $method->addBody("\tif(\$count->cdata === 0) return [];");
            foreach($outIndeces as $outIndex) {
                $param = $command->parameters[$outIndex];
                $method->addBody("\tif(!is_null(\$$param->name)) \$this->vulkan->ffi->free(\$$param->name);");
                $method->addBody("\t\$$param->name = \$this->vulkan->ffi->new(" . var_export(substr($param->type, 0, -1) . "[", true) . " . \$count->cdata . \"]\", false);");
            }
            $method->addBody("\t\$result = \\iggyvolz\\vulkan\\enum\\VkResult::from(\$this->vulkan->call(");
            $method->addBody("\t\t" . var_export($command->name, true) . ",");
            foreach($command->parameters as $i => $parameter) {
                if($i === $countIndex) {
                    $method->addBody("\t\t\\FFI::addr(\$count),");
                } elseif(in_array($i, $outIndeces)) {
                    $param = $command->parameters[$i];
                    $method->addBody("\t\t\$$param->name,");
                } else {
                    $method->addBody("\t\t\$$parameter->name,");
                }
            }
            $method->addBody("\t))->assert(\\iggyvolz\\vulkan\\enum\\VkResult::Incomplete);");
            $method->addBody("} while(\$result === \\iggyvolz\\vulkan\\enum\\VkResult::Incomplete);");
            if(count($outIndeces) === 1) {
                $param = $command->parameters[$outIndeces[0]];
                $transformer = \transformer($param->type);
                $method->addComment("@return list<" . $transformer->phpDocType() . ">");
                $type = $transformer->phpType();
                // TODO massive memory leak here, woo - we should own the array and copy out
                $method->addBody("return array_map(fn(int \$i): $type => new $type(\$$param->name[\$i]), range(0, \$count->cdata - 1));");
            } else {
                // Return the arrays of things
                $method->addBody("// TODO");
            }
        }
    }

    public static function isValid(ClassType $class, Command $command): bool
    {
        if(!str_starts_with($command->name, "vkEnumerate") || $command->type !== "VkResult") return false;
        return count(array_filter($command->parameters, fn(Parameter $p) => str_ends_with($p->name, "Count") && $p->type === "uint32_t*")) === 1;
    }
}

//$count = $this->vulkan->ffi->new("uint32_t", owned: false);
//$this->vulkan->call("vkEnumeratePhysicalDevices", $instance, \FFI::addr($count), null);
//$ptr = null;
//do {
//    if($count->cdata === 0) return [];
//    if(!is_null($ptr)) $this->vulkan->ffi->free($ptr);
//    $ptr = $this->vulkan->ffi->new("VkPhysicalDevice[" . $count->cdata . "]", false);
//    $result = VkResult::from($this->vulkan->call("vkEnumeratePhysicalDevices", $instance, \FFI::addr($count), $ptr))->assert(VkResult::Incomplete);
//} while($result === VkResult::Incomplete);
//return array_map(fn(int $i): VkPhysicalDevice => new VkPhysicalDevice($ptr[$i]), range(0, $count->cdata - 1));