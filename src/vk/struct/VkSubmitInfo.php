<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSubmitInfo
{
    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \FFI $ffi,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|int $waitSemaphoreCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pWaitSemaphores = null,
        null|\iggyvolz\vulkan\util\Pointer $pWaitDstStageMask = null,
        null|int $commandBufferCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pCommandBuffers = null,
        null|int $signalSemaphoreCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pSignalSemaphores = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSubmitInfo', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($waitSemaphoreCount)) $self->setWaitSemaphoreCount($waitSemaphoreCount);
        if(!is_null($pWaitSemaphores)) $self->setPWaitSemaphores($pWaitSemaphores);
        if(!is_null($pWaitDstStageMask)) $self->setPWaitDstStageMask($pWaitDstStageMask);
        if(!is_null($commandBufferCount)) $self->setCommandBufferCount($commandBufferCount);
        if(!is_null($pCommandBuffers)) $self->setPCommandBuffers($pCommandBuffers);
        if(!is_null($signalSemaphoreCount)) $self->setSignalSemaphoreCount($signalSemaphoreCount);
        if(!is_null($pSignalSemaphores)) $self->setPSignalSemaphores($pSignalSemaphores);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getWaitSemaphoreCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->waitSemaphoreCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setWaitSemaphoreCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->waitSemaphoreCount = $cValue;
    }

    /**
     * VkSemaphore* /
     */
    public function getPWaitSemaphores(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pWaitSemaphores;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkSemaphore', $cValue, $ffi);
        return $phpValue;
    }

    public function setPWaitSemaphores(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pWaitSemaphores = $cValue;
    }

    /**
     * void* /
     */
    public function getPWaitDstStageMask(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pWaitDstStageMask;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPWaitDstStageMask(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pWaitDstStageMask = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getCommandBufferCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->commandBufferCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCommandBufferCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->commandBufferCount = $cValue;
    }

    /**
     * VkCommandBuffer* /
     */
    public function getPCommandBuffers(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pCommandBuffers;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkCommandBuffer', $cValue, $ffi);
        return $phpValue;
    }

    public function setPCommandBuffers(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pCommandBuffers = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSignalSemaphoreCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->signalSemaphoreCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSignalSemaphoreCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->signalSemaphoreCount = $cValue;
    }

    /**
     * VkSemaphore* /
     */
    public function getPSignalSemaphores(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pSignalSemaphores;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkSemaphore', $cValue, $ffi);
        return $phpValue;
    }

    public function setPSignalSemaphores(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pSignalSemaphores = $cValue;
    }
}
