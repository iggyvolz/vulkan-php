<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkAccelerationStructureInstanceKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "transform" => $this->getTransform(),
          "instanceCustomIndex" => $this->getInstanceCustomIndex(),
          "mask" => $this->getMask(),
          "instanceShaderBindingTableRecordOffset" => $this->getInstanceShaderBindingTableRecordOffset(),
          "flags" => $this->getFlags(),
          "accelerationStructureReference" => $this->getAccelerationStructureReference(),
        ];
    }

    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \iggyvolz\vulkan\Vulkan $vulkan,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|VkTransformMatrixKHR $transform = null,
        null|int $instanceCustomIndex = null,
        null|int $mask = null,
        null|int $instanceShaderBindingTableRecordOffset = null,
        mixed $flags = null,
        null|int $accelerationStructureReference = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkAccelerationStructureInstanceKHR', false), $vulkan);
        if(!is_null($transform)) $self->setTransform($transform);
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
    public function getTransform(): VkTransformMatrixKHR
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->transform;
        $phpValue = new \iggyvolz\vulkan\struct\VkTransformMatrixKHR($cValue, $ffi);
        return $phpValue;
    }

    public function setTransform(VkTransformMatrixKHR $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->transform = $cValue;
    }

    /**
     * uint32_t/:24
     */
    public function getInstanceCustomIndex(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->instanceCustomIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setInstanceCustomIndex(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->instanceCustomIndex = $cValue;
    }

    /**
     * uint32_t/:8
     */
    public function getMask(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->mask;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMask(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->mask = $cValue;
    }

    /**
     * uint32_t/:24
     */
    public function getInstanceShaderBindingTableRecordOffset(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->instanceShaderBindingTableRecordOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setInstanceShaderBindingTableRecordOffset(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->instanceShaderBindingTableRecordOffset = $cValue;
    }

    /**
     * void* /
     */
    public function getFlags(): mixed
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->flags;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setFlags(mixed $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->flags = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getAccelerationStructureReference(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->accelerationStructureReference;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setAccelerationStructureReference(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->accelerationStructureReference = $cValue;
    }
}
