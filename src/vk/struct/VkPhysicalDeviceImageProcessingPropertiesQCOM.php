<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceImageProcessingPropertiesQCOM implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "maxWeightFilterPhases" => $this->getMaxWeightFilterPhases(),
          "maxWeightFilterDimension" => $this->getMaxWeightFilterDimension(),
          "maxBlockMatchRegion" => $this->getMaxBlockMatchRegion(),
          "maxBoxFilterBlockSize" => $this->getMaxBoxFilterBlockSize(),
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
        null|int $maxWeightFilterPhases = null,
        null|VkExtent2D $maxWeightFilterDimension = null,
        null|VkExtent2D $maxBlockMatchRegion = null,
        null|VkExtent2D $maxBoxFilterBlockSize = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceImageProcessingPropertiesQCOM', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($maxWeightFilterPhases)) $self->setMaxWeightFilterPhases($maxWeightFilterPhases);
        if(!is_null($maxWeightFilterDimension)) $self->setMaxWeightFilterDimension($maxWeightFilterDimension);
        if(!is_null($maxBlockMatchRegion)) $self->setMaxBlockMatchRegion($maxBlockMatchRegion);
        if(!is_null($maxBoxFilterBlockSize)) $self->setMaxBoxFilterBlockSize($maxBoxFilterBlockSize);
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
     * uint32_t/
     */
    public function getMaxWeightFilterPhases(): int
    {
        $cValue = $this->cdata->maxWeightFilterPhases;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxWeightFilterPhases(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxWeightFilterPhases = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getMaxWeightFilterDimension(): VkExtent2D
    {
        $cValue = $this->cdata->maxWeightFilterDimension;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setMaxWeightFilterDimension(VkExtent2D $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->maxWeightFilterDimension = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getMaxBlockMatchRegion(): VkExtent2D
    {
        $cValue = $this->cdata->maxBlockMatchRegion;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setMaxBlockMatchRegion(VkExtent2D $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->maxBlockMatchRegion = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getMaxBoxFilterBlockSize(): VkExtent2D
    {
        $cValue = $this->cdata->maxBoxFilterBlockSize;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setMaxBoxFilterBlockSize(VkExtent2D $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->maxBoxFilterBlockSize = $cValue;
    }
}
