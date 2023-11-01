<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkAttachmentDescriptionFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case MayAlias = 0;
}
