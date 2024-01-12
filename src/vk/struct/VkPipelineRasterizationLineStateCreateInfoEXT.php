<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineRasterizationLineStateCreateInfoEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "lineRasterizationMode" => $this->getLineRasterizationMode(),
          "stippledLineEnable" => $this->getStippledLineEnable(),
          "lineStippleFactor" => $this->getLineStippleFactor(),
          "lineStipplePattern" => $this->getLineStipplePattern(),
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
        null|\iggyvolz\vulkan\enum\VkLineRasterizationModeEXT $lineRasterizationMode = null,
        null|bool $stippledLineEnable = null,
        null|int $lineStippleFactor = null,
        null|int $lineStipplePattern = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineRasterizationLineStateCreateInfoEXT', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($lineRasterizationMode)) $self->setLineRasterizationMode($lineRasterizationMode);
        if(!is_null($stippledLineEnable)) $self->setStippledLineEnable($stippledLineEnable);
        if(!is_null($lineStippleFactor)) $self->setLineStippleFactor($lineStippleFactor);
        if(!is_null($lineStipplePattern)) $self->setLineStipplePattern($lineStipplePattern);
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
     * VkLineRasterizationModeEXT/
     */
    public function getLineRasterizationMode(): \iggyvolz\vulkan\enum\VkLineRasterizationModeEXT
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->lineRasterizationMode;
        $phpValue = \iggyvolz\vulkan\enum\VkLineRasterizationModeEXT::from($cValue);
        return $phpValue;
    }

    public function setLineRasterizationMode(\iggyvolz\vulkan\enum\VkLineRasterizationModeEXT $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->lineRasterizationMode = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStippledLineEnable(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->stippledLineEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setStippledLineEnable(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->stippledLineEnable = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getLineStippleFactor(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->lineStippleFactor;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setLineStippleFactor(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->lineStippleFactor = $cValue;
    }

    /**
     * uint16_t/
     */
    public function getLineStipplePattern(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->lineStipplePattern;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setLineStipplePattern(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->lineStipplePattern = $cValue;
    }
}
