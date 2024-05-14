<?php

namespace iggyvolz\vulkan\ext;

class VkNvLowLatency2
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain
     * @param \iggyvolz\vulkan\struct\VkLatencySleepModeInfoNV $pSleepModeInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkSetLatencySleepModeNV(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain,
        \iggyvolz\vulkan\struct\VkLatencySleepModeInfoNV $pSleepModeInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $swapchain;
        // VkSwapchainKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $swapchain = $cValue;
        $phpValue = $pSleepModeInfo;
        // const VkLatencySleepModeInfoNV* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pSleepModeInfo = $cValue;
        $cValue = $this->vulkan->call("vkSetLatencySleepModeNV", $device, $swapchain, $pSleepModeInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain
     * @param \iggyvolz\vulkan\struct\VkLatencySleepInfoNV $pSleepInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkLatencySleepNV(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain,
        \iggyvolz\vulkan\struct\VkLatencySleepInfoNV $pSleepInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $swapchain;
        // VkSwapchainKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $swapchain = $cValue;
        $phpValue = $pSleepInfo;
        // const VkLatencySleepInfoNV* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pSleepInfo = $cValue;
        $cValue = $this->vulkan->call("vkLatencySleepNV", $device, $swapchain, $pSleepInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain
     * @param \iggyvolz\vulkan\struct\VkSetLatencyMarkerInfoNV $pLatencyMarkerInfo
     * @return void
     */
    public function vkSetLatencyMarkerNV(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain,
        \iggyvolz\vulkan\struct\VkSetLatencyMarkerInfoNV $pLatencyMarkerInfo,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $swapchain;
        // VkSwapchainKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $swapchain = $cValue;
        $phpValue = $pLatencyMarkerInfo;
        // const VkSetLatencyMarkerInfoNV* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pLatencyMarkerInfo = $cValue;
        $cValue = $this->vulkan->call("vkSetLatencyMarkerNV", $device, $swapchain, $pLatencyMarkerInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain
     */
    public function vkGetLatencyTimingsNV(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $swapchain;
        // VkSwapchainKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $swapchain = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkQueue $queue
     * @param \iggyvolz\vulkan\struct\VkOutOfBandQueueTypeInfoNV $pQueueTypeInfo
     * @return void
     */
    public function vkQueueNotifyOutOfBandNV(
        \iggyvolz\vulkan\struct\VkQueue $queue,
        \iggyvolz\vulkan\struct\VkOutOfBandQueueTypeInfoNV $pQueueTypeInfo,
    ): void {
        $phpValue = $queue;
        // VkQueue => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $queue = $cValue;
        $phpValue = $pQueueTypeInfo;
        // const VkOutOfBandQueueTypeInfoNV* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pQueueTypeInfo = $cValue;
        $cValue = $this->vulkan->call("vkQueueNotifyOutOfBandNV", $queue, $pQueueTypeInfo);
    }
}
