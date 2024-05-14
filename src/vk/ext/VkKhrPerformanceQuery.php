<?php

namespace iggyvolz\vulkan\ext;

class VkKhrPerformanceQuery
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param int $queueFamilyIndex
     */
    public function vkEnumeratePhysicalDeviceQueueFamilyPerformanceQueryCountersKHR(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        int $queueFamilyIndex,
    ) {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $queueFamilyIndex;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $queueFamilyIndex = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\struct\VkQueryPoolPerformanceCreateInfoKHR $pPerformanceQueryCreateInfo
     * @param \iggyvolz\vulkan\util\IntPointer $pNumPasses
     * @return void
     */
    public function vkGetPhysicalDeviceQueueFamilyPerformanceQueryPassesKHR(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\struct\VkQueryPoolPerformanceCreateInfoKHR $pPerformanceQueryCreateInfo,
        \iggyvolz\vulkan\util\IntPointer $pNumPasses,
    ): void {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $pPerformanceQueryCreateInfo;
        // const VkQueryPoolPerformanceCreateInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pPerformanceQueryCreateInfo = $cValue;
        $phpValue = $pNumPasses;
        // uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pNumPasses = $cValue;
        $cValue = $this->vulkan->call("vkGetPhysicalDeviceQueueFamilyPerformanceQueryPassesKHR", $physicalDevice, $pPerformanceQueryCreateInfo, $pNumPasses);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkAcquireProfilingLockInfoKHR $pInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkAcquireProfilingLockKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkAcquireProfilingLockInfoKHR $pInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pInfo;
        // const VkAcquireProfilingLockInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
        $cValue = $this->vulkan->call("vkAcquireProfilingLockKHR", $device, $pInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @return void
     */
    public function vkReleaseProfilingLockKHR(\iggyvolz\vulkan\struct\VkDevice $device): void
    {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $cValue = $this->vulkan->call("vkReleaseProfilingLockKHR", $device);
    }
}
