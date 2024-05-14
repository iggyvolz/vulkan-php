<?php

namespace iggyvolz\vulkan\ext;

class VkExtDebugReport
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkInstance $instance
     * @param \iggyvolz\vulkan\struct\VkDebugReportCallbackCreateInfoEXT $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateDebugReportCallbackEXT(
        \iggyvolz\vulkan\struct\VkInstance $instance,
        \iggyvolz\vulkan\struct\VkDebugReportCallbackCreateInfoEXT $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $instance;
        // VkInstance => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $instance = $cValue;
        $phpValue = $pCreateInfo;
        // const VkDebugReportCallbackCreateInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkInstance $instance
     * @param \iggyvolz\vulkan\struct\VkDebugReportCallbackEXT $callback
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroyDebugReportCallbackEXT(
        \iggyvolz\vulkan\struct\VkInstance $instance,
        \iggyvolz\vulkan\struct\VkDebugReportCallbackEXT $callback,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $instance;
        // VkInstance => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $instance = $cValue;
        $phpValue = $callback;
        // VkDebugReportCallbackEXT => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $callback = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroyDebugReportCallbackEXT", $instance, $callback, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkInstance $instance
     * @param list<\iggyvolz\vulkan\enum\VkDebugReportFlagBitsEXT> $flags
     * @param \iggyvolz\vulkan\enum\VkDebugReportObjectTypeEXT $objectType
     * @param int $object
     * @param int $location
     * @param int $messageCode
     * @param ?string $pLayerPrefix
     * @param ?string $pMessage
     * @return void
     */
    public function vkDebugReportMessageEXT(
        \iggyvolz\vulkan\struct\VkInstance $instance,
        array $flags,
        \iggyvolz\vulkan\enum\VkDebugReportObjectTypeEXT $objectType,
        int $object,
        int $location,
        int $messageCode,
        ?string $pLayerPrefix,
        ?string $pMessage,
    ): void {
        $phpValue = $instance;
        // VkInstance => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $instance = $cValue;
        $phpValue = $flags;
        // VkDebugReportFlagsEXT => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkDebugReportFlagBitsEXT::toInt(...$phpValue);
        $flags = $cValue;
        $phpValue = $objectType;
        // VkDebugReportObjectTypeEXT => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $objectType = $cValue;
        $phpValue = $object;
        // uint64_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $object = $cValue;
        $phpValue = $location;
        // size_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $location = $cValue;
        $phpValue = $messageCode;
        // int32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $messageCode = $cValue;
        $phpValue = $pLayerPrefix;
        // const char* => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $pLayerPrefix = $cValue;
        $phpValue = $pMessage;
        // const char* => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $pMessage = $cValue;
        $cValue = $this->vulkan->call("vkDebugReportMessageEXT", $instance, $flags, $objectType, $object, $location, $messageCode, $pLayerPrefix, $pMessage);
    }
}
