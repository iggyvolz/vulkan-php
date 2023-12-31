<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkIndirectCommandsTokenTypeNV: int
{
    case ShaderGroup = 0;
    case StateFlags = 1;
    case IndexBuffer = 2;
    case VertexBuffer = 3;
    case PushConstant = 4;
    case DrawIndexed = 5;
    case Draw = 6;
    case DrawTasks = 7;
    case DrawMeshTasks = 1000328000;
    case Pipeline = 1000428003;
    case Dispatch = 1000428004;
}
