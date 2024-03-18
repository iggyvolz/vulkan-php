<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineCacheHeaderVersionOne implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "headerSize" => $this->getHeaderSize(),
          "headerVersion" => $this->getHeaderVersion(),
          "vendorID" => $this->getVendorID(),
          "deviceID" => $this->getDeviceID(),
          "pipelineCacheUUID" => $this->getPipelineCacheUUID(),
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
        null|\iggyvolz\vulkan\enum\VkPipelineCacheHeaderVersion $headerVersion = null,
        null|int $vendorID = null,
        null|int $deviceID = null,
        null|string $pipelineCacheUUID = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineCacheHeaderVersionOne', false));
        if(!is_null($headerSize)) $self->setHeaderSize($headerSize);
        if(!is_null($headerVersion)) $self->setHeaderVersion($headerVersion);
        if(!is_null($vendorID)) $self->setVendorID($vendorID);
        if(!is_null($deviceID)) $self->setDeviceID($deviceID);
        if(!is_null($pipelineCacheUUID)) $self->setPipelineCacheUUID($pipelineCacheUUID);
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
     * VkPipelineCacheHeaderVersion/
     */
    public function getHeaderVersion(): \iggyvolz\vulkan\enum\VkPipelineCacheHeaderVersion
    {
        $cValue = $this->cdata->headerVersion;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineCacheHeaderVersion::from($cValue);
        return $phpValue;
    }

    public function setHeaderVersion(\iggyvolz\vulkan\enum\VkPipelineCacheHeaderVersion $phpValue): void
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
}
