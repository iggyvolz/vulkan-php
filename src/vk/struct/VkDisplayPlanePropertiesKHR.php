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
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|VkDisplayKHR $currentDisplay = null,
        null|int $currentStackIndex = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDisplayPlanePropertiesKHR', false));
        if(!is_null($currentDisplay)) $self->setCurrentDisplay($currentDisplay);
        if(!is_null($currentStackIndex)) $self->setCurrentStackIndex($currentStackIndex);
        return $self;
    }

    /**
     * VkDisplayKHR/
     */
    public function getCurrentDisplay(): VkDisplayKHR
    {
        $cValue = $this->cdata->currentDisplay;
        $phpValue = new \iggyvolz\vulkan\struct\VkDisplayKHR($cValue, $ffi);
        return $phpValue;
    }

    public function setCurrentDisplay(VkDisplayKHR $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->currentDisplay = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getCurrentStackIndex(): int
    {
        $cValue = $this->cdata->currentStackIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCurrentStackIndex(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->currentStackIndex = $cValue;
    }
}
