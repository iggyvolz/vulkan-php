<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDescriptorSetLayoutHostMappingInfoVALVE
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
        null|int $descriptorOffset = null,
        null|int $descriptorSize = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDescriptorSetLayoutHostMappingInfoVALVE', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($descriptorOffset)) $self->setDescriptorOffset($descriptorOffset);
        if(!is_null($descriptorSize)) $self->setDescriptorSize($descriptorSize);
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
     * size_t/
     */
    public function getDescriptorOffset(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->descriptorOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDescriptorOffset(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->descriptorOffset = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->descriptorSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDescriptorSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->descriptorSize = $cValue;
    }
}
