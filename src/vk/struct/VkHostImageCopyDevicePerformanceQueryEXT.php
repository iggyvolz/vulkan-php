<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkHostImageCopyDevicePerformanceQueryEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "optimalDeviceAccess" => $this->getOptimalDeviceAccess(),
          "identicalMemoryLayout" => $this->getIdenticalMemoryLayout(),
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
        null|bool $optimalDeviceAccess = null,
        null|bool $identicalMemoryLayout = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkHostImageCopyDevicePerformanceQueryEXT', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($optimalDeviceAccess)) $self->setOptimalDeviceAccess($optimalDeviceAccess);
        if(!is_null($identicalMemoryLayout)) $self->setIdenticalMemoryLayout($identicalMemoryLayout);
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
    public function getOptimalDeviceAccess(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->optimalDeviceAccess;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setOptimalDeviceAccess(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->optimalDeviceAccess = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIdenticalMemoryLayout(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->identicalMemoryLayout;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIdenticalMemoryLayout(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->identicalMemoryLayout = $cValue;
    }
}
