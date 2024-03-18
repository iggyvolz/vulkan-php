<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkIndexType: int
{
    case Uint16 = 0;
    case Uint32 = 1;
    case NoneKhr = 1000165000;
    case Uint8Khr = 1000265000;
}
