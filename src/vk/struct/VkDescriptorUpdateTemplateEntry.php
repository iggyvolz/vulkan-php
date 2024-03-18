<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDescriptorUpdateTemplateEntry implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "dstBinding" => $this->getDstBinding(),
          "dstArrayElement" => $this->getDstArrayElement(),
          "descriptorCount" => $this->getDescriptorCount(),
          "descriptorType" => $this->getDescriptorType(),
          "offset" => $this->getOffset(),
          "stride" => $this->getStride(),
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
        null|int $dstBinding = null,
        null|int $dstArrayElement = null,
        null|int $descriptorCount = null,
        null|\iggyvolz\vulkan\enum\VkDescriptorType $descriptorType = null,
        null|int $offset = null,
        null|int $stride = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDescriptorUpdateTemplateEntry', false));
        if(!is_null($dstBinding)) $self->setDstBinding($dstBinding);
        if(!is_null($dstArrayElement)) $self->setDstArrayElement($dstArrayElement);
        if(!is_null($descriptorCount)) $self->setDescriptorCount($descriptorCount);
        if(!is_null($descriptorType)) $self->setDescriptorType($descriptorType);
        if(!is_null($offset)) $self->setOffset($offset);
        if(!is_null($stride)) $self->setStride($stride);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getDstBinding(): int
    {
        $cValue = $this->cdata->dstBinding;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDstBinding(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->dstBinding = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDstArrayElement(): int
    {
        $cValue = $this->cdata->dstArrayElement;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDstArrayElement(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->dstArrayElement = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorCount(): int
    {
        $cValue = $this->cdata->descriptorCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDescriptorCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->descriptorCount = $cValue;
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
     * size_t/
     */
    public function getOffset(): int
    {
        $cValue = $this->cdata->offset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setOffset(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->offset = $cValue;
    }

    /**
     * size_t/
     */
    public function getStride(): int
    {
        $cValue = $this->cdata->stride;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStride(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->stride = $cValue;
    }
}
