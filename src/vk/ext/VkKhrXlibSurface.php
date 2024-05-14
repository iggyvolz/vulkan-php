<?php

namespace iggyvolz\vulkan\ext;

class VkKhrXlibSurface
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkInstance $instance
     * @param \iggyvolz\vulkan\struct\VkXlibSurfaceCreateInfoKHR $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateXlibSurfaceKHR(
        \iggyvolz\vulkan\struct\VkInstance $instance,
        \iggyvolz\vulkan\struct\VkXlibSurfaceCreateInfoKHR $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $instance;
        // VkInstance => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $instance = $cValue;
        $phpValue = $pCreateInfo;
        // const VkXlibSurfaceCreateInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param int $queueFamilyIndex
     * @param \iggyvolz\vulkan\util\Pointer $dpy
     * @param int $visualID
     * @return bool
     */
    public function vkGetPhysicalDeviceXlibPresentationSupportKHR(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        int $queueFamilyIndex,
        \iggyvolz\vulkan\util\Pointer $dpy,
        int $visualID,
    ): bool {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $queueFamilyIndex;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $queueFamilyIndex = $cValue;
        $phpValue = $dpy;
        // Display* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $dpy = $cValue;
        $phpValue = $visualID;
        // VisualID => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $visualID = $cValue;
        $cValue = $this->vulkan->call("vkGetPhysicalDeviceXlibPresentationSupportKHR", $physicalDevice, $queueFamilyIndex, $dpy, $visualID);
        // VkBool32 => iggyvolz\vulkan\generator\Transformer\BoolTransformer
        $phpValue = ($cValue === 1);
        return $phpValue;
    }
}
