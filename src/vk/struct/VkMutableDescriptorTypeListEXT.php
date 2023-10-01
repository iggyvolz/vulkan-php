<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkMutableDescriptorTypeListEXT
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
        null|int $descriptorTypeCount = null,
        mixed $pDescriptorTypes = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkMutableDescriptorTypeListEXT', false), $vulkan->ffi);
        if(!is_null($descriptorTypeCount)) $self->setDescriptorTypeCount($descriptorTypeCount);
        if(!is_null($pDescriptorTypes)) $self->setPDescriptorTypes($pDescriptorTypes);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorTypeCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->descriptorTypeCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDescriptorTypeCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->descriptorTypeCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPDescriptorTypes(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pDescriptorTypes;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPDescriptorTypes(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->pDescriptorTypes = $cValue;
    }
}
