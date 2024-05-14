<?php

namespace iggyvolz\vulkan\ext;

class VkExtDepthBiasControl
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkDepthBiasInfoEXT $pDepthBiasInfo
     * @return void
     */
    public function vkCmdSetDepthBias2EXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkDepthBiasInfoEXT $pDepthBiasInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pDepthBiasInfo;
        // const VkDepthBiasInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pDepthBiasInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetDepthBias2EXT", $commandBuffer, $pDepthBiasInfo);
    }
}
