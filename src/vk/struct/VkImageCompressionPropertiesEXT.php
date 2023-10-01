<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkImageCompressionPropertiesEXT
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
        mixed $imageCompressionFlags = null,
        mixed $imageCompressionFixedRateFlags = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkImageCompressionPropertiesEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($imageCompressionFlags)) $self->setImageCompressionFlags($imageCompressionFlags);
        if(!is_null($imageCompressionFixedRateFlags)) $self->setImageCompressionFixedRateFlags($imageCompressionFixedRateFlags);
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
     * void* /
     */
    public function getImageCompressionFlags(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->imageCompressionFlags;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setImageCompressionFlags(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->imageCompressionFlags = $cValue;
    }

    /**
     * void* /
     */
    public function getImageCompressionFixedRateFlags(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->imageCompressionFixedRateFlags;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setImageCompressionFixedRateFlags(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->imageCompressionFixedRateFlags = $cValue;
    }
}
