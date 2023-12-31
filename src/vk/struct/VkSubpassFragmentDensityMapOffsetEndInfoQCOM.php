<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSubpassFragmentDensityMapOffsetEndInfoQCOM
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
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|int $fragmentDensityOffsetCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pFragmentDensityOffsets = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSubpassFragmentDensityMapOffsetEndInfoQCOM', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($fragmentDensityOffsetCount)) $self->setFragmentDensityOffsetCount($fragmentDensityOffsetCount);
        if(!is_null($pFragmentDensityOffsets)) $self->setPFragmentDensityOffsets($pFragmentDensityOffsets);
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
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFragmentDensityOffsetCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->fragmentDensityOffsetCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setFragmentDensityOffsetCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->fragmentDensityOffsetCount = $cValue;
    }

    /**
     * VkOffset2D* /
     */
    public function getPFragmentDensityOffsets(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pFragmentDensityOffsets;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkOffset2D', $cValue, $ffi);
        return $phpValue;
    }

    public function setPFragmentDensityOffsets(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pFragmentDensityOffsets = $cValue;
    }
}
