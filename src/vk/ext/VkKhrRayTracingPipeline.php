<?php

namespace iggyvolz\vulkan\ext;

class VkKhrRayTracingPipeline
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkStridedDeviceAddressRegionKHR $pRaygenShaderBindingTable
     * @param \iggyvolz\vulkan\struct\VkStridedDeviceAddressRegionKHR $pMissShaderBindingTable
     * @param \iggyvolz\vulkan\struct\VkStridedDeviceAddressRegionKHR $pHitShaderBindingTable
     * @param \iggyvolz\vulkan\struct\VkStridedDeviceAddressRegionKHR $pCallableShaderBindingTable
     * @param int $width
     * @param int $height
     * @param int $depth
     * @return void
     */
    public function vkCmdTraceRaysKHR(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkStridedDeviceAddressRegionKHR $pRaygenShaderBindingTable,
        \iggyvolz\vulkan\struct\VkStridedDeviceAddressRegionKHR $pMissShaderBindingTable,
        \iggyvolz\vulkan\struct\VkStridedDeviceAddressRegionKHR $pHitShaderBindingTable,
        \iggyvolz\vulkan\struct\VkStridedDeviceAddressRegionKHR $pCallableShaderBindingTable,
        int $width,
        int $height,
        int $depth,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pRaygenShaderBindingTable;
        // const VkStridedDeviceAddressRegionKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pRaygenShaderBindingTable = $cValue;
        $phpValue = $pMissShaderBindingTable;
        // const VkStridedDeviceAddressRegionKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pMissShaderBindingTable = $cValue;
        $phpValue = $pHitShaderBindingTable;
        // const VkStridedDeviceAddressRegionKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pHitShaderBindingTable = $cValue;
        $phpValue = $pCallableShaderBindingTable;
        // const VkStridedDeviceAddressRegionKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCallableShaderBindingTable = $cValue;
        $phpValue = $width;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $width = $cValue;
        $phpValue = $height;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $height = $cValue;
        $phpValue = $depth;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $depth = $cValue;
        $cValue = $this->vulkan->call("vkCmdTraceRaysKHR", $commandBuffer, $pRaygenShaderBindingTable, $pMissShaderBindingTable, $pHitShaderBindingTable, $pCallableShaderBindingTable, $width, $height, $depth);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkPipeline $pipeline
     * @param int $firstGroup
     * @param int $groupCount
     * @param int $dataSize
     * @param \iggyvolz\vulkan\util\Pointer $pData
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetRayTracingShaderGroupHandlesKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkPipeline $pipeline,
        int $firstGroup,
        int $groupCount,
        int $dataSize,
        \iggyvolz\vulkan\util\Pointer $pData,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pipeline;
        // VkPipeline => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $pipeline = $cValue;
        $phpValue = $firstGroup;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $firstGroup = $cValue;
        $phpValue = $groupCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $groupCount = $cValue;
        $phpValue = $dataSize;
        // size_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $dataSize = $cValue;
        $phpValue = $pData;
        // void* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pData = $cValue;
        $cValue = $this->vulkan->call("vkGetRayTracingShaderGroupHandlesKHR", $device, $pipeline, $firstGroup, $groupCount, $dataSize, $pData);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkPipeline $pipeline
     * @param int $firstGroup
     * @param int $groupCount
     * @param int $dataSize
     * @param \iggyvolz\vulkan\util\Pointer $pData
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetRayTracingCaptureReplayShaderGroupHandlesKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkPipeline $pipeline,
        int $firstGroup,
        int $groupCount,
        int $dataSize,
        \iggyvolz\vulkan\util\Pointer $pData,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pipeline;
        // VkPipeline => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $pipeline = $cValue;
        $phpValue = $firstGroup;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $firstGroup = $cValue;
        $phpValue = $groupCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $groupCount = $cValue;
        $phpValue = $dataSize;
        // size_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $dataSize = $cValue;
        $phpValue = $pData;
        // void* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pData = $cValue;
        $cValue = $this->vulkan->call("vkGetRayTracingCaptureReplayShaderGroupHandlesKHR", $device, $pipeline, $firstGroup, $groupCount, $dataSize, $pData);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation
     * @param \iggyvolz\vulkan\struct\VkPipelineCache $pipelineCache
     * @param int $createInfoCount
     * @param \iggyvolz\vulkan\struct\VkRayTracingPipelineCreateInfoKHR $pCreateInfos
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateRayTracingPipelinesKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation,
        \iggyvolz\vulkan\struct\VkPipelineCache $pipelineCache,
        int $createInfoCount,
        \iggyvolz\vulkan\struct\VkRayTracingPipelineCreateInfoKHR $pCreateInfos,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $deferredOperation;
        // VkDeferredOperationKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $deferredOperation = $cValue;
        $phpValue = $pipelineCache;
        // VkPipelineCache => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $pipelineCache = $cValue;
        $phpValue = $createInfoCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $createInfoCount = $cValue;
        $phpValue = $pCreateInfos;
        // const VkRayTracingPipelineCreateInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfos = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkStridedDeviceAddressRegionKHR $pRaygenShaderBindingTable
     * @param \iggyvolz\vulkan\struct\VkStridedDeviceAddressRegionKHR $pMissShaderBindingTable
     * @param \iggyvolz\vulkan\struct\VkStridedDeviceAddressRegionKHR $pHitShaderBindingTable
     * @param \iggyvolz\vulkan\struct\VkStridedDeviceAddressRegionKHR $pCallableShaderBindingTable
     * @param int $indirectDeviceAddress
     * @return void
     */
    public function vkCmdTraceRaysIndirectKHR(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkStridedDeviceAddressRegionKHR $pRaygenShaderBindingTable,
        \iggyvolz\vulkan\struct\VkStridedDeviceAddressRegionKHR $pMissShaderBindingTable,
        \iggyvolz\vulkan\struct\VkStridedDeviceAddressRegionKHR $pHitShaderBindingTable,
        \iggyvolz\vulkan\struct\VkStridedDeviceAddressRegionKHR $pCallableShaderBindingTable,
        int $indirectDeviceAddress,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pRaygenShaderBindingTable;
        // const VkStridedDeviceAddressRegionKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pRaygenShaderBindingTable = $cValue;
        $phpValue = $pMissShaderBindingTable;
        // const VkStridedDeviceAddressRegionKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pMissShaderBindingTable = $cValue;
        $phpValue = $pHitShaderBindingTable;
        // const VkStridedDeviceAddressRegionKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pHitShaderBindingTable = $cValue;
        $phpValue = $pCallableShaderBindingTable;
        // const VkStridedDeviceAddressRegionKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCallableShaderBindingTable = $cValue;
        $phpValue = $indirectDeviceAddress;
        // VkDeviceAddress => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $indirectDeviceAddress = $cValue;
        $cValue = $this->vulkan->call("vkCmdTraceRaysIndirectKHR", $commandBuffer, $pRaygenShaderBindingTable, $pMissShaderBindingTable, $pHitShaderBindingTable, $pCallableShaderBindingTable, $indirectDeviceAddress);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkPipeline $pipeline
     * @param int $group
     * @param \iggyvolz\vulkan\enum\VkShaderGroupShaderKHR $groupShader
     * @return int
     */
    public function vkGetRayTracingShaderGroupStackSizeKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkPipeline $pipeline,
        int $group,
        \iggyvolz\vulkan\enum\VkShaderGroupShaderKHR $groupShader,
    ): int {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pipeline;
        // VkPipeline => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $pipeline = $cValue;
        $phpValue = $group;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $group = $cValue;
        $phpValue = $groupShader;
        // VkShaderGroupShaderKHR => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $groupShader = $cValue;
        $cValue = $this->vulkan->call("vkGetRayTracingShaderGroupStackSizeKHR", $device, $pipeline, $group, $groupShader);
        // VkDeviceSize => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $phpValue = $cValue;
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $pipelineStackSize
     * @return void
     */
    public function vkCmdSetRayTracingPipelineStackSizeKHR(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $pipelineStackSize,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pipelineStackSize;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $pipelineStackSize = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetRayTracingPipelineStackSizeKHR", $commandBuffer, $pipelineStackSize);
    }
}
