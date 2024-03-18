<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSemaphoreSciSyncCreateInfoNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "semaphorePool" => $this->getSemaphorePool(),
          "pFence" => $this->getPFence(),
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
        null|VkSemaphoreSciSyncPoolNV $semaphorePool = null,
        null|\iggyvolz\vulkan\util\Pointer $pFence = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSemaphoreSciSyncCreateInfoNV', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($semaphorePool)) $self->setSemaphorePool($semaphorePool);
        if(!is_null($pFence)) $self->setPFence($pFence);
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
     * VkSemaphoreSciSyncPoolNV/
     */
    public function getSemaphorePool(): VkSemaphoreSciSyncPoolNV
    {
        $cValue = $this->cdata->semaphorePool;
        $phpValue = new \iggyvolz\vulkan\struct\VkSemaphoreSciSyncPoolNV($cValue, $ffi);
        return $phpValue;
    }

    public function setSemaphorePool(VkSemaphoreSciSyncPoolNV $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->semaphorePool = $cValue;
    }

    /**
     * void* /
     */
    public function getPFence(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pFence;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPFence(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pFence = $cValue;
    }
}
