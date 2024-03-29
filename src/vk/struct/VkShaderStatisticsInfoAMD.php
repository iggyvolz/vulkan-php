<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkShaderStatisticsInfoAMD implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "shaderStageMask" => $this->getShaderStageMask(),
          "resourceUsage" => $this->getResourceUsage(),
          "numPhysicalVgprs" => $this->getNumPhysicalVgprs(),
          "numPhysicalSgprs" => $this->getNumPhysicalSgprs(),
          "numAvailableVgprs" => $this->getNumAvailableVgprs(),
          "numAvailableSgprs" => $this->getNumAvailableSgprs(),
          "computeWorkGroupSize" => $this->getComputeWorkGroupSize(),
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
        null|array $shaderStageMask = null,
        null|VkShaderResourceUsageAMD $resourceUsage = null,
        null|int $numPhysicalVgprs = null,
        null|int $numPhysicalSgprs = null,
        null|int $numAvailableVgprs = null,
        null|int $numAvailableSgprs = null,
        mixed $computeWorkGroupSize = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkShaderStatisticsInfoAMD', false), $vulkan);
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
     * VkShaderStageFlags/
     */
    public function getShaderStageMask(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->shaderStageMask;
        $phpValue = \iggyvolz\vulkan\enum\VkShaderStageFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setShaderStageMask(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkShaderStageFlagBits::toInt(...$phpValue);
        $this->cdata->shaderStageMask = $cValue;
    }

    /**
     * VkShaderResourceUsageAMD/
     */
    public function getResourceUsage(): VkShaderResourceUsageAMD
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->resourceUsage;
        $phpValue = new \iggyvolz\vulkan\struct\VkShaderResourceUsageAMD($cValue, $ffi);
        return $phpValue;
    }

    public function setResourceUsage(VkShaderResourceUsageAMD $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->resourceUsage = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getNumPhysicalVgprs(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->numPhysicalVgprs;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setNumPhysicalVgprs(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->numPhysicalVgprs = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getNumPhysicalSgprs(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->numPhysicalSgprs;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setNumPhysicalSgprs(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->numPhysicalSgprs = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getNumAvailableVgprs(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->numAvailableVgprs;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setNumAvailableVgprs(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->numAvailableVgprs = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getNumAvailableSgprs(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->numAvailableSgprs;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setNumAvailableSgprs(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->numAvailableSgprs = $cValue;
    }

    /**
     * void* /
     */
    public function getComputeWorkGroupSize(): mixed
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->computeWorkGroupSize;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setComputeWorkGroupSize(mixed $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->computeWorkGroupSize = $cValue;
    }
}
