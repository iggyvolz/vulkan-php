<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkFramebufferAttachmentImageInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "usage" => $this->getUsage(),
          "width" => $this->getWidth(),
          "height" => $this->getHeight(),
          "layerCount" => $this->getLayerCount(),
          "viewFormatCount" => $this->getViewFormatCount(),
          "pViewFormats" => $this->getPViewFormats(),
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
        null|array $flags = null,
        null|array $usage = null,
        null|int $width = null,
        null|int $height = null,
        null|int $layerCount = null,
        null|int $viewFormatCount = null,
        null|\iggyvolz\vulkan\util\Pointer $pViewFormats = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkFramebufferAttachmentImageInfo', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($usage)) $self->setUsage($usage);
        if(!is_null($width)) $self->setWidth($width);
        if(!is_null($height)) $self->setHeight($height);
        if(!is_null($layerCount)) $self->setLayerCount($layerCount);
        if(!is_null($viewFormatCount)) $self->setViewFormatCount($viewFormatCount);
        if(!is_null($pViewFormats)) $self->setPViewFormats($pViewFormats);
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
     * VkImageCreateFlags/
     */
    public function getFlags(): array
    {
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkImageCreateFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkImageCreateFlagBits::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * VkImageUsageFlags/
     */
    public function getUsage(): array
    {
        $cValue = $this->cdata->usage;
        $phpValue = \iggyvolz\vulkan\enum\VkImageUsageFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setUsage(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkImageUsageFlagBits::toInt(...$phpValue);
        $this->cdata->usage = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getWidth(): int
    {
        $cValue = $this->cdata->width;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setWidth(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->width = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getHeight(): int
    {
        $cValue = $this->cdata->height;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setHeight(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->height = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getLayerCount(): int
    {
        $cValue = $this->cdata->layerCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setLayerCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->layerCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getViewFormatCount(): int
    {
        $cValue = $this->cdata->viewFormatCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setViewFormatCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->viewFormatCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPViewFormats(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pViewFormats;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPViewFormats(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pViewFormats = $cValue;
    }
}
