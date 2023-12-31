<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkImageLayout: int
{
    case Undefined = 0;
    case General = 1;
    case ColorAttachmentOptimal = 2;
    case DepthStencilAttachmentOptimal = 3;
    case DepthStencilReadOnlyOptimal = 4;
    case ShaderReadOnlyOptimal = 5;
    case TransferSrcOptimal = 6;
    case TransferDstOptimal = 7;
    case Preinitialized = 8;
    case DepthReadOnlyStencilAttachmentOptimal = 1000117000;
    case DepthAttachmentStencilReadOnlyOptimal = 1000117001;
    case DepthAttachmentOptimal = 1000241000;
    case DepthReadOnlyOptimal = 1000241001;
    case StencilAttachmentOptimal = 1000241002;
    case StencilReadOnlyOptimal = 1000241003;
    case ReadOnlyOptimal = 1000314000;
    case AttachmentOptimal = 1000314001;
    case PresentSrcKhr = 1000001002;
    case VideoDecodeDstKhr = 1000024000;
    case VideoDecodeSrcKhr = 1000024001;
    case VideoDecodeDpbKhr = 1000024002;
    case SharedPresentKhr = 1000111000;
    case FragmentDensityMapOptimalExt = 1000218000;
    case FragmentShadingRateAttachmentOptimalKhr = 1000164003;
    case VideoEncodeDstKhr = 1000299000;
    case VideoEncodeSrcKhr = 1000299001;
    case VideoEncodeDpbKhr = 1000299002;
    case AttachmentFeedbackLoopOptimalExt = 1000339000;
}
