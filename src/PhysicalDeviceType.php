<?php

namespace iggyvolz\vulkan;

enum PhysicalDeviceType: int
{
    case Other = 0;
    case IntegratedGpu = 1;
    case DiscreteGpu = 2;
    case VirtualGpu = 3;
    case Cpu = 4;
}