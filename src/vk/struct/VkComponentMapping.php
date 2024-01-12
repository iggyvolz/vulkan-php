<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkComponentMapping implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "r" => $this->getR(),
          "g" => $this->getG(),
          "b" => $this->getB(),
          "a" => $this->getA(),
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
        null|\iggyvolz\vulkan\enum\VkComponentSwizzle $r = null,
        null|\iggyvolz\vulkan\enum\VkComponentSwizzle $g = null,
        null|\iggyvolz\vulkan\enum\VkComponentSwizzle $b = null,
        null|\iggyvolz\vulkan\enum\VkComponentSwizzle $a = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkComponentMapping', false), $vulkan);
        if(!is_null($r)) $self->setR($r);
        if(!is_null($g)) $self->setG($g);
        if(!is_null($b)) $self->setB($b);
        if(!is_null($a)) $self->setA($a);
        return $self;
    }

    /**
     * VkComponentSwizzle/
     */
    public function getR(): \iggyvolz\vulkan\enum\VkComponentSwizzle
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->r;
        $phpValue = \iggyvolz\vulkan\enum\VkComponentSwizzle::from($cValue);
        return $phpValue;
    }

    public function setR(\iggyvolz\vulkan\enum\VkComponentSwizzle $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->r = $cValue;
    }

    /**
     * VkComponentSwizzle/
     */
    public function getG(): \iggyvolz\vulkan\enum\VkComponentSwizzle
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->g;
        $phpValue = \iggyvolz\vulkan\enum\VkComponentSwizzle::from($cValue);
        return $phpValue;
    }

    public function setG(\iggyvolz\vulkan\enum\VkComponentSwizzle $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->g = $cValue;
    }

    /**
     * VkComponentSwizzle/
     */
    public function getB(): \iggyvolz\vulkan\enum\VkComponentSwizzle
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->b;
        $phpValue = \iggyvolz\vulkan\enum\VkComponentSwizzle::from($cValue);
        return $phpValue;
    }

    public function setB(\iggyvolz\vulkan\enum\VkComponentSwizzle $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->b = $cValue;
    }

    /**
     * VkComponentSwizzle/
     */
    public function getA(): \iggyvolz\vulkan\enum\VkComponentSwizzle
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->a;
        $phpValue = \iggyvolz\vulkan\enum\VkComponentSwizzle::from($cValue);
        return $phpValue;
    }

    public function setA(\iggyvolz\vulkan\enum\VkComponentSwizzle $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->a = $cValue;
    }
}
