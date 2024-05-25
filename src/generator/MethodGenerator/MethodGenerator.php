<?php

namespace iggyvolz\vulkan\generator\MethodGenerator;

use iggyvolz\vulkan\generator\Registry\Command\Command;
use iggyvolz\vulkan\generator\Registry\Command\Parameter;
use Nette\PhpGenerator\ClassType;
use function transformer;

abstract readonly class MethodGenerator
{
    public static function generate(ClassType $class, Command $command): void
    {
        if(EnumMethodGenerator::isValid($class, $command)) {
            EnumMethodGenerator::generate($class, $command);
            return;
        }
        if(OutMethodGenerator::isValid($class, $command)) {
            OutMethodGenerator::generate($class, $command);
            return;
        }
        if(!$class->hasMethod($command->name))
        {
            $method = $class->addMethod($command->name);
            $returnTypeTransformer = transformer($command->type);
            $method->setReturnType($returnTypeTransformer->phpType());
            foreach($command->parameters as $parameter) {
                $param = $method->addParameter($parameter->name);
                $paramTypeTransformer = transformer($parameter->type);
                $param->setType($paramTypeTransformer->phpType());
                $method->addComment("@param ".$paramTypeTransformer->phpDocType()." \$$parameter->name");
                $method->addBody("\$phpValue = \$$parameter->name;");
                $method->addBody("// $parameter->type => " . get_class($paramTypeTransformer));
                $method->addBody($paramTypeTransformer->toC());
                $method->addBody("\$$parameter->name = \$cValue;");
            }
            $method->addBody("\$cValue = \$this->vulkan->call(\"$command->name\", " . implode(", ", array_map(fn(Parameter $p) => "\$$p->name", $command->parameters)) . ");");

            if($returnTypeTransformer->phpType() !== "void") {
                $method->addBody("// $command->type => " . get_class($returnTypeTransformer));
                $method->addBody($returnTypeTransformer->fromC());
                $method->addBody("return \$phpValue;");
            }
            $method->addComment("@return " . $returnTypeTransformer->phpDocType());
        }
    }
}