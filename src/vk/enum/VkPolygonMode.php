<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkPolygonMode: int
{
    case Fill = 0;
    case Line = 1;
    case Point = 2;
    case FillRectangleNv = 1000153000;
}
