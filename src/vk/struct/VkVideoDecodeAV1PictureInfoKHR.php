<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoDecodeAV1PictureInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "pStdPictureInfo" => $this->getPStdPictureInfo(),
          "referenceNameSlotIndices" => $this->getReferenceNameSlotIndices(),
          "frameHeaderOffset" => $this->getFrameHeaderOffset(),
          "tileCount" => $this->getTileCount(),
          "pTileOffsets" => $this->getPTileOffsets(),
          "pTileSizes" => $this->getPTileSizes(),
        ];
    }

    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|\iggyvolz\vulkan\util\Pointer $pStdPictureInfo = null,
        mixed $referenceNameSlotIndices = null,
        null|int $frameHeaderOffset = null,
        null|int $tileCount = null,
        null|\iggyvolz\vulkan\util\IntPointer $pTileOffsets = null,
        null|\iggyvolz\vulkan\util\IntPointer $pTileSizes = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoDecodeAV1PictureInfoKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($pStdPictureInfo)) $self->setPStdPictureInfo($pStdPictureInfo);
        if(!is_null($referenceNameSlotIndices)) $self->setReferenceNameSlotIndices($referenceNameSlotIndices);
        if(!is_null($frameHeaderOffset)) $self->setFrameHeaderOffset($frameHeaderOffset);
        if(!is_null($tileCount)) $self->setTileCount($tileCount);
        if(!is_null($pTileOffsets)) $self->setPTileOffsets($pTileOffsets);
        if(!is_null($pTileSizes)) $self->setPTileSizes($pTileSizes);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * void* /
     */
    public function getPStdPictureInfo(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pStdPictureInfo;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPStdPictureInfo(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pStdPictureInfo = $cValue;
    }

    /**
     * void* /
     */
    public function getReferenceNameSlotIndices(): mixed
    {
        $cValue = $this->cdata->referenceNameSlotIndices;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setReferenceNameSlotIndices(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->referenceNameSlotIndices = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFrameHeaderOffset(): int
    {
        $cValue = $this->cdata->frameHeaderOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setFrameHeaderOffset(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->frameHeaderOffset = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getTileCount(): int
    {
        $cValue = $this->cdata->tileCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setTileCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->tileCount = $cValue;
    }

    /**
     * uint32_t* /
     */
    public function getPTileOffsets(): \iggyvolz\vulkan\util\IntPointer
    {
        $cValue = $this->cdata->pTileOffsets;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPTileOffsets(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pTileOffsets = $cValue;
    }

    /**
     * uint32_t* /
     */
    public function getPTileSizes(): \iggyvolz\vulkan\util\IntPointer
    {
        $cValue = $this->cdata->pTileSizes;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPTileSizes(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pTileSizes = $cValue;
    }
}
