<?php

namespace iggyvolz\vulkan\ext;

class VkExtSwapchainMaintenance1
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkReleaseSwapchainImagesInfoEXT $pReleaseInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkReleaseSwapchainImagesEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkReleaseSwapchainImagesInfoEXT $pReleaseInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pReleaseInfo;
        // const VkReleaseSwapchainImagesInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pReleaseInfo = $cValue;
        $cValue = $this->vulkan->call("vkReleaseSwapchainImagesEXT", $device, $pReleaseInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }
}
