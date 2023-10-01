<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkSubpassContents: int
{
    case Inline = 0;
    case SecondaryCommandBuffers = 1;
}
