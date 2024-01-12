<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDisplayPlaneCapabilitiesKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "supportedAlpha" => $this->getSupportedAlpha(),
          "minSrcPosition" => $this->getMinSrcPosition(),
          "maxSrcPosition" => $this->getMaxSrcPosition(),
          "minSrcExtent" => $this->getMinSrcExtent(),
          "maxSrcExtent" => $this->getMaxSrcExtent(),
          "minDstPosition" => $this->getMinDstPosition(),
          "maxDstPosition" => $this->getMaxDstPosition(),
          "minDstExtent" => $this->getMinDstExtent(),
          "maxDstExtent" => $this->getMaxDstExtent(),
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
        null|array $supportedAlpha = null,
        null|VkOffset2D $minSrcPosition = null,
        null|VkOffset2D $maxSrcPosition = null,
        null|VkExtent2D $minSrcExtent = null,
        null|VkExtent2D $maxSrcExtent = null,
        null|VkOffset2D $minDstPosition = null,
        null|VkOffset2D $maxDstPosition = null,
        null|VkExtent2D $minDstExtent = null,
        null|VkExtent2D $maxDstExtent = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDisplayPlaneCapabilitiesKHR', false), $vulkan);
        if(!is_null($supportedAlpha)) $self->setSupportedAlpha($supportedAlpha);
        if(!is_null($minSrcPosition)) $self->setMinSrcPosition($minSrcPosition);
        if(!is_null($maxSrcPosition)) $self->setMaxSrcPosition($maxSrcPosition);
        if(!is_null($minSrcExtent)) $self->setMinSrcExtent($minSrcExtent);
        if(!is_null($maxSrcExtent)) $self->setMaxSrcExtent($maxSrcExtent);
        if(!is_null($minDstPosition)) $self->setMinDstPosition($minDstPosition);
        if(!is_null($maxDstPosition)) $self->setMaxDstPosition($maxDstPosition);
        if(!is_null($minDstExtent)) $self->setMinDstExtent($minDstExtent);
        if(!is_null($maxDstExtent)) $self->setMaxDstExtent($maxDstExtent);
        return $self;
    }

    /**
     * VkDisplayPlaneAlphaFlagsKHR/
     */
    public function getSupportedAlpha(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->supportedAlpha;
        $phpValue = \iggyvolz\vulkan\enum\VkDisplayPlaneAlphaFlagBitsKHR::fromInt($cValue);
        return $phpValue;
    }

    public function setSupportedAlpha(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkDisplayPlaneAlphaFlagBitsKHR::toInt(...$phpValue);
        $this->cdata->supportedAlpha = $cValue;
    }

    /**
     * VkOffset2D/
     */
    public function getMinSrcPosition(): VkOffset2D
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->minSrcPosition;
        $phpValue = new \iggyvolz\vulkan\struct\VkOffset2D($cValue, $ffi);
        return $phpValue;
    }

    public function setMinSrcPosition(VkOffset2D $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->minSrcPosition = $cValue;
    }

    /**
     * VkOffset2D/
     */
    public function getMaxSrcPosition(): VkOffset2D
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxSrcPosition;
        $phpValue = new \iggyvolz\vulkan\struct\VkOffset2D($cValue, $ffi);
        return $phpValue;
    }

    public function setMaxSrcPosition(VkOffset2D $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->maxSrcPosition = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getMinSrcExtent(): VkExtent2D
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->minSrcExtent;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setMinSrcExtent(VkExtent2D $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->minSrcExtent = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getMaxSrcExtent(): VkExtent2D
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxSrcExtent;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setMaxSrcExtent(VkExtent2D $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->maxSrcExtent = $cValue;
    }

    /**
     * VkOffset2D/
     */
    public function getMinDstPosition(): VkOffset2D
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->minDstPosition;
        $phpValue = new \iggyvolz\vulkan\struct\VkOffset2D($cValue, $ffi);
        return $phpValue;
    }

    public function setMinDstPosition(VkOffset2D $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->minDstPosition = $cValue;
    }

    /**
     * VkOffset2D/
     */
    public function getMaxDstPosition(): VkOffset2D
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxDstPosition;
        $phpValue = new \iggyvolz\vulkan\struct\VkOffset2D($cValue, $ffi);
        return $phpValue;
    }

    public function setMaxDstPosition(VkOffset2D $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->maxDstPosition = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getMinDstExtent(): VkExtent2D
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->minDstExtent;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setMinDstExtent(VkExtent2D $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->minDstExtent = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getMaxDstExtent(): VkExtent2D
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxDstExtent;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setMaxDstExtent(VkExtent2D $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->maxDstExtent = $cValue;
    }
}
