<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDeviceImageSubresourceInfoKHR
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
        null|\iggyvolz\vulkan\util\ObjectPointer $pCreateInfo = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pSubresource = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDeviceImageSubresourceInfoKHR', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($pCreateInfo)) $self->setPCreateInfo($pCreateInfo);
        if(!is_null($pSubresource)) $self->setPSubresource($pSubresource);
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
     * VkImageCreateInfo* /
     */
    public function getPCreateInfo(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pCreateInfo;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkImageCreateInfo', $cValue, $ffi);
        return $phpValue;
    }

    public function setPCreateInfo(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pCreateInfo = $cValue;
    }

    /**
     * VkImageSubresource2KHR* /
     */
    public function getPSubresource(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pSubresource;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkImageSubresource2KHR', $cValue, $ffi);
        return $phpValue;
    }

    public function setPSubresource(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pSubresource = $cValue;
    }
}
