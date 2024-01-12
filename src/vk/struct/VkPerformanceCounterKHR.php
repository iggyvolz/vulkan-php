<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPerformanceCounterKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "unit" => $this->getUnit(),
          "scope" => $this->getScope(),
          "storage" => $this->getStorage(),
          "uuid" => $this->getUuid(),
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
        null|\iggyvolz\vulkan\enum\VkPerformanceCounterUnitKHR $unit = null,
        null|\iggyvolz\vulkan\enum\VkPerformanceCounterScopeKHR $scope = null,
        null|\iggyvolz\vulkan\enum\VkPerformanceCounterStorageKHR $storage = null,
        null|\Ramsey\Uuid\UuidInterface $uuid = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPerformanceCounterKHR', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($unit)) $self->setUnit($unit);
        if(!is_null($scope)) $self->setScope($scope);
        if(!is_null($storage)) $self->setStorage($storage);
        if(!is_null($uuid)) $self->setUuid($uuid);
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
     * VkPerformanceCounterUnitKHR/
     */
    public function getUnit(): \iggyvolz\vulkan\enum\VkPerformanceCounterUnitKHR
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->unit;
        $phpValue = \iggyvolz\vulkan\enum\VkPerformanceCounterUnitKHR::from($cValue);
        return $phpValue;
    }

    public function setUnit(\iggyvolz\vulkan\enum\VkPerformanceCounterUnitKHR $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->unit = $cValue;
    }

    /**
     * VkPerformanceCounterScopeKHR/
     */
    public function getScope(): \iggyvolz\vulkan\enum\VkPerformanceCounterScopeKHR
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->scope;
        $phpValue = \iggyvolz\vulkan\enum\VkPerformanceCounterScopeKHR::from($cValue);
        return $phpValue;
    }

    public function setScope(\iggyvolz\vulkan\enum\VkPerformanceCounterScopeKHR $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->scope = $cValue;
    }

    /**
     * VkPerformanceCounterStorageKHR/
     */
    public function getStorage(): \iggyvolz\vulkan\enum\VkPerformanceCounterStorageKHR
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->storage;
        $phpValue = \iggyvolz\vulkan\enum\VkPerformanceCounterStorageKHR::from($cValue);
        return $phpValue;
    }

    public function setStorage(\iggyvolz\vulkan\enum\VkPerformanceCounterStorageKHR $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->storage = $cValue;
    }

    /**
     * uint8_t/[16]
     */
    public function getUuid(): \Ramsey\Uuid\UuidInterface
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->uuid;
        $phpValue = \Ramsey\Uuid\Uuid::fromBytes(\FFI::string($cValue, 16));
        return $phpValue;
    }

    public function setUuid(\Ramsey\Uuid\UuidInterface $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $ffi->new("uint8_t[16]"); $ffi->memcpy($cValue, $phpValue->getBytes(), 16);
        $this->cdata->uuid = $cValue;
    }
}
