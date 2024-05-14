<?php

namespace iggyvolz\vulkan\ext;

class VkExtDebugUtils
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDebugUtilsObjectNameInfoEXT $pNameInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkSetDebugUtilsObjectNameEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDebugUtilsObjectNameInfoEXT $pNameInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pNameInfo;
        // const VkDebugUtilsObjectNameInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pNameInfo = $cValue;
        $cValue = $this->vulkan->call("vkSetDebugUtilsObjectNameEXT", $device, $pNameInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDebugUtilsObjectTagInfoEXT $pTagInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkSetDebugUtilsObjectTagEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDebugUtilsObjectTagInfoEXT $pTagInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pTagInfo;
        // const VkDebugUtilsObjectTagInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pTagInfo = $cValue;
        $cValue = $this->vulkan->call("vkSetDebugUtilsObjectTagEXT", $device, $pTagInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkQueue $queue
     * @param \iggyvolz\vulkan\struct\VkDebugUtilsLabelEXT $pLabelInfo
     * @return void
     */
    public function vkQueueBeginDebugUtilsLabelEXT(
        \iggyvolz\vulkan\struct\VkQueue $queue,
        \iggyvolz\vulkan\struct\VkDebugUtilsLabelEXT $pLabelInfo,
    ): void {
        $phpValue = $queue;
        // VkQueue => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $queue = $cValue;
        $phpValue = $pLabelInfo;
        // const VkDebugUtilsLabelEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pLabelInfo = $cValue;
        $cValue = $this->vulkan->call("vkQueueBeginDebugUtilsLabelEXT", $queue, $pLabelInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkQueue $queue
     * @return void
     */
    public function vkQueueEndDebugUtilsLabelEXT(\iggyvolz\vulkan\struct\VkQueue $queue): void
    {
        $phpValue = $queue;
        // VkQueue => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $queue = $cValue;
        $cValue = $this->vulkan->call("vkQueueEndDebugUtilsLabelEXT", $queue);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkQueue $queue
     * @param \iggyvolz\vulkan\struct\VkDebugUtilsLabelEXT $pLabelInfo
     * @return void
     */
    public function vkQueueInsertDebugUtilsLabelEXT(
        \iggyvolz\vulkan\struct\VkQueue $queue,
        \iggyvolz\vulkan\struct\VkDebugUtilsLabelEXT $pLabelInfo,
    ): void {
        $phpValue = $queue;
        // VkQueue => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $queue = $cValue;
        $phpValue = $pLabelInfo;
        // const VkDebugUtilsLabelEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pLabelInfo = $cValue;
        $cValue = $this->vulkan->call("vkQueueInsertDebugUtilsLabelEXT", $queue, $pLabelInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkDebugUtilsLabelEXT $pLabelInfo
     * @return void
     */
    public function vkCmdBeginDebugUtilsLabelEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkDebugUtilsLabelEXT $pLabelInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pLabelInfo;
        // const VkDebugUtilsLabelEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pLabelInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdBeginDebugUtilsLabelEXT", $commandBuffer, $pLabelInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @return void
     */
    public function vkCmdEndDebugUtilsLabelEXT(\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer): void
    {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $cValue = $this->vulkan->call("vkCmdEndDebugUtilsLabelEXT", $commandBuffer);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkDebugUtilsLabelEXT $pLabelInfo
     * @return void
     */
    public function vkCmdInsertDebugUtilsLabelEXT(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkDebugUtilsLabelEXT $pLabelInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pLabelInfo;
        // const VkDebugUtilsLabelEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pLabelInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdInsertDebugUtilsLabelEXT", $commandBuffer, $pLabelInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkInstance $instance
     * @param \iggyvolz\vulkan\struct\VkDebugUtilsMessengerCreateInfoEXT $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateDebugUtilsMessengerEXT(
        \iggyvolz\vulkan\struct\VkInstance $instance,
        \iggyvolz\vulkan\struct\VkDebugUtilsMessengerCreateInfoEXT $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $instance;
        // VkInstance => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $instance = $cValue;
        $phpValue = $pCreateInfo;
        // const VkDebugUtilsMessengerCreateInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkInstance $instance
     * @param \iggyvolz\vulkan\struct\VkDebugUtilsMessengerEXT $messenger
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroyDebugUtilsMessengerEXT(
        \iggyvolz\vulkan\struct\VkInstance $instance,
        \iggyvolz\vulkan\struct\VkDebugUtilsMessengerEXT $messenger,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $instance;
        // VkInstance => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $instance = $cValue;
        $phpValue = $messenger;
        // VkDebugUtilsMessengerEXT => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $messenger = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroyDebugUtilsMessengerEXT", $instance, $messenger, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkInstance $instance
     * @param \iggyvolz\vulkan\enum\VkDebugUtilsMessageSeverityFlagBitsEXT $messageSeverity
     * @param list<\iggyvolz\vulkan\enum\VkDebugUtilsMessageTypeFlagBitsEXT> $messageTypes
     * @param \iggyvolz\vulkan\struct\VkDebugUtilsMessengerCallbackDataEXT $pCallbackData
     * @return void
     */
    public function vkSubmitDebugUtilsMessageEXT(
        \iggyvolz\vulkan\struct\VkInstance $instance,
        \iggyvolz\vulkan\enum\VkDebugUtilsMessageSeverityFlagBitsEXT $messageSeverity,
        array $messageTypes,
        \iggyvolz\vulkan\struct\VkDebugUtilsMessengerCallbackDataEXT $pCallbackData,
    ): void {
        $phpValue = $instance;
        // VkInstance => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $instance = $cValue;
        $phpValue = $messageSeverity;
        // VkDebugUtilsMessageSeverityFlagBitsEXT => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $messageSeverity = $cValue;
        $phpValue = $messageTypes;
        // VkDebugUtilsMessageTypeFlagsEXT => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkDebugUtilsMessageTypeFlagBitsEXT::toInt(...$phpValue);
        $messageTypes = $cValue;
        $phpValue = $pCallbackData;
        // const VkDebugUtilsMessengerCallbackDataEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCallbackData = $cValue;
        $cValue = $this->vulkan->call("vkSubmitDebugUtilsMessageEXT", $instance, $messageSeverity, $messageTypes, $pCallbackData);
    }
}
