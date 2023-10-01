<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkBufferMemoryBarrier2
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
        mixed $srcStageMask = null,
        mixed $srcAccessMask = null,
        mixed $dstStageMask = null,
        mixed $dstAccessMask = null,
        null|int $srcQueueFamilyIndex = null,
        null|int $dstQueueFamilyIndex = null,
        null|VkBuffer $buffer = null,
        null|int $offset = null,
        null|int $size = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkBufferMemoryBarrier2', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($srcStageMask)) $self->setSrcStageMask($srcStageMask);
        if(!is_null($srcAccessMask)) $self->setSrcAccessMask($srcAccessMask);
        if(!is_null($dstStageMask)) $self->setDstStageMask($dstStageMask);
        if(!is_null($dstAccessMask)) $self->setDstAccessMask($dstAccessMask);
        if(!is_null($srcQueueFamilyIndex)) $self->setSrcQueueFamilyIndex($srcQueueFamilyIndex);
        if(!is_null($dstQueueFamilyIndex)) $self->setDstQueueFamilyIndex($dstQueueFamilyIndex);
        if(!is_null($buffer)) $self->setBuffer($buffer);
        if(!is_null($offset)) $self->setOffset($offset);
        if(!is_null($size)) $self->setSize($size);
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
     * void* /
     */
    public function getSrcStageMask(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->srcStageMask;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setSrcStageMask(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->srcStageMask = $cValue;
    }

    /**
     * void* /
     */
    public function getSrcAccessMask(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->srcAccessMask;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setSrcAccessMask(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->srcAccessMask = $cValue;
    }

    /**
     * void* /
     */
    public function getDstStageMask(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->dstStageMask;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setDstStageMask(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->dstStageMask = $cValue;
    }

    /**
     * void* /
     */
    public function getDstAccessMask(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->dstAccessMask;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setDstAccessMask(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->dstAccessMask = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSrcQueueFamilyIndex(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->srcQueueFamilyIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSrcQueueFamilyIndex(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->srcQueueFamilyIndex = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDstQueueFamilyIndex(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->dstQueueFamilyIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDstQueueFamilyIndex(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->dstQueueFamilyIndex = $cValue;
    }

    /**
     * VkBuffer/
     */
    public function getBuffer(): VkBuffer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->buffer;
        $phpValue = new \iggyvolz\vulkan\struct\VkBuffer($cValue, $ffi);
        return $phpValue;
    }

    public function setBuffer(VkBuffer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->buffer = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getOffset(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->offset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setOffset(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->offset = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->size;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->size = $cValue;
    }
}
