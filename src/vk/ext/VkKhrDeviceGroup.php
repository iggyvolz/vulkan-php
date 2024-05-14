<?php

namespace iggyvolz\vulkan\ext;

class VkKhrDeviceGroup
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     */
    public function vkGetDeviceGroupPresentCapabilitiesKHR(\iggyvolz\vulkan\struct\VkDevice $device)
    {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkSurfaceKHR $surface
     * @param \iggyvolz\vulkan\util\Pointer $pModes
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetDeviceGroupSurfacePresentModesKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkSurfaceKHR $surface,
        \iggyvolz\vulkan\util\Pointer $pModes,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $surface;
        // VkSurfaceKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $surface = $cValue;
        $phpValue = $pModes;
        // VkDeviceGroupPresentModeFlagsKHR* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pModes = $cValue;
        $cValue = $this->vulkan->call("vkGetDeviceGroupSurfacePresentModesKHR", $device, $surface, $pModes);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkAcquireNextImageInfoKHR $pAcquireInfo
     * @param \iggyvolz\vulkan\util\IntPointer $pImageIndex
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkAcquireNextImage2KHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkAcquireNextImageInfoKHR $pAcquireInfo,
        \iggyvolz\vulkan\util\IntPointer $pImageIndex,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pAcquireInfo;
        // const VkAcquireNextImageInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAcquireInfo = $cValue;
        $phpValue = $pImageIndex;
        // uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pImageIndex = $cValue;
        $cValue = $this->vulkan->call("vkAcquireNextImage2KHR", $device, $pAcquireInfo, $pImageIndex);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\struct\VkSurfaceKHR $surface
     * @param \iggyvolz\vulkan\util\IntPointer $pRectCount
     */
    public function vkGetPhysicalDevicePresentRectanglesKHR(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\struct\VkSurfaceKHR $surface,
        \iggyvolz\vulkan\util\IntPointer $pRectCount,
    ) {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $surface;
        // VkSurfaceKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $surface = $cValue;
        $phpValue = $pRectCount;
        // uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pRectCount = $cValue;
    }
}
