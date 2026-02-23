<?php

namespace iggyvolz\vulkan;

class PhysicalDevice
{
    public readonly Instance $instance;
    private function __construct(){}
    #[\Spem("libphulkan.so", "physicalDevice_destruct")]
    public function __destruct()
    {
    }

    public readonly PhysicalDeviceProperties $properties;

}