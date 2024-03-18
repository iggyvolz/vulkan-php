<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkMicromapBuildInfoEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "type" => $this->getType(),
          "flags" => $this->getFlags(),
          "mode" => $this->getMode(),
          "dstMicromap" => $this->getDstMicromap(),
          "usageCountsCount" => $this->getUsageCountsCount(),
          "pUsageCounts" => $this->getPUsageCounts(),
          "ppUsageCounts" => $this->getPpUsageCounts(),
          "data" => $this->getData(),
          "scratchData" => $this->getScratchData(),
          "triangleArray" => $this->getTriangleArray(),
          "triangleArrayStride" => $this->getTriangleArrayStride(),
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
        null|\iggyvolz\vulkan\enum\VkMicromapTypeEXT $type = null,
        null|array $flags = null,
        null|\iggyvolz\vulkan\enum\VkBuildMicromapModeEXT $mode = null,
        null|VkMicromapEXT $dstMicromap = null,
        null|int $usageCountsCount = null,
        null|\iggyvolz\vulkan\util\Pointer $pUsageCounts = null,
        null|\iggyvolz\vulkan\util\Pointer $ppUsageCounts = null,
        mixed $data = null,
        mixed $scratchData = null,
        mixed $triangleArray = null,
        null|int $triangleArrayStride = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkMicromapBuildInfoEXT', false));
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
     * VkMicromapTypeEXT/
     */
    public function getType(): \iggyvolz\vulkan\enum\VkMicromapTypeEXT
    {
        $cValue = $this->cdata->type;
        $phpValue = \iggyvolz\vulkan\enum\VkMicromapTypeEXT::from($cValue);
        return $phpValue;
    }

    public function setType(\iggyvolz\vulkan\enum\VkMicromapTypeEXT $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->type = $cValue;
    }

    /**
     * VkBuildMicromapFlagsEXT/
     */
    public function getFlags(): array
    {
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkBuildMicromapFlagBitsEXT::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkBuildMicromapFlagBitsEXT::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * VkBuildMicromapModeEXT/
     */
    public function getMode(): \iggyvolz\vulkan\enum\VkBuildMicromapModeEXT
    {
        $cValue = $this->cdata->mode;
        $phpValue = \iggyvolz\vulkan\enum\VkBuildMicromapModeEXT::from($cValue);
        return $phpValue;
    }

    public function setMode(\iggyvolz\vulkan\enum\VkBuildMicromapModeEXT $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->mode = $cValue;
    }

    /**
     * VkMicromapEXT/
     */
    public function getDstMicromap(): VkMicromapEXT
    {
        $cValue = $this->cdata->dstMicromap;
        $phpValue = new \iggyvolz\vulkan\struct\VkMicromapEXT($cValue, $ffi);
        return $phpValue;
    }

    public function setDstMicromap(VkMicromapEXT $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->dstMicromap = $cValue;
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
     * void* /
     */
    public function getData(): mixed
    {
        $cValue = $this->cdata->data;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setData(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->data = $cValue;
    }

    /**
     * void* /
     */
    public function getScratchData(): mixed
    {
        $cValue = $this->cdata->scratchData;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setScratchData(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->scratchData = $cValue;
    }

    /**
     * void* /
     */
    public function getTriangleArray(): mixed
    {
        $cValue = $this->cdata->triangleArray;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setTriangleArray(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->triangleArray = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getTriangleArrayStride(): int
    {
        $cValue = $this->cdata->triangleArrayStride;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setTriangleArrayStride(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->triangleArrayStride = $cValue;
    }
}
