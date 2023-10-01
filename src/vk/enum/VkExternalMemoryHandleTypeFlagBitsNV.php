<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkExternalMemoryHandleTypeFlagBitsNV: int
{
    case OpaqueWin32 = 0;
    case OpaqueWin32Kmt = 1;
    case D3d11Image = 2;
    case D3d11ImageKmt = 3;
}
