<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceShadingRateImagePropertiesNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "shadingRateTexelSize" => $this->getShadingRateTexelSize(),
          "shadingRatePaletteSize" => $this->getShadingRatePaletteSize(),
          "shadingRateMaxCoarseSamples" => $this->getShadingRateMaxCoarseSamples(),
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
        null|VkExtent2D $shadingRateTexelSize = null,
        null|int $shadingRatePaletteSize = null,
        null|int $shadingRateMaxCoarseSamples = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceShadingRateImagePropertiesNV', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($shadingRateTexelSize)) $self->setShadingRateTexelSize($shadingRateTexelSize);
        if(!is_null($shadingRatePaletteSize)) $self->setShadingRatePaletteSize($shadingRatePaletteSize);
        if(!is_null($shadingRateMaxCoarseSamples)) $self->setShadingRateMaxCoarseSamples($shadingRateMaxCoarseSamples);
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
     * VkExtent2D/
     */
    public function getShadingRateTexelSize(): VkExtent2D
    {
        $cValue = $this->cdata->shadingRateTexelSize;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setShadingRateTexelSize(VkExtent2D $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->shadingRateTexelSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShadingRatePaletteSize(): int
    {
        $cValue = $this->cdata->shadingRatePaletteSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setShadingRatePaletteSize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->shadingRatePaletteSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShadingRateMaxCoarseSamples(): int
    {
        $cValue = $this->cdata->shadingRateMaxCoarseSamples;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setShadingRateMaxCoarseSamples(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->shadingRateMaxCoarseSamples = $cValue;
    }
}
