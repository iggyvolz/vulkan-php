<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkImageCreateInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "imageType" => $this->getImageType(),
          "format" => $this->getFormat(),
          "extent" => $this->getExtent(),
          "mipLevels" => $this->getMipLevels(),
          "arrayLayers" => $this->getArrayLayers(),
          "samples" => $this->getSamples(),
          "tiling" => $this->getTiling(),
          "usage" => $this->getUsage(),
          "sharingMode" => $this->getSharingMode(),
          "queueFamilyIndexCount" => $this->getQueueFamilyIndexCount(),
          "pQueueFamilyIndices" => $this->getPQueueFamilyIndices(),
          "initialLayout" => $this->getInitialLayout(),
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
        null|array $flags = null,
        null|\iggyvolz\vulkan\enum\VkImageType $imageType = null,
        null|\iggyvolz\vulkan\enum\VkFormat $format = null,
        null|VkExtent3D $extent = null,
        null|int $mipLevels = null,
        null|int $arrayLayers = null,
        null|\iggyvolz\vulkan\enum\VkSampleCountFlagBits $samples = null,
        null|\iggyvolz\vulkan\enum\VkImageTiling $tiling = null,
        null|array $usage = null,
        null|\iggyvolz\vulkan\enum\VkSharingMode $sharingMode = null,
        null|int $queueFamilyIndexCount = null,
        null|\iggyvolz\vulkan\util\IntPointer $pQueueFamilyIndices = null,
        null|\iggyvolz\vulkan\enum\VkImageLayout $initialLayout = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkImageCreateInfo', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($imageType)) $self->setImageType($imageType);
        if(!is_null($format)) $self->setFormat($format);
        if(!is_null($extent)) $self->setExtent($extent);
        if(!is_null($mipLevels)) $self->setMipLevels($mipLevels);
        if(!is_null($arrayLayers)) $self->setArrayLayers($arrayLayers);
        if(!is_null($samples)) $self->setSamples($samples);
        if(!is_null($tiling)) $self->setTiling($tiling);
        if(!is_null($usage)) $self->setUsage($usage);
        if(!is_null($sharingMode)) $self->setSharingMode($sharingMode);
        if(!is_null($queueFamilyIndexCount)) $self->setQueueFamilyIndexCount($queueFamilyIndexCount);
        if(!is_null($pQueueFamilyIndices)) $self->setPQueueFamilyIndices($pQueueFamilyIndices);
        if(!is_null($initialLayout)) $self->setInitialLayout($initialLayout);
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
     * VkImageCreateFlags/
     */
    public function getFlags(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkImageCreateFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkImageCreateFlagBits::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * VkImageType/
     */
    public function getImageType(): \iggyvolz\vulkan\enum\VkImageType
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->imageType;
        $phpValue = \iggyvolz\vulkan\enum\VkImageType::from($cValue);
        return $phpValue;
    }

    public function setImageType(\iggyvolz\vulkan\enum\VkImageType $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->imageType = $cValue;
    }

    /**
     * VkFormat/
     */
    public function getFormat(): \iggyvolz\vulkan\enum\VkFormat
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->format;
        $phpValue = \iggyvolz\vulkan\enum\VkFormat::from($cValue);
        return $phpValue;
    }

    public function setFormat(\iggyvolz\vulkan\enum\VkFormat $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->format = $cValue;
    }

    /**
     * VkExtent3D/
     */
    public function getExtent(): VkExtent3D
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->extent;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent3D($cValue, $ffi);
        return $phpValue;
    }

    public function setExtent(VkExtent3D $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->extent = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMipLevels(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->mipLevels;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMipLevels(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->mipLevels = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getArrayLayers(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->arrayLayers;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setArrayLayers(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->arrayLayers = $cValue;
    }

    /**
     * VkSampleCountFlagBits/
     */
    public function getSamples(): \iggyvolz\vulkan\enum\VkSampleCountFlagBits
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->samples;
        $phpValue = \iggyvolz\vulkan\enum\VkSampleCountFlagBits::from($cValue);
        return $phpValue;
    }

    public function setSamples(\iggyvolz\vulkan\enum\VkSampleCountFlagBits $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->samples = $cValue;
    }

    /**
     * VkImageTiling/
     */
    public function getTiling(): \iggyvolz\vulkan\enum\VkImageTiling
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->tiling;
        $phpValue = \iggyvolz\vulkan\enum\VkImageTiling::from($cValue);
        return $phpValue;
    }

    public function setTiling(\iggyvolz\vulkan\enum\VkImageTiling $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->tiling = $cValue;
    }

    /**
     * VkImageUsageFlags/
     */
    public function getUsage(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->usage;
        $phpValue = \iggyvolz\vulkan\enum\VkImageUsageFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setUsage(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkImageUsageFlagBits::toInt(...$phpValue);
        $this->cdata->usage = $cValue;
    }

    /**
     * VkSharingMode/
     */
    public function getSharingMode(): \iggyvolz\vulkan\enum\VkSharingMode
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sharingMode;
        $phpValue = \iggyvolz\vulkan\enum\VkSharingMode::from($cValue);
        return $phpValue;
    }

    public function setSharingMode(\iggyvolz\vulkan\enum\VkSharingMode $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sharingMode = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getQueueFamilyIndexCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->queueFamilyIndexCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setQueueFamilyIndexCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->queueFamilyIndexCount = $cValue;
    }

    /**
     * uint32_t* /
     */
    public function getPQueueFamilyIndices(): \iggyvolz\vulkan\util\IntPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pQueueFamilyIndices;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPQueueFamilyIndices(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pQueueFamilyIndices = $cValue;
    }

    /**
     * VkImageLayout/
     */
    public function getInitialLayout(): \iggyvolz\vulkan\enum\VkImageLayout
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->initialLayout;
        $phpValue = \iggyvolz\vulkan\enum\VkImageLayout::from($cValue);
        return $phpValue;
    }

    public function setInitialLayout(\iggyvolz\vulkan\enum\VkImageLayout $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->initialLayout = $cValue;
    }
}
