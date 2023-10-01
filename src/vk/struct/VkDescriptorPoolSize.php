<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDescriptorPoolSize
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
        null|\iggyvolz\vulkan\enum\VkDescriptorType $type = null,
        null|int $descriptorCount = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDescriptorPoolSize', false), $vulkan->ffi);
        if(!is_null($type)) $self->setType($type);
        if(!is_null($descriptorCount)) $self->setDescriptorCount($descriptorCount);
        return $self;
    }

    /**
     * VkDescriptorType/
     */
    public function getType(): \iggyvolz\vulkan\enum\VkDescriptorType
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->type;
        $phpValue = \iggyvolz\vulkan\enum\VkDescriptorType::from($cValue);
        return $phpValue;
    }

    public function setType(\iggyvolz\vulkan\enum\VkDescriptorType $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->type = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->descriptorCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDescriptorCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->descriptorCount = $cValue;
    }
}
