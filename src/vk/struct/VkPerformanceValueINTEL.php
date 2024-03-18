<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPerformanceValueINTEL implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "type" => $this->getType(),
          "data" => $this->getData(),
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
        null|\iggyvolz\vulkan\enum\VkPerformanceValueTypeINTEL $type = null,
        mixed $data = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPerformanceValueINTEL', false));
        if(!is_null($type)) $self->setType($type);
        if(!is_null($data)) $self->setData($data);
        return $self;
    }

    /**
     * VkPerformanceValueTypeINTEL/
     */
    public function getType(): \iggyvolz\vulkan\enum\VkPerformanceValueTypeINTEL
    {
        $cValue = $this->cdata->type;
        $phpValue = \iggyvolz\vulkan\enum\VkPerformanceValueTypeINTEL::from($cValue);
        return $phpValue;
    }

    public function setType(\iggyvolz\vulkan\enum\VkPerformanceValueTypeINTEL $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->type = $cValue;
    }

    /**
     * void* /
     */
    public function getData(): mixed
    {
        $cValue = $this->cdata->data;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setData(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->data = $cValue;
    }
}
