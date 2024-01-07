<?php

namespace iggyvolz\vulkan\util;

use FFI;
use iggyvolz\vulkan\enum\VkStructureType;
use iggyvolz\vulkan\struct\VkApplicationInfo;
use iggyvolz\vulkan\struct\VkInstance;
use iggyvolz\vulkan\struct\VkInstanceCreateInfo;
use iggyvolz\vulkan\Vulkan;

class SimpleInstanceCreateInfo
{
    public function __construct(
        private ?string $applicationName = null,
        private ?int $applicationVersion = null,
        private ?string $engineName = null,
        private ?int $engineVersion = null,
        private ?int $apiVersion = null,
        private ?array $enabledExtensions = [],
        private ?array $enabledLayers = []
    )
    {
    }

    public function __invoke(Vulkan $vulkan): VkInstance
    {
        $createInfo = VkInstanceCreateInfo::create($vulkan,
            sType: VkStructureType::InstanceCreateInfo,
            pApplicationInfo: ObjectPointer::of(VkApplicationInfo::create($vulkan,
                sType: VkStructureType::ApplicationInfo,
                pApplicationName: $this->applicationName,
                applicationVersion: $this->applicationVersion,
                pEngineName: $this->engineName,
                engineVersion: $this->engineVersion,
                apiVersion: $this->apiVersion
            )),
            enabledLayerCount: count($this->enabledLayers),
            ppEnabledLayerNames: $vulkan->stringsToDoubleCharPointer(...$this->enabledLayers),
            enabledExtensionCount: count($this->enabledExtensions),
            ppEnabledExtensionNames: $vulkan->stringsToDoubleCharPointer(...$this->enabledExtensions),
        );
        return $vulkan->get("vkCreateInstance", VkInstance::class, ObjectPointer::of($createInfo), ObjectPointer::null());
    }
}