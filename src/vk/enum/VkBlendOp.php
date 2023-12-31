<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkBlendOp: int
{
    case Add = 0;
    case Subtract = 1;
    case ReverseSubtract = 2;
    case Min = 3;
    case Max = 4;
    case ZeroExt = 1000148000;
    case SrcExt = 1000148001;
    case DstExt = 1000148002;
    case SrcOverExt = 1000148003;
    case DstOverExt = 1000148004;
    case SrcInExt = 1000148005;
    case DstInExt = 1000148006;
    case SrcOutExt = 1000148007;
    case DstOutExt = 1000148008;
    case SrcAtopExt = 1000148009;
    case DstAtopExt = 1000148010;
    case XorExt = 1000148011;
    case MultiplyExt = 1000148012;
    case ScreenExt = 1000148013;
    case OverlayExt = 1000148014;
    case DarkenExt = 1000148015;
    case LightenExt = 1000148016;
    case ColordodgeExt = 1000148017;
    case ColorburnExt = 1000148018;
    case HardlightExt = 1000148019;
    case SoftlightExt = 1000148020;
    case DifferenceExt = 1000148021;
    case ExclusionExt = 1000148022;
    case InvertExt = 1000148023;
    case InvertRgbExt = 1000148024;
    case LineardodgeExt = 1000148025;
    case LinearburnExt = 1000148026;
    case VividlightExt = 1000148027;
    case LinearlightExt = 1000148028;
    case PinlightExt = 1000148029;
    case HardmixExt = 1000148030;
    case HslHueExt = 1000148031;
    case HslSaturationExt = 1000148032;
    case HslColorExt = 1000148033;
    case HslLuminosityExt = 1000148034;
    case PlusExt = 1000148035;
    case PlusClampedExt = 1000148036;
    case PlusClampedAlphaExt = 1000148037;
    case PlusDarkerExt = 1000148038;
    case MinusExt = 1000148039;
    case MinusClampedExt = 1000148040;
    case ContrastExt = 1000148041;
    case InvertOvgExt = 1000148042;
    case RedExt = 1000148043;
    case GreenExt = 1000148044;
    case BlueExt = 1000148045;
}
