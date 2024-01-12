<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDeviceFaultVendorBinaryHeaderVersionOneEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "headerSize" => $this->getHeaderSize(),
          "headerVersion" => $this->getHeaderVersion(),
          "vendorID" => $this->getVendorID(),
          "deviceID" => $this->getDeviceID(),
          "driverVersion" => $this->getDriverVersion(),
          "pipelineCacheUUID" => $this->getPipelineCacheUUID(),
          "applicationNameOffset" => $this->getApplicationNameOffset(),
          "applicationVersion" => $this->getApplicationVersion(),
          "engineNameOffset" => $this->getEngineNameOffset(),
          "engineVersion" => $this->getEngineVersion(),
          "apiVersion" => $this->getApiVersion(),
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
        null|int $headerSize = null,
        null|\iggyvolz\vulkan\enum\VkDeviceFaultVendorBinaryHeaderVersionEXT $headerVersion = null,
        null|int $vendorID = null,
        null|int $deviceID = null,
        null|int $driverVersion = null,
        null|\Ramsey\Uuid\UuidInterface $pipelineCacheUUID = null,
        null|int $applicationNameOffset = null,
        null|int $applicationVersion = null,
        null|int $engineNameOffset = null,
        null|int $engineVersion = null,
        null|int $apiVersion = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDeviceFaultVendorBinaryHeaderVersionOneEXT', false), $vulkan);
        if(!is_null($headerSize)) $self->setHeaderSize($headerSize);
        if(!is_null($headerVersion)) $self->setHeaderVersion($headerVersion);
        if(!is_null($vendorID)) $self->setVendorID($vendorID);
        if(!is_null($deviceID)) $self->setDeviceID($deviceID);
        if(!is_null($driverVersion)) $self->setDriverVersion($driverVersion);
        if(!is_null($pipelineCacheUUID)) $self->setPipelineCacheUUID($pipelineCacheUUID);
        if(!is_null($applicationNameOffset)) $self->setApplicationNameOffset($applicationNameOffset);
        if(!is_null($applicationVersion)) $self->setApplicationVersion($applicationVersion);
        if(!is_null($engineNameOffset)) $self->setEngineNameOffset($engineNameOffset);
        if(!is_null($engineVersion)) $self->setEngineVersion($engineVersion);
        if(!is_null($apiVersion)) $self->setApiVersion($apiVersion);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getHeaderSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->headerSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setHeaderSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->headerSize = $cValue;
    }

    /**
     * VkDeviceFaultVendorBinaryHeaderVersionEXT/
     */
    public function getHeaderVersion(): \iggyvolz\vulkan\enum\VkDeviceFaultVendorBinaryHeaderVersionEXT
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->headerVersion;
        $phpValue = \iggyvolz\vulkan\enum\VkDeviceFaultVendorBinaryHeaderVersionEXT::from($cValue);
        return $phpValue;
    }

    public function setHeaderVersion(\iggyvolz\vulkan\enum\VkDeviceFaultVendorBinaryHeaderVersionEXT $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->headerVersion = $cValue;
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
     * uint32_t/
     */
    public function getApplicationNameOffset(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->applicationNameOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setApplicationNameOffset(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->applicationNameOffset = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getApplicationVersion(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->applicationVersion;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setApplicationVersion(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->applicationVersion = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getEngineNameOffset(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->engineNameOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setEngineNameOffset(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->engineNameOffset = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getEngineVersion(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->engineVersion;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setEngineVersion(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->engineVersion = $cValue;
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
}
