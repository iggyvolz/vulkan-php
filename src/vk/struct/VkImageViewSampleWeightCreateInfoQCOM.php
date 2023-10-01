<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkImageViewSampleWeightCreateInfoQCOM
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
        null|VkOffset2D $filterCenter = null,
        null|VkExtent2D $filterSize = null,
        null|int $numPhases = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkImageViewSampleWeightCreateInfoQCOM', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($filterCenter)) $self->setFilterCenter($filterCenter);
        if(!is_null($filterSize)) $self->setFilterSize($filterSize);
        if(!is_null($numPhases)) $self->setNumPhases($numPhases);
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
     * VkOffset2D/
     */
    public function getFilterCenter(): VkOffset2D
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->filterCenter;
        $phpValue = new \iggyvolz\vulkan\struct\VkOffset2D($cValue, $ffi);
        return $phpValue;
    }

    public function setFilterCenter(VkOffset2D $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->filterCenter = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getFilterSize(): VkExtent2D
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->filterSize;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setFilterSize(VkExtent2D $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->filterSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getNumPhases(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->numPhases;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setNumPhases(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->numPhases = $cValue;
    }
}
