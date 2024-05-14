<?php

namespace iggyvolz\vulkan\ext;

class VkNvExternalMemoryCapabilities
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\enum\VkFormat $format
     * @param \iggyvolz\vulkan\enum\VkImageType $type
     * @param \iggyvolz\vulkan\enum\VkImageTiling $tiling
     * @param list<\iggyvolz\vulkan\enum\VkImageUsageFlagBits> $usage
     * @param list<\iggyvolz\vulkan\enum\VkImageCreateFlagBits> $flags
     * @param list<\iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBitsNV> $externalHandleType
     */
    public function vkGetPhysicalDeviceExternalImageFormatPropertiesNV(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\enum\VkFormat $format,
        \iggyvolz\vulkan\enum\VkImageType $type,
        \iggyvolz\vulkan\enum\VkImageTiling $tiling,
        array $usage,
        array $flags,
        array $externalHandleType,
    ) {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $format;
        // VkFormat => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $format = $cValue;
        $phpValue = $type;
        // VkImageType => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $type = $cValue;
        $phpValue = $tiling;
        // VkImageTiling => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $tiling = $cValue;
        $phpValue = $usage;
        // VkImageUsageFlags => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkImageUsageFlagBits::toInt(...$phpValue);
        $usage = $cValue;
        $phpValue = $flags;
        // VkImageCreateFlags => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkImageCreateFlagBits::toInt(...$phpValue);
        $flags = $cValue;
        $phpValue = $externalHandleType;
        // VkExternalMemoryHandleTypeFlagsNV => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBitsNV::toInt(...$phpValue);
        $externalHandleType = $cValue;
    }
}
