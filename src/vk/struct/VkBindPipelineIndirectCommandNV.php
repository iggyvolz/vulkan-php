<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkBindPipelineIndirectCommandNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "pipelineAddress" => $this->getPipelineAddress(),
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

    public static function create(\iggyvolz\vulkan\Vulkan $vulkan, null|int $pipelineAddress = null): self
    {
        $self = new self( $vulkan->ffi->new('VkBindPipelineIndirectCommandNV', false));
        if(!is_null($pipelineAddress)) $self->setPipelineAddress($pipelineAddress);
        return $self;
    }

    /**
     * uint64_t/
     */
    public function getPipelineAddress(): int
    {
        $cValue = $this->cdata->pipelineAddress;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPipelineAddress(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->pipelineAddress = $cValue;
    }
}
