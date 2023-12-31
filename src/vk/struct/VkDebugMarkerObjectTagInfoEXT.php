<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDebugMarkerObjectTagInfoEXT
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
        null|\iggyvolz\vulkan\enum\VkDebugReportObjectTypeEXT $objectType = null,
        null|int $object = null,
        null|int $tagName = null,
        null|int $tagSize = null,
        null|\iggyvolz\vulkan\util\Pointer $pTag = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDebugMarkerObjectTagInfoEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($objectType)) $self->setObjectType($objectType);
        if(!is_null($object)) $self->setObject($object);
        if(!is_null($tagName)) $self->setTagName($tagName);
        if(!is_null($tagSize)) $self->setTagSize($tagSize);
        if(!is_null($pTag)) $self->setPTag($pTag);
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
     * VkDebugReportObjectTypeEXT/
     */
    public function getObjectType(): \iggyvolz\vulkan\enum\VkDebugReportObjectTypeEXT
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->objectType;
        $phpValue = \iggyvolz\vulkan\enum\VkDebugReportObjectTypeEXT::from($cValue);
        return $phpValue;
    }

    public function setObjectType(\iggyvolz\vulkan\enum\VkDebugReportObjectTypeEXT $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->objectType = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getObject(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->object;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setObject(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->object = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getTagName(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->tagName;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setTagName(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->tagName = $cValue;
    }

    /**
     * size_t/
     */
    public function getTagSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->tagSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setTagSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->tagSize = $cValue;
    }

    /**
     * void* /
     */
    public function getPTag(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pTag;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPTag(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pTag = $cValue;
    }
}
