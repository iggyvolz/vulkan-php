<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDevicePCIBusInfoPropertiesEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "pciDomain" => $this->getPciDomain(),
          "pciBus" => $this->getPciBus(),
          "pciDevice" => $this->getPciDevice(),
          "pciFunction" => $this->getPciFunction(),
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
        null|int $pciDomain = null,
        null|int $pciBus = null,
        null|int $pciDevice = null,
        null|int $pciFunction = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDevicePCIBusInfoPropertiesEXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($pciDomain)) $self->setPciDomain($pciDomain);
        if(!is_null($pciBus)) $self->setPciBus($pciBus);
        if(!is_null($pciDevice)) $self->setPciDevice($pciDevice);
        if(!is_null($pciFunction)) $self->setPciFunction($pciFunction);
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
    public function getPciDomain(): int
    {
        $cValue = $this->cdata->pciDomain;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPciDomain(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->pciDomain = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPciBus(): int
    {
        $cValue = $this->cdata->pciBus;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPciBus(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->pciBus = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPciDevice(): int
    {
        $cValue = $this->cdata->pciDevice;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPciDevice(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->pciDevice = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPciFunction(): int
    {
        $cValue = $this->cdata->pciFunction;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPciFunction(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->pciFunction = $cValue;
    }
}
