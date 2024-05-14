<?php

namespace iggyvolz\vulkan\ext;

class VkNvxImageViewHandle
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkImageViewHandleInfoNVX $pInfo
     * @return int
     */
    public function vkGetImageViewHandleNVX(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkImageViewHandleInfoNVX $pInfo,
    ): int {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pInfo;
        // const VkImageViewHandleInfoNVX* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
        $cValue = $this->vulkan->call("vkGetImageViewHandleNVX", $device, $pInfo);
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $phpValue = $cValue;
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkImageView $imageView
     */
    public function vkGetImageViewAddressNVX(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkImageView $imageView,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $imageView;
        // VkImageView => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $imageView = $cValue;
    }
}
