<?php

namespace iggyvolz\vulkan\ext;

class VkExtColorWriteEnable
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $attachmentCount
     * @param \iggyvolz\vulkan\util\Pointer $pColorWriteEnables
     * @return void
     */
    public function vkCmdSetColorWriteEnableEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $attachmentCount,
        \iggyvolz\vulkan\util\Pointer $pColorWriteEnables,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $attachmentCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $attachmentCount = $cValue;
        $phpValue = $pColorWriteEnables;
        // const VkBool32* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pColorWriteEnables = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetColorWriteEnableEXT", $commandBuffer, $attachmentCount, $pColorWriteEnables);
    }
}
