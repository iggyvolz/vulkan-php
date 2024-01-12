<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVertexInputBindingDivisorDescriptionKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "binding" => $this->getBinding(),
          "divisor" => $this->getDivisor(),
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
        null|int $binding = null,
        null|int $divisor = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVertexInputBindingDivisorDescriptionKHR', false), $vulkan);
        if(!is_null($binding)) $self->setBinding($binding);
        if(!is_null($divisor)) $self->setDivisor($divisor);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getBinding(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->binding;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBinding(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->binding = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDivisor(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->divisor;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDivisor(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->divisor = $cValue;
    }
}
