<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDeviceGroupSubmitInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "waitSemaphoreCount" => $this->getWaitSemaphoreCount(),
          "pWaitSemaphoreDeviceIndices" => $this->getPWaitSemaphoreDeviceIndices(),
          "commandBufferCount" => $this->getCommandBufferCount(),
          "pCommandBufferDeviceMasks" => $this->getPCommandBufferDeviceMasks(),
          "signalSemaphoreCount" => $this->getSignalSemaphoreCount(),
          "pSignalSemaphoreDeviceIndices" => $this->getPSignalSemaphoreDeviceIndices(),
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
        null|int $waitSemaphoreCount = null,
        null|\iggyvolz\vulkan\util\IntPointer $pWaitSemaphoreDeviceIndices = null,
        null|int $commandBufferCount = null,
        null|\iggyvolz\vulkan\util\IntPointer $pCommandBufferDeviceMasks = null,
        null|int $signalSemaphoreCount = null,
        null|\iggyvolz\vulkan\util\IntPointer $pSignalSemaphoreDeviceIndices = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDeviceGroupSubmitInfo', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($waitSemaphoreCount)) $self->setWaitSemaphoreCount($waitSemaphoreCount);
        if(!is_null($pWaitSemaphoreDeviceIndices)) $self->setPWaitSemaphoreDeviceIndices($pWaitSemaphoreDeviceIndices);
        if(!is_null($commandBufferCount)) $self->setCommandBufferCount($commandBufferCount);
        if(!is_null($pCommandBufferDeviceMasks)) $self->setPCommandBufferDeviceMasks($pCommandBufferDeviceMasks);
        if(!is_null($signalSemaphoreCount)) $self->setSignalSemaphoreCount($signalSemaphoreCount);
        if(!is_null($pSignalSemaphoreDeviceIndices)) $self->setPSignalSemaphoreDeviceIndices($pSignalSemaphoreDeviceIndices);
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
    public function getWaitSemaphoreCount(): int
    {
        $cValue = $this->cdata->waitSemaphoreCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setWaitSemaphoreCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->waitSemaphoreCount = $cValue;
    }

    /**
     * uint32_t* /
     */
    public function getPWaitSemaphoreDeviceIndices(): \iggyvolz\vulkan\util\IntPointer
    {
        $cValue = $this->cdata->pWaitSemaphoreDeviceIndices;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPWaitSemaphoreDeviceIndices(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pWaitSemaphoreDeviceIndices = $cValue;
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

    /**
     * uint32_t* /
     */
    public function getPCommandBufferDeviceMasks(): \iggyvolz\vulkan\util\IntPointer
    {
        $cValue = $this->cdata->pCommandBufferDeviceMasks;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPCommandBufferDeviceMasks(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pCommandBufferDeviceMasks = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSignalSemaphoreCount(): int
    {
        $cValue = $this->cdata->signalSemaphoreCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSignalSemaphoreCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->signalSemaphoreCount = $cValue;
    }

    /**
     * uint32_t* /
     */
    public function getPSignalSemaphoreDeviceIndices(): \iggyvolz\vulkan\util\IntPointer
    {
        $cValue = $this->cdata->pSignalSemaphoreDeviceIndices;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPSignalSemaphoreDeviceIndices(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pSignalSemaphoreDeviceIndices = $cValue;
    }
}
