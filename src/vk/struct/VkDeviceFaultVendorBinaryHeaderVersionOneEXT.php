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
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|int $headerSize = null,
        null|\iggyvolz\vulkan\enum\VkDeviceFaultVendorBinaryHeaderVersionEXT $headerVersion = null,
        null|int $vendorID = null,
        null|int $deviceID = null,
        null|int $driverVersion = null,
        null|string $pipelineCacheUUID = null,
        null|int $applicationNameOffset = null,
        null|int $applicationVersion = null,
        null|int $engineNameOffset = null,
        null|int $engineVersion = null,
        null|int $apiVersion = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDeviceFaultVendorBinaryHeaderVersionOneEXT', false));
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
        $cValue = $this->cdata->headerSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setHeaderSize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->headerSize = $cValue;
    }

    /**
     * VkDeviceFaultVendorBinaryHeaderVersionEXT/
     */
    public function getHeaderVersion(): \iggyvolz\vulkan\enum\VkDeviceFaultVendorBinaryHeaderVersionEXT
    {
        $cValue = $this->cdata->headerVersion;
        $phpValue = \iggyvolz\vulkan\enum\VkDeviceFaultVendorBinaryHeaderVersionEXT::from($cValue);
        return $phpValue;
    }

    public function setHeaderVersion(\iggyvolz\vulkan\enum\VkDeviceFaultVendorBinaryHeaderVersionEXT $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->headerVersion = $cValue;
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
     * uint32_t/
     */
    public function getApplicationNameOffset(): int
    {
        $cValue = $this->cdata->applicationNameOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setApplicationNameOffset(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->applicationNameOffset = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getApplicationVersion(): int
    {
        $cValue = $this->cdata->applicationVersion;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setApplicationVersion(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->applicationVersion = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getEngineNameOffset(): int
    {
        $cValue = $this->cdata->engineNameOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setEngineNameOffset(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->engineNameOffset = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getEngineVersion(): int
    {
        $cValue = $this->cdata->engineVersion;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setEngineVersion(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->engineVersion = $cValue;
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
}
