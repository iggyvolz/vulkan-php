<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDisplayPlanePropertiesKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "currentDisplay" => $this->getCurrentDisplay(),
          "currentStackIndex" => $this->getCurrentStackIndex(),
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
        null|VkDisplayKHR $currentDisplay = null,
        null|int $currentStackIndex = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDisplayPlanePropertiesKHR', false), $vulkan);
        if(!is_null($currentDisplay)) $self->setCurrentDisplay($currentDisplay);
        if(!is_null($currentStackIndex)) $self->setCurrentStackIndex($currentStackIndex);
        return $self;
    }

    /**
     * VkDisplayKHR/
     */
    public function getCurrentDisplay(): VkDisplayKHR
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->currentDisplay;
        $phpValue = new \iggyvolz\vulkan\struct\VkDisplayKHR($cValue, $ffi);
        return $phpValue;
    }

    public function setCurrentDisplay(VkDisplayKHR $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->currentDisplay = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getCurrentStackIndex(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->currentStackIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCurrentStackIndex(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->currentStackIndex = $cValue;
    }
}
