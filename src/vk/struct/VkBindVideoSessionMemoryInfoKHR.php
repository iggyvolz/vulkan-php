<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkBindVideoSessionMemoryInfoKHR
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
        null|VkDeviceMemory $memory = null,
        null|int $memoryOffset = null,
        null|int $memorySize = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkBindVideoSessionMemoryInfoKHR', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($memoryBindIndex)) $self->setMemoryBindIndex($memoryBindIndex);
        if(!is_null($memory)) $self->setMemory($memory);
        if(!is_null($memoryOffset)) $self->setMemoryOffset($memoryOffset);
        if(!is_null($memorySize)) $self->setMemorySize($memorySize);
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
     * VkDeviceMemory/
     */
    public function getMemory(): VkDeviceMemory
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->memory;
        $phpValue = new \iggyvolz\vulkan\struct\VkDeviceMemory($cValue, $ffi);
        return $phpValue;
    }

    public function setMemory(VkDeviceMemory $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->memory = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getMemoryOffset(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->memoryOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMemoryOffset(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->memoryOffset = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getMemorySize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->memorySize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMemorySize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->memorySize = $cValue;
    }
}
