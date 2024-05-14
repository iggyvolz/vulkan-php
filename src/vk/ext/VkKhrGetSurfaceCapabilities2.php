<?php

namespace iggyvolz\vulkan\ext;

class VkKhrGetSurfaceCapabilities2
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\struct\VkPhysicalDeviceSurfaceInfo2KHR $pSurfaceInfo
     */
    public function vkGetPhysicalDeviceSurfaceCapabilities2KHR(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\struct\VkPhysicalDeviceSurfaceInfo2KHR $pSurfaceInfo,
    ) {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $pSurfaceInfo;
        // const VkPhysicalDeviceSurfaceInfo2KHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pSurfaceInfo = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\struct\VkPhysicalDeviceSurfaceInfo2KHR $pSurfaceInfo
     * @param \iggyvolz\vulkan\util\IntPointer $pSurfaceFormatCount
     */
    public function vkGetPhysicalDeviceSurfaceFormats2KHR(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\struct\VkPhysicalDeviceSurfaceInfo2KHR $pSurfaceInfo,
        \iggyvolz\vulkan\util\IntPointer $pSurfaceFormatCount,
    ) {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $pSurfaceInfo;
        // const VkPhysicalDeviceSurfaceInfo2KHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pSurfaceInfo = $cValue;
        $phpValue = $pSurfaceFormatCount;
        // uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pSurfaceFormatCount = $cValue;
    }
}
