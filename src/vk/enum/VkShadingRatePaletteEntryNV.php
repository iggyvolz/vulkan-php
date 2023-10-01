<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkShadingRatePaletteEntryNV: int
{
    case NoInvocations = 0;
    case _16InvocationsPerPixel = 1;
    case _8InvocationsPerPixel = 2;
    case _4InvocationsPerPixel = 3;
    case _2InvocationsPerPixel = 4;
    case _1InvocationPerPixel = 5;
    case _1InvocationPer2x1Pixels = 6;
    case _1InvocationPer1x2Pixels = 7;
    case _1InvocationPer2x2Pixels = 8;
    case _1InvocationPer4x2Pixels = 9;
    case _1InvocationPer2x4Pixels = 10;
    case _1InvocationPer4x4Pixels = 11;
}
