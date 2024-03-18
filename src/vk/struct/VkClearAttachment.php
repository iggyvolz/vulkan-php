<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkClearAttachment implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "aspectMask" => $this->getAspectMask(),
          "colorAttachment" => $this->getColorAttachment(),
          "clearValue" => $this->getClearValue(),
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
        null|array $aspectMask = null,
        null|int $colorAttachment = null,
        mixed $clearValue = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkClearAttachment', false));
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
        $cValue = $this->cdata->aspectMask;
        $phpValue = \iggyvolz\vulkan\enum\VkImageAspectFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setAspectMask(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkImageAspectFlagBits::toInt(...$phpValue);
        $this->cdata->aspectMask = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getColorAttachment(): int
    {
        $cValue = $this->cdata->colorAttachment;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setColorAttachment(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->colorAttachment = $cValue;
    }

    /**
     * void* /
     */
    public function getClearValue(): mixed
    {
        $cValue = $this->cdata->clearValue;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setClearValue(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->clearValue = $cValue;
    }
}
