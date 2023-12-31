<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceVulkanMemoryModelFeatures
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
        null|bool $vulkanMemoryModel = null,
        null|bool $vulkanMemoryModelDeviceScope = null,
        null|bool $vulkanMemoryModelAvailabilityVisibilityChains = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceVulkanMemoryModelFeatures', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($vulkanMemoryModel)) $self->setVulkanMemoryModel($vulkanMemoryModel);
        if(!is_null($vulkanMemoryModelDeviceScope)) $self->setVulkanMemoryModelDeviceScope($vulkanMemoryModelDeviceScope);
        if(!is_null($vulkanMemoryModelAvailabilityVisibilityChains)) $self->setVulkanMemoryModelAvailabilityVisibilityChains($vulkanMemoryModelAvailabilityVisibilityChains);
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
    public function getVulkanMemoryModel(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->vulkanMemoryModel;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setVulkanMemoryModel(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->vulkanMemoryModel = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getVulkanMemoryModelDeviceScope(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->vulkanMemoryModelDeviceScope;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setVulkanMemoryModelDeviceScope(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->vulkanMemoryModelDeviceScope = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getVulkanMemoryModelAvailabilityVisibilityChains(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->vulkanMemoryModelAvailabilityVisibilityChains;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setVulkanMemoryModelAvailabilityVisibilityChains(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->vulkanMemoryModelAvailabilityVisibilityChains = $cValue;
    }
}
