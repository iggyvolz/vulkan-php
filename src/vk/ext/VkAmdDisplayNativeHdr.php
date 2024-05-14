<?php

namespace iggyvolz\vulkan\ext;

class VkAmdDisplayNativeHdr
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkSwapchainKHR $swapChain
     * @param bool $localDimmingEnable
     * @return void
     */
    public function vkSetLocalDimmingAMD(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkSwapchainKHR $swapChain,
        bool $localDimmingEnable,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $swapChain;
        // VkSwapchainKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $swapChain = $cValue;
        $phpValue = $localDimmingEnable;
        // VkBool32 => iggyvolz\vulkan\generator\Transformer\BoolTransformer
        $cValue = $phpValue ? 1 : 0;
        $localDimmingEnable = $cValue;
        $cValue = $this->vulkan->call("vkSetLocalDimmingAMD", $device, $swapChain, $localDimmingEnable);
    }
}
