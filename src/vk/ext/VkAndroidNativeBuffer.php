<?php

namespace iggyvolz\vulkan\ext;

class VkAndroidNativeBuffer
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\enum\VkFormat $format
     * @param list<\iggyvolz\vulkan\enum\VkImageUsageFlagBits> $imageUsage
     * @param \iggyvolz\vulkan\util\IntPointer $grallocUsage
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetSwapchainGrallocUsageANDROID(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\enum\VkFormat $format,
        array $imageUsage,
        \iggyvolz\vulkan\util\IntPointer $grallocUsage,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $format;
        // VkFormat => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $format = $cValue;
        $phpValue = $imageUsage;
        // VkImageUsageFlags => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkImageUsageFlagBits::toInt(...$phpValue);
        $imageUsage = $cValue;
        $phpValue = $grallocUsage;
        // int* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $grallocUsage = $cValue;
        $cValue = $this->vulkan->call("vkGetSwapchainGrallocUsageANDROID", $device, $format, $imageUsage, $grallocUsage);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\enum\VkFormat $format
     * @param list<\iggyvolz\vulkan\enum\VkImageUsageFlagBits> $imageUsage
     * @param list<\iggyvolz\vulkan\enum\VkSwapchainImageUsageFlagBitsANDROID> $swapchainImageUsage
     * @param \iggyvolz\vulkan\util\IntPointer $grallocConsumerUsage
     * @param \iggyvolz\vulkan\util\IntPointer $grallocProducerUsage
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetSwapchainGrallocUsage2ANDROID(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\enum\VkFormat $format,
        array $imageUsage,
        array $swapchainImageUsage,
        \iggyvolz\vulkan\util\IntPointer $grallocConsumerUsage,
        \iggyvolz\vulkan\util\IntPointer $grallocProducerUsage,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $format;
        // VkFormat => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $format = $cValue;
        $phpValue = $imageUsage;
        // VkImageUsageFlags => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkImageUsageFlagBits::toInt(...$phpValue);
        $imageUsage = $cValue;
        $phpValue = $swapchainImageUsage;
        // VkSwapchainImageUsageFlagsANDROID => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkSwapchainImageUsageFlagBitsANDROID::toInt(...$phpValue);
        $swapchainImageUsage = $cValue;
        $phpValue = $grallocConsumerUsage;
        // uint64_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $grallocConsumerUsage = $cValue;
        $phpValue = $grallocProducerUsage;
        // uint64_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $grallocProducerUsage = $cValue;
        $cValue = $this->vulkan->call("vkGetSwapchainGrallocUsage2ANDROID", $device, $format, $imageUsage, $swapchainImageUsage, $grallocConsumerUsage, $grallocProducerUsage);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkImage $image
     * @param int $nativeFenceFd
     * @param \iggyvolz\vulkan\struct\VkSemaphore $semaphore
     * @param \iggyvolz\vulkan\struct\VkFence $fence
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkAcquireImageANDROID(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkImage $image,
        int $nativeFenceFd,
        \iggyvolz\vulkan\struct\VkSemaphore $semaphore,
        \iggyvolz\vulkan\struct\VkFence $fence,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $image;
        // VkImage => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $image = $cValue;
        $phpValue = $nativeFenceFd;
        // int => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $nativeFenceFd = $cValue;
        $phpValue = $semaphore;
        // VkSemaphore => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $semaphore = $cValue;
        $phpValue = $fence;
        // VkFence => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $fence = $cValue;
        $cValue = $this->vulkan->call("vkAcquireImageANDROID", $device, $image, $nativeFenceFd, $semaphore, $fence);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkQueue $queue
     * @param int $waitSemaphoreCount
     * @param \iggyvolz\vulkan\struct\VkSemaphore $pWaitSemaphores
     * @param \iggyvolz\vulkan\struct\VkImage $image
     * @param \iggyvolz\vulkan\util\IntPointer $pNativeFenceFd
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkQueueSignalReleaseImageANDROID(
        \iggyvolz\vulkan\struct\VkQueue $queue,
        int $waitSemaphoreCount,
        \iggyvolz\vulkan\struct\VkSemaphore $pWaitSemaphores,
        \iggyvolz\vulkan\struct\VkImage $image,
        \iggyvolz\vulkan\util\IntPointer $pNativeFenceFd,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $queue;
        // VkQueue => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $queue = $cValue;
        $phpValue = $waitSemaphoreCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $waitSemaphoreCount = $cValue;
        $phpValue = $pWaitSemaphores;
        // const VkSemaphore* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pWaitSemaphores = $cValue;
        $phpValue = $image;
        // VkImage => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $image = $cValue;
        $phpValue = $pNativeFenceFd;
        // int* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pNativeFenceFd = $cValue;
        $cValue = $this->vulkan->call("vkQueueSignalReleaseImageANDROID", $queue, $waitSemaphoreCount, $pWaitSemaphores, $image, $pNativeFenceFd);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }
}
