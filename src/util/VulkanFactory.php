<?php

namespace iggyvolz\vulkan\util;

use FFI;
use iggyvolz\vulkan\enum\VkInstanceCreateFlagBits;
use iggyvolz\vulkan\enum\VkResult;
use iggyvolz\vulkan\enum\VkStructureType;
use iggyvolz\vulkan\ext\VkVersion10;
use iggyvolz\vulkan\ext\VkVersion11;
use iggyvolz\vulkan\ext\VkVersion12;
use iggyvolz\vulkan\ext\VkVersion13;
use iggyvolz\vulkan\struct\VkApplicationInfo;
use iggyvolz\vulkan\struct\VkExtensionProperties;
use iggyvolz\vulkan\struct\VkInstance;
use iggyvolz\vulkan\struct\VkInstanceCreateInfo;
use iggyvolz\vulkan\struct\VkLayerProperties;
use iggyvolz\vulkan\Vulkan;

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

    /**
     * @param list<VkInstanceCreateFlagBits> $flags
     * @param list<class-string> $extensions
     * @param list<string> $layers
     * @return VulkanNew
     */
    public function create(array $flags = [], array $extensions = [], array $layers = []): VulkanNew
    {
        $createInfo = VkInstanceCreateInfo::create($this->ffi, VkStructureType::InstanceCreateInfo);
        $appInfo = VkApplicationInfo::create($this->ffi, VkStructureType::ApplicationInfo);
        $createInfo->setPApplicationInfo($appInfo);
        $extensions[] = VkVersion10::class;
        if(!$this->instanceVersion->lessThan(new Version(1, 1))) {
            $extensions[] = VkVersion11::class;
        }
        if(!$this->instanceVersion->lessThan(new Version(1, 2))) {
            $extensions[] = VkVersion12::class;
        }
        if(!$this->instanceVersion->lessThan(new Version(1, 3))) {
            $extensions[] = VkVersion13::class;
        }
        return new VulkanNew($this->ffi, $this->createInstance($createInfo), $extensions);
    }

    private function createInstance(VkInstanceCreateInfo $createInfo): VkInstance
    {
        $proc = $this->ffi->vkGetInstanceProcAddr(null, "vkCreateInstance");
        $instance = $this->ffi->new("VkInstance", owned: false);
        VkResult::from($this->ffi->cast("PFN_PHP_vkCreateInstance", $proc)(
            FFI::addr($createInfo->cdata),
            null,
            FFI::addr($instance)
        ))->assert();
        return new VkInstance($instance);
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
        $memory = $this->ffi->new("VkExtensionProperties[" . $count->cdata . "]", false);
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
            $memory = $this->ffi->new("VkLayerProperties[" . $count->cdata . "]", owned: false);
            $result = VkResult::from($proc(FFI::addr($count), FFI::addr($memory[0])));
        } while($result === VkResult::Incomplete);
        return array_map(fn($i): VkLayerProperties  => new VkLayerProperties($memory[$i]), range(0, $count->cdata - 1));
    }
}