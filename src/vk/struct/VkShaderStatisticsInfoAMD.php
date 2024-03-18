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
        $self = new self( $vulkan->ffi->new('VkShaderStatisticsInfoAMD', false));
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
        $cValue = $this->cdata->shaderStageMask;
        $phpValue = \iggyvolz\vulkan\enum\VkShaderStageFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setShaderStageMask(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkShaderStageFlagBits::toInt(...$phpValue);
        $this->cdata->shaderStageMask = $cValue;
    }

    /**
     * VkShaderResourceUsageAMD/
     */
    public function getResourceUsage(): VkShaderResourceUsageAMD
    {
        $cValue = $this->cdata->resourceUsage;
        $phpValue = new \iggyvolz\vulkan\struct\VkShaderResourceUsageAMD($cValue, $ffi);
        return $phpValue;
    }

    public function setResourceUsage(VkShaderResourceUsageAMD $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->resourceUsage = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getNumPhysicalVgprs(): int
    {
        $cValue = $this->cdata->numPhysicalVgprs;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setNumPhysicalVgprs(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->numPhysicalVgprs = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getNumPhysicalSgprs(): int
    {
        $cValue = $this->cdata->numPhysicalSgprs;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setNumPhysicalSgprs(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->numPhysicalSgprs = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getNumAvailableVgprs(): int
    {
        $cValue = $this->cdata->numAvailableVgprs;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setNumAvailableVgprs(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->numAvailableVgprs = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getNumAvailableSgprs(): int
    {
        $cValue = $this->cdata->numAvailableSgprs;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setNumAvailableSgprs(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->numAvailableSgprs = $cValue;
    }

    /**
     * void* /
     */
    public function getComputeWorkGroupSize(): mixed
    {
        $cValue = $this->cdata->computeWorkGroupSize;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setComputeWorkGroupSize(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->computeWorkGroupSize = $cValue;
    }
}
