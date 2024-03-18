<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkAccelerationStructureSRTMotionInstanceNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "transformT0" => $this->getTransformT0(),
          "transformT1" => $this->getTransformT1(),
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
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|VkSRTDataNV $transformT0 = null,
        null|VkSRTDataNV $transformT1 = null,
        null|int $instanceCustomIndex = null,
        null|int $mask = null,
        null|int $instanceShaderBindingTableRecordOffset = null,
        mixed $flags = null,
        null|int $accelerationStructureReference = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkAccelerationStructureSRTMotionInstanceNV', false));
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
     * VkSRTDataNV/
     */
    public function getTransformT0(): VkSRTDataNV
    {
        $cValue = $this->cdata->transformT0;
        $phpValue = new \iggyvolz\vulkan\struct\VkSRTDataNV($cValue, $ffi);
        return $phpValue;
    }

    public function setTransformT0(VkSRTDataNV $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->transformT0 = $cValue;
    }

    /**
     * VkSRTDataNV/
     */
    public function getTransformT1(): VkSRTDataNV
    {
        $cValue = $this->cdata->transformT1;
        $phpValue = new \iggyvolz\vulkan\struct\VkSRTDataNV($cValue, $ffi);
        return $phpValue;
    }

    public function setTransformT1(VkSRTDataNV $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->transformT1 = $cValue;
    }

    /**
     * uint32_t/:24
     */
    public function getInstanceCustomIndex(): int
    {
        $cValue = $this->cdata->instanceCustomIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setInstanceCustomIndex(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->instanceCustomIndex = $cValue;
    }

    /**
     * uint32_t/:8
     */
    public function getMask(): int
    {
        $cValue = $this->cdata->mask;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMask(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->mask = $cValue;
    }

    /**
     * uint32_t/:24
     */
    public function getInstanceShaderBindingTableRecordOffset(): int
    {
        $cValue = $this->cdata->instanceShaderBindingTableRecordOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setInstanceShaderBindingTableRecordOffset(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->instanceShaderBindingTableRecordOffset = $cValue;
    }

    /**
     * void* /
     */
    public function getFlags(): mixed
    {
        $cValue = $this->cdata->flags;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setFlags(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->flags = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getAccelerationStructureReference(): int
    {
        $cValue = $this->cdata->accelerationStructureReference;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setAccelerationStructureReference(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->accelerationStructureReference = $cValue;
    }
}
