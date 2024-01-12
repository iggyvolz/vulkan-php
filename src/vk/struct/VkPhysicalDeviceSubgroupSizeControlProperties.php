<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceSubgroupSizeControlProperties implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "minSubgroupSize" => $this->getMinSubgroupSize(),
          "maxSubgroupSize" => $this->getMaxSubgroupSize(),
          "maxComputeWorkgroupSubgroups" => $this->getMaxComputeWorkgroupSubgroups(),
          "requiredSubgroupSizeStages" => $this->getRequiredSubgroupSizeStages(),
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
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|int $minSubgroupSize = null,
        null|int $maxSubgroupSize = null,
        null|int $maxComputeWorkgroupSubgroups = null,
        null|array $requiredSubgroupSizeStages = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceSubgroupSizeControlProperties', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($minSubgroupSize)) $self->setMinSubgroupSize($minSubgroupSize);
        if(!is_null($maxSubgroupSize)) $self->setMaxSubgroupSize($maxSubgroupSize);
        if(!is_null($maxComputeWorkgroupSubgroups)) $self->setMaxComputeWorkgroupSubgroups($maxComputeWorkgroupSubgroups);
        if(!is_null($requiredSubgroupSizeStages)) $self->setRequiredSubgroupSizeStages($requiredSubgroupSizeStages);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMinSubgroupSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->minSubgroupSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinSubgroupSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->minSubgroupSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxSubgroupSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxSubgroupSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxSubgroupSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxSubgroupSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxComputeWorkgroupSubgroups(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxComputeWorkgroupSubgroups;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxComputeWorkgroupSubgroups(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxComputeWorkgroupSubgroups = $cValue;
    }

    /**
     * VkShaderStageFlags/
     */
    public function getRequiredSubgroupSizeStages(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->requiredSubgroupSizeStages;
        $phpValue = \iggyvolz\vulkan\enum\VkShaderStageFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setRequiredSubgroupSizeStages(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkShaderStageFlagBits::toInt(...$phpValue);
        $this->cdata->requiredSubgroupSizeStages = $cValue;
    }
}
