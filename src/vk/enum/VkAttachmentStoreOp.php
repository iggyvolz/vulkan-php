<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkAttachmentStoreOp: int
{
    case Store = 0;
    case DontCare = 1;
}
