<?php

namespace iggyvolz\vulkan\util;

use FFI;

interface VulkanFfi
{
    public function getFfi(): FFIProxy;
}