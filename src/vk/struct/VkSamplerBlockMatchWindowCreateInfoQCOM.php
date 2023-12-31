<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSamplerBlockMatchWindowCreateInfoQCOM
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
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|VkExtent2D $windowExtent = null,
        null|\iggyvolz\vulkan\enum\VkBlockMatchWindowCompareModeQCOM $windowCompareMode = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSamplerBlockMatchWindowCreateInfoQCOM', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($windowExtent)) $self->setWindowExtent($windowExtent);
        if(!is_null($windowCompareMode)) $self->setWindowCompareMode($windowCompareMode);
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
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getWindowExtent(): VkExtent2D
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->windowExtent;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setWindowExtent(VkExtent2D $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->windowExtent = $cValue;
    }

    /**
     * VkBlockMatchWindowCompareModeQCOM/
     */
    public function getWindowCompareMode(): \iggyvolz\vulkan\enum\VkBlockMatchWindowCompareModeQCOM
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->windowCompareMode;
        $phpValue = \iggyvolz\vulkan\enum\VkBlockMatchWindowCompareModeQCOM::from($cValue);
        return $phpValue;
    }

    public function setWindowCompareMode(\iggyvolz\vulkan\enum\VkBlockMatchWindowCompareModeQCOM $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->windowCompareMode = $cValue;
    }
}
