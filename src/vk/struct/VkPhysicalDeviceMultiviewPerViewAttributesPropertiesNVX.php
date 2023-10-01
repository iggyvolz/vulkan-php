<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceMultiviewPerViewAttributesPropertiesNVX
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
        null|bool $perViewPositionAllComponents = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceMultiviewPerViewAttributesPropertiesNVX', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($perViewPositionAllComponents)) $self->setPerViewPositionAllComponents($perViewPositionAllComponents);
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
     * uint32_t/
     */
    public function getPerViewPositionAllComponents(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->perViewPositionAllComponents;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setPerViewPositionAllComponents(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->perViewPositionAllComponents = $cValue;
    }
}
