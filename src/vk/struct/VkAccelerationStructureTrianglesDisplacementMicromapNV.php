<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkAccelerationStructureTrianglesDisplacementMicromapNV
{
    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \FFI $ffi,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\OpaquePointer $pNext = null,
        null|\iggyvolz\vulkan\enum\VkFormat $displacementBiasAndScaleFormat = null,
        null|\iggyvolz\vulkan\enum\VkFormat $displacementVectorFormat = null,
        mixed $displacementBiasAndScaleBuffer = null,
        null|int $displacementBiasAndScaleStride = null,
        mixed $displacementVectorBuffer = null,
        null|int $displacementVectorStride = null,
        mixed $displacedMicromapPrimitiveFlags = null,
        null|int $displacedMicromapPrimitiveFlagsStride = null,
        null|\iggyvolz\vulkan\enum\VkIndexType $indexType = null,
        mixed $indexBuffer = null,
        null|int $indexStride = null,
        null|int $baseTriangle = null,
        null|int $usageCountsCount = null,
        mixed $pUsageCounts = null,
        mixed $ppUsageCounts = null,
        null|VkMicromapEXT $micromap = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkAccelerationStructureTrianglesDisplacementMicromapNV', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($displacementBiasAndScaleFormat)) $self->setDisplacementBiasAndScaleFormat($displacementBiasAndScaleFormat);
        if(!is_null($displacementVectorFormat)) $self->setDisplacementVectorFormat($displacementVectorFormat);
        if(!is_null($displacementBiasAndScaleBuffer)) $self->setDisplacementBiasAndScaleBuffer($displacementBiasAndScaleBuffer);
        if(!is_null($displacementBiasAndScaleStride)) $self->setDisplacementBiasAndScaleStride($displacementBiasAndScaleStride);
        if(!is_null($displacementVectorBuffer)) $self->setDisplacementVectorBuffer($displacementVectorBuffer);
        if(!is_null($displacementVectorStride)) $self->setDisplacementVectorStride($displacementVectorStride);
        if(!is_null($displacedMicromapPrimitiveFlags)) $self->setDisplacedMicromapPrimitiveFlags($displacedMicromapPrimitiveFlags);
        if(!is_null($displacedMicromapPrimitiveFlagsStride)) $self->setDisplacedMicromapPrimitiveFlagsStride($displacedMicromapPrimitiveFlagsStride);
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
        $ffi = $this->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\OpaquePointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\OpaquePointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * VkFormat/
     */
    public function getDisplacementBiasAndScaleFormat(): \iggyvolz\vulkan\enum\VkFormat
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->displacementBiasAndScaleFormat;
        $phpValue = \iggyvolz\vulkan\enum\VkFormat::from($cValue);
        return $phpValue;
    }

    public function setDisplacementBiasAndScaleFormat(\iggyvolz\vulkan\enum\VkFormat $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->displacementBiasAndScaleFormat = $cValue;
    }

    /**
     * VkFormat/
     */
    public function getDisplacementVectorFormat(): \iggyvolz\vulkan\enum\VkFormat
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->displacementVectorFormat;
        $phpValue = \iggyvolz\vulkan\enum\VkFormat::from($cValue);
        return $phpValue;
    }

    public function setDisplacementVectorFormat(\iggyvolz\vulkan\enum\VkFormat $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->displacementVectorFormat = $cValue;
    }

    /**
     * void* /
     */
    public function getDisplacementBiasAndScaleBuffer(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->displacementBiasAndScaleBuffer;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setDisplacementBiasAndScaleBuffer(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->displacementBiasAndScaleBuffer = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getDisplacementBiasAndScaleStride(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->displacementBiasAndScaleStride;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDisplacementBiasAndScaleStride(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->displacementBiasAndScaleStride = $cValue;
    }

    /**
     * void* /
     */
    public function getDisplacementVectorBuffer(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->displacementVectorBuffer;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setDisplacementVectorBuffer(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->displacementVectorBuffer = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getDisplacementVectorStride(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->displacementVectorStride;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDisplacementVectorStride(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->displacementVectorStride = $cValue;
    }

    /**
     * void* /
     */
    public function getDisplacedMicromapPrimitiveFlags(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->displacedMicromapPrimitiveFlags;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setDisplacedMicromapPrimitiveFlags(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->displacedMicromapPrimitiveFlags = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getDisplacedMicromapPrimitiveFlagsStride(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->displacedMicromapPrimitiveFlagsStride;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDisplacedMicromapPrimitiveFlagsStride(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->displacedMicromapPrimitiveFlagsStride = $cValue;
    }

    /**
     * VkIndexType/
     */
    public function getIndexType(): \iggyvolz\vulkan\enum\VkIndexType
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->indexType;
        $phpValue = \iggyvolz\vulkan\enum\VkIndexType::from($cValue);
        return $phpValue;
    }

    public function setIndexType(\iggyvolz\vulkan\enum\VkIndexType $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->indexType = $cValue;
    }

    /**
     * void* /
     */
    public function getIndexBuffer(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->indexBuffer;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setIndexBuffer(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->indexBuffer = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getIndexStride(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->indexStride;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setIndexStride(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->indexStride = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBaseTriangle(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->baseTriangle;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBaseTriangle(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->baseTriangle = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getUsageCountsCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->usageCountsCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setUsageCountsCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->usageCountsCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPUsageCounts(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pUsageCounts;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPUsageCounts(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->pUsageCounts = $cValue;
    }

    /**
     * void* /
     */
    public function getPpUsageCounts(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->ppUsageCounts;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPpUsageCounts(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->ppUsageCounts = $cValue;
    }

    /**
     * VkMicromapEXT/
     */
    public function getMicromap(): VkMicromapEXT
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->micromap;
        $phpValue = new \iggyvolz\vulkan\struct\VkMicromapEXT($cValue, $ffi);
        return $phpValue;
    }

    public function setMicromap(VkMicromapEXT $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->micromap = $cValue;
    }
}
