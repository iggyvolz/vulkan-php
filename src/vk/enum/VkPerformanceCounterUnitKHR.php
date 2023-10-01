<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkPerformanceCounterUnitKHR: int
{
    case Generic = 0;
    case Percentage = 1;
    case Nanoseconds = 2;
    case Bytes = 3;
    case BytesPerSecond = 4;
    case Kelvin = 5;
    case Watts = 6;
    case Volts = 7;
    case Amps = 8;
    case Hertz = 9;
    case Cycles = 10;
}
