<?php

namespace iggyvolz\vulkan\ext;

class VkExtDirectfbSurface
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkInstance $instance
     * @param \iggyvolz\vulkan\struct\VkDirectFBSurfaceCreateInfoEXT $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateDirectFBSurfaceEXT(
        \iggyvolz\vulkan\struct\VkInstance $instance,
        \iggyvolz\vulkan\struct\VkDirectFBSurfaceCreateInfoEXT $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $instance;
        // VkInstance => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $instance = $cValue;
        $phpValue = $pCreateInfo;
        // const VkDirectFBSurfaceCreateInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
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
     * @param \iggyvolz\vulkan\util\Pointer $dfb
     * @return bool
     */
    public function vkGetPhysicalDeviceDirectFBPresentationSupportEXT(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        int $queueFamilyIndex,
        \iggyvolz\vulkan\util\Pointer $dfb,
    ): bool {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $queueFamilyIndex;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $queueFamilyIndex = $cValue;
        $phpValue = $dfb;
        // IDirectFB* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $dfb = $cValue;
        $cValue = $this->vulkan->call("vkGetPhysicalDeviceDirectFBPresentationSupportEXT", $physicalDevice, $queueFamilyIndex, $dfb);
        // VkBool32 => iggyvolz\vulkan\generator\Transformer\BoolTransformer
        $phpValue = ($cValue === 1);
        return $phpValue;
    }
}
