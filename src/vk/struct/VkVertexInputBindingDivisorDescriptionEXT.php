<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVertexInputBindingDivisorDescriptionEXT
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
        null|int $binding = null,
        null|int $divisor = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVertexInputBindingDivisorDescriptionEXT', false), $vulkan->ffi);
        if(!is_null($binding)) $self->setBinding($binding);
        if(!is_null($divisor)) $self->setDivisor($divisor);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getBinding(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->binding;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBinding(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->binding = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDivisor(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->divisor;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDivisor(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->divisor = $cValue;
    }
}
