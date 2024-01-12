<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDevice16BitStorageFeatures implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "storageBuffer16BitAccess" => $this->getStorageBuffer16BitAccess(),
          "uniformAndStorageBuffer16BitAccess" => $this->getUniformAndStorageBuffer16BitAccess(),
          "storagePushConstant16" => $this->getStoragePushConstant16(),
          "storageInputOutput16" => $this->getStorageInputOutput16(),
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
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|bool $storageBuffer16BitAccess = null,
        null|bool $uniformAndStorageBuffer16BitAccess = null,
        null|bool $storagePushConstant16 = null,
        null|bool $storageInputOutput16 = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDevice16BitStorageFeatures', false), $vulkan);
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
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStorageBuffer16BitAccess(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->storageBuffer16BitAccess;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setStorageBuffer16BitAccess(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->storageBuffer16BitAccess = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getUniformAndStorageBuffer16BitAccess(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->uniformAndStorageBuffer16BitAccess;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setUniformAndStorageBuffer16BitAccess(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->uniformAndStorageBuffer16BitAccess = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStoragePushConstant16(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->storagePushConstant16;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setStoragePushConstant16(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->storagePushConstant16 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStorageInputOutput16(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->storageInputOutput16;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setStorageInputOutput16(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->storageInputOutput16 = $cValue;
    }
}
