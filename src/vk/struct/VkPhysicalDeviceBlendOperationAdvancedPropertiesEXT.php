<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceBlendOperationAdvancedPropertiesEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "advancedBlendMaxColorAttachments" => $this->getAdvancedBlendMaxColorAttachments(),
          "advancedBlendIndependentBlend" => $this->getAdvancedBlendIndependentBlend(),
          "advancedBlendNonPremultipliedSrcColor" => $this->getAdvancedBlendNonPremultipliedSrcColor(),
          "advancedBlendNonPremultipliedDstColor" => $this->getAdvancedBlendNonPremultipliedDstColor(),
          "advancedBlendCorrelatedOverlap" => $this->getAdvancedBlendCorrelatedOverlap(),
          "advancedBlendAllOperations" => $this->getAdvancedBlendAllOperations(),
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
        null|int $advancedBlendMaxColorAttachments = null,
        null|bool $advancedBlendIndependentBlend = null,
        null|bool $advancedBlendNonPremultipliedSrcColor = null,
        null|bool $advancedBlendNonPremultipliedDstColor = null,
        null|bool $advancedBlendCorrelatedOverlap = null,
        null|bool $advancedBlendAllOperations = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceBlendOperationAdvancedPropertiesEXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($advancedBlendMaxColorAttachments)) $self->setAdvancedBlendMaxColorAttachments($advancedBlendMaxColorAttachments);
        if(!is_null($advancedBlendIndependentBlend)) $self->setAdvancedBlendIndependentBlend($advancedBlendIndependentBlend);
        if(!is_null($advancedBlendNonPremultipliedSrcColor)) $self->setAdvancedBlendNonPremultipliedSrcColor($advancedBlendNonPremultipliedSrcColor);
        if(!is_null($advancedBlendNonPremultipliedDstColor)) $self->setAdvancedBlendNonPremultipliedDstColor($advancedBlendNonPremultipliedDstColor);
        if(!is_null($advancedBlendCorrelatedOverlap)) $self->setAdvancedBlendCorrelatedOverlap($advancedBlendCorrelatedOverlap);
        if(!is_null($advancedBlendAllOperations)) $self->setAdvancedBlendAllOperations($advancedBlendAllOperations);
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
    public function getAdvancedBlendMaxColorAttachments(): int
    {
        $cValue = $this->cdata->advancedBlendMaxColorAttachments;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setAdvancedBlendMaxColorAttachments(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->advancedBlendMaxColorAttachments = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getAdvancedBlendIndependentBlend(): bool
    {
        $cValue = $this->cdata->advancedBlendIndependentBlend;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setAdvancedBlendIndependentBlend(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->advancedBlendIndependentBlend = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getAdvancedBlendNonPremultipliedSrcColor(): bool
    {
        $cValue = $this->cdata->advancedBlendNonPremultipliedSrcColor;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setAdvancedBlendNonPremultipliedSrcColor(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->advancedBlendNonPremultipliedSrcColor = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getAdvancedBlendNonPremultipliedDstColor(): bool
    {
        $cValue = $this->cdata->advancedBlendNonPremultipliedDstColor;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setAdvancedBlendNonPremultipliedDstColor(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->advancedBlendNonPremultipliedDstColor = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getAdvancedBlendCorrelatedOverlap(): bool
    {
        $cValue = $this->cdata->advancedBlendCorrelatedOverlap;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setAdvancedBlendCorrelatedOverlap(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->advancedBlendCorrelatedOverlap = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getAdvancedBlendAllOperations(): bool
    {
        $cValue = $this->cdata->advancedBlendAllOperations;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setAdvancedBlendAllOperations(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->advancedBlendAllOperations = $cValue;
    }
}
