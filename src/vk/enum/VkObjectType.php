<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\enum;

enum VkObjectType: int
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
}
