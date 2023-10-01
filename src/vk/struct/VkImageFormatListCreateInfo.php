<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkImageFormatListCreateInfo
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
        null|int $viewFormatCount = null,
        mixed $pViewFormats = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkImageFormatListCreateInfo', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($viewFormatCount)) $self->setViewFormatCount($viewFormatCount);
        if(!is_null($pViewFormats)) $self->setPViewFormats($pViewFormats);
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
    public function getViewFormatCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->viewFormatCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setViewFormatCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->viewFormatCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPViewFormats(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pViewFormats;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPViewFormats(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->pViewFormats = $cValue;
    }
}
