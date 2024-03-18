<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoPictureResourceInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "codedOffset" => $this->getCodedOffset(),
          "codedExtent" => $this->getCodedExtent(),
          "baseArrayLayer" => $this->getBaseArrayLayer(),
          "imageViewBinding" => $this->getImageViewBinding(),
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
        null|VkOffset2D $codedOffset = null,
        null|VkExtent2D $codedExtent = null,
        null|int $baseArrayLayer = null,
        null|VkImageView $imageViewBinding = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoPictureResourceInfoKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($codedOffset)) $self->setCodedOffset($codedOffset);
        if(!is_null($codedExtent)) $self->setCodedExtent($codedExtent);
        if(!is_null($baseArrayLayer)) $self->setBaseArrayLayer($baseArrayLayer);
        if(!is_null($imageViewBinding)) $self->setImageViewBinding($imageViewBinding);
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
     * VkOffset2D/
     */
    public function getCodedOffset(): VkOffset2D
    {
        $cValue = $this->cdata->codedOffset;
        $phpValue = new \iggyvolz\vulkan\struct\VkOffset2D($cValue, $ffi);
        return $phpValue;
    }

    public function setCodedOffset(VkOffset2D $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->codedOffset = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getCodedExtent(): VkExtent2D
    {
        $cValue = $this->cdata->codedExtent;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setCodedExtent(VkExtent2D $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->codedExtent = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBaseArrayLayer(): int
    {
        $cValue = $this->cdata->baseArrayLayer;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBaseArrayLayer(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->baseArrayLayer = $cValue;
    }

    /**
     * VkImageView/
     */
    public function getImageViewBinding(): VkImageView
    {
        $cValue = $this->cdata->imageViewBinding;
        $phpValue = new \iggyvolz\vulkan\struct\VkImageView($cValue, $ffi);
        return $phpValue;
    }

    public function setImageViewBinding(VkImageView $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->imageViewBinding = $cValue;
    }
}
