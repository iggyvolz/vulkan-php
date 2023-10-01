<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkFragmentShadingRateNV: int
{
    case _1InvocationPerPixel = 0;
    case _1InvocationPer1x2Pixels = 1;
    case _1InvocationPer2x1Pixels = 4;
    case _1InvocationPer2x2Pixels = 5;
    case _1InvocationPer2x4Pixels = 6;
    case _1InvocationPer4x2Pixels = 9;
    case _1InvocationPer4x4Pixels = 10;
    case _2InvocationsPerPixel = 11;
    case _4InvocationsPerPixel = 12;
    case _8InvocationsPerPixel = 13;
    case _16InvocationsPerPixel = 14;
    case NoInvocations = 15;
}
