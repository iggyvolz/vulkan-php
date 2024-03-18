<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceComputeShaderDerivativesFeaturesNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "computeDerivativeGroupQuads" => $this->getComputeDerivativeGroupQuads(),
          "computeDerivativeGroupLinear" => $this->getComputeDerivativeGroupLinear(),
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
        null|bool $computeDerivativeGroupQuads = null,
        null|bool $computeDerivativeGroupLinear = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceComputeShaderDerivativesFeaturesNV', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($computeDerivativeGroupQuads)) $self->setComputeDerivativeGroupQuads($computeDerivativeGroupQuads);
        if(!is_null($computeDerivativeGroupLinear)) $self->setComputeDerivativeGroupLinear($computeDerivativeGroupLinear);
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
    public function getComputeDerivativeGroupQuads(): bool
    {
        $cValue = $this->cdata->computeDerivativeGroupQuads;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setComputeDerivativeGroupQuads(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->computeDerivativeGroupQuads = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getComputeDerivativeGroupLinear(): bool
    {
        $cValue = $this->cdata->computeDerivativeGroupLinear;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setComputeDerivativeGroupLinear(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->computeDerivativeGroupLinear = $cValue;
    }
}
