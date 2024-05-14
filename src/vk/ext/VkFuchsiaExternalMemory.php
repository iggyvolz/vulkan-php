<?php

namespace iggyvolz\vulkan\ext;

class VkFuchsiaExternalMemory
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkMemoryGetZirconHandleInfoFUCHSIA $pGetZirconHandleInfo
     * @param \iggyvolz\vulkan\util\Pointer $pZirconHandle
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetMemoryZirconHandleFUCHSIA(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkMemoryGetZirconHandleInfoFUCHSIA $pGetZirconHandleInfo,
        \iggyvolz\vulkan\util\Pointer $pZirconHandle,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pGetZirconHandleInfo;
        // const VkMemoryGetZirconHandleInfoFUCHSIA* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pGetZirconHandleInfo = $cValue;
        $phpValue = $pZirconHandle;
        // zx_handle_t* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pZirconHandle = $cValue;
        $cValue = $this->vulkan->call("vkGetMemoryZirconHandleFUCHSIA", $device, $pGetZirconHandleInfo, $pZirconHandle);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits $handleType
     * @param int $zirconHandle
     */
    public function vkGetMemoryZirconHandlePropertiesFUCHSIA(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits $handleType,
        int $zirconHandle,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $handleType;
        // VkExternalMemoryHandleTypeFlagBits => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $handleType = $cValue;
        $phpValue = $zirconHandle;
        // zx_handle_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $zirconHandle = $cValue;
    }
}
