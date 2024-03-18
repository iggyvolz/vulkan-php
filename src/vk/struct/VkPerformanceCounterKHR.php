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
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|\iggyvolz\vulkan\enum\VkPerformanceCounterUnitKHR $unit = null,
        null|\iggyvolz\vulkan\enum\VkPerformanceCounterScopeKHR $scope = null,
        null|\iggyvolz\vulkan\enum\VkPerformanceCounterStorageKHR $storage = null,
        null|string $uuid = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPerformanceCounterKHR', false));
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
     * VkPerformanceCounterUnitKHR/
     */
    public function getUnit(): \iggyvolz\vulkan\enum\VkPerformanceCounterUnitKHR
    {
        $cValue = $this->cdata->unit;
        $phpValue = \iggyvolz\vulkan\enum\VkPerformanceCounterUnitKHR::from($cValue);
        return $phpValue;
    }

    public function setUnit(\iggyvolz\vulkan\enum\VkPerformanceCounterUnitKHR $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->unit = $cValue;
    }

    /**
     * VkPerformanceCounterScopeKHR/
     */
    public function getScope(): \iggyvolz\vulkan\enum\VkPerformanceCounterScopeKHR
    {
        $cValue = $this->cdata->scope;
        $phpValue = \iggyvolz\vulkan\enum\VkPerformanceCounterScopeKHR::from($cValue);
        return $phpValue;
    }

    public function setScope(\iggyvolz\vulkan\enum\VkPerformanceCounterScopeKHR $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->scope = $cValue;
    }

    /**
     * VkPerformanceCounterStorageKHR/
     */
    public function getStorage(): \iggyvolz\vulkan\enum\VkPerformanceCounterStorageKHR
    {
        $cValue = $this->cdata->storage;
        $phpValue = \iggyvolz\vulkan\enum\VkPerformanceCounterStorageKHR::from($cValue);
        return $phpValue;
    }

    public function setStorage(\iggyvolz\vulkan\enum\VkPerformanceCounterStorageKHR $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->storage = $cValue;
    }

    /**
     * char/[16]
     */
    public function getUuid(): string
    {
        $cValue = $this->cdata->uuid;
        $tempString = \FFI::string($cValue, 16); $phpValue = \substr($tempString, 0, \strpos($tempString, "\0"));
        return $phpValue;
    }

    public function setUuid(string $phpValue): void
    {
        \FFI::memcpy($cValue, $phpValue, 16);
        $this->cdata->uuid = $cValue;
    }
}
