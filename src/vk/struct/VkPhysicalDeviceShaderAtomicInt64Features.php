<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceShaderAtomicInt64Features
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
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|bool $shaderBufferInt64Atomics = null,
        null|bool $shaderSharedInt64Atomics = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceShaderAtomicInt64Features', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($shaderBufferInt64Atomics)) $self->setShaderBufferInt64Atomics($shaderBufferInt64Atomics);
        if(!is_null($shaderSharedInt64Atomics)) $self->setShaderSharedInt64Atomics($shaderSharedInt64Atomics);
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
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderBufferInt64Atomics(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderBufferInt64Atomics;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderBufferInt64Atomics(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderBufferInt64Atomics = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderSharedInt64Atomics(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderSharedInt64Atomics;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderSharedInt64Atomics(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderSharedInt64Atomics = $cValue;
    }
}
