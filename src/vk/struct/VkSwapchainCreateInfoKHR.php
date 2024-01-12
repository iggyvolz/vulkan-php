<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSwapchainCreateInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "surface" => $this->getSurface(),
          "minImageCount" => $this->getMinImageCount(),
          "imageFormat" => $this->getImageFormat(),
          "imageColorSpace" => $this->getImageColorSpace(),
          "imageExtent" => $this->getImageExtent(),
          "imageArrayLayers" => $this->getImageArrayLayers(),
          "imageUsage" => $this->getImageUsage(),
          "imageSharingMode" => $this->getImageSharingMode(),
          "queueFamilyIndexCount" => $this->getQueueFamilyIndexCount(),
          "pQueueFamilyIndices" => $this->getPQueueFamilyIndices(),
          "preTransform" => $this->getPreTransform(),
          "compositeAlpha" => $this->getCompositeAlpha(),
          "presentMode" => $this->getPresentMode(),
          "clipped" => $this->getClipped(),
          "oldSwapchain" => $this->getOldSwapchain(),
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
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|array $flags = null,
        null|VkSurfaceKHR $surface = null,
        null|int $minImageCount = null,
        null|\iggyvolz\vulkan\enum\VkFormat $imageFormat = null,
        null|\iggyvolz\vulkan\enum\VkColorSpaceKHR $imageColorSpace = null,
        null|VkExtent2D $imageExtent = null,
        null|int $imageArrayLayers = null,
        null|array $imageUsage = null,
        null|\iggyvolz\vulkan\enum\VkSharingMode $imageSharingMode = null,
        null|int $queueFamilyIndexCount = null,
        null|\iggyvolz\vulkan\util\IntPointer $pQueueFamilyIndices = null,
        null|\iggyvolz\vulkan\enum\VkSurfaceTransformFlagBitsKHR $preTransform = null,
        null|\iggyvolz\vulkan\enum\VkCompositeAlphaFlagBitsKHR $compositeAlpha = null,
        null|\iggyvolz\vulkan\enum\VkPresentModeKHR $presentMode = null,
        null|bool $clipped = null,
        null|VkSwapchainKHR $oldSwapchain = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSwapchainCreateInfoKHR', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($surface)) $self->setSurface($surface);
        if(!is_null($minImageCount)) $self->setMinImageCount($minImageCount);
        if(!is_null($imageFormat)) $self->setImageFormat($imageFormat);
        if(!is_null($imageColorSpace)) $self->setImageColorSpace($imageColorSpace);
        if(!is_null($imageExtent)) $self->setImageExtent($imageExtent);
        if(!is_null($imageArrayLayers)) $self->setImageArrayLayers($imageArrayLayers);
        if(!is_null($imageUsage)) $self->setImageUsage($imageUsage);
        if(!is_null($imageSharingMode)) $self->setImageSharingMode($imageSharingMode);
        if(!is_null($queueFamilyIndexCount)) $self->setQueueFamilyIndexCount($queueFamilyIndexCount);
        if(!is_null($pQueueFamilyIndices)) $self->setPQueueFamilyIndices($pQueueFamilyIndices);
        if(!is_null($preTransform)) $self->setPreTransform($preTransform);
        if(!is_null($compositeAlpha)) $self->setCompositeAlpha($compositeAlpha);
        if(!is_null($presentMode)) $self->setPresentMode($presentMode);
        if(!is_null($clipped)) $self->setClipped($clipped);
        if(!is_null($oldSwapchain)) $self->setOldSwapchain($oldSwapchain);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * VkSwapchainCreateFlagsKHR/
     */
    public function getFlags(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkSwapchainCreateFlagBitsKHR::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkSwapchainCreateFlagBitsKHR::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * VkSurfaceKHR/
     */
    public function getSurface(): VkSurfaceKHR
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->surface;
        $phpValue = new \iggyvolz\vulkan\struct\VkSurfaceKHR($cValue, $ffi);
        return $phpValue;
    }

    public function setSurface(VkSurfaceKHR $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->surface = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMinImageCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->minImageCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinImageCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->minImageCount = $cValue;
    }

    /**
     * VkFormat/
     */
    public function getImageFormat(): \iggyvolz\vulkan\enum\VkFormat
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->imageFormat;
        $phpValue = \iggyvolz\vulkan\enum\VkFormat::from($cValue);
        return $phpValue;
    }

    public function setImageFormat(\iggyvolz\vulkan\enum\VkFormat $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->imageFormat = $cValue;
    }

    /**
     * VkColorSpaceKHR/
     */
    public function getImageColorSpace(): \iggyvolz\vulkan\enum\VkColorSpaceKHR
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->imageColorSpace;
        $phpValue = \iggyvolz\vulkan\enum\VkColorSpaceKHR::from($cValue);
        return $phpValue;
    }

    public function setImageColorSpace(\iggyvolz\vulkan\enum\VkColorSpaceKHR $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->imageColorSpace = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getImageExtent(): VkExtent2D
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->imageExtent;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setImageExtent(VkExtent2D $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->imageExtent = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getImageArrayLayers(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->imageArrayLayers;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setImageArrayLayers(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->imageArrayLayers = $cValue;
    }

    /**
     * VkImageUsageFlags/
     */
    public function getImageUsage(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->imageUsage;
        $phpValue = \iggyvolz\vulkan\enum\VkImageUsageFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setImageUsage(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkImageUsageFlagBits::toInt(...$phpValue);
        $this->cdata->imageUsage = $cValue;
    }

    /**
     * VkSharingMode/
     */
    public function getImageSharingMode(): \iggyvolz\vulkan\enum\VkSharingMode
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->imageSharingMode;
        $phpValue = \iggyvolz\vulkan\enum\VkSharingMode::from($cValue);
        return $phpValue;
    }

    public function setImageSharingMode(\iggyvolz\vulkan\enum\VkSharingMode $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->imageSharingMode = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getQueueFamilyIndexCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->queueFamilyIndexCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setQueueFamilyIndexCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->queueFamilyIndexCount = $cValue;
    }

    /**
     * uint32_t* /
     */
    public function getPQueueFamilyIndices(): \iggyvolz\vulkan\util\IntPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pQueueFamilyIndices;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPQueueFamilyIndices(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pQueueFamilyIndices = $cValue;
    }

    /**
     * VkSurfaceTransformFlagBitsKHR/
     */
    public function getPreTransform(): \iggyvolz\vulkan\enum\VkSurfaceTransformFlagBitsKHR
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->preTransform;
        $phpValue = \iggyvolz\vulkan\enum\VkSurfaceTransformFlagBitsKHR::from($cValue);
        return $phpValue;
    }

    public function setPreTransform(\iggyvolz\vulkan\enum\VkSurfaceTransformFlagBitsKHR $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->preTransform = $cValue;
    }

    /**
     * VkCompositeAlphaFlagBitsKHR/
     */
    public function getCompositeAlpha(): \iggyvolz\vulkan\enum\VkCompositeAlphaFlagBitsKHR
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->compositeAlpha;
        $phpValue = \iggyvolz\vulkan\enum\VkCompositeAlphaFlagBitsKHR::from($cValue);
        return $phpValue;
    }

    public function setCompositeAlpha(\iggyvolz\vulkan\enum\VkCompositeAlphaFlagBitsKHR $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->compositeAlpha = $cValue;
    }

    /**
     * VkPresentModeKHR/
     */
    public function getPresentMode(): \iggyvolz\vulkan\enum\VkPresentModeKHR
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->presentMode;
        $phpValue = \iggyvolz\vulkan\enum\VkPresentModeKHR::from($cValue);
        return $phpValue;
    }

    public function setPresentMode(\iggyvolz\vulkan\enum\VkPresentModeKHR $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->presentMode = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getClipped(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->clipped;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setClipped(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->clipped = $cValue;
    }

    /**
     * VkSwapchainKHR/
     */
    public function getOldSwapchain(): VkSwapchainKHR
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->oldSwapchain;
        $phpValue = new \iggyvolz\vulkan\struct\VkSwapchainKHR($cValue, $ffi);
        return $phpValue;
    }

    public function setOldSwapchain(VkSwapchainKHR $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->oldSwapchain = $cValue;
    }
}
