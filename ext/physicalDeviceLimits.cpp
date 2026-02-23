#include "volk.h"
#include "php.h"
#include "util.hpp"
extern "C" {
   void ZEND_FASTCALL physicalDeviceLimits_getMaxImageDimension1D(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxImageDimension1D);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxImageDimension2D(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxImageDimension2D);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxImageDimension3D(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxImageDimension3D);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxImageDimensionCube(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxImageDimensionCube);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxImageArrayLayers(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxImageArrayLayers);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxTexelBufferElements(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxTexelBufferElements);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxUniformBufferRange(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxUniformBufferRange);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxStorageBufferRange(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxStorageBufferRange);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxPushConstantsSize(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxPushConstantsSize);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxMemoryAllocationCount(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxMemoryAllocationCount);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxSamplerAllocationCount(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxSamplerAllocationCount);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getBufferImageGranularity(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->bufferImageGranularity);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getSparseAddressSpaceSize(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->sparseAddressSpaceSize);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxBoundDescriptorSets(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxBoundDescriptorSets);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxPerStageDescriptorSamplers(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxPerStageDescriptorSamplers);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxPerStageDescriptorUniformBuffers(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxPerStageDescriptorUniformBuffers);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxPerStageDescriptorStorageBuffers(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxPerStageDescriptorStorageBuffers);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxPerStageDescriptorSampledImages(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxPerStageDescriptorSampledImages);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxPerStageDescriptorStorageImages(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxPerStageDescriptorStorageImages);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxPerStageDescriptorInputAttachments(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxPerStageDescriptorInputAttachments);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxPerStageResources(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxPerStageResources);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxDescriptorSetSamplers(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxDescriptorSetSamplers);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxDescriptorSetUniformBuffers(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxDescriptorSetUniformBuffers);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxDescriptorSetUniformBuffersDynamic(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxDescriptorSetUniformBuffersDynamic);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxDescriptorSetStorageBuffers(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxDescriptorSetStorageBuffers);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxDescriptorSetStorageBuffersDynamic(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxDescriptorSetStorageBuffersDynamic);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxDescriptorSetSampledImages(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxDescriptorSetSampledImages);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxDescriptorSetStorageImages(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxDescriptorSetStorageImages);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxDescriptorSetInputAttachments(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxDescriptorSetInputAttachments);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxVertexInputAttributes(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxVertexInputAttributes);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxVertexInputBindings(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxVertexInputBindings);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxVertexInputAttributeOffset(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxVertexInputAttributeOffset);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxVertexInputBindingStride(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxVertexInputBindingStride);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxVertexOutputComponents(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxVertexOutputComponents);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxTessellationGenerationLevel(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxTessellationGenerationLevel);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxTessellationPatchSize(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxTessellationPatchSize);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxTessellationControlPerVertexInputComponents(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxTessellationControlPerVertexInputComponents);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxTessellationControlPerVertexOutputComponents(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxTessellationControlPerVertexOutputComponents);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxTessellationControlPerPatchOutputComponents(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxTessellationControlPerPatchOutputComponents);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxTessellationControlTotalOutputComponents(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxTessellationControlTotalOutputComponents);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxTessellationEvaluationInputComponents(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxTessellationEvaluationInputComponents);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxTessellationEvaluationOutputComponents(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxTessellationEvaluationOutputComponents);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxGeometryShaderInvocations(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxGeometryShaderInvocations);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxGeometryInputComponents(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxGeometryInputComponents);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxGeometryOutputComponents(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxGeometryOutputComponents);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxGeometryOutputVertices(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxGeometryOutputVertices);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxGeometryTotalOutputComponents(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxGeometryTotalOutputComponents);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxFragmentInputComponents(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxFragmentInputComponents);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxFragmentOutputAttachments(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxFragmentOutputAttachments);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxFragmentDualSrcAttachments(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxFragmentDualSrcAttachments);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxFragmentCombinedOutputResources(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxFragmentCombinedOutputResources);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxComputeSharedMemorySize(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxComputeSharedMemorySize);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxComputeWorkGroupCount(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       array_init(return_value);
       add_next_index_long(return_value, self->maxComputeWorkGroupCount[0]);
       add_next_index_long(return_value, self->maxComputeWorkGroupCount[1]);
       add_next_index_long(return_value, self->maxComputeWorkGroupCount[2]);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxComputeWorkGroupInvocations(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxComputeWorkGroupInvocations);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxComputeWorkGroupSize(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       array_init(return_value);
       add_next_index_long(return_value, self->maxComputeWorkGroupSize[0]);
       add_next_index_long(return_value, self->maxComputeWorkGroupSize[1]);
       add_next_index_long(return_value, self->maxComputeWorkGroupSize[2]);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getSubPixelPrecisionBits(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->subPixelPrecisionBits);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getSubTexelPrecisionBits(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->subTexelPrecisionBits);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMipmapPrecisionBits(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->mipmapPrecisionBits);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxDrawIndexedIndexValue(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxDrawIndexedIndexValue);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxDrawIndirectCount(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxDrawIndirectCount);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxSamplerLodBias(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_DOUBLE(self->maxSamplerLodBias);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxSamplerAnisotropy(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_DOUBLE(self->maxSamplerAnisotropy);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxViewports(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxViewports);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxViewportDimensions(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       array_init(return_value);
       add_next_index_long(return_value, self->maxViewportDimensions[0]);
       add_next_index_long(return_value, self->maxViewportDimensions[1]);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getViewportBoundsRange(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       array_init(return_value);
       add_next_index_double(return_value, self->viewportBoundsRange[0]);
       add_next_index_double(return_value, self->viewportBoundsRange[1]);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getViewportSubPixelBits(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->viewportSubPixelBits);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMinMemoryMapAlignment(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->minMemoryMapAlignment);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMinTexelBufferOffsetAlignment(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->minTexelBufferOffsetAlignment);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMinUniformBufferOffsetAlignment(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->minUniformBufferOffsetAlignment);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMinStorageBufferOffsetAlignment(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->minStorageBufferOffsetAlignment);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMinTexelOffset(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->minTexelOffset);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxTexelOffset(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxTexelOffset);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMinTexelGatherOffset(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->minTexelGatherOffset);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxTexelGatherOffset(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxTexelGatherOffset);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMinInterpolationOffset(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_DOUBLE(self->minInterpolationOffset);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxInterpolationOffset(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_DOUBLE(self->maxInterpolationOffset);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getSubPixelInterpolationOffsetBits(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->subPixelInterpolationOffsetBits);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxFramebufferWidth(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxFramebufferWidth);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxFramebufferHeight(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxFramebufferHeight);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxFramebufferLayers(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxFramebufferLayers);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getFramebufferColorSampleCounts(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->framebufferColorSampleCounts);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getFramebufferDepthSampleCounts(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->framebufferDepthSampleCounts);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getFramebufferStencilSampleCounts(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->framebufferStencilSampleCounts);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getFramebufferNoAttachmentsSampleCounts(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->framebufferNoAttachmentsSampleCounts);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxColorAttachments(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxColorAttachments);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getSampledImageColorSampleCounts(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->sampledImageColorSampleCounts);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getSampledImageIntegerSampleCounts(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->sampledImageIntegerSampleCounts);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getSampledImageDepthSampleCounts(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->sampledImageDepthSampleCounts);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getSampledImageStencilSampleCounts(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->sampledImageStencilSampleCounts);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getStorageImageSampleCounts(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->storageImageSampleCounts);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxSampleMaskWords(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxSampleMaskWords);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getTimestampComputeAndGraphics(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_BOOL(self->timestampComputeAndGraphics);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getTimestampPeriod(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_DOUBLE(self->timestampPeriod);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxClipDistances(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxClipDistances);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxCullDistances(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxCullDistances);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getMaxCombinedClipAndCullDistances(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->maxCombinedClipAndCullDistances);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getDiscreteQueuePriorities(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->discreteQueuePriorities);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getPointSizeRange(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       array_init(return_value);
       add_next_index_double(return_value, self->pointSizeRange[0]);
       add_next_index_double(return_value, self->pointSizeRange[1]);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getLineWidthRange(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       array_init(return_value);
       add_next_index_double(return_value, self->lineWidthRange[0]);
       add_next_index_double(return_value, self->lineWidthRange[1]);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getPointSizeGranularity(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_DOUBLE(self->pointSizeGranularity);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getLineWidthGranularity(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_DOUBLE(self->lineWidthGranularity);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getStrictLines(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_BOOL(self->strictLines);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getStandardSampleLocations(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_BOOL(self->standardSampleLocations);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getOptimalBufferCopyOffsetAlignment(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->optimalBufferCopyOffsetAlignment);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getOptimalBufferCopyRowPitchAlignment(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->optimalBufferCopyRowPitchAlignment);
   }
   void ZEND_FASTCALL physicalDeviceLimits_getNonCoherentAtomSize(zend_execute_data *execute_data, zval *return_value) {
       auto* self = storage_get_const<VkPhysicalDeviceLimits>(execute_data);
       RETURN_LONG(self->nonCoherentAtomSize);
   }
}