<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkCommandBufferAllocateInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "commandPool" => $this->getCommandPool(),
          "level" => $this->getLevel(),
          "commandBufferCount" => $this->getCommandBufferCount(),
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
        null|VkCommandPool $commandPool = null,
        null|\iggyvolz\vulkan\enum\VkCommandBufferLevel $level = null,
        null|int $commandBufferCount = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkCommandBufferAllocateInfo', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($commandPool)) $self->setCommandPool($commandPool);
        if(!is_null($level)) $self->setLevel($level);
        if(!is_null($commandBufferCount)) $self->setCommandBufferCount($commandBufferCount);
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
     * VkCommandPool/
     */
    public function getCommandPool(): VkCommandPool
    {
        $cValue = $this->cdata->commandPool;
        $phpValue = new \iggyvolz\vulkan\struct\VkCommandPool($cValue, $ffi);
        return $phpValue;
    }

    public function setCommandPool(VkCommandPool $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->commandPool = $cValue;
    }

    /**
     * VkCommandBufferLevel/
     */
    public function getLevel(): \iggyvolz\vulkan\enum\VkCommandBufferLevel
    {
        $cValue = $this->cdata->level;
        $phpValue = \iggyvolz\vulkan\enum\VkCommandBufferLevel::from($cValue);
        return $phpValue;
    }

    public function setLevel(\iggyvolz\vulkan\enum\VkCommandBufferLevel $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->level = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getCommandBufferCount(): int
    {
        $cValue = $this->cdata->commandBufferCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCommandBufferCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->commandBufferCount = $cValue;
    }
}
