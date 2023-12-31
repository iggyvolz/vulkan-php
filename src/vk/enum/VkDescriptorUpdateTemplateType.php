<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkDescriptorUpdateTemplateType: int
{
    case DescriptorSet = 0;
    case PushDescriptorsKhr = 1;
}
