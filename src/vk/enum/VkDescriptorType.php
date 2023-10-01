<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkDescriptorType: int
{
    case Sampler = 0;
    case CombinedImageSampler = 1;
    case SampledImage = 2;
    case StorageImage = 3;
    case UniformTexelBuffer = 4;
    case StorageTexelBuffer = 5;
    case UniformBuffer = 6;
    case StorageBuffer = 7;
    case UniformBufferDynamic = 8;
    case StorageBufferDynamic = 9;
    case InputAttachment = 10;
}
