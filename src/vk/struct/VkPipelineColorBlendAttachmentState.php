<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineColorBlendAttachmentState
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
        null|bool $blendEnable = null,
        null|\iggyvolz\vulkan\enum\VkBlendFactor $srcColorBlendFactor = null,
        null|\iggyvolz\vulkan\enum\VkBlendFactor $dstColorBlendFactor = null,
        null|\iggyvolz\vulkan\enum\VkBlendOp $colorBlendOp = null,
        null|\iggyvolz\vulkan\enum\VkBlendFactor $srcAlphaBlendFactor = null,
        null|\iggyvolz\vulkan\enum\VkBlendFactor $dstAlphaBlendFactor = null,
        null|\iggyvolz\vulkan\enum\VkBlendOp $alphaBlendOp = null,
        mixed $colorWriteMask = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineColorBlendAttachmentState', false), $vulkan->ffi);
        if(!is_null($blendEnable)) $self->setBlendEnable($blendEnable);
        if(!is_null($srcColorBlendFactor)) $self->setSrcColorBlendFactor($srcColorBlendFactor);
        if(!is_null($dstColorBlendFactor)) $self->setDstColorBlendFactor($dstColorBlendFactor);
        if(!is_null($colorBlendOp)) $self->setColorBlendOp($colorBlendOp);
        if(!is_null($srcAlphaBlendFactor)) $self->setSrcAlphaBlendFactor($srcAlphaBlendFactor);
        if(!is_null($dstAlphaBlendFactor)) $self->setDstAlphaBlendFactor($dstAlphaBlendFactor);
        if(!is_null($alphaBlendOp)) $self->setAlphaBlendOp($alphaBlendOp);
        if(!is_null($colorWriteMask)) $self->setColorWriteMask($colorWriteMask);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getBlendEnable(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->blendEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setBlendEnable(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->blendEnable = $cValue;
    }

    /**
     * VkBlendFactor/
     */
    public function getSrcColorBlendFactor(): \iggyvolz\vulkan\enum\VkBlendFactor
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->srcColorBlendFactor;
        $phpValue = \iggyvolz\vulkan\enum\VkBlendFactor::from($cValue);
        return $phpValue;
    }

    public function setSrcColorBlendFactor(\iggyvolz\vulkan\enum\VkBlendFactor $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->srcColorBlendFactor = $cValue;
    }

    /**
     * VkBlendFactor/
     */
    public function getDstColorBlendFactor(): \iggyvolz\vulkan\enum\VkBlendFactor
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->dstColorBlendFactor;
        $phpValue = \iggyvolz\vulkan\enum\VkBlendFactor::from($cValue);
        return $phpValue;
    }

    public function setDstColorBlendFactor(\iggyvolz\vulkan\enum\VkBlendFactor $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->dstColorBlendFactor = $cValue;
    }

    /**
     * VkBlendOp/
     */
    public function getColorBlendOp(): \iggyvolz\vulkan\enum\VkBlendOp
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->colorBlendOp;
        $phpValue = \iggyvolz\vulkan\enum\VkBlendOp::from($cValue);
        return $phpValue;
    }

    public function setColorBlendOp(\iggyvolz\vulkan\enum\VkBlendOp $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->colorBlendOp = $cValue;
    }

    /**
     * VkBlendFactor/
     */
    public function getSrcAlphaBlendFactor(): \iggyvolz\vulkan\enum\VkBlendFactor
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->srcAlphaBlendFactor;
        $phpValue = \iggyvolz\vulkan\enum\VkBlendFactor::from($cValue);
        return $phpValue;
    }

    public function setSrcAlphaBlendFactor(\iggyvolz\vulkan\enum\VkBlendFactor $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->srcAlphaBlendFactor = $cValue;
    }

    /**
     * VkBlendFactor/
     */
    public function getDstAlphaBlendFactor(): \iggyvolz\vulkan\enum\VkBlendFactor
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->dstAlphaBlendFactor;
        $phpValue = \iggyvolz\vulkan\enum\VkBlendFactor::from($cValue);
        return $phpValue;
    }

    public function setDstAlphaBlendFactor(\iggyvolz\vulkan\enum\VkBlendFactor $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->dstAlphaBlendFactor = $cValue;
    }

    /**
     * VkBlendOp/
     */
    public function getAlphaBlendOp(): \iggyvolz\vulkan\enum\VkBlendOp
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->alphaBlendOp;
        $phpValue = \iggyvolz\vulkan\enum\VkBlendOp::from($cValue);
        return $phpValue;
    }

    public function setAlphaBlendOp(\iggyvolz\vulkan\enum\VkBlendOp $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->alphaBlendOp = $cValue;
    }

    /**
     * void* /
     */
    public function getColorWriteMask(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->colorWriteMask;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setColorWriteMask(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->colorWriteMask = $cValue;
    }
}
