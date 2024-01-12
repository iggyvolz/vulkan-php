<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDevice implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return ['_type' => static::class];
    }

    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \iggyvolz\vulkan\Vulkan $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceProperties> $pProperties VkPhysicalDeviceProperties*
     */
    public function getPhysicalDeviceProperties(\iggyvolz\vulkan\util\ObjectPointer $pProperties): void
    {
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceProperties',
            $pPropertiesC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\IntPointer $pQueueFamilyPropertyCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkQueueFamilyProperties> $pQueueFamilyProperties VkQueueFamilyProperties*
     */
    public function getPhysicalDeviceQueueFamilyProperties(
        \iggyvolz\vulkan\util\IntPointer $pQueueFamilyPropertyCount,
        \iggyvolz\vulkan\util\ObjectPointer $pQueueFamilyProperties,
    ): void
    {
        $phpValue = $pQueueFamilyPropertyCount;
        $cValue = $phpValue->cdata;
        $pQueueFamilyPropertyCountC = $cValue;
        $phpValue = $pQueueFamilyProperties;
        $cValue = $phpValue->cdata;
        $pQueueFamilyPropertiesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceQueueFamilyProperties',
            $pQueueFamilyPropertyCountC,
            $pQueueFamilyPropertiesC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceMemoryProperties> $pMemoryProperties VkPhysicalDeviceMemoryProperties*
     */
    public function getPhysicalDeviceMemoryProperties(\iggyvolz\vulkan\util\ObjectPointer $pMemoryProperties): void
    {
        $phpValue = $pMemoryProperties;
        $cValue = $phpValue->cdata;
        $pMemoryPropertiesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceMemoryProperties',
            $pMemoryPropertiesC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\Pointer $pFeatures VkPhysicalDeviceFeatures*
     */
    public function getPhysicalDeviceFeatures(\iggyvolz\vulkan\util\Pointer $pFeatures): void
    {
        $phpValue = $pFeatures;
        $cValue = $phpValue->cdata;
        $pFeaturesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceFeatures',
            $pFeaturesC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkFormat $format VkFormat
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkFormatProperties> $pFormatProperties VkFormatProperties*
     */
    public function getPhysicalDeviceFormatProperties(
        \iggyvolz\vulkan\enum\VkFormat $format,
        \iggyvolz\vulkan\util\ObjectPointer $pFormatProperties,
    ): void
    {
        $phpValue = $format;
        $cValue = $phpValue->value;
        $formatC = $cValue;
        $phpValue = $pFormatProperties;
        $cValue = $phpValue->cdata;
        $pFormatPropertiesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceFormatProperties',
            $formatC,
            $pFormatPropertiesC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkFormat $format VkFormat
     * @param \iggyvolz\vulkan\enum\VkImageType $type VkImageType
     * @param \iggyvolz\vulkan\enum\VkImageTiling $tiling VkImageTiling
     * @param list<\iggyvolz\vulkan\enum\VkImageUsageFlagBits> $usage VkImageUsageFlags
     * @param list<\iggyvolz\vulkan\enum\VkImageCreateFlagBits> $flags VkImageCreateFlags
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageFormatProperties> $pImageFormatProperties VkImageFormatProperties*
     * returns VkResult
     */
    public function getPhysicalDeviceImageFormatProperties(
        \iggyvolz\vulkan\enum\VkFormat $format,
        \iggyvolz\vulkan\enum\VkImageType $type,
        \iggyvolz\vulkan\enum\VkImageTiling $tiling,
        array $usage,
        array $flags,
        \iggyvolz\vulkan\util\ObjectPointer $pImageFormatProperties,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $format;
        $cValue = $phpValue->value;
        $formatC = $cValue;
        $phpValue = $type;
        $cValue = $phpValue->value;
        $typeC = $cValue;
        $phpValue = $tiling;
        $cValue = $phpValue->value;
        $tilingC = $cValue;
        $phpValue = $usage;
        $cValue = \iggyvolz\vulkan\enum\VkImageUsageFlagBits::toInt(...$phpValue);
        $usageC = $cValue;
        $phpValue = $flags;
        $cValue = \iggyvolz\vulkan\enum\VkImageCreateFlagBits::toInt(...$phpValue);
        $flagsC = $cValue;
        $phpValue = $pImageFormatProperties;
        $cValue = $phpValue->cdata;
        $pImageFormatPropertiesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceImageFormatProperties',
            $formatC,
            $typeC,
            $tilingC,
            $usageC,
            $flagsC,
            $pImageFormatPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDeviceCreateInfo> $pCreateInfo const VkDeviceCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDevice> $pDevice VkDevice*
     * returns VkResult
     */
    public function createDevice(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pDevice,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pDevice;
        $cValue = $phpValue->cdata;
        $pDeviceC = $cValue;
        $cValue = $this->exec('vkCreateDevice',
            $pCreateInfoC,
            $pAllocatorC,
            $pDeviceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\IntPointer $pPropertyCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkLayerProperties> $pProperties VkLayerProperties*
     * returns VkResult
     */
    public function enumerateDeviceLayerProperties(
        \iggyvolz\vulkan\util\IntPointer $pPropertyCount,
        \iggyvolz\vulkan\util\ObjectPointer $pProperties,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pPropertyCount;
        $cValue = $phpValue->cdata;
        $pPropertyCountC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->exec('vkEnumerateDeviceLayerProperties',
            $pPropertyCountC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @return list<\iggyvolz\vulkan\struct\VkLayerProperties>
     */
    public function getDeviceLayerProperties(): array
    {
        $count = \iggyvolz\vulkan\util\IntPointer::new('uint32_t', $this->vulkan);
        $this->enumerateDeviceLayerProperties(...[...\func_get_args(), $count, \iggyvolz\vulkan\util\ObjectPointer::null($this->vulkan)])->assert(\iggyvolz\vulkan\enum\VkResult::Incomplete);
        $ptr = \iggyvolz\vulkan\util\ObjectPointer::new($this->vulkan, '\\iggyvolz\\vulkan\\struct\\VkLayerProperties', $count->get());
        $this->enumerateDeviceLayerProperties(...[...\func_get_args(), $count, $ptr])->assert();
        return $ptr->getLen($count->get());
    }

    /**
     * @param ?string $pLayerName const char*
     * @param \iggyvolz\vulkan\util\IntPointer $pPropertyCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkExtensionProperties> $pProperties VkExtensionProperties*
     * returns VkResult
     */
    public function enumerateDeviceExtensionProperties(
        ?string $pLayerName,
        \iggyvolz\vulkan\util\IntPointer $pPropertyCount,
        \iggyvolz\vulkan\util\ObjectPointer $pProperties,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pLayerName;
        $cValue = $phpValue;
        $pLayerNameC = $cValue;
        $phpValue = $pPropertyCount;
        $cValue = $phpValue->cdata;
        $pPropertyCountC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->exec('vkEnumerateDeviceExtensionProperties',
            $pLayerNameC,
            $pPropertyCountC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param ?string pLayerName
     * @return list<\iggyvolz\vulkan\struct\VkExtensionProperties>
     */
    public function getDeviceExtensionProperties(?string $pLayerName): array
    {
        $count = \iggyvolz\vulkan\util\IntPointer::new('uint32_t', $this->vulkan);
        $this->enumerateDeviceExtensionProperties(...[...\func_get_args(), $count, \iggyvolz\vulkan\util\ObjectPointer::null($this->vulkan)])->assert(\iggyvolz\vulkan\enum\VkResult::Incomplete);
        $ptr = \iggyvolz\vulkan\util\ObjectPointer::new($this->vulkan, '\\iggyvolz\\vulkan\\struct\\VkExtensionProperties', $count->get());
        $this->enumerateDeviceExtensionProperties(...[...\func_get_args(), $count, $ptr])->assert();
        return $ptr->getLen($count->get());
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkFormat $format VkFormat
     * @param \iggyvolz\vulkan\enum\VkImageType $type VkImageType
     * @param \iggyvolz\vulkan\enum\VkSampleCountFlagBits $samples VkSampleCountFlagBits
     * @param list<\iggyvolz\vulkan\enum\VkImageUsageFlagBits> $usage VkImageUsageFlags
     * @param \iggyvolz\vulkan\enum\VkImageTiling $tiling VkImageTiling
     * @param \iggyvolz\vulkan\util\IntPointer $pPropertyCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSparseImageFormatProperties> $pProperties VkSparseImageFormatProperties*
     */
    public function getPhysicalDeviceSparseImageFormatProperties(
        \iggyvolz\vulkan\enum\VkFormat $format,
        \iggyvolz\vulkan\enum\VkImageType $type,
        \iggyvolz\vulkan\enum\VkSampleCountFlagBits $samples,
        array $usage,
        \iggyvolz\vulkan\enum\VkImageTiling $tiling,
        \iggyvolz\vulkan\util\IntPointer $pPropertyCount,
        \iggyvolz\vulkan\util\ObjectPointer $pProperties,
    ): void
    {
        $phpValue = $format;
        $cValue = $phpValue->value;
        $formatC = $cValue;
        $phpValue = $type;
        $cValue = $phpValue->value;
        $typeC = $cValue;
        $phpValue = $samples;
        $cValue = $phpValue->value;
        $samplesC = $cValue;
        $phpValue = $usage;
        $cValue = \iggyvolz\vulkan\enum\VkImageUsageFlagBits::toInt(...$phpValue);
        $usageC = $cValue;
        $phpValue = $tiling;
        $cValue = $phpValue->value;
        $tilingC = $cValue;
        $phpValue = $pPropertyCount;
        $cValue = $phpValue->cdata;
        $pPropertyCountC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceSparseImageFormatProperties',
            $formatC,
            $typeC,
            $samplesC,
            $usageC,
            $tilingC,
            $pPropertyCountC,
            $pPropertiesC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\IntPointer $pPropertyCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplayPropertiesKHR> $pProperties VkDisplayPropertiesKHR*
     * returns VkResult
     */
    public function getPhysicalDeviceDisplayPropertiesKHR(
        \iggyvolz\vulkan\util\IntPointer $pPropertyCount,
        \iggyvolz\vulkan\util\ObjectPointer $pProperties,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pPropertyCount;
        $cValue = $phpValue->cdata;
        $pPropertyCountC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceDisplayPropertiesKHR',
            $pPropertyCountC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\IntPointer $pPropertyCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplayPlanePropertiesKHR> $pProperties VkDisplayPlanePropertiesKHR*
     * returns VkResult
     */
    public function getPhysicalDeviceDisplayPlanePropertiesKHR(
        \iggyvolz\vulkan\util\IntPointer $pPropertyCount,
        \iggyvolz\vulkan\util\ObjectPointer $pProperties,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pPropertyCount;
        $cValue = $phpValue->cdata;
        $pPropertyCountC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceDisplayPlanePropertiesKHR',
            $pPropertyCountC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param int $planeIndex uint32_t
     * @param \iggyvolz\vulkan\util\IntPointer $pDisplayCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplayKHR> $pDisplays VkDisplayKHR*
     * returns VkResult
     */
    public function getDisplayPlaneSupportedDisplaysKHR(
        int $planeIndex,
        \iggyvolz\vulkan\util\IntPointer $pDisplayCount,
        \iggyvolz\vulkan\util\ObjectPointer $pDisplays,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $planeIndex;
        $cValue = $phpValue;
        $planeIndexC = $cValue;
        $phpValue = $pDisplayCount;
        $cValue = $phpValue->cdata;
        $pDisplayCountC = $cValue;
        $phpValue = $pDisplays;
        $cValue = $phpValue->cdata;
        $pDisplaysC = $cValue;
        $cValue = $this->exec('vkGetDisplayPlaneSupportedDisplaysKHR',
            $planeIndexC,
            $pDisplayCountC,
            $pDisplaysC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDisplayKHR $display VkDisplayKHR
     * @param \iggyvolz\vulkan\util\IntPointer $pPropertyCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplayModePropertiesKHR> $pProperties VkDisplayModePropertiesKHR*
     * returns VkResult
     */
    public function getDisplayModePropertiesKHR(
        VkDisplayKHR $display,
        \iggyvolz\vulkan\util\IntPointer $pPropertyCount,
        \iggyvolz\vulkan\util\ObjectPointer $pProperties,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $display;
        $cValue = $phpValue->cdata;
        $displayC = $cValue;
        $phpValue = $pPropertyCount;
        $cValue = $phpValue->cdata;
        $pPropertyCountC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->exec('vkGetDisplayModePropertiesKHR',
            $displayC,
            $pPropertyCountC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDisplayKHR $display VkDisplayKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplayModeCreateInfoKHR> $pCreateInfo const VkDisplayModeCreateInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplayModeKHR> $pMode VkDisplayModeKHR*
     * returns VkResult
     */
    public function createDisplayModeKHR(
        VkDisplayKHR $display,
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pMode,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $display;
        $cValue = $phpValue->cdata;
        $displayC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pMode;
        $cValue = $phpValue->cdata;
        $pModeC = $cValue;
        $cValue = $this->exec('vkCreateDisplayModeKHR',
            $displayC,
            $pCreateInfoC,
            $pAllocatorC,
            $pModeC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDisplayModeKHR $mode VkDisplayModeKHR
     * @param int $planeIndex uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplayPlaneCapabilitiesKHR> $pCapabilities VkDisplayPlaneCapabilitiesKHR*
     * returns VkResult
     */
    public function getDisplayPlaneCapabilitiesKHR(
        VkDisplayModeKHR $mode,
        int $planeIndex,
        \iggyvolz\vulkan\util\ObjectPointer $pCapabilities,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $mode;
        $cValue = $phpValue->cdata;
        $modeC = $cValue;
        $phpValue = $planeIndex;
        $cValue = $phpValue;
        $planeIndexC = $cValue;
        $phpValue = $pCapabilities;
        $cValue = $phpValue->cdata;
        $pCapabilitiesC = $cValue;
        $cValue = $this->exec('vkGetDisplayPlaneCapabilitiesKHR',
            $modeC,
            $planeIndexC,
            $pCapabilitiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param int $queueFamilyIndex uint32_t
     * @param \iggyvolz\vulkan\struct\VkSurfaceKHR $surface VkSurfaceKHR
     * @param \iggyvolz\vulkan\util\Pointer $pSupported VkBool32*
     * returns VkResult
     */
    public function getPhysicalDeviceSurfaceSupportKHR(
        int $queueFamilyIndex,
        VkSurfaceKHR $surface,
        \iggyvolz\vulkan\util\Pointer $pSupported,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $queueFamilyIndex;
        $cValue = $phpValue;
        $queueFamilyIndexC = $cValue;
        $phpValue = $surface;
        $cValue = $phpValue->cdata;
        $surfaceC = $cValue;
        $phpValue = $pSupported;
        $cValue = $phpValue->cdata;
        $pSupportedC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceSurfaceSupportKHR',
            $queueFamilyIndexC,
            $surfaceC,
            $pSupportedC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkSurfaceKHR $surface VkSurfaceKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceCapabilitiesKHR> $pSurfaceCapabilities VkSurfaceCapabilitiesKHR*
     * returns VkResult
     */
    public function getPhysicalDeviceSurfaceCapabilitiesKHR(
        VkSurfaceKHR $surface,
        \iggyvolz\vulkan\util\ObjectPointer $pSurfaceCapabilities,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $surface;
        $cValue = $phpValue->cdata;
        $surfaceC = $cValue;
        $phpValue = $pSurfaceCapabilities;
        $cValue = $phpValue->cdata;
        $pSurfaceCapabilitiesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceSurfaceCapabilitiesKHR',
            $surfaceC,
            $pSurfaceCapabilitiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkSurfaceKHR $surface VkSurfaceKHR
     * @param \iggyvolz\vulkan\util\IntPointer $pSurfaceFormatCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceFormatKHR> $pSurfaceFormats VkSurfaceFormatKHR*
     * returns VkResult
     */
    public function getPhysicalDeviceSurfaceFormatsKHR(
        VkSurfaceKHR $surface,
        \iggyvolz\vulkan\util\IntPointer $pSurfaceFormatCount,
        \iggyvolz\vulkan\util\ObjectPointer $pSurfaceFormats,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $surface;
        $cValue = $phpValue->cdata;
        $surfaceC = $cValue;
        $phpValue = $pSurfaceFormatCount;
        $cValue = $phpValue->cdata;
        $pSurfaceFormatCountC = $cValue;
        $phpValue = $pSurfaceFormats;
        $cValue = $phpValue->cdata;
        $pSurfaceFormatsC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceSurfaceFormatsKHR',
            $surfaceC,
            $pSurfaceFormatCountC,
            $pSurfaceFormatsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkSurfaceKHR $surface VkSurfaceKHR
     * @param \iggyvolz\vulkan\util\IntPointer $pPresentModeCount uint32_t*
     * @param \iggyvolz\vulkan\util\Pointer $pPresentModes VkPresentModeKHR*
     * returns VkResult
     */
    public function getPhysicalDeviceSurfacePresentModesKHR(
        VkSurfaceKHR $surface,
        \iggyvolz\vulkan\util\IntPointer $pPresentModeCount,
        \iggyvolz\vulkan\util\Pointer $pPresentModes,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $surface;
        $cValue = $phpValue->cdata;
        $surfaceC = $cValue;
        $phpValue = $pPresentModeCount;
        $cValue = $phpValue->cdata;
        $pPresentModeCountC = $cValue;
        $phpValue = $pPresentModes;
        $cValue = $phpValue->cdata;
        $pPresentModesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceSurfacePresentModesKHR',
            $surfaceC,
            $pPresentModeCountC,
            $pPresentModesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param int $queueFamilyIndex uint32_t
     * @param \iggyvolz\vulkan\util\Pointer $display struct wl_display*
     * returns VkBool32
     */
    public function getPhysicalDeviceWaylandPresentationSupportKHR(
        int $queueFamilyIndex,
        \iggyvolz\vulkan\util\Pointer $display,
    ): bool
    {
        $phpValue = $queueFamilyIndex;
        $cValue = $phpValue;
        $queueFamilyIndexC = $cValue;
        $phpValue = $display;
        $cValue = $phpValue->cdata;
        $displayC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceWaylandPresentationSupportKHR',
            $queueFamilyIndexC,
            $displayC,
        );
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    /**
     * @param int $queueFamilyIndex uint32_t
     * returns VkBool32
     */
    public function getPhysicalDeviceWin32PresentationSupportKHR(int $queueFamilyIndex): bool
    {
        $phpValue = $queueFamilyIndex;
        $cValue = $phpValue;
        $queueFamilyIndexC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceWin32PresentationSupportKHR',
            $queueFamilyIndexC,
        );
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    /**
     * @param int $queueFamilyIndex uint32_t
     * @param \iggyvolz\vulkan\util\Pointer $dpy Display*
     * @param int $visualID VisualID
     * returns VkBool32
     */
    public function getPhysicalDeviceXlibPresentationSupportKHR(
        int $queueFamilyIndex,
        \iggyvolz\vulkan\util\Pointer $dpy,
        int $visualID,
    ): bool
    {
        $phpValue = $queueFamilyIndex;
        $cValue = $phpValue;
        $queueFamilyIndexC = $cValue;
        $phpValue = $dpy;
        $cValue = $phpValue->cdata;
        $dpyC = $cValue;
        $phpValue = $visualID;
        $cValue = $phpValue;
        $visualIDC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceXlibPresentationSupportKHR',
            $queueFamilyIndexC,
            $dpyC,
            $visualIDC,
        );
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    /**
     * @param int $queueFamilyIndex uint32_t
     * @param \iggyvolz\vulkan\util\Pointer $connection xcb_connection_t*
     * @param mixed $visual_id xcb_visualid_t
     * returns VkBool32
     */
    public function getPhysicalDeviceXcbPresentationSupportKHR(
        int $queueFamilyIndex,
        \iggyvolz\vulkan\util\Pointer $connection,
        mixed $visual_id,
    ): bool
    {
        $phpValue = $queueFamilyIndex;
        $cValue = $phpValue;
        $queueFamilyIndexC = $cValue;
        $phpValue = $connection;
        $cValue = $phpValue->cdata;
        $connectionC = $cValue;
        $phpValue = $visual_id;
        throw new \LogicException("Dummy transformer!");
        $visual_idC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceXcbPresentationSupportKHR',
            $queueFamilyIndexC,
            $connectionC,
            $visual_idC,
        );
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    /**
     * @param int $queueFamilyIndex uint32_t
     * @param \iggyvolz\vulkan\util\Pointer $dfb IDirectFB*
     * returns VkBool32
     */
    public function getPhysicalDeviceDirectFBPresentationSupportEXT(
        int $queueFamilyIndex,
        \iggyvolz\vulkan\util\Pointer $dfb,
    ): bool
    {
        $phpValue = $queueFamilyIndex;
        $cValue = $phpValue;
        $queueFamilyIndexC = $cValue;
        $phpValue = $dfb;
        $cValue = $phpValue->cdata;
        $dfbC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceDirectFBPresentationSupportEXT',
            $queueFamilyIndexC,
            $dfbC,
        );
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    /**
     * @param int $queueFamilyIndex uint32_t
     * @param \iggyvolz\vulkan\util\Pointer $window struct _screen_window*
     * returns VkBool32
     */
    public function getPhysicalDeviceScreenPresentationSupportQNX(
        int $queueFamilyIndex,
        \iggyvolz\vulkan\util\Pointer $window,
    ): bool
    {
        $phpValue = $queueFamilyIndex;
        $cValue = $phpValue;
        $queueFamilyIndexC = $cValue;
        $phpValue = $window;
        $cValue = $phpValue->cdata;
        $windowC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceScreenPresentationSupportQNX',
            $queueFamilyIndexC,
            $windowC,
        );
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkFormat $format VkFormat
     * @param \iggyvolz\vulkan\enum\VkImageType $type VkImageType
     * @param \iggyvolz\vulkan\enum\VkImageTiling $tiling VkImageTiling
     * @param list<\iggyvolz\vulkan\enum\VkImageUsageFlagBits> $usage VkImageUsageFlags
     * @param list<\iggyvolz\vulkan\enum\VkImageCreateFlagBits> $flags VkImageCreateFlags
     * @param list<\iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBitsNV> $externalHandleType VkExternalMemoryHandleTypeFlagsNV
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkExternalImageFormatPropertiesNV> $pExternalImageFormatProperties VkExternalImageFormatPropertiesNV*
     * returns VkResult
     */
    public function getPhysicalDeviceExternalImageFormatPropertiesNV(
        \iggyvolz\vulkan\enum\VkFormat $format,
        \iggyvolz\vulkan\enum\VkImageType $type,
        \iggyvolz\vulkan\enum\VkImageTiling $tiling,
        array $usage,
        array $flags,
        array $externalHandleType,
        \iggyvolz\vulkan\util\ObjectPointer $pExternalImageFormatProperties,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $format;
        $cValue = $phpValue->value;
        $formatC = $cValue;
        $phpValue = $type;
        $cValue = $phpValue->value;
        $typeC = $cValue;
        $phpValue = $tiling;
        $cValue = $phpValue->value;
        $tilingC = $cValue;
        $phpValue = $usage;
        $cValue = \iggyvolz\vulkan\enum\VkImageUsageFlagBits::toInt(...$phpValue);
        $usageC = $cValue;
        $phpValue = $flags;
        $cValue = \iggyvolz\vulkan\enum\VkImageCreateFlagBits::toInt(...$phpValue);
        $flagsC = $cValue;
        $phpValue = $externalHandleType;
        $cValue = \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBitsNV::toInt(...$phpValue);
        $externalHandleTypeC = $cValue;
        $phpValue = $pExternalImageFormatProperties;
        $cValue = $phpValue->cdata;
        $pExternalImageFormatPropertiesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceExternalImageFormatPropertiesNV',
            $formatC,
            $typeC,
            $tilingC,
            $usageC,
            $flagsC,
            $externalHandleTypeC,
            $pExternalImageFormatPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceFeatures2> $pFeatures VkPhysicalDeviceFeatures2*
     */
    public function getPhysicalDeviceFeatures2(\iggyvolz\vulkan\util\ObjectPointer $pFeatures): void
    {
        $phpValue = $pFeatures;
        $cValue = $phpValue->cdata;
        $pFeaturesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceFeatures2',
            $pFeaturesC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceProperties2> $pProperties VkPhysicalDeviceProperties2*
     */
    public function getPhysicalDeviceProperties2(\iggyvolz\vulkan\util\ObjectPointer $pProperties): void
    {
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceProperties2',
            $pPropertiesC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkFormat $format VkFormat
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkFormatProperties2> $pFormatProperties VkFormatProperties2*
     */
    public function getPhysicalDeviceFormatProperties2(
        \iggyvolz\vulkan\enum\VkFormat $format,
        \iggyvolz\vulkan\util\ObjectPointer $pFormatProperties,
    ): void
    {
        $phpValue = $format;
        $cValue = $phpValue->value;
        $formatC = $cValue;
        $phpValue = $pFormatProperties;
        $cValue = $phpValue->cdata;
        $pFormatPropertiesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceFormatProperties2',
            $formatC,
            $pFormatPropertiesC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceImageFormatInfo2> $pImageFormatInfo const VkPhysicalDeviceImageFormatInfo2*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageFormatProperties2> $pImageFormatProperties VkImageFormatProperties2*
     * returns VkResult
     */
    public function getPhysicalDeviceImageFormatProperties2(
        \iggyvolz\vulkan\util\ObjectPointer $pImageFormatInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pImageFormatProperties,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pImageFormatInfo;
        $cValue = $phpValue->cdata;
        $pImageFormatInfoC = $cValue;
        $phpValue = $pImageFormatProperties;
        $cValue = $phpValue->cdata;
        $pImageFormatPropertiesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceImageFormatProperties2',
            $pImageFormatInfoC,
            $pImageFormatPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\IntPointer $pQueueFamilyPropertyCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkQueueFamilyProperties2> $pQueueFamilyProperties VkQueueFamilyProperties2*
     */
    public function getPhysicalDeviceQueueFamilyProperties2(
        \iggyvolz\vulkan\util\IntPointer $pQueueFamilyPropertyCount,
        \iggyvolz\vulkan\util\ObjectPointer $pQueueFamilyProperties,
    ): void
    {
        $phpValue = $pQueueFamilyPropertyCount;
        $cValue = $phpValue->cdata;
        $pQueueFamilyPropertyCountC = $cValue;
        $phpValue = $pQueueFamilyProperties;
        $cValue = $phpValue->cdata;
        $pQueueFamilyPropertiesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceQueueFamilyProperties2',
            $pQueueFamilyPropertyCountC,
            $pQueueFamilyPropertiesC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceMemoryProperties2> $pMemoryProperties VkPhysicalDeviceMemoryProperties2*
     */
    public function getPhysicalDeviceMemoryProperties2(\iggyvolz\vulkan\util\ObjectPointer $pMemoryProperties): void
    {
        $phpValue = $pMemoryProperties;
        $cValue = $phpValue->cdata;
        $pMemoryPropertiesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceMemoryProperties2',
            $pMemoryPropertiesC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceSparseImageFormatInfo2> $pFormatInfo const VkPhysicalDeviceSparseImageFormatInfo2*
     * @param \iggyvolz\vulkan\util\IntPointer $pPropertyCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSparseImageFormatProperties2> $pProperties VkSparseImageFormatProperties2*
     */
    public function getPhysicalDeviceSparseImageFormatProperties2(
        \iggyvolz\vulkan\util\ObjectPointer $pFormatInfo,
        \iggyvolz\vulkan\util\IntPointer $pPropertyCount,
        \iggyvolz\vulkan\util\ObjectPointer $pProperties,
    ): void
    {
        $phpValue = $pFormatInfo;
        $cValue = $phpValue->cdata;
        $pFormatInfoC = $cValue;
        $phpValue = $pPropertyCount;
        $cValue = $phpValue->cdata;
        $pPropertyCountC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceSparseImageFormatProperties2',
            $pFormatInfoC,
            $pPropertyCountC,
            $pPropertiesC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceExternalBufferInfo> $pExternalBufferInfo const VkPhysicalDeviceExternalBufferInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkExternalBufferProperties> $pExternalBufferProperties VkExternalBufferProperties*
     */
    public function getPhysicalDeviceExternalBufferProperties(
        \iggyvolz\vulkan\util\ObjectPointer $pExternalBufferInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pExternalBufferProperties,
    ): void
    {
        $phpValue = $pExternalBufferInfo;
        $cValue = $phpValue->cdata;
        $pExternalBufferInfoC = $cValue;
        $phpValue = $pExternalBufferProperties;
        $cValue = $phpValue->cdata;
        $pExternalBufferPropertiesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceExternalBufferProperties',
            $pExternalBufferInfoC,
            $pExternalBufferPropertiesC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits $handleType VkExternalMemoryHandleTypeFlagBits
     * @param mixed $handle NvSciBufObj
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemorySciBufPropertiesNV> $pMemorySciBufProperties VkMemorySciBufPropertiesNV*
     * returns VkResult
     */
    public function getPhysicalDeviceExternalMemorySciBufPropertiesNV(
        \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits $handleType,
        mixed $handle,
        \iggyvolz\vulkan\util\ObjectPointer $pMemorySciBufProperties,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $handleType;
        $cValue = $phpValue->value;
        $handleTypeC = $cValue;
        $phpValue = $handle;
        throw new \LogicException("Dummy transformer!");
        $handleC = $cValue;
        $phpValue = $pMemorySciBufProperties;
        $cValue = $phpValue->cdata;
        $pMemorySciBufPropertiesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceExternalMemorySciBufPropertiesNV',
            $handleTypeC,
            $handleC,
            $pMemorySciBufPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param mixed $pAttributes NvSciBufAttrList
     * returns VkResult
     */
    public function getPhysicalDeviceSciBufAttributesNV(mixed $pAttributes): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pAttributes;
        throw new \LogicException("Dummy transformer!");
        $pAttributesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceSciBufAttributesNV',
            $pAttributesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceExternalSemaphoreInfo> $pExternalSemaphoreInfo const VkPhysicalDeviceExternalSemaphoreInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkExternalSemaphoreProperties> $pExternalSemaphoreProperties VkExternalSemaphoreProperties*
     */
    public function getPhysicalDeviceExternalSemaphoreProperties(
        \iggyvolz\vulkan\util\ObjectPointer $pExternalSemaphoreInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pExternalSemaphoreProperties,
    ): void
    {
        $phpValue = $pExternalSemaphoreInfo;
        $cValue = $phpValue->cdata;
        $pExternalSemaphoreInfoC = $cValue;
        $phpValue = $pExternalSemaphoreProperties;
        $cValue = $phpValue->cdata;
        $pExternalSemaphorePropertiesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceExternalSemaphoreProperties',
            $pExternalSemaphoreInfoC,
            $pExternalSemaphorePropertiesC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceExternalFenceInfo> $pExternalFenceInfo const VkPhysicalDeviceExternalFenceInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkExternalFenceProperties> $pExternalFenceProperties VkExternalFenceProperties*
     */
    public function getPhysicalDeviceExternalFenceProperties(
        \iggyvolz\vulkan\util\ObjectPointer $pExternalFenceInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pExternalFenceProperties,
    ): void
    {
        $phpValue = $pExternalFenceInfo;
        $cValue = $phpValue->cdata;
        $pExternalFenceInfoC = $cValue;
        $phpValue = $pExternalFenceProperties;
        $cValue = $phpValue->cdata;
        $pExternalFencePropertiesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceExternalFenceProperties',
            $pExternalFenceInfoC,
            $pExternalFencePropertiesC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSciSyncAttributesInfoNV> $pSciSyncAttributesInfo const VkSciSyncAttributesInfoNV*
     * @param mixed $pAttributes NvSciSyncAttrList
     * returns VkResult
     */
    public function getPhysicalDeviceSciSyncAttributesNV(
        \iggyvolz\vulkan\util\ObjectPointer $pSciSyncAttributesInfo,
        mixed $pAttributes,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pSciSyncAttributesInfo;
        $cValue = $phpValue->cdata;
        $pSciSyncAttributesInfoC = $cValue;
        $phpValue = $pAttributes;
        throw new \LogicException("Dummy transformer!");
        $pAttributesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceSciSyncAttributesNV',
            $pSciSyncAttributesInfoC,
            $pAttributesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDisplayKHR $display VkDisplayKHR
     * returns VkResult
     */
    public function releaseDisplayEXT(VkDisplayKHR $display): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $display;
        $cValue = $phpValue->cdata;
        $displayC = $cValue;
        $cValue = $this->exec('vkReleaseDisplayEXT',
            $displayC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\Pointer $dpy Display*
     * @param \iggyvolz\vulkan\struct\VkDisplayKHR $display VkDisplayKHR
     * returns VkResult
     */
    public function acquireXlibDisplayEXT(
        \iggyvolz\vulkan\util\Pointer $dpy,
        VkDisplayKHR $display,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $dpy;
        $cValue = $phpValue->cdata;
        $dpyC = $cValue;
        $phpValue = $display;
        $cValue = $phpValue->cdata;
        $displayC = $cValue;
        $cValue = $this->exec('vkAcquireXlibDisplayEXT',
            $dpyC,
            $displayC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\Pointer $dpy Display*
     * @param mixed $rrOutput RROutput
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplayKHR> $pDisplay VkDisplayKHR*
     * returns VkResult
     */
    public function getRandROutputDisplayEXT(
        \iggyvolz\vulkan\util\Pointer $dpy,
        mixed $rrOutput,
        \iggyvolz\vulkan\util\ObjectPointer $pDisplay,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $dpy;
        $cValue = $phpValue->cdata;
        $dpyC = $cValue;
        $phpValue = $rrOutput;
        throw new \LogicException("Dummy transformer!");
        $rrOutputC = $cValue;
        $phpValue = $pDisplay;
        $cValue = $phpValue->cdata;
        $pDisplayC = $cValue;
        $cValue = $this->exec('vkGetRandROutputDisplayEXT',
            $dpyC,
            $rrOutputC,
            $pDisplayC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDisplayKHR $display VkDisplayKHR
     * returns VkResult
     */
    public function acquireWinrtDisplayNV(VkDisplayKHR $display): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $display;
        $cValue = $phpValue->cdata;
        $displayC = $cValue;
        $cValue = $this->exec('vkAcquireWinrtDisplayNV',
            $displayC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param int $deviceRelativeId uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplayKHR> $pDisplay VkDisplayKHR*
     * returns VkResult
     */
    public function getWinrtDisplayNV(
        int $deviceRelativeId,
        \iggyvolz\vulkan\util\ObjectPointer $pDisplay,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $deviceRelativeId;
        $cValue = $phpValue;
        $deviceRelativeIdC = $cValue;
        $phpValue = $pDisplay;
        $cValue = $phpValue->cdata;
        $pDisplayC = $cValue;
        $cValue = $this->exec('vkGetWinrtDisplayNV',
            $deviceRelativeIdC,
            $pDisplayC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkSurfaceKHR $surface VkSurfaceKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceCapabilities2EXT> $pSurfaceCapabilities VkSurfaceCapabilities2EXT*
     * returns VkResult
     */
    public function getPhysicalDeviceSurfaceCapabilities2EXT(
        VkSurfaceKHR $surface,
        \iggyvolz\vulkan\util\ObjectPointer $pSurfaceCapabilities,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $surface;
        $cValue = $phpValue->cdata;
        $surfaceC = $cValue;
        $phpValue = $pSurfaceCapabilities;
        $cValue = $phpValue->cdata;
        $pSurfaceCapabilitiesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceSurfaceCapabilities2EXT',
            $surfaceC,
            $pSurfaceCapabilitiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkSurfaceKHR $surface VkSurfaceKHR
     * @param \iggyvolz\vulkan\util\IntPointer $pRectCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRect2D> $pRects VkRect2D*
     * returns VkResult
     */
    public function getPhysicalDevicePresentRectanglesKHR(
        VkSurfaceKHR $surface,
        \iggyvolz\vulkan\util\IntPointer $pRectCount,
        \iggyvolz\vulkan\util\ObjectPointer $pRects,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $surface;
        $cValue = $phpValue->cdata;
        $surfaceC = $cValue;
        $phpValue = $pRectCount;
        $cValue = $phpValue->cdata;
        $pRectCountC = $cValue;
        $phpValue = $pRects;
        $cValue = $phpValue->cdata;
        $pRectsC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDevicePresentRectanglesKHR',
            $surfaceC,
            $pRectCountC,
            $pRectsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkSampleCountFlagBits $samples VkSampleCountFlagBits
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMultisamplePropertiesEXT> $pMultisampleProperties VkMultisamplePropertiesEXT*
     */
    public function getPhysicalDeviceMultisamplePropertiesEXT(
        \iggyvolz\vulkan\enum\VkSampleCountFlagBits $samples,
        \iggyvolz\vulkan\util\ObjectPointer $pMultisampleProperties,
    ): void
    {
        $phpValue = $samples;
        $cValue = $phpValue->value;
        $samplesC = $cValue;
        $phpValue = $pMultisampleProperties;
        $cValue = $phpValue->cdata;
        $pMultisamplePropertiesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceMultisamplePropertiesEXT',
            $samplesC,
            $pMultisamplePropertiesC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceSurfaceInfo2KHR> $pSurfaceInfo const VkPhysicalDeviceSurfaceInfo2KHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceCapabilities2KHR> $pSurfaceCapabilities VkSurfaceCapabilities2KHR*
     * returns VkResult
     */
    public function getPhysicalDeviceSurfaceCapabilities2KHR(
        \iggyvolz\vulkan\util\ObjectPointer $pSurfaceInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pSurfaceCapabilities,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pSurfaceInfo;
        $cValue = $phpValue->cdata;
        $pSurfaceInfoC = $cValue;
        $phpValue = $pSurfaceCapabilities;
        $cValue = $phpValue->cdata;
        $pSurfaceCapabilitiesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceSurfaceCapabilities2KHR',
            $pSurfaceInfoC,
            $pSurfaceCapabilitiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceSurfaceInfo2KHR> $pSurfaceInfo const VkPhysicalDeviceSurfaceInfo2KHR*
     * @param \iggyvolz\vulkan\util\IntPointer $pSurfaceFormatCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceFormat2KHR> $pSurfaceFormats VkSurfaceFormat2KHR*
     * returns VkResult
     */
    public function getPhysicalDeviceSurfaceFormats2KHR(
        \iggyvolz\vulkan\util\ObjectPointer $pSurfaceInfo,
        \iggyvolz\vulkan\util\IntPointer $pSurfaceFormatCount,
        \iggyvolz\vulkan\util\ObjectPointer $pSurfaceFormats,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pSurfaceInfo;
        $cValue = $phpValue->cdata;
        $pSurfaceInfoC = $cValue;
        $phpValue = $pSurfaceFormatCount;
        $cValue = $phpValue->cdata;
        $pSurfaceFormatCountC = $cValue;
        $phpValue = $pSurfaceFormats;
        $cValue = $phpValue->cdata;
        $pSurfaceFormatsC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceSurfaceFormats2KHR',
            $pSurfaceInfoC,
            $pSurfaceFormatCountC,
            $pSurfaceFormatsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\IntPointer $pPropertyCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplayProperties2KHR> $pProperties VkDisplayProperties2KHR*
     * returns VkResult
     */
    public function getPhysicalDeviceDisplayProperties2KHR(
        \iggyvolz\vulkan\util\IntPointer $pPropertyCount,
        \iggyvolz\vulkan\util\ObjectPointer $pProperties,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pPropertyCount;
        $cValue = $phpValue->cdata;
        $pPropertyCountC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceDisplayProperties2KHR',
            $pPropertyCountC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\IntPointer $pPropertyCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplayPlaneProperties2KHR> $pProperties VkDisplayPlaneProperties2KHR*
     * returns VkResult
     */
    public function getPhysicalDeviceDisplayPlaneProperties2KHR(
        \iggyvolz\vulkan\util\IntPointer $pPropertyCount,
        \iggyvolz\vulkan\util\ObjectPointer $pProperties,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pPropertyCount;
        $cValue = $phpValue->cdata;
        $pPropertyCountC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceDisplayPlaneProperties2KHR',
            $pPropertyCountC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDisplayKHR $display VkDisplayKHR
     * @param \iggyvolz\vulkan\util\IntPointer $pPropertyCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplayModeProperties2KHR> $pProperties VkDisplayModeProperties2KHR*
     * returns VkResult
     */
    public function getDisplayModeProperties2KHR(
        VkDisplayKHR $display,
        \iggyvolz\vulkan\util\IntPointer $pPropertyCount,
        \iggyvolz\vulkan\util\ObjectPointer $pProperties,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $display;
        $cValue = $phpValue->cdata;
        $displayC = $cValue;
        $phpValue = $pPropertyCount;
        $cValue = $phpValue->cdata;
        $pPropertyCountC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->exec('vkGetDisplayModeProperties2KHR',
            $displayC,
            $pPropertyCountC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplayPlaneInfo2KHR> $pDisplayPlaneInfo const VkDisplayPlaneInfo2KHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplayPlaneCapabilities2KHR> $pCapabilities VkDisplayPlaneCapabilities2KHR*
     * returns VkResult
     */
    public function getDisplayPlaneCapabilities2KHR(
        \iggyvolz\vulkan\util\ObjectPointer $pDisplayPlaneInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pCapabilities,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pDisplayPlaneInfo;
        $cValue = $phpValue->cdata;
        $pDisplayPlaneInfoC = $cValue;
        $phpValue = $pCapabilities;
        $cValue = $phpValue->cdata;
        $pCapabilitiesC = $cValue;
        $cValue = $this->exec('vkGetDisplayPlaneCapabilities2KHR',
            $pDisplayPlaneInfoC,
            $pCapabilitiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\IntPointer $pTimeDomainCount uint32_t*
     * @param \iggyvolz\vulkan\util\Pointer $pTimeDomains VkTimeDomainKHR*
     * returns VkResult
     */
    public function getPhysicalDeviceCalibrateableTimeDomainsKHR(
        \iggyvolz\vulkan\util\IntPointer $pTimeDomainCount,
        \iggyvolz\vulkan\util\Pointer $pTimeDomains,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pTimeDomainCount;
        $cValue = $phpValue->cdata;
        $pTimeDomainCountC = $cValue;
        $phpValue = $pTimeDomains;
        $cValue = $phpValue->cdata;
        $pTimeDomainsC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceCalibrateableTimeDomainsKHR',
            $pTimeDomainCountC,
            $pTimeDomainsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\IntPointer $pPropertyCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCooperativeMatrixPropertiesNV> $pProperties VkCooperativeMatrixPropertiesNV*
     * returns VkResult
     */
    public function getPhysicalDeviceCooperativeMatrixPropertiesNV(
        \iggyvolz\vulkan\util\IntPointer $pPropertyCount,
        \iggyvolz\vulkan\util\ObjectPointer $pProperties,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pPropertyCount;
        $cValue = $phpValue->cdata;
        $pPropertyCountC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceCooperativeMatrixPropertiesNV',
            $pPropertyCountC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceSurfaceInfo2KHR> $pSurfaceInfo const VkPhysicalDeviceSurfaceInfo2KHR*
     * @param \iggyvolz\vulkan\util\IntPointer $pPresentModeCount uint32_t*
     * @param \iggyvolz\vulkan\util\Pointer $pPresentModes VkPresentModeKHR*
     * returns VkResult
     */
    public function getPhysicalDeviceSurfacePresentModes2EXT(
        \iggyvolz\vulkan\util\ObjectPointer $pSurfaceInfo,
        \iggyvolz\vulkan\util\IntPointer $pPresentModeCount,
        \iggyvolz\vulkan\util\Pointer $pPresentModes,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pSurfaceInfo;
        $cValue = $phpValue->cdata;
        $pSurfaceInfoC = $cValue;
        $phpValue = $pPresentModeCount;
        $cValue = $phpValue->cdata;
        $pPresentModeCountC = $cValue;
        $phpValue = $pPresentModes;
        $cValue = $phpValue->cdata;
        $pPresentModesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceSurfacePresentModes2EXT',
            $pSurfaceInfoC,
            $pPresentModeCountC,
            $pPresentModesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param int $queueFamilyIndex uint32_t
     * @param \iggyvolz\vulkan\util\IntPointer $pCounterCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPerformanceCounterKHR> $pCounters VkPerformanceCounterKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPerformanceCounterDescriptionKHR> $pCounterDescriptions VkPerformanceCounterDescriptionKHR*
     * returns VkResult
     */
    public function enumeratePhysicalDeviceQueueFamilyPerformanceQueryCountersKHR(
        int $queueFamilyIndex,
        \iggyvolz\vulkan\util\IntPointer $pCounterCount,
        \iggyvolz\vulkan\util\ObjectPointer $pCounters,
        \iggyvolz\vulkan\util\ObjectPointer $pCounterDescriptions,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $queueFamilyIndex;
        $cValue = $phpValue;
        $queueFamilyIndexC = $cValue;
        $phpValue = $pCounterCount;
        $cValue = $phpValue->cdata;
        $pCounterCountC = $cValue;
        $phpValue = $pCounters;
        $cValue = $phpValue->cdata;
        $pCountersC = $cValue;
        $phpValue = $pCounterDescriptions;
        $cValue = $phpValue->cdata;
        $pCounterDescriptionsC = $cValue;
        $cValue = $this->exec('vkEnumeratePhysicalDeviceQueueFamilyPerformanceQueryCountersKHR',
            $queueFamilyIndexC,
            $pCounterCountC,
            $pCountersC,
            $pCounterDescriptionsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkQueryPoolPerformanceCreateInfoKHR> $pPerformanceQueryCreateInfo const VkQueryPoolPerformanceCreateInfoKHR*
     * @param \iggyvolz\vulkan\util\IntPointer $pNumPasses uint32_t*
     */
    public function getPhysicalDeviceQueueFamilyPerformanceQueryPassesKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pPerformanceQueryCreateInfo,
        \iggyvolz\vulkan\util\IntPointer $pNumPasses,
    ): void
    {
        $phpValue = $pPerformanceQueryCreateInfo;
        $cValue = $phpValue->cdata;
        $pPerformanceQueryCreateInfoC = $cValue;
        $phpValue = $pNumPasses;
        $cValue = $phpValue->cdata;
        $pNumPassesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceQueueFamilyPerformanceQueryPassesKHR',
            $pPerformanceQueryCreateInfoC,
            $pNumPassesC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\IntPointer $pCombinationCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkFramebufferMixedSamplesCombinationNV> $pCombinations VkFramebufferMixedSamplesCombinationNV*
     * returns VkResult
     */
    public function getPhysicalDeviceSupportedFramebufferMixedSamplesCombinationsNV(
        \iggyvolz\vulkan\util\IntPointer $pCombinationCount,
        \iggyvolz\vulkan\util\ObjectPointer $pCombinations,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCombinationCount;
        $cValue = $phpValue->cdata;
        $pCombinationCountC = $cValue;
        $phpValue = $pCombinations;
        $cValue = $phpValue->cdata;
        $pCombinationsC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceSupportedFramebufferMixedSamplesCombinationsNV',
            $pCombinationCountC,
            $pCombinationsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\IntPointer $pToolCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceToolProperties> $pToolProperties VkPhysicalDeviceToolProperties*
     * returns VkResult
     */
    public function getPhysicalDeviceToolProperties(
        \iggyvolz\vulkan\util\IntPointer $pToolCount,
        \iggyvolz\vulkan\util\ObjectPointer $pToolProperties,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pToolCount;
        $cValue = $phpValue->cdata;
        $pToolCountC = $cValue;
        $phpValue = $pToolProperties;
        $cValue = $phpValue->cdata;
        $pToolPropertiesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceToolProperties',
            $pToolCountC,
            $pToolPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\IntPointer $pRefreshableObjectTypeCount uint32_t*
     * @param \iggyvolz\vulkan\util\Pointer $pRefreshableObjectTypes VkObjectType*
     * returns VkResult
     */
    public function getPhysicalDeviceRefreshableObjectTypesKHR(
        \iggyvolz\vulkan\util\IntPointer $pRefreshableObjectTypeCount,
        \iggyvolz\vulkan\util\Pointer $pRefreshableObjectTypes,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pRefreshableObjectTypeCount;
        $cValue = $phpValue->cdata;
        $pRefreshableObjectTypeCountC = $cValue;
        $phpValue = $pRefreshableObjectTypes;
        $cValue = $phpValue->cdata;
        $pRefreshableObjectTypesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceRefreshableObjectTypesKHR',
            $pRefreshableObjectTypeCountC,
            $pRefreshableObjectTypesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\IntPointer $pFragmentShadingRateCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceFragmentShadingRateKHR> $pFragmentShadingRates VkPhysicalDeviceFragmentShadingRateKHR*
     * returns VkResult
     */
    public function getPhysicalDeviceFragmentShadingRatesKHR(
        \iggyvolz\vulkan\util\IntPointer $pFragmentShadingRateCount,
        \iggyvolz\vulkan\util\ObjectPointer $pFragmentShadingRates,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pFragmentShadingRateCount;
        $cValue = $phpValue->cdata;
        $pFragmentShadingRateCountC = $cValue;
        $phpValue = $pFragmentShadingRates;
        $cValue = $phpValue->cdata;
        $pFragmentShadingRatesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceFragmentShadingRatesKHR',
            $pFragmentShadingRateCountC,
            $pFragmentShadingRatesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\Pointer $pVideoProfile const VkVideoProfileInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVideoCapabilitiesKHR> $pCapabilities VkVideoCapabilitiesKHR*
     * returns VkResult
     */
    public function getPhysicalDeviceVideoCapabilitiesKHR(
        \iggyvolz\vulkan\util\Pointer $pVideoProfile,
        \iggyvolz\vulkan\util\ObjectPointer $pCapabilities,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pVideoProfile;
        $cValue = $phpValue->cdata;
        $pVideoProfileC = $cValue;
        $phpValue = $pCapabilities;
        $cValue = $phpValue->cdata;
        $pCapabilitiesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceVideoCapabilitiesKHR',
            $pVideoProfileC,
            $pCapabilitiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceVideoFormatInfoKHR> $pVideoFormatInfo const VkPhysicalDeviceVideoFormatInfoKHR*
     * @param \iggyvolz\vulkan\util\IntPointer $pVideoFormatPropertyCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVideoFormatPropertiesKHR> $pVideoFormatProperties VkVideoFormatPropertiesKHR*
     * returns VkResult
     */
    public function getPhysicalDeviceVideoFormatPropertiesKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pVideoFormatInfo,
        \iggyvolz\vulkan\util\IntPointer $pVideoFormatPropertyCount,
        \iggyvolz\vulkan\util\ObjectPointer $pVideoFormatProperties,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pVideoFormatInfo;
        $cValue = $phpValue->cdata;
        $pVideoFormatInfoC = $cValue;
        $phpValue = $pVideoFormatPropertyCount;
        $cValue = $phpValue->cdata;
        $pVideoFormatPropertyCountC = $cValue;
        $phpValue = $pVideoFormatProperties;
        $cValue = $phpValue->cdata;
        $pVideoFormatPropertiesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceVideoFormatPropertiesKHR',
            $pVideoFormatInfoC,
            $pVideoFormatPropertyCountC,
            $pVideoFormatPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceVideoEncodeQualityLevelInfoKHR> $pQualityLevelInfo const VkPhysicalDeviceVideoEncodeQualityLevelInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVideoEncodeQualityLevelPropertiesKHR> $pQualityLevelProperties VkVideoEncodeQualityLevelPropertiesKHR*
     * returns VkResult
     */
    public function getPhysicalDeviceVideoEncodeQualityLevelPropertiesKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pQualityLevelInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pQualityLevelProperties,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pQualityLevelInfo;
        $cValue = $phpValue->cdata;
        $pQualityLevelInfoC = $cValue;
        $phpValue = $pQualityLevelProperties;
        $cValue = $phpValue->cdata;
        $pQualityLevelPropertiesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceVideoEncodeQualityLevelPropertiesKHR',
            $pQualityLevelInfoC,
            $pQualityLevelPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param int $drmFd int32_t
     * @param \iggyvolz\vulkan\struct\VkDisplayKHR $display VkDisplayKHR
     * returns VkResult
     */
    public function acquireDrmDisplayEXT(int $drmFd, VkDisplayKHR $display): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $drmFd;
        $cValue = $phpValue;
        $drmFdC = $cValue;
        $phpValue = $display;
        $cValue = $phpValue->cdata;
        $displayC = $cValue;
        $cValue = $this->exec('vkAcquireDrmDisplayEXT',
            $drmFdC,
            $displayC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param int $drmFd int32_t
     * @param int $connectorId uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplayKHR> $display VkDisplayKHR*
     * returns VkResult
     */
    public function getDrmDisplayEXT(
        int $drmFd,
        int $connectorId,
        \iggyvolz\vulkan\util\ObjectPointer $display,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $drmFd;
        $cValue = $phpValue;
        $drmFdC = $cValue;
        $phpValue = $connectorId;
        $cValue = $phpValue;
        $connectorIdC = $cValue;
        $phpValue = $display;
        $cValue = $phpValue->cdata;
        $displayC = $cValue;
        $cValue = $this->exec('vkGetDrmDisplayEXT',
            $drmFdC,
            $connectorIdC,
            $displayC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkOpticalFlowImageFormatInfoNV> $pOpticalFlowImageFormatInfo const VkOpticalFlowImageFormatInfoNV*
     * @param \iggyvolz\vulkan\util\IntPointer $pFormatCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkOpticalFlowImageFormatPropertiesNV> $pImageFormatProperties VkOpticalFlowImageFormatPropertiesNV*
     * returns VkResult
     */
    public function getPhysicalDeviceOpticalFlowImageFormatsNV(
        \iggyvolz\vulkan\util\ObjectPointer $pOpticalFlowImageFormatInfo,
        \iggyvolz\vulkan\util\IntPointer $pFormatCount,
        \iggyvolz\vulkan\util\ObjectPointer $pImageFormatProperties,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pOpticalFlowImageFormatInfo;
        $cValue = $phpValue->cdata;
        $pOpticalFlowImageFormatInfoC = $cValue;
        $phpValue = $pFormatCount;
        $cValue = $phpValue->cdata;
        $pFormatCountC = $cValue;
        $phpValue = $pImageFormatProperties;
        $cValue = $phpValue->cdata;
        $pImageFormatPropertiesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceOpticalFlowImageFormatsNV',
            $pOpticalFlowImageFormatInfoC,
            $pFormatCountC,
            $pImageFormatPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\IntPointer $pPropertyCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCooperativeMatrixPropertiesKHR> $pProperties VkCooperativeMatrixPropertiesKHR*
     * returns VkResult
     */
    public function getPhysicalDeviceCooperativeMatrixPropertiesKHR(
        \iggyvolz\vulkan\util\IntPointer $pPropertyCount,
        \iggyvolz\vulkan\util\ObjectPointer $pProperties,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pPropertyCount;
        $cValue = $phpValue->cdata;
        $pPropertyCountC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->exec('vkGetPhysicalDeviceCooperativeMatrixPropertiesKHR',
            $pPropertyCountC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }
}
