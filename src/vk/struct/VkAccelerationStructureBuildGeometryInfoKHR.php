<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkAccelerationStructureBuildGeometryInfoKHR implements \JsonSerializable
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
          "srcAccelerationStructure" => $this->getSrcAccelerationStructure(),
          "dstAccelerationStructure" => $this->getDstAccelerationStructure(),
          "geometryCount" => $this->getGeometryCount(),
          "pGeometries" => $this->getPGeometries(),
          "ppGeometries" => $this->getPpGeometries(),
          "scratchData" => $this->getScratchData(),
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
        null|\iggyvolz\vulkan\enum\VkAccelerationStructureTypeKHR $type = null,
        null|array $flags = null,
        null|\iggyvolz\vulkan\enum\VkBuildAccelerationStructureModeKHR $mode = null,
        null|VkAccelerationStructureKHR $srcAccelerationStructure = null,
        null|VkAccelerationStructureKHR $dstAccelerationStructure = null,
        null|int $geometryCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pGeometries = null,
        null|\iggyvolz\vulkan\util\Pointer $ppGeometries = null,
        mixed $scratchData = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkAccelerationStructureBuildGeometryInfoKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($type)) $self->setType($type);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($mode)) $self->setMode($mode);
        if(!is_null($srcAccelerationStructure)) $self->setSrcAccelerationStructure($srcAccelerationStructure);
        if(!is_null($dstAccelerationStructure)) $self->setDstAccelerationStructure($dstAccelerationStructure);
        if(!is_null($geometryCount)) $self->setGeometryCount($geometryCount);
        if(!is_null($pGeometries)) $self->setPGeometries($pGeometries);
        if(!is_null($ppGeometries)) $self->setPpGeometries($ppGeometries);
        if(!is_null($scratchData)) $self->setScratchData($scratchData);
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
     * VkAccelerationStructureTypeKHR/
     */
    public function getType(): \iggyvolz\vulkan\enum\VkAccelerationStructureTypeKHR
    {
        $cValue = $this->cdata->type;
        $phpValue = \iggyvolz\vulkan\enum\VkAccelerationStructureTypeKHR::from($cValue);
        return $phpValue;
    }

    public function setType(\iggyvolz\vulkan\enum\VkAccelerationStructureTypeKHR $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->type = $cValue;
    }

    /**
     * VkBuildAccelerationStructureFlagsKHR/
     */
    public function getFlags(): array
    {
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkBuildAccelerationStructureFlagBitsKHR::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkBuildAccelerationStructureFlagBitsKHR::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * VkBuildAccelerationStructureModeKHR/
     */
    public function getMode(): \iggyvolz\vulkan\enum\VkBuildAccelerationStructureModeKHR
    {
        $cValue = $this->cdata->mode;
        $phpValue = \iggyvolz\vulkan\enum\VkBuildAccelerationStructureModeKHR::from($cValue);
        return $phpValue;
    }

    public function setMode(\iggyvolz\vulkan\enum\VkBuildAccelerationStructureModeKHR $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->mode = $cValue;
    }

    /**
     * VkAccelerationStructureKHR/
     */
    public function getSrcAccelerationStructure(): VkAccelerationStructureKHR
    {
        $cValue = $this->cdata->srcAccelerationStructure;
        $phpValue = new \iggyvolz\vulkan\struct\VkAccelerationStructureKHR($cValue, $ffi);
        return $phpValue;
    }

    public function setSrcAccelerationStructure(VkAccelerationStructureKHR $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->srcAccelerationStructure = $cValue;
    }

    /**
     * VkAccelerationStructureKHR/
     */
    public function getDstAccelerationStructure(): VkAccelerationStructureKHR
    {
        $cValue = $this->cdata->dstAccelerationStructure;
        $phpValue = new \iggyvolz\vulkan\struct\VkAccelerationStructureKHR($cValue, $ffi);
        return $phpValue;
    }

    public function setDstAccelerationStructure(VkAccelerationStructureKHR $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->dstAccelerationStructure = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getGeometryCount(): int
    {
        $cValue = $this->cdata->geometryCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setGeometryCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->geometryCount = $cValue;
    }

    /**
     * VkAccelerationStructureGeometryKHR* /
     */
    public function getPGeometries(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pGeometries;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkAccelerationStructureGeometryKHR', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPGeometries(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pGeometries = $cValue;
    }

    /**
     * void* /
     */
    public function getPpGeometries(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->ppGeometries;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPpGeometries(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->ppGeometries = $cValue;
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
}
