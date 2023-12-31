<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkPipelineBindPoint: int
{
    case Graphics = 0;
    case Compute = 1;
    case ExecutionGraphAmdx = 1000134000;
    case RayTracingKhr = 1000165000;
    case SubpassShadingHuawei = 1000369003;
}
