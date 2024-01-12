<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceExternalSciSyncFeaturesNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "sciSyncFence" => $this->getSciSyncFence(),
          "sciSyncSemaphore" => $this->getSciSyncSemaphore(),
          "sciSyncImport" => $this->getSciSyncImport(),
          "sciSyncExport" => $this->getSciSyncExport(),
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
        null|bool $sciSyncFence = null,
        null|bool $sciSyncSemaphore = null,
        null|bool $sciSyncImport = null,
        null|bool $sciSyncExport = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceExternalSciSyncFeaturesNV', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($sciSyncFence)) $self->setSciSyncFence($sciSyncFence);
        if(!is_null($sciSyncSemaphore)) $self->setSciSyncSemaphore($sciSyncSemaphore);
        if(!is_null($sciSyncImport)) $self->setSciSyncImport($sciSyncImport);
        if(!is_null($sciSyncExport)) $self->setSciSyncExport($sciSyncExport);
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
    public function getSciSyncFence(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sciSyncFence;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSciSyncFence(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->sciSyncFence = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSciSyncSemaphore(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sciSyncSemaphore;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSciSyncSemaphore(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->sciSyncSemaphore = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSciSyncImport(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sciSyncImport;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSciSyncImport(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->sciSyncImport = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSciSyncExport(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sciSyncExport;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSciSyncExport(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->sciSyncExport = $cValue;
    }
}
