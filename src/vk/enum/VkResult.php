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
    case ErrorOutOfPoolMemory = -1000069000;
    case ErrorInvalidExternalHandle = -1000072003;
    case ErrorFragmentation = -1000161000;
    case ErrorInvalidOpaqueCaptureAddress = -1000257000;
    case PipelineCompileRequired = 1000297000;
    case ErrorSurfaceLostKhr = -1000000000;
    case ErrorNativeWindowInUseKhr = -1000000001;
    case SuboptimalKhr = 1000001003;
    case ErrorOutOfDateKhr = -1000001004;
    case ErrorIncompatibleDisplayKhr = -1000003001;
    case ErrorValidationFailedExt = -1000011001;
    case ErrorInvalidShaderNv = -1000012000;
    case ErrorImageUsageNotSupportedKhr = -1000023000;
    case ErrorVideoPictureLayoutNotSupportedKhr = -1000023001;
    case ErrorVideoProfileOperationNotSupportedKhr = -1000023002;
    case ErrorVideoProfileFormatNotSupportedKhr = -1000023003;
    case ErrorVideoProfileCodecNotSupportedKhr = -1000023004;
    case ErrorVideoStdVersionNotSupportedKhr = -1000023005;
    case ErrorInvalidDrmFormatModifierPlaneLayoutExt = -1000158000;
    case ErrorNotPermittedKhr = -1000174001;
    case ErrorFullScreenExclusiveModeLostExt = -1000255000;
    case ThreadIdleKhr = 1000268000;
    case ThreadDoneKhr = 1000268001;
    case OperationDeferredKhr = 1000268002;
    case OperationNotDeferredKhr = 1000268003;
    case ErrorInvalidVideoStdParametersKhr = -1000299000;
    case ErrorCompressionExhaustedExt = -1000338000;
    case ErrorIncompatibleShaderBinaryExt = 1000482000;
}
