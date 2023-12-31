<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkExternalSemaphoreHandleTypeFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case OpaqueFd = 0;
    case OpaqueWin32 = 1;
    case OpaqueWin32Kmt = 2;
    case D3d12Fence = 3;
    case SyncFd = 4;
    case ZirconEventBitFuchsia = 7;
    case SciSyncObjBitNv = 5;
}
