<?php

namespace iggyvolz\vulkan\ext;

class VkExtSampleLocations
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkSampleLocationsInfoEXT $pSampleLocationsInfo
     * @return void
     */
    public function vkCmdSetSampleLocationsEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkSampleLocationsInfoEXT $pSampleLocationsInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pSampleLocationsInfo;
        // const VkSampleLocationsInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pSampleLocationsInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetSampleLocationsEXT", $commandBuffer, $pSampleLocationsInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\enum\VkSampleCountFlagBits $samples
     */
    public function vkGetPhysicalDeviceMultisamplePropertiesEXT(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\enum\VkSampleCountFlagBits $samples,
    ) {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $samples;
        // VkSampleCountFlagBits => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $samples = $cValue;
    }
}
