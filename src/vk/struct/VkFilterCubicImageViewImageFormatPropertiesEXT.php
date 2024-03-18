<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkFilterCubicImageViewImageFormatPropertiesEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "filterCubic" => $this->getFilterCubic(),
          "filterCubicMinmax" => $this->getFilterCubicMinmax(),
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
        null|bool $filterCubic = null,
        null|bool $filterCubicMinmax = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkFilterCubicImageViewImageFormatPropertiesEXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($filterCubic)) $self->setFilterCubic($filterCubic);
        if(!is_null($filterCubicMinmax)) $self->setFilterCubicMinmax($filterCubicMinmax);
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
     * uint32_t/
     */
    public function getFilterCubic(): bool
    {
        $cValue = $this->cdata->filterCubic;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setFilterCubic(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->filterCubic = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFilterCubicMinmax(): bool
    {
        $cValue = $this->cdata->filterCubicMinmax;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setFilterCubicMinmax(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->filterCubicMinmax = $cValue;
    }
}
