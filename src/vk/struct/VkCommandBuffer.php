<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkCommandBuffer implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return ['_type' => static::class];
    }

    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \iggyvolz\vulkan\Vulkan $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCommandBufferBeginInfo> $pBeginInfo const VkCommandBufferBeginInfo*
     * returns VkResult
     */
    public function beginCommandBuffer(
        \iggyvolz\vulkan\util\ObjectPointer $pBeginInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pBeginInfo;
        $cValue = $phpValue->cdata;
        $pBeginInfoC = $cValue;
        $cValue = $this->exec('vkBeginCommandBuffer',
            $pBeginInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * returns VkResult
     */
    public function endCommandBuffer(): \iggyvolz\vulkan\enum\VkResult
    {
        $cValue = $this->exec('vkEndCommandBuffer',
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param list<\iggyvolz\vulkan\enum\VkCommandBufferResetFlagBits> $flags VkCommandBufferResetFlags
     * returns VkResult
     */
    public function resetCommandBuffer(array $flags): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $flags;
        $cValue = \iggyvolz\vulkan\enum\VkCommandBufferResetFlagBits::toInt(...$phpValue);
        $flagsC = $cValue;
        $cValue = $this->exec('vkResetCommandBuffer',
            $flagsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint VkPipelineBindPoint
     * @param \iggyvolz\vulkan\struct\VkPipeline $pipeline VkPipeline
     */
    public function cmdBindPipeline(
        \iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint,
        VkPipeline $pipeline,
    ): void
    {
        $phpValue = $pipelineBindPoint;
        $cValue = $phpValue->value;
        $pipelineBindPointC = $cValue;
        $phpValue = $pipeline;
        $cValue = $phpValue->cdata;
        $pipelineC = $cValue;
        $cValue = $this->exec('vkCmdBindPipeline',
            $pipelineBindPointC,
            $pipelineC,
        );
    }

    /**
     * @param list<\iggyvolz\vulkan\enum\VkImageAspectFlagBits> $aspectMask VkImageAspectFlags
     */
    public function cmdSetAttachmentFeedbackLoopEnableEXT(array $aspectMask): void
    {
        $phpValue = $aspectMask;
        $cValue = \iggyvolz\vulkan\enum\VkImageAspectFlagBits::toInt(...$phpValue);
        $aspectMaskC = $cValue;
        $cValue = $this->exec('vkCmdSetAttachmentFeedbackLoopEnableEXT',
            $aspectMaskC,
        );
    }

    /**
     * @param int $firstViewport uint32_t
     * @param int $viewportCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkViewport> $pViewports const VkViewport*
     */
    public function cmdSetViewport(
        int $firstViewport,
        int $viewportCount,
        \iggyvolz\vulkan\util\ObjectPointer $pViewports,
    ): void
    {
        $phpValue = $firstViewport;
        $cValue = $phpValue;
        $firstViewportC = $cValue;
        $phpValue = $viewportCount;
        $cValue = $phpValue;
        $viewportCountC = $cValue;
        $phpValue = $pViewports;
        $cValue = $phpValue->cdata;
        $pViewportsC = $cValue;
        $cValue = $this->exec('vkCmdSetViewport',
            $firstViewportC,
            $viewportCountC,
            $pViewportsC,
        );
    }

    /**
     * @param int $firstScissor uint32_t
     * @param int $scissorCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRect2D> $pScissors const VkRect2D*
     */
    public function cmdSetScissor(
        int $firstScissor,
        int $scissorCount,
        \iggyvolz\vulkan\util\ObjectPointer $pScissors,
    ): void
    {
        $phpValue = $firstScissor;
        $cValue = $phpValue;
        $firstScissorC = $cValue;
        $phpValue = $scissorCount;
        $cValue = $phpValue;
        $scissorCountC = $cValue;
        $phpValue = $pScissors;
        $cValue = $phpValue->cdata;
        $pScissorsC = $cValue;
        $cValue = $this->exec('vkCmdSetScissor',
            $firstScissorC,
            $scissorCountC,
            $pScissorsC,
        );
    }

    /**
     * @param float $lineWidth float
     */
    public function cmdSetLineWidth(float $lineWidth): void
    {
        $phpValue = $lineWidth;
        $cValue = $phpValue;
        $lineWidthC = $cValue;
        $cValue = $this->exec('vkCmdSetLineWidth',
            $lineWidthC,
        );
    }

    /**
     * @param float $depthBiasConstantFactor float
     * @param float $depthBiasClamp float
     * @param float $depthBiasSlopeFactor float
     */
    public function cmdSetDepthBias(
        float $depthBiasConstantFactor,
        float $depthBiasClamp,
        float $depthBiasSlopeFactor,
    ): void
    {
        $phpValue = $depthBiasConstantFactor;
        $cValue = $phpValue;
        $depthBiasConstantFactorC = $cValue;
        $phpValue = $depthBiasClamp;
        $cValue = $phpValue;
        $depthBiasClampC = $cValue;
        $phpValue = $depthBiasSlopeFactor;
        $cValue = $phpValue;
        $depthBiasSlopeFactorC = $cValue;
        $cValue = $this->exec('vkCmdSetDepthBias',
            $depthBiasConstantFactorC,
            $depthBiasClampC,
            $depthBiasSlopeFactorC,
        );
    }

    /**
     * @param mixed $blendConstants const float [4]
     */
    public function cmdSetBlendConstants(mixed $blendConstants): void
    {
        $phpValue = $blendConstants;
        throw new \LogicException("Dummy transformer!");
        $blendConstantsC = $cValue;
        $cValue = $this->exec('vkCmdSetBlendConstants',
            $blendConstantsC,
        );
    }

    /**
     * @param float $minDepthBounds float
     * @param float $maxDepthBounds float
     */
    public function cmdSetDepthBounds(float $minDepthBounds, float $maxDepthBounds): void
    {
        $phpValue = $minDepthBounds;
        $cValue = $phpValue;
        $minDepthBoundsC = $cValue;
        $phpValue = $maxDepthBounds;
        $cValue = $phpValue;
        $maxDepthBoundsC = $cValue;
        $cValue = $this->exec('vkCmdSetDepthBounds',
            $minDepthBoundsC,
            $maxDepthBoundsC,
        );
    }

    /**
     * @param list<\iggyvolz\vulkan\enum\VkStencilFaceFlagBits> $faceMask VkStencilFaceFlags
     * @param int $compareMask uint32_t
     */
    public function cmdSetStencilCompareMask(array $faceMask, int $compareMask): void
    {
        $phpValue = $faceMask;
        $cValue = \iggyvolz\vulkan\enum\VkStencilFaceFlagBits::toInt(...$phpValue);
        $faceMaskC = $cValue;
        $phpValue = $compareMask;
        $cValue = $phpValue;
        $compareMaskC = $cValue;
        $cValue = $this->exec('vkCmdSetStencilCompareMask',
            $faceMaskC,
            $compareMaskC,
        );
    }

    /**
     * @param list<\iggyvolz\vulkan\enum\VkStencilFaceFlagBits> $faceMask VkStencilFaceFlags
     * @param int $writeMask uint32_t
     */
    public function cmdSetStencilWriteMask(array $faceMask, int $writeMask): void
    {
        $phpValue = $faceMask;
        $cValue = \iggyvolz\vulkan\enum\VkStencilFaceFlagBits::toInt(...$phpValue);
        $faceMaskC = $cValue;
        $phpValue = $writeMask;
        $cValue = $phpValue;
        $writeMaskC = $cValue;
        $cValue = $this->exec('vkCmdSetStencilWriteMask',
            $faceMaskC,
            $writeMaskC,
        );
    }

    /**
     * @param list<\iggyvolz\vulkan\enum\VkStencilFaceFlagBits> $faceMask VkStencilFaceFlags
     * @param int $reference uint32_t
     */
    public function cmdSetStencilReference(array $faceMask, int $reference): void
    {
        $phpValue = $faceMask;
        $cValue = \iggyvolz\vulkan\enum\VkStencilFaceFlagBits::toInt(...$phpValue);
        $faceMaskC = $cValue;
        $phpValue = $reference;
        $cValue = $phpValue;
        $referenceC = $cValue;
        $cValue = $this->exec('vkCmdSetStencilReference',
            $faceMaskC,
            $referenceC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint VkPipelineBindPoint
     * @param \iggyvolz\vulkan\struct\VkPipelineLayout $layout VkPipelineLayout
     * @param int $firstSet uint32_t
     * @param int $descriptorSetCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDescriptorSet> $pDescriptorSets const VkDescriptorSet*
     * @param int $dynamicOffsetCount uint32_t
     * @param \iggyvolz\vulkan\util\IntPointer $pDynamicOffsets const uint32_t*
     */
    public function cmdBindDescriptorSets(
        \iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint,
        VkPipelineLayout $layout,
        int $firstSet,
        int $descriptorSetCount,
        \iggyvolz\vulkan\util\ObjectPointer $pDescriptorSets,
        int $dynamicOffsetCount,
        \iggyvolz\vulkan\util\IntPointer $pDynamicOffsets,
    ): void
    {
        $phpValue = $pipelineBindPoint;
        $cValue = $phpValue->value;
        $pipelineBindPointC = $cValue;
        $phpValue = $layout;
        $cValue = $phpValue->cdata;
        $layoutC = $cValue;
        $phpValue = $firstSet;
        $cValue = $phpValue;
        $firstSetC = $cValue;
        $phpValue = $descriptorSetCount;
        $cValue = $phpValue;
        $descriptorSetCountC = $cValue;
        $phpValue = $pDescriptorSets;
        $cValue = $phpValue->cdata;
        $pDescriptorSetsC = $cValue;
        $phpValue = $dynamicOffsetCount;
        $cValue = $phpValue;
        $dynamicOffsetCountC = $cValue;
        $phpValue = $pDynamicOffsets;
        $cValue = $phpValue->cdata;
        $pDynamicOffsetsC = $cValue;
        $cValue = $this->exec('vkCmdBindDescriptorSets',
            $pipelineBindPointC,
            $layoutC,
            $firstSetC,
            $descriptorSetCountC,
            $pDescriptorSetsC,
            $dynamicOffsetCountC,
            $pDynamicOffsetsC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkBuffer $buffer VkBuffer
     * @param int $offset VkDeviceSize
     * @param \iggyvolz\vulkan\enum\VkIndexType $indexType VkIndexType
     */
    public function cmdBindIndexBuffer(
        VkBuffer $buffer,
        int $offset,
        \iggyvolz\vulkan\enum\VkIndexType $indexType,
    ): void
    {
        $phpValue = $buffer;
        $cValue = $phpValue->cdata;
        $bufferC = $cValue;
        $phpValue = $offset;
        $cValue = $phpValue;
        $offsetC = $cValue;
        $phpValue = $indexType;
        $cValue = $phpValue->value;
        $indexTypeC = $cValue;
        $cValue = $this->exec('vkCmdBindIndexBuffer',
            $bufferC,
            $offsetC,
            $indexTypeC,
        );
    }

    /**
     * @param int $firstBinding uint32_t
     * @param int $bindingCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBuffer> $pBuffers const VkBuffer*
     * @param \iggyvolz\vulkan\util\Pointer $pOffsets const VkDeviceSize*
     */
    public function cmdBindVertexBuffers(
        int $firstBinding,
        int $bindingCount,
        \iggyvolz\vulkan\util\ObjectPointer $pBuffers,
        \iggyvolz\vulkan\util\Pointer $pOffsets,
    ): void
    {
        $phpValue = $firstBinding;
        $cValue = $phpValue;
        $firstBindingC = $cValue;
        $phpValue = $bindingCount;
        $cValue = $phpValue;
        $bindingCountC = $cValue;
        $phpValue = $pBuffers;
        $cValue = $phpValue->cdata;
        $pBuffersC = $cValue;
        $phpValue = $pOffsets;
        $cValue = $phpValue->cdata;
        $pOffsetsC = $cValue;
        $cValue = $this->exec('vkCmdBindVertexBuffers',
            $firstBindingC,
            $bindingCountC,
            $pBuffersC,
            $pOffsetsC,
        );
    }

    /**
     * @param int $vertexCount uint32_t
     * @param int $instanceCount uint32_t
     * @param int $firstVertex uint32_t
     * @param int $firstInstance uint32_t
     */
    public function cmdDraw(int $vertexCount, int $instanceCount, int $firstVertex, int $firstInstance): void
    {
        $phpValue = $vertexCount;
        $cValue = $phpValue;
        $vertexCountC = $cValue;
        $phpValue = $instanceCount;
        $cValue = $phpValue;
        $instanceCountC = $cValue;
        $phpValue = $firstVertex;
        $cValue = $phpValue;
        $firstVertexC = $cValue;
        $phpValue = $firstInstance;
        $cValue = $phpValue;
        $firstInstanceC = $cValue;
        $cValue = $this->exec('vkCmdDraw',
            $vertexCountC,
            $instanceCountC,
            $firstVertexC,
            $firstInstanceC,
        );
    }

    /**
     * @param int $indexCount uint32_t
     * @param int $instanceCount uint32_t
     * @param int $firstIndex uint32_t
     * @param int $vertexOffset int32_t
     * @param int $firstInstance uint32_t
     */
    public function cmdDrawIndexed(
        int $indexCount,
        int $instanceCount,
        int $firstIndex,
        int $vertexOffset,
        int $firstInstance,
    ): void
    {
        $phpValue = $indexCount;
        $cValue = $phpValue;
        $indexCountC = $cValue;
        $phpValue = $instanceCount;
        $cValue = $phpValue;
        $instanceCountC = $cValue;
        $phpValue = $firstIndex;
        $cValue = $phpValue;
        $firstIndexC = $cValue;
        $phpValue = $vertexOffset;
        $cValue = $phpValue;
        $vertexOffsetC = $cValue;
        $phpValue = $firstInstance;
        $cValue = $phpValue;
        $firstInstanceC = $cValue;
        $cValue = $this->exec('vkCmdDrawIndexed',
            $indexCountC,
            $instanceCountC,
            $firstIndexC,
            $vertexOffsetC,
            $firstInstanceC,
        );
    }

    /**
     * @param int $drawCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMultiDrawInfoEXT> $pVertexInfo const VkMultiDrawInfoEXT*
     * @param int $instanceCount uint32_t
     * @param int $firstInstance uint32_t
     * @param int $stride uint32_t
     */
    public function cmdDrawMultiEXT(
        int $drawCount,
        \iggyvolz\vulkan\util\ObjectPointer $pVertexInfo,
        int $instanceCount,
        int $firstInstance,
        int $stride,
    ): void
    {
        $phpValue = $drawCount;
        $cValue = $phpValue;
        $drawCountC = $cValue;
        $phpValue = $pVertexInfo;
        $cValue = $phpValue->cdata;
        $pVertexInfoC = $cValue;
        $phpValue = $instanceCount;
        $cValue = $phpValue;
        $instanceCountC = $cValue;
        $phpValue = $firstInstance;
        $cValue = $phpValue;
        $firstInstanceC = $cValue;
        $phpValue = $stride;
        $cValue = $phpValue;
        $strideC = $cValue;
        $cValue = $this->exec('vkCmdDrawMultiEXT',
            $drawCountC,
            $pVertexInfoC,
            $instanceCountC,
            $firstInstanceC,
            $strideC,
        );
    }

    /**
     * @param int $drawCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMultiDrawIndexedInfoEXT> $pIndexInfo const VkMultiDrawIndexedInfoEXT*
     * @param int $instanceCount uint32_t
     * @param int $firstInstance uint32_t
     * @param int $stride uint32_t
     * @param \iggyvolz\vulkan\util\Pointer $pVertexOffset const int32_t*
     */
    public function cmdDrawMultiIndexedEXT(
        int $drawCount,
        \iggyvolz\vulkan\util\ObjectPointer $pIndexInfo,
        int $instanceCount,
        int $firstInstance,
        int $stride,
        \iggyvolz\vulkan\util\Pointer $pVertexOffset,
    ): void
    {
        $phpValue = $drawCount;
        $cValue = $phpValue;
        $drawCountC = $cValue;
        $phpValue = $pIndexInfo;
        $cValue = $phpValue->cdata;
        $pIndexInfoC = $cValue;
        $phpValue = $instanceCount;
        $cValue = $phpValue;
        $instanceCountC = $cValue;
        $phpValue = $firstInstance;
        $cValue = $phpValue;
        $firstInstanceC = $cValue;
        $phpValue = $stride;
        $cValue = $phpValue;
        $strideC = $cValue;
        $phpValue = $pVertexOffset;
        $cValue = $phpValue->cdata;
        $pVertexOffsetC = $cValue;
        $cValue = $this->exec('vkCmdDrawMultiIndexedEXT',
            $drawCountC,
            $pIndexInfoC,
            $instanceCountC,
            $firstInstanceC,
            $strideC,
            $pVertexOffsetC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkBuffer $buffer VkBuffer
     * @param int $offset VkDeviceSize
     * @param int $drawCount uint32_t
     * @param int $stride uint32_t
     */
    public function cmdDrawIndirect(VkBuffer $buffer, int $offset, int $drawCount, int $stride): void
    {
        $phpValue = $buffer;
        $cValue = $phpValue->cdata;
        $bufferC = $cValue;
        $phpValue = $offset;
        $cValue = $phpValue;
        $offsetC = $cValue;
        $phpValue = $drawCount;
        $cValue = $phpValue;
        $drawCountC = $cValue;
        $phpValue = $stride;
        $cValue = $phpValue;
        $strideC = $cValue;
        $cValue = $this->exec('vkCmdDrawIndirect',
            $bufferC,
            $offsetC,
            $drawCountC,
            $strideC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkBuffer $buffer VkBuffer
     * @param int $offset VkDeviceSize
     * @param int $drawCount uint32_t
     * @param int $stride uint32_t
     */
    public function cmdDrawIndexedIndirect(VkBuffer $buffer, int $offset, int $drawCount, int $stride): void
    {
        $phpValue = $buffer;
        $cValue = $phpValue->cdata;
        $bufferC = $cValue;
        $phpValue = $offset;
        $cValue = $phpValue;
        $offsetC = $cValue;
        $phpValue = $drawCount;
        $cValue = $phpValue;
        $drawCountC = $cValue;
        $phpValue = $stride;
        $cValue = $phpValue;
        $strideC = $cValue;
        $cValue = $this->exec('vkCmdDrawIndexedIndirect',
            $bufferC,
            $offsetC,
            $drawCountC,
            $strideC,
        );
    }

    /**
     * @param int $groupCountX uint32_t
     * @param int $groupCountY uint32_t
     * @param int $groupCountZ uint32_t
     */
    public function cmdDispatch(int $groupCountX, int $groupCountY, int $groupCountZ): void
    {
        $phpValue = $groupCountX;
        $cValue = $phpValue;
        $groupCountXC = $cValue;
        $phpValue = $groupCountY;
        $cValue = $phpValue;
        $groupCountYC = $cValue;
        $phpValue = $groupCountZ;
        $cValue = $phpValue;
        $groupCountZC = $cValue;
        $cValue = $this->exec('vkCmdDispatch',
            $groupCountXC,
            $groupCountYC,
            $groupCountZC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkBuffer $buffer VkBuffer
     * @param int $offset VkDeviceSize
     */
    public function cmdDispatchIndirect(VkBuffer $buffer, int $offset): void
    {
        $phpValue = $buffer;
        $cValue = $phpValue->cdata;
        $bufferC = $cValue;
        $phpValue = $offset;
        $cValue = $phpValue;
        $offsetC = $cValue;
        $cValue = $this->exec('vkCmdDispatchIndirect',
            $bufferC,
            $offsetC,
        );
    }

    public function cmdSubpassShadingHUAWEI(): void
    {
        $cValue = $this->exec('vkCmdSubpassShadingHUAWEI',
        );
    }

    /**
     * @param int $groupCountX uint32_t
     * @param int $groupCountY uint32_t
     * @param int $groupCountZ uint32_t
     */
    public function cmdDrawClusterHUAWEI(int $groupCountX, int $groupCountY, int $groupCountZ): void
    {
        $phpValue = $groupCountX;
        $cValue = $phpValue;
        $groupCountXC = $cValue;
        $phpValue = $groupCountY;
        $cValue = $phpValue;
        $groupCountYC = $cValue;
        $phpValue = $groupCountZ;
        $cValue = $phpValue;
        $groupCountZC = $cValue;
        $cValue = $this->exec('vkCmdDrawClusterHUAWEI',
            $groupCountXC,
            $groupCountYC,
            $groupCountZC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkBuffer $buffer VkBuffer
     * @param int $offset VkDeviceSize
     */
    public function cmdDrawClusterIndirectHUAWEI(VkBuffer $buffer, int $offset): void
    {
        $phpValue = $buffer;
        $cValue = $phpValue->cdata;
        $bufferC = $cValue;
        $phpValue = $offset;
        $cValue = $phpValue;
        $offsetC = $cValue;
        $cValue = $this->exec('vkCmdDrawClusterIndirectHUAWEI',
            $bufferC,
            $offsetC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint VkPipelineBindPoint
     * @param \iggyvolz\vulkan\struct\VkPipeline $pipeline VkPipeline
     */
    public function cmdUpdatePipelineIndirectBufferNV(
        \iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint,
        VkPipeline $pipeline,
    ): void
    {
        $phpValue = $pipelineBindPoint;
        $cValue = $phpValue->value;
        $pipelineBindPointC = $cValue;
        $phpValue = $pipeline;
        $cValue = $phpValue->cdata;
        $pipelineC = $cValue;
        $cValue = $this->exec('vkCmdUpdatePipelineIndirectBufferNV',
            $pipelineBindPointC,
            $pipelineC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkBuffer $srcBuffer VkBuffer
     * @param \iggyvolz\vulkan\struct\VkBuffer $dstBuffer VkBuffer
     * @param int $regionCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBufferCopy> $pRegions const VkBufferCopy*
     */
    public function cmdCopyBuffer(
        VkBuffer $srcBuffer,
        VkBuffer $dstBuffer,
        int $regionCount,
        \iggyvolz\vulkan\util\ObjectPointer $pRegions,
    ): void
    {
        $phpValue = $srcBuffer;
        $cValue = $phpValue->cdata;
        $srcBufferC = $cValue;
        $phpValue = $dstBuffer;
        $cValue = $phpValue->cdata;
        $dstBufferC = $cValue;
        $phpValue = $regionCount;
        $cValue = $phpValue;
        $regionCountC = $cValue;
        $phpValue = $pRegions;
        $cValue = $phpValue->cdata;
        $pRegionsC = $cValue;
        $cValue = $this->exec('vkCmdCopyBuffer',
            $srcBufferC,
            $dstBufferC,
            $regionCountC,
            $pRegionsC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkImage $srcImage VkImage
     * @param \iggyvolz\vulkan\enum\VkImageLayout $srcImageLayout VkImageLayout
     * @param \iggyvolz\vulkan\struct\VkImage $dstImage VkImage
     * @param \iggyvolz\vulkan\enum\VkImageLayout $dstImageLayout VkImageLayout
     * @param int $regionCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageCopy> $pRegions const VkImageCopy*
     */
    public function cmdCopyImage(
        VkImage $srcImage,
        \iggyvolz\vulkan\enum\VkImageLayout $srcImageLayout,
        VkImage $dstImage,
        \iggyvolz\vulkan\enum\VkImageLayout $dstImageLayout,
        int $regionCount,
        \iggyvolz\vulkan\util\ObjectPointer $pRegions,
    ): void
    {
        $phpValue = $srcImage;
        $cValue = $phpValue->cdata;
        $srcImageC = $cValue;
        $phpValue = $srcImageLayout;
        $cValue = $phpValue->value;
        $srcImageLayoutC = $cValue;
        $phpValue = $dstImage;
        $cValue = $phpValue->cdata;
        $dstImageC = $cValue;
        $phpValue = $dstImageLayout;
        $cValue = $phpValue->value;
        $dstImageLayoutC = $cValue;
        $phpValue = $regionCount;
        $cValue = $phpValue;
        $regionCountC = $cValue;
        $phpValue = $pRegions;
        $cValue = $phpValue->cdata;
        $pRegionsC = $cValue;
        $cValue = $this->exec('vkCmdCopyImage',
            $srcImageC,
            $srcImageLayoutC,
            $dstImageC,
            $dstImageLayoutC,
            $regionCountC,
            $pRegionsC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkImage $srcImage VkImage
     * @param \iggyvolz\vulkan\enum\VkImageLayout $srcImageLayout VkImageLayout
     * @param \iggyvolz\vulkan\struct\VkImage $dstImage VkImage
     * @param \iggyvolz\vulkan\enum\VkImageLayout $dstImageLayout VkImageLayout
     * @param int $regionCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageBlit> $pRegions const VkImageBlit*
     * @param \iggyvolz\vulkan\enum\VkFilter $filter VkFilter
     */
    public function cmdBlitImage(
        VkImage $srcImage,
        \iggyvolz\vulkan\enum\VkImageLayout $srcImageLayout,
        VkImage $dstImage,
        \iggyvolz\vulkan\enum\VkImageLayout $dstImageLayout,
        int $regionCount,
        \iggyvolz\vulkan\util\ObjectPointer $pRegions,
        \iggyvolz\vulkan\enum\VkFilter $filter,
    ): void
    {
        $phpValue = $srcImage;
        $cValue = $phpValue->cdata;
        $srcImageC = $cValue;
        $phpValue = $srcImageLayout;
        $cValue = $phpValue->value;
        $srcImageLayoutC = $cValue;
        $phpValue = $dstImage;
        $cValue = $phpValue->cdata;
        $dstImageC = $cValue;
        $phpValue = $dstImageLayout;
        $cValue = $phpValue->value;
        $dstImageLayoutC = $cValue;
        $phpValue = $regionCount;
        $cValue = $phpValue;
        $regionCountC = $cValue;
        $phpValue = $pRegions;
        $cValue = $phpValue->cdata;
        $pRegionsC = $cValue;
        $phpValue = $filter;
        $cValue = $phpValue->value;
        $filterC = $cValue;
        $cValue = $this->exec('vkCmdBlitImage',
            $srcImageC,
            $srcImageLayoutC,
            $dstImageC,
            $dstImageLayoutC,
            $regionCountC,
            $pRegionsC,
            $filterC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkBuffer $srcBuffer VkBuffer
     * @param \iggyvolz\vulkan\struct\VkImage $dstImage VkImage
     * @param \iggyvolz\vulkan\enum\VkImageLayout $dstImageLayout VkImageLayout
     * @param int $regionCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBufferImageCopy> $pRegions const VkBufferImageCopy*
     */
    public function cmdCopyBufferToImage(
        VkBuffer $srcBuffer,
        VkImage $dstImage,
        \iggyvolz\vulkan\enum\VkImageLayout $dstImageLayout,
        int $regionCount,
        \iggyvolz\vulkan\util\ObjectPointer $pRegions,
    ): void
    {
        $phpValue = $srcBuffer;
        $cValue = $phpValue->cdata;
        $srcBufferC = $cValue;
        $phpValue = $dstImage;
        $cValue = $phpValue->cdata;
        $dstImageC = $cValue;
        $phpValue = $dstImageLayout;
        $cValue = $phpValue->value;
        $dstImageLayoutC = $cValue;
        $phpValue = $regionCount;
        $cValue = $phpValue;
        $regionCountC = $cValue;
        $phpValue = $pRegions;
        $cValue = $phpValue->cdata;
        $pRegionsC = $cValue;
        $cValue = $this->exec('vkCmdCopyBufferToImage',
            $srcBufferC,
            $dstImageC,
            $dstImageLayoutC,
            $regionCountC,
            $pRegionsC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkImage $srcImage VkImage
     * @param \iggyvolz\vulkan\enum\VkImageLayout $srcImageLayout VkImageLayout
     * @param \iggyvolz\vulkan\struct\VkBuffer $dstBuffer VkBuffer
     * @param int $regionCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBufferImageCopy> $pRegions const VkBufferImageCopy*
     */
    public function cmdCopyImageToBuffer(
        VkImage $srcImage,
        \iggyvolz\vulkan\enum\VkImageLayout $srcImageLayout,
        VkBuffer $dstBuffer,
        int $regionCount,
        \iggyvolz\vulkan\util\ObjectPointer $pRegions,
    ): void
    {
        $phpValue = $srcImage;
        $cValue = $phpValue->cdata;
        $srcImageC = $cValue;
        $phpValue = $srcImageLayout;
        $cValue = $phpValue->value;
        $srcImageLayoutC = $cValue;
        $phpValue = $dstBuffer;
        $cValue = $phpValue->cdata;
        $dstBufferC = $cValue;
        $phpValue = $regionCount;
        $cValue = $phpValue;
        $regionCountC = $cValue;
        $phpValue = $pRegions;
        $cValue = $phpValue->cdata;
        $pRegionsC = $cValue;
        $cValue = $this->exec('vkCmdCopyImageToBuffer',
            $srcImageC,
            $srcImageLayoutC,
            $dstBufferC,
            $regionCountC,
            $pRegionsC,
        );
    }

    /**
     * @param int $copyBufferAddress VkDeviceAddress
     * @param int $copyCount uint32_t
     * @param int $stride uint32_t
     */
    public function cmdCopyMemoryIndirectNV(int $copyBufferAddress, int $copyCount, int $stride): void
    {
        $phpValue = $copyBufferAddress;
        $cValue = $phpValue;
        $copyBufferAddressC = $cValue;
        $phpValue = $copyCount;
        $cValue = $phpValue;
        $copyCountC = $cValue;
        $phpValue = $stride;
        $cValue = $phpValue;
        $strideC = $cValue;
        $cValue = $this->exec('vkCmdCopyMemoryIndirectNV',
            $copyBufferAddressC,
            $copyCountC,
            $strideC,
        );
    }

    /**
     * @param int $copyBufferAddress VkDeviceAddress
     * @param int $copyCount uint32_t
     * @param int $stride uint32_t
     * @param \iggyvolz\vulkan\struct\VkImage $dstImage VkImage
     * @param \iggyvolz\vulkan\enum\VkImageLayout $dstImageLayout VkImageLayout
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageSubresourceLayers> $pImageSubresources const VkImageSubresourceLayers*
     */
    public function cmdCopyMemoryToImageIndirectNV(
        int $copyBufferAddress,
        int $copyCount,
        int $stride,
        VkImage $dstImage,
        \iggyvolz\vulkan\enum\VkImageLayout $dstImageLayout,
        \iggyvolz\vulkan\util\ObjectPointer $pImageSubresources,
    ): void
    {
        $phpValue = $copyBufferAddress;
        $cValue = $phpValue;
        $copyBufferAddressC = $cValue;
        $phpValue = $copyCount;
        $cValue = $phpValue;
        $copyCountC = $cValue;
        $phpValue = $stride;
        $cValue = $phpValue;
        $strideC = $cValue;
        $phpValue = $dstImage;
        $cValue = $phpValue->cdata;
        $dstImageC = $cValue;
        $phpValue = $dstImageLayout;
        $cValue = $phpValue->value;
        $dstImageLayoutC = $cValue;
        $phpValue = $pImageSubresources;
        $cValue = $phpValue->cdata;
        $pImageSubresourcesC = $cValue;
        $cValue = $this->exec('vkCmdCopyMemoryToImageIndirectNV',
            $copyBufferAddressC,
            $copyCountC,
            $strideC,
            $dstImageC,
            $dstImageLayoutC,
            $pImageSubresourcesC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkBuffer $dstBuffer VkBuffer
     * @param int $dstOffset VkDeviceSize
     * @param int $dataSize VkDeviceSize
     * @param \iggyvolz\vulkan\util\Pointer $pData const void*
     */
    public function cmdUpdateBuffer(
        VkBuffer $dstBuffer,
        int $dstOffset,
        int $dataSize,
        \iggyvolz\vulkan\util\Pointer $pData,
    ): void
    {
        $phpValue = $dstBuffer;
        $cValue = $phpValue->cdata;
        $dstBufferC = $cValue;
        $phpValue = $dstOffset;
        $cValue = $phpValue;
        $dstOffsetC = $cValue;
        $phpValue = $dataSize;
        $cValue = $phpValue;
        $dataSizeC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $cValue = $this->exec('vkCmdUpdateBuffer',
            $dstBufferC,
            $dstOffsetC,
            $dataSizeC,
            $pDataC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkBuffer $dstBuffer VkBuffer
     * @param int $dstOffset VkDeviceSize
     * @param int $size VkDeviceSize
     * @param int $data uint32_t
     */
    public function cmdFillBuffer(VkBuffer $dstBuffer, int $dstOffset, int $size, int $data): void
    {
        $phpValue = $dstBuffer;
        $cValue = $phpValue->cdata;
        $dstBufferC = $cValue;
        $phpValue = $dstOffset;
        $cValue = $phpValue;
        $dstOffsetC = $cValue;
        $phpValue = $size;
        $cValue = $phpValue;
        $sizeC = $cValue;
        $phpValue = $data;
        $cValue = $phpValue;
        $dataC = $cValue;
        $cValue = $this->exec('vkCmdFillBuffer',
            $dstBufferC,
            $dstOffsetC,
            $sizeC,
            $dataC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkImage $image VkImage
     * @param \iggyvolz\vulkan\enum\VkImageLayout $imageLayout VkImageLayout
     * @param \iggyvolz\vulkan\util\Pointer $pColor const VkClearColorValue*
     * @param int $rangeCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageSubresourceRange> $pRanges const VkImageSubresourceRange*
     */
    public function cmdClearColorImage(
        VkImage $image,
        \iggyvolz\vulkan\enum\VkImageLayout $imageLayout,
        \iggyvolz\vulkan\util\Pointer $pColor,
        int $rangeCount,
        \iggyvolz\vulkan\util\ObjectPointer $pRanges,
    ): void
    {
        $phpValue = $image;
        $cValue = $phpValue->cdata;
        $imageC = $cValue;
        $phpValue = $imageLayout;
        $cValue = $phpValue->value;
        $imageLayoutC = $cValue;
        $phpValue = $pColor;
        $cValue = $phpValue->cdata;
        $pColorC = $cValue;
        $phpValue = $rangeCount;
        $cValue = $phpValue;
        $rangeCountC = $cValue;
        $phpValue = $pRanges;
        $cValue = $phpValue->cdata;
        $pRangesC = $cValue;
        $cValue = $this->exec('vkCmdClearColorImage',
            $imageC,
            $imageLayoutC,
            $pColorC,
            $rangeCountC,
            $pRangesC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkImage $image VkImage
     * @param \iggyvolz\vulkan\enum\VkImageLayout $imageLayout VkImageLayout
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkClearDepthStencilValue> $pDepthStencil const VkClearDepthStencilValue*
     * @param int $rangeCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageSubresourceRange> $pRanges const VkImageSubresourceRange*
     */
    public function cmdClearDepthStencilImage(
        VkImage $image,
        \iggyvolz\vulkan\enum\VkImageLayout $imageLayout,
        \iggyvolz\vulkan\util\ObjectPointer $pDepthStencil,
        int $rangeCount,
        \iggyvolz\vulkan\util\ObjectPointer $pRanges,
    ): void
    {
        $phpValue = $image;
        $cValue = $phpValue->cdata;
        $imageC = $cValue;
        $phpValue = $imageLayout;
        $cValue = $phpValue->value;
        $imageLayoutC = $cValue;
        $phpValue = $pDepthStencil;
        $cValue = $phpValue->cdata;
        $pDepthStencilC = $cValue;
        $phpValue = $rangeCount;
        $cValue = $phpValue;
        $rangeCountC = $cValue;
        $phpValue = $pRanges;
        $cValue = $phpValue->cdata;
        $pRangesC = $cValue;
        $cValue = $this->exec('vkCmdClearDepthStencilImage',
            $imageC,
            $imageLayoutC,
            $pDepthStencilC,
            $rangeCountC,
            $pRangesC,
        );
    }

    /**
     * @param int $attachmentCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkClearAttachment> $pAttachments const VkClearAttachment*
     * @param int $rectCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkClearRect> $pRects const VkClearRect*
     */
    public function cmdClearAttachments(
        int $attachmentCount,
        \iggyvolz\vulkan\util\ObjectPointer $pAttachments,
        int $rectCount,
        \iggyvolz\vulkan\util\ObjectPointer $pRects,
    ): void
    {
        $phpValue = $attachmentCount;
        $cValue = $phpValue;
        $attachmentCountC = $cValue;
        $phpValue = $pAttachments;
        $cValue = $phpValue->cdata;
        $pAttachmentsC = $cValue;
        $phpValue = $rectCount;
        $cValue = $phpValue;
        $rectCountC = $cValue;
        $phpValue = $pRects;
        $cValue = $phpValue->cdata;
        $pRectsC = $cValue;
        $cValue = $this->exec('vkCmdClearAttachments',
            $attachmentCountC,
            $pAttachmentsC,
            $rectCountC,
            $pRectsC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkImage $srcImage VkImage
     * @param \iggyvolz\vulkan\enum\VkImageLayout $srcImageLayout VkImageLayout
     * @param \iggyvolz\vulkan\struct\VkImage $dstImage VkImage
     * @param \iggyvolz\vulkan\enum\VkImageLayout $dstImageLayout VkImageLayout
     * @param int $regionCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageResolve> $pRegions const VkImageResolve*
     */
    public function cmdResolveImage(
        VkImage $srcImage,
        \iggyvolz\vulkan\enum\VkImageLayout $srcImageLayout,
        VkImage $dstImage,
        \iggyvolz\vulkan\enum\VkImageLayout $dstImageLayout,
        int $regionCount,
        \iggyvolz\vulkan\util\ObjectPointer $pRegions,
    ): void
    {
        $phpValue = $srcImage;
        $cValue = $phpValue->cdata;
        $srcImageC = $cValue;
        $phpValue = $srcImageLayout;
        $cValue = $phpValue->value;
        $srcImageLayoutC = $cValue;
        $phpValue = $dstImage;
        $cValue = $phpValue->cdata;
        $dstImageC = $cValue;
        $phpValue = $dstImageLayout;
        $cValue = $phpValue->value;
        $dstImageLayoutC = $cValue;
        $phpValue = $regionCount;
        $cValue = $phpValue;
        $regionCountC = $cValue;
        $phpValue = $pRegions;
        $cValue = $phpValue->cdata;
        $pRegionsC = $cValue;
        $cValue = $this->exec('vkCmdResolveImage',
            $srcImageC,
            $srcImageLayoutC,
            $dstImageC,
            $dstImageLayoutC,
            $regionCountC,
            $pRegionsC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkEvent $event VkEvent
     * @param list<\iggyvolz\vulkan\enum\VkPipelineStageFlagBits> $stageMask VkPipelineStageFlags
     */
    public function cmdSetEvent(VkEvent $event, array $stageMask): void
    {
        $phpValue = $event;
        $cValue = $phpValue->cdata;
        $eventC = $cValue;
        $phpValue = $stageMask;
        $cValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits::toInt(...$phpValue);
        $stageMaskC = $cValue;
        $cValue = $this->exec('vkCmdSetEvent',
            $eventC,
            $stageMaskC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkEvent $event VkEvent
     * @param list<\iggyvolz\vulkan\enum\VkPipelineStageFlagBits> $stageMask VkPipelineStageFlags
     */
    public function cmdResetEvent(VkEvent $event, array $stageMask): void
    {
        $phpValue = $event;
        $cValue = $phpValue->cdata;
        $eventC = $cValue;
        $phpValue = $stageMask;
        $cValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits::toInt(...$phpValue);
        $stageMaskC = $cValue;
        $cValue = $this->exec('vkCmdResetEvent',
            $eventC,
            $stageMaskC,
        );
    }

    /**
     * @param int $eventCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkEvent> $pEvents const VkEvent*
     * @param list<\iggyvolz\vulkan\enum\VkPipelineStageFlagBits> $srcStageMask VkPipelineStageFlags
     * @param list<\iggyvolz\vulkan\enum\VkPipelineStageFlagBits> $dstStageMask VkPipelineStageFlags
     * @param int $memoryBarrierCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryBarrier> $pMemoryBarriers const VkMemoryBarrier*
     * @param int $bufferMemoryBarrierCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBufferMemoryBarrier> $pBufferMemoryBarriers const VkBufferMemoryBarrier*
     * @param int $imageMemoryBarrierCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageMemoryBarrier> $pImageMemoryBarriers const VkImageMemoryBarrier*
     */
    public function cmdWaitEvents(
        int $eventCount,
        \iggyvolz\vulkan\util\ObjectPointer $pEvents,
        array $srcStageMask,
        array $dstStageMask,
        int $memoryBarrierCount,
        \iggyvolz\vulkan\util\ObjectPointer $pMemoryBarriers,
        int $bufferMemoryBarrierCount,
        \iggyvolz\vulkan\util\ObjectPointer $pBufferMemoryBarriers,
        int $imageMemoryBarrierCount,
        \iggyvolz\vulkan\util\ObjectPointer $pImageMemoryBarriers,
    ): void
    {
        $phpValue = $eventCount;
        $cValue = $phpValue;
        $eventCountC = $cValue;
        $phpValue = $pEvents;
        $cValue = $phpValue->cdata;
        $pEventsC = $cValue;
        $phpValue = $srcStageMask;
        $cValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits::toInt(...$phpValue);
        $srcStageMaskC = $cValue;
        $phpValue = $dstStageMask;
        $cValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits::toInt(...$phpValue);
        $dstStageMaskC = $cValue;
        $phpValue = $memoryBarrierCount;
        $cValue = $phpValue;
        $memoryBarrierCountC = $cValue;
        $phpValue = $pMemoryBarriers;
        $cValue = $phpValue->cdata;
        $pMemoryBarriersC = $cValue;
        $phpValue = $bufferMemoryBarrierCount;
        $cValue = $phpValue;
        $bufferMemoryBarrierCountC = $cValue;
        $phpValue = $pBufferMemoryBarriers;
        $cValue = $phpValue->cdata;
        $pBufferMemoryBarriersC = $cValue;
        $phpValue = $imageMemoryBarrierCount;
        $cValue = $phpValue;
        $imageMemoryBarrierCountC = $cValue;
        $phpValue = $pImageMemoryBarriers;
        $cValue = $phpValue->cdata;
        $pImageMemoryBarriersC = $cValue;
        $cValue = $this->exec('vkCmdWaitEvents',
            $eventCountC,
            $pEventsC,
            $srcStageMaskC,
            $dstStageMaskC,
            $memoryBarrierCountC,
            $pMemoryBarriersC,
            $bufferMemoryBarrierCountC,
            $pBufferMemoryBarriersC,
            $imageMemoryBarrierCountC,
            $pImageMemoryBarriersC,
        );
    }

    /**
     * @param list<\iggyvolz\vulkan\enum\VkPipelineStageFlagBits> $srcStageMask VkPipelineStageFlags
     * @param list<\iggyvolz\vulkan\enum\VkPipelineStageFlagBits> $dstStageMask VkPipelineStageFlags
     * @param list<\iggyvolz\vulkan\enum\VkDependencyFlagBits> $dependencyFlags VkDependencyFlags
     * @param int $memoryBarrierCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryBarrier> $pMemoryBarriers const VkMemoryBarrier*
     * @param int $bufferMemoryBarrierCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBufferMemoryBarrier> $pBufferMemoryBarriers const VkBufferMemoryBarrier*
     * @param int $imageMemoryBarrierCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageMemoryBarrier> $pImageMemoryBarriers const VkImageMemoryBarrier*
     */
    public function cmdPipelineBarrier(
        array $srcStageMask,
        array $dstStageMask,
        array $dependencyFlags,
        int $memoryBarrierCount,
        \iggyvolz\vulkan\util\ObjectPointer $pMemoryBarriers,
        int $bufferMemoryBarrierCount,
        \iggyvolz\vulkan\util\ObjectPointer $pBufferMemoryBarriers,
        int $imageMemoryBarrierCount,
        \iggyvolz\vulkan\util\ObjectPointer $pImageMemoryBarriers,
    ): void
    {
        $phpValue = $srcStageMask;
        $cValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits::toInt(...$phpValue);
        $srcStageMaskC = $cValue;
        $phpValue = $dstStageMask;
        $cValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits::toInt(...$phpValue);
        $dstStageMaskC = $cValue;
        $phpValue = $dependencyFlags;
        $cValue = \iggyvolz\vulkan\enum\VkDependencyFlagBits::toInt(...$phpValue);
        $dependencyFlagsC = $cValue;
        $phpValue = $memoryBarrierCount;
        $cValue = $phpValue;
        $memoryBarrierCountC = $cValue;
        $phpValue = $pMemoryBarriers;
        $cValue = $phpValue->cdata;
        $pMemoryBarriersC = $cValue;
        $phpValue = $bufferMemoryBarrierCount;
        $cValue = $phpValue;
        $bufferMemoryBarrierCountC = $cValue;
        $phpValue = $pBufferMemoryBarriers;
        $cValue = $phpValue->cdata;
        $pBufferMemoryBarriersC = $cValue;
        $phpValue = $imageMemoryBarrierCount;
        $cValue = $phpValue;
        $imageMemoryBarrierCountC = $cValue;
        $phpValue = $pImageMemoryBarriers;
        $cValue = $phpValue->cdata;
        $pImageMemoryBarriersC = $cValue;
        $cValue = $this->exec('vkCmdPipelineBarrier',
            $srcStageMaskC,
            $dstStageMaskC,
            $dependencyFlagsC,
            $memoryBarrierCountC,
            $pMemoryBarriersC,
            $bufferMemoryBarrierCountC,
            $pBufferMemoryBarriersC,
            $imageMemoryBarrierCountC,
            $pImageMemoryBarriersC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkQueryPool $queryPool VkQueryPool
     * @param int $query uint32_t
     * @param list<\iggyvolz\vulkan\enum\VkQueryControlFlagBits> $flags VkQueryControlFlags
     */
    public function cmdBeginQuery(VkQueryPool $queryPool, int $query, array $flags): void
    {
        $phpValue = $queryPool;
        $cValue = $phpValue->cdata;
        $queryPoolC = $cValue;
        $phpValue = $query;
        $cValue = $phpValue;
        $queryC = $cValue;
        $phpValue = $flags;
        $cValue = \iggyvolz\vulkan\enum\VkQueryControlFlagBits::toInt(...$phpValue);
        $flagsC = $cValue;
        $cValue = $this->exec('vkCmdBeginQuery',
            $queryPoolC,
            $queryC,
            $flagsC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkQueryPool $queryPool VkQueryPool
     * @param int $query uint32_t
     */
    public function cmdEndQuery(VkQueryPool $queryPool, int $query): void
    {
        $phpValue = $queryPool;
        $cValue = $phpValue->cdata;
        $queryPoolC = $cValue;
        $phpValue = $query;
        $cValue = $phpValue;
        $queryC = $cValue;
        $cValue = $this->exec('vkCmdEndQuery',
            $queryPoolC,
            $queryC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkConditionalRenderingBeginInfoEXT> $pConditionalRenderingBegin const VkConditionalRenderingBeginInfoEXT*
     */
    public function cmdBeginConditionalRenderingEXT(
        \iggyvolz\vulkan\util\ObjectPointer $pConditionalRenderingBegin,
    ): void
    {
        $phpValue = $pConditionalRenderingBegin;
        $cValue = $phpValue->cdata;
        $pConditionalRenderingBeginC = $cValue;
        $cValue = $this->exec('vkCmdBeginConditionalRenderingEXT',
            $pConditionalRenderingBeginC,
        );
    }

    public function cmdEndConditionalRenderingEXT(): void
    {
        $cValue = $this->exec('vkCmdEndConditionalRenderingEXT',
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkQueryPool $queryPool VkQueryPool
     * @param int $firstQuery uint32_t
     * @param int $queryCount uint32_t
     */
    public function cmdResetQueryPool(VkQueryPool $queryPool, int $firstQuery, int $queryCount): void
    {
        $phpValue = $queryPool;
        $cValue = $phpValue->cdata;
        $queryPoolC = $cValue;
        $phpValue = $firstQuery;
        $cValue = $phpValue;
        $firstQueryC = $cValue;
        $phpValue = $queryCount;
        $cValue = $phpValue;
        $queryCountC = $cValue;
        $cValue = $this->exec('vkCmdResetQueryPool',
            $queryPoolC,
            $firstQueryC,
            $queryCountC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkPipelineStageFlagBits $pipelineStage VkPipelineStageFlagBits
     * @param \iggyvolz\vulkan\struct\VkQueryPool $queryPool VkQueryPool
     * @param int $query uint32_t
     */
    public function cmdWriteTimestamp(
        \iggyvolz\vulkan\enum\VkPipelineStageFlagBits $pipelineStage,
        VkQueryPool $queryPool,
        int $query,
    ): void
    {
        $phpValue = $pipelineStage;
        $cValue = $phpValue->value;
        $pipelineStageC = $cValue;
        $phpValue = $queryPool;
        $cValue = $phpValue->cdata;
        $queryPoolC = $cValue;
        $phpValue = $query;
        $cValue = $phpValue;
        $queryC = $cValue;
        $cValue = $this->exec('vkCmdWriteTimestamp',
            $pipelineStageC,
            $queryPoolC,
            $queryC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkQueryPool $queryPool VkQueryPool
     * @param int $firstQuery uint32_t
     * @param int $queryCount uint32_t
     * @param \iggyvolz\vulkan\struct\VkBuffer $dstBuffer VkBuffer
     * @param int $dstOffset VkDeviceSize
     * @param int $stride VkDeviceSize
     * @param list<\iggyvolz\vulkan\enum\VkQueryResultFlagBits> $flags VkQueryResultFlags
     */
    public function cmdCopyQueryPoolResults(
        VkQueryPool $queryPool,
        int $firstQuery,
        int $queryCount,
        VkBuffer $dstBuffer,
        int $dstOffset,
        int $stride,
        array $flags,
    ): void
    {
        $phpValue = $queryPool;
        $cValue = $phpValue->cdata;
        $queryPoolC = $cValue;
        $phpValue = $firstQuery;
        $cValue = $phpValue;
        $firstQueryC = $cValue;
        $phpValue = $queryCount;
        $cValue = $phpValue;
        $queryCountC = $cValue;
        $phpValue = $dstBuffer;
        $cValue = $phpValue->cdata;
        $dstBufferC = $cValue;
        $phpValue = $dstOffset;
        $cValue = $phpValue;
        $dstOffsetC = $cValue;
        $phpValue = $stride;
        $cValue = $phpValue;
        $strideC = $cValue;
        $phpValue = $flags;
        $cValue = \iggyvolz\vulkan\enum\VkQueryResultFlagBits::toInt(...$phpValue);
        $flagsC = $cValue;
        $cValue = $this->exec('vkCmdCopyQueryPoolResults',
            $queryPoolC,
            $firstQueryC,
            $queryCountC,
            $dstBufferC,
            $dstOffsetC,
            $strideC,
            $flagsC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPipelineLayout $layout VkPipelineLayout
     * @param list<\iggyvolz\vulkan\enum\VkShaderStageFlagBits> $stageFlags VkShaderStageFlags
     * @param int $offset uint32_t
     * @param int $size uint32_t
     * @param \iggyvolz\vulkan\util\Pointer $pValues const void*
     */
    public function cmdPushConstants(
        VkPipelineLayout $layout,
        array $stageFlags,
        int $offset,
        int $size,
        \iggyvolz\vulkan\util\Pointer $pValues,
    ): void
    {
        $phpValue = $layout;
        $cValue = $phpValue->cdata;
        $layoutC = $cValue;
        $phpValue = $stageFlags;
        $cValue = \iggyvolz\vulkan\enum\VkShaderStageFlagBits::toInt(...$phpValue);
        $stageFlagsC = $cValue;
        $phpValue = $offset;
        $cValue = $phpValue;
        $offsetC = $cValue;
        $phpValue = $size;
        $cValue = $phpValue;
        $sizeC = $cValue;
        $phpValue = $pValues;
        $cValue = $phpValue->cdata;
        $pValuesC = $cValue;
        $cValue = $this->exec('vkCmdPushConstants',
            $layoutC,
            $stageFlagsC,
            $offsetC,
            $sizeC,
            $pValuesC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRenderPassBeginInfo> $pRenderPassBegin const VkRenderPassBeginInfo*
     * @param \iggyvolz\vulkan\enum\VkSubpassContents $contents VkSubpassContents
     */
    public function cmdBeginRenderPass(
        \iggyvolz\vulkan\util\ObjectPointer $pRenderPassBegin,
        \iggyvolz\vulkan\enum\VkSubpassContents $contents,
    ): void
    {
        $phpValue = $pRenderPassBegin;
        $cValue = $phpValue->cdata;
        $pRenderPassBeginC = $cValue;
        $phpValue = $contents;
        $cValue = $phpValue->value;
        $contentsC = $cValue;
        $cValue = $this->exec('vkCmdBeginRenderPass',
            $pRenderPassBeginC,
            $contentsC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkSubpassContents $contents VkSubpassContents
     */
    public function cmdNextSubpass(\iggyvolz\vulkan\enum\VkSubpassContents $contents): void
    {
        $phpValue = $contents;
        $cValue = $phpValue->value;
        $contentsC = $cValue;
        $cValue = $this->exec('vkCmdNextSubpass',
            $contentsC,
        );
    }

    public function cmdEndRenderPass(): void
    {
        $cValue = $this->exec('vkCmdEndRenderPass',
        );
    }

    /**
     * @param int $commandBufferCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCommandBuffer> $pCommandBuffers const VkCommandBuffer*
     */
    public function cmdExecuteCommands(
        int $commandBufferCount,
        \iggyvolz\vulkan\util\ObjectPointer $pCommandBuffers,
    ): void
    {
        $phpValue = $commandBufferCount;
        $cValue = $phpValue;
        $commandBufferCountC = $cValue;
        $phpValue = $pCommandBuffers;
        $cValue = $phpValue->cdata;
        $pCommandBuffersC = $cValue;
        $cValue = $this->exec('vkCmdExecuteCommands',
            $commandBufferCountC,
            $pCommandBuffersC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDebugMarkerMarkerInfoEXT> $pMarkerInfo const VkDebugMarkerMarkerInfoEXT*
     */
    public function cmdDebugMarkerBeginEXT(\iggyvolz\vulkan\util\ObjectPointer $pMarkerInfo): void
    {
        $phpValue = $pMarkerInfo;
        $cValue = $phpValue->cdata;
        $pMarkerInfoC = $cValue;
        $cValue = $this->exec('vkCmdDebugMarkerBeginEXT',
            $pMarkerInfoC,
        );
    }

    public function cmdDebugMarkerEndEXT(): void
    {
        $cValue = $this->exec('vkCmdDebugMarkerEndEXT',
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDebugMarkerMarkerInfoEXT> $pMarkerInfo const VkDebugMarkerMarkerInfoEXT*
     */
    public function cmdDebugMarkerInsertEXT(\iggyvolz\vulkan\util\ObjectPointer $pMarkerInfo): void
    {
        $phpValue = $pMarkerInfo;
        $cValue = $phpValue->cdata;
        $pMarkerInfoC = $cValue;
        $cValue = $this->exec('vkCmdDebugMarkerInsertEXT',
            $pMarkerInfoC,
        );
    }

    /**
     * @param bool $isPreprocessed VkBool32
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkGeneratedCommandsInfoNV> $pGeneratedCommandsInfo const VkGeneratedCommandsInfoNV*
     */
    public function cmdExecuteGeneratedCommandsNV(
        bool $isPreprocessed,
        \iggyvolz\vulkan\util\ObjectPointer $pGeneratedCommandsInfo,
    ): void
    {
        $phpValue = $isPreprocessed;
        $cValue = $phpValue ? 1 : 0;
        $isPreprocessedC = $cValue;
        $phpValue = $pGeneratedCommandsInfo;
        $cValue = $phpValue->cdata;
        $pGeneratedCommandsInfoC = $cValue;
        $cValue = $this->exec('vkCmdExecuteGeneratedCommandsNV',
            $isPreprocessedC,
            $pGeneratedCommandsInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkGeneratedCommandsInfoNV> $pGeneratedCommandsInfo const VkGeneratedCommandsInfoNV*
     */
    public function cmdPreprocessGeneratedCommandsNV(
        \iggyvolz\vulkan\util\ObjectPointer $pGeneratedCommandsInfo,
    ): void
    {
        $phpValue = $pGeneratedCommandsInfo;
        $cValue = $phpValue->cdata;
        $pGeneratedCommandsInfoC = $cValue;
        $cValue = $this->exec('vkCmdPreprocessGeneratedCommandsNV',
            $pGeneratedCommandsInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint VkPipelineBindPoint
     * @param \iggyvolz\vulkan\struct\VkPipeline $pipeline VkPipeline
     * @param int $groupIndex uint32_t
     */
    public function cmdBindPipelineShaderGroupNV(
        \iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint,
        VkPipeline $pipeline,
        int $groupIndex,
    ): void
    {
        $phpValue = $pipelineBindPoint;
        $cValue = $phpValue->value;
        $pipelineBindPointC = $cValue;
        $phpValue = $pipeline;
        $cValue = $phpValue->cdata;
        $pipelineC = $cValue;
        $phpValue = $groupIndex;
        $cValue = $phpValue;
        $groupIndexC = $cValue;
        $cValue = $this->exec('vkCmdBindPipelineShaderGroupNV',
            $pipelineBindPointC,
            $pipelineC,
            $groupIndexC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint VkPipelineBindPoint
     * @param \iggyvolz\vulkan\struct\VkPipelineLayout $layout VkPipelineLayout
     * @param int $set uint32_t
     * @param int $descriptorWriteCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkWriteDescriptorSet> $pDescriptorWrites const VkWriteDescriptorSet*
     */
    public function cmdPushDescriptorSetKHR(
        \iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint,
        VkPipelineLayout $layout,
        int $set,
        int $descriptorWriteCount,
        \iggyvolz\vulkan\util\ObjectPointer $pDescriptorWrites,
    ): void
    {
        $phpValue = $pipelineBindPoint;
        $cValue = $phpValue->value;
        $pipelineBindPointC = $cValue;
        $phpValue = $layout;
        $cValue = $phpValue->cdata;
        $layoutC = $cValue;
        $phpValue = $set;
        $cValue = $phpValue;
        $setC = $cValue;
        $phpValue = $descriptorWriteCount;
        $cValue = $phpValue;
        $descriptorWriteCountC = $cValue;
        $phpValue = $pDescriptorWrites;
        $cValue = $phpValue->cdata;
        $pDescriptorWritesC = $cValue;
        $cValue = $this->exec('vkCmdPushDescriptorSetKHR',
            $pipelineBindPointC,
            $layoutC,
            $setC,
            $descriptorWriteCountC,
            $pDescriptorWritesC,
        );
    }

    /**
     * @param int $deviceMask uint32_t
     */
    public function cmdSetDeviceMask(int $deviceMask): void
    {
        $phpValue = $deviceMask;
        $cValue = $phpValue;
        $deviceMaskC = $cValue;
        $cValue = $this->exec('vkCmdSetDeviceMask',
            $deviceMaskC,
        );
    }

    /**
     * @param int $baseGroupX uint32_t
     * @param int $baseGroupY uint32_t
     * @param int $baseGroupZ uint32_t
     * @param int $groupCountX uint32_t
     * @param int $groupCountY uint32_t
     * @param int $groupCountZ uint32_t
     */
    public function cmdDispatchBase(
        int $baseGroupX,
        int $baseGroupY,
        int $baseGroupZ,
        int $groupCountX,
        int $groupCountY,
        int $groupCountZ,
    ): void
    {
        $phpValue = $baseGroupX;
        $cValue = $phpValue;
        $baseGroupXC = $cValue;
        $phpValue = $baseGroupY;
        $cValue = $phpValue;
        $baseGroupYC = $cValue;
        $phpValue = $baseGroupZ;
        $cValue = $phpValue;
        $baseGroupZC = $cValue;
        $phpValue = $groupCountX;
        $cValue = $phpValue;
        $groupCountXC = $cValue;
        $phpValue = $groupCountY;
        $cValue = $phpValue;
        $groupCountYC = $cValue;
        $phpValue = $groupCountZ;
        $cValue = $phpValue;
        $groupCountZC = $cValue;
        $cValue = $this->exec('vkCmdDispatchBase',
            $baseGroupXC,
            $baseGroupYC,
            $baseGroupZC,
            $groupCountXC,
            $groupCountYC,
            $groupCountZC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDescriptorUpdateTemplate $descriptorUpdateTemplate VkDescriptorUpdateTemplate
     * @param \iggyvolz\vulkan\struct\VkPipelineLayout $layout VkPipelineLayout
     * @param int $set uint32_t
     * @param \iggyvolz\vulkan\util\Pointer $pData const void*
     */
    public function cmdPushDescriptorSetWithTemplateKHR(
        VkDescriptorUpdateTemplate $descriptorUpdateTemplate,
        VkPipelineLayout $layout,
        int $set,
        \iggyvolz\vulkan\util\Pointer $pData,
    ): void
    {
        $phpValue = $descriptorUpdateTemplate;
        $cValue = $phpValue->cdata;
        $descriptorUpdateTemplateC = $cValue;
        $phpValue = $layout;
        $cValue = $phpValue->cdata;
        $layoutC = $cValue;
        $phpValue = $set;
        $cValue = $phpValue;
        $setC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $cValue = $this->exec('vkCmdPushDescriptorSetWithTemplateKHR',
            $descriptorUpdateTemplateC,
            $layoutC,
            $setC,
            $pDataC,
        );
    }

    /**
     * @param int $firstViewport uint32_t
     * @param int $viewportCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkViewportWScalingNV> $pViewportWScalings const VkViewportWScalingNV*
     */
    public function cmdSetViewportWScalingNV(
        int $firstViewport,
        int $viewportCount,
        \iggyvolz\vulkan\util\ObjectPointer $pViewportWScalings,
    ): void
    {
        $phpValue = $firstViewport;
        $cValue = $phpValue;
        $firstViewportC = $cValue;
        $phpValue = $viewportCount;
        $cValue = $phpValue;
        $viewportCountC = $cValue;
        $phpValue = $pViewportWScalings;
        $cValue = $phpValue->cdata;
        $pViewportWScalingsC = $cValue;
        $cValue = $this->exec('vkCmdSetViewportWScalingNV',
            $firstViewportC,
            $viewportCountC,
            $pViewportWScalingsC,
        );
    }

    /**
     * @param int $firstDiscardRectangle uint32_t
     * @param int $discardRectangleCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRect2D> $pDiscardRectangles const VkRect2D*
     */
    public function cmdSetDiscardRectangleEXT(
        int $firstDiscardRectangle,
        int $discardRectangleCount,
        \iggyvolz\vulkan\util\ObjectPointer $pDiscardRectangles,
    ): void
    {
        $phpValue = $firstDiscardRectangle;
        $cValue = $phpValue;
        $firstDiscardRectangleC = $cValue;
        $phpValue = $discardRectangleCount;
        $cValue = $phpValue;
        $discardRectangleCountC = $cValue;
        $phpValue = $pDiscardRectangles;
        $cValue = $phpValue->cdata;
        $pDiscardRectanglesC = $cValue;
        $cValue = $this->exec('vkCmdSetDiscardRectangleEXT',
            $firstDiscardRectangleC,
            $discardRectangleCountC,
            $pDiscardRectanglesC,
        );
    }

    /**
     * @param bool $discardRectangleEnable VkBool32
     */
    public function cmdSetDiscardRectangleEnableEXT(bool $discardRectangleEnable): void
    {
        $phpValue = $discardRectangleEnable;
        $cValue = $phpValue ? 1 : 0;
        $discardRectangleEnableC = $cValue;
        $cValue = $this->exec('vkCmdSetDiscardRectangleEnableEXT',
            $discardRectangleEnableC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkDiscardRectangleModeEXT $discardRectangleMode VkDiscardRectangleModeEXT
     */
    public function cmdSetDiscardRectangleModeEXT(
        \iggyvolz\vulkan\enum\VkDiscardRectangleModeEXT $discardRectangleMode,
    ): void
    {
        $phpValue = $discardRectangleMode;
        $cValue = $phpValue->value;
        $discardRectangleModeC = $cValue;
        $cValue = $this->exec('vkCmdSetDiscardRectangleModeEXT',
            $discardRectangleModeC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSampleLocationsInfoEXT> $pSampleLocationsInfo const VkSampleLocationsInfoEXT*
     */
    public function cmdSetSampleLocationsEXT(\iggyvolz\vulkan\util\ObjectPointer $pSampleLocationsInfo): void
    {
        $phpValue = $pSampleLocationsInfo;
        $cValue = $phpValue->cdata;
        $pSampleLocationsInfoC = $cValue;
        $cValue = $this->exec('vkCmdSetSampleLocationsEXT',
            $pSampleLocationsInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDebugUtilsLabelEXT> $pLabelInfo const VkDebugUtilsLabelEXT*
     */
    public function cmdBeginDebugUtilsLabelEXT(\iggyvolz\vulkan\util\ObjectPointer $pLabelInfo): void
    {
        $phpValue = $pLabelInfo;
        $cValue = $phpValue->cdata;
        $pLabelInfoC = $cValue;
        $cValue = $this->exec('vkCmdBeginDebugUtilsLabelEXT',
            $pLabelInfoC,
        );
    }

    public function cmdEndDebugUtilsLabelEXT(): void
    {
        $cValue = $this->exec('vkCmdEndDebugUtilsLabelEXT',
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDebugUtilsLabelEXT> $pLabelInfo const VkDebugUtilsLabelEXT*
     */
    public function cmdInsertDebugUtilsLabelEXT(\iggyvolz\vulkan\util\ObjectPointer $pLabelInfo): void
    {
        $phpValue = $pLabelInfo;
        $cValue = $phpValue->cdata;
        $pLabelInfoC = $cValue;
        $cValue = $this->exec('vkCmdInsertDebugUtilsLabelEXT',
            $pLabelInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkPipelineStageFlagBits $pipelineStage VkPipelineStageFlagBits
     * @param \iggyvolz\vulkan\struct\VkBuffer $dstBuffer VkBuffer
     * @param int $dstOffset VkDeviceSize
     * @param int $marker uint32_t
     */
    public function cmdWriteBufferMarkerAMD(
        \iggyvolz\vulkan\enum\VkPipelineStageFlagBits $pipelineStage,
        VkBuffer $dstBuffer,
        int $dstOffset,
        int $marker,
    ): void
    {
        $phpValue = $pipelineStage;
        $cValue = $phpValue->value;
        $pipelineStageC = $cValue;
        $phpValue = $dstBuffer;
        $cValue = $phpValue->cdata;
        $dstBufferC = $cValue;
        $phpValue = $dstOffset;
        $cValue = $phpValue;
        $dstOffsetC = $cValue;
        $phpValue = $marker;
        $cValue = $phpValue;
        $markerC = $cValue;
        $cValue = $this->exec('vkCmdWriteBufferMarkerAMD',
            $pipelineStageC,
            $dstBufferC,
            $dstOffsetC,
            $markerC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRenderPassBeginInfo> $pRenderPassBegin const VkRenderPassBeginInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSubpassBeginInfo> $pSubpassBeginInfo const VkSubpassBeginInfo*
     */
    public function cmdBeginRenderPass2(
        \iggyvolz\vulkan\util\ObjectPointer $pRenderPassBegin,
        \iggyvolz\vulkan\util\ObjectPointer $pSubpassBeginInfo,
    ): void
    {
        $phpValue = $pRenderPassBegin;
        $cValue = $phpValue->cdata;
        $pRenderPassBeginC = $cValue;
        $phpValue = $pSubpassBeginInfo;
        $cValue = $phpValue->cdata;
        $pSubpassBeginInfoC = $cValue;
        $cValue = $this->exec('vkCmdBeginRenderPass2',
            $pRenderPassBeginC,
            $pSubpassBeginInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSubpassBeginInfo> $pSubpassBeginInfo const VkSubpassBeginInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSubpassEndInfo> $pSubpassEndInfo const VkSubpassEndInfo*
     */
    public function cmdNextSubpass2(
        \iggyvolz\vulkan\util\ObjectPointer $pSubpassBeginInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pSubpassEndInfo,
    ): void
    {
        $phpValue = $pSubpassBeginInfo;
        $cValue = $phpValue->cdata;
        $pSubpassBeginInfoC = $cValue;
        $phpValue = $pSubpassEndInfo;
        $cValue = $phpValue->cdata;
        $pSubpassEndInfoC = $cValue;
        $cValue = $this->exec('vkCmdNextSubpass2',
            $pSubpassBeginInfoC,
            $pSubpassEndInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSubpassEndInfo> $pSubpassEndInfo const VkSubpassEndInfo*
     */
    public function cmdEndRenderPass2(\iggyvolz\vulkan\util\ObjectPointer $pSubpassEndInfo): void
    {
        $phpValue = $pSubpassEndInfo;
        $cValue = $phpValue->cdata;
        $pSubpassEndInfoC = $cValue;
        $cValue = $this->exec('vkCmdEndRenderPass2',
            $pSubpassEndInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkBuffer $buffer VkBuffer
     * @param int $offset VkDeviceSize
     * @param \iggyvolz\vulkan\struct\VkBuffer $countBuffer VkBuffer
     * @param int $countBufferOffset VkDeviceSize
     * @param int $maxDrawCount uint32_t
     * @param int $stride uint32_t
     */
    public function cmdDrawIndirectCount(
        VkBuffer $buffer,
        int $offset,
        VkBuffer $countBuffer,
        int $countBufferOffset,
        int $maxDrawCount,
        int $stride,
    ): void
    {
        $phpValue = $buffer;
        $cValue = $phpValue->cdata;
        $bufferC = $cValue;
        $phpValue = $offset;
        $cValue = $phpValue;
        $offsetC = $cValue;
        $phpValue = $countBuffer;
        $cValue = $phpValue->cdata;
        $countBufferC = $cValue;
        $phpValue = $countBufferOffset;
        $cValue = $phpValue;
        $countBufferOffsetC = $cValue;
        $phpValue = $maxDrawCount;
        $cValue = $phpValue;
        $maxDrawCountC = $cValue;
        $phpValue = $stride;
        $cValue = $phpValue;
        $strideC = $cValue;
        $cValue = $this->exec('vkCmdDrawIndirectCount',
            $bufferC,
            $offsetC,
            $countBufferC,
            $countBufferOffsetC,
            $maxDrawCountC,
            $strideC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkBuffer $buffer VkBuffer
     * @param int $offset VkDeviceSize
     * @param \iggyvolz\vulkan\struct\VkBuffer $countBuffer VkBuffer
     * @param int $countBufferOffset VkDeviceSize
     * @param int $maxDrawCount uint32_t
     * @param int $stride uint32_t
     */
    public function cmdDrawIndexedIndirectCount(
        VkBuffer $buffer,
        int $offset,
        VkBuffer $countBuffer,
        int $countBufferOffset,
        int $maxDrawCount,
        int $stride,
    ): void
    {
        $phpValue = $buffer;
        $cValue = $phpValue->cdata;
        $bufferC = $cValue;
        $phpValue = $offset;
        $cValue = $phpValue;
        $offsetC = $cValue;
        $phpValue = $countBuffer;
        $cValue = $phpValue->cdata;
        $countBufferC = $cValue;
        $phpValue = $countBufferOffset;
        $cValue = $phpValue;
        $countBufferOffsetC = $cValue;
        $phpValue = $maxDrawCount;
        $cValue = $phpValue;
        $maxDrawCountC = $cValue;
        $phpValue = $stride;
        $cValue = $phpValue;
        $strideC = $cValue;
        $cValue = $this->exec('vkCmdDrawIndexedIndirectCount',
            $bufferC,
            $offsetC,
            $countBufferC,
            $countBufferOffsetC,
            $maxDrawCountC,
            $strideC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\Pointer $pCheckpointMarker const void*
     */
    public function cmdSetCheckpointNV(\iggyvolz\vulkan\util\Pointer $pCheckpointMarker): void
    {
        $phpValue = $pCheckpointMarker;
        $cValue = $phpValue->cdata;
        $pCheckpointMarkerC = $cValue;
        $cValue = $this->exec('vkCmdSetCheckpointNV',
            $pCheckpointMarkerC,
        );
    }

    /**
     * @param int $firstBinding uint32_t
     * @param int $bindingCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBuffer> $pBuffers const VkBuffer*
     * @param \iggyvolz\vulkan\util\Pointer $pOffsets const VkDeviceSize*
     * @param \iggyvolz\vulkan\util\Pointer $pSizes const VkDeviceSize*
     */
    public function cmdBindTransformFeedbackBuffersEXT(
        int $firstBinding,
        int $bindingCount,
        \iggyvolz\vulkan\util\ObjectPointer $pBuffers,
        \iggyvolz\vulkan\util\Pointer $pOffsets,
        \iggyvolz\vulkan\util\Pointer $pSizes,
    ): void
    {
        $phpValue = $firstBinding;
        $cValue = $phpValue;
        $firstBindingC = $cValue;
        $phpValue = $bindingCount;
        $cValue = $phpValue;
        $bindingCountC = $cValue;
        $phpValue = $pBuffers;
        $cValue = $phpValue->cdata;
        $pBuffersC = $cValue;
        $phpValue = $pOffsets;
        $cValue = $phpValue->cdata;
        $pOffsetsC = $cValue;
        $phpValue = $pSizes;
        $cValue = $phpValue->cdata;
        $pSizesC = $cValue;
        $cValue = $this->exec('vkCmdBindTransformFeedbackBuffersEXT',
            $firstBindingC,
            $bindingCountC,
            $pBuffersC,
            $pOffsetsC,
            $pSizesC,
        );
    }

    /**
     * @param int $firstCounterBuffer uint32_t
     * @param int $counterBufferCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBuffer> $pCounterBuffers const VkBuffer*
     * @param \iggyvolz\vulkan\util\Pointer $pCounterBufferOffsets const VkDeviceSize*
     */
    public function cmdBeginTransformFeedbackEXT(
        int $firstCounterBuffer,
        int $counterBufferCount,
        \iggyvolz\vulkan\util\ObjectPointer $pCounterBuffers,
        \iggyvolz\vulkan\util\Pointer $pCounterBufferOffsets,
    ): void
    {
        $phpValue = $firstCounterBuffer;
        $cValue = $phpValue;
        $firstCounterBufferC = $cValue;
        $phpValue = $counterBufferCount;
        $cValue = $phpValue;
        $counterBufferCountC = $cValue;
        $phpValue = $pCounterBuffers;
        $cValue = $phpValue->cdata;
        $pCounterBuffersC = $cValue;
        $phpValue = $pCounterBufferOffsets;
        $cValue = $phpValue->cdata;
        $pCounterBufferOffsetsC = $cValue;
        $cValue = $this->exec('vkCmdBeginTransformFeedbackEXT',
            $firstCounterBufferC,
            $counterBufferCountC,
            $pCounterBuffersC,
            $pCounterBufferOffsetsC,
        );
    }

    /**
     * @param int $firstCounterBuffer uint32_t
     * @param int $counterBufferCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBuffer> $pCounterBuffers const VkBuffer*
     * @param \iggyvolz\vulkan\util\Pointer $pCounterBufferOffsets const VkDeviceSize*
     */
    public function cmdEndTransformFeedbackEXT(
        int $firstCounterBuffer,
        int $counterBufferCount,
        \iggyvolz\vulkan\util\ObjectPointer $pCounterBuffers,
        \iggyvolz\vulkan\util\Pointer $pCounterBufferOffsets,
    ): void
    {
        $phpValue = $firstCounterBuffer;
        $cValue = $phpValue;
        $firstCounterBufferC = $cValue;
        $phpValue = $counterBufferCount;
        $cValue = $phpValue;
        $counterBufferCountC = $cValue;
        $phpValue = $pCounterBuffers;
        $cValue = $phpValue->cdata;
        $pCounterBuffersC = $cValue;
        $phpValue = $pCounterBufferOffsets;
        $cValue = $phpValue->cdata;
        $pCounterBufferOffsetsC = $cValue;
        $cValue = $this->exec('vkCmdEndTransformFeedbackEXT',
            $firstCounterBufferC,
            $counterBufferCountC,
            $pCounterBuffersC,
            $pCounterBufferOffsetsC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkQueryPool $queryPool VkQueryPool
     * @param int $query uint32_t
     * @param list<\iggyvolz\vulkan\enum\VkQueryControlFlagBits> $flags VkQueryControlFlags
     * @param int $index uint32_t
     */
    public function cmdBeginQueryIndexedEXT(VkQueryPool $queryPool, int $query, array $flags, int $index): void
    {
        $phpValue = $queryPool;
        $cValue = $phpValue->cdata;
        $queryPoolC = $cValue;
        $phpValue = $query;
        $cValue = $phpValue;
        $queryC = $cValue;
        $phpValue = $flags;
        $cValue = \iggyvolz\vulkan\enum\VkQueryControlFlagBits::toInt(...$phpValue);
        $flagsC = $cValue;
        $phpValue = $index;
        $cValue = $phpValue;
        $indexC = $cValue;
        $cValue = $this->exec('vkCmdBeginQueryIndexedEXT',
            $queryPoolC,
            $queryC,
            $flagsC,
            $indexC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkQueryPool $queryPool VkQueryPool
     * @param int $query uint32_t
     * @param int $index uint32_t
     */
    public function cmdEndQueryIndexedEXT(VkQueryPool $queryPool, int $query, int $index): void
    {
        $phpValue = $queryPool;
        $cValue = $phpValue->cdata;
        $queryPoolC = $cValue;
        $phpValue = $query;
        $cValue = $phpValue;
        $queryC = $cValue;
        $phpValue = $index;
        $cValue = $phpValue;
        $indexC = $cValue;
        $cValue = $this->exec('vkCmdEndQueryIndexedEXT',
            $queryPoolC,
            $queryC,
            $indexC,
        );
    }

    /**
     * @param int $instanceCount uint32_t
     * @param int $firstInstance uint32_t
     * @param \iggyvolz\vulkan\struct\VkBuffer $counterBuffer VkBuffer
     * @param int $counterBufferOffset VkDeviceSize
     * @param int $counterOffset uint32_t
     * @param int $vertexStride uint32_t
     */
    public function cmdDrawIndirectByteCountEXT(
        int $instanceCount,
        int $firstInstance,
        VkBuffer $counterBuffer,
        int $counterBufferOffset,
        int $counterOffset,
        int $vertexStride,
    ): void
    {
        $phpValue = $instanceCount;
        $cValue = $phpValue;
        $instanceCountC = $cValue;
        $phpValue = $firstInstance;
        $cValue = $phpValue;
        $firstInstanceC = $cValue;
        $phpValue = $counterBuffer;
        $cValue = $phpValue->cdata;
        $counterBufferC = $cValue;
        $phpValue = $counterBufferOffset;
        $cValue = $phpValue;
        $counterBufferOffsetC = $cValue;
        $phpValue = $counterOffset;
        $cValue = $phpValue;
        $counterOffsetC = $cValue;
        $phpValue = $vertexStride;
        $cValue = $phpValue;
        $vertexStrideC = $cValue;
        $cValue = $this->exec('vkCmdDrawIndirectByteCountEXT',
            $instanceCountC,
            $firstInstanceC,
            $counterBufferC,
            $counterBufferOffsetC,
            $counterOffsetC,
            $vertexStrideC,
        );
    }

    /**
     * @param int $firstExclusiveScissor uint32_t
     * @param int $exclusiveScissorCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRect2D> $pExclusiveScissors const VkRect2D*
     */
    public function cmdSetExclusiveScissorNV(
        int $firstExclusiveScissor,
        int $exclusiveScissorCount,
        \iggyvolz\vulkan\util\ObjectPointer $pExclusiveScissors,
    ): void
    {
        $phpValue = $firstExclusiveScissor;
        $cValue = $phpValue;
        $firstExclusiveScissorC = $cValue;
        $phpValue = $exclusiveScissorCount;
        $cValue = $phpValue;
        $exclusiveScissorCountC = $cValue;
        $phpValue = $pExclusiveScissors;
        $cValue = $phpValue->cdata;
        $pExclusiveScissorsC = $cValue;
        $cValue = $this->exec('vkCmdSetExclusiveScissorNV',
            $firstExclusiveScissorC,
            $exclusiveScissorCountC,
            $pExclusiveScissorsC,
        );
    }

    /**
     * @param int $firstExclusiveScissor uint32_t
     * @param int $exclusiveScissorCount uint32_t
     * @param \iggyvolz\vulkan\util\Pointer $pExclusiveScissorEnables const VkBool32*
     */
    public function cmdSetExclusiveScissorEnableNV(
        int $firstExclusiveScissor,
        int $exclusiveScissorCount,
        \iggyvolz\vulkan\util\Pointer $pExclusiveScissorEnables,
    ): void
    {
        $phpValue = $firstExclusiveScissor;
        $cValue = $phpValue;
        $firstExclusiveScissorC = $cValue;
        $phpValue = $exclusiveScissorCount;
        $cValue = $phpValue;
        $exclusiveScissorCountC = $cValue;
        $phpValue = $pExclusiveScissorEnables;
        $cValue = $phpValue->cdata;
        $pExclusiveScissorEnablesC = $cValue;
        $cValue = $this->exec('vkCmdSetExclusiveScissorEnableNV',
            $firstExclusiveScissorC,
            $exclusiveScissorCountC,
            $pExclusiveScissorEnablesC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkImageView $imageView VkImageView
     * @param \iggyvolz\vulkan\enum\VkImageLayout $imageLayout VkImageLayout
     */
    public function cmdBindShadingRateImageNV(
        VkImageView $imageView,
        \iggyvolz\vulkan\enum\VkImageLayout $imageLayout,
    ): void
    {
        $phpValue = $imageView;
        $cValue = $phpValue->cdata;
        $imageViewC = $cValue;
        $phpValue = $imageLayout;
        $cValue = $phpValue->value;
        $imageLayoutC = $cValue;
        $cValue = $this->exec('vkCmdBindShadingRateImageNV',
            $imageViewC,
            $imageLayoutC,
        );
    }

    /**
     * @param int $firstViewport uint32_t
     * @param int $viewportCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkShadingRatePaletteNV> $pShadingRatePalettes const VkShadingRatePaletteNV*
     */
    public function cmdSetViewportShadingRatePaletteNV(
        int $firstViewport,
        int $viewportCount,
        \iggyvolz\vulkan\util\ObjectPointer $pShadingRatePalettes,
    ): void
    {
        $phpValue = $firstViewport;
        $cValue = $phpValue;
        $firstViewportC = $cValue;
        $phpValue = $viewportCount;
        $cValue = $phpValue;
        $viewportCountC = $cValue;
        $phpValue = $pShadingRatePalettes;
        $cValue = $phpValue->cdata;
        $pShadingRatePalettesC = $cValue;
        $cValue = $this->exec('vkCmdSetViewportShadingRatePaletteNV',
            $firstViewportC,
            $viewportCountC,
            $pShadingRatePalettesC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkCoarseSampleOrderTypeNV $sampleOrderType VkCoarseSampleOrderTypeNV
     * @param int $customSampleOrderCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCoarseSampleOrderCustomNV> $pCustomSampleOrders const VkCoarseSampleOrderCustomNV*
     */
    public function cmdSetCoarseSampleOrderNV(
        \iggyvolz\vulkan\enum\VkCoarseSampleOrderTypeNV $sampleOrderType,
        int $customSampleOrderCount,
        \iggyvolz\vulkan\util\ObjectPointer $pCustomSampleOrders,
    ): void
    {
        $phpValue = $sampleOrderType;
        $cValue = $phpValue->value;
        $sampleOrderTypeC = $cValue;
        $phpValue = $customSampleOrderCount;
        $cValue = $phpValue;
        $customSampleOrderCountC = $cValue;
        $phpValue = $pCustomSampleOrders;
        $cValue = $phpValue->cdata;
        $pCustomSampleOrdersC = $cValue;
        $cValue = $this->exec('vkCmdSetCoarseSampleOrderNV',
            $sampleOrderTypeC,
            $customSampleOrderCountC,
            $pCustomSampleOrdersC,
        );
    }

    /**
     * @param int $taskCount uint32_t
     * @param int $firstTask uint32_t
     */
    public function cmdDrawMeshTasksNV(int $taskCount, int $firstTask): void
    {
        $phpValue = $taskCount;
        $cValue = $phpValue;
        $taskCountC = $cValue;
        $phpValue = $firstTask;
        $cValue = $phpValue;
        $firstTaskC = $cValue;
        $cValue = $this->exec('vkCmdDrawMeshTasksNV',
            $taskCountC,
            $firstTaskC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkBuffer $buffer VkBuffer
     * @param int $offset VkDeviceSize
     * @param int $drawCount uint32_t
     * @param int $stride uint32_t
     */
    public function cmdDrawMeshTasksIndirectNV(VkBuffer $buffer, int $offset, int $drawCount, int $stride): void
    {
        $phpValue = $buffer;
        $cValue = $phpValue->cdata;
        $bufferC = $cValue;
        $phpValue = $offset;
        $cValue = $phpValue;
        $offsetC = $cValue;
        $phpValue = $drawCount;
        $cValue = $phpValue;
        $drawCountC = $cValue;
        $phpValue = $stride;
        $cValue = $phpValue;
        $strideC = $cValue;
        $cValue = $this->exec('vkCmdDrawMeshTasksIndirectNV',
            $bufferC,
            $offsetC,
            $drawCountC,
            $strideC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkBuffer $buffer VkBuffer
     * @param int $offset VkDeviceSize
     * @param \iggyvolz\vulkan\struct\VkBuffer $countBuffer VkBuffer
     * @param int $countBufferOffset VkDeviceSize
     * @param int $maxDrawCount uint32_t
     * @param int $stride uint32_t
     */
    public function cmdDrawMeshTasksIndirectCountNV(
        VkBuffer $buffer,
        int $offset,
        VkBuffer $countBuffer,
        int $countBufferOffset,
        int $maxDrawCount,
        int $stride,
    ): void
    {
        $phpValue = $buffer;
        $cValue = $phpValue->cdata;
        $bufferC = $cValue;
        $phpValue = $offset;
        $cValue = $phpValue;
        $offsetC = $cValue;
        $phpValue = $countBuffer;
        $cValue = $phpValue->cdata;
        $countBufferC = $cValue;
        $phpValue = $countBufferOffset;
        $cValue = $phpValue;
        $countBufferOffsetC = $cValue;
        $phpValue = $maxDrawCount;
        $cValue = $phpValue;
        $maxDrawCountC = $cValue;
        $phpValue = $stride;
        $cValue = $phpValue;
        $strideC = $cValue;
        $cValue = $this->exec('vkCmdDrawMeshTasksIndirectCountNV',
            $bufferC,
            $offsetC,
            $countBufferC,
            $countBufferOffsetC,
            $maxDrawCountC,
            $strideC,
        );
    }

    /**
     * @param int $groupCountX uint32_t
     * @param int $groupCountY uint32_t
     * @param int $groupCountZ uint32_t
     */
    public function cmdDrawMeshTasksEXT(int $groupCountX, int $groupCountY, int $groupCountZ): void
    {
        $phpValue = $groupCountX;
        $cValue = $phpValue;
        $groupCountXC = $cValue;
        $phpValue = $groupCountY;
        $cValue = $phpValue;
        $groupCountYC = $cValue;
        $phpValue = $groupCountZ;
        $cValue = $phpValue;
        $groupCountZC = $cValue;
        $cValue = $this->exec('vkCmdDrawMeshTasksEXT',
            $groupCountXC,
            $groupCountYC,
            $groupCountZC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkBuffer $buffer VkBuffer
     * @param int $offset VkDeviceSize
     * @param int $drawCount uint32_t
     * @param int $stride uint32_t
     */
    public function cmdDrawMeshTasksIndirectEXT(VkBuffer $buffer, int $offset, int $drawCount, int $stride): void
    {
        $phpValue = $buffer;
        $cValue = $phpValue->cdata;
        $bufferC = $cValue;
        $phpValue = $offset;
        $cValue = $phpValue;
        $offsetC = $cValue;
        $phpValue = $drawCount;
        $cValue = $phpValue;
        $drawCountC = $cValue;
        $phpValue = $stride;
        $cValue = $phpValue;
        $strideC = $cValue;
        $cValue = $this->exec('vkCmdDrawMeshTasksIndirectEXT',
            $bufferC,
            $offsetC,
            $drawCountC,
            $strideC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkBuffer $buffer VkBuffer
     * @param int $offset VkDeviceSize
     * @param \iggyvolz\vulkan\struct\VkBuffer $countBuffer VkBuffer
     * @param int $countBufferOffset VkDeviceSize
     * @param int $maxDrawCount uint32_t
     * @param int $stride uint32_t
     */
    public function cmdDrawMeshTasksIndirectCountEXT(
        VkBuffer $buffer,
        int $offset,
        VkBuffer $countBuffer,
        int $countBufferOffset,
        int $maxDrawCount,
        int $stride,
    ): void
    {
        $phpValue = $buffer;
        $cValue = $phpValue->cdata;
        $bufferC = $cValue;
        $phpValue = $offset;
        $cValue = $phpValue;
        $offsetC = $cValue;
        $phpValue = $countBuffer;
        $cValue = $phpValue->cdata;
        $countBufferC = $cValue;
        $phpValue = $countBufferOffset;
        $cValue = $phpValue;
        $countBufferOffsetC = $cValue;
        $phpValue = $maxDrawCount;
        $cValue = $phpValue;
        $maxDrawCountC = $cValue;
        $phpValue = $stride;
        $cValue = $phpValue;
        $strideC = $cValue;
        $cValue = $this->exec('vkCmdDrawMeshTasksIndirectCountEXT',
            $bufferC,
            $offsetC,
            $countBufferC,
            $countBufferOffsetC,
            $maxDrawCountC,
            $strideC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkImageView $imageView VkImageView
     * @param \iggyvolz\vulkan\enum\VkImageLayout $imageLayout VkImageLayout
     */
    public function cmdBindInvocationMaskHUAWEI(
        VkImageView $imageView,
        \iggyvolz\vulkan\enum\VkImageLayout $imageLayout,
    ): void
    {
        $phpValue = $imageView;
        $cValue = $phpValue->cdata;
        $imageViewC = $cValue;
        $phpValue = $imageLayout;
        $cValue = $phpValue->value;
        $imageLayoutC = $cValue;
        $cValue = $this->exec('vkCmdBindInvocationMaskHUAWEI',
            $imageViewC,
            $imageLayoutC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkAccelerationStructureNV $dst VkAccelerationStructureNV
     * @param \iggyvolz\vulkan\struct\VkAccelerationStructureNV $src VkAccelerationStructureNV
     * @param \iggyvolz\vulkan\enum\VkCopyAccelerationStructureModeKHR $mode VkCopyAccelerationStructureModeKHR
     */
    public function cmdCopyAccelerationStructureNV(
        VkAccelerationStructureNV $dst,
        VkAccelerationStructureNV $src,
        \iggyvolz\vulkan\enum\VkCopyAccelerationStructureModeKHR $mode,
    ): void
    {
        $phpValue = $dst;
        $cValue = $phpValue->cdata;
        $dstC = $cValue;
        $phpValue = $src;
        $cValue = $phpValue->cdata;
        $srcC = $cValue;
        $phpValue = $mode;
        $cValue = $phpValue->value;
        $modeC = $cValue;
        $cValue = $this->exec('vkCmdCopyAccelerationStructureNV',
            $dstC,
            $srcC,
            $modeC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyAccelerationStructureInfoKHR> $pInfo const VkCopyAccelerationStructureInfoKHR*
     */
    public function cmdCopyAccelerationStructureKHR(\iggyvolz\vulkan\util\ObjectPointer $pInfo): void
    {
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->exec('vkCmdCopyAccelerationStructureKHR',
            $pInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyAccelerationStructureToMemoryInfoKHR> $pInfo const VkCopyAccelerationStructureToMemoryInfoKHR*
     */
    public function cmdCopyAccelerationStructureToMemoryKHR(\iggyvolz\vulkan\util\ObjectPointer $pInfo): void
    {
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->exec('vkCmdCopyAccelerationStructureToMemoryKHR',
            $pInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyMemoryToAccelerationStructureInfoKHR> $pInfo const VkCopyMemoryToAccelerationStructureInfoKHR*
     */
    public function cmdCopyMemoryToAccelerationStructureKHR(\iggyvolz\vulkan\util\ObjectPointer $pInfo): void
    {
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->exec('vkCmdCopyMemoryToAccelerationStructureKHR',
            $pInfoC,
        );
    }

    /**
     * @param int $accelerationStructureCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAccelerationStructureKHR> $pAccelerationStructures const VkAccelerationStructureKHR*
     * @param \iggyvolz\vulkan\enum\VkQueryType $queryType VkQueryType
     * @param \iggyvolz\vulkan\struct\VkQueryPool $queryPool VkQueryPool
     * @param int $firstQuery uint32_t
     */
    public function cmdWriteAccelerationStructuresPropertiesKHR(
        int $accelerationStructureCount,
        \iggyvolz\vulkan\util\ObjectPointer $pAccelerationStructures,
        \iggyvolz\vulkan\enum\VkQueryType $queryType,
        VkQueryPool $queryPool,
        int $firstQuery,
    ): void
    {
        $phpValue = $accelerationStructureCount;
        $cValue = $phpValue;
        $accelerationStructureCountC = $cValue;
        $phpValue = $pAccelerationStructures;
        $cValue = $phpValue->cdata;
        $pAccelerationStructuresC = $cValue;
        $phpValue = $queryType;
        $cValue = $phpValue->value;
        $queryTypeC = $cValue;
        $phpValue = $queryPool;
        $cValue = $phpValue->cdata;
        $queryPoolC = $cValue;
        $phpValue = $firstQuery;
        $cValue = $phpValue;
        $firstQueryC = $cValue;
        $cValue = $this->exec('vkCmdWriteAccelerationStructuresPropertiesKHR',
            $accelerationStructureCountC,
            $pAccelerationStructuresC,
            $queryTypeC,
            $queryPoolC,
            $firstQueryC,
        );
    }

    /**
     * @param int $accelerationStructureCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAccelerationStructureNV> $pAccelerationStructures const VkAccelerationStructureNV*
     * @param \iggyvolz\vulkan\enum\VkQueryType $queryType VkQueryType
     * @param \iggyvolz\vulkan\struct\VkQueryPool $queryPool VkQueryPool
     * @param int $firstQuery uint32_t
     */
    public function cmdWriteAccelerationStructuresPropertiesNV(
        int $accelerationStructureCount,
        \iggyvolz\vulkan\util\ObjectPointer $pAccelerationStructures,
        \iggyvolz\vulkan\enum\VkQueryType $queryType,
        VkQueryPool $queryPool,
        int $firstQuery,
    ): void
    {
        $phpValue = $accelerationStructureCount;
        $cValue = $phpValue;
        $accelerationStructureCountC = $cValue;
        $phpValue = $pAccelerationStructures;
        $cValue = $phpValue->cdata;
        $pAccelerationStructuresC = $cValue;
        $phpValue = $queryType;
        $cValue = $phpValue->value;
        $queryTypeC = $cValue;
        $phpValue = $queryPool;
        $cValue = $phpValue->cdata;
        $queryPoolC = $cValue;
        $phpValue = $firstQuery;
        $cValue = $phpValue;
        $firstQueryC = $cValue;
        $cValue = $this->exec('vkCmdWriteAccelerationStructuresPropertiesNV',
            $accelerationStructureCountC,
            $pAccelerationStructuresC,
            $queryTypeC,
            $queryPoolC,
            $firstQueryC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAccelerationStructureInfoNV> $pInfo const VkAccelerationStructureInfoNV*
     * @param \iggyvolz\vulkan\struct\VkBuffer $instanceData VkBuffer
     * @param int $instanceOffset VkDeviceSize
     * @param bool $update VkBool32
     * @param \iggyvolz\vulkan\struct\VkAccelerationStructureNV $dst VkAccelerationStructureNV
     * @param \iggyvolz\vulkan\struct\VkAccelerationStructureNV $src VkAccelerationStructureNV
     * @param \iggyvolz\vulkan\struct\VkBuffer $scratch VkBuffer
     * @param int $scratchOffset VkDeviceSize
     */
    public function cmdBuildAccelerationStructureNV(
        \iggyvolz\vulkan\util\ObjectPointer $pInfo,
        VkBuffer $instanceData,
        int $instanceOffset,
        bool $update,
        VkAccelerationStructureNV $dst,
        VkAccelerationStructureNV $src,
        VkBuffer $scratch,
        int $scratchOffset,
    ): void
    {
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $phpValue = $instanceData;
        $cValue = $phpValue->cdata;
        $instanceDataC = $cValue;
        $phpValue = $instanceOffset;
        $cValue = $phpValue;
        $instanceOffsetC = $cValue;
        $phpValue = $update;
        $cValue = $phpValue ? 1 : 0;
        $updateC = $cValue;
        $phpValue = $dst;
        $cValue = $phpValue->cdata;
        $dstC = $cValue;
        $phpValue = $src;
        $cValue = $phpValue->cdata;
        $srcC = $cValue;
        $phpValue = $scratch;
        $cValue = $phpValue->cdata;
        $scratchC = $cValue;
        $phpValue = $scratchOffset;
        $cValue = $phpValue;
        $scratchOffsetC = $cValue;
        $cValue = $this->exec('vkCmdBuildAccelerationStructureNV',
            $pInfoC,
            $instanceDataC,
            $instanceOffsetC,
            $updateC,
            $dstC,
            $srcC,
            $scratchC,
            $scratchOffsetC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkStridedDeviceAddressRegionKHR> $pRaygenShaderBindingTable const VkStridedDeviceAddressRegionKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkStridedDeviceAddressRegionKHR> $pMissShaderBindingTable const VkStridedDeviceAddressRegionKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkStridedDeviceAddressRegionKHR> $pHitShaderBindingTable const VkStridedDeviceAddressRegionKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkStridedDeviceAddressRegionKHR> $pCallableShaderBindingTable const VkStridedDeviceAddressRegionKHR*
     * @param int $width uint32_t
     * @param int $height uint32_t
     * @param int $depth uint32_t
     */
    public function cmdTraceRaysKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pRaygenShaderBindingTable,
        \iggyvolz\vulkan\util\ObjectPointer $pMissShaderBindingTable,
        \iggyvolz\vulkan\util\ObjectPointer $pHitShaderBindingTable,
        \iggyvolz\vulkan\util\ObjectPointer $pCallableShaderBindingTable,
        int $width,
        int $height,
        int $depth,
    ): void
    {
        $phpValue = $pRaygenShaderBindingTable;
        $cValue = $phpValue->cdata;
        $pRaygenShaderBindingTableC = $cValue;
        $phpValue = $pMissShaderBindingTable;
        $cValue = $phpValue->cdata;
        $pMissShaderBindingTableC = $cValue;
        $phpValue = $pHitShaderBindingTable;
        $cValue = $phpValue->cdata;
        $pHitShaderBindingTableC = $cValue;
        $phpValue = $pCallableShaderBindingTable;
        $cValue = $phpValue->cdata;
        $pCallableShaderBindingTableC = $cValue;
        $phpValue = $width;
        $cValue = $phpValue;
        $widthC = $cValue;
        $phpValue = $height;
        $cValue = $phpValue;
        $heightC = $cValue;
        $phpValue = $depth;
        $cValue = $phpValue;
        $depthC = $cValue;
        $cValue = $this->exec('vkCmdTraceRaysKHR',
            $pRaygenShaderBindingTableC,
            $pMissShaderBindingTableC,
            $pHitShaderBindingTableC,
            $pCallableShaderBindingTableC,
            $widthC,
            $heightC,
            $depthC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkBuffer $raygenShaderBindingTableBuffer VkBuffer
     * @param int $raygenShaderBindingOffset VkDeviceSize
     * @param \iggyvolz\vulkan\struct\VkBuffer $missShaderBindingTableBuffer VkBuffer
     * @param int $missShaderBindingOffset VkDeviceSize
     * @param int $missShaderBindingStride VkDeviceSize
     * @param \iggyvolz\vulkan\struct\VkBuffer $hitShaderBindingTableBuffer VkBuffer
     * @param int $hitShaderBindingOffset VkDeviceSize
     * @param int $hitShaderBindingStride VkDeviceSize
     * @param \iggyvolz\vulkan\struct\VkBuffer $callableShaderBindingTableBuffer VkBuffer
     * @param int $callableShaderBindingOffset VkDeviceSize
     * @param int $callableShaderBindingStride VkDeviceSize
     * @param int $width uint32_t
     * @param int $height uint32_t
     * @param int $depth uint32_t
     */
    public function cmdTraceRaysNV(
        VkBuffer $raygenShaderBindingTableBuffer,
        int $raygenShaderBindingOffset,
        VkBuffer $missShaderBindingTableBuffer,
        int $missShaderBindingOffset,
        int $missShaderBindingStride,
        VkBuffer $hitShaderBindingTableBuffer,
        int $hitShaderBindingOffset,
        int $hitShaderBindingStride,
        VkBuffer $callableShaderBindingTableBuffer,
        int $callableShaderBindingOffset,
        int $callableShaderBindingStride,
        int $width,
        int $height,
        int $depth,
    ): void
    {
        $phpValue = $raygenShaderBindingTableBuffer;
        $cValue = $phpValue->cdata;
        $raygenShaderBindingTableBufferC = $cValue;
        $phpValue = $raygenShaderBindingOffset;
        $cValue = $phpValue;
        $raygenShaderBindingOffsetC = $cValue;
        $phpValue = $missShaderBindingTableBuffer;
        $cValue = $phpValue->cdata;
        $missShaderBindingTableBufferC = $cValue;
        $phpValue = $missShaderBindingOffset;
        $cValue = $phpValue;
        $missShaderBindingOffsetC = $cValue;
        $phpValue = $missShaderBindingStride;
        $cValue = $phpValue;
        $missShaderBindingStrideC = $cValue;
        $phpValue = $hitShaderBindingTableBuffer;
        $cValue = $phpValue->cdata;
        $hitShaderBindingTableBufferC = $cValue;
        $phpValue = $hitShaderBindingOffset;
        $cValue = $phpValue;
        $hitShaderBindingOffsetC = $cValue;
        $phpValue = $hitShaderBindingStride;
        $cValue = $phpValue;
        $hitShaderBindingStrideC = $cValue;
        $phpValue = $callableShaderBindingTableBuffer;
        $cValue = $phpValue->cdata;
        $callableShaderBindingTableBufferC = $cValue;
        $phpValue = $callableShaderBindingOffset;
        $cValue = $phpValue;
        $callableShaderBindingOffsetC = $cValue;
        $phpValue = $callableShaderBindingStride;
        $cValue = $phpValue;
        $callableShaderBindingStrideC = $cValue;
        $phpValue = $width;
        $cValue = $phpValue;
        $widthC = $cValue;
        $phpValue = $height;
        $cValue = $phpValue;
        $heightC = $cValue;
        $phpValue = $depth;
        $cValue = $phpValue;
        $depthC = $cValue;
        $cValue = $this->exec('vkCmdTraceRaysNV',
            $raygenShaderBindingTableBufferC,
            $raygenShaderBindingOffsetC,
            $missShaderBindingTableBufferC,
            $missShaderBindingOffsetC,
            $missShaderBindingStrideC,
            $hitShaderBindingTableBufferC,
            $hitShaderBindingOffsetC,
            $hitShaderBindingStrideC,
            $callableShaderBindingTableBufferC,
            $callableShaderBindingOffsetC,
            $callableShaderBindingStrideC,
            $widthC,
            $heightC,
            $depthC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkStridedDeviceAddressRegionKHR> $pRaygenShaderBindingTable const VkStridedDeviceAddressRegionKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkStridedDeviceAddressRegionKHR> $pMissShaderBindingTable const VkStridedDeviceAddressRegionKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkStridedDeviceAddressRegionKHR> $pHitShaderBindingTable const VkStridedDeviceAddressRegionKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkStridedDeviceAddressRegionKHR> $pCallableShaderBindingTable const VkStridedDeviceAddressRegionKHR*
     * @param int $indirectDeviceAddress VkDeviceAddress
     */
    public function cmdTraceRaysIndirectKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pRaygenShaderBindingTable,
        \iggyvolz\vulkan\util\ObjectPointer $pMissShaderBindingTable,
        \iggyvolz\vulkan\util\ObjectPointer $pHitShaderBindingTable,
        \iggyvolz\vulkan\util\ObjectPointer $pCallableShaderBindingTable,
        int $indirectDeviceAddress,
    ): void
    {
        $phpValue = $pRaygenShaderBindingTable;
        $cValue = $phpValue->cdata;
        $pRaygenShaderBindingTableC = $cValue;
        $phpValue = $pMissShaderBindingTable;
        $cValue = $phpValue->cdata;
        $pMissShaderBindingTableC = $cValue;
        $phpValue = $pHitShaderBindingTable;
        $cValue = $phpValue->cdata;
        $pHitShaderBindingTableC = $cValue;
        $phpValue = $pCallableShaderBindingTable;
        $cValue = $phpValue->cdata;
        $pCallableShaderBindingTableC = $cValue;
        $phpValue = $indirectDeviceAddress;
        $cValue = $phpValue;
        $indirectDeviceAddressC = $cValue;
        $cValue = $this->exec('vkCmdTraceRaysIndirectKHR',
            $pRaygenShaderBindingTableC,
            $pMissShaderBindingTableC,
            $pHitShaderBindingTableC,
            $pCallableShaderBindingTableC,
            $indirectDeviceAddressC,
        );
    }

    /**
     * @param int $indirectDeviceAddress VkDeviceAddress
     */
    public function cmdTraceRaysIndirect2KHR(int $indirectDeviceAddress): void
    {
        $phpValue = $indirectDeviceAddress;
        $cValue = $phpValue;
        $indirectDeviceAddressC = $cValue;
        $cValue = $this->exec('vkCmdTraceRaysIndirect2KHR',
            $indirectDeviceAddressC,
        );
    }

    /**
     * @param int $pipelineStackSize uint32_t
     */
    public function cmdSetRayTracingPipelineStackSizeKHR(int $pipelineStackSize): void
    {
        $phpValue = $pipelineStackSize;
        $cValue = $phpValue;
        $pipelineStackSizeC = $cValue;
        $cValue = $this->exec('vkCmdSetRayTracingPipelineStackSizeKHR',
            $pipelineStackSizeC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPerformanceMarkerInfoINTEL> $pMarkerInfo const VkPerformanceMarkerInfoINTEL*
     * returns VkResult
     */
    public function cmdSetPerformanceMarkerINTEL(
        \iggyvolz\vulkan\util\ObjectPointer $pMarkerInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pMarkerInfo;
        $cValue = $phpValue->cdata;
        $pMarkerInfoC = $cValue;
        $cValue = $this->exec('vkCmdSetPerformanceMarkerINTEL',
            $pMarkerInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPerformanceStreamMarkerInfoINTEL> $pMarkerInfo const VkPerformanceStreamMarkerInfoINTEL*
     * returns VkResult
     */
    public function cmdSetPerformanceStreamMarkerINTEL(
        \iggyvolz\vulkan\util\ObjectPointer $pMarkerInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pMarkerInfo;
        $cValue = $phpValue->cdata;
        $pMarkerInfoC = $cValue;
        $cValue = $this->exec('vkCmdSetPerformanceStreamMarkerINTEL',
            $pMarkerInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPerformanceOverrideInfoINTEL> $pOverrideInfo const VkPerformanceOverrideInfoINTEL*
     * returns VkResult
     */
    public function cmdSetPerformanceOverrideINTEL(
        \iggyvolz\vulkan\util\ObjectPointer $pOverrideInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pOverrideInfo;
        $cValue = $phpValue->cdata;
        $pOverrideInfoC = $cValue;
        $cValue = $this->exec('vkCmdSetPerformanceOverrideINTEL',
            $pOverrideInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param int $lineStippleFactor uint32_t
     * @param int $lineStipplePattern uint16_t
     */
    public function cmdSetLineStippleEXT(int $lineStippleFactor, int $lineStipplePattern): void
    {
        $phpValue = $lineStippleFactor;
        $cValue = $phpValue;
        $lineStippleFactorC = $cValue;
        $phpValue = $lineStipplePattern;
        $cValue = $phpValue;
        $lineStipplePatternC = $cValue;
        $cValue = $this->exec('vkCmdSetLineStippleEXT',
            $lineStippleFactorC,
            $lineStipplePatternC,
        );
    }

    /**
     * @param int $infoCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAccelerationStructureBuildGeometryInfoKHR> $pInfos const VkAccelerationStructureBuildGeometryInfoKHR*
     * @param \iggyvolz\vulkan\util\Pointer $ppBuildRangeInfos const VkAccelerationStructureBuildRangeInfoKHR* const*
     */
    public function cmdBuildAccelerationStructuresKHR(
        int $infoCount,
        \iggyvolz\vulkan\util\ObjectPointer $pInfos,
        \iggyvolz\vulkan\util\Pointer $ppBuildRangeInfos,
    ): void
    {
        $phpValue = $infoCount;
        $cValue = $phpValue;
        $infoCountC = $cValue;
        $phpValue = $pInfos;
        $cValue = $phpValue->cdata;
        $pInfosC = $cValue;
        $phpValue = $ppBuildRangeInfos;
        $cValue = $phpValue->cdata;
        $ppBuildRangeInfosC = $cValue;
        $cValue = $this->exec('vkCmdBuildAccelerationStructuresKHR',
            $infoCountC,
            $pInfosC,
            $ppBuildRangeInfosC,
        );
    }

    /**
     * @param int $infoCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAccelerationStructureBuildGeometryInfoKHR> $pInfos const VkAccelerationStructureBuildGeometryInfoKHR*
     * @param \iggyvolz\vulkan\util\Pointer $pIndirectDeviceAddresses const VkDeviceAddress*
     * @param \iggyvolz\vulkan\util\IntPointer $pIndirectStrides const uint32_t*
     * @param \iggyvolz\vulkan\util\Pointer $ppMaxPrimitiveCounts const uint32_t* const*
     */
    public function cmdBuildAccelerationStructuresIndirectKHR(
        int $infoCount,
        \iggyvolz\vulkan\util\ObjectPointer $pInfos,
        \iggyvolz\vulkan\util\Pointer $pIndirectDeviceAddresses,
        \iggyvolz\vulkan\util\IntPointer $pIndirectStrides,
        \iggyvolz\vulkan\util\Pointer $ppMaxPrimitiveCounts,
    ): void
    {
        $phpValue = $infoCount;
        $cValue = $phpValue;
        $infoCountC = $cValue;
        $phpValue = $pInfos;
        $cValue = $phpValue->cdata;
        $pInfosC = $cValue;
        $phpValue = $pIndirectDeviceAddresses;
        $cValue = $phpValue->cdata;
        $pIndirectDeviceAddressesC = $cValue;
        $phpValue = $pIndirectStrides;
        $cValue = $phpValue->cdata;
        $pIndirectStridesC = $cValue;
        $phpValue = $ppMaxPrimitiveCounts;
        $cValue = $phpValue->cdata;
        $ppMaxPrimitiveCountsC = $cValue;
        $cValue = $this->exec('vkCmdBuildAccelerationStructuresIndirectKHR',
            $infoCountC,
            $pInfosC,
            $pIndirectDeviceAddressesC,
            $pIndirectStridesC,
            $ppMaxPrimitiveCountsC,
        );
    }

    /**
     * @param list<\iggyvolz\vulkan\enum\VkCullModeFlagBits> $cullMode VkCullModeFlags
     */
    public function cmdSetCullMode(array $cullMode): void
    {
        $phpValue = $cullMode;
        $cValue = \iggyvolz\vulkan\enum\VkCullModeFlagBits::toInt(...$phpValue);
        $cullModeC = $cValue;
        $cValue = $this->exec('vkCmdSetCullMode',
            $cullModeC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkFrontFace $frontFace VkFrontFace
     */
    public function cmdSetFrontFace(\iggyvolz\vulkan\enum\VkFrontFace $frontFace): void
    {
        $phpValue = $frontFace;
        $cValue = $phpValue->value;
        $frontFaceC = $cValue;
        $cValue = $this->exec('vkCmdSetFrontFace',
            $frontFaceC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkPrimitiveTopology $primitiveTopology VkPrimitiveTopology
     */
    public function cmdSetPrimitiveTopology(\iggyvolz\vulkan\enum\VkPrimitiveTopology $primitiveTopology): void
    {
        $phpValue = $primitiveTopology;
        $cValue = $phpValue->value;
        $primitiveTopologyC = $cValue;
        $cValue = $this->exec('vkCmdSetPrimitiveTopology',
            $primitiveTopologyC,
        );
    }

    /**
     * @param int $viewportCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkViewport> $pViewports const VkViewport*
     */
    public function cmdSetViewportWithCount(int $viewportCount, \iggyvolz\vulkan\util\ObjectPointer $pViewports): void
    {
        $phpValue = $viewportCount;
        $cValue = $phpValue;
        $viewportCountC = $cValue;
        $phpValue = $pViewports;
        $cValue = $phpValue->cdata;
        $pViewportsC = $cValue;
        $cValue = $this->exec('vkCmdSetViewportWithCount',
            $viewportCountC,
            $pViewportsC,
        );
    }

    /**
     * @param int $scissorCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRect2D> $pScissors const VkRect2D*
     */
    public function cmdSetScissorWithCount(int $scissorCount, \iggyvolz\vulkan\util\ObjectPointer $pScissors): void
    {
        $phpValue = $scissorCount;
        $cValue = $phpValue;
        $scissorCountC = $cValue;
        $phpValue = $pScissors;
        $cValue = $phpValue->cdata;
        $pScissorsC = $cValue;
        $cValue = $this->exec('vkCmdSetScissorWithCount',
            $scissorCountC,
            $pScissorsC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkBuffer $buffer VkBuffer
     * @param int $offset VkDeviceSize
     * @param int $size VkDeviceSize
     * @param \iggyvolz\vulkan\enum\VkIndexType $indexType VkIndexType
     */
    public function cmdBindIndexBuffer2KHR(
        VkBuffer $buffer,
        int $offset,
        int $size,
        \iggyvolz\vulkan\enum\VkIndexType $indexType,
    ): void
    {
        $phpValue = $buffer;
        $cValue = $phpValue->cdata;
        $bufferC = $cValue;
        $phpValue = $offset;
        $cValue = $phpValue;
        $offsetC = $cValue;
        $phpValue = $size;
        $cValue = $phpValue;
        $sizeC = $cValue;
        $phpValue = $indexType;
        $cValue = $phpValue->value;
        $indexTypeC = $cValue;
        $cValue = $this->exec('vkCmdBindIndexBuffer2KHR',
            $bufferC,
            $offsetC,
            $sizeC,
            $indexTypeC,
        );
    }

    /**
     * @param int $firstBinding uint32_t
     * @param int $bindingCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBuffer> $pBuffers const VkBuffer*
     * @param \iggyvolz\vulkan\util\Pointer $pOffsets const VkDeviceSize*
     * @param \iggyvolz\vulkan\util\Pointer $pSizes const VkDeviceSize*
     * @param \iggyvolz\vulkan\util\Pointer $pStrides const VkDeviceSize*
     */
    public function cmdBindVertexBuffers2(
        int $firstBinding,
        int $bindingCount,
        \iggyvolz\vulkan\util\ObjectPointer $pBuffers,
        \iggyvolz\vulkan\util\Pointer $pOffsets,
        \iggyvolz\vulkan\util\Pointer $pSizes,
        \iggyvolz\vulkan\util\Pointer $pStrides,
    ): void
    {
        $phpValue = $firstBinding;
        $cValue = $phpValue;
        $firstBindingC = $cValue;
        $phpValue = $bindingCount;
        $cValue = $phpValue;
        $bindingCountC = $cValue;
        $phpValue = $pBuffers;
        $cValue = $phpValue->cdata;
        $pBuffersC = $cValue;
        $phpValue = $pOffsets;
        $cValue = $phpValue->cdata;
        $pOffsetsC = $cValue;
        $phpValue = $pSizes;
        $cValue = $phpValue->cdata;
        $pSizesC = $cValue;
        $phpValue = $pStrides;
        $cValue = $phpValue->cdata;
        $pStridesC = $cValue;
        $cValue = $this->exec('vkCmdBindVertexBuffers2',
            $firstBindingC,
            $bindingCountC,
            $pBuffersC,
            $pOffsetsC,
            $pSizesC,
            $pStridesC,
        );
    }

    /**
     * @param bool $depthTestEnable VkBool32
     */
    public function cmdSetDepthTestEnable(bool $depthTestEnable): void
    {
        $phpValue = $depthTestEnable;
        $cValue = $phpValue ? 1 : 0;
        $depthTestEnableC = $cValue;
        $cValue = $this->exec('vkCmdSetDepthTestEnable',
            $depthTestEnableC,
        );
    }

    /**
     * @param bool $depthWriteEnable VkBool32
     */
    public function cmdSetDepthWriteEnable(bool $depthWriteEnable): void
    {
        $phpValue = $depthWriteEnable;
        $cValue = $phpValue ? 1 : 0;
        $depthWriteEnableC = $cValue;
        $cValue = $this->exec('vkCmdSetDepthWriteEnable',
            $depthWriteEnableC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkCompareOp $depthCompareOp VkCompareOp
     */
    public function cmdSetDepthCompareOp(\iggyvolz\vulkan\enum\VkCompareOp $depthCompareOp): void
    {
        $phpValue = $depthCompareOp;
        $cValue = $phpValue->value;
        $depthCompareOpC = $cValue;
        $cValue = $this->exec('vkCmdSetDepthCompareOp',
            $depthCompareOpC,
        );
    }

    /**
     * @param bool $depthBoundsTestEnable VkBool32
     */
    public function cmdSetDepthBoundsTestEnable(bool $depthBoundsTestEnable): void
    {
        $phpValue = $depthBoundsTestEnable;
        $cValue = $phpValue ? 1 : 0;
        $depthBoundsTestEnableC = $cValue;
        $cValue = $this->exec('vkCmdSetDepthBoundsTestEnable',
            $depthBoundsTestEnableC,
        );
    }

    /**
     * @param bool $stencilTestEnable VkBool32
     */
    public function cmdSetStencilTestEnable(bool $stencilTestEnable): void
    {
        $phpValue = $stencilTestEnable;
        $cValue = $phpValue ? 1 : 0;
        $stencilTestEnableC = $cValue;
        $cValue = $this->exec('vkCmdSetStencilTestEnable',
            $stencilTestEnableC,
        );
    }

    /**
     * @param list<\iggyvolz\vulkan\enum\VkStencilFaceFlagBits> $faceMask VkStencilFaceFlags
     * @param \iggyvolz\vulkan\enum\VkStencilOp $failOp VkStencilOp
     * @param \iggyvolz\vulkan\enum\VkStencilOp $passOp VkStencilOp
     * @param \iggyvolz\vulkan\enum\VkStencilOp $depthFailOp VkStencilOp
     * @param \iggyvolz\vulkan\enum\VkCompareOp $compareOp VkCompareOp
     */
    public function cmdSetStencilOp(
        array $faceMask,
        \iggyvolz\vulkan\enum\VkStencilOp $failOp,
        \iggyvolz\vulkan\enum\VkStencilOp $passOp,
        \iggyvolz\vulkan\enum\VkStencilOp $depthFailOp,
        \iggyvolz\vulkan\enum\VkCompareOp $compareOp,
    ): void
    {
        $phpValue = $faceMask;
        $cValue = \iggyvolz\vulkan\enum\VkStencilFaceFlagBits::toInt(...$phpValue);
        $faceMaskC = $cValue;
        $phpValue = $failOp;
        $cValue = $phpValue->value;
        $failOpC = $cValue;
        $phpValue = $passOp;
        $cValue = $phpValue->value;
        $passOpC = $cValue;
        $phpValue = $depthFailOp;
        $cValue = $phpValue->value;
        $depthFailOpC = $cValue;
        $phpValue = $compareOp;
        $cValue = $phpValue->value;
        $compareOpC = $cValue;
        $cValue = $this->exec('vkCmdSetStencilOp',
            $faceMaskC,
            $failOpC,
            $passOpC,
            $depthFailOpC,
            $compareOpC,
        );
    }

    /**
     * @param int $patchControlPoints uint32_t
     */
    public function cmdSetPatchControlPointsEXT(int $patchControlPoints): void
    {
        $phpValue = $patchControlPoints;
        $cValue = $phpValue;
        $patchControlPointsC = $cValue;
        $cValue = $this->exec('vkCmdSetPatchControlPointsEXT',
            $patchControlPointsC,
        );
    }

    /**
     * @param bool $rasterizerDiscardEnable VkBool32
     */
    public function cmdSetRasterizerDiscardEnable(bool $rasterizerDiscardEnable): void
    {
        $phpValue = $rasterizerDiscardEnable;
        $cValue = $phpValue ? 1 : 0;
        $rasterizerDiscardEnableC = $cValue;
        $cValue = $this->exec('vkCmdSetRasterizerDiscardEnable',
            $rasterizerDiscardEnableC,
        );
    }

    /**
     * @param bool $depthBiasEnable VkBool32
     */
    public function cmdSetDepthBiasEnable(bool $depthBiasEnable): void
    {
        $phpValue = $depthBiasEnable;
        $cValue = $phpValue ? 1 : 0;
        $depthBiasEnableC = $cValue;
        $cValue = $this->exec('vkCmdSetDepthBiasEnable',
            $depthBiasEnableC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkLogicOp $logicOp VkLogicOp
     */
    public function cmdSetLogicOpEXT(\iggyvolz\vulkan\enum\VkLogicOp $logicOp): void
    {
        $phpValue = $logicOp;
        $cValue = $phpValue->value;
        $logicOpC = $cValue;
        $cValue = $this->exec('vkCmdSetLogicOpEXT',
            $logicOpC,
        );
    }

    /**
     * @param bool $primitiveRestartEnable VkBool32
     */
    public function cmdSetPrimitiveRestartEnable(bool $primitiveRestartEnable): void
    {
        $phpValue = $primitiveRestartEnable;
        $cValue = $phpValue ? 1 : 0;
        $primitiveRestartEnableC = $cValue;
        $cValue = $this->exec('vkCmdSetPrimitiveRestartEnable',
            $primitiveRestartEnableC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkTessellationDomainOrigin $domainOrigin VkTessellationDomainOrigin
     */
    public function cmdSetTessellationDomainOriginEXT(
        \iggyvolz\vulkan\enum\VkTessellationDomainOrigin $domainOrigin,
    ): void
    {
        $phpValue = $domainOrigin;
        $cValue = $phpValue->value;
        $domainOriginC = $cValue;
        $cValue = $this->exec('vkCmdSetTessellationDomainOriginEXT',
            $domainOriginC,
        );
    }

    /**
     * @param bool $depthClampEnable VkBool32
     */
    public function cmdSetDepthClampEnableEXT(bool $depthClampEnable): void
    {
        $phpValue = $depthClampEnable;
        $cValue = $phpValue ? 1 : 0;
        $depthClampEnableC = $cValue;
        $cValue = $this->exec('vkCmdSetDepthClampEnableEXT',
            $depthClampEnableC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkPolygonMode $polygonMode VkPolygonMode
     */
    public function cmdSetPolygonModeEXT(\iggyvolz\vulkan\enum\VkPolygonMode $polygonMode): void
    {
        $phpValue = $polygonMode;
        $cValue = $phpValue->value;
        $polygonModeC = $cValue;
        $cValue = $this->exec('vkCmdSetPolygonModeEXT',
            $polygonModeC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkSampleCountFlagBits $rasterizationSamples VkSampleCountFlagBits
     */
    public function cmdSetRasterizationSamplesEXT(
        \iggyvolz\vulkan\enum\VkSampleCountFlagBits $rasterizationSamples,
    ): void
    {
        $phpValue = $rasterizationSamples;
        $cValue = $phpValue->value;
        $rasterizationSamplesC = $cValue;
        $cValue = $this->exec('vkCmdSetRasterizationSamplesEXT',
            $rasterizationSamplesC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkSampleCountFlagBits $samples VkSampleCountFlagBits
     * @param \iggyvolz\vulkan\util\Pointer $pSampleMask const VkSampleMask*
     */
    public function cmdSetSampleMaskEXT(
        \iggyvolz\vulkan\enum\VkSampleCountFlagBits $samples,
        \iggyvolz\vulkan\util\Pointer $pSampleMask,
    ): void
    {
        $phpValue = $samples;
        $cValue = $phpValue->value;
        $samplesC = $cValue;
        $phpValue = $pSampleMask;
        $cValue = $phpValue->cdata;
        $pSampleMaskC = $cValue;
        $cValue = $this->exec('vkCmdSetSampleMaskEXT',
            $samplesC,
            $pSampleMaskC,
        );
    }

    /**
     * @param bool $alphaToCoverageEnable VkBool32
     */
    public function cmdSetAlphaToCoverageEnableEXT(bool $alphaToCoverageEnable): void
    {
        $phpValue = $alphaToCoverageEnable;
        $cValue = $phpValue ? 1 : 0;
        $alphaToCoverageEnableC = $cValue;
        $cValue = $this->exec('vkCmdSetAlphaToCoverageEnableEXT',
            $alphaToCoverageEnableC,
        );
    }

    /**
     * @param bool $alphaToOneEnable VkBool32
     */
    public function cmdSetAlphaToOneEnableEXT(bool $alphaToOneEnable): void
    {
        $phpValue = $alphaToOneEnable;
        $cValue = $phpValue ? 1 : 0;
        $alphaToOneEnableC = $cValue;
        $cValue = $this->exec('vkCmdSetAlphaToOneEnableEXT',
            $alphaToOneEnableC,
        );
    }

    /**
     * @param bool $logicOpEnable VkBool32
     */
    public function cmdSetLogicOpEnableEXT(bool $logicOpEnable): void
    {
        $phpValue = $logicOpEnable;
        $cValue = $phpValue ? 1 : 0;
        $logicOpEnableC = $cValue;
        $cValue = $this->exec('vkCmdSetLogicOpEnableEXT',
            $logicOpEnableC,
        );
    }

    /**
     * @param int $firstAttachment uint32_t
     * @param int $attachmentCount uint32_t
     * @param \iggyvolz\vulkan\util\Pointer $pColorBlendEnables const VkBool32*
     */
    public function cmdSetColorBlendEnableEXT(
        int $firstAttachment,
        int $attachmentCount,
        \iggyvolz\vulkan\util\Pointer $pColorBlendEnables,
    ): void
    {
        $phpValue = $firstAttachment;
        $cValue = $phpValue;
        $firstAttachmentC = $cValue;
        $phpValue = $attachmentCount;
        $cValue = $phpValue;
        $attachmentCountC = $cValue;
        $phpValue = $pColorBlendEnables;
        $cValue = $phpValue->cdata;
        $pColorBlendEnablesC = $cValue;
        $cValue = $this->exec('vkCmdSetColorBlendEnableEXT',
            $firstAttachmentC,
            $attachmentCountC,
            $pColorBlendEnablesC,
        );
    }

    /**
     * @param int $firstAttachment uint32_t
     * @param int $attachmentCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkColorBlendEquationEXT> $pColorBlendEquations const VkColorBlendEquationEXT*
     */
    public function cmdSetColorBlendEquationEXT(
        int $firstAttachment,
        int $attachmentCount,
        \iggyvolz\vulkan\util\ObjectPointer $pColorBlendEquations,
    ): void
    {
        $phpValue = $firstAttachment;
        $cValue = $phpValue;
        $firstAttachmentC = $cValue;
        $phpValue = $attachmentCount;
        $cValue = $phpValue;
        $attachmentCountC = $cValue;
        $phpValue = $pColorBlendEquations;
        $cValue = $phpValue->cdata;
        $pColorBlendEquationsC = $cValue;
        $cValue = $this->exec('vkCmdSetColorBlendEquationEXT',
            $firstAttachmentC,
            $attachmentCountC,
            $pColorBlendEquationsC,
        );
    }

    /**
     * @param int $firstAttachment uint32_t
     * @param int $attachmentCount uint32_t
     * @param \iggyvolz\vulkan\util\Pointer $pColorWriteMasks const VkColorComponentFlags*
     */
    public function cmdSetColorWriteMaskEXT(
        int $firstAttachment,
        int $attachmentCount,
        \iggyvolz\vulkan\util\Pointer $pColorWriteMasks,
    ): void
    {
        $phpValue = $firstAttachment;
        $cValue = $phpValue;
        $firstAttachmentC = $cValue;
        $phpValue = $attachmentCount;
        $cValue = $phpValue;
        $attachmentCountC = $cValue;
        $phpValue = $pColorWriteMasks;
        $cValue = $phpValue->cdata;
        $pColorWriteMasksC = $cValue;
        $cValue = $this->exec('vkCmdSetColorWriteMaskEXT',
            $firstAttachmentC,
            $attachmentCountC,
            $pColorWriteMasksC,
        );
    }

    /**
     * @param int $rasterizationStream uint32_t
     */
    public function cmdSetRasterizationStreamEXT(int $rasterizationStream): void
    {
        $phpValue = $rasterizationStream;
        $cValue = $phpValue;
        $rasterizationStreamC = $cValue;
        $cValue = $this->exec('vkCmdSetRasterizationStreamEXT',
            $rasterizationStreamC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkConservativeRasterizationModeEXT $conservativeRasterizationMode VkConservativeRasterizationModeEXT
     */
    public function cmdSetConservativeRasterizationModeEXT(
        \iggyvolz\vulkan\enum\VkConservativeRasterizationModeEXT $conservativeRasterizationMode,
    ): void
    {
        $phpValue = $conservativeRasterizationMode;
        $cValue = $phpValue->value;
        $conservativeRasterizationModeC = $cValue;
        $cValue = $this->exec('vkCmdSetConservativeRasterizationModeEXT',
            $conservativeRasterizationModeC,
        );
    }

    /**
     * @param float $extraPrimitiveOverestimationSize float
     */
    public function cmdSetExtraPrimitiveOverestimationSizeEXT(float $extraPrimitiveOverestimationSize): void
    {
        $phpValue = $extraPrimitiveOverestimationSize;
        $cValue = $phpValue;
        $extraPrimitiveOverestimationSizeC = $cValue;
        $cValue = $this->exec('vkCmdSetExtraPrimitiveOverestimationSizeEXT',
            $extraPrimitiveOverestimationSizeC,
        );
    }

    /**
     * @param bool $depthClipEnable VkBool32
     */
    public function cmdSetDepthClipEnableEXT(bool $depthClipEnable): void
    {
        $phpValue = $depthClipEnable;
        $cValue = $phpValue ? 1 : 0;
        $depthClipEnableC = $cValue;
        $cValue = $this->exec('vkCmdSetDepthClipEnableEXT',
            $depthClipEnableC,
        );
    }

    /**
     * @param bool $sampleLocationsEnable VkBool32
     */
    public function cmdSetSampleLocationsEnableEXT(bool $sampleLocationsEnable): void
    {
        $phpValue = $sampleLocationsEnable;
        $cValue = $phpValue ? 1 : 0;
        $sampleLocationsEnableC = $cValue;
        $cValue = $this->exec('vkCmdSetSampleLocationsEnableEXT',
            $sampleLocationsEnableC,
        );
    }

    /**
     * @param int $firstAttachment uint32_t
     * @param int $attachmentCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkColorBlendAdvancedEXT> $pColorBlendAdvanced const VkColorBlendAdvancedEXT*
     */
    public function cmdSetColorBlendAdvancedEXT(
        int $firstAttachment,
        int $attachmentCount,
        \iggyvolz\vulkan\util\ObjectPointer $pColorBlendAdvanced,
    ): void
    {
        $phpValue = $firstAttachment;
        $cValue = $phpValue;
        $firstAttachmentC = $cValue;
        $phpValue = $attachmentCount;
        $cValue = $phpValue;
        $attachmentCountC = $cValue;
        $phpValue = $pColorBlendAdvanced;
        $cValue = $phpValue->cdata;
        $pColorBlendAdvancedC = $cValue;
        $cValue = $this->exec('vkCmdSetColorBlendAdvancedEXT',
            $firstAttachmentC,
            $attachmentCountC,
            $pColorBlendAdvancedC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkProvokingVertexModeEXT $provokingVertexMode VkProvokingVertexModeEXT
     */
    public function cmdSetProvokingVertexModeEXT(
        \iggyvolz\vulkan\enum\VkProvokingVertexModeEXT $provokingVertexMode,
    ): void
    {
        $phpValue = $provokingVertexMode;
        $cValue = $phpValue->value;
        $provokingVertexModeC = $cValue;
        $cValue = $this->exec('vkCmdSetProvokingVertexModeEXT',
            $provokingVertexModeC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkLineRasterizationModeEXT $lineRasterizationMode VkLineRasterizationModeEXT
     */
    public function cmdSetLineRasterizationModeEXT(
        \iggyvolz\vulkan\enum\VkLineRasterizationModeEXT $lineRasterizationMode,
    ): void
    {
        $phpValue = $lineRasterizationMode;
        $cValue = $phpValue->value;
        $lineRasterizationModeC = $cValue;
        $cValue = $this->exec('vkCmdSetLineRasterizationModeEXT',
            $lineRasterizationModeC,
        );
    }

    /**
     * @param bool $stippledLineEnable VkBool32
     */
    public function cmdSetLineStippleEnableEXT(bool $stippledLineEnable): void
    {
        $phpValue = $stippledLineEnable;
        $cValue = $phpValue ? 1 : 0;
        $stippledLineEnableC = $cValue;
        $cValue = $this->exec('vkCmdSetLineStippleEnableEXT',
            $stippledLineEnableC,
        );
    }

    /**
     * @param bool $negativeOneToOne VkBool32
     */
    public function cmdSetDepthClipNegativeOneToOneEXT(bool $negativeOneToOne): void
    {
        $phpValue = $negativeOneToOne;
        $cValue = $phpValue ? 1 : 0;
        $negativeOneToOneC = $cValue;
        $cValue = $this->exec('vkCmdSetDepthClipNegativeOneToOneEXT',
            $negativeOneToOneC,
        );
    }

    /**
     * @param bool $viewportWScalingEnable VkBool32
     */
    public function cmdSetViewportWScalingEnableNV(bool $viewportWScalingEnable): void
    {
        $phpValue = $viewportWScalingEnable;
        $cValue = $phpValue ? 1 : 0;
        $viewportWScalingEnableC = $cValue;
        $cValue = $this->exec('vkCmdSetViewportWScalingEnableNV',
            $viewportWScalingEnableC,
        );
    }

    /**
     * @param int $firstViewport uint32_t
     * @param int $viewportCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkViewportSwizzleNV> $pViewportSwizzles const VkViewportSwizzleNV*
     */
    public function cmdSetViewportSwizzleNV(
        int $firstViewport,
        int $viewportCount,
        \iggyvolz\vulkan\util\ObjectPointer $pViewportSwizzles,
    ): void
    {
        $phpValue = $firstViewport;
        $cValue = $phpValue;
        $firstViewportC = $cValue;
        $phpValue = $viewportCount;
        $cValue = $phpValue;
        $viewportCountC = $cValue;
        $phpValue = $pViewportSwizzles;
        $cValue = $phpValue->cdata;
        $pViewportSwizzlesC = $cValue;
        $cValue = $this->exec('vkCmdSetViewportSwizzleNV',
            $firstViewportC,
            $viewportCountC,
            $pViewportSwizzlesC,
        );
    }

    /**
     * @param bool $coverageToColorEnable VkBool32
     */
    public function cmdSetCoverageToColorEnableNV(bool $coverageToColorEnable): void
    {
        $phpValue = $coverageToColorEnable;
        $cValue = $phpValue ? 1 : 0;
        $coverageToColorEnableC = $cValue;
        $cValue = $this->exec('vkCmdSetCoverageToColorEnableNV',
            $coverageToColorEnableC,
        );
    }

    /**
     * @param int $coverageToColorLocation uint32_t
     */
    public function cmdSetCoverageToColorLocationNV(int $coverageToColorLocation): void
    {
        $phpValue = $coverageToColorLocation;
        $cValue = $phpValue;
        $coverageToColorLocationC = $cValue;
        $cValue = $this->exec('vkCmdSetCoverageToColorLocationNV',
            $coverageToColorLocationC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkCoverageModulationModeNV $coverageModulationMode VkCoverageModulationModeNV
     */
    public function cmdSetCoverageModulationModeNV(
        \iggyvolz\vulkan\enum\VkCoverageModulationModeNV $coverageModulationMode,
    ): void
    {
        $phpValue = $coverageModulationMode;
        $cValue = $phpValue->value;
        $coverageModulationModeC = $cValue;
        $cValue = $this->exec('vkCmdSetCoverageModulationModeNV',
            $coverageModulationModeC,
        );
    }

    /**
     * @param bool $coverageModulationTableEnable VkBool32
     */
    public function cmdSetCoverageModulationTableEnableNV(bool $coverageModulationTableEnable): void
    {
        $phpValue = $coverageModulationTableEnable;
        $cValue = $phpValue ? 1 : 0;
        $coverageModulationTableEnableC = $cValue;
        $cValue = $this->exec('vkCmdSetCoverageModulationTableEnableNV',
            $coverageModulationTableEnableC,
        );
    }

    /**
     * @param int $coverageModulationTableCount uint32_t
     * @param \iggyvolz\vulkan\util\Pointer $pCoverageModulationTable const float*
     */
    public function cmdSetCoverageModulationTableNV(
        int $coverageModulationTableCount,
        \iggyvolz\vulkan\util\Pointer $pCoverageModulationTable,
    ): void
    {
        $phpValue = $coverageModulationTableCount;
        $cValue = $phpValue;
        $coverageModulationTableCountC = $cValue;
        $phpValue = $pCoverageModulationTable;
        $cValue = $phpValue->cdata;
        $pCoverageModulationTableC = $cValue;
        $cValue = $this->exec('vkCmdSetCoverageModulationTableNV',
            $coverageModulationTableCountC,
            $pCoverageModulationTableC,
        );
    }

    /**
     * @param bool $shadingRateImageEnable VkBool32
     */
    public function cmdSetShadingRateImageEnableNV(bool $shadingRateImageEnable): void
    {
        $phpValue = $shadingRateImageEnable;
        $cValue = $phpValue ? 1 : 0;
        $shadingRateImageEnableC = $cValue;
        $cValue = $this->exec('vkCmdSetShadingRateImageEnableNV',
            $shadingRateImageEnableC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkCoverageReductionModeNV $coverageReductionMode VkCoverageReductionModeNV
     */
    public function cmdSetCoverageReductionModeNV(
        \iggyvolz\vulkan\enum\VkCoverageReductionModeNV $coverageReductionMode,
    ): void
    {
        $phpValue = $coverageReductionMode;
        $cValue = $phpValue->value;
        $coverageReductionModeC = $cValue;
        $cValue = $this->exec('vkCmdSetCoverageReductionModeNV',
            $coverageReductionModeC,
        );
    }

    /**
     * @param bool $representativeFragmentTestEnable VkBool32
     */
    public function cmdSetRepresentativeFragmentTestEnableNV(bool $representativeFragmentTestEnable): void
    {
        $phpValue = $representativeFragmentTestEnable;
        $cValue = $phpValue ? 1 : 0;
        $representativeFragmentTestEnableC = $cValue;
        $cValue = $this->exec('vkCmdSetRepresentativeFragmentTestEnableNV',
            $representativeFragmentTestEnableC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyBufferInfo2> $pCopyBufferInfo const VkCopyBufferInfo2*
     */
    public function cmdCopyBuffer2(\iggyvolz\vulkan\util\ObjectPointer $pCopyBufferInfo): void
    {
        $phpValue = $pCopyBufferInfo;
        $cValue = $phpValue->cdata;
        $pCopyBufferInfoC = $cValue;
        $cValue = $this->exec('vkCmdCopyBuffer2',
            $pCopyBufferInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyImageInfo2> $pCopyImageInfo const VkCopyImageInfo2*
     */
    public function cmdCopyImage2(\iggyvolz\vulkan\util\ObjectPointer $pCopyImageInfo): void
    {
        $phpValue = $pCopyImageInfo;
        $cValue = $phpValue->cdata;
        $pCopyImageInfoC = $cValue;
        $cValue = $this->exec('vkCmdCopyImage2',
            $pCopyImageInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBlitImageInfo2> $pBlitImageInfo const VkBlitImageInfo2*
     */
    public function cmdBlitImage2(\iggyvolz\vulkan\util\ObjectPointer $pBlitImageInfo): void
    {
        $phpValue = $pBlitImageInfo;
        $cValue = $phpValue->cdata;
        $pBlitImageInfoC = $cValue;
        $cValue = $this->exec('vkCmdBlitImage2',
            $pBlitImageInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyBufferToImageInfo2> $pCopyBufferToImageInfo const VkCopyBufferToImageInfo2*
     */
    public function cmdCopyBufferToImage2(\iggyvolz\vulkan\util\ObjectPointer $pCopyBufferToImageInfo): void
    {
        $phpValue = $pCopyBufferToImageInfo;
        $cValue = $phpValue->cdata;
        $pCopyBufferToImageInfoC = $cValue;
        $cValue = $this->exec('vkCmdCopyBufferToImage2',
            $pCopyBufferToImageInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyImageToBufferInfo2> $pCopyImageToBufferInfo const VkCopyImageToBufferInfo2*
     */
    public function cmdCopyImageToBuffer2(\iggyvolz\vulkan\util\ObjectPointer $pCopyImageToBufferInfo): void
    {
        $phpValue = $pCopyImageToBufferInfo;
        $cValue = $phpValue->cdata;
        $pCopyImageToBufferInfoC = $cValue;
        $cValue = $this->exec('vkCmdCopyImageToBuffer2',
            $pCopyImageToBufferInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkResolveImageInfo2> $pResolveImageInfo const VkResolveImageInfo2*
     */
    public function cmdResolveImage2(\iggyvolz\vulkan\util\ObjectPointer $pResolveImageInfo): void
    {
        $phpValue = $pResolveImageInfo;
        $cValue = $phpValue->cdata;
        $pResolveImageInfoC = $cValue;
        $cValue = $this->exec('vkCmdResolveImage2',
            $pResolveImageInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRefreshObjectListKHR> $pRefreshObjects const VkRefreshObjectListKHR*
     */
    public function cmdRefreshObjectsKHR(\iggyvolz\vulkan\util\ObjectPointer $pRefreshObjects): void
    {
        $phpValue = $pRefreshObjects;
        $cValue = $phpValue->cdata;
        $pRefreshObjectsC = $cValue;
        $cValue = $this->exec('vkCmdRefreshObjectsKHR',
            $pRefreshObjectsC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkExtent2D> $pFragmentSize const VkExtent2D*
     * @param mixed $combinerOps const VkFragmentShadingRateCombinerOpKHR    [2]
     */
    public function cmdSetFragmentShadingRateKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pFragmentSize,
        mixed $combinerOps,
    ): void
    {
        $phpValue = $pFragmentSize;
        $cValue = $phpValue->cdata;
        $pFragmentSizeC = $cValue;
        $phpValue = $combinerOps;
        throw new \LogicException("Dummy transformer!");
        $combinerOpsC = $cValue;
        $cValue = $this->exec('vkCmdSetFragmentShadingRateKHR',
            $pFragmentSizeC,
            $combinerOpsC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkFragmentShadingRateNV $shadingRate VkFragmentShadingRateNV
     * @param mixed $combinerOps const VkFragmentShadingRateCombinerOpKHR    [2]
     */
    public function cmdSetFragmentShadingRateEnumNV(
        \iggyvolz\vulkan\enum\VkFragmentShadingRateNV $shadingRate,
        mixed $combinerOps,
    ): void
    {
        $phpValue = $shadingRate;
        $cValue = $phpValue->value;
        $shadingRateC = $cValue;
        $phpValue = $combinerOps;
        throw new \LogicException("Dummy transformer!");
        $combinerOpsC = $cValue;
        $cValue = $this->exec('vkCmdSetFragmentShadingRateEnumNV',
            $shadingRateC,
            $combinerOpsC,
        );
    }

    /**
     * @param int $vertexBindingDescriptionCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVertexInputBindingDescription2EXT> $pVertexBindingDescriptions const VkVertexInputBindingDescription2EXT*
     * @param int $vertexAttributeDescriptionCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVertexInputAttributeDescription2EXT> $pVertexAttributeDescriptions const VkVertexInputAttributeDescription2EXT*
     */
    public function cmdSetVertexInputEXT(
        int $vertexBindingDescriptionCount,
        \iggyvolz\vulkan\util\ObjectPointer $pVertexBindingDescriptions,
        int $vertexAttributeDescriptionCount,
        \iggyvolz\vulkan\util\ObjectPointer $pVertexAttributeDescriptions,
    ): void
    {
        $phpValue = $vertexBindingDescriptionCount;
        $cValue = $phpValue;
        $vertexBindingDescriptionCountC = $cValue;
        $phpValue = $pVertexBindingDescriptions;
        $cValue = $phpValue->cdata;
        $pVertexBindingDescriptionsC = $cValue;
        $phpValue = $vertexAttributeDescriptionCount;
        $cValue = $phpValue;
        $vertexAttributeDescriptionCountC = $cValue;
        $phpValue = $pVertexAttributeDescriptions;
        $cValue = $phpValue->cdata;
        $pVertexAttributeDescriptionsC = $cValue;
        $cValue = $this->exec('vkCmdSetVertexInputEXT',
            $vertexBindingDescriptionCountC,
            $pVertexBindingDescriptionsC,
            $vertexAttributeDescriptionCountC,
            $pVertexAttributeDescriptionsC,
        );
    }

    /**
     * @param int $attachmentCount uint32_t
     * @param \iggyvolz\vulkan\util\Pointer $pColorWriteEnables const VkBool32*
     */
    public function cmdSetColorWriteEnableEXT(
        int $attachmentCount,
        \iggyvolz\vulkan\util\Pointer $pColorWriteEnables,
    ): void
    {
        $phpValue = $attachmentCount;
        $cValue = $phpValue;
        $attachmentCountC = $cValue;
        $phpValue = $pColorWriteEnables;
        $cValue = $phpValue->cdata;
        $pColorWriteEnablesC = $cValue;
        $cValue = $this->exec('vkCmdSetColorWriteEnableEXT',
            $attachmentCountC,
            $pColorWriteEnablesC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkEvent $event VkEvent
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDependencyInfo> $pDependencyInfo const VkDependencyInfo*
     */
    public function cmdSetEvent2(VkEvent $event, \iggyvolz\vulkan\util\ObjectPointer $pDependencyInfo): void
    {
        $phpValue = $event;
        $cValue = $phpValue->cdata;
        $eventC = $cValue;
        $phpValue = $pDependencyInfo;
        $cValue = $phpValue->cdata;
        $pDependencyInfoC = $cValue;
        $cValue = $this->exec('vkCmdSetEvent2',
            $eventC,
            $pDependencyInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkEvent $event VkEvent
     * @param list<\iggyvolz\vulkan\enum\VkPipelineStageFlagBits2> $stageMask VkPipelineStageFlags2
     */
    public function cmdResetEvent2(VkEvent $event, array $stageMask): void
    {
        $phpValue = $event;
        $cValue = $phpValue->cdata;
        $eventC = $cValue;
        $phpValue = $stageMask;
        $cValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits2::toInt(...$phpValue);
        $stageMaskC = $cValue;
        $cValue = $this->exec('vkCmdResetEvent2',
            $eventC,
            $stageMaskC,
        );
    }

    /**
     * @param int $eventCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkEvent> $pEvents const VkEvent*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDependencyInfo> $pDependencyInfos const VkDependencyInfo*
     */
    public function cmdWaitEvents2(
        int $eventCount,
        \iggyvolz\vulkan\util\ObjectPointer $pEvents,
        \iggyvolz\vulkan\util\ObjectPointer $pDependencyInfos,
    ): void
    {
        $phpValue = $eventCount;
        $cValue = $phpValue;
        $eventCountC = $cValue;
        $phpValue = $pEvents;
        $cValue = $phpValue->cdata;
        $pEventsC = $cValue;
        $phpValue = $pDependencyInfos;
        $cValue = $phpValue->cdata;
        $pDependencyInfosC = $cValue;
        $cValue = $this->exec('vkCmdWaitEvents2',
            $eventCountC,
            $pEventsC,
            $pDependencyInfosC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDependencyInfo> $pDependencyInfo const VkDependencyInfo*
     */
    public function cmdPipelineBarrier2(\iggyvolz\vulkan\util\ObjectPointer $pDependencyInfo): void
    {
        $phpValue = $pDependencyInfo;
        $cValue = $phpValue->cdata;
        $pDependencyInfoC = $cValue;
        $cValue = $this->exec('vkCmdPipelineBarrier2',
            $pDependencyInfoC,
        );
    }

    /**
     * @param list<\iggyvolz\vulkan\enum\VkPipelineStageFlagBits2> $stage VkPipelineStageFlags2
     * @param \iggyvolz\vulkan\struct\VkQueryPool $queryPool VkQueryPool
     * @param int $query uint32_t
     */
    public function cmdWriteTimestamp2(array $stage, VkQueryPool $queryPool, int $query): void
    {
        $phpValue = $stage;
        $cValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits2::toInt(...$phpValue);
        $stageC = $cValue;
        $phpValue = $queryPool;
        $cValue = $phpValue->cdata;
        $queryPoolC = $cValue;
        $phpValue = $query;
        $cValue = $phpValue;
        $queryC = $cValue;
        $cValue = $this->exec('vkCmdWriteTimestamp2',
            $stageC,
            $queryPoolC,
            $queryC,
        );
    }

    /**
     * @param list<\iggyvolz\vulkan\enum\VkPipelineStageFlagBits2> $stage VkPipelineStageFlags2
     * @param \iggyvolz\vulkan\struct\VkBuffer $dstBuffer VkBuffer
     * @param int $dstOffset VkDeviceSize
     * @param int $marker uint32_t
     */
    public function cmdWriteBufferMarker2AMD(array $stage, VkBuffer $dstBuffer, int $dstOffset, int $marker): void
    {
        $phpValue = $stage;
        $cValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits2::toInt(...$phpValue);
        $stageC = $cValue;
        $phpValue = $dstBuffer;
        $cValue = $phpValue->cdata;
        $dstBufferC = $cValue;
        $phpValue = $dstOffset;
        $cValue = $phpValue;
        $dstOffsetC = $cValue;
        $phpValue = $marker;
        $cValue = $phpValue;
        $markerC = $cValue;
        $cValue = $this->exec('vkCmdWriteBufferMarker2AMD',
            $stageC,
            $dstBufferC,
            $dstOffsetC,
            $markerC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVideoDecodeInfoKHR> $pDecodeInfo const VkVideoDecodeInfoKHR*
     */
    public function cmdDecodeVideoKHR(\iggyvolz\vulkan\util\ObjectPointer $pDecodeInfo): void
    {
        $phpValue = $pDecodeInfo;
        $cValue = $phpValue->cdata;
        $pDecodeInfoC = $cValue;
        $cValue = $this->exec('vkCmdDecodeVideoKHR',
            $pDecodeInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVideoBeginCodingInfoKHR> $pBeginInfo const VkVideoBeginCodingInfoKHR*
     */
    public function cmdBeginVideoCodingKHR(\iggyvolz\vulkan\util\ObjectPointer $pBeginInfo): void
    {
        $phpValue = $pBeginInfo;
        $cValue = $phpValue->cdata;
        $pBeginInfoC = $cValue;
        $cValue = $this->exec('vkCmdBeginVideoCodingKHR',
            $pBeginInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVideoCodingControlInfoKHR> $pCodingControlInfo const VkVideoCodingControlInfoKHR*
     */
    public function cmdControlVideoCodingKHR(\iggyvolz\vulkan\util\ObjectPointer $pCodingControlInfo): void
    {
        $phpValue = $pCodingControlInfo;
        $cValue = $phpValue->cdata;
        $pCodingControlInfoC = $cValue;
        $cValue = $this->exec('vkCmdControlVideoCodingKHR',
            $pCodingControlInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVideoEndCodingInfoKHR> $pEndCodingInfo const VkVideoEndCodingInfoKHR*
     */
    public function cmdEndVideoCodingKHR(\iggyvolz\vulkan\util\ObjectPointer $pEndCodingInfo): void
    {
        $phpValue = $pEndCodingInfo;
        $cValue = $phpValue->cdata;
        $pEndCodingInfoC = $cValue;
        $cValue = $this->exec('vkCmdEndVideoCodingKHR',
            $pEndCodingInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVideoEncodeInfoKHR> $pEncodeInfo const VkVideoEncodeInfoKHR*
     */
    public function cmdEncodeVideoKHR(\iggyvolz\vulkan\util\ObjectPointer $pEncodeInfo): void
    {
        $phpValue = $pEncodeInfo;
        $cValue = $phpValue->cdata;
        $pEncodeInfoC = $cValue;
        $cValue = $this->exec('vkCmdEncodeVideoKHR',
            $pEncodeInfoC,
        );
    }

    /**
     * @param int $decompressRegionCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDecompressMemoryRegionNV> $pDecompressMemoryRegions const VkDecompressMemoryRegionNV*
     */
    public function cmdDecompressMemoryNV(
        int $decompressRegionCount,
        \iggyvolz\vulkan\util\ObjectPointer $pDecompressMemoryRegions,
    ): void
    {
        $phpValue = $decompressRegionCount;
        $cValue = $phpValue;
        $decompressRegionCountC = $cValue;
        $phpValue = $pDecompressMemoryRegions;
        $cValue = $phpValue->cdata;
        $pDecompressMemoryRegionsC = $cValue;
        $cValue = $this->exec('vkCmdDecompressMemoryNV',
            $decompressRegionCountC,
            $pDecompressMemoryRegionsC,
        );
    }

    /**
     * @param int $indirectCommandsAddress VkDeviceAddress
     * @param int $indirectCommandsCountAddress VkDeviceAddress
     * @param int $stride uint32_t
     */
    public function cmdDecompressMemoryIndirectCountNV(
        int $indirectCommandsAddress,
        int $indirectCommandsCountAddress,
        int $stride,
    ): void
    {
        $phpValue = $indirectCommandsAddress;
        $cValue = $phpValue;
        $indirectCommandsAddressC = $cValue;
        $phpValue = $indirectCommandsCountAddress;
        $cValue = $phpValue;
        $indirectCommandsCountAddressC = $cValue;
        $phpValue = $stride;
        $cValue = $phpValue;
        $strideC = $cValue;
        $cValue = $this->exec('vkCmdDecompressMemoryIndirectCountNV',
            $indirectCommandsAddressC,
            $indirectCommandsCountAddressC,
            $strideC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCuLaunchInfoNVX> $pLaunchInfo const VkCuLaunchInfoNVX*
     */
    public function cmdCuLaunchKernelNVX(\iggyvolz\vulkan\util\ObjectPointer $pLaunchInfo): void
    {
        $phpValue = $pLaunchInfo;
        $cValue = $phpValue->cdata;
        $pLaunchInfoC = $cValue;
        $cValue = $this->exec('vkCmdCuLaunchKernelNVX',
            $pLaunchInfoC,
        );
    }

    /**
     * @param int $bufferCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDescriptorBufferBindingInfoEXT> $pBindingInfos const VkDescriptorBufferBindingInfoEXT*
     */
    public function cmdBindDescriptorBuffersEXT(
        int $bufferCount,
        \iggyvolz\vulkan\util\ObjectPointer $pBindingInfos,
    ): void
    {
        $phpValue = $bufferCount;
        $cValue = $phpValue;
        $bufferCountC = $cValue;
        $phpValue = $pBindingInfos;
        $cValue = $phpValue->cdata;
        $pBindingInfosC = $cValue;
        $cValue = $this->exec('vkCmdBindDescriptorBuffersEXT',
            $bufferCountC,
            $pBindingInfosC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint VkPipelineBindPoint
     * @param \iggyvolz\vulkan\struct\VkPipelineLayout $layout VkPipelineLayout
     * @param int $firstSet uint32_t
     * @param int $setCount uint32_t
     * @param \iggyvolz\vulkan\util\IntPointer $pBufferIndices const uint32_t*
     * @param \iggyvolz\vulkan\util\Pointer $pOffsets const VkDeviceSize*
     */
    public function cmdSetDescriptorBufferOffsetsEXT(
        \iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint,
        VkPipelineLayout $layout,
        int $firstSet,
        int $setCount,
        \iggyvolz\vulkan\util\IntPointer $pBufferIndices,
        \iggyvolz\vulkan\util\Pointer $pOffsets,
    ): void
    {
        $phpValue = $pipelineBindPoint;
        $cValue = $phpValue->value;
        $pipelineBindPointC = $cValue;
        $phpValue = $layout;
        $cValue = $phpValue->cdata;
        $layoutC = $cValue;
        $phpValue = $firstSet;
        $cValue = $phpValue;
        $firstSetC = $cValue;
        $phpValue = $setCount;
        $cValue = $phpValue;
        $setCountC = $cValue;
        $phpValue = $pBufferIndices;
        $cValue = $phpValue->cdata;
        $pBufferIndicesC = $cValue;
        $phpValue = $pOffsets;
        $cValue = $phpValue->cdata;
        $pOffsetsC = $cValue;
        $cValue = $this->exec('vkCmdSetDescriptorBufferOffsetsEXT',
            $pipelineBindPointC,
            $layoutC,
            $firstSetC,
            $setCountC,
            $pBufferIndicesC,
            $pOffsetsC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint VkPipelineBindPoint
     * @param \iggyvolz\vulkan\struct\VkPipelineLayout $layout VkPipelineLayout
     * @param int $set uint32_t
     */
    public function cmdBindDescriptorBufferEmbeddedSamplersEXT(
        \iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint,
        VkPipelineLayout $layout,
        int $set,
    ): void
    {
        $phpValue = $pipelineBindPoint;
        $cValue = $phpValue->value;
        $pipelineBindPointC = $cValue;
        $phpValue = $layout;
        $cValue = $phpValue->cdata;
        $layoutC = $cValue;
        $phpValue = $set;
        $cValue = $phpValue;
        $setC = $cValue;
        $cValue = $this->exec('vkCmdBindDescriptorBufferEmbeddedSamplersEXT',
            $pipelineBindPointC,
            $layoutC,
            $setC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCudaLaunchInfoNV> $pLaunchInfo const VkCudaLaunchInfoNV*
     */
    public function cmdCudaLaunchKernelNV(\iggyvolz\vulkan\util\ObjectPointer $pLaunchInfo): void
    {
        $phpValue = $pLaunchInfo;
        $cValue = $phpValue->cdata;
        $pLaunchInfoC = $cValue;
        $cValue = $this->exec('vkCmdCudaLaunchKernelNV',
            $pLaunchInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRenderingInfo> $pRenderingInfo const VkRenderingInfo*
     */
    public function cmdBeginRendering(\iggyvolz\vulkan\util\ObjectPointer $pRenderingInfo): void
    {
        $phpValue = $pRenderingInfo;
        $cValue = $phpValue->cdata;
        $pRenderingInfoC = $cValue;
        $cValue = $this->exec('vkCmdBeginRendering',
            $pRenderingInfoC,
        );
    }

    public function cmdEndRendering(): void
    {
        $cValue = $this->exec('vkCmdEndRendering',
        );
    }

    /**
     * @param int $infoCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMicromapBuildInfoEXT> $pInfos const VkMicromapBuildInfoEXT*
     */
    public function cmdBuildMicromapsEXT(int $infoCount, \iggyvolz\vulkan\util\ObjectPointer $pInfos): void
    {
        $phpValue = $infoCount;
        $cValue = $phpValue;
        $infoCountC = $cValue;
        $phpValue = $pInfos;
        $cValue = $phpValue->cdata;
        $pInfosC = $cValue;
        $cValue = $this->exec('vkCmdBuildMicromapsEXT',
            $infoCountC,
            $pInfosC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyMicromapInfoEXT> $pInfo const VkCopyMicromapInfoEXT*
     */
    public function cmdCopyMicromapEXT(\iggyvolz\vulkan\util\ObjectPointer $pInfo): void
    {
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->exec('vkCmdCopyMicromapEXT',
            $pInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyMicromapToMemoryInfoEXT> $pInfo const VkCopyMicromapToMemoryInfoEXT*
     */
    public function cmdCopyMicromapToMemoryEXT(\iggyvolz\vulkan\util\ObjectPointer $pInfo): void
    {
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->exec('vkCmdCopyMicromapToMemoryEXT',
            $pInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyMemoryToMicromapInfoEXT> $pInfo const VkCopyMemoryToMicromapInfoEXT*
     */
    public function cmdCopyMemoryToMicromapEXT(\iggyvolz\vulkan\util\ObjectPointer $pInfo): void
    {
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->exec('vkCmdCopyMemoryToMicromapEXT',
            $pInfoC,
        );
    }

    /**
     * @param int $micromapCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMicromapEXT> $pMicromaps const VkMicromapEXT*
     * @param \iggyvolz\vulkan\enum\VkQueryType $queryType VkQueryType
     * @param \iggyvolz\vulkan\struct\VkQueryPool $queryPool VkQueryPool
     * @param int $firstQuery uint32_t
     */
    public function cmdWriteMicromapsPropertiesEXT(
        int $micromapCount,
        \iggyvolz\vulkan\util\ObjectPointer $pMicromaps,
        \iggyvolz\vulkan\enum\VkQueryType $queryType,
        VkQueryPool $queryPool,
        int $firstQuery,
    ): void
    {
        $phpValue = $micromapCount;
        $cValue = $phpValue;
        $micromapCountC = $cValue;
        $phpValue = $pMicromaps;
        $cValue = $phpValue->cdata;
        $pMicromapsC = $cValue;
        $phpValue = $queryType;
        $cValue = $phpValue->value;
        $queryTypeC = $cValue;
        $phpValue = $queryPool;
        $cValue = $phpValue->cdata;
        $queryPoolC = $cValue;
        $phpValue = $firstQuery;
        $cValue = $phpValue;
        $firstQueryC = $cValue;
        $cValue = $this->exec('vkCmdWriteMicromapsPropertiesEXT',
            $micromapCountC,
            $pMicromapsC,
            $queryTypeC,
            $queryPoolC,
            $firstQueryC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkOpticalFlowSessionNV $session VkOpticalFlowSessionNV
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkOpticalFlowExecuteInfoNV> $pExecuteInfo const VkOpticalFlowExecuteInfoNV*
     */
    public function cmdOpticalFlowExecuteNV(
        VkOpticalFlowSessionNV $session,
        \iggyvolz\vulkan\util\ObjectPointer $pExecuteInfo,
    ): void
    {
        $phpValue = $session;
        $cValue = $phpValue->cdata;
        $sessionC = $cValue;
        $phpValue = $pExecuteInfo;
        $cValue = $phpValue->cdata;
        $pExecuteInfoC = $cValue;
        $cValue = $this->exec('vkCmdOpticalFlowExecuteNV',
            $sessionC,
            $pExecuteInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDepthBiasInfoEXT> $pDepthBiasInfo const VkDepthBiasInfoEXT*
     */
    public function cmdSetDepthBias2EXT(\iggyvolz\vulkan\util\ObjectPointer $pDepthBiasInfo): void
    {
        $phpValue = $pDepthBiasInfo;
        $cValue = $phpValue->cdata;
        $pDepthBiasInfoC = $cValue;
        $cValue = $this->exec('vkCmdSetDepthBias2EXT',
            $pDepthBiasInfoC,
        );
    }

    /**
     * @param int $stageCount uint32_t
     * @param \iggyvolz\vulkan\util\Pointer $pStages const VkShaderStageFlagBits*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkShaderEXT> $pShaders const VkShaderEXT*
     */
    public function cmdBindShadersEXT(
        int $stageCount,
        \iggyvolz\vulkan\util\Pointer $pStages,
        \iggyvolz\vulkan\util\ObjectPointer $pShaders,
    ): void
    {
        $phpValue = $stageCount;
        $cValue = $phpValue;
        $stageCountC = $cValue;
        $phpValue = $pStages;
        $cValue = $phpValue->cdata;
        $pStagesC = $cValue;
        $phpValue = $pShaders;
        $cValue = $phpValue->cdata;
        $pShadersC = $cValue;
        $cValue = $this->exec('vkCmdBindShadersEXT',
            $stageCountC,
            $pStagesC,
            $pShadersC,
        );
    }

    /**
     * @param int $scratch VkDeviceAddress
     */
    public function cmdInitializeGraphScratchMemoryAMDX(int $scratch): void
    {
        $phpValue = $scratch;
        $cValue = $phpValue;
        $scratchC = $cValue;
        $cValue = $this->exec('vkCmdInitializeGraphScratchMemoryAMDX',
            $scratchC,
        );
    }

    /**
     * @param int $scratch VkDeviceAddress
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDispatchGraphCountInfoAMDX> $pCountInfo const VkDispatchGraphCountInfoAMDX*
     */
    public function cmdDispatchGraphAMDX(int $scratch, \iggyvolz\vulkan\util\ObjectPointer $pCountInfo): void
    {
        $phpValue = $scratch;
        $cValue = $phpValue;
        $scratchC = $cValue;
        $phpValue = $pCountInfo;
        $cValue = $phpValue->cdata;
        $pCountInfoC = $cValue;
        $cValue = $this->exec('vkCmdDispatchGraphAMDX',
            $scratchC,
            $pCountInfoC,
        );
    }

    /**
     * @param int $scratch VkDeviceAddress
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDispatchGraphCountInfoAMDX> $pCountInfo const VkDispatchGraphCountInfoAMDX*
     */
    public function cmdDispatchGraphIndirectAMDX(int $scratch, \iggyvolz\vulkan\util\ObjectPointer $pCountInfo): void
    {
        $phpValue = $scratch;
        $cValue = $phpValue;
        $scratchC = $cValue;
        $phpValue = $pCountInfo;
        $cValue = $phpValue->cdata;
        $pCountInfoC = $cValue;
        $cValue = $this->exec('vkCmdDispatchGraphIndirectAMDX',
            $scratchC,
            $pCountInfoC,
        );
    }

    /**
     * @param int $scratch VkDeviceAddress
     * @param int $countInfo VkDeviceAddress
     */
    public function cmdDispatchGraphIndirectCountAMDX(int $scratch, int $countInfo): void
    {
        $phpValue = $scratch;
        $cValue = $phpValue;
        $scratchC = $cValue;
        $phpValue = $countInfo;
        $cValue = $phpValue;
        $countInfoC = $cValue;
        $cValue = $this->exec('vkCmdDispatchGraphIndirectCountAMDX',
            $scratchC,
            $countInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBindDescriptorSetsInfoKHR> $pBindDescriptorSetsInfo const VkBindDescriptorSetsInfoKHR*
     */
    public function cmdBindDescriptorSets2KHR(\iggyvolz\vulkan\util\ObjectPointer $pBindDescriptorSetsInfo): void
    {
        $phpValue = $pBindDescriptorSetsInfo;
        $cValue = $phpValue->cdata;
        $pBindDescriptorSetsInfoC = $cValue;
        $cValue = $this->exec('vkCmdBindDescriptorSets2KHR',
            $pBindDescriptorSetsInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPushConstantsInfoKHR> $pPushConstantsInfo const VkPushConstantsInfoKHR*
     */
    public function cmdPushConstants2KHR(\iggyvolz\vulkan\util\ObjectPointer $pPushConstantsInfo): void
    {
        $phpValue = $pPushConstantsInfo;
        $cValue = $phpValue->cdata;
        $pPushConstantsInfoC = $cValue;
        $cValue = $this->exec('vkCmdPushConstants2KHR',
            $pPushConstantsInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPushDescriptorSetInfoKHR> $pPushDescriptorSetInfo const VkPushDescriptorSetInfoKHR*
     */
    public function cmdPushDescriptorSet2KHR(\iggyvolz\vulkan\util\ObjectPointer $pPushDescriptorSetInfo): void
    {
        $phpValue = $pPushDescriptorSetInfo;
        $cValue = $phpValue->cdata;
        $pPushDescriptorSetInfoC = $cValue;
        $cValue = $this->exec('vkCmdPushDescriptorSet2KHR',
            $pPushDescriptorSetInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPushDescriptorSetWithTemplateInfoKHR> $pPushDescriptorSetWithTemplateInfo const VkPushDescriptorSetWithTemplateInfoKHR*
     */
    public function cmdPushDescriptorSetWithTemplate2KHR(
        \iggyvolz\vulkan\util\ObjectPointer $pPushDescriptorSetWithTemplateInfo,
    ): void
    {
        $phpValue = $pPushDescriptorSetWithTemplateInfo;
        $cValue = $phpValue->cdata;
        $pPushDescriptorSetWithTemplateInfoC = $cValue;
        $cValue = $this->exec('vkCmdPushDescriptorSetWithTemplate2KHR',
            $pPushDescriptorSetWithTemplateInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSetDescriptorBufferOffsetsInfoEXT> $pSetDescriptorBufferOffsetsInfo const VkSetDescriptorBufferOffsetsInfoEXT*
     */
    public function cmdSetDescriptorBufferOffsets2EXT(
        \iggyvolz\vulkan\util\ObjectPointer $pSetDescriptorBufferOffsetsInfo,
    ): void
    {
        $phpValue = $pSetDescriptorBufferOffsetsInfo;
        $cValue = $phpValue->cdata;
        $pSetDescriptorBufferOffsetsInfoC = $cValue;
        $cValue = $this->exec('vkCmdSetDescriptorBufferOffsets2EXT',
            $pSetDescriptorBufferOffsetsInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBindDescriptorBufferEmbeddedSamplersInfoEXT> $pBindDescriptorBufferEmbeddedSamplersInfo const VkBindDescriptorBufferEmbeddedSamplersInfoEXT*
     */
    public function cmdBindDescriptorBufferEmbeddedSamplers2EXT(
        \iggyvolz\vulkan\util\ObjectPointer $pBindDescriptorBufferEmbeddedSamplersInfo,
    ): void
    {
        $phpValue = $pBindDescriptorBufferEmbeddedSamplersInfo;
        $cValue = $phpValue->cdata;
        $pBindDescriptorBufferEmbeddedSamplersInfoC = $cValue;
        $cValue = $this->exec('vkCmdBindDescriptorBufferEmbeddedSamplers2EXT',
            $pBindDescriptorBufferEmbeddedSamplersInfoC,
        );
    }
}
