<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkExtensionProperties implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "extensionName" => $this->getExtensionName(),
          "specVersion" => $this->getSpecVersion(),
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
        null|string $extensionName = null,
        null|int $specVersion = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkExtensionProperties', false));
        if(!is_null($extensionName)) $self->setExtensionName($extensionName);
        if(!is_null($specVersion)) $self->setSpecVersion($specVersion);
        return $self;
    }

    /**
     * char/[256]
     */
    public function getExtensionName(): string
    {
        $cValue = $this->cdata->extensionName;
        $tempString = \FFI::string($cValue, 256); $phpValue = \substr($tempString, 0, \strpos($tempString, "\0"));
        return $phpValue;
    }

    public function setExtensionName(string $phpValue): void
    {
        \FFI::memcpy($cValue, $phpValue, 256);
        $this->cdata->extensionName = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSpecVersion(): int
    {
        $cValue = $this->cdata->specVersion;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSpecVersion(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->specVersion = $cValue;
    }
}
