<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkValidationFeatureDisableEXT: int
{
    case All = 0;
    case Shaders = 1;
    case ThreadSafety = 2;
    case ApiParameters = 3;
    case ObjectLifetimes = 4;
    case CoreChecks = 5;
    case UniqueHandles = 6;
    case ShaderValidationCache = 7;
}
