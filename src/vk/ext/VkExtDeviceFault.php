<?php

namespace iggyvolz\vulkan\ext;

class VkExtDeviceFault
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param mixed $pFaultCounts
     * @param mixed $pFaultInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetDeviceFaultInfoEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        mixed $pFaultCounts,
        mixed $pFaultInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pFaultCounts;
        // VkDeviceFaultCountsEXT* => iggyvolz\vulkan\generator\Transformer\NonConstTransformer
        throw new \LogicException("Dummy transformer - VkDeviceFaultCountsEXT*!");
        $pFaultCounts = $cValue;
        $phpValue = $pFaultInfo;
        // VkDeviceFaultInfoEXT* => iggyvolz\vulkan\generator\Transformer\NonConstTransformer
        throw new \LogicException("Dummy transformer - VkDeviceFaultInfoEXT*!");
        $pFaultInfo = $cValue;
        $cValue = $this->vulkan->call("vkGetDeviceFaultInfoEXT", $device, $pFaultCounts, $pFaultInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }
}
