<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoFormatPropertiesKHR
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
        null|\iggyvolz\vulkan\util\OpaquePointer $pNext = null,
        null|\iggyvolz\vulkan\enum\VkFormat $format = null,
        null|VkComponentMapping $componentMapping = null,
        null|array $imageCreateFlags = null,
        null|\iggyvolz\vulkan\enum\VkImageType $imageType = null,
        null|\iggyvolz\vulkan\enum\VkImageTiling $imageTiling = null,
        null|array $imageUsageFlags = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoFormatPropertiesKHR', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($format)) $self->setFormat($format);
        if(!is_null($componentMapping)) $self->setComponentMapping($componentMapping);
        if(!is_null($imageCreateFlags)) $self->setImageCreateFlags($imageCreateFlags);
        if(!is_null($imageType)) $self->setImageType($imageType);
        if(!is_null($imageTiling)) $self->setImageTiling($imageTiling);
        if(!is_null($imageUsageFlags)) $self->setImageUsageFlags($imageUsageFlags);
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
    public function getPNext(): \iggyvolz\vulkan\util\OpaquePointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\OpaquePointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * VkFormat/
     */
    public function getFormat(): \iggyvolz\vulkan\enum\VkFormat
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->format;
        $phpValue = \iggyvolz\vulkan\enum\VkFormat::from($cValue);
        return $phpValue;
    }

    public function setFormat(\iggyvolz\vulkan\enum\VkFormat $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->format = $cValue;
    }

    /**
     * VkComponentMapping/
     */
    public function getComponentMapping(): VkComponentMapping
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->componentMapping;
        $phpValue = new \iggyvolz\vulkan\struct\VkComponentMapping($cValue, $ffi);
        return $phpValue;
    }

    public function setComponentMapping(VkComponentMapping $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->componentMapping = $cValue;
    }

    /**
     * VkImageCreateFlags/
     */
    public function getImageCreateFlags(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->imageCreateFlags;
        $phpValue = \iggyvolz\vulkan\enum\VkImageCreateFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setImageCreateFlags(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkImageCreateFlagBits::toInt(...$phpValue);
        $this->cdata->imageCreateFlags = $cValue;
    }

    /**
     * VkImageType/
     */
    public function getImageType(): \iggyvolz\vulkan\enum\VkImageType
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->imageType;
        $phpValue = \iggyvolz\vulkan\enum\VkImageType::from($cValue);
        return $phpValue;
    }

    public function setImageType(\iggyvolz\vulkan\enum\VkImageType $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->imageType = $cValue;
    }

    /**
     * VkImageTiling/
     */
    public function getImageTiling(): \iggyvolz\vulkan\enum\VkImageTiling
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->imageTiling;
        $phpValue = \iggyvolz\vulkan\enum\VkImageTiling::from($cValue);
        return $phpValue;
    }

    public function setImageTiling(\iggyvolz\vulkan\enum\VkImageTiling $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->imageTiling = $cValue;
    }

    /**
     * VkImageUsageFlags/
     */
    public function getImageUsageFlags(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->imageUsageFlags;
        $phpValue = \iggyvolz\vulkan\enum\VkImageUsageFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setImageUsageFlags(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkImageUsageFlagBits::toInt(...$phpValue);
        $this->cdata->imageUsageFlags = $cValue;
    }
}
