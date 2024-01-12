<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSampleLocationsInfoEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "sampleLocationsPerPixel" => $this->getSampleLocationsPerPixel(),
          "sampleLocationGridSize" => $this->getSampleLocationGridSize(),
          "sampleLocationsCount" => $this->getSampleLocationsCount(),
          "pSampleLocations" => $this->getPSampleLocations(),
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
        null|\iggyvolz\vulkan\enum\VkSampleCountFlagBits $sampleLocationsPerPixel = null,
        null|VkExtent2D $sampleLocationGridSize = null,
        null|int $sampleLocationsCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pSampleLocations = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSampleLocationsInfoEXT', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($sampleLocationsPerPixel)) $self->setSampleLocationsPerPixel($sampleLocationsPerPixel);
        if(!is_null($sampleLocationGridSize)) $self->setSampleLocationGridSize($sampleLocationGridSize);
        if(!is_null($sampleLocationsCount)) $self->setSampleLocationsCount($sampleLocationsCount);
        if(!is_null($pSampleLocations)) $self->setPSampleLocations($pSampleLocations);
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
     * VkSampleCountFlagBits/
     */
    public function getSampleLocationsPerPixel(): \iggyvolz\vulkan\enum\VkSampleCountFlagBits
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sampleLocationsPerPixel;
        $phpValue = \iggyvolz\vulkan\enum\VkSampleCountFlagBits::from($cValue);
        return $phpValue;
    }

    public function setSampleLocationsPerPixel(\iggyvolz\vulkan\enum\VkSampleCountFlagBits $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sampleLocationsPerPixel = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getSampleLocationGridSize(): VkExtent2D
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sampleLocationGridSize;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setSampleLocationGridSize(VkExtent2D $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->sampleLocationGridSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSampleLocationsCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sampleLocationsCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSampleLocationsCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->sampleLocationsCount = $cValue;
    }

    /**
     * VkSampleLocationEXT* /
     */
    public function getPSampleLocations(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pSampleLocations;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkSampleLocationEXT', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPSampleLocations(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pSampleLocations = $cValue;
    }
}
