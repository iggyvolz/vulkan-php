<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceMaintenance6PropertiesKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "blockTexelViewCompatibleMultipleLayers" => $this->getBlockTexelViewCompatibleMultipleLayers(),
          "maxCombinedImageSamplerDescriptorCount" => $this->getMaxCombinedImageSamplerDescriptorCount(),
          "fragmentShadingRateClampCombinerInputs" => $this->getFragmentShadingRateClampCombinerInputs(),
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
        null|bool $blockTexelViewCompatibleMultipleLayers = null,
        null|int $maxCombinedImageSamplerDescriptorCount = null,
        null|bool $fragmentShadingRateClampCombinerInputs = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceMaintenance6PropertiesKHR', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($blockTexelViewCompatibleMultipleLayers)) $self->setBlockTexelViewCompatibleMultipleLayers($blockTexelViewCompatibleMultipleLayers);
        if(!is_null($maxCombinedImageSamplerDescriptorCount)) $self->setMaxCombinedImageSamplerDescriptorCount($maxCombinedImageSamplerDescriptorCount);
        if(!is_null($fragmentShadingRateClampCombinerInputs)) $self->setFragmentShadingRateClampCombinerInputs($fragmentShadingRateClampCombinerInputs);
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
    public function getBlockTexelViewCompatibleMultipleLayers(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->blockTexelViewCompatibleMultipleLayers;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setBlockTexelViewCompatibleMultipleLayers(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->blockTexelViewCompatibleMultipleLayers = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxCombinedImageSamplerDescriptorCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxCombinedImageSamplerDescriptorCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxCombinedImageSamplerDescriptorCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxCombinedImageSamplerDescriptorCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFragmentShadingRateClampCombinerInputs(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->fragmentShadingRateClampCombinerInputs;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setFragmentShadingRateClampCombinerInputs(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->fragmentShadingRateClampCombinerInputs = $cValue;
    }
}
