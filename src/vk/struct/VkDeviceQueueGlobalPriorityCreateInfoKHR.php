<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDeviceQueueGlobalPriorityCreateInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "globalPriority" => $this->getGlobalPriority(),
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
        null|\iggyvolz\vulkan\enum\VkQueueGlobalPriorityKHR $globalPriority = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDeviceQueueGlobalPriorityCreateInfoKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($globalPriority)) $self->setGlobalPriority($globalPriority);
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
     * VkQueueGlobalPriorityKHR/
     */
    public function getGlobalPriority(): \iggyvolz\vulkan\enum\VkQueueGlobalPriorityKHR
    {
        $cValue = $this->cdata->globalPriority;
        $phpValue = \iggyvolz\vulkan\enum\VkQueueGlobalPriorityKHR::from($cValue);
        return $phpValue;
    }

    public function setGlobalPriority(\iggyvolz\vulkan\enum\VkQueueGlobalPriorityKHR $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->globalPriority = $cValue;
    }
}
