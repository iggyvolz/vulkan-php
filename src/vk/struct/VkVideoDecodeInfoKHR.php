<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoDecodeInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "srcBuffer" => $this->getSrcBuffer(),
          "srcBufferOffset" => $this->getSrcBufferOffset(),
          "srcBufferRange" => $this->getSrcBufferRange(),
          "dstPictureResource" => $this->getDstPictureResource(),
          "pSetupReferenceSlot" => $this->getPSetupReferenceSlot(),
          "referenceSlotCount" => $this->getReferenceSlotCount(),
          "pReferenceSlots" => $this->getPReferenceSlots(),
        ];
    }

    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|array $flags = null,
        null|VkBuffer $srcBuffer = null,
        null|int $srcBufferOffset = null,
        null|int $srcBufferRange = null,
        null|VkVideoPictureResourceInfoKHR $dstPictureResource = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pSetupReferenceSlot = null,
        null|int $referenceSlotCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pReferenceSlots = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoDecodeInfoKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($srcBuffer)) $self->setSrcBuffer($srcBuffer);
        if(!is_null($srcBufferOffset)) $self->setSrcBufferOffset($srcBufferOffset);
        if(!is_null($srcBufferRange)) $self->setSrcBufferRange($srcBufferRange);
        if(!is_null($dstPictureResource)) $self->setDstPictureResource($dstPictureResource);
        if(!is_null($pSetupReferenceSlot)) $self->setPSetupReferenceSlot($pSetupReferenceSlot);
        if(!is_null($referenceSlotCount)) $self->setReferenceSlotCount($referenceSlotCount);
        if(!is_null($pReferenceSlots)) $self->setPReferenceSlots($pReferenceSlots);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * VkVideoDecodeFlagsKHR/
     */
    public function getFlags(): array
    {
        $cValue = $this->cdata->flags;
        $phpValue = [];
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $cValue = 0;
        $this->cdata->flags = $cValue;
    }

    /**
     * VkBuffer/
     */
    public function getSrcBuffer(): VkBuffer
    {
        $cValue = $this->cdata->srcBuffer;
        $phpValue = new \iggyvolz\vulkan\struct\VkBuffer($cValue, $ffi);
        return $phpValue;
    }

    public function setSrcBuffer(VkBuffer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->srcBuffer = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getSrcBufferOffset(): int
    {
        $cValue = $this->cdata->srcBufferOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSrcBufferOffset(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->srcBufferOffset = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getSrcBufferRange(): int
    {
        $cValue = $this->cdata->srcBufferRange;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSrcBufferRange(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->srcBufferRange = $cValue;
    }

    /**
     * VkVideoPictureResourceInfoKHR/
     */
    public function getDstPictureResource(): VkVideoPictureResourceInfoKHR
    {
        $cValue = $this->cdata->dstPictureResource;
        $phpValue = new \iggyvolz\vulkan\struct\VkVideoPictureResourceInfoKHR($cValue, $ffi);
        return $phpValue;
    }

    public function setDstPictureResource(VkVideoPictureResourceInfoKHR $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->dstPictureResource = $cValue;
    }

    /**
     * VkVideoReferenceSlotInfoKHR* /
     */
    public function getPSetupReferenceSlot(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pSetupReferenceSlot;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkVideoReferenceSlotInfoKHR', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPSetupReferenceSlot(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pSetupReferenceSlot = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getReferenceSlotCount(): int
    {
        $cValue = $this->cdata->referenceSlotCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setReferenceSlotCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->referenceSlotCount = $cValue;
    }

    /**
     * VkVideoReferenceSlotInfoKHR* /
     */
    public function getPReferenceSlots(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pReferenceSlots;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkVideoReferenceSlotInfoKHR', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPReferenceSlots(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pReferenceSlots = $cValue;
    }
}
