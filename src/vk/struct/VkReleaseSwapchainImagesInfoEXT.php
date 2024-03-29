<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkReleaseSwapchainImagesInfoEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "swapchain" => $this->getSwapchain(),
          "imageIndexCount" => $this->getImageIndexCount(),
          "pImageIndices" => $this->getPImageIndices(),
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
        null|VkSwapchainKHR $swapchain = null,
        null|int $imageIndexCount = null,
        null|\iggyvolz\vulkan\util\IntPointer $pImageIndices = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkReleaseSwapchainImagesInfoEXT', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($swapchain)) $self->setSwapchain($swapchain);
        if(!is_null($imageIndexCount)) $self->setImageIndexCount($imageIndexCount);
        if(!is_null($pImageIndices)) $self->setPImageIndices($pImageIndices);
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
     * VkSwapchainKHR/
     */
    public function getSwapchain(): VkSwapchainKHR
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->swapchain;
        $phpValue = new \iggyvolz\vulkan\struct\VkSwapchainKHR($cValue, $ffi);
        return $phpValue;
    }

    public function setSwapchain(VkSwapchainKHR $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->swapchain = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getImageIndexCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->imageIndexCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setImageIndexCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->imageIndexCount = $cValue;
    }

    /**
     * uint32_t* /
     */
    public function getPImageIndices(): \iggyvolz\vulkan\util\IntPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pImageIndices;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPImageIndices(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pImageIndices = $cValue;
    }
}
