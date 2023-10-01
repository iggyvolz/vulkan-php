<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDisplayPlaneInfo2KHR
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
        null|VkDisplayModeKHR $mode = null,
        null|int $planeIndex = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDisplayPlaneInfo2KHR', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($mode)) $self->setMode($mode);
        if(!is_null($planeIndex)) $self->setPlaneIndex($planeIndex);
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
     * VkDisplayModeKHR/
     */
    public function getMode(): VkDisplayModeKHR
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->mode;
        $phpValue = new \iggyvolz\vulkan\struct\VkDisplayModeKHR($cValue, $ffi);
        return $phpValue;
    }

    public function setMode(VkDisplayModeKHR $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->mode = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPlaneIndex(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->planeIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPlaneIndex(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->planeIndex = $cValue;
    }
}
