<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSemaphoreWaitInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "semaphoreCount" => $this->getSemaphoreCount(),
          "pSemaphores" => $this->getPSemaphores(),
          "pValues" => $this->getPValues(),
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
        null|array $flags = null,
        null|int $semaphoreCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pSemaphores = null,
        null|\iggyvolz\vulkan\util\IntPointer $pValues = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSemaphoreWaitInfo', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($semaphoreCount)) $self->setSemaphoreCount($semaphoreCount);
        if(!is_null($pSemaphores)) $self->setPSemaphores($pSemaphores);
        if(!is_null($pValues)) $self->setPValues($pValues);
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
     * VkSemaphoreWaitFlags/
     */
    public function getFlags(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkSemaphoreWaitFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkSemaphoreWaitFlagBits::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSemaphoreCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->semaphoreCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSemaphoreCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->semaphoreCount = $cValue;
    }

    /**
     * VkSemaphore* /
     */
    public function getPSemaphores(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pSemaphores;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkSemaphore', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPSemaphores(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pSemaphores = $cValue;
    }

    /**
     * uint64_t* /
     */
    public function getPValues(): \iggyvolz\vulkan\util\IntPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pValues;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPValues(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pValues = $cValue;
    }
}
