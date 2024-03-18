<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSurfaceCapabilities2EXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "minImageCount" => $this->getMinImageCount(),
          "maxImageCount" => $this->getMaxImageCount(),
          "currentExtent" => $this->getCurrentExtent(),
          "minImageExtent" => $this->getMinImageExtent(),
          "maxImageExtent" => $this->getMaxImageExtent(),
          "maxImageArrayLayers" => $this->getMaxImageArrayLayers(),
          "supportedTransforms" => $this->getSupportedTransforms(),
          "currentTransform" => $this->getCurrentTransform(),
          "supportedCompositeAlpha" => $this->getSupportedCompositeAlpha(),
          "supportedUsageFlags" => $this->getSupportedUsageFlags(),
          "supportedSurfaceCounters" => $this->getSupportedSurfaceCounters(),
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
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|int $minImageCount = null,
        null|int $maxImageCount = null,
        null|VkExtent2D $currentExtent = null,
        null|VkExtent2D $minImageExtent = null,
        null|VkExtent2D $maxImageExtent = null,
        null|int $maxImageArrayLayers = null,
        null|array $supportedTransforms = null,
        null|\iggyvolz\vulkan\enum\VkSurfaceTransformFlagBitsKHR $currentTransform = null,
        null|array $supportedCompositeAlpha = null,
        null|array $supportedUsageFlags = null,
        null|array $supportedSurfaceCounters = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSurfaceCapabilities2EXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($minImageCount)) $self->setMinImageCount($minImageCount);
        if(!is_null($maxImageCount)) $self->setMaxImageCount($maxImageCount);
        if(!is_null($currentExtent)) $self->setCurrentExtent($currentExtent);
        if(!is_null($minImageExtent)) $self->setMinImageExtent($minImageExtent);
        if(!is_null($maxImageExtent)) $self->setMaxImageExtent($maxImageExtent);
        if(!is_null($maxImageArrayLayers)) $self->setMaxImageArrayLayers($maxImageArrayLayers);
        if(!is_null($supportedTransforms)) $self->setSupportedTransforms($supportedTransforms);
        if(!is_null($currentTransform)) $self->setCurrentTransform($currentTransform);
        if(!is_null($supportedCompositeAlpha)) $self->setSupportedCompositeAlpha($supportedCompositeAlpha);
        if(!is_null($supportedUsageFlags)) $self->setSupportedUsageFlags($supportedUsageFlags);
        if(!is_null($supportedSurfaceCounters)) $self->setSupportedSurfaceCounters($supportedSurfaceCounters);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMinImageCount(): int
    {
        $cValue = $this->cdata->minImageCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinImageCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->minImageCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxImageCount(): int
    {
        $cValue = $this->cdata->maxImageCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxImageCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxImageCount = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getCurrentExtent(): VkExtent2D
    {
        $cValue = $this->cdata->currentExtent;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setCurrentExtent(VkExtent2D $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->currentExtent = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getMinImageExtent(): VkExtent2D
    {
        $cValue = $this->cdata->minImageExtent;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setMinImageExtent(VkExtent2D $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->minImageExtent = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getMaxImageExtent(): VkExtent2D
    {
        $cValue = $this->cdata->maxImageExtent;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setMaxImageExtent(VkExtent2D $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->maxImageExtent = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxImageArrayLayers(): int
    {
        $cValue = $this->cdata->maxImageArrayLayers;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxImageArrayLayers(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxImageArrayLayers = $cValue;
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
     * VkSurfaceTransformFlagBitsKHR/
     */
    public function getCurrentTransform(): \iggyvolz\vulkan\enum\VkSurfaceTransformFlagBitsKHR
    {
        $cValue = $this->cdata->currentTransform;
        $phpValue = \iggyvolz\vulkan\enum\VkSurfaceTransformFlagBitsKHR::from($cValue);
        return $phpValue;
    }

    public function setCurrentTransform(\iggyvolz\vulkan\enum\VkSurfaceTransformFlagBitsKHR $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->currentTransform = $cValue;
    }

    /**
     * VkCompositeAlphaFlagsKHR/
     */
    public function getSupportedCompositeAlpha(): array
    {
        $cValue = $this->cdata->supportedCompositeAlpha;
        $phpValue = \iggyvolz\vulkan\enum\VkCompositeAlphaFlagBitsKHR::fromInt($cValue);
        return $phpValue;
    }

    public function setSupportedCompositeAlpha(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkCompositeAlphaFlagBitsKHR::toInt(...$phpValue);
        $this->cdata->supportedCompositeAlpha = $cValue;
    }

    /**
     * VkImageUsageFlags/
     */
    public function getSupportedUsageFlags(): array
    {
        $cValue = $this->cdata->supportedUsageFlags;
        $phpValue = \iggyvolz\vulkan\enum\VkImageUsageFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setSupportedUsageFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkImageUsageFlagBits::toInt(...$phpValue);
        $this->cdata->supportedUsageFlags = $cValue;
    }

    /**
     * VkSurfaceCounterFlagsEXT/
     */
    public function getSupportedSurfaceCounters(): array
    {
        $cValue = $this->cdata->supportedSurfaceCounters;
        $phpValue = \iggyvolz\vulkan\enum\VkSurfaceCounterFlagBitsEXT::fromInt($cValue);
        return $phpValue;
    }

    public function setSupportedSurfaceCounters(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkSurfaceCounterFlagBitsEXT::toInt(...$phpValue);
        $this->cdata->supportedSurfaceCounters = $cValue;
    }
}
