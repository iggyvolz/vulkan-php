<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkLogicOp: int
{
    case Clear = 0;
    case And = 1;
    case AndReverse = 2;
    case Copy = 3;
    case AndInverted = 4;
    case NoOp = 5;
    case Xor = 6;
    case Or = 7;
    case Nor = 8;
    case Equivalent = 9;
    case Invert = 10;
    case OrReverse = 11;
    case CopyInverted = 12;
    case OrInverted = 13;
    case Nand = 14;
    case Set = 15;
}
