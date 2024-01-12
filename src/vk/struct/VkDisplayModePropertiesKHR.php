<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDisplayModePropertiesKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "displayMode" => $this->getDisplayMode(),
          "parameters" => $this->getParameters(),
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
        null|VkDisplayModeKHR $displayMode = null,
        null|VkDisplayModeParametersKHR $parameters = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDisplayModePropertiesKHR', false), $vulkan);
        if(!is_null($displayMode)) $self->setDisplayMode($displayMode);
        if(!is_null($parameters)) $self->setParameters($parameters);
        return $self;
    }

    /**
     * VkDisplayModeKHR/
     */
    public function getDisplayMode(): VkDisplayModeKHR
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->displayMode;
        $phpValue = new \iggyvolz\vulkan\struct\VkDisplayModeKHR($cValue, $ffi);
        return $phpValue;
    }

    public function setDisplayMode(VkDisplayModeKHR $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->displayMode = $cValue;
    }

    /**
     * VkDisplayModeParametersKHR/
     */
    public function getParameters(): VkDisplayModeParametersKHR
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->parameters;
        $phpValue = new \iggyvolz\vulkan\struct\VkDisplayModeParametersKHR($cValue, $ffi);
        return $phpValue;
    }

    public function setParameters(VkDisplayModeParametersKHR $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->parameters = $cValue;
    }
}
