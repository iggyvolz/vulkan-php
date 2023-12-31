<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkColorSpaceKHR: int
{
    case SrgbNonlinear = 0;
    case DisplayP3NonlinearExt = 1000104001;
    case ExtendedSrgbLinearExt = 1000104002;
    case DisplayP3LinearExt = 1000104003;
    case DciP3NonlinearExt = 1000104004;
    case Bt709LinearExt = 1000104005;
    case Bt709NonlinearExt = 1000104006;
    case Bt2020LinearExt = 1000104007;
    case Hdr10St2084Ext = 1000104008;
    case DolbyvisionExt = 1000104009;
    case Hdr10HlgExt = 1000104010;
    case AdobergbLinearExt = 1000104011;
    case AdobergbNonlinearExt = 1000104012;
    case PassThroughExt = 1000104013;
    case ExtendedSrgbNonlinearExt = 1000104014;
    case DisplayNativeAmd = 1000213000;
}
