<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSetStateFlagsIndirectCommandNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "data" => $this->getData(),
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

    public static function create(\iggyvolz\vulkan\Vulkan $vulkan, null|int $data = null): self
    {
        $self = new self( $vulkan->ffi->new('VkSetStateFlagsIndirectCommandNV', false), $vulkan);
        if(!is_null($data)) $self->setData($data);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getData(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->data;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setData(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->data = $cValue;
    }
}
