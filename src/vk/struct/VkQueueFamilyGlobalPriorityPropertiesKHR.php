<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkQueueFamilyGlobalPriorityPropertiesKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "priorityCount" => $this->getPriorityCount(),
          "priorities" => $this->getPriorities(),
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
        null|int $priorityCount = null,
        mixed $priorities = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkQueueFamilyGlobalPriorityPropertiesKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($priorityCount)) $self->setPriorityCount($priorityCount);
        if(!is_null($priorities)) $self->setPriorities($priorities);
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
    public function getPriorityCount(): int
    {
        $cValue = $this->cdata->priorityCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPriorityCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->priorityCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPriorities(): mixed
    {
        $cValue = $this->cdata->priorities;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPriorities(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->priorities = $cValue;
    }
}
