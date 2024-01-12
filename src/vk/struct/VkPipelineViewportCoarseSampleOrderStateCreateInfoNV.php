<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineViewportCoarseSampleOrderStateCreateInfoNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "sampleOrderType" => $this->getSampleOrderType(),
          "customSampleOrderCount" => $this->getCustomSampleOrderCount(),
          "pCustomSampleOrders" => $this->getPCustomSampleOrders(),
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
        null|\iggyvolz\vulkan\enum\VkCoarseSampleOrderTypeNV $sampleOrderType = null,
        null|int $customSampleOrderCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pCustomSampleOrders = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineViewportCoarseSampleOrderStateCreateInfoNV', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($sampleOrderType)) $self->setSampleOrderType($sampleOrderType);
        if(!is_null($customSampleOrderCount)) $self->setCustomSampleOrderCount($customSampleOrderCount);
        if(!is_null($pCustomSampleOrders)) $self->setPCustomSampleOrders($pCustomSampleOrders);
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
     * VkCoarseSampleOrderTypeNV/
     */
    public function getSampleOrderType(): \iggyvolz\vulkan\enum\VkCoarseSampleOrderTypeNV
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sampleOrderType;
        $phpValue = \iggyvolz\vulkan\enum\VkCoarseSampleOrderTypeNV::from($cValue);
        return $phpValue;
    }

    public function setSampleOrderType(\iggyvolz\vulkan\enum\VkCoarseSampleOrderTypeNV $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sampleOrderType = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getCustomSampleOrderCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->customSampleOrderCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCustomSampleOrderCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->customSampleOrderCount = $cValue;
    }

    /**
     * VkCoarseSampleOrderCustomNV* /
     */
    public function getPCustomSampleOrders(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pCustomSampleOrders;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkCoarseSampleOrderCustomNV', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPCustomSampleOrders(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pCustomSampleOrders = $cValue;
    }
}
