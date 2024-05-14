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
    ) {
    }

    public static function create(
        \FFI $ffi,
        null|int $mapEntryCount = null,
        null|VkSpecializationMapEntry $pMapEntries = null,
        null|int $dataSize = null,
        null|\iggyvolz\vulkan\util\Pointer $pData = null,
    ): self {
        $self = new self( $ffi->new('VkSpecializationInfo', false));
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
        $cValue = $this->cdata->mapEntryCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMapEntryCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->mapEntryCount = $cValue;
    }

    /**
     * VkSpecializationMapEntry* /
     */
    public function getPMapEntries(): VkSpecializationMapEntry
    {
        $cValue = $this->cdata->pMapEntries;
        $phpValue = new \iggyvolz\vulkan\struct\VkSpecializationMapEntry($cValue);
        return $phpValue;
    }

    public function setPMapEntries(VkSpecializationMapEntry $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pMapEntries = $cValue;
    }

    /**
     * size_t/
     */
    public function getDataSize(): int
    {
        $cValue = $this->cdata->dataSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDataSize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->dataSize = $cValue;
    }

    /**
     * void* /
     */
    public function getPData(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pData;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPData(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pData = $cValue;
    }
}
