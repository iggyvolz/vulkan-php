<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSemaphoreSubmitInfo
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
        null|int $value = null,
        mixed $stageMask = null,
        null|int $deviceIndex = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSemaphoreSubmitInfo', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($semaphore)) $self->setSemaphore($semaphore);
        if(!is_null($value)) $self->setValue($value);
        if(!is_null($stageMask)) $self->setStageMask($stageMask);
        if(!is_null($deviceIndex)) $self->setDeviceIndex($deviceIndex);
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
     * uint64_t/
     */
    public function getValue(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->value;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setValue(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->value = $cValue;
    }

    /**
     * void* /
     */
    public function getStageMask(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->stageMask;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setStageMask(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->stageMask = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDeviceIndex(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->deviceIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDeviceIndex(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->deviceIndex = $cValue;
    }
}
