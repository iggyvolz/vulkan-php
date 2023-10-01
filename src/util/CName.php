<?php

namespace iggyvolz\vulkan\util;

use Iggyvolz\SimpleAttributeReflection\AttributeReflection;
use ReflectionClass;
use ReflectionClassConstant;
use ReflectionFunctionAbstract;
use ReflectionParameter;
use ReflectionProperty;

/**
 * Represents the name in C that an element refers to
 */
#[\Attribute]
readonly final class CName
{
    public function __construct(public string $name)
    {
    }

    /**
     * Retrieves the name in C that an element refers to.
     */
    public static function get(ReflectionFunctionAbstract|ReflectionClass|ReflectionProperty|ReflectionClassConstant|ReflectionParameter $target): string
    {
        return AttributeReflection::getAttribute($target, self::class)?->name ?? throw new \LogicException($target->getName() . " does not have a CName attribute");
    }
}