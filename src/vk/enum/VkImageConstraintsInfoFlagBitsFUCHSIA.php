<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkImageConstraintsInfoFlagBitsFUCHSIA: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case CpuReadRarely = 0;
    case CpuReadOften = 1;
    case CpuWriteRarely = 2;
    case CpuWriteOften = 3;
    case ProtectedOptional = 4;
}
