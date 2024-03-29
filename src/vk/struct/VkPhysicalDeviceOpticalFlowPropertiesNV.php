<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceOpticalFlowPropertiesNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "supportedOutputGridSizes" => $this->getSupportedOutputGridSizes(),
          "supportedHintGridSizes" => $this->getSupportedHintGridSizes(),
          "hintSupported" => $this->getHintSupported(),
          "costSupported" => $this->getCostSupported(),
          "bidirectionalFlowSupported" => $this->getBidirectionalFlowSupported(),
          "globalFlowSupported" => $this->getGlobalFlowSupported(),
          "minWidth" => $this->getMinWidth(),
          "minHeight" => $this->getMinHeight(),
          "maxWidth" => $this->getMaxWidth(),
          "maxHeight" => $this->getMaxHeight(),
          "maxNumRegionsOfInterest" => $this->getMaxNumRegionsOfInterest(),
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
        null|array $supportedOutputGridSizes = null,
        null|array $supportedHintGridSizes = null,
        null|bool $hintSupported = null,
        null|bool $costSupported = null,
        null|bool $bidirectionalFlowSupported = null,
        null|bool $globalFlowSupported = null,
        null|int $minWidth = null,
        null|int $minHeight = null,
        null|int $maxWidth = null,
        null|int $maxHeight = null,
        null|int $maxNumRegionsOfInterest = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceOpticalFlowPropertiesNV', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($supportedOutputGridSizes)) $self->setSupportedOutputGridSizes($supportedOutputGridSizes);
        if(!is_null($supportedHintGridSizes)) $self->setSupportedHintGridSizes($supportedHintGridSizes);
        if(!is_null($hintSupported)) $self->setHintSupported($hintSupported);
        if(!is_null($costSupported)) $self->setCostSupported($costSupported);
        if(!is_null($bidirectionalFlowSupported)) $self->setBidirectionalFlowSupported($bidirectionalFlowSupported);
        if(!is_null($globalFlowSupported)) $self->setGlobalFlowSupported($globalFlowSupported);
        if(!is_null($minWidth)) $self->setMinWidth($minWidth);
        if(!is_null($minHeight)) $self->setMinHeight($minHeight);
        if(!is_null($maxWidth)) $self->setMaxWidth($maxWidth);
        if(!is_null($maxHeight)) $self->setMaxHeight($maxHeight);
        if(!is_null($maxNumRegionsOfInterest)) $self->setMaxNumRegionsOfInterest($maxNumRegionsOfInterest);
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
     * VkOpticalFlowGridSizeFlagsNV/
     */
    public function getSupportedOutputGridSizes(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->supportedOutputGridSizes;
        $phpValue = \iggyvolz\vulkan\enum\VkOpticalFlowGridSizeFlagBitsNV::fromInt($cValue);
        return $phpValue;
    }

    public function setSupportedOutputGridSizes(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkOpticalFlowGridSizeFlagBitsNV::toInt(...$phpValue);
        $this->cdata->supportedOutputGridSizes = $cValue;
    }

    /**
     * VkOpticalFlowGridSizeFlagsNV/
     */
    public function getSupportedHintGridSizes(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->supportedHintGridSizes;
        $phpValue = \iggyvolz\vulkan\enum\VkOpticalFlowGridSizeFlagBitsNV::fromInt($cValue);
        return $phpValue;
    }

    public function setSupportedHintGridSizes(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkOpticalFlowGridSizeFlagBitsNV::toInt(...$phpValue);
        $this->cdata->supportedHintGridSizes = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getHintSupported(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->hintSupported;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setHintSupported(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->hintSupported = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getCostSupported(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->costSupported;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setCostSupported(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->costSupported = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBidirectionalFlowSupported(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->bidirectionalFlowSupported;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setBidirectionalFlowSupported(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->bidirectionalFlowSupported = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getGlobalFlowSupported(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->globalFlowSupported;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setGlobalFlowSupported(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->globalFlowSupported = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMinWidth(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->minWidth;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinWidth(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->minWidth = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMinHeight(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->minHeight;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinHeight(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->minHeight = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxWidth(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxWidth;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxWidth(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxWidth = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxHeight(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxHeight;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxHeight(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxHeight = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxNumRegionsOfInterest(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxNumRegionsOfInterest;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxNumRegionsOfInterest(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxNumRegionsOfInterest = $cValue;
    }
}
