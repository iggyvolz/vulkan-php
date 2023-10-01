<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkFormatProperties3
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
        mixed $linearTilingFeatures = null,
        mixed $optimalTilingFeatures = null,
        mixed $bufferFeatures = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkFormatProperties3', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($linearTilingFeatures)) $self->setLinearTilingFeatures($linearTilingFeatures);
        if(!is_null($optimalTilingFeatures)) $self->setOptimalTilingFeatures($optimalTilingFeatures);
        if(!is_null($bufferFeatures)) $self->setBufferFeatures($bufferFeatures);
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
    public function getLinearTilingFeatures(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->linearTilingFeatures;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setLinearTilingFeatures(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->linearTilingFeatures = $cValue;
    }

    /**
     * void* /
     */
    public function getOptimalTilingFeatures(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->optimalTilingFeatures;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setOptimalTilingFeatures(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->optimalTilingFeatures = $cValue;
    }

    /**
     * void* /
     */
    public function getBufferFeatures(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->bufferFeatures;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setBufferFeatures(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->bufferFeatures = $cValue;
    }
}
