<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceGraphicsPipelineLibraryPropertiesEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "graphicsPipelineLibraryFastLinking" => $this->getGraphicsPipelineLibraryFastLinking(),
          "graphicsPipelineLibraryIndependentInterpolationDecoration" => $this->getGraphicsPipelineLibraryIndependentInterpolationDecoration(),
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
        null|bool $graphicsPipelineLibraryFastLinking = null,
        null|bool $graphicsPipelineLibraryIndependentInterpolationDecoration = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceGraphicsPipelineLibraryPropertiesEXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($graphicsPipelineLibraryFastLinking)) $self->setGraphicsPipelineLibraryFastLinking($graphicsPipelineLibraryFastLinking);
        if(!is_null($graphicsPipelineLibraryIndependentInterpolationDecoration)) $self->setGraphicsPipelineLibraryIndependentInterpolationDecoration($graphicsPipelineLibraryIndependentInterpolationDecoration);
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
    public function getGraphicsPipelineLibraryFastLinking(): bool
    {
        $cValue = $this->cdata->graphicsPipelineLibraryFastLinking;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setGraphicsPipelineLibraryFastLinking(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->graphicsPipelineLibraryFastLinking = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getGraphicsPipelineLibraryIndependentInterpolationDecoration(): bool
    {
        $cValue = $this->cdata->graphicsPipelineLibraryIndependentInterpolationDecoration;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setGraphicsPipelineLibraryIndependentInterpolationDecoration(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->graphicsPipelineLibraryIndependentInterpolationDecoration = $cValue;
    }
}
