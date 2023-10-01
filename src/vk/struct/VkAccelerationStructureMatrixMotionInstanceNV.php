<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkAccelerationStructureMatrixMotionInstanceNV
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
        null|VkTransformMatrixKHR $transformT0 = null,
        null|VkTransformMatrixKHR $transformT1 = null,
        null|int $instanceCustomIndex = null,
        null|int $mask = null,
        null|int $instanceShaderBindingTableRecordOffset = null,
        mixed $flags = null,
        null|int $accelerationStructureReference = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkAccelerationStructureMatrixMotionInstanceNV', false), $vulkan->ffi);
        if(!is_null($transformT0)) $self->setTransformT0($transformT0);
        if(!is_null($transformT1)) $self->setTransformT1($transformT1);
        if(!is_null($instanceCustomIndex)) $self->setInstanceCustomIndex($instanceCustomIndex);
        if(!is_null($mask)) $self->setMask($mask);
        if(!is_null($instanceShaderBindingTableRecordOffset)) $self->setInstanceShaderBindingTableRecordOffset($instanceShaderBindingTableRecordOffset);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($accelerationStructureReference)) $self->setAccelerationStructureReference($accelerationStructureReference);
        return $self;
    }

    /**
     * VkTransformMatrixKHR/
     */
    public function getTransformT0(): VkTransformMatrixKHR
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->transformT0;
        $phpValue = new \iggyvolz\vulkan\struct\VkTransformMatrixKHR($cValue, $ffi);
        return $phpValue;
    }

    public function setTransformT0(VkTransformMatrixKHR $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->transformT0 = $cValue;
    }

    /**
     * VkTransformMatrixKHR/
     */
    public function getTransformT1(): VkTransformMatrixKHR
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->transformT1;
        $phpValue = new \iggyvolz\vulkan\struct\VkTransformMatrixKHR($cValue, $ffi);
        return $phpValue;
    }

    public function setTransformT1(VkTransformMatrixKHR $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->transformT1 = $cValue;
    }

    /**
     * uint32_t/:24
     */
    public function getInstanceCustomIndex(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->instanceCustomIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setInstanceCustomIndex(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->instanceCustomIndex = $cValue;
    }

    /**
     * uint32_t/:8
     */
    public function getMask(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->mask;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMask(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->mask = $cValue;
    }

    /**
     * uint32_t/:24
     */
    public function getInstanceShaderBindingTableRecordOffset(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->instanceShaderBindingTableRecordOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setInstanceShaderBindingTableRecordOffset(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->instanceShaderBindingTableRecordOffset = $cValue;
    }

    /**
     * void* /
     */
    public function getFlags(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->flags;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setFlags(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->flags = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getAccelerationStructureReference(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->accelerationStructureReference;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setAccelerationStructureReference(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->accelerationStructureReference = $cValue;
    }
}
