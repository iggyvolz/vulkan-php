<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkReleaseSwapchainImagesInfoEXT
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
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\OpaquePointer $pNext = null,
        null|VkSwapchainKHR $swapchain = null,
        null|int $imageIndexCount = null,
        null|\iggyvolz\vulkan\util\IntPointer $pImageIndices = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkReleaseSwapchainImagesInfoEXT', false), $vulkan->ffi);
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
        $ffi = $this->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\OpaquePointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\OpaquePointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * VkSwapchainKHR/
     */
    public function getSwapchain(): VkSwapchainKHR
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->swapchain;
        $phpValue = new \iggyvolz\vulkan\struct\VkSwapchainKHR($cValue, $ffi);
        return $phpValue;
    }

    public function setSwapchain(VkSwapchainKHR $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->swapchain = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getImageIndexCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->imageIndexCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setImageIndexCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->imageIndexCount = $cValue;
    }

    /**
     * uint32_t* /
     */
    public function getPImageIndices(): \iggyvolz\vulkan\util\IntPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pImageIndices;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPImageIndices(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pImageIndices = $cValue;
    }
}
