<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkVertexInputRate: int
{
    case Vertex = 0;
    case Instance = 1;
}
