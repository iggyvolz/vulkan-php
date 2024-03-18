<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDependencyInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "dependencyFlags" => $this->getDependencyFlags(),
          "memoryBarrierCount" => $this->getMemoryBarrierCount(),
          "pMemoryBarriers" => $this->getPMemoryBarriers(),
          "bufferMemoryBarrierCount" => $this->getBufferMemoryBarrierCount(),
          "pBufferMemoryBarriers" => $this->getPBufferMemoryBarriers(),
          "imageMemoryBarrierCount" => $this->getImageMemoryBarrierCount(),
          "pImageMemoryBarriers" => $this->getPImageMemoryBarriers(),
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
        null|array $dependencyFlags = null,
        null|int $memoryBarrierCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pMemoryBarriers = null,
        null|int $bufferMemoryBarrierCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pBufferMemoryBarriers = null,
        null|int $imageMemoryBarrierCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pImageMemoryBarriers = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDependencyInfo', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($dependencyFlags)) $self->setDependencyFlags($dependencyFlags);
        if(!is_null($memoryBarrierCount)) $self->setMemoryBarrierCount($memoryBarrierCount);
        if(!is_null($pMemoryBarriers)) $self->setPMemoryBarriers($pMemoryBarriers);
        if(!is_null($bufferMemoryBarrierCount)) $self->setBufferMemoryBarrierCount($bufferMemoryBarrierCount);
        if(!is_null($pBufferMemoryBarriers)) $self->setPBufferMemoryBarriers($pBufferMemoryBarriers);
        if(!is_null($imageMemoryBarrierCount)) $self->setImageMemoryBarrierCount($imageMemoryBarrierCount);
        if(!is_null($pImageMemoryBarriers)) $self->setPImageMemoryBarriers($pImageMemoryBarriers);
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
     * VkDependencyFlags/
     */
    public function getDependencyFlags(): array
    {
        $cValue = $this->cdata->dependencyFlags;
        $phpValue = \iggyvolz\vulkan\enum\VkDependencyFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setDependencyFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkDependencyFlagBits::toInt(...$phpValue);
        $this->cdata->dependencyFlags = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMemoryBarrierCount(): int
    {
        $cValue = $this->cdata->memoryBarrierCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMemoryBarrierCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->memoryBarrierCount = $cValue;
    }

    /**
     * VkMemoryBarrier2* /
     */
    public function getPMemoryBarriers(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pMemoryBarriers;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkMemoryBarrier2', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPMemoryBarriers(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pMemoryBarriers = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBufferMemoryBarrierCount(): int
    {
        $cValue = $this->cdata->bufferMemoryBarrierCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBufferMemoryBarrierCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->bufferMemoryBarrierCount = $cValue;
    }

    /**
     * VkBufferMemoryBarrier2* /
     */
    public function getPBufferMemoryBarriers(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pBufferMemoryBarriers;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkBufferMemoryBarrier2', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPBufferMemoryBarriers(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pBufferMemoryBarriers = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getImageMemoryBarrierCount(): int
    {
        $cValue = $this->cdata->imageMemoryBarrierCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setImageMemoryBarrierCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->imageMemoryBarrierCount = $cValue;
    }

    /**
     * VkImageMemoryBarrier2* /
     */
    public function getPImageMemoryBarriers(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pImageMemoryBarriers;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkImageMemoryBarrier2', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPImageMemoryBarriers(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pImageMemoryBarriers = $cValue;
    }
}
