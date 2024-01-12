<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkMutableDescriptorTypeListEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "descriptorTypeCount" => $this->getDescriptorTypeCount(),
          "pDescriptorTypes" => $this->getPDescriptorTypes(),
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
        null|int $descriptorTypeCount = null,
        null|\iggyvolz\vulkan\util\Pointer $pDescriptorTypes = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkMutableDescriptorTypeListEXT', false), $vulkan);
        if(!is_null($descriptorTypeCount)) $self->setDescriptorTypeCount($descriptorTypeCount);
        if(!is_null($pDescriptorTypes)) $self->setPDescriptorTypes($pDescriptorTypes);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorTypeCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->descriptorTypeCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDescriptorTypeCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->descriptorTypeCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPDescriptorTypes(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pDescriptorTypes;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPDescriptorTypes(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pDescriptorTypes = $cValue;
    }
}
