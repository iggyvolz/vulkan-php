<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkBlendFactor: int
{
    case Zero = 0;
    case One = 1;
    case SrcColor = 2;
    case OneMinusSrcColor = 3;
    case DstColor = 4;
    case OneMinusDstColor = 5;
    case SrcAlpha = 6;
    case OneMinusSrcAlpha = 7;
    case DstAlpha = 8;
    case OneMinusDstAlpha = 9;
    case ConstantColor = 10;
    case OneMinusConstantColor = 11;
    case ConstantAlpha = 12;
    case OneMinusConstantAlpha = 13;
    case SrcAlphaSaturate = 14;
    case Src1Color = 15;
    case OneMinusSrc1Color = 16;
    case Src1Alpha = 17;
    case OneMinusSrc1Alpha = 18;
}
