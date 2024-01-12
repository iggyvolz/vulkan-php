<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceSampleLocationsPropertiesEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "sampleLocationSampleCounts" => $this->getSampleLocationSampleCounts(),
          "maxSampleLocationGridSize" => $this->getMaxSampleLocationGridSize(),
          "sampleLocationCoordinateRange" => $this->getSampleLocationCoordinateRange(),
          "sampleLocationSubPixelBits" => $this->getSampleLocationSubPixelBits(),
          "variableSampleLocations" => $this->getVariableSampleLocations(),
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
        null|array $sampleLocationSampleCounts = null,
        null|VkExtent2D $maxSampleLocationGridSize = null,
        mixed $sampleLocationCoordinateRange = null,
        null|int $sampleLocationSubPixelBits = null,
        null|bool $variableSampleLocations = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceSampleLocationsPropertiesEXT', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($sampleLocationSampleCounts)) $self->setSampleLocationSampleCounts($sampleLocationSampleCounts);
        if(!is_null($maxSampleLocationGridSize)) $self->setMaxSampleLocationGridSize($maxSampleLocationGridSize);
        if(!is_null($sampleLocationCoordinateRange)) $self->setSampleLocationCoordinateRange($sampleLocationCoordinateRange);
        if(!is_null($sampleLocationSubPixelBits)) $self->setSampleLocationSubPixelBits($sampleLocationSubPixelBits);
        if(!is_null($variableSampleLocations)) $self->setVariableSampleLocations($variableSampleLocations);
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
     * VkSampleCountFlags/
     */
    public function getSampleLocationSampleCounts(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sampleLocationSampleCounts;
        $phpValue = \iggyvolz\vulkan\enum\VkSampleCountFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setSampleLocationSampleCounts(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkSampleCountFlagBits::toInt(...$phpValue);
        $this->cdata->sampleLocationSampleCounts = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getMaxSampleLocationGridSize(): VkExtent2D
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxSampleLocationGridSize;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setMaxSampleLocationGridSize(VkExtent2D $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->maxSampleLocationGridSize = $cValue;
    }

    /**
     * void* /
     */
    public function getSampleLocationCoordinateRange(): mixed
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sampleLocationCoordinateRange;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setSampleLocationCoordinateRange(mixed $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->sampleLocationCoordinateRange = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSampleLocationSubPixelBits(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sampleLocationSubPixelBits;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSampleLocationSubPixelBits(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->sampleLocationSubPixelBits = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getVariableSampleLocations(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->variableSampleLocations;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setVariableSampleLocations(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->variableSampleLocations = $cValue;
    }
}
