<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceRenderPassStripedPropertiesARM
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
        null|VkExtent2D $renderPassStripeGranularity = null,
        null|int $maxRenderPassStripes = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceRenderPassStripedPropertiesARM', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($renderPassStripeGranularity)) $self->setRenderPassStripeGranularity($renderPassStripeGranularity);
        if(!is_null($maxRenderPassStripes)) $self->setMaxRenderPassStripes($maxRenderPassStripes);
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
     * VkExtent2D/
     */
    public function getRenderPassStripeGranularity(): VkExtent2D
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->renderPassStripeGranularity;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setRenderPassStripeGranularity(VkExtent2D $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->renderPassStripeGranularity = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxRenderPassStripes(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxRenderPassStripes;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxRenderPassStripes(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxRenderPassStripes = $cValue;
    }
}
