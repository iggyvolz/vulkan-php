<?php

namespace iggyvolz\vulkan\ext;

class VkExtOpacityMicromap
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkMicromapCreateInfoEXT $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateMicromapEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkMicromapCreateInfoEXT $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCreateInfo;
        // const VkMicromapCreateInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
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
     * @param \iggyvolz\vulkan\struct\VkMicromapBuildInfoEXT $pInfos
     * @return void
     */
    public function vkCmdBuildMicromapsEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $infoCount,
        \iggyvolz\vulkan\struct\VkMicromapBuildInfoEXT $pInfos,
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
        // const VkMicromapBuildInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfos = $cValue;
        $cValue = $this->vulkan->call("vkCmdBuildMicromapsEXT", $commandBuffer, $infoCount, $pInfos);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation
     * @param int $infoCount
     * @param \iggyvolz\vulkan\struct\VkMicromapBuildInfoEXT $pInfos
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkBuildMicromapsEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation,
        int $infoCount,
        \iggyvolz\vulkan\struct\VkMicromapBuildInfoEXT $pInfos,
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
        // const VkMicromapBuildInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfos = $cValue;
        $cValue = $this->vulkan->call("vkBuildMicromapsEXT", $device, $deferredOperation, $infoCount, $pInfos);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkMicromapEXT $micromap
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroyMicromapEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkMicromapEXT $micromap,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $micromap;
        // VkMicromapEXT => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $micromap = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroyMicromapEXT", $device, $micromap, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkCopyMicromapInfoEXT $pInfo
     * @return void
     */
    public function vkCmdCopyMicromapEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkCopyMicromapInfoEXT $pInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pInfo;
        // const VkCopyMicromapInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdCopyMicromapEXT", $commandBuffer, $pInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation
     * @param \iggyvolz\vulkan\struct\VkCopyMicromapInfoEXT $pInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkCopyMicromapEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation,
        \iggyvolz\vulkan\struct\VkCopyMicromapInfoEXT $pInfo,
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
        // const VkCopyMicromapInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
        $cValue = $this->vulkan->call("vkCopyMicromapEXT", $device, $deferredOperation, $pInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkCopyMicromapToMemoryInfoEXT $pInfo
     * @return void
     */
    public function vkCmdCopyMicromapToMemoryEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkCopyMicromapToMemoryInfoEXT $pInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pInfo;
        // const VkCopyMicromapToMemoryInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdCopyMicromapToMemoryEXT", $commandBuffer, $pInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation
     * @param \iggyvolz\vulkan\struct\VkCopyMicromapToMemoryInfoEXT $pInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkCopyMicromapToMemoryEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation,
        \iggyvolz\vulkan\struct\VkCopyMicromapToMemoryInfoEXT $pInfo,
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
        // const VkCopyMicromapToMemoryInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
        $cValue = $this->vulkan->call("vkCopyMicromapToMemoryEXT", $device, $deferredOperation, $pInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkCopyMemoryToMicromapInfoEXT $pInfo
     * @return void
     */
    public function vkCmdCopyMemoryToMicromapEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkCopyMemoryToMicromapInfoEXT $pInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pInfo;
        // const VkCopyMemoryToMicromapInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdCopyMemoryToMicromapEXT", $commandBuffer, $pInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation
     * @param \iggyvolz\vulkan\struct\VkCopyMemoryToMicromapInfoEXT $pInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkCopyMemoryToMicromapEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation,
        \iggyvolz\vulkan\struct\VkCopyMemoryToMicromapInfoEXT $pInfo,
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
        // const VkCopyMemoryToMicromapInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
        $cValue = $this->vulkan->call("vkCopyMemoryToMicromapEXT", $device, $deferredOperation, $pInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $micromapCount
     * @param \iggyvolz\vulkan\struct\VkMicromapEXT $pMicromaps
     * @param \iggyvolz\vulkan\enum\VkQueryType $queryType
     * @param \iggyvolz\vulkan\struct\VkQueryPool $queryPool
     * @param int $firstQuery
     * @return void
     */
    public function vkCmdWriteMicromapsPropertiesEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $micromapCount,
        \iggyvolz\vulkan\struct\VkMicromapEXT $pMicromaps,
        \iggyvolz\vulkan\enum\VkQueryType $queryType,
        \iggyvolz\vulkan\struct\VkQueryPool $queryPool,
        int $firstQuery,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $micromapCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $micromapCount = $cValue;
        $phpValue = $pMicromaps;
        // const VkMicromapEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pMicromaps = $cValue;
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
        $cValue = $this->vulkan->call("vkCmdWriteMicromapsPropertiesEXT", $commandBuffer, $micromapCount, $pMicromaps, $queryType, $queryPool, $firstQuery);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param int $micromapCount
     * @param \iggyvolz\vulkan\struct\VkMicromapEXT $pMicromaps
     * @param \iggyvolz\vulkan\enum\VkQueryType $queryType
     * @param int $dataSize
     * @param \iggyvolz\vulkan\util\Pointer $pData
     * @param int $stride
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkWriteMicromapsPropertiesEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        int $micromapCount,
        \iggyvolz\vulkan\struct\VkMicromapEXT $pMicromaps,
        \iggyvolz\vulkan\enum\VkQueryType $queryType,
        int $dataSize,
        \iggyvolz\vulkan\util\Pointer $pData,
        int $stride,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $micromapCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $micromapCount = $cValue;
        $phpValue = $pMicromaps;
        // const VkMicromapEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pMicromaps = $cValue;
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
        $cValue = $this->vulkan->call("vkWriteMicromapsPropertiesEXT", $device, $micromapCount, $pMicromaps, $queryType, $dataSize, $pData, $stride);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkMicromapVersionInfoEXT $pVersionInfo
     * @param \iggyvolz\vulkan\util\Pointer $pCompatibility
     * @return void
     */
    public function vkGetDeviceMicromapCompatibilityEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkMicromapVersionInfoEXT $pVersionInfo,
        \iggyvolz\vulkan\util\Pointer $pCompatibility,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pVersionInfo;
        // const VkMicromapVersionInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pVersionInfo = $cValue;
        $phpValue = $pCompatibility;
        // VkAccelerationStructureCompatibilityKHR* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pCompatibility = $cValue;
        $cValue = $this->vulkan->call("vkGetDeviceMicromapCompatibilityEXT", $device, $pVersionInfo, $pCompatibility);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\enum\VkAccelerationStructureBuildTypeKHR $buildType
     * @param \iggyvolz\vulkan\struct\VkMicromapBuildInfoEXT $pBuildInfo
     */
    public function vkGetMicromapBuildSizesEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\enum\VkAccelerationStructureBuildTypeKHR $buildType,
        \iggyvolz\vulkan\struct\VkMicromapBuildInfoEXT $pBuildInfo,
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
        // const VkMicromapBuildInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pBuildInfo = $cValue;
    }
}
