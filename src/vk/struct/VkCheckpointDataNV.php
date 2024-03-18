<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkCheckpointDataNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "stage" => $this->getStage(),
          "pCheckpointMarker" => $this->getPCheckpointMarker(),
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
        null|\iggyvolz\vulkan\enum\VkPipelineStageFlagBits $stage = null,
        null|\iggyvolz\vulkan\util\Pointer $pCheckpointMarker = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkCheckpointDataNV', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($stage)) $self->setStage($stage);
        if(!is_null($pCheckpointMarker)) $self->setPCheckpointMarker($pCheckpointMarker);
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
     * VkPipelineStageFlagBits/
     */
    public function getStage(): \iggyvolz\vulkan\enum\VkPipelineStageFlagBits
    {
        $cValue = $this->cdata->stage;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits::from($cValue);
        return $phpValue;
    }

    public function setStage(\iggyvolz\vulkan\enum\VkPipelineStageFlagBits $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->stage = $cValue;
    }

    /**
     * void* /
     */
    public function getPCheckpointMarker(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pCheckpointMarker;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPCheckpointMarker(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pCheckpointMarker = $cValue;
    }
}
