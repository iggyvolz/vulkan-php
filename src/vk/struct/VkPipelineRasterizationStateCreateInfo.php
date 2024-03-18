<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineRasterizationStateCreateInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "depthClampEnable" => $this->getDepthClampEnable(),
          "rasterizerDiscardEnable" => $this->getRasterizerDiscardEnable(),
          "polygonMode" => $this->getPolygonMode(),
          "cullMode" => $this->getCullMode(),
          "frontFace" => $this->getFrontFace(),
          "depthBiasEnable" => $this->getDepthBiasEnable(),
          "depthBiasConstantFactor" => $this->getDepthBiasConstantFactor(),
          "depthBiasClamp" => $this->getDepthBiasClamp(),
          "depthBiasSlopeFactor" => $this->getDepthBiasSlopeFactor(),
          "lineWidth" => $this->getLineWidth(),
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
        null|bool $depthClampEnable = null,
        null|bool $rasterizerDiscardEnable = null,
        null|\iggyvolz\vulkan\enum\VkPolygonMode $polygonMode = null,
        null|array $cullMode = null,
        null|\iggyvolz\vulkan\enum\VkFrontFace $frontFace = null,
        null|bool $depthBiasEnable = null,
        null|float $depthBiasConstantFactor = null,
        null|float $depthBiasClamp = null,
        null|float $depthBiasSlopeFactor = null,
        null|float $lineWidth = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineRasterizationStateCreateInfo', false));
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
     * VkPipelineRasterizationStateCreateFlags/
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
     * uint32_t/
     */
    public function getDepthClampEnable(): bool
    {
        $cValue = $this->cdata->depthClampEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDepthClampEnable(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->depthClampEnable = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getRasterizerDiscardEnable(): bool
    {
        $cValue = $this->cdata->rasterizerDiscardEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setRasterizerDiscardEnable(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->rasterizerDiscardEnable = $cValue;
    }

    /**
     * VkPolygonMode/
     */
    public function getPolygonMode(): \iggyvolz\vulkan\enum\VkPolygonMode
    {
        $cValue = $this->cdata->polygonMode;
        $phpValue = \iggyvolz\vulkan\enum\VkPolygonMode::from($cValue);
        return $phpValue;
    }

    public function setPolygonMode(\iggyvolz\vulkan\enum\VkPolygonMode $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->polygonMode = $cValue;
    }

    /**
     * VkCullModeFlags/
     */
    public function getCullMode(): array
    {
        $cValue = $this->cdata->cullMode;
        $phpValue = \iggyvolz\vulkan\enum\VkCullModeFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setCullMode(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkCullModeFlagBits::toInt(...$phpValue);
        $this->cdata->cullMode = $cValue;
    }

    /**
     * VkFrontFace/
     */
    public function getFrontFace(): \iggyvolz\vulkan\enum\VkFrontFace
    {
        $cValue = $this->cdata->frontFace;
        $phpValue = \iggyvolz\vulkan\enum\VkFrontFace::from($cValue);
        return $phpValue;
    }

    public function setFrontFace(\iggyvolz\vulkan\enum\VkFrontFace $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->frontFace = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDepthBiasEnable(): bool
    {
        $cValue = $this->cdata->depthBiasEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDepthBiasEnable(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->depthBiasEnable = $cValue;
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

    /**
     * float/
     */
    public function getLineWidth(): float
    {
        $cValue = $this->cdata->lineWidth;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setLineWidth(float $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->lineWidth = $cValue;
    }
}
