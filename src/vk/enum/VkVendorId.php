<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkVendorId: int
{
    case Viv = 65537;
    case Vsi = 65538;
    case Kazan = 65539;
    case Codeplay = 65540;
    case Mesa = 65541;
    case Pocl = 65542;
    case Mobileye = 65543;
}
