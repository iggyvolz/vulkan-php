<?php

namespace iggyvolz\vulkan\ext;

class VkExtTransformFeedback
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $firstBinding
     * @param int $bindingCount
     * @param \iggyvolz\vulkan\struct\VkBuffer $pBuffers
     * @param \iggyvolz\vulkan\util\Pointer $pOffsets
     * @param \iggyvolz\vulkan\util\Pointer $pSizes
     * @return void
     */
    public function vkCmdBindTransformFeedbackBuffersEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $firstBinding,
        int $bindingCount,
        \iggyvolz\vulkan\struct\VkBuffer $pBuffers,
        \iggyvolz\vulkan\util\Pointer $pOffsets,
        \iggyvolz\vulkan\util\Pointer $pSizes,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $firstBinding;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $firstBinding = $cValue;
        $phpValue = $bindingCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $bindingCount = $cValue;
        $phpValue = $pBuffers;
        // const VkBuffer* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pBuffers = $cValue;
        $phpValue = $pOffsets;
        // const VkDeviceSize* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pOffsets = $cValue;
        $phpValue = $pSizes;
        // const VkDeviceSize* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pSizes = $cValue;
        $cValue = $this->vulkan->call("vkCmdBindTransformFeedbackBuffersEXT", $commandBuffer, $firstBinding, $bindingCount, $pBuffers, $pOffsets, $pSizes);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $firstCounterBuffer
     * @param int $counterBufferCount
     * @param \iggyvolz\vulkan\struct\VkBuffer $pCounterBuffers
     * @param \iggyvolz\vulkan\util\Pointer $pCounterBufferOffsets
     * @return void
     */
    public function vkCmdBeginTransformFeedbackEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $firstCounterBuffer,
        int $counterBufferCount,
        \iggyvolz\vulkan\struct\VkBuffer $pCounterBuffers,
        \iggyvolz\vulkan\util\Pointer $pCounterBufferOffsets,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $firstCounterBuffer;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $firstCounterBuffer = $cValue;
        $phpValue = $counterBufferCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $counterBufferCount = $cValue;
        $phpValue = $pCounterBuffers;
        // const VkBuffer* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCounterBuffers = $cValue;
        $phpValue = $pCounterBufferOffsets;
        // const VkDeviceSize* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pCounterBufferOffsets = $cValue;
        $cValue = $this->vulkan->call("vkCmdBeginTransformFeedbackEXT", $commandBuffer, $firstCounterBuffer, $counterBufferCount, $pCounterBuffers, $pCounterBufferOffsets);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $firstCounterBuffer
     * @param int $counterBufferCount
     * @param \iggyvolz\vulkan\struct\VkBuffer $pCounterBuffers
     * @param \iggyvolz\vulkan\util\Pointer $pCounterBufferOffsets
     * @return void
     */
    public function vkCmdEndTransformFeedbackEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $firstCounterBuffer,
        int $counterBufferCount,
        \iggyvolz\vulkan\struct\VkBuffer $pCounterBuffers,
        \iggyvolz\vulkan\util\Pointer $pCounterBufferOffsets,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $firstCounterBuffer;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $firstCounterBuffer = $cValue;
        $phpValue = $counterBufferCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $counterBufferCount = $cValue;
        $phpValue = $pCounterBuffers;
        // const VkBuffer* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCounterBuffers = $cValue;
        $phpValue = $pCounterBufferOffsets;
        // const VkDeviceSize* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pCounterBufferOffsets = $cValue;
        $cValue = $this->vulkan->call("vkCmdEndTransformFeedbackEXT", $commandBuffer, $firstCounterBuffer, $counterBufferCount, $pCounterBuffers, $pCounterBufferOffsets);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkQueryPool $queryPool
     * @param int $query
     * @param list<\iggyvolz\vulkan\enum\VkQueryControlFlagBits> $flags
     * @param int $index
     * @return void
     */
    public function vkCmdBeginQueryIndexedEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkQueryPool $queryPool,
        int $query,
        array $flags,
        int $index,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $queryPool;
        // VkQueryPool => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $queryPool = $cValue;
        $phpValue = $query;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $query = $cValue;
        $phpValue = $flags;
        // VkQueryControlFlags => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkQueryControlFlagBits::toInt(...$phpValue);
        $flags = $cValue;
        $phpValue = $index;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $index = $cValue;
        $cValue = $this->vulkan->call("vkCmdBeginQueryIndexedEXT", $commandBuffer, $queryPool, $query, $flags, $index);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkQueryPool $queryPool
     * @param int $query
     * @param int $index
     * @return void
     */
    public function vkCmdEndQueryIndexedEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkQueryPool $queryPool,
        int $query,
        int $index,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $queryPool;
        // VkQueryPool => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $queryPool = $cValue;
        $phpValue = $query;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $query = $cValue;
        $phpValue = $index;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $index = $cValue;
        $cValue = $this->vulkan->call("vkCmdEndQueryIndexedEXT", $commandBuffer, $queryPool, $query, $index);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $instanceCount
     * @param int $firstInstance
     * @param \iggyvolz\vulkan\struct\VkBuffer $counterBuffer
     * @param int $counterBufferOffset
     * @param int $counterOffset
     * @param int $vertexStride
     * @return void
     */
    public function vkCmdDrawIndirectByteCountEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $instanceCount,
        int $firstInstance,
        \iggyvolz\vulkan\struct\VkBuffer $counterBuffer,
        int $counterBufferOffset,
        int $counterOffset,
        int $vertexStride,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $instanceCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $instanceCount = $cValue;
        $phpValue = $firstInstance;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $firstInstance = $cValue;
        $phpValue = $counterBuffer;
        // VkBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $counterBuffer = $cValue;
        $phpValue = $counterBufferOffset;
        // VkDeviceSize => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $counterBufferOffset = $cValue;
        $phpValue = $counterOffset;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $counterOffset = $cValue;
        $phpValue = $vertexStride;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $vertexStride = $cValue;
        $cValue = $this->vulkan->call("vkCmdDrawIndirectByteCountEXT", $commandBuffer, $instanceCount, $firstInstance, $counterBuffer, $counterBufferOffset, $counterOffset, $vertexStride);
    }
}
