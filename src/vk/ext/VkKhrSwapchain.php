<?php

namespace iggyvolz\vulkan\ext;

class VkKhrSwapchain
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkSwapchainCreateInfoKHR $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateSwapchainKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkSwapchainCreateInfoKHR $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCreateInfo;
        // const VkSwapchainCreateInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroySwapchainKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $swapchain;
        // VkSwapchainKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $swapchain = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroySwapchainKHR", $device, $swapchain, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain
     * @param \iggyvolz\vulkan\util\IntPointer $pSwapchainImageCount
     */
    public function vkGetSwapchainImagesKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain,
        \iggyvolz\vulkan\util\IntPointer $pSwapchainImageCount,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $swapchain;
        // VkSwapchainKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $swapchain = $cValue;
        $phpValue = $pSwapchainImageCount;
        // uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pSwapchainImageCount = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain
     * @param int $timeout
     * @param \iggyvolz\vulkan\struct\VkSemaphore $semaphore
     * @param \iggyvolz\vulkan\struct\VkFence $fence
     * @param \iggyvolz\vulkan\util\IntPointer $pImageIndex
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkAcquireNextImageKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain,
        int $timeout,
        \iggyvolz\vulkan\struct\VkSemaphore $semaphore,
        \iggyvolz\vulkan\struct\VkFence $fence,
        \iggyvolz\vulkan\util\IntPointer $pImageIndex,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $swapchain;
        // VkSwapchainKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $swapchain = $cValue;
        $phpValue = $timeout;
        // uint64_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $timeout = $cValue;
        $phpValue = $semaphore;
        // VkSemaphore => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $semaphore = $cValue;
        $phpValue = $fence;
        // VkFence => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $fence = $cValue;
        $phpValue = $pImageIndex;
        // uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pImageIndex = $cValue;
        $cValue = $this->vulkan->call("vkAcquireNextImageKHR", $device, $swapchain, $timeout, $semaphore, $fence, $pImageIndex);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkQueue $queue
     * @param \iggyvolz\vulkan\struct\VkPresentInfoKHR $pPresentInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkQueuePresentKHR(
        \iggyvolz\vulkan\struct\VkQueue $queue,
        \iggyvolz\vulkan\struct\VkPresentInfoKHR $pPresentInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $queue;
        // VkQueue => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $queue = $cValue;
        $phpValue = $pPresentInfo;
        // const VkPresentInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pPresentInfo = $cValue;
        $cValue = $this->vulkan->call("vkQueuePresentKHR", $queue, $pPresentInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     */
    public function vkGetDeviceGroupPresentCapabilitiesKHR(\iggyvolz\vulkan\struct\VkDevice $device)
    {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkSurfaceKHR $surface
     * @param \iggyvolz\vulkan\util\Pointer $pModes
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetDeviceGroupSurfacePresentModesKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkSurfaceKHR $surface,
        \iggyvolz\vulkan\util\Pointer $pModes,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $surface;
        // VkSurfaceKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $surface = $cValue;
        $phpValue = $pModes;
        // VkDeviceGroupPresentModeFlagsKHR* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pModes = $cValue;
        $cValue = $this->vulkan->call("vkGetDeviceGroupSurfacePresentModesKHR", $device, $surface, $pModes);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkAcquireNextImageInfoKHR $pAcquireInfo
     * @param \iggyvolz\vulkan\util\IntPointer $pImageIndex
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkAcquireNextImage2KHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkAcquireNextImageInfoKHR $pAcquireInfo,
        \iggyvolz\vulkan\util\IntPointer $pImageIndex,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pAcquireInfo;
        // const VkAcquireNextImageInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAcquireInfo = $cValue;
        $phpValue = $pImageIndex;
        // uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pImageIndex = $cValue;
        $cValue = $this->vulkan->call("vkAcquireNextImage2KHR", $device, $pAcquireInfo, $pImageIndex);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\struct\VkSurfaceKHR $surface
     * @param \iggyvolz\vulkan\util\IntPointer $pRectCount
     */
    public function vkGetPhysicalDevicePresentRectanglesKHR(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\struct\VkSurfaceKHR $surface,
        \iggyvolz\vulkan\util\IntPointer $pRectCount,
    ) {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $surface;
        // VkSurfaceKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $surface = $cValue;
        $phpValue = $pRectCount;
        // uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pRectCount = $cValue;
    }
}
