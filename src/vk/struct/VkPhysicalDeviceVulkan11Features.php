<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceVulkan11Features
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
        null|bool $storageBuffer16BitAccess = null,
        null|bool $uniformAndStorageBuffer16BitAccess = null,
        null|bool $storagePushConstant16 = null,
        null|bool $storageInputOutput16 = null,
        null|bool $multiview = null,
        null|bool $multiviewGeometryShader = null,
        null|bool $multiviewTessellationShader = null,
        null|bool $variablePointersStorageBuffer = null,
        null|bool $variablePointers = null,
        null|bool $protectedMemory = null,
        null|bool $samplerYcbcrConversion = null,
        null|bool $shaderDrawParameters = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceVulkan11Features', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($storageBuffer16BitAccess)) $self->setStorageBuffer16BitAccess($storageBuffer16BitAccess);
        if(!is_null($uniformAndStorageBuffer16BitAccess)) $self->setUniformAndStorageBuffer16BitAccess($uniformAndStorageBuffer16BitAccess);
        if(!is_null($storagePushConstant16)) $self->setStoragePushConstant16($storagePushConstant16);
        if(!is_null($storageInputOutput16)) $self->setStorageInputOutput16($storageInputOutput16);
        if(!is_null($multiview)) $self->setMultiview($multiview);
        if(!is_null($multiviewGeometryShader)) $self->setMultiviewGeometryShader($multiviewGeometryShader);
        if(!is_null($multiviewTessellationShader)) $self->setMultiviewTessellationShader($multiviewTessellationShader);
        if(!is_null($variablePointersStorageBuffer)) $self->setVariablePointersStorageBuffer($variablePointersStorageBuffer);
        if(!is_null($variablePointers)) $self->setVariablePointers($variablePointers);
        if(!is_null($protectedMemory)) $self->setProtectedMemory($protectedMemory);
        if(!is_null($samplerYcbcrConversion)) $self->setSamplerYcbcrConversion($samplerYcbcrConversion);
        if(!is_null($shaderDrawParameters)) $self->setShaderDrawParameters($shaderDrawParameters);
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
    public function getStorageBuffer16BitAccess(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->storageBuffer16BitAccess;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setStorageBuffer16BitAccess(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->storageBuffer16BitAccess = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getUniformAndStorageBuffer16BitAccess(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->uniformAndStorageBuffer16BitAccess;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setUniformAndStorageBuffer16BitAccess(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->uniformAndStorageBuffer16BitAccess = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStoragePushConstant16(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->storagePushConstant16;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setStoragePushConstant16(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->storagePushConstant16 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStorageInputOutput16(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->storageInputOutput16;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setStorageInputOutput16(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->storageInputOutput16 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMultiview(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->multiview;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setMultiview(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->multiview = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMultiviewGeometryShader(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->multiviewGeometryShader;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setMultiviewGeometryShader(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->multiviewGeometryShader = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMultiviewTessellationShader(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->multiviewTessellationShader;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setMultiviewTessellationShader(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->multiviewTessellationShader = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getVariablePointersStorageBuffer(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->variablePointersStorageBuffer;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setVariablePointersStorageBuffer(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->variablePointersStorageBuffer = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getVariablePointers(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->variablePointers;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setVariablePointers(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->variablePointers = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getProtectedMemory(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->protectedMemory;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setProtectedMemory(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->protectedMemory = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSamplerYcbcrConversion(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->samplerYcbcrConversion;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSamplerYcbcrConversion(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->samplerYcbcrConversion = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderDrawParameters(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderDrawParameters;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderDrawParameters(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderDrawParameters = $cValue;
    }
}
