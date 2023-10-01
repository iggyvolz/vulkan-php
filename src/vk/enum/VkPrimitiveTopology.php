<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkPrimitiveTopology: int
{
    case PointList = 0;
    case LineList = 1;
    case LineStrip = 2;
    case TriangleList = 3;
    case TriangleStrip = 4;
    case TriangleFan = 5;
    case LineListWithAdjacency = 6;
    case LineStripWithAdjacency = 7;
    case TriangleListWithAdjacency = 8;
    case TriangleStripWithAdjacency = 9;
    case PatchList = 10;
}
