<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkColorBlendEquationEXT
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
        null|\iggyvolz\vulkan\enum\VkBlendFactor $srcColorBlendFactor = null,
        null|\iggyvolz\vulkan\enum\VkBlendFactor $dstColorBlendFactor = null,
        null|\iggyvolz\vulkan\enum\VkBlendOp $colorBlendOp = null,
        null|\iggyvolz\vulkan\enum\VkBlendFactor $srcAlphaBlendFactor = null,
        null|\iggyvolz\vulkan\enum\VkBlendFactor $dstAlphaBlendFactor = null,
        null|\iggyvolz\vulkan\enum\VkBlendOp $alphaBlendOp = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkColorBlendEquationEXT', false), $vulkan->ffi);
        if(!is_null($srcColorBlendFactor)) $self->setSrcColorBlendFactor($srcColorBlendFactor);
        if(!is_null($dstColorBlendFactor)) $self->setDstColorBlendFactor($dstColorBlendFactor);
        if(!is_null($colorBlendOp)) $self->setColorBlendOp($colorBlendOp);
        if(!is_null($srcAlphaBlendFactor)) $self->setSrcAlphaBlendFactor($srcAlphaBlendFactor);
        if(!is_null($dstAlphaBlendFactor)) $self->setDstAlphaBlendFactor($dstAlphaBlendFactor);
        if(!is_null($alphaBlendOp)) $self->setAlphaBlendOp($alphaBlendOp);
        return $self;
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
}
