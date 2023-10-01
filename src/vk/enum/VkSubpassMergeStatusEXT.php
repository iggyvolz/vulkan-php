<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkSubpassMergeStatusEXT: int
{
    case Merged = 0;
    case Disallowed = 1;
    case NotMergedSideEffects = 2;
    case NotMergedSamplesMismatch = 3;
    case NotMergedViewsMismatch = 4;
    case NotMergedAliasing = 5;
    case NotMergedDependencies = 6;
    case NotMergedIncompatibleInputAttachment = 7;
    case NotMergedTooManyAttachments = 8;
    case NotMergedInsufficientStorage = 9;
    case NotMergedDepthStencilCount = 10;
    case NotMergedResolveAttachmentReuse = 11;
    case NotMergedSingleSubpass = 12;
    case NotMergedUnspecified = 13;
}
