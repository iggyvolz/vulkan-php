<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkColorBlendAdvancedEXT
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
        null|\iggyvolz\vulkan\enum\VkBlendOp $advancedBlendOp = null,
        null|bool $srcPremultiplied = null,
        null|bool $dstPremultiplied = null,
        null|\iggyvolz\vulkan\enum\VkBlendOverlapEXT $blendOverlap = null,
        null|bool $clampResults = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkColorBlendAdvancedEXT', false), $vulkan->ffi);
        if(!is_null($advancedBlendOp)) $self->setAdvancedBlendOp($advancedBlendOp);
        if(!is_null($srcPremultiplied)) $self->setSrcPremultiplied($srcPremultiplied);
        if(!is_null($dstPremultiplied)) $self->setDstPremultiplied($dstPremultiplied);
        if(!is_null($blendOverlap)) $self->setBlendOverlap($blendOverlap);
        if(!is_null($clampResults)) $self->setClampResults($clampResults);
        return $self;
    }

    /**
     * VkBlendOp/
     */
    public function getAdvancedBlendOp(): \iggyvolz\vulkan\enum\VkBlendOp
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->advancedBlendOp;
        $phpValue = \iggyvolz\vulkan\enum\VkBlendOp::from($cValue);
        return $phpValue;
    }

    public function setAdvancedBlendOp(\iggyvolz\vulkan\enum\VkBlendOp $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->advancedBlendOp = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSrcPremultiplied(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->srcPremultiplied;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSrcPremultiplied(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->srcPremultiplied = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDstPremultiplied(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->dstPremultiplied;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDstPremultiplied(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->dstPremultiplied = $cValue;
    }

    /**
     * VkBlendOverlapEXT/
     */
    public function getBlendOverlap(): \iggyvolz\vulkan\enum\VkBlendOverlapEXT
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->blendOverlap;
        $phpValue = \iggyvolz\vulkan\enum\VkBlendOverlapEXT::from($cValue);
        return $phpValue;
    }

    public function setBlendOverlap(\iggyvolz\vulkan\enum\VkBlendOverlapEXT $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->blendOverlap = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getClampResults(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->clampResults;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setClampResults(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->clampResults = $cValue;
    }
}
