<?php

namespace iggyvolz\vulkan;

final class Vulkan
{
    private function __construct()
    {
    }

    public Version $version {get => Version::from(self::getVersion());}

    private static ?self $self = null;
    public static function get(): ?self
    {
        if(self::$self === null && self::getVersion() !== 0) {
            self::$self = new self();
        }
        return self::$self;
    }
    /** @var list<Layer> */
    public array $layers { #[\Spem("libphulkan.so", "getLayers")] get {}}
    /** @var list<Extension> */
    public array $extensions { get => $this->getExtensions();}
    /** @return list<Extension> */
    #[\Spem("libphulkan.so", "getExtensions")]
    public function getExtensions(?string $layerName = null): array
    {

    }

    /**
     * @param list<InstanceCreateFlag> $flags
     * @param list<string> $enabledLayers
     * @param list<string> $enabledExtensions
     */
    public function createInstance(
        string $applicationName,
        int $applicationVersion,
        string $engineName,
        int $engineVersion,
        Version $apiVersion,
        array $enabledLayers,
        array $enabledExtensions,
        array $flags = [],
    ): Instance
    {
        return $this->_createInstance(InstanceCreateFlag::toInt(...$flags), $applicationName, $applicationVersion, $engineName, $engineVersion, $apiVersion->toInt(), $enabledLayers, $enabledExtensions);
    }


    /**
     * @param list<string> $enabledLayers
     * @param list<string> $enabledExtensions
     */
    #[\Spem("libphulkan.so", "createInstance")]
    private function _createInstance(
        int $flags,
        string $applicationName,
        int $applicationVersion,
        string $engineName,
        int $engineVersion,
        int $apiVersion,
        array $enabledLayers,
        array $enabledExtensions): Instance
    {

    }

    public function __debugInfo(): ?array
    {
        return ["version" => $this->version, "layers" => $this->layers, "extensions" => $this->extensions];
    }

    #[\Spem("libphulkan.so", "getVersion")]
    private static function getVersion(): int
    {
    }
}