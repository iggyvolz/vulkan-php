<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceCudaKernelLaunchPropertiesNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "computeCapabilityMinor" => $this->getComputeCapabilityMinor(),
          "computeCapabilityMajor" => $this->getComputeCapabilityMajor(),
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
        null|int $computeCapabilityMinor = null,
        null|int $computeCapabilityMajor = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceCudaKernelLaunchPropertiesNV', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($computeCapabilityMinor)) $self->setComputeCapabilityMinor($computeCapabilityMinor);
        if(!is_null($computeCapabilityMajor)) $self->setComputeCapabilityMajor($computeCapabilityMajor);
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
    public function getComputeCapabilityMinor(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->computeCapabilityMinor;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setComputeCapabilityMinor(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->computeCapabilityMinor = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getComputeCapabilityMajor(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->computeCapabilityMajor;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setComputeCapabilityMajor(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->computeCapabilityMajor = $cValue;
    }
}
