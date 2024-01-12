<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineColorBlendAdvancedStateCreateInfoEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "srcPremultiplied" => $this->getSrcPremultiplied(),
          "dstPremultiplied" => $this->getDstPremultiplied(),
          "blendOverlap" => $this->getBlendOverlap(),
        ];
    }

    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \iggyvolz\vulkan\Vulkan $vulkan,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|bool $srcPremultiplied = null,
        null|bool $dstPremultiplied = null,
        null|\iggyvolz\vulkan\enum\VkBlendOverlapEXT $blendOverlap = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineColorBlendAdvancedStateCreateInfoEXT', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($srcPremultiplied)) $self->setSrcPremultiplied($srcPremultiplied);
        if(!is_null($dstPremultiplied)) $self->setDstPremultiplied($dstPremultiplied);
        if(!is_null($blendOverlap)) $self->setBlendOverlap($blendOverlap);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSrcPremultiplied(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->srcPremultiplied;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSrcPremultiplied(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->srcPremultiplied = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDstPremultiplied(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->dstPremultiplied;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDstPremultiplied(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->dstPremultiplied = $cValue;
    }

    /**
     * VkBlendOverlapEXT/
     */
    public function getBlendOverlap(): \iggyvolz\vulkan\enum\VkBlendOverlapEXT
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->blendOverlap;
        $phpValue = \iggyvolz\vulkan\enum\VkBlendOverlapEXT::from($cValue);
        return $phpValue;
    }

    public function setBlendOverlap(\iggyvolz\vulkan\enum\VkBlendOverlapEXT $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->blendOverlap = $cValue;
    }
}
