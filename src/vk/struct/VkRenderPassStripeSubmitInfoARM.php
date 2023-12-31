<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkRenderPassStripeSubmitInfoARM
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
        null|int $stripeSemaphoreInfoCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pStripeSemaphoreInfos = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkRenderPassStripeSubmitInfoARM', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($stripeSemaphoreInfoCount)) $self->setStripeSemaphoreInfoCount($stripeSemaphoreInfoCount);
        if(!is_null($pStripeSemaphoreInfos)) $self->setPStripeSemaphoreInfos($pStripeSemaphoreInfos);
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
    public function getStripeSemaphoreInfoCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->stripeSemaphoreInfoCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStripeSemaphoreInfoCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->stripeSemaphoreInfoCount = $cValue;
    }

    /**
     * VkSemaphoreSubmitInfo* /
     */
    public function getPStripeSemaphoreInfos(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pStripeSemaphoreInfos;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkSemaphoreSubmitInfo', $cValue, $ffi);
        return $phpValue;
    }

    public function setPStripeSemaphoreInfos(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pStripeSemaphoreInfos = $cValue;
    }
}
