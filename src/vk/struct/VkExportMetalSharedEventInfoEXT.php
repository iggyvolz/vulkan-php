<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkExportMetalSharedEventInfoEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "semaphore" => $this->getSemaphore(),
          "event" => $this->getEvent(),
          "mtlSharedEvent" => $this->getMtlSharedEvent(),
        ];
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

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|VkSemaphore $semaphore = null,
        null|VkEvent $event = null,
        mixed $mtlSharedEvent = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkExportMetalSharedEventInfoEXT', false), $vulkan);
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
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * VkSemaphore/
     */
    public function getSemaphore(): VkSemaphore
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->semaphore;
        $phpValue = new \iggyvolz\vulkan\struct\VkSemaphore($cValue, $ffi);
        return $phpValue;
    }

    public function setSemaphore(VkSemaphore $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->semaphore = $cValue;
    }

    /**
     * VkEvent/
     */
    public function getEvent(): VkEvent
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->event;
        $phpValue = new \iggyvolz\vulkan\struct\VkEvent($cValue, $ffi);
        return $phpValue;
    }

    public function setEvent(VkEvent $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->event = $cValue;
    }

    /**
     * void* /
     */
    public function getMtlSharedEvent(): mixed
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->mtlSharedEvent;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setMtlSharedEvent(mixed $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->mtlSharedEvent = $cValue;
    }
}
