<?php

namespace iggyvolz\vulkan\util;

use FFI;
use FFI\CData;

trait VulkanBase
{
    public readonly Version $systemVersion;

    /** @internal */
    public readonly FFI $ffi;
    private array $functionPointers = [];


    /**
     * @throws FunctionNotLoadedException
     */
    public function fnPtr(string $function): CData
    {
        if(array_key_exists($function, $this->functionPointers)) {
            return $this->functionPointers[$function];
        }
        $fnPtr = $this->ffi->vkGetInstanceProcAddr(null, $function);
        if(is_null($fnPtr)) throw new FunctionNotLoadedException($function);
        return $this->functionPointers[$function] = $this->ffi->cast("PFN_PHP_$function", $fnPtr);
    }
    private function exec(string $function, mixed ...$params): mixed
    {
        return $this->fnPtr($function)(...$params);
    }
    public final function __construct(
        ?string $libPath = null
    ){
        $this->ffi = FFI::cdef(file_get_contents(__DIR__ . "/../vk/vulkan.h"), $libPath ?? match(PHP_OS_FAMILY) {
            "Windows" => "vulkan-1.dll",
            "Linux" => "libvulkan.so",
            default => throw new \RuntimeException("Unsupported platform"),
        });
        try {
            $ptr = IntPointer::new("uint32_t", $this);
            $this->enumerateInstanceVersion($ptr)->assert();
            $this->systemVersion = Version::from($ptr->get());
        } catch(FunctionNotLoadedException) {
            // Welp we can't look up the version, and that was added in 1.1
            $this->systemVersion =  new Version(1, 0);
        }
    }
}