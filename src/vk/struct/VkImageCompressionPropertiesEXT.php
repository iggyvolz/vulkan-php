<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkImageCompressionPropertiesEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "imageCompressionFlags" => $this->getImageCompressionFlags(),
          "imageCompressionFixedRateFlags" => $this->getImageCompressionFixedRateFlags(),
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
        null|array $imageCompressionFlags = null,
        null|array $imageCompressionFixedRateFlags = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkImageCompressionPropertiesEXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($imageCompressionFlags)) $self->setImageCompressionFlags($imageCompressionFlags);
        if(!is_null($imageCompressionFixedRateFlags)) $self->setImageCompressionFixedRateFlags($imageCompressionFixedRateFlags);
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
     * VkImageCompressionFlagsEXT/
     */
    public function getImageCompressionFlags(): array
    {
        $cValue = $this->cdata->imageCompressionFlags;
        $phpValue = \iggyvolz\vulkan\enum\VkImageCompressionFlagBitsEXT::fromInt($cValue);
        return $phpValue;
    }

    public function setImageCompressionFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkImageCompressionFlagBitsEXT::toInt(...$phpValue);
        $this->cdata->imageCompressionFlags = $cValue;
    }

    /**
     * VkImageCompressionFixedRateFlagsEXT/
     */
    public function getImageCompressionFixedRateFlags(): array
    {
        $cValue = $this->cdata->imageCompressionFixedRateFlags;
        $phpValue = \iggyvolz\vulkan\enum\VkImageCompressionFixedRateFlagBitsEXT::fromInt($cValue);
        return $phpValue;
    }

    public function setImageCompressionFixedRateFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkImageCompressionFixedRateFlagBitsEXT::toInt(...$phpValue);
        $this->cdata->imageCompressionFixedRateFlags = $cValue;
    }
}
