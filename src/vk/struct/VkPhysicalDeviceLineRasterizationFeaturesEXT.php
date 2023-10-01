<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceLineRasterizationFeaturesEXT
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
        null|\iggyvolz\vulkan\util\OpaquePointer $pNext = null,
        null|bool $rectangularLines = null,
        null|bool $bresenhamLines = null,
        null|bool $smoothLines = null,
        null|bool $stippledRectangularLines = null,
        null|bool $stippledBresenhamLines = null,
        null|bool $stippledSmoothLines = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceLineRasterizationFeaturesEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($rectangularLines)) $self->setRectangularLines($rectangularLines);
        if(!is_null($bresenhamLines)) $self->setBresenhamLines($bresenhamLines);
        if(!is_null($smoothLines)) $self->setSmoothLines($smoothLines);
        if(!is_null($stippledRectangularLines)) $self->setStippledRectangularLines($stippledRectangularLines);
        if(!is_null($stippledBresenhamLines)) $self->setStippledBresenhamLines($stippledBresenhamLines);
        if(!is_null($stippledSmoothLines)) $self->setStippledSmoothLines($stippledSmoothLines);
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
    public function getPNext(): \iggyvolz\vulkan\util\OpaquePointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\OpaquePointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getRectangularLines(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->rectangularLines;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setRectangularLines(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->rectangularLines = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBresenhamLines(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->bresenhamLines;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setBresenhamLines(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->bresenhamLines = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSmoothLines(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->smoothLines;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSmoothLines(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->smoothLines = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStippledRectangularLines(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->stippledRectangularLines;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setStippledRectangularLines(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->stippledRectangularLines = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStippledBresenhamLines(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->stippledBresenhamLines;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setStippledBresenhamLines(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->stippledBresenhamLines = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStippledSmoothLines(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->stippledSmoothLines;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setStippledSmoothLines(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->stippledSmoothLines = $cValue;
    }
}
