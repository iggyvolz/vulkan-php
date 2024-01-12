<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceFragmentShadingRateFeaturesKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "pipelineFragmentShadingRate" => $this->getPipelineFragmentShadingRate(),
          "primitiveFragmentShadingRate" => $this->getPrimitiveFragmentShadingRate(),
          "attachmentFragmentShadingRate" => $this->getAttachmentFragmentShadingRate(),
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
        null|bool $pipelineFragmentShadingRate = null,
        null|bool $primitiveFragmentShadingRate = null,
        null|bool $attachmentFragmentShadingRate = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceFragmentShadingRateFeaturesKHR', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($pipelineFragmentShadingRate)) $self->setPipelineFragmentShadingRate($pipelineFragmentShadingRate);
        if(!is_null($primitiveFragmentShadingRate)) $self->setPrimitiveFragmentShadingRate($primitiveFragmentShadingRate);
        if(!is_null($attachmentFragmentShadingRate)) $self->setAttachmentFragmentShadingRate($attachmentFragmentShadingRate);
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
    public function getPipelineFragmentShadingRate(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pipelineFragmentShadingRate;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setPipelineFragmentShadingRate(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->pipelineFragmentShadingRate = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPrimitiveFragmentShadingRate(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->primitiveFragmentShadingRate;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setPrimitiveFragmentShadingRate(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->primitiveFragmentShadingRate = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getAttachmentFragmentShadingRate(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->attachmentFragmentShadingRate;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setAttachmentFragmentShadingRate(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->attachmentFragmentShadingRate = $cValue;
    }
}
