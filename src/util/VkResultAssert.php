<?php

namespace iggyvolz\vulkan\util;

use iggyvolz\vulkan\enum\VkResult;

trait VkResultAssert
{
    public function assert(self ...$additionalAcceptableTypes): void
    {
        if($this !== VkResult::Success && !in_array($this, $additionalAcceptableTypes)) {
            throw new \RuntimeException("TODO make this a better error message");
        }
    }
}