<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkShaderCodeTypeEXT: int
{
    case Binary = 0;
    case Spirv = 1;
}
