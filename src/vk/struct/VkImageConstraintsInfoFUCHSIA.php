<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkImageConstraintsInfoFUCHSIA
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
        null|int $formatConstraintsCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pFormatConstraints = null,
        mixed $bufferCollectionConstraints = null,
        null|array $flags = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkImageConstraintsInfoFUCHSIA', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($formatConstraintsCount)) $self->setFormatConstraintsCount($formatConstraintsCount);
        if(!is_null($pFormatConstraints)) $self->setPFormatConstraints($pFormatConstraints);
        if(!is_null($bufferCollectionConstraints)) $self->setBufferCollectionConstraints($bufferCollectionConstraints);
        if(!is_null($flags)) $self->setFlags($flags);
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
     * uint32_t/
     */
    public function getFormatConstraintsCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->formatConstraintsCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setFormatConstraintsCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->formatConstraintsCount = $cValue;
    }

    /**
     * VkImageFormatConstraintsInfoFUCHSIA* /
     */
    public function getPFormatConstraints(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pFormatConstraints;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkImageFormatConstraintsInfoFUCHSIA', $cValue, $ffi);
        return $phpValue;
    }

    public function setPFormatConstraints(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pFormatConstraints = $cValue;
    }

    /**
     * void* /
     */
    public function getBufferCollectionConstraints(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->bufferCollectionConstraints;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setBufferCollectionConstraints(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->bufferCollectionConstraints = $cValue;
    }

    /**
     * VkImageConstraintsInfoFlagsFUCHSIA/
     */
    public function getFlags(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkImageConstraintsInfoFlagBitsFUCHSIA::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkImageConstraintsInfoFlagBitsFUCHSIA::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }
}
