<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkGraphicsPipelineLibraryFlagBitsEXT: int
{
    case VertexInputInterface = 0;
    case PreRasterizationShaders = 1;
    case FragmentShader = 2;
    case FragmentOutputInterface = 3;
}
