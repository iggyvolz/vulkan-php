<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkAccelerationStructureCreateInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "createFlags" => $this->getCreateFlags(),
          "buffer" => $this->getBuffer(),
          "offset" => $this->getOffset(),
          "size" => $this->getSize(),
          "type" => $this->getType(),
          "deviceAddress" => $this->getDeviceAddress(),
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
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|array $createFlags = null,
        null|VkBuffer $buffer = null,
        null|int $offset = null,
        null|int $size = null,
        null|\iggyvolz\vulkan\enum\VkAccelerationStructureTypeKHR $type = null,
        null|int $deviceAddress = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkAccelerationStructureCreateInfoKHR', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($createFlags)) $self->setCreateFlags($createFlags);
        if(!is_null($buffer)) $self->setBuffer($buffer);
        if(!is_null($offset)) $self->setOffset($offset);
        if(!is_null($size)) $self->setSize($size);
        if(!is_null($type)) $self->setType($type);
        if(!is_null($deviceAddress)) $self->setDeviceAddress($deviceAddress);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * VkAccelerationStructureCreateFlagsKHR/
     */
    public function getCreateFlags(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->createFlags;
        $phpValue = \iggyvolz\vulkan\enum\VkAccelerationStructureCreateFlagBitsKHR::fromInt($cValue);
        return $phpValue;
    }

    public function setCreateFlags(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkAccelerationStructureCreateFlagBitsKHR::toInt(...$phpValue);
        $this->cdata->createFlags = $cValue;
    }

    /**
     * VkBuffer/
     */
    public function getBuffer(): VkBuffer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->buffer;
        $phpValue = new \iggyvolz\vulkan\struct\VkBuffer($cValue, $ffi);
        return $phpValue;
    }

    public function setBuffer(VkBuffer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->buffer = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getOffset(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->offset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setOffset(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->offset = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->size;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->size = $cValue;
    }

    /**
     * VkAccelerationStructureTypeKHR/
     */
    public function getType(): \iggyvolz\vulkan\enum\VkAccelerationStructureTypeKHR
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->type;
        $phpValue = \iggyvolz\vulkan\enum\VkAccelerationStructureTypeKHR::from($cValue);
        return $phpValue;
    }

    public function setType(\iggyvolz\vulkan\enum\VkAccelerationStructureTypeKHR $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->type = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getDeviceAddress(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->deviceAddress;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDeviceAddress(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->deviceAddress = $cValue;
    }
}
