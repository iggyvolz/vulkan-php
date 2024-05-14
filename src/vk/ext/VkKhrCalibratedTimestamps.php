<?php

namespace iggyvolz\vulkan\ext;

class VkKhrCalibratedTimestamps
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\util\IntPointer $pTimeDomainCount
     * @param \iggyvolz\vulkan\util\Pointer $pTimeDomains
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetPhysicalDeviceCalibrateableTimeDomainsKHR(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\util\IntPointer $pTimeDomainCount,
        \iggyvolz\vulkan\util\Pointer $pTimeDomains,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $pTimeDomainCount;
        // uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pTimeDomainCount = $cValue;
        $phpValue = $pTimeDomains;
        // VkTimeDomainKHR* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pTimeDomains = $cValue;
        $cValue = $this->vulkan->call("vkGetPhysicalDeviceCalibrateableTimeDomainsKHR", $physicalDevice, $pTimeDomainCount, $pTimeDomains);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param int $timestampCount
     * @param \iggyvolz\vulkan\struct\VkCalibratedTimestampInfoKHR $pTimestampInfos
     * @param \iggyvolz\vulkan\util\IntPointer $pTimestamps
     * @param \iggyvolz\vulkan\util\IntPointer $pMaxDeviation
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetCalibratedTimestampsKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        int $timestampCount,
        \iggyvolz\vulkan\struct\VkCalibratedTimestampInfoKHR $pTimestampInfos,
        \iggyvolz\vulkan\util\IntPointer $pTimestamps,
        \iggyvolz\vulkan\util\IntPointer $pMaxDeviation,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $timestampCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $timestampCount = $cValue;
        $phpValue = $pTimestampInfos;
        // const VkCalibratedTimestampInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pTimestampInfos = $cValue;
        $phpValue = $pTimestamps;
        // uint64_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pTimestamps = $cValue;
        $phpValue = $pMaxDeviation;
        // uint64_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pMaxDeviation = $cValue;
        $cValue = $this->vulkan->call("vkGetCalibratedTimestampsKHR", $device, $timestampCount, $pTimestampInfos, $pTimestamps, $pMaxDeviation);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }
}
