<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkExternalMemoryHandleTypeFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case OpaqueFd = 0;
    case OpaqueWin32 = 1;
    case OpaqueWin32Kmt = 2;
    case D3d11Texture = 3;
    case D3d11TextureKmt = 4;
    case D3d12Heap = 5;
    case D3d12Resource = 6;
    case DmaBufBitExt = 9;
    case AndroidHardwareBufferBitAndroid = 10;
    case HostAllocationBitExt = 7;
    case HostMappedForeignMemoryBitExt = 8;
    case ZirconVmoBitFuchsia = 11;
    case RdmaAddressBitNv = 12;
    case SciBufBitNv = 13;
    case ScreenBufferBitQnx = 14;
}
