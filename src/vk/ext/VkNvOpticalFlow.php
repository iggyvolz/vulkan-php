<?php

namespace iggyvolz\vulkan\ext;

class VkNvOpticalFlow
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\struct\VkOpticalFlowImageFormatInfoNV $pOpticalFlowImageFormatInfo
     * @param \iggyvolz\vulkan\util\IntPointer $pFormatCount
     */
    public function vkGetPhysicalDeviceOpticalFlowImageFormatsNV(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\struct\VkOpticalFlowImageFormatInfoNV $pOpticalFlowImageFormatInfo,
        \iggyvolz\vulkan\util\IntPointer $pFormatCount,
    ) {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $pOpticalFlowImageFormatInfo;
        // const VkOpticalFlowImageFormatInfoNV* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pOpticalFlowImageFormatInfo = $cValue;
        $phpValue = $pFormatCount;
        // uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pFormatCount = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkOpticalFlowSessionCreateInfoNV $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateOpticalFlowSessionNV(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkOpticalFlowSessionCreateInfoNV $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCreateInfo;
        // const VkOpticalFlowSessionCreateInfoNV* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkOpticalFlowSessionNV $session
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroyOpticalFlowSessionNV(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkOpticalFlowSessionNV $session,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $session;
        // VkOpticalFlowSessionNV => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $session = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroyOpticalFlowSessionNV", $device, $session, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkOpticalFlowSessionNV $session
     * @param \iggyvolz\vulkan\enum\VkOpticalFlowSessionBindingPointNV $bindingPoint
     * @param \iggyvolz\vulkan\struct\VkImageView $view
     * @param \iggyvolz\vulkan\enum\VkImageLayout $layout
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkBindOpticalFlowSessionImageNV(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkOpticalFlowSessionNV $session,
        \iggyvolz\vulkan\enum\VkOpticalFlowSessionBindingPointNV $bindingPoint,
        \iggyvolz\vulkan\struct\VkImageView $view,
        \iggyvolz\vulkan\enum\VkImageLayout $layout,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $session;
        // VkOpticalFlowSessionNV => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $session = $cValue;
        $phpValue = $bindingPoint;
        // VkOpticalFlowSessionBindingPointNV => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $bindingPoint = $cValue;
        $phpValue = $view;
        // VkImageView => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $view = $cValue;
        $phpValue = $layout;
        // VkImageLayout => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $layout = $cValue;
        $cValue = $this->vulkan->call("vkBindOpticalFlowSessionImageNV", $device, $session, $bindingPoint, $view, $layout);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkOpticalFlowSessionNV $session
     * @param \iggyvolz\vulkan\struct\VkOpticalFlowExecuteInfoNV $pExecuteInfo
     * @return void
     */
    public function vkCmdOpticalFlowExecuteNV(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkOpticalFlowSessionNV $session,
        \iggyvolz\vulkan\struct\VkOpticalFlowExecuteInfoNV $pExecuteInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $session;
        // VkOpticalFlowSessionNV => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $session = $cValue;
        $phpValue = $pExecuteInfo;
        // const VkOpticalFlowExecuteInfoNV* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pExecuteInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdOpticalFlowExecuteNV", $commandBuffer, $session, $pExecuteInfo);
    }
}
