<?php

namespace iggyvolz\vulkan;

final class Layer
{
    private function __construct()
    {
    }
    public function __debugInfo(): array
    {
        return ["name" => $this->name, "specVersion" => $this->specVersion, "implementationVersion" => $this->implementationVersion, "description" => $this->description];
    }

    public string $name { #[\Spem("libphulkan.so", "layer_getName")] get {}}
    public Version $specVersion {  get => Version::from($this->_specVersion);}

    private int $_specVersion { #[\Spem("libphulkan.so", "layer_getSpecVersion")] get {}}
    public int $implementationVersion { #[\Spem("libphulkan.so", "layer_getImplementationVersion")] get {}}
    public string $description { #[\Spem("libphulkan.so", "layer_getDescription")] get {}}

    #[\Spem("libphulkan.so", "layer_destruct")]
    public function __destruct()
    {
    }
}