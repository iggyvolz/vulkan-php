<?php

namespace iggyvolz\vulkan\ext;

class VkExtMultiDraw
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $drawCount
     * @param \iggyvolz\vulkan\struct\VkMultiDrawInfoEXT $pVertexInfo
     * @param int $instanceCount
     * @param int $firstInstance
     * @param int $stride
     * @return void
     */
    public function vkCmdDrawMultiEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $drawCount,
        \iggyvolz\vulkan\struct\VkMultiDrawInfoEXT $pVertexInfo,
        int $instanceCount,
        int $firstInstance,
        int $stride,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $drawCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $drawCount = $cValue;
        $phpValue = $pVertexInfo;
        // const VkMultiDrawInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pVertexInfo = $cValue;
        $phpValue = $instanceCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $instanceCount = $cValue;
        $phpValue = $firstInstance;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $firstInstance = $cValue;
        $phpValue = $stride;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $stride = $cValue;
        $cValue = $this->vulkan->call("vkCmdDrawMultiEXT", $commandBuffer, $drawCount, $pVertexInfo, $instanceCount, $firstInstance, $stride);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $drawCount
     * @param \iggyvolz\vulkan\struct\VkMultiDrawIndexedInfoEXT $pIndexInfo
     * @param int $instanceCount
     * @param int $firstInstance
     * @param int $stride
     * @param \iggyvolz\vulkan\util\Pointer $pVertexOffset
     * @return void
     */
    public function vkCmdDrawMultiIndexedEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $drawCount,
        \iggyvolz\vulkan\struct\VkMultiDrawIndexedInfoEXT $pIndexInfo,
        int $instanceCount,
        int $firstInstance,
        int $stride,
        \iggyvolz\vulkan\util\Pointer $pVertexOffset,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $drawCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $drawCount = $cValue;
        $phpValue = $pIndexInfo;
        // const VkMultiDrawIndexedInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pIndexInfo = $cValue;
        $phpValue = $instanceCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $instanceCount = $cValue;
        $phpValue = $firstInstance;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $firstInstance = $cValue;
        $phpValue = $stride;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $stride = $cValue;
        $phpValue = $pVertexOffset;
        // const int32_t* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pVertexOffset = $cValue;
        $cValue = $this->vulkan->call("vkCmdDrawMultiIndexedEXT", $commandBuffer, $drawCount, $pIndexInfo, $instanceCount, $firstInstance, $stride, $pVertexOffset);
    }
}
