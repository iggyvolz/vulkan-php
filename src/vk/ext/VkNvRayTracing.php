<?php

namespace iggyvolz\vulkan\ext;

class VkNvRayTracing
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkPipeline $pipeline
     * @param int $shader
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkCompileDeferredNV(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkPipeline $pipeline,
        int $shader,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pipeline;
        // VkPipeline => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $pipeline = $cValue;
        $phpValue = $shader;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $shader = $cValue;
        $cValue = $this->vulkan->call("vkCompileDeferredNV", $device, $pipeline, $shader);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkAccelerationStructureCreateInfoNV $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateAccelerationStructureNV(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkAccelerationStructureCreateInfoNV $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCreateInfo;
        // const VkAccelerationStructureCreateInfoNV* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkAccelerationStructureNV $accelerationStructure
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroyAccelerationStructureNV(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkAccelerationStructureNV $accelerationStructure,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $accelerationStructure;
        // VkAccelerationStructureNV => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $accelerationStructure = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroyAccelerationStructureNV", $device, $accelerationStructure, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkAccelerationStructureMemoryRequirementsInfoNV $pInfo
     */
    public function vkGetAccelerationStructureMemoryRequirementsNV(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkAccelerationStructureMemoryRequirementsInfoNV $pInfo,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pInfo;
        // const VkAccelerationStructureMemoryRequirementsInfoNV* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param int $bindInfoCount
     * @param \iggyvolz\vulkan\struct\VkBindAccelerationStructureMemoryInfoNV $pBindInfos
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkBindAccelerationStructureMemoryNV(
        \iggyvolz\vulkan\struct\VkDevice $device,
        int $bindInfoCount,
        \iggyvolz\vulkan\struct\VkBindAccelerationStructureMemoryInfoNV $pBindInfos,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $bindInfoCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $bindInfoCount = $cValue;
        $phpValue = $pBindInfos;
        // const VkBindAccelerationStructureMemoryInfoNV* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pBindInfos = $cValue;
        $cValue = $this->vulkan->call("vkBindAccelerationStructureMemoryNV", $device, $bindInfoCount, $pBindInfos);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkAccelerationStructureNV $dst
     * @param \iggyvolz\vulkan\struct\VkAccelerationStructureNV $src
     * @param \iggyvolz\vulkan\enum\VkCopyAccelerationStructureModeKHR $mode
     * @return void
     */
    public function vkCmdCopyAccelerationStructureNV(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkAccelerationStructureNV $dst,
        \iggyvolz\vulkan\struct\VkAccelerationStructureNV $src,
        \iggyvolz\vulkan\enum\VkCopyAccelerationStructureModeKHR $mode,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $dst;
        // VkAccelerationStructureNV => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $dst = $cValue;
        $phpValue = $src;
        // VkAccelerationStructureNV => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $src = $cValue;
        $phpValue = $mode;
        // VkCopyAccelerationStructureModeKHR => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $mode = $cValue;
        $cValue = $this->vulkan->call("vkCmdCopyAccelerationStructureNV", $commandBuffer, $dst, $src, $mode);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $accelerationStructureCount
     * @param \iggyvolz\vulkan\struct\VkAccelerationStructureNV $pAccelerationStructures
     * @param \iggyvolz\vulkan\enum\VkQueryType $queryType
     * @param \iggyvolz\vulkan\struct\VkQueryPool $queryPool
     * @param int $firstQuery
     * @return void
     */
    public function vkCmdWriteAccelerationStructuresPropertiesNV(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $accelerationStructureCount,
        \iggyvolz\vulkan\struct\VkAccelerationStructureNV $pAccelerationStructures,
        \iggyvolz\vulkan\enum\VkQueryType $queryType,
        \iggyvolz\vulkan\struct\VkQueryPool $queryPool,
        int $firstQuery,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $accelerationStructureCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $accelerationStructureCount = $cValue;
        $phpValue = $pAccelerationStructures;
        // const VkAccelerationStructureNV* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAccelerationStructures = $cValue;
        $phpValue = $queryType;
        // VkQueryType => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $queryType = $cValue;
        $phpValue = $queryPool;
        // VkQueryPool => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $queryPool = $cValue;
        $phpValue = $firstQuery;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $firstQuery = $cValue;
        $cValue = $this->vulkan->call("vkCmdWriteAccelerationStructuresPropertiesNV", $commandBuffer, $accelerationStructureCount, $pAccelerationStructures, $queryType, $queryPool, $firstQuery);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkAccelerationStructureInfoNV $pInfo
     * @param \iggyvolz\vulkan\struct\VkBuffer $instanceData
     * @param int $instanceOffset
     * @param bool $update
     * @param \iggyvolz\vulkan\struct\VkAccelerationStructureNV $dst
     * @param \iggyvolz\vulkan\struct\VkAccelerationStructureNV $src
     * @param \iggyvolz\vulkan\struct\VkBuffer $scratch
     * @param int $scratchOffset
     * @return void
     */
    public function vkCmdBuildAccelerationStructureNV(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkAccelerationStructureInfoNV $pInfo,
        \iggyvolz\vulkan\struct\VkBuffer $instanceData,
        int $instanceOffset,
        bool $update,
        \iggyvolz\vulkan\struct\VkAccelerationStructureNV $dst,
        \iggyvolz\vulkan\struct\VkAccelerationStructureNV $src,
        \iggyvolz\vulkan\struct\VkBuffer $scratch,
        int $scratchOffset,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pInfo;
        // const VkAccelerationStructureInfoNV* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
        $phpValue = $instanceData;
        // VkBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $instanceData = $cValue;
        $phpValue = $instanceOffset;
        // VkDeviceSize => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $instanceOffset = $cValue;
        $phpValue = $update;
        // VkBool32 => iggyvolz\vulkan\generator\Transformer\BoolTransformer
        $cValue = $phpValue ? 1 : 0;
        $update = $cValue;
        $phpValue = $dst;
        // VkAccelerationStructureNV => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $dst = $cValue;
        $phpValue = $src;
        // VkAccelerationStructureNV => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $src = $cValue;
        $phpValue = $scratch;
        // VkBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $scratch = $cValue;
        $phpValue = $scratchOffset;
        // VkDeviceSize => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $scratchOffset = $cValue;
        $cValue = $this->vulkan->call("vkCmdBuildAccelerationStructureNV", $commandBuffer, $pInfo, $instanceData, $instanceOffset, $update, $dst, $src, $scratch, $scratchOffset);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkBuffer $raygenShaderBindingTableBuffer
     * @param int $raygenShaderBindingOffset
     * @param \iggyvolz\vulkan\struct\VkBuffer $missShaderBindingTableBuffer
     * @param int $missShaderBindingOffset
     * @param int $missShaderBindingStride
     * @param \iggyvolz\vulkan\struct\VkBuffer $hitShaderBindingTableBuffer
     * @param int $hitShaderBindingOffset
     * @param int $hitShaderBindingStride
     * @param \iggyvolz\vulkan\struct\VkBuffer $callableShaderBindingTableBuffer
     * @param int $callableShaderBindingOffset
     * @param int $callableShaderBindingStride
     * @param int $width
     * @param int $height
     * @param int $depth
     * @return void
     */
    public function vkCmdTraceRaysNV(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkBuffer $raygenShaderBindingTableBuffer,
        int $raygenShaderBindingOffset,
        \iggyvolz\vulkan\struct\VkBuffer $missShaderBindingTableBuffer,
        int $missShaderBindingOffset,
        int $missShaderBindingStride,
        \iggyvolz\vulkan\struct\VkBuffer $hitShaderBindingTableBuffer,
        int $hitShaderBindingOffset,
        int $hitShaderBindingStride,
        \iggyvolz\vulkan\struct\VkBuffer $callableShaderBindingTableBuffer,
        int $callableShaderBindingOffset,
        int $callableShaderBindingStride,
        int $width,
        int $height,
        int $depth,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $raygenShaderBindingTableBuffer;
        // VkBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $raygenShaderBindingTableBuffer = $cValue;
        $phpValue = $raygenShaderBindingOffset;
        // VkDeviceSize => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $raygenShaderBindingOffset = $cValue;
        $phpValue = $missShaderBindingTableBuffer;
        // VkBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $missShaderBindingTableBuffer = $cValue;
        $phpValue = $missShaderBindingOffset;
        // VkDeviceSize => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $missShaderBindingOffset = $cValue;
        $phpValue = $missShaderBindingStride;
        // VkDeviceSize => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $missShaderBindingStride = $cValue;
        $phpValue = $hitShaderBindingTableBuffer;
        // VkBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $hitShaderBindingTableBuffer = $cValue;
        $phpValue = $hitShaderBindingOffset;
        // VkDeviceSize => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $hitShaderBindingOffset = $cValue;
        $phpValue = $hitShaderBindingStride;
        // VkDeviceSize => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $hitShaderBindingStride = $cValue;
        $phpValue = $callableShaderBindingTableBuffer;
        // VkBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $callableShaderBindingTableBuffer = $cValue;
        $phpValue = $callableShaderBindingOffset;
        // VkDeviceSize => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $callableShaderBindingOffset = $cValue;
        $phpValue = $callableShaderBindingStride;
        // VkDeviceSize => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $callableShaderBindingStride = $cValue;
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
        $cValue = $this->vulkan->call("vkCmdTraceRaysNV", $commandBuffer, $raygenShaderBindingTableBuffer, $raygenShaderBindingOffset, $missShaderBindingTableBuffer, $missShaderBindingOffset, $missShaderBindingStride, $hitShaderBindingTableBuffer, $hitShaderBindingOffset, $hitShaderBindingStride, $callableShaderBindingTableBuffer, $callableShaderBindingOffset, $callableShaderBindingStride, $width, $height, $depth);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkAccelerationStructureNV $accelerationStructure
     * @param int $dataSize
     * @param \iggyvolz\vulkan\util\Pointer $pData
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetAccelerationStructureHandleNV(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkAccelerationStructureNV $accelerationStructure,
        int $dataSize,
        \iggyvolz\vulkan\util\Pointer $pData,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $accelerationStructure;
        // VkAccelerationStructureNV => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $accelerationStructure = $cValue;
        $phpValue = $dataSize;
        // size_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $dataSize = $cValue;
        $phpValue = $pData;
        // void* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pData = $cValue;
        $cValue = $this->vulkan->call("vkGetAccelerationStructureHandleNV", $device, $accelerationStructure, $dataSize, $pData);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkPipelineCache $pipelineCache
     * @param int $createInfoCount
     * @param \iggyvolz\vulkan\struct\VkRayTracingPipelineCreateInfoNV $pCreateInfos
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateRayTracingPipelinesNV(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkPipelineCache $pipelineCache,
        int $createInfoCount,
        \iggyvolz\vulkan\struct\VkRayTracingPipelineCreateInfoNV $pCreateInfos,
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
        // const VkRayTracingPipelineCreateInfoNV* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfos = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }
}
