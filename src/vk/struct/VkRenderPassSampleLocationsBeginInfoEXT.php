<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkRenderPassSampleLocationsBeginInfoEXT
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
        null|int $attachmentInitialSampleLocationsCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pAttachmentInitialSampleLocations = null,
        null|int $postSubpassSampleLocationsCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pPostSubpassSampleLocations = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkRenderPassSampleLocationsBeginInfoEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($attachmentInitialSampleLocationsCount)) $self->setAttachmentInitialSampleLocationsCount($attachmentInitialSampleLocationsCount);
        if(!is_null($pAttachmentInitialSampleLocations)) $self->setPAttachmentInitialSampleLocations($pAttachmentInitialSampleLocations);
        if(!is_null($postSubpassSampleLocationsCount)) $self->setPostSubpassSampleLocationsCount($postSubpassSampleLocationsCount);
        if(!is_null($pPostSubpassSampleLocations)) $self->setPPostSubpassSampleLocations($pPostSubpassSampleLocations);
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
    public function getAttachmentInitialSampleLocationsCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->attachmentInitialSampleLocationsCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setAttachmentInitialSampleLocationsCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->attachmentInitialSampleLocationsCount = $cValue;
    }

    /**
     * VkAttachmentSampleLocationsEXT* /
     */
    public function getPAttachmentInitialSampleLocations(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pAttachmentInitialSampleLocations;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkAttachmentSampleLocationsEXT', $cValue, $ffi);
        return $phpValue;
    }

    public function setPAttachmentInitialSampleLocations(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pAttachmentInitialSampleLocations = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPostSubpassSampleLocationsCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->postSubpassSampleLocationsCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPostSubpassSampleLocationsCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->postSubpassSampleLocationsCount = $cValue;
    }

    /**
     * VkSubpassSampleLocationsEXT* /
     */
    public function getPPostSubpassSampleLocations(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pPostSubpassSampleLocations;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkSubpassSampleLocationsEXT', $cValue, $ffi);
        return $phpValue;
    }

    public function setPPostSubpassSampleLocations(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pPostSubpassSampleLocations = $cValue;
    }
}
