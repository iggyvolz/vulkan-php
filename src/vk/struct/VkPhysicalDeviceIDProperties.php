<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceIDProperties implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "deviceUUID" => $this->getDeviceUUID(),
          "driverUUID" => $this->getDriverUUID(),
          "deviceLUID" => $this->getDeviceLUID(),
          "deviceNodeMask" => $this->getDeviceNodeMask(),
          "deviceLUIDValid" => $this->getDeviceLUIDValid(),
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
        null|\Ramsey\Uuid\UuidInterface $deviceUUID = null,
        null|\Ramsey\Uuid\UuidInterface $driverUUID = null,
        mixed $deviceLUID = null,
        null|int $deviceNodeMask = null,
        null|bool $deviceLUIDValid = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceIDProperties', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($deviceUUID)) $self->setDeviceUUID($deviceUUID);
        if(!is_null($driverUUID)) $self->setDriverUUID($driverUUID);
        if(!is_null($deviceLUID)) $self->setDeviceLUID($deviceLUID);
        if(!is_null($deviceNodeMask)) $self->setDeviceNodeMask($deviceNodeMask);
        if(!is_null($deviceLUIDValid)) $self->setDeviceLUIDValid($deviceLUIDValid);
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
     * uint8_t/[16]
     */
    public function getDeviceUUID(): \Ramsey\Uuid\UuidInterface
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->deviceUUID;
        $phpValue = \Ramsey\Uuid\Uuid::fromBytes(\FFI::string($cValue, 16));
        return $phpValue;
    }

    public function setDeviceUUID(\Ramsey\Uuid\UuidInterface $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $ffi->new("uint8_t[16]"); $ffi->memcpy($cValue, $phpValue->getBytes(), 16);
        $this->cdata->deviceUUID = $cValue;
    }

    /**
     * uint8_t/[16]
     */
    public function getDriverUUID(): \Ramsey\Uuid\UuidInterface
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->driverUUID;
        $phpValue = \Ramsey\Uuid\Uuid::fromBytes(\FFI::string($cValue, 16));
        return $phpValue;
    }

    public function setDriverUUID(\Ramsey\Uuid\UuidInterface $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $ffi->new("uint8_t[16]"); $ffi->memcpy($cValue, $phpValue->getBytes(), 16);
        $this->cdata->driverUUID = $cValue;
    }

    /**
     * void* /
     */
    public function getDeviceLUID(): mixed
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->deviceLUID;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setDeviceLUID(mixed $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->deviceLUID = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDeviceNodeMask(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->deviceNodeMask;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDeviceNodeMask(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->deviceNodeMask = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDeviceLUIDValid(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->deviceLUIDValid;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDeviceLUIDValid(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->deviceLUIDValid = $cValue;
    }
}
