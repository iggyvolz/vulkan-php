<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkSamplerCreateFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case SubsampledBitExt = 0;
    case SubsampledCoarseReconstructionBitExt = 1;
    case DescriptorBufferCaptureReplayBitExt = 3;
    case NonSeamlessCubeMapBitExt = 2;
    case ImageProcessingBitQcom = 4;
}
