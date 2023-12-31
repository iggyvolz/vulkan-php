<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSubmitInfo2
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
        null|array $flags = null,
        null|int $waitSemaphoreInfoCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pWaitSemaphoreInfos = null,
        null|int $commandBufferInfoCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pCommandBufferInfos = null,
        null|int $signalSemaphoreInfoCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pSignalSemaphoreInfos = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSubmitInfo2', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($waitSemaphoreInfoCount)) $self->setWaitSemaphoreInfoCount($waitSemaphoreInfoCount);
        if(!is_null($pWaitSemaphoreInfos)) $self->setPWaitSemaphoreInfos($pWaitSemaphoreInfos);
        if(!is_null($commandBufferInfoCount)) $self->setCommandBufferInfoCount($commandBufferInfoCount);
        if(!is_null($pCommandBufferInfos)) $self->setPCommandBufferInfos($pCommandBufferInfos);
        if(!is_null($signalSemaphoreInfoCount)) $self->setSignalSemaphoreInfoCount($signalSemaphoreInfoCount);
        if(!is_null($pSignalSemaphoreInfos)) $self->setPSignalSemaphoreInfos($pSignalSemaphoreInfos);
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
     * VkSubmitFlags/
     */
    public function getFlags(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkSubmitFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkSubmitFlagBits::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getWaitSemaphoreInfoCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->waitSemaphoreInfoCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setWaitSemaphoreInfoCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->waitSemaphoreInfoCount = $cValue;
    }

    /**
     * VkSemaphoreSubmitInfo* /
     */
    public function getPWaitSemaphoreInfos(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pWaitSemaphoreInfos;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkSemaphoreSubmitInfo', $cValue, $ffi);
        return $phpValue;
    }

    public function setPWaitSemaphoreInfos(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pWaitSemaphoreInfos = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getCommandBufferInfoCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->commandBufferInfoCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCommandBufferInfoCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->commandBufferInfoCount = $cValue;
    }

    /**
     * VkCommandBufferSubmitInfo* /
     */
    public function getPCommandBufferInfos(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pCommandBufferInfos;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkCommandBufferSubmitInfo', $cValue, $ffi);
        return $phpValue;
    }

    public function setPCommandBufferInfos(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pCommandBufferInfos = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSignalSemaphoreInfoCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->signalSemaphoreInfoCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSignalSemaphoreInfoCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->signalSemaphoreInfoCount = $cValue;
    }

    /**
     * VkSemaphoreSubmitInfo* /
     */
    public function getPSignalSemaphoreInfos(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pSignalSemaphoreInfos;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkSemaphoreSubmitInfo', $cValue, $ffi);
        return $phpValue;
    }

    public function setPSignalSemaphoreInfos(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pSignalSemaphoreInfos = $cValue;
    }
}
