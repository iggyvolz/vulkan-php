<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceVertexAttributeDivisorFeaturesKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "vertexAttributeInstanceRateDivisor" => $this->getVertexAttributeInstanceRateDivisor(),
          "vertexAttributeInstanceRateZeroDivisor" => $this->getVertexAttributeInstanceRateZeroDivisor(),
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
        null|bool $vertexAttributeInstanceRateDivisor = null,
        null|bool $vertexAttributeInstanceRateZeroDivisor = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceVertexAttributeDivisorFeaturesKHR', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($vertexAttributeInstanceRateDivisor)) $self->setVertexAttributeInstanceRateDivisor($vertexAttributeInstanceRateDivisor);
        if(!is_null($vertexAttributeInstanceRateZeroDivisor)) $self->setVertexAttributeInstanceRateZeroDivisor($vertexAttributeInstanceRateZeroDivisor);
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
     * uint32_t/
     */
    public function getVertexAttributeInstanceRateDivisor(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->vertexAttributeInstanceRateDivisor;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setVertexAttributeInstanceRateDivisor(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->vertexAttributeInstanceRateDivisor = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getVertexAttributeInstanceRateZeroDivisor(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->vertexAttributeInstanceRateZeroDivisor;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setVertexAttributeInstanceRateZeroDivisor(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->vertexAttributeInstanceRateZeroDivisor = $cValue;
    }
}
