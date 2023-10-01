<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkDeviceDiagnosticsConfigFlagBitsNV: int
{
    case EnableShaderDebugInfo = 0;
    case EnableResourceTracking = 1;
    case EnableAutomaticCheckpoints = 2;
    case EnableShaderErrorReporting = 3;
}
