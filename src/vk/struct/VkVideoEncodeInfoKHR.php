<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoEncodeInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "dstBuffer" => $this->getDstBuffer(),
          "dstBufferOffset" => $this->getDstBufferOffset(),
          "dstBufferRange" => $this->getDstBufferRange(),
          "srcPictureResource" => $this->getSrcPictureResource(),
          "pSetupReferenceSlot" => $this->getPSetupReferenceSlot(),
          "referenceSlotCount" => $this->getReferenceSlotCount(),
          "pReferenceSlots" => $this->getPReferenceSlots(),
          "precedingExternallyEncodedBytes" => $this->getPrecedingExternallyEncodedBytes(),
        ];
    }

    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \iggyvolz\vulkan\Vulkan $vulkan,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|array $flags = null,
        null|VkBuffer $dstBuffer = null,
        null|int $dstBufferOffset = null,
        null|int $dstBufferRange = null,
        null|VkVideoPictureResourceInfoKHR $srcPictureResource = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pSetupReferenceSlot = null,
        null|int $referenceSlotCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pReferenceSlots = null,
        null|int $precedingExternallyEncodedBytes = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoEncodeInfoKHR', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($dstBuffer)) $self->setDstBuffer($dstBuffer);
        if(!is_null($dstBufferOffset)) $self->setDstBufferOffset($dstBufferOffset);
        if(!is_null($dstBufferRange)) $self->setDstBufferRange($dstBufferRange);
        if(!is_null($srcPictureResource)) $self->setSrcPictureResource($srcPictureResource);
        if(!is_null($pSetupReferenceSlot)) $self->setPSetupReferenceSlot($pSetupReferenceSlot);
        if(!is_null($referenceSlotCount)) $self->setReferenceSlotCount($referenceSlotCount);
        if(!is_null($pReferenceSlots)) $self->setPReferenceSlots($pReferenceSlots);
        if(!is_null($precedingExternallyEncodedBytes)) $self->setPrecedingExternallyEncodedBytes($precedingExternallyEncodedBytes);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * VkVideoEncodeFlagsKHR/
     */
    public function getFlags(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = [];
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = 0;
        $this->cdata->flags = $cValue;
    }

    /**
     * VkBuffer/
     */
    public function getDstBuffer(): VkBuffer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->dstBuffer;
        $phpValue = new \iggyvolz\vulkan\struct\VkBuffer($cValue, $ffi);
        return $phpValue;
    }

    public function setDstBuffer(VkBuffer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->dstBuffer = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getDstBufferOffset(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->dstBufferOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDstBufferOffset(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->dstBufferOffset = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getDstBufferRange(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->dstBufferRange;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDstBufferRange(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->dstBufferRange = $cValue;
    }

    /**
     * VkVideoPictureResourceInfoKHR/
     */
    public function getSrcPictureResource(): VkVideoPictureResourceInfoKHR
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->srcPictureResource;
        $phpValue = new \iggyvolz\vulkan\struct\VkVideoPictureResourceInfoKHR($cValue, $ffi);
        return $phpValue;
    }

    public function setSrcPictureResource(VkVideoPictureResourceInfoKHR $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->srcPictureResource = $cValue;
    }

    /**
     * VkVideoReferenceSlotInfoKHR* /
     */
    public function getPSetupReferenceSlot(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pSetupReferenceSlot;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkVideoReferenceSlotInfoKHR', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPSetupReferenceSlot(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pSetupReferenceSlot = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getReferenceSlotCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->referenceSlotCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setReferenceSlotCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->referenceSlotCount = $cValue;
    }

    /**
     * VkVideoReferenceSlotInfoKHR* /
     */
    public function getPReferenceSlots(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pReferenceSlots;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkVideoReferenceSlotInfoKHR', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPReferenceSlots(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pReferenceSlots = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPrecedingExternallyEncodedBytes(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->precedingExternallyEncodedBytes;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPrecedingExternallyEncodedBytes(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->precedingExternallyEncodedBytes = $cValue;
    }
}
