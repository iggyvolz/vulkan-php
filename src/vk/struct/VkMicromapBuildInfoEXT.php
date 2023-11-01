<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkMicromapBuildInfoEXT
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
        null|\iggyvolz\vulkan\enum\VkMicromapTypeEXT $type = null,
        null|array $flags = null,
        null|\iggyvolz\vulkan\enum\VkBuildMicromapModeEXT $mode = null,
        null|VkMicromapEXT $dstMicromap = null,
        null|int $usageCountsCount = null,
        mixed $pUsageCounts = null,
        mixed $ppUsageCounts = null,
        mixed $data = null,
        mixed $scratchData = null,
        mixed $triangleArray = null,
        null|int $triangleArrayStride = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkMicromapBuildInfoEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($type)) $self->setType($type);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($mode)) $self->setMode($mode);
        if(!is_null($dstMicromap)) $self->setDstMicromap($dstMicromap);
        if(!is_null($usageCountsCount)) $self->setUsageCountsCount($usageCountsCount);
        if(!is_null($pUsageCounts)) $self->setPUsageCounts($pUsageCounts);
        if(!is_null($ppUsageCounts)) $self->setPpUsageCounts($ppUsageCounts);
        if(!is_null($data)) $self->setData($data);
        if(!is_null($scratchData)) $self->setScratchData($scratchData);
        if(!is_null($triangleArray)) $self->setTriangleArray($triangleArray);
        if(!is_null($triangleArrayStride)) $self->setTriangleArrayStride($triangleArrayStride);
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
     * VkMicromapTypeEXT/
     */
    public function getType(): \iggyvolz\vulkan\enum\VkMicromapTypeEXT
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->type;
        $phpValue = \iggyvolz\vulkan\enum\VkMicromapTypeEXT::from($cValue);
        return $phpValue;
    }

    public function setType(\iggyvolz\vulkan\enum\VkMicromapTypeEXT $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->type = $cValue;
    }

    /**
     * VkBuildMicromapFlagsEXT/
     */
    public function getFlags(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkBuildMicromapFlagBitsEXT::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkBuildMicromapFlagBitsEXT::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * VkBuildMicromapModeEXT/
     */
    public function getMode(): \iggyvolz\vulkan\enum\VkBuildMicromapModeEXT
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->mode;
        $phpValue = \iggyvolz\vulkan\enum\VkBuildMicromapModeEXT::from($cValue);
        return $phpValue;
    }

    public function setMode(\iggyvolz\vulkan\enum\VkBuildMicromapModeEXT $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->mode = $cValue;
    }

    /**
     * VkMicromapEXT/
     */
    public function getDstMicromap(): VkMicromapEXT
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->dstMicromap;
        $phpValue = new \iggyvolz\vulkan\struct\VkMicromapEXT($cValue, $ffi);
        return $phpValue;
    }

    public function setDstMicromap(VkMicromapEXT $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->dstMicromap = $cValue;
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
     * void* /
     */
    public function getData(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->data;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setData(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->data = $cValue;
    }

    /**
     * void* /
     */
    public function getScratchData(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->scratchData;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setScratchData(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->scratchData = $cValue;
    }

    /**
     * void* /
     */
    public function getTriangleArray(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->triangleArray;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setTriangleArray(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->triangleArray = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getTriangleArrayStride(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->triangleArrayStride;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setTriangleArrayStride(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->triangleArrayStride = $cValue;
    }
}
