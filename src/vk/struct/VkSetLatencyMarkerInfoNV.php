<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSetLatencyMarkerInfoNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "presentID" => $this->getPresentID(),
          "marker" => $this->getMarker(),
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
        null|int $presentID = null,
        null|\iggyvolz\vulkan\enum\VkLatencyMarkerNV $marker = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSetLatencyMarkerInfoNV', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($presentID)) $self->setPresentID($presentID);
        if(!is_null($marker)) $self->setMarker($marker);
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
     * uint64_t/
     */
    public function getPresentID(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->presentID;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPresentID(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->presentID = $cValue;
    }

    /**
     * VkLatencyMarkerNV/
     */
    public function getMarker(): \iggyvolz\vulkan\enum\VkLatencyMarkerNV
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->marker;
        $phpValue = \iggyvolz\vulkan\enum\VkLatencyMarkerNV::from($cValue);
        return $phpValue;
    }

    public function setMarker(\iggyvolz\vulkan\enum\VkLatencyMarkerNV $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->marker = $cValue;
    }
}
