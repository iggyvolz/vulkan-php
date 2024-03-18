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
        null|string $pipelineCacheUUID = null,
        mixed $limits = null,
        mixed $sparseProperties = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceProperties', false));
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
        $cValue = $this->cdata->apiVersion;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setApiVersion(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->apiVersion = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDriverVersion(): int
    {
        $cValue = $this->cdata->driverVersion;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDriverVersion(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->driverVersion = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getVendorID(): int
    {
        $cValue = $this->cdata->vendorID;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setVendorID(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->vendorID = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDeviceID(): int
    {
        $cValue = $this->cdata->deviceID;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDeviceID(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->deviceID = $cValue;
    }

    /**
     * VkPhysicalDeviceType/
     */
    public function getDeviceType(): \iggyvolz\vulkan\enum\VkPhysicalDeviceType
    {
        $cValue = $this->cdata->deviceType;
        $phpValue = \iggyvolz\vulkan\enum\VkPhysicalDeviceType::from($cValue);
        return $phpValue;
    }

    public function setDeviceType(\iggyvolz\vulkan\enum\VkPhysicalDeviceType $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->deviceType = $cValue;
    }

    /**
     * char/[256]
     */
    public function getDeviceName(): string
    {
        $cValue = $this->cdata->deviceName;
        $tempString = \FFI::string($cValue, 256); $phpValue = \substr($tempString, 0, \strpos($tempString, "\0"));
        return $phpValue;
    }

    public function setDeviceName(string $phpValue): void
    {
        \FFI::memcpy($cValue, $phpValue, 256);
        $this->cdata->deviceName = $cValue;
    }

    /**
     * char/[16]
     */
    public function getPipelineCacheUUID(): string
    {
        $cValue = $this->cdata->pipelineCacheUUID;
        $tempString = \FFI::string($cValue, 16); $phpValue = \substr($tempString, 0, \strpos($tempString, "\0"));
        return $phpValue;
    }

    public function setPipelineCacheUUID(string $phpValue): void
    {
        \FFI::memcpy($cValue, $phpValue, 16);
        $this->cdata->pipelineCacheUUID = $cValue;
    }

    /**
     * void* /
     */
    public function getLimits(): mixed
    {
        $cValue = $this->cdata->limits;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setLimits(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->limits = $cValue;
    }

    /**
     * void* /
     */
    public function getSparseProperties(): mixed
    {
        $cValue = $this->cdata->sparseProperties;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setSparseProperties(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->sparseProperties = $cValue;
    }
}
