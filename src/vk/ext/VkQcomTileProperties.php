<?php

namespace iggyvolz\vulkan\ext;

class VkQcomTileProperties
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkFramebuffer $framebuffer
     * @param \iggyvolz\vulkan\util\IntPointer $pPropertiesCount
     */
    public function vkGetFramebufferTilePropertiesQCOM(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkFramebuffer $framebuffer,
        \iggyvolz\vulkan\util\IntPointer $pPropertiesCount,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $framebuffer;
        // VkFramebuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $framebuffer = $cValue;
        $phpValue = $pPropertiesCount;
        // uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pPropertiesCount = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkRenderingInfo $pRenderingInfo
     */
    public function vkGetDynamicRenderingTilePropertiesQCOM(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkRenderingInfo $pRenderingInfo,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pRenderingInfo;
        // const VkRenderingInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pRenderingInfo = $cValue;
    }
}
