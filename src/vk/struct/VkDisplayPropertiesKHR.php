<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDisplayPropertiesKHR
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
        null|VkDisplayKHR $display = null,
        ?string $displayName = null,
        null|VkExtent2D $physicalDimensions = null,
        null|VkExtent2D $physicalResolution = null,
        mixed $supportedTransforms = null,
        null|bool $planeReorderPossible = null,
        null|bool $persistentContent = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDisplayPropertiesKHR', false), $vulkan->ffi);
        if(!is_null($display)) $self->setDisplay($display);
        if(!is_null($displayName)) $self->setDisplayName($displayName);
        if(!is_null($physicalDimensions)) $self->setPhysicalDimensions($physicalDimensions);
        if(!is_null($physicalResolution)) $self->setPhysicalResolution($physicalResolution);
        if(!is_null($supportedTransforms)) $self->setSupportedTransforms($supportedTransforms);
        if(!is_null($planeReorderPossible)) $self->setPlaneReorderPossible($planeReorderPossible);
        if(!is_null($persistentContent)) $self->setPersistentContent($persistentContent);
        return $self;
    }

    /**
     * VkDisplayKHR/
     */
    public function getDisplay(): VkDisplayKHR
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->display;
        $phpValue = new \iggyvolz\vulkan\struct\VkDisplayKHR($cValue, $ffi);
        return $phpValue;
    }

    public function setDisplay(VkDisplayKHR $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->display = $cValue;
    }

    /**
     * const char* /
     */
    public function getDisplayName(): ?string
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->displayName;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDisplayName(?string $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->displayName = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getPhysicalDimensions(): VkExtent2D
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->physicalDimensions;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setPhysicalDimensions(VkExtent2D $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->physicalDimensions = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getPhysicalResolution(): VkExtent2D
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->physicalResolution;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setPhysicalResolution(VkExtent2D $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->physicalResolution = $cValue;
    }

    /**
     * void* /
     */
    public function getSupportedTransforms(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->supportedTransforms;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setSupportedTransforms(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->supportedTransforms = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPlaneReorderPossible(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->planeReorderPossible;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setPlaneReorderPossible(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->planeReorderPossible = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPersistentContent(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->persistentContent;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setPersistentContent(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->persistentContent = $cValue;
    }
}
