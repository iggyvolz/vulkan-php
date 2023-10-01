<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoSessionMemoryRequirementsKHR
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
        null|int $memoryBindIndex = null,
        null|VkMemoryRequirements $memoryRequirements = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoSessionMemoryRequirementsKHR', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($memoryBindIndex)) $self->setMemoryBindIndex($memoryBindIndex);
        if(!is_null($memoryRequirements)) $self->setMemoryRequirements($memoryRequirements);
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
    public function getMemoryBindIndex(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->memoryBindIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMemoryBindIndex(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->memoryBindIndex = $cValue;
    }

    /**
     * VkMemoryRequirements/
     */
    public function getMemoryRequirements(): VkMemoryRequirements
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->memoryRequirements;
        $phpValue = new \iggyvolz\vulkan\struct\VkMemoryRequirements($cValue, $ffi);
        return $phpValue;
    }

    public function setMemoryRequirements(VkMemoryRequirements $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->memoryRequirements = $cValue;
    }
}
