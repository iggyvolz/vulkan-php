<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkDeviceAddressBindingFlagBitsEXT: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case InternalObject = 0;
}
