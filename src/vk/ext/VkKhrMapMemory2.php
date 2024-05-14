<?php

namespace iggyvolz\vulkan\ext;

class VkKhrMapMemory2
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkMemoryMapInfoKHR $pMemoryMapInfo
     * @param \iggyvolz\vulkan\util\Pointer $ppData
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkMapMemory2KHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkMemoryMapInfoKHR $pMemoryMapInfo,
        \iggyvolz\vulkan\util\Pointer $ppData,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pMemoryMapInfo;
        // const VkMemoryMapInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pMemoryMapInfo = $cValue;
        $phpValue = $ppData;
        // void** => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $ppData = $cValue;
        $cValue = $this->vulkan->call("vkMapMemory2KHR", $device, $pMemoryMapInfo, $ppData);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkMemoryUnmapInfoKHR $pMemoryUnmapInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkUnmapMemory2KHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkMemoryUnmapInfoKHR $pMemoryUnmapInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pMemoryUnmapInfo;
        // const VkMemoryUnmapInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pMemoryUnmapInfo = $cValue;
        $cValue = $this->vulkan->call("vkUnmapMemory2KHR", $device, $pMemoryUnmapInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }
}
