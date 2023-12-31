<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDeviceObjectReservationCreateInfo
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
        null|int $pipelineCacheCreateInfoCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pPipelineCacheCreateInfos = null,
        null|int $pipelinePoolSizeCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pPipelinePoolSizes = null,
        null|int $semaphoreRequestCount = null,
        null|int $commandBufferRequestCount = null,
        null|int $fenceRequestCount = null,
        null|int $deviceMemoryRequestCount = null,
        null|int $bufferRequestCount = null,
        null|int $imageRequestCount = null,
        null|int $eventRequestCount = null,
        null|int $queryPoolRequestCount = null,
        null|int $bufferViewRequestCount = null,
        null|int $imageViewRequestCount = null,
        null|int $layeredImageViewRequestCount = null,
        null|int $pipelineCacheRequestCount = null,
        null|int $pipelineLayoutRequestCount = null,
        null|int $renderPassRequestCount = null,
        null|int $graphicsPipelineRequestCount = null,
        null|int $computePipelineRequestCount = null,
        null|int $descriptorSetLayoutRequestCount = null,
        null|int $samplerRequestCount = null,
        null|int $descriptorPoolRequestCount = null,
        null|int $descriptorSetRequestCount = null,
        null|int $framebufferRequestCount = null,
        null|int $commandPoolRequestCount = null,
        null|int $samplerYcbcrConversionRequestCount = null,
        null|int $surfaceRequestCount = null,
        null|int $swapchainRequestCount = null,
        null|int $displayModeRequestCount = null,
        null|int $subpassDescriptionRequestCount = null,
        null|int $attachmentDescriptionRequestCount = null,
        null|int $descriptorSetLayoutBindingRequestCount = null,
        null|int $descriptorSetLayoutBindingLimit = null,
        null|int $maxImageViewMipLevels = null,
        null|int $maxImageViewArrayLayers = null,
        null|int $maxLayeredImageViewMipLevels = null,
        null|int $maxOcclusionQueriesPerPool = null,
        null|int $maxPipelineStatisticsQueriesPerPool = null,
        null|int $maxTimestampQueriesPerPool = null,
        null|int $maxImmutableSamplersPerDescriptorSetLayout = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDeviceObjectReservationCreateInfo', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($pipelineCacheCreateInfoCount)) $self->setPipelineCacheCreateInfoCount($pipelineCacheCreateInfoCount);
        if(!is_null($pPipelineCacheCreateInfos)) $self->setPPipelineCacheCreateInfos($pPipelineCacheCreateInfos);
        if(!is_null($pipelinePoolSizeCount)) $self->setPipelinePoolSizeCount($pipelinePoolSizeCount);
        if(!is_null($pPipelinePoolSizes)) $self->setPPipelinePoolSizes($pPipelinePoolSizes);
        if(!is_null($semaphoreRequestCount)) $self->setSemaphoreRequestCount($semaphoreRequestCount);
        if(!is_null($commandBufferRequestCount)) $self->setCommandBufferRequestCount($commandBufferRequestCount);
        if(!is_null($fenceRequestCount)) $self->setFenceRequestCount($fenceRequestCount);
        if(!is_null($deviceMemoryRequestCount)) $self->setDeviceMemoryRequestCount($deviceMemoryRequestCount);
        if(!is_null($bufferRequestCount)) $self->setBufferRequestCount($bufferRequestCount);
        if(!is_null($imageRequestCount)) $self->setImageRequestCount($imageRequestCount);
        if(!is_null($eventRequestCount)) $self->setEventRequestCount($eventRequestCount);
        if(!is_null($queryPoolRequestCount)) $self->setQueryPoolRequestCount($queryPoolRequestCount);
        if(!is_null($bufferViewRequestCount)) $self->setBufferViewRequestCount($bufferViewRequestCount);
        if(!is_null($imageViewRequestCount)) $self->setImageViewRequestCount($imageViewRequestCount);
        if(!is_null($layeredImageViewRequestCount)) $self->setLayeredImageViewRequestCount($layeredImageViewRequestCount);
        if(!is_null($pipelineCacheRequestCount)) $self->setPipelineCacheRequestCount($pipelineCacheRequestCount);
        if(!is_null($pipelineLayoutRequestCount)) $self->setPipelineLayoutRequestCount($pipelineLayoutRequestCount);
        if(!is_null($renderPassRequestCount)) $self->setRenderPassRequestCount($renderPassRequestCount);
        if(!is_null($graphicsPipelineRequestCount)) $self->setGraphicsPipelineRequestCount($graphicsPipelineRequestCount);
        if(!is_null($computePipelineRequestCount)) $self->setComputePipelineRequestCount($computePipelineRequestCount);
        if(!is_null($descriptorSetLayoutRequestCount)) $self->setDescriptorSetLayoutRequestCount($descriptorSetLayoutRequestCount);
        if(!is_null($samplerRequestCount)) $self->setSamplerRequestCount($samplerRequestCount);
        if(!is_null($descriptorPoolRequestCount)) $self->setDescriptorPoolRequestCount($descriptorPoolRequestCount);
        if(!is_null($descriptorSetRequestCount)) $self->setDescriptorSetRequestCount($descriptorSetRequestCount);
        if(!is_null($framebufferRequestCount)) $self->setFramebufferRequestCount($framebufferRequestCount);
        if(!is_null($commandPoolRequestCount)) $self->setCommandPoolRequestCount($commandPoolRequestCount);
        if(!is_null($samplerYcbcrConversionRequestCount)) $self->setSamplerYcbcrConversionRequestCount($samplerYcbcrConversionRequestCount);
        if(!is_null($surfaceRequestCount)) $self->setSurfaceRequestCount($surfaceRequestCount);
        if(!is_null($swapchainRequestCount)) $self->setSwapchainRequestCount($swapchainRequestCount);
        if(!is_null($displayModeRequestCount)) $self->setDisplayModeRequestCount($displayModeRequestCount);
        if(!is_null($subpassDescriptionRequestCount)) $self->setSubpassDescriptionRequestCount($subpassDescriptionRequestCount);
        if(!is_null($attachmentDescriptionRequestCount)) $self->setAttachmentDescriptionRequestCount($attachmentDescriptionRequestCount);
        if(!is_null($descriptorSetLayoutBindingRequestCount)) $self->setDescriptorSetLayoutBindingRequestCount($descriptorSetLayoutBindingRequestCount);
        if(!is_null($descriptorSetLayoutBindingLimit)) $self->setDescriptorSetLayoutBindingLimit($descriptorSetLayoutBindingLimit);
        if(!is_null($maxImageViewMipLevels)) $self->setMaxImageViewMipLevels($maxImageViewMipLevels);
        if(!is_null($maxImageViewArrayLayers)) $self->setMaxImageViewArrayLayers($maxImageViewArrayLayers);
        if(!is_null($maxLayeredImageViewMipLevels)) $self->setMaxLayeredImageViewMipLevels($maxLayeredImageViewMipLevels);
        if(!is_null($maxOcclusionQueriesPerPool)) $self->setMaxOcclusionQueriesPerPool($maxOcclusionQueriesPerPool);
        if(!is_null($maxPipelineStatisticsQueriesPerPool)) $self->setMaxPipelineStatisticsQueriesPerPool($maxPipelineStatisticsQueriesPerPool);
        if(!is_null($maxTimestampQueriesPerPool)) $self->setMaxTimestampQueriesPerPool($maxTimestampQueriesPerPool);
        if(!is_null($maxImmutableSamplersPerDescriptorSetLayout)) $self->setMaxImmutableSamplersPerDescriptorSetLayout($maxImmutableSamplersPerDescriptorSetLayout);
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
    public function getPipelineCacheCreateInfoCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pipelineCacheCreateInfoCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPipelineCacheCreateInfoCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->pipelineCacheCreateInfoCount = $cValue;
    }

    /**
     * VkPipelineCacheCreateInfo* /
     */
    public function getPPipelineCacheCreateInfos(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pPipelineCacheCreateInfos;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkPipelineCacheCreateInfo', $cValue, $ffi);
        return $phpValue;
    }

    public function setPPipelineCacheCreateInfos(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pPipelineCacheCreateInfos = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPipelinePoolSizeCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pipelinePoolSizeCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPipelinePoolSizeCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->pipelinePoolSizeCount = $cValue;
    }

    /**
     * VkPipelinePoolSize* /
     */
    public function getPPipelinePoolSizes(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pPipelinePoolSizes;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkPipelinePoolSize', $cValue, $ffi);
        return $phpValue;
    }

    public function setPPipelinePoolSizes(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pPipelinePoolSizes = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSemaphoreRequestCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->semaphoreRequestCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSemaphoreRequestCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->semaphoreRequestCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getCommandBufferRequestCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->commandBufferRequestCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCommandBufferRequestCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->commandBufferRequestCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFenceRequestCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->fenceRequestCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setFenceRequestCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->fenceRequestCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDeviceMemoryRequestCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->deviceMemoryRequestCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDeviceMemoryRequestCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->deviceMemoryRequestCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBufferRequestCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->bufferRequestCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBufferRequestCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->bufferRequestCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getImageRequestCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->imageRequestCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setImageRequestCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->imageRequestCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getEventRequestCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->eventRequestCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setEventRequestCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->eventRequestCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getQueryPoolRequestCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->queryPoolRequestCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setQueryPoolRequestCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->queryPoolRequestCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBufferViewRequestCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->bufferViewRequestCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBufferViewRequestCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->bufferViewRequestCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getImageViewRequestCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->imageViewRequestCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setImageViewRequestCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->imageViewRequestCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getLayeredImageViewRequestCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->layeredImageViewRequestCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setLayeredImageViewRequestCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->layeredImageViewRequestCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPipelineCacheRequestCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pipelineCacheRequestCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPipelineCacheRequestCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->pipelineCacheRequestCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPipelineLayoutRequestCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pipelineLayoutRequestCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPipelineLayoutRequestCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->pipelineLayoutRequestCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getRenderPassRequestCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->renderPassRequestCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setRenderPassRequestCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->renderPassRequestCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getGraphicsPipelineRequestCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->graphicsPipelineRequestCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setGraphicsPipelineRequestCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->graphicsPipelineRequestCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getComputePipelineRequestCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->computePipelineRequestCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setComputePipelineRequestCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->computePipelineRequestCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorSetLayoutRequestCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->descriptorSetLayoutRequestCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDescriptorSetLayoutRequestCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->descriptorSetLayoutRequestCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSamplerRequestCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->samplerRequestCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSamplerRequestCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->samplerRequestCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorPoolRequestCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->descriptorPoolRequestCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDescriptorPoolRequestCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->descriptorPoolRequestCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorSetRequestCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->descriptorSetRequestCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDescriptorSetRequestCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->descriptorSetRequestCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFramebufferRequestCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->framebufferRequestCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setFramebufferRequestCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->framebufferRequestCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getCommandPoolRequestCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->commandPoolRequestCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCommandPoolRequestCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->commandPoolRequestCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSamplerYcbcrConversionRequestCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->samplerYcbcrConversionRequestCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSamplerYcbcrConversionRequestCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->samplerYcbcrConversionRequestCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSurfaceRequestCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->surfaceRequestCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSurfaceRequestCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->surfaceRequestCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSwapchainRequestCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->swapchainRequestCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSwapchainRequestCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->swapchainRequestCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDisplayModeRequestCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->displayModeRequestCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDisplayModeRequestCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->displayModeRequestCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSubpassDescriptionRequestCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->subpassDescriptionRequestCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSubpassDescriptionRequestCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->subpassDescriptionRequestCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getAttachmentDescriptionRequestCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->attachmentDescriptionRequestCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setAttachmentDescriptionRequestCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->attachmentDescriptionRequestCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorSetLayoutBindingRequestCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->descriptorSetLayoutBindingRequestCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDescriptorSetLayoutBindingRequestCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->descriptorSetLayoutBindingRequestCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorSetLayoutBindingLimit(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->descriptorSetLayoutBindingLimit;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDescriptorSetLayoutBindingLimit(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->descriptorSetLayoutBindingLimit = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxImageViewMipLevels(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxImageViewMipLevels;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxImageViewMipLevels(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxImageViewMipLevels = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxImageViewArrayLayers(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxImageViewArrayLayers;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxImageViewArrayLayers(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxImageViewArrayLayers = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxLayeredImageViewMipLevels(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxLayeredImageViewMipLevels;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxLayeredImageViewMipLevels(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxLayeredImageViewMipLevels = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxOcclusionQueriesPerPool(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxOcclusionQueriesPerPool;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxOcclusionQueriesPerPool(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxOcclusionQueriesPerPool = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxPipelineStatisticsQueriesPerPool(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxPipelineStatisticsQueriesPerPool;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPipelineStatisticsQueriesPerPool(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPipelineStatisticsQueriesPerPool = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxTimestampQueriesPerPool(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxTimestampQueriesPerPool;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxTimestampQueriesPerPool(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxTimestampQueriesPerPool = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxImmutableSamplersPerDescriptorSetLayout(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxImmutableSamplersPerDescriptorSetLayout;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxImmutableSamplersPerDescriptorSetLayout(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxImmutableSamplersPerDescriptorSetLayout = $cValue;
    }
}
