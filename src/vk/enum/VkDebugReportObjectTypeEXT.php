<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkDebugReportObjectTypeEXT: int
{
    case Unknown = 0;
    case Instance = 1;
    case PhysicalDevice = 2;
    case Device = 3;
    case Queue = 4;
    case Semaphore = 5;
    case CommandBuffer = 6;
    case Fence = 7;
    case DeviceMemory = 8;
    case Buffer = 9;
    case Image = 10;
    case Event = 11;
    case QueryPool = 12;
    case BufferView = 13;
    case ImageView = 14;
    case ShaderModule = 15;
    case PipelineCache = 16;
    case PipelineLayout = 17;
    case RenderPass = 18;
    case Pipeline = 19;
    case DescriptorSetLayout = 20;
    case Sampler = 21;
    case DescriptorPool = 22;
    case DescriptorSet = 23;
    case Framebuffer = 24;
    case CommandPool = 25;
    case SurfaceKhr = 26;
    case SwapchainKhr = 27;
    case DebugReportCallbackExt = 28;
    case DisplayKhr = 29;
    case DisplayModeKhr = 30;
    case ValidationCacheExt = 33;
    case SamplerYcbcrConversion = 1000156000;
    case DescriptorUpdateTemplate = 1000085000;
    case CuModuleNvx = 1000029000;
    case CuFunctionNvx = 1000029001;
    case AccelerationStructureKhr = 1000150000;
    case AccelerationStructureNv = 1000165000;
    case CudaModuleNv = 1000307000;
    case CudaFunctionNv = 1000307001;
    case BufferCollectionFuchsia = 1000366000;
}
