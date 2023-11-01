<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkShaderStageFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case Vertex = 0;
    case TessellationControl = 1;
    case TessellationEvaluation = 2;
    case Geometry = 3;
    case Fragment = 4;
    case Compute = 5;
}
