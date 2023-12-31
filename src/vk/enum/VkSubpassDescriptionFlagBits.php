<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkSubpassDescriptionFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case PerViewAttributesBitNvx = 0;
    case PerViewPositionXOnlyBitNvx = 1;
    case FragmentRegionBitQcom = 2;
    case ShaderResolveBitQcom = 3;
    case RasterizationOrderAttachmentColorAccessBitExt = 4;
    case RasterizationOrderAttachmentDepthAccessBitExt = 5;
    case RasterizationOrderAttachmentStencilAccessBitExt = 6;
    case EnableLegacyDitheringBitExt = 7;
}
