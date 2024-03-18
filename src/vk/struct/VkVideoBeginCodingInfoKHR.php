<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoBeginCodingInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "videoSession" => $this->getVideoSession(),
          "videoSessionParameters" => $this->getVideoSessionParameters(),
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
        null|VkVideoSessionKHR $videoSession = null,
        null|VkVideoSessionParametersKHR $videoSessionParameters = null,
        null|int $referenceSlotCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pReferenceSlots = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoBeginCodingInfoKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($videoSession)) $self->setVideoSession($videoSession);
        if(!is_null($videoSessionParameters)) $self->setVideoSessionParameters($videoSessionParameters);
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
     * VkVideoBeginCodingFlagsKHR/
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
     * VkVideoSessionKHR/
     */
    public function getVideoSession(): VkVideoSessionKHR
    {
        $cValue = $this->cdata->videoSession;
        $phpValue = new \iggyvolz\vulkan\struct\VkVideoSessionKHR($cValue, $ffi);
        return $phpValue;
    }

    public function setVideoSession(VkVideoSessionKHR $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->videoSession = $cValue;
    }

    /**
     * VkVideoSessionParametersKHR/
     */
    public function getVideoSessionParameters(): VkVideoSessionParametersKHR
    {
        $cValue = $this->cdata->videoSessionParameters;
        $phpValue = new \iggyvolz\vulkan\struct\VkVideoSessionParametersKHR($cValue, $ffi);
        return $phpValue;
    }

    public function setVideoSessionParameters(VkVideoSessionParametersKHR $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->videoSessionParameters = $cValue;
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
