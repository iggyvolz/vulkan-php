<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkAccelerationStructureCreateFlagBitsKHR: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case DeviceAddressCaptureReplay = 0;
    case DescriptorBufferCaptureReplayBitExt = 3;
    case MotionBitNv = 2;
}
