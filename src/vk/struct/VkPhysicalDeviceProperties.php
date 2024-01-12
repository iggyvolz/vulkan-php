<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceProperties implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "apiVersion" => $this->getApiVersion(),
          "driverVersion" => $this->getDriverVersion(),
          "vendorID" => $this->getVendorID(),
          "deviceID" => $this->getDeviceID(),
          "deviceType" => $this->getDeviceType(),
          "deviceName" => $this->getDeviceName(),
          "pipelineCacheUUID" => $this->getPipelineCacheUUID(),
          "limits" => $this->getLimits(),
          "sparseProperties" => $this->getSparseProperties(),
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
        null|int $apiVersion = null,
        null|int $driverVersion = null,
        null|int $vendorID = null,
        null|int $deviceID = null,
        null|\iggyvolz\vulkan\enum\VkPhysicalDeviceType $deviceType = null,
        null|string $deviceName = null,
        null|\Ramsey\Uuid\UuidInterface $pipelineCacheUUID = null,
        mixed $limits = null,
        mixed $sparseProperties = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceProperties', false), $vulkan);
        if(!is_null($apiVersion)) $self->setApiVersion($apiVersion);
        if(!is_null($driverVersion)) $self->setDriverVersion($driverVersion);
        if(!is_null($vendorID)) $self->setVendorID($vendorID);
        if(!is_null($deviceID)) $self->setDeviceID($deviceID);
        if(!is_null($deviceType)) $self->setDeviceType($deviceType);
        if(!is_null($deviceName)) $self->setDeviceName($deviceName);
        if(!is_null($pipelineCacheUUID)) $self->setPipelineCacheUUID($pipelineCacheUUID);
        if(!is_null($limits)) $self->setLimits($limits);
        if(!is_null($sparseProperties)) $self->setSparseProperties($sparseProperties);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getApiVersion(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->apiVersion;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setApiVersion(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->apiVersion = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDriverVersion(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->driverVersion;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDriverVersion(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->driverVersion = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getVendorID(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->vendorID;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setVendorID(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->vendorID = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDeviceID(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->deviceID;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDeviceID(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->deviceID = $cValue;
    }

    /**
     * VkPhysicalDeviceType/
     */
    public function getDeviceType(): \iggyvolz\vulkan\enum\VkPhysicalDeviceType
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->deviceType;
        $phpValue = \iggyvolz\vulkan\enum\VkPhysicalDeviceType::from($cValue);
        return $phpValue;
    }

    public function setDeviceType(\iggyvolz\vulkan\enum\VkPhysicalDeviceType $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->deviceType = $cValue;
    }

    /**
     * char/[256]
     */
    public function getDeviceName(): string
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->deviceName;
        $tempString = \FFI::string($cValue, 256); $phpValue = \substr($tempString, 0, \strpos($tempString, "\0"));
        return $phpValue;
    }

    public function setDeviceName(string $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        \FFI::memcpy($cValue, $phpValue, 256);
        $this->cdata->deviceName = $cValue;
    }

    /**
     * uint8_t/[16]
     */
    public function getPipelineCacheUUID(): \Ramsey\Uuid\UuidInterface
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pipelineCacheUUID;
        $phpValue = \Ramsey\Uuid\Uuid::fromBytes(\FFI::string($cValue, 16));
        return $phpValue;
    }

    public function setPipelineCacheUUID(\Ramsey\Uuid\UuidInterface $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $ffi->new("uint8_t[16]"); $ffi->memcpy($cValue, $phpValue->getBytes(), 16);
        $this->cdata->pipelineCacheUUID = $cValue;
    }

    /**
     * void* /
     */
    public function getLimits(): mixed
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->limits;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setLimits(mixed $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->limits = $cValue;
    }

    /**
     * void* /
     */
    public function getSparseProperties(): mixed
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sparseProperties;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setSparseProperties(mixed $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->sparseProperties = $cValue;
    }
}
