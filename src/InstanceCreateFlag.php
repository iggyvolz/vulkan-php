<?php

namespace iggyvolz\vulkan;

use iggyvolz\windows\BitmapEnum;

enum InstanceCreateFlag: int
{
    use BitmapEnum;
    case EnumeratePortability = 0;
}
