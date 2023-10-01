<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineRasterizationStateCreateInfo
{
    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \FFI $ffi,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\OpaquePointer $pNext = null,
        mixed $flags = null,
        null|bool $depthClampEnable = null,
        null|bool $rasterizerDiscardEnable = null,
        null|\iggyvolz\vulkan\enum\VkPolygonMode $polygonMode = null,
        mixed $cullMode = null,
        null|\iggyvolz\vulkan\enum\VkFrontFace $frontFace = null,
        null|bool $depthBiasEnable = null,
        null|float $depthBiasConstantFactor = null,
        null|float $depthBiasClamp = null,
        null|float $depthBiasSlopeFactor = null,
        null|float $lineWidth = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineRasterizationStateCreateInfo', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($depthClampEnable)) $self->setDepthClampEnable($depthClampEnable);
        if(!is_null($rasterizerDiscardEnable)) $self->setRasterizerDiscardEnable($rasterizerDiscardEnable);
        if(!is_null($polygonMode)) $self->setPolygonMode($polygonMode);
        if(!is_null($cullMode)) $self->setCullMode($cullMode);
        if(!is_null($frontFace)) $self->setFrontFace($frontFace);
        if(!is_null($depthBiasEnable)) $self->setDepthBiasEnable($depthBiasEnable);
        if(!is_null($depthBiasConstantFactor)) $self->setDepthBiasConstantFactor($depthBiasConstantFactor);
        if(!is_null($depthBiasClamp)) $self->setDepthBiasClamp($depthBiasClamp);
        if(!is_null($depthBiasSlopeFactor)) $self->setDepthBiasSlopeFactor($depthBiasSlopeFactor);
        if(!is_null($lineWidth)) $self->setLineWidth($lineWidth);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\OpaquePointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\OpaquePointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * void* /
     */
    public function getFlags(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->flags;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setFlags(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->flags = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDepthClampEnable(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->depthClampEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDepthClampEnable(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->depthClampEnable = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getRasterizerDiscardEnable(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->rasterizerDiscardEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setRasterizerDiscardEnable(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->rasterizerDiscardEnable = $cValue;
    }

    /**
     * VkPolygonMode/
     */
    public function getPolygonMode(): \iggyvolz\vulkan\enum\VkPolygonMode
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->polygonMode;
        $phpValue = \iggyvolz\vulkan\enum\VkPolygonMode::from($cValue);
        return $phpValue;
    }

    public function setPolygonMode(\iggyvolz\vulkan\enum\VkPolygonMode $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->polygonMode = $cValue;
    }

    /**
     * void* /
     */
    public function getCullMode(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->cullMode;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setCullMode(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->cullMode = $cValue;
    }

    /**
     * VkFrontFace/
     */
    public function getFrontFace(): \iggyvolz\vulkan\enum\VkFrontFace
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->frontFace;
        $phpValue = \iggyvolz\vulkan\enum\VkFrontFace::from($cValue);
        return $phpValue;
    }

    public function setFrontFace(\iggyvolz\vulkan\enum\VkFrontFace $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->frontFace = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDepthBiasEnable(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->depthBiasEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDepthBiasEnable(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->depthBiasEnable = $cValue;
    }

    /**
     * float/
     */
    public function getDepthBiasConstantFactor(): float
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->depthBiasConstantFactor;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDepthBiasConstantFactor(float $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->depthBiasConstantFactor = $cValue;
    }

    /**
     * float/
     */
    public function getDepthBiasClamp(): float
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->depthBiasClamp;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDepthBiasClamp(float $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->depthBiasClamp = $cValue;
    }

    /**
     * float/
     */
    public function getDepthBiasSlopeFactor(): float
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->depthBiasSlopeFactor;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDepthBiasSlopeFactor(float $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->depthBiasSlopeFactor = $cValue;
    }

    /**
     * float/
     */
    public function getLineWidth(): float
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->lineWidth;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setLineWidth(float $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->lineWidth = $cValue;
    }
}
