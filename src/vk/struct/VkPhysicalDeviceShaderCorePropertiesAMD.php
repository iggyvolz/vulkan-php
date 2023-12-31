<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceShaderCorePropertiesAMD
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
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|int $shaderEngineCount = null,
        null|int $shaderArraysPerEngineCount = null,
        null|int $computeUnitsPerShaderArray = null,
        null|int $simdPerComputeUnit = null,
        null|int $wavefrontsPerSimd = null,
        null|int $wavefrontSize = null,
        null|int $sgprsPerSimd = null,
        null|int $minSgprAllocation = null,
        null|int $maxSgprAllocation = null,
        null|int $sgprAllocationGranularity = null,
        null|int $vgprsPerSimd = null,
        null|int $minVgprAllocation = null,
        null|int $maxVgprAllocation = null,
        null|int $vgprAllocationGranularity = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceShaderCorePropertiesAMD', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($shaderEngineCount)) $self->setShaderEngineCount($shaderEngineCount);
        if(!is_null($shaderArraysPerEngineCount)) $self->setShaderArraysPerEngineCount($shaderArraysPerEngineCount);
        if(!is_null($computeUnitsPerShaderArray)) $self->setComputeUnitsPerShaderArray($computeUnitsPerShaderArray);
        if(!is_null($simdPerComputeUnit)) $self->setSimdPerComputeUnit($simdPerComputeUnit);
        if(!is_null($wavefrontsPerSimd)) $self->setWavefrontsPerSimd($wavefrontsPerSimd);
        if(!is_null($wavefrontSize)) $self->setWavefrontSize($wavefrontSize);
        if(!is_null($sgprsPerSimd)) $self->setSgprsPerSimd($sgprsPerSimd);
        if(!is_null($minSgprAllocation)) $self->setMinSgprAllocation($minSgprAllocation);
        if(!is_null($maxSgprAllocation)) $self->setMaxSgprAllocation($maxSgprAllocation);
        if(!is_null($sgprAllocationGranularity)) $self->setSgprAllocationGranularity($sgprAllocationGranularity);
        if(!is_null($vgprsPerSimd)) $self->setVgprsPerSimd($vgprsPerSimd);
        if(!is_null($minVgprAllocation)) $self->setMinVgprAllocation($minVgprAllocation);
        if(!is_null($maxVgprAllocation)) $self->setMaxVgprAllocation($maxVgprAllocation);
        if(!is_null($vgprAllocationGranularity)) $self->setVgprAllocationGranularity($vgprAllocationGranularity);
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
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderEngineCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderEngineCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setShaderEngineCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->shaderEngineCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderArraysPerEngineCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderArraysPerEngineCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setShaderArraysPerEngineCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->shaderArraysPerEngineCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getComputeUnitsPerShaderArray(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->computeUnitsPerShaderArray;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setComputeUnitsPerShaderArray(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->computeUnitsPerShaderArray = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSimdPerComputeUnit(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->simdPerComputeUnit;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSimdPerComputeUnit(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->simdPerComputeUnit = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getWavefrontsPerSimd(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->wavefrontsPerSimd;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setWavefrontsPerSimd(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->wavefrontsPerSimd = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getWavefrontSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->wavefrontSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setWavefrontSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->wavefrontSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSgprsPerSimd(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->sgprsPerSimd;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSgprsPerSimd(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->sgprsPerSimd = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMinSgprAllocation(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->minSgprAllocation;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinSgprAllocation(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->minSgprAllocation = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxSgprAllocation(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxSgprAllocation;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxSgprAllocation(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxSgprAllocation = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSgprAllocationGranularity(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->sgprAllocationGranularity;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSgprAllocationGranularity(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->sgprAllocationGranularity = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getVgprsPerSimd(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->vgprsPerSimd;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setVgprsPerSimd(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->vgprsPerSimd = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMinVgprAllocation(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->minVgprAllocation;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinVgprAllocation(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->minVgprAllocation = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxVgprAllocation(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxVgprAllocation;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxVgprAllocation(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxVgprAllocation = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getVgprAllocationGranularity(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->vgprAllocationGranularity;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setVgprAllocationGranularity(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->vgprAllocationGranularity = $cValue;
    }
}
