<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkExportMetalTextureInfoEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "image" => $this->getImage(),
          "imageView" => $this->getImageView(),
          "bufferView" => $this->getBufferView(),
          "plane" => $this->getPlane(),
          "mtlTexture" => $this->getMtlTexture(),
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
        null|VkImage $image = null,
        null|VkImageView $imageView = null,
        null|VkBufferView $bufferView = null,
        null|\iggyvolz\vulkan\enum\VkImageAspectFlagBits $plane = null,
        mixed $mtlTexture = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkExportMetalTextureInfoEXT', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($image)) $self->setImage($image);
        if(!is_null($imageView)) $self->setImageView($imageView);
        if(!is_null($bufferView)) $self->setBufferView($bufferView);
        if(!is_null($plane)) $self->setPlane($plane);
        if(!is_null($mtlTexture)) $self->setMtlTexture($mtlTexture);
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
     * VkImage/
     */
    public function getImage(): VkImage
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->image;
        $phpValue = new \iggyvolz\vulkan\struct\VkImage($cValue, $ffi);
        return $phpValue;
    }

    public function setImage(VkImage $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->image = $cValue;
    }

    /**
     * VkImageView/
     */
    public function getImageView(): VkImageView
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->imageView;
        $phpValue = new \iggyvolz\vulkan\struct\VkImageView($cValue, $ffi);
        return $phpValue;
    }

    public function setImageView(VkImageView $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->imageView = $cValue;
    }

    /**
     * VkBufferView/
     */
    public function getBufferView(): VkBufferView
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->bufferView;
        $phpValue = new \iggyvolz\vulkan\struct\VkBufferView($cValue, $ffi);
        return $phpValue;
    }

    public function setBufferView(VkBufferView $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->bufferView = $cValue;
    }

    /**
     * VkImageAspectFlagBits/
     */
    public function getPlane(): \iggyvolz\vulkan\enum\VkImageAspectFlagBits
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->plane;
        $phpValue = \iggyvolz\vulkan\enum\VkImageAspectFlagBits::from($cValue);
        return $phpValue;
    }

    public function setPlane(\iggyvolz\vulkan\enum\VkImageAspectFlagBits $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->plane = $cValue;
    }

    /**
     * void* /
     */
    public function getMtlTexture(): mixed
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->mtlTexture;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setMtlTexture(mixed $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->mtlTexture = $cValue;
    }
}
