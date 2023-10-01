<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelinePoolSize
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
        null|int $poolEntrySize = null,
        null|int $poolEntryCount = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelinePoolSize', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($poolEntrySize)) $self->setPoolEntrySize($poolEntrySize);
        if(!is_null($poolEntryCount)) $self->setPoolEntryCount($poolEntryCount);
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
     * uint64_t/
     */
    public function getPoolEntrySize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->poolEntrySize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPoolEntrySize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->poolEntrySize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPoolEntryCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->poolEntryCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPoolEntryCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->poolEntryCount = $cValue;
    }
}
