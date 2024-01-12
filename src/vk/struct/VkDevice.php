<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDevice implements \JsonSerializable
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
     * @param ?string $pName const char*
     * returns PFN_vkVoidFunction
     */
    public function getDeviceProcAddr(?string $pName): mixed
    {
        $phpValue = $pName;
        $cValue = $phpValue;
        $pNameC = $cValue;
        $cValue = $this->exec('vkGetDeviceProcAddr',
            $pNameC,
        );
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyDevice(\iggyvolz\vulkan\util\ObjectPointer $pAllocator): void
    {
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyDevice',
            $pAllocatorC,
        );
    }

    /**
     * @param int $queueFamilyIndex uint32_t
     * @param int $queueIndex uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkQueue> $pQueue VkQueue*
     */
    public function getDeviceQueue(
        int $queueFamilyIndex,
        int $queueIndex,
        \iggyvolz\vulkan\util\ObjectPointer $pQueue,
    ): void
    {
        $phpValue = $queueFamilyIndex;
        $cValue = $phpValue;
        $queueFamilyIndexC = $cValue;
        $phpValue = $queueIndex;
        $cValue = $phpValue;
        $queueIndexC = $cValue;
        $phpValue = $pQueue;
        $cValue = $phpValue->cdata;
        $pQueueC = $cValue;
        $cValue = $this->exec('vkGetDeviceQueue',
            $queueFamilyIndexC,
            $queueIndexC,
            $pQueueC,
        );
    }

    /**
     * returns VkResult
     */
    public function deviceWaitIdle(): \iggyvolz\vulkan\enum\VkResult
    {
        $cValue = $this->exec('vkDeviceWaitIdle',
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryAllocateInfo> $pAllocateInfo const VkMemoryAllocateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDeviceMemory> $pMemory VkDeviceMemory*
     * returns VkResult
     */
    public function allocateMemory(
        \iggyvolz\vulkan\util\ObjectPointer $pAllocateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pMemory,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pAllocateInfo;
        $cValue = $phpValue->cdata;
        $pAllocateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pMemory;
        $cValue = $phpValue->cdata;
        $pMemoryC = $cValue;
        $cValue = $this->exec('vkAllocateMemory',
            $pAllocateInfoC,
            $pAllocatorC,
            $pMemoryC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDeviceMemory $memory VkDeviceMemory
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function freeMemory(VkDeviceMemory $memory, \iggyvolz\vulkan\util\ObjectPointer $pAllocator): void
    {
        $phpValue = $memory;
        $cValue = $phpValue->cdata;
        $memoryC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkFreeMemory',
            $memoryC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDeviceMemory $memory VkDeviceMemory
     * @param int $offset VkDeviceSize
     * @param int $size VkDeviceSize
     * @param list<void> $flags VkMemoryMapFlags
     * @param \iggyvolz\vulkan\util\Pointer $ppData void**
     * returns VkResult
     */
    public function mapMemory(
        VkDeviceMemory $memory,
        int $offset,
        int $size,
        array $flags,
        \iggyvolz\vulkan\util\Pointer $ppData,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $memory;
        $cValue = $phpValue->cdata;
        $memoryC = $cValue;
        $phpValue = $offset;
        $cValue = $phpValue;
        $offsetC = $cValue;
        $phpValue = $size;
        $cValue = $phpValue;
        $sizeC = $cValue;
        $phpValue = $flags;
        $cValue = 0;
        $flagsC = $cValue;
        $phpValue = $ppData;
        $cValue = $phpValue->cdata;
        $ppDataC = $cValue;
        $cValue = $this->exec('vkMapMemory',
            $memoryC,
            $offsetC,
            $sizeC,
            $flagsC,
            $ppDataC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDeviceMemory $memory VkDeviceMemory
     */
    public function unmapMemory(VkDeviceMemory $memory): void
    {
        $phpValue = $memory;
        $cValue = $phpValue->cdata;
        $memoryC = $cValue;
        $cValue = $this->exec('vkUnmapMemory',
            $memoryC,
        );
    }

    /**
     * @param int $memoryRangeCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMappedMemoryRange> $pMemoryRanges const VkMappedMemoryRange*
     * returns VkResult
     */
    public function flushMappedMemoryRanges(
        int $memoryRangeCount,
        \iggyvolz\vulkan\util\ObjectPointer $pMemoryRanges,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $memoryRangeCount;
        $cValue = $phpValue;
        $memoryRangeCountC = $cValue;
        $phpValue = $pMemoryRanges;
        $cValue = $phpValue->cdata;
        $pMemoryRangesC = $cValue;
        $cValue = $this->exec('vkFlushMappedMemoryRanges',
            $memoryRangeCountC,
            $pMemoryRangesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param int $memoryRangeCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMappedMemoryRange> $pMemoryRanges const VkMappedMemoryRange*
     * returns VkResult
     */
    public function invalidateMappedMemoryRanges(
        int $memoryRangeCount,
        \iggyvolz\vulkan\util\ObjectPointer $pMemoryRanges,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $memoryRangeCount;
        $cValue = $phpValue;
        $memoryRangeCountC = $cValue;
        $phpValue = $pMemoryRanges;
        $cValue = $phpValue->cdata;
        $pMemoryRangesC = $cValue;
        $cValue = $this->exec('vkInvalidateMappedMemoryRanges',
            $memoryRangeCountC,
            $pMemoryRangesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDeviceMemory $memory VkDeviceMemory
     * @param \iggyvolz\vulkan\util\Pointer $pCommittedMemoryInBytes VkDeviceSize*
     */
    public function getDeviceMemoryCommitment(
        VkDeviceMemory $memory,
        \iggyvolz\vulkan\util\Pointer $pCommittedMemoryInBytes,
    ): void
    {
        $phpValue = $memory;
        $cValue = $phpValue->cdata;
        $memoryC = $cValue;
        $phpValue = $pCommittedMemoryInBytes;
        $cValue = $phpValue->cdata;
        $pCommittedMemoryInBytesC = $cValue;
        $cValue = $this->exec('vkGetDeviceMemoryCommitment',
            $memoryC,
            $pCommittedMemoryInBytesC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkBuffer $buffer VkBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryRequirements> $pMemoryRequirements VkMemoryRequirements*
     */
    public function getBufferMemoryRequirements(
        VkBuffer $buffer,
        \iggyvolz\vulkan\util\ObjectPointer $pMemoryRequirements,
    ): void
    {
        $phpValue = $buffer;
        $cValue = $phpValue->cdata;
        $bufferC = $cValue;
        $phpValue = $pMemoryRequirements;
        $cValue = $phpValue->cdata;
        $pMemoryRequirementsC = $cValue;
        $cValue = $this->exec('vkGetBufferMemoryRequirements',
            $bufferC,
            $pMemoryRequirementsC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkBuffer $buffer VkBuffer
     * @param \iggyvolz\vulkan\struct\VkDeviceMemory $memory VkDeviceMemory
     * @param int $memoryOffset VkDeviceSize
     * returns VkResult
     */
    public function bindBufferMemory(
        VkBuffer $buffer,
        VkDeviceMemory $memory,
        int $memoryOffset,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $buffer;
        $cValue = $phpValue->cdata;
        $bufferC = $cValue;
        $phpValue = $memory;
        $cValue = $phpValue->cdata;
        $memoryC = $cValue;
        $phpValue = $memoryOffset;
        $cValue = $phpValue;
        $memoryOffsetC = $cValue;
        $cValue = $this->exec('vkBindBufferMemory',
            $bufferC,
            $memoryC,
            $memoryOffsetC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkImage $image VkImage
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryRequirements> $pMemoryRequirements VkMemoryRequirements*
     */
    public function getImageMemoryRequirements(
        VkImage $image,
        \iggyvolz\vulkan\util\ObjectPointer $pMemoryRequirements,
    ): void
    {
        $phpValue = $image;
        $cValue = $phpValue->cdata;
        $imageC = $cValue;
        $phpValue = $pMemoryRequirements;
        $cValue = $phpValue->cdata;
        $pMemoryRequirementsC = $cValue;
        $cValue = $this->exec('vkGetImageMemoryRequirements',
            $imageC,
            $pMemoryRequirementsC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkImage $image VkImage
     * @param \iggyvolz\vulkan\struct\VkDeviceMemory $memory VkDeviceMemory
     * @param int $memoryOffset VkDeviceSize
     * returns VkResult
     */
    public function bindImageMemory(
        VkImage $image,
        VkDeviceMemory $memory,
        int $memoryOffset,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $image;
        $cValue = $phpValue->cdata;
        $imageC = $cValue;
        $phpValue = $memory;
        $cValue = $phpValue->cdata;
        $memoryC = $cValue;
        $phpValue = $memoryOffset;
        $cValue = $phpValue;
        $memoryOffsetC = $cValue;
        $cValue = $this->exec('vkBindImageMemory',
            $imageC,
            $memoryC,
            $memoryOffsetC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkImage $image VkImage
     * @param \iggyvolz\vulkan\util\IntPointer $pSparseMemoryRequirementCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSparseImageMemoryRequirements> $pSparseMemoryRequirements VkSparseImageMemoryRequirements*
     */
    public function getImageSparseMemoryRequirements(
        VkImage $image,
        \iggyvolz\vulkan\util\IntPointer $pSparseMemoryRequirementCount,
        \iggyvolz\vulkan\util\ObjectPointer $pSparseMemoryRequirements,
    ): void
    {
        $phpValue = $image;
        $cValue = $phpValue->cdata;
        $imageC = $cValue;
        $phpValue = $pSparseMemoryRequirementCount;
        $cValue = $phpValue->cdata;
        $pSparseMemoryRequirementCountC = $cValue;
        $phpValue = $pSparseMemoryRequirements;
        $cValue = $phpValue->cdata;
        $pSparseMemoryRequirementsC = $cValue;
        $cValue = $this->exec('vkGetImageSparseMemoryRequirements',
            $imageC,
            $pSparseMemoryRequirementCountC,
            $pSparseMemoryRequirementsC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkFenceCreateInfo> $pCreateInfo const VkFenceCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkFence> $pFence VkFence*
     * returns VkResult
     */
    public function createFence(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pFence,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pFence;
        $cValue = $phpValue->cdata;
        $pFenceC = $cValue;
        $cValue = $this->exec('vkCreateFence',
            $pCreateInfoC,
            $pAllocatorC,
            $pFenceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkFence $fence VkFence
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyFence(VkFence $fence, \iggyvolz\vulkan\util\ObjectPointer $pAllocator): void
    {
        $phpValue = $fence;
        $cValue = $phpValue->cdata;
        $fenceC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyFence',
            $fenceC,
            $pAllocatorC,
        );
    }

    /**
     * @param int $fenceCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkFence> $pFences const VkFence*
     * returns VkResult
     */
    public function resetFences(
        int $fenceCount,
        \iggyvolz\vulkan\util\ObjectPointer $pFences,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $fenceCount;
        $cValue = $phpValue;
        $fenceCountC = $cValue;
        $phpValue = $pFences;
        $cValue = $phpValue->cdata;
        $pFencesC = $cValue;
        $cValue = $this->exec('vkResetFences',
            $fenceCountC,
            $pFencesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkFence $fence VkFence
     * returns VkResult
     */
    public function getFenceStatus(VkFence $fence): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $fence;
        $cValue = $phpValue->cdata;
        $fenceC = $cValue;
        $cValue = $this->exec('vkGetFenceStatus',
            $fenceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param int $fenceCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkFence> $pFences const VkFence*
     * @param bool $waitAll VkBool32
     * @param int $timeout uint64_t
     * returns VkResult
     */
    public function waitForFences(
        int $fenceCount,
        \iggyvolz\vulkan\util\ObjectPointer $pFences,
        bool $waitAll,
        int $timeout,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $fenceCount;
        $cValue = $phpValue;
        $fenceCountC = $cValue;
        $phpValue = $pFences;
        $cValue = $phpValue->cdata;
        $pFencesC = $cValue;
        $phpValue = $waitAll;
        $cValue = $phpValue ? 1 : 0;
        $waitAllC = $cValue;
        $phpValue = $timeout;
        $cValue = $phpValue;
        $timeoutC = $cValue;
        $cValue = $this->exec('vkWaitForFences',
            $fenceCountC,
            $pFencesC,
            $waitAllC,
            $timeoutC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSemaphoreCreateInfo> $pCreateInfo const VkSemaphoreCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSemaphore> $pSemaphore VkSemaphore*
     * returns VkResult
     */
    public function createSemaphore(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pSemaphore,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSemaphore;
        $cValue = $phpValue->cdata;
        $pSemaphoreC = $cValue;
        $cValue = $this->exec('vkCreateSemaphore',
            $pCreateInfoC,
            $pAllocatorC,
            $pSemaphoreC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkSemaphore $semaphore VkSemaphore
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroySemaphore(VkSemaphore $semaphore, \iggyvolz\vulkan\util\ObjectPointer $pAllocator): void
    {
        $phpValue = $semaphore;
        $cValue = $phpValue->cdata;
        $semaphoreC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroySemaphore',
            $semaphoreC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkEventCreateInfo> $pCreateInfo const VkEventCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkEvent> $pEvent VkEvent*
     * returns VkResult
     */
    public function createEvent(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pEvent,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pEvent;
        $cValue = $phpValue->cdata;
        $pEventC = $cValue;
        $cValue = $this->exec('vkCreateEvent',
            $pCreateInfoC,
            $pAllocatorC,
            $pEventC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkEvent $event VkEvent
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyEvent(VkEvent $event, \iggyvolz\vulkan\util\ObjectPointer $pAllocator): void
    {
        $phpValue = $event;
        $cValue = $phpValue->cdata;
        $eventC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyEvent',
            $eventC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkEvent $event VkEvent
     * returns VkResult
     */
    public function getEventStatus(VkEvent $event): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $event;
        $cValue = $phpValue->cdata;
        $eventC = $cValue;
        $cValue = $this->exec('vkGetEventStatus',
            $eventC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkEvent $event VkEvent
     * returns VkResult
     */
    public function setEvent(VkEvent $event): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $event;
        $cValue = $phpValue->cdata;
        $eventC = $cValue;
        $cValue = $this->exec('vkSetEvent',
            $eventC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkEvent $event VkEvent
     * returns VkResult
     */
    public function resetEvent(VkEvent $event): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $event;
        $cValue = $phpValue->cdata;
        $eventC = $cValue;
        $cValue = $this->exec('vkResetEvent',
            $eventC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkQueryPoolCreateInfo> $pCreateInfo const VkQueryPoolCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkQueryPool> $pQueryPool VkQueryPool*
     * returns VkResult
     */
    public function createQueryPool(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pQueryPool,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pQueryPool;
        $cValue = $phpValue->cdata;
        $pQueryPoolC = $cValue;
        $cValue = $this->exec('vkCreateQueryPool',
            $pCreateInfoC,
            $pAllocatorC,
            $pQueryPoolC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkQueryPool $queryPool VkQueryPool
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyQueryPool(VkQueryPool $queryPool, \iggyvolz\vulkan\util\ObjectPointer $pAllocator): void
    {
        $phpValue = $queryPool;
        $cValue = $phpValue->cdata;
        $queryPoolC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyQueryPool',
            $queryPoolC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkQueryPool $queryPool VkQueryPool
     * @param int $firstQuery uint32_t
     * @param int $queryCount uint32_t
     * @param int $dataSize size_t
     * @param \iggyvolz\vulkan\util\Pointer $pData void*
     * @param int $stride VkDeviceSize
     * @param list<\iggyvolz\vulkan\enum\VkQueryResultFlagBits> $flags VkQueryResultFlags
     * returns VkResult
     */
    public function getQueryPoolResults(
        VkQueryPool $queryPool,
        int $firstQuery,
        int $queryCount,
        int $dataSize,
        \iggyvolz\vulkan\util\Pointer $pData,
        int $stride,
        array $flags,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $queryPool;
        $cValue = $phpValue->cdata;
        $queryPoolC = $cValue;
        $phpValue = $firstQuery;
        $cValue = $phpValue;
        $firstQueryC = $cValue;
        $phpValue = $queryCount;
        $cValue = $phpValue;
        $queryCountC = $cValue;
        $phpValue = $dataSize;
        $cValue = $phpValue;
        $dataSizeC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $phpValue = $stride;
        $cValue = $phpValue;
        $strideC = $cValue;
        $phpValue = $flags;
        $cValue = \iggyvolz\vulkan\enum\VkQueryResultFlagBits::toInt(...$phpValue);
        $flagsC = $cValue;
        $cValue = $this->exec('vkGetQueryPoolResults',
            $queryPoolC,
            $firstQueryC,
            $queryCountC,
            $dataSizeC,
            $pDataC,
            $strideC,
            $flagsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkQueryPool $queryPool VkQueryPool
     * @param int $firstQuery uint32_t
     * @param int $queryCount uint32_t
     */
    public function resetQueryPool(VkQueryPool $queryPool, int $firstQuery, int $queryCount): void
    {
        $phpValue = $queryPool;
        $cValue = $phpValue->cdata;
        $queryPoolC = $cValue;
        $phpValue = $firstQuery;
        $cValue = $phpValue;
        $firstQueryC = $cValue;
        $phpValue = $queryCount;
        $cValue = $phpValue;
        $queryCountC = $cValue;
        $cValue = $this->exec('vkResetQueryPool',
            $queryPoolC,
            $firstQueryC,
            $queryCountC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBufferCreateInfo> $pCreateInfo const VkBufferCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBuffer> $pBuffer VkBuffer*
     * returns VkResult
     */
    public function createBuffer(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pBuffer,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pBuffer;
        $cValue = $phpValue->cdata;
        $pBufferC = $cValue;
        $cValue = $this->exec('vkCreateBuffer',
            $pCreateInfoC,
            $pAllocatorC,
            $pBufferC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkBuffer $buffer VkBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyBuffer(VkBuffer $buffer, \iggyvolz\vulkan\util\ObjectPointer $pAllocator): void
    {
        $phpValue = $buffer;
        $cValue = $phpValue->cdata;
        $bufferC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyBuffer',
            $bufferC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBufferViewCreateInfo> $pCreateInfo const VkBufferViewCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBufferView> $pView VkBufferView*
     * returns VkResult
     */
    public function createBufferView(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pView,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pView;
        $cValue = $phpValue->cdata;
        $pViewC = $cValue;
        $cValue = $this->exec('vkCreateBufferView',
            $pCreateInfoC,
            $pAllocatorC,
            $pViewC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkBufferView $bufferView VkBufferView
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyBufferView(VkBufferView $bufferView, \iggyvolz\vulkan\util\ObjectPointer $pAllocator): void
    {
        $phpValue = $bufferView;
        $cValue = $phpValue->cdata;
        $bufferViewC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyBufferView',
            $bufferViewC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageCreateInfo> $pCreateInfo const VkImageCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImage> $pImage VkImage*
     * returns VkResult
     */
    public function createImage(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pImage,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pImage;
        $cValue = $phpValue->cdata;
        $pImageC = $cValue;
        $cValue = $this->exec('vkCreateImage',
            $pCreateInfoC,
            $pAllocatorC,
            $pImageC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkImage $image VkImage
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyImage(VkImage $image, \iggyvolz\vulkan\util\ObjectPointer $pAllocator): void
    {
        $phpValue = $image;
        $cValue = $phpValue->cdata;
        $imageC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyImage',
            $imageC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkImage $image VkImage
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageSubresource> $pSubresource const VkImageSubresource*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSubresourceLayout> $pLayout VkSubresourceLayout*
     */
    public function getImageSubresourceLayout(
        VkImage $image,
        \iggyvolz\vulkan\util\ObjectPointer $pSubresource,
        \iggyvolz\vulkan\util\ObjectPointer $pLayout,
    ): void
    {
        $phpValue = $image;
        $cValue = $phpValue->cdata;
        $imageC = $cValue;
        $phpValue = $pSubresource;
        $cValue = $phpValue->cdata;
        $pSubresourceC = $cValue;
        $phpValue = $pLayout;
        $cValue = $phpValue->cdata;
        $pLayoutC = $cValue;
        $cValue = $this->exec('vkGetImageSubresourceLayout',
            $imageC,
            $pSubresourceC,
            $pLayoutC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageViewCreateInfo> $pCreateInfo const VkImageViewCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageView> $pView VkImageView*
     * returns VkResult
     */
    public function createImageView(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pView,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pView;
        $cValue = $phpValue->cdata;
        $pViewC = $cValue;
        $cValue = $this->exec('vkCreateImageView',
            $pCreateInfoC,
            $pAllocatorC,
            $pViewC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkImageView $imageView VkImageView
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyImageView(VkImageView $imageView, \iggyvolz\vulkan\util\ObjectPointer $pAllocator): void
    {
        $phpValue = $imageView;
        $cValue = $phpValue->cdata;
        $imageViewC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyImageView',
            $imageViewC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkShaderModuleCreateInfo> $pCreateInfo const VkShaderModuleCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkShaderModule> $pShaderModule VkShaderModule*
     * returns VkResult
     */
    public function createShaderModule(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pShaderModule,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pShaderModule;
        $cValue = $phpValue->cdata;
        $pShaderModuleC = $cValue;
        $cValue = $this->exec('vkCreateShaderModule',
            $pCreateInfoC,
            $pAllocatorC,
            $pShaderModuleC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkShaderModule $shaderModule VkShaderModule
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyShaderModule(
        VkShaderModule $shaderModule,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $shaderModule;
        $cValue = $phpValue->cdata;
        $shaderModuleC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyShaderModule',
            $shaderModuleC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipelineCacheCreateInfo> $pCreateInfo const VkPipelineCacheCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipelineCache> $pPipelineCache VkPipelineCache*
     * returns VkResult
     */
    public function createPipelineCache(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pPipelineCache,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pPipelineCache;
        $cValue = $phpValue->cdata;
        $pPipelineCacheC = $cValue;
        $cValue = $this->exec('vkCreatePipelineCache',
            $pCreateInfoC,
            $pAllocatorC,
            $pPipelineCacheC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPipelineCache $pipelineCache VkPipelineCache
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyPipelineCache(
        VkPipelineCache $pipelineCache,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $pipelineCache;
        $cValue = $phpValue->cdata;
        $pipelineCacheC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyPipelineCache',
            $pipelineCacheC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPipelineCache $pipelineCache VkPipelineCache
     * @param \iggyvolz\vulkan\util\IntPointer $pDataSize size_t*
     * @param \iggyvolz\vulkan\util\Pointer $pData void*
     * returns VkResult
     */
    public function getPipelineCacheData(
        VkPipelineCache $pipelineCache,
        \iggyvolz\vulkan\util\IntPointer $pDataSize,
        \iggyvolz\vulkan\util\Pointer $pData,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pipelineCache;
        $cValue = $phpValue->cdata;
        $pipelineCacheC = $cValue;
        $phpValue = $pDataSize;
        $cValue = $phpValue->cdata;
        $pDataSizeC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $cValue = $this->exec('vkGetPipelineCacheData',
            $pipelineCacheC,
            $pDataSizeC,
            $pDataC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPipelineCache $dstCache VkPipelineCache
     * @param int $srcCacheCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipelineCache> $pSrcCaches const VkPipelineCache*
     * returns VkResult
     */
    public function mergePipelineCaches(
        VkPipelineCache $dstCache,
        int $srcCacheCount,
        \iggyvolz\vulkan\util\ObjectPointer $pSrcCaches,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $dstCache;
        $cValue = $phpValue->cdata;
        $dstCacheC = $cValue;
        $phpValue = $srcCacheCount;
        $cValue = $phpValue;
        $srcCacheCountC = $cValue;
        $phpValue = $pSrcCaches;
        $cValue = $phpValue->cdata;
        $pSrcCachesC = $cValue;
        $cValue = $this->exec('vkMergePipelineCaches',
            $dstCacheC,
            $srcCacheCountC,
            $pSrcCachesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPipelineCache $pipelineCache VkPipelineCache
     * @param int $createInfoCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkGraphicsPipelineCreateInfo> $pCreateInfos const VkGraphicsPipelineCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipeline> $pPipelines VkPipeline*
     * returns VkResult
     */
    public function createGraphicsPipelines(
        VkPipelineCache $pipelineCache,
        int $createInfoCount,
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfos,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pPipelines,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pipelineCache;
        $cValue = $phpValue->cdata;
        $pipelineCacheC = $cValue;
        $phpValue = $createInfoCount;
        $cValue = $phpValue;
        $createInfoCountC = $cValue;
        $phpValue = $pCreateInfos;
        $cValue = $phpValue->cdata;
        $pCreateInfosC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pPipelines;
        $cValue = $phpValue->cdata;
        $pPipelinesC = $cValue;
        $cValue = $this->exec('vkCreateGraphicsPipelines',
            $pipelineCacheC,
            $createInfoCountC,
            $pCreateInfosC,
            $pAllocatorC,
            $pPipelinesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPipelineCache $pipelineCache VkPipelineCache
     * @param int $createInfoCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkComputePipelineCreateInfo> $pCreateInfos const VkComputePipelineCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipeline> $pPipelines VkPipeline*
     * returns VkResult
     */
    public function createComputePipelines(
        VkPipelineCache $pipelineCache,
        int $createInfoCount,
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfos,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pPipelines,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pipelineCache;
        $cValue = $phpValue->cdata;
        $pipelineCacheC = $cValue;
        $phpValue = $createInfoCount;
        $cValue = $phpValue;
        $createInfoCountC = $cValue;
        $phpValue = $pCreateInfos;
        $cValue = $phpValue->cdata;
        $pCreateInfosC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pPipelines;
        $cValue = $phpValue->cdata;
        $pPipelinesC = $cValue;
        $cValue = $this->exec('vkCreateComputePipelines',
            $pipelineCacheC,
            $createInfoCountC,
            $pCreateInfosC,
            $pAllocatorC,
            $pPipelinesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkRenderPass $renderpass VkRenderPass
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkExtent2D> $pMaxWorkgroupSize VkExtent2D*
     * returns VkResult
     */
    public function getDeviceSubpassShadingMaxWorkgroupSizeHUAWEI(
        VkRenderPass $renderpass,
        \iggyvolz\vulkan\util\ObjectPointer $pMaxWorkgroupSize,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $renderpass;
        $cValue = $phpValue->cdata;
        $renderpassC = $cValue;
        $phpValue = $pMaxWorkgroupSize;
        $cValue = $phpValue->cdata;
        $pMaxWorkgroupSizeC = $cValue;
        $cValue = $this->exec('vkGetDeviceSubpassShadingMaxWorkgroupSizeHUAWEI',
            $renderpassC,
            $pMaxWorkgroupSizeC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPipeline $pipeline VkPipeline
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyPipeline(VkPipeline $pipeline, \iggyvolz\vulkan\util\ObjectPointer $pAllocator): void
    {
        $phpValue = $pipeline;
        $cValue = $phpValue->cdata;
        $pipelineC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyPipeline',
            $pipelineC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipelineLayoutCreateInfo> $pCreateInfo const VkPipelineLayoutCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipelineLayout> $pPipelineLayout VkPipelineLayout*
     * returns VkResult
     */
    public function createPipelineLayout(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pPipelineLayout,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pPipelineLayout;
        $cValue = $phpValue->cdata;
        $pPipelineLayoutC = $cValue;
        $cValue = $this->exec('vkCreatePipelineLayout',
            $pCreateInfoC,
            $pAllocatorC,
            $pPipelineLayoutC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPipelineLayout $pipelineLayout VkPipelineLayout
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyPipelineLayout(
        VkPipelineLayout $pipelineLayout,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $pipelineLayout;
        $cValue = $phpValue->cdata;
        $pipelineLayoutC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyPipelineLayout',
            $pipelineLayoutC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSamplerCreateInfo> $pCreateInfo const VkSamplerCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSampler> $pSampler VkSampler*
     * returns VkResult
     */
    public function createSampler(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pSampler,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSampler;
        $cValue = $phpValue->cdata;
        $pSamplerC = $cValue;
        $cValue = $this->exec('vkCreateSampler',
            $pCreateInfoC,
            $pAllocatorC,
            $pSamplerC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkSampler $sampler VkSampler
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroySampler(VkSampler $sampler, \iggyvolz\vulkan\util\ObjectPointer $pAllocator): void
    {
        $phpValue = $sampler;
        $cValue = $phpValue->cdata;
        $samplerC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroySampler',
            $samplerC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDescriptorSetLayoutCreateInfo> $pCreateInfo const VkDescriptorSetLayoutCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDescriptorSetLayout> $pSetLayout VkDescriptorSetLayout*
     * returns VkResult
     */
    public function createDescriptorSetLayout(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pSetLayout,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSetLayout;
        $cValue = $phpValue->cdata;
        $pSetLayoutC = $cValue;
        $cValue = $this->exec('vkCreateDescriptorSetLayout',
            $pCreateInfoC,
            $pAllocatorC,
            $pSetLayoutC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDescriptorSetLayout $descriptorSetLayout VkDescriptorSetLayout
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyDescriptorSetLayout(
        VkDescriptorSetLayout $descriptorSetLayout,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $descriptorSetLayout;
        $cValue = $phpValue->cdata;
        $descriptorSetLayoutC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyDescriptorSetLayout',
            $descriptorSetLayoutC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDescriptorPoolCreateInfo> $pCreateInfo const VkDescriptorPoolCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDescriptorPool> $pDescriptorPool VkDescriptorPool*
     * returns VkResult
     */
    public function createDescriptorPool(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pDescriptorPool,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pDescriptorPool;
        $cValue = $phpValue->cdata;
        $pDescriptorPoolC = $cValue;
        $cValue = $this->exec('vkCreateDescriptorPool',
            $pCreateInfoC,
            $pAllocatorC,
            $pDescriptorPoolC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDescriptorPool $descriptorPool VkDescriptorPool
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyDescriptorPool(
        VkDescriptorPool $descriptorPool,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $descriptorPool;
        $cValue = $phpValue->cdata;
        $descriptorPoolC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyDescriptorPool',
            $descriptorPoolC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDescriptorPool $descriptorPool VkDescriptorPool
     * @param list<void> $flags VkDescriptorPoolResetFlags
     * returns VkResult
     */
    public function resetDescriptorPool(
        VkDescriptorPool $descriptorPool,
        array $flags,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $descriptorPool;
        $cValue = $phpValue->cdata;
        $descriptorPoolC = $cValue;
        $phpValue = $flags;
        $cValue = 0;
        $flagsC = $cValue;
        $cValue = $this->exec('vkResetDescriptorPool',
            $descriptorPoolC,
            $flagsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDescriptorSetAllocateInfo> $pAllocateInfo const VkDescriptorSetAllocateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDescriptorSet> $pDescriptorSets VkDescriptorSet*
     * returns VkResult
     */
    public function allocateDescriptorSets(
        \iggyvolz\vulkan\util\ObjectPointer $pAllocateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pDescriptorSets,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pAllocateInfo;
        $cValue = $phpValue->cdata;
        $pAllocateInfoC = $cValue;
        $phpValue = $pDescriptorSets;
        $cValue = $phpValue->cdata;
        $pDescriptorSetsC = $cValue;
        $cValue = $this->exec('vkAllocateDescriptorSets',
            $pAllocateInfoC,
            $pDescriptorSetsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDescriptorPool $descriptorPool VkDescriptorPool
     * @param int $descriptorSetCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDescriptorSet> $pDescriptorSets const VkDescriptorSet*
     * returns VkResult
     */
    public function freeDescriptorSets(
        VkDescriptorPool $descriptorPool,
        int $descriptorSetCount,
        \iggyvolz\vulkan\util\ObjectPointer $pDescriptorSets,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $descriptorPool;
        $cValue = $phpValue->cdata;
        $descriptorPoolC = $cValue;
        $phpValue = $descriptorSetCount;
        $cValue = $phpValue;
        $descriptorSetCountC = $cValue;
        $phpValue = $pDescriptorSets;
        $cValue = $phpValue->cdata;
        $pDescriptorSetsC = $cValue;
        $cValue = $this->exec('vkFreeDescriptorSets',
            $descriptorPoolC,
            $descriptorSetCountC,
            $pDescriptorSetsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param int $descriptorWriteCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkWriteDescriptorSet> $pDescriptorWrites const VkWriteDescriptorSet*
     * @param int $descriptorCopyCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyDescriptorSet> $pDescriptorCopies const VkCopyDescriptorSet*
     */
    public function updateDescriptorSets(
        int $descriptorWriteCount,
        \iggyvolz\vulkan\util\ObjectPointer $pDescriptorWrites,
        int $descriptorCopyCount,
        \iggyvolz\vulkan\util\ObjectPointer $pDescriptorCopies,
    ): void
    {
        $phpValue = $descriptorWriteCount;
        $cValue = $phpValue;
        $descriptorWriteCountC = $cValue;
        $phpValue = $pDescriptorWrites;
        $cValue = $phpValue->cdata;
        $pDescriptorWritesC = $cValue;
        $phpValue = $descriptorCopyCount;
        $cValue = $phpValue;
        $descriptorCopyCountC = $cValue;
        $phpValue = $pDescriptorCopies;
        $cValue = $phpValue->cdata;
        $pDescriptorCopiesC = $cValue;
        $cValue = $this->exec('vkUpdateDescriptorSets',
            $descriptorWriteCountC,
            $pDescriptorWritesC,
            $descriptorCopyCountC,
            $pDescriptorCopiesC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkFramebufferCreateInfo> $pCreateInfo const VkFramebufferCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkFramebuffer> $pFramebuffer VkFramebuffer*
     * returns VkResult
     */
    public function createFramebuffer(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pFramebuffer,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pFramebuffer;
        $cValue = $phpValue->cdata;
        $pFramebufferC = $cValue;
        $cValue = $this->exec('vkCreateFramebuffer',
            $pCreateInfoC,
            $pAllocatorC,
            $pFramebufferC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkFramebuffer $framebuffer VkFramebuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyFramebuffer(
        VkFramebuffer $framebuffer,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $framebuffer;
        $cValue = $phpValue->cdata;
        $framebufferC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyFramebuffer',
            $framebufferC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRenderPassCreateInfo> $pCreateInfo const VkRenderPassCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRenderPass> $pRenderPass VkRenderPass*
     * returns VkResult
     */
    public function createRenderPass(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pRenderPass,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pRenderPass;
        $cValue = $phpValue->cdata;
        $pRenderPassC = $cValue;
        $cValue = $this->exec('vkCreateRenderPass',
            $pCreateInfoC,
            $pAllocatorC,
            $pRenderPassC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkRenderPass $renderPass VkRenderPass
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyRenderPass(VkRenderPass $renderPass, \iggyvolz\vulkan\util\ObjectPointer $pAllocator): void
    {
        $phpValue = $renderPass;
        $cValue = $phpValue->cdata;
        $renderPassC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyRenderPass',
            $renderPassC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkRenderPass $renderPass VkRenderPass
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkExtent2D> $pGranularity VkExtent2D*
     */
    public function getRenderAreaGranularity(
        VkRenderPass $renderPass,
        \iggyvolz\vulkan\util\ObjectPointer $pGranularity,
    ): void
    {
        $phpValue = $renderPass;
        $cValue = $phpValue->cdata;
        $renderPassC = $cValue;
        $phpValue = $pGranularity;
        $cValue = $phpValue->cdata;
        $pGranularityC = $cValue;
        $cValue = $this->exec('vkGetRenderAreaGranularity',
            $renderPassC,
            $pGranularityC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRenderingAreaInfoKHR> $pRenderingAreaInfo const VkRenderingAreaInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkExtent2D> $pGranularity VkExtent2D*
     */
    public function getRenderingAreaGranularityKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pRenderingAreaInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pGranularity,
    ): void
    {
        $phpValue = $pRenderingAreaInfo;
        $cValue = $phpValue->cdata;
        $pRenderingAreaInfoC = $cValue;
        $phpValue = $pGranularity;
        $cValue = $phpValue->cdata;
        $pGranularityC = $cValue;
        $cValue = $this->exec('vkGetRenderingAreaGranularityKHR',
            $pRenderingAreaInfoC,
            $pGranularityC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCommandPoolCreateInfo> $pCreateInfo const VkCommandPoolCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCommandPool> $pCommandPool VkCommandPool*
     * returns VkResult
     */
    public function createCommandPool(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pCommandPool,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pCommandPool;
        $cValue = $phpValue->cdata;
        $pCommandPoolC = $cValue;
        $cValue = $this->exec('vkCreateCommandPool',
            $pCreateInfoC,
            $pAllocatorC,
            $pCommandPoolC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandPool $commandPool VkCommandPool
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyCommandPool(
        VkCommandPool $commandPool,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $commandPool;
        $cValue = $phpValue->cdata;
        $commandPoolC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyCommandPool',
            $commandPoolC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandPool $commandPool VkCommandPool
     * @param list<\iggyvolz\vulkan\enum\VkCommandPoolResetFlagBits> $flags VkCommandPoolResetFlags
     * returns VkResult
     */
    public function resetCommandPool(VkCommandPool $commandPool, array $flags): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $commandPool;
        $cValue = $phpValue->cdata;
        $commandPoolC = $cValue;
        $phpValue = $flags;
        $cValue = \iggyvolz\vulkan\enum\VkCommandPoolResetFlagBits::toInt(...$phpValue);
        $flagsC = $cValue;
        $cValue = $this->exec('vkResetCommandPool',
            $commandPoolC,
            $flagsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCommandBufferAllocateInfo> $pAllocateInfo const VkCommandBufferAllocateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCommandBuffer> $pCommandBuffers VkCommandBuffer*
     * returns VkResult
     */
    public function allocateCommandBuffers(
        \iggyvolz\vulkan\util\ObjectPointer $pAllocateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pCommandBuffers,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pAllocateInfo;
        $cValue = $phpValue->cdata;
        $pAllocateInfoC = $cValue;
        $phpValue = $pCommandBuffers;
        $cValue = $phpValue->cdata;
        $pCommandBuffersC = $cValue;
        $cValue = $this->exec('vkAllocateCommandBuffers',
            $pAllocateInfoC,
            $pCommandBuffersC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandPool $commandPool VkCommandPool
     * @param int $commandBufferCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCommandBuffer> $pCommandBuffers const VkCommandBuffer*
     */
    public function freeCommandBuffers(
        VkCommandPool $commandPool,
        int $commandBufferCount,
        \iggyvolz\vulkan\util\ObjectPointer $pCommandBuffers,
    ): void
    {
        $phpValue = $commandPool;
        $cValue = $phpValue->cdata;
        $commandPoolC = $cValue;
        $phpValue = $commandBufferCount;
        $cValue = $phpValue;
        $commandBufferCountC = $cValue;
        $phpValue = $pCommandBuffers;
        $cValue = $phpValue->cdata;
        $pCommandBuffersC = $cValue;
        $cValue = $this->exec('vkFreeCommandBuffers',
            $commandPoolC,
            $commandBufferCountC,
            $pCommandBuffersC,
        );
    }

    /**
     * @param int $swapchainCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSwapchainCreateInfoKHR> $pCreateInfos const VkSwapchainCreateInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSwapchainKHR> $pSwapchains VkSwapchainKHR*
     * returns VkResult
     */
    public function createSharedSwapchainsKHR(
        int $swapchainCount,
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfos,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pSwapchains,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $swapchainCount;
        $cValue = $phpValue;
        $swapchainCountC = $cValue;
        $phpValue = $pCreateInfos;
        $cValue = $phpValue->cdata;
        $pCreateInfosC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSwapchains;
        $cValue = $phpValue->cdata;
        $pSwapchainsC = $cValue;
        $cValue = $this->exec('vkCreateSharedSwapchainsKHR',
            $swapchainCountC,
            $pCreateInfosC,
            $pAllocatorC,
            $pSwapchainsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSwapchainCreateInfoKHR> $pCreateInfo const VkSwapchainCreateInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSwapchainKHR> $pSwapchain VkSwapchainKHR*
     * returns VkResult
     */
    public function createSwapchainKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pSwapchain,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSwapchain;
        $cValue = $phpValue->cdata;
        $pSwapchainC = $cValue;
        $cValue = $this->exec('vkCreateSwapchainKHR',
            $pCreateInfoC,
            $pAllocatorC,
            $pSwapchainC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain VkSwapchainKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroySwapchainKHR(
        VkSwapchainKHR $swapchain,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $swapchain;
        $cValue = $phpValue->cdata;
        $swapchainC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroySwapchainKHR',
            $swapchainC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain VkSwapchainKHR
     * @param \iggyvolz\vulkan\util\IntPointer $pSwapchainImageCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImage> $pSwapchainImages VkImage*
     * returns VkResult
     */
    public function getSwapchainImagesKHR(
        VkSwapchainKHR $swapchain,
        \iggyvolz\vulkan\util\IntPointer $pSwapchainImageCount,
        \iggyvolz\vulkan\util\ObjectPointer $pSwapchainImages,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $swapchain;
        $cValue = $phpValue->cdata;
        $swapchainC = $cValue;
        $phpValue = $pSwapchainImageCount;
        $cValue = $phpValue->cdata;
        $pSwapchainImageCountC = $cValue;
        $phpValue = $pSwapchainImages;
        $cValue = $phpValue->cdata;
        $pSwapchainImagesC = $cValue;
        $cValue = $this->exec('vkGetSwapchainImagesKHR',
            $swapchainC,
            $pSwapchainImageCountC,
            $pSwapchainImagesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain VkSwapchainKHR
     * @param int $timeout uint64_t
     * @param \iggyvolz\vulkan\struct\VkSemaphore $semaphore VkSemaphore
     * @param \iggyvolz\vulkan\struct\VkFence $fence VkFence
     * @param \iggyvolz\vulkan\util\IntPointer $pImageIndex uint32_t*
     * returns VkResult
     */
    public function acquireNextImageKHR(
        VkSwapchainKHR $swapchain,
        int $timeout,
        VkSemaphore $semaphore,
        VkFence $fence,
        \iggyvolz\vulkan\util\IntPointer $pImageIndex,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $swapchain;
        $cValue = $phpValue->cdata;
        $swapchainC = $cValue;
        $phpValue = $timeout;
        $cValue = $phpValue;
        $timeoutC = $cValue;
        $phpValue = $semaphore;
        $cValue = $phpValue->cdata;
        $semaphoreC = $cValue;
        $phpValue = $fence;
        $cValue = $phpValue->cdata;
        $fenceC = $cValue;
        $phpValue = $pImageIndex;
        $cValue = $phpValue->cdata;
        $pImageIndexC = $cValue;
        $cValue = $this->exec('vkAcquireNextImageKHR',
            $swapchainC,
            $timeoutC,
            $semaphoreC,
            $fenceC,
            $pImageIndexC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDebugMarkerObjectNameInfoEXT> $pNameInfo const VkDebugMarkerObjectNameInfoEXT*
     * returns VkResult
     */
    public function debugMarkerSetObjectNameEXT(
        \iggyvolz\vulkan\util\ObjectPointer $pNameInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pNameInfo;
        $cValue = $phpValue->cdata;
        $pNameInfoC = $cValue;
        $cValue = $this->exec('vkDebugMarkerSetObjectNameEXT',
            $pNameInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDebugMarkerObjectTagInfoEXT> $pTagInfo const VkDebugMarkerObjectTagInfoEXT*
     * returns VkResult
     */
    public function debugMarkerSetObjectTagEXT(
        \iggyvolz\vulkan\util\ObjectPointer $pTagInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pTagInfo;
        $cValue = $phpValue->cdata;
        $pTagInfoC = $cValue;
        $cValue = $this->exec('vkDebugMarkerSetObjectTagEXT',
            $pTagInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDeviceMemory $memory VkDeviceMemory
     * @param list<\iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBitsNV> $handleType VkExternalMemoryHandleTypeFlagsNV
     * @param \iggyvolz\vulkan\util\Pointer $pHandle HANDLE*
     * returns VkResult
     */
    public function getMemoryWin32HandleNV(
        VkDeviceMemory $memory,
        array $handleType,
        \iggyvolz\vulkan\util\Pointer $pHandle,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $memory;
        $cValue = $phpValue->cdata;
        $memoryC = $cValue;
        $phpValue = $handleType;
        $cValue = \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBitsNV::toInt(...$phpValue);
        $handleTypeC = $cValue;
        $phpValue = $pHandle;
        $cValue = $phpValue->cdata;
        $pHandleC = $cValue;
        $cValue = $this->exec('vkGetMemoryWin32HandleNV',
            $memoryC,
            $handleTypeC,
            $pHandleC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkGeneratedCommandsMemoryRequirementsInfoNV> $pInfo const VkGeneratedCommandsMemoryRequirementsInfoNV*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryRequirements2> $pMemoryRequirements VkMemoryRequirements2*
     */
    public function getGeneratedCommandsMemoryRequirementsNV(
        \iggyvolz\vulkan\util\ObjectPointer $pInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pMemoryRequirements,
    ): void
    {
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $phpValue = $pMemoryRequirements;
        $cValue = $phpValue->cdata;
        $pMemoryRequirementsC = $cValue;
        $cValue = $this->exec('vkGetGeneratedCommandsMemoryRequirementsNV',
            $pInfoC,
            $pMemoryRequirementsC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkIndirectCommandsLayoutCreateInfoNV> $pCreateInfo const VkIndirectCommandsLayoutCreateInfoNV*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkIndirectCommandsLayoutNV> $pIndirectCommandsLayout VkIndirectCommandsLayoutNV*
     * returns VkResult
     */
    public function createIndirectCommandsLayoutNV(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pIndirectCommandsLayout,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pIndirectCommandsLayout;
        $cValue = $phpValue->cdata;
        $pIndirectCommandsLayoutC = $cValue;
        $cValue = $this->exec('vkCreateIndirectCommandsLayoutNV',
            $pCreateInfoC,
            $pAllocatorC,
            $pIndirectCommandsLayoutC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkIndirectCommandsLayoutNV $indirectCommandsLayout VkIndirectCommandsLayoutNV
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyIndirectCommandsLayoutNV(
        VkIndirectCommandsLayoutNV $indirectCommandsLayout,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $indirectCommandsLayout;
        $cValue = $phpValue->cdata;
        $indirectCommandsLayoutC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyIndirectCommandsLayoutNV',
            $indirectCommandsLayoutC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandPool $commandPool VkCommandPool
     * @param list<void> $flags VkCommandPoolTrimFlags
     */
    public function trimCommandPool(VkCommandPool $commandPool, array $flags): void
    {
        $phpValue = $commandPool;
        $cValue = $phpValue->cdata;
        $commandPoolC = $cValue;
        $phpValue = $flags;
        $cValue = 0;
        $flagsC = $cValue;
        $cValue = $this->exec('vkTrimCommandPool',
            $commandPoolC,
            $flagsC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryGetWin32HandleInfoKHR> $pGetWin32HandleInfo const VkMemoryGetWin32HandleInfoKHR*
     * @param \iggyvolz\vulkan\util\Pointer $pHandle HANDLE*
     * returns VkResult
     */
    public function getMemoryWin32HandleKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pGetWin32HandleInfo,
        \iggyvolz\vulkan\util\Pointer $pHandle,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pGetWin32HandleInfo;
        $cValue = $phpValue->cdata;
        $pGetWin32HandleInfoC = $cValue;
        $phpValue = $pHandle;
        $cValue = $phpValue->cdata;
        $pHandleC = $cValue;
        $cValue = $this->exec('vkGetMemoryWin32HandleKHR',
            $pGetWin32HandleInfoC,
            $pHandleC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits $handleType VkExternalMemoryHandleTypeFlagBits
     * @param \iggyvolz\vulkan\util\Pointer $handle HANDLE
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryWin32HandlePropertiesKHR> $pMemoryWin32HandleProperties VkMemoryWin32HandlePropertiesKHR*
     * returns VkResult
     */
    public function getMemoryWin32HandlePropertiesKHR(
        \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits $handleType,
        \iggyvolz\vulkan\util\Pointer $handle,
        \iggyvolz\vulkan\util\ObjectPointer $pMemoryWin32HandleProperties,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $handleType;
        $cValue = $phpValue->value;
        $handleTypeC = $cValue;
        $phpValue = $handle;
        $cValue = $phpValue->cdata;
        $handleC = $cValue;
        $phpValue = $pMemoryWin32HandleProperties;
        $cValue = $phpValue->cdata;
        $pMemoryWin32HandlePropertiesC = $cValue;
        $cValue = $this->exec('vkGetMemoryWin32HandlePropertiesKHR',
            $handleTypeC,
            $handleC,
            $pMemoryWin32HandlePropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryGetFdInfoKHR> $pGetFdInfo const VkMemoryGetFdInfoKHR*
     * @param \iggyvolz\vulkan\util\IntPointer $pFd int*
     * returns VkResult
     */
    public function getMemoryFdKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pGetFdInfo,
        \iggyvolz\vulkan\util\IntPointer $pFd,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pGetFdInfo;
        $cValue = $phpValue->cdata;
        $pGetFdInfoC = $cValue;
        $phpValue = $pFd;
        $cValue = $phpValue->cdata;
        $pFdC = $cValue;
        $cValue = $this->exec('vkGetMemoryFdKHR',
            $pGetFdInfoC,
            $pFdC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits $handleType VkExternalMemoryHandleTypeFlagBits
     * @param int $fd int
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryFdPropertiesKHR> $pMemoryFdProperties VkMemoryFdPropertiesKHR*
     * returns VkResult
     */
    public function getMemoryFdPropertiesKHR(
        \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits $handleType,
        int $fd,
        \iggyvolz\vulkan\util\ObjectPointer $pMemoryFdProperties,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $handleType;
        $cValue = $phpValue->value;
        $handleTypeC = $cValue;
        $phpValue = $fd;
        $cValue = $phpValue;
        $fdC = $cValue;
        $phpValue = $pMemoryFdProperties;
        $cValue = $phpValue->cdata;
        $pMemoryFdPropertiesC = $cValue;
        $cValue = $this->exec('vkGetMemoryFdPropertiesKHR',
            $handleTypeC,
            $fdC,
            $pMemoryFdPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryGetZirconHandleInfoFUCHSIA> $pGetZirconHandleInfo const VkMemoryGetZirconHandleInfoFUCHSIA*
     * @param \iggyvolz\vulkan\util\Pointer $pZirconHandle zx_handle_t*
     * returns VkResult
     */
    public function getMemoryZirconHandleFUCHSIA(
        \iggyvolz\vulkan\util\ObjectPointer $pGetZirconHandleInfo,
        \iggyvolz\vulkan\util\Pointer $pZirconHandle,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pGetZirconHandleInfo;
        $cValue = $phpValue->cdata;
        $pGetZirconHandleInfoC = $cValue;
        $phpValue = $pZirconHandle;
        $cValue = $phpValue->cdata;
        $pZirconHandleC = $cValue;
        $cValue = $this->exec('vkGetMemoryZirconHandleFUCHSIA',
            $pGetZirconHandleInfoC,
            $pZirconHandleC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits $handleType VkExternalMemoryHandleTypeFlagBits
     * @param int $zirconHandle zx_handle_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryZirconHandlePropertiesFUCHSIA> $pMemoryZirconHandleProperties VkMemoryZirconHandlePropertiesFUCHSIA*
     * returns VkResult
     */
    public function getMemoryZirconHandlePropertiesFUCHSIA(
        \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits $handleType,
        int $zirconHandle,
        \iggyvolz\vulkan\util\ObjectPointer $pMemoryZirconHandleProperties,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $handleType;
        $cValue = $phpValue->value;
        $handleTypeC = $cValue;
        $phpValue = $zirconHandle;
        $cValue = $phpValue;
        $zirconHandleC = $cValue;
        $phpValue = $pMemoryZirconHandleProperties;
        $cValue = $phpValue->cdata;
        $pMemoryZirconHandlePropertiesC = $cValue;
        $cValue = $this->exec('vkGetMemoryZirconHandlePropertiesFUCHSIA',
            $handleTypeC,
            $zirconHandleC,
            $pMemoryZirconHandlePropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryGetRemoteAddressInfoNV> $pMemoryGetRemoteAddressInfo const VkMemoryGetRemoteAddressInfoNV*
     * @param \iggyvolz\vulkan\util\Pointer $pAddress VkRemoteAddressNV*
     * returns VkResult
     */
    public function getMemoryRemoteAddressNV(
        \iggyvolz\vulkan\util\ObjectPointer $pMemoryGetRemoteAddressInfo,
        \iggyvolz\vulkan\util\Pointer $pAddress,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pMemoryGetRemoteAddressInfo;
        $cValue = $phpValue->cdata;
        $pMemoryGetRemoteAddressInfoC = $cValue;
        $phpValue = $pAddress;
        $cValue = $phpValue->cdata;
        $pAddressC = $cValue;
        $cValue = $this->exec('vkGetMemoryRemoteAddressNV',
            $pMemoryGetRemoteAddressInfoC,
            $pAddressC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryGetSciBufInfoNV> $pGetSciBufInfo const VkMemoryGetSciBufInfoNV*
     * @param \iggyvolz\vulkan\util\Pointer $pHandle NvSciBufObj*
     * returns VkResult
     */
    public function getMemorySciBufNV(
        \iggyvolz\vulkan\util\ObjectPointer $pGetSciBufInfo,
        \iggyvolz\vulkan\util\Pointer $pHandle,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pGetSciBufInfo;
        $cValue = $phpValue->cdata;
        $pGetSciBufInfoC = $cValue;
        $phpValue = $pHandle;
        $cValue = $phpValue->cdata;
        $pHandleC = $cValue;
        $cValue = $this->exec('vkGetMemorySciBufNV',
            $pGetSciBufInfoC,
            $pHandleC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSemaphoreGetWin32HandleInfoKHR> $pGetWin32HandleInfo const VkSemaphoreGetWin32HandleInfoKHR*
     * @param \iggyvolz\vulkan\util\Pointer $pHandle HANDLE*
     * returns VkResult
     */
    public function getSemaphoreWin32HandleKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pGetWin32HandleInfo,
        \iggyvolz\vulkan\util\Pointer $pHandle,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pGetWin32HandleInfo;
        $cValue = $phpValue->cdata;
        $pGetWin32HandleInfoC = $cValue;
        $phpValue = $pHandle;
        $cValue = $phpValue->cdata;
        $pHandleC = $cValue;
        $cValue = $this->exec('vkGetSemaphoreWin32HandleKHR',
            $pGetWin32HandleInfoC,
            $pHandleC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImportSemaphoreWin32HandleInfoKHR> $pImportSemaphoreWin32HandleInfo const VkImportSemaphoreWin32HandleInfoKHR*
     * returns VkResult
     */
    public function importSemaphoreWin32HandleKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pImportSemaphoreWin32HandleInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pImportSemaphoreWin32HandleInfo;
        $cValue = $phpValue->cdata;
        $pImportSemaphoreWin32HandleInfoC = $cValue;
        $cValue = $this->exec('vkImportSemaphoreWin32HandleKHR',
            $pImportSemaphoreWin32HandleInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSemaphoreGetFdInfoKHR> $pGetFdInfo const VkSemaphoreGetFdInfoKHR*
     * @param \iggyvolz\vulkan\util\IntPointer $pFd int*
     * returns VkResult
     */
    public function getSemaphoreFdKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pGetFdInfo,
        \iggyvolz\vulkan\util\IntPointer $pFd,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pGetFdInfo;
        $cValue = $phpValue->cdata;
        $pGetFdInfoC = $cValue;
        $phpValue = $pFd;
        $cValue = $phpValue->cdata;
        $pFdC = $cValue;
        $cValue = $this->exec('vkGetSemaphoreFdKHR',
            $pGetFdInfoC,
            $pFdC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImportSemaphoreFdInfoKHR> $pImportSemaphoreFdInfo const VkImportSemaphoreFdInfoKHR*
     * returns VkResult
     */
    public function importSemaphoreFdKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pImportSemaphoreFdInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pImportSemaphoreFdInfo;
        $cValue = $phpValue->cdata;
        $pImportSemaphoreFdInfoC = $cValue;
        $cValue = $this->exec('vkImportSemaphoreFdKHR',
            $pImportSemaphoreFdInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSemaphoreGetZirconHandleInfoFUCHSIA> $pGetZirconHandleInfo const VkSemaphoreGetZirconHandleInfoFUCHSIA*
     * @param \iggyvolz\vulkan\util\Pointer $pZirconHandle zx_handle_t*
     * returns VkResult
     */
    public function getSemaphoreZirconHandleFUCHSIA(
        \iggyvolz\vulkan\util\ObjectPointer $pGetZirconHandleInfo,
        \iggyvolz\vulkan\util\Pointer $pZirconHandle,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pGetZirconHandleInfo;
        $cValue = $phpValue->cdata;
        $pGetZirconHandleInfoC = $cValue;
        $phpValue = $pZirconHandle;
        $cValue = $phpValue->cdata;
        $pZirconHandleC = $cValue;
        $cValue = $this->exec('vkGetSemaphoreZirconHandleFUCHSIA',
            $pGetZirconHandleInfoC,
            $pZirconHandleC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImportSemaphoreZirconHandleInfoFUCHSIA> $pImportSemaphoreZirconHandleInfo const VkImportSemaphoreZirconHandleInfoFUCHSIA*
     * returns VkResult
     */
    public function importSemaphoreZirconHandleFUCHSIA(
        \iggyvolz\vulkan\util\ObjectPointer $pImportSemaphoreZirconHandleInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pImportSemaphoreZirconHandleInfo;
        $cValue = $phpValue->cdata;
        $pImportSemaphoreZirconHandleInfoC = $cValue;
        $cValue = $this->exec('vkImportSemaphoreZirconHandleFUCHSIA',
            $pImportSemaphoreZirconHandleInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkFenceGetWin32HandleInfoKHR> $pGetWin32HandleInfo const VkFenceGetWin32HandleInfoKHR*
     * @param \iggyvolz\vulkan\util\Pointer $pHandle HANDLE*
     * returns VkResult
     */
    public function getFenceWin32HandleKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pGetWin32HandleInfo,
        \iggyvolz\vulkan\util\Pointer $pHandle,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pGetWin32HandleInfo;
        $cValue = $phpValue->cdata;
        $pGetWin32HandleInfoC = $cValue;
        $phpValue = $pHandle;
        $cValue = $phpValue->cdata;
        $pHandleC = $cValue;
        $cValue = $this->exec('vkGetFenceWin32HandleKHR',
            $pGetWin32HandleInfoC,
            $pHandleC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImportFenceWin32HandleInfoKHR> $pImportFenceWin32HandleInfo const VkImportFenceWin32HandleInfoKHR*
     * returns VkResult
     */
    public function importFenceWin32HandleKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pImportFenceWin32HandleInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pImportFenceWin32HandleInfo;
        $cValue = $phpValue->cdata;
        $pImportFenceWin32HandleInfoC = $cValue;
        $cValue = $this->exec('vkImportFenceWin32HandleKHR',
            $pImportFenceWin32HandleInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkFenceGetFdInfoKHR> $pGetFdInfo const VkFenceGetFdInfoKHR*
     * @param \iggyvolz\vulkan\util\IntPointer $pFd int*
     * returns VkResult
     */
    public function getFenceFdKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pGetFdInfo,
        \iggyvolz\vulkan\util\IntPointer $pFd,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pGetFdInfo;
        $cValue = $phpValue->cdata;
        $pGetFdInfoC = $cValue;
        $phpValue = $pFd;
        $cValue = $phpValue->cdata;
        $pFdC = $cValue;
        $cValue = $this->exec('vkGetFenceFdKHR',
            $pGetFdInfoC,
            $pFdC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImportFenceFdInfoKHR> $pImportFenceFdInfo const VkImportFenceFdInfoKHR*
     * returns VkResult
     */
    public function importFenceFdKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pImportFenceFdInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pImportFenceFdInfo;
        $cValue = $phpValue->cdata;
        $pImportFenceFdInfoC = $cValue;
        $cValue = $this->exec('vkImportFenceFdKHR',
            $pImportFenceFdInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkFenceGetSciSyncInfoNV> $pGetSciSyncHandleInfo const VkFenceGetSciSyncInfoNV*
     * @param \iggyvolz\vulkan\util\Pointer $pHandle void*
     * returns VkResult
     */
    public function getFenceSciSyncFenceNV(
        \iggyvolz\vulkan\util\ObjectPointer $pGetSciSyncHandleInfo,
        \iggyvolz\vulkan\util\Pointer $pHandle,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pGetSciSyncHandleInfo;
        $cValue = $phpValue->cdata;
        $pGetSciSyncHandleInfoC = $cValue;
        $phpValue = $pHandle;
        $cValue = $phpValue->cdata;
        $pHandleC = $cValue;
        $cValue = $this->exec('vkGetFenceSciSyncFenceNV',
            $pGetSciSyncHandleInfoC,
            $pHandleC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkFenceGetSciSyncInfoNV> $pGetSciSyncHandleInfo const VkFenceGetSciSyncInfoNV*
     * @param \iggyvolz\vulkan\util\Pointer $pHandle void*
     * returns VkResult
     */
    public function getFenceSciSyncObjNV(
        \iggyvolz\vulkan\util\ObjectPointer $pGetSciSyncHandleInfo,
        \iggyvolz\vulkan\util\Pointer $pHandle,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pGetSciSyncHandleInfo;
        $cValue = $phpValue->cdata;
        $pGetSciSyncHandleInfoC = $cValue;
        $phpValue = $pHandle;
        $cValue = $phpValue->cdata;
        $pHandleC = $cValue;
        $cValue = $this->exec('vkGetFenceSciSyncObjNV',
            $pGetSciSyncHandleInfoC,
            $pHandleC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImportFenceSciSyncInfoNV> $pImportFenceSciSyncInfo const VkImportFenceSciSyncInfoNV*
     * returns VkResult
     */
    public function importFenceSciSyncFenceNV(
        \iggyvolz\vulkan\util\ObjectPointer $pImportFenceSciSyncInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pImportFenceSciSyncInfo;
        $cValue = $phpValue->cdata;
        $pImportFenceSciSyncInfoC = $cValue;
        $cValue = $this->exec('vkImportFenceSciSyncFenceNV',
            $pImportFenceSciSyncInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImportFenceSciSyncInfoNV> $pImportFenceSciSyncInfo const VkImportFenceSciSyncInfoNV*
     * returns VkResult
     */
    public function importFenceSciSyncObjNV(
        \iggyvolz\vulkan\util\ObjectPointer $pImportFenceSciSyncInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pImportFenceSciSyncInfo;
        $cValue = $phpValue->cdata;
        $pImportFenceSciSyncInfoC = $cValue;
        $cValue = $this->exec('vkImportFenceSciSyncObjNV',
            $pImportFenceSciSyncInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSemaphoreGetSciSyncInfoNV> $pGetSciSyncInfo const VkSemaphoreGetSciSyncInfoNV*
     * @param \iggyvolz\vulkan\util\Pointer $pHandle void*
     * returns VkResult
     */
    public function getSemaphoreSciSyncObjNV(
        \iggyvolz\vulkan\util\ObjectPointer $pGetSciSyncInfo,
        \iggyvolz\vulkan\util\Pointer $pHandle,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pGetSciSyncInfo;
        $cValue = $phpValue->cdata;
        $pGetSciSyncInfoC = $cValue;
        $phpValue = $pHandle;
        $cValue = $phpValue->cdata;
        $pHandleC = $cValue;
        $cValue = $this->exec('vkGetSemaphoreSciSyncObjNV',
            $pGetSciSyncInfoC,
            $pHandleC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImportSemaphoreSciSyncInfoNV> $pImportSemaphoreSciSyncInfo const VkImportSemaphoreSciSyncInfoNV*
     * returns VkResult
     */
    public function importSemaphoreSciSyncObjNV(
        \iggyvolz\vulkan\util\ObjectPointer $pImportSemaphoreSciSyncInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pImportSemaphoreSciSyncInfo;
        $cValue = $phpValue->cdata;
        $pImportSemaphoreSciSyncInfoC = $cValue;
        $cValue = $this->exec('vkImportSemaphoreSciSyncObjNV',
            $pImportSemaphoreSciSyncInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSemaphoreSciSyncPoolCreateInfoNV> $pCreateInfo const VkSemaphoreSciSyncPoolCreateInfoNV*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSemaphoreSciSyncPoolNV> $pSemaphorePool VkSemaphoreSciSyncPoolNV*
     * returns VkResult
     */
    public function createSemaphoreSciSyncPoolNV(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pSemaphorePool,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSemaphorePool;
        $cValue = $phpValue->cdata;
        $pSemaphorePoolC = $cValue;
        $cValue = $this->exec('vkCreateSemaphoreSciSyncPoolNV',
            $pCreateInfoC,
            $pAllocatorC,
            $pSemaphorePoolC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkSemaphoreSciSyncPoolNV $semaphorePool VkSemaphoreSciSyncPoolNV
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroySemaphoreSciSyncPoolNV(
        VkSemaphoreSciSyncPoolNV $semaphorePool,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $semaphorePool;
        $cValue = $phpValue->cdata;
        $semaphorePoolC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroySemaphoreSciSyncPoolNV',
            $semaphorePoolC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDisplayKHR $display VkDisplayKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplayPowerInfoEXT> $pDisplayPowerInfo const VkDisplayPowerInfoEXT*
     * returns VkResult
     */
    public function displayPowerControlEXT(
        VkDisplayKHR $display,
        \iggyvolz\vulkan\util\ObjectPointer $pDisplayPowerInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $display;
        $cValue = $phpValue->cdata;
        $displayC = $cValue;
        $phpValue = $pDisplayPowerInfo;
        $cValue = $phpValue->cdata;
        $pDisplayPowerInfoC = $cValue;
        $cValue = $this->exec('vkDisplayPowerControlEXT',
            $displayC,
            $pDisplayPowerInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDeviceEventInfoEXT> $pDeviceEventInfo const VkDeviceEventInfoEXT*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkFence> $pFence VkFence*
     * returns VkResult
     */
    public function registerDeviceEventEXT(
        \iggyvolz\vulkan\util\ObjectPointer $pDeviceEventInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pFence,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pDeviceEventInfo;
        $cValue = $phpValue->cdata;
        $pDeviceEventInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pFence;
        $cValue = $phpValue->cdata;
        $pFenceC = $cValue;
        $cValue = $this->exec('vkRegisterDeviceEventEXT',
            $pDeviceEventInfoC,
            $pAllocatorC,
            $pFenceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDisplayKHR $display VkDisplayKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplayEventInfoEXT> $pDisplayEventInfo const VkDisplayEventInfoEXT*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkFence> $pFence VkFence*
     * returns VkResult
     */
    public function registerDisplayEventEXT(
        VkDisplayKHR $display,
        \iggyvolz\vulkan\util\ObjectPointer $pDisplayEventInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pFence,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $display;
        $cValue = $phpValue->cdata;
        $displayC = $cValue;
        $phpValue = $pDisplayEventInfo;
        $cValue = $phpValue->cdata;
        $pDisplayEventInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pFence;
        $cValue = $phpValue->cdata;
        $pFenceC = $cValue;
        $cValue = $this->exec('vkRegisterDisplayEventEXT',
            $displayC,
            $pDisplayEventInfoC,
            $pAllocatorC,
            $pFenceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain VkSwapchainKHR
     * @param \iggyvolz\vulkan\enum\VkSurfaceCounterFlagBitsEXT $counter VkSurfaceCounterFlagBitsEXT
     * @param \iggyvolz\vulkan\util\IntPointer $pCounterValue uint64_t*
     * returns VkResult
     */
    public function getSwapchainCounterEXT(
        VkSwapchainKHR $swapchain,
        \iggyvolz\vulkan\enum\VkSurfaceCounterFlagBitsEXT $counter,
        \iggyvolz\vulkan\util\IntPointer $pCounterValue,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $swapchain;
        $cValue = $phpValue->cdata;
        $swapchainC = $cValue;
        $phpValue = $counter;
        $cValue = $phpValue->value;
        $counterC = $cValue;
        $phpValue = $pCounterValue;
        $cValue = $phpValue->cdata;
        $pCounterValueC = $cValue;
        $cValue = $this->exec('vkGetSwapchainCounterEXT',
            $swapchainC,
            $counterC,
            $pCounterValueC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param int $heapIndex uint32_t
     * @param int $localDeviceIndex uint32_t
     * @param int $remoteDeviceIndex uint32_t
     * @param \iggyvolz\vulkan\util\Pointer $pPeerMemoryFeatures VkPeerMemoryFeatureFlags*
     */
    public function getDeviceGroupPeerMemoryFeatures(
        int $heapIndex,
        int $localDeviceIndex,
        int $remoteDeviceIndex,
        \iggyvolz\vulkan\util\Pointer $pPeerMemoryFeatures,
    ): void
    {
        $phpValue = $heapIndex;
        $cValue = $phpValue;
        $heapIndexC = $cValue;
        $phpValue = $localDeviceIndex;
        $cValue = $phpValue;
        $localDeviceIndexC = $cValue;
        $phpValue = $remoteDeviceIndex;
        $cValue = $phpValue;
        $remoteDeviceIndexC = $cValue;
        $phpValue = $pPeerMemoryFeatures;
        $cValue = $phpValue->cdata;
        $pPeerMemoryFeaturesC = $cValue;
        $cValue = $this->exec('vkGetDeviceGroupPeerMemoryFeatures',
            $heapIndexC,
            $localDeviceIndexC,
            $remoteDeviceIndexC,
            $pPeerMemoryFeaturesC,
        );
    }

    /**
     * @param int $bindInfoCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBindBufferMemoryInfo> $pBindInfos const VkBindBufferMemoryInfo*
     * returns VkResult
     */
    public function bindBufferMemory2(
        int $bindInfoCount,
        \iggyvolz\vulkan\util\ObjectPointer $pBindInfos,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $bindInfoCount;
        $cValue = $phpValue;
        $bindInfoCountC = $cValue;
        $phpValue = $pBindInfos;
        $cValue = $phpValue->cdata;
        $pBindInfosC = $cValue;
        $cValue = $this->exec('vkBindBufferMemory2',
            $bindInfoCountC,
            $pBindInfosC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param int $bindInfoCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBindImageMemoryInfo> $pBindInfos const VkBindImageMemoryInfo*
     * returns VkResult
     */
    public function bindImageMemory2(
        int $bindInfoCount,
        \iggyvolz\vulkan\util\ObjectPointer $pBindInfos,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $bindInfoCount;
        $cValue = $phpValue;
        $bindInfoCountC = $cValue;
        $phpValue = $pBindInfos;
        $cValue = $phpValue->cdata;
        $pBindInfosC = $cValue;
        $cValue = $this->exec('vkBindImageMemory2',
            $bindInfoCountC,
            $pBindInfosC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDeviceGroupPresentCapabilitiesKHR> $pDeviceGroupPresentCapabilities VkDeviceGroupPresentCapabilitiesKHR*
     * returns VkResult
     */
    public function getDeviceGroupPresentCapabilitiesKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pDeviceGroupPresentCapabilities,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pDeviceGroupPresentCapabilities;
        $cValue = $phpValue->cdata;
        $pDeviceGroupPresentCapabilitiesC = $cValue;
        $cValue = $this->exec('vkGetDeviceGroupPresentCapabilitiesKHR',
            $pDeviceGroupPresentCapabilitiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkSurfaceKHR $surface VkSurfaceKHR
     * @param \iggyvolz\vulkan\util\Pointer $pModes VkDeviceGroupPresentModeFlagsKHR*
     * returns VkResult
     */
    public function getDeviceGroupSurfacePresentModesKHR(
        VkSurfaceKHR $surface,
        \iggyvolz\vulkan\util\Pointer $pModes,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $surface;
        $cValue = $phpValue->cdata;
        $surfaceC = $cValue;
        $phpValue = $pModes;
        $cValue = $phpValue->cdata;
        $pModesC = $cValue;
        $cValue = $this->exec('vkGetDeviceGroupSurfacePresentModesKHR',
            $surfaceC,
            $pModesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAcquireNextImageInfoKHR> $pAcquireInfo const VkAcquireNextImageInfoKHR*
     * @param \iggyvolz\vulkan\util\IntPointer $pImageIndex uint32_t*
     * returns VkResult
     */
    public function acquireNextImage2KHR(
        \iggyvolz\vulkan\util\ObjectPointer $pAcquireInfo,
        \iggyvolz\vulkan\util\IntPointer $pImageIndex,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pAcquireInfo;
        $cValue = $phpValue->cdata;
        $pAcquireInfoC = $cValue;
        $phpValue = $pImageIndex;
        $cValue = $phpValue->cdata;
        $pImageIndexC = $cValue;
        $cValue = $this->exec('vkAcquireNextImage2KHR',
            $pAcquireInfoC,
            $pImageIndexC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDescriptorUpdateTemplateCreateInfo> $pCreateInfo const VkDescriptorUpdateTemplateCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDescriptorUpdateTemplate> $pDescriptorUpdateTemplate VkDescriptorUpdateTemplate*
     * returns VkResult
     */
    public function createDescriptorUpdateTemplate(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pDescriptorUpdateTemplate,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pDescriptorUpdateTemplate;
        $cValue = $phpValue->cdata;
        $pDescriptorUpdateTemplateC = $cValue;
        $cValue = $this->exec('vkCreateDescriptorUpdateTemplate',
            $pCreateInfoC,
            $pAllocatorC,
            $pDescriptorUpdateTemplateC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDescriptorUpdateTemplate $descriptorUpdateTemplate VkDescriptorUpdateTemplate
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyDescriptorUpdateTemplate(
        VkDescriptorUpdateTemplate $descriptorUpdateTemplate,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $descriptorUpdateTemplate;
        $cValue = $phpValue->cdata;
        $descriptorUpdateTemplateC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyDescriptorUpdateTemplate',
            $descriptorUpdateTemplateC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDescriptorSet $descriptorSet VkDescriptorSet
     * @param \iggyvolz\vulkan\struct\VkDescriptorUpdateTemplate $descriptorUpdateTemplate VkDescriptorUpdateTemplate
     * @param \iggyvolz\vulkan\util\Pointer $pData const void*
     */
    public function updateDescriptorSetWithTemplate(
        VkDescriptorSet $descriptorSet,
        VkDescriptorUpdateTemplate $descriptorUpdateTemplate,
        \iggyvolz\vulkan\util\Pointer $pData,
    ): void
    {
        $phpValue = $descriptorSet;
        $cValue = $phpValue->cdata;
        $descriptorSetC = $cValue;
        $phpValue = $descriptorUpdateTemplate;
        $cValue = $phpValue->cdata;
        $descriptorUpdateTemplateC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $cValue = $this->exec('vkUpdateDescriptorSetWithTemplate',
            $descriptorSetC,
            $descriptorUpdateTemplateC,
            $pDataC,
        );
    }

    /**
     * @param int $swapchainCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSwapchainKHR> $pSwapchains const VkSwapchainKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkHdrMetadataEXT> $pMetadata const VkHdrMetadataEXT*
     */
    public function setHdrMetadataEXT(
        int $swapchainCount,
        \iggyvolz\vulkan\util\ObjectPointer $pSwapchains,
        \iggyvolz\vulkan\util\ObjectPointer $pMetadata,
    ): void
    {
        $phpValue = $swapchainCount;
        $cValue = $phpValue;
        $swapchainCountC = $cValue;
        $phpValue = $pSwapchains;
        $cValue = $phpValue->cdata;
        $pSwapchainsC = $cValue;
        $phpValue = $pMetadata;
        $cValue = $phpValue->cdata;
        $pMetadataC = $cValue;
        $cValue = $this->exec('vkSetHdrMetadataEXT',
            $swapchainCountC,
            $pSwapchainsC,
            $pMetadataC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain VkSwapchainKHR
     * returns VkResult
     */
    public function getSwapchainStatusKHR(VkSwapchainKHR $swapchain): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $swapchain;
        $cValue = $phpValue->cdata;
        $swapchainC = $cValue;
        $cValue = $this->exec('vkGetSwapchainStatusKHR',
            $swapchainC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain VkSwapchainKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRefreshCycleDurationGOOGLE> $pDisplayTimingProperties VkRefreshCycleDurationGOOGLE*
     * returns VkResult
     */
    public function getRefreshCycleDurationGOOGLE(
        VkSwapchainKHR $swapchain,
        \iggyvolz\vulkan\util\ObjectPointer $pDisplayTimingProperties,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $swapchain;
        $cValue = $phpValue->cdata;
        $swapchainC = $cValue;
        $phpValue = $pDisplayTimingProperties;
        $cValue = $phpValue->cdata;
        $pDisplayTimingPropertiesC = $cValue;
        $cValue = $this->exec('vkGetRefreshCycleDurationGOOGLE',
            $swapchainC,
            $pDisplayTimingPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain VkSwapchainKHR
     * @param \iggyvolz\vulkan\util\IntPointer $pPresentationTimingCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPastPresentationTimingGOOGLE> $pPresentationTimings VkPastPresentationTimingGOOGLE*
     * returns VkResult
     */
    public function getPastPresentationTimingGOOGLE(
        VkSwapchainKHR $swapchain,
        \iggyvolz\vulkan\util\IntPointer $pPresentationTimingCount,
        \iggyvolz\vulkan\util\ObjectPointer $pPresentationTimings,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $swapchain;
        $cValue = $phpValue->cdata;
        $swapchainC = $cValue;
        $phpValue = $pPresentationTimingCount;
        $cValue = $phpValue->cdata;
        $pPresentationTimingCountC = $cValue;
        $phpValue = $pPresentationTimings;
        $cValue = $phpValue->cdata;
        $pPresentationTimingsC = $cValue;
        $cValue = $this->exec('vkGetPastPresentationTimingGOOGLE',
            $swapchainC,
            $pPresentationTimingCountC,
            $pPresentationTimingsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBufferMemoryRequirementsInfo2> $pInfo const VkBufferMemoryRequirementsInfo2*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryRequirements2> $pMemoryRequirements VkMemoryRequirements2*
     */
    public function getBufferMemoryRequirements2(
        \iggyvolz\vulkan\util\ObjectPointer $pInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pMemoryRequirements,
    ): void
    {
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $phpValue = $pMemoryRequirements;
        $cValue = $phpValue->cdata;
        $pMemoryRequirementsC = $cValue;
        $cValue = $this->exec('vkGetBufferMemoryRequirements2',
            $pInfoC,
            $pMemoryRequirementsC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageMemoryRequirementsInfo2> $pInfo const VkImageMemoryRequirementsInfo2*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryRequirements2> $pMemoryRequirements VkMemoryRequirements2*
     */
    public function getImageMemoryRequirements2(
        \iggyvolz\vulkan\util\ObjectPointer $pInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pMemoryRequirements,
    ): void
    {
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $phpValue = $pMemoryRequirements;
        $cValue = $phpValue->cdata;
        $pMemoryRequirementsC = $cValue;
        $cValue = $this->exec('vkGetImageMemoryRequirements2',
            $pInfoC,
            $pMemoryRequirementsC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageSparseMemoryRequirementsInfo2> $pInfo const VkImageSparseMemoryRequirementsInfo2*
     * @param \iggyvolz\vulkan\util\IntPointer $pSparseMemoryRequirementCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSparseImageMemoryRequirements2> $pSparseMemoryRequirements VkSparseImageMemoryRequirements2*
     */
    public function getImageSparseMemoryRequirements2(
        \iggyvolz\vulkan\util\ObjectPointer $pInfo,
        \iggyvolz\vulkan\util\IntPointer $pSparseMemoryRequirementCount,
        \iggyvolz\vulkan\util\ObjectPointer $pSparseMemoryRequirements,
    ): void
    {
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $phpValue = $pSparseMemoryRequirementCount;
        $cValue = $phpValue->cdata;
        $pSparseMemoryRequirementCountC = $cValue;
        $phpValue = $pSparseMemoryRequirements;
        $cValue = $phpValue->cdata;
        $pSparseMemoryRequirementsC = $cValue;
        $cValue = $this->exec('vkGetImageSparseMemoryRequirements2',
            $pInfoC,
            $pSparseMemoryRequirementCountC,
            $pSparseMemoryRequirementsC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDeviceBufferMemoryRequirements> $pInfo const VkDeviceBufferMemoryRequirements*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryRequirements2> $pMemoryRequirements VkMemoryRequirements2*
     */
    public function getDeviceBufferMemoryRequirements(
        \iggyvolz\vulkan\util\ObjectPointer $pInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pMemoryRequirements,
    ): void
    {
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $phpValue = $pMemoryRequirements;
        $cValue = $phpValue->cdata;
        $pMemoryRequirementsC = $cValue;
        $cValue = $this->exec('vkGetDeviceBufferMemoryRequirements',
            $pInfoC,
            $pMemoryRequirementsC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDeviceImageMemoryRequirements> $pInfo const VkDeviceImageMemoryRequirements*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryRequirements2> $pMemoryRequirements VkMemoryRequirements2*
     */
    public function getDeviceImageMemoryRequirements(
        \iggyvolz\vulkan\util\ObjectPointer $pInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pMemoryRequirements,
    ): void
    {
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $phpValue = $pMemoryRequirements;
        $cValue = $phpValue->cdata;
        $pMemoryRequirementsC = $cValue;
        $cValue = $this->exec('vkGetDeviceImageMemoryRequirements',
            $pInfoC,
            $pMemoryRequirementsC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDeviceImageMemoryRequirements> $pInfo const VkDeviceImageMemoryRequirements*
     * @param \iggyvolz\vulkan\util\IntPointer $pSparseMemoryRequirementCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSparseImageMemoryRequirements2> $pSparseMemoryRequirements VkSparseImageMemoryRequirements2*
     */
    public function getDeviceImageSparseMemoryRequirements(
        \iggyvolz\vulkan\util\ObjectPointer $pInfo,
        \iggyvolz\vulkan\util\IntPointer $pSparseMemoryRequirementCount,
        \iggyvolz\vulkan\util\ObjectPointer $pSparseMemoryRequirements,
    ): void
    {
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $phpValue = $pSparseMemoryRequirementCount;
        $cValue = $phpValue->cdata;
        $pSparseMemoryRequirementCountC = $cValue;
        $phpValue = $pSparseMemoryRequirements;
        $cValue = $phpValue->cdata;
        $pSparseMemoryRequirementsC = $cValue;
        $cValue = $this->exec('vkGetDeviceImageSparseMemoryRequirements',
            $pInfoC,
            $pSparseMemoryRequirementCountC,
            $pSparseMemoryRequirementsC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSamplerYcbcrConversionCreateInfo> $pCreateInfo const VkSamplerYcbcrConversionCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSamplerYcbcrConversion> $pYcbcrConversion VkSamplerYcbcrConversion*
     * returns VkResult
     */
    public function createSamplerYcbcrConversion(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pYcbcrConversion,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pYcbcrConversion;
        $cValue = $phpValue->cdata;
        $pYcbcrConversionC = $cValue;
        $cValue = $this->exec('vkCreateSamplerYcbcrConversion',
            $pCreateInfoC,
            $pAllocatorC,
            $pYcbcrConversionC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkSamplerYcbcrConversion $ycbcrConversion VkSamplerYcbcrConversion
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroySamplerYcbcrConversion(
        VkSamplerYcbcrConversion $ycbcrConversion,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $ycbcrConversion;
        $cValue = $phpValue->cdata;
        $ycbcrConversionC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroySamplerYcbcrConversion',
            $ycbcrConversionC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDeviceQueueInfo2> $pQueueInfo const VkDeviceQueueInfo2*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkQueue> $pQueue VkQueue*
     */
    public function getDeviceQueue2(
        \iggyvolz\vulkan\util\ObjectPointer $pQueueInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pQueue,
    ): void
    {
        $phpValue = $pQueueInfo;
        $cValue = $phpValue->cdata;
        $pQueueInfoC = $cValue;
        $phpValue = $pQueue;
        $cValue = $phpValue->cdata;
        $pQueueC = $cValue;
        $cValue = $this->exec('vkGetDeviceQueue2',
            $pQueueInfoC,
            $pQueueC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkValidationCacheCreateInfoEXT> $pCreateInfo const VkValidationCacheCreateInfoEXT*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkValidationCacheEXT> $pValidationCache VkValidationCacheEXT*
     * returns VkResult
     */
    public function createValidationCacheEXT(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pValidationCache,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pValidationCache;
        $cValue = $phpValue->cdata;
        $pValidationCacheC = $cValue;
        $cValue = $this->exec('vkCreateValidationCacheEXT',
            $pCreateInfoC,
            $pAllocatorC,
            $pValidationCacheC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkValidationCacheEXT $validationCache VkValidationCacheEXT
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyValidationCacheEXT(
        VkValidationCacheEXT $validationCache,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $validationCache;
        $cValue = $phpValue->cdata;
        $validationCacheC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyValidationCacheEXT',
            $validationCacheC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkValidationCacheEXT $validationCache VkValidationCacheEXT
     * @param \iggyvolz\vulkan\util\IntPointer $pDataSize size_t*
     * @param \iggyvolz\vulkan\util\Pointer $pData void*
     * returns VkResult
     */
    public function getValidationCacheDataEXT(
        VkValidationCacheEXT $validationCache,
        \iggyvolz\vulkan\util\IntPointer $pDataSize,
        \iggyvolz\vulkan\util\Pointer $pData,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $validationCache;
        $cValue = $phpValue->cdata;
        $validationCacheC = $cValue;
        $phpValue = $pDataSize;
        $cValue = $phpValue->cdata;
        $pDataSizeC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $cValue = $this->exec('vkGetValidationCacheDataEXT',
            $validationCacheC,
            $pDataSizeC,
            $pDataC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkValidationCacheEXT $dstCache VkValidationCacheEXT
     * @param int $srcCacheCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkValidationCacheEXT> $pSrcCaches const VkValidationCacheEXT*
     * returns VkResult
     */
    public function mergeValidationCachesEXT(
        VkValidationCacheEXT $dstCache,
        int $srcCacheCount,
        \iggyvolz\vulkan\util\ObjectPointer $pSrcCaches,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $dstCache;
        $cValue = $phpValue->cdata;
        $dstCacheC = $cValue;
        $phpValue = $srcCacheCount;
        $cValue = $phpValue;
        $srcCacheCountC = $cValue;
        $phpValue = $pSrcCaches;
        $cValue = $phpValue->cdata;
        $pSrcCachesC = $cValue;
        $cValue = $this->exec('vkMergeValidationCachesEXT',
            $dstCacheC,
            $srcCacheCountC,
            $pSrcCachesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDescriptorSetLayoutCreateInfo> $pCreateInfo const VkDescriptorSetLayoutCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDescriptorSetLayoutSupport> $pSupport VkDescriptorSetLayoutSupport*
     */
    public function getDescriptorSetLayoutSupport(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pSupport,
    ): void
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pSupport;
        $cValue = $phpValue->cdata;
        $pSupportC = $cValue;
        $cValue = $this->exec('vkGetDescriptorSetLayoutSupport',
            $pCreateInfoC,
            $pSupportC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkFormat $format VkFormat
     * @param list<\iggyvolz\vulkan\enum\VkImageUsageFlagBits> $imageUsage VkImageUsageFlags
     * @param \iggyvolz\vulkan\util\IntPointer $grallocUsage int*
     * returns VkResult
     */
    public function getSwapchainGrallocUsageANDROID(
        \iggyvolz\vulkan\enum\VkFormat $format,
        array $imageUsage,
        \iggyvolz\vulkan\util\IntPointer $grallocUsage,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $format;
        $cValue = $phpValue->value;
        $formatC = $cValue;
        $phpValue = $imageUsage;
        $cValue = \iggyvolz\vulkan\enum\VkImageUsageFlagBits::toInt(...$phpValue);
        $imageUsageC = $cValue;
        $phpValue = $grallocUsage;
        $cValue = $phpValue->cdata;
        $grallocUsageC = $cValue;
        $cValue = $this->exec('vkGetSwapchainGrallocUsageANDROID',
            $formatC,
            $imageUsageC,
            $grallocUsageC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkFormat $format VkFormat
     * @param list<\iggyvolz\vulkan\enum\VkImageUsageFlagBits> $imageUsage VkImageUsageFlags
     * @param list<\iggyvolz\vulkan\enum\VkSwapchainImageUsageFlagBitsANDROID> $swapchainImageUsage VkSwapchainImageUsageFlagsANDROID
     * @param \iggyvolz\vulkan\util\IntPointer $grallocConsumerUsage uint64_t*
     * @param \iggyvolz\vulkan\util\IntPointer $grallocProducerUsage uint64_t*
     * returns VkResult
     */
    public function getSwapchainGrallocUsage2ANDROID(
        \iggyvolz\vulkan\enum\VkFormat $format,
        array $imageUsage,
        array $swapchainImageUsage,
        \iggyvolz\vulkan\util\IntPointer $grallocConsumerUsage,
        \iggyvolz\vulkan\util\IntPointer $grallocProducerUsage,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $format;
        $cValue = $phpValue->value;
        $formatC = $cValue;
        $phpValue = $imageUsage;
        $cValue = \iggyvolz\vulkan\enum\VkImageUsageFlagBits::toInt(...$phpValue);
        $imageUsageC = $cValue;
        $phpValue = $swapchainImageUsage;
        $cValue = \iggyvolz\vulkan\enum\VkSwapchainImageUsageFlagBitsANDROID::toInt(...$phpValue);
        $swapchainImageUsageC = $cValue;
        $phpValue = $grallocConsumerUsage;
        $cValue = $phpValue->cdata;
        $grallocConsumerUsageC = $cValue;
        $phpValue = $grallocProducerUsage;
        $cValue = $phpValue->cdata;
        $grallocProducerUsageC = $cValue;
        $cValue = $this->exec('vkGetSwapchainGrallocUsage2ANDROID',
            $formatC,
            $imageUsageC,
            $swapchainImageUsageC,
            $grallocConsumerUsageC,
            $grallocProducerUsageC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkImage $image VkImage
     * @param int $nativeFenceFd int
     * @param \iggyvolz\vulkan\struct\VkSemaphore $semaphore VkSemaphore
     * @param \iggyvolz\vulkan\struct\VkFence $fence VkFence
     * returns VkResult
     */
    public function acquireImageANDROID(
        VkImage $image,
        int $nativeFenceFd,
        VkSemaphore $semaphore,
        VkFence $fence,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $image;
        $cValue = $phpValue->cdata;
        $imageC = $cValue;
        $phpValue = $nativeFenceFd;
        $cValue = $phpValue;
        $nativeFenceFdC = $cValue;
        $phpValue = $semaphore;
        $cValue = $phpValue->cdata;
        $semaphoreC = $cValue;
        $phpValue = $fence;
        $cValue = $phpValue->cdata;
        $fenceC = $cValue;
        $cValue = $this->exec('vkAcquireImageANDROID',
            $imageC,
            $nativeFenceFdC,
            $semaphoreC,
            $fenceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPipeline $pipeline VkPipeline
     * @param \iggyvolz\vulkan\enum\VkShaderStageFlagBits $shaderStage VkShaderStageFlagBits
     * @param \iggyvolz\vulkan\enum\VkShaderInfoTypeAMD $infoType VkShaderInfoTypeAMD
     * @param \iggyvolz\vulkan\util\IntPointer $pInfoSize size_t*
     * @param \iggyvolz\vulkan\util\Pointer $pInfo void*
     * returns VkResult
     */
    public function getShaderInfoAMD(
        VkPipeline $pipeline,
        \iggyvolz\vulkan\enum\VkShaderStageFlagBits $shaderStage,
        \iggyvolz\vulkan\enum\VkShaderInfoTypeAMD $infoType,
        \iggyvolz\vulkan\util\IntPointer $pInfoSize,
        \iggyvolz\vulkan\util\Pointer $pInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pipeline;
        $cValue = $phpValue->cdata;
        $pipelineC = $cValue;
        $phpValue = $shaderStage;
        $cValue = $phpValue->value;
        $shaderStageC = $cValue;
        $phpValue = $infoType;
        $cValue = $phpValue->value;
        $infoTypeC = $cValue;
        $phpValue = $pInfoSize;
        $cValue = $phpValue->cdata;
        $pInfoSizeC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->exec('vkGetShaderInfoAMD',
            $pipelineC,
            $shaderStageC,
            $infoTypeC,
            $pInfoSizeC,
            $pInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkSwapchainKHR $swapChain VkSwapchainKHR
     * @param bool $localDimmingEnable VkBool32
     */
    public function setLocalDimmingAMD(VkSwapchainKHR $swapChain, bool $localDimmingEnable): void
    {
        $phpValue = $swapChain;
        $cValue = $phpValue->cdata;
        $swapChainC = $cValue;
        $phpValue = $localDimmingEnable;
        $cValue = $phpValue ? 1 : 0;
        $localDimmingEnableC = $cValue;
        $cValue = $this->exec('vkSetLocalDimmingAMD',
            $swapChainC,
            $localDimmingEnableC,
        );
    }

    /**
     * @param int $timestampCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCalibratedTimestampInfoKHR> $pTimestampInfos const VkCalibratedTimestampInfoKHR*
     * @param \iggyvolz\vulkan\util\IntPointer $pTimestamps uint64_t*
     * @param \iggyvolz\vulkan\util\IntPointer $pMaxDeviation uint64_t*
     * returns VkResult
     */
    public function getCalibratedTimestampsKHR(
        int $timestampCount,
        \iggyvolz\vulkan\util\ObjectPointer $pTimestampInfos,
        \iggyvolz\vulkan\util\IntPointer $pTimestamps,
        \iggyvolz\vulkan\util\IntPointer $pMaxDeviation,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $timestampCount;
        $cValue = $phpValue;
        $timestampCountC = $cValue;
        $phpValue = $pTimestampInfos;
        $cValue = $phpValue->cdata;
        $pTimestampInfosC = $cValue;
        $phpValue = $pTimestamps;
        $cValue = $phpValue->cdata;
        $pTimestampsC = $cValue;
        $phpValue = $pMaxDeviation;
        $cValue = $phpValue->cdata;
        $pMaxDeviationC = $cValue;
        $cValue = $this->exec('vkGetCalibratedTimestampsKHR',
            $timestampCountC,
            $pTimestampInfosC,
            $pTimestampsC,
            $pMaxDeviationC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDebugUtilsObjectNameInfoEXT> $pNameInfo const VkDebugUtilsObjectNameInfoEXT*
     * returns VkResult
     */
    public function setDebugUtilsObjectNameEXT(
        \iggyvolz\vulkan\util\ObjectPointer $pNameInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pNameInfo;
        $cValue = $phpValue->cdata;
        $pNameInfoC = $cValue;
        $cValue = $this->exec('vkSetDebugUtilsObjectNameEXT',
            $pNameInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDebugUtilsObjectTagInfoEXT> $pTagInfo const VkDebugUtilsObjectTagInfoEXT*
     * returns VkResult
     */
    public function setDebugUtilsObjectTagEXT(
        \iggyvolz\vulkan\util\ObjectPointer $pTagInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pTagInfo;
        $cValue = $phpValue->cdata;
        $pTagInfoC = $cValue;
        $cValue = $this->exec('vkSetDebugUtilsObjectTagEXT',
            $pTagInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits $handleType VkExternalMemoryHandleTypeFlagBits
     * @param \iggyvolz\vulkan\util\Pointer $pHostPointer const void*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryHostPointerPropertiesEXT> $pMemoryHostPointerProperties VkMemoryHostPointerPropertiesEXT*
     * returns VkResult
     */
    public function getMemoryHostPointerPropertiesEXT(
        \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits $handleType,
        \iggyvolz\vulkan\util\Pointer $pHostPointer,
        \iggyvolz\vulkan\util\ObjectPointer $pMemoryHostPointerProperties,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $handleType;
        $cValue = $phpValue->value;
        $handleTypeC = $cValue;
        $phpValue = $pHostPointer;
        $cValue = $phpValue->cdata;
        $pHostPointerC = $cValue;
        $phpValue = $pMemoryHostPointerProperties;
        $cValue = $phpValue->cdata;
        $pMemoryHostPointerPropertiesC = $cValue;
        $cValue = $this->exec('vkGetMemoryHostPointerPropertiesEXT',
            $handleTypeC,
            $pHostPointerC,
            $pMemoryHostPointerPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRenderPassCreateInfo2> $pCreateInfo const VkRenderPassCreateInfo2*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRenderPass> $pRenderPass VkRenderPass*
     * returns VkResult
     */
    public function createRenderPass2(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pRenderPass,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pRenderPass;
        $cValue = $phpValue->cdata;
        $pRenderPassC = $cValue;
        $cValue = $this->exec('vkCreateRenderPass2',
            $pCreateInfoC,
            $pAllocatorC,
            $pRenderPassC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkSemaphore $semaphore VkSemaphore
     * @param \iggyvolz\vulkan\util\IntPointer $pValue uint64_t*
     * returns VkResult
     */
    public function getSemaphoreCounterValue(
        VkSemaphore $semaphore,
        \iggyvolz\vulkan\util\IntPointer $pValue,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $semaphore;
        $cValue = $phpValue->cdata;
        $semaphoreC = $cValue;
        $phpValue = $pValue;
        $cValue = $phpValue->cdata;
        $pValueC = $cValue;
        $cValue = $this->exec('vkGetSemaphoreCounterValue',
            $semaphoreC,
            $pValueC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSemaphoreWaitInfo> $pWaitInfo const VkSemaphoreWaitInfo*
     * @param int $timeout uint64_t
     * returns VkResult
     */
    public function waitSemaphores(
        \iggyvolz\vulkan\util\ObjectPointer $pWaitInfo,
        int $timeout,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pWaitInfo;
        $cValue = $phpValue->cdata;
        $pWaitInfoC = $cValue;
        $phpValue = $timeout;
        $cValue = $phpValue;
        $timeoutC = $cValue;
        $cValue = $this->exec('vkWaitSemaphores',
            $pWaitInfoC,
            $timeoutC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSemaphoreSignalInfo> $pSignalInfo const VkSemaphoreSignalInfo*
     * returns VkResult
     */
    public function signalSemaphore(\iggyvolz\vulkan\util\ObjectPointer $pSignalInfo): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pSignalInfo;
        $cValue = $phpValue->cdata;
        $pSignalInfoC = $cValue;
        $cValue = $this->exec('vkSignalSemaphore',
            $pSignalInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\Pointer $buffer const struct AHardwareBuffer*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAndroidHardwareBufferPropertiesANDROID> $pProperties VkAndroidHardwareBufferPropertiesANDROID*
     * returns VkResult
     */
    public function getAndroidHardwareBufferPropertiesANDROID(
        \iggyvolz\vulkan\util\Pointer $buffer,
        \iggyvolz\vulkan\util\ObjectPointer $pProperties,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $buffer;
        $cValue = $phpValue->cdata;
        $bufferC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->exec('vkGetAndroidHardwareBufferPropertiesANDROID',
            $bufferC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryGetAndroidHardwareBufferInfoANDROID> $pInfo const VkMemoryGetAndroidHardwareBufferInfoANDROID*
     * @param \iggyvolz\vulkan\util\Pointer $pBuffer struct AHardwareBuffer**
     * returns VkResult
     */
    public function getMemoryAndroidHardwareBufferANDROID(
        \iggyvolz\vulkan\util\ObjectPointer $pInfo,
        \iggyvolz\vulkan\util\Pointer $pBuffer,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $phpValue = $pBuffer;
        $cValue = $phpValue->cdata;
        $pBufferC = $cValue;
        $cValue = $this->exec('vkGetMemoryAndroidHardwareBufferANDROID',
            $pInfoC,
            $pBufferC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPipeline $pipeline VkPipeline
     * @param int $shader uint32_t
     * returns VkResult
     */
    public function compileDeferredNV(VkPipeline $pipeline, int $shader): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pipeline;
        $cValue = $phpValue->cdata;
        $pipelineC = $cValue;
        $phpValue = $shader;
        $cValue = $phpValue;
        $shaderC = $cValue;
        $cValue = $this->exec('vkCompileDeferredNV',
            $pipelineC,
            $shaderC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAccelerationStructureCreateInfoNV> $pCreateInfo const VkAccelerationStructureCreateInfoNV*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAccelerationStructureNV> $pAccelerationStructure VkAccelerationStructureNV*
     * returns VkResult
     */
    public function createAccelerationStructureNV(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pAccelerationStructure,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pAccelerationStructure;
        $cValue = $phpValue->cdata;
        $pAccelerationStructureC = $cValue;
        $cValue = $this->exec('vkCreateAccelerationStructureNV',
            $pCreateInfoC,
            $pAllocatorC,
            $pAccelerationStructureC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkAccelerationStructureKHR $accelerationStructure VkAccelerationStructureKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyAccelerationStructureKHR(
        VkAccelerationStructureKHR $accelerationStructure,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $accelerationStructure;
        $cValue = $phpValue->cdata;
        $accelerationStructureC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyAccelerationStructureKHR',
            $accelerationStructureC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkAccelerationStructureNV $accelerationStructure VkAccelerationStructureNV
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyAccelerationStructureNV(
        VkAccelerationStructureNV $accelerationStructure,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $accelerationStructure;
        $cValue = $phpValue->cdata;
        $accelerationStructureC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyAccelerationStructureNV',
            $accelerationStructureC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAccelerationStructureMemoryRequirementsInfoNV> $pInfo const VkAccelerationStructureMemoryRequirementsInfoNV*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryRequirements2KHR> $pMemoryRequirements VkMemoryRequirements2KHR*
     */
    public function getAccelerationStructureMemoryRequirementsNV(
        \iggyvolz\vulkan\util\ObjectPointer $pInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pMemoryRequirements,
    ): void
    {
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $phpValue = $pMemoryRequirements;
        $cValue = $phpValue->cdata;
        $pMemoryRequirementsC = $cValue;
        $cValue = $this->exec('vkGetAccelerationStructureMemoryRequirementsNV',
            $pInfoC,
            $pMemoryRequirementsC,
        );
    }

    /**
     * @param int $bindInfoCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBindAccelerationStructureMemoryInfoNV> $pBindInfos const VkBindAccelerationStructureMemoryInfoNV*
     * returns VkResult
     */
    public function bindAccelerationStructureMemoryNV(
        int $bindInfoCount,
        \iggyvolz\vulkan\util\ObjectPointer $pBindInfos,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $bindInfoCount;
        $cValue = $phpValue;
        $bindInfoCountC = $cValue;
        $phpValue = $pBindInfos;
        $cValue = $phpValue->cdata;
        $pBindInfosC = $cValue;
        $cValue = $this->exec('vkBindAccelerationStructureMemoryNV',
            $bindInfoCountC,
            $pBindInfosC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation VkDeferredOperationKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyAccelerationStructureInfoKHR> $pInfo const VkCopyAccelerationStructureInfoKHR*
     * returns VkResult
     */
    public function copyAccelerationStructureKHR(
        VkDeferredOperationKHR $deferredOperation,
        \iggyvolz\vulkan\util\ObjectPointer $pInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $deferredOperation;
        $cValue = $phpValue->cdata;
        $deferredOperationC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->exec('vkCopyAccelerationStructureKHR',
            $deferredOperationC,
            $pInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation VkDeferredOperationKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyAccelerationStructureToMemoryInfoKHR> $pInfo const VkCopyAccelerationStructureToMemoryInfoKHR*
     * returns VkResult
     */
    public function copyAccelerationStructureToMemoryKHR(
        VkDeferredOperationKHR $deferredOperation,
        \iggyvolz\vulkan\util\ObjectPointer $pInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $deferredOperation;
        $cValue = $phpValue->cdata;
        $deferredOperationC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->exec('vkCopyAccelerationStructureToMemoryKHR',
            $deferredOperationC,
            $pInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation VkDeferredOperationKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyMemoryToAccelerationStructureInfoKHR> $pInfo const VkCopyMemoryToAccelerationStructureInfoKHR*
     * returns VkResult
     */
    public function copyMemoryToAccelerationStructureKHR(
        VkDeferredOperationKHR $deferredOperation,
        \iggyvolz\vulkan\util\ObjectPointer $pInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $deferredOperation;
        $cValue = $phpValue->cdata;
        $deferredOperationC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->exec('vkCopyMemoryToAccelerationStructureKHR',
            $deferredOperationC,
            $pInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param int $accelerationStructureCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAccelerationStructureKHR> $pAccelerationStructures const VkAccelerationStructureKHR*
     * @param \iggyvolz\vulkan\enum\VkQueryType $queryType VkQueryType
     * @param int $dataSize size_t
     * @param \iggyvolz\vulkan\util\Pointer $pData void*
     * @param int $stride size_t
     * returns VkResult
     */
    public function writeAccelerationStructuresPropertiesKHR(
        int $accelerationStructureCount,
        \iggyvolz\vulkan\util\ObjectPointer $pAccelerationStructures,
        \iggyvolz\vulkan\enum\VkQueryType $queryType,
        int $dataSize,
        \iggyvolz\vulkan\util\Pointer $pData,
        int $stride,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $accelerationStructureCount;
        $cValue = $phpValue;
        $accelerationStructureCountC = $cValue;
        $phpValue = $pAccelerationStructures;
        $cValue = $phpValue->cdata;
        $pAccelerationStructuresC = $cValue;
        $phpValue = $queryType;
        $cValue = $phpValue->value;
        $queryTypeC = $cValue;
        $phpValue = $dataSize;
        $cValue = $phpValue;
        $dataSizeC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $phpValue = $stride;
        $cValue = $phpValue;
        $strideC = $cValue;
        $cValue = $this->exec('vkWriteAccelerationStructuresPropertiesKHR',
            $accelerationStructureCountC,
            $pAccelerationStructuresC,
            $queryTypeC,
            $dataSizeC,
            $pDataC,
            $strideC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPipeline $pipeline VkPipeline
     * @param int $firstGroup uint32_t
     * @param int $groupCount uint32_t
     * @param int $dataSize size_t
     * @param \iggyvolz\vulkan\util\Pointer $pData void*
     * returns VkResult
     */
    public function getRayTracingShaderGroupHandlesKHR(
        VkPipeline $pipeline,
        int $firstGroup,
        int $groupCount,
        int $dataSize,
        \iggyvolz\vulkan\util\Pointer $pData,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pipeline;
        $cValue = $phpValue->cdata;
        $pipelineC = $cValue;
        $phpValue = $firstGroup;
        $cValue = $phpValue;
        $firstGroupC = $cValue;
        $phpValue = $groupCount;
        $cValue = $phpValue;
        $groupCountC = $cValue;
        $phpValue = $dataSize;
        $cValue = $phpValue;
        $dataSizeC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $cValue = $this->exec('vkGetRayTracingShaderGroupHandlesKHR',
            $pipelineC,
            $firstGroupC,
            $groupCountC,
            $dataSizeC,
            $pDataC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPipeline $pipeline VkPipeline
     * @param int $firstGroup uint32_t
     * @param int $groupCount uint32_t
     * @param int $dataSize size_t
     * @param \iggyvolz\vulkan\util\Pointer $pData void*
     * returns VkResult
     */
    public function getRayTracingCaptureReplayShaderGroupHandlesKHR(
        VkPipeline $pipeline,
        int $firstGroup,
        int $groupCount,
        int $dataSize,
        \iggyvolz\vulkan\util\Pointer $pData,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pipeline;
        $cValue = $phpValue->cdata;
        $pipelineC = $cValue;
        $phpValue = $firstGroup;
        $cValue = $phpValue;
        $firstGroupC = $cValue;
        $phpValue = $groupCount;
        $cValue = $phpValue;
        $groupCountC = $cValue;
        $phpValue = $dataSize;
        $cValue = $phpValue;
        $dataSizeC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $cValue = $this->exec('vkGetRayTracingCaptureReplayShaderGroupHandlesKHR',
            $pipelineC,
            $firstGroupC,
            $groupCountC,
            $dataSizeC,
            $pDataC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkAccelerationStructureNV $accelerationStructure VkAccelerationStructureNV
     * @param int $dataSize size_t
     * @param \iggyvolz\vulkan\util\Pointer $pData void*
     * returns VkResult
     */
    public function getAccelerationStructureHandleNV(
        VkAccelerationStructureNV $accelerationStructure,
        int $dataSize,
        \iggyvolz\vulkan\util\Pointer $pData,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $accelerationStructure;
        $cValue = $phpValue->cdata;
        $accelerationStructureC = $cValue;
        $phpValue = $dataSize;
        $cValue = $phpValue;
        $dataSizeC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $cValue = $this->exec('vkGetAccelerationStructureHandleNV',
            $accelerationStructureC,
            $dataSizeC,
            $pDataC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPipelineCache $pipelineCache VkPipelineCache
     * @param int $createInfoCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRayTracingPipelineCreateInfoNV> $pCreateInfos const VkRayTracingPipelineCreateInfoNV*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipeline> $pPipelines VkPipeline*
     * returns VkResult
     */
    public function createRayTracingPipelinesNV(
        VkPipelineCache $pipelineCache,
        int $createInfoCount,
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfos,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pPipelines,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pipelineCache;
        $cValue = $phpValue->cdata;
        $pipelineCacheC = $cValue;
        $phpValue = $createInfoCount;
        $cValue = $phpValue;
        $createInfoCountC = $cValue;
        $phpValue = $pCreateInfos;
        $cValue = $phpValue->cdata;
        $pCreateInfosC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pPipelines;
        $cValue = $phpValue->cdata;
        $pPipelinesC = $cValue;
        $cValue = $this->exec('vkCreateRayTracingPipelinesNV',
            $pipelineCacheC,
            $createInfoCountC,
            $pCreateInfosC,
            $pAllocatorC,
            $pPipelinesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation VkDeferredOperationKHR
     * @param \iggyvolz\vulkan\struct\VkPipelineCache $pipelineCache VkPipelineCache
     * @param int $createInfoCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRayTracingPipelineCreateInfoKHR> $pCreateInfos const VkRayTracingPipelineCreateInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipeline> $pPipelines VkPipeline*
     * returns VkResult
     */
    public function createRayTracingPipelinesKHR(
        VkDeferredOperationKHR $deferredOperation,
        VkPipelineCache $pipelineCache,
        int $createInfoCount,
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfos,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pPipelines,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $deferredOperation;
        $cValue = $phpValue->cdata;
        $deferredOperationC = $cValue;
        $phpValue = $pipelineCache;
        $cValue = $phpValue->cdata;
        $pipelineCacheC = $cValue;
        $phpValue = $createInfoCount;
        $cValue = $phpValue;
        $createInfoCountC = $cValue;
        $phpValue = $pCreateInfos;
        $cValue = $phpValue->cdata;
        $pCreateInfosC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pPipelines;
        $cValue = $phpValue->cdata;
        $pPipelinesC = $cValue;
        $cValue = $this->exec('vkCreateRayTracingPipelinesKHR',
            $deferredOperationC,
            $pipelineCacheC,
            $createInfoCountC,
            $pCreateInfosC,
            $pAllocatorC,
            $pPipelinesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAccelerationStructureVersionInfoKHR> $pVersionInfo const VkAccelerationStructureVersionInfoKHR*
     * @param \iggyvolz\vulkan\util\Pointer $pCompatibility VkAccelerationStructureCompatibilityKHR*
     */
    public function getDeviceAccelerationStructureCompatibilityKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pVersionInfo,
        \iggyvolz\vulkan\util\Pointer $pCompatibility,
    ): void
    {
        $phpValue = $pVersionInfo;
        $cValue = $phpValue->cdata;
        $pVersionInfoC = $cValue;
        $phpValue = $pCompatibility;
        $cValue = $phpValue->cdata;
        $pCompatibilityC = $cValue;
        $cValue = $this->exec('vkGetDeviceAccelerationStructureCompatibilityKHR',
            $pVersionInfoC,
            $pCompatibilityC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPipeline $pipeline VkPipeline
     * @param int $group uint32_t
     * @param \iggyvolz\vulkan\enum\VkShaderGroupShaderKHR $groupShader VkShaderGroupShaderKHR
     * returns VkDeviceSize
     */
    public function getRayTracingShaderGroupStackSizeKHR(
        VkPipeline $pipeline,
        int $group,
        \iggyvolz\vulkan\enum\VkShaderGroupShaderKHR $groupShader,
    ): int
    {
        $phpValue = $pipeline;
        $cValue = $phpValue->cdata;
        $pipelineC = $cValue;
        $phpValue = $group;
        $cValue = $phpValue;
        $groupC = $cValue;
        $phpValue = $groupShader;
        $cValue = $phpValue->value;
        $groupShaderC = $cValue;
        $cValue = $this->exec('vkGetRayTracingShaderGroupStackSizeKHR',
            $pipelineC,
            $groupC,
            $groupShaderC,
        );
        $phpValue = $cValue;
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageViewHandleInfoNVX> $pInfo const VkImageViewHandleInfoNVX*
     * returns uint32_t
     */
    public function getImageViewHandleNVX(\iggyvolz\vulkan\util\ObjectPointer $pInfo): int
    {
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->exec('vkGetImageViewHandleNVX',
            $pInfoC,
        );
        $phpValue = $cValue;
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkImageView $imageView VkImageView
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageViewAddressPropertiesNVX> $pProperties VkImageViewAddressPropertiesNVX*
     * returns VkResult
     */
    public function getImageViewAddressNVX(
        VkImageView $imageView,
        \iggyvolz\vulkan\util\ObjectPointer $pProperties,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $imageView;
        $cValue = $phpValue->cdata;
        $imageViewC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->exec('vkGetImageViewAddressNVX',
            $imageViewC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceSurfaceInfo2KHR> $pSurfaceInfo const VkPhysicalDeviceSurfaceInfo2KHR*
     * @param \iggyvolz\vulkan\util\Pointer $pModes VkDeviceGroupPresentModeFlagsKHR*
     * returns VkResult
     */
    public function getDeviceGroupSurfacePresentModes2EXT(
        \iggyvolz\vulkan\util\ObjectPointer $pSurfaceInfo,
        \iggyvolz\vulkan\util\Pointer $pModes,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pSurfaceInfo;
        $cValue = $phpValue->cdata;
        $pSurfaceInfoC = $cValue;
        $phpValue = $pModes;
        $cValue = $phpValue->cdata;
        $pModesC = $cValue;
        $cValue = $this->exec('vkGetDeviceGroupSurfacePresentModes2EXT',
            $pSurfaceInfoC,
            $pModesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain VkSwapchainKHR
     * returns VkResult
     */
    public function acquireFullScreenExclusiveModeEXT(VkSwapchainKHR $swapchain): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $swapchain;
        $cValue = $phpValue->cdata;
        $swapchainC = $cValue;
        $cValue = $this->exec('vkAcquireFullScreenExclusiveModeEXT',
            $swapchainC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain VkSwapchainKHR
     * returns VkResult
     */
    public function releaseFullScreenExclusiveModeEXT(VkSwapchainKHR $swapchain): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $swapchain;
        $cValue = $phpValue->cdata;
        $swapchainC = $cValue;
        $cValue = $this->exec('vkReleaseFullScreenExclusiveModeEXT',
            $swapchainC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAcquireProfilingLockInfoKHR> $pInfo const VkAcquireProfilingLockInfoKHR*
     * returns VkResult
     */
    public function acquireProfilingLockKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->exec('vkAcquireProfilingLockKHR',
            $pInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    public function releaseProfilingLockKHR(): void
    {
        $cValue = $this->exec('vkReleaseProfilingLockKHR',
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkImage $image VkImage
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageDrmFormatModifierPropertiesEXT> $pProperties VkImageDrmFormatModifierPropertiesEXT*
     * returns VkResult
     */
    public function getImageDrmFormatModifierPropertiesEXT(
        VkImage $image,
        \iggyvolz\vulkan\util\ObjectPointer $pProperties,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $image;
        $cValue = $phpValue->cdata;
        $imageC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->exec('vkGetImageDrmFormatModifierPropertiesEXT',
            $imageC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBufferDeviceAddressInfo> $pInfo const VkBufferDeviceAddressInfo*
     * returns uint64_t
     */
    public function getBufferOpaqueCaptureAddress(\iggyvolz\vulkan\util\ObjectPointer $pInfo): int
    {
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->exec('vkGetBufferOpaqueCaptureAddress',
            $pInfoC,
        );
        $phpValue = $cValue;
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBufferDeviceAddressInfo> $pInfo const VkBufferDeviceAddressInfo*
     * returns VkDeviceAddress
     */
    public function getBufferDeviceAddress(\iggyvolz\vulkan\util\ObjectPointer $pInfo): int
    {
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->exec('vkGetBufferDeviceAddress',
            $pInfoC,
        );
        $phpValue = $cValue;
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkInitializePerformanceApiInfoINTEL> $pInitializeInfo const VkInitializePerformanceApiInfoINTEL*
     * returns VkResult
     */
    public function initializePerformanceApiINTEL(
        \iggyvolz\vulkan\util\ObjectPointer $pInitializeInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pInitializeInfo;
        $cValue = $phpValue->cdata;
        $pInitializeInfoC = $cValue;
        $cValue = $this->exec('vkInitializePerformanceApiINTEL',
            $pInitializeInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    public function uninitializePerformanceApiINTEL(): void
    {
        $cValue = $this->exec('vkUninitializePerformanceApiINTEL',
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPerformanceConfigurationAcquireInfoINTEL> $pAcquireInfo const VkPerformanceConfigurationAcquireInfoINTEL*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPerformanceConfigurationINTEL> $pConfiguration VkPerformanceConfigurationINTEL*
     * returns VkResult
     */
    public function acquirePerformanceConfigurationINTEL(
        \iggyvolz\vulkan\util\ObjectPointer $pAcquireInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pConfiguration,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pAcquireInfo;
        $cValue = $phpValue->cdata;
        $pAcquireInfoC = $cValue;
        $phpValue = $pConfiguration;
        $cValue = $phpValue->cdata;
        $pConfigurationC = $cValue;
        $cValue = $this->exec('vkAcquirePerformanceConfigurationINTEL',
            $pAcquireInfoC,
            $pConfigurationC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPerformanceConfigurationINTEL $configuration VkPerformanceConfigurationINTEL
     * returns VkResult
     */
    public function releasePerformanceConfigurationINTEL(
        VkPerformanceConfigurationINTEL $configuration,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $configuration;
        $cValue = $phpValue->cdata;
        $configurationC = $cValue;
        $cValue = $this->exec('vkReleasePerformanceConfigurationINTEL',
            $configurationC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkPerformanceParameterTypeINTEL $parameter VkPerformanceParameterTypeINTEL
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPerformanceValueINTEL> $pValue VkPerformanceValueINTEL*
     * returns VkResult
     */
    public function getPerformanceParameterINTEL(
        \iggyvolz\vulkan\enum\VkPerformanceParameterTypeINTEL $parameter,
        \iggyvolz\vulkan\util\ObjectPointer $pValue,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $parameter;
        $cValue = $phpValue->value;
        $parameterC = $cValue;
        $phpValue = $pValue;
        $cValue = $phpValue->cdata;
        $pValueC = $cValue;
        $cValue = $this->exec('vkGetPerformanceParameterINTEL',
            $parameterC,
            $pValueC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDeviceMemoryOpaqueCaptureAddressInfo> $pInfo const VkDeviceMemoryOpaqueCaptureAddressInfo*
     * returns uint64_t
     */
    public function getDeviceMemoryOpaqueCaptureAddress(\iggyvolz\vulkan\util\ObjectPointer $pInfo): int
    {
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->exec('vkGetDeviceMemoryOpaqueCaptureAddress',
            $pInfoC,
        );
        $phpValue = $cValue;
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipelineInfoKHR> $pPipelineInfo const VkPipelineInfoKHR*
     * @param \iggyvolz\vulkan\util\IntPointer $pExecutableCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipelineExecutablePropertiesKHR> $pProperties VkPipelineExecutablePropertiesKHR*
     * returns VkResult
     */
    public function getPipelineExecutablePropertiesKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pPipelineInfo,
        \iggyvolz\vulkan\util\IntPointer $pExecutableCount,
        \iggyvolz\vulkan\util\ObjectPointer $pProperties,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pPipelineInfo;
        $cValue = $phpValue->cdata;
        $pPipelineInfoC = $cValue;
        $phpValue = $pExecutableCount;
        $cValue = $phpValue->cdata;
        $pExecutableCountC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->exec('vkGetPipelineExecutablePropertiesKHR',
            $pPipelineInfoC,
            $pExecutableCountC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipelineExecutableInfoKHR> $pExecutableInfo const VkPipelineExecutableInfoKHR*
     * @param \iggyvolz\vulkan\util\IntPointer $pStatisticCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipelineExecutableStatisticKHR> $pStatistics VkPipelineExecutableStatisticKHR*
     * returns VkResult
     */
    public function getPipelineExecutableStatisticsKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pExecutableInfo,
        \iggyvolz\vulkan\util\IntPointer $pStatisticCount,
        \iggyvolz\vulkan\util\ObjectPointer $pStatistics,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pExecutableInfo;
        $cValue = $phpValue->cdata;
        $pExecutableInfoC = $cValue;
        $phpValue = $pStatisticCount;
        $cValue = $phpValue->cdata;
        $pStatisticCountC = $cValue;
        $phpValue = $pStatistics;
        $cValue = $phpValue->cdata;
        $pStatisticsC = $cValue;
        $cValue = $this->exec('vkGetPipelineExecutableStatisticsKHR',
            $pExecutableInfoC,
            $pStatisticCountC,
            $pStatisticsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipelineExecutableInfoKHR> $pExecutableInfo const VkPipelineExecutableInfoKHR*
     * @param \iggyvolz\vulkan\util\IntPointer $pInternalRepresentationCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipelineExecutableInternalRepresentationKHR> $pInternalRepresentations VkPipelineExecutableInternalRepresentationKHR*
     * returns VkResult
     */
    public function getPipelineExecutableInternalRepresentationsKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pExecutableInfo,
        \iggyvolz\vulkan\util\IntPointer $pInternalRepresentationCount,
        \iggyvolz\vulkan\util\ObjectPointer $pInternalRepresentations,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pExecutableInfo;
        $cValue = $phpValue->cdata;
        $pExecutableInfoC = $cValue;
        $phpValue = $pInternalRepresentationCount;
        $cValue = $phpValue->cdata;
        $pInternalRepresentationCountC = $cValue;
        $phpValue = $pInternalRepresentations;
        $cValue = $phpValue->cdata;
        $pInternalRepresentationsC = $cValue;
        $cValue = $this->exec('vkGetPipelineExecutableInternalRepresentationsKHR',
            $pExecutableInfoC,
            $pInternalRepresentationCountC,
            $pInternalRepresentationsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkFaultQueryBehavior $faultQueryBehavior VkFaultQueryBehavior
     * @param \iggyvolz\vulkan\util\Pointer $pUnrecordedFaults VkBool32*
     * @param \iggyvolz\vulkan\util\IntPointer $pFaultCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkFaultData> $pFaults VkFaultData*
     * returns VkResult
     */
    public function getFaultData(
        \iggyvolz\vulkan\enum\VkFaultQueryBehavior $faultQueryBehavior,
        \iggyvolz\vulkan\util\Pointer $pUnrecordedFaults,
        \iggyvolz\vulkan\util\IntPointer $pFaultCount,
        \iggyvolz\vulkan\util\ObjectPointer $pFaults,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $faultQueryBehavior;
        $cValue = $phpValue->value;
        $faultQueryBehaviorC = $cValue;
        $phpValue = $pUnrecordedFaults;
        $cValue = $phpValue->cdata;
        $pUnrecordedFaultsC = $cValue;
        $phpValue = $pFaultCount;
        $cValue = $phpValue->cdata;
        $pFaultCountC = $cValue;
        $phpValue = $pFaults;
        $cValue = $phpValue->cdata;
        $pFaultsC = $cValue;
        $cValue = $this->exec('vkGetFaultData',
            $faultQueryBehaviorC,
            $pUnrecordedFaultsC,
            $pFaultCountC,
            $pFaultsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAccelerationStructureCreateInfoKHR> $pCreateInfo const VkAccelerationStructureCreateInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAccelerationStructureKHR> $pAccelerationStructure VkAccelerationStructureKHR*
     * returns VkResult
     */
    public function createAccelerationStructureKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pAccelerationStructure,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pAccelerationStructure;
        $cValue = $phpValue->cdata;
        $pAccelerationStructureC = $cValue;
        $cValue = $this->exec('vkCreateAccelerationStructureKHR',
            $pCreateInfoC,
            $pAllocatorC,
            $pAccelerationStructureC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation VkDeferredOperationKHR
     * @param int $infoCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAccelerationStructureBuildGeometryInfoKHR> $pInfos const VkAccelerationStructureBuildGeometryInfoKHR*
     * @param \iggyvolz\vulkan\util\Pointer $ppBuildRangeInfos const VkAccelerationStructureBuildRangeInfoKHR* const*
     * returns VkResult
     */
    public function buildAccelerationStructuresKHR(
        VkDeferredOperationKHR $deferredOperation,
        int $infoCount,
        \iggyvolz\vulkan\util\ObjectPointer $pInfos,
        \iggyvolz\vulkan\util\Pointer $ppBuildRangeInfos,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $deferredOperation;
        $cValue = $phpValue->cdata;
        $deferredOperationC = $cValue;
        $phpValue = $infoCount;
        $cValue = $phpValue;
        $infoCountC = $cValue;
        $phpValue = $pInfos;
        $cValue = $phpValue->cdata;
        $pInfosC = $cValue;
        $phpValue = $ppBuildRangeInfos;
        $cValue = $phpValue->cdata;
        $ppBuildRangeInfosC = $cValue;
        $cValue = $this->exec('vkBuildAccelerationStructuresKHR',
            $deferredOperationC,
            $infoCountC,
            $pInfosC,
            $ppBuildRangeInfosC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAccelerationStructureDeviceAddressInfoKHR> $pInfo const VkAccelerationStructureDeviceAddressInfoKHR*
     * returns VkDeviceAddress
     */
    public function getAccelerationStructureDeviceAddressKHR(\iggyvolz\vulkan\util\ObjectPointer $pInfo): int
    {
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->exec('vkGetAccelerationStructureDeviceAddressKHR',
            $pInfoC,
        );
        $phpValue = $cValue;
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDeferredOperationKHR> $pDeferredOperation VkDeferredOperationKHR*
     * returns VkResult
     */
    public function createDeferredOperationKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pDeferredOperation,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pDeferredOperation;
        $cValue = $phpValue->cdata;
        $pDeferredOperationC = $cValue;
        $cValue = $this->exec('vkCreateDeferredOperationKHR',
            $pAllocatorC,
            $pDeferredOperationC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDeferredOperationKHR $operation VkDeferredOperationKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyDeferredOperationKHR(
        VkDeferredOperationKHR $operation,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $operation;
        $cValue = $phpValue->cdata;
        $operationC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyDeferredOperationKHR',
            $operationC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDeferredOperationKHR $operation VkDeferredOperationKHR
     * returns uint32_t
     */
    public function getDeferredOperationMaxConcurrencyKHR(VkDeferredOperationKHR $operation): int
    {
        $phpValue = $operation;
        $cValue = $phpValue->cdata;
        $operationC = $cValue;
        $cValue = $this->exec('vkGetDeferredOperationMaxConcurrencyKHR',
            $operationC,
        );
        $phpValue = $cValue;
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDeferredOperationKHR $operation VkDeferredOperationKHR
     * returns VkResult
     */
    public function getDeferredOperationResultKHR(VkDeferredOperationKHR $operation): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $operation;
        $cValue = $phpValue->cdata;
        $operationC = $cValue;
        $cValue = $this->exec('vkGetDeferredOperationResultKHR',
            $operationC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDeferredOperationKHR $operation VkDeferredOperationKHR
     * returns VkResult
     */
    public function deferredOperationJoinKHR(VkDeferredOperationKHR $operation): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $operation;
        $cValue = $phpValue->cdata;
        $operationC = $cValue;
        $cValue = $this->exec('vkDeferredOperationJoinKHR',
            $operationC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkComputePipelineCreateInfo> $pCreateInfo const VkComputePipelineCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryRequirements2> $pMemoryRequirements VkMemoryRequirements2*
     */
    public function getPipelineIndirectMemoryRequirementsNV(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pMemoryRequirements,
    ): void
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pMemoryRequirements;
        $cValue = $phpValue->cdata;
        $pMemoryRequirementsC = $cValue;
        $cValue = $this->exec('vkGetPipelineIndirectMemoryRequirementsNV',
            $pCreateInfoC,
            $pMemoryRequirementsC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipelineIndirectDeviceAddressInfoNV> $pInfo const VkPipelineIndirectDeviceAddressInfoNV*
     * returns VkDeviceAddress
     */
    public function getPipelineIndirectDeviceAddressNV(\iggyvolz\vulkan\util\ObjectPointer $pInfo): int
    {
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->exec('vkGetPipelineIndirectDeviceAddressNV',
            $pInfoC,
        );
        $phpValue = $cValue;
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPrivateDataSlotCreateInfo> $pCreateInfo const VkPrivateDataSlotCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPrivateDataSlot> $pPrivateDataSlot VkPrivateDataSlot*
     * returns VkResult
     */
    public function createPrivateDataSlot(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pPrivateDataSlot,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pPrivateDataSlot;
        $cValue = $phpValue->cdata;
        $pPrivateDataSlotC = $cValue;
        $cValue = $this->exec('vkCreatePrivateDataSlot',
            $pCreateInfoC,
            $pAllocatorC,
            $pPrivateDataSlotC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPrivateDataSlot $privateDataSlot VkPrivateDataSlot
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyPrivateDataSlot(
        VkPrivateDataSlot $privateDataSlot,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $privateDataSlot;
        $cValue = $phpValue->cdata;
        $privateDataSlotC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyPrivateDataSlot',
            $privateDataSlotC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkObjectType $objectType VkObjectType
     * @param int $objectHandle uint64_t
     * @param \iggyvolz\vulkan\struct\VkPrivateDataSlot $privateDataSlot VkPrivateDataSlot
     * @param int $data uint64_t
     * returns VkResult
     */
    public function setPrivateData(
        \iggyvolz\vulkan\enum\VkObjectType $objectType,
        int $objectHandle,
        VkPrivateDataSlot $privateDataSlot,
        int $data,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $objectType;
        $cValue = $phpValue->value;
        $objectTypeC = $cValue;
        $phpValue = $objectHandle;
        $cValue = $phpValue;
        $objectHandleC = $cValue;
        $phpValue = $privateDataSlot;
        $cValue = $phpValue->cdata;
        $privateDataSlotC = $cValue;
        $phpValue = $data;
        $cValue = $phpValue;
        $dataC = $cValue;
        $cValue = $this->exec('vkSetPrivateData',
            $objectTypeC,
            $objectHandleC,
            $privateDataSlotC,
            $dataC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkObjectType $objectType VkObjectType
     * @param int $objectHandle uint64_t
     * @param \iggyvolz\vulkan\struct\VkPrivateDataSlot $privateDataSlot VkPrivateDataSlot
     * @param \iggyvolz\vulkan\util\IntPointer $pData uint64_t*
     */
    public function getPrivateData(
        \iggyvolz\vulkan\enum\VkObjectType $objectType,
        int $objectHandle,
        VkPrivateDataSlot $privateDataSlot,
        \iggyvolz\vulkan\util\IntPointer $pData,
    ): void
    {
        $phpValue = $objectType;
        $cValue = $phpValue->value;
        $objectTypeC = $cValue;
        $phpValue = $objectHandle;
        $cValue = $phpValue;
        $objectHandleC = $cValue;
        $phpValue = $privateDataSlot;
        $cValue = $phpValue->cdata;
        $privateDataSlotC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $cValue = $this->exec('vkGetPrivateData',
            $objectTypeC,
            $objectHandleC,
            $privateDataSlotC,
            $pDataC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkAccelerationStructureBuildTypeKHR $buildType VkAccelerationStructureBuildTypeKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAccelerationStructureBuildGeometryInfoKHR> $pBuildInfo const VkAccelerationStructureBuildGeometryInfoKHR*
     * @param \iggyvolz\vulkan\util\IntPointer $pMaxPrimitiveCounts const uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAccelerationStructureBuildSizesInfoKHR> $pSizeInfo VkAccelerationStructureBuildSizesInfoKHR*
     */
    public function getAccelerationStructureBuildSizesKHR(
        \iggyvolz\vulkan\enum\VkAccelerationStructureBuildTypeKHR $buildType,
        \iggyvolz\vulkan\util\ObjectPointer $pBuildInfo,
        \iggyvolz\vulkan\util\IntPointer $pMaxPrimitiveCounts,
        \iggyvolz\vulkan\util\ObjectPointer $pSizeInfo,
    ): void
    {
        $phpValue = $buildType;
        $cValue = $phpValue->value;
        $buildTypeC = $cValue;
        $phpValue = $pBuildInfo;
        $cValue = $phpValue->cdata;
        $pBuildInfoC = $cValue;
        $phpValue = $pMaxPrimitiveCounts;
        $cValue = $phpValue->cdata;
        $pMaxPrimitiveCountsC = $cValue;
        $phpValue = $pSizeInfo;
        $cValue = $phpValue->cdata;
        $pSizeInfoC = $cValue;
        $cValue = $this->exec('vkGetAccelerationStructureBuildSizesKHR',
            $buildTypeC,
            $pBuildInfoC,
            $pMaxPrimitiveCountsC,
            $pSizeInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyMemoryToImageInfoEXT> $pCopyMemoryToImageInfo const VkCopyMemoryToImageInfoEXT*
     * returns VkResult
     */
    public function copyMemoryToImageEXT(
        \iggyvolz\vulkan\util\ObjectPointer $pCopyMemoryToImageInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCopyMemoryToImageInfo;
        $cValue = $phpValue->cdata;
        $pCopyMemoryToImageInfoC = $cValue;
        $cValue = $this->exec('vkCopyMemoryToImageEXT',
            $pCopyMemoryToImageInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyImageToMemoryInfoEXT> $pCopyImageToMemoryInfo const VkCopyImageToMemoryInfoEXT*
     * returns VkResult
     */
    public function copyImageToMemoryEXT(
        \iggyvolz\vulkan\util\ObjectPointer $pCopyImageToMemoryInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCopyImageToMemoryInfo;
        $cValue = $phpValue->cdata;
        $pCopyImageToMemoryInfoC = $cValue;
        $cValue = $this->exec('vkCopyImageToMemoryEXT',
            $pCopyImageToMemoryInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyImageToImageInfoEXT> $pCopyImageToImageInfo const VkCopyImageToImageInfoEXT*
     * returns VkResult
     */
    public function copyImageToImageEXT(
        \iggyvolz\vulkan\util\ObjectPointer $pCopyImageToImageInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCopyImageToImageInfo;
        $cValue = $phpValue->cdata;
        $pCopyImageToImageInfoC = $cValue;
        $cValue = $this->exec('vkCopyImageToImageEXT',
            $pCopyImageToImageInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param int $transitionCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkHostImageLayoutTransitionInfoEXT> $pTransitions const VkHostImageLayoutTransitionInfoEXT*
     * returns VkResult
     */
    public function transitionImageLayoutEXT(
        int $transitionCount,
        \iggyvolz\vulkan\util\ObjectPointer $pTransitions,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $transitionCount;
        $cValue = $phpValue;
        $transitionCountC = $cValue;
        $phpValue = $pTransitions;
        $cValue = $phpValue->cdata;
        $pTransitionsC = $cValue;
        $cValue = $this->exec('vkTransitionImageLayoutEXT',
            $transitionCountC,
            $pTransitionsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandPool $commandPool VkCommandPool
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCommandPoolMemoryConsumption> $pConsumption VkCommandPoolMemoryConsumption*
     */
    public function getCommandPoolMemoryConsumption(
        VkCommandPool $commandPool,
        VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\util\ObjectPointer $pConsumption,
    ): void
    {
        $phpValue = $commandPool;
        $cValue = $phpValue->cdata;
        $commandPoolC = $cValue;
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pConsumption;
        $cValue = $phpValue->cdata;
        $pConsumptionC = $cValue;
        $cValue = $this->exec('vkGetCommandPoolMemoryConsumption',
            $commandPoolC,
            $commandBufferC,
            $pConsumptionC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVideoSessionCreateInfoKHR> $pCreateInfo const VkVideoSessionCreateInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVideoSessionKHR> $pVideoSession VkVideoSessionKHR*
     * returns VkResult
     */
    public function createVideoSessionKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pVideoSession,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pVideoSession;
        $cValue = $phpValue->cdata;
        $pVideoSessionC = $cValue;
        $cValue = $this->exec('vkCreateVideoSessionKHR',
            $pCreateInfoC,
            $pAllocatorC,
            $pVideoSessionC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkVideoSessionKHR $videoSession VkVideoSessionKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyVideoSessionKHR(
        VkVideoSessionKHR $videoSession,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $videoSession;
        $cValue = $phpValue->cdata;
        $videoSessionC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyVideoSessionKHR',
            $videoSessionC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVideoSessionParametersCreateInfoKHR> $pCreateInfo const VkVideoSessionParametersCreateInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVideoSessionParametersKHR> $pVideoSessionParameters VkVideoSessionParametersKHR*
     * returns VkResult
     */
    public function createVideoSessionParametersKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pVideoSessionParameters,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pVideoSessionParameters;
        $cValue = $phpValue->cdata;
        $pVideoSessionParametersC = $cValue;
        $cValue = $this->exec('vkCreateVideoSessionParametersKHR',
            $pCreateInfoC,
            $pAllocatorC,
            $pVideoSessionParametersC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkVideoSessionParametersKHR $videoSessionParameters VkVideoSessionParametersKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVideoSessionParametersUpdateInfoKHR> $pUpdateInfo const VkVideoSessionParametersUpdateInfoKHR*
     * returns VkResult
     */
    public function updateVideoSessionParametersKHR(
        VkVideoSessionParametersKHR $videoSessionParameters,
        \iggyvolz\vulkan\util\ObjectPointer $pUpdateInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $videoSessionParameters;
        $cValue = $phpValue->cdata;
        $videoSessionParametersC = $cValue;
        $phpValue = $pUpdateInfo;
        $cValue = $phpValue->cdata;
        $pUpdateInfoC = $cValue;
        $cValue = $this->exec('vkUpdateVideoSessionParametersKHR',
            $videoSessionParametersC,
            $pUpdateInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVideoEncodeSessionParametersGetInfoKHR> $pVideoSessionParametersInfo const VkVideoEncodeSessionParametersGetInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVideoEncodeSessionParametersFeedbackInfoKHR> $pFeedbackInfo VkVideoEncodeSessionParametersFeedbackInfoKHR*
     * @param \iggyvolz\vulkan\util\IntPointer $pDataSize size_t*
     * @param \iggyvolz\vulkan\util\Pointer $pData void*
     * returns VkResult
     */
    public function getEncodedVideoSessionParametersKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pVideoSessionParametersInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pFeedbackInfo,
        \iggyvolz\vulkan\util\IntPointer $pDataSize,
        \iggyvolz\vulkan\util\Pointer $pData,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pVideoSessionParametersInfo;
        $cValue = $phpValue->cdata;
        $pVideoSessionParametersInfoC = $cValue;
        $phpValue = $pFeedbackInfo;
        $cValue = $phpValue->cdata;
        $pFeedbackInfoC = $cValue;
        $phpValue = $pDataSize;
        $cValue = $phpValue->cdata;
        $pDataSizeC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $cValue = $this->exec('vkGetEncodedVideoSessionParametersKHR',
            $pVideoSessionParametersInfoC,
            $pFeedbackInfoC,
            $pDataSizeC,
            $pDataC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkVideoSessionParametersKHR $videoSessionParameters VkVideoSessionParametersKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyVideoSessionParametersKHR(
        VkVideoSessionParametersKHR $videoSessionParameters,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $videoSessionParameters;
        $cValue = $phpValue->cdata;
        $videoSessionParametersC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyVideoSessionParametersKHR',
            $videoSessionParametersC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkVideoSessionKHR $videoSession VkVideoSessionKHR
     * @param \iggyvolz\vulkan\util\IntPointer $pMemoryRequirementsCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVideoSessionMemoryRequirementsKHR> $pMemoryRequirements VkVideoSessionMemoryRequirementsKHR*
     * returns VkResult
     */
    public function getVideoSessionMemoryRequirementsKHR(
        VkVideoSessionKHR $videoSession,
        \iggyvolz\vulkan\util\IntPointer $pMemoryRequirementsCount,
        \iggyvolz\vulkan\util\ObjectPointer $pMemoryRequirements,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $videoSession;
        $cValue = $phpValue->cdata;
        $videoSessionC = $cValue;
        $phpValue = $pMemoryRequirementsCount;
        $cValue = $phpValue->cdata;
        $pMemoryRequirementsCountC = $cValue;
        $phpValue = $pMemoryRequirements;
        $cValue = $phpValue->cdata;
        $pMemoryRequirementsC = $cValue;
        $cValue = $this->exec('vkGetVideoSessionMemoryRequirementsKHR',
            $videoSessionC,
            $pMemoryRequirementsCountC,
            $pMemoryRequirementsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkVideoSessionKHR $videoSession VkVideoSessionKHR
     * @param int $bindSessionMemoryInfoCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBindVideoSessionMemoryInfoKHR> $pBindSessionMemoryInfos const VkBindVideoSessionMemoryInfoKHR*
     * returns VkResult
     */
    public function bindVideoSessionMemoryKHR(
        VkVideoSessionKHR $videoSession,
        int $bindSessionMemoryInfoCount,
        \iggyvolz\vulkan\util\ObjectPointer $pBindSessionMemoryInfos,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $videoSession;
        $cValue = $phpValue->cdata;
        $videoSessionC = $cValue;
        $phpValue = $bindSessionMemoryInfoCount;
        $cValue = $phpValue;
        $bindSessionMemoryInfoCountC = $cValue;
        $phpValue = $pBindSessionMemoryInfos;
        $cValue = $phpValue->cdata;
        $pBindSessionMemoryInfosC = $cValue;
        $cValue = $this->exec('vkBindVideoSessionMemoryKHR',
            $videoSessionC,
            $bindSessionMemoryInfoCountC,
            $pBindSessionMemoryInfosC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCuModuleCreateInfoNVX> $pCreateInfo const VkCuModuleCreateInfoNVX*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCuModuleNVX> $pModule VkCuModuleNVX*
     * returns VkResult
     */
    public function createCuModuleNVX(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pModule,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pModule;
        $cValue = $phpValue->cdata;
        $pModuleC = $cValue;
        $cValue = $this->exec('vkCreateCuModuleNVX',
            $pCreateInfoC,
            $pAllocatorC,
            $pModuleC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCuFunctionCreateInfoNVX> $pCreateInfo const VkCuFunctionCreateInfoNVX*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCuFunctionNVX> $pFunction VkCuFunctionNVX*
     * returns VkResult
     */
    public function createCuFunctionNVX(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pFunction,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pFunction;
        $cValue = $phpValue->cdata;
        $pFunctionC = $cValue;
        $cValue = $this->exec('vkCreateCuFunctionNVX',
            $pCreateInfoC,
            $pAllocatorC,
            $pFunctionC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCuModuleNVX $module VkCuModuleNVX
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyCuModuleNVX(VkCuModuleNVX $module, \iggyvolz\vulkan\util\ObjectPointer $pAllocator): void
    {
        $phpValue = $module;
        $cValue = $phpValue->cdata;
        $moduleC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyCuModuleNVX',
            $moduleC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCuFunctionNVX $function VkCuFunctionNVX
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyCuFunctionNVX(
        VkCuFunctionNVX $function,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $function;
        $cValue = $phpValue->cdata;
        $functionC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyCuFunctionNVX',
            $functionC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDescriptorSetLayout $layout VkDescriptorSetLayout
     * @param \iggyvolz\vulkan\util\Pointer $pLayoutSizeInBytes VkDeviceSize*
     */
    public function getDescriptorSetLayoutSizeEXT(
        VkDescriptorSetLayout $layout,
        \iggyvolz\vulkan\util\Pointer $pLayoutSizeInBytes,
    ): void
    {
        $phpValue = $layout;
        $cValue = $phpValue->cdata;
        $layoutC = $cValue;
        $phpValue = $pLayoutSizeInBytes;
        $cValue = $phpValue->cdata;
        $pLayoutSizeInBytesC = $cValue;
        $cValue = $this->exec('vkGetDescriptorSetLayoutSizeEXT',
            $layoutC,
            $pLayoutSizeInBytesC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDescriptorSetLayout $layout VkDescriptorSetLayout
     * @param int $binding uint32_t
     * @param \iggyvolz\vulkan\util\Pointer $pOffset VkDeviceSize*
     */
    public function getDescriptorSetLayoutBindingOffsetEXT(
        VkDescriptorSetLayout $layout,
        int $binding,
        \iggyvolz\vulkan\util\Pointer $pOffset,
    ): void
    {
        $phpValue = $layout;
        $cValue = $phpValue->cdata;
        $layoutC = $cValue;
        $phpValue = $binding;
        $cValue = $phpValue;
        $bindingC = $cValue;
        $phpValue = $pOffset;
        $cValue = $phpValue->cdata;
        $pOffsetC = $cValue;
        $cValue = $this->exec('vkGetDescriptorSetLayoutBindingOffsetEXT',
            $layoutC,
            $bindingC,
            $pOffsetC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDescriptorGetInfoEXT> $pDescriptorInfo const VkDescriptorGetInfoEXT*
     * @param int $dataSize size_t
     * @param \iggyvolz\vulkan\util\Pointer $pDescriptor void*
     */
    public function getDescriptorEXT(
        \iggyvolz\vulkan\util\ObjectPointer $pDescriptorInfo,
        int $dataSize,
        \iggyvolz\vulkan\util\Pointer $pDescriptor,
    ): void
    {
        $phpValue = $pDescriptorInfo;
        $cValue = $phpValue->cdata;
        $pDescriptorInfoC = $cValue;
        $phpValue = $dataSize;
        $cValue = $phpValue;
        $dataSizeC = $cValue;
        $phpValue = $pDescriptor;
        $cValue = $phpValue->cdata;
        $pDescriptorC = $cValue;
        $cValue = $this->exec('vkGetDescriptorEXT',
            $pDescriptorInfoC,
            $dataSizeC,
            $pDescriptorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBufferCaptureDescriptorDataInfoEXT> $pInfo const VkBufferCaptureDescriptorDataInfoEXT*
     * @param \iggyvolz\vulkan\util\Pointer $pData void*
     * returns VkResult
     */
    public function getBufferOpaqueCaptureDescriptorDataEXT(
        \iggyvolz\vulkan\util\ObjectPointer $pInfo,
        \iggyvolz\vulkan\util\Pointer $pData,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $cValue = $this->exec('vkGetBufferOpaqueCaptureDescriptorDataEXT',
            $pInfoC,
            $pDataC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageCaptureDescriptorDataInfoEXT> $pInfo const VkImageCaptureDescriptorDataInfoEXT*
     * @param \iggyvolz\vulkan\util\Pointer $pData void*
     * returns VkResult
     */
    public function getImageOpaqueCaptureDescriptorDataEXT(
        \iggyvolz\vulkan\util\ObjectPointer $pInfo,
        \iggyvolz\vulkan\util\Pointer $pData,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $cValue = $this->exec('vkGetImageOpaqueCaptureDescriptorDataEXT',
            $pInfoC,
            $pDataC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageViewCaptureDescriptorDataInfoEXT> $pInfo const VkImageViewCaptureDescriptorDataInfoEXT*
     * @param \iggyvolz\vulkan\util\Pointer $pData void*
     * returns VkResult
     */
    public function getImageViewOpaqueCaptureDescriptorDataEXT(
        \iggyvolz\vulkan\util\ObjectPointer $pInfo,
        \iggyvolz\vulkan\util\Pointer $pData,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $cValue = $this->exec('vkGetImageViewOpaqueCaptureDescriptorDataEXT',
            $pInfoC,
            $pDataC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSamplerCaptureDescriptorDataInfoEXT> $pInfo const VkSamplerCaptureDescriptorDataInfoEXT*
     * @param \iggyvolz\vulkan\util\Pointer $pData void*
     * returns VkResult
     */
    public function getSamplerOpaqueCaptureDescriptorDataEXT(
        \iggyvolz\vulkan\util\ObjectPointer $pInfo,
        \iggyvolz\vulkan\util\Pointer $pData,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $cValue = $this->exec('vkGetSamplerOpaqueCaptureDescriptorDataEXT',
            $pInfoC,
            $pDataC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAccelerationStructureCaptureDescriptorDataInfoEXT> $pInfo const VkAccelerationStructureCaptureDescriptorDataInfoEXT*
     * @param \iggyvolz\vulkan\util\Pointer $pData void*
     * returns VkResult
     */
    public function getAccelerationStructureOpaqueCaptureDescriptorDataEXT(
        \iggyvolz\vulkan\util\ObjectPointer $pInfo,
        \iggyvolz\vulkan\util\Pointer $pData,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $cValue = $this->exec('vkGetAccelerationStructureOpaqueCaptureDescriptorDataEXT',
            $pInfoC,
            $pDataC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDeviceMemory $memory VkDeviceMemory
     * @param float $priority float
     */
    public function setDeviceMemoryPriorityEXT(VkDeviceMemory $memory, float $priority): void
    {
        $phpValue = $memory;
        $cValue = $phpValue->cdata;
        $memoryC = $cValue;
        $phpValue = $priority;
        $cValue = $phpValue;
        $priorityC = $cValue;
        $cValue = $this->exec('vkSetDeviceMemoryPriorityEXT',
            $memoryC,
            $priorityC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain VkSwapchainKHR
     * @param int $presentId uint64_t
     * @param int $timeout uint64_t
     * returns VkResult
     */
    public function waitForPresentKHR(
        VkSwapchainKHR $swapchain,
        int $presentId,
        int $timeout,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $swapchain;
        $cValue = $phpValue->cdata;
        $swapchainC = $cValue;
        $phpValue = $presentId;
        $cValue = $phpValue;
        $presentIdC = $cValue;
        $phpValue = $timeout;
        $cValue = $phpValue;
        $timeoutC = $cValue;
        $cValue = $this->exec('vkWaitForPresentKHR',
            $swapchainC,
            $presentIdC,
            $timeoutC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBufferCollectionCreateInfoFUCHSIA> $pCreateInfo const VkBufferCollectionCreateInfoFUCHSIA*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBufferCollectionFUCHSIA> $pCollection VkBufferCollectionFUCHSIA*
     * returns VkResult
     */
    public function createBufferCollectionFUCHSIA(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pCollection,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pCollection;
        $cValue = $phpValue->cdata;
        $pCollectionC = $cValue;
        $cValue = $this->exec('vkCreateBufferCollectionFUCHSIA',
            $pCreateInfoC,
            $pAllocatorC,
            $pCollectionC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkBufferCollectionFUCHSIA $collection VkBufferCollectionFUCHSIA
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBufferConstraintsInfoFUCHSIA> $pBufferConstraintsInfo const VkBufferConstraintsInfoFUCHSIA*
     * returns VkResult
     */
    public function setBufferCollectionBufferConstraintsFUCHSIA(
        VkBufferCollectionFUCHSIA $collection,
        \iggyvolz\vulkan\util\ObjectPointer $pBufferConstraintsInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $collection;
        $cValue = $phpValue->cdata;
        $collectionC = $cValue;
        $phpValue = $pBufferConstraintsInfo;
        $cValue = $phpValue->cdata;
        $pBufferConstraintsInfoC = $cValue;
        $cValue = $this->exec('vkSetBufferCollectionBufferConstraintsFUCHSIA',
            $collectionC,
            $pBufferConstraintsInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkBufferCollectionFUCHSIA $collection VkBufferCollectionFUCHSIA
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageConstraintsInfoFUCHSIA> $pImageConstraintsInfo const VkImageConstraintsInfoFUCHSIA*
     * returns VkResult
     */
    public function setBufferCollectionImageConstraintsFUCHSIA(
        VkBufferCollectionFUCHSIA $collection,
        \iggyvolz\vulkan\util\ObjectPointer $pImageConstraintsInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $collection;
        $cValue = $phpValue->cdata;
        $collectionC = $cValue;
        $phpValue = $pImageConstraintsInfo;
        $cValue = $phpValue->cdata;
        $pImageConstraintsInfoC = $cValue;
        $cValue = $this->exec('vkSetBufferCollectionImageConstraintsFUCHSIA',
            $collectionC,
            $pImageConstraintsInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkBufferCollectionFUCHSIA $collection VkBufferCollectionFUCHSIA
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyBufferCollectionFUCHSIA(
        VkBufferCollectionFUCHSIA $collection,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $collection;
        $cValue = $phpValue->cdata;
        $collectionC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyBufferCollectionFUCHSIA',
            $collectionC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkBufferCollectionFUCHSIA $collection VkBufferCollectionFUCHSIA
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBufferCollectionPropertiesFUCHSIA> $pProperties VkBufferCollectionPropertiesFUCHSIA*
     * returns VkResult
     */
    public function getBufferCollectionPropertiesFUCHSIA(
        VkBufferCollectionFUCHSIA $collection,
        \iggyvolz\vulkan\util\ObjectPointer $pProperties,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $collection;
        $cValue = $phpValue->cdata;
        $collectionC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->exec('vkGetBufferCollectionPropertiesFUCHSIA',
            $collectionC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCudaModuleCreateInfoNV> $pCreateInfo const VkCudaModuleCreateInfoNV*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCudaModuleNV> $pModule VkCudaModuleNV*
     * returns VkResult
     */
    public function createCudaModuleNV(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pModule,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pModule;
        $cValue = $phpValue->cdata;
        $pModuleC = $cValue;
        $cValue = $this->exec('vkCreateCudaModuleNV',
            $pCreateInfoC,
            $pAllocatorC,
            $pModuleC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCudaModuleNV $module VkCudaModuleNV
     * @param \iggyvolz\vulkan\util\IntPointer $pCacheSize size_t*
     * @param \iggyvolz\vulkan\util\Pointer $pCacheData void*
     * returns VkResult
     */
    public function getCudaModuleCacheNV(
        VkCudaModuleNV $module,
        \iggyvolz\vulkan\util\IntPointer $pCacheSize,
        \iggyvolz\vulkan\util\Pointer $pCacheData,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $module;
        $cValue = $phpValue->cdata;
        $moduleC = $cValue;
        $phpValue = $pCacheSize;
        $cValue = $phpValue->cdata;
        $pCacheSizeC = $cValue;
        $phpValue = $pCacheData;
        $cValue = $phpValue->cdata;
        $pCacheDataC = $cValue;
        $cValue = $this->exec('vkGetCudaModuleCacheNV',
            $moduleC,
            $pCacheSizeC,
            $pCacheDataC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCudaFunctionCreateInfoNV> $pCreateInfo const VkCudaFunctionCreateInfoNV*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCudaFunctionNV> $pFunction VkCudaFunctionNV*
     * returns VkResult
     */
    public function createCudaFunctionNV(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pFunction,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pFunction;
        $cValue = $phpValue->cdata;
        $pFunctionC = $cValue;
        $cValue = $this->exec('vkCreateCudaFunctionNV',
            $pCreateInfoC,
            $pAllocatorC,
            $pFunctionC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCudaModuleNV $module VkCudaModuleNV
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyCudaModuleNV(VkCudaModuleNV $module, \iggyvolz\vulkan\util\ObjectPointer $pAllocator): void
    {
        $phpValue = $module;
        $cValue = $phpValue->cdata;
        $moduleC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyCudaModuleNV',
            $moduleC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCudaFunctionNV $function VkCudaFunctionNV
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyCudaFunctionNV(
        VkCudaFunctionNV $function,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $function;
        $cValue = $phpValue->cdata;
        $functionC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyCudaFunctionNV',
            $functionC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDescriptorSetBindingReferenceVALVE> $pBindingReference const VkDescriptorSetBindingReferenceVALVE*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDescriptorSetLayoutHostMappingInfoVALVE> $pHostMapping VkDescriptorSetLayoutHostMappingInfoVALVE*
     */
    public function getDescriptorSetLayoutHostMappingInfoVALVE(
        \iggyvolz\vulkan\util\ObjectPointer $pBindingReference,
        \iggyvolz\vulkan\util\ObjectPointer $pHostMapping,
    ): void
    {
        $phpValue = $pBindingReference;
        $cValue = $phpValue->cdata;
        $pBindingReferenceC = $cValue;
        $phpValue = $pHostMapping;
        $cValue = $phpValue->cdata;
        $pHostMappingC = $cValue;
        $cValue = $this->exec('vkGetDescriptorSetLayoutHostMappingInfoVALVE',
            $pBindingReferenceC,
            $pHostMappingC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDescriptorSet $descriptorSet VkDescriptorSet
     * @param \iggyvolz\vulkan\util\Pointer $ppData void**
     */
    public function getDescriptorSetHostMappingVALVE(
        VkDescriptorSet $descriptorSet,
        \iggyvolz\vulkan\util\Pointer $ppData,
    ): void
    {
        $phpValue = $descriptorSet;
        $cValue = $phpValue->cdata;
        $descriptorSetC = $cValue;
        $phpValue = $ppData;
        $cValue = $phpValue->cdata;
        $ppDataC = $cValue;
        $cValue = $this->exec('vkGetDescriptorSetHostMappingVALVE',
            $descriptorSetC,
            $ppDataC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMicromapCreateInfoEXT> $pCreateInfo const VkMicromapCreateInfoEXT*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMicromapEXT> $pMicromap VkMicromapEXT*
     * returns VkResult
     */
    public function createMicromapEXT(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pMicromap,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pMicromap;
        $cValue = $phpValue->cdata;
        $pMicromapC = $cValue;
        $cValue = $this->exec('vkCreateMicromapEXT',
            $pCreateInfoC,
            $pAllocatorC,
            $pMicromapC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation VkDeferredOperationKHR
     * @param int $infoCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMicromapBuildInfoEXT> $pInfos const VkMicromapBuildInfoEXT*
     * returns VkResult
     */
    public function buildMicromapsEXT(
        VkDeferredOperationKHR $deferredOperation,
        int $infoCount,
        \iggyvolz\vulkan\util\ObjectPointer $pInfos,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $deferredOperation;
        $cValue = $phpValue->cdata;
        $deferredOperationC = $cValue;
        $phpValue = $infoCount;
        $cValue = $phpValue;
        $infoCountC = $cValue;
        $phpValue = $pInfos;
        $cValue = $phpValue->cdata;
        $pInfosC = $cValue;
        $cValue = $this->exec('vkBuildMicromapsEXT',
            $deferredOperationC,
            $infoCountC,
            $pInfosC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkMicromapEXT $micromap VkMicromapEXT
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyMicromapEXT(VkMicromapEXT $micromap, \iggyvolz\vulkan\util\ObjectPointer $pAllocator): void
    {
        $phpValue = $micromap;
        $cValue = $phpValue->cdata;
        $micromapC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyMicromapEXT',
            $micromapC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation VkDeferredOperationKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyMicromapInfoEXT> $pInfo const VkCopyMicromapInfoEXT*
     * returns VkResult
     */
    public function copyMicromapEXT(
        VkDeferredOperationKHR $deferredOperation,
        \iggyvolz\vulkan\util\ObjectPointer $pInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $deferredOperation;
        $cValue = $phpValue->cdata;
        $deferredOperationC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->exec('vkCopyMicromapEXT',
            $deferredOperationC,
            $pInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation VkDeferredOperationKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyMicromapToMemoryInfoEXT> $pInfo const VkCopyMicromapToMemoryInfoEXT*
     * returns VkResult
     */
    public function copyMicromapToMemoryEXT(
        VkDeferredOperationKHR $deferredOperation,
        \iggyvolz\vulkan\util\ObjectPointer $pInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $deferredOperation;
        $cValue = $phpValue->cdata;
        $deferredOperationC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->exec('vkCopyMicromapToMemoryEXT',
            $deferredOperationC,
            $pInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation VkDeferredOperationKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyMemoryToMicromapInfoEXT> $pInfo const VkCopyMemoryToMicromapInfoEXT*
     * returns VkResult
     */
    public function copyMemoryToMicromapEXT(
        VkDeferredOperationKHR $deferredOperation,
        \iggyvolz\vulkan\util\ObjectPointer $pInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $deferredOperation;
        $cValue = $phpValue->cdata;
        $deferredOperationC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->exec('vkCopyMemoryToMicromapEXT',
            $deferredOperationC,
            $pInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param int $micromapCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMicromapEXT> $pMicromaps const VkMicromapEXT*
     * @param \iggyvolz\vulkan\enum\VkQueryType $queryType VkQueryType
     * @param int $dataSize size_t
     * @param \iggyvolz\vulkan\util\Pointer $pData void*
     * @param int $stride size_t
     * returns VkResult
     */
    public function writeMicromapsPropertiesEXT(
        int $micromapCount,
        \iggyvolz\vulkan\util\ObjectPointer $pMicromaps,
        \iggyvolz\vulkan\enum\VkQueryType $queryType,
        int $dataSize,
        \iggyvolz\vulkan\util\Pointer $pData,
        int $stride,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $micromapCount;
        $cValue = $phpValue;
        $micromapCountC = $cValue;
        $phpValue = $pMicromaps;
        $cValue = $phpValue->cdata;
        $pMicromapsC = $cValue;
        $phpValue = $queryType;
        $cValue = $phpValue->value;
        $queryTypeC = $cValue;
        $phpValue = $dataSize;
        $cValue = $phpValue;
        $dataSizeC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $phpValue = $stride;
        $cValue = $phpValue;
        $strideC = $cValue;
        $cValue = $this->exec('vkWriteMicromapsPropertiesEXT',
            $micromapCountC,
            $pMicromapsC,
            $queryTypeC,
            $dataSizeC,
            $pDataC,
            $strideC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMicromapVersionInfoEXT> $pVersionInfo const VkMicromapVersionInfoEXT*
     * @param \iggyvolz\vulkan\util\Pointer $pCompatibility VkAccelerationStructureCompatibilityKHR*
     */
    public function getDeviceMicromapCompatibilityEXT(
        \iggyvolz\vulkan\util\ObjectPointer $pVersionInfo,
        \iggyvolz\vulkan\util\Pointer $pCompatibility,
    ): void
    {
        $phpValue = $pVersionInfo;
        $cValue = $phpValue->cdata;
        $pVersionInfoC = $cValue;
        $phpValue = $pCompatibility;
        $cValue = $phpValue->cdata;
        $pCompatibilityC = $cValue;
        $cValue = $this->exec('vkGetDeviceMicromapCompatibilityEXT',
            $pVersionInfoC,
            $pCompatibilityC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkAccelerationStructureBuildTypeKHR $buildType VkAccelerationStructureBuildTypeKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMicromapBuildInfoEXT> $pBuildInfo const VkMicromapBuildInfoEXT*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMicromapBuildSizesInfoEXT> $pSizeInfo VkMicromapBuildSizesInfoEXT*
     */
    public function getMicromapBuildSizesEXT(
        \iggyvolz\vulkan\enum\VkAccelerationStructureBuildTypeKHR $buildType,
        \iggyvolz\vulkan\util\ObjectPointer $pBuildInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pSizeInfo,
    ): void
    {
        $phpValue = $buildType;
        $cValue = $phpValue->value;
        $buildTypeC = $cValue;
        $phpValue = $pBuildInfo;
        $cValue = $phpValue->cdata;
        $pBuildInfoC = $cValue;
        $phpValue = $pSizeInfo;
        $cValue = $phpValue->cdata;
        $pSizeInfoC = $cValue;
        $cValue = $this->exec('vkGetMicromapBuildSizesEXT',
            $buildTypeC,
            $pBuildInfoC,
            $pSizeInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkShaderModule $shaderModule VkShaderModule
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkShaderModuleIdentifierEXT> $pIdentifier VkShaderModuleIdentifierEXT*
     */
    public function getShaderModuleIdentifierEXT(
        VkShaderModule $shaderModule,
        \iggyvolz\vulkan\util\ObjectPointer $pIdentifier,
    ): void
    {
        $phpValue = $shaderModule;
        $cValue = $phpValue->cdata;
        $shaderModuleC = $cValue;
        $phpValue = $pIdentifier;
        $cValue = $phpValue->cdata;
        $pIdentifierC = $cValue;
        $cValue = $this->exec('vkGetShaderModuleIdentifierEXT',
            $shaderModuleC,
            $pIdentifierC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkShaderModuleCreateInfo> $pCreateInfo const VkShaderModuleCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkShaderModuleIdentifierEXT> $pIdentifier VkShaderModuleIdentifierEXT*
     */
    public function getShaderModuleCreateInfoIdentifierEXT(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pIdentifier,
    ): void
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pIdentifier;
        $cValue = $phpValue->cdata;
        $pIdentifierC = $cValue;
        $cValue = $this->exec('vkGetShaderModuleCreateInfoIdentifierEXT',
            $pCreateInfoC,
            $pIdentifierC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkImage $image VkImage
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageSubresource2KHR> $pSubresource const VkImageSubresource2KHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSubresourceLayout2KHR> $pLayout VkSubresourceLayout2KHR*
     */
    public function getImageSubresourceLayout2KHR(
        VkImage $image,
        \iggyvolz\vulkan\util\ObjectPointer $pSubresource,
        \iggyvolz\vulkan\util\ObjectPointer $pLayout,
    ): void
    {
        $phpValue = $image;
        $cValue = $phpValue->cdata;
        $imageC = $cValue;
        $phpValue = $pSubresource;
        $cValue = $phpValue->cdata;
        $pSubresourceC = $cValue;
        $phpValue = $pLayout;
        $cValue = $phpValue->cdata;
        $pLayoutC = $cValue;
        $cValue = $this->exec('vkGetImageSubresourceLayout2KHR',
            $imageC,
            $pSubresourceC,
            $pLayoutC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipelineInfoEXT> $pPipelineInfo const VkPipelineInfoEXT*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBaseOutStructure> $pPipelineProperties VkBaseOutStructure*
     * returns VkResult
     */
    public function getPipelinePropertiesEXT(
        \iggyvolz\vulkan\util\ObjectPointer $pPipelineInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pPipelineProperties,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pPipelineInfo;
        $cValue = $phpValue->cdata;
        $pPipelineInfoC = $cValue;
        $phpValue = $pPipelineProperties;
        $cValue = $phpValue->cdata;
        $pPipelinePropertiesC = $cValue;
        $cValue = $this->exec('vkGetPipelinePropertiesEXT',
            $pPipelineInfoC,
            $pPipelinePropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkExportMetalObjectsInfoEXT> $pMetalObjectsInfo VkExportMetalObjectsInfoEXT*
     */
    public function exportMetalObjectsEXT(\iggyvolz\vulkan\util\ObjectPointer $pMetalObjectsInfo): void
    {
        $phpValue = $pMetalObjectsInfo;
        $cValue = $phpValue->cdata;
        $pMetalObjectsInfoC = $cValue;
        $cValue = $this->exec('vkExportMetalObjectsEXT',
            $pMetalObjectsInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkFramebuffer $framebuffer VkFramebuffer
     * @param \iggyvolz\vulkan\util\IntPointer $pPropertiesCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkTilePropertiesQCOM> $pProperties VkTilePropertiesQCOM*
     * returns VkResult
     */
    public function getFramebufferTilePropertiesQCOM(
        VkFramebuffer $framebuffer,
        \iggyvolz\vulkan\util\IntPointer $pPropertiesCount,
        \iggyvolz\vulkan\util\ObjectPointer $pProperties,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $framebuffer;
        $cValue = $phpValue->cdata;
        $framebufferC = $cValue;
        $phpValue = $pPropertiesCount;
        $cValue = $phpValue->cdata;
        $pPropertiesCountC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->exec('vkGetFramebufferTilePropertiesQCOM',
            $framebufferC,
            $pPropertiesCountC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRenderingInfo> $pRenderingInfo const VkRenderingInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkTilePropertiesQCOM> $pProperties VkTilePropertiesQCOM*
     * returns VkResult
     */
    public function getDynamicRenderingTilePropertiesQCOM(
        \iggyvolz\vulkan\util\ObjectPointer $pRenderingInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pProperties,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pRenderingInfo;
        $cValue = $phpValue->cdata;
        $pRenderingInfoC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->exec('vkGetDynamicRenderingTilePropertiesQCOM',
            $pRenderingInfoC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkOpticalFlowSessionCreateInfoNV> $pCreateInfo const VkOpticalFlowSessionCreateInfoNV*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkOpticalFlowSessionNV> $pSession VkOpticalFlowSessionNV*
     * returns VkResult
     */
    public function createOpticalFlowSessionNV(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pSession,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSession;
        $cValue = $phpValue->cdata;
        $pSessionC = $cValue;
        $cValue = $this->exec('vkCreateOpticalFlowSessionNV',
            $pCreateInfoC,
            $pAllocatorC,
            $pSessionC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkOpticalFlowSessionNV $session VkOpticalFlowSessionNV
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyOpticalFlowSessionNV(
        VkOpticalFlowSessionNV $session,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $session;
        $cValue = $phpValue->cdata;
        $sessionC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyOpticalFlowSessionNV',
            $sessionC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkOpticalFlowSessionNV $session VkOpticalFlowSessionNV
     * @param \iggyvolz\vulkan\enum\VkOpticalFlowSessionBindingPointNV $bindingPoint VkOpticalFlowSessionBindingPointNV
     * @param \iggyvolz\vulkan\struct\VkImageView $view VkImageView
     * @param \iggyvolz\vulkan\enum\VkImageLayout $layout VkImageLayout
     * returns VkResult
     */
    public function bindOpticalFlowSessionImageNV(
        VkOpticalFlowSessionNV $session,
        \iggyvolz\vulkan\enum\VkOpticalFlowSessionBindingPointNV $bindingPoint,
        VkImageView $view,
        \iggyvolz\vulkan\enum\VkImageLayout $layout,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $session;
        $cValue = $phpValue->cdata;
        $sessionC = $cValue;
        $phpValue = $bindingPoint;
        $cValue = $phpValue->value;
        $bindingPointC = $cValue;
        $phpValue = $view;
        $cValue = $phpValue->cdata;
        $viewC = $cValue;
        $phpValue = $layout;
        $cValue = $phpValue->value;
        $layoutC = $cValue;
        $cValue = $this->exec('vkBindOpticalFlowSessionImageNV',
            $sessionC,
            $bindingPointC,
            $viewC,
            $layoutC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDeviceFaultCountsEXT> $pFaultCounts VkDeviceFaultCountsEXT*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDeviceFaultInfoEXT> $pFaultInfo VkDeviceFaultInfoEXT*
     * returns VkResult
     */
    public function getDeviceFaultInfoEXT(
        \iggyvolz\vulkan\util\ObjectPointer $pFaultCounts,
        \iggyvolz\vulkan\util\ObjectPointer $pFaultInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pFaultCounts;
        $cValue = $phpValue->cdata;
        $pFaultCountsC = $cValue;
        $phpValue = $pFaultInfo;
        $cValue = $phpValue->cdata;
        $pFaultInfoC = $cValue;
        $cValue = $this->exec('vkGetDeviceFaultInfoEXT',
            $pFaultCountsC,
            $pFaultInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkReleaseSwapchainImagesInfoEXT> $pReleaseInfo const VkReleaseSwapchainImagesInfoEXT*
     * returns VkResult
     */
    public function releaseSwapchainImagesEXT(
        \iggyvolz\vulkan\util\ObjectPointer $pReleaseInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pReleaseInfo;
        $cValue = $phpValue->cdata;
        $pReleaseInfoC = $cValue;
        $cValue = $this->exec('vkReleaseSwapchainImagesEXT',
            $pReleaseInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDeviceImageSubresourceInfoKHR> $pInfo const VkDeviceImageSubresourceInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSubresourceLayout2KHR> $pLayout VkSubresourceLayout2KHR*
     */
    public function getDeviceImageSubresourceLayoutKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pLayout,
    ): void
    {
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $phpValue = $pLayout;
        $cValue = $phpValue->cdata;
        $pLayoutC = $cValue;
        $cValue = $this->exec('vkGetDeviceImageSubresourceLayoutKHR',
            $pInfoC,
            $pLayoutC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryMapInfoKHR> $pMemoryMapInfo const VkMemoryMapInfoKHR*
     * @param \iggyvolz\vulkan\util\Pointer $ppData void**
     * returns VkResult
     */
    public function mapMemory2KHR(
        \iggyvolz\vulkan\util\ObjectPointer $pMemoryMapInfo,
        \iggyvolz\vulkan\util\Pointer $ppData,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pMemoryMapInfo;
        $cValue = $phpValue->cdata;
        $pMemoryMapInfoC = $cValue;
        $phpValue = $ppData;
        $cValue = $phpValue->cdata;
        $ppDataC = $cValue;
        $cValue = $this->exec('vkMapMemory2KHR',
            $pMemoryMapInfoC,
            $ppDataC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryUnmapInfoKHR> $pMemoryUnmapInfo const VkMemoryUnmapInfoKHR*
     * returns VkResult
     */
    public function unmapMemory2KHR(
        \iggyvolz\vulkan\util\ObjectPointer $pMemoryUnmapInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pMemoryUnmapInfo;
        $cValue = $phpValue->cdata;
        $pMemoryUnmapInfoC = $cValue;
        $cValue = $this->exec('vkUnmapMemory2KHR',
            $pMemoryUnmapInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param int $createInfoCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkShaderCreateInfoEXT> $pCreateInfos const VkShaderCreateInfoEXT*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkShaderEXT> $pShaders VkShaderEXT*
     * returns VkResult
     */
    public function createShadersEXT(
        int $createInfoCount,
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfos,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pShaders,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $createInfoCount;
        $cValue = $phpValue;
        $createInfoCountC = $cValue;
        $phpValue = $pCreateInfos;
        $cValue = $phpValue->cdata;
        $pCreateInfosC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pShaders;
        $cValue = $phpValue->cdata;
        $pShadersC = $cValue;
        $cValue = $this->exec('vkCreateShadersEXT',
            $createInfoCountC,
            $pCreateInfosC,
            $pAllocatorC,
            $pShadersC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkShaderEXT $shader VkShaderEXT
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyShaderEXT(VkShaderEXT $shader, \iggyvolz\vulkan\util\ObjectPointer $pAllocator): void
    {
        $phpValue = $shader;
        $cValue = $phpValue->cdata;
        $shaderC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyShaderEXT',
            $shaderC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkShaderEXT $shader VkShaderEXT
     * @param \iggyvolz\vulkan\util\IntPointer $pDataSize size_t*
     * @param \iggyvolz\vulkan\util\Pointer $pData void*
     * returns VkResult
     */
    public function getShaderBinaryDataEXT(
        VkShaderEXT $shader,
        \iggyvolz\vulkan\util\IntPointer $pDataSize,
        \iggyvolz\vulkan\util\Pointer $pData,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $shader;
        $cValue = $phpValue->cdata;
        $shaderC = $cValue;
        $phpValue = $pDataSize;
        $cValue = $phpValue->cdata;
        $pDataSizeC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $cValue = $this->exec('vkGetShaderBinaryDataEXT',
            $shaderC,
            $pDataSizeC,
            $pDataC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\Pointer $buffer const struct _screen_buffer*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkScreenBufferPropertiesQNX> $pProperties VkScreenBufferPropertiesQNX*
     * returns VkResult
     */
    public function getScreenBufferPropertiesQNX(
        \iggyvolz\vulkan\util\Pointer $buffer,
        \iggyvolz\vulkan\util\ObjectPointer $pProperties,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $buffer;
        $cValue = $phpValue->cdata;
        $bufferC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->exec('vkGetScreenBufferPropertiesQNX',
            $bufferC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPipeline $executionGraph VkPipeline
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkExecutionGraphPipelineScratchSizeAMDX> $pSizeInfo VkExecutionGraphPipelineScratchSizeAMDX*
     * returns VkResult
     */
    public function getExecutionGraphPipelineScratchSizeAMDX(
        VkPipeline $executionGraph,
        \iggyvolz\vulkan\util\ObjectPointer $pSizeInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $executionGraph;
        $cValue = $phpValue->cdata;
        $executionGraphC = $cValue;
        $phpValue = $pSizeInfo;
        $cValue = $phpValue->cdata;
        $pSizeInfoC = $cValue;
        $cValue = $this->exec('vkGetExecutionGraphPipelineScratchSizeAMDX',
            $executionGraphC,
            $pSizeInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPipeline $executionGraph VkPipeline
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipelineShaderStageNodeCreateInfoAMDX> $pNodeInfo const VkPipelineShaderStageNodeCreateInfoAMDX*
     * @param \iggyvolz\vulkan\util\IntPointer $pNodeIndex uint32_t*
     * returns VkResult
     */
    public function getExecutionGraphPipelineNodeIndexAMDX(
        VkPipeline $executionGraph,
        \iggyvolz\vulkan\util\ObjectPointer $pNodeInfo,
        \iggyvolz\vulkan\util\IntPointer $pNodeIndex,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $executionGraph;
        $cValue = $phpValue->cdata;
        $executionGraphC = $cValue;
        $phpValue = $pNodeInfo;
        $cValue = $phpValue->cdata;
        $pNodeInfoC = $cValue;
        $phpValue = $pNodeIndex;
        $cValue = $phpValue->cdata;
        $pNodeIndexC = $cValue;
        $cValue = $this->exec('vkGetExecutionGraphPipelineNodeIndexAMDX',
            $executionGraphC,
            $pNodeInfoC,
            $pNodeIndexC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPipelineCache $pipelineCache VkPipelineCache
     * @param int $createInfoCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkExecutionGraphPipelineCreateInfoAMDX> $pCreateInfos const VkExecutionGraphPipelineCreateInfoAMDX*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipeline> $pPipelines VkPipeline*
     * returns VkResult
     */
    public function createExecutionGraphPipelinesAMDX(
        VkPipelineCache $pipelineCache,
        int $createInfoCount,
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfos,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pPipelines,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pipelineCache;
        $cValue = $phpValue->cdata;
        $pipelineCacheC = $cValue;
        $phpValue = $createInfoCount;
        $cValue = $phpValue;
        $createInfoCountC = $cValue;
        $phpValue = $pCreateInfos;
        $cValue = $phpValue->cdata;
        $pCreateInfosC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pPipelines;
        $cValue = $phpValue->cdata;
        $pPipelinesC = $cValue;
        $cValue = $this->exec('vkCreateExecutionGraphPipelinesAMDX',
            $pipelineCacheC,
            $createInfoCountC,
            $pCreateInfosC,
            $pAllocatorC,
            $pPipelinesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain VkSwapchainKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkLatencySleepModeInfoNV> $pSleepModeInfo const VkLatencySleepModeInfoNV*
     * returns VkResult
     */
    public function setLatencySleepModeNV(
        VkSwapchainKHR $swapchain,
        \iggyvolz\vulkan\util\ObjectPointer $pSleepModeInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $swapchain;
        $cValue = $phpValue->cdata;
        $swapchainC = $cValue;
        $phpValue = $pSleepModeInfo;
        $cValue = $phpValue->cdata;
        $pSleepModeInfoC = $cValue;
        $cValue = $this->exec('vkSetLatencySleepModeNV',
            $swapchainC,
            $pSleepModeInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain VkSwapchainKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkLatencySleepInfoNV> $pSleepInfo const VkLatencySleepInfoNV*
     * returns VkResult
     */
    public function latencySleepNV(
        VkSwapchainKHR $swapchain,
        \iggyvolz\vulkan\util\ObjectPointer $pSleepInfo,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $swapchain;
        $cValue = $phpValue->cdata;
        $swapchainC = $cValue;
        $phpValue = $pSleepInfo;
        $cValue = $phpValue->cdata;
        $pSleepInfoC = $cValue;
        $cValue = $this->exec('vkLatencySleepNV',
            $swapchainC,
            $pSleepInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain VkSwapchainKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSetLatencyMarkerInfoNV> $pLatencyMarkerInfo const VkSetLatencyMarkerInfoNV*
     */
    public function setLatencyMarkerNV(
        VkSwapchainKHR $swapchain,
        \iggyvolz\vulkan\util\ObjectPointer $pLatencyMarkerInfo,
    ): void
    {
        $phpValue = $swapchain;
        $cValue = $phpValue->cdata;
        $swapchainC = $cValue;
        $phpValue = $pLatencyMarkerInfo;
        $cValue = $phpValue->cdata;
        $pLatencyMarkerInfoC = $cValue;
        $cValue = $this->exec('vkSetLatencyMarkerNV',
            $swapchainC,
            $pLatencyMarkerInfoC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain VkSwapchainKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkGetLatencyMarkerInfoNV> $pLatencyMarkerInfo VkGetLatencyMarkerInfoNV*
     */
    public function getLatencyTimingsNV(
        VkSwapchainKHR $swapchain,
        \iggyvolz\vulkan\util\ObjectPointer $pLatencyMarkerInfo,
    ): void
    {
        $phpValue = $swapchain;
        $cValue = $phpValue->cdata;
        $swapchainC = $cValue;
        $phpValue = $pLatencyMarkerInfo;
        $cValue = $phpValue->cdata;
        $pLatencyMarkerInfoC = $cValue;
        $cValue = $this->exec('vkGetLatencyTimingsNV',
            $swapchainC,
            $pLatencyMarkerInfoC,
        );
    }
}
