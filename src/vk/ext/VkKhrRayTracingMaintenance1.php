<?php

namespace iggyvolz\vulkan\ext;

class VkKhrRayTracingMaintenance1
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $indirectDeviceAddress
     * @return void
     */
    public function vkCmdTraceRaysIndirect2KHR(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $indirectDeviceAddress,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $indirectDeviceAddress;
        // VkDeviceAddress => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $indirectDeviceAddress = $cValue;
        $cValue = $this->vulkan->call("vkCmdTraceRaysIndirect2KHR", $commandBuffer, $indirectDeviceAddress);
    }
}
