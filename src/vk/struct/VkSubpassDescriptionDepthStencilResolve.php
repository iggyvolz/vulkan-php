<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSubpassDescriptionDepthStencilResolve implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "depthResolveMode" => $this->getDepthResolveMode(),
          "stencilResolveMode" => $this->getStencilResolveMode(),
          "pDepthStencilResolveAttachment" => $this->getPDepthStencilResolveAttachment(),
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
        null|\iggyvolz\vulkan\enum\VkResolveModeFlagBits $depthResolveMode = null,
        null|\iggyvolz\vulkan\enum\VkResolveModeFlagBits $stencilResolveMode = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pDepthStencilResolveAttachment = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSubpassDescriptionDepthStencilResolve', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($depthResolveMode)) $self->setDepthResolveMode($depthResolveMode);
        if(!is_null($stencilResolveMode)) $self->setStencilResolveMode($stencilResolveMode);
        if(!is_null($pDepthStencilResolveAttachment)) $self->setPDepthStencilResolveAttachment($pDepthStencilResolveAttachment);
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
     * VkResolveModeFlagBits/
     */
    public function getDepthResolveMode(): \iggyvolz\vulkan\enum\VkResolveModeFlagBits
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->depthResolveMode;
        $phpValue = \iggyvolz\vulkan\enum\VkResolveModeFlagBits::from($cValue);
        return $phpValue;
    }

    public function setDepthResolveMode(\iggyvolz\vulkan\enum\VkResolveModeFlagBits $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->depthResolveMode = $cValue;
    }

    /**
     * VkResolveModeFlagBits/
     */
    public function getStencilResolveMode(): \iggyvolz\vulkan\enum\VkResolveModeFlagBits
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->stencilResolveMode;
        $phpValue = \iggyvolz\vulkan\enum\VkResolveModeFlagBits::from($cValue);
        return $phpValue;
    }

    public function setStencilResolveMode(\iggyvolz\vulkan\enum\VkResolveModeFlagBits $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->stencilResolveMode = $cValue;
    }

    /**
     * VkAttachmentReference2* /
     */
    public function getPDepthStencilResolveAttachment(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pDepthStencilResolveAttachment;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkAttachmentReference2', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPDepthStencilResolveAttachment(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pDepthStencilResolveAttachment = $cValue;
    }
}
