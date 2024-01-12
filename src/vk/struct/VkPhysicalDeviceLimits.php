<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceLimits implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "maxImageDimension1D" => $this->getMaxImageDimension1D(),
          "maxImageDimension2D" => $this->getMaxImageDimension2D(),
          "maxImageDimension3D" => $this->getMaxImageDimension3D(),
          "maxImageDimensionCube" => $this->getMaxImageDimensionCube(),
          "maxImageArrayLayers" => $this->getMaxImageArrayLayers(),
          "maxTexelBufferElements" => $this->getMaxTexelBufferElements(),
          "maxUniformBufferRange" => $this->getMaxUniformBufferRange(),
          "maxStorageBufferRange" => $this->getMaxStorageBufferRange(),
          "maxPushConstantsSize" => $this->getMaxPushConstantsSize(),
          "maxMemoryAllocationCount" => $this->getMaxMemoryAllocationCount(),
          "maxSamplerAllocationCount" => $this->getMaxSamplerAllocationCount(),
          "bufferImageGranularity" => $this->getBufferImageGranularity(),
          "sparseAddressSpaceSize" => $this->getSparseAddressSpaceSize(),
          "maxBoundDescriptorSets" => $this->getMaxBoundDescriptorSets(),
          "maxPerStageDescriptorSamplers" => $this->getMaxPerStageDescriptorSamplers(),
          "maxPerStageDescriptorUniformBuffers" => $this->getMaxPerStageDescriptorUniformBuffers(),
          "maxPerStageDescriptorStorageBuffers" => $this->getMaxPerStageDescriptorStorageBuffers(),
          "maxPerStageDescriptorSampledImages" => $this->getMaxPerStageDescriptorSampledImages(),
          "maxPerStageDescriptorStorageImages" => $this->getMaxPerStageDescriptorStorageImages(),
          "maxPerStageDescriptorInputAttachments" => $this->getMaxPerStageDescriptorInputAttachments(),
          "maxPerStageResources" => $this->getMaxPerStageResources(),
          "maxDescriptorSetSamplers" => $this->getMaxDescriptorSetSamplers(),
          "maxDescriptorSetUniformBuffers" => $this->getMaxDescriptorSetUniformBuffers(),
          "maxDescriptorSetUniformBuffersDynamic" => $this->getMaxDescriptorSetUniformBuffersDynamic(),
          "maxDescriptorSetStorageBuffers" => $this->getMaxDescriptorSetStorageBuffers(),
          "maxDescriptorSetStorageBuffersDynamic" => $this->getMaxDescriptorSetStorageBuffersDynamic(),
          "maxDescriptorSetSampledImages" => $this->getMaxDescriptorSetSampledImages(),
          "maxDescriptorSetStorageImages" => $this->getMaxDescriptorSetStorageImages(),
          "maxDescriptorSetInputAttachments" => $this->getMaxDescriptorSetInputAttachments(),
          "maxVertexInputAttributes" => $this->getMaxVertexInputAttributes(),
          "maxVertexInputBindings" => $this->getMaxVertexInputBindings(),
          "maxVertexInputAttributeOffset" => $this->getMaxVertexInputAttributeOffset(),
          "maxVertexInputBindingStride" => $this->getMaxVertexInputBindingStride(),
          "maxVertexOutputComponents" => $this->getMaxVertexOutputComponents(),
          "maxTessellationGenerationLevel" => $this->getMaxTessellationGenerationLevel(),
          "maxTessellationPatchSize" => $this->getMaxTessellationPatchSize(),
          "maxTessellationControlPerVertexInputComponents" => $this->getMaxTessellationControlPerVertexInputComponents(),
          "maxTessellationControlPerVertexOutputComponents" => $this->getMaxTessellationControlPerVertexOutputComponents(),
          "maxTessellationControlPerPatchOutputComponents" => $this->getMaxTessellationControlPerPatchOutputComponents(),
          "maxTessellationControlTotalOutputComponents" => $this->getMaxTessellationControlTotalOutputComponents(),
          "maxTessellationEvaluationInputComponents" => $this->getMaxTessellationEvaluationInputComponents(),
          "maxTessellationEvaluationOutputComponents" => $this->getMaxTessellationEvaluationOutputComponents(),
          "maxGeometryShaderInvocations" => $this->getMaxGeometryShaderInvocations(),
          "maxGeometryInputComponents" => $this->getMaxGeometryInputComponents(),
          "maxGeometryOutputComponents" => $this->getMaxGeometryOutputComponents(),
          "maxGeometryOutputVertices" => $this->getMaxGeometryOutputVertices(),
          "maxGeometryTotalOutputComponents" => $this->getMaxGeometryTotalOutputComponents(),
          "maxFragmentInputComponents" => $this->getMaxFragmentInputComponents(),
          "maxFragmentOutputAttachments" => $this->getMaxFragmentOutputAttachments(),
          "maxFragmentDualSrcAttachments" => $this->getMaxFragmentDualSrcAttachments(),
          "maxFragmentCombinedOutputResources" => $this->getMaxFragmentCombinedOutputResources(),
          "maxComputeSharedMemorySize" => $this->getMaxComputeSharedMemorySize(),
          "maxComputeWorkGroupCount" => $this->getMaxComputeWorkGroupCount(),
          "maxComputeWorkGroupInvocations" => $this->getMaxComputeWorkGroupInvocations(),
          "maxComputeWorkGroupSize" => $this->getMaxComputeWorkGroupSize(),
          "subPixelPrecisionBits" => $this->getSubPixelPrecisionBits(),
          "subTexelPrecisionBits" => $this->getSubTexelPrecisionBits(),
          "mipmapPrecisionBits" => $this->getMipmapPrecisionBits(),
          "maxDrawIndexedIndexValue" => $this->getMaxDrawIndexedIndexValue(),
          "maxDrawIndirectCount" => $this->getMaxDrawIndirectCount(),
          "maxSamplerLodBias" => $this->getMaxSamplerLodBias(),
          "maxSamplerAnisotropy" => $this->getMaxSamplerAnisotropy(),
          "maxViewports" => $this->getMaxViewports(),
          "maxViewportDimensions" => $this->getMaxViewportDimensions(),
          "viewportBoundsRange" => $this->getViewportBoundsRange(),
          "viewportSubPixelBits" => $this->getViewportSubPixelBits(),
          "minMemoryMapAlignment" => $this->getMinMemoryMapAlignment(),
          "minTexelBufferOffsetAlignment" => $this->getMinTexelBufferOffsetAlignment(),
          "minUniformBufferOffsetAlignment" => $this->getMinUniformBufferOffsetAlignment(),
          "minStorageBufferOffsetAlignment" => $this->getMinStorageBufferOffsetAlignment(),
          "minTexelOffset" => $this->getMinTexelOffset(),
          "maxTexelOffset" => $this->getMaxTexelOffset(),
          "minTexelGatherOffset" => $this->getMinTexelGatherOffset(),
          "maxTexelGatherOffset" => $this->getMaxTexelGatherOffset(),
          "minInterpolationOffset" => $this->getMinInterpolationOffset(),
          "maxInterpolationOffset" => $this->getMaxInterpolationOffset(),
          "subPixelInterpolationOffsetBits" => $this->getSubPixelInterpolationOffsetBits(),
          "maxFramebufferWidth" => $this->getMaxFramebufferWidth(),
          "maxFramebufferHeight" => $this->getMaxFramebufferHeight(),
          "maxFramebufferLayers" => $this->getMaxFramebufferLayers(),
          "framebufferColorSampleCounts" => $this->getFramebufferColorSampleCounts(),
          "framebufferDepthSampleCounts" => $this->getFramebufferDepthSampleCounts(),
          "framebufferStencilSampleCounts" => $this->getFramebufferStencilSampleCounts(),
          "framebufferNoAttachmentsSampleCounts" => $this->getFramebufferNoAttachmentsSampleCounts(),
          "maxColorAttachments" => $this->getMaxColorAttachments(),
          "sampledImageColorSampleCounts" => $this->getSampledImageColorSampleCounts(),
          "sampledImageIntegerSampleCounts" => $this->getSampledImageIntegerSampleCounts(),
          "sampledImageDepthSampleCounts" => $this->getSampledImageDepthSampleCounts(),
          "sampledImageStencilSampleCounts" => $this->getSampledImageStencilSampleCounts(),
          "storageImageSampleCounts" => $this->getStorageImageSampleCounts(),
          "maxSampleMaskWords" => $this->getMaxSampleMaskWords(),
          "timestampComputeAndGraphics" => $this->getTimestampComputeAndGraphics(),
          "timestampPeriod" => $this->getTimestampPeriod(),
          "maxClipDistances" => $this->getMaxClipDistances(),
          "maxCullDistances" => $this->getMaxCullDistances(),
          "maxCombinedClipAndCullDistances" => $this->getMaxCombinedClipAndCullDistances(),
          "discreteQueuePriorities" => $this->getDiscreteQueuePriorities(),
          "pointSizeRange" => $this->getPointSizeRange(),
          "lineWidthRange" => $this->getLineWidthRange(),
          "pointSizeGranularity" => $this->getPointSizeGranularity(),
          "lineWidthGranularity" => $this->getLineWidthGranularity(),
          "strictLines" => $this->getStrictLines(),
          "standardSampleLocations" => $this->getStandardSampleLocations(),
          "optimalBufferCopyOffsetAlignment" => $this->getOptimalBufferCopyOffsetAlignment(),
          "optimalBufferCopyRowPitchAlignment" => $this->getOptimalBufferCopyRowPitchAlignment(),
          "nonCoherentAtomSize" => $this->getNonCoherentAtomSize(),
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
        null|int $maxImageDimension1D = null,
        null|int $maxImageDimension2D = null,
        null|int $maxImageDimension3D = null,
        null|int $maxImageDimensionCube = null,
        null|int $maxImageArrayLayers = null,
        null|int $maxTexelBufferElements = null,
        null|int $maxUniformBufferRange = null,
        null|int $maxStorageBufferRange = null,
        null|int $maxPushConstantsSize = null,
        null|int $maxMemoryAllocationCount = null,
        null|int $maxSamplerAllocationCount = null,
        null|int $bufferImageGranularity = null,
        null|int $sparseAddressSpaceSize = null,
        null|int $maxBoundDescriptorSets = null,
        null|int $maxPerStageDescriptorSamplers = null,
        null|int $maxPerStageDescriptorUniformBuffers = null,
        null|int $maxPerStageDescriptorStorageBuffers = null,
        null|int $maxPerStageDescriptorSampledImages = null,
        null|int $maxPerStageDescriptorStorageImages = null,
        null|int $maxPerStageDescriptorInputAttachments = null,
        null|int $maxPerStageResources = null,
        null|int $maxDescriptorSetSamplers = null,
        null|int $maxDescriptorSetUniformBuffers = null,
        null|int $maxDescriptorSetUniformBuffersDynamic = null,
        null|int $maxDescriptorSetStorageBuffers = null,
        null|int $maxDescriptorSetStorageBuffersDynamic = null,
        null|int $maxDescriptorSetSampledImages = null,
        null|int $maxDescriptorSetStorageImages = null,
        null|int $maxDescriptorSetInputAttachments = null,
        null|int $maxVertexInputAttributes = null,
        null|int $maxVertexInputBindings = null,
        null|int $maxVertexInputAttributeOffset = null,
        null|int $maxVertexInputBindingStride = null,
        null|int $maxVertexOutputComponents = null,
        null|int $maxTessellationGenerationLevel = null,
        null|int $maxTessellationPatchSize = null,
        null|int $maxTessellationControlPerVertexInputComponents = null,
        null|int $maxTessellationControlPerVertexOutputComponents = null,
        null|int $maxTessellationControlPerPatchOutputComponents = null,
        null|int $maxTessellationControlTotalOutputComponents = null,
        null|int $maxTessellationEvaluationInputComponents = null,
        null|int $maxTessellationEvaluationOutputComponents = null,
        null|int $maxGeometryShaderInvocations = null,
        null|int $maxGeometryInputComponents = null,
        null|int $maxGeometryOutputComponents = null,
        null|int $maxGeometryOutputVertices = null,
        null|int $maxGeometryTotalOutputComponents = null,
        null|int $maxFragmentInputComponents = null,
        null|int $maxFragmentOutputAttachments = null,
        null|int $maxFragmentDualSrcAttachments = null,
        null|int $maxFragmentCombinedOutputResources = null,
        null|int $maxComputeSharedMemorySize = null,
        mixed $maxComputeWorkGroupCount = null,
        null|int $maxComputeWorkGroupInvocations = null,
        mixed $maxComputeWorkGroupSize = null,
        null|int $subPixelPrecisionBits = null,
        null|int $subTexelPrecisionBits = null,
        null|int $mipmapPrecisionBits = null,
        null|int $maxDrawIndexedIndexValue = null,
        null|int $maxDrawIndirectCount = null,
        null|float $maxSamplerLodBias = null,
        null|float $maxSamplerAnisotropy = null,
        null|int $maxViewports = null,
        mixed $maxViewportDimensions = null,
        mixed $viewportBoundsRange = null,
        null|int $viewportSubPixelBits = null,
        null|int $minMemoryMapAlignment = null,
        null|int $minTexelBufferOffsetAlignment = null,
        null|int $minUniformBufferOffsetAlignment = null,
        null|int $minStorageBufferOffsetAlignment = null,
        null|int $minTexelOffset = null,
        null|int $maxTexelOffset = null,
        null|int $minTexelGatherOffset = null,
        null|int $maxTexelGatherOffset = null,
        null|float $minInterpolationOffset = null,
        null|float $maxInterpolationOffset = null,
        null|int $subPixelInterpolationOffsetBits = null,
        null|int $maxFramebufferWidth = null,
        null|int $maxFramebufferHeight = null,
        null|int $maxFramebufferLayers = null,
        null|array $framebufferColorSampleCounts = null,
        null|array $framebufferDepthSampleCounts = null,
        null|array $framebufferStencilSampleCounts = null,
        null|array $framebufferNoAttachmentsSampleCounts = null,
        null|int $maxColorAttachments = null,
        null|array $sampledImageColorSampleCounts = null,
        null|array $sampledImageIntegerSampleCounts = null,
        null|array $sampledImageDepthSampleCounts = null,
        null|array $sampledImageStencilSampleCounts = null,
        null|array $storageImageSampleCounts = null,
        null|int $maxSampleMaskWords = null,
        null|bool $timestampComputeAndGraphics = null,
        null|float $timestampPeriod = null,
        null|int $maxClipDistances = null,
        null|int $maxCullDistances = null,
        null|int $maxCombinedClipAndCullDistances = null,
        null|int $discreteQueuePriorities = null,
        mixed $pointSizeRange = null,
        mixed $lineWidthRange = null,
        null|float $pointSizeGranularity = null,
        null|float $lineWidthGranularity = null,
        null|bool $strictLines = null,
        null|bool $standardSampleLocations = null,
        null|int $optimalBufferCopyOffsetAlignment = null,
        null|int $optimalBufferCopyRowPitchAlignment = null,
        null|int $nonCoherentAtomSize = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceLimits', false), $vulkan);
        if(!is_null($maxImageDimension1D)) $self->setMaxImageDimension1D($maxImageDimension1D);
        if(!is_null($maxImageDimension2D)) $self->setMaxImageDimension2D($maxImageDimension2D);
        if(!is_null($maxImageDimension3D)) $self->setMaxImageDimension3D($maxImageDimension3D);
        if(!is_null($maxImageDimensionCube)) $self->setMaxImageDimensionCube($maxImageDimensionCube);
        if(!is_null($maxImageArrayLayers)) $self->setMaxImageArrayLayers($maxImageArrayLayers);
        if(!is_null($maxTexelBufferElements)) $self->setMaxTexelBufferElements($maxTexelBufferElements);
        if(!is_null($maxUniformBufferRange)) $self->setMaxUniformBufferRange($maxUniformBufferRange);
        if(!is_null($maxStorageBufferRange)) $self->setMaxStorageBufferRange($maxStorageBufferRange);
        if(!is_null($maxPushConstantsSize)) $self->setMaxPushConstantsSize($maxPushConstantsSize);
        if(!is_null($maxMemoryAllocationCount)) $self->setMaxMemoryAllocationCount($maxMemoryAllocationCount);
        if(!is_null($maxSamplerAllocationCount)) $self->setMaxSamplerAllocationCount($maxSamplerAllocationCount);
        if(!is_null($bufferImageGranularity)) $self->setBufferImageGranularity($bufferImageGranularity);
        if(!is_null($sparseAddressSpaceSize)) $self->setSparseAddressSpaceSize($sparseAddressSpaceSize);
        if(!is_null($maxBoundDescriptorSets)) $self->setMaxBoundDescriptorSets($maxBoundDescriptorSets);
        if(!is_null($maxPerStageDescriptorSamplers)) $self->setMaxPerStageDescriptorSamplers($maxPerStageDescriptorSamplers);
        if(!is_null($maxPerStageDescriptorUniformBuffers)) $self->setMaxPerStageDescriptorUniformBuffers($maxPerStageDescriptorUniformBuffers);
        if(!is_null($maxPerStageDescriptorStorageBuffers)) $self->setMaxPerStageDescriptorStorageBuffers($maxPerStageDescriptorStorageBuffers);
        if(!is_null($maxPerStageDescriptorSampledImages)) $self->setMaxPerStageDescriptorSampledImages($maxPerStageDescriptorSampledImages);
        if(!is_null($maxPerStageDescriptorStorageImages)) $self->setMaxPerStageDescriptorStorageImages($maxPerStageDescriptorStorageImages);
        if(!is_null($maxPerStageDescriptorInputAttachments)) $self->setMaxPerStageDescriptorInputAttachments($maxPerStageDescriptorInputAttachments);
        if(!is_null($maxPerStageResources)) $self->setMaxPerStageResources($maxPerStageResources);
        if(!is_null($maxDescriptorSetSamplers)) $self->setMaxDescriptorSetSamplers($maxDescriptorSetSamplers);
        if(!is_null($maxDescriptorSetUniformBuffers)) $self->setMaxDescriptorSetUniformBuffers($maxDescriptorSetUniformBuffers);
        if(!is_null($maxDescriptorSetUniformBuffersDynamic)) $self->setMaxDescriptorSetUniformBuffersDynamic($maxDescriptorSetUniformBuffersDynamic);
        if(!is_null($maxDescriptorSetStorageBuffers)) $self->setMaxDescriptorSetStorageBuffers($maxDescriptorSetStorageBuffers);
        if(!is_null($maxDescriptorSetStorageBuffersDynamic)) $self->setMaxDescriptorSetStorageBuffersDynamic($maxDescriptorSetStorageBuffersDynamic);
        if(!is_null($maxDescriptorSetSampledImages)) $self->setMaxDescriptorSetSampledImages($maxDescriptorSetSampledImages);
        if(!is_null($maxDescriptorSetStorageImages)) $self->setMaxDescriptorSetStorageImages($maxDescriptorSetStorageImages);
        if(!is_null($maxDescriptorSetInputAttachments)) $self->setMaxDescriptorSetInputAttachments($maxDescriptorSetInputAttachments);
        if(!is_null($maxVertexInputAttributes)) $self->setMaxVertexInputAttributes($maxVertexInputAttributes);
        if(!is_null($maxVertexInputBindings)) $self->setMaxVertexInputBindings($maxVertexInputBindings);
        if(!is_null($maxVertexInputAttributeOffset)) $self->setMaxVertexInputAttributeOffset($maxVertexInputAttributeOffset);
        if(!is_null($maxVertexInputBindingStride)) $self->setMaxVertexInputBindingStride($maxVertexInputBindingStride);
        if(!is_null($maxVertexOutputComponents)) $self->setMaxVertexOutputComponents($maxVertexOutputComponents);
        if(!is_null($maxTessellationGenerationLevel)) $self->setMaxTessellationGenerationLevel($maxTessellationGenerationLevel);
        if(!is_null($maxTessellationPatchSize)) $self->setMaxTessellationPatchSize($maxTessellationPatchSize);
        if(!is_null($maxTessellationControlPerVertexInputComponents)) $self->setMaxTessellationControlPerVertexInputComponents($maxTessellationControlPerVertexInputComponents);
        if(!is_null($maxTessellationControlPerVertexOutputComponents)) $self->setMaxTessellationControlPerVertexOutputComponents($maxTessellationControlPerVertexOutputComponents);
        if(!is_null($maxTessellationControlPerPatchOutputComponents)) $self->setMaxTessellationControlPerPatchOutputComponents($maxTessellationControlPerPatchOutputComponents);
        if(!is_null($maxTessellationControlTotalOutputComponents)) $self->setMaxTessellationControlTotalOutputComponents($maxTessellationControlTotalOutputComponents);
        if(!is_null($maxTessellationEvaluationInputComponents)) $self->setMaxTessellationEvaluationInputComponents($maxTessellationEvaluationInputComponents);
        if(!is_null($maxTessellationEvaluationOutputComponents)) $self->setMaxTessellationEvaluationOutputComponents($maxTessellationEvaluationOutputComponents);
        if(!is_null($maxGeometryShaderInvocations)) $self->setMaxGeometryShaderInvocations($maxGeometryShaderInvocations);
        if(!is_null($maxGeometryInputComponents)) $self->setMaxGeometryInputComponents($maxGeometryInputComponents);
        if(!is_null($maxGeometryOutputComponents)) $self->setMaxGeometryOutputComponents($maxGeometryOutputComponents);
        if(!is_null($maxGeometryOutputVertices)) $self->setMaxGeometryOutputVertices($maxGeometryOutputVertices);
        if(!is_null($maxGeometryTotalOutputComponents)) $self->setMaxGeometryTotalOutputComponents($maxGeometryTotalOutputComponents);
        if(!is_null($maxFragmentInputComponents)) $self->setMaxFragmentInputComponents($maxFragmentInputComponents);
        if(!is_null($maxFragmentOutputAttachments)) $self->setMaxFragmentOutputAttachments($maxFragmentOutputAttachments);
        if(!is_null($maxFragmentDualSrcAttachments)) $self->setMaxFragmentDualSrcAttachments($maxFragmentDualSrcAttachments);
        if(!is_null($maxFragmentCombinedOutputResources)) $self->setMaxFragmentCombinedOutputResources($maxFragmentCombinedOutputResources);
        if(!is_null($maxComputeSharedMemorySize)) $self->setMaxComputeSharedMemorySize($maxComputeSharedMemorySize);
        if(!is_null($maxComputeWorkGroupCount)) $self->setMaxComputeWorkGroupCount($maxComputeWorkGroupCount);
        if(!is_null($maxComputeWorkGroupInvocations)) $self->setMaxComputeWorkGroupInvocations($maxComputeWorkGroupInvocations);
        if(!is_null($maxComputeWorkGroupSize)) $self->setMaxComputeWorkGroupSize($maxComputeWorkGroupSize);
        if(!is_null($subPixelPrecisionBits)) $self->setSubPixelPrecisionBits($subPixelPrecisionBits);
        if(!is_null($subTexelPrecisionBits)) $self->setSubTexelPrecisionBits($subTexelPrecisionBits);
        if(!is_null($mipmapPrecisionBits)) $self->setMipmapPrecisionBits($mipmapPrecisionBits);
        if(!is_null($maxDrawIndexedIndexValue)) $self->setMaxDrawIndexedIndexValue($maxDrawIndexedIndexValue);
        if(!is_null($maxDrawIndirectCount)) $self->setMaxDrawIndirectCount($maxDrawIndirectCount);
        if(!is_null($maxSamplerLodBias)) $self->setMaxSamplerLodBias($maxSamplerLodBias);
        if(!is_null($maxSamplerAnisotropy)) $self->setMaxSamplerAnisotropy($maxSamplerAnisotropy);
        if(!is_null($maxViewports)) $self->setMaxViewports($maxViewports);
        if(!is_null($maxViewportDimensions)) $self->setMaxViewportDimensions($maxViewportDimensions);
        if(!is_null($viewportBoundsRange)) $self->setViewportBoundsRange($viewportBoundsRange);
        if(!is_null($viewportSubPixelBits)) $self->setViewportSubPixelBits($viewportSubPixelBits);
        if(!is_null($minMemoryMapAlignment)) $self->setMinMemoryMapAlignment($minMemoryMapAlignment);
        if(!is_null($minTexelBufferOffsetAlignment)) $self->setMinTexelBufferOffsetAlignment($minTexelBufferOffsetAlignment);
        if(!is_null($minUniformBufferOffsetAlignment)) $self->setMinUniformBufferOffsetAlignment($minUniformBufferOffsetAlignment);
        if(!is_null($minStorageBufferOffsetAlignment)) $self->setMinStorageBufferOffsetAlignment($minStorageBufferOffsetAlignment);
        if(!is_null($minTexelOffset)) $self->setMinTexelOffset($minTexelOffset);
        if(!is_null($maxTexelOffset)) $self->setMaxTexelOffset($maxTexelOffset);
        if(!is_null($minTexelGatherOffset)) $self->setMinTexelGatherOffset($minTexelGatherOffset);
        if(!is_null($maxTexelGatherOffset)) $self->setMaxTexelGatherOffset($maxTexelGatherOffset);
        if(!is_null($minInterpolationOffset)) $self->setMinInterpolationOffset($minInterpolationOffset);
        if(!is_null($maxInterpolationOffset)) $self->setMaxInterpolationOffset($maxInterpolationOffset);
        if(!is_null($subPixelInterpolationOffsetBits)) $self->setSubPixelInterpolationOffsetBits($subPixelInterpolationOffsetBits);
        if(!is_null($maxFramebufferWidth)) $self->setMaxFramebufferWidth($maxFramebufferWidth);
        if(!is_null($maxFramebufferHeight)) $self->setMaxFramebufferHeight($maxFramebufferHeight);
        if(!is_null($maxFramebufferLayers)) $self->setMaxFramebufferLayers($maxFramebufferLayers);
        if(!is_null($framebufferColorSampleCounts)) $self->setFramebufferColorSampleCounts($framebufferColorSampleCounts);
        if(!is_null($framebufferDepthSampleCounts)) $self->setFramebufferDepthSampleCounts($framebufferDepthSampleCounts);
        if(!is_null($framebufferStencilSampleCounts)) $self->setFramebufferStencilSampleCounts($framebufferStencilSampleCounts);
        if(!is_null($framebufferNoAttachmentsSampleCounts)) $self->setFramebufferNoAttachmentsSampleCounts($framebufferNoAttachmentsSampleCounts);
        if(!is_null($maxColorAttachments)) $self->setMaxColorAttachments($maxColorAttachments);
        if(!is_null($sampledImageColorSampleCounts)) $self->setSampledImageColorSampleCounts($sampledImageColorSampleCounts);
        if(!is_null($sampledImageIntegerSampleCounts)) $self->setSampledImageIntegerSampleCounts($sampledImageIntegerSampleCounts);
        if(!is_null($sampledImageDepthSampleCounts)) $self->setSampledImageDepthSampleCounts($sampledImageDepthSampleCounts);
        if(!is_null($sampledImageStencilSampleCounts)) $self->setSampledImageStencilSampleCounts($sampledImageStencilSampleCounts);
        if(!is_null($storageImageSampleCounts)) $self->setStorageImageSampleCounts($storageImageSampleCounts);
        if(!is_null($maxSampleMaskWords)) $self->setMaxSampleMaskWords($maxSampleMaskWords);
        if(!is_null($timestampComputeAndGraphics)) $self->setTimestampComputeAndGraphics($timestampComputeAndGraphics);
        if(!is_null($timestampPeriod)) $self->setTimestampPeriod($timestampPeriod);
        if(!is_null($maxClipDistances)) $self->setMaxClipDistances($maxClipDistances);
        if(!is_null($maxCullDistances)) $self->setMaxCullDistances($maxCullDistances);
        if(!is_null($maxCombinedClipAndCullDistances)) $self->setMaxCombinedClipAndCullDistances($maxCombinedClipAndCullDistances);
        if(!is_null($discreteQueuePriorities)) $self->setDiscreteQueuePriorities($discreteQueuePriorities);
        if(!is_null($pointSizeRange)) $self->setPointSizeRange($pointSizeRange);
        if(!is_null($lineWidthRange)) $self->setLineWidthRange($lineWidthRange);
        if(!is_null($pointSizeGranularity)) $self->setPointSizeGranularity($pointSizeGranularity);
        if(!is_null($lineWidthGranularity)) $self->setLineWidthGranularity($lineWidthGranularity);
        if(!is_null($strictLines)) $self->setStrictLines($strictLines);
        if(!is_null($standardSampleLocations)) $self->setStandardSampleLocations($standardSampleLocations);
        if(!is_null($optimalBufferCopyOffsetAlignment)) $self->setOptimalBufferCopyOffsetAlignment($optimalBufferCopyOffsetAlignment);
        if(!is_null($optimalBufferCopyRowPitchAlignment)) $self->setOptimalBufferCopyRowPitchAlignment($optimalBufferCopyRowPitchAlignment);
        if(!is_null($nonCoherentAtomSize)) $self->setNonCoherentAtomSize($nonCoherentAtomSize);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getMaxImageDimension1D(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxImageDimension1D;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxImageDimension1D(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxImageDimension1D = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxImageDimension2D(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxImageDimension2D;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxImageDimension2D(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxImageDimension2D = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxImageDimension3D(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxImageDimension3D;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxImageDimension3D(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxImageDimension3D = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxImageDimensionCube(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxImageDimensionCube;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxImageDimensionCube(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxImageDimensionCube = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxImageArrayLayers(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxImageArrayLayers;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxImageArrayLayers(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxImageArrayLayers = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxTexelBufferElements(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxTexelBufferElements;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxTexelBufferElements(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxTexelBufferElements = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxUniformBufferRange(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxUniformBufferRange;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxUniformBufferRange(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxUniformBufferRange = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxStorageBufferRange(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxStorageBufferRange;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxStorageBufferRange(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxStorageBufferRange = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxPushConstantsSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxPushConstantsSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPushConstantsSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPushConstantsSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxMemoryAllocationCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxMemoryAllocationCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxMemoryAllocationCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxMemoryAllocationCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxSamplerAllocationCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxSamplerAllocationCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxSamplerAllocationCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxSamplerAllocationCount = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getBufferImageGranularity(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->bufferImageGranularity;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBufferImageGranularity(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->bufferImageGranularity = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getSparseAddressSpaceSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sparseAddressSpaceSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSparseAddressSpaceSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->sparseAddressSpaceSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxBoundDescriptorSets(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxBoundDescriptorSets;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxBoundDescriptorSets(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxBoundDescriptorSets = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxPerStageDescriptorSamplers(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxPerStageDescriptorSamplers;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPerStageDescriptorSamplers(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPerStageDescriptorSamplers = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxPerStageDescriptorUniformBuffers(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxPerStageDescriptorUniformBuffers;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPerStageDescriptorUniformBuffers(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPerStageDescriptorUniformBuffers = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxPerStageDescriptorStorageBuffers(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxPerStageDescriptorStorageBuffers;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPerStageDescriptorStorageBuffers(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPerStageDescriptorStorageBuffers = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxPerStageDescriptorSampledImages(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxPerStageDescriptorSampledImages;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPerStageDescriptorSampledImages(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPerStageDescriptorSampledImages = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxPerStageDescriptorStorageImages(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxPerStageDescriptorStorageImages;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPerStageDescriptorStorageImages(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPerStageDescriptorStorageImages = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxPerStageDescriptorInputAttachments(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxPerStageDescriptorInputAttachments;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPerStageDescriptorInputAttachments(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPerStageDescriptorInputAttachments = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxPerStageResources(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxPerStageResources;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPerStageResources(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPerStageResources = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDescriptorSetSamplers(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxDescriptorSetSamplers;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDescriptorSetSamplers(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDescriptorSetSamplers = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDescriptorSetUniformBuffers(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxDescriptorSetUniformBuffers;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDescriptorSetUniformBuffers(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDescriptorSetUniformBuffers = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDescriptorSetUniformBuffersDynamic(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxDescriptorSetUniformBuffersDynamic;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDescriptorSetUniformBuffersDynamic(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDescriptorSetUniformBuffersDynamic = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDescriptorSetStorageBuffers(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxDescriptorSetStorageBuffers;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDescriptorSetStorageBuffers(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDescriptorSetStorageBuffers = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDescriptorSetStorageBuffersDynamic(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxDescriptorSetStorageBuffersDynamic;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDescriptorSetStorageBuffersDynamic(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDescriptorSetStorageBuffersDynamic = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDescriptorSetSampledImages(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxDescriptorSetSampledImages;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDescriptorSetSampledImages(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDescriptorSetSampledImages = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDescriptorSetStorageImages(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxDescriptorSetStorageImages;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDescriptorSetStorageImages(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDescriptorSetStorageImages = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDescriptorSetInputAttachments(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxDescriptorSetInputAttachments;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDescriptorSetInputAttachments(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDescriptorSetInputAttachments = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxVertexInputAttributes(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxVertexInputAttributes;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxVertexInputAttributes(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxVertexInputAttributes = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxVertexInputBindings(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxVertexInputBindings;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxVertexInputBindings(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxVertexInputBindings = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxVertexInputAttributeOffset(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxVertexInputAttributeOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxVertexInputAttributeOffset(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxVertexInputAttributeOffset = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxVertexInputBindingStride(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxVertexInputBindingStride;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxVertexInputBindingStride(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxVertexInputBindingStride = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxVertexOutputComponents(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxVertexOutputComponents;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxVertexOutputComponents(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxVertexOutputComponents = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxTessellationGenerationLevel(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxTessellationGenerationLevel;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxTessellationGenerationLevel(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxTessellationGenerationLevel = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxTessellationPatchSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxTessellationPatchSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxTessellationPatchSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxTessellationPatchSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxTessellationControlPerVertexInputComponents(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxTessellationControlPerVertexInputComponents;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxTessellationControlPerVertexInputComponents(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxTessellationControlPerVertexInputComponents = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxTessellationControlPerVertexOutputComponents(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxTessellationControlPerVertexOutputComponents;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxTessellationControlPerVertexOutputComponents(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxTessellationControlPerVertexOutputComponents = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxTessellationControlPerPatchOutputComponents(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxTessellationControlPerPatchOutputComponents;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxTessellationControlPerPatchOutputComponents(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxTessellationControlPerPatchOutputComponents = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxTessellationControlTotalOutputComponents(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxTessellationControlTotalOutputComponents;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxTessellationControlTotalOutputComponents(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxTessellationControlTotalOutputComponents = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxTessellationEvaluationInputComponents(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxTessellationEvaluationInputComponents;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxTessellationEvaluationInputComponents(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxTessellationEvaluationInputComponents = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxTessellationEvaluationOutputComponents(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxTessellationEvaluationOutputComponents;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxTessellationEvaluationOutputComponents(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxTessellationEvaluationOutputComponents = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxGeometryShaderInvocations(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxGeometryShaderInvocations;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxGeometryShaderInvocations(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxGeometryShaderInvocations = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxGeometryInputComponents(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxGeometryInputComponents;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxGeometryInputComponents(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxGeometryInputComponents = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxGeometryOutputComponents(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxGeometryOutputComponents;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxGeometryOutputComponents(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxGeometryOutputComponents = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxGeometryOutputVertices(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxGeometryOutputVertices;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxGeometryOutputVertices(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxGeometryOutputVertices = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxGeometryTotalOutputComponents(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxGeometryTotalOutputComponents;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxGeometryTotalOutputComponents(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxGeometryTotalOutputComponents = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxFragmentInputComponents(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxFragmentInputComponents;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxFragmentInputComponents(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxFragmentInputComponents = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxFragmentOutputAttachments(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxFragmentOutputAttachments;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxFragmentOutputAttachments(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxFragmentOutputAttachments = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxFragmentDualSrcAttachments(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxFragmentDualSrcAttachments;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxFragmentDualSrcAttachments(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxFragmentDualSrcAttachments = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxFragmentCombinedOutputResources(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxFragmentCombinedOutputResources;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxFragmentCombinedOutputResources(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxFragmentCombinedOutputResources = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxComputeSharedMemorySize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxComputeSharedMemorySize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxComputeSharedMemorySize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxComputeSharedMemorySize = $cValue;
    }

    /**
     * void* /
     */
    public function getMaxComputeWorkGroupCount(): mixed
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxComputeWorkGroupCount;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setMaxComputeWorkGroupCount(mixed $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->maxComputeWorkGroupCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxComputeWorkGroupInvocations(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxComputeWorkGroupInvocations;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxComputeWorkGroupInvocations(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxComputeWorkGroupInvocations = $cValue;
    }

    /**
     * void* /
     */
    public function getMaxComputeWorkGroupSize(): mixed
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxComputeWorkGroupSize;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setMaxComputeWorkGroupSize(mixed $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->maxComputeWorkGroupSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSubPixelPrecisionBits(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->subPixelPrecisionBits;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSubPixelPrecisionBits(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->subPixelPrecisionBits = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSubTexelPrecisionBits(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->subTexelPrecisionBits;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSubTexelPrecisionBits(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->subTexelPrecisionBits = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMipmapPrecisionBits(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->mipmapPrecisionBits;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMipmapPrecisionBits(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->mipmapPrecisionBits = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDrawIndexedIndexValue(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxDrawIndexedIndexValue;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDrawIndexedIndexValue(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDrawIndexedIndexValue = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDrawIndirectCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxDrawIndirectCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDrawIndirectCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDrawIndirectCount = $cValue;
    }

    /**
     * float/
     */
    public function getMaxSamplerLodBias(): float
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxSamplerLodBias;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxSamplerLodBias(float $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxSamplerLodBias = $cValue;
    }

    /**
     * float/
     */
    public function getMaxSamplerAnisotropy(): float
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxSamplerAnisotropy;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxSamplerAnisotropy(float $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxSamplerAnisotropy = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxViewports(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxViewports;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxViewports(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxViewports = $cValue;
    }

    /**
     * void* /
     */
    public function getMaxViewportDimensions(): mixed
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxViewportDimensions;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setMaxViewportDimensions(mixed $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->maxViewportDimensions = $cValue;
    }

    /**
     * void* /
     */
    public function getViewportBoundsRange(): mixed
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->viewportBoundsRange;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setViewportBoundsRange(mixed $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->viewportBoundsRange = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getViewportSubPixelBits(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->viewportSubPixelBits;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setViewportSubPixelBits(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->viewportSubPixelBits = $cValue;
    }

    /**
     * size_t/
     */
    public function getMinMemoryMapAlignment(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->minMemoryMapAlignment;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinMemoryMapAlignment(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->minMemoryMapAlignment = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getMinTexelBufferOffsetAlignment(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->minTexelBufferOffsetAlignment;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinTexelBufferOffsetAlignment(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->minTexelBufferOffsetAlignment = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getMinUniformBufferOffsetAlignment(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->minUniformBufferOffsetAlignment;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinUniformBufferOffsetAlignment(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->minUniformBufferOffsetAlignment = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getMinStorageBufferOffsetAlignment(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->minStorageBufferOffsetAlignment;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinStorageBufferOffsetAlignment(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->minStorageBufferOffsetAlignment = $cValue;
    }

    /**
     * int32_t/
     */
    public function getMinTexelOffset(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->minTexelOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinTexelOffset(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->minTexelOffset = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxTexelOffset(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxTexelOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxTexelOffset(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxTexelOffset = $cValue;
    }

    /**
     * int32_t/
     */
    public function getMinTexelGatherOffset(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->minTexelGatherOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinTexelGatherOffset(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->minTexelGatherOffset = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxTexelGatherOffset(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxTexelGatherOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxTexelGatherOffset(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxTexelGatherOffset = $cValue;
    }

    /**
     * float/
     */
    public function getMinInterpolationOffset(): float
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->minInterpolationOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinInterpolationOffset(float $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->minInterpolationOffset = $cValue;
    }

    /**
     * float/
     */
    public function getMaxInterpolationOffset(): float
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxInterpolationOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxInterpolationOffset(float $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxInterpolationOffset = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSubPixelInterpolationOffsetBits(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->subPixelInterpolationOffsetBits;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSubPixelInterpolationOffsetBits(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->subPixelInterpolationOffsetBits = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxFramebufferWidth(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxFramebufferWidth;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxFramebufferWidth(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxFramebufferWidth = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxFramebufferHeight(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxFramebufferHeight;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxFramebufferHeight(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxFramebufferHeight = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxFramebufferLayers(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxFramebufferLayers;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxFramebufferLayers(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxFramebufferLayers = $cValue;
    }

    /**
     * VkSampleCountFlags/
     */
    public function getFramebufferColorSampleCounts(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->framebufferColorSampleCounts;
        $phpValue = \iggyvolz\vulkan\enum\VkSampleCountFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFramebufferColorSampleCounts(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkSampleCountFlagBits::toInt(...$phpValue);
        $this->cdata->framebufferColorSampleCounts = $cValue;
    }

    /**
     * VkSampleCountFlags/
     */
    public function getFramebufferDepthSampleCounts(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->framebufferDepthSampleCounts;
        $phpValue = \iggyvolz\vulkan\enum\VkSampleCountFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFramebufferDepthSampleCounts(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkSampleCountFlagBits::toInt(...$phpValue);
        $this->cdata->framebufferDepthSampleCounts = $cValue;
    }

    /**
     * VkSampleCountFlags/
     */
    public function getFramebufferStencilSampleCounts(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->framebufferStencilSampleCounts;
        $phpValue = \iggyvolz\vulkan\enum\VkSampleCountFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFramebufferStencilSampleCounts(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkSampleCountFlagBits::toInt(...$phpValue);
        $this->cdata->framebufferStencilSampleCounts = $cValue;
    }

    /**
     * VkSampleCountFlags/
     */
    public function getFramebufferNoAttachmentsSampleCounts(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->framebufferNoAttachmentsSampleCounts;
        $phpValue = \iggyvolz\vulkan\enum\VkSampleCountFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFramebufferNoAttachmentsSampleCounts(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkSampleCountFlagBits::toInt(...$phpValue);
        $this->cdata->framebufferNoAttachmentsSampleCounts = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxColorAttachments(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxColorAttachments;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxColorAttachments(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxColorAttachments = $cValue;
    }

    /**
     * VkSampleCountFlags/
     */
    public function getSampledImageColorSampleCounts(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sampledImageColorSampleCounts;
        $phpValue = \iggyvolz\vulkan\enum\VkSampleCountFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setSampledImageColorSampleCounts(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkSampleCountFlagBits::toInt(...$phpValue);
        $this->cdata->sampledImageColorSampleCounts = $cValue;
    }

    /**
     * VkSampleCountFlags/
     */
    public function getSampledImageIntegerSampleCounts(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sampledImageIntegerSampleCounts;
        $phpValue = \iggyvolz\vulkan\enum\VkSampleCountFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setSampledImageIntegerSampleCounts(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkSampleCountFlagBits::toInt(...$phpValue);
        $this->cdata->sampledImageIntegerSampleCounts = $cValue;
    }

    /**
     * VkSampleCountFlags/
     */
    public function getSampledImageDepthSampleCounts(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sampledImageDepthSampleCounts;
        $phpValue = \iggyvolz\vulkan\enum\VkSampleCountFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setSampledImageDepthSampleCounts(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkSampleCountFlagBits::toInt(...$phpValue);
        $this->cdata->sampledImageDepthSampleCounts = $cValue;
    }

    /**
     * VkSampleCountFlags/
     */
    public function getSampledImageStencilSampleCounts(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sampledImageStencilSampleCounts;
        $phpValue = \iggyvolz\vulkan\enum\VkSampleCountFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setSampledImageStencilSampleCounts(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkSampleCountFlagBits::toInt(...$phpValue);
        $this->cdata->sampledImageStencilSampleCounts = $cValue;
    }

    /**
     * VkSampleCountFlags/
     */
    public function getStorageImageSampleCounts(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->storageImageSampleCounts;
        $phpValue = \iggyvolz\vulkan\enum\VkSampleCountFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setStorageImageSampleCounts(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkSampleCountFlagBits::toInt(...$phpValue);
        $this->cdata->storageImageSampleCounts = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxSampleMaskWords(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxSampleMaskWords;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxSampleMaskWords(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxSampleMaskWords = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getTimestampComputeAndGraphics(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->timestampComputeAndGraphics;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setTimestampComputeAndGraphics(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->timestampComputeAndGraphics = $cValue;
    }

    /**
     * float/
     */
    public function getTimestampPeriod(): float
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->timestampPeriod;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setTimestampPeriod(float $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->timestampPeriod = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxClipDistances(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxClipDistances;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxClipDistances(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxClipDistances = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxCullDistances(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxCullDistances;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxCullDistances(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxCullDistances = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxCombinedClipAndCullDistances(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxCombinedClipAndCullDistances;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxCombinedClipAndCullDistances(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxCombinedClipAndCullDistances = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDiscreteQueuePriorities(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->discreteQueuePriorities;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDiscreteQueuePriorities(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->discreteQueuePriorities = $cValue;
    }

    /**
     * void* /
     */
    public function getPointSizeRange(): mixed
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pointSizeRange;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPointSizeRange(mixed $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->pointSizeRange = $cValue;
    }

    /**
     * void* /
     */
    public function getLineWidthRange(): mixed
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->lineWidthRange;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setLineWidthRange(mixed $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->lineWidthRange = $cValue;
    }

    /**
     * float/
     */
    public function getPointSizeGranularity(): float
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pointSizeGranularity;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPointSizeGranularity(float $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->pointSizeGranularity = $cValue;
    }

    /**
     * float/
     */
    public function getLineWidthGranularity(): float
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->lineWidthGranularity;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setLineWidthGranularity(float $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->lineWidthGranularity = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStrictLines(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->strictLines;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setStrictLines(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->strictLines = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStandardSampleLocations(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->standardSampleLocations;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setStandardSampleLocations(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->standardSampleLocations = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getOptimalBufferCopyOffsetAlignment(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->optimalBufferCopyOffsetAlignment;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setOptimalBufferCopyOffsetAlignment(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->optimalBufferCopyOffsetAlignment = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getOptimalBufferCopyRowPitchAlignment(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->optimalBufferCopyRowPitchAlignment;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setOptimalBufferCopyRowPitchAlignment(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->optimalBufferCopyRowPitchAlignment = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getNonCoherentAtomSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->nonCoherentAtomSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setNonCoherentAtomSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->nonCoherentAtomSize = $cValue;
    }
}
