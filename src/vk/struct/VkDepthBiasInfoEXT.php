<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDepthBiasInfoEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "depthBiasConstantFactor" => $this->getDepthBiasConstantFactor(),
          "depthBiasClamp" => $this->getDepthBiasClamp(),
          "depthBiasSlopeFactor" => $this->getDepthBiasSlopeFactor(),
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
        null|float $depthBiasConstantFactor = null,
        null|float $depthBiasClamp = null,
        null|float $depthBiasSlopeFactor = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDepthBiasInfoEXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($depthBiasConstantFactor)) $self->setDepthBiasConstantFactor($depthBiasConstantFactor);
        if(!is_null($depthBiasClamp)) $self->setDepthBiasClamp($depthBiasClamp);
        if(!is_null($depthBiasSlopeFactor)) $self->setDepthBiasSlopeFactor($depthBiasSlopeFactor);
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
     * float/
     */
    public function getDepthBiasConstantFactor(): float
    {
        $cValue = $this->cdata->depthBiasConstantFactor;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDepthBiasConstantFactor(float $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->depthBiasConstantFactor = $cValue;
    }

    /**
     * float/
     */
    public function getDepthBiasClamp(): float
    {
        $cValue = $this->cdata->depthBiasClamp;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDepthBiasClamp(float $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->depthBiasClamp = $cValue;
    }

    /**
     * float/
     */
    public function getDepthBiasSlopeFactor(): float
    {
        $cValue = $this->cdata->depthBiasSlopeFactor;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDepthBiasSlopeFactor(float $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->depthBiasSlopeFactor = $cValue;
    }
}
