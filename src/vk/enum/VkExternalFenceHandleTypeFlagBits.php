<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkExternalFenceHandleTypeFlagBits: int
{
    case OpaqueFd = 0;
    case OpaqueWin32 = 1;
    case OpaqueWin32Kmt = 2;
    case SyncFd = 3;
}
