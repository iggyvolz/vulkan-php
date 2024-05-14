<?php

namespace iggyvolz\vulkan\ext;

class VkKhrMaintenance5
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkRenderingAreaInfoKHR $pRenderingAreaInfo
     */
    public function vkGetRenderingAreaGranularityKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkRenderingAreaInfoKHR $pRenderingAreaInfo,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pRenderingAreaInfo;
        // const VkRenderingAreaInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pRenderingAreaInfo = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkBuffer $buffer
     * @param int $offset
     * @param int $size
     * @param \iggyvolz\vulkan\enum\VkIndexType $indexType
     * @return void
     */
    public function vkCmdBindIndexBuffer2KHR(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkBuffer $buffer,
        int $offset,
        int $size,
        \iggyvolz\vulkan\enum\VkIndexType $indexType,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $buffer;
        // VkBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $buffer = $cValue;
        $phpValue = $offset;
        // VkDeviceSize => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $offset = $cValue;
        $phpValue = $size;
        // VkDeviceSize => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $size = $cValue;
        $phpValue = $indexType;
        // VkIndexType => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $indexType = $cValue;
        $cValue = $this->vulkan->call("vkCmdBindIndexBuffer2KHR", $commandBuffer, $buffer, $offset, $size, $indexType);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkImage $image
     * @param \iggyvolz\vulkan\struct\VkImageSubresource2KHR $pSubresource
     */
    public function vkGetImageSubresourceLayout2KHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkImage $image,
        \iggyvolz\vulkan\struct\VkImageSubresource2KHR $pSubresource,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $image;
        // VkImage => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $image = $cValue;
        $phpValue = $pSubresource;
        // const VkImageSubresource2KHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pSubresource = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDeviceImageSubresourceInfoKHR $pInfo
     */
    public function vkGetDeviceImageSubresourceLayoutKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDeviceImageSubresourceInfoKHR $pInfo,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pInfo;
        // const VkDeviceImageSubresourceInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
    }
}
