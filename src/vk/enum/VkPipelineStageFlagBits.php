<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkPipelineStageFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case TopOfPipe = 0;
    case DrawIndirect = 1;
    case VertexInput = 2;
    case VertexShader = 3;
    case TessellationControlShader = 4;
    case TessellationEvaluationShader = 5;
    case GeometryShader = 6;
    case FragmentShader = 7;
    case EarlyFragmentTests = 8;
    case LateFragmentTests = 9;
    case ColorAttachmentOutput = 10;
    case ComputeShader = 11;
    case Transfer = 12;
    case BottomOfPipe = 13;
    case Host = 14;
    case AllGraphics = 15;
    case AllCommands = 16;
}
