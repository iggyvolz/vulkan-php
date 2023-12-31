<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceImageProcessingFeaturesQCOM
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
        null|bool $textureSampleWeighted = null,
        null|bool $textureBoxFilter = null,
        null|bool $textureBlockMatch = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceImageProcessingFeaturesQCOM', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($textureSampleWeighted)) $self->setTextureSampleWeighted($textureSampleWeighted);
        if(!is_null($textureBoxFilter)) $self->setTextureBoxFilter($textureBoxFilter);
        if(!is_null($textureBlockMatch)) $self->setTextureBlockMatch($textureBlockMatch);
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
     * uint32_t/
     */
    public function getTextureSampleWeighted(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->textureSampleWeighted;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setTextureSampleWeighted(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->textureSampleWeighted = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getTextureBoxFilter(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->textureBoxFilter;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setTextureBoxFilter(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->textureBoxFilter = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getTextureBlockMatch(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->textureBlockMatch;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setTextureBlockMatch(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->textureBlockMatch = $cValue;
    }
}
