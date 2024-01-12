<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceVulkanSC10Properties implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "deviceNoDynamicHostAllocations" => $this->getDeviceNoDynamicHostAllocations(),
          "deviceDestroyFreesMemory" => $this->getDeviceDestroyFreesMemory(),
          "commandPoolMultipleCommandBuffersRecording" => $this->getCommandPoolMultipleCommandBuffersRecording(),
          "commandPoolResetCommandBuffer" => $this->getCommandPoolResetCommandBuffer(),
          "commandBufferSimultaneousUse" => $this->getCommandBufferSimultaneousUse(),
          "secondaryCommandBufferNullOrImagelessFramebuffer" => $this->getSecondaryCommandBufferNullOrImagelessFramebuffer(),
          "recycleDescriptorSetMemory" => $this->getRecycleDescriptorSetMemory(),
          "recyclePipelineMemory" => $this->getRecyclePipelineMemory(),
          "maxRenderPassSubpasses" => $this->getMaxRenderPassSubpasses(),
          "maxRenderPassDependencies" => $this->getMaxRenderPassDependencies(),
          "maxSubpassInputAttachments" => $this->getMaxSubpassInputAttachments(),
          "maxSubpassPreserveAttachments" => $this->getMaxSubpassPreserveAttachments(),
          "maxFramebufferAttachments" => $this->getMaxFramebufferAttachments(),
          "maxDescriptorSetLayoutBindings" => $this->getMaxDescriptorSetLayoutBindings(),
          "maxQueryFaultCount" => $this->getMaxQueryFaultCount(),
          "maxCallbackFaultCount" => $this->getMaxCallbackFaultCount(),
          "maxCommandPoolCommandBuffers" => $this->getMaxCommandPoolCommandBuffers(),
          "maxCommandBufferSize" => $this->getMaxCommandBufferSize(),
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
        null|bool $deviceNoDynamicHostAllocations = null,
        null|bool $deviceDestroyFreesMemory = null,
        null|bool $commandPoolMultipleCommandBuffersRecording = null,
        null|bool $commandPoolResetCommandBuffer = null,
        null|bool $commandBufferSimultaneousUse = null,
        null|bool $secondaryCommandBufferNullOrImagelessFramebuffer = null,
        null|bool $recycleDescriptorSetMemory = null,
        null|bool $recyclePipelineMemory = null,
        null|int $maxRenderPassSubpasses = null,
        null|int $maxRenderPassDependencies = null,
        null|int $maxSubpassInputAttachments = null,
        null|int $maxSubpassPreserveAttachments = null,
        null|int $maxFramebufferAttachments = null,
        null|int $maxDescriptorSetLayoutBindings = null,
        null|int $maxQueryFaultCount = null,
        null|int $maxCallbackFaultCount = null,
        null|int $maxCommandPoolCommandBuffers = null,
        null|int $maxCommandBufferSize = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceVulkanSC10Properties', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($deviceNoDynamicHostAllocations)) $self->setDeviceNoDynamicHostAllocations($deviceNoDynamicHostAllocations);
        if(!is_null($deviceDestroyFreesMemory)) $self->setDeviceDestroyFreesMemory($deviceDestroyFreesMemory);
        if(!is_null($commandPoolMultipleCommandBuffersRecording)) $self->setCommandPoolMultipleCommandBuffersRecording($commandPoolMultipleCommandBuffersRecording);
        if(!is_null($commandPoolResetCommandBuffer)) $self->setCommandPoolResetCommandBuffer($commandPoolResetCommandBuffer);
        if(!is_null($commandBufferSimultaneousUse)) $self->setCommandBufferSimultaneousUse($commandBufferSimultaneousUse);
        if(!is_null($secondaryCommandBufferNullOrImagelessFramebuffer)) $self->setSecondaryCommandBufferNullOrImagelessFramebuffer($secondaryCommandBufferNullOrImagelessFramebuffer);
        if(!is_null($recycleDescriptorSetMemory)) $self->setRecycleDescriptorSetMemory($recycleDescriptorSetMemory);
        if(!is_null($recyclePipelineMemory)) $self->setRecyclePipelineMemory($recyclePipelineMemory);
        if(!is_null($maxRenderPassSubpasses)) $self->setMaxRenderPassSubpasses($maxRenderPassSubpasses);
        if(!is_null($maxRenderPassDependencies)) $self->setMaxRenderPassDependencies($maxRenderPassDependencies);
        if(!is_null($maxSubpassInputAttachments)) $self->setMaxSubpassInputAttachments($maxSubpassInputAttachments);
        if(!is_null($maxSubpassPreserveAttachments)) $self->setMaxSubpassPreserveAttachments($maxSubpassPreserveAttachments);
        if(!is_null($maxFramebufferAttachments)) $self->setMaxFramebufferAttachments($maxFramebufferAttachments);
        if(!is_null($maxDescriptorSetLayoutBindings)) $self->setMaxDescriptorSetLayoutBindings($maxDescriptorSetLayoutBindings);
        if(!is_null($maxQueryFaultCount)) $self->setMaxQueryFaultCount($maxQueryFaultCount);
        if(!is_null($maxCallbackFaultCount)) $self->setMaxCallbackFaultCount($maxCallbackFaultCount);
        if(!is_null($maxCommandPoolCommandBuffers)) $self->setMaxCommandPoolCommandBuffers($maxCommandPoolCommandBuffers);
        if(!is_null($maxCommandBufferSize)) $self->setMaxCommandBufferSize($maxCommandBufferSize);
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
    public function getDeviceNoDynamicHostAllocations(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->deviceNoDynamicHostAllocations;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDeviceNoDynamicHostAllocations(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->deviceNoDynamicHostAllocations = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDeviceDestroyFreesMemory(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->deviceDestroyFreesMemory;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDeviceDestroyFreesMemory(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->deviceDestroyFreesMemory = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getCommandPoolMultipleCommandBuffersRecording(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->commandPoolMultipleCommandBuffersRecording;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setCommandPoolMultipleCommandBuffersRecording(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->commandPoolMultipleCommandBuffersRecording = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getCommandPoolResetCommandBuffer(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->commandPoolResetCommandBuffer;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setCommandPoolResetCommandBuffer(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->commandPoolResetCommandBuffer = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getCommandBufferSimultaneousUse(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->commandBufferSimultaneousUse;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setCommandBufferSimultaneousUse(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->commandBufferSimultaneousUse = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSecondaryCommandBufferNullOrImagelessFramebuffer(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->secondaryCommandBufferNullOrImagelessFramebuffer;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSecondaryCommandBufferNullOrImagelessFramebuffer(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->secondaryCommandBufferNullOrImagelessFramebuffer = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getRecycleDescriptorSetMemory(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->recycleDescriptorSetMemory;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setRecycleDescriptorSetMemory(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->recycleDescriptorSetMemory = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getRecyclePipelineMemory(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->recyclePipelineMemory;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setRecyclePipelineMemory(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->recyclePipelineMemory = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxRenderPassSubpasses(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxRenderPassSubpasses;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxRenderPassSubpasses(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxRenderPassSubpasses = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxRenderPassDependencies(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxRenderPassDependencies;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxRenderPassDependencies(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxRenderPassDependencies = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxSubpassInputAttachments(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxSubpassInputAttachments;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxSubpassInputAttachments(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxSubpassInputAttachments = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxSubpassPreserveAttachments(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxSubpassPreserveAttachments;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxSubpassPreserveAttachments(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxSubpassPreserveAttachments = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxFramebufferAttachments(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxFramebufferAttachments;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxFramebufferAttachments(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxFramebufferAttachments = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDescriptorSetLayoutBindings(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxDescriptorSetLayoutBindings;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDescriptorSetLayoutBindings(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDescriptorSetLayoutBindings = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxQueryFaultCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxQueryFaultCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxQueryFaultCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxQueryFaultCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxCallbackFaultCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxCallbackFaultCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxCallbackFaultCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxCallbackFaultCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxCommandPoolCommandBuffers(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxCommandPoolCommandBuffers;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxCommandPoolCommandBuffers(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxCommandPoolCommandBuffers = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getMaxCommandBufferSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxCommandBufferSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxCommandBufferSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxCommandBufferSize = $cValue;
    }
}
