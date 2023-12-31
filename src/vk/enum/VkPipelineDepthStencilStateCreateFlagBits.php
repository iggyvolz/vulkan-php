<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkPipelineDepthStencilStateCreateFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case RasterizationOrderAttachmentDepthAccessBitExt = 0;
    case RasterizationOrderAttachmentStencilAccessBitExt = 1;
}
