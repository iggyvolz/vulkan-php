<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSwapchainPresentModesCreateInfoEXT
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
        null|int $presentModeCount = null,
        mixed $pPresentModes = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSwapchainPresentModesCreateInfoEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($presentModeCount)) $self->setPresentModeCount($presentModeCount);
        if(!is_null($pPresentModes)) $self->setPPresentModes($pPresentModes);
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
     * uint32_t/
     */
    public function getPresentModeCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->presentModeCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPresentModeCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->presentModeCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPPresentModes(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pPresentModes;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPPresentModes(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->pPresentModes = $cValue;
    }
}
