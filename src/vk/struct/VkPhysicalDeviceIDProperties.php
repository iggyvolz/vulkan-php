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
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|string $deviceUUID = null,
        null|string $driverUUID = null,
        mixed $deviceLUID = null,
        null|int $deviceNodeMask = null,
        null|bool $deviceLUIDValid = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceIDProperties', false));
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
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * char/[16]
     */
    public function getDeviceUUID(): string
    {
        $cValue = $this->cdata->deviceUUID;
        $tempString = \FFI::string($cValue, 16); $phpValue = \substr($tempString, 0, \strpos($tempString, "\0"));
        return $phpValue;
    }

    public function setDeviceUUID(string $phpValue): void
    {
        \FFI::memcpy($cValue, $phpValue, 16);
        $this->cdata->deviceUUID = $cValue;
    }

    /**
     * char/[16]
     */
    public function getDriverUUID(): string
    {
        $cValue = $this->cdata->driverUUID;
        $tempString = \FFI::string($cValue, 16); $phpValue = \substr($tempString, 0, \strpos($tempString, "\0"));
        return $phpValue;
    }

    public function setDriverUUID(string $phpValue): void
    {
        \FFI::memcpy($cValue, $phpValue, 16);
        $this->cdata->driverUUID = $cValue;
    }

    /**
     * void* /
     */
    public function getDeviceLUID(): mixed
    {
        $cValue = $this->cdata->deviceLUID;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setDeviceLUID(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->deviceLUID = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDeviceNodeMask(): int
    {
        $cValue = $this->cdata->deviceNodeMask;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDeviceNodeMask(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->deviceNodeMask = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDeviceLUIDValid(): bool
    {
        $cValue = $this->cdata->deviceLUIDValid;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDeviceLUIDValid(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->deviceLUIDValid = $cValue;
    }
}
