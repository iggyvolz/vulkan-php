<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkStructureType: int
{
    case ApplicationInfo = 0;
    case InstanceCreateInfo = 1;
    case DeviceQueueCreateInfo = 2;
    case DeviceCreateInfo = 3;
    case SubmitInfo = 4;
    case MemoryAllocateInfo = 5;
    case MappedMemoryRange = 6;
    case BindSparseInfo = 7;
    case FenceCreateInfo = 8;
    case SemaphoreCreateInfo = 9;
    case EventCreateInfo = 10;
    case QueryPoolCreateInfo = 11;
    case BufferCreateInfo = 12;
    case BufferViewCreateInfo = 13;
    case ImageCreateInfo = 14;
    case ImageViewCreateInfo = 15;
    case ShaderModuleCreateInfo = 16;
    case PipelineCacheCreateInfo = 17;
    case PipelineShaderStageCreateInfo = 18;
    case PipelineVertexInputStateCreateInfo = 19;
    case PipelineInputAssemblyStateCreateInfo = 20;
    case PipelineTessellationStateCreateInfo = 21;
    case PipelineViewportStateCreateInfo = 22;
    case PipelineRasterizationStateCreateInfo = 23;
    case PipelineMultisampleStateCreateInfo = 24;
    case PipelineDepthStencilStateCreateInfo = 25;
    case PipelineColorBlendStateCreateInfo = 26;
    case PipelineDynamicStateCreateInfo = 27;
    case GraphicsPipelineCreateInfo = 28;
    case ComputePipelineCreateInfo = 29;
    case PipelineLayoutCreateInfo = 30;
    case SamplerCreateInfo = 31;
    case DescriptorSetLayoutCreateInfo = 32;
    case DescriptorPoolCreateInfo = 33;
    case DescriptorSetAllocateInfo = 34;
    case WriteDescriptorSet = 35;
    case CopyDescriptorSet = 36;
    case FramebufferCreateInfo = 37;
    case RenderPassCreateInfo = 38;
    case CommandPoolCreateInfo = 39;
    case CommandBufferAllocateInfo = 40;
    case CommandBufferInheritanceInfo = 41;
    case CommandBufferBeginInfo = 42;
    case RenderPassBeginInfo = 43;
    case BufferMemoryBarrier = 44;
    case ImageMemoryBarrier = 45;
    case MemoryBarrier = 46;
    case LoaderInstanceCreateInfo = 47;
    case LoaderDeviceCreateInfo = 48;
}
