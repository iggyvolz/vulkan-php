<?php

namespace iggyvolz\vulkan\util;

use FFI;
use iggyvolz\vulkan\CDefs;
use iggyvolz\vulkan\enum\VkResult;
use iggyvolz\vulkan\struct\VkExtensionProperties;
use iggyvolz\vulkan\struct\VkInstance;
use iggyvolz\vulkan\struct\VkLayerProperties;

trait VulkanBase
{
    /** @internal  */
    public readonly FFI $ffi;
    public VkInstance $instance;
    private array $functionPointers = [];
    private function fnPtr(string $function): FFI\CData
    {
        $fnPtr = $this->tryFnPtr($function);
        if(is_null($fnPtr)) {
            throw new \RuntimeException("Could not find function $function");
        }
        return $fnPtr;
    }
    private function tryFnPtr(string $function): ?FFI\CData
    {
        return $this->functionPointers[$function] ??= $this->getFnPtr($function);
    }
    private function getFnPtr(string $function): ?FFI\CData
    {
        $isGlobal = in_array($function, ["vkEnumerateInstanceVersion", "vkEnumerateInstanceExtensionProperties", "vkEnumerateInstanceLayerProperties", "vkCreateInstance"]); // TODO
        if(!isset($this->instance) && !$isGlobal) {
            throw new \LogicException("Attempt to call non-global $function before instance initialized");
        }
        $fnPtr = $this->ffi->vkGetInstanceProcAddr($isGlobal ? null : $this->instance->cdata, $function);
        return is_null($fnPtr) ? null : $this->ffi->cast("PFN_PHP_$function", $fnPtr);
    }
    private static function libName(): string
    {
        return match(PHP_OS_FAMILY) {
            "Windows" => "vulkan-1.dll",
            "Linux" => "libvulkan.so",
            default => throw new \RuntimeException("Unsupported platform"),
        };
    }
    public final function __construct(
        InstanceInitializer $initializer
    ){
        $this->ffi = FFI::cdef(file_get_contents(__DIR__ . "/../vk/vulkan.h"), self::libName());

        if($this->tryFnPtr("vkEnumerateInstanceVersion")) {
            $this->systemVersion = Version::from($this->getInt("vkEnumerateInstanceVersion", "uint32_t"));
        } else {
            // Welp we can't look up the version, and that was added in 1.1
            $this->systemVersion =  new Version(1, 0);
        }
        $this->instance = $initializer->getCreateInfo(
            systemVersion: $this->systemVersion,
            availableExtensions: $this->enum("vkEnumerateInstanceExtensionProperties", VkExtensionProperties::class, null),
            availableLayers: $this->enum("vkEnumerateInstanceLayerProperties", VkLayerProperties::class)
        )($this);
        // todo fill instance()
    }
    public readonly Version $systemVersion;
    /** @deprecated  */
    public static function init(InstanceInitializer $initializer): self
    {
        return new self($initializer);
    }

    /** @deprecated  */
    public function getVersion(): Version
    {
        return $this->systemVersion;
//        if($this->tryFnPtr("vkEnumerateInstanceVersion")) {
//            return Version::from($this->getInt("vkEnumerateInstanceVersion", "uint32_t"));
//        } else {
//            // Welp we can't look up the version, and that was added in 1.1
//            return new Version(1, 0);
//        }

    }

    private static function getInitialVersion(): Version
    {
        try {
            return (new self(["VK_VERSION_1_0", "VK_VERSION_1_1"]))->getVersion();
        } catch(FFI\Exception) {
            // Try again, only loading 1.0
            return (new self(["VK_VERSION_1_0"]))->getVersion();
        }
    }

    /**
     * @deprecated
     * @return list<VkExtensionProperties>
     */
    public function getExtensions(): array
    {
        return $this->enum("vkEnumerateInstanceExtensionProperties", VkExtensionProperties::class, null);
    }

    /**
     * Utility method for taking an enum method and running the "call with null and a pointer to length, then a buffer with count length"
     * @template T
     * @param class-string<T> $type
     * @return list<T>
     */
    public function enum(string $method, string $type, mixed ...$args): array
    {
        $countPtr = IntPointer::new("uint32_t", $this);
        $this->$method(...[...$args, $countPtr, ObjectPointer::null()])?->assert(VkResult::Incomplete);

        $ptr = ObjectPointer::new($this, $type, $countPtr->get());
        $this->$method(...[...$args, $countPtr, $ptr])?->assert();
        return $ptr->getLen($countPtr->get());
    }

    /**
     * Utility method for taking a method and running with a pointer to an object then getting that pointer
     * @template T
     * @param class-string<T> $type
     * @return T
     */
    public function get(string $method, string $type, mixed ...$args): mixed
    {
        $ptr = ObjectPointer::new($this, $type);
        $this->$method(...[...$args, $ptr])?->assert();
        return $ptr->get();
    }

    /**
     * Utility method for taking a method and running with a pointer to an object then getting that pointer (but with IntPointer)
     */
    public function getInt(string $method, string $type, mixed ...$args): int
    {
        $ptr = IntPointer::new($type, $this);
        $this->$method(...[...$args, $ptr])?->assert();
        return $ptr->get();
    }
}