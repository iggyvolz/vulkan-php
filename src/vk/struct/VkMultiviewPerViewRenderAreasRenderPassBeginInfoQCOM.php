<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkMultiviewPerViewRenderAreasRenderPassBeginInfoQCOM
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
        null|\iggyvolz\vulkan\util\OpaquePointer $pNext = null,
        null|int $perViewRenderAreaCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pPerViewRenderAreas = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkMultiviewPerViewRenderAreasRenderPassBeginInfoQCOM', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($perViewRenderAreaCount)) $self->setPerViewRenderAreaCount($perViewRenderAreaCount);
        if(!is_null($pPerViewRenderAreas)) $self->setPPerViewRenderAreas($pPerViewRenderAreas);
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
    public function getPNext(): \iggyvolz\vulkan\util\OpaquePointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\OpaquePointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPerViewRenderAreaCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->perViewRenderAreaCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPerViewRenderAreaCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->perViewRenderAreaCount = $cValue;
    }

    /**
     * VkRect2D* /
     */
    public function getPPerViewRenderAreas(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pPerViewRenderAreas;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkRect2D', $cValue, $ffi);
        return $phpValue;
    }

    public function setPPerViewRenderAreas(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pPerViewRenderAreas = $cValue;
    }
}
