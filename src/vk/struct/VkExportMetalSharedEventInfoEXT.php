<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkExportMetalSharedEventInfoEXT
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
        null|\iggyvolz\vulkan\util\OpaquePointer $pNext = null,
        null|VkSemaphore $semaphore = null,
        null|VkEvent $event = null,
        mixed $mtlSharedEvent = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkExportMetalSharedEventInfoEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($semaphore)) $self->setSemaphore($semaphore);
        if(!is_null($event)) $self->setEvent($event);
        if(!is_null($mtlSharedEvent)) $self->setMtlSharedEvent($mtlSharedEvent);
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
    public function getPNext(): \iggyvolz\vulkan\util\OpaquePointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\OpaquePointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * VkSemaphore/
     */
    public function getSemaphore(): VkSemaphore
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->semaphore;
        $phpValue = new \iggyvolz\vulkan\struct\VkSemaphore($cValue, $ffi);
        return $phpValue;
    }

    public function setSemaphore(VkSemaphore $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->semaphore = $cValue;
    }

    /**
     * VkEvent/
     */
    public function getEvent(): VkEvent
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->event;
        $phpValue = new \iggyvolz\vulkan\struct\VkEvent($cValue, $ffi);
        return $phpValue;
    }

    public function setEvent(VkEvent $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->event = $cValue;
    }

    /**
     * void* /
     */
    public function getMtlSharedEvent(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->mtlSharedEvent;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setMtlSharedEvent(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->mtlSharedEvent = $cValue;
    }
}
