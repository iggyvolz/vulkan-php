<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkExportMetalObjectTypeFlagBitsEXT: int
{
    case MetalDevice = 0;
    case MetalCommandQueue = 1;
    case MetalBuffer = 2;
    case MetalTexture = 3;
    case MetalIosurface = 4;
    case MetalSharedEvent = 5;
}
