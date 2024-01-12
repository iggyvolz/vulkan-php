<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceTexelBufferAlignmentProperties implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "storageTexelBufferOffsetAlignmentBytes" => $this->getStorageTexelBufferOffsetAlignmentBytes(),
          "storageTexelBufferOffsetSingleTexelAlignment" => $this->getStorageTexelBufferOffsetSingleTexelAlignment(),
          "uniformTexelBufferOffsetAlignmentBytes" => $this->getUniformTexelBufferOffsetAlignmentBytes(),
          "uniformTexelBufferOffsetSingleTexelAlignment" => $this->getUniformTexelBufferOffsetSingleTexelAlignment(),
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
        null|int $storageTexelBufferOffsetAlignmentBytes = null,
        null|bool $storageTexelBufferOffsetSingleTexelAlignment = null,
        null|int $uniformTexelBufferOffsetAlignmentBytes = null,
        null|bool $uniformTexelBufferOffsetSingleTexelAlignment = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceTexelBufferAlignmentProperties', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($storageTexelBufferOffsetAlignmentBytes)) $self->setStorageTexelBufferOffsetAlignmentBytes($storageTexelBufferOffsetAlignmentBytes);
        if(!is_null($storageTexelBufferOffsetSingleTexelAlignment)) $self->setStorageTexelBufferOffsetSingleTexelAlignment($storageTexelBufferOffsetSingleTexelAlignment);
        if(!is_null($uniformTexelBufferOffsetAlignmentBytes)) $self->setUniformTexelBufferOffsetAlignmentBytes($uniformTexelBufferOffsetAlignmentBytes);
        if(!is_null($uniformTexelBufferOffsetSingleTexelAlignment)) $self->setUniformTexelBufferOffsetSingleTexelAlignment($uniformTexelBufferOffsetSingleTexelAlignment);
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
     * uint64_t/
     */
    public function getStorageTexelBufferOffsetAlignmentBytes(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->storageTexelBufferOffsetAlignmentBytes;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStorageTexelBufferOffsetAlignmentBytes(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->storageTexelBufferOffsetAlignmentBytes = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStorageTexelBufferOffsetSingleTexelAlignment(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->storageTexelBufferOffsetSingleTexelAlignment;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setStorageTexelBufferOffsetSingleTexelAlignment(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->storageTexelBufferOffsetSingleTexelAlignment = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getUniformTexelBufferOffsetAlignmentBytes(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->uniformTexelBufferOffsetAlignmentBytes;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setUniformTexelBufferOffsetAlignmentBytes(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->uniformTexelBufferOffsetAlignmentBytes = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getUniformTexelBufferOffsetSingleTexelAlignment(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->uniformTexelBufferOffsetSingleTexelAlignment;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setUniformTexelBufferOffsetSingleTexelAlignment(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->uniformTexelBufferOffsetSingleTexelAlignment = $cValue;
    }
}
