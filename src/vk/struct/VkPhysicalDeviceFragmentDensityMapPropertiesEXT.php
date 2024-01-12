<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceFragmentDensityMapPropertiesEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "minFragmentDensityTexelSize" => $this->getMinFragmentDensityTexelSize(),
          "maxFragmentDensityTexelSize" => $this->getMaxFragmentDensityTexelSize(),
          "fragmentDensityInvocations" => $this->getFragmentDensityInvocations(),
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
        null|VkExtent2D $minFragmentDensityTexelSize = null,
        null|VkExtent2D $maxFragmentDensityTexelSize = null,
        null|bool $fragmentDensityInvocations = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceFragmentDensityMapPropertiesEXT', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($minFragmentDensityTexelSize)) $self->setMinFragmentDensityTexelSize($minFragmentDensityTexelSize);
        if(!is_null($maxFragmentDensityTexelSize)) $self->setMaxFragmentDensityTexelSize($maxFragmentDensityTexelSize);
        if(!is_null($fragmentDensityInvocations)) $self->setFragmentDensityInvocations($fragmentDensityInvocations);
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
     * VkExtent2D/
     */
    public function getMinFragmentDensityTexelSize(): VkExtent2D
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->minFragmentDensityTexelSize;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setMinFragmentDensityTexelSize(VkExtent2D $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->minFragmentDensityTexelSize = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getMaxFragmentDensityTexelSize(): VkExtent2D
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxFragmentDensityTexelSize;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setMaxFragmentDensityTexelSize(VkExtent2D $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->maxFragmentDensityTexelSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFragmentDensityInvocations(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->fragmentDensityInvocations;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setFragmentDensityInvocations(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->fragmentDensityInvocations = $cValue;
    }
}
