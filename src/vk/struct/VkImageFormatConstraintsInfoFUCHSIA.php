<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkImageFormatConstraintsInfoFUCHSIA implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "imageCreateInfo" => $this->getImageCreateInfo(),
          "requiredFormatFeatures" => $this->getRequiredFormatFeatures(),
          "flags" => $this->getFlags(),
          "sysmemPixelFormat" => $this->getSysmemPixelFormat(),
          "colorSpaceCount" => $this->getColorSpaceCount(),
          "pColorSpaces" => $this->getPColorSpaces(),
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
        null|VkImageCreateInfo $imageCreateInfo = null,
        null|array $requiredFormatFeatures = null,
        null|array $flags = null,
        null|int $sysmemPixelFormat = null,
        null|int $colorSpaceCount = null,
        null|\iggyvolz\vulkan\util\Pointer $pColorSpaces = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkImageFormatConstraintsInfoFUCHSIA', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($imageCreateInfo)) $self->setImageCreateInfo($imageCreateInfo);
        if(!is_null($requiredFormatFeatures)) $self->setRequiredFormatFeatures($requiredFormatFeatures);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($sysmemPixelFormat)) $self->setSysmemPixelFormat($sysmemPixelFormat);
        if(!is_null($colorSpaceCount)) $self->setColorSpaceCount($colorSpaceCount);
        if(!is_null($pColorSpaces)) $self->setPColorSpaces($pColorSpaces);
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
     * VkImageCreateInfo/
     */
    public function getImageCreateInfo(): VkImageCreateInfo
    {
        $cValue = $this->cdata->imageCreateInfo;
        $phpValue = new \iggyvolz\vulkan\struct\VkImageCreateInfo($cValue, $ffi);
        return $phpValue;
    }

    public function setImageCreateInfo(VkImageCreateInfo $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->imageCreateInfo = $cValue;
    }

    /**
     * VkFormatFeatureFlags/
     */
    public function getRequiredFormatFeatures(): array
    {
        $cValue = $this->cdata->requiredFormatFeatures;
        $phpValue = \iggyvolz\vulkan\enum\VkFormatFeatureFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setRequiredFormatFeatures(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkFormatFeatureFlagBits::toInt(...$phpValue);
        $this->cdata->requiredFormatFeatures = $cValue;
    }

    /**
     * VkImageFormatConstraintsFlagsFUCHSIA/
     */
    public function getFlags(): array
    {
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkImageFormatConstraintsFlagBitsFUCHSIA::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkImageFormatConstraintsFlagBitsFUCHSIA::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getSysmemPixelFormat(): int
    {
        $cValue = $this->cdata->sysmemPixelFormat;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSysmemPixelFormat(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->sysmemPixelFormat = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getColorSpaceCount(): int
    {
        $cValue = $this->cdata->colorSpaceCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setColorSpaceCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->colorSpaceCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPColorSpaces(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pColorSpaces;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPColorSpaces(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pColorSpaces = $cValue;
    }
}
