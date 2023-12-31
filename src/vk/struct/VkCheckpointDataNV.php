<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkCheckpointDataNV
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
        null|\iggyvolz\vulkan\enum\VkPipelineStageFlagBits $stage = null,
        null|\iggyvolz\vulkan\util\Pointer $pCheckpointMarker = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkCheckpointDataNV', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($stage)) $self->setStage($stage);
        if(!is_null($pCheckpointMarker)) $self->setPCheckpointMarker($pCheckpointMarker);
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
     * VkPipelineStageFlagBits/
     */
    public function getStage(): \iggyvolz\vulkan\enum\VkPipelineStageFlagBits
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->stage;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits::from($cValue);
        return $phpValue;
    }

    public function setStage(\iggyvolz\vulkan\enum\VkPipelineStageFlagBits $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->stage = $cValue;
    }

    /**
     * void* /
     */
    public function getPCheckpointMarker(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pCheckpointMarker;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPCheckpointMarker(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pCheckpointMarker = $cValue;
    }
}
