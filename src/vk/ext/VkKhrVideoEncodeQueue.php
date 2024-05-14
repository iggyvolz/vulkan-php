<?php

namespace iggyvolz\vulkan\ext;

class VkKhrVideoEncodeQueue
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\struct\VkPhysicalDeviceVideoEncodeQualityLevelInfoKHR $pQualityLevelInfo
     */
    public function vkGetPhysicalDeviceVideoEncodeQualityLevelPropertiesKHR(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\struct\VkPhysicalDeviceVideoEncodeQualityLevelInfoKHR $pQualityLevelInfo,
    ) {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $pQualityLevelInfo;
        // const VkPhysicalDeviceVideoEncodeQualityLevelInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pQualityLevelInfo = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkVideoEncodeSessionParametersGetInfoKHR $pVideoSessionParametersInfo
     * @param \iggyvolz\vulkan\util\IntPointer $pDataSize
     * @param \iggyvolz\vulkan\util\Pointer $pData
     */
    public function vkGetEncodedVideoSessionParametersKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkVideoEncodeSessionParametersGetInfoKHR $pVideoSessionParametersInfo,
        \iggyvolz\vulkan\util\IntPointer $pDataSize,
        \iggyvolz\vulkan\util\Pointer $pData,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pVideoSessionParametersInfo;
        // const VkVideoEncodeSessionParametersGetInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pVideoSessionParametersInfo = $cValue;
        $phpValue = $pDataSize;
        // size_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pDataSize = $cValue;
        $phpValue = $pData;
        // void* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pData = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkVideoEncodeInfoKHR $pEncodeInfo
     * @return void
     */
    public function vkCmdEncodeVideoKHR(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkVideoEncodeInfoKHR $pEncodeInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pEncodeInfo;
        // const VkVideoEncodeInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pEncodeInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdEncodeVideoKHR", $commandBuffer, $pEncodeInfo);
    }
}
