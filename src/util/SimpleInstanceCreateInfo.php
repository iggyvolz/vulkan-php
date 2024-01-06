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
        if(empty($this->enabledExtensions)) {
            $extensionsPtr = null;
        } else {
            $extensionsCDataArr = array_map(function (string $s) use($vulkan): \FFI\CData {
                $cdata = $vulkan->ffi->new("char[" . strlen($s) + 1 . "]");
                FFI::memcpy($cdata, "$s\0", strlen($s) + 1);
                return $cdata;
            }, $this->enabledExtensions);
            $extensionsCData = $vulkan->ffi->new("char*[" . count($this->enabledExtensions) . "]");
            for($i = 0; $i < count($this->enabledExtensions); $i++) {
                $extensionsCData[$i] = FFI::addr($extensionsCDataArr[$i][0]);
            }
            $extensionsPtr = FFI::addr($extensionsCData[0]);
        }

        if(empty($this->enabledLayers)) {
           $layersPtr = null;
        } else {
            $layersCDataArr = array_map(function (string $s) use ($vulkan): \FFI\CData {
                $cdata = $vulkan->ffi->new("char[" . strlen($s) + 1 . "]");
                FFI::memcpy($cdata, "$s\0", strlen($s) + 1);
                return $cdata;
            }, $this->enabledLayers);
            $layersCData = $vulkan->ffi->new("char*[" . count($this->enabledLayers) . "]");
            for ($i = 0; $i < count($this->enabledLayers); $i++) {
                $layersCData[$i] = FFI::addr($layersCDataArr[$i][0]);
            }
            $layersPtr = FFI::addr($layersCData[0]);
        }

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
            ppEnabledLayerNames: new OpaquePointer($layersPtr),
            enabledExtensionCount: count($this->enabledExtensions),
            ppEnabledExtensionNames: new OpaquePointer($extensionsPtr),
        );
        return $vulkan->get("vkCreateInstance", VkInstance::class, ObjectPointer::of($createInfo), ObjectPointer::null());
    }
}