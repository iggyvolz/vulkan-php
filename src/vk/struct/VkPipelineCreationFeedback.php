<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineCreationFeedback implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "flags" => $this->getFlags(),
          "duration" => $this->getDuration(),
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
        null|array $flags = null,
        null|int $duration = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineCreationFeedback', false), $vulkan);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($duration)) $self->setDuration($duration);
        return $self;
    }

    /**
     * VkPipelineCreationFeedbackFlags/
     */
    public function getFlags(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineCreationFeedbackFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkPipelineCreationFeedbackFlagBits::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getDuration(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->duration;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDuration(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->duration = $cValue;
    }
}
