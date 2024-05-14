<?php

namespace iggyvolz\vulkan\ext;

class VkExtPageableDeviceLocalMemory
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDeviceMemory $memory
     * @param float $priority
     * @return void
     */
    public function vkSetDeviceMemoryPriorityEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDeviceMemory $memory,
        float $priority,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $memory;
        // VkDeviceMemory => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $memory = $cValue;
        $phpValue = $priority;
        // float => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $priority = $cValue;
        $cValue = $this->vulkan->call("vkSetDeviceMemoryPriorityEXT", $device, $memory, $priority);
    }
}
