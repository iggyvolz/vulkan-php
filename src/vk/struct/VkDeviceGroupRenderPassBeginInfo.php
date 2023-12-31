<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDeviceGroupRenderPassBeginInfo
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
        null|int $deviceMask = null,
        null|int $deviceRenderAreaCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pDeviceRenderAreas = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDeviceGroupRenderPassBeginInfo', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($deviceMask)) $self->setDeviceMask($deviceMask);
        if(!is_null($deviceRenderAreaCount)) $self->setDeviceRenderAreaCount($deviceRenderAreaCount);
        if(!is_null($pDeviceRenderAreas)) $self->setPDeviceRenderAreas($pDeviceRenderAreas);
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
    public function getDeviceMask(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->deviceMask;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDeviceMask(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->deviceMask = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDeviceRenderAreaCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->deviceRenderAreaCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDeviceRenderAreaCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->deviceRenderAreaCount = $cValue;
    }

    /**
     * VkRect2D* /
     */
    public function getPDeviceRenderAreas(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pDeviceRenderAreas;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkRect2D', $cValue, $ffi);
        return $phpValue;
    }

    public function setPDeviceRenderAreas(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pDeviceRenderAreas = $cValue;
    }
}
