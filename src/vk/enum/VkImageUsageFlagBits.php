<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkImageUsageFlagBits: int
{
    use \iggyvolz\vulkan\util\BitmapEnum;

    case TransferSrc = 0;
    case TransferDst = 1;
    case Sampled = 2;
    case Storage = 3;
    case ColorAttachment = 4;
    case DepthStencilAttachment = 5;
    case TransientAttachment = 6;
    case InputAttachment = 7;
    case VideoDecodeDstBitKhr = 10;
    case VideoDecodeSrcBitKhr = 11;
    case VideoDecodeDpbBitKhr = 12;
    case FragmentDensityMapBitExt = 9;
    case FragmentShadingRateAttachmentBitKhr = 8;
    case HostTransferBitExt = 22;
    case VideoEncodeDstBitKhr = 13;
    case VideoEncodeSrcBitKhr = 14;
    case VideoEncodeDpbBitKhr = 15;
    case AttachmentFeedbackLoopBitExt = 19;
    case InvocationMaskBitHuawei = 18;
    case SampleWeightBitQcom = 20;
    case SampleBlockMatchBitQcom = 21;
    case Reserved24BitCoreavi = 24;
    case Reserved23BitExt = 23;
}
