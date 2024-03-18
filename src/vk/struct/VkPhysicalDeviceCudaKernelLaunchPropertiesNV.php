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
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceCudaKernelLaunchPropertiesNV', false));
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
    public function getComputeCapabilityMinor(): int
    {
        $cValue = $this->cdata->computeCapabilityMinor;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setComputeCapabilityMinor(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->computeCapabilityMinor = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getComputeCapabilityMajor(): int
    {
        $cValue = $this->cdata->computeCapabilityMajor;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setComputeCapabilityMajor(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->computeCapabilityMajor = $cValue;
    }
}
