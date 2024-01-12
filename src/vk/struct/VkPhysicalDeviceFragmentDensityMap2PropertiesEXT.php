<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceFragmentDensityMap2PropertiesEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "subsampledLoads" => $this->getSubsampledLoads(),
          "subsampledCoarseReconstructionEarlyAccess" => $this->getSubsampledCoarseReconstructionEarlyAccess(),
          "maxSubsampledArrayLayers" => $this->getMaxSubsampledArrayLayers(),
          "maxDescriptorSetSubsampledSamplers" => $this->getMaxDescriptorSetSubsampledSamplers(),
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
        null|bool $subsampledLoads = null,
        null|bool $subsampledCoarseReconstructionEarlyAccess = null,
        null|int $maxSubsampledArrayLayers = null,
        null|int $maxDescriptorSetSubsampledSamplers = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceFragmentDensityMap2PropertiesEXT', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($subsampledLoads)) $self->setSubsampledLoads($subsampledLoads);
        if(!is_null($subsampledCoarseReconstructionEarlyAccess)) $self->setSubsampledCoarseReconstructionEarlyAccess($subsampledCoarseReconstructionEarlyAccess);
        if(!is_null($maxSubsampledArrayLayers)) $self->setMaxSubsampledArrayLayers($maxSubsampledArrayLayers);
        if(!is_null($maxDescriptorSetSubsampledSamplers)) $self->setMaxDescriptorSetSubsampledSamplers($maxDescriptorSetSubsampledSamplers);
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
    public function getSubsampledLoads(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->subsampledLoads;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSubsampledLoads(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->subsampledLoads = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSubsampledCoarseReconstructionEarlyAccess(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->subsampledCoarseReconstructionEarlyAccess;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSubsampledCoarseReconstructionEarlyAccess(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->subsampledCoarseReconstructionEarlyAccess = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxSubsampledArrayLayers(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxSubsampledArrayLayers;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxSubsampledArrayLayers(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxSubsampledArrayLayers = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDescriptorSetSubsampledSamplers(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxDescriptorSetSubsampledSamplers;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDescriptorSetSubsampledSamplers(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDescriptorSetSubsampledSamplers = $cValue;
    }
}
