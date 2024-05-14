<?php

namespace iggyvolz\vulkan\ext;

class VkVersion12
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkQueryPool $queryPool
     * @param int $firstQuery
     * @param int $queryCount
     * @return void
     */
    public function vkResetQueryPool(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkQueryPool $queryPool,
        int $firstQuery,
        int $queryCount,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $queryPool;
        // VkQueryPool => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $queryPool = $cValue;
        $phpValue = $firstQuery;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $firstQuery = $cValue;
        $phpValue = $queryCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $queryCount = $cValue;
        $cValue = $this->vulkan->call("vkResetQueryPool", $device, $queryPool, $firstQuery, $queryCount);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkRenderPassCreateInfo2 $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateRenderPass2(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkRenderPassCreateInfo2 $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCreateInfo;
        // const VkRenderPassCreateInfo2* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkRenderPassBeginInfo $pRenderPassBegin
     * @param \iggyvolz\vulkan\struct\VkSubpassBeginInfo $pSubpassBeginInfo
     * @return void
     */
    public function vkCmdBeginRenderPass2(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkRenderPassBeginInfo $pRenderPassBegin,
        \iggyvolz\vulkan\struct\VkSubpassBeginInfo $pSubpassBeginInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pRenderPassBegin;
        // const VkRenderPassBeginInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pRenderPassBegin = $cValue;
        $phpValue = $pSubpassBeginInfo;
        // const VkSubpassBeginInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pSubpassBeginInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdBeginRenderPass2", $commandBuffer, $pRenderPassBegin, $pSubpassBeginInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkSubpassBeginInfo $pSubpassBeginInfo
     * @param \iggyvolz\vulkan\struct\VkSubpassEndInfo $pSubpassEndInfo
     * @return void
     */
    public function vkCmdNextSubpass2(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkSubpassBeginInfo $pSubpassBeginInfo,
        \iggyvolz\vulkan\struct\VkSubpassEndInfo $pSubpassEndInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pSubpassBeginInfo;
        // const VkSubpassBeginInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pSubpassBeginInfo = $cValue;
        $phpValue = $pSubpassEndInfo;
        // const VkSubpassEndInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pSubpassEndInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdNextSubpass2", $commandBuffer, $pSubpassBeginInfo, $pSubpassEndInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkSubpassEndInfo $pSubpassEndInfo
     * @return void
     */
    public function vkCmdEndRenderPass2(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkSubpassEndInfo $pSubpassEndInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pSubpassEndInfo;
        // const VkSubpassEndInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pSubpassEndInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdEndRenderPass2", $commandBuffer, $pSubpassEndInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkSemaphore $semaphore
     * @param \iggyvolz\vulkan\util\IntPointer $pValue
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetSemaphoreCounterValue(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkSemaphore $semaphore,
        \iggyvolz\vulkan\util\IntPointer $pValue,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $semaphore;
        // VkSemaphore => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $semaphore = $cValue;
        $phpValue = $pValue;
        // uint64_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pValue = $cValue;
        $cValue = $this->vulkan->call("vkGetSemaphoreCounterValue", $device, $semaphore, $pValue);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkSemaphoreWaitInfo $pWaitInfo
     * @param int $timeout
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkWaitSemaphores(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkSemaphoreWaitInfo $pWaitInfo,
        int $timeout,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pWaitInfo;
        // const VkSemaphoreWaitInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pWaitInfo = $cValue;
        $phpValue = $timeout;
        // uint64_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $timeout = $cValue;
        $cValue = $this->vulkan->call("vkWaitSemaphores", $device, $pWaitInfo, $timeout);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkSemaphoreSignalInfo $pSignalInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkSignalSemaphore(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkSemaphoreSignalInfo $pSignalInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pSignalInfo;
        // const VkSemaphoreSignalInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pSignalInfo = $cValue;
        $cValue = $this->vulkan->call("vkSignalSemaphore", $device, $pSignalInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkBuffer $buffer
     * @param int $offset
     * @param \iggyvolz\vulkan\struct\VkBuffer $countBuffer
     * @param int $countBufferOffset
     * @param int $maxDrawCount
     * @param int $stride
     * @return void
     */
    public function vkCmdDrawIndirectCount(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkBuffer $buffer,
        int $offset,
        \iggyvolz\vulkan\struct\VkBuffer $countBuffer,
        int $countBufferOffset,
        int $maxDrawCount,
        int $stride,
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
        $phpValue = $countBuffer;
        // VkBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $countBuffer = $cValue;
        $phpValue = $countBufferOffset;
        // VkDeviceSize => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $countBufferOffset = $cValue;
        $phpValue = $maxDrawCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $maxDrawCount = $cValue;
        $phpValue = $stride;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $stride = $cValue;
        $cValue = $this->vulkan->call("vkCmdDrawIndirectCount", $commandBuffer, $buffer, $offset, $countBuffer, $countBufferOffset, $maxDrawCount, $stride);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkBuffer $buffer
     * @param int $offset
     * @param \iggyvolz\vulkan\struct\VkBuffer $countBuffer
     * @param int $countBufferOffset
     * @param int $maxDrawCount
     * @param int $stride
     * @return void
     */
    public function vkCmdDrawIndexedIndirectCount(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkBuffer $buffer,
        int $offset,
        \iggyvolz\vulkan\struct\VkBuffer $countBuffer,
        int $countBufferOffset,
        int $maxDrawCount,
        int $stride,
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
        $phpValue = $countBuffer;
        // VkBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $countBuffer = $cValue;
        $phpValue = $countBufferOffset;
        // VkDeviceSize => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $countBufferOffset = $cValue;
        $phpValue = $maxDrawCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $maxDrawCount = $cValue;
        $phpValue = $stride;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $stride = $cValue;
        $cValue = $this->vulkan->call("vkCmdDrawIndexedIndirectCount", $commandBuffer, $buffer, $offset, $countBuffer, $countBufferOffset, $maxDrawCount, $stride);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkBufferDeviceAddressInfo $pInfo
     * @return int
     */
    public function vkGetBufferOpaqueCaptureAddress(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkBufferDeviceAddressInfo $pInfo,
    ): int {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pInfo;
        // const VkBufferDeviceAddressInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
        $cValue = $this->vulkan->call("vkGetBufferOpaqueCaptureAddress", $device, $pInfo);
        // uint64_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $phpValue = $cValue;
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkBufferDeviceAddressInfo $pInfo
     * @return int
     */
    public function vkGetBufferDeviceAddress(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkBufferDeviceAddressInfo $pInfo,
    ): int {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pInfo;
        // const VkBufferDeviceAddressInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
        $cValue = $this->vulkan->call("vkGetBufferDeviceAddress", $device, $pInfo);
        // VkDeviceAddress => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $phpValue = $cValue;
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDeviceMemoryOpaqueCaptureAddressInfo $pInfo
     * @return int
     */
    public function vkGetDeviceMemoryOpaqueCaptureAddress(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDeviceMemoryOpaqueCaptureAddressInfo $pInfo,
    ): int {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pInfo;
        // const VkDeviceMemoryOpaqueCaptureAddressInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
        $cValue = $this->vulkan->call("vkGetDeviceMemoryOpaqueCaptureAddress", $device, $pInfo);
        // uint64_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $phpValue = $cValue;
        return $phpValue;
    }
}
