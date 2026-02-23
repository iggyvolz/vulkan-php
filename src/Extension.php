<?php

namespace iggyvolz\vulkan;

final class Extension
{
    private function __construct()
    {
    }
    public function __debugInfo(): array
    {
        return ["name" => $this->name, "specVersion" => $this->specVersion];
    }

    public string $name { #[\Spem("libphulkan.so", "extension_getName")] get {}}

    public int $specVersion { #[\Spem("libphulkan.so", "extension_getSpecVersion")] get {}}

    #[\Spem("libphulkan.so", "extension_destruct")]
    public function __destruct()
    {
    }
}