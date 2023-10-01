<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceRobustness2FeaturesEXT
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
        null|bool $robustBufferAccess2 = null,
        null|bool $robustImageAccess2 = null,
        null|bool $nullDescriptor = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceRobustness2FeaturesEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($robustBufferAccess2)) $self->setRobustBufferAccess2($robustBufferAccess2);
        if(!is_null($robustImageAccess2)) $self->setRobustImageAccess2($robustImageAccess2);
        if(!is_null($nullDescriptor)) $self->setNullDescriptor($nullDescriptor);
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
    public function getRobustBufferAccess2(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->robustBufferAccess2;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setRobustBufferAccess2(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->robustBufferAccess2 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getRobustImageAccess2(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->robustImageAccess2;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setRobustImageAccess2(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->robustImageAccess2 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getNullDescriptor(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->nullDescriptor;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setNullDescriptor(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->nullDescriptor = $cValue;
    }
}
