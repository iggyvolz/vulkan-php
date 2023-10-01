<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkShaderFloatControlsIndependence: int
{
    case _32BitOnly = 0;
    case All = 1;
    case None = 2;
}
