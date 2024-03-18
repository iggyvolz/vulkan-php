<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkBindSparseInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "waitSemaphoreCount" => $this->getWaitSemaphoreCount(),
          "pWaitSemaphores" => $this->getPWaitSemaphores(),
          "bufferBindCount" => $this->getBufferBindCount(),
          "pBufferBinds" => $this->getPBufferBinds(),
          "imageOpaqueBindCount" => $this->getImageOpaqueBindCount(),
          "pImageOpaqueBinds" => $this->getPImageOpaqueBinds(),
          "imageBindCount" => $this->getImageBindCount(),
          "pImageBinds" => $this->getPImageBinds(),
          "signalSemaphoreCount" => $this->getSignalSemaphoreCount(),
          "pSignalSemaphores" => $this->getPSignalSemaphores(),
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
        null|\iggyvolz\vulkan\util\ObjectPointer $pWaitSemaphores = null,
        null|int $bufferBindCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pBufferBinds = null,
        null|int $imageOpaqueBindCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pImageOpaqueBinds = null,
        null|int $imageBindCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pImageBinds = null,
        null|int $signalSemaphoreCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pSignalSemaphores = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkBindSparseInfo', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($waitSemaphoreCount)) $self->setWaitSemaphoreCount($waitSemaphoreCount);
        if(!is_null($pWaitSemaphores)) $self->setPWaitSemaphores($pWaitSemaphores);
        if(!is_null($bufferBindCount)) $self->setBufferBindCount($bufferBindCount);
        if(!is_null($pBufferBinds)) $self->setPBufferBinds($pBufferBinds);
        if(!is_null($imageOpaqueBindCount)) $self->setImageOpaqueBindCount($imageOpaqueBindCount);
        if(!is_null($pImageOpaqueBinds)) $self->setPImageOpaqueBinds($pImageOpaqueBinds);
        if(!is_null($imageBindCount)) $self->setImageBindCount($imageBindCount);
        if(!is_null($pImageBinds)) $self->setPImageBinds($pImageBinds);
        if(!is_null($signalSemaphoreCount)) $self->setSignalSemaphoreCount($signalSemaphoreCount);
        if(!is_null($pSignalSemaphores)) $self->setPSignalSemaphores($pSignalSemaphores);
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
     * VkSemaphore* /
     */
    public function getPWaitSemaphores(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pWaitSemaphores;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkSemaphore', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPWaitSemaphores(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pWaitSemaphores = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBufferBindCount(): int
    {
        $cValue = $this->cdata->bufferBindCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBufferBindCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->bufferBindCount = $cValue;
    }

    /**
     * VkSparseBufferMemoryBindInfo* /
     */
    public function getPBufferBinds(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pBufferBinds;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkSparseBufferMemoryBindInfo', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPBufferBinds(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pBufferBinds = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getImageOpaqueBindCount(): int
    {
        $cValue = $this->cdata->imageOpaqueBindCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setImageOpaqueBindCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->imageOpaqueBindCount = $cValue;
    }

    /**
     * VkSparseImageOpaqueMemoryBindInfo* /
     */
    public function getPImageOpaqueBinds(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pImageOpaqueBinds;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkSparseImageOpaqueMemoryBindInfo', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPImageOpaqueBinds(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pImageOpaqueBinds = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getImageBindCount(): int
    {
        $cValue = $this->cdata->imageBindCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setImageBindCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->imageBindCount = $cValue;
    }

    /**
     * VkSparseImageMemoryBindInfo* /
     */
    public function getPImageBinds(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pImageBinds;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkSparseImageMemoryBindInfo', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPImageBinds(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pImageBinds = $cValue;
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
     * VkSemaphore* /
     */
    public function getPSignalSemaphores(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pSignalSemaphores;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkSemaphore', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPSignalSemaphores(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pSignalSemaphores = $cValue;
    }
}
