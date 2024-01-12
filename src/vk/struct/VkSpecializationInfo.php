<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSpecializationInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "mapEntryCount" => $this->getMapEntryCount(),
          "pMapEntries" => $this->getPMapEntries(),
          "dataSize" => $this->getDataSize(),
          "pData" => $this->getPData(),
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
        null|int $mapEntryCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pMapEntries = null,
        null|int $dataSize = null,
        null|\iggyvolz\vulkan\util\Pointer $pData = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSpecializationInfo', false), $vulkan);
        if(!is_null($mapEntryCount)) $self->setMapEntryCount($mapEntryCount);
        if(!is_null($pMapEntries)) $self->setPMapEntries($pMapEntries);
        if(!is_null($dataSize)) $self->setDataSize($dataSize);
        if(!is_null($pData)) $self->setPData($pData);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getMapEntryCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->mapEntryCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMapEntryCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->mapEntryCount = $cValue;
    }

    /**
     * VkSpecializationMapEntry* /
     */
    public function getPMapEntries(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pMapEntries;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkSpecializationMapEntry', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPMapEntries(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pMapEntries = $cValue;
    }

    /**
     * size_t/
     */
    public function getDataSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->dataSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDataSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->dataSize = $cValue;
    }

    /**
     * void* /
     */
    public function getPData(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pData;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPData(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pData = $cValue;
    }
}
