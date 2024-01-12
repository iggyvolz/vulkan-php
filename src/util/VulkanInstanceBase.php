<?php

namespace iggyvolz\vulkan\util;

use FFI\CData;

trait VulkanInstanceBase
{
    private array $functionPointers = [];

    /**
     * @throws FunctionNotLoadedException
     */
    public function fnPtr(string $function): CData
    {
        if(array_key_exists($function, $this->functionPointers)) {
            return $this->functionPointers[$function];
        }
        $fnPtr = $this->vulkan->ffi->vkGetInstanceProcAddr($this->cdata, $function);
        if(is_null($fnPtr)) throw new FunctionNotLoadedException($function);
        return $this->functionPointers[$function] = $this->vulkan->ffi->cast("PFN_PHP_$function", $fnPtr);
    }
    private function exec(string $function, mixed ...$params): mixed
    {
        return $this->fnPtr($function)($this->cdata, ...$params);
    }
}