<?php

namespace iggyvolz\vulkan\ext;

class VkExtDebugMarker
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDebugMarkerObjectNameInfoEXT $pNameInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkDebugMarkerSetObjectNameEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDebugMarkerObjectNameInfoEXT $pNameInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pNameInfo;
        // const VkDebugMarkerObjectNameInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pNameInfo = $cValue;
        $cValue = $this->vulkan->call("vkDebugMarkerSetObjectNameEXT", $device, $pNameInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDebugMarkerObjectTagInfoEXT $pTagInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkDebugMarkerSetObjectTagEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDebugMarkerObjectTagInfoEXT $pTagInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pTagInfo;
        // const VkDebugMarkerObjectTagInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pTagInfo = $cValue;
        $cValue = $this->vulkan->call("vkDebugMarkerSetObjectTagEXT", $device, $pTagInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkDebugMarkerMarkerInfoEXT $pMarkerInfo
     * @return void
     */
    public function vkCmdDebugMarkerBeginEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkDebugMarkerMarkerInfoEXT $pMarkerInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pMarkerInfo;
        // const VkDebugMarkerMarkerInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pMarkerInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdDebugMarkerBeginEXT", $commandBuffer, $pMarkerInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @return void
     */
    public function vkCmdDebugMarkerEndEXT(\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer): void
    {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $cValue = $this->vulkan->call("vkCmdDebugMarkerEndEXT", $commandBuffer);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkDebugMarkerMarkerInfoEXT $pMarkerInfo
     * @return void
     */
    public function vkCmdDebugMarkerInsertEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkDebugMarkerMarkerInfoEXT $pMarkerInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pMarkerInfo;
        // const VkDebugMarkerMarkerInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pMarkerInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdDebugMarkerInsertEXT", $commandBuffer, $pMarkerInfo);
    }
}
