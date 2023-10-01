<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkDiscardRectangleModeEXT: int
{
    case Inclusive = 0;
    case Exclusive = 1;
}
