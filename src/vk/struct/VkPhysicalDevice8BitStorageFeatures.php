<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDevice8BitStorageFeatures implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "storageBuffer8BitAccess" => $this->getStorageBuffer8BitAccess(),
          "uniformAndStorageBuffer8BitAccess" => $this->getUniformAndStorageBuffer8BitAccess(),
          "storagePushConstant8" => $this->getStoragePushConstant8(),
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
        null|bool $storageBuffer8BitAccess = null,
        null|bool $uniformAndStorageBuffer8BitAccess = null,
        null|bool $storagePushConstant8 = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDevice8BitStorageFeatures', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($storageBuffer8BitAccess)) $self->setStorageBuffer8BitAccess($storageBuffer8BitAccess);
        if(!is_null($uniformAndStorageBuffer8BitAccess)) $self->setUniformAndStorageBuffer8BitAccess($uniformAndStorageBuffer8BitAccess);
        if(!is_null($storagePushConstant8)) $self->setStoragePushConstant8($storagePushConstant8);
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
    public function getStorageBuffer8BitAccess(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->storageBuffer8BitAccess;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setStorageBuffer8BitAccess(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->storageBuffer8BitAccess = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getUniformAndStorageBuffer8BitAccess(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->uniformAndStorageBuffer8BitAccess;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setUniformAndStorageBuffer8BitAccess(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->uniformAndStorageBuffer8BitAccess = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStoragePushConstant8(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->storagePushConstant8;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setStoragePushConstant8(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->storagePushConstant8 = $cValue;
    }
}
