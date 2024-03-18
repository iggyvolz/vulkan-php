<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceGroupProperties implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "physicalDeviceCount" => $this->getPhysicalDeviceCount(),
          "physicalDevices" => $this->getPhysicalDevices(),
          "subsetAllocation" => $this->getSubsetAllocation(),
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
        null|int $physicalDeviceCount = null,
        mixed $physicalDevices = null,
        null|bool $subsetAllocation = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceGroupProperties', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($physicalDeviceCount)) $self->setPhysicalDeviceCount($physicalDeviceCount);
        if(!is_null($physicalDevices)) $self->setPhysicalDevices($physicalDevices);
        if(!is_null($subsetAllocation)) $self->setSubsetAllocation($subsetAllocation);
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
    public function getPhysicalDeviceCount(): int
    {
        $cValue = $this->cdata->physicalDeviceCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPhysicalDeviceCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->physicalDeviceCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPhysicalDevices(): mixed
    {
        $cValue = $this->cdata->physicalDevices;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPhysicalDevices(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->physicalDevices = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSubsetAllocation(): bool
    {
        $cValue = $this->cdata->subsetAllocation;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSubsetAllocation(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->subsetAllocation = $cValue;
    }
}
