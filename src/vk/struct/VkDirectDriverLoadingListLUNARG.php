<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDirectDriverLoadingListLUNARG implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "mode" => $this->getMode(),
          "driverCount" => $this->getDriverCount(),
          "pDrivers" => $this->getPDrivers(),
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
        null|\iggyvolz\vulkan\enum\VkDirectDriverLoadingModeLUNARG $mode = null,
        null|int $driverCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pDrivers = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDirectDriverLoadingListLUNARG', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($mode)) $self->setMode($mode);
        if(!is_null($driverCount)) $self->setDriverCount($driverCount);
        if(!is_null($pDrivers)) $self->setPDrivers($pDrivers);
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
     * VkDirectDriverLoadingModeLUNARG/
     */
    public function getMode(): \iggyvolz\vulkan\enum\VkDirectDriverLoadingModeLUNARG
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->mode;
        $phpValue = \iggyvolz\vulkan\enum\VkDirectDriverLoadingModeLUNARG::from($cValue);
        return $phpValue;
    }

    public function setMode(\iggyvolz\vulkan\enum\VkDirectDriverLoadingModeLUNARG $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->mode = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDriverCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->driverCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDriverCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->driverCount = $cValue;
    }

    /**
     * VkDirectDriverLoadingInfoLUNARG* /
     */
    public function getPDrivers(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pDrivers;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkDirectDriverLoadingInfoLUNARG', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPDrivers(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pDrivers = $cValue;
    }
}
