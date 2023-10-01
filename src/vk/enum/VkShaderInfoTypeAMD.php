<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkShaderInfoTypeAMD: int
{
    case Statistics = 0;
    case Binary = 1;
    case Disassembly = 2;
}
