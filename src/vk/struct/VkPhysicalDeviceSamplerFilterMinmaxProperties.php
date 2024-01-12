<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceSamplerFilterMinmaxProperties implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "filterMinmaxSingleComponentFormats" => $this->getFilterMinmaxSingleComponentFormats(),
          "filterMinmaxImageComponentMapping" => $this->getFilterMinmaxImageComponentMapping(),
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
        null|bool $filterMinmaxSingleComponentFormats = null,
        null|bool $filterMinmaxImageComponentMapping = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceSamplerFilterMinmaxProperties', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($filterMinmaxSingleComponentFormats)) $self->setFilterMinmaxSingleComponentFormats($filterMinmaxSingleComponentFormats);
        if(!is_null($filterMinmaxImageComponentMapping)) $self->setFilterMinmaxImageComponentMapping($filterMinmaxImageComponentMapping);
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
    public function getFilterMinmaxSingleComponentFormats(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->filterMinmaxSingleComponentFormats;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setFilterMinmaxSingleComponentFormats(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->filterMinmaxSingleComponentFormats = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFilterMinmaxImageComponentMapping(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->filterMinmaxImageComponentMapping;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setFilterMinmaxImageComponentMapping(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->filterMinmaxImageComponentMapping = $cValue;
    }
}
