<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkCubicFilterWeightsQCOM: int
{
    case CatmullRom = 0;
    case ZeroTangentCardinal = 1;
    case BSpline = 2;
    case MitchellNetravali = 3;
}
