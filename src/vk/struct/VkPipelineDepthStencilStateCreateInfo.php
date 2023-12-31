<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineDepthStencilStateCreateInfo
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
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|array $flags = null,
        null|bool $depthTestEnable = null,
        null|bool $depthWriteEnable = null,
        null|\iggyvolz\vulkan\enum\VkCompareOp $depthCompareOp = null,
        null|bool $depthBoundsTestEnable = null,
        null|bool $stencilTestEnable = null,
        null|VkStencilOpState $front = null,
        null|VkStencilOpState $back = null,
        null|float $minDepthBounds = null,
        null|float $maxDepthBounds = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineDepthStencilStateCreateInfo', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($depthTestEnable)) $self->setDepthTestEnable($depthTestEnable);
        if(!is_null($depthWriteEnable)) $self->setDepthWriteEnable($depthWriteEnable);
        if(!is_null($depthCompareOp)) $self->setDepthCompareOp($depthCompareOp);
        if(!is_null($depthBoundsTestEnable)) $self->setDepthBoundsTestEnable($depthBoundsTestEnable);
        if(!is_null($stencilTestEnable)) $self->setStencilTestEnable($stencilTestEnable);
        if(!is_null($front)) $self->setFront($front);
        if(!is_null($back)) $self->setBack($back);
        if(!is_null($minDepthBounds)) $self->setMinDepthBounds($minDepthBounds);
        if(!is_null($maxDepthBounds)) $self->setMaxDepthBounds($maxDepthBounds);
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
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * VkPipelineDepthStencilStateCreateFlags/
     */
    public function getFlags(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineDepthStencilStateCreateFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkPipelineDepthStencilStateCreateFlagBits::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDepthTestEnable(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->depthTestEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDepthTestEnable(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->depthTestEnable = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDepthWriteEnable(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->depthWriteEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDepthWriteEnable(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->depthWriteEnable = $cValue;
    }

    /**
     * VkCompareOp/
     */
    public function getDepthCompareOp(): \iggyvolz\vulkan\enum\VkCompareOp
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->depthCompareOp;
        $phpValue = \iggyvolz\vulkan\enum\VkCompareOp::from($cValue);
        return $phpValue;
    }

    public function setDepthCompareOp(\iggyvolz\vulkan\enum\VkCompareOp $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->depthCompareOp = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDepthBoundsTestEnable(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->depthBoundsTestEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDepthBoundsTestEnable(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->depthBoundsTestEnable = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStencilTestEnable(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->stencilTestEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setStencilTestEnable(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->stencilTestEnable = $cValue;
    }

    /**
     * VkStencilOpState/
     */
    public function getFront(): VkStencilOpState
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->front;
        $phpValue = new \iggyvolz\vulkan\struct\VkStencilOpState($cValue, $ffi);
        return $phpValue;
    }

    public function setFront(VkStencilOpState $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->front = $cValue;
    }

    /**
     * VkStencilOpState/
     */
    public function getBack(): VkStencilOpState
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->back;
        $phpValue = new \iggyvolz\vulkan\struct\VkStencilOpState($cValue, $ffi);
        return $phpValue;
    }

    public function setBack(VkStencilOpState $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->back = $cValue;
    }

    /**
     * float/
     */
    public function getMinDepthBounds(): float
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->minDepthBounds;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinDepthBounds(float $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->minDepthBounds = $cValue;
    }

    /**
     * float/
     */
    public function getMaxDepthBounds(): float
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxDepthBounds;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDepthBounds(float $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDepthBounds = $cValue;
    }
}
