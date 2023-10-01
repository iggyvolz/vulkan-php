<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoDecodeH265PictureInfoKHR
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
        mixed $pStdPictureInfo = null,
        null|int $sliceSegmentCount = null,
        null|\iggyvolz\vulkan\util\IntPointer $pSliceSegmentOffsets = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoDecodeH265PictureInfoKHR', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($pStdPictureInfo)) $self->setPStdPictureInfo($pStdPictureInfo);
        if(!is_null($sliceSegmentCount)) $self->setSliceSegmentCount($sliceSegmentCount);
        if(!is_null($pSliceSegmentOffsets)) $self->setPSliceSegmentOffsets($pSliceSegmentOffsets);
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
    public function getPStdPictureInfo(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pStdPictureInfo;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPStdPictureInfo(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->pStdPictureInfo = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSliceSegmentCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->sliceSegmentCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSliceSegmentCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->sliceSegmentCount = $cValue;
    }

    /**
     * uint32_t* /
     */
    public function getPSliceSegmentOffsets(): \iggyvolz\vulkan\util\IntPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pSliceSegmentOffsets;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPSliceSegmentOffsets(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pSliceSegmentOffsets = $cValue;
    }
}
