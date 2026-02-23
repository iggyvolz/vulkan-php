<?php

namespace iggyvolz\vulkan;

use iggyvolz\windows\BitmapEnum;

enum SampleCountFlag: int
{
    use BitmapEnum;
    case Count1 = 0;
    case Count2 = 1;
    case Count4 = 2;
    case Count8 = 3;
    case Count16 = 4;
    case Count32 = 5;
    case Count64 = 6;
}