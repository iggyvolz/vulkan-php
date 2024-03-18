<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkAccelerationStructureCaptureDescriptorDataInfoEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "accelerationStructure" => $this->getAccelerationStructure(),
          "accelerationStructureNV" => $this->getAccelerationStructureNV(),
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
        null|VkAccelerationStructureKHR $accelerationStructure = null,
        null|VkAccelerationStructureNV $accelerationStructureNV = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkAccelerationStructureCaptureDescriptorDataInfoEXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($accelerationStructure)) $self->setAccelerationStructure($accelerationStructure);
        if(!is_null($accelerationStructureNV)) $self->setAccelerationStructureNV($accelerationStructureNV);
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
     * VkAccelerationStructureKHR/
     */
    public function getAccelerationStructure(): VkAccelerationStructureKHR
    {
        $cValue = $this->cdata->accelerationStructure;
        $phpValue = new \iggyvolz\vulkan\struct\VkAccelerationStructureKHR($cValue, $ffi);
        return $phpValue;
    }

    public function setAccelerationStructure(VkAccelerationStructureKHR $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->accelerationStructure = $cValue;
    }

    /**
     * VkAccelerationStructureNV/
     */
    public function getAccelerationStructureNV(): VkAccelerationStructureNV
    {
        $cValue = $this->cdata->accelerationStructureNV;
        $phpValue = new \iggyvolz\vulkan\struct\VkAccelerationStructureNV($cValue, $ffi);
        return $phpValue;
    }

    public function setAccelerationStructureNV(VkAccelerationStructureNV $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->accelerationStructureNV = $cValue;
    }
}
