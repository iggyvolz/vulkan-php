<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoDecodeH265PictureInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "pStdPictureInfo" => $this->getPStdPictureInfo(),
          "sliceSegmentCount" => $this->getSliceSegmentCount(),
          "pSliceSegmentOffsets" => $this->getPSliceSegmentOffsets(),
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
        null|\iggyvolz\vulkan\util\Pointer $pStdPictureInfo = null,
        null|int $sliceSegmentCount = null,
        null|\iggyvolz\vulkan\util\IntPointer $pSliceSegmentOffsets = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoDecodeH265PictureInfoKHR', false), $vulkan);
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
     * void* /
     */
    public function getPStdPictureInfo(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pStdPictureInfo;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPStdPictureInfo(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pStdPictureInfo = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSliceSegmentCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sliceSegmentCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSliceSegmentCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->sliceSegmentCount = $cValue;
    }

    /**
     * uint32_t* /
     */
    public function getPSliceSegmentOffsets(): \iggyvolz\vulkan\util\IntPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pSliceSegmentOffsets;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPSliceSegmentOffsets(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pSliceSegmentOffsets = $cValue;
    }
}
