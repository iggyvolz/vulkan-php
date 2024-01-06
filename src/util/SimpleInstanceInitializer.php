<?php

namespace iggyvolz\vulkan\util;

use iggyvolz\vulkan\struct\VkExtensionProperties;
use iggyvolz\vulkan\struct\VkLayerProperties;

/**
 * Initialization class that deals with a typical case of vulkan for games:
 * - Creates an instance of Vulkan
 * - Gets an instance (with required/desired properties and checking minimum version)
 * - Gets a physical device (with required properties and best scored)
 * - Gets queues (todo)
 * - Gets logical device (todo)
 * - Starts a window with an appropriate windowing system
 */
final readonly class SimpleInstanceInitializer implements InstanceInitializer
{
    /**
     * @param list<string> $requiredExtensions
     * @param list<string> $requiredLayers
     * @param list<string> $desiredExtensions
     * @param list<string> $desiredLayers
     */
    public function __construct(
        private ?string  $applicationName = null,
        private ?Version $applicationVersion = null,
        private ?string  $engineName = null,
        private ?Version $engineVersion = null,
        private ?Version $minimumVulkanVersion = null,
        private ?Version $desiredVulkanVersion = null,
        private array    $requiredExtensions = [],
        private array    $requiredLayers = [],
        private array    $desiredExtensions = [],
        private array    $desiredLayers = [],
        private bool     $printDebugInfo = false,
    )
    {
        if(!is_null($this->minimumVulkanVersion) && !is_null($this->desiredVulkanVersion) && $this->desiredVulkanVersion->lessThan($this->minimumVulkanVersion)) {
            throw new \LogicException("Desired version must be greater than or equal to minimum version");
        }
    }

    private static function printEntry(string $name, array $properties): string
    {
        return "$name (" . implode(", ",
                array_map(fn(string $value, string $key) => "$key: $value", $properties, array_keys($properties))
            ) . ")" . PHP_EOL;
    }

    /**
     * @param Version $systemVersion
     * @param list<VkExtensionProperties> $availableExtensions
     * @param list<VkLayerProperties> $availableLayers
     * @return SimpleInstanceCreateInfo
     */
    public function getCreateInfo(Version $systemVersion, array $availableExtensions, array $availableLayers): SimpleInstanceCreateInfo
    {
        if($this->printDebugInfo) {
            echo "System Vulkan version: $systemVersion" . PHP_EOL;
            echo "Available extensions (" . count($availableExtensions) . "):" . PHP_EOL;
            foreach ($availableExtensions as $extension) {
                echo "- " . self::printEntry($extension->getExtensionName(), [
                        "version" => $extension->getSpecVersion(),
                        "url" => "https://registry.khronos.org/vulkan/specs/$systemVersion->major.$systemVersion->minor-extensions/man/html/".$extension->getExtensionName().".html"
                    ]);
            }
            echo "Available layers (" . count($availableLayers) . "):" . PHP_EOL;
            foreach($availableLayers as $layer) {
                echo "- " . self::printEntry($layer->getLayerName(), [
                        "description" => $layer->getDescription(),
                        "spec version" => Version::from($layer->getSpecVersion()),
                        "implementation version" => $layer->getImplementationVersion()
                    ]);
            }
        }
        if($this->minimumVulkanVersion?->greaterThan($systemVersion)) {
            throw new \RuntimeException("Unable to meet minimum version $this->minimumVulkanVersion, have $systemVersion");
        }
        if($this->desiredVulkanVersion?->lessThan($systemVersion)) {
            $actualVersion = $this->desiredVulkanVersion;
        } else {
            $actualVersion = $systemVersion;
        }
        $extensions = [];
        $layers = [];
        foreach($this->requiredExtensions as $extensionName) {
            foreach($availableExtensions as $potentialMatch) {
                if($potentialMatch->getExtensionName() === $extensionName) {
                    $extensions[] = $extensionName;
                    continue 2;
                }
            }
            throw new \RuntimeException("Unable to initialize vulkan, required extension $extensionName not available");
        }

        foreach($this->desiredExtensions as $extensionName) {
            foreach($availableExtensions as $potentialMatch) {
                if($potentialMatch->getExtensionName() === $extensionName) {
                    $extensions[] = $extensionName;
                    continue 2;
                }
            }
        }
        foreach($this->requiredLayers as $layerName) {
            foreach($availableLayers as $potentialMatch) {
                if($potentialMatch->getLayerName() === $layerName) {
                    $layers[] = $layerName;
                    continue 2;
                }
            }
            throw new \RuntimeException("Unable to initialize vulkan, required layer $layerName not available");
        }

        foreach($this->desiredLayers as $layerName) {
            foreach($availableLayers as $potentialMatch) {
                if($potentialMatch->getLayerName() === $layerName) {
                    $layers[] = $layerName;
                    continue 2;
                }
            }
        }

        return new SimpleInstanceCreateInfo(
            applicationName: $this->applicationName,
            applicationVersion: $this->applicationVersion?->toInt(),
            engineName: $this->engineName,
            engineVersion: $this->engineVersion?->toInt(),
            apiVersion: $actualVersion->toInt(),
            enabledExtensions: $extensions,
            enabledLayers: $layers
        );
    }
}