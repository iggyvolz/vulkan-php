<?php

namespace iggyvolz\vulkan;

use Spem;

class PhysicalDeviceLimits
{
    private function __construct(){}
    #[\Spem("libphulkan.so", "physicalDeviceLimits_destruct")]
    public function __destruct()
    {
    }
    public function __debugInfo(): array
    {
        $arr = [];
        foreach (new \ReflectionClass($this)->getProperties() as $prop) {
            $arr[$prop->getName()] = $this->{$prop->getName()};
        }
        return $arr;
    }

    public int $maxImageDimension1D { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxImageDimension1D")] get {}}
    public int $maxImageDimension2D { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxImageDimension2D")] get {}}
    public int $maxImageDimension3D { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxImageDimension3D")] get {}}
    public int $maxImageDimensionCube { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxImageDimensionCube")] get {}}
    public int $maxImageArrayLayers { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxImageArrayLayers")] get {}}
    public int $maxTexelBufferElements { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxTexelBufferElements")] get {}}
    public int $maxUniformBufferRange { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxUniformBufferRange")] get {}}
    public int $maxStorageBufferRange { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxStorageBufferRange")] get {}}
    public int $maxPushConstantsSize { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxPushConstantsSize")] get {}}
    public int $maxMemoryAllocationCount { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxMemoryAllocationCount")] get {}}
    public int $maxSamplerAllocationCount { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxSamplerAllocationCount")] get {}}
    public int $bufferImageGranularity { #[Spem("libphulkan.so", "physicalDeviceLimits_getBufferImageGranularity")] get {}}
    public int $sparseAddressSpaceSize { #[Spem("libphulkan.so", "physicalDeviceLimits_getSparseAddressSpaceSize")] get {}}
    public int $maxBoundDescriptorSets { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxBoundDescriptorSets")] get {}}
    public int $maxPerStageDescriptorSamplers { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxPerStageDescriptorSamplers")] get {}}
    public int $maxPerStageDescriptorUniformBuffers { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxPerStageDescriptorUniformBuffers")] get {}}
    public int $maxPerStageDescriptorStorageBuffers { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxPerStageDescriptorStorageBuffers")] get {}}
    public int $maxPerStageDescriptorSampledImages { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxPerStageDescriptorSampledImages")] get {}}
    public int $maxPerStageDescriptorStorageImages { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxPerStageDescriptorStorageImages")] get {}}
    public int $maxPerStageDescriptorInputAttachments { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxPerStageDescriptorInputAttachments")] get {}}
    public int $maxPerStageResources { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxPerStageResources")] get {}}
    public int $maxDescriptorSetSamplers { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxDescriptorSetSamplers")] get {}}
    public int $maxDescriptorSetUniformBuffers { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxDescriptorSetUniformBuffers")] get {}}
    public int $maxDescriptorSetUniformBuffersDynamic { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxDescriptorSetUniformBuffersDynamic")] get {}}
    public int $maxDescriptorSetStorageBuffers { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxDescriptorSetStorageBuffers")] get {}}
    public int $maxDescriptorSetStorageBuffersDynamic { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxDescriptorSetStorageBuffersDynamic")] get {}}
    public int $maxDescriptorSetSampledImages { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxDescriptorSetSampledImages")] get {}}
    public int $maxDescriptorSetStorageImages { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxDescriptorSetStorageImages")] get {}}
    public int $maxDescriptorSetInputAttachments { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxDescriptorSetInputAttachments")] get {}}
    public int $maxVertexInputAttributes { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxVertexInputAttributes")] get {}}
    public int $maxVertexInputBindings { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxVertexInputBindings")] get {}}
    public int $maxVertexInputAttributeOffset { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxVertexInputAttributeOffset")] get {}}
    public int $maxVertexInputBindingStride { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxVertexInputBindingStride")] get {}}
    public int $maxVertexOutputComponents { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxVertexOutputComponents")] get {}}
    public int $maxTessellationGenerationLevel { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxTessellationGenerationLevel")] get {}}
    public int $maxTessellationPatchSize { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxTessellationPatchSize")] get {}}
    public int $maxTessellationControlPerVertexInputComponents { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxTessellationControlPerVertexInputComponents")] get {}}
    public int $maxTessellationControlPerVertexOutputComponents { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxTessellationControlPerVertexOutputComponents")] get {}}
    public int $maxTessellationControlPerPatchOutputComponents { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxTessellationControlPerPatchOutputComponents")] get {}}
    public int $maxTessellationControlTotalOutputComponents { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxTessellationControlTotalOutputComponents")] get {}}
    public int $maxTessellationEvaluationInputComponents { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxTessellationEvaluationInputComponents")] get {}}
    public int $maxTessellationEvaluationOutputComponents { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxTessellationEvaluationOutputComponents")] get {}}
    public int $maxGeometryShaderInvocations { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxGeometryShaderInvocations")] get {}}
    public int $maxGeometryInputComponents { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxGeometryInputComponents")] get {}}
    public int $maxGeometryOutputComponents { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxGeometryOutputComponents")] get {}}
    public int $maxGeometryOutputVertices { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxGeometryOutputVertices")] get {}}
    public int $maxGeometryTotalOutputComponents { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxGeometryTotalOutputComponents")] get {}}
    public int $maxFragmentInputComponents { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxFragmentInputComponents")] get {}}
    public int $maxFragmentOutputAttachments { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxFragmentOutputAttachments")] get {}}
    public int $maxFragmentDualSrcAttachments { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxFragmentDualSrcAttachments")] get {}}
    public int $maxFragmentCombinedOutputResources { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxFragmentCombinedOutputResources")] get {}}
    public int $maxComputeSharedMemorySize { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxComputeSharedMemorySize")] get {}}
    /** @var array{0:int,1:int,2:int} */
    public array $maxComputeWorkGroupCount { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxComputeWorkGroupCount")] get {}}
    public int $maxComputeWorkGroupInvocations { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxComputeWorkGroupInvocations")] get {}}
    /** @var array{0:int,1:int,2:int} */
    public array $maxComputeWorkGroupSize { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxComputeWorkGroupSize")] get {}}
    public int $subPixelPrecisionBits { #[Spem("libphulkan.so", "physicalDeviceLimits_getSubPixelPrecisionBits")] get {}}
    public int $subTexelPrecisionBits { #[Spem("libphulkan.so", "physicalDeviceLimits_getSubTexelPrecisionBits")] get {}}
    public int $mipmapPrecisionBits { #[Spem("libphulkan.so", "physicalDeviceLimits_getMipmapPrecisionBits")] get {}}
    public int $maxDrawIndexedIndexValue { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxDrawIndexedIndexValue")] get {}}
    public int $maxDrawIndirectCount { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxDrawIndirectCount")] get {}}
    public float $maxSamplerLodBias { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxSamplerLodBias")] get {}}
    public float $maxSamplerAnisotropy { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxSamplerAnisotropy")] get {}}
    public int $maxViewports { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxViewports")] get {}}
    /** @var array{0:int,1:int} */
    public array $maxViewportDimensions { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxViewportDimensions")] get {}}
    /** @var array{0:float,1:float} */
    public array $viewportBoundsRange { #[Spem("libphulkan.so", "physicalDeviceLimits_getViewportBoundsRange")] get {}}
    public int $viewportSubPixelBits { #[Spem("libphulkan.so", "physicalDeviceLimits_getViewportSubPixelBits")] get {}}
    public int $minMemoryMapAlignment { #[Spem("libphulkan.so", "physicalDeviceLimits_getMinMemoryMapAlignment")] get {}}
    public int $minTexelBufferOffsetAlignment { #[Spem("libphulkan.so", "physicalDeviceLimits_getMinTexelBufferOffsetAlignment")] get {}}
    public int $minUniformBufferOffsetAlignment { #[Spem("libphulkan.so", "physicalDeviceLimits_getMinUniformBufferOffsetAlignment")] get {}}
    public int $minStorageBufferOffsetAlignment { #[Spem("libphulkan.so", "physicalDeviceLimits_getMinStorageBufferOffsetAlignment")] get {}}
    public int $minTexelOffset { #[Spem("libphulkan.so", "physicalDeviceLimits_getMinTexelOffset")] get {}}
    public int $maxTexelOffset { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxTexelOffset")] get {}}
    public int $minTexelGatherOffset { #[Spem("libphulkan.so", "physicalDeviceLimits_getMinTexelGatherOffset")] get {}}
    public int $maxTexelGatherOffset { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxTexelGatherOffset")] get {}}
    public float $minInterpolationOffset { #[Spem("libphulkan.so", "physicalDeviceLimits_getMinInterpolationOffset")] get {}}
    public float $maxInterpolationOffset { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxInterpolationOffset")] get {}}
    public int $subPixelInterpolationOffsetBits { #[Spem("libphulkan.so", "physicalDeviceLimits_getSubPixelInterpolationOffsetBits")] get {}}
    public int $maxFramebufferWidth { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxFramebufferWidth")] get {}}
    public int $maxFramebufferHeight { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxFramebufferHeight")] get {}}
    public int $maxFramebufferLayers { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxFramebufferLayers")] get {}}
    /** @var list<SampleCountFlag> */ 
    public array $framebufferColorSampleCounts { #[Spem("libphulkan.so", "physicalDeviceLimits_getFramebufferColorSampleCounts")] get {}}
    /** @var list<SampleCountFlag> */ 
    public array $framebufferDepthSampleCounts { #[Spem("libphulkan.so", "physicalDeviceLimits_getFramebufferDepthSampleCounts")] get {}}
    /** @var list<SampleCountFlag> */ 
    public array $framebufferStencilSampleCounts { #[Spem("libphulkan.so", "physicalDeviceLimits_getFramebufferStencilSampleCounts")] get {}}
    /** @var list<SampleCountFlag> */ 
    public array $framebufferNoAttachmentsSampleCounts { #[Spem("libphulkan.so", "physicalDeviceLimits_getFramebufferNoAttachmentsSampleCounts")] get {}}
    public int $maxColorAttachments { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxColorAttachments")] get {}}
    /** @var list<SampleCountFlag> */ 
    public array $sampledImageColorSampleCounts { #[Spem("libphulkan.so", "physicalDeviceLimits_getSampledImageColorSampleCounts")] get {}}
    /** @var list<SampleCountFlag> */ 
    public array $sampledImageIntegerSampleCounts { #[Spem("libphulkan.so", "physicalDeviceLimits_getSampledImageIntegerSampleCounts")] get {}}
    /** @var list<SampleCountFlag> */ 
    public array $sampledImageDepthSampleCounts { #[Spem("libphulkan.so", "physicalDeviceLimits_getSampledImageDepthSampleCounts")] get {}}
    /** @var list<SampleCountFlag> */ 
    public array $sampledImageStencilSampleCounts { #[Spem("libphulkan.so", "physicalDeviceLimits_getSampledImageStencilSampleCounts")] get {}}
    /** @var list<SampleCountFlag> */ 
    public array $storageImageSampleCounts { #[Spem("libphulkan.so", "physicalDeviceLimits_getStorageImageSampleCounts")] get {}}
    public int $maxSampleMaskWords { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxSampleMaskWords")] get {}}
    public bool $timestampComputeAndGraphics { #[Spem("libphulkan.so", "physicalDeviceLimits_getTimestampComputeAndGraphics")] get {}}
    public float $timestampPeriod { #[Spem("libphulkan.so", "physicalDeviceLimits_getTimestampPeriod")] get {}}
    public int $maxClipDistances { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxClipDistances")] get {}}
    public int $maxCullDistances { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxCullDistances")] get {}}
    public int $maxCombinedClipAndCullDistances { #[Spem("libphulkan.so", "physicalDeviceLimits_getMaxCombinedClipAndCullDistances")] get {}}
    public int $discreteQueuePriorities { #[Spem("libphulkan.so", "physicalDeviceLimits_getDiscreteQueuePriorities")] get {}}
    /** @var array{0:float,1:float} */
    public array $pointSizeRange { #[Spem("libphulkan.so", "physicalDeviceLimits_getPointSizeRange")] get {}}
    /** @var array{0:float,1:float} */
    public array $lineWidthRange { #[Spem("libphulkan.so", "physicalDeviceLimits_getLineWidthRange")] get {}}
    public float $pointSizeGranularity { #[Spem("libphulkan.so", "physicalDeviceLimits_getPointSizeGranularity")] get {}}
    public float $lineWidthGranularity { #[Spem("libphulkan.so", "physicalDeviceLimits_getLineWidthGranularity")] get {}}
    public bool $strictLines { #[Spem("libphulkan.so", "physicalDeviceLimits_getStrictLines")] get {}}
    public bool $standardSampleLocations { #[Spem("libphulkan.so", "physicalDeviceLimits_getStandardSampleLocations")] get {}}

    public int $optimalBufferCopyOffsetAlignment { #[Spem("libphulkan.so", "physicalDeviceLimits_getOptimalBufferCopyOffsetAlignment")] get {}}
    public int $optimalBufferCopyRowPitchAlignment { #[Spem("libphulkan.so", "physicalDeviceLimits_getOptimalBufferCopyRowPitchAlignment")] get {}}
    public int $nonCoherentAtomSize { #[Spem("libphulkan.so", "physicalDeviceLimits_getNonCoherentAtomSize")] get {}}
}