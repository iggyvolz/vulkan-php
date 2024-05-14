<?php

namespace iggyvolz\vulkan\ext;

class VkExtFullScreenExclusive
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\struct\VkPhysicalDeviceSurfaceInfo2KHR $pSurfaceInfo
     * @param \iggyvolz\vulkan\util\IntPointer $pPresentModeCount
     * @param \iggyvolz\vulkan\util\Pointer $pPresentModes
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetPhysicalDeviceSurfacePresentModes2EXT(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\struct\VkPhysicalDeviceSurfaceInfo2KHR $pSurfaceInfo,
        \iggyvolz\vulkan\util\IntPointer $pPresentModeCount,
        \iggyvolz\vulkan\util\Pointer $pPresentModes,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $pSurfaceInfo;
        // const VkPhysicalDeviceSurfaceInfo2KHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pSurfaceInfo = $cValue;
        $phpValue = $pPresentModeCount;
        // uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pPresentModeCount = $cValue;
        $phpValue = $pPresentModes;
        // VkPresentModeKHR* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pPresentModes = $cValue;
        $cValue = $this->vulkan->call("vkGetPhysicalDeviceSurfacePresentModes2EXT", $physicalDevice, $pSurfaceInfo, $pPresentModeCount, $pPresentModes);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkPhysicalDeviceSurfaceInfo2KHR $pSurfaceInfo
     * @param \iggyvolz\vulkan\util\Pointer $pModes
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetDeviceGroupSurfacePresentModes2EXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkPhysicalDeviceSurfaceInfo2KHR $pSurfaceInfo,
        \iggyvolz\vulkan\util\Pointer $pModes,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pSurfaceInfo;
        // const VkPhysicalDeviceSurfaceInfo2KHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pSurfaceInfo = $cValue;
        $phpValue = $pModes;
        // VkDeviceGroupPresentModeFlagsKHR* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pModes = $cValue;
        $cValue = $this->vulkan->call("vkGetDeviceGroupSurfacePresentModes2EXT", $device, $pSurfaceInfo, $pModes);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkAcquireFullScreenExclusiveModeEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $swapchain;
        // VkSwapchainKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $swapchain = $cValue;
        $cValue = $this->vulkan->call("vkAcquireFullScreenExclusiveModeEXT", $device, $swapchain);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkReleaseFullScreenExclusiveModeEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $swapchain;
        // VkSwapchainKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $swapchain = $cValue;
        $cValue = $this->vulkan->call("vkReleaseFullScreenExclusiveModeEXT", $device, $swapchain);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }
}
