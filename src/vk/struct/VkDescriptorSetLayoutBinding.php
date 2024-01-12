<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDescriptorSetLayoutBinding implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "binding" => $this->getBinding(),
          "descriptorType" => $this->getDescriptorType(),
          "descriptorCount" => $this->getDescriptorCount(),
          "stageFlags" => $this->getStageFlags(),
          "pImmutableSamplers" => $this->getPImmutableSamplers(),
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
        null|int $binding = null,
        null|\iggyvolz\vulkan\enum\VkDescriptorType $descriptorType = null,
        null|int $descriptorCount = null,
        null|array $stageFlags = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pImmutableSamplers = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDescriptorSetLayoutBinding', false), $vulkan);
        if(!is_null($binding)) $self->setBinding($binding);
        if(!is_null($descriptorType)) $self->setDescriptorType($descriptorType);
        if(!is_null($descriptorCount)) $self->setDescriptorCount($descriptorCount);
        if(!is_null($stageFlags)) $self->setStageFlags($stageFlags);
        if(!is_null($pImmutableSamplers)) $self->setPImmutableSamplers($pImmutableSamplers);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getBinding(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->binding;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBinding(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->binding = $cValue;
    }

    /**
     * VkDescriptorType/
     */
    public function getDescriptorType(): \iggyvolz\vulkan\enum\VkDescriptorType
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->descriptorType;
        $phpValue = \iggyvolz\vulkan\enum\VkDescriptorType::from($cValue);
        return $phpValue;
    }

    public function setDescriptorType(\iggyvolz\vulkan\enum\VkDescriptorType $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->descriptorType = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->descriptorCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDescriptorCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->descriptorCount = $cValue;
    }

    /**
     * VkShaderStageFlags/
     */
    public function getStageFlags(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->stageFlags;
        $phpValue = \iggyvolz\vulkan\enum\VkShaderStageFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setStageFlags(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkShaderStageFlagBits::toInt(...$phpValue);
        $this->cdata->stageFlags = $cValue;
    }

    /**
     * VkSampler* /
     */
    public function getPImmutableSamplers(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pImmutableSamplers;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkSampler', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPImmutableSamplers(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pImmutableSamplers = $cValue;
    }
}
