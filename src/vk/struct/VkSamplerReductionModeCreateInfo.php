<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSamplerReductionModeCreateInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "reductionMode" => $this->getReductionMode(),
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
        null|\iggyvolz\vulkan\enum\VkSamplerReductionMode $reductionMode = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSamplerReductionModeCreateInfo', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($reductionMode)) $self->setReductionMode($reductionMode);
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
     * VkSamplerReductionMode/
     */
    public function getReductionMode(): \iggyvolz\vulkan\enum\VkSamplerReductionMode
    {
        $cValue = $this->cdata->reductionMode;
        $phpValue = \iggyvolz\vulkan\enum\VkSamplerReductionMode::from($cValue);
        return $phpValue;
    }

    public function setReductionMode(\iggyvolz\vulkan\enum\VkSamplerReductionMode $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->reductionMode = $cValue;
    }
}
