<?php

namespace iggyvolz\vulkan\ext;

class VkExtHdrMetadata
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param int $swapchainCount
     * @param \iggyvolz\vulkan\struct\VkSwapchainKHR $pSwapchains
     * @param \iggyvolz\vulkan\struct\VkHdrMetadataEXT $pMetadata
     * @return void
     */
    public function vkSetHdrMetadataEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        int $swapchainCount,
        \iggyvolz\vulkan\struct\VkSwapchainKHR $pSwapchains,
        \iggyvolz\vulkan\struct\VkHdrMetadataEXT $pMetadata,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $swapchainCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $swapchainCount = $cValue;
        $phpValue = $pSwapchains;
        // const VkSwapchainKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pSwapchains = $cValue;
        $phpValue = $pMetadata;
        // const VkHdrMetadataEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pMetadata = $cValue;
        $cValue = $this->vulkan->call("vkSetHdrMetadataEXT", $device, $swapchainCount, $pSwapchains, $pMetadata);
    }
}
