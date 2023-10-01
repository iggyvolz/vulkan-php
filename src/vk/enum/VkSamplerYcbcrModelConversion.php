<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkSamplerYcbcrModelConversion: int
{
    case RgbIdentity = 0;
    case YcbcrIdentity = 1;
    case Ycbcr709 = 2;
    case Ycbcr601 = 3;
    case Ycbcr2020 = 4;
}
