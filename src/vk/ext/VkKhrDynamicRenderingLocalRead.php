<?php

namespace iggyvolz\vulkan\ext;

class VkKhrDynamicRenderingLocalRead
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkRenderingAttachmentLocationInfoKHR $pLocationInfo
     * @return void
     */
    public function vkCmdSetRenderingAttachmentLocationsKHR(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkRenderingAttachmentLocationInfoKHR $pLocationInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pLocationInfo;
        // const VkRenderingAttachmentLocationInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pLocationInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetRenderingAttachmentLocationsKHR", $commandBuffer, $pLocationInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkRenderingInputAttachmentIndexInfoKHR $pLocationInfo
     * @return void
     */
    public function vkCmdSetRenderingInputAttachmentIndicesKHR(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkRenderingInputAttachmentIndexInfoKHR $pLocationInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pLocationInfo;
        // const VkRenderingInputAttachmentIndexInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pLocationInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetRenderingInputAttachmentIndicesKHR", $commandBuffer, $pLocationInfo);
    }
}
