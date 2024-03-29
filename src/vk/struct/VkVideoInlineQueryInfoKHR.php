<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoInlineQueryInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "queryPool" => $this->getQueryPool(),
          "firstQuery" => $this->getFirstQuery(),
          "queryCount" => $this->getQueryCount(),
        ];
    }

    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \iggyvolz\vulkan\Vulkan $vulkan,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|VkQueryPool $queryPool = null,
        null|int $firstQuery = null,
        null|int $queryCount = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoInlineQueryInfoKHR', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($queryPool)) $self->setQueryPool($queryPool);
        if(!is_null($firstQuery)) $self->setFirstQuery($firstQuery);
        if(!is_null($queryCount)) $self->setQueryCount($queryCount);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * VkQueryPool/
     */
    public function getQueryPool(): VkQueryPool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->queryPool;
        $phpValue = new \iggyvolz\vulkan\struct\VkQueryPool($cValue, $ffi);
        return $phpValue;
    }

    public function setQueryPool(VkQueryPool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->queryPool = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFirstQuery(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->firstQuery;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setFirstQuery(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->firstQuery = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getQueryCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->queryCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setQueryCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->queryCount = $cValue;
    }
}
