<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkInstance implements \JsonSerializable
{
    use \iggyvolz\vulkan\util\VulkanInstanceBase;

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
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyInstance(\iggyvolz\vulkan\util\ObjectPointer $pAllocator): void
    {
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyInstance',
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\IntPointer $pPhysicalDeviceCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDevice> $pPhysicalDevices VkPhysicalDevice*
     * returns VkResult
     */
    public function enumeratePhysicalDevices(
        \iggyvolz\vulkan\util\IntPointer $pPhysicalDeviceCount,
        \iggyvolz\vulkan\util\ObjectPointer $pPhysicalDevices,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pPhysicalDeviceCount;
        $cValue = $phpValue->cdata;
        $pPhysicalDeviceCountC = $cValue;
        $phpValue = $pPhysicalDevices;
        $cValue = $phpValue->cdata;
        $pPhysicalDevicesC = $cValue;
        $cValue = $this->exec('vkEnumeratePhysicalDevices',
            $pPhysicalDeviceCountC,
            $pPhysicalDevicesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @return list<\iggyvolz\vulkan\struct\VkPhysicalDevice>
     */
    public function getPhysicalDevices(): array
    {
        $count = \iggyvolz\vulkan\util\IntPointer::new('uint32_t', $this->vulkan);
        $this->enumeratePhysicalDevices(...[...\func_get_args(), $count, \iggyvolz\vulkan\util\ObjectPointer::null($this->vulkan)])->assert(\iggyvolz\vulkan\enum\VkResult::Incomplete);
        $ptr = \iggyvolz\vulkan\util\ObjectPointer::new($this->vulkan, '\\iggyvolz\\vulkan\\struct\\VkPhysicalDevice', $count->get());
        $this->enumeratePhysicalDevices(...[...\func_get_args(), $count, $ptr])->assert();
        return $ptr->getLen($count->get());
    }

    /**
     * @param ?string $pName const char*
     * returns PFN_vkVoidFunction
     */
    public function getInstanceProcAddr(?string $pName): mixed
    {
        $phpValue = $pName;
        $cValue = $phpValue;
        $pNameC = $cValue;
        $cValue = $this->exec('vkGetInstanceProcAddr',
            $pNameC,
        );
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAndroidSurfaceCreateInfoKHR> $pCreateInfo const VkAndroidSurfaceCreateInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceKHR> $pSurface VkSurfaceKHR*
     * returns VkResult
     */
    public function createAndroidSurfaceKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pSurface,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSurface;
        $cValue = $phpValue->cdata;
        $pSurfaceC = $cValue;
        $cValue = $this->exec('vkCreateAndroidSurfaceKHR',
            $pCreateInfoC,
            $pAllocatorC,
            $pSurfaceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplaySurfaceCreateInfoKHR> $pCreateInfo const VkDisplaySurfaceCreateInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceKHR> $pSurface VkSurfaceKHR*
     * returns VkResult
     */
    public function createDisplayPlaneSurfaceKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pSurface,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSurface;
        $cValue = $phpValue->cdata;
        $pSurfaceC = $cValue;
        $cValue = $this->exec('vkCreateDisplayPlaneSurfaceKHR',
            $pCreateInfoC,
            $pAllocatorC,
            $pSurfaceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkSurfaceKHR $surface VkSurfaceKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroySurfaceKHR(VkSurfaceKHR $surface, \iggyvolz\vulkan\util\ObjectPointer $pAllocator): void
    {
        $phpValue = $surface;
        $cValue = $phpValue->cdata;
        $surfaceC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroySurfaceKHR',
            $surfaceC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkViSurfaceCreateInfoNN> $pCreateInfo const VkViSurfaceCreateInfoNN*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceKHR> $pSurface VkSurfaceKHR*
     * returns VkResult
     */
    public function createViSurfaceNN(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pSurface,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSurface;
        $cValue = $phpValue->cdata;
        $pSurfaceC = $cValue;
        $cValue = $this->exec('vkCreateViSurfaceNN',
            $pCreateInfoC,
            $pAllocatorC,
            $pSurfaceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkWaylandSurfaceCreateInfoKHR> $pCreateInfo const VkWaylandSurfaceCreateInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceKHR> $pSurface VkSurfaceKHR*
     * returns VkResult
     */
    public function createWaylandSurfaceKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pSurface,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSurface;
        $cValue = $phpValue->cdata;
        $pSurfaceC = $cValue;
        $cValue = $this->exec('vkCreateWaylandSurfaceKHR',
            $pCreateInfoC,
            $pAllocatorC,
            $pSurfaceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkWin32SurfaceCreateInfoKHR> $pCreateInfo const VkWin32SurfaceCreateInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceKHR> $pSurface VkSurfaceKHR*
     * returns VkResult
     */
    public function createWin32SurfaceKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pSurface,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSurface;
        $cValue = $phpValue->cdata;
        $pSurfaceC = $cValue;
        $cValue = $this->exec('vkCreateWin32SurfaceKHR',
            $pCreateInfoC,
            $pAllocatorC,
            $pSurfaceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkXlibSurfaceCreateInfoKHR> $pCreateInfo const VkXlibSurfaceCreateInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceKHR> $pSurface VkSurfaceKHR*
     * returns VkResult
     */
    public function createXlibSurfaceKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pSurface,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSurface;
        $cValue = $phpValue->cdata;
        $pSurfaceC = $cValue;
        $cValue = $this->exec('vkCreateXlibSurfaceKHR',
            $pCreateInfoC,
            $pAllocatorC,
            $pSurfaceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkXcbSurfaceCreateInfoKHR> $pCreateInfo const VkXcbSurfaceCreateInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceKHR> $pSurface VkSurfaceKHR*
     * returns VkResult
     */
    public function createXcbSurfaceKHR(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pSurface,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSurface;
        $cValue = $phpValue->cdata;
        $pSurfaceC = $cValue;
        $cValue = $this->exec('vkCreateXcbSurfaceKHR',
            $pCreateInfoC,
            $pAllocatorC,
            $pSurfaceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDirectFBSurfaceCreateInfoEXT> $pCreateInfo const VkDirectFBSurfaceCreateInfoEXT*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceKHR> $pSurface VkSurfaceKHR*
     * returns VkResult
     */
    public function createDirectFBSurfaceEXT(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pSurface,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSurface;
        $cValue = $phpValue->cdata;
        $pSurfaceC = $cValue;
        $cValue = $this->exec('vkCreateDirectFBSurfaceEXT',
            $pCreateInfoC,
            $pAllocatorC,
            $pSurfaceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImagePipeSurfaceCreateInfoFUCHSIA> $pCreateInfo const VkImagePipeSurfaceCreateInfoFUCHSIA*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceKHR> $pSurface VkSurfaceKHR*
     * returns VkResult
     */
    public function createImagePipeSurfaceFUCHSIA(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pSurface,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSurface;
        $cValue = $phpValue->cdata;
        $pSurfaceC = $cValue;
        $cValue = $this->exec('vkCreateImagePipeSurfaceFUCHSIA',
            $pCreateInfoC,
            $pAllocatorC,
            $pSurfaceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkStreamDescriptorSurfaceCreateInfoGGP> $pCreateInfo const VkStreamDescriptorSurfaceCreateInfoGGP*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceKHR> $pSurface VkSurfaceKHR*
     * returns VkResult
     */
    public function createStreamDescriptorSurfaceGGP(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pSurface,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSurface;
        $cValue = $phpValue->cdata;
        $pSurfaceC = $cValue;
        $cValue = $this->exec('vkCreateStreamDescriptorSurfaceGGP',
            $pCreateInfoC,
            $pAllocatorC,
            $pSurfaceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkScreenSurfaceCreateInfoQNX> $pCreateInfo const VkScreenSurfaceCreateInfoQNX*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceKHR> $pSurface VkSurfaceKHR*
     * returns VkResult
     */
    public function createScreenSurfaceQNX(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pSurface,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSurface;
        $cValue = $phpValue->cdata;
        $pSurfaceC = $cValue;
        $cValue = $this->exec('vkCreateScreenSurfaceQNX',
            $pCreateInfoC,
            $pAllocatorC,
            $pSurfaceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDebugReportCallbackCreateInfoEXT> $pCreateInfo const VkDebugReportCallbackCreateInfoEXT*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDebugReportCallbackEXT> $pCallback VkDebugReportCallbackEXT*
     * returns VkResult
     */
    public function createDebugReportCallbackEXT(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pCallback,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pCallback;
        $cValue = $phpValue->cdata;
        $pCallbackC = $cValue;
        $cValue = $this->exec('vkCreateDebugReportCallbackEXT',
            $pCreateInfoC,
            $pAllocatorC,
            $pCallbackC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDebugReportCallbackEXT $callback VkDebugReportCallbackEXT
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyDebugReportCallbackEXT(
        VkDebugReportCallbackEXT $callback,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $callback;
        $cValue = $phpValue->cdata;
        $callbackC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyDebugReportCallbackEXT',
            $callbackC,
            $pAllocatorC,
        );
    }

    /**
     * @param list<\iggyvolz\vulkan\enum\VkDebugReportFlagBitsEXT> $flags VkDebugReportFlagsEXT
     * @param \iggyvolz\vulkan\enum\VkDebugReportObjectTypeEXT $objectType VkDebugReportObjectTypeEXT
     * @param int $object uint64_t
     * @param int $location size_t
     * @param int $messageCode int32_t
     * @param ?string $pLayerPrefix const char*
     * @param ?string $pMessage const char*
     */
    public function debugReportMessageEXT(
        array $flags,
        \iggyvolz\vulkan\enum\VkDebugReportObjectTypeEXT $objectType,
        int $object,
        int $location,
        int $messageCode,
        ?string $pLayerPrefix,
        ?string $pMessage,
    ): void
    {
        $phpValue = $flags;
        $cValue = \iggyvolz\vulkan\enum\VkDebugReportFlagBitsEXT::toInt(...$phpValue);
        $flagsC = $cValue;
        $phpValue = $objectType;
        $cValue = $phpValue->value;
        $objectTypeC = $cValue;
        $phpValue = $object;
        $cValue = $phpValue;
        $objectC = $cValue;
        $phpValue = $location;
        $cValue = $phpValue;
        $locationC = $cValue;
        $phpValue = $messageCode;
        $cValue = $phpValue;
        $messageCodeC = $cValue;
        $phpValue = $pLayerPrefix;
        $cValue = $phpValue;
        $pLayerPrefixC = $cValue;
        $phpValue = $pMessage;
        $cValue = $phpValue;
        $pMessageC = $cValue;
        $cValue = $this->exec('vkDebugReportMessageEXT',
            $flagsC,
            $objectTypeC,
            $objectC,
            $locationC,
            $messageCodeC,
            $pLayerPrefixC,
            $pMessageC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\IntPointer $pPhysicalDeviceGroupCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceGroupProperties> $pPhysicalDeviceGroupProperties VkPhysicalDeviceGroupProperties*
     * returns VkResult
     */
    public function enumeratePhysicalDeviceGroups(
        \iggyvolz\vulkan\util\IntPointer $pPhysicalDeviceGroupCount,
        \iggyvolz\vulkan\util\ObjectPointer $pPhysicalDeviceGroupProperties,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pPhysicalDeviceGroupCount;
        $cValue = $phpValue->cdata;
        $pPhysicalDeviceGroupCountC = $cValue;
        $phpValue = $pPhysicalDeviceGroupProperties;
        $cValue = $phpValue->cdata;
        $pPhysicalDeviceGroupPropertiesC = $cValue;
        $cValue = $this->exec('vkEnumeratePhysicalDeviceGroups',
            $pPhysicalDeviceGroupCountC,
            $pPhysicalDeviceGroupPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @return list<\iggyvolz\vulkan\struct\VkPhysicalDeviceGroupProperties>
     */
    public function getPhysicalDeviceGroups(): array
    {
        $count = \iggyvolz\vulkan\util\IntPointer::new('uint32_t', $this->vulkan);
        $this->enumeratePhysicalDeviceGroups(...[...\func_get_args(), $count, \iggyvolz\vulkan\util\ObjectPointer::null($this->vulkan)])->assert(\iggyvolz\vulkan\enum\VkResult::Incomplete);
        $ptr = \iggyvolz\vulkan\util\ObjectPointer::new($this->vulkan, '\\iggyvolz\\vulkan\\struct\\VkPhysicalDeviceGroupProperties', $count->get());
        $this->enumeratePhysicalDeviceGroups(...[...\func_get_args(), $count, $ptr])->assert();
        return $ptr->getLen($count->get());
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkIOSSurfaceCreateInfoMVK> $pCreateInfo const VkIOSSurfaceCreateInfoMVK*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceKHR> $pSurface VkSurfaceKHR*
     * returns VkResult
     */
    public function createIOSSurfaceMVK(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pSurface,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSurface;
        $cValue = $phpValue->cdata;
        $pSurfaceC = $cValue;
        $cValue = $this->exec('vkCreateIOSSurfaceMVK',
            $pCreateInfoC,
            $pAllocatorC,
            $pSurfaceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMacOSSurfaceCreateInfoMVK> $pCreateInfo const VkMacOSSurfaceCreateInfoMVK*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceKHR> $pSurface VkSurfaceKHR*
     * returns VkResult
     */
    public function createMacOSSurfaceMVK(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pSurface,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSurface;
        $cValue = $phpValue->cdata;
        $pSurfaceC = $cValue;
        $cValue = $this->exec('vkCreateMacOSSurfaceMVK',
            $pCreateInfoC,
            $pAllocatorC,
            $pSurfaceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMetalSurfaceCreateInfoEXT> $pCreateInfo const VkMetalSurfaceCreateInfoEXT*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceKHR> $pSurface VkSurfaceKHR*
     * returns VkResult
     */
    public function createMetalSurfaceEXT(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pSurface,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSurface;
        $cValue = $phpValue->cdata;
        $pSurfaceC = $cValue;
        $cValue = $this->exec('vkCreateMetalSurfaceEXT',
            $pCreateInfoC,
            $pAllocatorC,
            $pSurfaceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDebugUtilsMessengerCreateInfoEXT> $pCreateInfo const VkDebugUtilsMessengerCreateInfoEXT*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDebugUtilsMessengerEXT> $pMessenger VkDebugUtilsMessengerEXT*
     * returns VkResult
     */
    public function createDebugUtilsMessengerEXT(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pMessenger,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pMessenger;
        $cValue = $phpValue->cdata;
        $pMessengerC = $cValue;
        $cValue = $this->exec('vkCreateDebugUtilsMessengerEXT',
            $pCreateInfoC,
            $pAllocatorC,
            $pMessengerC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDebugUtilsMessengerEXT $messenger VkDebugUtilsMessengerEXT
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function destroyDebugUtilsMessengerEXT(
        VkDebugUtilsMessengerEXT $messenger,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $messenger;
        $cValue = $phpValue->cdata;
        $messengerC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->exec('vkDestroyDebugUtilsMessengerEXT',
            $messengerC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\enum\VkDebugUtilsMessageSeverityFlagBitsEXT $messageSeverity VkDebugUtilsMessageSeverityFlagBitsEXT
     * @param list<\iggyvolz\vulkan\enum\VkDebugUtilsMessageTypeFlagBitsEXT> $messageTypes VkDebugUtilsMessageTypeFlagsEXT
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDebugUtilsMessengerCallbackDataEXT> $pCallbackData const VkDebugUtilsMessengerCallbackDataEXT*
     */
    public function submitDebugUtilsMessageEXT(
        \iggyvolz\vulkan\enum\VkDebugUtilsMessageSeverityFlagBitsEXT $messageSeverity,
        array $messageTypes,
        \iggyvolz\vulkan\util\ObjectPointer $pCallbackData,
    ): void
    {
        $phpValue = $messageSeverity;
        $cValue = $phpValue->value;
        $messageSeverityC = $cValue;
        $phpValue = $messageTypes;
        $cValue = \iggyvolz\vulkan\enum\VkDebugUtilsMessageTypeFlagBitsEXT::toInt(...$phpValue);
        $messageTypesC = $cValue;
        $phpValue = $pCallbackData;
        $cValue = $phpValue->cdata;
        $pCallbackDataC = $cValue;
        $cValue = $this->exec('vkSubmitDebugUtilsMessageEXT',
            $messageSeverityC,
            $messageTypesC,
            $pCallbackDataC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkHeadlessSurfaceCreateInfoEXT> $pCreateInfo const VkHeadlessSurfaceCreateInfoEXT*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceKHR> $pSurface VkSurfaceKHR*
     * returns VkResult
     */
    public function createHeadlessSurfaceEXT(
        \iggyvolz\vulkan\util\ObjectPointer $pCreateInfo,
        \iggyvolz\vulkan\util\ObjectPointer $pAllocator,
        \iggyvolz\vulkan\util\ObjectPointer $pSurface,
    ): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSurface;
        $cValue = $phpValue->cdata;
        $pSurfaceC = $cValue;
        $cValue = $this->exec('vkCreateHeadlessSurfaceEXT',
            $pCreateInfoC,
            $pAllocatorC,
            $pSurfaceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }
}
