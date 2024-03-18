<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceExternalSciSync2FeaturesNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "sciSyncFence" => $this->getSciSyncFence(),
          "sciSyncSemaphore2" => $this->getSciSyncSemaphore2(),
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
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|bool $sciSyncFence = null,
        null|bool $sciSyncSemaphore2 = null,
        null|bool $sciSyncImport = null,
        null|bool $sciSyncExport = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceExternalSciSync2FeaturesNV', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($sciSyncFence)) $self->setSciSyncFence($sciSyncFence);
        if(!is_null($sciSyncSemaphore2)) $self->setSciSyncSemaphore2($sciSyncSemaphore2);
        if(!is_null($sciSyncImport)) $self->setSciSyncImport($sciSyncImport);
        if(!is_null($sciSyncExport)) $self->setSciSyncExport($sciSyncExport);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSciSyncFence(): bool
    {
        $cValue = $this->cdata->sciSyncFence;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSciSyncFence(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->sciSyncFence = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSciSyncSemaphore2(): bool
    {
        $cValue = $this->cdata->sciSyncSemaphore2;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSciSyncSemaphore2(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->sciSyncSemaphore2 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSciSyncImport(): bool
    {
        $cValue = $this->cdata->sciSyncImport;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSciSyncImport(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->sciSyncImport = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSciSyncExport(): bool
    {
        $cValue = $this->cdata->sciSyncExport;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSciSyncExport(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->sciSyncExport = $cValue;
    }
}
