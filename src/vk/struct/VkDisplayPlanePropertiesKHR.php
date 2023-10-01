<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDisplayPlanePropertiesKHR
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
        null|VkDisplayKHR $currentDisplay = null,
        null|int $currentStackIndex = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDisplayPlanePropertiesKHR', false), $vulkan->ffi);
        if(!is_null($currentDisplay)) $self->setCurrentDisplay($currentDisplay);
        if(!is_null($currentStackIndex)) $self->setCurrentStackIndex($currentStackIndex);
        return $self;
    }

    /**
     * VkDisplayKHR/
     */
    public function getCurrentDisplay(): VkDisplayKHR
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->currentDisplay;
        $phpValue = new \iggyvolz\vulkan\struct\VkDisplayKHR($cValue, $ffi);
        return $phpValue;
    }

    public function setCurrentDisplay(VkDisplayKHR $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->currentDisplay = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getCurrentStackIndex(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->currentStackIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCurrentStackIndex(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->currentStackIndex = $cValue;
    }
}
