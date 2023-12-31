<?php

namespace iggyvolz\vulkan\util;

use iggyvolz\vulkan\enum\VkResult;

trait VkResultAssert
{
    public function assert(self ...$additionalAcceptableTypes): void
    {
        if($this !== VkResult::Success && !in_array($this, $additionalAcceptableTypes)) {
            throw new \RuntimeException("Received a vulkan result " . $this->name . ", expected one of " . implode(", ", array_map(fn(self $x) => $x->name, [VkResult::Success, ...$additionalAcceptableTypes])));
        }
    }
}