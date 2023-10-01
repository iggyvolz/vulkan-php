<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkShaderStatisticsInfoAMD
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
        mixed $shaderStageMask = null,
        null|VkShaderResourceUsageAMD $resourceUsage = null,
        null|int $numPhysicalVgprs = null,
        null|int $numPhysicalSgprs = null,
        null|int $numAvailableVgprs = null,
        null|int $numAvailableSgprs = null,
        mixed $computeWorkGroupSize = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkShaderStatisticsInfoAMD', false), $vulkan->ffi);
        if(!is_null($shaderStageMask)) $self->setShaderStageMask($shaderStageMask);
        if(!is_null($resourceUsage)) $self->setResourceUsage($resourceUsage);
        if(!is_null($numPhysicalVgprs)) $self->setNumPhysicalVgprs($numPhysicalVgprs);
        if(!is_null($numPhysicalSgprs)) $self->setNumPhysicalSgprs($numPhysicalSgprs);
        if(!is_null($numAvailableVgprs)) $self->setNumAvailableVgprs($numAvailableVgprs);
        if(!is_null($numAvailableSgprs)) $self->setNumAvailableSgprs($numAvailableSgprs);
        if(!is_null($computeWorkGroupSize)) $self->setComputeWorkGroupSize($computeWorkGroupSize);
        return $self;
    }

    /**
     * void* /
     */
    public function getShaderStageMask(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderStageMask;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setShaderStageMask(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->shaderStageMask = $cValue;
    }

    /**
     * VkShaderResourceUsageAMD/
     */
    public function getResourceUsage(): VkShaderResourceUsageAMD
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->resourceUsage;
        $phpValue = new \iggyvolz\vulkan\struct\VkShaderResourceUsageAMD($cValue, $ffi);
        return $phpValue;
    }

    public function setResourceUsage(VkShaderResourceUsageAMD $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->resourceUsage = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getNumPhysicalVgprs(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->numPhysicalVgprs;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setNumPhysicalVgprs(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->numPhysicalVgprs = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getNumPhysicalSgprs(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->numPhysicalSgprs;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setNumPhysicalSgprs(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->numPhysicalSgprs = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getNumAvailableVgprs(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->numAvailableVgprs;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setNumAvailableVgprs(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->numAvailableVgprs = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getNumAvailableSgprs(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->numAvailableSgprs;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setNumAvailableSgprs(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->numAvailableSgprs = $cValue;
    }

    /**
     * void* /
     */
    public function getComputeWorkGroupSize(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->computeWorkGroupSize;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setComputeWorkGroupSize(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->computeWorkGroupSize = $cValue;
    }
}
