<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceFragmentDensityMapFeaturesEXT
{
    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \FFI $ffi,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|bool $fragmentDensityMap = null,
        null|bool $fragmentDensityMapDynamic = null,
        null|bool $fragmentDensityMapNonSubsampledImages = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceFragmentDensityMapFeaturesEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($fragmentDensityMap)) $self->setFragmentDensityMap($fragmentDensityMap);
        if(!is_null($fragmentDensityMapDynamic)) $self->setFragmentDensityMapDynamic($fragmentDensityMapDynamic);
        if(!is_null($fragmentDensityMapNonSubsampledImages)) $self->setFragmentDensityMapNonSubsampledImages($fragmentDensityMapNonSubsampledImages);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFragmentDensityMap(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->fragmentDensityMap;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setFragmentDensityMap(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->fragmentDensityMap = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFragmentDensityMapDynamic(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->fragmentDensityMapDynamic;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setFragmentDensityMapDynamic(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->fragmentDensityMapDynamic = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFragmentDensityMapNonSubsampledImages(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->fragmentDensityMapNonSubsampledImages;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setFragmentDensityMapNonSubsampledImages(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->fragmentDensityMapNonSubsampledImages = $cValue;
    }
}
