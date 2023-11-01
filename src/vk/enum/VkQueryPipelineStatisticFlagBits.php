<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkQueryPipelineStatisticFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case InputAssemblyVertices = 0;
    case InputAssemblyPrimitives = 1;
    case VertexShaderInvocations = 2;
    case GeometryShaderInvocations = 3;
    case GeometryShaderPrimitives = 4;
    case ClippingInvocations = 5;
    case ClippingPrimitives = 6;
    case FragmentShaderInvocations = 7;
    case TessellationControlShaderPatches = 8;
    case TessellationEvaluationShaderInvocations = 9;
    case ComputeShaderInvocations = 10;
}
