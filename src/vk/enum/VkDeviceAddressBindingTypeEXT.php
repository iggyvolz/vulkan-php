<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkDeviceAddressBindingTypeEXT: int
{
    case Bind = 0;
    case Unbind = 1;
}
