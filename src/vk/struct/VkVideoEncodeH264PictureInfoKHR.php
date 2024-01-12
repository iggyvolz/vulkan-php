<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoEncodeH264PictureInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "naluSliceEntryCount" => $this->getNaluSliceEntryCount(),
          "pNaluSliceEntries" => $this->getPNaluSliceEntries(),
          "pStdPictureInfo" => $this->getPStdPictureInfo(),
          "generatePrefixNalu" => $this->getGeneratePrefixNalu(),
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
        null|int $naluSliceEntryCount = null,
        null|\iggyvolz\vulkan\util\Pointer $pNaluSliceEntries = null,
        null|\iggyvolz\vulkan\util\Pointer $pStdPictureInfo = null,
        null|bool $generatePrefixNalu = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoEncodeH264PictureInfoKHR', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($naluSliceEntryCount)) $self->setNaluSliceEntryCount($naluSliceEntryCount);
        if(!is_null($pNaluSliceEntries)) $self->setPNaluSliceEntries($pNaluSliceEntries);
        if(!is_null($pStdPictureInfo)) $self->setPStdPictureInfo($pStdPictureInfo);
        if(!is_null($generatePrefixNalu)) $self->setGeneratePrefixNalu($generatePrefixNalu);
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
     * uint32_t/
     */
    public function getNaluSliceEntryCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->naluSliceEntryCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setNaluSliceEntryCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->naluSliceEntryCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPNaluSliceEntries(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pNaluSliceEntries;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNaluSliceEntries(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNaluSliceEntries = $cValue;
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
    public function getGeneratePrefixNalu(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->generatePrefixNalu;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setGeneratePrefixNalu(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->generatePrefixNalu = $cValue;
    }
}
