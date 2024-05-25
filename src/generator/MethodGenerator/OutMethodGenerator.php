<?php

namespace iggyvolz\vulkan\generator\MethodGenerator;

use iggyvolz\vulkan\generator\Registry\Command\Command;
use iggyvolz\vulkan\generator\Registry\Command\Parameter;
use iggyvolz\vulkan\generator\Transformer\NonConstPointerTransformer;
use iggyvolz\vulkan\generator\Transformer\Transformer;
use Nette\PhpGenerator\ClassType;

readonly class OutMethodGenerator extends MethodGenerator
{
    #[\Override]
    public static function generate(ClassType $class, Command $command): void
    {
        if(!$class->hasMethod($command->name))
        {
            $paramNames = array_map(fn(Parameter $p) => $p->name . ":" . $p->type, $command->parameters);
            $outIndex = array_key_first(array_filter($command->parameters, fn(Parameter $p) => Transformer::get($p->type) instanceof NonConstPointerTransformer));
            $outTransformer = Transformer::get($command->parameters[$outIndex]->type);
            $method = $class->addMethod($command->name);
            $method->addComment($outTransformer->phpDocType());
            $method->setReturnType($outTransformer->phpType());
            foreach($command->parameters as $i => $parameter) {
                if($i === $outIndex) continue; // skip
                $param = $method->addParameter($parameter->name);
                $paramTypeTransformer = transformer($parameter->type);
                $param->setType($paramTypeTransformer->phpType());
                $method->addComment("@param ".$paramTypeTransformer->phpDocType()." \$$parameter->name");
                $method->addBody("\$phpValue = \$$parameter->name;");
                $method->addBody("// $parameter->type => " . get_class($paramTypeTransformer));
                $method->addBody($paramTypeTransformer->toC());
                $method->addBody("\$$parameter->name = \$cValue;");
            }
            // TODO this is a misnomer - $pProperties is really a Properties object here
            $method->addBody("\$" . $command->parameters[$outIndex]->name . " = \$this->vulkan->ffi->new(". var_export(substr($outTransformer->cTypePrefix(), 0, -1), true) .", owned: false);");
            if($command->type === "VkResult") {
                $method->addBody("\\iggyvolz\\vulkan\\enum\\VkResult::from(\$this->vulkan->call(");
            } else {
                $method->addBody("\$this->vulkan->call(");
            }
            $method->addBody("\t" . var_export($command->name, true) . ",");
            foreach($command->parameters as $i => $parameter) {
                if($i === $outIndex) {
                    $method->addBody("\t\\FFI::addr(\$$parameter->name),");
                } else {
                    $method->addBody("\t\$$parameter->name,");
                }
            }
            if($command->type === "VkResult") {
                $method->addBody("))->assert();");
            } else {
                $method->addBody(");");
            }
            $method->addBody("return new " . $outTransformer->phpType() . "(\$". $command->parameters[$outIndex]->name .");");

//            $pp = $this->vulkan->ffi->new("type", owned: false);
//            $this->vulkan->call("vkGetPhysicalDeviceProperties", $physicalDevice, \FFI::addr($result));
//            return new VkPhysicalDeviceProperties($result);
        }
    }

    public static function isValid(ClassType $class, Command $command): bool
    {
        $ok = count(array_filter($command->parameters, fn(Parameter $p) => Transformer::get($p->type) instanceof NonConstPointerTransformer)) === 1;
        if(!$ok) return false;
        if($command->type !== "void" && $command->type !== "VkResult") return false;
        echo $command->name . PHP_EOL;
        return true;
    }
}
