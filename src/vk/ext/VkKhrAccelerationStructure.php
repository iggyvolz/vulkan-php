<?php

namespace iggyvolz\vulkan\ext;

class VkKhrAccelerationStructure
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkAccelerationStructureKHR $accelerationStructure
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroyAccelerationStructureKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkAccelerationStructureKHR $accelerationStructure,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $accelerationStructure;
        // VkAccelerationStructureKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $accelerationStructure = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroyAccelerationStructureKHR", $device, $accelerationStructure, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkCopyAccelerationStructureInfoKHR $pInfo
     * @return void
     */
    public function vkCmdCopyAccelerationStructureKHR(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkCopyAccelerationStructureInfoKHR $pInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pInfo;
        // const VkCopyAccelerationStructureInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdCopyAccelerationStructureKHR", $commandBuffer, $pInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation
     * @param \iggyvolz\vulkan\struct\VkCopyAccelerationStructureInfoKHR $pInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkCopyAccelerationStructureKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation,
        \iggyvolz\vulkan\struct\VkCopyAccelerationStructureInfoKHR $pInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $deferredOperation;
        // VkDeferredOperationKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $deferredOperation = $cValue;
        $phpValue = $pInfo;
        // const VkCopyAccelerationStructureInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
        $cValue = $this->vulkan->call("vkCopyAccelerationStructureKHR", $device, $deferredOperation, $pInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkCopyAccelerationStructureToMemoryInfoKHR $pInfo
     * @return void
     */
    public function vkCmdCopyAccelerationStructureToMemoryKHR(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkCopyAccelerationStructureToMemoryInfoKHR $pInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pInfo;
        // const VkCopyAccelerationStructureToMemoryInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdCopyAccelerationStructureToMemoryKHR", $commandBuffer, $pInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation
     * @param \iggyvolz\vulkan\struct\VkCopyAccelerationStructureToMemoryInfoKHR $pInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkCopyAccelerationStructureToMemoryKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation,
        \iggyvolz\vulkan\struct\VkCopyAccelerationStructureToMemoryInfoKHR $pInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $deferredOperation;
        // VkDeferredOperationKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $deferredOperation = $cValue;
        $phpValue = $pInfo;
        // const VkCopyAccelerationStructureToMemoryInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
        $cValue = $this->vulkan->call("vkCopyAccelerationStructureToMemoryKHR", $device, $deferredOperation, $pInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkCopyMemoryToAccelerationStructureInfoKHR $pInfo
     * @return void
     */
    public function vkCmdCopyMemoryToAccelerationStructureKHR(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkCopyMemoryToAccelerationStructureInfoKHR $pInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pInfo;
        // const VkCopyMemoryToAccelerationStructureInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdCopyMemoryToAccelerationStructureKHR", $commandBuffer, $pInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation
     * @param \iggyvolz\vulkan\struct\VkCopyMemoryToAccelerationStructureInfoKHR $pInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkCopyMemoryToAccelerationStructureKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation,
        \iggyvolz\vulkan\struct\VkCopyMemoryToAccelerationStructureInfoKHR $pInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $deferredOperation;
        // VkDeferredOperationKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $deferredOperation = $cValue;
        $phpValue = $pInfo;
        // const VkCopyMemoryToAccelerationStructureInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
        $cValue = $this->vulkan->call("vkCopyMemoryToAccelerationStructureKHR", $device, $deferredOperation, $pInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $accelerationStructureCount
     * @param \iggyvolz\vulkan\struct\VkAccelerationStructureKHR $pAccelerationStructures
     * @param \iggyvolz\vulkan\enum\VkQueryType $queryType
     * @param \iggyvolz\vulkan\struct\VkQueryPool $queryPool
     * @param int $firstQuery
     * @return void
     */
    public function vkCmdWriteAccelerationStructuresPropertiesKHR(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $accelerationStructureCount,
        \iggyvolz\vulkan\struct\VkAccelerationStructureKHR $pAccelerationStructures,
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
        // const VkAccelerationStructureKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
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
        $cValue = $this->vulkan->call("vkCmdWriteAccelerationStructuresPropertiesKHR", $commandBuffer, $accelerationStructureCount, $pAccelerationStructures, $queryType, $queryPool, $firstQuery);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param int $accelerationStructureCount
     * @param \iggyvolz\vulkan\struct\VkAccelerationStructureKHR $pAccelerationStructures
     * @param \iggyvolz\vulkan\enum\VkQueryType $queryType
     * @param int $dataSize
     * @param \iggyvolz\vulkan\util\Pointer $pData
     * @param int $stride
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkWriteAccelerationStructuresPropertiesKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        int $accelerationStructureCount,
        \iggyvolz\vulkan\struct\VkAccelerationStructureKHR $pAccelerationStructures,
        \iggyvolz\vulkan\enum\VkQueryType $queryType,
        int $dataSize,
        \iggyvolz\vulkan\util\Pointer $pData,
        int $stride,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $accelerationStructureCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $accelerationStructureCount = $cValue;
        $phpValue = $pAccelerationStructures;
        // const VkAccelerationStructureKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAccelerationStructures = $cValue;
        $phpValue = $queryType;
        // VkQueryType => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $queryType = $cValue;
        $phpValue = $dataSize;
        // size_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $dataSize = $cValue;
        $phpValue = $pData;
        // void* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pData = $cValue;
        $phpValue = $stride;
        // size_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $stride = $cValue;
        $cValue = $this->vulkan->call("vkWriteAccelerationStructuresPropertiesKHR", $device, $accelerationStructureCount, $pAccelerationStructures, $queryType, $dataSize, $pData, $stride);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkAccelerationStructureVersionInfoKHR $pVersionInfo
     * @param \iggyvolz\vulkan\util\Pointer $pCompatibility
     * @return void
     */
    public function vkGetDeviceAccelerationStructureCompatibilityKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkAccelerationStructureVersionInfoKHR $pVersionInfo,
        \iggyvolz\vulkan\util\Pointer $pCompatibility,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pVersionInfo;
        // const VkAccelerationStructureVersionInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pVersionInfo = $cValue;
        $phpValue = $pCompatibility;
        // VkAccelerationStructureCompatibilityKHR* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pCompatibility = $cValue;
        $cValue = $this->vulkan->call("vkGetDeviceAccelerationStructureCompatibilityKHR", $device, $pVersionInfo, $pCompatibility);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkAccelerationStructureCreateInfoKHR $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateAccelerationStructureKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkAccelerationStructureCreateInfoKHR $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCreateInfo;
        // const VkAccelerationStructureCreateInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $infoCount
     * @param \iggyvolz\vulkan\struct\VkAccelerationStructureBuildGeometryInfoKHR $pInfos
     * @param \iggyvolz\vulkan\util\Pointer $ppBuildRangeInfos
     * @return void
     */
    public function vkCmdBuildAccelerationStructuresKHR(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $infoCount,
        \iggyvolz\vulkan\struct\VkAccelerationStructureBuildGeometryInfoKHR $pInfos,
        \iggyvolz\vulkan\util\Pointer $ppBuildRangeInfos,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $infoCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $infoCount = $cValue;
        $phpValue = $pInfos;
        // const VkAccelerationStructureBuildGeometryInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfos = $cValue;
        $phpValue = $ppBuildRangeInfos;
        // const VkAccelerationStructureBuildRangeInfoKHR* const* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $ppBuildRangeInfos = $cValue;
        $cValue = $this->vulkan->call("vkCmdBuildAccelerationStructuresKHR", $commandBuffer, $infoCount, $pInfos, $ppBuildRangeInfos);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $infoCount
     * @param \iggyvolz\vulkan\struct\VkAccelerationStructureBuildGeometryInfoKHR $pInfos
     * @param \iggyvolz\vulkan\util\Pointer $pIndirectDeviceAddresses
     * @param \iggyvolz\vulkan\util\IntPointer $pIndirectStrides
     * @param \iggyvolz\vulkan\util\Pointer $ppMaxPrimitiveCounts
     * @return void
     */
    public function vkCmdBuildAccelerationStructuresIndirectKHR(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $infoCount,
        \iggyvolz\vulkan\struct\VkAccelerationStructureBuildGeometryInfoKHR $pInfos,
        \iggyvolz\vulkan\util\Pointer $pIndirectDeviceAddresses,
        \iggyvolz\vulkan\util\IntPointer $pIndirectStrides,
        \iggyvolz\vulkan\util\Pointer $ppMaxPrimitiveCounts,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $infoCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $infoCount = $cValue;
        $phpValue = $pInfos;
        // const VkAccelerationStructureBuildGeometryInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfos = $cValue;
        $phpValue = $pIndirectDeviceAddresses;
        // const VkDeviceAddress* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pIndirectDeviceAddresses = $cValue;
        $phpValue = $pIndirectStrides;
        // const uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pIndirectStrides = $cValue;
        $phpValue = $ppMaxPrimitiveCounts;
        // const uint32_t* const* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $ppMaxPrimitiveCounts = $cValue;
        $cValue = $this->vulkan->call("vkCmdBuildAccelerationStructuresIndirectKHR", $commandBuffer, $infoCount, $pInfos, $pIndirectDeviceAddresses, $pIndirectStrides, $ppMaxPrimitiveCounts);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation
     * @param int $infoCount
     * @param \iggyvolz\vulkan\struct\VkAccelerationStructureBuildGeometryInfoKHR $pInfos
     * @param \iggyvolz\vulkan\util\Pointer $ppBuildRangeInfos
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkBuildAccelerationStructuresKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation,
        int $infoCount,
        \iggyvolz\vulkan\struct\VkAccelerationStructureBuildGeometryInfoKHR $pInfos,
        \iggyvolz\vulkan\util\Pointer $ppBuildRangeInfos,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $deferredOperation;
        // VkDeferredOperationKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $deferredOperation = $cValue;
        $phpValue = $infoCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $infoCount = $cValue;
        $phpValue = $pInfos;
        // const VkAccelerationStructureBuildGeometryInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfos = $cValue;
        $phpValue = $ppBuildRangeInfos;
        // const VkAccelerationStructureBuildRangeInfoKHR* const* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $ppBuildRangeInfos = $cValue;
        $cValue = $this->vulkan->call("vkBuildAccelerationStructuresKHR", $device, $deferredOperation, $infoCount, $pInfos, $ppBuildRangeInfos);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkAccelerationStructureDeviceAddressInfoKHR $pInfo
     * @return int
     */
    public function vkGetAccelerationStructureDeviceAddressKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkAccelerationStructureDeviceAddressInfoKHR $pInfo,
    ): int {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pInfo;
        // const VkAccelerationStructureDeviceAddressInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
        $cValue = $this->vulkan->call("vkGetAccelerationStructureDeviceAddressKHR", $device, $pInfo);
        // VkDeviceAddress => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $phpValue = $cValue;
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\enum\VkAccelerationStructureBuildTypeKHR $buildType
     * @param \iggyvolz\vulkan\struct\VkAccelerationStructureBuildGeometryInfoKHR $pBuildInfo
     * @param \iggyvolz\vulkan\util\IntPointer $pMaxPrimitiveCounts
     */
    public function vkGetAccelerationStructureBuildSizesKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\enum\VkAccelerationStructureBuildTypeKHR $buildType,
        \iggyvolz\vulkan\struct\VkAccelerationStructureBuildGeometryInfoKHR $pBuildInfo,
        \iggyvolz\vulkan\util\IntPointer $pMaxPrimitiveCounts,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $buildType;
        // VkAccelerationStructureBuildTypeKHR => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $buildType = $cValue;
        $phpValue = $pBuildInfo;
        // const VkAccelerationStructureBuildGeometryInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pBuildInfo = $cValue;
        $phpValue = $pMaxPrimitiveCounts;
        // const uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pMaxPrimitiveCounts = $cValue;
    }
}
