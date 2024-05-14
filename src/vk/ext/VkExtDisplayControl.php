<?php

namespace iggyvolz\vulkan\ext;

class VkExtDisplayControl
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDisplayKHR $display
     * @param \iggyvolz\vulkan\struct\VkDisplayPowerInfoEXT $pDisplayPowerInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkDisplayPowerControlEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDisplayKHR $display,
        \iggyvolz\vulkan\struct\VkDisplayPowerInfoEXT $pDisplayPowerInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $display;
        // VkDisplayKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $display = $cValue;
        $phpValue = $pDisplayPowerInfo;
        // const VkDisplayPowerInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pDisplayPowerInfo = $cValue;
        $cValue = $this->vulkan->call("vkDisplayPowerControlEXT", $device, $display, $pDisplayPowerInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDeviceEventInfoEXT $pDeviceEventInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkRegisterDeviceEventEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDeviceEventInfoEXT $pDeviceEventInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pDeviceEventInfo;
        // const VkDeviceEventInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pDeviceEventInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDisplayKHR $display
     * @param \iggyvolz\vulkan\struct\VkDisplayEventInfoEXT $pDisplayEventInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkRegisterDisplayEventEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDisplayKHR $display,
        \iggyvolz\vulkan\struct\VkDisplayEventInfoEXT $pDisplayEventInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $display;
        // VkDisplayKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $display = $cValue;
        $phpValue = $pDisplayEventInfo;
        // const VkDisplayEventInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pDisplayEventInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain
     * @param \iggyvolz\vulkan\enum\VkSurfaceCounterFlagBitsEXT $counter
     * @param \iggyvolz\vulkan\util\IntPointer $pCounterValue
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetSwapchainCounterEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain,
        \iggyvolz\vulkan\enum\VkSurfaceCounterFlagBitsEXT $counter,
        \iggyvolz\vulkan\util\IntPointer $pCounterValue,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $swapchain;
        // VkSwapchainKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $swapchain = $cValue;
        $phpValue = $counter;
        // VkSurfaceCounterFlagBitsEXT => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $counter = $cValue;
        $phpValue = $pCounterValue;
        // uint64_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pCounterValue = $cValue;
        $cValue = $this->vulkan->call("vkGetSwapchainCounterEXT", $device, $swapchain, $counter, $pCounterValue);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }
}
