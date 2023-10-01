<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineCacheHeaderVersionOne
{
    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \FFI $ffi,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|int $headerSize = null,
        null|\iggyvolz\vulkan\enum\VkPipelineCacheHeaderVersion $headerVersion = null,
        null|int $vendorID = null,
        null|int $deviceID = null,
        null|\Ramsey\Uuid\UuidInterface $pipelineCacheUUID = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineCacheHeaderVersionOne', false), $vulkan->ffi);
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
        $ffi = $this->ffi;
        $cValue = $this->cdata->headerSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setHeaderSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->headerSize = $cValue;
    }

    /**
     * VkPipelineCacheHeaderVersion/
     */
    public function getHeaderVersion(): \iggyvolz\vulkan\enum\VkPipelineCacheHeaderVersion
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->headerVersion;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineCacheHeaderVersion::from($cValue);
        return $phpValue;
    }

    public function setHeaderVersion(\iggyvolz\vulkan\enum\VkPipelineCacheHeaderVersion $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->headerVersion = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getVendorID(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->vendorID;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setVendorID(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->vendorID = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDeviceID(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->deviceID;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDeviceID(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->deviceID = $cValue;
    }

    /**
     * uint8_t/[16]
     */
    public function getPipelineCacheUUID(): \Ramsey\Uuid\UuidInterface
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pipelineCacheUUID;
        $phpValue = \Ramsey\Uuid\Uuid::fromBytes(\FFI::string($cValue, 16));
        return $phpValue;
    }

    public function setPipelineCacheUUID(\Ramsey\Uuid\UuidInterface $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $ffi->new("uint8_t[16]"); $ffi->memcpy($cValue, $phpValue->getBytes(), 16);
        $this->cdata->pipelineCacheUUID = $cValue;
    }
}
