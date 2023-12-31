<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDevicePrimitiveTopologyListRestartFeaturesEXT
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
        null|bool $primitiveTopologyListRestart = null,
        null|bool $primitiveTopologyPatchListRestart = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDevicePrimitiveTopologyListRestartFeaturesEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($primitiveTopologyListRestart)) $self->setPrimitiveTopologyListRestart($primitiveTopologyListRestart);
        if(!is_null($primitiveTopologyPatchListRestart)) $self->setPrimitiveTopologyPatchListRestart($primitiveTopologyPatchListRestart);
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
    public function getPrimitiveTopologyListRestart(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->primitiveTopologyListRestart;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setPrimitiveTopologyListRestart(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->primitiveTopologyListRestart = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPrimitiveTopologyPatchListRestart(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->primitiveTopologyPatchListRestart;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setPrimitiveTopologyPatchListRestart(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->primitiveTopologyPatchListRestart = $cValue;
    }
}
