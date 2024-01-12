<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkOffset3D implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "x" => $this->getX(),
          "y" => $this->getY(),
          "z" => $this->getZ(),
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
        null|int $x = null,
        null|int $y = null,
        null|int $z = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkOffset3D', false), $vulkan);
        if(!is_null($x)) $self->setX($x);
        if(!is_null($y)) $self->setY($y);
        if(!is_null($z)) $self->setZ($z);
        return $self;
    }

    /**
     * int32_t/
     */
    public function getX(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->x;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setX(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->x = $cValue;
    }

    /**
     * int32_t/
     */
    public function getY(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->y;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setY(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->y = $cValue;
    }

    /**
     * int32_t/
     */
    public function getZ(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->z;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setZ(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->z = $cValue;
    }
}
