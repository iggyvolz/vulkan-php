<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkFormatProperties3 implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "linearTilingFeatures" => $this->getLinearTilingFeatures(),
          "optimalTilingFeatures" => $this->getOptimalTilingFeatures(),
          "bufferFeatures" => $this->getBufferFeatures(),
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
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|array $linearTilingFeatures = null,
        null|array $optimalTilingFeatures = null,
        null|array $bufferFeatures = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkFormatProperties3', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($linearTilingFeatures)) $self->setLinearTilingFeatures($linearTilingFeatures);
        if(!is_null($optimalTilingFeatures)) $self->setOptimalTilingFeatures($optimalTilingFeatures);
        if(!is_null($bufferFeatures)) $self->setBufferFeatures($bufferFeatures);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * VkFormatFeatureFlags2/
     */
    public function getLinearTilingFeatures(): array
    {
        $cValue = $this->cdata->linearTilingFeatures;
        $phpValue = \iggyvolz\vulkan\enum\VkFormatFeatureFlagBits2::fromInt($cValue);
        return $phpValue;
    }

    public function setLinearTilingFeatures(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkFormatFeatureFlagBits2::toInt(...$phpValue);
        $this->cdata->linearTilingFeatures = $cValue;
    }

    /**
     * VkFormatFeatureFlags2/
     */
    public function getOptimalTilingFeatures(): array
    {
        $cValue = $this->cdata->optimalTilingFeatures;
        $phpValue = \iggyvolz\vulkan\enum\VkFormatFeatureFlagBits2::fromInt($cValue);
        return $phpValue;
    }

    public function setOptimalTilingFeatures(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkFormatFeatureFlagBits2::toInt(...$phpValue);
        $this->cdata->optimalTilingFeatures = $cValue;
    }

    /**
     * VkFormatFeatureFlags2/
     */
    public function getBufferFeatures(): array
    {
        $cValue = $this->cdata->bufferFeatures;
        $phpValue = \iggyvolz\vulkan\enum\VkFormatFeatureFlagBits2::fromInt($cValue);
        return $phpValue;
    }

    public function setBufferFeatures(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkFormatFeatureFlagBits2::toInt(...$phpValue);
        $this->cdata->bufferFeatures = $cValue;
    }
}
