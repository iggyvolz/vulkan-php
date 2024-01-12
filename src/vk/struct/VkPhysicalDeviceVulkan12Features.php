<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceVulkan12Features implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "samplerMirrorClampToEdge" => $this->getSamplerMirrorClampToEdge(),
          "drawIndirectCount" => $this->getDrawIndirectCount(),
          "storageBuffer8BitAccess" => $this->getStorageBuffer8BitAccess(),
          "uniformAndStorageBuffer8BitAccess" => $this->getUniformAndStorageBuffer8BitAccess(),
          "storagePushConstant8" => $this->getStoragePushConstant8(),
          "shaderBufferInt64Atomics" => $this->getShaderBufferInt64Atomics(),
          "shaderSharedInt64Atomics" => $this->getShaderSharedInt64Atomics(),
          "shaderFloat16" => $this->getShaderFloat16(),
          "shaderInt8" => $this->getShaderInt8(),
          "descriptorIndexing" => $this->getDescriptorIndexing(),
          "shaderInputAttachmentArrayDynamicIndexing" => $this->getShaderInputAttachmentArrayDynamicIndexing(),
          "shaderUniformTexelBufferArrayDynamicIndexing" => $this->getShaderUniformTexelBufferArrayDynamicIndexing(),
          "shaderStorageTexelBufferArrayDynamicIndexing" => $this->getShaderStorageTexelBufferArrayDynamicIndexing(),
          "shaderUniformBufferArrayNonUniformIndexing" => $this->getShaderUniformBufferArrayNonUniformIndexing(),
          "shaderSampledImageArrayNonUniformIndexing" => $this->getShaderSampledImageArrayNonUniformIndexing(),
          "shaderStorageBufferArrayNonUniformIndexing" => $this->getShaderStorageBufferArrayNonUniformIndexing(),
          "shaderStorageImageArrayNonUniformIndexing" => $this->getShaderStorageImageArrayNonUniformIndexing(),
          "shaderInputAttachmentArrayNonUniformIndexing" => $this->getShaderInputAttachmentArrayNonUniformIndexing(),
          "shaderUniformTexelBufferArrayNonUniformIndexing" => $this->getShaderUniformTexelBufferArrayNonUniformIndexing(),
          "shaderStorageTexelBufferArrayNonUniformIndexing" => $this->getShaderStorageTexelBufferArrayNonUniformIndexing(),
          "descriptorBindingUniformBufferUpdateAfterBind" => $this->getDescriptorBindingUniformBufferUpdateAfterBind(),
          "descriptorBindingSampledImageUpdateAfterBind" => $this->getDescriptorBindingSampledImageUpdateAfterBind(),
          "descriptorBindingStorageImageUpdateAfterBind" => $this->getDescriptorBindingStorageImageUpdateAfterBind(),
          "descriptorBindingStorageBufferUpdateAfterBind" => $this->getDescriptorBindingStorageBufferUpdateAfterBind(),
          "descriptorBindingUniformTexelBufferUpdateAfterBind" => $this->getDescriptorBindingUniformTexelBufferUpdateAfterBind(),
          "descriptorBindingStorageTexelBufferUpdateAfterBind" => $this->getDescriptorBindingStorageTexelBufferUpdateAfterBind(),
          "descriptorBindingUpdateUnusedWhilePending" => $this->getDescriptorBindingUpdateUnusedWhilePending(),
          "descriptorBindingPartiallyBound" => $this->getDescriptorBindingPartiallyBound(),
          "descriptorBindingVariableDescriptorCount" => $this->getDescriptorBindingVariableDescriptorCount(),
          "runtimeDescriptorArray" => $this->getRuntimeDescriptorArray(),
          "samplerFilterMinmax" => $this->getSamplerFilterMinmax(),
          "scalarBlockLayout" => $this->getScalarBlockLayout(),
          "imagelessFramebuffer" => $this->getImagelessFramebuffer(),
          "uniformBufferStandardLayout" => $this->getUniformBufferStandardLayout(),
          "shaderSubgroupExtendedTypes" => $this->getShaderSubgroupExtendedTypes(),
          "separateDepthStencilLayouts" => $this->getSeparateDepthStencilLayouts(),
          "hostQueryReset" => $this->getHostQueryReset(),
          "timelineSemaphore" => $this->getTimelineSemaphore(),
          "bufferDeviceAddress" => $this->getBufferDeviceAddress(),
          "bufferDeviceAddressCaptureReplay" => $this->getBufferDeviceAddressCaptureReplay(),
          "bufferDeviceAddressMultiDevice" => $this->getBufferDeviceAddressMultiDevice(),
          "vulkanMemoryModel" => $this->getVulkanMemoryModel(),
          "vulkanMemoryModelDeviceScope" => $this->getVulkanMemoryModelDeviceScope(),
          "vulkanMemoryModelAvailabilityVisibilityChains" => $this->getVulkanMemoryModelAvailabilityVisibilityChains(),
          "shaderOutputViewportIndex" => $this->getShaderOutputViewportIndex(),
          "shaderOutputLayer" => $this->getShaderOutputLayer(),
          "subgroupBroadcastDynamicId" => $this->getSubgroupBroadcastDynamicId(),
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
        null|bool $samplerMirrorClampToEdge = null,
        null|bool $drawIndirectCount = null,
        null|bool $storageBuffer8BitAccess = null,
        null|bool $uniformAndStorageBuffer8BitAccess = null,
        null|bool $storagePushConstant8 = null,
        null|bool $shaderBufferInt64Atomics = null,
        null|bool $shaderSharedInt64Atomics = null,
        null|bool $shaderFloat16 = null,
        null|bool $shaderInt8 = null,
        null|bool $descriptorIndexing = null,
        null|bool $shaderInputAttachmentArrayDynamicIndexing = null,
        null|bool $shaderUniformTexelBufferArrayDynamicIndexing = null,
        null|bool $shaderStorageTexelBufferArrayDynamicIndexing = null,
        null|bool $shaderUniformBufferArrayNonUniformIndexing = null,
        null|bool $shaderSampledImageArrayNonUniformIndexing = null,
        null|bool $shaderStorageBufferArrayNonUniformIndexing = null,
        null|bool $shaderStorageImageArrayNonUniformIndexing = null,
        null|bool $shaderInputAttachmentArrayNonUniformIndexing = null,
        null|bool $shaderUniformTexelBufferArrayNonUniformIndexing = null,
        null|bool $shaderStorageTexelBufferArrayNonUniformIndexing = null,
        null|bool $descriptorBindingUniformBufferUpdateAfterBind = null,
        null|bool $descriptorBindingSampledImageUpdateAfterBind = null,
        null|bool $descriptorBindingStorageImageUpdateAfterBind = null,
        null|bool $descriptorBindingStorageBufferUpdateAfterBind = null,
        null|bool $descriptorBindingUniformTexelBufferUpdateAfterBind = null,
        null|bool $descriptorBindingStorageTexelBufferUpdateAfterBind = null,
        null|bool $descriptorBindingUpdateUnusedWhilePending = null,
        null|bool $descriptorBindingPartiallyBound = null,
        null|bool $descriptorBindingVariableDescriptorCount = null,
        null|bool $runtimeDescriptorArray = null,
        null|bool $samplerFilterMinmax = null,
        null|bool $scalarBlockLayout = null,
        null|bool $imagelessFramebuffer = null,
        null|bool $uniformBufferStandardLayout = null,
        null|bool $shaderSubgroupExtendedTypes = null,
        null|bool $separateDepthStencilLayouts = null,
        null|bool $hostQueryReset = null,
        null|bool $timelineSemaphore = null,
        null|bool $bufferDeviceAddress = null,
        null|bool $bufferDeviceAddressCaptureReplay = null,
        null|bool $bufferDeviceAddressMultiDevice = null,
        null|bool $vulkanMemoryModel = null,
        null|bool $vulkanMemoryModelDeviceScope = null,
        null|bool $vulkanMemoryModelAvailabilityVisibilityChains = null,
        null|bool $shaderOutputViewportIndex = null,
        null|bool $shaderOutputLayer = null,
        null|bool $subgroupBroadcastDynamicId = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceVulkan12Features', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($samplerMirrorClampToEdge)) $self->setSamplerMirrorClampToEdge($samplerMirrorClampToEdge);
        if(!is_null($drawIndirectCount)) $self->setDrawIndirectCount($drawIndirectCount);
        if(!is_null($storageBuffer8BitAccess)) $self->setStorageBuffer8BitAccess($storageBuffer8BitAccess);
        if(!is_null($uniformAndStorageBuffer8BitAccess)) $self->setUniformAndStorageBuffer8BitAccess($uniformAndStorageBuffer8BitAccess);
        if(!is_null($storagePushConstant8)) $self->setStoragePushConstant8($storagePushConstant8);
        if(!is_null($shaderBufferInt64Atomics)) $self->setShaderBufferInt64Atomics($shaderBufferInt64Atomics);
        if(!is_null($shaderSharedInt64Atomics)) $self->setShaderSharedInt64Atomics($shaderSharedInt64Atomics);
        if(!is_null($shaderFloat16)) $self->setShaderFloat16($shaderFloat16);
        if(!is_null($shaderInt8)) $self->setShaderInt8($shaderInt8);
        if(!is_null($descriptorIndexing)) $self->setDescriptorIndexing($descriptorIndexing);
        if(!is_null($shaderInputAttachmentArrayDynamicIndexing)) $self->setShaderInputAttachmentArrayDynamicIndexing($shaderInputAttachmentArrayDynamicIndexing);
        if(!is_null($shaderUniformTexelBufferArrayDynamicIndexing)) $self->setShaderUniformTexelBufferArrayDynamicIndexing($shaderUniformTexelBufferArrayDynamicIndexing);
        if(!is_null($shaderStorageTexelBufferArrayDynamicIndexing)) $self->setShaderStorageTexelBufferArrayDynamicIndexing($shaderStorageTexelBufferArrayDynamicIndexing);
        if(!is_null($shaderUniformBufferArrayNonUniformIndexing)) $self->setShaderUniformBufferArrayNonUniformIndexing($shaderUniformBufferArrayNonUniformIndexing);
        if(!is_null($shaderSampledImageArrayNonUniformIndexing)) $self->setShaderSampledImageArrayNonUniformIndexing($shaderSampledImageArrayNonUniformIndexing);
        if(!is_null($shaderStorageBufferArrayNonUniformIndexing)) $self->setShaderStorageBufferArrayNonUniformIndexing($shaderStorageBufferArrayNonUniformIndexing);
        if(!is_null($shaderStorageImageArrayNonUniformIndexing)) $self->setShaderStorageImageArrayNonUniformIndexing($shaderStorageImageArrayNonUniformIndexing);
        if(!is_null($shaderInputAttachmentArrayNonUniformIndexing)) $self->setShaderInputAttachmentArrayNonUniformIndexing($shaderInputAttachmentArrayNonUniformIndexing);
        if(!is_null($shaderUniformTexelBufferArrayNonUniformIndexing)) $self->setShaderUniformTexelBufferArrayNonUniformIndexing($shaderUniformTexelBufferArrayNonUniformIndexing);
        if(!is_null($shaderStorageTexelBufferArrayNonUniformIndexing)) $self->setShaderStorageTexelBufferArrayNonUniformIndexing($shaderStorageTexelBufferArrayNonUniformIndexing);
        if(!is_null($descriptorBindingUniformBufferUpdateAfterBind)) $self->setDescriptorBindingUniformBufferUpdateAfterBind($descriptorBindingUniformBufferUpdateAfterBind);
        if(!is_null($descriptorBindingSampledImageUpdateAfterBind)) $self->setDescriptorBindingSampledImageUpdateAfterBind($descriptorBindingSampledImageUpdateAfterBind);
        if(!is_null($descriptorBindingStorageImageUpdateAfterBind)) $self->setDescriptorBindingStorageImageUpdateAfterBind($descriptorBindingStorageImageUpdateAfterBind);
        if(!is_null($descriptorBindingStorageBufferUpdateAfterBind)) $self->setDescriptorBindingStorageBufferUpdateAfterBind($descriptorBindingStorageBufferUpdateAfterBind);
        if(!is_null($descriptorBindingUniformTexelBufferUpdateAfterBind)) $self->setDescriptorBindingUniformTexelBufferUpdateAfterBind($descriptorBindingUniformTexelBufferUpdateAfterBind);
        if(!is_null($descriptorBindingStorageTexelBufferUpdateAfterBind)) $self->setDescriptorBindingStorageTexelBufferUpdateAfterBind($descriptorBindingStorageTexelBufferUpdateAfterBind);
        if(!is_null($descriptorBindingUpdateUnusedWhilePending)) $self->setDescriptorBindingUpdateUnusedWhilePending($descriptorBindingUpdateUnusedWhilePending);
        if(!is_null($descriptorBindingPartiallyBound)) $self->setDescriptorBindingPartiallyBound($descriptorBindingPartiallyBound);
        if(!is_null($descriptorBindingVariableDescriptorCount)) $self->setDescriptorBindingVariableDescriptorCount($descriptorBindingVariableDescriptorCount);
        if(!is_null($runtimeDescriptorArray)) $self->setRuntimeDescriptorArray($runtimeDescriptorArray);
        if(!is_null($samplerFilterMinmax)) $self->setSamplerFilterMinmax($samplerFilterMinmax);
        if(!is_null($scalarBlockLayout)) $self->setScalarBlockLayout($scalarBlockLayout);
        if(!is_null($imagelessFramebuffer)) $self->setImagelessFramebuffer($imagelessFramebuffer);
        if(!is_null($uniformBufferStandardLayout)) $self->setUniformBufferStandardLayout($uniformBufferStandardLayout);
        if(!is_null($shaderSubgroupExtendedTypes)) $self->setShaderSubgroupExtendedTypes($shaderSubgroupExtendedTypes);
        if(!is_null($separateDepthStencilLayouts)) $self->setSeparateDepthStencilLayouts($separateDepthStencilLayouts);
        if(!is_null($hostQueryReset)) $self->setHostQueryReset($hostQueryReset);
        if(!is_null($timelineSemaphore)) $self->setTimelineSemaphore($timelineSemaphore);
        if(!is_null($bufferDeviceAddress)) $self->setBufferDeviceAddress($bufferDeviceAddress);
        if(!is_null($bufferDeviceAddressCaptureReplay)) $self->setBufferDeviceAddressCaptureReplay($bufferDeviceAddressCaptureReplay);
        if(!is_null($bufferDeviceAddressMultiDevice)) $self->setBufferDeviceAddressMultiDevice($bufferDeviceAddressMultiDevice);
        if(!is_null($vulkanMemoryModel)) $self->setVulkanMemoryModel($vulkanMemoryModel);
        if(!is_null($vulkanMemoryModelDeviceScope)) $self->setVulkanMemoryModelDeviceScope($vulkanMemoryModelDeviceScope);
        if(!is_null($vulkanMemoryModelAvailabilityVisibilityChains)) $self->setVulkanMemoryModelAvailabilityVisibilityChains($vulkanMemoryModelAvailabilityVisibilityChains);
        if(!is_null($shaderOutputViewportIndex)) $self->setShaderOutputViewportIndex($shaderOutputViewportIndex);
        if(!is_null($shaderOutputLayer)) $self->setShaderOutputLayer($shaderOutputLayer);
        if(!is_null($subgroupBroadcastDynamicId)) $self->setSubgroupBroadcastDynamicId($subgroupBroadcastDynamicId);
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
    public function getSamplerMirrorClampToEdge(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->samplerMirrorClampToEdge;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSamplerMirrorClampToEdge(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->samplerMirrorClampToEdge = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDrawIndirectCount(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->drawIndirectCount;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDrawIndirectCount(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->drawIndirectCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStorageBuffer8BitAccess(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->storageBuffer8BitAccess;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setStorageBuffer8BitAccess(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->storageBuffer8BitAccess = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getUniformAndStorageBuffer8BitAccess(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->uniformAndStorageBuffer8BitAccess;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setUniformAndStorageBuffer8BitAccess(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->uniformAndStorageBuffer8BitAccess = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStoragePushConstant8(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->storagePushConstant8;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setStoragePushConstant8(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->storagePushConstant8 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderBufferInt64Atomics(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->shaderBufferInt64Atomics;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderBufferInt64Atomics(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderBufferInt64Atomics = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderSharedInt64Atomics(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->shaderSharedInt64Atomics;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderSharedInt64Atomics(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderSharedInt64Atomics = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderFloat16(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->shaderFloat16;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderFloat16(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderFloat16 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderInt8(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->shaderInt8;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderInt8(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderInt8 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorIndexing(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->descriptorIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorIndexing(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderInputAttachmentArrayDynamicIndexing(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->shaderInputAttachmentArrayDynamicIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderInputAttachmentArrayDynamicIndexing(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderInputAttachmentArrayDynamicIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderUniformTexelBufferArrayDynamicIndexing(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->shaderUniformTexelBufferArrayDynamicIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderUniformTexelBufferArrayDynamicIndexing(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderUniformTexelBufferArrayDynamicIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderStorageTexelBufferArrayDynamicIndexing(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->shaderStorageTexelBufferArrayDynamicIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderStorageTexelBufferArrayDynamicIndexing(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderStorageTexelBufferArrayDynamicIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderUniformBufferArrayNonUniformIndexing(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->shaderUniformBufferArrayNonUniformIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderUniformBufferArrayNonUniformIndexing(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderUniformBufferArrayNonUniformIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderSampledImageArrayNonUniformIndexing(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->shaderSampledImageArrayNonUniformIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderSampledImageArrayNonUniformIndexing(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderSampledImageArrayNonUniformIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderStorageBufferArrayNonUniformIndexing(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->shaderStorageBufferArrayNonUniformIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderStorageBufferArrayNonUniformIndexing(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderStorageBufferArrayNonUniformIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderStorageImageArrayNonUniformIndexing(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->shaderStorageImageArrayNonUniformIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderStorageImageArrayNonUniformIndexing(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderStorageImageArrayNonUniformIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderInputAttachmentArrayNonUniformIndexing(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->shaderInputAttachmentArrayNonUniformIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderInputAttachmentArrayNonUniformIndexing(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderInputAttachmentArrayNonUniformIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderUniformTexelBufferArrayNonUniformIndexing(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->shaderUniformTexelBufferArrayNonUniformIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderUniformTexelBufferArrayNonUniformIndexing(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderUniformTexelBufferArrayNonUniformIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderStorageTexelBufferArrayNonUniformIndexing(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->shaderStorageTexelBufferArrayNonUniformIndexing;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderStorageTexelBufferArrayNonUniformIndexing(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderStorageTexelBufferArrayNonUniformIndexing = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorBindingUniformBufferUpdateAfterBind(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->descriptorBindingUniformBufferUpdateAfterBind;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorBindingUniformBufferUpdateAfterBind(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorBindingUniformBufferUpdateAfterBind = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorBindingSampledImageUpdateAfterBind(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->descriptorBindingSampledImageUpdateAfterBind;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorBindingSampledImageUpdateAfterBind(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorBindingSampledImageUpdateAfterBind = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorBindingStorageImageUpdateAfterBind(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->descriptorBindingStorageImageUpdateAfterBind;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorBindingStorageImageUpdateAfterBind(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorBindingStorageImageUpdateAfterBind = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorBindingStorageBufferUpdateAfterBind(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->descriptorBindingStorageBufferUpdateAfterBind;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorBindingStorageBufferUpdateAfterBind(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorBindingStorageBufferUpdateAfterBind = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorBindingUniformTexelBufferUpdateAfterBind(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->descriptorBindingUniformTexelBufferUpdateAfterBind;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorBindingUniformTexelBufferUpdateAfterBind(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorBindingUniformTexelBufferUpdateAfterBind = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorBindingStorageTexelBufferUpdateAfterBind(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->descriptorBindingStorageTexelBufferUpdateAfterBind;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorBindingStorageTexelBufferUpdateAfterBind(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorBindingStorageTexelBufferUpdateAfterBind = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorBindingUpdateUnusedWhilePending(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->descriptorBindingUpdateUnusedWhilePending;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorBindingUpdateUnusedWhilePending(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorBindingUpdateUnusedWhilePending = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorBindingPartiallyBound(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->descriptorBindingPartiallyBound;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorBindingPartiallyBound(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorBindingPartiallyBound = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorBindingVariableDescriptorCount(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->descriptorBindingVariableDescriptorCount;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorBindingVariableDescriptorCount(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorBindingVariableDescriptorCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getRuntimeDescriptorArray(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->runtimeDescriptorArray;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setRuntimeDescriptorArray(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->runtimeDescriptorArray = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSamplerFilterMinmax(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->samplerFilterMinmax;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSamplerFilterMinmax(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->samplerFilterMinmax = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getScalarBlockLayout(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->scalarBlockLayout;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setScalarBlockLayout(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->scalarBlockLayout = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getImagelessFramebuffer(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->imagelessFramebuffer;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setImagelessFramebuffer(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->imagelessFramebuffer = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getUniformBufferStandardLayout(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->uniformBufferStandardLayout;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setUniformBufferStandardLayout(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->uniformBufferStandardLayout = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderSubgroupExtendedTypes(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->shaderSubgroupExtendedTypes;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderSubgroupExtendedTypes(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderSubgroupExtendedTypes = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSeparateDepthStencilLayouts(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->separateDepthStencilLayouts;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSeparateDepthStencilLayouts(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->separateDepthStencilLayouts = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getHostQueryReset(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->hostQueryReset;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setHostQueryReset(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->hostQueryReset = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getTimelineSemaphore(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->timelineSemaphore;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setTimelineSemaphore(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->timelineSemaphore = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBufferDeviceAddress(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->bufferDeviceAddress;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setBufferDeviceAddress(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->bufferDeviceAddress = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBufferDeviceAddressCaptureReplay(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->bufferDeviceAddressCaptureReplay;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setBufferDeviceAddressCaptureReplay(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->bufferDeviceAddressCaptureReplay = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBufferDeviceAddressMultiDevice(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->bufferDeviceAddressMultiDevice;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setBufferDeviceAddressMultiDevice(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->bufferDeviceAddressMultiDevice = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getVulkanMemoryModel(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->vulkanMemoryModel;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setVulkanMemoryModel(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->vulkanMemoryModel = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getVulkanMemoryModelDeviceScope(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->vulkanMemoryModelDeviceScope;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setVulkanMemoryModelDeviceScope(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->vulkanMemoryModelDeviceScope = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getVulkanMemoryModelAvailabilityVisibilityChains(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->vulkanMemoryModelAvailabilityVisibilityChains;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setVulkanMemoryModelAvailabilityVisibilityChains(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->vulkanMemoryModelAvailabilityVisibilityChains = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderOutputViewportIndex(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->shaderOutputViewportIndex;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderOutputViewportIndex(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderOutputViewportIndex = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderOutputLayer(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->shaderOutputLayer;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderOutputLayer(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderOutputLayer = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSubgroupBroadcastDynamicId(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->subgroupBroadcastDynamicId;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSubgroupBroadcastDynamicId(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->subgroupBroadcastDynamicId = $cValue;
    }
}
