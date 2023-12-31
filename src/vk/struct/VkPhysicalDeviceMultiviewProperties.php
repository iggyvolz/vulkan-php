<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceMultiviewProperties
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
        null|int $maxMultiviewViewCount = null,
        null|int $maxMultiviewInstanceIndex = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceMultiviewProperties', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($maxMultiviewViewCount)) $self->setMaxMultiviewViewCount($maxMultiviewViewCount);
        if(!is_null($maxMultiviewInstanceIndex)) $self->setMaxMultiviewInstanceIndex($maxMultiviewInstanceIndex);
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
     * uint32_t/
     */
    public function getMaxMultiviewViewCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxMultiviewViewCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxMultiviewViewCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxMultiviewViewCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxMultiviewInstanceIndex(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxMultiviewInstanceIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxMultiviewInstanceIndex(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxMultiviewInstanceIndex = $cValue;
    }
}
