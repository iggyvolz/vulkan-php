<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkResult: int
{
    use \iggyvolz\vulkan\util\VkResultAssert;

    case Success = 0;
    case NotReady = 1;
    case Timeout = 2;
    case EventSet = 3;
    case EventReset = 4;
    case Incomplete = 5;
    case ErrorOutOfHostMemory = -1;
    case ErrorOutOfDeviceMemory = -2;
    case ErrorInitializationFailed = -3;
    case ErrorDeviceLost = -4;
    case ErrorMemoryMapFailed = -5;
    case ErrorLayerNotPresent = -6;
    case ErrorExtensionNotPresent = -7;
    case ErrorFeatureNotPresent = -8;
    case ErrorIncompatibleDriver = -9;
    case ErrorTooManyObjects = -10;
    case ErrorFormatNotSupported = -11;
    case ErrorFragmentedPool = -12;
    case ErrorUnknown = -13;
}
