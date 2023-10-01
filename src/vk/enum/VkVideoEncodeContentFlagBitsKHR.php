<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkVideoEncodeContentFlagBitsKHR: int
{
    case Camera = 0;
    case Desktop = 1;
    case Rendered = 2;
}
