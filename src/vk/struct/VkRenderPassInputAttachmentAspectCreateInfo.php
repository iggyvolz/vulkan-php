<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkRenderPassInputAttachmentAspectCreateInfo
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
        null|int $aspectReferenceCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pAspectReferences = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkRenderPassInputAttachmentAspectCreateInfo', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($aspectReferenceCount)) $self->setAspectReferenceCount($aspectReferenceCount);
        if(!is_null($pAspectReferences)) $self->setPAspectReferences($pAspectReferences);
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
    public function getAspectReferenceCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->aspectReferenceCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setAspectReferenceCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->aspectReferenceCount = $cValue;
    }

    /**
     * VkInputAttachmentAspectReference* /
     */
    public function getPAspectReferences(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pAspectReferences;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkInputAttachmentAspectReference', $cValue, $ffi);
        return $phpValue;
    }

    public function setPAspectReferences(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pAspectReferences = $cValue;
    }
}
