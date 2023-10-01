<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkLatencyMarkerNV: int
{
    case SimulationStart = 0;
    case SimulationEnd = 1;
    case RendersubmitStart = 2;
    case RendersubmitEnd = 3;
    case PresentStart = 4;
    case PresentEnd = 5;
    case InputSample = 6;
    case TriggerFlash = 7;
    case OutOfBandRendersubmitStart = 8;
    case OutOfBandRendersubmitEnd = 9;
    case OutOfBandPresentStart = 10;
    case OutOfBandPresentEnd = 11;
}
