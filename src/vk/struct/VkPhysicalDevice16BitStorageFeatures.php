<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDevice16BitStorageFeatures
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
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDevice16BitStorageFeatures', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($storageBuffer16BitAccess)) $self->setStorageBuffer16BitAccess($storageBuffer16BitAccess);
        if(!is_null($uniformAndStorageBuffer16BitAccess)) $self->setUniformAndStorageBuffer16BitAccess($uniformAndStorageBuffer16BitAccess);
        if(!is_null($storagePushConstant16)) $self->setStoragePushConstant16($storagePushConstant16);
        if(!is_null($storageInputOutput16)) $self->setStorageInputOutput16($storageInputOutput16);
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
}
