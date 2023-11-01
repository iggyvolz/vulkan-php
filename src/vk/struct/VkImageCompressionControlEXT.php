<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkImageCompressionControlEXT
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
        null|array $flags = null,
        null|int $compressionControlPlaneCount = null,
        mixed $pFixedRateFlags = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkImageCompressionControlEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($compressionControlPlaneCount)) $self->setCompressionControlPlaneCount($compressionControlPlaneCount);
        if(!is_null($pFixedRateFlags)) $self->setPFixedRateFlags($pFixedRateFlags);
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
     * VkImageCompressionFlagsEXT/
     */
    public function getFlags(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkImageCompressionFlagBitsEXT::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkImageCompressionFlagBitsEXT::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getCompressionControlPlaneCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->compressionControlPlaneCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCompressionControlPlaneCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->compressionControlPlaneCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPFixedRateFlags(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pFixedRateFlags;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPFixedRateFlags(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->pFixedRateFlags = $cValue;
    }
}
