<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkImageFormatProperties implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "maxExtent" => $this->getMaxExtent(),
          "maxMipLevels" => $this->getMaxMipLevels(),
          "maxArrayLayers" => $this->getMaxArrayLayers(),
          "sampleCounts" => $this->getSampleCounts(),
          "maxResourceSize" => $this->getMaxResourceSize(),
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
        null|VkExtent3D $maxExtent = null,
        null|int $maxMipLevels = null,
        null|int $maxArrayLayers = null,
        null|array $sampleCounts = null,
        null|int $maxResourceSize = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkImageFormatProperties', false));
        if(!is_null($maxExtent)) $self->setMaxExtent($maxExtent);
        if(!is_null($maxMipLevels)) $self->setMaxMipLevels($maxMipLevels);
        if(!is_null($maxArrayLayers)) $self->setMaxArrayLayers($maxArrayLayers);
        if(!is_null($sampleCounts)) $self->setSampleCounts($sampleCounts);
        if(!is_null($maxResourceSize)) $self->setMaxResourceSize($maxResourceSize);
        return $self;
    }

    /**
     * VkExtent3D/
     */
    public function getMaxExtent(): VkExtent3D
    {
        $cValue = $this->cdata->maxExtent;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent3D($cValue, $ffi);
        return $phpValue;
    }

    public function setMaxExtent(VkExtent3D $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->maxExtent = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxMipLevels(): int
    {
        $cValue = $this->cdata->maxMipLevels;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxMipLevels(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxMipLevels = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxArrayLayers(): int
    {
        $cValue = $this->cdata->maxArrayLayers;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxArrayLayers(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxArrayLayers = $cValue;
    }

    /**
     * VkSampleCountFlags/
     */
    public function getSampleCounts(): array
    {
        $cValue = $this->cdata->sampleCounts;
        $phpValue = \iggyvolz\vulkan\enum\VkSampleCountFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setSampleCounts(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkSampleCountFlagBits::toInt(...$phpValue);
        $this->cdata->sampleCounts = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getMaxResourceSize(): int
    {
        $cValue = $this->cdata->maxResourceSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxResourceSize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxResourceSize = $cValue;
    }
}
