<?php

namespace iggyvolz\vulkan\ext;

class VkQnxScreenSurface
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkInstance $instance
     * @param \iggyvolz\vulkan\struct\VkScreenSurfaceCreateInfoQNX $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateScreenSurfaceQNX(
        \iggyvolz\vulkan\struct\VkInstance $instance,
        \iggyvolz\vulkan\struct\VkScreenSurfaceCreateInfoQNX $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $instance;
        // VkInstance => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $instance = $cValue;
        $phpValue = $pCreateInfo;
        // const VkScreenSurfaceCreateInfoQNX* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
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
     * @param \iggyvolz\vulkan\util\Pointer $window
     * @return bool
     */
    public function vkGetPhysicalDeviceScreenPresentationSupportQNX(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        int $queueFamilyIndex,
        \iggyvolz\vulkan\util\Pointer $window,
    ): bool {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $queueFamilyIndex;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $queueFamilyIndex = $cValue;
        $phpValue = $window;
        // struct _screen_window* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $window = $cValue;
        $cValue = $this->vulkan->call("vkGetPhysicalDeviceScreenPresentationSupportQNX", $physicalDevice, $queueFamilyIndex, $window);
        // VkBool32 => iggyvolz\vulkan\generator\Transformer\BoolTransformer
        $phpValue = ($cValue === 1);
        return $phpValue;
    }
}
