<?php

namespace iggyvolz\vulkan\ext;

class VkAmdxShaderEnqueue
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkPipeline $executionGraph
     */
    public function vkGetExecutionGraphPipelineScratchSizeAMDX(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkPipeline $executionGraph,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $executionGraph;
        // VkPipeline => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $executionGraph = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkPipeline $executionGraph
     * @param \iggyvolz\vulkan\struct\VkPipelineShaderStageNodeCreateInfoAMDX $pNodeInfo
     * @param \iggyvolz\vulkan\util\IntPointer $pNodeIndex
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetExecutionGraphPipelineNodeIndexAMDX(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkPipeline $executionGraph,
        \iggyvolz\vulkan\struct\VkPipelineShaderStageNodeCreateInfoAMDX $pNodeInfo,
        \iggyvolz\vulkan\util\IntPointer $pNodeIndex,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $executionGraph;
        // VkPipeline => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $executionGraph = $cValue;
        $phpValue = $pNodeInfo;
        // const VkPipelineShaderStageNodeCreateInfoAMDX* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pNodeInfo = $cValue;
        $phpValue = $pNodeIndex;
        // uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pNodeIndex = $cValue;
        $cValue = $this->vulkan->call("vkGetExecutionGraphPipelineNodeIndexAMDX", $device, $executionGraph, $pNodeInfo, $pNodeIndex);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkPipelineCache $pipelineCache
     * @param int $createInfoCount
     * @param \iggyvolz\vulkan\struct\VkExecutionGraphPipelineCreateInfoAMDX $pCreateInfos
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateExecutionGraphPipelinesAMDX(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkPipelineCache $pipelineCache,
        int $createInfoCount,
        \iggyvolz\vulkan\struct\VkExecutionGraphPipelineCreateInfoAMDX $pCreateInfos,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pipelineCache;
        // VkPipelineCache => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $pipelineCache = $cValue;
        $phpValue = $createInfoCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $createInfoCount = $cValue;
        $phpValue = $pCreateInfos;
        // const VkExecutionGraphPipelineCreateInfoAMDX* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfos = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $scratch
     * @return void
     */
    public function vkCmdInitializeGraphScratchMemoryAMDX(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $scratch,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $scratch;
        // VkDeviceAddress => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $scratch = $cValue;
        $cValue = $this->vulkan->call("vkCmdInitializeGraphScratchMemoryAMDX", $commandBuffer, $scratch);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $scratch
     * @param \iggyvolz\vulkan\struct\VkDispatchGraphCountInfoAMDX $pCountInfo
     * @return void
     */
    public function vkCmdDispatchGraphAMDX(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $scratch,
        \iggyvolz\vulkan\struct\VkDispatchGraphCountInfoAMDX $pCountInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $scratch;
        // VkDeviceAddress => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $scratch = $cValue;
        $phpValue = $pCountInfo;
        // const VkDispatchGraphCountInfoAMDX* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCountInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdDispatchGraphAMDX", $commandBuffer, $scratch, $pCountInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $scratch
     * @param \iggyvolz\vulkan\struct\VkDispatchGraphCountInfoAMDX $pCountInfo
     * @return void
     */
    public function vkCmdDispatchGraphIndirectAMDX(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $scratch,
        \iggyvolz\vulkan\struct\VkDispatchGraphCountInfoAMDX $pCountInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $scratch;
        // VkDeviceAddress => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $scratch = $cValue;
        $phpValue = $pCountInfo;
        // const VkDispatchGraphCountInfoAMDX* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCountInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdDispatchGraphIndirectAMDX", $commandBuffer, $scratch, $pCountInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $scratch
     * @param int $countInfo
     * @return void
     */
    public function vkCmdDispatchGraphIndirectCountAMDX(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $scratch,
        int $countInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $scratch;
        // VkDeviceAddress => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $scratch = $cValue;
        $phpValue = $countInfo;
        // VkDeviceAddress => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $countInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdDispatchGraphIndirectCountAMDX", $commandBuffer, $scratch, $countInfo);
    }
}
