<?php

namespace iggyvolz\vulkan\util;

use FFI;
use iggyvolz\vulkan\CDefs;
use iggyvolz\vulkan\enum\VkResult;
use iggyvolz\vulkan\struct\VkExtensionProperties;

trait VulkanBase
{
    /** @internal  */
    public readonly FFI $ffi;
    private static function libName(): string
    {
        return match(PHP_OS_FAMILY) {
            "Windows" => "vulkan-1.dll",
            "Linux" => "libvulkan.so",
            default => throw new \RuntimeException("Unsupported platform"),
        };
    }
    private final function __construct(
        private array $extensions,
    ){
        $cdefs = new CDefs();
        foreach($this->extensions as $extension) $cdefs->addExtension($extension);
        // debug
//        file_put_contents(__DIR__ . "/cdefs.h", $cdefs);
        $this->ffi = FFI::cdef($cdefs, self::libName());
    }
    public static function init(): self
    {
        // TODO extensions causing headaches
//        $extensions = array_map(fn(VkExtensionProperties $extensionProperties) =>  $extensionProperties->getExtensionName(),self::getInitialExtensions());
        $extensions = [];
        $version = self::getInitialVersion();
        for($i = 0; $i <= $version->minor; $i++) {
            $extensions[] = ("VK_VERSION_".$version->major."_$i");
        }
        return new self($extensions);
    }

    public function getVersion(): VulkanVersion
    {
        if(in_array("VK_VERSION_1_1", $this->extensions)) {
            return VulkanVersion::from($this->getInt("vkEnumerateInstanceVersion", "uint32_t"));
        } else {
            return new VulkanVersion(1, 0);
        }

    }

    private static function getInitialVersion(): VulkanVersion
    {
        try {
            return (new self(["VK_VERSION_1_0", "VK_VERSION_1_1"]))->getVersion();
        } catch(FFI\Exception) {
            // Try again, only loading 1.0
            return (new self(["VK_VERSION_1_0"]))->getVersion();
        }
    }

    /**
     * @return list<VkExtensionProperties>
     */
    private static function getInitialExtensions(): array
    {
        return (new self(["VK_VERSION_1_0"]))->getExtensions();
    }

    /**
     * @return list<VkExtensionProperties>
     */
    public function getExtensions(): array
    {
        // Get the list of extensions
        $count = IntPointer::new("uint32_t", $this);

        $this->vkEnumerateInstanceExtensionProperties(null, $count, ObjectPointer::null())->assert(VkResult::Incomplete);

        $extensionList = ObjectPointer::new($this, VkExtensionProperties::class, $count->get());

        $this->vkEnumerateInstanceExtensionProperties(null, $count, $extensionList)->assert();

        return $extensionList->getLen($count->get());
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