<?php

namespace iggyvolz\vulkan\ext;

class VkKhrSurface
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkInstance $instance
     * @param \iggyvolz\vulkan\struct\VkSurfaceKHR $surface
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroySurfaceKHR(
        \iggyvolz\vulkan\struct\VkInstance $instance,
        \iggyvolz\vulkan\struct\VkSurfaceKHR $surface,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $instance;
        // VkInstance => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $instance = $cValue;
        $phpValue = $surface;
        // VkSurfaceKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $surface = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroySurfaceKHR", $instance, $surface, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param int $queueFamilyIndex
     * @param \iggyvolz\vulkan\struct\VkSurfaceKHR $surface
     * @param \iggyvolz\vulkan\util\Pointer $pSupported
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetPhysicalDeviceSurfaceSupportKHR(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        int $queueFamilyIndex,
        \iggyvolz\vulkan\struct\VkSurfaceKHR $surface,
        \iggyvolz\vulkan\util\Pointer $pSupported,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $queueFamilyIndex;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $queueFamilyIndex = $cValue;
        $phpValue = $surface;
        // VkSurfaceKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $surface = $cValue;
        $phpValue = $pSupported;
        // VkBool32* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pSupported = $cValue;
        $cValue = $this->vulkan->call("vkGetPhysicalDeviceSurfaceSupportKHR", $physicalDevice, $queueFamilyIndex, $surface, $pSupported);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\struct\VkSurfaceKHR $surface
     */
    public function vkGetPhysicalDeviceSurfaceCapabilitiesKHR(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\struct\VkSurfaceKHR $surface,
    ) {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $surface;
        // VkSurfaceKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $surface = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\struct\VkSurfaceKHR $surface
     * @param \iggyvolz\vulkan\util\IntPointer $pSurfaceFormatCount
     */
    public function vkGetPhysicalDeviceSurfaceFormatsKHR(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\struct\VkSurfaceKHR $surface,
        \iggyvolz\vulkan\util\IntPointer $pSurfaceFormatCount,
    ) {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $surface;
        // VkSurfaceKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $surface = $cValue;
        $phpValue = $pSurfaceFormatCount;
        // uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pSurfaceFormatCount = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\struct\VkSurfaceKHR $surface
     * @param \iggyvolz\vulkan\util\IntPointer $pPresentModeCount
     * @param \iggyvolz\vulkan\util\Pointer $pPresentModes
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetPhysicalDeviceSurfacePresentModesKHR(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\struct\VkSurfaceKHR $surface,
        \iggyvolz\vulkan\util\IntPointer $pPresentModeCount,
        \iggyvolz\vulkan\util\Pointer $pPresentModes,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $surface;
        // VkSurfaceKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $surface = $cValue;
        $phpValue = $pPresentModeCount;
        // uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pPresentModeCount = $cValue;
        $phpValue = $pPresentModes;
        // VkPresentModeKHR* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pPresentModes = $cValue;
        $cValue = $this->vulkan->call("vkGetPhysicalDeviceSurfacePresentModesKHR", $physicalDevice, $surface, $pPresentModeCount, $pPresentModes);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }
}
