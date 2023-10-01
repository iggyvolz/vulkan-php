<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkExtensionProperties
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
        null|string $extensionName = null,
        null|int $specVersion = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkExtensionProperties', false), $vulkan->ffi);
        if(!is_null($extensionName)) $self->setExtensionName($extensionName);
        if(!is_null($specVersion)) $self->setSpecVersion($specVersion);
        return $self;
    }

    /**
     * char/[256]
     */
    public function getExtensionName(): string
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->extensionName;
        $tempString = \FFI::string($cValue, 256); $phpValue = \substr($tempString, 0, \strpos($tempString, "\0"));
        return $phpValue;
    }

    public function setExtensionName(string $phpValue): void
    {
        $ffi = $this->ffi;
        \FFI::memcpy($cValue, $phpValue, 256);
        $this->cdata->extensionName = $cValue;
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
}
