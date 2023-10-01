<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkCopyBufferInfo2
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
        null|VkBuffer $srcBuffer = null,
        null|VkBuffer $dstBuffer = null,
        null|int $regionCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pRegions = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkCopyBufferInfo2', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($srcBuffer)) $self->setSrcBuffer($srcBuffer);
        if(!is_null($dstBuffer)) $self->setDstBuffer($dstBuffer);
        if(!is_null($regionCount)) $self->setRegionCount($regionCount);
        if(!is_null($pRegions)) $self->setPRegions($pRegions);
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
     * VkBuffer/
     */
    public function getSrcBuffer(): VkBuffer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->srcBuffer;
        $phpValue = new \iggyvolz\vulkan\struct\VkBuffer($cValue, $ffi);
        return $phpValue;
    }

    public function setSrcBuffer(VkBuffer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->srcBuffer = $cValue;
    }

    /**
     * VkBuffer/
     */
    public function getDstBuffer(): VkBuffer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->dstBuffer;
        $phpValue = new \iggyvolz\vulkan\struct\VkBuffer($cValue, $ffi);
        return $phpValue;
    }

    public function setDstBuffer(VkBuffer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->dstBuffer = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getRegionCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->regionCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setRegionCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->regionCount = $cValue;
    }

    /**
     * VkBufferCopy2* /
     */
    public function getPRegions(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pRegions;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkBufferCopy2', $cValue, $ffi);
        return $phpValue;
    }

    public function setPRegions(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pRegions = $cValue;
    }
}
