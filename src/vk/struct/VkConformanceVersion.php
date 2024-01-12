<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkConformanceVersion implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "major" => $this->getMajor(),
          "minor" => $this->getMinor(),
          "subminor" => $this->getSubminor(),
          "patch" => $this->getPatch(),
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
        null|int $major = null,
        null|int $minor = null,
        null|int $subminor = null,
        null|int $patch = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkConformanceVersion', false), $vulkan);
        if(!is_null($major)) $self->setMajor($major);
        if(!is_null($minor)) $self->setMinor($minor);
        if(!is_null($subminor)) $self->setSubminor($subminor);
        if(!is_null($patch)) $self->setPatch($patch);
        return $self;
    }

    /**
     * uint8_t/
     */
    public function getMajor(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->major;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMajor(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->major = $cValue;
    }

    /**
     * uint8_t/
     */
    public function getMinor(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->minor;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinor(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->minor = $cValue;
    }

    /**
     * uint8_t/
     */
    public function getSubminor(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->subminor;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSubminor(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->subminor = $cValue;
    }

    /**
     * uint8_t/
     */
    public function getPatch(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->patch;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPatch(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->patch = $cValue;
    }
}
