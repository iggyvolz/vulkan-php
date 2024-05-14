<?php

namespace iggyvolz\vulkan\ext;

class VkKhrWin32Surface
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkInstance $instance
     * @param \iggyvolz\vulkan\struct\VkWin32SurfaceCreateInfoKHR $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateWin32SurfaceKHR(
        \iggyvolz\vulkan\struct\VkInstance $instance,
        \iggyvolz\vulkan\struct\VkWin32SurfaceCreateInfoKHR $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $instance;
        // VkInstance => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $instance = $cValue;
        $phpValue = $pCreateInfo;
        // const VkWin32SurfaceCreateInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
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
     * @return bool
     */
    public function vkGetPhysicalDeviceWin32PresentationSupportKHR(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        int $queueFamilyIndex,
    ): bool {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $queueFamilyIndex;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $queueFamilyIndex = $cValue;
        $cValue = $this->vulkan->call("vkGetPhysicalDeviceWin32PresentationSupportKHR", $physicalDevice, $queueFamilyIndex);
        // VkBool32 => iggyvolz\vulkan\generator\Transformer\BoolTransformer
        $phpValue = ($cValue === 1);
        return $phpValue;
    }
}
