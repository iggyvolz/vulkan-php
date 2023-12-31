<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineCoverageModulationStateCreateInfoNV
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
        null|array $flags = null,
        null|\iggyvolz\vulkan\enum\VkCoverageModulationModeNV $coverageModulationMode = null,
        null|bool $coverageModulationTableEnable = null,
        null|int $coverageModulationTableCount = null,
        null|\iggyvolz\vulkan\util\Pointer $pCoverageModulationTable = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineCoverageModulationStateCreateInfoNV', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($coverageModulationMode)) $self->setCoverageModulationMode($coverageModulationMode);
        if(!is_null($coverageModulationTableEnable)) $self->setCoverageModulationTableEnable($coverageModulationTableEnable);
        if(!is_null($coverageModulationTableCount)) $self->setCoverageModulationTableCount($coverageModulationTableCount);
        if(!is_null($pCoverageModulationTable)) $self->setPCoverageModulationTable($pCoverageModulationTable);
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
     * VkPipelineCoverageModulationStateCreateFlagsNV/
     */
    public function getFlags(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = [];
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = 0;
        $this->cdata->flags = $cValue;
    }

    /**
     * VkCoverageModulationModeNV/
     */
    public function getCoverageModulationMode(): \iggyvolz\vulkan\enum\VkCoverageModulationModeNV
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->coverageModulationMode;
        $phpValue = \iggyvolz\vulkan\enum\VkCoverageModulationModeNV::from($cValue);
        return $phpValue;
    }

    public function setCoverageModulationMode(\iggyvolz\vulkan\enum\VkCoverageModulationModeNV $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->coverageModulationMode = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getCoverageModulationTableEnable(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->coverageModulationTableEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setCoverageModulationTableEnable(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->coverageModulationTableEnable = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getCoverageModulationTableCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->coverageModulationTableCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCoverageModulationTableCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->coverageModulationTableCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPCoverageModulationTable(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pCoverageModulationTable;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPCoverageModulationTable(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pCoverageModulationTable = $cValue;
    }
}
