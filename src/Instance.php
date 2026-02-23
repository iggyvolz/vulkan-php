<?php

namespace iggyvolz\vulkan;

use Spem;

class Instance
{
    public readonly Vulkan $vulkan;
    #[Spem("libphulkan.so", "instance_destruct")]
    public function __destruct()
    {
    }

    /** @var list<PhysicalDevice> */
    public array $physicalDevices { #[\Spem("libphulkan.so", "instance_getPhysicalDevices")] get {}}
}