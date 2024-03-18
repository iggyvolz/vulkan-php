<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkAccelerationStructureTrianglesOpacityMicromapEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "indexType" => $this->getIndexType(),
          "indexBuffer" => $this->getIndexBuffer(),
          "indexStride" => $this->getIndexStride(),
          "baseTriangle" => $this->getBaseTriangle(),
          "usageCountsCount" => $this->getUsageCountsCount(),
          "pUsageCounts" => $this->getPUsageCounts(),
          "ppUsageCounts" => $this->getPpUsageCounts(),
          "micromap" => $this->getMicromap(),
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
        null|\iggyvolz\vulkan\enum\VkIndexType $indexType = null,
        mixed $indexBuffer = null,
        null|int $indexStride = null,
        null|int $baseTriangle = null,
        null|int $usageCountsCount = null,
        null|\iggyvolz\vulkan\util\Pointer $pUsageCounts = null,
        null|\iggyvolz\vulkan\util\Pointer $ppUsageCounts = null,
        null|VkMicromapEXT $micromap = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkAccelerationStructureTrianglesOpacityMicromapEXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($indexType)) $self->setIndexType($indexType);
        if(!is_null($indexBuffer)) $self->setIndexBuffer($indexBuffer);
        if(!is_null($indexStride)) $self->setIndexStride($indexStride);
        if(!is_null($baseTriangle)) $self->setBaseTriangle($baseTriangle);
        if(!is_null($usageCountsCount)) $self->setUsageCountsCount($usageCountsCount);
        if(!is_null($pUsageCounts)) $self->setPUsageCounts($pUsageCounts);
        if(!is_null($ppUsageCounts)) $self->setPpUsageCounts($ppUsageCounts);
        if(!is_null($micromap)) $self->setMicromap($micromap);
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
     * VkIndexType/
     */
    public function getIndexType(): \iggyvolz\vulkan\enum\VkIndexType
    {
        $cValue = $this->cdata->indexType;
        $phpValue = \iggyvolz\vulkan\enum\VkIndexType::from($cValue);
        return $phpValue;
    }

    public function setIndexType(\iggyvolz\vulkan\enum\VkIndexType $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->indexType = $cValue;
    }

    /**
     * void* /
     */
    public function getIndexBuffer(): mixed
    {
        $cValue = $this->cdata->indexBuffer;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setIndexBuffer(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->indexBuffer = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getIndexStride(): int
    {
        $cValue = $this->cdata->indexStride;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setIndexStride(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->indexStride = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBaseTriangle(): int
    {
        $cValue = $this->cdata->baseTriangle;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBaseTriangle(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->baseTriangle = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getUsageCountsCount(): int
    {
        $cValue = $this->cdata->usageCountsCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setUsageCountsCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->usageCountsCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPUsageCounts(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pUsageCounts;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPUsageCounts(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pUsageCounts = $cValue;
    }

    /**
     * void* /
     */
    public function getPpUsageCounts(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->ppUsageCounts;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPpUsageCounts(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->ppUsageCounts = $cValue;
    }

    /**
     * VkMicromapEXT/
     */
    public function getMicromap(): VkMicromapEXT
    {
        $cValue = $this->cdata->micromap;
        $phpValue = new \iggyvolz\vulkan\struct\VkMicromapEXT($cValue, $ffi);
        return $phpValue;
    }

    public function setMicromap(VkMicromapEXT $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->micromap = $cValue;
    }
}
