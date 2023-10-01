<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkLayerProperties
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
        null|string $layerName = null,
        null|int $specVersion = null,
        null|int $implementationVersion = null,
        null|string $description = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkLayerProperties', false), $vulkan->ffi);
        if(!is_null($layerName)) $self->setLayerName($layerName);
        if(!is_null($specVersion)) $self->setSpecVersion($specVersion);
        if(!is_null($implementationVersion)) $self->setImplementationVersion($implementationVersion);
        if(!is_null($description)) $self->setDescription($description);
        return $self;
    }

    /**
     * char/[256]
     */
    public function getLayerName(): string
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->layerName;
        $tempString = \FFI::string($cValue, 256); $phpValue = \substr($tempString, 0, \strpos($tempString, "\0"));
        return $phpValue;
    }

    public function setLayerName(string $phpValue): void
    {
        $ffi = $this->ffi;
        \FFI::memcpy($cValue, $phpValue, 256);
        $this->cdata->layerName = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSpecVersion(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->specVersion;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSpecVersion(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->specVersion = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getImplementationVersion(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->implementationVersion;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setImplementationVersion(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->implementationVersion = $cValue;
    }

    /**
     * char/[256]
     */
    public function getDescription(): string
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->description;
        $tempString = \FFI::string($cValue, 256); $phpValue = \substr($tempString, 0, \strpos($tempString, "\0"));
        return $phpValue;
    }

    public function setDescription(string $phpValue): void
    {
        $ffi = $this->ffi;
        \FFI::memcpy($cValue, $phpValue, 256);
        $this->cdata->description = $cValue;
    }
}
