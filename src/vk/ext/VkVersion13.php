<?php

namespace iggyvolz\vulkan\ext;

class VkVersion13
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDeviceBufferMemoryRequirements $pInfo
     */
    public function vkGetDeviceBufferMemoryRequirements(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDeviceBufferMemoryRequirements $pInfo,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pInfo;
        // const VkDeviceBufferMemoryRequirements* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDeviceImageMemoryRequirements $pInfo
     */
    public function vkGetDeviceImageMemoryRequirements(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDeviceImageMemoryRequirements $pInfo,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pInfo;
        // const VkDeviceImageMemoryRequirements* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDeviceImageMemoryRequirements $pInfo
     * @param \iggyvolz\vulkan\util\IntPointer $pSparseMemoryRequirementCount
     */
    public function vkGetDeviceImageSparseMemoryRequirements(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDeviceImageMemoryRequirements $pInfo,
        \iggyvolz\vulkan\util\IntPointer $pSparseMemoryRequirementCount,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pInfo;
        // const VkDeviceImageMemoryRequirements* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
        $phpValue = $pSparseMemoryRequirementCount;
        // uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pSparseMemoryRequirementCount = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\util\IntPointer $pToolCount
     */
    public function vkGetPhysicalDeviceToolProperties(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\util\IntPointer $pToolCount,
    ) {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $pToolCount;
        // uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pToolCount = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param list<\iggyvolz\vulkan\enum\VkCullModeFlagBits> $cullMode
     * @return void
     */
    public function vkCmdSetCullMode(\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer, array $cullMode): void
    {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $cullMode;
        // VkCullModeFlags => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkCullModeFlagBits::toInt(...$phpValue);
        $cullMode = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetCullMode", $commandBuffer, $cullMode);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\enum\VkFrontFace $frontFace
     * @return void
     */
    public function vkCmdSetFrontFace(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\enum\VkFrontFace $frontFace,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $frontFace;
        // VkFrontFace => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $frontFace = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetFrontFace", $commandBuffer, $frontFace);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\enum\VkPrimitiveTopology $primitiveTopology
     * @return void
     */
    public function vkCmdSetPrimitiveTopology(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\enum\VkPrimitiveTopology $primitiveTopology,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $primitiveTopology;
        // VkPrimitiveTopology => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $primitiveTopology = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetPrimitiveTopology", $commandBuffer, $primitiveTopology);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $viewportCount
     * @param \iggyvolz\vulkan\struct\VkViewport $pViewports
     * @return void
     */
    public function vkCmdSetViewportWithCount(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $viewportCount,
        \iggyvolz\vulkan\struct\VkViewport $pViewports,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $viewportCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $viewportCount = $cValue;
        $phpValue = $pViewports;
        // const VkViewport* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pViewports = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetViewportWithCount", $commandBuffer, $viewportCount, $pViewports);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $scissorCount
     * @param \iggyvolz\vulkan\struct\VkRect2D $pScissors
     * @return void
     */
    public function vkCmdSetScissorWithCount(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $scissorCount,
        \iggyvolz\vulkan\struct\VkRect2D $pScissors,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $scissorCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $scissorCount = $cValue;
        $phpValue = $pScissors;
        // const VkRect2D* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pScissors = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetScissorWithCount", $commandBuffer, $scissorCount, $pScissors);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $firstBinding
     * @param int $bindingCount
     * @param \iggyvolz\vulkan\struct\VkBuffer $pBuffers
     * @param \iggyvolz\vulkan\util\Pointer $pOffsets
     * @param \iggyvolz\vulkan\util\Pointer $pSizes
     * @param \iggyvolz\vulkan\util\Pointer $pStrides
     * @return void
     */
    public function vkCmdBindVertexBuffers2(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $firstBinding,
        int $bindingCount,
        \iggyvolz\vulkan\struct\VkBuffer $pBuffers,
        \iggyvolz\vulkan\util\Pointer $pOffsets,
        \iggyvolz\vulkan\util\Pointer $pSizes,
        \iggyvolz\vulkan\util\Pointer $pStrides,
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
        $phpValue = $pStrides;
        // const VkDeviceSize* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pStrides = $cValue;
        $cValue = $this->vulkan->call("vkCmdBindVertexBuffers2", $commandBuffer, $firstBinding, $bindingCount, $pBuffers, $pOffsets, $pSizes, $pStrides);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param bool $depthTestEnable
     * @return void
     */
    public function vkCmdSetDepthTestEnable(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        bool $depthTestEnable,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $depthTestEnable;
        // VkBool32 => iggyvolz\vulkan\generator\Transformer\BoolTransformer
        $cValue = $phpValue ? 1 : 0;
        $depthTestEnable = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetDepthTestEnable", $commandBuffer, $depthTestEnable);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param bool $depthWriteEnable
     * @return void
     */
    public function vkCmdSetDepthWriteEnable(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        bool $depthWriteEnable,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $depthWriteEnable;
        // VkBool32 => iggyvolz\vulkan\generator\Transformer\BoolTransformer
        $cValue = $phpValue ? 1 : 0;
        $depthWriteEnable = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetDepthWriteEnable", $commandBuffer, $depthWriteEnable);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\enum\VkCompareOp $depthCompareOp
     * @return void
     */
    public function vkCmdSetDepthCompareOp(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\enum\VkCompareOp $depthCompareOp,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $depthCompareOp;
        // VkCompareOp => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $depthCompareOp = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetDepthCompareOp", $commandBuffer, $depthCompareOp);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param bool $depthBoundsTestEnable
     * @return void
     */
    public function vkCmdSetDepthBoundsTestEnable(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        bool $depthBoundsTestEnable,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $depthBoundsTestEnable;
        // VkBool32 => iggyvolz\vulkan\generator\Transformer\BoolTransformer
        $cValue = $phpValue ? 1 : 0;
        $depthBoundsTestEnable = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetDepthBoundsTestEnable", $commandBuffer, $depthBoundsTestEnable);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param bool $stencilTestEnable
     * @return void
     */
    public function vkCmdSetStencilTestEnable(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        bool $stencilTestEnable,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $stencilTestEnable;
        // VkBool32 => iggyvolz\vulkan\generator\Transformer\BoolTransformer
        $cValue = $phpValue ? 1 : 0;
        $stencilTestEnable = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetStencilTestEnable", $commandBuffer, $stencilTestEnable);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param list<\iggyvolz\vulkan\enum\VkStencilFaceFlagBits> $faceMask
     * @param \iggyvolz\vulkan\enum\VkStencilOp $failOp
     * @param \iggyvolz\vulkan\enum\VkStencilOp $passOp
     * @param \iggyvolz\vulkan\enum\VkStencilOp $depthFailOp
     * @param \iggyvolz\vulkan\enum\VkCompareOp $compareOp
     * @return void
     */
    public function vkCmdSetStencilOp(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        array $faceMask,
        \iggyvolz\vulkan\enum\VkStencilOp $failOp,
        \iggyvolz\vulkan\enum\VkStencilOp $passOp,
        \iggyvolz\vulkan\enum\VkStencilOp $depthFailOp,
        \iggyvolz\vulkan\enum\VkCompareOp $compareOp,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $faceMask;
        // VkStencilFaceFlags => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkStencilFaceFlagBits::toInt(...$phpValue);
        $faceMask = $cValue;
        $phpValue = $failOp;
        // VkStencilOp => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $failOp = $cValue;
        $phpValue = $passOp;
        // VkStencilOp => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $passOp = $cValue;
        $phpValue = $depthFailOp;
        // VkStencilOp => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $depthFailOp = $cValue;
        $phpValue = $compareOp;
        // VkCompareOp => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $compareOp = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetStencilOp", $commandBuffer, $faceMask, $failOp, $passOp, $depthFailOp, $compareOp);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param bool $rasterizerDiscardEnable
     * @return void
     */
    public function vkCmdSetRasterizerDiscardEnable(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        bool $rasterizerDiscardEnable,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $rasterizerDiscardEnable;
        // VkBool32 => iggyvolz\vulkan\generator\Transformer\BoolTransformer
        $cValue = $phpValue ? 1 : 0;
        $rasterizerDiscardEnable = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetRasterizerDiscardEnable", $commandBuffer, $rasterizerDiscardEnable);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param bool $depthBiasEnable
     * @return void
     */
    public function vkCmdSetDepthBiasEnable(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        bool $depthBiasEnable,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $depthBiasEnable;
        // VkBool32 => iggyvolz\vulkan\generator\Transformer\BoolTransformer
        $cValue = $phpValue ? 1 : 0;
        $depthBiasEnable = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetDepthBiasEnable", $commandBuffer, $depthBiasEnable);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param bool $primitiveRestartEnable
     * @return void
     */
    public function vkCmdSetPrimitiveRestartEnable(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        bool $primitiveRestartEnable,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $primitiveRestartEnable;
        // VkBool32 => iggyvolz\vulkan\generator\Transformer\BoolTransformer
        $cValue = $phpValue ? 1 : 0;
        $primitiveRestartEnable = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetPrimitiveRestartEnable", $commandBuffer, $primitiveRestartEnable);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkPrivateDataSlotCreateInfo $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreatePrivateDataSlot(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkPrivateDataSlotCreateInfo $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCreateInfo;
        // const VkPrivateDataSlotCreateInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkPrivateDataSlot $privateDataSlot
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroyPrivateDataSlot(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkPrivateDataSlot $privateDataSlot,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $privateDataSlot;
        // VkPrivateDataSlot => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $privateDataSlot = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroyPrivateDataSlot", $device, $privateDataSlot, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\enum\VkObjectType $objectType
     * @param int $objectHandle
     * @param \iggyvolz\vulkan\struct\VkPrivateDataSlot $privateDataSlot
     * @param int $data
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkSetPrivateData(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\enum\VkObjectType $objectType,
        int $objectHandle,
        \iggyvolz\vulkan\struct\VkPrivateDataSlot $privateDataSlot,
        int $data,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $objectType;
        // VkObjectType => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $objectType = $cValue;
        $phpValue = $objectHandle;
        // uint64_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $objectHandle = $cValue;
        $phpValue = $privateDataSlot;
        // VkPrivateDataSlot => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $privateDataSlot = $cValue;
        $phpValue = $data;
        // uint64_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $data = $cValue;
        $cValue = $this->vulkan->call("vkSetPrivateData", $device, $objectType, $objectHandle, $privateDataSlot, $data);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\enum\VkObjectType $objectType
     * @param int $objectHandle
     * @param \iggyvolz\vulkan\struct\VkPrivateDataSlot $privateDataSlot
     * @param \iggyvolz\vulkan\util\IntPointer $pData
     * @return void
     */
    public function vkGetPrivateData(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\enum\VkObjectType $objectType,
        int $objectHandle,
        \iggyvolz\vulkan\struct\VkPrivateDataSlot $privateDataSlot,
        \iggyvolz\vulkan\util\IntPointer $pData,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $objectType;
        // VkObjectType => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $objectType = $cValue;
        $phpValue = $objectHandle;
        // uint64_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $objectHandle = $cValue;
        $phpValue = $privateDataSlot;
        // VkPrivateDataSlot => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $privateDataSlot = $cValue;
        $phpValue = $pData;
        // uint64_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pData = $cValue;
        $cValue = $this->vulkan->call("vkGetPrivateData", $device, $objectType, $objectHandle, $privateDataSlot, $pData);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkCopyBufferInfo2 $pCopyBufferInfo
     * @return void
     */
    public function vkCmdCopyBuffer2(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkCopyBufferInfo2 $pCopyBufferInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pCopyBufferInfo;
        // const VkCopyBufferInfo2* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCopyBufferInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdCopyBuffer2", $commandBuffer, $pCopyBufferInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkCopyImageInfo2 $pCopyImageInfo
     * @return void
     */
    public function vkCmdCopyImage2(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkCopyImageInfo2 $pCopyImageInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pCopyImageInfo;
        // const VkCopyImageInfo2* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCopyImageInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdCopyImage2", $commandBuffer, $pCopyImageInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkBlitImageInfo2 $pBlitImageInfo
     * @return void
     */
    public function vkCmdBlitImage2(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkBlitImageInfo2 $pBlitImageInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pBlitImageInfo;
        // const VkBlitImageInfo2* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pBlitImageInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdBlitImage2", $commandBuffer, $pBlitImageInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkCopyBufferToImageInfo2 $pCopyBufferToImageInfo
     * @return void
     */
    public function vkCmdCopyBufferToImage2(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkCopyBufferToImageInfo2 $pCopyBufferToImageInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pCopyBufferToImageInfo;
        // const VkCopyBufferToImageInfo2* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCopyBufferToImageInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdCopyBufferToImage2", $commandBuffer, $pCopyBufferToImageInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkCopyImageToBufferInfo2 $pCopyImageToBufferInfo
     * @return void
     */
    public function vkCmdCopyImageToBuffer2(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkCopyImageToBufferInfo2 $pCopyImageToBufferInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pCopyImageToBufferInfo;
        // const VkCopyImageToBufferInfo2* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCopyImageToBufferInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdCopyImageToBuffer2", $commandBuffer, $pCopyImageToBufferInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkResolveImageInfo2 $pResolveImageInfo
     * @return void
     */
    public function vkCmdResolveImage2(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkResolveImageInfo2 $pResolveImageInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pResolveImageInfo;
        // const VkResolveImageInfo2* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pResolveImageInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdResolveImage2", $commandBuffer, $pResolveImageInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkEvent $event
     * @param \iggyvolz\vulkan\struct\VkDependencyInfo $pDependencyInfo
     * @return void
     */
    public function vkCmdSetEvent2(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkEvent $event,
        \iggyvolz\vulkan\struct\VkDependencyInfo $pDependencyInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $event;
        // VkEvent => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $event = $cValue;
        $phpValue = $pDependencyInfo;
        // const VkDependencyInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pDependencyInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetEvent2", $commandBuffer, $event, $pDependencyInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkEvent $event
     * @param list<\iggyvolz\vulkan\enum\VkPipelineStageFlagBits2> $stageMask
     * @return void
     */
    public function vkCmdResetEvent2(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkEvent $event,
        array $stageMask,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $event;
        // VkEvent => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $event = $cValue;
        $phpValue = $stageMask;
        // VkPipelineStageFlags2 => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits2::toInt(...$phpValue);
        $stageMask = $cValue;
        $cValue = $this->vulkan->call("vkCmdResetEvent2", $commandBuffer, $event, $stageMask);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $eventCount
     * @param \iggyvolz\vulkan\struct\VkEvent $pEvents
     * @param \iggyvolz\vulkan\struct\VkDependencyInfo $pDependencyInfos
     * @return void
     */
    public function vkCmdWaitEvents2(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $eventCount,
        \iggyvolz\vulkan\struct\VkEvent $pEvents,
        \iggyvolz\vulkan\struct\VkDependencyInfo $pDependencyInfos,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $eventCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $eventCount = $cValue;
        $phpValue = $pEvents;
        // const VkEvent* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pEvents = $cValue;
        $phpValue = $pDependencyInfos;
        // const VkDependencyInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pDependencyInfos = $cValue;
        $cValue = $this->vulkan->call("vkCmdWaitEvents2", $commandBuffer, $eventCount, $pEvents, $pDependencyInfos);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkDependencyInfo $pDependencyInfo
     * @return void
     */
    public function vkCmdPipelineBarrier2(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkDependencyInfo $pDependencyInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pDependencyInfo;
        // const VkDependencyInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pDependencyInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdPipelineBarrier2", $commandBuffer, $pDependencyInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkQueue $queue
     * @param int $submitCount
     * @param \iggyvolz\vulkan\struct\VkSubmitInfo2 $pSubmits
     * @param \iggyvolz\vulkan\struct\VkFence $fence
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkQueueSubmit2(
        \iggyvolz\vulkan\struct\VkQueue $queue,
        int $submitCount,
        \iggyvolz\vulkan\struct\VkSubmitInfo2 $pSubmits,
        \iggyvolz\vulkan\struct\VkFence $fence,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $queue;
        // VkQueue => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $queue = $cValue;
        $phpValue = $submitCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $submitCount = $cValue;
        $phpValue = $pSubmits;
        // const VkSubmitInfo2* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pSubmits = $cValue;
        $phpValue = $fence;
        // VkFence => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $fence = $cValue;
        $cValue = $this->vulkan->call("vkQueueSubmit2", $queue, $submitCount, $pSubmits, $fence);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param list<\iggyvolz\vulkan\enum\VkPipelineStageFlagBits2> $stage
     * @param \iggyvolz\vulkan\struct\VkQueryPool $queryPool
     * @param int $query
     * @return void
     */
    public function vkCmdWriteTimestamp2(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        array $stage,
        \iggyvolz\vulkan\struct\VkQueryPool $queryPool,
        int $query,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $stage;
        // VkPipelineStageFlags2 => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits2::toInt(...$phpValue);
        $stage = $cValue;
        $phpValue = $queryPool;
        // VkQueryPool => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $queryPool = $cValue;
        $phpValue = $query;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $query = $cValue;
        $cValue = $this->vulkan->call("vkCmdWriteTimestamp2", $commandBuffer, $stage, $queryPool, $query);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkRenderingInfo $pRenderingInfo
     * @return void
     */
    public function vkCmdBeginRendering(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkRenderingInfo $pRenderingInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pRenderingInfo;
        // const VkRenderingInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pRenderingInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdBeginRendering", $commandBuffer, $pRenderingInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @return void
     */
    public function vkCmdEndRendering(\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer): void
    {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $cValue = $this->vulkan->call("vkCmdEndRendering", $commandBuffer);
    }
}
