<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkClearAttachment
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
        null|array $aspectMask = null,
        null|int $colorAttachment = null,
        mixed $clearValue = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkClearAttachment', false), $vulkan->ffi);
        if(!is_null($aspectMask)) $self->setAspectMask($aspectMask);
        if(!is_null($colorAttachment)) $self->setColorAttachment($colorAttachment);
        if(!is_null($clearValue)) $self->setClearValue($clearValue);
        return $self;
    }

    /**
     * VkImageAspectFlags/
     */
    public function getAspectMask(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->aspectMask;
        $phpValue = \iggyvolz\vulkan\enum\VkImageAspectFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setAspectMask(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkImageAspectFlagBits::toInt(...$phpValue);
        $this->cdata->aspectMask = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getColorAttachment(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->colorAttachment;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setColorAttachment(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->colorAttachment = $cValue;
    }

    /**
     * void* /
     */
    public function getClearValue(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->clearValue;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setClearValue(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->clearValue = $cValue;
    }
}
