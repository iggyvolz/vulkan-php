<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkOpticalFlowSessionCreateInfoNV
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
        null|int $width = null,
        null|int $height = null,
        null|\iggyvolz\vulkan\enum\VkFormat $imageFormat = null,
        null|\iggyvolz\vulkan\enum\VkFormat $flowVectorFormat = null,
        null|\iggyvolz\vulkan\enum\VkFormat $costFormat = null,
        null|array $outputGridSize = null,
        null|array $hintGridSize = null,
        null|\iggyvolz\vulkan\enum\VkOpticalFlowPerformanceLevelNV $performanceLevel = null,
        null|array $flags = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkOpticalFlowSessionCreateInfoNV', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($width)) $self->setWidth($width);
        if(!is_null($height)) $self->setHeight($height);
        if(!is_null($imageFormat)) $self->setImageFormat($imageFormat);
        if(!is_null($flowVectorFormat)) $self->setFlowVectorFormat($flowVectorFormat);
        if(!is_null($costFormat)) $self->setCostFormat($costFormat);
        if(!is_null($outputGridSize)) $self->setOutputGridSize($outputGridSize);
        if(!is_null($hintGridSize)) $self->setHintGridSize($hintGridSize);
        if(!is_null($performanceLevel)) $self->setPerformanceLevel($performanceLevel);
        if(!is_null($flags)) $self->setFlags($flags);
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
    public function getWidth(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->width;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setWidth(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->width = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getHeight(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->height;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setHeight(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->height = $cValue;
    }

    /**
     * VkFormat/
     */
    public function getImageFormat(): \iggyvolz\vulkan\enum\VkFormat
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->imageFormat;
        $phpValue = \iggyvolz\vulkan\enum\VkFormat::from($cValue);
        return $phpValue;
    }

    public function setImageFormat(\iggyvolz\vulkan\enum\VkFormat $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->imageFormat = $cValue;
    }

    /**
     * VkFormat/
     */
    public function getFlowVectorFormat(): \iggyvolz\vulkan\enum\VkFormat
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->flowVectorFormat;
        $phpValue = \iggyvolz\vulkan\enum\VkFormat::from($cValue);
        return $phpValue;
    }

    public function setFlowVectorFormat(\iggyvolz\vulkan\enum\VkFormat $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->flowVectorFormat = $cValue;
    }

    /**
     * VkFormat/
     */
    public function getCostFormat(): \iggyvolz\vulkan\enum\VkFormat
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->costFormat;
        $phpValue = \iggyvolz\vulkan\enum\VkFormat::from($cValue);
        return $phpValue;
    }

    public function setCostFormat(\iggyvolz\vulkan\enum\VkFormat $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->costFormat = $cValue;
    }

    /**
     * VkOpticalFlowGridSizeFlagsNV/
     */
    public function getOutputGridSize(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->outputGridSize;
        $phpValue = \iggyvolz\vulkan\enum\VkOpticalFlowGridSizeFlagBitsNV::fromInt($cValue);
        return $phpValue;
    }

    public function setOutputGridSize(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkOpticalFlowGridSizeFlagBitsNV::toInt(...$phpValue);
        $this->cdata->outputGridSize = $cValue;
    }

    /**
     * VkOpticalFlowGridSizeFlagsNV/
     */
    public function getHintGridSize(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->hintGridSize;
        $phpValue = \iggyvolz\vulkan\enum\VkOpticalFlowGridSizeFlagBitsNV::fromInt($cValue);
        return $phpValue;
    }

    public function setHintGridSize(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkOpticalFlowGridSizeFlagBitsNV::toInt(...$phpValue);
        $this->cdata->hintGridSize = $cValue;
    }

    /**
     * VkOpticalFlowPerformanceLevelNV/
     */
    public function getPerformanceLevel(): \iggyvolz\vulkan\enum\VkOpticalFlowPerformanceLevelNV
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->performanceLevel;
        $phpValue = \iggyvolz\vulkan\enum\VkOpticalFlowPerformanceLevelNV::from($cValue);
        return $phpValue;
    }

    public function setPerformanceLevel(\iggyvolz\vulkan\enum\VkOpticalFlowPerformanceLevelNV $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->performanceLevel = $cValue;
    }

    /**
     * VkOpticalFlowSessionCreateFlagsNV/
     */
    public function getFlags(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkOpticalFlowSessionCreateFlagBitsNV::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkOpticalFlowSessionCreateFlagBitsNV::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }
}
