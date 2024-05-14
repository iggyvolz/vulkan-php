<?php

namespace iggyvolz\vulkan\ext;

class VkNvExternalMemoryRdma
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkMemoryGetRemoteAddressInfoNV $pMemoryGetRemoteAddressInfo
     * @param \iggyvolz\vulkan\util\Pointer $pAddress
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetMemoryRemoteAddressNV(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkMemoryGetRemoteAddressInfoNV $pMemoryGetRemoteAddressInfo,
        \iggyvolz\vulkan\util\Pointer $pAddress,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pMemoryGetRemoteAddressInfo;
        // const VkMemoryGetRemoteAddressInfoNV* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pMemoryGetRemoteAddressInfo = $cValue;
        $phpValue = $pAddress;
        // VkRemoteAddressNV* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pAddress = $cValue;
        $cValue = $this->vulkan->call("vkGetMemoryRemoteAddressNV", $device, $pMemoryGetRemoteAddressInfo, $pAddress);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }
}
