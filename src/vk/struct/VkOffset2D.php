<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkOffset2D implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "x" => $this->getX(),
          "y" => $this->getY(),
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

    public static function create(\iggyvolz\vulkan\Vulkan $vulkan, null|int $x = null, null|int $y = null): self
    {
        $self = new self( $vulkan->ffi->new('VkOffset2D', false));
        if(!is_null($x)) $self->setX($x);
        if(!is_null($y)) $self->setY($y);
        return $self;
    }

    /**
     * int32_t/
     */
    public function getX(): int
    {
        $cValue = $this->cdata->x;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setX(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->x = $cValue;
    }

    /**
     * int32_t/
     */
    public function getY(): int
    {
        $cValue = $this->cdata->y;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setY(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->y = $cValue;
    }
}
