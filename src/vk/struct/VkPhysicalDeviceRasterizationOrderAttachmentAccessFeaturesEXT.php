<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceRasterizationOrderAttachmentAccessFeaturesEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "rasterizationOrderColorAttachmentAccess" => $this->getRasterizationOrderColorAttachmentAccess(),
          "rasterizationOrderDepthAttachmentAccess" => $this->getRasterizationOrderDepthAttachmentAccess(),
          "rasterizationOrderStencilAttachmentAccess" => $this->getRasterizationOrderStencilAttachmentAccess(),
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
        null|bool $rasterizationOrderColorAttachmentAccess = null,
        null|bool $rasterizationOrderDepthAttachmentAccess = null,
        null|bool $rasterizationOrderStencilAttachmentAccess = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceRasterizationOrderAttachmentAccessFeaturesEXT', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($rasterizationOrderColorAttachmentAccess)) $self->setRasterizationOrderColorAttachmentAccess($rasterizationOrderColorAttachmentAccess);
        if(!is_null($rasterizationOrderDepthAttachmentAccess)) $self->setRasterizationOrderDepthAttachmentAccess($rasterizationOrderDepthAttachmentAccess);
        if(!is_null($rasterizationOrderStencilAttachmentAccess)) $self->setRasterizationOrderStencilAttachmentAccess($rasterizationOrderStencilAttachmentAccess);
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
    public function getRasterizationOrderColorAttachmentAccess(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->rasterizationOrderColorAttachmentAccess;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setRasterizationOrderColorAttachmentAccess(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->rasterizationOrderColorAttachmentAccess = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getRasterizationOrderDepthAttachmentAccess(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->rasterizationOrderDepthAttachmentAccess;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setRasterizationOrderDepthAttachmentAccess(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->rasterizationOrderDepthAttachmentAccess = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getRasterizationOrderStencilAttachmentAccess(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->rasterizationOrderStencilAttachmentAccess;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setRasterizationOrderStencilAttachmentAccess(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->rasterizationOrderStencilAttachmentAccess = $cValue;
    }
}
