<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVertexInputBindingDescription implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "binding" => $this->getBinding(),
          "stride" => $this->getStride(),
          "inputRate" => $this->getInputRate(),
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
        null|int $binding = null,
        null|int $stride = null,
        null|\iggyvolz\vulkan\enum\VkVertexInputRate $inputRate = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVertexInputBindingDescription', false));
        if(!is_null($binding)) $self->setBinding($binding);
        if(!is_null($stride)) $self->setStride($stride);
        if(!is_null($inputRate)) $self->setInputRate($inputRate);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getBinding(): int
    {
        $cValue = $this->cdata->binding;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBinding(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->binding = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStride(): int
    {
        $cValue = $this->cdata->stride;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStride(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->stride = $cValue;
    }

    /**
     * VkVertexInputRate/
     */
    public function getInputRate(): \iggyvolz\vulkan\enum\VkVertexInputRate
    {
        $cValue = $this->cdata->inputRate;
        $phpValue = \iggyvolz\vulkan\enum\VkVertexInputRate::from($cValue);
        return $phpValue;
    }

    public function setInputRate(\iggyvolz\vulkan\enum\VkVertexInputRate $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->inputRate = $cValue;
    }
}
