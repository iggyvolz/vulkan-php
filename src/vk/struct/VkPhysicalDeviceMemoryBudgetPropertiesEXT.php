<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceMemoryBudgetPropertiesEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "heapBudget" => $this->getHeapBudget(),
          "heapUsage" => $this->getHeapUsage(),
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
        mixed $heapBudget = null,
        mixed $heapUsage = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceMemoryBudgetPropertiesEXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($heapBudget)) $self->setHeapBudget($heapBudget);
        if(!is_null($heapUsage)) $self->setHeapUsage($heapUsage);
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
     * void* /
     */
    public function getHeapBudget(): mixed
    {
        $cValue = $this->cdata->heapBudget;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setHeapBudget(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->heapBudget = $cValue;
    }

    /**
     * void* /
     */
    public function getHeapUsage(): mixed
    {
        $cValue = $this->cdata->heapUsage;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setHeapUsage(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->heapUsage = $cValue;
    }
}
