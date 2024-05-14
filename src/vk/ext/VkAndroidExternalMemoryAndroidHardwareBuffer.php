<?php

namespace iggyvolz\vulkan\ext;

class VkAndroidExternalMemoryAndroidHardwareBuffer
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\util\Pointer $buffer
     */
    public function vkGetAndroidHardwareBufferPropertiesANDROID(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\util\Pointer $buffer,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $buffer;
        // const struct AHardwareBuffer* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $buffer = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkMemoryGetAndroidHardwareBufferInfoANDROID $pInfo
     * @param \iggyvolz\vulkan\util\Pointer $pBuffer
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetMemoryAndroidHardwareBufferANDROID(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkMemoryGetAndroidHardwareBufferInfoANDROID $pInfo,
        \iggyvolz\vulkan\util\Pointer $pBuffer,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pInfo;
        // const VkMemoryGetAndroidHardwareBufferInfoANDROID* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
        $phpValue = $pBuffer;
        // struct AHardwareBuffer** => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pBuffer = $cValue;
        $cValue = $this->vulkan->call("vkGetMemoryAndroidHardwareBufferANDROID", $device, $pInfo, $pBuffer);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }
}
