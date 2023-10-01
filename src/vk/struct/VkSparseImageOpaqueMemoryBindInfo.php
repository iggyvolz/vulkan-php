<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSparseImageOpaqueMemoryBindInfo
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
        null|VkImage $image = null,
        null|int $bindCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pBinds = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSparseImageOpaqueMemoryBindInfo', false), $vulkan->ffi);
        if(!is_null($image)) $self->setImage($image);
        if(!is_null($bindCount)) $self->setBindCount($bindCount);
        if(!is_null($pBinds)) $self->setPBinds($pBinds);
        return $self;
    }

    /**
     * VkImage/
     */
    public function getImage(): VkImage
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->image;
        $phpValue = new \iggyvolz\vulkan\struct\VkImage($cValue, $ffi);
        return $phpValue;
    }

    public function setImage(VkImage $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->image = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBindCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->bindCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBindCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->bindCount = $cValue;
    }

    /**
     * VkSparseMemoryBind* /
     */
    public function getPBinds(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pBinds;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkSparseMemoryBind', $cValue, $ffi);
        return $phpValue;
    }

    public function setPBinds(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pBinds = $cValue;
    }
}
