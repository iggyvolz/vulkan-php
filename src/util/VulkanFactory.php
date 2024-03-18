<?php

namespace iggyvolz\vulkan\util;

use FFI;
use iggyvolz\vulkan\enum\VkResult;
use iggyvolz\vulkan\struct\VkExtensionProperties;
use iggyvolz\vulkan\struct\VkInstanceCreateInfo;
use iggyvolz\vulkan\struct\VkLayerProperties;

class VulkanFactory
{
    public readonly \FFI $ffi;
    public readonly Version $instanceVersion;
    /**
     * @var list<VkLayerProperties>
     */
    public readonly array $layers;
    /**
     * @var list<VkExtensionProperties>
     */
    public readonly array $instanceExtensions;
    /**
     * @var array<string,list<VkExtensionProperties>>
     */
    public readonly array $layerExtensions;

    public final function __construct(
        ?string $libPath = null
    ){
        $this->ffi = FFI::cdef(file_get_contents(__DIR__ . "/../vk/vulkan.h"), $libPath ?? match(PHP_OS_FAMILY) {
            "Windows" => "vulkan-1.dll",
            "Linux" => "libvulkan.so",
            default => throw new \RuntimeException("Unsupported platform"),
        });

        $this->instanceVersion = $this->getInstanceVersion();
        $this->layers = $this->getInstanceLayerProperties();
        $this->instanceExtensions = $this->getInstanceExtensionProperties();
        $this->layerExtensions = array_combine(
            array_map(fn(VkLayerProperties $layer): string => $layer->getLayerName(), $this->layers),
            array_map(fn(VkLayerProperties $layer): array => $this->getInstanceExtensionProperties($layer->getLayerName()), $this->layers),
        );

    }

    public function createInstance(VkInstanceCreateInfo $createInfo): VulkanNew
    {
        $proc = $this->ffi->vkGetInstanceProcAddr(null, "vkCreateInstance");
        $instance = $this->ffi->new("VkInstance");
        VkResult::from($this->ffi->cast("PFN_PHP_vkCreateInstance", $proc)(
            FFI::addr($createInfo->cdata),
            null,
            FFI::addr($instance)
        ))->assert();
        $extensions = [];
        return new VulkanNew($this->ffi, $instance, $extensions);
    }

    private function getInstanceVersion(): Version {
        $version = $this->ffi->new("uint32_t");
        $proc = $this->ffi->vkGetInstanceProcAddr(null, "vkEnumerateInstanceVersion");
        if(is_null($proc)) {
            return new Version(1, 0);
        }
        $this->ffi->cast("PFN_PHP_vkEnumerateInstanceVersion", $proc)(FFI::addr($version));
        return Version::from($version->cdata);
    }

    /**
     * @return list<VkExtensionProperties>
     */
    private function getInstanceExtensionProperties(?string $layerName = null): array {
        $count = $this->ffi->new("uint32_t");
        $proc = $this->ffi->vkGetInstanceProcAddr(null, "vkEnumerateInstanceExtensionProperties");
        if(is_null($proc)) {
            return [];
        }
        $proc = $this->ffi->cast("PFN_PHP_vkEnumerateInstanceExtensionProperties", $proc);
        $proc($layerName, FFI::addr($count), null);
        if($count->cdata === 0) return [];
        $memory = $this->ffi->new("VkExtensionProperties[" . $count->cdata . "]", false, true);
        VkResult::from($proc($layerName, FFI::addr($count), FFI::addr($memory[0])));
        return array_map(fn($i): VkExtensionProperties  => new VkExtensionProperties($memory[$i]), range(0, $count->cdata - 1));
    }

    /**
     * @return list<VkLayerProperties>
     */
    private function getInstanceLayerProperties(): array
    {
        $count = $this->ffi->new("uint32_t");
        $proc = $this->ffi->vkGetInstanceProcAddr(null, "vkEnumerateInstanceLayerProperties");
        if(is_null($proc)) {
            return [];
        }
        $proc = $this->ffi->cast("PFN_PHP_vkEnumerateInstanceLayerProperties", $proc);
        VkResult::from($proc(FFI::addr($count), null));
        do
        {
            if($count->cdata === 0) return [];
            $memory = $this->ffi->new("VkLayerProperties[" . $count->cdata . "]");
            $result = VkResult::from($proc(FFI::addr($count), FFI::addr($memory[0])));
        } while($result === VkResult::Incomplete);
        return array_map(fn($i): VkLayerProperties  => new VkLayerProperties($memory[$i]), range(0, $count->cdata - 1));
    }
}