<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSamplerCreateInfo
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
        null|\iggyvolz\vulkan\enum\VkFilter $magFilter = null,
        null|\iggyvolz\vulkan\enum\VkFilter $minFilter = null,
        null|\iggyvolz\vulkan\enum\VkSamplerMipmapMode $mipmapMode = null,
        null|\iggyvolz\vulkan\enum\VkSamplerAddressMode $addressModeU = null,
        null|\iggyvolz\vulkan\enum\VkSamplerAddressMode $addressModeV = null,
        null|\iggyvolz\vulkan\enum\VkSamplerAddressMode $addressModeW = null,
        null|float $mipLodBias = null,
        null|bool $anisotropyEnable = null,
        null|float $maxAnisotropy = null,
        null|bool $compareEnable = null,
        null|\iggyvolz\vulkan\enum\VkCompareOp $compareOp = null,
        null|float $minLod = null,
        null|float $maxLod = null,
        null|\iggyvolz\vulkan\enum\VkBorderColor $borderColor = null,
        null|bool $unnormalizedCoordinates = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSamplerCreateInfo', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($magFilter)) $self->setMagFilter($magFilter);
        if(!is_null($minFilter)) $self->setMinFilter($minFilter);
        if(!is_null($mipmapMode)) $self->setMipmapMode($mipmapMode);
        if(!is_null($addressModeU)) $self->setAddressModeU($addressModeU);
        if(!is_null($addressModeV)) $self->setAddressModeV($addressModeV);
        if(!is_null($addressModeW)) $self->setAddressModeW($addressModeW);
        if(!is_null($mipLodBias)) $self->setMipLodBias($mipLodBias);
        if(!is_null($anisotropyEnable)) $self->setAnisotropyEnable($anisotropyEnable);
        if(!is_null($maxAnisotropy)) $self->setMaxAnisotropy($maxAnisotropy);
        if(!is_null($compareEnable)) $self->setCompareEnable($compareEnable);
        if(!is_null($compareOp)) $self->setCompareOp($compareOp);
        if(!is_null($minLod)) $self->setMinLod($minLod);
        if(!is_null($maxLod)) $self->setMaxLod($maxLod);
        if(!is_null($borderColor)) $self->setBorderColor($borderColor);
        if(!is_null($unnormalizedCoordinates)) $self->setUnnormalizedCoordinates($unnormalizedCoordinates);
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
     * VkSamplerCreateFlags/
     */
    public function getFlags(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkSamplerCreateFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkSamplerCreateFlagBits::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * VkFilter/
     */
    public function getMagFilter(): \iggyvolz\vulkan\enum\VkFilter
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->magFilter;
        $phpValue = \iggyvolz\vulkan\enum\VkFilter::from($cValue);
        return $phpValue;
    }

    public function setMagFilter(\iggyvolz\vulkan\enum\VkFilter $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->magFilter = $cValue;
    }

    /**
     * VkFilter/
     */
    public function getMinFilter(): \iggyvolz\vulkan\enum\VkFilter
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->minFilter;
        $phpValue = \iggyvolz\vulkan\enum\VkFilter::from($cValue);
        return $phpValue;
    }

    public function setMinFilter(\iggyvolz\vulkan\enum\VkFilter $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->minFilter = $cValue;
    }

    /**
     * VkSamplerMipmapMode/
     */
    public function getMipmapMode(): \iggyvolz\vulkan\enum\VkSamplerMipmapMode
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->mipmapMode;
        $phpValue = \iggyvolz\vulkan\enum\VkSamplerMipmapMode::from($cValue);
        return $phpValue;
    }

    public function setMipmapMode(\iggyvolz\vulkan\enum\VkSamplerMipmapMode $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->mipmapMode = $cValue;
    }

    /**
     * VkSamplerAddressMode/
     */
    public function getAddressModeU(): \iggyvolz\vulkan\enum\VkSamplerAddressMode
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->addressModeU;
        $phpValue = \iggyvolz\vulkan\enum\VkSamplerAddressMode::from($cValue);
        return $phpValue;
    }

    public function setAddressModeU(\iggyvolz\vulkan\enum\VkSamplerAddressMode $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->addressModeU = $cValue;
    }

    /**
     * VkSamplerAddressMode/
     */
    public function getAddressModeV(): \iggyvolz\vulkan\enum\VkSamplerAddressMode
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->addressModeV;
        $phpValue = \iggyvolz\vulkan\enum\VkSamplerAddressMode::from($cValue);
        return $phpValue;
    }

    public function setAddressModeV(\iggyvolz\vulkan\enum\VkSamplerAddressMode $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->addressModeV = $cValue;
    }

    /**
     * VkSamplerAddressMode/
     */
    public function getAddressModeW(): \iggyvolz\vulkan\enum\VkSamplerAddressMode
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->addressModeW;
        $phpValue = \iggyvolz\vulkan\enum\VkSamplerAddressMode::from($cValue);
        return $phpValue;
    }

    public function setAddressModeW(\iggyvolz\vulkan\enum\VkSamplerAddressMode $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->addressModeW = $cValue;
    }

    /**
     * float/
     */
    public function getMipLodBias(): float
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->mipLodBias;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMipLodBias(float $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->mipLodBias = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getAnisotropyEnable(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->anisotropyEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setAnisotropyEnable(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->anisotropyEnable = $cValue;
    }

    /**
     * float/
     */
    public function getMaxAnisotropy(): float
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxAnisotropy;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxAnisotropy(float $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxAnisotropy = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getCompareEnable(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->compareEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setCompareEnable(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->compareEnable = $cValue;
    }

    /**
     * VkCompareOp/
     */
    public function getCompareOp(): \iggyvolz\vulkan\enum\VkCompareOp
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->compareOp;
        $phpValue = \iggyvolz\vulkan\enum\VkCompareOp::from($cValue);
        return $phpValue;
    }

    public function setCompareOp(\iggyvolz\vulkan\enum\VkCompareOp $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->compareOp = $cValue;
    }

    /**
     * float/
     */
    public function getMinLod(): float
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->minLod;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinLod(float $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->minLod = $cValue;
    }

    /**
     * float/
     */
    public function getMaxLod(): float
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxLod;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxLod(float $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxLod = $cValue;
    }

    /**
     * VkBorderColor/
     */
    public function getBorderColor(): \iggyvolz\vulkan\enum\VkBorderColor
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->borderColor;
        $phpValue = \iggyvolz\vulkan\enum\VkBorderColor::from($cValue);
        return $phpValue;
    }

    public function setBorderColor(\iggyvolz\vulkan\enum\VkBorderColor $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->borderColor = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getUnnormalizedCoordinates(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->unnormalizedCoordinates;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setUnnormalizedCoordinates(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->unnormalizedCoordinates = $cValue;
    }
}
