<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkDeviceGroupPresentModeFlagBitsKHR: int
{
    case Local = 0;
    case Remote = 1;
    case Sum = 2;
    case LocalMultiDevice = 3;
}
