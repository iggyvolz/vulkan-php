<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineShaderStageNodeCreateInfoAMDX
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
        ?string $pName = null,
        null|int $index = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineShaderStageNodeCreateInfoAMDX', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($pName)) $self->setPName($pName);
        if(!is_null($index)) $self->setIndex($index);
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
     * const char* /
     */
    public function getPName(): ?string
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pName;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPName(?string $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->pName = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIndex(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->index;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setIndex(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->index = $cValue;
    }
}
