<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDisplayPropertiesKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "display" => $this->getDisplay(),
          "displayName" => $this->getDisplayName(),
          "physicalDimensions" => $this->getPhysicalDimensions(),
          "physicalResolution" => $this->getPhysicalResolution(),
          "supportedTransforms" => $this->getSupportedTransforms(),
          "planeReorderPossible" => $this->getPlaneReorderPossible(),
          "persistentContent" => $this->getPersistentContent(),
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
        null|VkDisplayKHR $display = null,
        ?string $displayName = null,
        null|VkExtent2D $physicalDimensions = null,
        null|VkExtent2D $physicalResolution = null,
        null|array $supportedTransforms = null,
        null|bool $planeReorderPossible = null,
        null|bool $persistentContent = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDisplayPropertiesKHR', false));
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
        $cValue = $this->cdata->display;
        $phpValue = new \iggyvolz\vulkan\struct\VkDisplayKHR($cValue, $ffi);
        return $phpValue;
    }

    public function setDisplay(VkDisplayKHR $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->display = $cValue;
    }

    /**
     * const char* /
     */
    public function getDisplayName(): ?string
    {
        $cValue = $this->cdata->displayName;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDisplayName(?string $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->displayName = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getPhysicalDimensions(): VkExtent2D
    {
        $cValue = $this->cdata->physicalDimensions;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setPhysicalDimensions(VkExtent2D $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->physicalDimensions = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getPhysicalResolution(): VkExtent2D
    {
        $cValue = $this->cdata->physicalResolution;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setPhysicalResolution(VkExtent2D $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->physicalResolution = $cValue;
    }

    /**
     * VkSurfaceTransformFlagsKHR/
     */
    public function getSupportedTransforms(): array
    {
        $cValue = $this->cdata->supportedTransforms;
        $phpValue = \iggyvolz\vulkan\enum\VkSurfaceTransformFlagBitsKHR::fromInt($cValue);
        return $phpValue;
    }

    public function setSupportedTransforms(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkSurfaceTransformFlagBitsKHR::toInt(...$phpValue);
        $this->cdata->supportedTransforms = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPlaneReorderPossible(): bool
    {
        $cValue = $this->cdata->planeReorderPossible;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setPlaneReorderPossible(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->planeReorderPossible = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPersistentContent(): bool
    {
        $cValue = $this->cdata->persistentContent;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setPersistentContent(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->persistentContent = $cValue;
    }
}
