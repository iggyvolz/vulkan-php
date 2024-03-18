<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkAttachmentLoadOp: int
{
    case Load = 0;
    case Clear = 1;
    case DontCare = 2;
    case NoneKhr = 1000400000;
}
