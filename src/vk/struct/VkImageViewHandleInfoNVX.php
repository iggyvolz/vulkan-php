<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkImageViewHandleInfoNVX implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "imageView" => $this->getImageView(),
          "descriptorType" => $this->getDescriptorType(),
          "sampler" => $this->getSampler(),
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
        null|VkImageView $imageView = null,
        null|\iggyvolz\vulkan\enum\VkDescriptorType $descriptorType = null,
        null|VkSampler $sampler = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkImageViewHandleInfoNVX', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($imageView)) $self->setImageView($imageView);
        if(!is_null($descriptorType)) $self->setDescriptorType($descriptorType);
        if(!is_null($sampler)) $self->setSampler($sampler);
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
     * VkImageView/
     */
    public function getImageView(): VkImageView
    {
        $cValue = $this->cdata->imageView;
        $phpValue = new \iggyvolz\vulkan\struct\VkImageView($cValue, $ffi);
        return $phpValue;
    }

    public function setImageView(VkImageView $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->imageView = $cValue;
    }

    /**
     * VkDescriptorType/
     */
    public function getDescriptorType(): \iggyvolz\vulkan\enum\VkDescriptorType
    {
        $cValue = $this->cdata->descriptorType;
        $phpValue = \iggyvolz\vulkan\enum\VkDescriptorType::from($cValue);
        return $phpValue;
    }

    public function setDescriptorType(\iggyvolz\vulkan\enum\VkDescriptorType $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->descriptorType = $cValue;
    }

    /**
     * VkSampler/
     */
    public function getSampler(): VkSampler
    {
        $cValue = $this->cdata->sampler;
        $phpValue = new \iggyvolz\vulkan\struct\VkSampler($cValue, $ffi);
        return $phpValue;
    }

    public function setSampler(VkSampler $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->sampler = $cValue;
    }
}
