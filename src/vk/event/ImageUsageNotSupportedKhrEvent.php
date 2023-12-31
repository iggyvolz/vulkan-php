<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\event;

final readonly class ImageUsageNotSupportedKhrEvent extends \iggyvolz\vulkan\util\ResultEvent
{
    public function __construct()
    {
        parent::__construct(\iggyvolz\vulkan\enum\VkResult::ErrorImageUsageNotSupportedKhr);
    }
}
