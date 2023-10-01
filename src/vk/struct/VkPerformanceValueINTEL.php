<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPerformanceValueINTEL
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
        null|\iggyvolz\vulkan\enum\VkPerformanceValueTypeINTEL $type = null,
        mixed $data = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPerformanceValueINTEL', false), $vulkan->ffi);
        if(!is_null($type)) $self->setType($type);
        if(!is_null($data)) $self->setData($data);
        return $self;
    }

    /**
     * VkPerformanceValueTypeINTEL/
     */
    public function getType(): \iggyvolz\vulkan\enum\VkPerformanceValueTypeINTEL
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->type;
        $phpValue = \iggyvolz\vulkan\enum\VkPerformanceValueTypeINTEL::from($cValue);
        return $phpValue;
    }

    public function setType(\iggyvolz\vulkan\enum\VkPerformanceValueTypeINTEL $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->type = $cValue;
    }

    /**
     * void* /
     */
    public function getData(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->data;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setData(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->data = $cValue;
    }
}
