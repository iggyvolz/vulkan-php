<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkQueue implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return ['_type' => static::class];
    }

    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \iggyvolz\vulkan\Vulkan $vulkan,
    ) {
    }

    /**
     * @param int $submitCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSubmitInfo> $pSubmits const VkSubmitInfo*
     * @param \iggyvolz\vulkan\struct\VkFence $fence VkFence
     * returns VkResult
     */
    public function queueSubmit(
        int $submitCount,
        \iggyvolz\vulkan\util\ObjectPointer $pSubmits,
        VkFence $fence,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $submitCount;
        $cValue = $phpValue;
        $submitCountC = $cValue;
        $phpValue = $pSubmits;
        $cValue = $phpValue->cdata;
        $pSubmitsC = $cValue;
        $phpValue = $fence;
        $cValue = $phpValue->cdata;
        $fenceC = $cValue;
        $cValue = $this->exec('vkQueueSubmit',
            $submitCountC,
            $pSubmitsC,
            $fenceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * returns VkResult
     */
    public function queueWaitIdle(): \iggyvolz\vulkan\enum\VkResult
    {
        $cValue = $this->exec('vkQueueWaitIdle',
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param int $bindInfoCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBindSparseInfo> $pBindInfo const VkBindSparseInfo*
     * @param \iggyvolz\vulkan\struct\VkFence $fence VkFence
     * returns VkResult
     */
    public function queueBindSparse(
        int $bindInfoCount,
        \iggyvolz\vulkan\util\ObjectPointer $pBindInfo,
        VkFence $fence,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $bindInfoCount;
        $cValue = $phpValue;
        $bindInfoCountC = $cValue;
        $phpValue = $pBindInfo;
        $cValue = $phpValue->cdata;
        $pBindInfoC = $cValue;
        $phpValue = $fence;
        $cValue = $phpValue->cdata;
        $fenceC = $cValue;
        $cValue = $this->exec('vkQueueBindSparse',
            $bindInfoCountC,
            $pBindInfoC,
            $fenceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPresentInfoKHR> $pPresentInfo const VkPresentInfoKHR*
     * returns VkResult
     */
    public function queuePresentKHR(\iggyvolz\vulkan\util\ObjectPointer $pPresentInfo): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pPresentInfo;
        $cValue = $phpValue->cdata;
        $pPresentInfoC = $cValue;
        $cValue = $this->exec('vkQueuePresentKHR',
            $pPresentInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param int $waitSemaphoreCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSemaphore> $pWaitSemaphores const VkSemaphore*
     * @param \iggyvolz\vulkan\struct\VkImage $image VkImage
     * @param \iggyvolz\vulkan\util\IntPointer $pNativeFenceFd int*
     * returns VkResult
     */
    public function queueSignalReleaseImageANDROID(
        int $waitSemaphoreCount,
        \iggyvolz\vulkan\util\ObjectPointer $pWaitSemaphores,
        VkImage $image,
        \iggyvolz\vulkan\util\IntPointer $pNativeFenceFd,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $waitSemaphoreCount;
        $cValue = $phpValue;
        $waitSemaphoreCountC = $cValue;
        $phpValue = $pWaitSemaphores;
        $cValue = $phpValue->cdata;
        $pWaitSemaphoresC = $cValue;
        $phpValue = $image;
        $cValue = $phpValue->cdata;
        $imageC = $cValue;
        $phpValue = $pNativeFenceFd;
        $cValue = $phpValue->cdata;
        $pNativeFenceFdC = $cValue;
        $cValue = $this->exec('vkQueueSignalReleaseImageANDROID',
            $waitSemaphoreCountC,
            $pWaitSemaphoresC,
            $imageC,
            $pNativeFenceFdC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDebugUtilsLabelEXT> $pLabelInfo const VkDebugUtilsLabelEXT*
     */
    public function queueBeginDebugUtilsLabelEXT(\iggyvolz\vulkan\util\ObjectPointer $pLabelInfo): void
    {
        $phpValue = $pLabelInfo;
        $cValue = $phpValue->cdata;
        $pLabelInfoC = $cValue;
        $cValue = $this->exec('vkQueueBeginDebugUtilsLabelEXT',
            $pLabelInfoC,
        );
    }

    public function queueEndDebugUtilsLabelEXT(): void
    {
        $cValue = $this->exec('vkQueueEndDebugUtilsLabelEXT',
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDebugUtilsLabelEXT> $pLabelInfo const VkDebugUtilsLabelEXT*
     */
    public function queueInsertDebugUtilsLabelEXT(\iggyvolz\vulkan\util\ObjectPointer $pLabelInfo): void
    {
        $phpValue = $pLabelInfo;
        $cValue = $phpValue->cdata;
        $pLabelInfoC = $cValue;
        $cValue = $this->exec('vkQueueInsertDebugUtilsLabelEXT',
            $pLabelInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\IntPointer $pCheckpointDataCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCheckpointDataNV> $pCheckpointData VkCheckpointDataNV*
     */
    public function getQueueCheckpointDataNV(
        \iggyvolz\vulkan\util\IntPointer $pCheckpointDataCount,
        \iggyvolz\vulkan\util\ObjectPointer $pCheckpointData,
    ): void
    {
        $phpValue = $pCheckpointDataCount;
        $cValue = $phpValue->cdata;
        $pCheckpointDataCountC = $cValue;
        $phpValue = $pCheckpointData;
        $cValue = $phpValue->cdata;
        $pCheckpointDataC = $cValue;
        $cValue = $this->exec('vkGetQueueCheckpointDataNV',
            $pCheckpointDataCountC,
            $pCheckpointDataC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPerformanceConfigurationINTEL $configuration VkPerformanceConfigurationINTEL
     * returns VkResult
     */
    public function queueSetPerformanceConfigurationINTEL(
        VkPerformanceConfigurationINTEL $configuration,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $configuration;
        $cValue = $phpValue->cdata;
        $configurationC = $cValue;
        $cValue = $this->exec('vkQueueSetPerformanceConfigurationINTEL',
            $configurationC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param int $submitCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSubmitInfo2> $pSubmits const VkSubmitInfo2*
     * @param \iggyvolz\vulkan\struct\VkFence $fence VkFence
     * returns VkResult
     */
    public function queueSubmit2(
        int $submitCount,
        \iggyvolz\vulkan\util\ObjectPointer $pSubmits,
        VkFence $fence,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $submitCount;
        $cValue = $phpValue;
        $submitCountC = $cValue;
        $phpValue = $pSubmits;
        $cValue = $phpValue->cdata;
        $pSubmitsC = $cValue;
        $phpValue = $fence;
        $cValue = $phpValue->cdata;
        $fenceC = $cValue;
        $cValue = $this->exec('vkQueueSubmit2',
            $submitCountC,
            $pSubmitsC,
            $fenceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\IntPointer $pCheckpointDataCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCheckpointData2NV> $pCheckpointData VkCheckpointData2NV*
     */
    public function getQueueCheckpointData2NV(
        \iggyvolz\vulkan\util\IntPointer $pCheckpointDataCount,
        \iggyvolz\vulkan\util\ObjectPointer $pCheckpointData,
    ): void
    {
        $phpValue = $pCheckpointDataCount;
        $cValue = $phpValue->cdata;
        $pCheckpointDataCountC = $cValue;
        $phpValue = $pCheckpointData;
        $cValue = $phpValue->cdata;
        $pCheckpointDataC = $cValue;
        $cValue = $this->exec('vkGetQueueCheckpointData2NV',
            $pCheckpointDataCountC,
            $pCheckpointDataC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkOutOfBandQueueTypeInfoNV> $pQueueTypeInfo const VkOutOfBandQueueTypeInfoNV*
     */
    public function queueNotifyOutOfBandNV(\iggyvolz\vulkan\util\ObjectPointer $pQueueTypeInfo): void
    {
        $phpValue = $pQueueTypeInfo;
        $cValue = $phpValue->cdata;
        $pQueueTypeInfoC = $cValue;
        $cValue = $this->exec('vkQueueNotifyOutOfBandNV',
            $pQueueTypeInfoC,
        );
    }
}
