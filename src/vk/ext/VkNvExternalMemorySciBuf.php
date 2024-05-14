<?php

namespace iggyvolz\vulkan\ext;

class VkNvExternalMemorySciBuf
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkMemoryGetSciBufInfoNV $pGetSciBufInfo
     * @param \iggyvolz\vulkan\util\Pointer $pHandle
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetMemorySciBufNV(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkMemoryGetSciBufInfoNV $pGetSciBufInfo,
        \iggyvolz\vulkan\util\Pointer $pHandle,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pGetSciBufInfo;
        // const VkMemoryGetSciBufInfoNV* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pGetSciBufInfo = $cValue;
        $phpValue = $pHandle;
        // NvSciBufObj* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pHandle = $cValue;
        $cValue = $this->vulkan->call("vkGetMemorySciBufNV", $device, $pGetSciBufInfo, $pHandle);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits $handleType
     * @param mixed $handle
     */
    public function vkGetPhysicalDeviceExternalMemorySciBufPropertiesNV(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits $handleType,
        mixed $handle,
    ) {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $handleType;
        // VkExternalMemoryHandleTypeFlagBits => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $handleType = $cValue;
        $phpValue = $handle;
        // NvSciBufObj => iggyvolz\vulkan\generator\Transformer\DummyTransformer
        throw new \LogicException("Dummy transformer - NvSciBufObj!");
        $handle = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param mixed $pAttributes
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetPhysicalDeviceSciBufAttributesNV(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        mixed $pAttributes,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $pAttributes;
        // NvSciBufAttrList => iggyvolz\vulkan\generator\Transformer\DummyTransformer
        throw new \LogicException("Dummy transformer - NvSciBufAttrList!");
        $pAttributes = $cValue;
        $cValue = $this->vulkan->call("vkGetPhysicalDeviceSciBufAttributesNV", $physicalDevice, $pAttributes);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }
}
