<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkQueueFamilyCheckpointProperties2NV
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
        null|array $checkpointExecutionStageMask = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkQueueFamilyCheckpointProperties2NV', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($checkpointExecutionStageMask)) $self->setCheckpointExecutionStageMask($checkpointExecutionStageMask);
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
     * VkPipelineStageFlags2/
     */
    public function getCheckpointExecutionStageMask(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->checkpointExecutionStageMask;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits2::fromInt($cValue);
        return $phpValue;
    }

    public function setCheckpointExecutionStageMask(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits2::toInt(...$phpValue);
        $this->cdata->checkpointExecutionStageMask = $cValue;
    }
}
