<?php

namespace iggyvolz\vulkan\ext;

class VkKhrVideoDecodeQueue
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkVideoDecodeInfoKHR $pDecodeInfo
     * @return void
     */
    public function vkCmdDecodeVideoKHR(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkVideoDecodeInfoKHR $pDecodeInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pDecodeInfo;
        // const VkVideoDecodeInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pDecodeInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdDecodeVideoKHR", $commandBuffer, $pDecodeInfo);
    }
}
