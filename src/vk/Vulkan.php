<?php

declare(strict_types=1);

namespace iggyvolz\vulkan;

class Vulkan
{
    use util\VulkanBase;

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkInstanceCreateInfo> $pCreateInfo const VkInstanceCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkInstance> $pInstance VkInstance*
     * returns VkResult
     */
    public function vkCreateInstance(
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pInstance,
    ): enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pInstance;
        $cValue = $phpValue->cdata;
        $pInstanceC = $cValue;
        $cValue = $this->ffi->vkCreateInstance(
            $pCreateInfoC,
            $pAllocatorC,
            $pInstanceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkInstance $instance VkInstance
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyInstance(struct\VkInstance $instance, util\ObjectPointer $pAllocator): void
    {
        $phpValue = $instance;
        $cValue = $phpValue->cdata;
        $instanceC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyInstance(
            $instanceC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkInstance $instance VkInstance
     * @param \iggyvolz\vulkan\util\IntPointer $pPhysicalDeviceCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDevice> $pPhysicalDevices VkPhysicalDevice*
     * returns VkResult
     */
    public function vkEnumeratePhysicalDevices(
        struct\VkInstance $instance,
        util\IntPointer $pPhysicalDeviceCount,
        util\ObjectPointer $pPhysicalDevices,
    ): enum\VkResult
    {
        $phpValue = $instance;
        $cValue = $phpValue->cdata;
        $instanceC = $cValue;
        $phpValue = $pPhysicalDeviceCount;
        $cValue = $phpValue->cdata;
        $pPhysicalDeviceCountC = $cValue;
        $phpValue = $pPhysicalDevices;
        $cValue = $phpValue->cdata;
        $pPhysicalDevicesC = $cValue;
        $cValue = $this->ffi->vkEnumeratePhysicalDevices(
            $instanceC,
            $pPhysicalDeviceCountC,
            $pPhysicalDevicesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param ?string $pName const char*
     * returns PFN_vkVoidFunction
     */
    public function vkGetDeviceProcAddr(struct\VkDevice $device, ?string $pName): mixed
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pName;
        $cValue = $phpValue;
        $pNameC = $cValue;
        $cValue = $this->ffi->vkGetDeviceProcAddr(
            $deviceC,
            $pNameC,
        );
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkInstance $instance VkInstance
     * @param ?string $pName const char*
     * returns PFN_vkVoidFunction
     */
    public function vkGetInstanceProcAddr(struct\VkInstance $instance, ?string $pName): mixed
    {
        $phpValue = $instance;
        $cValue = $phpValue->cdata;
        $instanceC = $cValue;
        $phpValue = $pName;
        $cValue = $phpValue;
        $pNameC = $cValue;
        $cValue = $this->ffi->vkGetInstanceProcAddr(
            $instanceC,
            $pNameC,
        );
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceProperties> $pProperties VkPhysicalDeviceProperties*
     */
    public function vkGetPhysicalDeviceProperties(
        struct\VkPhysicalDevice $physicalDevice,
        util\ObjectPointer $pProperties,
    ): void
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceProperties(
            $physicalDeviceC,
            $pPropertiesC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\IntPointer $pQueueFamilyPropertyCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkQueueFamilyProperties> $pQueueFamilyProperties VkQueueFamilyProperties*
     */
    public function vkGetPhysicalDeviceQueueFamilyProperties(
        struct\VkPhysicalDevice $physicalDevice,
        util\IntPointer $pQueueFamilyPropertyCount,
        util\ObjectPointer $pQueueFamilyProperties,
    ): void
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pQueueFamilyPropertyCount;
        $cValue = $phpValue->cdata;
        $pQueueFamilyPropertyCountC = $cValue;
        $phpValue = $pQueueFamilyProperties;
        $cValue = $phpValue->cdata;
        $pQueueFamilyPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceQueueFamilyProperties(
            $physicalDeviceC,
            $pQueueFamilyPropertyCountC,
            $pQueueFamilyPropertiesC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceMemoryProperties> $pMemoryProperties VkPhysicalDeviceMemoryProperties*
     */
    public function vkGetPhysicalDeviceMemoryProperties(
        struct\VkPhysicalDevice $physicalDevice,
        util\ObjectPointer $pMemoryProperties,
    ): void
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pMemoryProperties;
        $cValue = $phpValue->cdata;
        $pMemoryPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceMemoryProperties(
            $physicalDeviceC,
            $pMemoryPropertiesC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\Pointer $pFeatures VkPhysicalDeviceFeatures*
     */
    public function vkGetPhysicalDeviceFeatures(
        struct\VkPhysicalDevice $physicalDevice,
        util\Pointer $pFeatures,
    ): void
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pFeatures;
        $cValue = $phpValue->cdata;
        $pFeaturesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceFeatures(
            $physicalDeviceC,
            $pFeaturesC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \\iggyvolz\vulkan\enum\VkFormat $format VkFormat
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkFormatProperties> $pFormatProperties VkFormatProperties*
     */
    public function vkGetPhysicalDeviceFormatProperties(
        struct\VkPhysicalDevice $physicalDevice,
        enum\VkFormat $format,
        util\ObjectPointer $pFormatProperties,
    ): void
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $format;
        $cValue = $phpValue->value;
        $formatC = $cValue;
        $phpValue = $pFormatProperties;
        $cValue = $phpValue->cdata;
        $pFormatPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceFormatProperties(
            $physicalDeviceC,
            $formatC,
            $pFormatPropertiesC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \\iggyvolz\vulkan\enum\VkFormat $format VkFormat
     * @param \\iggyvolz\vulkan\enum\VkImageType $type VkImageType
     * @param \\iggyvolz\vulkan\enum\VkImageTiling $tiling VkImageTiling
     * @param list<iggyvolz\vulkan\enum\VkImageUsageFlagBits> $usage VkImageUsageFlags
     * @param list<iggyvolz\vulkan\enum\VkImageCreateFlagBits> $flags VkImageCreateFlags
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageFormatProperties> $pImageFormatProperties VkImageFormatProperties*
     * returns VkResult
     */
    public function vkGetPhysicalDeviceImageFormatProperties(
        struct\VkPhysicalDevice $physicalDevice,
        enum\VkFormat $format,
        enum\VkImageType $type,
        enum\VkImageTiling $tiling,
        array $usage,
        array $flags,
        util\ObjectPointer $pImageFormatProperties,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
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
        $cValue = $this->ffi->vkGetPhysicalDeviceImageFormatProperties(
            $physicalDeviceC,
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
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDeviceCreateInfo> $pCreateInfo const VkDeviceCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDevice> $pDevice VkDevice*
     * returns VkResult
     */
    public function vkCreateDevice(
        struct\VkPhysicalDevice $physicalDevice,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pDevice,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pDevice;
        $cValue = $phpValue->cdata;
        $pDeviceC = $cValue;
        $cValue = $this->ffi->vkCreateDevice(
            $physicalDeviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pDeviceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyDevice(struct\VkDevice $device, util\ObjectPointer $pAllocator): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyDevice(
            $deviceC,
            $pAllocatorC,
        );
    }

    /**
     * @param \iggyvolz\vulkan\util\IntPointer $pApiVersion uint32_t*
     * returns VkResult
     */
    public function vkEnumerateInstanceVersion(util\IntPointer $pApiVersion): enum\VkResult
    {
        $phpValue = $pApiVersion;
        $cValue = $phpValue->cdata;
        $pApiVersionC = $cValue;
        $cValue = $this->ffi->vkEnumerateInstanceVersion(
            $pApiVersionC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\IntPointer $pPropertyCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkLayerProperties> $pProperties VkLayerProperties*
     * returns VkResult
     */
    public function vkEnumerateInstanceLayerProperties(
        util\IntPointer $pPropertyCount,
        util\ObjectPointer $pProperties,
    ): enum\VkResult
    {
        $phpValue = $pPropertyCount;
        $cValue = $phpValue->cdata;
        $pPropertyCountC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->ffi->vkEnumerateInstanceLayerProperties(
            $pPropertyCountC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param ?string $pLayerName const char*
     * @param \iggyvolz\vulkan\util\IntPointer $pPropertyCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkExtensionProperties> $pProperties VkExtensionProperties*
     * returns VkResult
     */
    public function vkEnumerateInstanceExtensionProperties(
        ?string $pLayerName,
        util\IntPointer $pPropertyCount,
        util\ObjectPointer $pProperties,
    ): enum\VkResult
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
        $cValue = $this->ffi->vkEnumerateInstanceExtensionProperties(
            $pLayerNameC,
            $pPropertyCountC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\IntPointer $pPropertyCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkLayerProperties> $pProperties VkLayerProperties*
     * returns VkResult
     */
    public function vkEnumerateDeviceLayerProperties(
        struct\VkPhysicalDevice $physicalDevice,
        util\IntPointer $pPropertyCount,
        util\ObjectPointer $pProperties,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pPropertyCount;
        $cValue = $phpValue->cdata;
        $pPropertyCountC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->ffi->vkEnumerateDeviceLayerProperties(
            $physicalDeviceC,
            $pPropertyCountC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param ?string $pLayerName const char*
     * @param \iggyvolz\vulkan\util\IntPointer $pPropertyCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkExtensionProperties> $pProperties VkExtensionProperties*
     * returns VkResult
     */
    public function vkEnumerateDeviceExtensionProperties(
        struct\VkPhysicalDevice $physicalDevice,
        ?string $pLayerName,
        util\IntPointer $pPropertyCount,
        util\ObjectPointer $pProperties,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pLayerName;
        $cValue = $phpValue;
        $pLayerNameC = $cValue;
        $phpValue = $pPropertyCount;
        $cValue = $phpValue->cdata;
        $pPropertyCountC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->ffi->vkEnumerateDeviceExtensionProperties(
            $physicalDeviceC,
            $pLayerNameC,
            $pPropertyCountC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param int $queueFamilyIndex uint32_t
     * @param int $queueIndex uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkQueue> $pQueue VkQueue*
     */
    public function vkGetDeviceQueue(
        struct\VkDevice $device,
        int $queueFamilyIndex,
        int $queueIndex,
        util\ObjectPointer $pQueue,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $queueFamilyIndex;
        $cValue = $phpValue;
        $queueFamilyIndexC = $cValue;
        $phpValue = $queueIndex;
        $cValue = $phpValue;
        $queueIndexC = $cValue;
        $phpValue = $pQueue;
        $cValue = $phpValue->cdata;
        $pQueueC = $cValue;
        $cValue = $this->ffi->vkGetDeviceQueue(
            $deviceC,
            $queueFamilyIndexC,
            $queueIndexC,
            $pQueueC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkQueue $queue VkQueue
     * @param int $submitCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSubmitInfo> $pSubmits const VkSubmitInfo*
     * @param \\iggyvolz\vulkan\struct\VkFence $fence VkFence
     * returns VkResult
     */
    public function vkQueueSubmit(
        struct\VkQueue $queue,
        int $submitCount,
        util\ObjectPointer $pSubmits,
        struct\VkFence $fence,
    ): enum\VkResult
    {
        $phpValue = $queue;
        $cValue = $phpValue->cdata;
        $queueC = $cValue;
        $phpValue = $submitCount;
        $cValue = $phpValue;
        $submitCountC = $cValue;
        $phpValue = $pSubmits;
        $cValue = $phpValue->cdata;
        $pSubmitsC = $cValue;
        $phpValue = $fence;
        $cValue = $phpValue->cdata;
        $fenceC = $cValue;
        $cValue = $this->ffi->vkQueueSubmit(
            $queueC,
            $submitCountC,
            $pSubmitsC,
            $fenceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkQueue $queue VkQueue
     * returns VkResult
     */
    public function vkQueueWaitIdle(struct\VkQueue $queue): enum\VkResult
    {
        $phpValue = $queue;
        $cValue = $phpValue->cdata;
        $queueC = $cValue;
        $cValue = $this->ffi->vkQueueWaitIdle(
            $queueC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * returns VkResult
     */
    public function vkDeviceWaitIdle(struct\VkDevice $device): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $cValue = $this->ffi->vkDeviceWaitIdle(
            $deviceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryAllocateInfo> $pAllocateInfo const VkMemoryAllocateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDeviceMemory> $pMemory VkDeviceMemory*
     * returns VkResult
     */
    public function vkAllocateMemory(
        struct\VkDevice $device,
        util\ObjectPointer $pAllocateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pMemory,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pAllocateInfo;
        $cValue = $phpValue->cdata;
        $pAllocateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pMemory;
        $cValue = $phpValue->cdata;
        $pMemoryC = $cValue;
        $cValue = $this->ffi->vkAllocateMemory(
            $deviceC,
            $pAllocateInfoC,
            $pAllocatorC,
            $pMemoryC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkDeviceMemory $memory VkDeviceMemory
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkFreeMemory(
        struct\VkDevice $device,
        struct\VkDeviceMemory $memory,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $memory;
        $cValue = $phpValue->cdata;
        $memoryC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkFreeMemory(
            $deviceC,
            $memoryC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkDeviceMemory $memory VkDeviceMemory
     * @param int $offset VkDeviceSize
     * @param int $size VkDeviceSize
     * @param list<void> $flags VkMemoryMapFlags
     * @param \iggyvolz\vulkan\util\Pointer $ppData void**
     * returns VkResult
     */
    public function vkMapMemory(
        struct\VkDevice $device,
        struct\VkDeviceMemory $memory,
        int $offset,
        int $size,
        array $flags,
        util\Pointer $ppData,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $memory;
        $cValue = $phpValue->cdata;
        $memoryC = $cValue;
        $phpValue = $offset;
        $cValue = $phpValue;
        $offsetC = $cValue;
        $phpValue = $size;
        $cValue = $phpValue;
        $sizeC = $cValue;
        $phpValue = $flags;
        $cValue = 0;
        $flagsC = $cValue;
        $phpValue = $ppData;
        $cValue = $phpValue->cdata;
        $ppDataC = $cValue;
        $cValue = $this->ffi->vkMapMemory(
            $deviceC,
            $memoryC,
            $offsetC,
            $sizeC,
            $flagsC,
            $ppDataC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkDeviceMemory $memory VkDeviceMemory
     */
    public function vkUnmapMemory(struct\VkDevice $device, struct\VkDeviceMemory $memory): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $memory;
        $cValue = $phpValue->cdata;
        $memoryC = $cValue;
        $cValue = $this->ffi->vkUnmapMemory(
            $deviceC,
            $memoryC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param int $memoryRangeCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMappedMemoryRange> $pMemoryRanges const VkMappedMemoryRange*
     * returns VkResult
     */
    public function vkFlushMappedMemoryRanges(
        struct\VkDevice $device,
        int $memoryRangeCount,
        util\ObjectPointer $pMemoryRanges,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $memoryRangeCount;
        $cValue = $phpValue;
        $memoryRangeCountC = $cValue;
        $phpValue = $pMemoryRanges;
        $cValue = $phpValue->cdata;
        $pMemoryRangesC = $cValue;
        $cValue = $this->ffi->vkFlushMappedMemoryRanges(
            $deviceC,
            $memoryRangeCountC,
            $pMemoryRangesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param int $memoryRangeCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMappedMemoryRange> $pMemoryRanges const VkMappedMemoryRange*
     * returns VkResult
     */
    public function vkInvalidateMappedMemoryRanges(
        struct\VkDevice $device,
        int $memoryRangeCount,
        util\ObjectPointer $pMemoryRanges,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $memoryRangeCount;
        $cValue = $phpValue;
        $memoryRangeCountC = $cValue;
        $phpValue = $pMemoryRanges;
        $cValue = $phpValue->cdata;
        $pMemoryRangesC = $cValue;
        $cValue = $this->ffi->vkInvalidateMappedMemoryRanges(
            $deviceC,
            $memoryRangeCountC,
            $pMemoryRangesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkDeviceMemory $memory VkDeviceMemory
     * @param \iggyvolz\vulkan\util\Pointer $pCommittedMemoryInBytes VkDeviceSize*
     */
    public function vkGetDeviceMemoryCommitment(
        struct\VkDevice $device,
        struct\VkDeviceMemory $memory,
        util\Pointer $pCommittedMemoryInBytes,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $memory;
        $cValue = $phpValue->cdata;
        $memoryC = $cValue;
        $phpValue = $pCommittedMemoryInBytes;
        $cValue = $phpValue->cdata;
        $pCommittedMemoryInBytesC = $cValue;
        $cValue = $this->ffi->vkGetDeviceMemoryCommitment(
            $deviceC,
            $memoryC,
            $pCommittedMemoryInBytesC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkBuffer $buffer VkBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryRequirements> $pMemoryRequirements VkMemoryRequirements*
     */
    public function vkGetBufferMemoryRequirements(
        struct\VkDevice $device,
        struct\VkBuffer $buffer,
        util\ObjectPointer $pMemoryRequirements,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $buffer;
        $cValue = $phpValue->cdata;
        $bufferC = $cValue;
        $phpValue = $pMemoryRequirements;
        $cValue = $phpValue->cdata;
        $pMemoryRequirementsC = $cValue;
        $cValue = $this->ffi->vkGetBufferMemoryRequirements(
            $deviceC,
            $bufferC,
            $pMemoryRequirementsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkBuffer $buffer VkBuffer
     * @param \\iggyvolz\vulkan\struct\VkDeviceMemory $memory VkDeviceMemory
     * @param int $memoryOffset VkDeviceSize
     * returns VkResult
     */
    public function vkBindBufferMemory(
        struct\VkDevice $device,
        struct\VkBuffer $buffer,
        struct\VkDeviceMemory $memory,
        int $memoryOffset,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $buffer;
        $cValue = $phpValue->cdata;
        $bufferC = $cValue;
        $phpValue = $memory;
        $cValue = $phpValue->cdata;
        $memoryC = $cValue;
        $phpValue = $memoryOffset;
        $cValue = $phpValue;
        $memoryOffsetC = $cValue;
        $cValue = $this->ffi->vkBindBufferMemory(
            $deviceC,
            $bufferC,
            $memoryC,
            $memoryOffsetC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkImage $image VkImage
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryRequirements> $pMemoryRequirements VkMemoryRequirements*
     */
    public function vkGetImageMemoryRequirements(
        struct\VkDevice $device,
        struct\VkImage $image,
        util\ObjectPointer $pMemoryRequirements,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $image;
        $cValue = $phpValue->cdata;
        $imageC = $cValue;
        $phpValue = $pMemoryRequirements;
        $cValue = $phpValue->cdata;
        $pMemoryRequirementsC = $cValue;
        $cValue = $this->ffi->vkGetImageMemoryRequirements(
            $deviceC,
            $imageC,
            $pMemoryRequirementsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkImage $image VkImage
     * @param \\iggyvolz\vulkan\struct\VkDeviceMemory $memory VkDeviceMemory
     * @param int $memoryOffset VkDeviceSize
     * returns VkResult
     */
    public function vkBindImageMemory(
        struct\VkDevice $device,
        struct\VkImage $image,
        struct\VkDeviceMemory $memory,
        int $memoryOffset,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $image;
        $cValue = $phpValue->cdata;
        $imageC = $cValue;
        $phpValue = $memory;
        $cValue = $phpValue->cdata;
        $memoryC = $cValue;
        $phpValue = $memoryOffset;
        $cValue = $phpValue;
        $memoryOffsetC = $cValue;
        $cValue = $this->ffi->vkBindImageMemory(
            $deviceC,
            $imageC,
            $memoryC,
            $memoryOffsetC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkImage $image VkImage
     * @param \iggyvolz\vulkan\util\IntPointer $pSparseMemoryRequirementCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSparseImageMemoryRequirements> $pSparseMemoryRequirements VkSparseImageMemoryRequirements*
     */
    public function vkGetImageSparseMemoryRequirements(
        struct\VkDevice $device,
        struct\VkImage $image,
        util\IntPointer $pSparseMemoryRequirementCount,
        util\ObjectPointer $pSparseMemoryRequirements,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $image;
        $cValue = $phpValue->cdata;
        $imageC = $cValue;
        $phpValue = $pSparseMemoryRequirementCount;
        $cValue = $phpValue->cdata;
        $pSparseMemoryRequirementCountC = $cValue;
        $phpValue = $pSparseMemoryRequirements;
        $cValue = $phpValue->cdata;
        $pSparseMemoryRequirementsC = $cValue;
        $cValue = $this->ffi->vkGetImageSparseMemoryRequirements(
            $deviceC,
            $imageC,
            $pSparseMemoryRequirementCountC,
            $pSparseMemoryRequirementsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \\iggyvolz\vulkan\enum\VkFormat $format VkFormat
     * @param \\iggyvolz\vulkan\enum\VkImageType $type VkImageType
     * @param \\iggyvolz\vulkan\enum\VkSampleCountFlagBits $samples VkSampleCountFlagBits
     * @param list<iggyvolz\vulkan\enum\VkImageUsageFlagBits> $usage VkImageUsageFlags
     * @param \\iggyvolz\vulkan\enum\VkImageTiling $tiling VkImageTiling
     * @param \iggyvolz\vulkan\util\IntPointer $pPropertyCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSparseImageFormatProperties> $pProperties VkSparseImageFormatProperties*
     */
    public function vkGetPhysicalDeviceSparseImageFormatProperties(
        struct\VkPhysicalDevice $physicalDevice,
        enum\VkFormat $format,
        enum\VkImageType $type,
        enum\VkSampleCountFlagBits $samples,
        array $usage,
        enum\VkImageTiling $tiling,
        util\IntPointer $pPropertyCount,
        util\ObjectPointer $pProperties,
    ): void
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
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
        $cValue = $this->ffi->vkGetPhysicalDeviceSparseImageFormatProperties(
            $physicalDeviceC,
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
     * @param \\iggyvolz\vulkan\struct\VkQueue $queue VkQueue
     * @param int $bindInfoCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBindSparseInfo> $pBindInfo const VkBindSparseInfo*
     * @param \\iggyvolz\vulkan\struct\VkFence $fence VkFence
     * returns VkResult
     */
    public function vkQueueBindSparse(
        struct\VkQueue $queue,
        int $bindInfoCount,
        util\ObjectPointer $pBindInfo,
        struct\VkFence $fence,
    ): enum\VkResult
    {
        $phpValue = $queue;
        $cValue = $phpValue->cdata;
        $queueC = $cValue;
        $phpValue = $bindInfoCount;
        $cValue = $phpValue;
        $bindInfoCountC = $cValue;
        $phpValue = $pBindInfo;
        $cValue = $phpValue->cdata;
        $pBindInfoC = $cValue;
        $phpValue = $fence;
        $cValue = $phpValue->cdata;
        $fenceC = $cValue;
        $cValue = $this->ffi->vkQueueBindSparse(
            $queueC,
            $bindInfoCountC,
            $pBindInfoC,
            $fenceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkFenceCreateInfo> $pCreateInfo const VkFenceCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkFence> $pFence VkFence*
     * returns VkResult
     */
    public function vkCreateFence(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pFence,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pFence;
        $cValue = $phpValue->cdata;
        $pFenceC = $cValue;
        $cValue = $this->ffi->vkCreateFence(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pFenceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkFence $fence VkFence
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyFence(
        struct\VkDevice $device,
        struct\VkFence $fence,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $fence;
        $cValue = $phpValue->cdata;
        $fenceC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyFence(
            $deviceC,
            $fenceC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param int $fenceCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkFence> $pFences const VkFence*
     * returns VkResult
     */
    public function vkResetFences(
        struct\VkDevice $device,
        int $fenceCount,
        util\ObjectPointer $pFences,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $fenceCount;
        $cValue = $phpValue;
        $fenceCountC = $cValue;
        $phpValue = $pFences;
        $cValue = $phpValue->cdata;
        $pFencesC = $cValue;
        $cValue = $this->ffi->vkResetFences(
            $deviceC,
            $fenceCountC,
            $pFencesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkFence $fence VkFence
     * returns VkResult
     */
    public function vkGetFenceStatus(struct\VkDevice $device, struct\VkFence $fence): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $fence;
        $cValue = $phpValue->cdata;
        $fenceC = $cValue;
        $cValue = $this->ffi->vkGetFenceStatus(
            $deviceC,
            $fenceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param int $fenceCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkFence> $pFences const VkFence*
     * @param bool $waitAll VkBool32
     * @param int $timeout uint64_t
     * returns VkResult
     */
    public function vkWaitForFences(
        struct\VkDevice $device,
        int $fenceCount,
        util\ObjectPointer $pFences,
        bool $waitAll,
        int $timeout,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $fenceCount;
        $cValue = $phpValue;
        $fenceCountC = $cValue;
        $phpValue = $pFences;
        $cValue = $phpValue->cdata;
        $pFencesC = $cValue;
        $phpValue = $waitAll;
        $cValue = $phpValue ? 1 : 0;
        $waitAllC = $cValue;
        $phpValue = $timeout;
        $cValue = $phpValue;
        $timeoutC = $cValue;
        $cValue = $this->ffi->vkWaitForFences(
            $deviceC,
            $fenceCountC,
            $pFencesC,
            $waitAllC,
            $timeoutC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSemaphoreCreateInfo> $pCreateInfo const VkSemaphoreCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSemaphore> $pSemaphore VkSemaphore*
     * returns VkResult
     */
    public function vkCreateSemaphore(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pSemaphore,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSemaphore;
        $cValue = $phpValue->cdata;
        $pSemaphoreC = $cValue;
        $cValue = $this->ffi->vkCreateSemaphore(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pSemaphoreC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkSemaphore $semaphore VkSemaphore
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroySemaphore(
        struct\VkDevice $device,
        struct\VkSemaphore $semaphore,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $semaphore;
        $cValue = $phpValue->cdata;
        $semaphoreC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroySemaphore(
            $deviceC,
            $semaphoreC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkEventCreateInfo> $pCreateInfo const VkEventCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkEvent> $pEvent VkEvent*
     * returns VkResult
     */
    public function vkCreateEvent(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pEvent,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pEvent;
        $cValue = $phpValue->cdata;
        $pEventC = $cValue;
        $cValue = $this->ffi->vkCreateEvent(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pEventC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkEvent $event VkEvent
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyEvent(
        struct\VkDevice $device,
        struct\VkEvent $event,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $event;
        $cValue = $phpValue->cdata;
        $eventC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyEvent(
            $deviceC,
            $eventC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkEvent $event VkEvent
     * returns VkResult
     */
    public function vkGetEventStatus(struct\VkDevice $device, struct\VkEvent $event): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $event;
        $cValue = $phpValue->cdata;
        $eventC = $cValue;
        $cValue = $this->ffi->vkGetEventStatus(
            $deviceC,
            $eventC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkEvent $event VkEvent
     * returns VkResult
     */
    public function vkSetEvent(struct\VkDevice $device, struct\VkEvent $event): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $event;
        $cValue = $phpValue->cdata;
        $eventC = $cValue;
        $cValue = $this->ffi->vkSetEvent(
            $deviceC,
            $eventC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkEvent $event VkEvent
     * returns VkResult
     */
    public function vkResetEvent(struct\VkDevice $device, struct\VkEvent $event): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $event;
        $cValue = $phpValue->cdata;
        $eventC = $cValue;
        $cValue = $this->ffi->vkResetEvent(
            $deviceC,
            $eventC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkQueryPoolCreateInfo> $pCreateInfo const VkQueryPoolCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkQueryPool> $pQueryPool VkQueryPool*
     * returns VkResult
     */
    public function vkCreateQueryPool(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pQueryPool,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pQueryPool;
        $cValue = $phpValue->cdata;
        $pQueryPoolC = $cValue;
        $cValue = $this->ffi->vkCreateQueryPool(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pQueryPoolC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkQueryPool $queryPool VkQueryPool
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyQueryPool(
        struct\VkDevice $device,
        struct\VkQueryPool $queryPool,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $queryPool;
        $cValue = $phpValue->cdata;
        $queryPoolC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyQueryPool(
            $deviceC,
            $queryPoolC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkQueryPool $queryPool VkQueryPool
     * @param int $firstQuery uint32_t
     * @param int $queryCount uint32_t
     * @param int $dataSize size_t
     * @param \iggyvolz\vulkan\util\Pointer $pData void*
     * @param int $stride VkDeviceSize
     * @param list<iggyvolz\vulkan\enum\VkQueryResultFlagBits> $flags VkQueryResultFlags
     * returns VkResult
     */
    public function vkGetQueryPoolResults(
        struct\VkDevice $device,
        struct\VkQueryPool $queryPool,
        int $firstQuery,
        int $queryCount,
        int $dataSize,
        util\Pointer $pData,
        int $stride,
        array $flags,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $queryPool;
        $cValue = $phpValue->cdata;
        $queryPoolC = $cValue;
        $phpValue = $firstQuery;
        $cValue = $phpValue;
        $firstQueryC = $cValue;
        $phpValue = $queryCount;
        $cValue = $phpValue;
        $queryCountC = $cValue;
        $phpValue = $dataSize;
        $cValue = $phpValue;
        $dataSizeC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $phpValue = $stride;
        $cValue = $phpValue;
        $strideC = $cValue;
        $phpValue = $flags;
        $cValue = \iggyvolz\vulkan\enum\VkQueryResultFlagBits::toInt(...$phpValue);
        $flagsC = $cValue;
        $cValue = $this->ffi->vkGetQueryPoolResults(
            $deviceC,
            $queryPoolC,
            $firstQueryC,
            $queryCountC,
            $dataSizeC,
            $pDataC,
            $strideC,
            $flagsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkQueryPool $queryPool VkQueryPool
     * @param int $firstQuery uint32_t
     * @param int $queryCount uint32_t
     */
    public function vkResetQueryPool(
        struct\VkDevice $device,
        struct\VkQueryPool $queryPool,
        int $firstQuery,
        int $queryCount,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $queryPool;
        $cValue = $phpValue->cdata;
        $queryPoolC = $cValue;
        $phpValue = $firstQuery;
        $cValue = $phpValue;
        $firstQueryC = $cValue;
        $phpValue = $queryCount;
        $cValue = $phpValue;
        $queryCountC = $cValue;
        $cValue = $this->ffi->vkResetQueryPool(
            $deviceC,
            $queryPoolC,
            $firstQueryC,
            $queryCountC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBufferCreateInfo> $pCreateInfo const VkBufferCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBuffer> $pBuffer VkBuffer*
     * returns VkResult
     */
    public function vkCreateBuffer(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pBuffer,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pBuffer;
        $cValue = $phpValue->cdata;
        $pBufferC = $cValue;
        $cValue = $this->ffi->vkCreateBuffer(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pBufferC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkBuffer $buffer VkBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyBuffer(
        struct\VkDevice $device,
        struct\VkBuffer $buffer,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $buffer;
        $cValue = $phpValue->cdata;
        $bufferC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyBuffer(
            $deviceC,
            $bufferC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBufferViewCreateInfo> $pCreateInfo const VkBufferViewCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBufferView> $pView VkBufferView*
     * returns VkResult
     */
    public function vkCreateBufferView(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pView,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pView;
        $cValue = $phpValue->cdata;
        $pViewC = $cValue;
        $cValue = $this->ffi->vkCreateBufferView(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pViewC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkBufferView $bufferView VkBufferView
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyBufferView(
        struct\VkDevice $device,
        struct\VkBufferView $bufferView,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $bufferView;
        $cValue = $phpValue->cdata;
        $bufferViewC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyBufferView(
            $deviceC,
            $bufferViewC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageCreateInfo> $pCreateInfo const VkImageCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImage> $pImage VkImage*
     * returns VkResult
     */
    public function vkCreateImage(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pImage,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pImage;
        $cValue = $phpValue->cdata;
        $pImageC = $cValue;
        $cValue = $this->ffi->vkCreateImage(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pImageC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkImage $image VkImage
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyImage(
        struct\VkDevice $device,
        struct\VkImage $image,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $image;
        $cValue = $phpValue->cdata;
        $imageC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyImage(
            $deviceC,
            $imageC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkImage $image VkImage
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageSubresource> $pSubresource const VkImageSubresource*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSubresourceLayout> $pLayout VkSubresourceLayout*
     */
    public function vkGetImageSubresourceLayout(
        struct\VkDevice $device,
        struct\VkImage $image,
        util\ObjectPointer $pSubresource,
        util\ObjectPointer $pLayout,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $image;
        $cValue = $phpValue->cdata;
        $imageC = $cValue;
        $phpValue = $pSubresource;
        $cValue = $phpValue->cdata;
        $pSubresourceC = $cValue;
        $phpValue = $pLayout;
        $cValue = $phpValue->cdata;
        $pLayoutC = $cValue;
        $cValue = $this->ffi->vkGetImageSubresourceLayout(
            $deviceC,
            $imageC,
            $pSubresourceC,
            $pLayoutC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageViewCreateInfo> $pCreateInfo const VkImageViewCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageView> $pView VkImageView*
     * returns VkResult
     */
    public function vkCreateImageView(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pView,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pView;
        $cValue = $phpValue->cdata;
        $pViewC = $cValue;
        $cValue = $this->ffi->vkCreateImageView(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pViewC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkImageView $imageView VkImageView
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyImageView(
        struct\VkDevice $device,
        struct\VkImageView $imageView,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $imageView;
        $cValue = $phpValue->cdata;
        $imageViewC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyImageView(
            $deviceC,
            $imageViewC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkShaderModuleCreateInfo> $pCreateInfo const VkShaderModuleCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkShaderModule> $pShaderModule VkShaderModule*
     * returns VkResult
     */
    public function vkCreateShaderModule(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pShaderModule,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pShaderModule;
        $cValue = $phpValue->cdata;
        $pShaderModuleC = $cValue;
        $cValue = $this->ffi->vkCreateShaderModule(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pShaderModuleC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkShaderModule $shaderModule VkShaderModule
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyShaderModule(
        struct\VkDevice $device,
        struct\VkShaderModule $shaderModule,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $shaderModule;
        $cValue = $phpValue->cdata;
        $shaderModuleC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyShaderModule(
            $deviceC,
            $shaderModuleC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipelineCacheCreateInfo> $pCreateInfo const VkPipelineCacheCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipelineCache> $pPipelineCache VkPipelineCache*
     * returns VkResult
     */
    public function vkCreatePipelineCache(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pPipelineCache,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pPipelineCache;
        $cValue = $phpValue->cdata;
        $pPipelineCacheC = $cValue;
        $cValue = $this->ffi->vkCreatePipelineCache(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pPipelineCacheC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkPipelineCache $pipelineCache VkPipelineCache
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyPipelineCache(
        struct\VkDevice $device,
        struct\VkPipelineCache $pipelineCache,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pipelineCache;
        $cValue = $phpValue->cdata;
        $pipelineCacheC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyPipelineCache(
            $deviceC,
            $pipelineCacheC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkPipelineCache $pipelineCache VkPipelineCache
     * @param \iggyvolz\vulkan\util\IntPointer $pDataSize size_t*
     * @param \iggyvolz\vulkan\util\Pointer $pData void*
     * returns VkResult
     */
    public function vkGetPipelineCacheData(
        struct\VkDevice $device,
        struct\VkPipelineCache $pipelineCache,
        util\IntPointer $pDataSize,
        util\Pointer $pData,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pipelineCache;
        $cValue = $phpValue->cdata;
        $pipelineCacheC = $cValue;
        $phpValue = $pDataSize;
        $cValue = $phpValue->cdata;
        $pDataSizeC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $cValue = $this->ffi->vkGetPipelineCacheData(
            $deviceC,
            $pipelineCacheC,
            $pDataSizeC,
            $pDataC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkPipelineCache $dstCache VkPipelineCache
     * @param int $srcCacheCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipelineCache> $pSrcCaches const VkPipelineCache*
     * returns VkResult
     */
    public function vkMergePipelineCaches(
        struct\VkDevice $device,
        struct\VkPipelineCache $dstCache,
        int $srcCacheCount,
        util\ObjectPointer $pSrcCaches,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $dstCache;
        $cValue = $phpValue->cdata;
        $dstCacheC = $cValue;
        $phpValue = $srcCacheCount;
        $cValue = $phpValue;
        $srcCacheCountC = $cValue;
        $phpValue = $pSrcCaches;
        $cValue = $phpValue->cdata;
        $pSrcCachesC = $cValue;
        $cValue = $this->ffi->vkMergePipelineCaches(
            $deviceC,
            $dstCacheC,
            $srcCacheCountC,
            $pSrcCachesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkPipelineCache $pipelineCache VkPipelineCache
     * @param int $createInfoCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkGraphicsPipelineCreateInfo> $pCreateInfos const VkGraphicsPipelineCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipeline> $pPipelines VkPipeline*
     * returns VkResult
     */
    public function vkCreateGraphicsPipelines(
        struct\VkDevice $device,
        struct\VkPipelineCache $pipelineCache,
        int $createInfoCount,
        util\ObjectPointer $pCreateInfos,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pPipelines,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pipelineCache;
        $cValue = $phpValue->cdata;
        $pipelineCacheC = $cValue;
        $phpValue = $createInfoCount;
        $cValue = $phpValue;
        $createInfoCountC = $cValue;
        $phpValue = $pCreateInfos;
        $cValue = $phpValue->cdata;
        $pCreateInfosC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pPipelines;
        $cValue = $phpValue->cdata;
        $pPipelinesC = $cValue;
        $cValue = $this->ffi->vkCreateGraphicsPipelines(
            $deviceC,
            $pipelineCacheC,
            $createInfoCountC,
            $pCreateInfosC,
            $pAllocatorC,
            $pPipelinesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkPipelineCache $pipelineCache VkPipelineCache
     * @param int $createInfoCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkComputePipelineCreateInfo> $pCreateInfos const VkComputePipelineCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipeline> $pPipelines VkPipeline*
     * returns VkResult
     */
    public function vkCreateComputePipelines(
        struct\VkDevice $device,
        struct\VkPipelineCache $pipelineCache,
        int $createInfoCount,
        util\ObjectPointer $pCreateInfos,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pPipelines,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pipelineCache;
        $cValue = $phpValue->cdata;
        $pipelineCacheC = $cValue;
        $phpValue = $createInfoCount;
        $cValue = $phpValue;
        $createInfoCountC = $cValue;
        $phpValue = $pCreateInfos;
        $cValue = $phpValue->cdata;
        $pCreateInfosC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pPipelines;
        $cValue = $phpValue->cdata;
        $pPipelinesC = $cValue;
        $cValue = $this->ffi->vkCreateComputePipelines(
            $deviceC,
            $pipelineCacheC,
            $createInfoCountC,
            $pCreateInfosC,
            $pAllocatorC,
            $pPipelinesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkRenderPass $renderpass VkRenderPass
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkExtent2D> $pMaxWorkgroupSize VkExtent2D*
     * returns VkResult
     */
    public function vkGetDeviceSubpassShadingMaxWorkgroupSizeHUAWEI(
        struct\VkDevice $device,
        struct\VkRenderPass $renderpass,
        util\ObjectPointer $pMaxWorkgroupSize,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $renderpass;
        $cValue = $phpValue->cdata;
        $renderpassC = $cValue;
        $phpValue = $pMaxWorkgroupSize;
        $cValue = $phpValue->cdata;
        $pMaxWorkgroupSizeC = $cValue;
        $cValue = $this->ffi->vkGetDeviceSubpassShadingMaxWorkgroupSizeHUAWEI(
            $deviceC,
            $renderpassC,
            $pMaxWorkgroupSizeC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkPipeline $pipeline VkPipeline
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyPipeline(
        struct\VkDevice $device,
        struct\VkPipeline $pipeline,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pipeline;
        $cValue = $phpValue->cdata;
        $pipelineC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyPipeline(
            $deviceC,
            $pipelineC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipelineLayoutCreateInfo> $pCreateInfo const VkPipelineLayoutCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipelineLayout> $pPipelineLayout VkPipelineLayout*
     * returns VkResult
     */
    public function vkCreatePipelineLayout(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pPipelineLayout,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pPipelineLayout;
        $cValue = $phpValue->cdata;
        $pPipelineLayoutC = $cValue;
        $cValue = $this->ffi->vkCreatePipelineLayout(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pPipelineLayoutC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkPipelineLayout $pipelineLayout VkPipelineLayout
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyPipelineLayout(
        struct\VkDevice $device,
        struct\VkPipelineLayout $pipelineLayout,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pipelineLayout;
        $cValue = $phpValue->cdata;
        $pipelineLayoutC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyPipelineLayout(
            $deviceC,
            $pipelineLayoutC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSamplerCreateInfo> $pCreateInfo const VkSamplerCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSampler> $pSampler VkSampler*
     * returns VkResult
     */
    public function vkCreateSampler(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pSampler,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSampler;
        $cValue = $phpValue->cdata;
        $pSamplerC = $cValue;
        $cValue = $this->ffi->vkCreateSampler(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pSamplerC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkSampler $sampler VkSampler
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroySampler(
        struct\VkDevice $device,
        struct\VkSampler $sampler,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $sampler;
        $cValue = $phpValue->cdata;
        $samplerC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroySampler(
            $deviceC,
            $samplerC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDescriptorSetLayoutCreateInfo> $pCreateInfo const VkDescriptorSetLayoutCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDescriptorSetLayout> $pSetLayout VkDescriptorSetLayout*
     * returns VkResult
     */
    public function vkCreateDescriptorSetLayout(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pSetLayout,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSetLayout;
        $cValue = $phpValue->cdata;
        $pSetLayoutC = $cValue;
        $cValue = $this->ffi->vkCreateDescriptorSetLayout(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pSetLayoutC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkDescriptorSetLayout $descriptorSetLayout VkDescriptorSetLayout
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyDescriptorSetLayout(
        struct\VkDevice $device,
        struct\VkDescriptorSetLayout $descriptorSetLayout,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $descriptorSetLayout;
        $cValue = $phpValue->cdata;
        $descriptorSetLayoutC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyDescriptorSetLayout(
            $deviceC,
            $descriptorSetLayoutC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDescriptorPoolCreateInfo> $pCreateInfo const VkDescriptorPoolCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDescriptorPool> $pDescriptorPool VkDescriptorPool*
     * returns VkResult
     */
    public function vkCreateDescriptorPool(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pDescriptorPool,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pDescriptorPool;
        $cValue = $phpValue->cdata;
        $pDescriptorPoolC = $cValue;
        $cValue = $this->ffi->vkCreateDescriptorPool(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pDescriptorPoolC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkDescriptorPool $descriptorPool VkDescriptorPool
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyDescriptorPool(
        struct\VkDevice $device,
        struct\VkDescriptorPool $descriptorPool,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $descriptorPool;
        $cValue = $phpValue->cdata;
        $descriptorPoolC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyDescriptorPool(
            $deviceC,
            $descriptorPoolC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkDescriptorPool $descriptorPool VkDescriptorPool
     * @param list<void> $flags VkDescriptorPoolResetFlags
     * returns VkResult
     */
    public function vkResetDescriptorPool(
        struct\VkDevice $device,
        struct\VkDescriptorPool $descriptorPool,
        array $flags,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $descriptorPool;
        $cValue = $phpValue->cdata;
        $descriptorPoolC = $cValue;
        $phpValue = $flags;
        $cValue = 0;
        $flagsC = $cValue;
        $cValue = $this->ffi->vkResetDescriptorPool(
            $deviceC,
            $descriptorPoolC,
            $flagsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDescriptorSetAllocateInfo> $pAllocateInfo const VkDescriptorSetAllocateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDescriptorSet> $pDescriptorSets VkDescriptorSet*
     * returns VkResult
     */
    public function vkAllocateDescriptorSets(
        struct\VkDevice $device,
        util\ObjectPointer $pAllocateInfo,
        util\ObjectPointer $pDescriptorSets,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pAllocateInfo;
        $cValue = $phpValue->cdata;
        $pAllocateInfoC = $cValue;
        $phpValue = $pDescriptorSets;
        $cValue = $phpValue->cdata;
        $pDescriptorSetsC = $cValue;
        $cValue = $this->ffi->vkAllocateDescriptorSets(
            $deviceC,
            $pAllocateInfoC,
            $pDescriptorSetsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkDescriptorPool $descriptorPool VkDescriptorPool
     * @param int $descriptorSetCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDescriptorSet> $pDescriptorSets const VkDescriptorSet*
     * returns VkResult
     */
    public function vkFreeDescriptorSets(
        struct\VkDevice $device,
        struct\VkDescriptorPool $descriptorPool,
        int $descriptorSetCount,
        util\ObjectPointer $pDescriptorSets,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $descriptorPool;
        $cValue = $phpValue->cdata;
        $descriptorPoolC = $cValue;
        $phpValue = $descriptorSetCount;
        $cValue = $phpValue;
        $descriptorSetCountC = $cValue;
        $phpValue = $pDescriptorSets;
        $cValue = $phpValue->cdata;
        $pDescriptorSetsC = $cValue;
        $cValue = $this->ffi->vkFreeDescriptorSets(
            $deviceC,
            $descriptorPoolC,
            $descriptorSetCountC,
            $pDescriptorSetsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param int $descriptorWriteCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkWriteDescriptorSet> $pDescriptorWrites const VkWriteDescriptorSet*
     * @param int $descriptorCopyCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyDescriptorSet> $pDescriptorCopies const VkCopyDescriptorSet*
     */
    public function vkUpdateDescriptorSets(
        struct\VkDevice $device,
        int $descriptorWriteCount,
        util\ObjectPointer $pDescriptorWrites,
        int $descriptorCopyCount,
        util\ObjectPointer $pDescriptorCopies,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $descriptorWriteCount;
        $cValue = $phpValue;
        $descriptorWriteCountC = $cValue;
        $phpValue = $pDescriptorWrites;
        $cValue = $phpValue->cdata;
        $pDescriptorWritesC = $cValue;
        $phpValue = $descriptorCopyCount;
        $cValue = $phpValue;
        $descriptorCopyCountC = $cValue;
        $phpValue = $pDescriptorCopies;
        $cValue = $phpValue->cdata;
        $pDescriptorCopiesC = $cValue;
        $cValue = $this->ffi->vkUpdateDescriptorSets(
            $deviceC,
            $descriptorWriteCountC,
            $pDescriptorWritesC,
            $descriptorCopyCountC,
            $pDescriptorCopiesC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkFramebufferCreateInfo> $pCreateInfo const VkFramebufferCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkFramebuffer> $pFramebuffer VkFramebuffer*
     * returns VkResult
     */
    public function vkCreateFramebuffer(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pFramebuffer,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pFramebuffer;
        $cValue = $phpValue->cdata;
        $pFramebufferC = $cValue;
        $cValue = $this->ffi->vkCreateFramebuffer(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pFramebufferC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkFramebuffer $framebuffer VkFramebuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyFramebuffer(
        struct\VkDevice $device,
        struct\VkFramebuffer $framebuffer,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $framebuffer;
        $cValue = $phpValue->cdata;
        $framebufferC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyFramebuffer(
            $deviceC,
            $framebufferC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRenderPassCreateInfo> $pCreateInfo const VkRenderPassCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRenderPass> $pRenderPass VkRenderPass*
     * returns VkResult
     */
    public function vkCreateRenderPass(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pRenderPass,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pRenderPass;
        $cValue = $phpValue->cdata;
        $pRenderPassC = $cValue;
        $cValue = $this->ffi->vkCreateRenderPass(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pRenderPassC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkRenderPass $renderPass VkRenderPass
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyRenderPass(
        struct\VkDevice $device,
        struct\VkRenderPass $renderPass,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $renderPass;
        $cValue = $phpValue->cdata;
        $renderPassC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyRenderPass(
            $deviceC,
            $renderPassC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkRenderPass $renderPass VkRenderPass
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkExtent2D> $pGranularity VkExtent2D*
     */
    public function vkGetRenderAreaGranularity(
        struct\VkDevice $device,
        struct\VkRenderPass $renderPass,
        util\ObjectPointer $pGranularity,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $renderPass;
        $cValue = $phpValue->cdata;
        $renderPassC = $cValue;
        $phpValue = $pGranularity;
        $cValue = $phpValue->cdata;
        $pGranularityC = $cValue;
        $cValue = $this->ffi->vkGetRenderAreaGranularity(
            $deviceC,
            $renderPassC,
            $pGranularityC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRenderingAreaInfoKHR> $pRenderingAreaInfo const VkRenderingAreaInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkExtent2D> $pGranularity VkExtent2D*
     */
    public function vkGetRenderingAreaGranularityKHR(
        struct\VkDevice $device,
        util\ObjectPointer $pRenderingAreaInfo,
        util\ObjectPointer $pGranularity,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pRenderingAreaInfo;
        $cValue = $phpValue->cdata;
        $pRenderingAreaInfoC = $cValue;
        $phpValue = $pGranularity;
        $cValue = $phpValue->cdata;
        $pGranularityC = $cValue;
        $cValue = $this->ffi->vkGetRenderingAreaGranularityKHR(
            $deviceC,
            $pRenderingAreaInfoC,
            $pGranularityC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCommandPoolCreateInfo> $pCreateInfo const VkCommandPoolCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCommandPool> $pCommandPool VkCommandPool*
     * returns VkResult
     */
    public function vkCreateCommandPool(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pCommandPool,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pCommandPool;
        $cValue = $phpValue->cdata;
        $pCommandPoolC = $cValue;
        $cValue = $this->ffi->vkCreateCommandPool(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pCommandPoolC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkCommandPool $commandPool VkCommandPool
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyCommandPool(
        struct\VkDevice $device,
        struct\VkCommandPool $commandPool,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $commandPool;
        $cValue = $phpValue->cdata;
        $commandPoolC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyCommandPool(
            $deviceC,
            $commandPoolC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkCommandPool $commandPool VkCommandPool
     * @param list<iggyvolz\vulkan\enum\VkCommandPoolResetFlagBits> $flags VkCommandPoolResetFlags
     * returns VkResult
     */
    public function vkResetCommandPool(
        struct\VkDevice $device,
        struct\VkCommandPool $commandPool,
        array $flags,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $commandPool;
        $cValue = $phpValue->cdata;
        $commandPoolC = $cValue;
        $phpValue = $flags;
        $cValue = \iggyvolz\vulkan\enum\VkCommandPoolResetFlagBits::toInt(...$phpValue);
        $flagsC = $cValue;
        $cValue = $this->ffi->vkResetCommandPool(
            $deviceC,
            $commandPoolC,
            $flagsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCommandBufferAllocateInfo> $pAllocateInfo const VkCommandBufferAllocateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCommandBuffer> $pCommandBuffers VkCommandBuffer*
     * returns VkResult
     */
    public function vkAllocateCommandBuffers(
        struct\VkDevice $device,
        util\ObjectPointer $pAllocateInfo,
        util\ObjectPointer $pCommandBuffers,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pAllocateInfo;
        $cValue = $phpValue->cdata;
        $pAllocateInfoC = $cValue;
        $phpValue = $pCommandBuffers;
        $cValue = $phpValue->cdata;
        $pCommandBuffersC = $cValue;
        $cValue = $this->ffi->vkAllocateCommandBuffers(
            $deviceC,
            $pAllocateInfoC,
            $pCommandBuffersC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkCommandPool $commandPool VkCommandPool
     * @param int $commandBufferCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCommandBuffer> $pCommandBuffers const VkCommandBuffer*
     */
    public function vkFreeCommandBuffers(
        struct\VkDevice $device,
        struct\VkCommandPool $commandPool,
        int $commandBufferCount,
        util\ObjectPointer $pCommandBuffers,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $commandPool;
        $cValue = $phpValue->cdata;
        $commandPoolC = $cValue;
        $phpValue = $commandBufferCount;
        $cValue = $phpValue;
        $commandBufferCountC = $cValue;
        $phpValue = $pCommandBuffers;
        $cValue = $phpValue->cdata;
        $pCommandBuffersC = $cValue;
        $cValue = $this->ffi->vkFreeCommandBuffers(
            $deviceC,
            $commandPoolC,
            $commandBufferCountC,
            $pCommandBuffersC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCommandBufferBeginInfo> $pBeginInfo const VkCommandBufferBeginInfo*
     * returns VkResult
     */
    public function vkBeginCommandBuffer(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pBeginInfo,
    ): enum\VkResult
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pBeginInfo;
        $cValue = $phpValue->cdata;
        $pBeginInfoC = $cValue;
        $cValue = $this->ffi->vkBeginCommandBuffer(
            $commandBufferC,
            $pBeginInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * returns VkResult
     */
    public function vkEndCommandBuffer(struct\VkCommandBuffer $commandBuffer): enum\VkResult
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $cValue = $this->ffi->vkEndCommandBuffer(
            $commandBufferC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param list<iggyvolz\vulkan\enum\VkCommandBufferResetFlagBits> $flags VkCommandBufferResetFlags
     * returns VkResult
     */
    public function vkResetCommandBuffer(struct\VkCommandBuffer $commandBuffer, array $flags): enum\VkResult
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $flags;
        $cValue = \iggyvolz\vulkan\enum\VkCommandBufferResetFlagBits::toInt(...$phpValue);
        $flagsC = $cValue;
        $cValue = $this->ffi->vkResetCommandBuffer(
            $commandBufferC,
            $flagsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint VkPipelineBindPoint
     * @param \\iggyvolz\vulkan\struct\VkPipeline $pipeline VkPipeline
     */
    public function vkCmdBindPipeline(
        struct\VkCommandBuffer $commandBuffer,
        enum\VkPipelineBindPoint $pipelineBindPoint,
        struct\VkPipeline $pipeline,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pipelineBindPoint;
        $cValue = $phpValue->value;
        $pipelineBindPointC = $cValue;
        $phpValue = $pipeline;
        $cValue = $phpValue->cdata;
        $pipelineC = $cValue;
        $cValue = $this->ffi->vkCmdBindPipeline(
            $commandBufferC,
            $pipelineBindPointC,
            $pipelineC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param list<iggyvolz\vulkan\enum\VkImageAspectFlagBits> $aspectMask VkImageAspectFlags
     */
    public function vkCmdSetAttachmentFeedbackLoopEnableEXT(
        struct\VkCommandBuffer $commandBuffer,
        array $aspectMask,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $aspectMask;
        $cValue = \iggyvolz\vulkan\enum\VkImageAspectFlagBits::toInt(...$phpValue);
        $aspectMaskC = $cValue;
        $cValue = $this->ffi->vkCmdSetAttachmentFeedbackLoopEnableEXT(
            $commandBufferC,
            $aspectMaskC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $firstViewport uint32_t
     * @param int $viewportCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkViewport> $pViewports const VkViewport*
     */
    public function vkCmdSetViewport(
        struct\VkCommandBuffer $commandBuffer,
        int $firstViewport,
        int $viewportCount,
        util\ObjectPointer $pViewports,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $firstViewport;
        $cValue = $phpValue;
        $firstViewportC = $cValue;
        $phpValue = $viewportCount;
        $cValue = $phpValue;
        $viewportCountC = $cValue;
        $phpValue = $pViewports;
        $cValue = $phpValue->cdata;
        $pViewportsC = $cValue;
        $cValue = $this->ffi->vkCmdSetViewport(
            $commandBufferC,
            $firstViewportC,
            $viewportCountC,
            $pViewportsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $firstScissor uint32_t
     * @param int $scissorCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRect2D> $pScissors const VkRect2D*
     */
    public function vkCmdSetScissor(
        struct\VkCommandBuffer $commandBuffer,
        int $firstScissor,
        int $scissorCount,
        util\ObjectPointer $pScissors,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $firstScissor;
        $cValue = $phpValue;
        $firstScissorC = $cValue;
        $phpValue = $scissorCount;
        $cValue = $phpValue;
        $scissorCountC = $cValue;
        $phpValue = $pScissors;
        $cValue = $phpValue->cdata;
        $pScissorsC = $cValue;
        $cValue = $this->ffi->vkCmdSetScissor(
            $commandBufferC,
            $firstScissorC,
            $scissorCountC,
            $pScissorsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param float $lineWidth float
     */
    public function vkCmdSetLineWidth(struct\VkCommandBuffer $commandBuffer, float $lineWidth): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $lineWidth;
        $cValue = $phpValue;
        $lineWidthC = $cValue;
        $cValue = $this->ffi->vkCmdSetLineWidth(
            $commandBufferC,
            $lineWidthC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param float $depthBiasConstantFactor float
     * @param float $depthBiasClamp float
     * @param float $depthBiasSlopeFactor float
     */
    public function vkCmdSetDepthBias(
        struct\VkCommandBuffer $commandBuffer,
        float $depthBiasConstantFactor,
        float $depthBiasClamp,
        float $depthBiasSlopeFactor,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $depthBiasConstantFactor;
        $cValue = $phpValue;
        $depthBiasConstantFactorC = $cValue;
        $phpValue = $depthBiasClamp;
        $cValue = $phpValue;
        $depthBiasClampC = $cValue;
        $phpValue = $depthBiasSlopeFactor;
        $cValue = $phpValue;
        $depthBiasSlopeFactorC = $cValue;
        $cValue = $this->ffi->vkCmdSetDepthBias(
            $commandBufferC,
            $depthBiasConstantFactorC,
            $depthBiasClampC,
            $depthBiasSlopeFactorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param mixed $blendConstants const float [4]
     */
    public function vkCmdSetBlendConstants(struct\VkCommandBuffer $commandBuffer, mixed $blendConstants): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $blendConstants;
        throw new \LogicException("Dummy transformer!");
        $blendConstantsC = $cValue;
        $cValue = $this->ffi->vkCmdSetBlendConstants(
            $commandBufferC,
            $blendConstantsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param float $minDepthBounds float
     * @param float $maxDepthBounds float
     */
    public function vkCmdSetDepthBounds(
        struct\VkCommandBuffer $commandBuffer,
        float $minDepthBounds,
        float $maxDepthBounds,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $minDepthBounds;
        $cValue = $phpValue;
        $minDepthBoundsC = $cValue;
        $phpValue = $maxDepthBounds;
        $cValue = $phpValue;
        $maxDepthBoundsC = $cValue;
        $cValue = $this->ffi->vkCmdSetDepthBounds(
            $commandBufferC,
            $minDepthBoundsC,
            $maxDepthBoundsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param list<iggyvolz\vulkan\enum\VkStencilFaceFlagBits> $faceMask VkStencilFaceFlags
     * @param int $compareMask uint32_t
     */
    public function vkCmdSetStencilCompareMask(
        struct\VkCommandBuffer $commandBuffer,
        array $faceMask,
        int $compareMask,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $faceMask;
        $cValue = \iggyvolz\vulkan\enum\VkStencilFaceFlagBits::toInt(...$phpValue);
        $faceMaskC = $cValue;
        $phpValue = $compareMask;
        $cValue = $phpValue;
        $compareMaskC = $cValue;
        $cValue = $this->ffi->vkCmdSetStencilCompareMask(
            $commandBufferC,
            $faceMaskC,
            $compareMaskC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param list<iggyvolz\vulkan\enum\VkStencilFaceFlagBits> $faceMask VkStencilFaceFlags
     * @param int $writeMask uint32_t
     */
    public function vkCmdSetStencilWriteMask(
        struct\VkCommandBuffer $commandBuffer,
        array $faceMask,
        int $writeMask,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $faceMask;
        $cValue = \iggyvolz\vulkan\enum\VkStencilFaceFlagBits::toInt(...$phpValue);
        $faceMaskC = $cValue;
        $phpValue = $writeMask;
        $cValue = $phpValue;
        $writeMaskC = $cValue;
        $cValue = $this->ffi->vkCmdSetStencilWriteMask(
            $commandBufferC,
            $faceMaskC,
            $writeMaskC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param list<iggyvolz\vulkan\enum\VkStencilFaceFlagBits> $faceMask VkStencilFaceFlags
     * @param int $reference uint32_t
     */
    public function vkCmdSetStencilReference(
        struct\VkCommandBuffer $commandBuffer,
        array $faceMask,
        int $reference,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $faceMask;
        $cValue = \iggyvolz\vulkan\enum\VkStencilFaceFlagBits::toInt(...$phpValue);
        $faceMaskC = $cValue;
        $phpValue = $reference;
        $cValue = $phpValue;
        $referenceC = $cValue;
        $cValue = $this->ffi->vkCmdSetStencilReference(
            $commandBufferC,
            $faceMaskC,
            $referenceC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint VkPipelineBindPoint
     * @param \\iggyvolz\vulkan\struct\VkPipelineLayout $layout VkPipelineLayout
     * @param int $firstSet uint32_t
     * @param int $descriptorSetCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDescriptorSet> $pDescriptorSets const VkDescriptorSet*
     * @param int $dynamicOffsetCount uint32_t
     * @param \iggyvolz\vulkan\util\IntPointer $pDynamicOffsets const uint32_t*
     */
    public function vkCmdBindDescriptorSets(
        struct\VkCommandBuffer $commandBuffer,
        enum\VkPipelineBindPoint $pipelineBindPoint,
        struct\VkPipelineLayout $layout,
        int $firstSet,
        int $descriptorSetCount,
        util\ObjectPointer $pDescriptorSets,
        int $dynamicOffsetCount,
        util\IntPointer $pDynamicOffsets,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pipelineBindPoint;
        $cValue = $phpValue->value;
        $pipelineBindPointC = $cValue;
        $phpValue = $layout;
        $cValue = $phpValue->cdata;
        $layoutC = $cValue;
        $phpValue = $firstSet;
        $cValue = $phpValue;
        $firstSetC = $cValue;
        $phpValue = $descriptorSetCount;
        $cValue = $phpValue;
        $descriptorSetCountC = $cValue;
        $phpValue = $pDescriptorSets;
        $cValue = $phpValue->cdata;
        $pDescriptorSetsC = $cValue;
        $phpValue = $dynamicOffsetCount;
        $cValue = $phpValue;
        $dynamicOffsetCountC = $cValue;
        $phpValue = $pDynamicOffsets;
        $cValue = $phpValue->cdata;
        $pDynamicOffsetsC = $cValue;
        $cValue = $this->ffi->vkCmdBindDescriptorSets(
            $commandBufferC,
            $pipelineBindPointC,
            $layoutC,
            $firstSetC,
            $descriptorSetCountC,
            $pDescriptorSetsC,
            $dynamicOffsetCountC,
            $pDynamicOffsetsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkBuffer $buffer VkBuffer
     * @param int $offset VkDeviceSize
     * @param \\iggyvolz\vulkan\enum\VkIndexType $indexType VkIndexType
     */
    public function vkCmdBindIndexBuffer(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkBuffer $buffer,
        int $offset,
        enum\VkIndexType $indexType,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $buffer;
        $cValue = $phpValue->cdata;
        $bufferC = $cValue;
        $phpValue = $offset;
        $cValue = $phpValue;
        $offsetC = $cValue;
        $phpValue = $indexType;
        $cValue = $phpValue->value;
        $indexTypeC = $cValue;
        $cValue = $this->ffi->vkCmdBindIndexBuffer(
            $commandBufferC,
            $bufferC,
            $offsetC,
            $indexTypeC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $firstBinding uint32_t
     * @param int $bindingCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBuffer> $pBuffers const VkBuffer*
     * @param \iggyvolz\vulkan\util\Pointer $pOffsets const VkDeviceSize*
     */
    public function vkCmdBindVertexBuffers(
        struct\VkCommandBuffer $commandBuffer,
        int $firstBinding,
        int $bindingCount,
        util\ObjectPointer $pBuffers,
        util\Pointer $pOffsets,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $firstBinding;
        $cValue = $phpValue;
        $firstBindingC = $cValue;
        $phpValue = $bindingCount;
        $cValue = $phpValue;
        $bindingCountC = $cValue;
        $phpValue = $pBuffers;
        $cValue = $phpValue->cdata;
        $pBuffersC = $cValue;
        $phpValue = $pOffsets;
        $cValue = $phpValue->cdata;
        $pOffsetsC = $cValue;
        $cValue = $this->ffi->vkCmdBindVertexBuffers(
            $commandBufferC,
            $firstBindingC,
            $bindingCountC,
            $pBuffersC,
            $pOffsetsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $vertexCount uint32_t
     * @param int $instanceCount uint32_t
     * @param int $firstVertex uint32_t
     * @param int $firstInstance uint32_t
     */
    public function vkCmdDraw(
        struct\VkCommandBuffer $commandBuffer,
        int $vertexCount,
        int $instanceCount,
        int $firstVertex,
        int $firstInstance,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $vertexCount;
        $cValue = $phpValue;
        $vertexCountC = $cValue;
        $phpValue = $instanceCount;
        $cValue = $phpValue;
        $instanceCountC = $cValue;
        $phpValue = $firstVertex;
        $cValue = $phpValue;
        $firstVertexC = $cValue;
        $phpValue = $firstInstance;
        $cValue = $phpValue;
        $firstInstanceC = $cValue;
        $cValue = $this->ffi->vkCmdDraw(
            $commandBufferC,
            $vertexCountC,
            $instanceCountC,
            $firstVertexC,
            $firstInstanceC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $indexCount uint32_t
     * @param int $instanceCount uint32_t
     * @param int $firstIndex uint32_t
     * @param int $vertexOffset int32_t
     * @param int $firstInstance uint32_t
     */
    public function vkCmdDrawIndexed(
        struct\VkCommandBuffer $commandBuffer,
        int $indexCount,
        int $instanceCount,
        int $firstIndex,
        int $vertexOffset,
        int $firstInstance,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $indexCount;
        $cValue = $phpValue;
        $indexCountC = $cValue;
        $phpValue = $instanceCount;
        $cValue = $phpValue;
        $instanceCountC = $cValue;
        $phpValue = $firstIndex;
        $cValue = $phpValue;
        $firstIndexC = $cValue;
        $phpValue = $vertexOffset;
        $cValue = $phpValue;
        $vertexOffsetC = $cValue;
        $phpValue = $firstInstance;
        $cValue = $phpValue;
        $firstInstanceC = $cValue;
        $cValue = $this->ffi->vkCmdDrawIndexed(
            $commandBufferC,
            $indexCountC,
            $instanceCountC,
            $firstIndexC,
            $vertexOffsetC,
            $firstInstanceC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $drawCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMultiDrawInfoEXT> $pVertexInfo const VkMultiDrawInfoEXT*
     * @param int $instanceCount uint32_t
     * @param int $firstInstance uint32_t
     * @param int $stride uint32_t
     */
    public function vkCmdDrawMultiEXT(
        struct\VkCommandBuffer $commandBuffer,
        int $drawCount,
        util\ObjectPointer $pVertexInfo,
        int $instanceCount,
        int $firstInstance,
        int $stride,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $drawCount;
        $cValue = $phpValue;
        $drawCountC = $cValue;
        $phpValue = $pVertexInfo;
        $cValue = $phpValue->cdata;
        $pVertexInfoC = $cValue;
        $phpValue = $instanceCount;
        $cValue = $phpValue;
        $instanceCountC = $cValue;
        $phpValue = $firstInstance;
        $cValue = $phpValue;
        $firstInstanceC = $cValue;
        $phpValue = $stride;
        $cValue = $phpValue;
        $strideC = $cValue;
        $cValue = $this->ffi->vkCmdDrawMultiEXT(
            $commandBufferC,
            $drawCountC,
            $pVertexInfoC,
            $instanceCountC,
            $firstInstanceC,
            $strideC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $drawCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMultiDrawIndexedInfoEXT> $pIndexInfo const VkMultiDrawIndexedInfoEXT*
     * @param int $instanceCount uint32_t
     * @param int $firstInstance uint32_t
     * @param int $stride uint32_t
     * @param \iggyvolz\vulkan\util\Pointer $pVertexOffset const int32_t*
     */
    public function vkCmdDrawMultiIndexedEXT(
        struct\VkCommandBuffer $commandBuffer,
        int $drawCount,
        util\ObjectPointer $pIndexInfo,
        int $instanceCount,
        int $firstInstance,
        int $stride,
        util\Pointer $pVertexOffset,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $drawCount;
        $cValue = $phpValue;
        $drawCountC = $cValue;
        $phpValue = $pIndexInfo;
        $cValue = $phpValue->cdata;
        $pIndexInfoC = $cValue;
        $phpValue = $instanceCount;
        $cValue = $phpValue;
        $instanceCountC = $cValue;
        $phpValue = $firstInstance;
        $cValue = $phpValue;
        $firstInstanceC = $cValue;
        $phpValue = $stride;
        $cValue = $phpValue;
        $strideC = $cValue;
        $phpValue = $pVertexOffset;
        $cValue = $phpValue->cdata;
        $pVertexOffsetC = $cValue;
        $cValue = $this->ffi->vkCmdDrawMultiIndexedEXT(
            $commandBufferC,
            $drawCountC,
            $pIndexInfoC,
            $instanceCountC,
            $firstInstanceC,
            $strideC,
            $pVertexOffsetC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkBuffer $buffer VkBuffer
     * @param int $offset VkDeviceSize
     * @param int $drawCount uint32_t
     * @param int $stride uint32_t
     */
    public function vkCmdDrawIndirect(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkBuffer $buffer,
        int $offset,
        int $drawCount,
        int $stride,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $buffer;
        $cValue = $phpValue->cdata;
        $bufferC = $cValue;
        $phpValue = $offset;
        $cValue = $phpValue;
        $offsetC = $cValue;
        $phpValue = $drawCount;
        $cValue = $phpValue;
        $drawCountC = $cValue;
        $phpValue = $stride;
        $cValue = $phpValue;
        $strideC = $cValue;
        $cValue = $this->ffi->vkCmdDrawIndirect(
            $commandBufferC,
            $bufferC,
            $offsetC,
            $drawCountC,
            $strideC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkBuffer $buffer VkBuffer
     * @param int $offset VkDeviceSize
     * @param int $drawCount uint32_t
     * @param int $stride uint32_t
     */
    public function vkCmdDrawIndexedIndirect(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkBuffer $buffer,
        int $offset,
        int $drawCount,
        int $stride,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $buffer;
        $cValue = $phpValue->cdata;
        $bufferC = $cValue;
        $phpValue = $offset;
        $cValue = $phpValue;
        $offsetC = $cValue;
        $phpValue = $drawCount;
        $cValue = $phpValue;
        $drawCountC = $cValue;
        $phpValue = $stride;
        $cValue = $phpValue;
        $strideC = $cValue;
        $cValue = $this->ffi->vkCmdDrawIndexedIndirect(
            $commandBufferC,
            $bufferC,
            $offsetC,
            $drawCountC,
            $strideC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $groupCountX uint32_t
     * @param int $groupCountY uint32_t
     * @param int $groupCountZ uint32_t
     */
    public function vkCmdDispatch(
        struct\VkCommandBuffer $commandBuffer,
        int $groupCountX,
        int $groupCountY,
        int $groupCountZ,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $groupCountX;
        $cValue = $phpValue;
        $groupCountXC = $cValue;
        $phpValue = $groupCountY;
        $cValue = $phpValue;
        $groupCountYC = $cValue;
        $phpValue = $groupCountZ;
        $cValue = $phpValue;
        $groupCountZC = $cValue;
        $cValue = $this->ffi->vkCmdDispatch(
            $commandBufferC,
            $groupCountXC,
            $groupCountYC,
            $groupCountZC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkBuffer $buffer VkBuffer
     * @param int $offset VkDeviceSize
     */
    public function vkCmdDispatchIndirect(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkBuffer $buffer,
        int $offset,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $buffer;
        $cValue = $phpValue->cdata;
        $bufferC = $cValue;
        $phpValue = $offset;
        $cValue = $phpValue;
        $offsetC = $cValue;
        $cValue = $this->ffi->vkCmdDispatchIndirect(
            $commandBufferC,
            $bufferC,
            $offsetC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     */
    public function vkCmdSubpassShadingHUAWEI(struct\VkCommandBuffer $commandBuffer): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $cValue = $this->ffi->vkCmdSubpassShadingHUAWEI(
            $commandBufferC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $groupCountX uint32_t
     * @param int $groupCountY uint32_t
     * @param int $groupCountZ uint32_t
     */
    public function vkCmdDrawClusterHUAWEI(
        struct\VkCommandBuffer $commandBuffer,
        int $groupCountX,
        int $groupCountY,
        int $groupCountZ,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $groupCountX;
        $cValue = $phpValue;
        $groupCountXC = $cValue;
        $phpValue = $groupCountY;
        $cValue = $phpValue;
        $groupCountYC = $cValue;
        $phpValue = $groupCountZ;
        $cValue = $phpValue;
        $groupCountZC = $cValue;
        $cValue = $this->ffi->vkCmdDrawClusterHUAWEI(
            $commandBufferC,
            $groupCountXC,
            $groupCountYC,
            $groupCountZC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkBuffer $buffer VkBuffer
     * @param int $offset VkDeviceSize
     */
    public function vkCmdDrawClusterIndirectHUAWEI(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkBuffer $buffer,
        int $offset,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $buffer;
        $cValue = $phpValue->cdata;
        $bufferC = $cValue;
        $phpValue = $offset;
        $cValue = $phpValue;
        $offsetC = $cValue;
        $cValue = $this->ffi->vkCmdDrawClusterIndirectHUAWEI(
            $commandBufferC,
            $bufferC,
            $offsetC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint VkPipelineBindPoint
     * @param \\iggyvolz\vulkan\struct\VkPipeline $pipeline VkPipeline
     */
    public function vkCmdUpdatePipelineIndirectBufferNV(
        struct\VkCommandBuffer $commandBuffer,
        enum\VkPipelineBindPoint $pipelineBindPoint,
        struct\VkPipeline $pipeline,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pipelineBindPoint;
        $cValue = $phpValue->value;
        $pipelineBindPointC = $cValue;
        $phpValue = $pipeline;
        $cValue = $phpValue->cdata;
        $pipelineC = $cValue;
        $cValue = $this->ffi->vkCmdUpdatePipelineIndirectBufferNV(
            $commandBufferC,
            $pipelineBindPointC,
            $pipelineC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkBuffer $srcBuffer VkBuffer
     * @param \\iggyvolz\vulkan\struct\VkBuffer $dstBuffer VkBuffer
     * @param int $regionCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBufferCopy> $pRegions const VkBufferCopy*
     */
    public function vkCmdCopyBuffer(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkBuffer $srcBuffer,
        struct\VkBuffer $dstBuffer,
        int $regionCount,
        util\ObjectPointer $pRegions,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $srcBuffer;
        $cValue = $phpValue->cdata;
        $srcBufferC = $cValue;
        $phpValue = $dstBuffer;
        $cValue = $phpValue->cdata;
        $dstBufferC = $cValue;
        $phpValue = $regionCount;
        $cValue = $phpValue;
        $regionCountC = $cValue;
        $phpValue = $pRegions;
        $cValue = $phpValue->cdata;
        $pRegionsC = $cValue;
        $cValue = $this->ffi->vkCmdCopyBuffer(
            $commandBufferC,
            $srcBufferC,
            $dstBufferC,
            $regionCountC,
            $pRegionsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkImage $srcImage VkImage
     * @param \\iggyvolz\vulkan\enum\VkImageLayout $srcImageLayout VkImageLayout
     * @param \\iggyvolz\vulkan\struct\VkImage $dstImage VkImage
     * @param \\iggyvolz\vulkan\enum\VkImageLayout $dstImageLayout VkImageLayout
     * @param int $regionCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageCopy> $pRegions const VkImageCopy*
     */
    public function vkCmdCopyImage(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkImage $srcImage,
        enum\VkImageLayout $srcImageLayout,
        struct\VkImage $dstImage,
        enum\VkImageLayout $dstImageLayout,
        int $regionCount,
        util\ObjectPointer $pRegions,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $srcImage;
        $cValue = $phpValue->cdata;
        $srcImageC = $cValue;
        $phpValue = $srcImageLayout;
        $cValue = $phpValue->value;
        $srcImageLayoutC = $cValue;
        $phpValue = $dstImage;
        $cValue = $phpValue->cdata;
        $dstImageC = $cValue;
        $phpValue = $dstImageLayout;
        $cValue = $phpValue->value;
        $dstImageLayoutC = $cValue;
        $phpValue = $regionCount;
        $cValue = $phpValue;
        $regionCountC = $cValue;
        $phpValue = $pRegions;
        $cValue = $phpValue->cdata;
        $pRegionsC = $cValue;
        $cValue = $this->ffi->vkCmdCopyImage(
            $commandBufferC,
            $srcImageC,
            $srcImageLayoutC,
            $dstImageC,
            $dstImageLayoutC,
            $regionCountC,
            $pRegionsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkImage $srcImage VkImage
     * @param \\iggyvolz\vulkan\enum\VkImageLayout $srcImageLayout VkImageLayout
     * @param \\iggyvolz\vulkan\struct\VkImage $dstImage VkImage
     * @param \\iggyvolz\vulkan\enum\VkImageLayout $dstImageLayout VkImageLayout
     * @param int $regionCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageBlit> $pRegions const VkImageBlit*
     * @param \\iggyvolz\vulkan\enum\VkFilter $filter VkFilter
     */
    public function vkCmdBlitImage(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkImage $srcImage,
        enum\VkImageLayout $srcImageLayout,
        struct\VkImage $dstImage,
        enum\VkImageLayout $dstImageLayout,
        int $regionCount,
        util\ObjectPointer $pRegions,
        enum\VkFilter $filter,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $srcImage;
        $cValue = $phpValue->cdata;
        $srcImageC = $cValue;
        $phpValue = $srcImageLayout;
        $cValue = $phpValue->value;
        $srcImageLayoutC = $cValue;
        $phpValue = $dstImage;
        $cValue = $phpValue->cdata;
        $dstImageC = $cValue;
        $phpValue = $dstImageLayout;
        $cValue = $phpValue->value;
        $dstImageLayoutC = $cValue;
        $phpValue = $regionCount;
        $cValue = $phpValue;
        $regionCountC = $cValue;
        $phpValue = $pRegions;
        $cValue = $phpValue->cdata;
        $pRegionsC = $cValue;
        $phpValue = $filter;
        $cValue = $phpValue->value;
        $filterC = $cValue;
        $cValue = $this->ffi->vkCmdBlitImage(
            $commandBufferC,
            $srcImageC,
            $srcImageLayoutC,
            $dstImageC,
            $dstImageLayoutC,
            $regionCountC,
            $pRegionsC,
            $filterC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkBuffer $srcBuffer VkBuffer
     * @param \\iggyvolz\vulkan\struct\VkImage $dstImage VkImage
     * @param \\iggyvolz\vulkan\enum\VkImageLayout $dstImageLayout VkImageLayout
     * @param int $regionCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBufferImageCopy> $pRegions const VkBufferImageCopy*
     */
    public function vkCmdCopyBufferToImage(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkBuffer $srcBuffer,
        struct\VkImage $dstImage,
        enum\VkImageLayout $dstImageLayout,
        int $regionCount,
        util\ObjectPointer $pRegions,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $srcBuffer;
        $cValue = $phpValue->cdata;
        $srcBufferC = $cValue;
        $phpValue = $dstImage;
        $cValue = $phpValue->cdata;
        $dstImageC = $cValue;
        $phpValue = $dstImageLayout;
        $cValue = $phpValue->value;
        $dstImageLayoutC = $cValue;
        $phpValue = $regionCount;
        $cValue = $phpValue;
        $regionCountC = $cValue;
        $phpValue = $pRegions;
        $cValue = $phpValue->cdata;
        $pRegionsC = $cValue;
        $cValue = $this->ffi->vkCmdCopyBufferToImage(
            $commandBufferC,
            $srcBufferC,
            $dstImageC,
            $dstImageLayoutC,
            $regionCountC,
            $pRegionsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkImage $srcImage VkImage
     * @param \\iggyvolz\vulkan\enum\VkImageLayout $srcImageLayout VkImageLayout
     * @param \\iggyvolz\vulkan\struct\VkBuffer $dstBuffer VkBuffer
     * @param int $regionCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBufferImageCopy> $pRegions const VkBufferImageCopy*
     */
    public function vkCmdCopyImageToBuffer(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkImage $srcImage,
        enum\VkImageLayout $srcImageLayout,
        struct\VkBuffer $dstBuffer,
        int $regionCount,
        util\ObjectPointer $pRegions,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $srcImage;
        $cValue = $phpValue->cdata;
        $srcImageC = $cValue;
        $phpValue = $srcImageLayout;
        $cValue = $phpValue->value;
        $srcImageLayoutC = $cValue;
        $phpValue = $dstBuffer;
        $cValue = $phpValue->cdata;
        $dstBufferC = $cValue;
        $phpValue = $regionCount;
        $cValue = $phpValue;
        $regionCountC = $cValue;
        $phpValue = $pRegions;
        $cValue = $phpValue->cdata;
        $pRegionsC = $cValue;
        $cValue = $this->ffi->vkCmdCopyImageToBuffer(
            $commandBufferC,
            $srcImageC,
            $srcImageLayoutC,
            $dstBufferC,
            $regionCountC,
            $pRegionsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $copyBufferAddress VkDeviceAddress
     * @param int $copyCount uint32_t
     * @param int $stride uint32_t
     */
    public function vkCmdCopyMemoryIndirectNV(
        struct\VkCommandBuffer $commandBuffer,
        int $copyBufferAddress,
        int $copyCount,
        int $stride,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $copyBufferAddress;
        $cValue = $phpValue;
        $copyBufferAddressC = $cValue;
        $phpValue = $copyCount;
        $cValue = $phpValue;
        $copyCountC = $cValue;
        $phpValue = $stride;
        $cValue = $phpValue;
        $strideC = $cValue;
        $cValue = $this->ffi->vkCmdCopyMemoryIndirectNV(
            $commandBufferC,
            $copyBufferAddressC,
            $copyCountC,
            $strideC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $copyBufferAddress VkDeviceAddress
     * @param int $copyCount uint32_t
     * @param int $stride uint32_t
     * @param \\iggyvolz\vulkan\struct\VkImage $dstImage VkImage
     * @param \\iggyvolz\vulkan\enum\VkImageLayout $dstImageLayout VkImageLayout
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageSubresourceLayers> $pImageSubresources const VkImageSubresourceLayers*
     */
    public function vkCmdCopyMemoryToImageIndirectNV(
        struct\VkCommandBuffer $commandBuffer,
        int $copyBufferAddress,
        int $copyCount,
        int $stride,
        struct\VkImage $dstImage,
        enum\VkImageLayout $dstImageLayout,
        util\ObjectPointer $pImageSubresources,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $copyBufferAddress;
        $cValue = $phpValue;
        $copyBufferAddressC = $cValue;
        $phpValue = $copyCount;
        $cValue = $phpValue;
        $copyCountC = $cValue;
        $phpValue = $stride;
        $cValue = $phpValue;
        $strideC = $cValue;
        $phpValue = $dstImage;
        $cValue = $phpValue->cdata;
        $dstImageC = $cValue;
        $phpValue = $dstImageLayout;
        $cValue = $phpValue->value;
        $dstImageLayoutC = $cValue;
        $phpValue = $pImageSubresources;
        $cValue = $phpValue->cdata;
        $pImageSubresourcesC = $cValue;
        $cValue = $this->ffi->vkCmdCopyMemoryToImageIndirectNV(
            $commandBufferC,
            $copyBufferAddressC,
            $copyCountC,
            $strideC,
            $dstImageC,
            $dstImageLayoutC,
            $pImageSubresourcesC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkBuffer $dstBuffer VkBuffer
     * @param int $dstOffset VkDeviceSize
     * @param int $dataSize VkDeviceSize
     * @param \iggyvolz\vulkan\util\Pointer $pData const void*
     */
    public function vkCmdUpdateBuffer(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkBuffer $dstBuffer,
        int $dstOffset,
        int $dataSize,
        util\Pointer $pData,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $dstBuffer;
        $cValue = $phpValue->cdata;
        $dstBufferC = $cValue;
        $phpValue = $dstOffset;
        $cValue = $phpValue;
        $dstOffsetC = $cValue;
        $phpValue = $dataSize;
        $cValue = $phpValue;
        $dataSizeC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $cValue = $this->ffi->vkCmdUpdateBuffer(
            $commandBufferC,
            $dstBufferC,
            $dstOffsetC,
            $dataSizeC,
            $pDataC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkBuffer $dstBuffer VkBuffer
     * @param int $dstOffset VkDeviceSize
     * @param int $size VkDeviceSize
     * @param int $data uint32_t
     */
    public function vkCmdFillBuffer(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkBuffer $dstBuffer,
        int $dstOffset,
        int $size,
        int $data,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $dstBuffer;
        $cValue = $phpValue->cdata;
        $dstBufferC = $cValue;
        $phpValue = $dstOffset;
        $cValue = $phpValue;
        $dstOffsetC = $cValue;
        $phpValue = $size;
        $cValue = $phpValue;
        $sizeC = $cValue;
        $phpValue = $data;
        $cValue = $phpValue;
        $dataC = $cValue;
        $cValue = $this->ffi->vkCmdFillBuffer(
            $commandBufferC,
            $dstBufferC,
            $dstOffsetC,
            $sizeC,
            $dataC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkImage $image VkImage
     * @param \\iggyvolz\vulkan\enum\VkImageLayout $imageLayout VkImageLayout
     * @param \iggyvolz\vulkan\util\Pointer $pColor const VkClearColorValue*
     * @param int $rangeCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageSubresourceRange> $pRanges const VkImageSubresourceRange*
     */
    public function vkCmdClearColorImage(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkImage $image,
        enum\VkImageLayout $imageLayout,
        util\Pointer $pColor,
        int $rangeCount,
        util\ObjectPointer $pRanges,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $image;
        $cValue = $phpValue->cdata;
        $imageC = $cValue;
        $phpValue = $imageLayout;
        $cValue = $phpValue->value;
        $imageLayoutC = $cValue;
        $phpValue = $pColor;
        $cValue = $phpValue->cdata;
        $pColorC = $cValue;
        $phpValue = $rangeCount;
        $cValue = $phpValue;
        $rangeCountC = $cValue;
        $phpValue = $pRanges;
        $cValue = $phpValue->cdata;
        $pRangesC = $cValue;
        $cValue = $this->ffi->vkCmdClearColorImage(
            $commandBufferC,
            $imageC,
            $imageLayoutC,
            $pColorC,
            $rangeCountC,
            $pRangesC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkImage $image VkImage
     * @param \\iggyvolz\vulkan\enum\VkImageLayout $imageLayout VkImageLayout
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkClearDepthStencilValue> $pDepthStencil const VkClearDepthStencilValue*
     * @param int $rangeCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageSubresourceRange> $pRanges const VkImageSubresourceRange*
     */
    public function vkCmdClearDepthStencilImage(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkImage $image,
        enum\VkImageLayout $imageLayout,
        util\ObjectPointer $pDepthStencil,
        int $rangeCount,
        util\ObjectPointer $pRanges,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $image;
        $cValue = $phpValue->cdata;
        $imageC = $cValue;
        $phpValue = $imageLayout;
        $cValue = $phpValue->value;
        $imageLayoutC = $cValue;
        $phpValue = $pDepthStencil;
        $cValue = $phpValue->cdata;
        $pDepthStencilC = $cValue;
        $phpValue = $rangeCount;
        $cValue = $phpValue;
        $rangeCountC = $cValue;
        $phpValue = $pRanges;
        $cValue = $phpValue->cdata;
        $pRangesC = $cValue;
        $cValue = $this->ffi->vkCmdClearDepthStencilImage(
            $commandBufferC,
            $imageC,
            $imageLayoutC,
            $pDepthStencilC,
            $rangeCountC,
            $pRangesC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $attachmentCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkClearAttachment> $pAttachments const VkClearAttachment*
     * @param int $rectCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkClearRect> $pRects const VkClearRect*
     */
    public function vkCmdClearAttachments(
        struct\VkCommandBuffer $commandBuffer,
        int $attachmentCount,
        util\ObjectPointer $pAttachments,
        int $rectCount,
        util\ObjectPointer $pRects,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $attachmentCount;
        $cValue = $phpValue;
        $attachmentCountC = $cValue;
        $phpValue = $pAttachments;
        $cValue = $phpValue->cdata;
        $pAttachmentsC = $cValue;
        $phpValue = $rectCount;
        $cValue = $phpValue;
        $rectCountC = $cValue;
        $phpValue = $pRects;
        $cValue = $phpValue->cdata;
        $pRectsC = $cValue;
        $cValue = $this->ffi->vkCmdClearAttachments(
            $commandBufferC,
            $attachmentCountC,
            $pAttachmentsC,
            $rectCountC,
            $pRectsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkImage $srcImage VkImage
     * @param \\iggyvolz\vulkan\enum\VkImageLayout $srcImageLayout VkImageLayout
     * @param \\iggyvolz\vulkan\struct\VkImage $dstImage VkImage
     * @param \\iggyvolz\vulkan\enum\VkImageLayout $dstImageLayout VkImageLayout
     * @param int $regionCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageResolve> $pRegions const VkImageResolve*
     */
    public function vkCmdResolveImage(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkImage $srcImage,
        enum\VkImageLayout $srcImageLayout,
        struct\VkImage $dstImage,
        enum\VkImageLayout $dstImageLayout,
        int $regionCount,
        util\ObjectPointer $pRegions,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $srcImage;
        $cValue = $phpValue->cdata;
        $srcImageC = $cValue;
        $phpValue = $srcImageLayout;
        $cValue = $phpValue->value;
        $srcImageLayoutC = $cValue;
        $phpValue = $dstImage;
        $cValue = $phpValue->cdata;
        $dstImageC = $cValue;
        $phpValue = $dstImageLayout;
        $cValue = $phpValue->value;
        $dstImageLayoutC = $cValue;
        $phpValue = $regionCount;
        $cValue = $phpValue;
        $regionCountC = $cValue;
        $phpValue = $pRegions;
        $cValue = $phpValue->cdata;
        $pRegionsC = $cValue;
        $cValue = $this->ffi->vkCmdResolveImage(
            $commandBufferC,
            $srcImageC,
            $srcImageLayoutC,
            $dstImageC,
            $dstImageLayoutC,
            $regionCountC,
            $pRegionsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkEvent $event VkEvent
     * @param list<iggyvolz\vulkan\enum\VkPipelineStageFlagBits> $stageMask VkPipelineStageFlags
     */
    public function vkCmdSetEvent(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkEvent $event,
        array $stageMask,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $event;
        $cValue = $phpValue->cdata;
        $eventC = $cValue;
        $phpValue = $stageMask;
        $cValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits::toInt(...$phpValue);
        $stageMaskC = $cValue;
        $cValue = $this->ffi->vkCmdSetEvent(
            $commandBufferC,
            $eventC,
            $stageMaskC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkEvent $event VkEvent
     * @param list<iggyvolz\vulkan\enum\VkPipelineStageFlagBits> $stageMask VkPipelineStageFlags
     */
    public function vkCmdResetEvent(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkEvent $event,
        array $stageMask,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $event;
        $cValue = $phpValue->cdata;
        $eventC = $cValue;
        $phpValue = $stageMask;
        $cValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits::toInt(...$phpValue);
        $stageMaskC = $cValue;
        $cValue = $this->ffi->vkCmdResetEvent(
            $commandBufferC,
            $eventC,
            $stageMaskC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $eventCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkEvent> $pEvents const VkEvent*
     * @param list<iggyvolz\vulkan\enum\VkPipelineStageFlagBits> $srcStageMask VkPipelineStageFlags
     * @param list<iggyvolz\vulkan\enum\VkPipelineStageFlagBits> $dstStageMask VkPipelineStageFlags
     * @param int $memoryBarrierCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryBarrier> $pMemoryBarriers const VkMemoryBarrier*
     * @param int $bufferMemoryBarrierCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBufferMemoryBarrier> $pBufferMemoryBarriers const VkBufferMemoryBarrier*
     * @param int $imageMemoryBarrierCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageMemoryBarrier> $pImageMemoryBarriers const VkImageMemoryBarrier*
     */
    public function vkCmdWaitEvents(
        struct\VkCommandBuffer $commandBuffer,
        int $eventCount,
        util\ObjectPointer $pEvents,
        array $srcStageMask,
        array $dstStageMask,
        int $memoryBarrierCount,
        util\ObjectPointer $pMemoryBarriers,
        int $bufferMemoryBarrierCount,
        util\ObjectPointer $pBufferMemoryBarriers,
        int $imageMemoryBarrierCount,
        util\ObjectPointer $pImageMemoryBarriers,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $eventCount;
        $cValue = $phpValue;
        $eventCountC = $cValue;
        $phpValue = $pEvents;
        $cValue = $phpValue->cdata;
        $pEventsC = $cValue;
        $phpValue = $srcStageMask;
        $cValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits::toInt(...$phpValue);
        $srcStageMaskC = $cValue;
        $phpValue = $dstStageMask;
        $cValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits::toInt(...$phpValue);
        $dstStageMaskC = $cValue;
        $phpValue = $memoryBarrierCount;
        $cValue = $phpValue;
        $memoryBarrierCountC = $cValue;
        $phpValue = $pMemoryBarriers;
        $cValue = $phpValue->cdata;
        $pMemoryBarriersC = $cValue;
        $phpValue = $bufferMemoryBarrierCount;
        $cValue = $phpValue;
        $bufferMemoryBarrierCountC = $cValue;
        $phpValue = $pBufferMemoryBarriers;
        $cValue = $phpValue->cdata;
        $pBufferMemoryBarriersC = $cValue;
        $phpValue = $imageMemoryBarrierCount;
        $cValue = $phpValue;
        $imageMemoryBarrierCountC = $cValue;
        $phpValue = $pImageMemoryBarriers;
        $cValue = $phpValue->cdata;
        $pImageMemoryBarriersC = $cValue;
        $cValue = $this->ffi->vkCmdWaitEvents(
            $commandBufferC,
            $eventCountC,
            $pEventsC,
            $srcStageMaskC,
            $dstStageMaskC,
            $memoryBarrierCountC,
            $pMemoryBarriersC,
            $bufferMemoryBarrierCountC,
            $pBufferMemoryBarriersC,
            $imageMemoryBarrierCountC,
            $pImageMemoryBarriersC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param list<iggyvolz\vulkan\enum\VkPipelineStageFlagBits> $srcStageMask VkPipelineStageFlags
     * @param list<iggyvolz\vulkan\enum\VkPipelineStageFlagBits> $dstStageMask VkPipelineStageFlags
     * @param list<iggyvolz\vulkan\enum\VkDependencyFlagBits> $dependencyFlags VkDependencyFlags
     * @param int $memoryBarrierCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryBarrier> $pMemoryBarriers const VkMemoryBarrier*
     * @param int $bufferMemoryBarrierCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBufferMemoryBarrier> $pBufferMemoryBarriers const VkBufferMemoryBarrier*
     * @param int $imageMemoryBarrierCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageMemoryBarrier> $pImageMemoryBarriers const VkImageMemoryBarrier*
     */
    public function vkCmdPipelineBarrier(
        struct\VkCommandBuffer $commandBuffer,
        array $srcStageMask,
        array $dstStageMask,
        array $dependencyFlags,
        int $memoryBarrierCount,
        util\ObjectPointer $pMemoryBarriers,
        int $bufferMemoryBarrierCount,
        util\ObjectPointer $pBufferMemoryBarriers,
        int $imageMemoryBarrierCount,
        util\ObjectPointer $pImageMemoryBarriers,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $srcStageMask;
        $cValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits::toInt(...$phpValue);
        $srcStageMaskC = $cValue;
        $phpValue = $dstStageMask;
        $cValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits::toInt(...$phpValue);
        $dstStageMaskC = $cValue;
        $phpValue = $dependencyFlags;
        $cValue = \iggyvolz\vulkan\enum\VkDependencyFlagBits::toInt(...$phpValue);
        $dependencyFlagsC = $cValue;
        $phpValue = $memoryBarrierCount;
        $cValue = $phpValue;
        $memoryBarrierCountC = $cValue;
        $phpValue = $pMemoryBarriers;
        $cValue = $phpValue->cdata;
        $pMemoryBarriersC = $cValue;
        $phpValue = $bufferMemoryBarrierCount;
        $cValue = $phpValue;
        $bufferMemoryBarrierCountC = $cValue;
        $phpValue = $pBufferMemoryBarriers;
        $cValue = $phpValue->cdata;
        $pBufferMemoryBarriersC = $cValue;
        $phpValue = $imageMemoryBarrierCount;
        $cValue = $phpValue;
        $imageMemoryBarrierCountC = $cValue;
        $phpValue = $pImageMemoryBarriers;
        $cValue = $phpValue->cdata;
        $pImageMemoryBarriersC = $cValue;
        $cValue = $this->ffi->vkCmdPipelineBarrier(
            $commandBufferC,
            $srcStageMaskC,
            $dstStageMaskC,
            $dependencyFlagsC,
            $memoryBarrierCountC,
            $pMemoryBarriersC,
            $bufferMemoryBarrierCountC,
            $pBufferMemoryBarriersC,
            $imageMemoryBarrierCountC,
            $pImageMemoryBarriersC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkQueryPool $queryPool VkQueryPool
     * @param int $query uint32_t
     * @param list<iggyvolz\vulkan\enum\VkQueryControlFlagBits> $flags VkQueryControlFlags
     */
    public function vkCmdBeginQuery(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkQueryPool $queryPool,
        int $query,
        array $flags,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $queryPool;
        $cValue = $phpValue->cdata;
        $queryPoolC = $cValue;
        $phpValue = $query;
        $cValue = $phpValue;
        $queryC = $cValue;
        $phpValue = $flags;
        $cValue = \iggyvolz\vulkan\enum\VkQueryControlFlagBits::toInt(...$phpValue);
        $flagsC = $cValue;
        $cValue = $this->ffi->vkCmdBeginQuery(
            $commandBufferC,
            $queryPoolC,
            $queryC,
            $flagsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkQueryPool $queryPool VkQueryPool
     * @param int $query uint32_t
     */
    public function vkCmdEndQuery(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkQueryPool $queryPool,
        int $query,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $queryPool;
        $cValue = $phpValue->cdata;
        $queryPoolC = $cValue;
        $phpValue = $query;
        $cValue = $phpValue;
        $queryC = $cValue;
        $cValue = $this->ffi->vkCmdEndQuery(
            $commandBufferC,
            $queryPoolC,
            $queryC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkConditionalRenderingBeginInfoEXT> $pConditionalRenderingBegin const VkConditionalRenderingBeginInfoEXT*
     */
    public function vkCmdBeginConditionalRenderingEXT(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pConditionalRenderingBegin,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pConditionalRenderingBegin;
        $cValue = $phpValue->cdata;
        $pConditionalRenderingBeginC = $cValue;
        $cValue = $this->ffi->vkCmdBeginConditionalRenderingEXT(
            $commandBufferC,
            $pConditionalRenderingBeginC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     */
    public function vkCmdEndConditionalRenderingEXT(struct\VkCommandBuffer $commandBuffer): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $cValue = $this->ffi->vkCmdEndConditionalRenderingEXT(
            $commandBufferC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkQueryPool $queryPool VkQueryPool
     * @param int $firstQuery uint32_t
     * @param int $queryCount uint32_t
     */
    public function vkCmdResetQueryPool(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkQueryPool $queryPool,
        int $firstQuery,
        int $queryCount,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $queryPool;
        $cValue = $phpValue->cdata;
        $queryPoolC = $cValue;
        $phpValue = $firstQuery;
        $cValue = $phpValue;
        $firstQueryC = $cValue;
        $phpValue = $queryCount;
        $cValue = $phpValue;
        $queryCountC = $cValue;
        $cValue = $this->ffi->vkCmdResetQueryPool(
            $commandBufferC,
            $queryPoolC,
            $firstQueryC,
            $queryCountC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\enum\VkPipelineStageFlagBits $pipelineStage VkPipelineStageFlagBits
     * @param \\iggyvolz\vulkan\struct\VkQueryPool $queryPool VkQueryPool
     * @param int $query uint32_t
     */
    public function vkCmdWriteTimestamp(
        struct\VkCommandBuffer $commandBuffer,
        enum\VkPipelineStageFlagBits $pipelineStage,
        struct\VkQueryPool $queryPool,
        int $query,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pipelineStage;
        $cValue = $phpValue->value;
        $pipelineStageC = $cValue;
        $phpValue = $queryPool;
        $cValue = $phpValue->cdata;
        $queryPoolC = $cValue;
        $phpValue = $query;
        $cValue = $phpValue;
        $queryC = $cValue;
        $cValue = $this->ffi->vkCmdWriteTimestamp(
            $commandBufferC,
            $pipelineStageC,
            $queryPoolC,
            $queryC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkQueryPool $queryPool VkQueryPool
     * @param int $firstQuery uint32_t
     * @param int $queryCount uint32_t
     * @param \\iggyvolz\vulkan\struct\VkBuffer $dstBuffer VkBuffer
     * @param int $dstOffset VkDeviceSize
     * @param int $stride VkDeviceSize
     * @param list<iggyvolz\vulkan\enum\VkQueryResultFlagBits> $flags VkQueryResultFlags
     */
    public function vkCmdCopyQueryPoolResults(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkQueryPool $queryPool,
        int $firstQuery,
        int $queryCount,
        struct\VkBuffer $dstBuffer,
        int $dstOffset,
        int $stride,
        array $flags,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $queryPool;
        $cValue = $phpValue->cdata;
        $queryPoolC = $cValue;
        $phpValue = $firstQuery;
        $cValue = $phpValue;
        $firstQueryC = $cValue;
        $phpValue = $queryCount;
        $cValue = $phpValue;
        $queryCountC = $cValue;
        $phpValue = $dstBuffer;
        $cValue = $phpValue->cdata;
        $dstBufferC = $cValue;
        $phpValue = $dstOffset;
        $cValue = $phpValue;
        $dstOffsetC = $cValue;
        $phpValue = $stride;
        $cValue = $phpValue;
        $strideC = $cValue;
        $phpValue = $flags;
        $cValue = \iggyvolz\vulkan\enum\VkQueryResultFlagBits::toInt(...$phpValue);
        $flagsC = $cValue;
        $cValue = $this->ffi->vkCmdCopyQueryPoolResults(
            $commandBufferC,
            $queryPoolC,
            $firstQueryC,
            $queryCountC,
            $dstBufferC,
            $dstOffsetC,
            $strideC,
            $flagsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkPipelineLayout $layout VkPipelineLayout
     * @param list<iggyvolz\vulkan\enum\VkShaderStageFlagBits> $stageFlags VkShaderStageFlags
     * @param int $offset uint32_t
     * @param int $size uint32_t
     * @param \iggyvolz\vulkan\util\Pointer $pValues const void*
     */
    public function vkCmdPushConstants(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkPipelineLayout $layout,
        array $stageFlags,
        int $offset,
        int $size,
        util\Pointer $pValues,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $layout;
        $cValue = $phpValue->cdata;
        $layoutC = $cValue;
        $phpValue = $stageFlags;
        $cValue = \iggyvolz\vulkan\enum\VkShaderStageFlagBits::toInt(...$phpValue);
        $stageFlagsC = $cValue;
        $phpValue = $offset;
        $cValue = $phpValue;
        $offsetC = $cValue;
        $phpValue = $size;
        $cValue = $phpValue;
        $sizeC = $cValue;
        $phpValue = $pValues;
        $cValue = $phpValue->cdata;
        $pValuesC = $cValue;
        $cValue = $this->ffi->vkCmdPushConstants(
            $commandBufferC,
            $layoutC,
            $stageFlagsC,
            $offsetC,
            $sizeC,
            $pValuesC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRenderPassBeginInfo> $pRenderPassBegin const VkRenderPassBeginInfo*
     * @param \\iggyvolz\vulkan\enum\VkSubpassContents $contents VkSubpassContents
     */
    public function vkCmdBeginRenderPass(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pRenderPassBegin,
        enum\VkSubpassContents $contents,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pRenderPassBegin;
        $cValue = $phpValue->cdata;
        $pRenderPassBeginC = $cValue;
        $phpValue = $contents;
        $cValue = $phpValue->value;
        $contentsC = $cValue;
        $cValue = $this->ffi->vkCmdBeginRenderPass(
            $commandBufferC,
            $pRenderPassBeginC,
            $contentsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\enum\VkSubpassContents $contents VkSubpassContents
     */
    public function vkCmdNextSubpass(struct\VkCommandBuffer $commandBuffer, enum\VkSubpassContents $contents): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $contents;
        $cValue = $phpValue->value;
        $contentsC = $cValue;
        $cValue = $this->ffi->vkCmdNextSubpass(
            $commandBufferC,
            $contentsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     */
    public function vkCmdEndRenderPass(struct\VkCommandBuffer $commandBuffer): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $cValue = $this->ffi->vkCmdEndRenderPass(
            $commandBufferC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $commandBufferCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCommandBuffer> $pCommandBuffers const VkCommandBuffer*
     */
    public function vkCmdExecuteCommands(
        struct\VkCommandBuffer $commandBuffer,
        int $commandBufferCount,
        util\ObjectPointer $pCommandBuffers,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $commandBufferCount;
        $cValue = $phpValue;
        $commandBufferCountC = $cValue;
        $phpValue = $pCommandBuffers;
        $cValue = $phpValue->cdata;
        $pCommandBuffersC = $cValue;
        $cValue = $this->ffi->vkCmdExecuteCommands(
            $commandBufferC,
            $commandBufferCountC,
            $pCommandBuffersC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkInstance $instance VkInstance
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAndroidSurfaceCreateInfoKHR> $pCreateInfo const VkAndroidSurfaceCreateInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceKHR> $pSurface VkSurfaceKHR*
     * returns VkResult
     */
    public function vkCreateAndroidSurfaceKHR(
        struct\VkInstance $instance,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pSurface,
    ): enum\VkResult
    {
        $phpValue = $instance;
        $cValue = $phpValue->cdata;
        $instanceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSurface;
        $cValue = $phpValue->cdata;
        $pSurfaceC = $cValue;
        $cValue = $this->ffi->vkCreateAndroidSurfaceKHR(
            $instanceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pSurfaceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\IntPointer $pPropertyCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplayPropertiesKHR> $pProperties VkDisplayPropertiesKHR*
     * returns VkResult
     */
    public function vkGetPhysicalDeviceDisplayPropertiesKHR(
        struct\VkPhysicalDevice $physicalDevice,
        util\IntPointer $pPropertyCount,
        util\ObjectPointer $pProperties,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pPropertyCount;
        $cValue = $phpValue->cdata;
        $pPropertyCountC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceDisplayPropertiesKHR(
            $physicalDeviceC,
            $pPropertyCountC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\IntPointer $pPropertyCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplayPlanePropertiesKHR> $pProperties VkDisplayPlanePropertiesKHR*
     * returns VkResult
     */
    public function vkGetPhysicalDeviceDisplayPlanePropertiesKHR(
        struct\VkPhysicalDevice $physicalDevice,
        util\IntPointer $pPropertyCount,
        util\ObjectPointer $pProperties,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pPropertyCount;
        $cValue = $phpValue->cdata;
        $pPropertyCountC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceDisplayPlanePropertiesKHR(
            $physicalDeviceC,
            $pPropertyCountC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param int $planeIndex uint32_t
     * @param \iggyvolz\vulkan\util\IntPointer $pDisplayCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplayKHR> $pDisplays VkDisplayKHR*
     * returns VkResult
     */
    public function vkGetDisplayPlaneSupportedDisplaysKHR(
        struct\VkPhysicalDevice $physicalDevice,
        int $planeIndex,
        util\IntPointer $pDisplayCount,
        util\ObjectPointer $pDisplays,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $planeIndex;
        $cValue = $phpValue;
        $planeIndexC = $cValue;
        $phpValue = $pDisplayCount;
        $cValue = $phpValue->cdata;
        $pDisplayCountC = $cValue;
        $phpValue = $pDisplays;
        $cValue = $phpValue->cdata;
        $pDisplaysC = $cValue;
        $cValue = $this->ffi->vkGetDisplayPlaneSupportedDisplaysKHR(
            $physicalDeviceC,
            $planeIndexC,
            $pDisplayCountC,
            $pDisplaysC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \\iggyvolz\vulkan\struct\VkDisplayKHR $display VkDisplayKHR
     * @param \iggyvolz\vulkan\util\IntPointer $pPropertyCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplayModePropertiesKHR> $pProperties VkDisplayModePropertiesKHR*
     * returns VkResult
     */
    public function vkGetDisplayModePropertiesKHR(
        struct\VkPhysicalDevice $physicalDevice,
        struct\VkDisplayKHR $display,
        util\IntPointer $pPropertyCount,
        util\ObjectPointer $pProperties,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $display;
        $cValue = $phpValue->cdata;
        $displayC = $cValue;
        $phpValue = $pPropertyCount;
        $cValue = $phpValue->cdata;
        $pPropertyCountC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetDisplayModePropertiesKHR(
            $physicalDeviceC,
            $displayC,
            $pPropertyCountC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \\iggyvolz\vulkan\struct\VkDisplayKHR $display VkDisplayKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplayModeCreateInfoKHR> $pCreateInfo const VkDisplayModeCreateInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplayModeKHR> $pMode VkDisplayModeKHR*
     * returns VkResult
     */
    public function vkCreateDisplayModeKHR(
        struct\VkPhysicalDevice $physicalDevice,
        struct\VkDisplayKHR $display,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pMode,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
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
        $cValue = $this->ffi->vkCreateDisplayModeKHR(
            $physicalDeviceC,
            $displayC,
            $pCreateInfoC,
            $pAllocatorC,
            $pModeC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \\iggyvolz\vulkan\struct\VkDisplayModeKHR $mode VkDisplayModeKHR
     * @param int $planeIndex uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplayPlaneCapabilitiesKHR> $pCapabilities VkDisplayPlaneCapabilitiesKHR*
     * returns VkResult
     */
    public function vkGetDisplayPlaneCapabilitiesKHR(
        struct\VkPhysicalDevice $physicalDevice,
        struct\VkDisplayModeKHR $mode,
        int $planeIndex,
        util\ObjectPointer $pCapabilities,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $mode;
        $cValue = $phpValue->cdata;
        $modeC = $cValue;
        $phpValue = $planeIndex;
        $cValue = $phpValue;
        $planeIndexC = $cValue;
        $phpValue = $pCapabilities;
        $cValue = $phpValue->cdata;
        $pCapabilitiesC = $cValue;
        $cValue = $this->ffi->vkGetDisplayPlaneCapabilitiesKHR(
            $physicalDeviceC,
            $modeC,
            $planeIndexC,
            $pCapabilitiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkInstance $instance VkInstance
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplaySurfaceCreateInfoKHR> $pCreateInfo const VkDisplaySurfaceCreateInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceKHR> $pSurface VkSurfaceKHR*
     * returns VkResult
     */
    public function vkCreateDisplayPlaneSurfaceKHR(
        struct\VkInstance $instance,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pSurface,
    ): enum\VkResult
    {
        $phpValue = $instance;
        $cValue = $phpValue->cdata;
        $instanceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSurface;
        $cValue = $phpValue->cdata;
        $pSurfaceC = $cValue;
        $cValue = $this->ffi->vkCreateDisplayPlaneSurfaceKHR(
            $instanceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pSurfaceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param int $swapchainCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSwapchainCreateInfoKHR> $pCreateInfos const VkSwapchainCreateInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSwapchainKHR> $pSwapchains VkSwapchainKHR*
     * returns VkResult
     */
    public function vkCreateSharedSwapchainsKHR(
        struct\VkDevice $device,
        int $swapchainCount,
        util\ObjectPointer $pCreateInfos,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pSwapchains,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $swapchainCount;
        $cValue = $phpValue;
        $swapchainCountC = $cValue;
        $phpValue = $pCreateInfos;
        $cValue = $phpValue->cdata;
        $pCreateInfosC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSwapchains;
        $cValue = $phpValue->cdata;
        $pSwapchainsC = $cValue;
        $cValue = $this->ffi->vkCreateSharedSwapchainsKHR(
            $deviceC,
            $swapchainCountC,
            $pCreateInfosC,
            $pAllocatorC,
            $pSwapchainsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkInstance $instance VkInstance
     * @param \\iggyvolz\vulkan\struct\VkSurfaceKHR $surface VkSurfaceKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroySurfaceKHR(
        struct\VkInstance $instance,
        struct\VkSurfaceKHR $surface,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $instance;
        $cValue = $phpValue->cdata;
        $instanceC = $cValue;
        $phpValue = $surface;
        $cValue = $phpValue->cdata;
        $surfaceC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroySurfaceKHR(
            $instanceC,
            $surfaceC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param int $queueFamilyIndex uint32_t
     * @param \\iggyvolz\vulkan\struct\VkSurfaceKHR $surface VkSurfaceKHR
     * @param \iggyvolz\vulkan\util\Pointer $pSupported VkBool32*
     * returns VkResult
     */
    public function vkGetPhysicalDeviceSurfaceSupportKHR(
        struct\VkPhysicalDevice $physicalDevice,
        int $queueFamilyIndex,
        struct\VkSurfaceKHR $surface,
        util\Pointer $pSupported,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $queueFamilyIndex;
        $cValue = $phpValue;
        $queueFamilyIndexC = $cValue;
        $phpValue = $surface;
        $cValue = $phpValue->cdata;
        $surfaceC = $cValue;
        $phpValue = $pSupported;
        $cValue = $phpValue->cdata;
        $pSupportedC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceSurfaceSupportKHR(
            $physicalDeviceC,
            $queueFamilyIndexC,
            $surfaceC,
            $pSupportedC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \\iggyvolz\vulkan\struct\VkSurfaceKHR $surface VkSurfaceKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceCapabilitiesKHR> $pSurfaceCapabilities VkSurfaceCapabilitiesKHR*
     * returns VkResult
     */
    public function vkGetPhysicalDeviceSurfaceCapabilitiesKHR(
        struct\VkPhysicalDevice $physicalDevice,
        struct\VkSurfaceKHR $surface,
        util\ObjectPointer $pSurfaceCapabilities,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $surface;
        $cValue = $phpValue->cdata;
        $surfaceC = $cValue;
        $phpValue = $pSurfaceCapabilities;
        $cValue = $phpValue->cdata;
        $pSurfaceCapabilitiesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceSurfaceCapabilitiesKHR(
            $physicalDeviceC,
            $surfaceC,
            $pSurfaceCapabilitiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \\iggyvolz\vulkan\struct\VkSurfaceKHR $surface VkSurfaceKHR
     * @param \iggyvolz\vulkan\util\IntPointer $pSurfaceFormatCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceFormatKHR> $pSurfaceFormats VkSurfaceFormatKHR*
     * returns VkResult
     */
    public function vkGetPhysicalDeviceSurfaceFormatsKHR(
        struct\VkPhysicalDevice $physicalDevice,
        struct\VkSurfaceKHR $surface,
        util\IntPointer $pSurfaceFormatCount,
        util\ObjectPointer $pSurfaceFormats,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $surface;
        $cValue = $phpValue->cdata;
        $surfaceC = $cValue;
        $phpValue = $pSurfaceFormatCount;
        $cValue = $phpValue->cdata;
        $pSurfaceFormatCountC = $cValue;
        $phpValue = $pSurfaceFormats;
        $cValue = $phpValue->cdata;
        $pSurfaceFormatsC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceSurfaceFormatsKHR(
            $physicalDeviceC,
            $surfaceC,
            $pSurfaceFormatCountC,
            $pSurfaceFormatsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \\iggyvolz\vulkan\struct\VkSurfaceKHR $surface VkSurfaceKHR
     * @param \iggyvolz\vulkan\util\IntPointer $pPresentModeCount uint32_t*
     * @param \iggyvolz\vulkan\util\Pointer $pPresentModes VkPresentModeKHR*
     * returns VkResult
     */
    public function vkGetPhysicalDeviceSurfacePresentModesKHR(
        struct\VkPhysicalDevice $physicalDevice,
        struct\VkSurfaceKHR $surface,
        util\IntPointer $pPresentModeCount,
        util\Pointer $pPresentModes,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $surface;
        $cValue = $phpValue->cdata;
        $surfaceC = $cValue;
        $phpValue = $pPresentModeCount;
        $cValue = $phpValue->cdata;
        $pPresentModeCountC = $cValue;
        $phpValue = $pPresentModes;
        $cValue = $phpValue->cdata;
        $pPresentModesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceSurfacePresentModesKHR(
            $physicalDeviceC,
            $surfaceC,
            $pPresentModeCountC,
            $pPresentModesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSwapchainCreateInfoKHR> $pCreateInfo const VkSwapchainCreateInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSwapchainKHR> $pSwapchain VkSwapchainKHR*
     * returns VkResult
     */
    public function vkCreateSwapchainKHR(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pSwapchain,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSwapchain;
        $cValue = $phpValue->cdata;
        $pSwapchainC = $cValue;
        $cValue = $this->ffi->vkCreateSwapchainKHR(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pSwapchainC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain VkSwapchainKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroySwapchainKHR(
        struct\VkDevice $device,
        struct\VkSwapchainKHR $swapchain,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $swapchain;
        $cValue = $phpValue->cdata;
        $swapchainC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroySwapchainKHR(
            $deviceC,
            $swapchainC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain VkSwapchainKHR
     * @param \iggyvolz\vulkan\util\IntPointer $pSwapchainImageCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImage> $pSwapchainImages VkImage*
     * returns VkResult
     */
    public function vkGetSwapchainImagesKHR(
        struct\VkDevice $device,
        struct\VkSwapchainKHR $swapchain,
        util\IntPointer $pSwapchainImageCount,
        util\ObjectPointer $pSwapchainImages,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $swapchain;
        $cValue = $phpValue->cdata;
        $swapchainC = $cValue;
        $phpValue = $pSwapchainImageCount;
        $cValue = $phpValue->cdata;
        $pSwapchainImageCountC = $cValue;
        $phpValue = $pSwapchainImages;
        $cValue = $phpValue->cdata;
        $pSwapchainImagesC = $cValue;
        $cValue = $this->ffi->vkGetSwapchainImagesKHR(
            $deviceC,
            $swapchainC,
            $pSwapchainImageCountC,
            $pSwapchainImagesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain VkSwapchainKHR
     * @param int $timeout uint64_t
     * @param \\iggyvolz\vulkan\struct\VkSemaphore $semaphore VkSemaphore
     * @param \\iggyvolz\vulkan\struct\VkFence $fence VkFence
     * @param \iggyvolz\vulkan\util\IntPointer $pImageIndex uint32_t*
     * returns VkResult
     */
    public function vkAcquireNextImageKHR(
        struct\VkDevice $device,
        struct\VkSwapchainKHR $swapchain,
        int $timeout,
        struct\VkSemaphore $semaphore,
        struct\VkFence $fence,
        util\IntPointer $pImageIndex,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $swapchain;
        $cValue = $phpValue->cdata;
        $swapchainC = $cValue;
        $phpValue = $timeout;
        $cValue = $phpValue;
        $timeoutC = $cValue;
        $phpValue = $semaphore;
        $cValue = $phpValue->cdata;
        $semaphoreC = $cValue;
        $phpValue = $fence;
        $cValue = $phpValue->cdata;
        $fenceC = $cValue;
        $phpValue = $pImageIndex;
        $cValue = $phpValue->cdata;
        $pImageIndexC = $cValue;
        $cValue = $this->ffi->vkAcquireNextImageKHR(
            $deviceC,
            $swapchainC,
            $timeoutC,
            $semaphoreC,
            $fenceC,
            $pImageIndexC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkQueue $queue VkQueue
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPresentInfoKHR> $pPresentInfo const VkPresentInfoKHR*
     * returns VkResult
     */
    public function vkQueuePresentKHR(struct\VkQueue $queue, util\ObjectPointer $pPresentInfo): enum\VkResult
    {
        $phpValue = $queue;
        $cValue = $phpValue->cdata;
        $queueC = $cValue;
        $phpValue = $pPresentInfo;
        $cValue = $phpValue->cdata;
        $pPresentInfoC = $cValue;
        $cValue = $this->ffi->vkQueuePresentKHR(
            $queueC,
            $pPresentInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkInstance $instance VkInstance
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkViSurfaceCreateInfoNN> $pCreateInfo const VkViSurfaceCreateInfoNN*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceKHR> $pSurface VkSurfaceKHR*
     * returns VkResult
     */
    public function vkCreateViSurfaceNN(
        struct\VkInstance $instance,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pSurface,
    ): enum\VkResult
    {
        $phpValue = $instance;
        $cValue = $phpValue->cdata;
        $instanceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSurface;
        $cValue = $phpValue->cdata;
        $pSurfaceC = $cValue;
        $cValue = $this->ffi->vkCreateViSurfaceNN(
            $instanceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pSurfaceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkInstance $instance VkInstance
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkWaylandSurfaceCreateInfoKHR> $pCreateInfo const VkWaylandSurfaceCreateInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceKHR> $pSurface VkSurfaceKHR*
     * returns VkResult
     */
    public function vkCreateWaylandSurfaceKHR(
        struct\VkInstance $instance,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pSurface,
    ): enum\VkResult
    {
        $phpValue = $instance;
        $cValue = $phpValue->cdata;
        $instanceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSurface;
        $cValue = $phpValue->cdata;
        $pSurfaceC = $cValue;
        $cValue = $this->ffi->vkCreateWaylandSurfaceKHR(
            $instanceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pSurfaceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param int $queueFamilyIndex uint32_t
     * @param \iggyvolz\vulkan\util\Pointer $display struct wl_display*
     * returns VkBool32
     */
    public function vkGetPhysicalDeviceWaylandPresentationSupportKHR(
        struct\VkPhysicalDevice $physicalDevice,
        int $queueFamilyIndex,
        util\Pointer $display,
    ): bool
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $queueFamilyIndex;
        $cValue = $phpValue;
        $queueFamilyIndexC = $cValue;
        $phpValue = $display;
        $cValue = $phpValue->cdata;
        $displayC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceWaylandPresentationSupportKHR(
            $physicalDeviceC,
            $queueFamilyIndexC,
            $displayC,
        );
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkInstance $instance VkInstance
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkWin32SurfaceCreateInfoKHR> $pCreateInfo const VkWin32SurfaceCreateInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceKHR> $pSurface VkSurfaceKHR*
     * returns VkResult
     */
    public function vkCreateWin32SurfaceKHR(
        struct\VkInstance $instance,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pSurface,
    ): enum\VkResult
    {
        $phpValue = $instance;
        $cValue = $phpValue->cdata;
        $instanceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSurface;
        $cValue = $phpValue->cdata;
        $pSurfaceC = $cValue;
        $cValue = $this->ffi->vkCreateWin32SurfaceKHR(
            $instanceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pSurfaceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param int $queueFamilyIndex uint32_t
     * returns VkBool32
     */
    public function vkGetPhysicalDeviceWin32PresentationSupportKHR(
        struct\VkPhysicalDevice $physicalDevice,
        int $queueFamilyIndex,
    ): bool
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $queueFamilyIndex;
        $cValue = $phpValue;
        $queueFamilyIndexC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceWin32PresentationSupportKHR(
            $physicalDeviceC,
            $queueFamilyIndexC,
        );
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkInstance $instance VkInstance
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkXlibSurfaceCreateInfoKHR> $pCreateInfo const VkXlibSurfaceCreateInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceKHR> $pSurface VkSurfaceKHR*
     * returns VkResult
     */
    public function vkCreateXlibSurfaceKHR(
        struct\VkInstance $instance,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pSurface,
    ): enum\VkResult
    {
        $phpValue = $instance;
        $cValue = $phpValue->cdata;
        $instanceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSurface;
        $cValue = $phpValue->cdata;
        $pSurfaceC = $cValue;
        $cValue = $this->ffi->vkCreateXlibSurfaceKHR(
            $instanceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pSurfaceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param int $queueFamilyIndex uint32_t
     * @param \iggyvolz\vulkan\util\Pointer $dpy Display*
     * @param mixed $visualID VisualID
     * returns VkBool32
     */
    public function vkGetPhysicalDeviceXlibPresentationSupportKHR(
        struct\VkPhysicalDevice $physicalDevice,
        int $queueFamilyIndex,
        util\Pointer $dpy,
        mixed $visualID,
    ): bool
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $queueFamilyIndex;
        $cValue = $phpValue;
        $queueFamilyIndexC = $cValue;
        $phpValue = $dpy;
        $cValue = $phpValue->cdata;
        $dpyC = $cValue;
        $phpValue = $visualID;
        throw new \LogicException("Dummy transformer!");
        $visualIDC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceXlibPresentationSupportKHR(
            $physicalDeviceC,
            $queueFamilyIndexC,
            $dpyC,
            $visualIDC,
        );
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkInstance $instance VkInstance
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkXcbSurfaceCreateInfoKHR> $pCreateInfo const VkXcbSurfaceCreateInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceKHR> $pSurface VkSurfaceKHR*
     * returns VkResult
     */
    public function vkCreateXcbSurfaceKHR(
        struct\VkInstance $instance,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pSurface,
    ): enum\VkResult
    {
        $phpValue = $instance;
        $cValue = $phpValue->cdata;
        $instanceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSurface;
        $cValue = $phpValue->cdata;
        $pSurfaceC = $cValue;
        $cValue = $this->ffi->vkCreateXcbSurfaceKHR(
            $instanceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pSurfaceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param int $queueFamilyIndex uint32_t
     * @param \iggyvolz\vulkan\util\Pointer $connection xcb_connection_t*
     * @param mixed $visual_id xcb_visualid_t
     * returns VkBool32
     */
    public function vkGetPhysicalDeviceXcbPresentationSupportKHR(
        struct\VkPhysicalDevice $physicalDevice,
        int $queueFamilyIndex,
        util\Pointer $connection,
        mixed $visual_id,
    ): bool
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $queueFamilyIndex;
        $cValue = $phpValue;
        $queueFamilyIndexC = $cValue;
        $phpValue = $connection;
        $cValue = $phpValue->cdata;
        $connectionC = $cValue;
        $phpValue = $visual_id;
        throw new \LogicException("Dummy transformer!");
        $visual_idC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceXcbPresentationSupportKHR(
            $physicalDeviceC,
            $queueFamilyIndexC,
            $connectionC,
            $visual_idC,
        );
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkInstance $instance VkInstance
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDirectFBSurfaceCreateInfoEXT> $pCreateInfo const VkDirectFBSurfaceCreateInfoEXT*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceKHR> $pSurface VkSurfaceKHR*
     * returns VkResult
     */
    public function vkCreateDirectFBSurfaceEXT(
        struct\VkInstance $instance,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pSurface,
    ): enum\VkResult
    {
        $phpValue = $instance;
        $cValue = $phpValue->cdata;
        $instanceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSurface;
        $cValue = $phpValue->cdata;
        $pSurfaceC = $cValue;
        $cValue = $this->ffi->vkCreateDirectFBSurfaceEXT(
            $instanceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pSurfaceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param int $queueFamilyIndex uint32_t
     * @param \iggyvolz\vulkan\util\Pointer $dfb IDirectFB*
     * returns VkBool32
     */
    public function vkGetPhysicalDeviceDirectFBPresentationSupportEXT(
        struct\VkPhysicalDevice $physicalDevice,
        int $queueFamilyIndex,
        util\Pointer $dfb,
    ): bool
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $queueFamilyIndex;
        $cValue = $phpValue;
        $queueFamilyIndexC = $cValue;
        $phpValue = $dfb;
        $cValue = $phpValue->cdata;
        $dfbC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceDirectFBPresentationSupportEXT(
            $physicalDeviceC,
            $queueFamilyIndexC,
            $dfbC,
        );
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkInstance $instance VkInstance
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImagePipeSurfaceCreateInfoFUCHSIA> $pCreateInfo const VkImagePipeSurfaceCreateInfoFUCHSIA*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceKHR> $pSurface VkSurfaceKHR*
     * returns VkResult
     */
    public function vkCreateImagePipeSurfaceFUCHSIA(
        struct\VkInstance $instance,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pSurface,
    ): enum\VkResult
    {
        $phpValue = $instance;
        $cValue = $phpValue->cdata;
        $instanceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSurface;
        $cValue = $phpValue->cdata;
        $pSurfaceC = $cValue;
        $cValue = $this->ffi->vkCreateImagePipeSurfaceFUCHSIA(
            $instanceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pSurfaceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkInstance $instance VkInstance
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkStreamDescriptorSurfaceCreateInfoGGP> $pCreateInfo const VkStreamDescriptorSurfaceCreateInfoGGP*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceKHR> $pSurface VkSurfaceKHR*
     * returns VkResult
     */
    public function vkCreateStreamDescriptorSurfaceGGP(
        struct\VkInstance $instance,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pSurface,
    ): enum\VkResult
    {
        $phpValue = $instance;
        $cValue = $phpValue->cdata;
        $instanceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSurface;
        $cValue = $phpValue->cdata;
        $pSurfaceC = $cValue;
        $cValue = $this->ffi->vkCreateStreamDescriptorSurfaceGGP(
            $instanceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pSurfaceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkInstance $instance VkInstance
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkScreenSurfaceCreateInfoQNX> $pCreateInfo const VkScreenSurfaceCreateInfoQNX*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceKHR> $pSurface VkSurfaceKHR*
     * returns VkResult
     */
    public function vkCreateScreenSurfaceQNX(
        struct\VkInstance $instance,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pSurface,
    ): enum\VkResult
    {
        $phpValue = $instance;
        $cValue = $phpValue->cdata;
        $instanceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSurface;
        $cValue = $phpValue->cdata;
        $pSurfaceC = $cValue;
        $cValue = $this->ffi->vkCreateScreenSurfaceQNX(
            $instanceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pSurfaceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param int $queueFamilyIndex uint32_t
     * @param \iggyvolz\vulkan\util\Pointer $window struct _screen_window*
     * returns VkBool32
     */
    public function vkGetPhysicalDeviceScreenPresentationSupportQNX(
        struct\VkPhysicalDevice $physicalDevice,
        int $queueFamilyIndex,
        util\Pointer $window,
    ): bool
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $queueFamilyIndex;
        $cValue = $phpValue;
        $queueFamilyIndexC = $cValue;
        $phpValue = $window;
        $cValue = $phpValue->cdata;
        $windowC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceScreenPresentationSupportQNX(
            $physicalDeviceC,
            $queueFamilyIndexC,
            $windowC,
        );
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkInstance $instance VkInstance
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDebugReportCallbackCreateInfoEXT> $pCreateInfo const VkDebugReportCallbackCreateInfoEXT*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDebugReportCallbackEXT> $pCallback VkDebugReportCallbackEXT*
     * returns VkResult
     */
    public function vkCreateDebugReportCallbackEXT(
        struct\VkInstance $instance,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pCallback,
    ): enum\VkResult
    {
        $phpValue = $instance;
        $cValue = $phpValue->cdata;
        $instanceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pCallback;
        $cValue = $phpValue->cdata;
        $pCallbackC = $cValue;
        $cValue = $this->ffi->vkCreateDebugReportCallbackEXT(
            $instanceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pCallbackC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkInstance $instance VkInstance
     * @param \\iggyvolz\vulkan\struct\VkDebugReportCallbackEXT $callback VkDebugReportCallbackEXT
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyDebugReportCallbackEXT(
        struct\VkInstance $instance,
        struct\VkDebugReportCallbackEXT $callback,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $instance;
        $cValue = $phpValue->cdata;
        $instanceC = $cValue;
        $phpValue = $callback;
        $cValue = $phpValue->cdata;
        $callbackC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyDebugReportCallbackEXT(
            $instanceC,
            $callbackC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkInstance $instance VkInstance
     * @param list<iggyvolz\vulkan\enum\VkDebugReportFlagBitsEXT> $flags VkDebugReportFlagsEXT
     * @param \\iggyvolz\vulkan\enum\VkDebugReportObjectTypeEXT $objectType VkDebugReportObjectTypeEXT
     * @param int $object uint64_t
     * @param int $location size_t
     * @param int $messageCode int32_t
     * @param ?string $pLayerPrefix const char*
     * @param ?string $pMessage const char*
     */
    public function vkDebugReportMessageEXT(
        struct\VkInstance $instance,
        array $flags,
        enum\VkDebugReportObjectTypeEXT $objectType,
        int $object,
        int $location,
        int $messageCode,
        ?string $pLayerPrefix,
        ?string $pMessage,
    ): void
    {
        $phpValue = $instance;
        $cValue = $phpValue->cdata;
        $instanceC = $cValue;
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
        $cValue = $this->ffi->vkDebugReportMessageEXT(
            $instanceC,
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
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDebugMarkerObjectNameInfoEXT> $pNameInfo const VkDebugMarkerObjectNameInfoEXT*
     * returns VkResult
     */
    public function vkDebugMarkerSetObjectNameEXT(
        struct\VkDevice $device,
        util\ObjectPointer $pNameInfo,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pNameInfo;
        $cValue = $phpValue->cdata;
        $pNameInfoC = $cValue;
        $cValue = $this->ffi->vkDebugMarkerSetObjectNameEXT(
            $deviceC,
            $pNameInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDebugMarkerObjectTagInfoEXT> $pTagInfo const VkDebugMarkerObjectTagInfoEXT*
     * returns VkResult
     */
    public function vkDebugMarkerSetObjectTagEXT(struct\VkDevice $device, util\ObjectPointer $pTagInfo): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pTagInfo;
        $cValue = $phpValue->cdata;
        $pTagInfoC = $cValue;
        $cValue = $this->ffi->vkDebugMarkerSetObjectTagEXT(
            $deviceC,
            $pTagInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDebugMarkerMarkerInfoEXT> $pMarkerInfo const VkDebugMarkerMarkerInfoEXT*
     */
    public function vkCmdDebugMarkerBeginEXT(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pMarkerInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pMarkerInfo;
        $cValue = $phpValue->cdata;
        $pMarkerInfoC = $cValue;
        $cValue = $this->ffi->vkCmdDebugMarkerBeginEXT(
            $commandBufferC,
            $pMarkerInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     */
    public function vkCmdDebugMarkerEndEXT(struct\VkCommandBuffer $commandBuffer): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $cValue = $this->ffi->vkCmdDebugMarkerEndEXT(
            $commandBufferC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDebugMarkerMarkerInfoEXT> $pMarkerInfo const VkDebugMarkerMarkerInfoEXT*
     */
    public function vkCmdDebugMarkerInsertEXT(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pMarkerInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pMarkerInfo;
        $cValue = $phpValue->cdata;
        $pMarkerInfoC = $cValue;
        $cValue = $this->ffi->vkCmdDebugMarkerInsertEXT(
            $commandBufferC,
            $pMarkerInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \\iggyvolz\vulkan\enum\VkFormat $format VkFormat
     * @param \\iggyvolz\vulkan\enum\VkImageType $type VkImageType
     * @param \\iggyvolz\vulkan\enum\VkImageTiling $tiling VkImageTiling
     * @param list<iggyvolz\vulkan\enum\VkImageUsageFlagBits> $usage VkImageUsageFlags
     * @param list<iggyvolz\vulkan\enum\VkImageCreateFlagBits> $flags VkImageCreateFlags
     * @param list<iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBitsNV> $externalHandleType VkExternalMemoryHandleTypeFlagsNV
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkExternalImageFormatPropertiesNV> $pExternalImageFormatProperties VkExternalImageFormatPropertiesNV*
     * returns VkResult
     */
    public function vkGetPhysicalDeviceExternalImageFormatPropertiesNV(
        struct\VkPhysicalDevice $physicalDevice,
        enum\VkFormat $format,
        enum\VkImageType $type,
        enum\VkImageTiling $tiling,
        array $usage,
        array $flags,
        array $externalHandleType,
        util\ObjectPointer $pExternalImageFormatProperties,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
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
        $cValue = $this->ffi->vkGetPhysicalDeviceExternalImageFormatPropertiesNV(
            $physicalDeviceC,
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
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkDeviceMemory $memory VkDeviceMemory
     * @param list<iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBitsNV> $handleType VkExternalMemoryHandleTypeFlagsNV
     * @param \iggyvolz\vulkan\util\Pointer $pHandle HANDLE*
     * returns VkResult
     */
    public function vkGetMemoryWin32HandleNV(
        struct\VkDevice $device,
        struct\VkDeviceMemory $memory,
        array $handleType,
        util\Pointer $pHandle,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $memory;
        $cValue = $phpValue->cdata;
        $memoryC = $cValue;
        $phpValue = $handleType;
        $cValue = \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBitsNV::toInt(...$phpValue);
        $handleTypeC = $cValue;
        $phpValue = $pHandle;
        $cValue = $phpValue->cdata;
        $pHandleC = $cValue;
        $cValue = $this->ffi->vkGetMemoryWin32HandleNV(
            $deviceC,
            $memoryC,
            $handleTypeC,
            $pHandleC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param bool $isPreprocessed VkBool32
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkGeneratedCommandsInfoNV> $pGeneratedCommandsInfo const VkGeneratedCommandsInfoNV*
     */
    public function vkCmdExecuteGeneratedCommandsNV(
        struct\VkCommandBuffer $commandBuffer,
        bool $isPreprocessed,
        util\ObjectPointer $pGeneratedCommandsInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $isPreprocessed;
        $cValue = $phpValue ? 1 : 0;
        $isPreprocessedC = $cValue;
        $phpValue = $pGeneratedCommandsInfo;
        $cValue = $phpValue->cdata;
        $pGeneratedCommandsInfoC = $cValue;
        $cValue = $this->ffi->vkCmdExecuteGeneratedCommandsNV(
            $commandBufferC,
            $isPreprocessedC,
            $pGeneratedCommandsInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkGeneratedCommandsInfoNV> $pGeneratedCommandsInfo const VkGeneratedCommandsInfoNV*
     */
    public function vkCmdPreprocessGeneratedCommandsNV(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pGeneratedCommandsInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pGeneratedCommandsInfo;
        $cValue = $phpValue->cdata;
        $pGeneratedCommandsInfoC = $cValue;
        $cValue = $this->ffi->vkCmdPreprocessGeneratedCommandsNV(
            $commandBufferC,
            $pGeneratedCommandsInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint VkPipelineBindPoint
     * @param \\iggyvolz\vulkan\struct\VkPipeline $pipeline VkPipeline
     * @param int $groupIndex uint32_t
     */
    public function vkCmdBindPipelineShaderGroupNV(
        struct\VkCommandBuffer $commandBuffer,
        enum\VkPipelineBindPoint $pipelineBindPoint,
        struct\VkPipeline $pipeline,
        int $groupIndex,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pipelineBindPoint;
        $cValue = $phpValue->value;
        $pipelineBindPointC = $cValue;
        $phpValue = $pipeline;
        $cValue = $phpValue->cdata;
        $pipelineC = $cValue;
        $phpValue = $groupIndex;
        $cValue = $phpValue;
        $groupIndexC = $cValue;
        $cValue = $this->ffi->vkCmdBindPipelineShaderGroupNV(
            $commandBufferC,
            $pipelineBindPointC,
            $pipelineC,
            $groupIndexC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkGeneratedCommandsMemoryRequirementsInfoNV> $pInfo const VkGeneratedCommandsMemoryRequirementsInfoNV*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryRequirements2> $pMemoryRequirements VkMemoryRequirements2*
     */
    public function vkGetGeneratedCommandsMemoryRequirementsNV(
        struct\VkDevice $device,
        util\ObjectPointer $pInfo,
        util\ObjectPointer $pMemoryRequirements,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $phpValue = $pMemoryRequirements;
        $cValue = $phpValue->cdata;
        $pMemoryRequirementsC = $cValue;
        $cValue = $this->ffi->vkGetGeneratedCommandsMemoryRequirementsNV(
            $deviceC,
            $pInfoC,
            $pMemoryRequirementsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkIndirectCommandsLayoutCreateInfoNV> $pCreateInfo const VkIndirectCommandsLayoutCreateInfoNV*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkIndirectCommandsLayoutNV> $pIndirectCommandsLayout VkIndirectCommandsLayoutNV*
     * returns VkResult
     */
    public function vkCreateIndirectCommandsLayoutNV(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pIndirectCommandsLayout,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pIndirectCommandsLayout;
        $cValue = $phpValue->cdata;
        $pIndirectCommandsLayoutC = $cValue;
        $cValue = $this->ffi->vkCreateIndirectCommandsLayoutNV(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pIndirectCommandsLayoutC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkIndirectCommandsLayoutNV $indirectCommandsLayout VkIndirectCommandsLayoutNV
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyIndirectCommandsLayoutNV(
        struct\VkDevice $device,
        struct\VkIndirectCommandsLayoutNV $indirectCommandsLayout,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $indirectCommandsLayout;
        $cValue = $phpValue->cdata;
        $indirectCommandsLayoutC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyIndirectCommandsLayoutNV(
            $deviceC,
            $indirectCommandsLayoutC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceFeatures2> $pFeatures VkPhysicalDeviceFeatures2*
     */
    public function vkGetPhysicalDeviceFeatures2(
        struct\VkPhysicalDevice $physicalDevice,
        util\ObjectPointer $pFeatures,
    ): void
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pFeatures;
        $cValue = $phpValue->cdata;
        $pFeaturesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceFeatures2(
            $physicalDeviceC,
            $pFeaturesC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceProperties2> $pProperties VkPhysicalDeviceProperties2*
     */
    public function vkGetPhysicalDeviceProperties2(
        struct\VkPhysicalDevice $physicalDevice,
        util\ObjectPointer $pProperties,
    ): void
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceProperties2(
            $physicalDeviceC,
            $pPropertiesC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \\iggyvolz\vulkan\enum\VkFormat $format VkFormat
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkFormatProperties2> $pFormatProperties VkFormatProperties2*
     */
    public function vkGetPhysicalDeviceFormatProperties2(
        struct\VkPhysicalDevice $physicalDevice,
        enum\VkFormat $format,
        util\ObjectPointer $pFormatProperties,
    ): void
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $format;
        $cValue = $phpValue->value;
        $formatC = $cValue;
        $phpValue = $pFormatProperties;
        $cValue = $phpValue->cdata;
        $pFormatPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceFormatProperties2(
            $physicalDeviceC,
            $formatC,
            $pFormatPropertiesC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceImageFormatInfo2> $pImageFormatInfo const VkPhysicalDeviceImageFormatInfo2*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageFormatProperties2> $pImageFormatProperties VkImageFormatProperties2*
     * returns VkResult
     */
    public function vkGetPhysicalDeviceImageFormatProperties2(
        struct\VkPhysicalDevice $physicalDevice,
        util\ObjectPointer $pImageFormatInfo,
        util\ObjectPointer $pImageFormatProperties,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pImageFormatInfo;
        $cValue = $phpValue->cdata;
        $pImageFormatInfoC = $cValue;
        $phpValue = $pImageFormatProperties;
        $cValue = $phpValue->cdata;
        $pImageFormatPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceImageFormatProperties2(
            $physicalDeviceC,
            $pImageFormatInfoC,
            $pImageFormatPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\IntPointer $pQueueFamilyPropertyCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkQueueFamilyProperties2> $pQueueFamilyProperties VkQueueFamilyProperties2*
     */
    public function vkGetPhysicalDeviceQueueFamilyProperties2(
        struct\VkPhysicalDevice $physicalDevice,
        util\IntPointer $pQueueFamilyPropertyCount,
        util\ObjectPointer $pQueueFamilyProperties,
    ): void
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pQueueFamilyPropertyCount;
        $cValue = $phpValue->cdata;
        $pQueueFamilyPropertyCountC = $cValue;
        $phpValue = $pQueueFamilyProperties;
        $cValue = $phpValue->cdata;
        $pQueueFamilyPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceQueueFamilyProperties2(
            $physicalDeviceC,
            $pQueueFamilyPropertyCountC,
            $pQueueFamilyPropertiesC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceMemoryProperties2> $pMemoryProperties VkPhysicalDeviceMemoryProperties2*
     */
    public function vkGetPhysicalDeviceMemoryProperties2(
        struct\VkPhysicalDevice $physicalDevice,
        util\ObjectPointer $pMemoryProperties,
    ): void
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pMemoryProperties;
        $cValue = $phpValue->cdata;
        $pMemoryPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceMemoryProperties2(
            $physicalDeviceC,
            $pMemoryPropertiesC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceSparseImageFormatInfo2> $pFormatInfo const VkPhysicalDeviceSparseImageFormatInfo2*
     * @param \iggyvolz\vulkan\util\IntPointer $pPropertyCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSparseImageFormatProperties2> $pProperties VkSparseImageFormatProperties2*
     */
    public function vkGetPhysicalDeviceSparseImageFormatProperties2(
        struct\VkPhysicalDevice $physicalDevice,
        util\ObjectPointer $pFormatInfo,
        util\IntPointer $pPropertyCount,
        util\ObjectPointer $pProperties,
    ): void
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pFormatInfo;
        $cValue = $phpValue->cdata;
        $pFormatInfoC = $cValue;
        $phpValue = $pPropertyCount;
        $cValue = $phpValue->cdata;
        $pPropertyCountC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceSparseImageFormatProperties2(
            $physicalDeviceC,
            $pFormatInfoC,
            $pPropertyCountC,
            $pPropertiesC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint VkPipelineBindPoint
     * @param \\iggyvolz\vulkan\struct\VkPipelineLayout $layout VkPipelineLayout
     * @param int $set uint32_t
     * @param int $descriptorWriteCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkWriteDescriptorSet> $pDescriptorWrites const VkWriteDescriptorSet*
     */
    public function vkCmdPushDescriptorSetKHR(
        struct\VkCommandBuffer $commandBuffer,
        enum\VkPipelineBindPoint $pipelineBindPoint,
        struct\VkPipelineLayout $layout,
        int $set,
        int $descriptorWriteCount,
        util\ObjectPointer $pDescriptorWrites,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pipelineBindPoint;
        $cValue = $phpValue->value;
        $pipelineBindPointC = $cValue;
        $phpValue = $layout;
        $cValue = $phpValue->cdata;
        $layoutC = $cValue;
        $phpValue = $set;
        $cValue = $phpValue;
        $setC = $cValue;
        $phpValue = $descriptorWriteCount;
        $cValue = $phpValue;
        $descriptorWriteCountC = $cValue;
        $phpValue = $pDescriptorWrites;
        $cValue = $phpValue->cdata;
        $pDescriptorWritesC = $cValue;
        $cValue = $this->ffi->vkCmdPushDescriptorSetKHR(
            $commandBufferC,
            $pipelineBindPointC,
            $layoutC,
            $setC,
            $descriptorWriteCountC,
            $pDescriptorWritesC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkCommandPool $commandPool VkCommandPool
     * @param list<void> $flags VkCommandPoolTrimFlags
     */
    public function vkTrimCommandPool(struct\VkDevice $device, struct\VkCommandPool $commandPool, array $flags): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $commandPool;
        $cValue = $phpValue->cdata;
        $commandPoolC = $cValue;
        $phpValue = $flags;
        $cValue = 0;
        $flagsC = $cValue;
        $cValue = $this->ffi->vkTrimCommandPool(
            $deviceC,
            $commandPoolC,
            $flagsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceExternalBufferInfo> $pExternalBufferInfo const VkPhysicalDeviceExternalBufferInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkExternalBufferProperties> $pExternalBufferProperties VkExternalBufferProperties*
     */
    public function vkGetPhysicalDeviceExternalBufferProperties(
        struct\VkPhysicalDevice $physicalDevice,
        util\ObjectPointer $pExternalBufferInfo,
        util\ObjectPointer $pExternalBufferProperties,
    ): void
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pExternalBufferInfo;
        $cValue = $phpValue->cdata;
        $pExternalBufferInfoC = $cValue;
        $phpValue = $pExternalBufferProperties;
        $cValue = $phpValue->cdata;
        $pExternalBufferPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceExternalBufferProperties(
            $physicalDeviceC,
            $pExternalBufferInfoC,
            $pExternalBufferPropertiesC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryGetWin32HandleInfoKHR> $pGetWin32HandleInfo const VkMemoryGetWin32HandleInfoKHR*
     * @param \iggyvolz\vulkan\util\Pointer $pHandle HANDLE*
     * returns VkResult
     */
    public function vkGetMemoryWin32HandleKHR(
        struct\VkDevice $device,
        util\ObjectPointer $pGetWin32HandleInfo,
        util\Pointer $pHandle,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pGetWin32HandleInfo;
        $cValue = $phpValue->cdata;
        $pGetWin32HandleInfoC = $cValue;
        $phpValue = $pHandle;
        $cValue = $phpValue->cdata;
        $pHandleC = $cValue;
        $cValue = $this->ffi->vkGetMemoryWin32HandleKHR(
            $deviceC,
            $pGetWin32HandleInfoC,
            $pHandleC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits $handleType VkExternalMemoryHandleTypeFlagBits
     * @param \iggyvolz\vulkan\util\Pointer $handle HANDLE
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryWin32HandlePropertiesKHR> $pMemoryWin32HandleProperties VkMemoryWin32HandlePropertiesKHR*
     * returns VkResult
     */
    public function vkGetMemoryWin32HandlePropertiesKHR(
        struct\VkDevice $device,
        enum\VkExternalMemoryHandleTypeFlagBits $handleType,
        util\Pointer $handle,
        util\ObjectPointer $pMemoryWin32HandleProperties,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $handleType;
        $cValue = $phpValue->value;
        $handleTypeC = $cValue;
        $phpValue = $handle;
        $cValue = $phpValue->cdata;
        $handleC = $cValue;
        $phpValue = $pMemoryWin32HandleProperties;
        $cValue = $phpValue->cdata;
        $pMemoryWin32HandlePropertiesC = $cValue;
        $cValue = $this->ffi->vkGetMemoryWin32HandlePropertiesKHR(
            $deviceC,
            $handleTypeC,
            $handleC,
            $pMemoryWin32HandlePropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryGetFdInfoKHR> $pGetFdInfo const VkMemoryGetFdInfoKHR*
     * @param \iggyvolz\vulkan\util\IntPointer $pFd int*
     * returns VkResult
     */
    public function vkGetMemoryFdKHR(
        struct\VkDevice $device,
        util\ObjectPointer $pGetFdInfo,
        util\IntPointer $pFd,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pGetFdInfo;
        $cValue = $phpValue->cdata;
        $pGetFdInfoC = $cValue;
        $phpValue = $pFd;
        $cValue = $phpValue->cdata;
        $pFdC = $cValue;
        $cValue = $this->ffi->vkGetMemoryFdKHR(
            $deviceC,
            $pGetFdInfoC,
            $pFdC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits $handleType VkExternalMemoryHandleTypeFlagBits
     * @param int $fd int
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryFdPropertiesKHR> $pMemoryFdProperties VkMemoryFdPropertiesKHR*
     * returns VkResult
     */
    public function vkGetMemoryFdPropertiesKHR(
        struct\VkDevice $device,
        enum\VkExternalMemoryHandleTypeFlagBits $handleType,
        int $fd,
        util\ObjectPointer $pMemoryFdProperties,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $handleType;
        $cValue = $phpValue->value;
        $handleTypeC = $cValue;
        $phpValue = $fd;
        $cValue = $phpValue;
        $fdC = $cValue;
        $phpValue = $pMemoryFdProperties;
        $cValue = $phpValue->cdata;
        $pMemoryFdPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetMemoryFdPropertiesKHR(
            $deviceC,
            $handleTypeC,
            $fdC,
            $pMemoryFdPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryGetZirconHandleInfoFUCHSIA> $pGetZirconHandleInfo const VkMemoryGetZirconHandleInfoFUCHSIA*
     * @param \iggyvolz\vulkan\util\Pointer $pZirconHandle zx_handle_t*
     * returns VkResult
     */
    public function vkGetMemoryZirconHandleFUCHSIA(
        struct\VkDevice $device,
        util\ObjectPointer $pGetZirconHandleInfo,
        util\Pointer $pZirconHandle,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pGetZirconHandleInfo;
        $cValue = $phpValue->cdata;
        $pGetZirconHandleInfoC = $cValue;
        $phpValue = $pZirconHandle;
        $cValue = $phpValue->cdata;
        $pZirconHandleC = $cValue;
        $cValue = $this->ffi->vkGetMemoryZirconHandleFUCHSIA(
            $deviceC,
            $pGetZirconHandleInfoC,
            $pZirconHandleC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits $handleType VkExternalMemoryHandleTypeFlagBits
     * @param int $zirconHandle zx_handle_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryZirconHandlePropertiesFUCHSIA> $pMemoryZirconHandleProperties VkMemoryZirconHandlePropertiesFUCHSIA*
     * returns VkResult
     */
    public function vkGetMemoryZirconHandlePropertiesFUCHSIA(
        struct\VkDevice $device,
        enum\VkExternalMemoryHandleTypeFlagBits $handleType,
        int $zirconHandle,
        util\ObjectPointer $pMemoryZirconHandleProperties,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $handleType;
        $cValue = $phpValue->value;
        $handleTypeC = $cValue;
        $phpValue = $zirconHandle;
        $cValue = $phpValue;
        $zirconHandleC = $cValue;
        $phpValue = $pMemoryZirconHandleProperties;
        $cValue = $phpValue->cdata;
        $pMemoryZirconHandlePropertiesC = $cValue;
        $cValue = $this->ffi->vkGetMemoryZirconHandlePropertiesFUCHSIA(
            $deviceC,
            $handleTypeC,
            $zirconHandleC,
            $pMemoryZirconHandlePropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryGetRemoteAddressInfoNV> $pMemoryGetRemoteAddressInfo const VkMemoryGetRemoteAddressInfoNV*
     * @param \iggyvolz\vulkan\util\Pointer $pAddress VkRemoteAddressNV*
     * returns VkResult
     */
    public function vkGetMemoryRemoteAddressNV(
        struct\VkDevice $device,
        util\ObjectPointer $pMemoryGetRemoteAddressInfo,
        util\Pointer $pAddress,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pMemoryGetRemoteAddressInfo;
        $cValue = $phpValue->cdata;
        $pMemoryGetRemoteAddressInfoC = $cValue;
        $phpValue = $pAddress;
        $cValue = $phpValue->cdata;
        $pAddressC = $cValue;
        $cValue = $this->ffi->vkGetMemoryRemoteAddressNV(
            $deviceC,
            $pMemoryGetRemoteAddressInfoC,
            $pAddressC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryGetSciBufInfoNV> $pGetSciBufInfo const VkMemoryGetSciBufInfoNV*
     * @param \iggyvolz\vulkan\util\Pointer $pHandle NvSciBufObj*
     * returns VkResult
     */
    public function vkGetMemorySciBufNV(
        struct\VkDevice $device,
        util\ObjectPointer $pGetSciBufInfo,
        util\Pointer $pHandle,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pGetSciBufInfo;
        $cValue = $phpValue->cdata;
        $pGetSciBufInfoC = $cValue;
        $phpValue = $pHandle;
        $cValue = $phpValue->cdata;
        $pHandleC = $cValue;
        $cValue = $this->ffi->vkGetMemorySciBufNV(
            $deviceC,
            $pGetSciBufInfoC,
            $pHandleC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \\iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits $handleType VkExternalMemoryHandleTypeFlagBits
     * @param mixed $handle NvSciBufObj
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemorySciBufPropertiesNV> $pMemorySciBufProperties VkMemorySciBufPropertiesNV*
     * returns VkResult
     */
    public function vkGetPhysicalDeviceExternalMemorySciBufPropertiesNV(
        struct\VkPhysicalDevice $physicalDevice,
        enum\VkExternalMemoryHandleTypeFlagBits $handleType,
        mixed $handle,
        util\ObjectPointer $pMemorySciBufProperties,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $handleType;
        $cValue = $phpValue->value;
        $handleTypeC = $cValue;
        $phpValue = $handle;
        throw new \LogicException("Dummy transformer!");
        $handleC = $cValue;
        $phpValue = $pMemorySciBufProperties;
        $cValue = $phpValue->cdata;
        $pMemorySciBufPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceExternalMemorySciBufPropertiesNV(
            $physicalDeviceC,
            $handleTypeC,
            $handleC,
            $pMemorySciBufPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param mixed $pAttributes NvSciBufAttrList
     * returns VkResult
     */
    public function vkGetPhysicalDeviceSciBufAttributesNV(
        struct\VkPhysicalDevice $physicalDevice,
        mixed $pAttributes,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pAttributes;
        throw new \LogicException("Dummy transformer!");
        $pAttributesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceSciBufAttributesNV(
            $physicalDeviceC,
            $pAttributesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceExternalSemaphoreInfo> $pExternalSemaphoreInfo const VkPhysicalDeviceExternalSemaphoreInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkExternalSemaphoreProperties> $pExternalSemaphoreProperties VkExternalSemaphoreProperties*
     */
    public function vkGetPhysicalDeviceExternalSemaphoreProperties(
        struct\VkPhysicalDevice $physicalDevice,
        util\ObjectPointer $pExternalSemaphoreInfo,
        util\ObjectPointer $pExternalSemaphoreProperties,
    ): void
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pExternalSemaphoreInfo;
        $cValue = $phpValue->cdata;
        $pExternalSemaphoreInfoC = $cValue;
        $phpValue = $pExternalSemaphoreProperties;
        $cValue = $phpValue->cdata;
        $pExternalSemaphorePropertiesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceExternalSemaphoreProperties(
            $physicalDeviceC,
            $pExternalSemaphoreInfoC,
            $pExternalSemaphorePropertiesC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSemaphoreGetWin32HandleInfoKHR> $pGetWin32HandleInfo const VkSemaphoreGetWin32HandleInfoKHR*
     * @param \iggyvolz\vulkan\util\Pointer $pHandle HANDLE*
     * returns VkResult
     */
    public function vkGetSemaphoreWin32HandleKHR(
        struct\VkDevice $device,
        util\ObjectPointer $pGetWin32HandleInfo,
        util\Pointer $pHandle,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pGetWin32HandleInfo;
        $cValue = $phpValue->cdata;
        $pGetWin32HandleInfoC = $cValue;
        $phpValue = $pHandle;
        $cValue = $phpValue->cdata;
        $pHandleC = $cValue;
        $cValue = $this->ffi->vkGetSemaphoreWin32HandleKHR(
            $deviceC,
            $pGetWin32HandleInfoC,
            $pHandleC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImportSemaphoreWin32HandleInfoKHR> $pImportSemaphoreWin32HandleInfo const VkImportSemaphoreWin32HandleInfoKHR*
     * returns VkResult
     */
    public function vkImportSemaphoreWin32HandleKHR(
        struct\VkDevice $device,
        util\ObjectPointer $pImportSemaphoreWin32HandleInfo,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pImportSemaphoreWin32HandleInfo;
        $cValue = $phpValue->cdata;
        $pImportSemaphoreWin32HandleInfoC = $cValue;
        $cValue = $this->ffi->vkImportSemaphoreWin32HandleKHR(
            $deviceC,
            $pImportSemaphoreWin32HandleInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSemaphoreGetFdInfoKHR> $pGetFdInfo const VkSemaphoreGetFdInfoKHR*
     * @param \iggyvolz\vulkan\util\IntPointer $pFd int*
     * returns VkResult
     */
    public function vkGetSemaphoreFdKHR(
        struct\VkDevice $device,
        util\ObjectPointer $pGetFdInfo,
        util\IntPointer $pFd,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pGetFdInfo;
        $cValue = $phpValue->cdata;
        $pGetFdInfoC = $cValue;
        $phpValue = $pFd;
        $cValue = $phpValue->cdata;
        $pFdC = $cValue;
        $cValue = $this->ffi->vkGetSemaphoreFdKHR(
            $deviceC,
            $pGetFdInfoC,
            $pFdC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImportSemaphoreFdInfoKHR> $pImportSemaphoreFdInfo const VkImportSemaphoreFdInfoKHR*
     * returns VkResult
     */
    public function vkImportSemaphoreFdKHR(
        struct\VkDevice $device,
        util\ObjectPointer $pImportSemaphoreFdInfo,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pImportSemaphoreFdInfo;
        $cValue = $phpValue->cdata;
        $pImportSemaphoreFdInfoC = $cValue;
        $cValue = $this->ffi->vkImportSemaphoreFdKHR(
            $deviceC,
            $pImportSemaphoreFdInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSemaphoreGetZirconHandleInfoFUCHSIA> $pGetZirconHandleInfo const VkSemaphoreGetZirconHandleInfoFUCHSIA*
     * @param \iggyvolz\vulkan\util\Pointer $pZirconHandle zx_handle_t*
     * returns VkResult
     */
    public function vkGetSemaphoreZirconHandleFUCHSIA(
        struct\VkDevice $device,
        util\ObjectPointer $pGetZirconHandleInfo,
        util\Pointer $pZirconHandle,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pGetZirconHandleInfo;
        $cValue = $phpValue->cdata;
        $pGetZirconHandleInfoC = $cValue;
        $phpValue = $pZirconHandle;
        $cValue = $phpValue->cdata;
        $pZirconHandleC = $cValue;
        $cValue = $this->ffi->vkGetSemaphoreZirconHandleFUCHSIA(
            $deviceC,
            $pGetZirconHandleInfoC,
            $pZirconHandleC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImportSemaphoreZirconHandleInfoFUCHSIA> $pImportSemaphoreZirconHandleInfo const VkImportSemaphoreZirconHandleInfoFUCHSIA*
     * returns VkResult
     */
    public function vkImportSemaphoreZirconHandleFUCHSIA(
        struct\VkDevice $device,
        util\ObjectPointer $pImportSemaphoreZirconHandleInfo,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pImportSemaphoreZirconHandleInfo;
        $cValue = $phpValue->cdata;
        $pImportSemaphoreZirconHandleInfoC = $cValue;
        $cValue = $this->ffi->vkImportSemaphoreZirconHandleFUCHSIA(
            $deviceC,
            $pImportSemaphoreZirconHandleInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceExternalFenceInfo> $pExternalFenceInfo const VkPhysicalDeviceExternalFenceInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkExternalFenceProperties> $pExternalFenceProperties VkExternalFenceProperties*
     */
    public function vkGetPhysicalDeviceExternalFenceProperties(
        struct\VkPhysicalDevice $physicalDevice,
        util\ObjectPointer $pExternalFenceInfo,
        util\ObjectPointer $pExternalFenceProperties,
    ): void
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pExternalFenceInfo;
        $cValue = $phpValue->cdata;
        $pExternalFenceInfoC = $cValue;
        $phpValue = $pExternalFenceProperties;
        $cValue = $phpValue->cdata;
        $pExternalFencePropertiesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceExternalFenceProperties(
            $physicalDeviceC,
            $pExternalFenceInfoC,
            $pExternalFencePropertiesC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkFenceGetWin32HandleInfoKHR> $pGetWin32HandleInfo const VkFenceGetWin32HandleInfoKHR*
     * @param \iggyvolz\vulkan\util\Pointer $pHandle HANDLE*
     * returns VkResult
     */
    public function vkGetFenceWin32HandleKHR(
        struct\VkDevice $device,
        util\ObjectPointer $pGetWin32HandleInfo,
        util\Pointer $pHandle,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pGetWin32HandleInfo;
        $cValue = $phpValue->cdata;
        $pGetWin32HandleInfoC = $cValue;
        $phpValue = $pHandle;
        $cValue = $phpValue->cdata;
        $pHandleC = $cValue;
        $cValue = $this->ffi->vkGetFenceWin32HandleKHR(
            $deviceC,
            $pGetWin32HandleInfoC,
            $pHandleC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImportFenceWin32HandleInfoKHR> $pImportFenceWin32HandleInfo const VkImportFenceWin32HandleInfoKHR*
     * returns VkResult
     */
    public function vkImportFenceWin32HandleKHR(
        struct\VkDevice $device,
        util\ObjectPointer $pImportFenceWin32HandleInfo,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pImportFenceWin32HandleInfo;
        $cValue = $phpValue->cdata;
        $pImportFenceWin32HandleInfoC = $cValue;
        $cValue = $this->ffi->vkImportFenceWin32HandleKHR(
            $deviceC,
            $pImportFenceWin32HandleInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkFenceGetFdInfoKHR> $pGetFdInfo const VkFenceGetFdInfoKHR*
     * @param \iggyvolz\vulkan\util\IntPointer $pFd int*
     * returns VkResult
     */
    public function vkGetFenceFdKHR(
        struct\VkDevice $device,
        util\ObjectPointer $pGetFdInfo,
        util\IntPointer $pFd,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pGetFdInfo;
        $cValue = $phpValue->cdata;
        $pGetFdInfoC = $cValue;
        $phpValue = $pFd;
        $cValue = $phpValue->cdata;
        $pFdC = $cValue;
        $cValue = $this->ffi->vkGetFenceFdKHR(
            $deviceC,
            $pGetFdInfoC,
            $pFdC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImportFenceFdInfoKHR> $pImportFenceFdInfo const VkImportFenceFdInfoKHR*
     * returns VkResult
     */
    public function vkImportFenceFdKHR(struct\VkDevice $device, util\ObjectPointer $pImportFenceFdInfo): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pImportFenceFdInfo;
        $cValue = $phpValue->cdata;
        $pImportFenceFdInfoC = $cValue;
        $cValue = $this->ffi->vkImportFenceFdKHR(
            $deviceC,
            $pImportFenceFdInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkFenceGetSciSyncInfoNV> $pGetSciSyncHandleInfo const VkFenceGetSciSyncInfoNV*
     * @param \iggyvolz\vulkan\util\Pointer $pHandle void*
     * returns VkResult
     */
    public function vkGetFenceSciSyncFenceNV(
        struct\VkDevice $device,
        util\ObjectPointer $pGetSciSyncHandleInfo,
        util\Pointer $pHandle,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pGetSciSyncHandleInfo;
        $cValue = $phpValue->cdata;
        $pGetSciSyncHandleInfoC = $cValue;
        $phpValue = $pHandle;
        $cValue = $phpValue->cdata;
        $pHandleC = $cValue;
        $cValue = $this->ffi->vkGetFenceSciSyncFenceNV(
            $deviceC,
            $pGetSciSyncHandleInfoC,
            $pHandleC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkFenceGetSciSyncInfoNV> $pGetSciSyncHandleInfo const VkFenceGetSciSyncInfoNV*
     * @param \iggyvolz\vulkan\util\Pointer $pHandle void*
     * returns VkResult
     */
    public function vkGetFenceSciSyncObjNV(
        struct\VkDevice $device,
        util\ObjectPointer $pGetSciSyncHandleInfo,
        util\Pointer $pHandle,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pGetSciSyncHandleInfo;
        $cValue = $phpValue->cdata;
        $pGetSciSyncHandleInfoC = $cValue;
        $phpValue = $pHandle;
        $cValue = $phpValue->cdata;
        $pHandleC = $cValue;
        $cValue = $this->ffi->vkGetFenceSciSyncObjNV(
            $deviceC,
            $pGetSciSyncHandleInfoC,
            $pHandleC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImportFenceSciSyncInfoNV> $pImportFenceSciSyncInfo const VkImportFenceSciSyncInfoNV*
     * returns VkResult
     */
    public function vkImportFenceSciSyncFenceNV(
        struct\VkDevice $device,
        util\ObjectPointer $pImportFenceSciSyncInfo,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pImportFenceSciSyncInfo;
        $cValue = $phpValue->cdata;
        $pImportFenceSciSyncInfoC = $cValue;
        $cValue = $this->ffi->vkImportFenceSciSyncFenceNV(
            $deviceC,
            $pImportFenceSciSyncInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImportFenceSciSyncInfoNV> $pImportFenceSciSyncInfo const VkImportFenceSciSyncInfoNV*
     * returns VkResult
     */
    public function vkImportFenceSciSyncObjNV(
        struct\VkDevice $device,
        util\ObjectPointer $pImportFenceSciSyncInfo,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pImportFenceSciSyncInfo;
        $cValue = $phpValue->cdata;
        $pImportFenceSciSyncInfoC = $cValue;
        $cValue = $this->ffi->vkImportFenceSciSyncObjNV(
            $deviceC,
            $pImportFenceSciSyncInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSemaphoreGetSciSyncInfoNV> $pGetSciSyncInfo const VkSemaphoreGetSciSyncInfoNV*
     * @param \iggyvolz\vulkan\util\Pointer $pHandle void*
     * returns VkResult
     */
    public function vkGetSemaphoreSciSyncObjNV(
        struct\VkDevice $device,
        util\ObjectPointer $pGetSciSyncInfo,
        util\Pointer $pHandle,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pGetSciSyncInfo;
        $cValue = $phpValue->cdata;
        $pGetSciSyncInfoC = $cValue;
        $phpValue = $pHandle;
        $cValue = $phpValue->cdata;
        $pHandleC = $cValue;
        $cValue = $this->ffi->vkGetSemaphoreSciSyncObjNV(
            $deviceC,
            $pGetSciSyncInfoC,
            $pHandleC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImportSemaphoreSciSyncInfoNV> $pImportSemaphoreSciSyncInfo const VkImportSemaphoreSciSyncInfoNV*
     * returns VkResult
     */
    public function vkImportSemaphoreSciSyncObjNV(
        struct\VkDevice $device,
        util\ObjectPointer $pImportSemaphoreSciSyncInfo,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pImportSemaphoreSciSyncInfo;
        $cValue = $phpValue->cdata;
        $pImportSemaphoreSciSyncInfoC = $cValue;
        $cValue = $this->ffi->vkImportSemaphoreSciSyncObjNV(
            $deviceC,
            $pImportSemaphoreSciSyncInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSciSyncAttributesInfoNV> $pSciSyncAttributesInfo const VkSciSyncAttributesInfoNV*
     * @param mixed $pAttributes NvSciSyncAttrList
     * returns VkResult
     */
    public function vkGetPhysicalDeviceSciSyncAttributesNV(
        struct\VkPhysicalDevice $physicalDevice,
        util\ObjectPointer $pSciSyncAttributesInfo,
        mixed $pAttributes,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pSciSyncAttributesInfo;
        $cValue = $phpValue->cdata;
        $pSciSyncAttributesInfoC = $cValue;
        $phpValue = $pAttributes;
        throw new \LogicException("Dummy transformer!");
        $pAttributesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceSciSyncAttributesNV(
            $physicalDeviceC,
            $pSciSyncAttributesInfoC,
            $pAttributesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSemaphoreSciSyncPoolCreateInfoNV> $pCreateInfo const VkSemaphoreSciSyncPoolCreateInfoNV*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSemaphoreSciSyncPoolNV> $pSemaphorePool VkSemaphoreSciSyncPoolNV*
     * returns VkResult
     */
    public function vkCreateSemaphoreSciSyncPoolNV(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pSemaphorePool,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSemaphorePool;
        $cValue = $phpValue->cdata;
        $pSemaphorePoolC = $cValue;
        $cValue = $this->ffi->vkCreateSemaphoreSciSyncPoolNV(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pSemaphorePoolC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkSemaphoreSciSyncPoolNV $semaphorePool VkSemaphoreSciSyncPoolNV
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroySemaphoreSciSyncPoolNV(
        struct\VkDevice $device,
        struct\VkSemaphoreSciSyncPoolNV $semaphorePool,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $semaphorePool;
        $cValue = $phpValue->cdata;
        $semaphorePoolC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroySemaphoreSciSyncPoolNV(
            $deviceC,
            $semaphorePoolC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \\iggyvolz\vulkan\struct\VkDisplayKHR $display VkDisplayKHR
     * returns VkResult
     */
    public function vkReleaseDisplayEXT(
        struct\VkPhysicalDevice $physicalDevice,
        struct\VkDisplayKHR $display,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $display;
        $cValue = $phpValue->cdata;
        $displayC = $cValue;
        $cValue = $this->ffi->vkReleaseDisplayEXT(
            $physicalDeviceC,
            $displayC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\Pointer $dpy Display*
     * @param \\iggyvolz\vulkan\struct\VkDisplayKHR $display VkDisplayKHR
     * returns VkResult
     */
    public function vkAcquireXlibDisplayEXT(
        struct\VkPhysicalDevice $physicalDevice,
        util\Pointer $dpy,
        struct\VkDisplayKHR $display,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $dpy;
        $cValue = $phpValue->cdata;
        $dpyC = $cValue;
        $phpValue = $display;
        $cValue = $phpValue->cdata;
        $displayC = $cValue;
        $cValue = $this->ffi->vkAcquireXlibDisplayEXT(
            $physicalDeviceC,
            $dpyC,
            $displayC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\Pointer $dpy Display*
     * @param mixed $rrOutput RROutput
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplayKHR> $pDisplay VkDisplayKHR*
     * returns VkResult
     */
    public function vkGetRandROutputDisplayEXT(
        struct\VkPhysicalDevice $physicalDevice,
        util\Pointer $dpy,
        mixed $rrOutput,
        util\ObjectPointer $pDisplay,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $dpy;
        $cValue = $phpValue->cdata;
        $dpyC = $cValue;
        $phpValue = $rrOutput;
        throw new \LogicException("Dummy transformer!");
        $rrOutputC = $cValue;
        $phpValue = $pDisplay;
        $cValue = $phpValue->cdata;
        $pDisplayC = $cValue;
        $cValue = $this->ffi->vkGetRandROutputDisplayEXT(
            $physicalDeviceC,
            $dpyC,
            $rrOutputC,
            $pDisplayC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \\iggyvolz\vulkan\struct\VkDisplayKHR $display VkDisplayKHR
     * returns VkResult
     */
    public function vkAcquireWinrtDisplayNV(
        struct\VkPhysicalDevice $physicalDevice,
        struct\VkDisplayKHR $display,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $display;
        $cValue = $phpValue->cdata;
        $displayC = $cValue;
        $cValue = $this->ffi->vkAcquireWinrtDisplayNV(
            $physicalDeviceC,
            $displayC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param int $deviceRelativeId uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplayKHR> $pDisplay VkDisplayKHR*
     * returns VkResult
     */
    public function vkGetWinrtDisplayNV(
        struct\VkPhysicalDevice $physicalDevice,
        int $deviceRelativeId,
        util\ObjectPointer $pDisplay,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $deviceRelativeId;
        $cValue = $phpValue;
        $deviceRelativeIdC = $cValue;
        $phpValue = $pDisplay;
        $cValue = $phpValue->cdata;
        $pDisplayC = $cValue;
        $cValue = $this->ffi->vkGetWinrtDisplayNV(
            $physicalDeviceC,
            $deviceRelativeIdC,
            $pDisplayC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkDisplayKHR $display VkDisplayKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplayPowerInfoEXT> $pDisplayPowerInfo const VkDisplayPowerInfoEXT*
     * returns VkResult
     */
    public function vkDisplayPowerControlEXT(
        struct\VkDevice $device,
        struct\VkDisplayKHR $display,
        util\ObjectPointer $pDisplayPowerInfo,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $display;
        $cValue = $phpValue->cdata;
        $displayC = $cValue;
        $phpValue = $pDisplayPowerInfo;
        $cValue = $phpValue->cdata;
        $pDisplayPowerInfoC = $cValue;
        $cValue = $this->ffi->vkDisplayPowerControlEXT(
            $deviceC,
            $displayC,
            $pDisplayPowerInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDeviceEventInfoEXT> $pDeviceEventInfo const VkDeviceEventInfoEXT*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkFence> $pFence VkFence*
     * returns VkResult
     */
    public function vkRegisterDeviceEventEXT(
        struct\VkDevice $device,
        util\ObjectPointer $pDeviceEventInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pFence,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pDeviceEventInfo;
        $cValue = $phpValue->cdata;
        $pDeviceEventInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pFence;
        $cValue = $phpValue->cdata;
        $pFenceC = $cValue;
        $cValue = $this->ffi->vkRegisterDeviceEventEXT(
            $deviceC,
            $pDeviceEventInfoC,
            $pAllocatorC,
            $pFenceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkDisplayKHR $display VkDisplayKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplayEventInfoEXT> $pDisplayEventInfo const VkDisplayEventInfoEXT*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkFence> $pFence VkFence*
     * returns VkResult
     */
    public function vkRegisterDisplayEventEXT(
        struct\VkDevice $device,
        struct\VkDisplayKHR $display,
        util\ObjectPointer $pDisplayEventInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pFence,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $display;
        $cValue = $phpValue->cdata;
        $displayC = $cValue;
        $phpValue = $pDisplayEventInfo;
        $cValue = $phpValue->cdata;
        $pDisplayEventInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pFence;
        $cValue = $phpValue->cdata;
        $pFenceC = $cValue;
        $cValue = $this->ffi->vkRegisterDisplayEventEXT(
            $deviceC,
            $displayC,
            $pDisplayEventInfoC,
            $pAllocatorC,
            $pFenceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain VkSwapchainKHR
     * @param \\iggyvolz\vulkan\enum\VkSurfaceCounterFlagBitsEXT $counter VkSurfaceCounterFlagBitsEXT
     * @param \iggyvolz\vulkan\util\IntPointer $pCounterValue uint64_t*
     * returns VkResult
     */
    public function vkGetSwapchainCounterEXT(
        struct\VkDevice $device,
        struct\VkSwapchainKHR $swapchain,
        enum\VkSurfaceCounterFlagBitsEXT $counter,
        util\IntPointer $pCounterValue,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $swapchain;
        $cValue = $phpValue->cdata;
        $swapchainC = $cValue;
        $phpValue = $counter;
        $cValue = $phpValue->value;
        $counterC = $cValue;
        $phpValue = $pCounterValue;
        $cValue = $phpValue->cdata;
        $pCounterValueC = $cValue;
        $cValue = $this->ffi->vkGetSwapchainCounterEXT(
            $deviceC,
            $swapchainC,
            $counterC,
            $pCounterValueC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \\iggyvolz\vulkan\struct\VkSurfaceKHR $surface VkSurfaceKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceCapabilities2EXT> $pSurfaceCapabilities VkSurfaceCapabilities2EXT*
     * returns VkResult
     */
    public function vkGetPhysicalDeviceSurfaceCapabilities2EXT(
        struct\VkPhysicalDevice $physicalDevice,
        struct\VkSurfaceKHR $surface,
        util\ObjectPointer $pSurfaceCapabilities,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $surface;
        $cValue = $phpValue->cdata;
        $surfaceC = $cValue;
        $phpValue = $pSurfaceCapabilities;
        $cValue = $phpValue->cdata;
        $pSurfaceCapabilitiesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceSurfaceCapabilities2EXT(
            $physicalDeviceC,
            $surfaceC,
            $pSurfaceCapabilitiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkInstance $instance VkInstance
     * @param \iggyvolz\vulkan\util\IntPointer $pPhysicalDeviceGroupCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceGroupProperties> $pPhysicalDeviceGroupProperties VkPhysicalDeviceGroupProperties*
     * returns VkResult
     */
    public function vkEnumeratePhysicalDeviceGroups(
        struct\VkInstance $instance,
        util\IntPointer $pPhysicalDeviceGroupCount,
        util\ObjectPointer $pPhysicalDeviceGroupProperties,
    ): enum\VkResult
    {
        $phpValue = $instance;
        $cValue = $phpValue->cdata;
        $instanceC = $cValue;
        $phpValue = $pPhysicalDeviceGroupCount;
        $cValue = $phpValue->cdata;
        $pPhysicalDeviceGroupCountC = $cValue;
        $phpValue = $pPhysicalDeviceGroupProperties;
        $cValue = $phpValue->cdata;
        $pPhysicalDeviceGroupPropertiesC = $cValue;
        $cValue = $this->ffi->vkEnumeratePhysicalDeviceGroups(
            $instanceC,
            $pPhysicalDeviceGroupCountC,
            $pPhysicalDeviceGroupPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param int $heapIndex uint32_t
     * @param int $localDeviceIndex uint32_t
     * @param int $remoteDeviceIndex uint32_t
     * @param \iggyvolz\vulkan\util\Pointer $pPeerMemoryFeatures VkPeerMemoryFeatureFlags*
     */
    public function vkGetDeviceGroupPeerMemoryFeatures(
        struct\VkDevice $device,
        int $heapIndex,
        int $localDeviceIndex,
        int $remoteDeviceIndex,
        util\Pointer $pPeerMemoryFeatures,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $heapIndex;
        $cValue = $phpValue;
        $heapIndexC = $cValue;
        $phpValue = $localDeviceIndex;
        $cValue = $phpValue;
        $localDeviceIndexC = $cValue;
        $phpValue = $remoteDeviceIndex;
        $cValue = $phpValue;
        $remoteDeviceIndexC = $cValue;
        $phpValue = $pPeerMemoryFeatures;
        $cValue = $phpValue->cdata;
        $pPeerMemoryFeaturesC = $cValue;
        $cValue = $this->ffi->vkGetDeviceGroupPeerMemoryFeatures(
            $deviceC,
            $heapIndexC,
            $localDeviceIndexC,
            $remoteDeviceIndexC,
            $pPeerMemoryFeaturesC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param int $bindInfoCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBindBufferMemoryInfo> $pBindInfos const VkBindBufferMemoryInfo*
     * returns VkResult
     */
    public function vkBindBufferMemory2(
        struct\VkDevice $device,
        int $bindInfoCount,
        util\ObjectPointer $pBindInfos,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $bindInfoCount;
        $cValue = $phpValue;
        $bindInfoCountC = $cValue;
        $phpValue = $pBindInfos;
        $cValue = $phpValue->cdata;
        $pBindInfosC = $cValue;
        $cValue = $this->ffi->vkBindBufferMemory2(
            $deviceC,
            $bindInfoCountC,
            $pBindInfosC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param int $bindInfoCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBindImageMemoryInfo> $pBindInfos const VkBindImageMemoryInfo*
     * returns VkResult
     */
    public function vkBindImageMemory2(
        struct\VkDevice $device,
        int $bindInfoCount,
        util\ObjectPointer $pBindInfos,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $bindInfoCount;
        $cValue = $phpValue;
        $bindInfoCountC = $cValue;
        $phpValue = $pBindInfos;
        $cValue = $phpValue->cdata;
        $pBindInfosC = $cValue;
        $cValue = $this->ffi->vkBindImageMemory2(
            $deviceC,
            $bindInfoCountC,
            $pBindInfosC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $deviceMask uint32_t
     */
    public function vkCmdSetDeviceMask(struct\VkCommandBuffer $commandBuffer, int $deviceMask): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $deviceMask;
        $cValue = $phpValue;
        $deviceMaskC = $cValue;
        $cValue = $this->ffi->vkCmdSetDeviceMask(
            $commandBufferC,
            $deviceMaskC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDeviceGroupPresentCapabilitiesKHR> $pDeviceGroupPresentCapabilities VkDeviceGroupPresentCapabilitiesKHR*
     * returns VkResult
     */
    public function vkGetDeviceGroupPresentCapabilitiesKHR(
        struct\VkDevice $device,
        util\ObjectPointer $pDeviceGroupPresentCapabilities,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pDeviceGroupPresentCapabilities;
        $cValue = $phpValue->cdata;
        $pDeviceGroupPresentCapabilitiesC = $cValue;
        $cValue = $this->ffi->vkGetDeviceGroupPresentCapabilitiesKHR(
            $deviceC,
            $pDeviceGroupPresentCapabilitiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkSurfaceKHR $surface VkSurfaceKHR
     * @param \iggyvolz\vulkan\util\Pointer $pModes VkDeviceGroupPresentModeFlagsKHR*
     * returns VkResult
     */
    public function vkGetDeviceGroupSurfacePresentModesKHR(
        struct\VkDevice $device,
        struct\VkSurfaceKHR $surface,
        util\Pointer $pModes,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $surface;
        $cValue = $phpValue->cdata;
        $surfaceC = $cValue;
        $phpValue = $pModes;
        $cValue = $phpValue->cdata;
        $pModesC = $cValue;
        $cValue = $this->ffi->vkGetDeviceGroupSurfacePresentModesKHR(
            $deviceC,
            $surfaceC,
            $pModesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAcquireNextImageInfoKHR> $pAcquireInfo const VkAcquireNextImageInfoKHR*
     * @param \iggyvolz\vulkan\util\IntPointer $pImageIndex uint32_t*
     * returns VkResult
     */
    public function vkAcquireNextImage2KHR(
        struct\VkDevice $device,
        util\ObjectPointer $pAcquireInfo,
        util\IntPointer $pImageIndex,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pAcquireInfo;
        $cValue = $phpValue->cdata;
        $pAcquireInfoC = $cValue;
        $phpValue = $pImageIndex;
        $cValue = $phpValue->cdata;
        $pImageIndexC = $cValue;
        $cValue = $this->ffi->vkAcquireNextImage2KHR(
            $deviceC,
            $pAcquireInfoC,
            $pImageIndexC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $baseGroupX uint32_t
     * @param int $baseGroupY uint32_t
     * @param int $baseGroupZ uint32_t
     * @param int $groupCountX uint32_t
     * @param int $groupCountY uint32_t
     * @param int $groupCountZ uint32_t
     */
    public function vkCmdDispatchBase(
        struct\VkCommandBuffer $commandBuffer,
        int $baseGroupX,
        int $baseGroupY,
        int $baseGroupZ,
        int $groupCountX,
        int $groupCountY,
        int $groupCountZ,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $baseGroupX;
        $cValue = $phpValue;
        $baseGroupXC = $cValue;
        $phpValue = $baseGroupY;
        $cValue = $phpValue;
        $baseGroupYC = $cValue;
        $phpValue = $baseGroupZ;
        $cValue = $phpValue;
        $baseGroupZC = $cValue;
        $phpValue = $groupCountX;
        $cValue = $phpValue;
        $groupCountXC = $cValue;
        $phpValue = $groupCountY;
        $cValue = $phpValue;
        $groupCountYC = $cValue;
        $phpValue = $groupCountZ;
        $cValue = $phpValue;
        $groupCountZC = $cValue;
        $cValue = $this->ffi->vkCmdDispatchBase(
            $commandBufferC,
            $baseGroupXC,
            $baseGroupYC,
            $baseGroupZC,
            $groupCountXC,
            $groupCountYC,
            $groupCountZC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \\iggyvolz\vulkan\struct\VkSurfaceKHR $surface VkSurfaceKHR
     * @param \iggyvolz\vulkan\util\IntPointer $pRectCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRect2D> $pRects VkRect2D*
     * returns VkResult
     */
    public function vkGetPhysicalDevicePresentRectanglesKHR(
        struct\VkPhysicalDevice $physicalDevice,
        struct\VkSurfaceKHR $surface,
        util\IntPointer $pRectCount,
        util\ObjectPointer $pRects,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $surface;
        $cValue = $phpValue->cdata;
        $surfaceC = $cValue;
        $phpValue = $pRectCount;
        $cValue = $phpValue->cdata;
        $pRectCountC = $cValue;
        $phpValue = $pRects;
        $cValue = $phpValue->cdata;
        $pRectsC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDevicePresentRectanglesKHR(
            $physicalDeviceC,
            $surfaceC,
            $pRectCountC,
            $pRectsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDescriptorUpdateTemplateCreateInfo> $pCreateInfo const VkDescriptorUpdateTemplateCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDescriptorUpdateTemplate> $pDescriptorUpdateTemplate VkDescriptorUpdateTemplate*
     * returns VkResult
     */
    public function vkCreateDescriptorUpdateTemplate(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pDescriptorUpdateTemplate,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pDescriptorUpdateTemplate;
        $cValue = $phpValue->cdata;
        $pDescriptorUpdateTemplateC = $cValue;
        $cValue = $this->ffi->vkCreateDescriptorUpdateTemplate(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pDescriptorUpdateTemplateC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkDescriptorUpdateTemplate $descriptorUpdateTemplate VkDescriptorUpdateTemplate
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyDescriptorUpdateTemplate(
        struct\VkDevice $device,
        struct\VkDescriptorUpdateTemplate $descriptorUpdateTemplate,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $descriptorUpdateTemplate;
        $cValue = $phpValue->cdata;
        $descriptorUpdateTemplateC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyDescriptorUpdateTemplate(
            $deviceC,
            $descriptorUpdateTemplateC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkDescriptorSet $descriptorSet VkDescriptorSet
     * @param \\iggyvolz\vulkan\struct\VkDescriptorUpdateTemplate $descriptorUpdateTemplate VkDescriptorUpdateTemplate
     * @param \iggyvolz\vulkan\util\Pointer $pData const void*
     */
    public function vkUpdateDescriptorSetWithTemplate(
        struct\VkDevice $device,
        struct\VkDescriptorSet $descriptorSet,
        struct\VkDescriptorUpdateTemplate $descriptorUpdateTemplate,
        util\Pointer $pData,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $descriptorSet;
        $cValue = $phpValue->cdata;
        $descriptorSetC = $cValue;
        $phpValue = $descriptorUpdateTemplate;
        $cValue = $phpValue->cdata;
        $descriptorUpdateTemplateC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $cValue = $this->ffi->vkUpdateDescriptorSetWithTemplate(
            $deviceC,
            $descriptorSetC,
            $descriptorUpdateTemplateC,
            $pDataC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkDescriptorUpdateTemplate $descriptorUpdateTemplate VkDescriptorUpdateTemplate
     * @param \\iggyvolz\vulkan\struct\VkPipelineLayout $layout VkPipelineLayout
     * @param int $set uint32_t
     * @param \iggyvolz\vulkan\util\Pointer $pData const void*
     */
    public function vkCmdPushDescriptorSetWithTemplateKHR(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkDescriptorUpdateTemplate $descriptorUpdateTemplate,
        struct\VkPipelineLayout $layout,
        int $set,
        util\Pointer $pData,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $descriptorUpdateTemplate;
        $cValue = $phpValue->cdata;
        $descriptorUpdateTemplateC = $cValue;
        $phpValue = $layout;
        $cValue = $phpValue->cdata;
        $layoutC = $cValue;
        $phpValue = $set;
        $cValue = $phpValue;
        $setC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $cValue = $this->ffi->vkCmdPushDescriptorSetWithTemplateKHR(
            $commandBufferC,
            $descriptorUpdateTemplateC,
            $layoutC,
            $setC,
            $pDataC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param int $swapchainCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSwapchainKHR> $pSwapchains const VkSwapchainKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkHdrMetadataEXT> $pMetadata const VkHdrMetadataEXT*
     */
    public function vkSetHdrMetadataEXT(
        struct\VkDevice $device,
        int $swapchainCount,
        util\ObjectPointer $pSwapchains,
        util\ObjectPointer $pMetadata,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $swapchainCount;
        $cValue = $phpValue;
        $swapchainCountC = $cValue;
        $phpValue = $pSwapchains;
        $cValue = $phpValue->cdata;
        $pSwapchainsC = $cValue;
        $phpValue = $pMetadata;
        $cValue = $phpValue->cdata;
        $pMetadataC = $cValue;
        $cValue = $this->ffi->vkSetHdrMetadataEXT(
            $deviceC,
            $swapchainCountC,
            $pSwapchainsC,
            $pMetadataC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain VkSwapchainKHR
     * returns VkResult
     */
    public function vkGetSwapchainStatusKHR(struct\VkDevice $device, struct\VkSwapchainKHR $swapchain): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $swapchain;
        $cValue = $phpValue->cdata;
        $swapchainC = $cValue;
        $cValue = $this->ffi->vkGetSwapchainStatusKHR(
            $deviceC,
            $swapchainC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain VkSwapchainKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRefreshCycleDurationGOOGLE> $pDisplayTimingProperties VkRefreshCycleDurationGOOGLE*
     * returns VkResult
     */
    public function vkGetRefreshCycleDurationGOOGLE(
        struct\VkDevice $device,
        struct\VkSwapchainKHR $swapchain,
        util\ObjectPointer $pDisplayTimingProperties,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $swapchain;
        $cValue = $phpValue->cdata;
        $swapchainC = $cValue;
        $phpValue = $pDisplayTimingProperties;
        $cValue = $phpValue->cdata;
        $pDisplayTimingPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetRefreshCycleDurationGOOGLE(
            $deviceC,
            $swapchainC,
            $pDisplayTimingPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain VkSwapchainKHR
     * @param \iggyvolz\vulkan\util\IntPointer $pPresentationTimingCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPastPresentationTimingGOOGLE> $pPresentationTimings VkPastPresentationTimingGOOGLE*
     * returns VkResult
     */
    public function vkGetPastPresentationTimingGOOGLE(
        struct\VkDevice $device,
        struct\VkSwapchainKHR $swapchain,
        util\IntPointer $pPresentationTimingCount,
        util\ObjectPointer $pPresentationTimings,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $swapchain;
        $cValue = $phpValue->cdata;
        $swapchainC = $cValue;
        $phpValue = $pPresentationTimingCount;
        $cValue = $phpValue->cdata;
        $pPresentationTimingCountC = $cValue;
        $phpValue = $pPresentationTimings;
        $cValue = $phpValue->cdata;
        $pPresentationTimingsC = $cValue;
        $cValue = $this->ffi->vkGetPastPresentationTimingGOOGLE(
            $deviceC,
            $swapchainC,
            $pPresentationTimingCountC,
            $pPresentationTimingsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkInstance $instance VkInstance
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkIOSSurfaceCreateInfoMVK> $pCreateInfo const VkIOSSurfaceCreateInfoMVK*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceKHR> $pSurface VkSurfaceKHR*
     * returns VkResult
     */
    public function vkCreateIOSSurfaceMVK(
        struct\VkInstance $instance,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pSurface,
    ): enum\VkResult
    {
        $phpValue = $instance;
        $cValue = $phpValue->cdata;
        $instanceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSurface;
        $cValue = $phpValue->cdata;
        $pSurfaceC = $cValue;
        $cValue = $this->ffi->vkCreateIOSSurfaceMVK(
            $instanceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pSurfaceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkInstance $instance VkInstance
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMacOSSurfaceCreateInfoMVK> $pCreateInfo const VkMacOSSurfaceCreateInfoMVK*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceKHR> $pSurface VkSurfaceKHR*
     * returns VkResult
     */
    public function vkCreateMacOSSurfaceMVK(
        struct\VkInstance $instance,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pSurface,
    ): enum\VkResult
    {
        $phpValue = $instance;
        $cValue = $phpValue->cdata;
        $instanceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSurface;
        $cValue = $phpValue->cdata;
        $pSurfaceC = $cValue;
        $cValue = $this->ffi->vkCreateMacOSSurfaceMVK(
            $instanceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pSurfaceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkInstance $instance VkInstance
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMetalSurfaceCreateInfoEXT> $pCreateInfo const VkMetalSurfaceCreateInfoEXT*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceKHR> $pSurface VkSurfaceKHR*
     * returns VkResult
     */
    public function vkCreateMetalSurfaceEXT(
        struct\VkInstance $instance,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pSurface,
    ): enum\VkResult
    {
        $phpValue = $instance;
        $cValue = $phpValue->cdata;
        $instanceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSurface;
        $cValue = $phpValue->cdata;
        $pSurfaceC = $cValue;
        $cValue = $this->ffi->vkCreateMetalSurfaceEXT(
            $instanceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pSurfaceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $firstViewport uint32_t
     * @param int $viewportCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkViewportWScalingNV> $pViewportWScalings const VkViewportWScalingNV*
     */
    public function vkCmdSetViewportWScalingNV(
        struct\VkCommandBuffer $commandBuffer,
        int $firstViewport,
        int $viewportCount,
        util\ObjectPointer $pViewportWScalings,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $firstViewport;
        $cValue = $phpValue;
        $firstViewportC = $cValue;
        $phpValue = $viewportCount;
        $cValue = $phpValue;
        $viewportCountC = $cValue;
        $phpValue = $pViewportWScalings;
        $cValue = $phpValue->cdata;
        $pViewportWScalingsC = $cValue;
        $cValue = $this->ffi->vkCmdSetViewportWScalingNV(
            $commandBufferC,
            $firstViewportC,
            $viewportCountC,
            $pViewportWScalingsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $firstDiscardRectangle uint32_t
     * @param int $discardRectangleCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRect2D> $pDiscardRectangles const VkRect2D*
     */
    public function vkCmdSetDiscardRectangleEXT(
        struct\VkCommandBuffer $commandBuffer,
        int $firstDiscardRectangle,
        int $discardRectangleCount,
        util\ObjectPointer $pDiscardRectangles,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $firstDiscardRectangle;
        $cValue = $phpValue;
        $firstDiscardRectangleC = $cValue;
        $phpValue = $discardRectangleCount;
        $cValue = $phpValue;
        $discardRectangleCountC = $cValue;
        $phpValue = $pDiscardRectangles;
        $cValue = $phpValue->cdata;
        $pDiscardRectanglesC = $cValue;
        $cValue = $this->ffi->vkCmdSetDiscardRectangleEXT(
            $commandBufferC,
            $firstDiscardRectangleC,
            $discardRectangleCountC,
            $pDiscardRectanglesC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param bool $discardRectangleEnable VkBool32
     */
    public function vkCmdSetDiscardRectangleEnableEXT(
        struct\VkCommandBuffer $commandBuffer,
        bool $discardRectangleEnable,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $discardRectangleEnable;
        $cValue = $phpValue ? 1 : 0;
        $discardRectangleEnableC = $cValue;
        $cValue = $this->ffi->vkCmdSetDiscardRectangleEnableEXT(
            $commandBufferC,
            $discardRectangleEnableC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\enum\VkDiscardRectangleModeEXT $discardRectangleMode VkDiscardRectangleModeEXT
     */
    public function vkCmdSetDiscardRectangleModeEXT(
        struct\VkCommandBuffer $commandBuffer,
        enum\VkDiscardRectangleModeEXT $discardRectangleMode,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $discardRectangleMode;
        $cValue = $phpValue->value;
        $discardRectangleModeC = $cValue;
        $cValue = $this->ffi->vkCmdSetDiscardRectangleModeEXT(
            $commandBufferC,
            $discardRectangleModeC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSampleLocationsInfoEXT> $pSampleLocationsInfo const VkSampleLocationsInfoEXT*
     */
    public function vkCmdSetSampleLocationsEXT(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pSampleLocationsInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pSampleLocationsInfo;
        $cValue = $phpValue->cdata;
        $pSampleLocationsInfoC = $cValue;
        $cValue = $this->ffi->vkCmdSetSampleLocationsEXT(
            $commandBufferC,
            $pSampleLocationsInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \\iggyvolz\vulkan\enum\VkSampleCountFlagBits $samples VkSampleCountFlagBits
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMultisamplePropertiesEXT> $pMultisampleProperties VkMultisamplePropertiesEXT*
     */
    public function vkGetPhysicalDeviceMultisamplePropertiesEXT(
        struct\VkPhysicalDevice $physicalDevice,
        enum\VkSampleCountFlagBits $samples,
        util\ObjectPointer $pMultisampleProperties,
    ): void
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $samples;
        $cValue = $phpValue->value;
        $samplesC = $cValue;
        $phpValue = $pMultisampleProperties;
        $cValue = $phpValue->cdata;
        $pMultisamplePropertiesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceMultisamplePropertiesEXT(
            $physicalDeviceC,
            $samplesC,
            $pMultisamplePropertiesC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceSurfaceInfo2KHR> $pSurfaceInfo const VkPhysicalDeviceSurfaceInfo2KHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceCapabilities2KHR> $pSurfaceCapabilities VkSurfaceCapabilities2KHR*
     * returns VkResult
     */
    public function vkGetPhysicalDeviceSurfaceCapabilities2KHR(
        struct\VkPhysicalDevice $physicalDevice,
        util\ObjectPointer $pSurfaceInfo,
        util\ObjectPointer $pSurfaceCapabilities,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pSurfaceInfo;
        $cValue = $phpValue->cdata;
        $pSurfaceInfoC = $cValue;
        $phpValue = $pSurfaceCapabilities;
        $cValue = $phpValue->cdata;
        $pSurfaceCapabilitiesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceSurfaceCapabilities2KHR(
            $physicalDeviceC,
            $pSurfaceInfoC,
            $pSurfaceCapabilitiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceSurfaceInfo2KHR> $pSurfaceInfo const VkPhysicalDeviceSurfaceInfo2KHR*
     * @param \iggyvolz\vulkan\util\IntPointer $pSurfaceFormatCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceFormat2KHR> $pSurfaceFormats VkSurfaceFormat2KHR*
     * returns VkResult
     */
    public function vkGetPhysicalDeviceSurfaceFormats2KHR(
        struct\VkPhysicalDevice $physicalDevice,
        util\ObjectPointer $pSurfaceInfo,
        util\IntPointer $pSurfaceFormatCount,
        util\ObjectPointer $pSurfaceFormats,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pSurfaceInfo;
        $cValue = $phpValue->cdata;
        $pSurfaceInfoC = $cValue;
        $phpValue = $pSurfaceFormatCount;
        $cValue = $phpValue->cdata;
        $pSurfaceFormatCountC = $cValue;
        $phpValue = $pSurfaceFormats;
        $cValue = $phpValue->cdata;
        $pSurfaceFormatsC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceSurfaceFormats2KHR(
            $physicalDeviceC,
            $pSurfaceInfoC,
            $pSurfaceFormatCountC,
            $pSurfaceFormatsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\IntPointer $pPropertyCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplayProperties2KHR> $pProperties VkDisplayProperties2KHR*
     * returns VkResult
     */
    public function vkGetPhysicalDeviceDisplayProperties2KHR(
        struct\VkPhysicalDevice $physicalDevice,
        util\IntPointer $pPropertyCount,
        util\ObjectPointer $pProperties,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pPropertyCount;
        $cValue = $phpValue->cdata;
        $pPropertyCountC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceDisplayProperties2KHR(
            $physicalDeviceC,
            $pPropertyCountC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\IntPointer $pPropertyCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplayPlaneProperties2KHR> $pProperties VkDisplayPlaneProperties2KHR*
     * returns VkResult
     */
    public function vkGetPhysicalDeviceDisplayPlaneProperties2KHR(
        struct\VkPhysicalDevice $physicalDevice,
        util\IntPointer $pPropertyCount,
        util\ObjectPointer $pProperties,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pPropertyCount;
        $cValue = $phpValue->cdata;
        $pPropertyCountC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceDisplayPlaneProperties2KHR(
            $physicalDeviceC,
            $pPropertyCountC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \\iggyvolz\vulkan\struct\VkDisplayKHR $display VkDisplayKHR
     * @param \iggyvolz\vulkan\util\IntPointer $pPropertyCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplayModeProperties2KHR> $pProperties VkDisplayModeProperties2KHR*
     * returns VkResult
     */
    public function vkGetDisplayModeProperties2KHR(
        struct\VkPhysicalDevice $physicalDevice,
        struct\VkDisplayKHR $display,
        util\IntPointer $pPropertyCount,
        util\ObjectPointer $pProperties,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $display;
        $cValue = $phpValue->cdata;
        $displayC = $cValue;
        $phpValue = $pPropertyCount;
        $cValue = $phpValue->cdata;
        $pPropertyCountC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetDisplayModeProperties2KHR(
            $physicalDeviceC,
            $displayC,
            $pPropertyCountC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplayPlaneInfo2KHR> $pDisplayPlaneInfo const VkDisplayPlaneInfo2KHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplayPlaneCapabilities2KHR> $pCapabilities VkDisplayPlaneCapabilities2KHR*
     * returns VkResult
     */
    public function vkGetDisplayPlaneCapabilities2KHR(
        struct\VkPhysicalDevice $physicalDevice,
        util\ObjectPointer $pDisplayPlaneInfo,
        util\ObjectPointer $pCapabilities,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pDisplayPlaneInfo;
        $cValue = $phpValue->cdata;
        $pDisplayPlaneInfoC = $cValue;
        $phpValue = $pCapabilities;
        $cValue = $phpValue->cdata;
        $pCapabilitiesC = $cValue;
        $cValue = $this->ffi->vkGetDisplayPlaneCapabilities2KHR(
            $physicalDeviceC,
            $pDisplayPlaneInfoC,
            $pCapabilitiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBufferMemoryRequirementsInfo2> $pInfo const VkBufferMemoryRequirementsInfo2*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryRequirements2> $pMemoryRequirements VkMemoryRequirements2*
     */
    public function vkGetBufferMemoryRequirements2(
        struct\VkDevice $device,
        util\ObjectPointer $pInfo,
        util\ObjectPointer $pMemoryRequirements,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $phpValue = $pMemoryRequirements;
        $cValue = $phpValue->cdata;
        $pMemoryRequirementsC = $cValue;
        $cValue = $this->ffi->vkGetBufferMemoryRequirements2(
            $deviceC,
            $pInfoC,
            $pMemoryRequirementsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageMemoryRequirementsInfo2> $pInfo const VkImageMemoryRequirementsInfo2*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryRequirements2> $pMemoryRequirements VkMemoryRequirements2*
     */
    public function vkGetImageMemoryRequirements2(
        struct\VkDevice $device,
        util\ObjectPointer $pInfo,
        util\ObjectPointer $pMemoryRequirements,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $phpValue = $pMemoryRequirements;
        $cValue = $phpValue->cdata;
        $pMemoryRequirementsC = $cValue;
        $cValue = $this->ffi->vkGetImageMemoryRequirements2(
            $deviceC,
            $pInfoC,
            $pMemoryRequirementsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageSparseMemoryRequirementsInfo2> $pInfo const VkImageSparseMemoryRequirementsInfo2*
     * @param \iggyvolz\vulkan\util\IntPointer $pSparseMemoryRequirementCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSparseImageMemoryRequirements2> $pSparseMemoryRequirements VkSparseImageMemoryRequirements2*
     */
    public function vkGetImageSparseMemoryRequirements2(
        struct\VkDevice $device,
        util\ObjectPointer $pInfo,
        util\IntPointer $pSparseMemoryRequirementCount,
        util\ObjectPointer $pSparseMemoryRequirements,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $phpValue = $pSparseMemoryRequirementCount;
        $cValue = $phpValue->cdata;
        $pSparseMemoryRequirementCountC = $cValue;
        $phpValue = $pSparseMemoryRequirements;
        $cValue = $phpValue->cdata;
        $pSparseMemoryRequirementsC = $cValue;
        $cValue = $this->ffi->vkGetImageSparseMemoryRequirements2(
            $deviceC,
            $pInfoC,
            $pSparseMemoryRequirementCountC,
            $pSparseMemoryRequirementsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDeviceBufferMemoryRequirements> $pInfo const VkDeviceBufferMemoryRequirements*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryRequirements2> $pMemoryRequirements VkMemoryRequirements2*
     */
    public function vkGetDeviceBufferMemoryRequirements(
        struct\VkDevice $device,
        util\ObjectPointer $pInfo,
        util\ObjectPointer $pMemoryRequirements,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $phpValue = $pMemoryRequirements;
        $cValue = $phpValue->cdata;
        $pMemoryRequirementsC = $cValue;
        $cValue = $this->ffi->vkGetDeviceBufferMemoryRequirements(
            $deviceC,
            $pInfoC,
            $pMemoryRequirementsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDeviceImageMemoryRequirements> $pInfo const VkDeviceImageMemoryRequirements*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryRequirements2> $pMemoryRequirements VkMemoryRequirements2*
     */
    public function vkGetDeviceImageMemoryRequirements(
        struct\VkDevice $device,
        util\ObjectPointer $pInfo,
        util\ObjectPointer $pMemoryRequirements,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $phpValue = $pMemoryRequirements;
        $cValue = $phpValue->cdata;
        $pMemoryRequirementsC = $cValue;
        $cValue = $this->ffi->vkGetDeviceImageMemoryRequirements(
            $deviceC,
            $pInfoC,
            $pMemoryRequirementsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDeviceImageMemoryRequirements> $pInfo const VkDeviceImageMemoryRequirements*
     * @param \iggyvolz\vulkan\util\IntPointer $pSparseMemoryRequirementCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSparseImageMemoryRequirements2> $pSparseMemoryRequirements VkSparseImageMemoryRequirements2*
     */
    public function vkGetDeviceImageSparseMemoryRequirements(
        struct\VkDevice $device,
        util\ObjectPointer $pInfo,
        util\IntPointer $pSparseMemoryRequirementCount,
        util\ObjectPointer $pSparseMemoryRequirements,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $phpValue = $pSparseMemoryRequirementCount;
        $cValue = $phpValue->cdata;
        $pSparseMemoryRequirementCountC = $cValue;
        $phpValue = $pSparseMemoryRequirements;
        $cValue = $phpValue->cdata;
        $pSparseMemoryRequirementsC = $cValue;
        $cValue = $this->ffi->vkGetDeviceImageSparseMemoryRequirements(
            $deviceC,
            $pInfoC,
            $pSparseMemoryRequirementCountC,
            $pSparseMemoryRequirementsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSamplerYcbcrConversionCreateInfo> $pCreateInfo const VkSamplerYcbcrConversionCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSamplerYcbcrConversion> $pYcbcrConversion VkSamplerYcbcrConversion*
     * returns VkResult
     */
    public function vkCreateSamplerYcbcrConversion(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pYcbcrConversion,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pYcbcrConversion;
        $cValue = $phpValue->cdata;
        $pYcbcrConversionC = $cValue;
        $cValue = $this->ffi->vkCreateSamplerYcbcrConversion(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pYcbcrConversionC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkSamplerYcbcrConversion $ycbcrConversion VkSamplerYcbcrConversion
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroySamplerYcbcrConversion(
        struct\VkDevice $device,
        struct\VkSamplerYcbcrConversion $ycbcrConversion,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $ycbcrConversion;
        $cValue = $phpValue->cdata;
        $ycbcrConversionC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroySamplerYcbcrConversion(
            $deviceC,
            $ycbcrConversionC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDeviceQueueInfo2> $pQueueInfo const VkDeviceQueueInfo2*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkQueue> $pQueue VkQueue*
     */
    public function vkGetDeviceQueue2(
        struct\VkDevice $device,
        util\ObjectPointer $pQueueInfo,
        util\ObjectPointer $pQueue,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pQueueInfo;
        $cValue = $phpValue->cdata;
        $pQueueInfoC = $cValue;
        $phpValue = $pQueue;
        $cValue = $phpValue->cdata;
        $pQueueC = $cValue;
        $cValue = $this->ffi->vkGetDeviceQueue2(
            $deviceC,
            $pQueueInfoC,
            $pQueueC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkValidationCacheCreateInfoEXT> $pCreateInfo const VkValidationCacheCreateInfoEXT*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkValidationCacheEXT> $pValidationCache VkValidationCacheEXT*
     * returns VkResult
     */
    public function vkCreateValidationCacheEXT(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pValidationCache,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pValidationCache;
        $cValue = $phpValue->cdata;
        $pValidationCacheC = $cValue;
        $cValue = $this->ffi->vkCreateValidationCacheEXT(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pValidationCacheC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkValidationCacheEXT $validationCache VkValidationCacheEXT
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyValidationCacheEXT(
        struct\VkDevice $device,
        struct\VkValidationCacheEXT $validationCache,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $validationCache;
        $cValue = $phpValue->cdata;
        $validationCacheC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyValidationCacheEXT(
            $deviceC,
            $validationCacheC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkValidationCacheEXT $validationCache VkValidationCacheEXT
     * @param \iggyvolz\vulkan\util\IntPointer $pDataSize size_t*
     * @param \iggyvolz\vulkan\util\Pointer $pData void*
     * returns VkResult
     */
    public function vkGetValidationCacheDataEXT(
        struct\VkDevice $device,
        struct\VkValidationCacheEXT $validationCache,
        util\IntPointer $pDataSize,
        util\Pointer $pData,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $validationCache;
        $cValue = $phpValue->cdata;
        $validationCacheC = $cValue;
        $phpValue = $pDataSize;
        $cValue = $phpValue->cdata;
        $pDataSizeC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $cValue = $this->ffi->vkGetValidationCacheDataEXT(
            $deviceC,
            $validationCacheC,
            $pDataSizeC,
            $pDataC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkValidationCacheEXT $dstCache VkValidationCacheEXT
     * @param int $srcCacheCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkValidationCacheEXT> $pSrcCaches const VkValidationCacheEXT*
     * returns VkResult
     */
    public function vkMergeValidationCachesEXT(
        struct\VkDevice $device,
        struct\VkValidationCacheEXT $dstCache,
        int $srcCacheCount,
        util\ObjectPointer $pSrcCaches,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $dstCache;
        $cValue = $phpValue->cdata;
        $dstCacheC = $cValue;
        $phpValue = $srcCacheCount;
        $cValue = $phpValue;
        $srcCacheCountC = $cValue;
        $phpValue = $pSrcCaches;
        $cValue = $phpValue->cdata;
        $pSrcCachesC = $cValue;
        $cValue = $this->ffi->vkMergeValidationCachesEXT(
            $deviceC,
            $dstCacheC,
            $srcCacheCountC,
            $pSrcCachesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDescriptorSetLayoutCreateInfo> $pCreateInfo const VkDescriptorSetLayoutCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDescriptorSetLayoutSupport> $pSupport VkDescriptorSetLayoutSupport*
     */
    public function vkGetDescriptorSetLayoutSupport(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pSupport,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pSupport;
        $cValue = $phpValue->cdata;
        $pSupportC = $cValue;
        $cValue = $this->ffi->vkGetDescriptorSetLayoutSupport(
            $deviceC,
            $pCreateInfoC,
            $pSupportC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\enum\VkFormat $format VkFormat
     * @param list<iggyvolz\vulkan\enum\VkImageUsageFlagBits> $imageUsage VkImageUsageFlags
     * @param \iggyvolz\vulkan\util\IntPointer $grallocUsage int*
     * returns VkResult
     */
    public function vkGetSwapchainGrallocUsageANDROID(
        struct\VkDevice $device,
        enum\VkFormat $format,
        array $imageUsage,
        util\IntPointer $grallocUsage,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $format;
        $cValue = $phpValue->value;
        $formatC = $cValue;
        $phpValue = $imageUsage;
        $cValue = \iggyvolz\vulkan\enum\VkImageUsageFlagBits::toInt(...$phpValue);
        $imageUsageC = $cValue;
        $phpValue = $grallocUsage;
        $cValue = $phpValue->cdata;
        $grallocUsageC = $cValue;
        $cValue = $this->ffi->vkGetSwapchainGrallocUsageANDROID(
            $deviceC,
            $formatC,
            $imageUsageC,
            $grallocUsageC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\enum\VkFormat $format VkFormat
     * @param list<iggyvolz\vulkan\enum\VkImageUsageFlagBits> $imageUsage VkImageUsageFlags
     * @param list<iggyvolz\vulkan\enum\VkSwapchainImageUsageFlagBitsANDROID> $swapchainImageUsage VkSwapchainImageUsageFlagsANDROID
     * @param \iggyvolz\vulkan\util\IntPointer $grallocConsumerUsage uint64_t*
     * @param \iggyvolz\vulkan\util\IntPointer $grallocProducerUsage uint64_t*
     * returns VkResult
     */
    public function vkGetSwapchainGrallocUsage2ANDROID(
        struct\VkDevice $device,
        enum\VkFormat $format,
        array $imageUsage,
        array $swapchainImageUsage,
        util\IntPointer $grallocConsumerUsage,
        util\IntPointer $grallocProducerUsage,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $format;
        $cValue = $phpValue->value;
        $formatC = $cValue;
        $phpValue = $imageUsage;
        $cValue = \iggyvolz\vulkan\enum\VkImageUsageFlagBits::toInt(...$phpValue);
        $imageUsageC = $cValue;
        $phpValue = $swapchainImageUsage;
        $cValue = \iggyvolz\vulkan\enum\VkSwapchainImageUsageFlagBitsANDROID::toInt(...$phpValue);
        $swapchainImageUsageC = $cValue;
        $phpValue = $grallocConsumerUsage;
        $cValue = $phpValue->cdata;
        $grallocConsumerUsageC = $cValue;
        $phpValue = $grallocProducerUsage;
        $cValue = $phpValue->cdata;
        $grallocProducerUsageC = $cValue;
        $cValue = $this->ffi->vkGetSwapchainGrallocUsage2ANDROID(
            $deviceC,
            $formatC,
            $imageUsageC,
            $swapchainImageUsageC,
            $grallocConsumerUsageC,
            $grallocProducerUsageC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkImage $image VkImage
     * @param int $nativeFenceFd int
     * @param \\iggyvolz\vulkan\struct\VkSemaphore $semaphore VkSemaphore
     * @param \\iggyvolz\vulkan\struct\VkFence $fence VkFence
     * returns VkResult
     */
    public function vkAcquireImageANDROID(
        struct\VkDevice $device,
        struct\VkImage $image,
        int $nativeFenceFd,
        struct\VkSemaphore $semaphore,
        struct\VkFence $fence,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $image;
        $cValue = $phpValue->cdata;
        $imageC = $cValue;
        $phpValue = $nativeFenceFd;
        $cValue = $phpValue;
        $nativeFenceFdC = $cValue;
        $phpValue = $semaphore;
        $cValue = $phpValue->cdata;
        $semaphoreC = $cValue;
        $phpValue = $fence;
        $cValue = $phpValue->cdata;
        $fenceC = $cValue;
        $cValue = $this->ffi->vkAcquireImageANDROID(
            $deviceC,
            $imageC,
            $nativeFenceFdC,
            $semaphoreC,
            $fenceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkQueue $queue VkQueue
     * @param int $waitSemaphoreCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSemaphore> $pWaitSemaphores const VkSemaphore*
     * @param \\iggyvolz\vulkan\struct\VkImage $image VkImage
     * @param \iggyvolz\vulkan\util\IntPointer $pNativeFenceFd int*
     * returns VkResult
     */
    public function vkQueueSignalReleaseImageANDROID(
        struct\VkQueue $queue,
        int $waitSemaphoreCount,
        util\ObjectPointer $pWaitSemaphores,
        struct\VkImage $image,
        util\IntPointer $pNativeFenceFd,
    ): enum\VkResult
    {
        $phpValue = $queue;
        $cValue = $phpValue->cdata;
        $queueC = $cValue;
        $phpValue = $waitSemaphoreCount;
        $cValue = $phpValue;
        $waitSemaphoreCountC = $cValue;
        $phpValue = $pWaitSemaphores;
        $cValue = $phpValue->cdata;
        $pWaitSemaphoresC = $cValue;
        $phpValue = $image;
        $cValue = $phpValue->cdata;
        $imageC = $cValue;
        $phpValue = $pNativeFenceFd;
        $cValue = $phpValue->cdata;
        $pNativeFenceFdC = $cValue;
        $cValue = $this->ffi->vkQueueSignalReleaseImageANDROID(
            $queueC,
            $waitSemaphoreCountC,
            $pWaitSemaphoresC,
            $imageC,
            $pNativeFenceFdC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkPipeline $pipeline VkPipeline
     * @param \\iggyvolz\vulkan\enum\VkShaderStageFlagBits $shaderStage VkShaderStageFlagBits
     * @param \\iggyvolz\vulkan\enum\VkShaderInfoTypeAMD $infoType VkShaderInfoTypeAMD
     * @param \iggyvolz\vulkan\util\IntPointer $pInfoSize size_t*
     * @param \iggyvolz\vulkan\util\Pointer $pInfo void*
     * returns VkResult
     */
    public function vkGetShaderInfoAMD(
        struct\VkDevice $device,
        struct\VkPipeline $pipeline,
        enum\VkShaderStageFlagBits $shaderStage,
        enum\VkShaderInfoTypeAMD $infoType,
        util\IntPointer $pInfoSize,
        util\Pointer $pInfo,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pipeline;
        $cValue = $phpValue->cdata;
        $pipelineC = $cValue;
        $phpValue = $shaderStage;
        $cValue = $phpValue->value;
        $shaderStageC = $cValue;
        $phpValue = $infoType;
        $cValue = $phpValue->value;
        $infoTypeC = $cValue;
        $phpValue = $pInfoSize;
        $cValue = $phpValue->cdata;
        $pInfoSizeC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->ffi->vkGetShaderInfoAMD(
            $deviceC,
            $pipelineC,
            $shaderStageC,
            $infoTypeC,
            $pInfoSizeC,
            $pInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkSwapchainKHR $swapChain VkSwapchainKHR
     * @param bool $localDimmingEnable VkBool32
     */
    public function vkSetLocalDimmingAMD(
        struct\VkDevice $device,
        struct\VkSwapchainKHR $swapChain,
        bool $localDimmingEnable,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $swapChain;
        $cValue = $phpValue->cdata;
        $swapChainC = $cValue;
        $phpValue = $localDimmingEnable;
        $cValue = $phpValue ? 1 : 0;
        $localDimmingEnableC = $cValue;
        $cValue = $this->ffi->vkSetLocalDimmingAMD(
            $deviceC,
            $swapChainC,
            $localDimmingEnableC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\IntPointer $pTimeDomainCount uint32_t*
     * @param \iggyvolz\vulkan\util\Pointer $pTimeDomains VkTimeDomainKHR*
     * returns VkResult
     */
    public function vkGetPhysicalDeviceCalibrateableTimeDomainsKHR(
        struct\VkPhysicalDevice $physicalDevice,
        util\IntPointer $pTimeDomainCount,
        util\Pointer $pTimeDomains,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pTimeDomainCount;
        $cValue = $phpValue->cdata;
        $pTimeDomainCountC = $cValue;
        $phpValue = $pTimeDomains;
        $cValue = $phpValue->cdata;
        $pTimeDomainsC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceCalibrateableTimeDomainsKHR(
            $physicalDeviceC,
            $pTimeDomainCountC,
            $pTimeDomainsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param int $timestampCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCalibratedTimestampInfoKHR> $pTimestampInfos const VkCalibratedTimestampInfoKHR*
     * @param \iggyvolz\vulkan\util\IntPointer $pTimestamps uint64_t*
     * @param \iggyvolz\vulkan\util\IntPointer $pMaxDeviation uint64_t*
     * returns VkResult
     */
    public function vkGetCalibratedTimestampsKHR(
        struct\VkDevice $device,
        int $timestampCount,
        util\ObjectPointer $pTimestampInfos,
        util\IntPointer $pTimestamps,
        util\IntPointer $pMaxDeviation,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $timestampCount;
        $cValue = $phpValue;
        $timestampCountC = $cValue;
        $phpValue = $pTimestampInfos;
        $cValue = $phpValue->cdata;
        $pTimestampInfosC = $cValue;
        $phpValue = $pTimestamps;
        $cValue = $phpValue->cdata;
        $pTimestampsC = $cValue;
        $phpValue = $pMaxDeviation;
        $cValue = $phpValue->cdata;
        $pMaxDeviationC = $cValue;
        $cValue = $this->ffi->vkGetCalibratedTimestampsKHR(
            $deviceC,
            $timestampCountC,
            $pTimestampInfosC,
            $pTimestampsC,
            $pMaxDeviationC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDebugUtilsObjectNameInfoEXT> $pNameInfo const VkDebugUtilsObjectNameInfoEXT*
     * returns VkResult
     */
    public function vkSetDebugUtilsObjectNameEXT(
        struct\VkDevice $device,
        util\ObjectPointer $pNameInfo,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pNameInfo;
        $cValue = $phpValue->cdata;
        $pNameInfoC = $cValue;
        $cValue = $this->ffi->vkSetDebugUtilsObjectNameEXT(
            $deviceC,
            $pNameInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDebugUtilsObjectTagInfoEXT> $pTagInfo const VkDebugUtilsObjectTagInfoEXT*
     * returns VkResult
     */
    public function vkSetDebugUtilsObjectTagEXT(struct\VkDevice $device, util\ObjectPointer $pTagInfo): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pTagInfo;
        $cValue = $phpValue->cdata;
        $pTagInfoC = $cValue;
        $cValue = $this->ffi->vkSetDebugUtilsObjectTagEXT(
            $deviceC,
            $pTagInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkQueue $queue VkQueue
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDebugUtilsLabelEXT> $pLabelInfo const VkDebugUtilsLabelEXT*
     */
    public function vkQueueBeginDebugUtilsLabelEXT(struct\VkQueue $queue, util\ObjectPointer $pLabelInfo): void
    {
        $phpValue = $queue;
        $cValue = $phpValue->cdata;
        $queueC = $cValue;
        $phpValue = $pLabelInfo;
        $cValue = $phpValue->cdata;
        $pLabelInfoC = $cValue;
        $cValue = $this->ffi->vkQueueBeginDebugUtilsLabelEXT(
            $queueC,
            $pLabelInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkQueue $queue VkQueue
     */
    public function vkQueueEndDebugUtilsLabelEXT(struct\VkQueue $queue): void
    {
        $phpValue = $queue;
        $cValue = $phpValue->cdata;
        $queueC = $cValue;
        $cValue = $this->ffi->vkQueueEndDebugUtilsLabelEXT(
            $queueC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkQueue $queue VkQueue
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDebugUtilsLabelEXT> $pLabelInfo const VkDebugUtilsLabelEXT*
     */
    public function vkQueueInsertDebugUtilsLabelEXT(struct\VkQueue $queue, util\ObjectPointer $pLabelInfo): void
    {
        $phpValue = $queue;
        $cValue = $phpValue->cdata;
        $queueC = $cValue;
        $phpValue = $pLabelInfo;
        $cValue = $phpValue->cdata;
        $pLabelInfoC = $cValue;
        $cValue = $this->ffi->vkQueueInsertDebugUtilsLabelEXT(
            $queueC,
            $pLabelInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDebugUtilsLabelEXT> $pLabelInfo const VkDebugUtilsLabelEXT*
     */
    public function vkCmdBeginDebugUtilsLabelEXT(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pLabelInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pLabelInfo;
        $cValue = $phpValue->cdata;
        $pLabelInfoC = $cValue;
        $cValue = $this->ffi->vkCmdBeginDebugUtilsLabelEXT(
            $commandBufferC,
            $pLabelInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     */
    public function vkCmdEndDebugUtilsLabelEXT(struct\VkCommandBuffer $commandBuffer): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $cValue = $this->ffi->vkCmdEndDebugUtilsLabelEXT(
            $commandBufferC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDebugUtilsLabelEXT> $pLabelInfo const VkDebugUtilsLabelEXT*
     */
    public function vkCmdInsertDebugUtilsLabelEXT(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pLabelInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pLabelInfo;
        $cValue = $phpValue->cdata;
        $pLabelInfoC = $cValue;
        $cValue = $this->ffi->vkCmdInsertDebugUtilsLabelEXT(
            $commandBufferC,
            $pLabelInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkInstance $instance VkInstance
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDebugUtilsMessengerCreateInfoEXT> $pCreateInfo const VkDebugUtilsMessengerCreateInfoEXT*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDebugUtilsMessengerEXT> $pMessenger VkDebugUtilsMessengerEXT*
     * returns VkResult
     */
    public function vkCreateDebugUtilsMessengerEXT(
        struct\VkInstance $instance,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pMessenger,
    ): enum\VkResult
    {
        $phpValue = $instance;
        $cValue = $phpValue->cdata;
        $instanceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pMessenger;
        $cValue = $phpValue->cdata;
        $pMessengerC = $cValue;
        $cValue = $this->ffi->vkCreateDebugUtilsMessengerEXT(
            $instanceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pMessengerC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkInstance $instance VkInstance
     * @param \\iggyvolz\vulkan\struct\VkDebugUtilsMessengerEXT $messenger VkDebugUtilsMessengerEXT
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyDebugUtilsMessengerEXT(
        struct\VkInstance $instance,
        struct\VkDebugUtilsMessengerEXT $messenger,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $instance;
        $cValue = $phpValue->cdata;
        $instanceC = $cValue;
        $phpValue = $messenger;
        $cValue = $phpValue->cdata;
        $messengerC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyDebugUtilsMessengerEXT(
            $instanceC,
            $messengerC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkInstance $instance VkInstance
     * @param \\iggyvolz\vulkan\enum\VkDebugUtilsMessageSeverityFlagBitsEXT $messageSeverity VkDebugUtilsMessageSeverityFlagBitsEXT
     * @param list<iggyvolz\vulkan\enum\VkDebugUtilsMessageTypeFlagBitsEXT> $messageTypes VkDebugUtilsMessageTypeFlagsEXT
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDebugUtilsMessengerCallbackDataEXT> $pCallbackData const VkDebugUtilsMessengerCallbackDataEXT*
     */
    public function vkSubmitDebugUtilsMessageEXT(
        struct\VkInstance $instance,
        enum\VkDebugUtilsMessageSeverityFlagBitsEXT $messageSeverity,
        array $messageTypes,
        util\ObjectPointer $pCallbackData,
    ): void
    {
        $phpValue = $instance;
        $cValue = $phpValue->cdata;
        $instanceC = $cValue;
        $phpValue = $messageSeverity;
        $cValue = $phpValue->value;
        $messageSeverityC = $cValue;
        $phpValue = $messageTypes;
        $cValue = \iggyvolz\vulkan\enum\VkDebugUtilsMessageTypeFlagBitsEXT::toInt(...$phpValue);
        $messageTypesC = $cValue;
        $phpValue = $pCallbackData;
        $cValue = $phpValue->cdata;
        $pCallbackDataC = $cValue;
        $cValue = $this->ffi->vkSubmitDebugUtilsMessageEXT(
            $instanceC,
            $messageSeverityC,
            $messageTypesC,
            $pCallbackDataC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits $handleType VkExternalMemoryHandleTypeFlagBits
     * @param \iggyvolz\vulkan\util\Pointer $pHostPointer const void*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryHostPointerPropertiesEXT> $pMemoryHostPointerProperties VkMemoryHostPointerPropertiesEXT*
     * returns VkResult
     */
    public function vkGetMemoryHostPointerPropertiesEXT(
        struct\VkDevice $device,
        enum\VkExternalMemoryHandleTypeFlagBits $handleType,
        util\Pointer $pHostPointer,
        util\ObjectPointer $pMemoryHostPointerProperties,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $handleType;
        $cValue = $phpValue->value;
        $handleTypeC = $cValue;
        $phpValue = $pHostPointer;
        $cValue = $phpValue->cdata;
        $pHostPointerC = $cValue;
        $phpValue = $pMemoryHostPointerProperties;
        $cValue = $phpValue->cdata;
        $pMemoryHostPointerPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetMemoryHostPointerPropertiesEXT(
            $deviceC,
            $handleTypeC,
            $pHostPointerC,
            $pMemoryHostPointerPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\enum\VkPipelineStageFlagBits $pipelineStage VkPipelineStageFlagBits
     * @param \\iggyvolz\vulkan\struct\VkBuffer $dstBuffer VkBuffer
     * @param int $dstOffset VkDeviceSize
     * @param int $marker uint32_t
     */
    public function vkCmdWriteBufferMarkerAMD(
        struct\VkCommandBuffer $commandBuffer,
        enum\VkPipelineStageFlagBits $pipelineStage,
        struct\VkBuffer $dstBuffer,
        int $dstOffset,
        int $marker,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pipelineStage;
        $cValue = $phpValue->value;
        $pipelineStageC = $cValue;
        $phpValue = $dstBuffer;
        $cValue = $phpValue->cdata;
        $dstBufferC = $cValue;
        $phpValue = $dstOffset;
        $cValue = $phpValue;
        $dstOffsetC = $cValue;
        $phpValue = $marker;
        $cValue = $phpValue;
        $markerC = $cValue;
        $cValue = $this->ffi->vkCmdWriteBufferMarkerAMD(
            $commandBufferC,
            $pipelineStageC,
            $dstBufferC,
            $dstOffsetC,
            $markerC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRenderPassCreateInfo2> $pCreateInfo const VkRenderPassCreateInfo2*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRenderPass> $pRenderPass VkRenderPass*
     * returns VkResult
     */
    public function vkCreateRenderPass2(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pRenderPass,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pRenderPass;
        $cValue = $phpValue->cdata;
        $pRenderPassC = $cValue;
        $cValue = $this->ffi->vkCreateRenderPass2(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pRenderPassC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRenderPassBeginInfo> $pRenderPassBegin const VkRenderPassBeginInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSubpassBeginInfo> $pSubpassBeginInfo const VkSubpassBeginInfo*
     */
    public function vkCmdBeginRenderPass2(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pRenderPassBegin,
        util\ObjectPointer $pSubpassBeginInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pRenderPassBegin;
        $cValue = $phpValue->cdata;
        $pRenderPassBeginC = $cValue;
        $phpValue = $pSubpassBeginInfo;
        $cValue = $phpValue->cdata;
        $pSubpassBeginInfoC = $cValue;
        $cValue = $this->ffi->vkCmdBeginRenderPass2(
            $commandBufferC,
            $pRenderPassBeginC,
            $pSubpassBeginInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSubpassBeginInfo> $pSubpassBeginInfo const VkSubpassBeginInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSubpassEndInfo> $pSubpassEndInfo const VkSubpassEndInfo*
     */
    public function vkCmdNextSubpass2(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pSubpassBeginInfo,
        util\ObjectPointer $pSubpassEndInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pSubpassBeginInfo;
        $cValue = $phpValue->cdata;
        $pSubpassBeginInfoC = $cValue;
        $phpValue = $pSubpassEndInfo;
        $cValue = $phpValue->cdata;
        $pSubpassEndInfoC = $cValue;
        $cValue = $this->ffi->vkCmdNextSubpass2(
            $commandBufferC,
            $pSubpassBeginInfoC,
            $pSubpassEndInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSubpassEndInfo> $pSubpassEndInfo const VkSubpassEndInfo*
     */
    public function vkCmdEndRenderPass2(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pSubpassEndInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pSubpassEndInfo;
        $cValue = $phpValue->cdata;
        $pSubpassEndInfoC = $cValue;
        $cValue = $this->ffi->vkCmdEndRenderPass2(
            $commandBufferC,
            $pSubpassEndInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkSemaphore $semaphore VkSemaphore
     * @param \iggyvolz\vulkan\util\IntPointer $pValue uint64_t*
     * returns VkResult
     */
    public function vkGetSemaphoreCounterValue(
        struct\VkDevice $device,
        struct\VkSemaphore $semaphore,
        util\IntPointer $pValue,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $semaphore;
        $cValue = $phpValue->cdata;
        $semaphoreC = $cValue;
        $phpValue = $pValue;
        $cValue = $phpValue->cdata;
        $pValueC = $cValue;
        $cValue = $this->ffi->vkGetSemaphoreCounterValue(
            $deviceC,
            $semaphoreC,
            $pValueC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSemaphoreWaitInfo> $pWaitInfo const VkSemaphoreWaitInfo*
     * @param int $timeout uint64_t
     * returns VkResult
     */
    public function vkWaitSemaphores(
        struct\VkDevice $device,
        util\ObjectPointer $pWaitInfo,
        int $timeout,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pWaitInfo;
        $cValue = $phpValue->cdata;
        $pWaitInfoC = $cValue;
        $phpValue = $timeout;
        $cValue = $phpValue;
        $timeoutC = $cValue;
        $cValue = $this->ffi->vkWaitSemaphores(
            $deviceC,
            $pWaitInfoC,
            $timeoutC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSemaphoreSignalInfo> $pSignalInfo const VkSemaphoreSignalInfo*
     * returns VkResult
     */
    public function vkSignalSemaphore(struct\VkDevice $device, util\ObjectPointer $pSignalInfo): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pSignalInfo;
        $cValue = $phpValue->cdata;
        $pSignalInfoC = $cValue;
        $cValue = $this->ffi->vkSignalSemaphore(
            $deviceC,
            $pSignalInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\Pointer $buffer const struct AHardwareBuffer*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAndroidHardwareBufferPropertiesANDROID> $pProperties VkAndroidHardwareBufferPropertiesANDROID*
     * returns VkResult
     */
    public function vkGetAndroidHardwareBufferPropertiesANDROID(
        struct\VkDevice $device,
        util\Pointer $buffer,
        util\ObjectPointer $pProperties,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $buffer;
        $cValue = $phpValue->cdata;
        $bufferC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetAndroidHardwareBufferPropertiesANDROID(
            $deviceC,
            $bufferC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryGetAndroidHardwareBufferInfoANDROID> $pInfo const VkMemoryGetAndroidHardwareBufferInfoANDROID*
     * @param \iggyvolz\vulkan\util\Pointer $pBuffer struct AHardwareBuffer**
     * returns VkResult
     */
    public function vkGetMemoryAndroidHardwareBufferANDROID(
        struct\VkDevice $device,
        util\ObjectPointer $pInfo,
        util\Pointer $pBuffer,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $phpValue = $pBuffer;
        $cValue = $phpValue->cdata;
        $pBufferC = $cValue;
        $cValue = $this->ffi->vkGetMemoryAndroidHardwareBufferANDROID(
            $deviceC,
            $pInfoC,
            $pBufferC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkBuffer $buffer VkBuffer
     * @param int $offset VkDeviceSize
     * @param \\iggyvolz\vulkan\struct\VkBuffer $countBuffer VkBuffer
     * @param int $countBufferOffset VkDeviceSize
     * @param int $maxDrawCount uint32_t
     * @param int $stride uint32_t
     */
    public function vkCmdDrawIndirectCount(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkBuffer $buffer,
        int $offset,
        struct\VkBuffer $countBuffer,
        int $countBufferOffset,
        int $maxDrawCount,
        int $stride,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $buffer;
        $cValue = $phpValue->cdata;
        $bufferC = $cValue;
        $phpValue = $offset;
        $cValue = $phpValue;
        $offsetC = $cValue;
        $phpValue = $countBuffer;
        $cValue = $phpValue->cdata;
        $countBufferC = $cValue;
        $phpValue = $countBufferOffset;
        $cValue = $phpValue;
        $countBufferOffsetC = $cValue;
        $phpValue = $maxDrawCount;
        $cValue = $phpValue;
        $maxDrawCountC = $cValue;
        $phpValue = $stride;
        $cValue = $phpValue;
        $strideC = $cValue;
        $cValue = $this->ffi->vkCmdDrawIndirectCount(
            $commandBufferC,
            $bufferC,
            $offsetC,
            $countBufferC,
            $countBufferOffsetC,
            $maxDrawCountC,
            $strideC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkBuffer $buffer VkBuffer
     * @param int $offset VkDeviceSize
     * @param \\iggyvolz\vulkan\struct\VkBuffer $countBuffer VkBuffer
     * @param int $countBufferOffset VkDeviceSize
     * @param int $maxDrawCount uint32_t
     * @param int $stride uint32_t
     */
    public function vkCmdDrawIndexedIndirectCount(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkBuffer $buffer,
        int $offset,
        struct\VkBuffer $countBuffer,
        int $countBufferOffset,
        int $maxDrawCount,
        int $stride,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $buffer;
        $cValue = $phpValue->cdata;
        $bufferC = $cValue;
        $phpValue = $offset;
        $cValue = $phpValue;
        $offsetC = $cValue;
        $phpValue = $countBuffer;
        $cValue = $phpValue->cdata;
        $countBufferC = $cValue;
        $phpValue = $countBufferOffset;
        $cValue = $phpValue;
        $countBufferOffsetC = $cValue;
        $phpValue = $maxDrawCount;
        $cValue = $phpValue;
        $maxDrawCountC = $cValue;
        $phpValue = $stride;
        $cValue = $phpValue;
        $strideC = $cValue;
        $cValue = $this->ffi->vkCmdDrawIndexedIndirectCount(
            $commandBufferC,
            $bufferC,
            $offsetC,
            $countBufferC,
            $countBufferOffsetC,
            $maxDrawCountC,
            $strideC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\Pointer $pCheckpointMarker const void*
     */
    public function vkCmdSetCheckpointNV(struct\VkCommandBuffer $commandBuffer, util\Pointer $pCheckpointMarker): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pCheckpointMarker;
        $cValue = $phpValue->cdata;
        $pCheckpointMarkerC = $cValue;
        $cValue = $this->ffi->vkCmdSetCheckpointNV(
            $commandBufferC,
            $pCheckpointMarkerC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkQueue $queue VkQueue
     * @param \iggyvolz\vulkan\util\IntPointer $pCheckpointDataCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCheckpointDataNV> $pCheckpointData VkCheckpointDataNV*
     */
    public function vkGetQueueCheckpointDataNV(
        struct\VkQueue $queue,
        util\IntPointer $pCheckpointDataCount,
        util\ObjectPointer $pCheckpointData,
    ): void
    {
        $phpValue = $queue;
        $cValue = $phpValue->cdata;
        $queueC = $cValue;
        $phpValue = $pCheckpointDataCount;
        $cValue = $phpValue->cdata;
        $pCheckpointDataCountC = $cValue;
        $phpValue = $pCheckpointData;
        $cValue = $phpValue->cdata;
        $pCheckpointDataC = $cValue;
        $cValue = $this->ffi->vkGetQueueCheckpointDataNV(
            $queueC,
            $pCheckpointDataCountC,
            $pCheckpointDataC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $firstBinding uint32_t
     * @param int $bindingCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBuffer> $pBuffers const VkBuffer*
     * @param \iggyvolz\vulkan\util\Pointer $pOffsets const VkDeviceSize*
     * @param \iggyvolz\vulkan\util\Pointer $pSizes const VkDeviceSize*
     */
    public function vkCmdBindTransformFeedbackBuffersEXT(
        struct\VkCommandBuffer $commandBuffer,
        int $firstBinding,
        int $bindingCount,
        util\ObjectPointer $pBuffers,
        util\Pointer $pOffsets,
        util\Pointer $pSizes,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $firstBinding;
        $cValue = $phpValue;
        $firstBindingC = $cValue;
        $phpValue = $bindingCount;
        $cValue = $phpValue;
        $bindingCountC = $cValue;
        $phpValue = $pBuffers;
        $cValue = $phpValue->cdata;
        $pBuffersC = $cValue;
        $phpValue = $pOffsets;
        $cValue = $phpValue->cdata;
        $pOffsetsC = $cValue;
        $phpValue = $pSizes;
        $cValue = $phpValue->cdata;
        $pSizesC = $cValue;
        $cValue = $this->ffi->vkCmdBindTransformFeedbackBuffersEXT(
            $commandBufferC,
            $firstBindingC,
            $bindingCountC,
            $pBuffersC,
            $pOffsetsC,
            $pSizesC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $firstCounterBuffer uint32_t
     * @param int $counterBufferCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBuffer> $pCounterBuffers const VkBuffer*
     * @param \iggyvolz\vulkan\util\Pointer $pCounterBufferOffsets const VkDeviceSize*
     */
    public function vkCmdBeginTransformFeedbackEXT(
        struct\VkCommandBuffer $commandBuffer,
        int $firstCounterBuffer,
        int $counterBufferCount,
        util\ObjectPointer $pCounterBuffers,
        util\Pointer $pCounterBufferOffsets,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $firstCounterBuffer;
        $cValue = $phpValue;
        $firstCounterBufferC = $cValue;
        $phpValue = $counterBufferCount;
        $cValue = $phpValue;
        $counterBufferCountC = $cValue;
        $phpValue = $pCounterBuffers;
        $cValue = $phpValue->cdata;
        $pCounterBuffersC = $cValue;
        $phpValue = $pCounterBufferOffsets;
        $cValue = $phpValue->cdata;
        $pCounterBufferOffsetsC = $cValue;
        $cValue = $this->ffi->vkCmdBeginTransformFeedbackEXT(
            $commandBufferC,
            $firstCounterBufferC,
            $counterBufferCountC,
            $pCounterBuffersC,
            $pCounterBufferOffsetsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $firstCounterBuffer uint32_t
     * @param int $counterBufferCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBuffer> $pCounterBuffers const VkBuffer*
     * @param \iggyvolz\vulkan\util\Pointer $pCounterBufferOffsets const VkDeviceSize*
     */
    public function vkCmdEndTransformFeedbackEXT(
        struct\VkCommandBuffer $commandBuffer,
        int $firstCounterBuffer,
        int $counterBufferCount,
        util\ObjectPointer $pCounterBuffers,
        util\Pointer $pCounterBufferOffsets,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $firstCounterBuffer;
        $cValue = $phpValue;
        $firstCounterBufferC = $cValue;
        $phpValue = $counterBufferCount;
        $cValue = $phpValue;
        $counterBufferCountC = $cValue;
        $phpValue = $pCounterBuffers;
        $cValue = $phpValue->cdata;
        $pCounterBuffersC = $cValue;
        $phpValue = $pCounterBufferOffsets;
        $cValue = $phpValue->cdata;
        $pCounterBufferOffsetsC = $cValue;
        $cValue = $this->ffi->vkCmdEndTransformFeedbackEXT(
            $commandBufferC,
            $firstCounterBufferC,
            $counterBufferCountC,
            $pCounterBuffersC,
            $pCounterBufferOffsetsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkQueryPool $queryPool VkQueryPool
     * @param int $query uint32_t
     * @param list<iggyvolz\vulkan\enum\VkQueryControlFlagBits> $flags VkQueryControlFlags
     * @param int $index uint32_t
     */
    public function vkCmdBeginQueryIndexedEXT(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkQueryPool $queryPool,
        int $query,
        array $flags,
        int $index,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $queryPool;
        $cValue = $phpValue->cdata;
        $queryPoolC = $cValue;
        $phpValue = $query;
        $cValue = $phpValue;
        $queryC = $cValue;
        $phpValue = $flags;
        $cValue = \iggyvolz\vulkan\enum\VkQueryControlFlagBits::toInt(...$phpValue);
        $flagsC = $cValue;
        $phpValue = $index;
        $cValue = $phpValue;
        $indexC = $cValue;
        $cValue = $this->ffi->vkCmdBeginQueryIndexedEXT(
            $commandBufferC,
            $queryPoolC,
            $queryC,
            $flagsC,
            $indexC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkQueryPool $queryPool VkQueryPool
     * @param int $query uint32_t
     * @param int $index uint32_t
     */
    public function vkCmdEndQueryIndexedEXT(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkQueryPool $queryPool,
        int $query,
        int $index,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $queryPool;
        $cValue = $phpValue->cdata;
        $queryPoolC = $cValue;
        $phpValue = $query;
        $cValue = $phpValue;
        $queryC = $cValue;
        $phpValue = $index;
        $cValue = $phpValue;
        $indexC = $cValue;
        $cValue = $this->ffi->vkCmdEndQueryIndexedEXT(
            $commandBufferC,
            $queryPoolC,
            $queryC,
            $indexC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $instanceCount uint32_t
     * @param int $firstInstance uint32_t
     * @param \\iggyvolz\vulkan\struct\VkBuffer $counterBuffer VkBuffer
     * @param int $counterBufferOffset VkDeviceSize
     * @param int $counterOffset uint32_t
     * @param int $vertexStride uint32_t
     */
    public function vkCmdDrawIndirectByteCountEXT(
        struct\VkCommandBuffer $commandBuffer,
        int $instanceCount,
        int $firstInstance,
        struct\VkBuffer $counterBuffer,
        int $counterBufferOffset,
        int $counterOffset,
        int $vertexStride,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $instanceCount;
        $cValue = $phpValue;
        $instanceCountC = $cValue;
        $phpValue = $firstInstance;
        $cValue = $phpValue;
        $firstInstanceC = $cValue;
        $phpValue = $counterBuffer;
        $cValue = $phpValue->cdata;
        $counterBufferC = $cValue;
        $phpValue = $counterBufferOffset;
        $cValue = $phpValue;
        $counterBufferOffsetC = $cValue;
        $phpValue = $counterOffset;
        $cValue = $phpValue;
        $counterOffsetC = $cValue;
        $phpValue = $vertexStride;
        $cValue = $phpValue;
        $vertexStrideC = $cValue;
        $cValue = $this->ffi->vkCmdDrawIndirectByteCountEXT(
            $commandBufferC,
            $instanceCountC,
            $firstInstanceC,
            $counterBufferC,
            $counterBufferOffsetC,
            $counterOffsetC,
            $vertexStrideC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $firstExclusiveScissor uint32_t
     * @param int $exclusiveScissorCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRect2D> $pExclusiveScissors const VkRect2D*
     */
    public function vkCmdSetExclusiveScissorNV(
        struct\VkCommandBuffer $commandBuffer,
        int $firstExclusiveScissor,
        int $exclusiveScissorCount,
        util\ObjectPointer $pExclusiveScissors,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $firstExclusiveScissor;
        $cValue = $phpValue;
        $firstExclusiveScissorC = $cValue;
        $phpValue = $exclusiveScissorCount;
        $cValue = $phpValue;
        $exclusiveScissorCountC = $cValue;
        $phpValue = $pExclusiveScissors;
        $cValue = $phpValue->cdata;
        $pExclusiveScissorsC = $cValue;
        $cValue = $this->ffi->vkCmdSetExclusiveScissorNV(
            $commandBufferC,
            $firstExclusiveScissorC,
            $exclusiveScissorCountC,
            $pExclusiveScissorsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $firstExclusiveScissor uint32_t
     * @param int $exclusiveScissorCount uint32_t
     * @param \iggyvolz\vulkan\util\Pointer $pExclusiveScissorEnables const VkBool32*
     */
    public function vkCmdSetExclusiveScissorEnableNV(
        struct\VkCommandBuffer $commandBuffer,
        int $firstExclusiveScissor,
        int $exclusiveScissorCount,
        util\Pointer $pExclusiveScissorEnables,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $firstExclusiveScissor;
        $cValue = $phpValue;
        $firstExclusiveScissorC = $cValue;
        $phpValue = $exclusiveScissorCount;
        $cValue = $phpValue;
        $exclusiveScissorCountC = $cValue;
        $phpValue = $pExclusiveScissorEnables;
        $cValue = $phpValue->cdata;
        $pExclusiveScissorEnablesC = $cValue;
        $cValue = $this->ffi->vkCmdSetExclusiveScissorEnableNV(
            $commandBufferC,
            $firstExclusiveScissorC,
            $exclusiveScissorCountC,
            $pExclusiveScissorEnablesC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkImageView $imageView VkImageView
     * @param \\iggyvolz\vulkan\enum\VkImageLayout $imageLayout VkImageLayout
     */
    public function vkCmdBindShadingRateImageNV(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkImageView $imageView,
        enum\VkImageLayout $imageLayout,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $imageView;
        $cValue = $phpValue->cdata;
        $imageViewC = $cValue;
        $phpValue = $imageLayout;
        $cValue = $phpValue->value;
        $imageLayoutC = $cValue;
        $cValue = $this->ffi->vkCmdBindShadingRateImageNV(
            $commandBufferC,
            $imageViewC,
            $imageLayoutC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $firstViewport uint32_t
     * @param int $viewportCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkShadingRatePaletteNV> $pShadingRatePalettes const VkShadingRatePaletteNV*
     */
    public function vkCmdSetViewportShadingRatePaletteNV(
        struct\VkCommandBuffer $commandBuffer,
        int $firstViewport,
        int $viewportCount,
        util\ObjectPointer $pShadingRatePalettes,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $firstViewport;
        $cValue = $phpValue;
        $firstViewportC = $cValue;
        $phpValue = $viewportCount;
        $cValue = $phpValue;
        $viewportCountC = $cValue;
        $phpValue = $pShadingRatePalettes;
        $cValue = $phpValue->cdata;
        $pShadingRatePalettesC = $cValue;
        $cValue = $this->ffi->vkCmdSetViewportShadingRatePaletteNV(
            $commandBufferC,
            $firstViewportC,
            $viewportCountC,
            $pShadingRatePalettesC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\enum\VkCoarseSampleOrderTypeNV $sampleOrderType VkCoarseSampleOrderTypeNV
     * @param int $customSampleOrderCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCoarseSampleOrderCustomNV> $pCustomSampleOrders const VkCoarseSampleOrderCustomNV*
     */
    public function vkCmdSetCoarseSampleOrderNV(
        struct\VkCommandBuffer $commandBuffer,
        enum\VkCoarseSampleOrderTypeNV $sampleOrderType,
        int $customSampleOrderCount,
        util\ObjectPointer $pCustomSampleOrders,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $sampleOrderType;
        $cValue = $phpValue->value;
        $sampleOrderTypeC = $cValue;
        $phpValue = $customSampleOrderCount;
        $cValue = $phpValue;
        $customSampleOrderCountC = $cValue;
        $phpValue = $pCustomSampleOrders;
        $cValue = $phpValue->cdata;
        $pCustomSampleOrdersC = $cValue;
        $cValue = $this->ffi->vkCmdSetCoarseSampleOrderNV(
            $commandBufferC,
            $sampleOrderTypeC,
            $customSampleOrderCountC,
            $pCustomSampleOrdersC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $taskCount uint32_t
     * @param int $firstTask uint32_t
     */
    public function vkCmdDrawMeshTasksNV(struct\VkCommandBuffer $commandBuffer, int $taskCount, int $firstTask): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $taskCount;
        $cValue = $phpValue;
        $taskCountC = $cValue;
        $phpValue = $firstTask;
        $cValue = $phpValue;
        $firstTaskC = $cValue;
        $cValue = $this->ffi->vkCmdDrawMeshTasksNV(
            $commandBufferC,
            $taskCountC,
            $firstTaskC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkBuffer $buffer VkBuffer
     * @param int $offset VkDeviceSize
     * @param int $drawCount uint32_t
     * @param int $stride uint32_t
     */
    public function vkCmdDrawMeshTasksIndirectNV(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkBuffer $buffer,
        int $offset,
        int $drawCount,
        int $stride,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $buffer;
        $cValue = $phpValue->cdata;
        $bufferC = $cValue;
        $phpValue = $offset;
        $cValue = $phpValue;
        $offsetC = $cValue;
        $phpValue = $drawCount;
        $cValue = $phpValue;
        $drawCountC = $cValue;
        $phpValue = $stride;
        $cValue = $phpValue;
        $strideC = $cValue;
        $cValue = $this->ffi->vkCmdDrawMeshTasksIndirectNV(
            $commandBufferC,
            $bufferC,
            $offsetC,
            $drawCountC,
            $strideC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkBuffer $buffer VkBuffer
     * @param int $offset VkDeviceSize
     * @param \\iggyvolz\vulkan\struct\VkBuffer $countBuffer VkBuffer
     * @param int $countBufferOffset VkDeviceSize
     * @param int $maxDrawCount uint32_t
     * @param int $stride uint32_t
     */
    public function vkCmdDrawMeshTasksIndirectCountNV(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkBuffer $buffer,
        int $offset,
        struct\VkBuffer $countBuffer,
        int $countBufferOffset,
        int $maxDrawCount,
        int $stride,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $buffer;
        $cValue = $phpValue->cdata;
        $bufferC = $cValue;
        $phpValue = $offset;
        $cValue = $phpValue;
        $offsetC = $cValue;
        $phpValue = $countBuffer;
        $cValue = $phpValue->cdata;
        $countBufferC = $cValue;
        $phpValue = $countBufferOffset;
        $cValue = $phpValue;
        $countBufferOffsetC = $cValue;
        $phpValue = $maxDrawCount;
        $cValue = $phpValue;
        $maxDrawCountC = $cValue;
        $phpValue = $stride;
        $cValue = $phpValue;
        $strideC = $cValue;
        $cValue = $this->ffi->vkCmdDrawMeshTasksIndirectCountNV(
            $commandBufferC,
            $bufferC,
            $offsetC,
            $countBufferC,
            $countBufferOffsetC,
            $maxDrawCountC,
            $strideC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $groupCountX uint32_t
     * @param int $groupCountY uint32_t
     * @param int $groupCountZ uint32_t
     */
    public function vkCmdDrawMeshTasksEXT(
        struct\VkCommandBuffer $commandBuffer,
        int $groupCountX,
        int $groupCountY,
        int $groupCountZ,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $groupCountX;
        $cValue = $phpValue;
        $groupCountXC = $cValue;
        $phpValue = $groupCountY;
        $cValue = $phpValue;
        $groupCountYC = $cValue;
        $phpValue = $groupCountZ;
        $cValue = $phpValue;
        $groupCountZC = $cValue;
        $cValue = $this->ffi->vkCmdDrawMeshTasksEXT(
            $commandBufferC,
            $groupCountXC,
            $groupCountYC,
            $groupCountZC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkBuffer $buffer VkBuffer
     * @param int $offset VkDeviceSize
     * @param int $drawCount uint32_t
     * @param int $stride uint32_t
     */
    public function vkCmdDrawMeshTasksIndirectEXT(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkBuffer $buffer,
        int $offset,
        int $drawCount,
        int $stride,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $buffer;
        $cValue = $phpValue->cdata;
        $bufferC = $cValue;
        $phpValue = $offset;
        $cValue = $phpValue;
        $offsetC = $cValue;
        $phpValue = $drawCount;
        $cValue = $phpValue;
        $drawCountC = $cValue;
        $phpValue = $stride;
        $cValue = $phpValue;
        $strideC = $cValue;
        $cValue = $this->ffi->vkCmdDrawMeshTasksIndirectEXT(
            $commandBufferC,
            $bufferC,
            $offsetC,
            $drawCountC,
            $strideC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkBuffer $buffer VkBuffer
     * @param int $offset VkDeviceSize
     * @param \\iggyvolz\vulkan\struct\VkBuffer $countBuffer VkBuffer
     * @param int $countBufferOffset VkDeviceSize
     * @param int $maxDrawCount uint32_t
     * @param int $stride uint32_t
     */
    public function vkCmdDrawMeshTasksIndirectCountEXT(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkBuffer $buffer,
        int $offset,
        struct\VkBuffer $countBuffer,
        int $countBufferOffset,
        int $maxDrawCount,
        int $stride,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $buffer;
        $cValue = $phpValue->cdata;
        $bufferC = $cValue;
        $phpValue = $offset;
        $cValue = $phpValue;
        $offsetC = $cValue;
        $phpValue = $countBuffer;
        $cValue = $phpValue->cdata;
        $countBufferC = $cValue;
        $phpValue = $countBufferOffset;
        $cValue = $phpValue;
        $countBufferOffsetC = $cValue;
        $phpValue = $maxDrawCount;
        $cValue = $phpValue;
        $maxDrawCountC = $cValue;
        $phpValue = $stride;
        $cValue = $phpValue;
        $strideC = $cValue;
        $cValue = $this->ffi->vkCmdDrawMeshTasksIndirectCountEXT(
            $commandBufferC,
            $bufferC,
            $offsetC,
            $countBufferC,
            $countBufferOffsetC,
            $maxDrawCountC,
            $strideC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkPipeline $pipeline VkPipeline
     * @param int $shader uint32_t
     * returns VkResult
     */
    public function vkCompileDeferredNV(
        struct\VkDevice $device,
        struct\VkPipeline $pipeline,
        int $shader,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pipeline;
        $cValue = $phpValue->cdata;
        $pipelineC = $cValue;
        $phpValue = $shader;
        $cValue = $phpValue;
        $shaderC = $cValue;
        $cValue = $this->ffi->vkCompileDeferredNV(
            $deviceC,
            $pipelineC,
            $shaderC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAccelerationStructureCreateInfoNV> $pCreateInfo const VkAccelerationStructureCreateInfoNV*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAccelerationStructureNV> $pAccelerationStructure VkAccelerationStructureNV*
     * returns VkResult
     */
    public function vkCreateAccelerationStructureNV(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pAccelerationStructure,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pAccelerationStructure;
        $cValue = $phpValue->cdata;
        $pAccelerationStructureC = $cValue;
        $cValue = $this->ffi->vkCreateAccelerationStructureNV(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pAccelerationStructureC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkImageView $imageView VkImageView
     * @param \\iggyvolz\vulkan\enum\VkImageLayout $imageLayout VkImageLayout
     */
    public function vkCmdBindInvocationMaskHUAWEI(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkImageView $imageView,
        enum\VkImageLayout $imageLayout,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $imageView;
        $cValue = $phpValue->cdata;
        $imageViewC = $cValue;
        $phpValue = $imageLayout;
        $cValue = $phpValue->value;
        $imageLayoutC = $cValue;
        $cValue = $this->ffi->vkCmdBindInvocationMaskHUAWEI(
            $commandBufferC,
            $imageViewC,
            $imageLayoutC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkAccelerationStructureKHR $accelerationStructure VkAccelerationStructureKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyAccelerationStructureKHR(
        struct\VkDevice $device,
        struct\VkAccelerationStructureKHR $accelerationStructure,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $accelerationStructure;
        $cValue = $phpValue->cdata;
        $accelerationStructureC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyAccelerationStructureKHR(
            $deviceC,
            $accelerationStructureC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkAccelerationStructureNV $accelerationStructure VkAccelerationStructureNV
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyAccelerationStructureNV(
        struct\VkDevice $device,
        struct\VkAccelerationStructureNV $accelerationStructure,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $accelerationStructure;
        $cValue = $phpValue->cdata;
        $accelerationStructureC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyAccelerationStructureNV(
            $deviceC,
            $accelerationStructureC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAccelerationStructureMemoryRequirementsInfoNV> $pInfo const VkAccelerationStructureMemoryRequirementsInfoNV*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryRequirements2KHR> $pMemoryRequirements VkMemoryRequirements2KHR*
     */
    public function vkGetAccelerationStructureMemoryRequirementsNV(
        struct\VkDevice $device,
        util\ObjectPointer $pInfo,
        util\ObjectPointer $pMemoryRequirements,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $phpValue = $pMemoryRequirements;
        $cValue = $phpValue->cdata;
        $pMemoryRequirementsC = $cValue;
        $cValue = $this->ffi->vkGetAccelerationStructureMemoryRequirementsNV(
            $deviceC,
            $pInfoC,
            $pMemoryRequirementsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param int $bindInfoCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBindAccelerationStructureMemoryInfoNV> $pBindInfos const VkBindAccelerationStructureMemoryInfoNV*
     * returns VkResult
     */
    public function vkBindAccelerationStructureMemoryNV(
        struct\VkDevice $device,
        int $bindInfoCount,
        util\ObjectPointer $pBindInfos,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $bindInfoCount;
        $cValue = $phpValue;
        $bindInfoCountC = $cValue;
        $phpValue = $pBindInfos;
        $cValue = $phpValue->cdata;
        $pBindInfosC = $cValue;
        $cValue = $this->ffi->vkBindAccelerationStructureMemoryNV(
            $deviceC,
            $bindInfoCountC,
            $pBindInfosC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkAccelerationStructureNV $dst VkAccelerationStructureNV
     * @param \\iggyvolz\vulkan\struct\VkAccelerationStructureNV $src VkAccelerationStructureNV
     * @param \\iggyvolz\vulkan\enum\VkCopyAccelerationStructureModeKHR $mode VkCopyAccelerationStructureModeKHR
     */
    public function vkCmdCopyAccelerationStructureNV(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkAccelerationStructureNV $dst,
        struct\VkAccelerationStructureNV $src,
        enum\VkCopyAccelerationStructureModeKHR $mode,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $dst;
        $cValue = $phpValue->cdata;
        $dstC = $cValue;
        $phpValue = $src;
        $cValue = $phpValue->cdata;
        $srcC = $cValue;
        $phpValue = $mode;
        $cValue = $phpValue->value;
        $modeC = $cValue;
        $cValue = $this->ffi->vkCmdCopyAccelerationStructureNV(
            $commandBufferC,
            $dstC,
            $srcC,
            $modeC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyAccelerationStructureInfoKHR> $pInfo const VkCopyAccelerationStructureInfoKHR*
     */
    public function vkCmdCopyAccelerationStructureKHR(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->ffi->vkCmdCopyAccelerationStructureKHR(
            $commandBufferC,
            $pInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation VkDeferredOperationKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyAccelerationStructureInfoKHR> $pInfo const VkCopyAccelerationStructureInfoKHR*
     * returns VkResult
     */
    public function vkCopyAccelerationStructureKHR(
        struct\VkDevice $device,
        struct\VkDeferredOperationKHR $deferredOperation,
        util\ObjectPointer $pInfo,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $deferredOperation;
        $cValue = $phpValue->cdata;
        $deferredOperationC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->ffi->vkCopyAccelerationStructureKHR(
            $deviceC,
            $deferredOperationC,
            $pInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyAccelerationStructureToMemoryInfoKHR> $pInfo const VkCopyAccelerationStructureToMemoryInfoKHR*
     */
    public function vkCmdCopyAccelerationStructureToMemoryKHR(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->ffi->vkCmdCopyAccelerationStructureToMemoryKHR(
            $commandBufferC,
            $pInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation VkDeferredOperationKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyAccelerationStructureToMemoryInfoKHR> $pInfo const VkCopyAccelerationStructureToMemoryInfoKHR*
     * returns VkResult
     */
    public function vkCopyAccelerationStructureToMemoryKHR(
        struct\VkDevice $device,
        struct\VkDeferredOperationKHR $deferredOperation,
        util\ObjectPointer $pInfo,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $deferredOperation;
        $cValue = $phpValue->cdata;
        $deferredOperationC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->ffi->vkCopyAccelerationStructureToMemoryKHR(
            $deviceC,
            $deferredOperationC,
            $pInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyMemoryToAccelerationStructureInfoKHR> $pInfo const VkCopyMemoryToAccelerationStructureInfoKHR*
     */
    public function vkCmdCopyMemoryToAccelerationStructureKHR(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->ffi->vkCmdCopyMemoryToAccelerationStructureKHR(
            $commandBufferC,
            $pInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation VkDeferredOperationKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyMemoryToAccelerationStructureInfoKHR> $pInfo const VkCopyMemoryToAccelerationStructureInfoKHR*
     * returns VkResult
     */
    public function vkCopyMemoryToAccelerationStructureKHR(
        struct\VkDevice $device,
        struct\VkDeferredOperationKHR $deferredOperation,
        util\ObjectPointer $pInfo,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $deferredOperation;
        $cValue = $phpValue->cdata;
        $deferredOperationC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->ffi->vkCopyMemoryToAccelerationStructureKHR(
            $deviceC,
            $deferredOperationC,
            $pInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $accelerationStructureCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAccelerationStructureKHR> $pAccelerationStructures const VkAccelerationStructureKHR*
     * @param \\iggyvolz\vulkan\enum\VkQueryType $queryType VkQueryType
     * @param \\iggyvolz\vulkan\struct\VkQueryPool $queryPool VkQueryPool
     * @param int $firstQuery uint32_t
     */
    public function vkCmdWriteAccelerationStructuresPropertiesKHR(
        struct\VkCommandBuffer $commandBuffer,
        int $accelerationStructureCount,
        util\ObjectPointer $pAccelerationStructures,
        enum\VkQueryType $queryType,
        struct\VkQueryPool $queryPool,
        int $firstQuery,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $accelerationStructureCount;
        $cValue = $phpValue;
        $accelerationStructureCountC = $cValue;
        $phpValue = $pAccelerationStructures;
        $cValue = $phpValue->cdata;
        $pAccelerationStructuresC = $cValue;
        $phpValue = $queryType;
        $cValue = $phpValue->value;
        $queryTypeC = $cValue;
        $phpValue = $queryPool;
        $cValue = $phpValue->cdata;
        $queryPoolC = $cValue;
        $phpValue = $firstQuery;
        $cValue = $phpValue;
        $firstQueryC = $cValue;
        $cValue = $this->ffi->vkCmdWriteAccelerationStructuresPropertiesKHR(
            $commandBufferC,
            $accelerationStructureCountC,
            $pAccelerationStructuresC,
            $queryTypeC,
            $queryPoolC,
            $firstQueryC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $accelerationStructureCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAccelerationStructureNV> $pAccelerationStructures const VkAccelerationStructureNV*
     * @param \\iggyvolz\vulkan\enum\VkQueryType $queryType VkQueryType
     * @param \\iggyvolz\vulkan\struct\VkQueryPool $queryPool VkQueryPool
     * @param int $firstQuery uint32_t
     */
    public function vkCmdWriteAccelerationStructuresPropertiesNV(
        struct\VkCommandBuffer $commandBuffer,
        int $accelerationStructureCount,
        util\ObjectPointer $pAccelerationStructures,
        enum\VkQueryType $queryType,
        struct\VkQueryPool $queryPool,
        int $firstQuery,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $accelerationStructureCount;
        $cValue = $phpValue;
        $accelerationStructureCountC = $cValue;
        $phpValue = $pAccelerationStructures;
        $cValue = $phpValue->cdata;
        $pAccelerationStructuresC = $cValue;
        $phpValue = $queryType;
        $cValue = $phpValue->value;
        $queryTypeC = $cValue;
        $phpValue = $queryPool;
        $cValue = $phpValue->cdata;
        $queryPoolC = $cValue;
        $phpValue = $firstQuery;
        $cValue = $phpValue;
        $firstQueryC = $cValue;
        $cValue = $this->ffi->vkCmdWriteAccelerationStructuresPropertiesNV(
            $commandBufferC,
            $accelerationStructureCountC,
            $pAccelerationStructuresC,
            $queryTypeC,
            $queryPoolC,
            $firstQueryC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAccelerationStructureInfoNV> $pInfo const VkAccelerationStructureInfoNV*
     * @param \\iggyvolz\vulkan\struct\VkBuffer $instanceData VkBuffer
     * @param int $instanceOffset VkDeviceSize
     * @param bool $update VkBool32
     * @param \\iggyvolz\vulkan\struct\VkAccelerationStructureNV $dst VkAccelerationStructureNV
     * @param \\iggyvolz\vulkan\struct\VkAccelerationStructureNV $src VkAccelerationStructureNV
     * @param \\iggyvolz\vulkan\struct\VkBuffer $scratch VkBuffer
     * @param int $scratchOffset VkDeviceSize
     */
    public function vkCmdBuildAccelerationStructureNV(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pInfo,
        struct\VkBuffer $instanceData,
        int $instanceOffset,
        bool $update,
        struct\VkAccelerationStructureNV $dst,
        struct\VkAccelerationStructureNV $src,
        struct\VkBuffer $scratch,
        int $scratchOffset,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $phpValue = $instanceData;
        $cValue = $phpValue->cdata;
        $instanceDataC = $cValue;
        $phpValue = $instanceOffset;
        $cValue = $phpValue;
        $instanceOffsetC = $cValue;
        $phpValue = $update;
        $cValue = $phpValue ? 1 : 0;
        $updateC = $cValue;
        $phpValue = $dst;
        $cValue = $phpValue->cdata;
        $dstC = $cValue;
        $phpValue = $src;
        $cValue = $phpValue->cdata;
        $srcC = $cValue;
        $phpValue = $scratch;
        $cValue = $phpValue->cdata;
        $scratchC = $cValue;
        $phpValue = $scratchOffset;
        $cValue = $phpValue;
        $scratchOffsetC = $cValue;
        $cValue = $this->ffi->vkCmdBuildAccelerationStructureNV(
            $commandBufferC,
            $pInfoC,
            $instanceDataC,
            $instanceOffsetC,
            $updateC,
            $dstC,
            $srcC,
            $scratchC,
            $scratchOffsetC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param int $accelerationStructureCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAccelerationStructureKHR> $pAccelerationStructures const VkAccelerationStructureKHR*
     * @param \\iggyvolz\vulkan\enum\VkQueryType $queryType VkQueryType
     * @param int $dataSize size_t
     * @param \iggyvolz\vulkan\util\Pointer $pData void*
     * @param int $stride size_t
     * returns VkResult
     */
    public function vkWriteAccelerationStructuresPropertiesKHR(
        struct\VkDevice $device,
        int $accelerationStructureCount,
        util\ObjectPointer $pAccelerationStructures,
        enum\VkQueryType $queryType,
        int $dataSize,
        util\Pointer $pData,
        int $stride,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $accelerationStructureCount;
        $cValue = $phpValue;
        $accelerationStructureCountC = $cValue;
        $phpValue = $pAccelerationStructures;
        $cValue = $phpValue->cdata;
        $pAccelerationStructuresC = $cValue;
        $phpValue = $queryType;
        $cValue = $phpValue->value;
        $queryTypeC = $cValue;
        $phpValue = $dataSize;
        $cValue = $phpValue;
        $dataSizeC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $phpValue = $stride;
        $cValue = $phpValue;
        $strideC = $cValue;
        $cValue = $this->ffi->vkWriteAccelerationStructuresPropertiesKHR(
            $deviceC,
            $accelerationStructureCountC,
            $pAccelerationStructuresC,
            $queryTypeC,
            $dataSizeC,
            $pDataC,
            $strideC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkStridedDeviceAddressRegionKHR> $pRaygenShaderBindingTable const VkStridedDeviceAddressRegionKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkStridedDeviceAddressRegionKHR> $pMissShaderBindingTable const VkStridedDeviceAddressRegionKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkStridedDeviceAddressRegionKHR> $pHitShaderBindingTable const VkStridedDeviceAddressRegionKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkStridedDeviceAddressRegionKHR> $pCallableShaderBindingTable const VkStridedDeviceAddressRegionKHR*
     * @param int $width uint32_t
     * @param int $height uint32_t
     * @param int $depth uint32_t
     */
    public function vkCmdTraceRaysKHR(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pRaygenShaderBindingTable,
        util\ObjectPointer $pMissShaderBindingTable,
        util\ObjectPointer $pHitShaderBindingTable,
        util\ObjectPointer $pCallableShaderBindingTable,
        int $width,
        int $height,
        int $depth,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pRaygenShaderBindingTable;
        $cValue = $phpValue->cdata;
        $pRaygenShaderBindingTableC = $cValue;
        $phpValue = $pMissShaderBindingTable;
        $cValue = $phpValue->cdata;
        $pMissShaderBindingTableC = $cValue;
        $phpValue = $pHitShaderBindingTable;
        $cValue = $phpValue->cdata;
        $pHitShaderBindingTableC = $cValue;
        $phpValue = $pCallableShaderBindingTable;
        $cValue = $phpValue->cdata;
        $pCallableShaderBindingTableC = $cValue;
        $phpValue = $width;
        $cValue = $phpValue;
        $widthC = $cValue;
        $phpValue = $height;
        $cValue = $phpValue;
        $heightC = $cValue;
        $phpValue = $depth;
        $cValue = $phpValue;
        $depthC = $cValue;
        $cValue = $this->ffi->vkCmdTraceRaysKHR(
            $commandBufferC,
            $pRaygenShaderBindingTableC,
            $pMissShaderBindingTableC,
            $pHitShaderBindingTableC,
            $pCallableShaderBindingTableC,
            $widthC,
            $heightC,
            $depthC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkBuffer $raygenShaderBindingTableBuffer VkBuffer
     * @param int $raygenShaderBindingOffset VkDeviceSize
     * @param \\iggyvolz\vulkan\struct\VkBuffer $missShaderBindingTableBuffer VkBuffer
     * @param int $missShaderBindingOffset VkDeviceSize
     * @param int $missShaderBindingStride VkDeviceSize
     * @param \\iggyvolz\vulkan\struct\VkBuffer $hitShaderBindingTableBuffer VkBuffer
     * @param int $hitShaderBindingOffset VkDeviceSize
     * @param int $hitShaderBindingStride VkDeviceSize
     * @param \\iggyvolz\vulkan\struct\VkBuffer $callableShaderBindingTableBuffer VkBuffer
     * @param int $callableShaderBindingOffset VkDeviceSize
     * @param int $callableShaderBindingStride VkDeviceSize
     * @param int $width uint32_t
     * @param int $height uint32_t
     * @param int $depth uint32_t
     */
    public function vkCmdTraceRaysNV(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkBuffer $raygenShaderBindingTableBuffer,
        int $raygenShaderBindingOffset,
        struct\VkBuffer $missShaderBindingTableBuffer,
        int $missShaderBindingOffset,
        int $missShaderBindingStride,
        struct\VkBuffer $hitShaderBindingTableBuffer,
        int $hitShaderBindingOffset,
        int $hitShaderBindingStride,
        struct\VkBuffer $callableShaderBindingTableBuffer,
        int $callableShaderBindingOffset,
        int $callableShaderBindingStride,
        int $width,
        int $height,
        int $depth,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $raygenShaderBindingTableBuffer;
        $cValue = $phpValue->cdata;
        $raygenShaderBindingTableBufferC = $cValue;
        $phpValue = $raygenShaderBindingOffset;
        $cValue = $phpValue;
        $raygenShaderBindingOffsetC = $cValue;
        $phpValue = $missShaderBindingTableBuffer;
        $cValue = $phpValue->cdata;
        $missShaderBindingTableBufferC = $cValue;
        $phpValue = $missShaderBindingOffset;
        $cValue = $phpValue;
        $missShaderBindingOffsetC = $cValue;
        $phpValue = $missShaderBindingStride;
        $cValue = $phpValue;
        $missShaderBindingStrideC = $cValue;
        $phpValue = $hitShaderBindingTableBuffer;
        $cValue = $phpValue->cdata;
        $hitShaderBindingTableBufferC = $cValue;
        $phpValue = $hitShaderBindingOffset;
        $cValue = $phpValue;
        $hitShaderBindingOffsetC = $cValue;
        $phpValue = $hitShaderBindingStride;
        $cValue = $phpValue;
        $hitShaderBindingStrideC = $cValue;
        $phpValue = $callableShaderBindingTableBuffer;
        $cValue = $phpValue->cdata;
        $callableShaderBindingTableBufferC = $cValue;
        $phpValue = $callableShaderBindingOffset;
        $cValue = $phpValue;
        $callableShaderBindingOffsetC = $cValue;
        $phpValue = $callableShaderBindingStride;
        $cValue = $phpValue;
        $callableShaderBindingStrideC = $cValue;
        $phpValue = $width;
        $cValue = $phpValue;
        $widthC = $cValue;
        $phpValue = $height;
        $cValue = $phpValue;
        $heightC = $cValue;
        $phpValue = $depth;
        $cValue = $phpValue;
        $depthC = $cValue;
        $cValue = $this->ffi->vkCmdTraceRaysNV(
            $commandBufferC,
            $raygenShaderBindingTableBufferC,
            $raygenShaderBindingOffsetC,
            $missShaderBindingTableBufferC,
            $missShaderBindingOffsetC,
            $missShaderBindingStrideC,
            $hitShaderBindingTableBufferC,
            $hitShaderBindingOffsetC,
            $hitShaderBindingStrideC,
            $callableShaderBindingTableBufferC,
            $callableShaderBindingOffsetC,
            $callableShaderBindingStrideC,
            $widthC,
            $heightC,
            $depthC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkPipeline $pipeline VkPipeline
     * @param int $firstGroup uint32_t
     * @param int $groupCount uint32_t
     * @param int $dataSize size_t
     * @param \iggyvolz\vulkan\util\Pointer $pData void*
     * returns VkResult
     */
    public function vkGetRayTracingShaderGroupHandlesKHR(
        struct\VkDevice $device,
        struct\VkPipeline $pipeline,
        int $firstGroup,
        int $groupCount,
        int $dataSize,
        util\Pointer $pData,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pipeline;
        $cValue = $phpValue->cdata;
        $pipelineC = $cValue;
        $phpValue = $firstGroup;
        $cValue = $phpValue;
        $firstGroupC = $cValue;
        $phpValue = $groupCount;
        $cValue = $phpValue;
        $groupCountC = $cValue;
        $phpValue = $dataSize;
        $cValue = $phpValue;
        $dataSizeC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $cValue = $this->ffi->vkGetRayTracingShaderGroupHandlesKHR(
            $deviceC,
            $pipelineC,
            $firstGroupC,
            $groupCountC,
            $dataSizeC,
            $pDataC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkPipeline $pipeline VkPipeline
     * @param int $firstGroup uint32_t
     * @param int $groupCount uint32_t
     * @param int $dataSize size_t
     * @param \iggyvolz\vulkan\util\Pointer $pData void*
     * returns VkResult
     */
    public function vkGetRayTracingCaptureReplayShaderGroupHandlesKHR(
        struct\VkDevice $device,
        struct\VkPipeline $pipeline,
        int $firstGroup,
        int $groupCount,
        int $dataSize,
        util\Pointer $pData,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pipeline;
        $cValue = $phpValue->cdata;
        $pipelineC = $cValue;
        $phpValue = $firstGroup;
        $cValue = $phpValue;
        $firstGroupC = $cValue;
        $phpValue = $groupCount;
        $cValue = $phpValue;
        $groupCountC = $cValue;
        $phpValue = $dataSize;
        $cValue = $phpValue;
        $dataSizeC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $cValue = $this->ffi->vkGetRayTracingCaptureReplayShaderGroupHandlesKHR(
            $deviceC,
            $pipelineC,
            $firstGroupC,
            $groupCountC,
            $dataSizeC,
            $pDataC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkAccelerationStructureNV $accelerationStructure VkAccelerationStructureNV
     * @param int $dataSize size_t
     * @param \iggyvolz\vulkan\util\Pointer $pData void*
     * returns VkResult
     */
    public function vkGetAccelerationStructureHandleNV(
        struct\VkDevice $device,
        struct\VkAccelerationStructureNV $accelerationStructure,
        int $dataSize,
        util\Pointer $pData,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $accelerationStructure;
        $cValue = $phpValue->cdata;
        $accelerationStructureC = $cValue;
        $phpValue = $dataSize;
        $cValue = $phpValue;
        $dataSizeC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $cValue = $this->ffi->vkGetAccelerationStructureHandleNV(
            $deviceC,
            $accelerationStructureC,
            $dataSizeC,
            $pDataC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkPipelineCache $pipelineCache VkPipelineCache
     * @param int $createInfoCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRayTracingPipelineCreateInfoNV> $pCreateInfos const VkRayTracingPipelineCreateInfoNV*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipeline> $pPipelines VkPipeline*
     * returns VkResult
     */
    public function vkCreateRayTracingPipelinesNV(
        struct\VkDevice $device,
        struct\VkPipelineCache $pipelineCache,
        int $createInfoCount,
        util\ObjectPointer $pCreateInfos,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pPipelines,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pipelineCache;
        $cValue = $phpValue->cdata;
        $pipelineCacheC = $cValue;
        $phpValue = $createInfoCount;
        $cValue = $phpValue;
        $createInfoCountC = $cValue;
        $phpValue = $pCreateInfos;
        $cValue = $phpValue->cdata;
        $pCreateInfosC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pPipelines;
        $cValue = $phpValue->cdata;
        $pPipelinesC = $cValue;
        $cValue = $this->ffi->vkCreateRayTracingPipelinesNV(
            $deviceC,
            $pipelineCacheC,
            $createInfoCountC,
            $pCreateInfosC,
            $pAllocatorC,
            $pPipelinesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation VkDeferredOperationKHR
     * @param \\iggyvolz\vulkan\struct\VkPipelineCache $pipelineCache VkPipelineCache
     * @param int $createInfoCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRayTracingPipelineCreateInfoKHR> $pCreateInfos const VkRayTracingPipelineCreateInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipeline> $pPipelines VkPipeline*
     * returns VkResult
     */
    public function vkCreateRayTracingPipelinesKHR(
        struct\VkDevice $device,
        struct\VkDeferredOperationKHR $deferredOperation,
        struct\VkPipelineCache $pipelineCache,
        int $createInfoCount,
        util\ObjectPointer $pCreateInfos,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pPipelines,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $deferredOperation;
        $cValue = $phpValue->cdata;
        $deferredOperationC = $cValue;
        $phpValue = $pipelineCache;
        $cValue = $phpValue->cdata;
        $pipelineCacheC = $cValue;
        $phpValue = $createInfoCount;
        $cValue = $phpValue;
        $createInfoCountC = $cValue;
        $phpValue = $pCreateInfos;
        $cValue = $phpValue->cdata;
        $pCreateInfosC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pPipelines;
        $cValue = $phpValue->cdata;
        $pPipelinesC = $cValue;
        $cValue = $this->ffi->vkCreateRayTracingPipelinesKHR(
            $deviceC,
            $deferredOperationC,
            $pipelineCacheC,
            $createInfoCountC,
            $pCreateInfosC,
            $pAllocatorC,
            $pPipelinesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\IntPointer $pPropertyCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCooperativeMatrixPropertiesNV> $pProperties VkCooperativeMatrixPropertiesNV*
     * returns VkResult
     */
    public function vkGetPhysicalDeviceCooperativeMatrixPropertiesNV(
        struct\VkPhysicalDevice $physicalDevice,
        util\IntPointer $pPropertyCount,
        util\ObjectPointer $pProperties,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pPropertyCount;
        $cValue = $phpValue->cdata;
        $pPropertyCountC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceCooperativeMatrixPropertiesNV(
            $physicalDeviceC,
            $pPropertyCountC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkStridedDeviceAddressRegionKHR> $pRaygenShaderBindingTable const VkStridedDeviceAddressRegionKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkStridedDeviceAddressRegionKHR> $pMissShaderBindingTable const VkStridedDeviceAddressRegionKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkStridedDeviceAddressRegionKHR> $pHitShaderBindingTable const VkStridedDeviceAddressRegionKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkStridedDeviceAddressRegionKHR> $pCallableShaderBindingTable const VkStridedDeviceAddressRegionKHR*
     * @param int $indirectDeviceAddress VkDeviceAddress
     */
    public function vkCmdTraceRaysIndirectKHR(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pRaygenShaderBindingTable,
        util\ObjectPointer $pMissShaderBindingTable,
        util\ObjectPointer $pHitShaderBindingTable,
        util\ObjectPointer $pCallableShaderBindingTable,
        int $indirectDeviceAddress,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pRaygenShaderBindingTable;
        $cValue = $phpValue->cdata;
        $pRaygenShaderBindingTableC = $cValue;
        $phpValue = $pMissShaderBindingTable;
        $cValue = $phpValue->cdata;
        $pMissShaderBindingTableC = $cValue;
        $phpValue = $pHitShaderBindingTable;
        $cValue = $phpValue->cdata;
        $pHitShaderBindingTableC = $cValue;
        $phpValue = $pCallableShaderBindingTable;
        $cValue = $phpValue->cdata;
        $pCallableShaderBindingTableC = $cValue;
        $phpValue = $indirectDeviceAddress;
        $cValue = $phpValue;
        $indirectDeviceAddressC = $cValue;
        $cValue = $this->ffi->vkCmdTraceRaysIndirectKHR(
            $commandBufferC,
            $pRaygenShaderBindingTableC,
            $pMissShaderBindingTableC,
            $pHitShaderBindingTableC,
            $pCallableShaderBindingTableC,
            $indirectDeviceAddressC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $indirectDeviceAddress VkDeviceAddress
     */
    public function vkCmdTraceRaysIndirect2KHR(
        struct\VkCommandBuffer $commandBuffer,
        int $indirectDeviceAddress,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $indirectDeviceAddress;
        $cValue = $phpValue;
        $indirectDeviceAddressC = $cValue;
        $cValue = $this->ffi->vkCmdTraceRaysIndirect2KHR(
            $commandBufferC,
            $indirectDeviceAddressC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAccelerationStructureVersionInfoKHR> $pVersionInfo const VkAccelerationStructureVersionInfoKHR*
     * @param \iggyvolz\vulkan\util\Pointer $pCompatibility VkAccelerationStructureCompatibilityKHR*
     */
    public function vkGetDeviceAccelerationStructureCompatibilityKHR(
        struct\VkDevice $device,
        util\ObjectPointer $pVersionInfo,
        util\Pointer $pCompatibility,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pVersionInfo;
        $cValue = $phpValue->cdata;
        $pVersionInfoC = $cValue;
        $phpValue = $pCompatibility;
        $cValue = $phpValue->cdata;
        $pCompatibilityC = $cValue;
        $cValue = $this->ffi->vkGetDeviceAccelerationStructureCompatibilityKHR(
            $deviceC,
            $pVersionInfoC,
            $pCompatibilityC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkPipeline $pipeline VkPipeline
     * @param int $group uint32_t
     * @param \\iggyvolz\vulkan\enum\VkShaderGroupShaderKHR $groupShader VkShaderGroupShaderKHR
     * returns VkDeviceSize
     */
    public function vkGetRayTracingShaderGroupStackSizeKHR(
        struct\VkDevice $device,
        struct\VkPipeline $pipeline,
        int $group,
        enum\VkShaderGroupShaderKHR $groupShader,
    ): int
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pipeline;
        $cValue = $phpValue->cdata;
        $pipelineC = $cValue;
        $phpValue = $group;
        $cValue = $phpValue;
        $groupC = $cValue;
        $phpValue = $groupShader;
        $cValue = $phpValue->value;
        $groupShaderC = $cValue;
        $cValue = $this->ffi->vkGetRayTracingShaderGroupStackSizeKHR(
            $deviceC,
            $pipelineC,
            $groupC,
            $groupShaderC,
        );
        $phpValue = $cValue;
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $pipelineStackSize uint32_t
     */
    public function vkCmdSetRayTracingPipelineStackSizeKHR(
        struct\VkCommandBuffer $commandBuffer,
        int $pipelineStackSize,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pipelineStackSize;
        $cValue = $phpValue;
        $pipelineStackSizeC = $cValue;
        $cValue = $this->ffi->vkCmdSetRayTracingPipelineStackSizeKHR(
            $commandBufferC,
            $pipelineStackSizeC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageViewHandleInfoNVX> $pInfo const VkImageViewHandleInfoNVX*
     * returns uint32_t
     */
    public function vkGetImageViewHandleNVX(struct\VkDevice $device, util\ObjectPointer $pInfo): int
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->ffi->vkGetImageViewHandleNVX(
            $deviceC,
            $pInfoC,
        );
        $phpValue = $cValue;
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkImageView $imageView VkImageView
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageViewAddressPropertiesNVX> $pProperties VkImageViewAddressPropertiesNVX*
     * returns VkResult
     */
    public function vkGetImageViewAddressNVX(
        struct\VkDevice $device,
        struct\VkImageView $imageView,
        util\ObjectPointer $pProperties,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $imageView;
        $cValue = $phpValue->cdata;
        $imageViewC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetImageViewAddressNVX(
            $deviceC,
            $imageViewC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceSurfaceInfo2KHR> $pSurfaceInfo const VkPhysicalDeviceSurfaceInfo2KHR*
     * @param \iggyvolz\vulkan\util\IntPointer $pPresentModeCount uint32_t*
     * @param \iggyvolz\vulkan\util\Pointer $pPresentModes VkPresentModeKHR*
     * returns VkResult
     */
    public function vkGetPhysicalDeviceSurfacePresentModes2EXT(
        struct\VkPhysicalDevice $physicalDevice,
        util\ObjectPointer $pSurfaceInfo,
        util\IntPointer $pPresentModeCount,
        util\Pointer $pPresentModes,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pSurfaceInfo;
        $cValue = $phpValue->cdata;
        $pSurfaceInfoC = $cValue;
        $phpValue = $pPresentModeCount;
        $cValue = $phpValue->cdata;
        $pPresentModeCountC = $cValue;
        $phpValue = $pPresentModes;
        $cValue = $phpValue->cdata;
        $pPresentModesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceSurfacePresentModes2EXT(
            $physicalDeviceC,
            $pSurfaceInfoC,
            $pPresentModeCountC,
            $pPresentModesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceSurfaceInfo2KHR> $pSurfaceInfo const VkPhysicalDeviceSurfaceInfo2KHR*
     * @param \iggyvolz\vulkan\util\Pointer $pModes VkDeviceGroupPresentModeFlagsKHR*
     * returns VkResult
     */
    public function vkGetDeviceGroupSurfacePresentModes2EXT(
        struct\VkDevice $device,
        util\ObjectPointer $pSurfaceInfo,
        util\Pointer $pModes,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pSurfaceInfo;
        $cValue = $phpValue->cdata;
        $pSurfaceInfoC = $cValue;
        $phpValue = $pModes;
        $cValue = $phpValue->cdata;
        $pModesC = $cValue;
        $cValue = $this->ffi->vkGetDeviceGroupSurfacePresentModes2EXT(
            $deviceC,
            $pSurfaceInfoC,
            $pModesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain VkSwapchainKHR
     * returns VkResult
     */
    public function vkAcquireFullScreenExclusiveModeEXT(
        struct\VkDevice $device,
        struct\VkSwapchainKHR $swapchain,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $swapchain;
        $cValue = $phpValue->cdata;
        $swapchainC = $cValue;
        $cValue = $this->ffi->vkAcquireFullScreenExclusiveModeEXT(
            $deviceC,
            $swapchainC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain VkSwapchainKHR
     * returns VkResult
     */
    public function vkReleaseFullScreenExclusiveModeEXT(
        struct\VkDevice $device,
        struct\VkSwapchainKHR $swapchain,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $swapchain;
        $cValue = $phpValue->cdata;
        $swapchainC = $cValue;
        $cValue = $this->ffi->vkReleaseFullScreenExclusiveModeEXT(
            $deviceC,
            $swapchainC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param int $queueFamilyIndex uint32_t
     * @param \iggyvolz\vulkan\util\IntPointer $pCounterCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPerformanceCounterKHR> $pCounters VkPerformanceCounterKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPerformanceCounterDescriptionKHR> $pCounterDescriptions VkPerformanceCounterDescriptionKHR*
     * returns VkResult
     */
    public function vkEnumeratePhysicalDeviceQueueFamilyPerformanceQueryCountersKHR(
        struct\VkPhysicalDevice $physicalDevice,
        int $queueFamilyIndex,
        util\IntPointer $pCounterCount,
        util\ObjectPointer $pCounters,
        util\ObjectPointer $pCounterDescriptions,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
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
        $cValue = $this->ffi->vkEnumeratePhysicalDeviceQueueFamilyPerformanceQueryCountersKHR(
            $physicalDeviceC,
            $queueFamilyIndexC,
            $pCounterCountC,
            $pCountersC,
            $pCounterDescriptionsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkQueryPoolPerformanceCreateInfoKHR> $pPerformanceQueryCreateInfo const VkQueryPoolPerformanceCreateInfoKHR*
     * @param \iggyvolz\vulkan\util\IntPointer $pNumPasses uint32_t*
     */
    public function vkGetPhysicalDeviceQueueFamilyPerformanceQueryPassesKHR(
        struct\VkPhysicalDevice $physicalDevice,
        util\ObjectPointer $pPerformanceQueryCreateInfo,
        util\IntPointer $pNumPasses,
    ): void
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pPerformanceQueryCreateInfo;
        $cValue = $phpValue->cdata;
        $pPerformanceQueryCreateInfoC = $cValue;
        $phpValue = $pNumPasses;
        $cValue = $phpValue->cdata;
        $pNumPassesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceQueueFamilyPerformanceQueryPassesKHR(
            $physicalDeviceC,
            $pPerformanceQueryCreateInfoC,
            $pNumPassesC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAcquireProfilingLockInfoKHR> $pInfo const VkAcquireProfilingLockInfoKHR*
     * returns VkResult
     */
    public function vkAcquireProfilingLockKHR(struct\VkDevice $device, util\ObjectPointer $pInfo): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->ffi->vkAcquireProfilingLockKHR(
            $deviceC,
            $pInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     */
    public function vkReleaseProfilingLockKHR(struct\VkDevice $device): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $cValue = $this->ffi->vkReleaseProfilingLockKHR(
            $deviceC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkImage $image VkImage
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageDrmFormatModifierPropertiesEXT> $pProperties VkImageDrmFormatModifierPropertiesEXT*
     * returns VkResult
     */
    public function vkGetImageDrmFormatModifierPropertiesEXT(
        struct\VkDevice $device,
        struct\VkImage $image,
        util\ObjectPointer $pProperties,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $image;
        $cValue = $phpValue->cdata;
        $imageC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetImageDrmFormatModifierPropertiesEXT(
            $deviceC,
            $imageC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBufferDeviceAddressInfo> $pInfo const VkBufferDeviceAddressInfo*
     * returns uint64_t
     */
    public function vkGetBufferOpaqueCaptureAddress(struct\VkDevice $device, util\ObjectPointer $pInfo): int
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->ffi->vkGetBufferOpaqueCaptureAddress(
            $deviceC,
            $pInfoC,
        );
        $phpValue = $cValue;
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBufferDeviceAddressInfo> $pInfo const VkBufferDeviceAddressInfo*
     * returns VkDeviceAddress
     */
    public function vkGetBufferDeviceAddress(struct\VkDevice $device, util\ObjectPointer $pInfo): int
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->ffi->vkGetBufferDeviceAddress(
            $deviceC,
            $pInfoC,
        );
        $phpValue = $cValue;
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkInstance $instance VkInstance
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkHeadlessSurfaceCreateInfoEXT> $pCreateInfo const VkHeadlessSurfaceCreateInfoEXT*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSurfaceKHR> $pSurface VkSurfaceKHR*
     * returns VkResult
     */
    public function vkCreateHeadlessSurfaceEXT(
        struct\VkInstance $instance,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pSurface,
    ): enum\VkResult
    {
        $phpValue = $instance;
        $cValue = $phpValue->cdata;
        $instanceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSurface;
        $cValue = $phpValue->cdata;
        $pSurfaceC = $cValue;
        $cValue = $this->ffi->vkCreateHeadlessSurfaceEXT(
            $instanceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pSurfaceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\IntPointer $pCombinationCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkFramebufferMixedSamplesCombinationNV> $pCombinations VkFramebufferMixedSamplesCombinationNV*
     * returns VkResult
     */
    public function vkGetPhysicalDeviceSupportedFramebufferMixedSamplesCombinationsNV(
        struct\VkPhysicalDevice $physicalDevice,
        util\IntPointer $pCombinationCount,
        util\ObjectPointer $pCombinations,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pCombinationCount;
        $cValue = $phpValue->cdata;
        $pCombinationCountC = $cValue;
        $phpValue = $pCombinations;
        $cValue = $phpValue->cdata;
        $pCombinationsC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceSupportedFramebufferMixedSamplesCombinationsNV(
            $physicalDeviceC,
            $pCombinationCountC,
            $pCombinationsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkInitializePerformanceApiInfoINTEL> $pInitializeInfo const VkInitializePerformanceApiInfoINTEL*
     * returns VkResult
     */
    public function vkInitializePerformanceApiINTEL(
        struct\VkDevice $device,
        util\ObjectPointer $pInitializeInfo,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pInitializeInfo;
        $cValue = $phpValue->cdata;
        $pInitializeInfoC = $cValue;
        $cValue = $this->ffi->vkInitializePerformanceApiINTEL(
            $deviceC,
            $pInitializeInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     */
    public function vkUninitializePerformanceApiINTEL(struct\VkDevice $device): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $cValue = $this->ffi->vkUninitializePerformanceApiINTEL(
            $deviceC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPerformanceMarkerInfoINTEL> $pMarkerInfo const VkPerformanceMarkerInfoINTEL*
     * returns VkResult
     */
    public function vkCmdSetPerformanceMarkerINTEL(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pMarkerInfo,
    ): enum\VkResult
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pMarkerInfo;
        $cValue = $phpValue->cdata;
        $pMarkerInfoC = $cValue;
        $cValue = $this->ffi->vkCmdSetPerformanceMarkerINTEL(
            $commandBufferC,
            $pMarkerInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPerformanceStreamMarkerInfoINTEL> $pMarkerInfo const VkPerformanceStreamMarkerInfoINTEL*
     * returns VkResult
     */
    public function vkCmdSetPerformanceStreamMarkerINTEL(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pMarkerInfo,
    ): enum\VkResult
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pMarkerInfo;
        $cValue = $phpValue->cdata;
        $pMarkerInfoC = $cValue;
        $cValue = $this->ffi->vkCmdSetPerformanceStreamMarkerINTEL(
            $commandBufferC,
            $pMarkerInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPerformanceOverrideInfoINTEL> $pOverrideInfo const VkPerformanceOverrideInfoINTEL*
     * returns VkResult
     */
    public function vkCmdSetPerformanceOverrideINTEL(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pOverrideInfo,
    ): enum\VkResult
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pOverrideInfo;
        $cValue = $phpValue->cdata;
        $pOverrideInfoC = $cValue;
        $cValue = $this->ffi->vkCmdSetPerformanceOverrideINTEL(
            $commandBufferC,
            $pOverrideInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPerformanceConfigurationAcquireInfoINTEL> $pAcquireInfo const VkPerformanceConfigurationAcquireInfoINTEL*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPerformanceConfigurationINTEL> $pConfiguration VkPerformanceConfigurationINTEL*
     * returns VkResult
     */
    public function vkAcquirePerformanceConfigurationINTEL(
        struct\VkDevice $device,
        util\ObjectPointer $pAcquireInfo,
        util\ObjectPointer $pConfiguration,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pAcquireInfo;
        $cValue = $phpValue->cdata;
        $pAcquireInfoC = $cValue;
        $phpValue = $pConfiguration;
        $cValue = $phpValue->cdata;
        $pConfigurationC = $cValue;
        $cValue = $this->ffi->vkAcquirePerformanceConfigurationINTEL(
            $deviceC,
            $pAcquireInfoC,
            $pConfigurationC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkPerformanceConfigurationINTEL $configuration VkPerformanceConfigurationINTEL
     * returns VkResult
     */
    public function vkReleasePerformanceConfigurationINTEL(
        struct\VkDevice $device,
        struct\VkPerformanceConfigurationINTEL $configuration,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $configuration;
        $cValue = $phpValue->cdata;
        $configurationC = $cValue;
        $cValue = $this->ffi->vkReleasePerformanceConfigurationINTEL(
            $deviceC,
            $configurationC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkQueue $queue VkQueue
     * @param \\iggyvolz\vulkan\struct\VkPerformanceConfigurationINTEL $configuration VkPerformanceConfigurationINTEL
     * returns VkResult
     */
    public function vkQueueSetPerformanceConfigurationINTEL(
        struct\VkQueue $queue,
        struct\VkPerformanceConfigurationINTEL $configuration,
    ): enum\VkResult
    {
        $phpValue = $queue;
        $cValue = $phpValue->cdata;
        $queueC = $cValue;
        $phpValue = $configuration;
        $cValue = $phpValue->cdata;
        $configurationC = $cValue;
        $cValue = $this->ffi->vkQueueSetPerformanceConfigurationINTEL(
            $queueC,
            $configurationC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\enum\VkPerformanceParameterTypeINTEL $parameter VkPerformanceParameterTypeINTEL
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPerformanceValueINTEL> $pValue VkPerformanceValueINTEL*
     * returns VkResult
     */
    public function vkGetPerformanceParameterINTEL(
        struct\VkDevice $device,
        enum\VkPerformanceParameterTypeINTEL $parameter,
        util\ObjectPointer $pValue,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $parameter;
        $cValue = $phpValue->value;
        $parameterC = $cValue;
        $phpValue = $pValue;
        $cValue = $phpValue->cdata;
        $pValueC = $cValue;
        $cValue = $this->ffi->vkGetPerformanceParameterINTEL(
            $deviceC,
            $parameterC,
            $pValueC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDeviceMemoryOpaqueCaptureAddressInfo> $pInfo const VkDeviceMemoryOpaqueCaptureAddressInfo*
     * returns uint64_t
     */
    public function vkGetDeviceMemoryOpaqueCaptureAddress(struct\VkDevice $device, util\ObjectPointer $pInfo): int
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->ffi->vkGetDeviceMemoryOpaqueCaptureAddress(
            $deviceC,
            $pInfoC,
        );
        $phpValue = $cValue;
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipelineInfoKHR> $pPipelineInfo const VkPipelineInfoKHR*
     * @param \iggyvolz\vulkan\util\IntPointer $pExecutableCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipelineExecutablePropertiesKHR> $pProperties VkPipelineExecutablePropertiesKHR*
     * returns VkResult
     */
    public function vkGetPipelineExecutablePropertiesKHR(
        struct\VkDevice $device,
        util\ObjectPointer $pPipelineInfo,
        util\IntPointer $pExecutableCount,
        util\ObjectPointer $pProperties,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pPipelineInfo;
        $cValue = $phpValue->cdata;
        $pPipelineInfoC = $cValue;
        $phpValue = $pExecutableCount;
        $cValue = $phpValue->cdata;
        $pExecutableCountC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetPipelineExecutablePropertiesKHR(
            $deviceC,
            $pPipelineInfoC,
            $pExecutableCountC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipelineExecutableInfoKHR> $pExecutableInfo const VkPipelineExecutableInfoKHR*
     * @param \iggyvolz\vulkan\util\IntPointer $pStatisticCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipelineExecutableStatisticKHR> $pStatistics VkPipelineExecutableStatisticKHR*
     * returns VkResult
     */
    public function vkGetPipelineExecutableStatisticsKHR(
        struct\VkDevice $device,
        util\ObjectPointer $pExecutableInfo,
        util\IntPointer $pStatisticCount,
        util\ObjectPointer $pStatistics,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pExecutableInfo;
        $cValue = $phpValue->cdata;
        $pExecutableInfoC = $cValue;
        $phpValue = $pStatisticCount;
        $cValue = $phpValue->cdata;
        $pStatisticCountC = $cValue;
        $phpValue = $pStatistics;
        $cValue = $phpValue->cdata;
        $pStatisticsC = $cValue;
        $cValue = $this->ffi->vkGetPipelineExecutableStatisticsKHR(
            $deviceC,
            $pExecutableInfoC,
            $pStatisticCountC,
            $pStatisticsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipelineExecutableInfoKHR> $pExecutableInfo const VkPipelineExecutableInfoKHR*
     * @param \iggyvolz\vulkan\util\IntPointer $pInternalRepresentationCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipelineExecutableInternalRepresentationKHR> $pInternalRepresentations VkPipelineExecutableInternalRepresentationKHR*
     * returns VkResult
     */
    public function vkGetPipelineExecutableInternalRepresentationsKHR(
        struct\VkDevice $device,
        util\ObjectPointer $pExecutableInfo,
        util\IntPointer $pInternalRepresentationCount,
        util\ObjectPointer $pInternalRepresentations,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pExecutableInfo;
        $cValue = $phpValue->cdata;
        $pExecutableInfoC = $cValue;
        $phpValue = $pInternalRepresentationCount;
        $cValue = $phpValue->cdata;
        $pInternalRepresentationCountC = $cValue;
        $phpValue = $pInternalRepresentations;
        $cValue = $phpValue->cdata;
        $pInternalRepresentationsC = $cValue;
        $cValue = $this->ffi->vkGetPipelineExecutableInternalRepresentationsKHR(
            $deviceC,
            $pExecutableInfoC,
            $pInternalRepresentationCountC,
            $pInternalRepresentationsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $lineStippleFactor uint32_t
     * @param int $lineStipplePattern uint16_t
     */
    public function vkCmdSetLineStippleEXT(
        struct\VkCommandBuffer $commandBuffer,
        int $lineStippleFactor,
        int $lineStipplePattern,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $lineStippleFactor;
        $cValue = $phpValue;
        $lineStippleFactorC = $cValue;
        $phpValue = $lineStipplePattern;
        $cValue = $phpValue;
        $lineStipplePatternC = $cValue;
        $cValue = $this->ffi->vkCmdSetLineStippleEXT(
            $commandBufferC,
            $lineStippleFactorC,
            $lineStipplePatternC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\enum\VkFaultQueryBehavior $faultQueryBehavior VkFaultQueryBehavior
     * @param \iggyvolz\vulkan\util\Pointer $pUnrecordedFaults VkBool32*
     * @param \iggyvolz\vulkan\util\IntPointer $pFaultCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkFaultData> $pFaults VkFaultData*
     * returns VkResult
     */
    public function vkGetFaultData(
        struct\VkDevice $device,
        enum\VkFaultQueryBehavior $faultQueryBehavior,
        util\Pointer $pUnrecordedFaults,
        util\IntPointer $pFaultCount,
        util\ObjectPointer $pFaults,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $faultQueryBehavior;
        $cValue = $phpValue->value;
        $faultQueryBehaviorC = $cValue;
        $phpValue = $pUnrecordedFaults;
        $cValue = $phpValue->cdata;
        $pUnrecordedFaultsC = $cValue;
        $phpValue = $pFaultCount;
        $cValue = $phpValue->cdata;
        $pFaultCountC = $cValue;
        $phpValue = $pFaults;
        $cValue = $phpValue->cdata;
        $pFaultsC = $cValue;
        $cValue = $this->ffi->vkGetFaultData(
            $deviceC,
            $faultQueryBehaviorC,
            $pUnrecordedFaultsC,
            $pFaultCountC,
            $pFaultsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\IntPointer $pToolCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceToolProperties> $pToolProperties VkPhysicalDeviceToolProperties*
     * returns VkResult
     */
    public function vkGetPhysicalDeviceToolProperties(
        struct\VkPhysicalDevice $physicalDevice,
        util\IntPointer $pToolCount,
        util\ObjectPointer $pToolProperties,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pToolCount;
        $cValue = $phpValue->cdata;
        $pToolCountC = $cValue;
        $phpValue = $pToolProperties;
        $cValue = $phpValue->cdata;
        $pToolPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceToolProperties(
            $physicalDeviceC,
            $pToolCountC,
            $pToolPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAccelerationStructureCreateInfoKHR> $pCreateInfo const VkAccelerationStructureCreateInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAccelerationStructureKHR> $pAccelerationStructure VkAccelerationStructureKHR*
     * returns VkResult
     */
    public function vkCreateAccelerationStructureKHR(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pAccelerationStructure,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pAccelerationStructure;
        $cValue = $phpValue->cdata;
        $pAccelerationStructureC = $cValue;
        $cValue = $this->ffi->vkCreateAccelerationStructureKHR(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pAccelerationStructureC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $infoCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAccelerationStructureBuildGeometryInfoKHR> $pInfos const VkAccelerationStructureBuildGeometryInfoKHR*
     * @param \iggyvolz\vulkan\util\Pointer $ppBuildRangeInfos const VkAccelerationStructureBuildRangeInfoKHR* const*
     */
    public function vkCmdBuildAccelerationStructuresKHR(
        struct\VkCommandBuffer $commandBuffer,
        int $infoCount,
        util\ObjectPointer $pInfos,
        util\Pointer $ppBuildRangeInfos,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $infoCount;
        $cValue = $phpValue;
        $infoCountC = $cValue;
        $phpValue = $pInfos;
        $cValue = $phpValue->cdata;
        $pInfosC = $cValue;
        $phpValue = $ppBuildRangeInfos;
        $cValue = $phpValue->cdata;
        $ppBuildRangeInfosC = $cValue;
        $cValue = $this->ffi->vkCmdBuildAccelerationStructuresKHR(
            $commandBufferC,
            $infoCountC,
            $pInfosC,
            $ppBuildRangeInfosC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $infoCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAccelerationStructureBuildGeometryInfoKHR> $pInfos const VkAccelerationStructureBuildGeometryInfoKHR*
     * @param \iggyvolz\vulkan\util\Pointer $pIndirectDeviceAddresses const VkDeviceAddress*
     * @param \iggyvolz\vulkan\util\IntPointer $pIndirectStrides const uint32_t*
     * @param \iggyvolz\vulkan\util\Pointer $ppMaxPrimitiveCounts const uint32_t* const*
     */
    public function vkCmdBuildAccelerationStructuresIndirectKHR(
        struct\VkCommandBuffer $commandBuffer,
        int $infoCount,
        util\ObjectPointer $pInfos,
        util\Pointer $pIndirectDeviceAddresses,
        util\IntPointer $pIndirectStrides,
        util\Pointer $ppMaxPrimitiveCounts,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $infoCount;
        $cValue = $phpValue;
        $infoCountC = $cValue;
        $phpValue = $pInfos;
        $cValue = $phpValue->cdata;
        $pInfosC = $cValue;
        $phpValue = $pIndirectDeviceAddresses;
        $cValue = $phpValue->cdata;
        $pIndirectDeviceAddressesC = $cValue;
        $phpValue = $pIndirectStrides;
        $cValue = $phpValue->cdata;
        $pIndirectStridesC = $cValue;
        $phpValue = $ppMaxPrimitiveCounts;
        $cValue = $phpValue->cdata;
        $ppMaxPrimitiveCountsC = $cValue;
        $cValue = $this->ffi->vkCmdBuildAccelerationStructuresIndirectKHR(
            $commandBufferC,
            $infoCountC,
            $pInfosC,
            $pIndirectDeviceAddressesC,
            $pIndirectStridesC,
            $ppMaxPrimitiveCountsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation VkDeferredOperationKHR
     * @param int $infoCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAccelerationStructureBuildGeometryInfoKHR> $pInfos const VkAccelerationStructureBuildGeometryInfoKHR*
     * @param \iggyvolz\vulkan\util\Pointer $ppBuildRangeInfos const VkAccelerationStructureBuildRangeInfoKHR* const*
     * returns VkResult
     */
    public function vkBuildAccelerationStructuresKHR(
        struct\VkDevice $device,
        struct\VkDeferredOperationKHR $deferredOperation,
        int $infoCount,
        util\ObjectPointer $pInfos,
        util\Pointer $ppBuildRangeInfos,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $deferredOperation;
        $cValue = $phpValue->cdata;
        $deferredOperationC = $cValue;
        $phpValue = $infoCount;
        $cValue = $phpValue;
        $infoCountC = $cValue;
        $phpValue = $pInfos;
        $cValue = $phpValue->cdata;
        $pInfosC = $cValue;
        $phpValue = $ppBuildRangeInfos;
        $cValue = $phpValue->cdata;
        $ppBuildRangeInfosC = $cValue;
        $cValue = $this->ffi->vkBuildAccelerationStructuresKHR(
            $deviceC,
            $deferredOperationC,
            $infoCountC,
            $pInfosC,
            $ppBuildRangeInfosC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAccelerationStructureDeviceAddressInfoKHR> $pInfo const VkAccelerationStructureDeviceAddressInfoKHR*
     * returns VkDeviceAddress
     */
    public function vkGetAccelerationStructureDeviceAddressKHR(
        struct\VkDevice $device,
        util\ObjectPointer $pInfo,
    ): int
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->ffi->vkGetAccelerationStructureDeviceAddressKHR(
            $deviceC,
            $pInfoC,
        );
        $phpValue = $cValue;
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDeferredOperationKHR> $pDeferredOperation VkDeferredOperationKHR*
     * returns VkResult
     */
    public function vkCreateDeferredOperationKHR(
        struct\VkDevice $device,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pDeferredOperation,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pDeferredOperation;
        $cValue = $phpValue->cdata;
        $pDeferredOperationC = $cValue;
        $cValue = $this->ffi->vkCreateDeferredOperationKHR(
            $deviceC,
            $pAllocatorC,
            $pDeferredOperationC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkDeferredOperationKHR $operation VkDeferredOperationKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyDeferredOperationKHR(
        struct\VkDevice $device,
        struct\VkDeferredOperationKHR $operation,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $operation;
        $cValue = $phpValue->cdata;
        $operationC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyDeferredOperationKHR(
            $deviceC,
            $operationC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkDeferredOperationKHR $operation VkDeferredOperationKHR
     * returns uint32_t
     */
    public function vkGetDeferredOperationMaxConcurrencyKHR(
        struct\VkDevice $device,
        struct\VkDeferredOperationKHR $operation,
    ): int
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $operation;
        $cValue = $phpValue->cdata;
        $operationC = $cValue;
        $cValue = $this->ffi->vkGetDeferredOperationMaxConcurrencyKHR(
            $deviceC,
            $operationC,
        );
        $phpValue = $cValue;
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkDeferredOperationKHR $operation VkDeferredOperationKHR
     * returns VkResult
     */
    public function vkGetDeferredOperationResultKHR(
        struct\VkDevice $device,
        struct\VkDeferredOperationKHR $operation,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $operation;
        $cValue = $phpValue->cdata;
        $operationC = $cValue;
        $cValue = $this->ffi->vkGetDeferredOperationResultKHR(
            $deviceC,
            $operationC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkDeferredOperationKHR $operation VkDeferredOperationKHR
     * returns VkResult
     */
    public function vkDeferredOperationJoinKHR(
        struct\VkDevice $device,
        struct\VkDeferredOperationKHR $operation,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $operation;
        $cValue = $phpValue->cdata;
        $operationC = $cValue;
        $cValue = $this->ffi->vkDeferredOperationJoinKHR(
            $deviceC,
            $operationC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkComputePipelineCreateInfo> $pCreateInfo const VkComputePipelineCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryRequirements2> $pMemoryRequirements VkMemoryRequirements2*
     */
    public function vkGetPipelineIndirectMemoryRequirementsNV(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pMemoryRequirements,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pMemoryRequirements;
        $cValue = $phpValue->cdata;
        $pMemoryRequirementsC = $cValue;
        $cValue = $this->ffi->vkGetPipelineIndirectMemoryRequirementsNV(
            $deviceC,
            $pCreateInfoC,
            $pMemoryRequirementsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipelineIndirectDeviceAddressInfoNV> $pInfo const VkPipelineIndirectDeviceAddressInfoNV*
     * returns VkDeviceAddress
     */
    public function vkGetPipelineIndirectDeviceAddressNV(struct\VkDevice $device, util\ObjectPointer $pInfo): int
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->ffi->vkGetPipelineIndirectDeviceAddressNV(
            $deviceC,
            $pInfoC,
        );
        $phpValue = $cValue;
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param list<iggyvolz\vulkan\enum\VkCullModeFlagBits> $cullMode VkCullModeFlags
     */
    public function vkCmdSetCullMode(struct\VkCommandBuffer $commandBuffer, array $cullMode): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $cullMode;
        $cValue = \iggyvolz\vulkan\enum\VkCullModeFlagBits::toInt(...$phpValue);
        $cullModeC = $cValue;
        $cValue = $this->ffi->vkCmdSetCullMode(
            $commandBufferC,
            $cullModeC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\enum\VkFrontFace $frontFace VkFrontFace
     */
    public function vkCmdSetFrontFace(struct\VkCommandBuffer $commandBuffer, enum\VkFrontFace $frontFace): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $frontFace;
        $cValue = $phpValue->value;
        $frontFaceC = $cValue;
        $cValue = $this->ffi->vkCmdSetFrontFace(
            $commandBufferC,
            $frontFaceC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\enum\VkPrimitiveTopology $primitiveTopology VkPrimitiveTopology
     */
    public function vkCmdSetPrimitiveTopology(
        struct\VkCommandBuffer $commandBuffer,
        enum\VkPrimitiveTopology $primitiveTopology,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $primitiveTopology;
        $cValue = $phpValue->value;
        $primitiveTopologyC = $cValue;
        $cValue = $this->ffi->vkCmdSetPrimitiveTopology(
            $commandBufferC,
            $primitiveTopologyC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $viewportCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkViewport> $pViewports const VkViewport*
     */
    public function vkCmdSetViewportWithCount(
        struct\VkCommandBuffer $commandBuffer,
        int $viewportCount,
        util\ObjectPointer $pViewports,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $viewportCount;
        $cValue = $phpValue;
        $viewportCountC = $cValue;
        $phpValue = $pViewports;
        $cValue = $phpValue->cdata;
        $pViewportsC = $cValue;
        $cValue = $this->ffi->vkCmdSetViewportWithCount(
            $commandBufferC,
            $viewportCountC,
            $pViewportsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $scissorCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRect2D> $pScissors const VkRect2D*
     */
    public function vkCmdSetScissorWithCount(
        struct\VkCommandBuffer $commandBuffer,
        int $scissorCount,
        util\ObjectPointer $pScissors,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $scissorCount;
        $cValue = $phpValue;
        $scissorCountC = $cValue;
        $phpValue = $pScissors;
        $cValue = $phpValue->cdata;
        $pScissorsC = $cValue;
        $cValue = $this->ffi->vkCmdSetScissorWithCount(
            $commandBufferC,
            $scissorCountC,
            $pScissorsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkBuffer $buffer VkBuffer
     * @param int $offset VkDeviceSize
     * @param int $size VkDeviceSize
     * @param \\iggyvolz\vulkan\enum\VkIndexType $indexType VkIndexType
     */
    public function vkCmdBindIndexBuffer2KHR(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkBuffer $buffer,
        int $offset,
        int $size,
        enum\VkIndexType $indexType,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $buffer;
        $cValue = $phpValue->cdata;
        $bufferC = $cValue;
        $phpValue = $offset;
        $cValue = $phpValue;
        $offsetC = $cValue;
        $phpValue = $size;
        $cValue = $phpValue;
        $sizeC = $cValue;
        $phpValue = $indexType;
        $cValue = $phpValue->value;
        $indexTypeC = $cValue;
        $cValue = $this->ffi->vkCmdBindIndexBuffer2KHR(
            $commandBufferC,
            $bufferC,
            $offsetC,
            $sizeC,
            $indexTypeC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $firstBinding uint32_t
     * @param int $bindingCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBuffer> $pBuffers const VkBuffer*
     * @param \iggyvolz\vulkan\util\Pointer $pOffsets const VkDeviceSize*
     * @param \iggyvolz\vulkan\util\Pointer $pSizes const VkDeviceSize*
     * @param \iggyvolz\vulkan\util\Pointer $pStrides const VkDeviceSize*
     */
    public function vkCmdBindVertexBuffers2(
        struct\VkCommandBuffer $commandBuffer,
        int $firstBinding,
        int $bindingCount,
        util\ObjectPointer $pBuffers,
        util\Pointer $pOffsets,
        util\Pointer $pSizes,
        util\Pointer $pStrides,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $firstBinding;
        $cValue = $phpValue;
        $firstBindingC = $cValue;
        $phpValue = $bindingCount;
        $cValue = $phpValue;
        $bindingCountC = $cValue;
        $phpValue = $pBuffers;
        $cValue = $phpValue->cdata;
        $pBuffersC = $cValue;
        $phpValue = $pOffsets;
        $cValue = $phpValue->cdata;
        $pOffsetsC = $cValue;
        $phpValue = $pSizes;
        $cValue = $phpValue->cdata;
        $pSizesC = $cValue;
        $phpValue = $pStrides;
        $cValue = $phpValue->cdata;
        $pStridesC = $cValue;
        $cValue = $this->ffi->vkCmdBindVertexBuffers2(
            $commandBufferC,
            $firstBindingC,
            $bindingCountC,
            $pBuffersC,
            $pOffsetsC,
            $pSizesC,
            $pStridesC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param bool $depthTestEnable VkBool32
     */
    public function vkCmdSetDepthTestEnable(struct\VkCommandBuffer $commandBuffer, bool $depthTestEnable): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $depthTestEnable;
        $cValue = $phpValue ? 1 : 0;
        $depthTestEnableC = $cValue;
        $cValue = $this->ffi->vkCmdSetDepthTestEnable(
            $commandBufferC,
            $depthTestEnableC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param bool $depthWriteEnable VkBool32
     */
    public function vkCmdSetDepthWriteEnable(struct\VkCommandBuffer $commandBuffer, bool $depthWriteEnable): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $depthWriteEnable;
        $cValue = $phpValue ? 1 : 0;
        $depthWriteEnableC = $cValue;
        $cValue = $this->ffi->vkCmdSetDepthWriteEnable(
            $commandBufferC,
            $depthWriteEnableC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\enum\VkCompareOp $depthCompareOp VkCompareOp
     */
    public function vkCmdSetDepthCompareOp(
        struct\VkCommandBuffer $commandBuffer,
        enum\VkCompareOp $depthCompareOp,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $depthCompareOp;
        $cValue = $phpValue->value;
        $depthCompareOpC = $cValue;
        $cValue = $this->ffi->vkCmdSetDepthCompareOp(
            $commandBufferC,
            $depthCompareOpC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param bool $depthBoundsTestEnable VkBool32
     */
    public function vkCmdSetDepthBoundsTestEnable(
        struct\VkCommandBuffer $commandBuffer,
        bool $depthBoundsTestEnable,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $depthBoundsTestEnable;
        $cValue = $phpValue ? 1 : 0;
        $depthBoundsTestEnableC = $cValue;
        $cValue = $this->ffi->vkCmdSetDepthBoundsTestEnable(
            $commandBufferC,
            $depthBoundsTestEnableC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param bool $stencilTestEnable VkBool32
     */
    public function vkCmdSetStencilTestEnable(struct\VkCommandBuffer $commandBuffer, bool $stencilTestEnable): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $stencilTestEnable;
        $cValue = $phpValue ? 1 : 0;
        $stencilTestEnableC = $cValue;
        $cValue = $this->ffi->vkCmdSetStencilTestEnable(
            $commandBufferC,
            $stencilTestEnableC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param list<iggyvolz\vulkan\enum\VkStencilFaceFlagBits> $faceMask VkStencilFaceFlags
     * @param \\iggyvolz\vulkan\enum\VkStencilOp $failOp VkStencilOp
     * @param \\iggyvolz\vulkan\enum\VkStencilOp $passOp VkStencilOp
     * @param \\iggyvolz\vulkan\enum\VkStencilOp $depthFailOp VkStencilOp
     * @param \\iggyvolz\vulkan\enum\VkCompareOp $compareOp VkCompareOp
     */
    public function vkCmdSetStencilOp(
        struct\VkCommandBuffer $commandBuffer,
        array $faceMask,
        enum\VkStencilOp $failOp,
        enum\VkStencilOp $passOp,
        enum\VkStencilOp $depthFailOp,
        enum\VkCompareOp $compareOp,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $faceMask;
        $cValue = \iggyvolz\vulkan\enum\VkStencilFaceFlagBits::toInt(...$phpValue);
        $faceMaskC = $cValue;
        $phpValue = $failOp;
        $cValue = $phpValue->value;
        $failOpC = $cValue;
        $phpValue = $passOp;
        $cValue = $phpValue->value;
        $passOpC = $cValue;
        $phpValue = $depthFailOp;
        $cValue = $phpValue->value;
        $depthFailOpC = $cValue;
        $phpValue = $compareOp;
        $cValue = $phpValue->value;
        $compareOpC = $cValue;
        $cValue = $this->ffi->vkCmdSetStencilOp(
            $commandBufferC,
            $faceMaskC,
            $failOpC,
            $passOpC,
            $depthFailOpC,
            $compareOpC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $patchControlPoints uint32_t
     */
    public function vkCmdSetPatchControlPointsEXT(
        struct\VkCommandBuffer $commandBuffer,
        int $patchControlPoints,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $patchControlPoints;
        $cValue = $phpValue;
        $patchControlPointsC = $cValue;
        $cValue = $this->ffi->vkCmdSetPatchControlPointsEXT(
            $commandBufferC,
            $patchControlPointsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param bool $rasterizerDiscardEnable VkBool32
     */
    public function vkCmdSetRasterizerDiscardEnable(
        struct\VkCommandBuffer $commandBuffer,
        bool $rasterizerDiscardEnable,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $rasterizerDiscardEnable;
        $cValue = $phpValue ? 1 : 0;
        $rasterizerDiscardEnableC = $cValue;
        $cValue = $this->ffi->vkCmdSetRasterizerDiscardEnable(
            $commandBufferC,
            $rasterizerDiscardEnableC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param bool $depthBiasEnable VkBool32
     */
    public function vkCmdSetDepthBiasEnable(struct\VkCommandBuffer $commandBuffer, bool $depthBiasEnable): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $depthBiasEnable;
        $cValue = $phpValue ? 1 : 0;
        $depthBiasEnableC = $cValue;
        $cValue = $this->ffi->vkCmdSetDepthBiasEnable(
            $commandBufferC,
            $depthBiasEnableC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\enum\VkLogicOp $logicOp VkLogicOp
     */
    public function vkCmdSetLogicOpEXT(struct\VkCommandBuffer $commandBuffer, enum\VkLogicOp $logicOp): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $logicOp;
        $cValue = $phpValue->value;
        $logicOpC = $cValue;
        $cValue = $this->ffi->vkCmdSetLogicOpEXT(
            $commandBufferC,
            $logicOpC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param bool $primitiveRestartEnable VkBool32
     */
    public function vkCmdSetPrimitiveRestartEnable(
        struct\VkCommandBuffer $commandBuffer,
        bool $primitiveRestartEnable,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $primitiveRestartEnable;
        $cValue = $phpValue ? 1 : 0;
        $primitiveRestartEnableC = $cValue;
        $cValue = $this->ffi->vkCmdSetPrimitiveRestartEnable(
            $commandBufferC,
            $primitiveRestartEnableC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\enum\VkTessellationDomainOrigin $domainOrigin VkTessellationDomainOrigin
     */
    public function vkCmdSetTessellationDomainOriginEXT(
        struct\VkCommandBuffer $commandBuffer,
        enum\VkTessellationDomainOrigin $domainOrigin,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $domainOrigin;
        $cValue = $phpValue->value;
        $domainOriginC = $cValue;
        $cValue = $this->ffi->vkCmdSetTessellationDomainOriginEXT(
            $commandBufferC,
            $domainOriginC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param bool $depthClampEnable VkBool32
     */
    public function vkCmdSetDepthClampEnableEXT(struct\VkCommandBuffer $commandBuffer, bool $depthClampEnable): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $depthClampEnable;
        $cValue = $phpValue ? 1 : 0;
        $depthClampEnableC = $cValue;
        $cValue = $this->ffi->vkCmdSetDepthClampEnableEXT(
            $commandBufferC,
            $depthClampEnableC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\enum\VkPolygonMode $polygonMode VkPolygonMode
     */
    public function vkCmdSetPolygonModeEXT(
        struct\VkCommandBuffer $commandBuffer,
        enum\VkPolygonMode $polygonMode,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $polygonMode;
        $cValue = $phpValue->value;
        $polygonModeC = $cValue;
        $cValue = $this->ffi->vkCmdSetPolygonModeEXT(
            $commandBufferC,
            $polygonModeC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\enum\VkSampleCountFlagBits $rasterizationSamples VkSampleCountFlagBits
     */
    public function vkCmdSetRasterizationSamplesEXT(
        struct\VkCommandBuffer $commandBuffer,
        enum\VkSampleCountFlagBits $rasterizationSamples,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $rasterizationSamples;
        $cValue = $phpValue->value;
        $rasterizationSamplesC = $cValue;
        $cValue = $this->ffi->vkCmdSetRasterizationSamplesEXT(
            $commandBufferC,
            $rasterizationSamplesC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\enum\VkSampleCountFlagBits $samples VkSampleCountFlagBits
     * @param \iggyvolz\vulkan\util\Pointer $pSampleMask const VkSampleMask*
     */
    public function vkCmdSetSampleMaskEXT(
        struct\VkCommandBuffer $commandBuffer,
        enum\VkSampleCountFlagBits $samples,
        util\Pointer $pSampleMask,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $samples;
        $cValue = $phpValue->value;
        $samplesC = $cValue;
        $phpValue = $pSampleMask;
        $cValue = $phpValue->cdata;
        $pSampleMaskC = $cValue;
        $cValue = $this->ffi->vkCmdSetSampleMaskEXT(
            $commandBufferC,
            $samplesC,
            $pSampleMaskC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param bool $alphaToCoverageEnable VkBool32
     */
    public function vkCmdSetAlphaToCoverageEnableEXT(
        struct\VkCommandBuffer $commandBuffer,
        bool $alphaToCoverageEnable,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $alphaToCoverageEnable;
        $cValue = $phpValue ? 1 : 0;
        $alphaToCoverageEnableC = $cValue;
        $cValue = $this->ffi->vkCmdSetAlphaToCoverageEnableEXT(
            $commandBufferC,
            $alphaToCoverageEnableC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param bool $alphaToOneEnable VkBool32
     */
    public function vkCmdSetAlphaToOneEnableEXT(struct\VkCommandBuffer $commandBuffer, bool $alphaToOneEnable): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $alphaToOneEnable;
        $cValue = $phpValue ? 1 : 0;
        $alphaToOneEnableC = $cValue;
        $cValue = $this->ffi->vkCmdSetAlphaToOneEnableEXT(
            $commandBufferC,
            $alphaToOneEnableC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param bool $logicOpEnable VkBool32
     */
    public function vkCmdSetLogicOpEnableEXT(struct\VkCommandBuffer $commandBuffer, bool $logicOpEnable): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $logicOpEnable;
        $cValue = $phpValue ? 1 : 0;
        $logicOpEnableC = $cValue;
        $cValue = $this->ffi->vkCmdSetLogicOpEnableEXT(
            $commandBufferC,
            $logicOpEnableC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $firstAttachment uint32_t
     * @param int $attachmentCount uint32_t
     * @param \iggyvolz\vulkan\util\Pointer $pColorBlendEnables const VkBool32*
     */
    public function vkCmdSetColorBlendEnableEXT(
        struct\VkCommandBuffer $commandBuffer,
        int $firstAttachment,
        int $attachmentCount,
        util\Pointer $pColorBlendEnables,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $firstAttachment;
        $cValue = $phpValue;
        $firstAttachmentC = $cValue;
        $phpValue = $attachmentCount;
        $cValue = $phpValue;
        $attachmentCountC = $cValue;
        $phpValue = $pColorBlendEnables;
        $cValue = $phpValue->cdata;
        $pColorBlendEnablesC = $cValue;
        $cValue = $this->ffi->vkCmdSetColorBlendEnableEXT(
            $commandBufferC,
            $firstAttachmentC,
            $attachmentCountC,
            $pColorBlendEnablesC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $firstAttachment uint32_t
     * @param int $attachmentCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkColorBlendEquationEXT> $pColorBlendEquations const VkColorBlendEquationEXT*
     */
    public function vkCmdSetColorBlendEquationEXT(
        struct\VkCommandBuffer $commandBuffer,
        int $firstAttachment,
        int $attachmentCount,
        util\ObjectPointer $pColorBlendEquations,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $firstAttachment;
        $cValue = $phpValue;
        $firstAttachmentC = $cValue;
        $phpValue = $attachmentCount;
        $cValue = $phpValue;
        $attachmentCountC = $cValue;
        $phpValue = $pColorBlendEquations;
        $cValue = $phpValue->cdata;
        $pColorBlendEquationsC = $cValue;
        $cValue = $this->ffi->vkCmdSetColorBlendEquationEXT(
            $commandBufferC,
            $firstAttachmentC,
            $attachmentCountC,
            $pColorBlendEquationsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $firstAttachment uint32_t
     * @param int $attachmentCount uint32_t
     * @param \iggyvolz\vulkan\util\Pointer $pColorWriteMasks const VkColorComponentFlags*
     */
    public function vkCmdSetColorWriteMaskEXT(
        struct\VkCommandBuffer $commandBuffer,
        int $firstAttachment,
        int $attachmentCount,
        util\Pointer $pColorWriteMasks,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $firstAttachment;
        $cValue = $phpValue;
        $firstAttachmentC = $cValue;
        $phpValue = $attachmentCount;
        $cValue = $phpValue;
        $attachmentCountC = $cValue;
        $phpValue = $pColorWriteMasks;
        $cValue = $phpValue->cdata;
        $pColorWriteMasksC = $cValue;
        $cValue = $this->ffi->vkCmdSetColorWriteMaskEXT(
            $commandBufferC,
            $firstAttachmentC,
            $attachmentCountC,
            $pColorWriteMasksC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $rasterizationStream uint32_t
     */
    public function vkCmdSetRasterizationStreamEXT(
        struct\VkCommandBuffer $commandBuffer,
        int $rasterizationStream,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $rasterizationStream;
        $cValue = $phpValue;
        $rasterizationStreamC = $cValue;
        $cValue = $this->ffi->vkCmdSetRasterizationStreamEXT(
            $commandBufferC,
            $rasterizationStreamC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\enum\VkConservativeRasterizationModeEXT $conservativeRasterizationMode VkConservativeRasterizationModeEXT
     */
    public function vkCmdSetConservativeRasterizationModeEXT(
        struct\VkCommandBuffer $commandBuffer,
        enum\VkConservativeRasterizationModeEXT $conservativeRasterizationMode,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $conservativeRasterizationMode;
        $cValue = $phpValue->value;
        $conservativeRasterizationModeC = $cValue;
        $cValue = $this->ffi->vkCmdSetConservativeRasterizationModeEXT(
            $commandBufferC,
            $conservativeRasterizationModeC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param float $extraPrimitiveOverestimationSize float
     */
    public function vkCmdSetExtraPrimitiveOverestimationSizeEXT(
        struct\VkCommandBuffer $commandBuffer,
        float $extraPrimitiveOverestimationSize,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $extraPrimitiveOverestimationSize;
        $cValue = $phpValue;
        $extraPrimitiveOverestimationSizeC = $cValue;
        $cValue = $this->ffi->vkCmdSetExtraPrimitiveOverestimationSizeEXT(
            $commandBufferC,
            $extraPrimitiveOverestimationSizeC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param bool $depthClipEnable VkBool32
     */
    public function vkCmdSetDepthClipEnableEXT(struct\VkCommandBuffer $commandBuffer, bool $depthClipEnable): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $depthClipEnable;
        $cValue = $phpValue ? 1 : 0;
        $depthClipEnableC = $cValue;
        $cValue = $this->ffi->vkCmdSetDepthClipEnableEXT(
            $commandBufferC,
            $depthClipEnableC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param bool $sampleLocationsEnable VkBool32
     */
    public function vkCmdSetSampleLocationsEnableEXT(
        struct\VkCommandBuffer $commandBuffer,
        bool $sampleLocationsEnable,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $sampleLocationsEnable;
        $cValue = $phpValue ? 1 : 0;
        $sampleLocationsEnableC = $cValue;
        $cValue = $this->ffi->vkCmdSetSampleLocationsEnableEXT(
            $commandBufferC,
            $sampleLocationsEnableC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $firstAttachment uint32_t
     * @param int $attachmentCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkColorBlendAdvancedEXT> $pColorBlendAdvanced const VkColorBlendAdvancedEXT*
     */
    public function vkCmdSetColorBlendAdvancedEXT(
        struct\VkCommandBuffer $commandBuffer,
        int $firstAttachment,
        int $attachmentCount,
        util\ObjectPointer $pColorBlendAdvanced,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $firstAttachment;
        $cValue = $phpValue;
        $firstAttachmentC = $cValue;
        $phpValue = $attachmentCount;
        $cValue = $phpValue;
        $attachmentCountC = $cValue;
        $phpValue = $pColorBlendAdvanced;
        $cValue = $phpValue->cdata;
        $pColorBlendAdvancedC = $cValue;
        $cValue = $this->ffi->vkCmdSetColorBlendAdvancedEXT(
            $commandBufferC,
            $firstAttachmentC,
            $attachmentCountC,
            $pColorBlendAdvancedC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\enum\VkProvokingVertexModeEXT $provokingVertexMode VkProvokingVertexModeEXT
     */
    public function vkCmdSetProvokingVertexModeEXT(
        struct\VkCommandBuffer $commandBuffer,
        enum\VkProvokingVertexModeEXT $provokingVertexMode,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $provokingVertexMode;
        $cValue = $phpValue->value;
        $provokingVertexModeC = $cValue;
        $cValue = $this->ffi->vkCmdSetProvokingVertexModeEXT(
            $commandBufferC,
            $provokingVertexModeC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\enum\VkLineRasterizationModeEXT $lineRasterizationMode VkLineRasterizationModeEXT
     */
    public function vkCmdSetLineRasterizationModeEXT(
        struct\VkCommandBuffer $commandBuffer,
        enum\VkLineRasterizationModeEXT $lineRasterizationMode,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $lineRasterizationMode;
        $cValue = $phpValue->value;
        $lineRasterizationModeC = $cValue;
        $cValue = $this->ffi->vkCmdSetLineRasterizationModeEXT(
            $commandBufferC,
            $lineRasterizationModeC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param bool $stippledLineEnable VkBool32
     */
    public function vkCmdSetLineStippleEnableEXT(
        struct\VkCommandBuffer $commandBuffer,
        bool $stippledLineEnable,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $stippledLineEnable;
        $cValue = $phpValue ? 1 : 0;
        $stippledLineEnableC = $cValue;
        $cValue = $this->ffi->vkCmdSetLineStippleEnableEXT(
            $commandBufferC,
            $stippledLineEnableC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param bool $negativeOneToOne VkBool32
     */
    public function vkCmdSetDepthClipNegativeOneToOneEXT(
        struct\VkCommandBuffer $commandBuffer,
        bool $negativeOneToOne,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $negativeOneToOne;
        $cValue = $phpValue ? 1 : 0;
        $negativeOneToOneC = $cValue;
        $cValue = $this->ffi->vkCmdSetDepthClipNegativeOneToOneEXT(
            $commandBufferC,
            $negativeOneToOneC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param bool $viewportWScalingEnable VkBool32
     */
    public function vkCmdSetViewportWScalingEnableNV(
        struct\VkCommandBuffer $commandBuffer,
        bool $viewportWScalingEnable,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $viewportWScalingEnable;
        $cValue = $phpValue ? 1 : 0;
        $viewportWScalingEnableC = $cValue;
        $cValue = $this->ffi->vkCmdSetViewportWScalingEnableNV(
            $commandBufferC,
            $viewportWScalingEnableC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $firstViewport uint32_t
     * @param int $viewportCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkViewportSwizzleNV> $pViewportSwizzles const VkViewportSwizzleNV*
     */
    public function vkCmdSetViewportSwizzleNV(
        struct\VkCommandBuffer $commandBuffer,
        int $firstViewport,
        int $viewportCount,
        util\ObjectPointer $pViewportSwizzles,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $firstViewport;
        $cValue = $phpValue;
        $firstViewportC = $cValue;
        $phpValue = $viewportCount;
        $cValue = $phpValue;
        $viewportCountC = $cValue;
        $phpValue = $pViewportSwizzles;
        $cValue = $phpValue->cdata;
        $pViewportSwizzlesC = $cValue;
        $cValue = $this->ffi->vkCmdSetViewportSwizzleNV(
            $commandBufferC,
            $firstViewportC,
            $viewportCountC,
            $pViewportSwizzlesC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param bool $coverageToColorEnable VkBool32
     */
    public function vkCmdSetCoverageToColorEnableNV(
        struct\VkCommandBuffer $commandBuffer,
        bool $coverageToColorEnable,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $coverageToColorEnable;
        $cValue = $phpValue ? 1 : 0;
        $coverageToColorEnableC = $cValue;
        $cValue = $this->ffi->vkCmdSetCoverageToColorEnableNV(
            $commandBufferC,
            $coverageToColorEnableC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $coverageToColorLocation uint32_t
     */
    public function vkCmdSetCoverageToColorLocationNV(
        struct\VkCommandBuffer $commandBuffer,
        int $coverageToColorLocation,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $coverageToColorLocation;
        $cValue = $phpValue;
        $coverageToColorLocationC = $cValue;
        $cValue = $this->ffi->vkCmdSetCoverageToColorLocationNV(
            $commandBufferC,
            $coverageToColorLocationC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\enum\VkCoverageModulationModeNV $coverageModulationMode VkCoverageModulationModeNV
     */
    public function vkCmdSetCoverageModulationModeNV(
        struct\VkCommandBuffer $commandBuffer,
        enum\VkCoverageModulationModeNV $coverageModulationMode,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $coverageModulationMode;
        $cValue = $phpValue->value;
        $coverageModulationModeC = $cValue;
        $cValue = $this->ffi->vkCmdSetCoverageModulationModeNV(
            $commandBufferC,
            $coverageModulationModeC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param bool $coverageModulationTableEnable VkBool32
     */
    public function vkCmdSetCoverageModulationTableEnableNV(
        struct\VkCommandBuffer $commandBuffer,
        bool $coverageModulationTableEnable,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $coverageModulationTableEnable;
        $cValue = $phpValue ? 1 : 0;
        $coverageModulationTableEnableC = $cValue;
        $cValue = $this->ffi->vkCmdSetCoverageModulationTableEnableNV(
            $commandBufferC,
            $coverageModulationTableEnableC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $coverageModulationTableCount uint32_t
     * @param \iggyvolz\vulkan\util\Pointer $pCoverageModulationTable const float*
     */
    public function vkCmdSetCoverageModulationTableNV(
        struct\VkCommandBuffer $commandBuffer,
        int $coverageModulationTableCount,
        util\Pointer $pCoverageModulationTable,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $coverageModulationTableCount;
        $cValue = $phpValue;
        $coverageModulationTableCountC = $cValue;
        $phpValue = $pCoverageModulationTable;
        $cValue = $phpValue->cdata;
        $pCoverageModulationTableC = $cValue;
        $cValue = $this->ffi->vkCmdSetCoverageModulationTableNV(
            $commandBufferC,
            $coverageModulationTableCountC,
            $pCoverageModulationTableC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param bool $shadingRateImageEnable VkBool32
     */
    public function vkCmdSetShadingRateImageEnableNV(
        struct\VkCommandBuffer $commandBuffer,
        bool $shadingRateImageEnable,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $shadingRateImageEnable;
        $cValue = $phpValue ? 1 : 0;
        $shadingRateImageEnableC = $cValue;
        $cValue = $this->ffi->vkCmdSetShadingRateImageEnableNV(
            $commandBufferC,
            $shadingRateImageEnableC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\enum\VkCoverageReductionModeNV $coverageReductionMode VkCoverageReductionModeNV
     */
    public function vkCmdSetCoverageReductionModeNV(
        struct\VkCommandBuffer $commandBuffer,
        enum\VkCoverageReductionModeNV $coverageReductionMode,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $coverageReductionMode;
        $cValue = $phpValue->value;
        $coverageReductionModeC = $cValue;
        $cValue = $this->ffi->vkCmdSetCoverageReductionModeNV(
            $commandBufferC,
            $coverageReductionModeC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param bool $representativeFragmentTestEnable VkBool32
     */
    public function vkCmdSetRepresentativeFragmentTestEnableNV(
        struct\VkCommandBuffer $commandBuffer,
        bool $representativeFragmentTestEnable,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $representativeFragmentTestEnable;
        $cValue = $phpValue ? 1 : 0;
        $representativeFragmentTestEnableC = $cValue;
        $cValue = $this->ffi->vkCmdSetRepresentativeFragmentTestEnableNV(
            $commandBufferC,
            $representativeFragmentTestEnableC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPrivateDataSlotCreateInfo> $pCreateInfo const VkPrivateDataSlotCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPrivateDataSlot> $pPrivateDataSlot VkPrivateDataSlot*
     * returns VkResult
     */
    public function vkCreatePrivateDataSlot(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pPrivateDataSlot,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pPrivateDataSlot;
        $cValue = $phpValue->cdata;
        $pPrivateDataSlotC = $cValue;
        $cValue = $this->ffi->vkCreatePrivateDataSlot(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pPrivateDataSlotC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkPrivateDataSlot $privateDataSlot VkPrivateDataSlot
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyPrivateDataSlot(
        struct\VkDevice $device,
        struct\VkPrivateDataSlot $privateDataSlot,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $privateDataSlot;
        $cValue = $phpValue->cdata;
        $privateDataSlotC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyPrivateDataSlot(
            $deviceC,
            $privateDataSlotC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\enum\VkObjectType $objectType VkObjectType
     * @param int $objectHandle uint64_t
     * @param \\iggyvolz\vulkan\struct\VkPrivateDataSlot $privateDataSlot VkPrivateDataSlot
     * @param int $data uint64_t
     * returns VkResult
     */
    public function vkSetPrivateData(
        struct\VkDevice $device,
        enum\VkObjectType $objectType,
        int $objectHandle,
        struct\VkPrivateDataSlot $privateDataSlot,
        int $data,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $objectType;
        $cValue = $phpValue->value;
        $objectTypeC = $cValue;
        $phpValue = $objectHandle;
        $cValue = $phpValue;
        $objectHandleC = $cValue;
        $phpValue = $privateDataSlot;
        $cValue = $phpValue->cdata;
        $privateDataSlotC = $cValue;
        $phpValue = $data;
        $cValue = $phpValue;
        $dataC = $cValue;
        $cValue = $this->ffi->vkSetPrivateData(
            $deviceC,
            $objectTypeC,
            $objectHandleC,
            $privateDataSlotC,
            $dataC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\enum\VkObjectType $objectType VkObjectType
     * @param int $objectHandle uint64_t
     * @param \\iggyvolz\vulkan\struct\VkPrivateDataSlot $privateDataSlot VkPrivateDataSlot
     * @param \iggyvolz\vulkan\util\IntPointer $pData uint64_t*
     */
    public function vkGetPrivateData(
        struct\VkDevice $device,
        enum\VkObjectType $objectType,
        int $objectHandle,
        struct\VkPrivateDataSlot $privateDataSlot,
        util\IntPointer $pData,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $objectType;
        $cValue = $phpValue->value;
        $objectTypeC = $cValue;
        $phpValue = $objectHandle;
        $cValue = $phpValue;
        $objectHandleC = $cValue;
        $phpValue = $privateDataSlot;
        $cValue = $phpValue->cdata;
        $privateDataSlotC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $cValue = $this->ffi->vkGetPrivateData(
            $deviceC,
            $objectTypeC,
            $objectHandleC,
            $privateDataSlotC,
            $pDataC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyBufferInfo2> $pCopyBufferInfo const VkCopyBufferInfo2*
     */
    public function vkCmdCopyBuffer2(struct\VkCommandBuffer $commandBuffer, util\ObjectPointer $pCopyBufferInfo): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pCopyBufferInfo;
        $cValue = $phpValue->cdata;
        $pCopyBufferInfoC = $cValue;
        $cValue = $this->ffi->vkCmdCopyBuffer2(
            $commandBufferC,
            $pCopyBufferInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyImageInfo2> $pCopyImageInfo const VkCopyImageInfo2*
     */
    public function vkCmdCopyImage2(struct\VkCommandBuffer $commandBuffer, util\ObjectPointer $pCopyImageInfo): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pCopyImageInfo;
        $cValue = $phpValue->cdata;
        $pCopyImageInfoC = $cValue;
        $cValue = $this->ffi->vkCmdCopyImage2(
            $commandBufferC,
            $pCopyImageInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBlitImageInfo2> $pBlitImageInfo const VkBlitImageInfo2*
     */
    public function vkCmdBlitImage2(struct\VkCommandBuffer $commandBuffer, util\ObjectPointer $pBlitImageInfo): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pBlitImageInfo;
        $cValue = $phpValue->cdata;
        $pBlitImageInfoC = $cValue;
        $cValue = $this->ffi->vkCmdBlitImage2(
            $commandBufferC,
            $pBlitImageInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyBufferToImageInfo2> $pCopyBufferToImageInfo const VkCopyBufferToImageInfo2*
     */
    public function vkCmdCopyBufferToImage2(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pCopyBufferToImageInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pCopyBufferToImageInfo;
        $cValue = $phpValue->cdata;
        $pCopyBufferToImageInfoC = $cValue;
        $cValue = $this->ffi->vkCmdCopyBufferToImage2(
            $commandBufferC,
            $pCopyBufferToImageInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyImageToBufferInfo2> $pCopyImageToBufferInfo const VkCopyImageToBufferInfo2*
     */
    public function vkCmdCopyImageToBuffer2(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pCopyImageToBufferInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pCopyImageToBufferInfo;
        $cValue = $phpValue->cdata;
        $pCopyImageToBufferInfoC = $cValue;
        $cValue = $this->ffi->vkCmdCopyImageToBuffer2(
            $commandBufferC,
            $pCopyImageToBufferInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkResolveImageInfo2> $pResolveImageInfo const VkResolveImageInfo2*
     */
    public function vkCmdResolveImage2(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pResolveImageInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pResolveImageInfo;
        $cValue = $phpValue->cdata;
        $pResolveImageInfoC = $cValue;
        $cValue = $this->ffi->vkCmdResolveImage2(
            $commandBufferC,
            $pResolveImageInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRefreshObjectListKHR> $pRefreshObjects const VkRefreshObjectListKHR*
     */
    public function vkCmdRefreshObjectsKHR(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pRefreshObjects,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pRefreshObjects;
        $cValue = $phpValue->cdata;
        $pRefreshObjectsC = $cValue;
        $cValue = $this->ffi->vkCmdRefreshObjectsKHR(
            $commandBufferC,
            $pRefreshObjectsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\IntPointer $pRefreshableObjectTypeCount uint32_t*
     * @param \iggyvolz\vulkan\util\Pointer $pRefreshableObjectTypes VkObjectType*
     * returns VkResult
     */
    public function vkGetPhysicalDeviceRefreshableObjectTypesKHR(
        struct\VkPhysicalDevice $physicalDevice,
        util\IntPointer $pRefreshableObjectTypeCount,
        util\Pointer $pRefreshableObjectTypes,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pRefreshableObjectTypeCount;
        $cValue = $phpValue->cdata;
        $pRefreshableObjectTypeCountC = $cValue;
        $phpValue = $pRefreshableObjectTypes;
        $cValue = $phpValue->cdata;
        $pRefreshableObjectTypesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceRefreshableObjectTypesKHR(
            $physicalDeviceC,
            $pRefreshableObjectTypeCountC,
            $pRefreshableObjectTypesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkExtent2D> $pFragmentSize const VkExtent2D*
     * @param mixed $combinerOps const VkFragmentShadingRateCombinerOpKHR    [2]
     */
    public function vkCmdSetFragmentShadingRateKHR(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pFragmentSize,
        mixed $combinerOps,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pFragmentSize;
        $cValue = $phpValue->cdata;
        $pFragmentSizeC = $cValue;
        $phpValue = $combinerOps;
        throw new \LogicException("Dummy transformer!");
        $combinerOpsC = $cValue;
        $cValue = $this->ffi->vkCmdSetFragmentShadingRateKHR(
            $commandBufferC,
            $pFragmentSizeC,
            $combinerOpsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\IntPointer $pFragmentShadingRateCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceFragmentShadingRateKHR> $pFragmentShadingRates VkPhysicalDeviceFragmentShadingRateKHR*
     * returns VkResult
     */
    public function vkGetPhysicalDeviceFragmentShadingRatesKHR(
        struct\VkPhysicalDevice $physicalDevice,
        util\IntPointer $pFragmentShadingRateCount,
        util\ObjectPointer $pFragmentShadingRates,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pFragmentShadingRateCount;
        $cValue = $phpValue->cdata;
        $pFragmentShadingRateCountC = $cValue;
        $phpValue = $pFragmentShadingRates;
        $cValue = $phpValue->cdata;
        $pFragmentShadingRatesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceFragmentShadingRatesKHR(
            $physicalDeviceC,
            $pFragmentShadingRateCountC,
            $pFragmentShadingRatesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\enum\VkFragmentShadingRateNV $shadingRate VkFragmentShadingRateNV
     * @param mixed $combinerOps const VkFragmentShadingRateCombinerOpKHR    [2]
     */
    public function vkCmdSetFragmentShadingRateEnumNV(
        struct\VkCommandBuffer $commandBuffer,
        enum\VkFragmentShadingRateNV $shadingRate,
        mixed $combinerOps,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $shadingRate;
        $cValue = $phpValue->value;
        $shadingRateC = $cValue;
        $phpValue = $combinerOps;
        throw new \LogicException("Dummy transformer!");
        $combinerOpsC = $cValue;
        $cValue = $this->ffi->vkCmdSetFragmentShadingRateEnumNV(
            $commandBufferC,
            $shadingRateC,
            $combinerOpsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\enum\VkAccelerationStructureBuildTypeKHR $buildType VkAccelerationStructureBuildTypeKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAccelerationStructureBuildGeometryInfoKHR> $pBuildInfo const VkAccelerationStructureBuildGeometryInfoKHR*
     * @param \iggyvolz\vulkan\util\IntPointer $pMaxPrimitiveCounts const uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAccelerationStructureBuildSizesInfoKHR> $pSizeInfo VkAccelerationStructureBuildSizesInfoKHR*
     */
    public function vkGetAccelerationStructureBuildSizesKHR(
        struct\VkDevice $device,
        enum\VkAccelerationStructureBuildTypeKHR $buildType,
        util\ObjectPointer $pBuildInfo,
        util\IntPointer $pMaxPrimitiveCounts,
        util\ObjectPointer $pSizeInfo,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $buildType;
        $cValue = $phpValue->value;
        $buildTypeC = $cValue;
        $phpValue = $pBuildInfo;
        $cValue = $phpValue->cdata;
        $pBuildInfoC = $cValue;
        $phpValue = $pMaxPrimitiveCounts;
        $cValue = $phpValue->cdata;
        $pMaxPrimitiveCountsC = $cValue;
        $phpValue = $pSizeInfo;
        $cValue = $phpValue->cdata;
        $pSizeInfoC = $cValue;
        $cValue = $this->ffi->vkGetAccelerationStructureBuildSizesKHR(
            $deviceC,
            $buildTypeC,
            $pBuildInfoC,
            $pMaxPrimitiveCountsC,
            $pSizeInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $vertexBindingDescriptionCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVertexInputBindingDescription2EXT> $pVertexBindingDescriptions const VkVertexInputBindingDescription2EXT*
     * @param int $vertexAttributeDescriptionCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVertexInputAttributeDescription2EXT> $pVertexAttributeDescriptions const VkVertexInputAttributeDescription2EXT*
     */
    public function vkCmdSetVertexInputEXT(
        struct\VkCommandBuffer $commandBuffer,
        int $vertexBindingDescriptionCount,
        util\ObjectPointer $pVertexBindingDescriptions,
        int $vertexAttributeDescriptionCount,
        util\ObjectPointer $pVertexAttributeDescriptions,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $vertexBindingDescriptionCount;
        $cValue = $phpValue;
        $vertexBindingDescriptionCountC = $cValue;
        $phpValue = $pVertexBindingDescriptions;
        $cValue = $phpValue->cdata;
        $pVertexBindingDescriptionsC = $cValue;
        $phpValue = $vertexAttributeDescriptionCount;
        $cValue = $phpValue;
        $vertexAttributeDescriptionCountC = $cValue;
        $phpValue = $pVertexAttributeDescriptions;
        $cValue = $phpValue->cdata;
        $pVertexAttributeDescriptionsC = $cValue;
        $cValue = $this->ffi->vkCmdSetVertexInputEXT(
            $commandBufferC,
            $vertexBindingDescriptionCountC,
            $pVertexBindingDescriptionsC,
            $vertexAttributeDescriptionCountC,
            $pVertexAttributeDescriptionsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $attachmentCount uint32_t
     * @param \iggyvolz\vulkan\util\Pointer $pColorWriteEnables const VkBool32*
     */
    public function vkCmdSetColorWriteEnableEXT(
        struct\VkCommandBuffer $commandBuffer,
        int $attachmentCount,
        util\Pointer $pColorWriteEnables,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $attachmentCount;
        $cValue = $phpValue;
        $attachmentCountC = $cValue;
        $phpValue = $pColorWriteEnables;
        $cValue = $phpValue->cdata;
        $pColorWriteEnablesC = $cValue;
        $cValue = $this->ffi->vkCmdSetColorWriteEnableEXT(
            $commandBufferC,
            $attachmentCountC,
            $pColorWriteEnablesC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkEvent $event VkEvent
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDependencyInfo> $pDependencyInfo const VkDependencyInfo*
     */
    public function vkCmdSetEvent2(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkEvent $event,
        util\ObjectPointer $pDependencyInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $event;
        $cValue = $phpValue->cdata;
        $eventC = $cValue;
        $phpValue = $pDependencyInfo;
        $cValue = $phpValue->cdata;
        $pDependencyInfoC = $cValue;
        $cValue = $this->ffi->vkCmdSetEvent2(
            $commandBufferC,
            $eventC,
            $pDependencyInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkEvent $event VkEvent
     * @param list<iggyvolz\vulkan\enum\VkPipelineStageFlagBits2> $stageMask VkPipelineStageFlags2
     */
    public function vkCmdResetEvent2(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkEvent $event,
        array $stageMask,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $event;
        $cValue = $phpValue->cdata;
        $eventC = $cValue;
        $phpValue = $stageMask;
        $cValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits2::toInt(...$phpValue);
        $stageMaskC = $cValue;
        $cValue = $this->ffi->vkCmdResetEvent2(
            $commandBufferC,
            $eventC,
            $stageMaskC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $eventCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkEvent> $pEvents const VkEvent*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDependencyInfo> $pDependencyInfos const VkDependencyInfo*
     */
    public function vkCmdWaitEvents2(
        struct\VkCommandBuffer $commandBuffer,
        int $eventCount,
        util\ObjectPointer $pEvents,
        util\ObjectPointer $pDependencyInfos,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $eventCount;
        $cValue = $phpValue;
        $eventCountC = $cValue;
        $phpValue = $pEvents;
        $cValue = $phpValue->cdata;
        $pEventsC = $cValue;
        $phpValue = $pDependencyInfos;
        $cValue = $phpValue->cdata;
        $pDependencyInfosC = $cValue;
        $cValue = $this->ffi->vkCmdWaitEvents2(
            $commandBufferC,
            $eventCountC,
            $pEventsC,
            $pDependencyInfosC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDependencyInfo> $pDependencyInfo const VkDependencyInfo*
     */
    public function vkCmdPipelineBarrier2(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pDependencyInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pDependencyInfo;
        $cValue = $phpValue->cdata;
        $pDependencyInfoC = $cValue;
        $cValue = $this->ffi->vkCmdPipelineBarrier2(
            $commandBufferC,
            $pDependencyInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkQueue $queue VkQueue
     * @param int $submitCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSubmitInfo2> $pSubmits const VkSubmitInfo2*
     * @param \\iggyvolz\vulkan\struct\VkFence $fence VkFence
     * returns VkResult
     */
    public function vkQueueSubmit2(
        struct\VkQueue $queue,
        int $submitCount,
        util\ObjectPointer $pSubmits,
        struct\VkFence $fence,
    ): enum\VkResult
    {
        $phpValue = $queue;
        $cValue = $phpValue->cdata;
        $queueC = $cValue;
        $phpValue = $submitCount;
        $cValue = $phpValue;
        $submitCountC = $cValue;
        $phpValue = $pSubmits;
        $cValue = $phpValue->cdata;
        $pSubmitsC = $cValue;
        $phpValue = $fence;
        $cValue = $phpValue->cdata;
        $fenceC = $cValue;
        $cValue = $this->ffi->vkQueueSubmit2(
            $queueC,
            $submitCountC,
            $pSubmitsC,
            $fenceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param list<iggyvolz\vulkan\enum\VkPipelineStageFlagBits2> $stage VkPipelineStageFlags2
     * @param \\iggyvolz\vulkan\struct\VkQueryPool $queryPool VkQueryPool
     * @param int $query uint32_t
     */
    public function vkCmdWriteTimestamp2(
        struct\VkCommandBuffer $commandBuffer,
        array $stage,
        struct\VkQueryPool $queryPool,
        int $query,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $stage;
        $cValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits2::toInt(...$phpValue);
        $stageC = $cValue;
        $phpValue = $queryPool;
        $cValue = $phpValue->cdata;
        $queryPoolC = $cValue;
        $phpValue = $query;
        $cValue = $phpValue;
        $queryC = $cValue;
        $cValue = $this->ffi->vkCmdWriteTimestamp2(
            $commandBufferC,
            $stageC,
            $queryPoolC,
            $queryC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param list<iggyvolz\vulkan\enum\VkPipelineStageFlagBits2> $stage VkPipelineStageFlags2
     * @param \\iggyvolz\vulkan\struct\VkBuffer $dstBuffer VkBuffer
     * @param int $dstOffset VkDeviceSize
     * @param int $marker uint32_t
     */
    public function vkCmdWriteBufferMarker2AMD(
        struct\VkCommandBuffer $commandBuffer,
        array $stage,
        struct\VkBuffer $dstBuffer,
        int $dstOffset,
        int $marker,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $stage;
        $cValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits2::toInt(...$phpValue);
        $stageC = $cValue;
        $phpValue = $dstBuffer;
        $cValue = $phpValue->cdata;
        $dstBufferC = $cValue;
        $phpValue = $dstOffset;
        $cValue = $phpValue;
        $dstOffsetC = $cValue;
        $phpValue = $marker;
        $cValue = $phpValue;
        $markerC = $cValue;
        $cValue = $this->ffi->vkCmdWriteBufferMarker2AMD(
            $commandBufferC,
            $stageC,
            $dstBufferC,
            $dstOffsetC,
            $markerC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkQueue $queue VkQueue
     * @param \iggyvolz\vulkan\util\IntPointer $pCheckpointDataCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCheckpointData2NV> $pCheckpointData VkCheckpointData2NV*
     */
    public function vkGetQueueCheckpointData2NV(
        struct\VkQueue $queue,
        util\IntPointer $pCheckpointDataCount,
        util\ObjectPointer $pCheckpointData,
    ): void
    {
        $phpValue = $queue;
        $cValue = $phpValue->cdata;
        $queueC = $cValue;
        $phpValue = $pCheckpointDataCount;
        $cValue = $phpValue->cdata;
        $pCheckpointDataCountC = $cValue;
        $phpValue = $pCheckpointData;
        $cValue = $phpValue->cdata;
        $pCheckpointDataC = $cValue;
        $cValue = $this->ffi->vkGetQueueCheckpointData2NV(
            $queueC,
            $pCheckpointDataCountC,
            $pCheckpointDataC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyMemoryToImageInfoEXT> $pCopyMemoryToImageInfo const VkCopyMemoryToImageInfoEXT*
     * returns VkResult
     */
    public function vkCopyMemoryToImageEXT(
        struct\VkDevice $device,
        util\ObjectPointer $pCopyMemoryToImageInfo,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCopyMemoryToImageInfo;
        $cValue = $phpValue->cdata;
        $pCopyMemoryToImageInfoC = $cValue;
        $cValue = $this->ffi->vkCopyMemoryToImageEXT(
            $deviceC,
            $pCopyMemoryToImageInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyImageToMemoryInfoEXT> $pCopyImageToMemoryInfo const VkCopyImageToMemoryInfoEXT*
     * returns VkResult
     */
    public function vkCopyImageToMemoryEXT(
        struct\VkDevice $device,
        util\ObjectPointer $pCopyImageToMemoryInfo,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCopyImageToMemoryInfo;
        $cValue = $phpValue->cdata;
        $pCopyImageToMemoryInfoC = $cValue;
        $cValue = $this->ffi->vkCopyImageToMemoryEXT(
            $deviceC,
            $pCopyImageToMemoryInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyImageToImageInfoEXT> $pCopyImageToImageInfo const VkCopyImageToImageInfoEXT*
     * returns VkResult
     */
    public function vkCopyImageToImageEXT(
        struct\VkDevice $device,
        util\ObjectPointer $pCopyImageToImageInfo,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCopyImageToImageInfo;
        $cValue = $phpValue->cdata;
        $pCopyImageToImageInfoC = $cValue;
        $cValue = $this->ffi->vkCopyImageToImageEXT(
            $deviceC,
            $pCopyImageToImageInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param int $transitionCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkHostImageLayoutTransitionInfoEXT> $pTransitions const VkHostImageLayoutTransitionInfoEXT*
     * returns VkResult
     */
    public function vkTransitionImageLayoutEXT(
        struct\VkDevice $device,
        int $transitionCount,
        util\ObjectPointer $pTransitions,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $transitionCount;
        $cValue = $phpValue;
        $transitionCountC = $cValue;
        $phpValue = $pTransitions;
        $cValue = $phpValue->cdata;
        $pTransitionsC = $cValue;
        $cValue = $this->ffi->vkTransitionImageLayoutEXT(
            $deviceC,
            $transitionCountC,
            $pTransitionsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkCommandPool $commandPool VkCommandPool
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCommandPoolMemoryConsumption> $pConsumption VkCommandPoolMemoryConsumption*
     */
    public function vkGetCommandPoolMemoryConsumption(
        struct\VkDevice $device,
        struct\VkCommandPool $commandPool,
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pConsumption,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $commandPool;
        $cValue = $phpValue->cdata;
        $commandPoolC = $cValue;
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pConsumption;
        $cValue = $phpValue->cdata;
        $pConsumptionC = $cValue;
        $cValue = $this->ffi->vkGetCommandPoolMemoryConsumption(
            $deviceC,
            $commandPoolC,
            $commandBufferC,
            $pConsumptionC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\Pointer $pVideoProfile const VkVideoProfileInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVideoCapabilitiesKHR> $pCapabilities VkVideoCapabilitiesKHR*
     * returns VkResult
     */
    public function vkGetPhysicalDeviceVideoCapabilitiesKHR(
        struct\VkPhysicalDevice $physicalDevice,
        util\Pointer $pVideoProfile,
        util\ObjectPointer $pCapabilities,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pVideoProfile;
        $cValue = $phpValue->cdata;
        $pVideoProfileC = $cValue;
        $phpValue = $pCapabilities;
        $cValue = $phpValue->cdata;
        $pCapabilitiesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceVideoCapabilitiesKHR(
            $physicalDeviceC,
            $pVideoProfileC,
            $pCapabilitiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceVideoFormatInfoKHR> $pVideoFormatInfo const VkPhysicalDeviceVideoFormatInfoKHR*
     * @param \iggyvolz\vulkan\util\IntPointer $pVideoFormatPropertyCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVideoFormatPropertiesKHR> $pVideoFormatProperties VkVideoFormatPropertiesKHR*
     * returns VkResult
     */
    public function vkGetPhysicalDeviceVideoFormatPropertiesKHR(
        struct\VkPhysicalDevice $physicalDevice,
        util\ObjectPointer $pVideoFormatInfo,
        util\IntPointer $pVideoFormatPropertyCount,
        util\ObjectPointer $pVideoFormatProperties,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pVideoFormatInfo;
        $cValue = $phpValue->cdata;
        $pVideoFormatInfoC = $cValue;
        $phpValue = $pVideoFormatPropertyCount;
        $cValue = $phpValue->cdata;
        $pVideoFormatPropertyCountC = $cValue;
        $phpValue = $pVideoFormatProperties;
        $cValue = $phpValue->cdata;
        $pVideoFormatPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceVideoFormatPropertiesKHR(
            $physicalDeviceC,
            $pVideoFormatInfoC,
            $pVideoFormatPropertyCountC,
            $pVideoFormatPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPhysicalDeviceVideoEncodeQualityLevelInfoKHR> $pQualityLevelInfo const VkPhysicalDeviceVideoEncodeQualityLevelInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVideoEncodeQualityLevelPropertiesKHR> $pQualityLevelProperties VkVideoEncodeQualityLevelPropertiesKHR*
     * returns VkResult
     */
    public function vkGetPhysicalDeviceVideoEncodeQualityLevelPropertiesKHR(
        struct\VkPhysicalDevice $physicalDevice,
        util\ObjectPointer $pQualityLevelInfo,
        util\ObjectPointer $pQualityLevelProperties,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pQualityLevelInfo;
        $cValue = $phpValue->cdata;
        $pQualityLevelInfoC = $cValue;
        $phpValue = $pQualityLevelProperties;
        $cValue = $phpValue->cdata;
        $pQualityLevelPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceVideoEncodeQualityLevelPropertiesKHR(
            $physicalDeviceC,
            $pQualityLevelInfoC,
            $pQualityLevelPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVideoSessionCreateInfoKHR> $pCreateInfo const VkVideoSessionCreateInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVideoSessionKHR> $pVideoSession VkVideoSessionKHR*
     * returns VkResult
     */
    public function vkCreateVideoSessionKHR(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pVideoSession,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pVideoSession;
        $cValue = $phpValue->cdata;
        $pVideoSessionC = $cValue;
        $cValue = $this->ffi->vkCreateVideoSessionKHR(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pVideoSessionC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkVideoSessionKHR $videoSession VkVideoSessionKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyVideoSessionKHR(
        struct\VkDevice $device,
        struct\VkVideoSessionKHR $videoSession,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $videoSession;
        $cValue = $phpValue->cdata;
        $videoSessionC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyVideoSessionKHR(
            $deviceC,
            $videoSessionC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVideoSessionParametersCreateInfoKHR> $pCreateInfo const VkVideoSessionParametersCreateInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVideoSessionParametersKHR> $pVideoSessionParameters VkVideoSessionParametersKHR*
     * returns VkResult
     */
    public function vkCreateVideoSessionParametersKHR(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pVideoSessionParameters,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pVideoSessionParameters;
        $cValue = $phpValue->cdata;
        $pVideoSessionParametersC = $cValue;
        $cValue = $this->ffi->vkCreateVideoSessionParametersKHR(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pVideoSessionParametersC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkVideoSessionParametersKHR $videoSessionParameters VkVideoSessionParametersKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVideoSessionParametersUpdateInfoKHR> $pUpdateInfo const VkVideoSessionParametersUpdateInfoKHR*
     * returns VkResult
     */
    public function vkUpdateVideoSessionParametersKHR(
        struct\VkDevice $device,
        struct\VkVideoSessionParametersKHR $videoSessionParameters,
        util\ObjectPointer $pUpdateInfo,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $videoSessionParameters;
        $cValue = $phpValue->cdata;
        $videoSessionParametersC = $cValue;
        $phpValue = $pUpdateInfo;
        $cValue = $phpValue->cdata;
        $pUpdateInfoC = $cValue;
        $cValue = $this->ffi->vkUpdateVideoSessionParametersKHR(
            $deviceC,
            $videoSessionParametersC,
            $pUpdateInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVideoEncodeSessionParametersGetInfoKHR> $pVideoSessionParametersInfo const VkVideoEncodeSessionParametersGetInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVideoEncodeSessionParametersFeedbackInfoKHR> $pFeedbackInfo VkVideoEncodeSessionParametersFeedbackInfoKHR*
     * @param \iggyvolz\vulkan\util\IntPointer $pDataSize size_t*
     * @param \iggyvolz\vulkan\util\Pointer $pData void*
     * returns VkResult
     */
    public function vkGetEncodedVideoSessionParametersKHR(
        struct\VkDevice $device,
        util\ObjectPointer $pVideoSessionParametersInfo,
        util\ObjectPointer $pFeedbackInfo,
        util\IntPointer $pDataSize,
        util\Pointer $pData,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pVideoSessionParametersInfo;
        $cValue = $phpValue->cdata;
        $pVideoSessionParametersInfoC = $cValue;
        $phpValue = $pFeedbackInfo;
        $cValue = $phpValue->cdata;
        $pFeedbackInfoC = $cValue;
        $phpValue = $pDataSize;
        $cValue = $phpValue->cdata;
        $pDataSizeC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $cValue = $this->ffi->vkGetEncodedVideoSessionParametersKHR(
            $deviceC,
            $pVideoSessionParametersInfoC,
            $pFeedbackInfoC,
            $pDataSizeC,
            $pDataC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkVideoSessionParametersKHR $videoSessionParameters VkVideoSessionParametersKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyVideoSessionParametersKHR(
        struct\VkDevice $device,
        struct\VkVideoSessionParametersKHR $videoSessionParameters,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $videoSessionParameters;
        $cValue = $phpValue->cdata;
        $videoSessionParametersC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyVideoSessionParametersKHR(
            $deviceC,
            $videoSessionParametersC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkVideoSessionKHR $videoSession VkVideoSessionKHR
     * @param \iggyvolz\vulkan\util\IntPointer $pMemoryRequirementsCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVideoSessionMemoryRequirementsKHR> $pMemoryRequirements VkVideoSessionMemoryRequirementsKHR*
     * returns VkResult
     */
    public function vkGetVideoSessionMemoryRequirementsKHR(
        struct\VkDevice $device,
        struct\VkVideoSessionKHR $videoSession,
        util\IntPointer $pMemoryRequirementsCount,
        util\ObjectPointer $pMemoryRequirements,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $videoSession;
        $cValue = $phpValue->cdata;
        $videoSessionC = $cValue;
        $phpValue = $pMemoryRequirementsCount;
        $cValue = $phpValue->cdata;
        $pMemoryRequirementsCountC = $cValue;
        $phpValue = $pMemoryRequirements;
        $cValue = $phpValue->cdata;
        $pMemoryRequirementsC = $cValue;
        $cValue = $this->ffi->vkGetVideoSessionMemoryRequirementsKHR(
            $deviceC,
            $videoSessionC,
            $pMemoryRequirementsCountC,
            $pMemoryRequirementsC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkVideoSessionKHR $videoSession VkVideoSessionKHR
     * @param int $bindSessionMemoryInfoCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBindVideoSessionMemoryInfoKHR> $pBindSessionMemoryInfos const VkBindVideoSessionMemoryInfoKHR*
     * returns VkResult
     */
    public function vkBindVideoSessionMemoryKHR(
        struct\VkDevice $device,
        struct\VkVideoSessionKHR $videoSession,
        int $bindSessionMemoryInfoCount,
        util\ObjectPointer $pBindSessionMemoryInfos,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $videoSession;
        $cValue = $phpValue->cdata;
        $videoSessionC = $cValue;
        $phpValue = $bindSessionMemoryInfoCount;
        $cValue = $phpValue;
        $bindSessionMemoryInfoCountC = $cValue;
        $phpValue = $pBindSessionMemoryInfos;
        $cValue = $phpValue->cdata;
        $pBindSessionMemoryInfosC = $cValue;
        $cValue = $this->ffi->vkBindVideoSessionMemoryKHR(
            $deviceC,
            $videoSessionC,
            $bindSessionMemoryInfoCountC,
            $pBindSessionMemoryInfosC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVideoDecodeInfoKHR> $pDecodeInfo const VkVideoDecodeInfoKHR*
     */
    public function vkCmdDecodeVideoKHR(struct\VkCommandBuffer $commandBuffer, util\ObjectPointer $pDecodeInfo): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pDecodeInfo;
        $cValue = $phpValue->cdata;
        $pDecodeInfoC = $cValue;
        $cValue = $this->ffi->vkCmdDecodeVideoKHR(
            $commandBufferC,
            $pDecodeInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVideoBeginCodingInfoKHR> $pBeginInfo const VkVideoBeginCodingInfoKHR*
     */
    public function vkCmdBeginVideoCodingKHR(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pBeginInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pBeginInfo;
        $cValue = $phpValue->cdata;
        $pBeginInfoC = $cValue;
        $cValue = $this->ffi->vkCmdBeginVideoCodingKHR(
            $commandBufferC,
            $pBeginInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVideoCodingControlInfoKHR> $pCodingControlInfo const VkVideoCodingControlInfoKHR*
     */
    public function vkCmdControlVideoCodingKHR(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pCodingControlInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pCodingControlInfo;
        $cValue = $phpValue->cdata;
        $pCodingControlInfoC = $cValue;
        $cValue = $this->ffi->vkCmdControlVideoCodingKHR(
            $commandBufferC,
            $pCodingControlInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVideoEndCodingInfoKHR> $pEndCodingInfo const VkVideoEndCodingInfoKHR*
     */
    public function vkCmdEndVideoCodingKHR(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pEndCodingInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pEndCodingInfo;
        $cValue = $phpValue->cdata;
        $pEndCodingInfoC = $cValue;
        $cValue = $this->ffi->vkCmdEndVideoCodingKHR(
            $commandBufferC,
            $pEndCodingInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkVideoEncodeInfoKHR> $pEncodeInfo const VkVideoEncodeInfoKHR*
     */
    public function vkCmdEncodeVideoKHR(struct\VkCommandBuffer $commandBuffer, util\ObjectPointer $pEncodeInfo): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pEncodeInfo;
        $cValue = $phpValue->cdata;
        $pEncodeInfoC = $cValue;
        $cValue = $this->ffi->vkCmdEncodeVideoKHR(
            $commandBufferC,
            $pEncodeInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $decompressRegionCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDecompressMemoryRegionNV> $pDecompressMemoryRegions const VkDecompressMemoryRegionNV*
     */
    public function vkCmdDecompressMemoryNV(
        struct\VkCommandBuffer $commandBuffer,
        int $decompressRegionCount,
        util\ObjectPointer $pDecompressMemoryRegions,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $decompressRegionCount;
        $cValue = $phpValue;
        $decompressRegionCountC = $cValue;
        $phpValue = $pDecompressMemoryRegions;
        $cValue = $phpValue->cdata;
        $pDecompressMemoryRegionsC = $cValue;
        $cValue = $this->ffi->vkCmdDecompressMemoryNV(
            $commandBufferC,
            $decompressRegionCountC,
            $pDecompressMemoryRegionsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $indirectCommandsAddress VkDeviceAddress
     * @param int $indirectCommandsCountAddress VkDeviceAddress
     * @param int $stride uint32_t
     */
    public function vkCmdDecompressMemoryIndirectCountNV(
        struct\VkCommandBuffer $commandBuffer,
        int $indirectCommandsAddress,
        int $indirectCommandsCountAddress,
        int $stride,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $indirectCommandsAddress;
        $cValue = $phpValue;
        $indirectCommandsAddressC = $cValue;
        $phpValue = $indirectCommandsCountAddress;
        $cValue = $phpValue;
        $indirectCommandsCountAddressC = $cValue;
        $phpValue = $stride;
        $cValue = $phpValue;
        $strideC = $cValue;
        $cValue = $this->ffi->vkCmdDecompressMemoryIndirectCountNV(
            $commandBufferC,
            $indirectCommandsAddressC,
            $indirectCommandsCountAddressC,
            $strideC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCuModuleCreateInfoNVX> $pCreateInfo const VkCuModuleCreateInfoNVX*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCuModuleNVX> $pModule VkCuModuleNVX*
     * returns VkResult
     */
    public function vkCreateCuModuleNVX(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pModule,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pModule;
        $cValue = $phpValue->cdata;
        $pModuleC = $cValue;
        $cValue = $this->ffi->vkCreateCuModuleNVX(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pModuleC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCuFunctionCreateInfoNVX> $pCreateInfo const VkCuFunctionCreateInfoNVX*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCuFunctionNVX> $pFunction VkCuFunctionNVX*
     * returns VkResult
     */
    public function vkCreateCuFunctionNVX(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pFunction,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pFunction;
        $cValue = $phpValue->cdata;
        $pFunctionC = $cValue;
        $cValue = $this->ffi->vkCreateCuFunctionNVX(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pFunctionC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkCuModuleNVX $module VkCuModuleNVX
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyCuModuleNVX(
        struct\VkDevice $device,
        struct\VkCuModuleNVX $module,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $module;
        $cValue = $phpValue->cdata;
        $moduleC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyCuModuleNVX(
            $deviceC,
            $moduleC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkCuFunctionNVX $function VkCuFunctionNVX
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyCuFunctionNVX(
        struct\VkDevice $device,
        struct\VkCuFunctionNVX $function,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $function;
        $cValue = $phpValue->cdata;
        $functionC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyCuFunctionNVX(
            $deviceC,
            $functionC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCuLaunchInfoNVX> $pLaunchInfo const VkCuLaunchInfoNVX*
     */
    public function vkCmdCuLaunchKernelNVX(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pLaunchInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pLaunchInfo;
        $cValue = $phpValue->cdata;
        $pLaunchInfoC = $cValue;
        $cValue = $this->ffi->vkCmdCuLaunchKernelNVX(
            $commandBufferC,
            $pLaunchInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkDescriptorSetLayout $layout VkDescriptorSetLayout
     * @param \iggyvolz\vulkan\util\Pointer $pLayoutSizeInBytes VkDeviceSize*
     */
    public function vkGetDescriptorSetLayoutSizeEXT(
        struct\VkDevice $device,
        struct\VkDescriptorSetLayout $layout,
        util\Pointer $pLayoutSizeInBytes,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $layout;
        $cValue = $phpValue->cdata;
        $layoutC = $cValue;
        $phpValue = $pLayoutSizeInBytes;
        $cValue = $phpValue->cdata;
        $pLayoutSizeInBytesC = $cValue;
        $cValue = $this->ffi->vkGetDescriptorSetLayoutSizeEXT(
            $deviceC,
            $layoutC,
            $pLayoutSizeInBytesC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkDescriptorSetLayout $layout VkDescriptorSetLayout
     * @param int $binding uint32_t
     * @param \iggyvolz\vulkan\util\Pointer $pOffset VkDeviceSize*
     */
    public function vkGetDescriptorSetLayoutBindingOffsetEXT(
        struct\VkDevice $device,
        struct\VkDescriptorSetLayout $layout,
        int $binding,
        util\Pointer $pOffset,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $layout;
        $cValue = $phpValue->cdata;
        $layoutC = $cValue;
        $phpValue = $binding;
        $cValue = $phpValue;
        $bindingC = $cValue;
        $phpValue = $pOffset;
        $cValue = $phpValue->cdata;
        $pOffsetC = $cValue;
        $cValue = $this->ffi->vkGetDescriptorSetLayoutBindingOffsetEXT(
            $deviceC,
            $layoutC,
            $bindingC,
            $pOffsetC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDescriptorGetInfoEXT> $pDescriptorInfo const VkDescriptorGetInfoEXT*
     * @param int $dataSize size_t
     * @param \iggyvolz\vulkan\util\Pointer $pDescriptor void*
     */
    public function vkGetDescriptorEXT(
        struct\VkDevice $device,
        util\ObjectPointer $pDescriptorInfo,
        int $dataSize,
        util\Pointer $pDescriptor,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pDescriptorInfo;
        $cValue = $phpValue->cdata;
        $pDescriptorInfoC = $cValue;
        $phpValue = $dataSize;
        $cValue = $phpValue;
        $dataSizeC = $cValue;
        $phpValue = $pDescriptor;
        $cValue = $phpValue->cdata;
        $pDescriptorC = $cValue;
        $cValue = $this->ffi->vkGetDescriptorEXT(
            $deviceC,
            $pDescriptorInfoC,
            $dataSizeC,
            $pDescriptorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $bufferCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDescriptorBufferBindingInfoEXT> $pBindingInfos const VkDescriptorBufferBindingInfoEXT*
     */
    public function vkCmdBindDescriptorBuffersEXT(
        struct\VkCommandBuffer $commandBuffer,
        int $bufferCount,
        util\ObjectPointer $pBindingInfos,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $bufferCount;
        $cValue = $phpValue;
        $bufferCountC = $cValue;
        $phpValue = $pBindingInfos;
        $cValue = $phpValue->cdata;
        $pBindingInfosC = $cValue;
        $cValue = $this->ffi->vkCmdBindDescriptorBuffersEXT(
            $commandBufferC,
            $bufferCountC,
            $pBindingInfosC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint VkPipelineBindPoint
     * @param \\iggyvolz\vulkan\struct\VkPipelineLayout $layout VkPipelineLayout
     * @param int $firstSet uint32_t
     * @param int $setCount uint32_t
     * @param \iggyvolz\vulkan\util\IntPointer $pBufferIndices const uint32_t*
     * @param \iggyvolz\vulkan\util\Pointer $pOffsets const VkDeviceSize*
     */
    public function vkCmdSetDescriptorBufferOffsetsEXT(
        struct\VkCommandBuffer $commandBuffer,
        enum\VkPipelineBindPoint $pipelineBindPoint,
        struct\VkPipelineLayout $layout,
        int $firstSet,
        int $setCount,
        util\IntPointer $pBufferIndices,
        util\Pointer $pOffsets,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pipelineBindPoint;
        $cValue = $phpValue->value;
        $pipelineBindPointC = $cValue;
        $phpValue = $layout;
        $cValue = $phpValue->cdata;
        $layoutC = $cValue;
        $phpValue = $firstSet;
        $cValue = $phpValue;
        $firstSetC = $cValue;
        $phpValue = $setCount;
        $cValue = $phpValue;
        $setCountC = $cValue;
        $phpValue = $pBufferIndices;
        $cValue = $phpValue->cdata;
        $pBufferIndicesC = $cValue;
        $phpValue = $pOffsets;
        $cValue = $phpValue->cdata;
        $pOffsetsC = $cValue;
        $cValue = $this->ffi->vkCmdSetDescriptorBufferOffsetsEXT(
            $commandBufferC,
            $pipelineBindPointC,
            $layoutC,
            $firstSetC,
            $setCountC,
            $pBufferIndicesC,
            $pOffsetsC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint VkPipelineBindPoint
     * @param \\iggyvolz\vulkan\struct\VkPipelineLayout $layout VkPipelineLayout
     * @param int $set uint32_t
     */
    public function vkCmdBindDescriptorBufferEmbeddedSamplersEXT(
        struct\VkCommandBuffer $commandBuffer,
        enum\VkPipelineBindPoint $pipelineBindPoint,
        struct\VkPipelineLayout $layout,
        int $set,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pipelineBindPoint;
        $cValue = $phpValue->value;
        $pipelineBindPointC = $cValue;
        $phpValue = $layout;
        $cValue = $phpValue->cdata;
        $layoutC = $cValue;
        $phpValue = $set;
        $cValue = $phpValue;
        $setC = $cValue;
        $cValue = $this->ffi->vkCmdBindDescriptorBufferEmbeddedSamplersEXT(
            $commandBufferC,
            $pipelineBindPointC,
            $layoutC,
            $setC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBufferCaptureDescriptorDataInfoEXT> $pInfo const VkBufferCaptureDescriptorDataInfoEXT*
     * @param \iggyvolz\vulkan\util\Pointer $pData void*
     * returns VkResult
     */
    public function vkGetBufferOpaqueCaptureDescriptorDataEXT(
        struct\VkDevice $device,
        util\ObjectPointer $pInfo,
        util\Pointer $pData,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $cValue = $this->ffi->vkGetBufferOpaqueCaptureDescriptorDataEXT(
            $deviceC,
            $pInfoC,
            $pDataC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageCaptureDescriptorDataInfoEXT> $pInfo const VkImageCaptureDescriptorDataInfoEXT*
     * @param \iggyvolz\vulkan\util\Pointer $pData void*
     * returns VkResult
     */
    public function vkGetImageOpaqueCaptureDescriptorDataEXT(
        struct\VkDevice $device,
        util\ObjectPointer $pInfo,
        util\Pointer $pData,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $cValue = $this->ffi->vkGetImageOpaqueCaptureDescriptorDataEXT(
            $deviceC,
            $pInfoC,
            $pDataC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageViewCaptureDescriptorDataInfoEXT> $pInfo const VkImageViewCaptureDescriptorDataInfoEXT*
     * @param \iggyvolz\vulkan\util\Pointer $pData void*
     * returns VkResult
     */
    public function vkGetImageViewOpaqueCaptureDescriptorDataEXT(
        struct\VkDevice $device,
        util\ObjectPointer $pInfo,
        util\Pointer $pData,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $cValue = $this->ffi->vkGetImageViewOpaqueCaptureDescriptorDataEXT(
            $deviceC,
            $pInfoC,
            $pDataC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSamplerCaptureDescriptorDataInfoEXT> $pInfo const VkSamplerCaptureDescriptorDataInfoEXT*
     * @param \iggyvolz\vulkan\util\Pointer $pData void*
     * returns VkResult
     */
    public function vkGetSamplerOpaqueCaptureDescriptorDataEXT(
        struct\VkDevice $device,
        util\ObjectPointer $pInfo,
        util\Pointer $pData,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $cValue = $this->ffi->vkGetSamplerOpaqueCaptureDescriptorDataEXT(
            $deviceC,
            $pInfoC,
            $pDataC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAccelerationStructureCaptureDescriptorDataInfoEXT> $pInfo const VkAccelerationStructureCaptureDescriptorDataInfoEXT*
     * @param \iggyvolz\vulkan\util\Pointer $pData void*
     * returns VkResult
     */
    public function vkGetAccelerationStructureOpaqueCaptureDescriptorDataEXT(
        struct\VkDevice $device,
        util\ObjectPointer $pInfo,
        util\Pointer $pData,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $cValue = $this->ffi->vkGetAccelerationStructureOpaqueCaptureDescriptorDataEXT(
            $deviceC,
            $pInfoC,
            $pDataC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkDeviceMemory $memory VkDeviceMemory
     * @param float $priority float
     */
    public function vkSetDeviceMemoryPriorityEXT(
        struct\VkDevice $device,
        struct\VkDeviceMemory $memory,
        float $priority,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $memory;
        $cValue = $phpValue->cdata;
        $memoryC = $cValue;
        $phpValue = $priority;
        $cValue = $phpValue;
        $priorityC = $cValue;
        $cValue = $this->ffi->vkSetDeviceMemoryPriorityEXT(
            $deviceC,
            $memoryC,
            $priorityC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param int $drmFd int32_t
     * @param \\iggyvolz\vulkan\struct\VkDisplayKHR $display VkDisplayKHR
     * returns VkResult
     */
    public function vkAcquireDrmDisplayEXT(
        struct\VkPhysicalDevice $physicalDevice,
        int $drmFd,
        struct\VkDisplayKHR $display,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $drmFd;
        $cValue = $phpValue;
        $drmFdC = $cValue;
        $phpValue = $display;
        $cValue = $phpValue->cdata;
        $displayC = $cValue;
        $cValue = $this->ffi->vkAcquireDrmDisplayEXT(
            $physicalDeviceC,
            $drmFdC,
            $displayC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param int $drmFd int32_t
     * @param int $connectorId uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDisplayKHR> $display VkDisplayKHR*
     * returns VkResult
     */
    public function vkGetDrmDisplayEXT(
        struct\VkPhysicalDevice $physicalDevice,
        int $drmFd,
        int $connectorId,
        util\ObjectPointer $display,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $drmFd;
        $cValue = $phpValue;
        $drmFdC = $cValue;
        $phpValue = $connectorId;
        $cValue = $phpValue;
        $connectorIdC = $cValue;
        $phpValue = $display;
        $cValue = $phpValue->cdata;
        $displayC = $cValue;
        $cValue = $this->ffi->vkGetDrmDisplayEXT(
            $physicalDeviceC,
            $drmFdC,
            $connectorIdC,
            $displayC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain VkSwapchainKHR
     * @param int $presentId uint64_t
     * @param int $timeout uint64_t
     * returns VkResult
     */
    public function vkWaitForPresentKHR(
        struct\VkDevice $device,
        struct\VkSwapchainKHR $swapchain,
        int $presentId,
        int $timeout,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $swapchain;
        $cValue = $phpValue->cdata;
        $swapchainC = $cValue;
        $phpValue = $presentId;
        $cValue = $phpValue;
        $presentIdC = $cValue;
        $phpValue = $timeout;
        $cValue = $phpValue;
        $timeoutC = $cValue;
        $cValue = $this->ffi->vkWaitForPresentKHR(
            $deviceC,
            $swapchainC,
            $presentIdC,
            $timeoutC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBufferCollectionCreateInfoFUCHSIA> $pCreateInfo const VkBufferCollectionCreateInfoFUCHSIA*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBufferCollectionFUCHSIA> $pCollection VkBufferCollectionFUCHSIA*
     * returns VkResult
     */
    public function vkCreateBufferCollectionFUCHSIA(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pCollection,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pCollection;
        $cValue = $phpValue->cdata;
        $pCollectionC = $cValue;
        $cValue = $this->ffi->vkCreateBufferCollectionFUCHSIA(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pCollectionC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkBufferCollectionFUCHSIA $collection VkBufferCollectionFUCHSIA
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBufferConstraintsInfoFUCHSIA> $pBufferConstraintsInfo const VkBufferConstraintsInfoFUCHSIA*
     * returns VkResult
     */
    public function vkSetBufferCollectionBufferConstraintsFUCHSIA(
        struct\VkDevice $device,
        struct\VkBufferCollectionFUCHSIA $collection,
        util\ObjectPointer $pBufferConstraintsInfo,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $collection;
        $cValue = $phpValue->cdata;
        $collectionC = $cValue;
        $phpValue = $pBufferConstraintsInfo;
        $cValue = $phpValue->cdata;
        $pBufferConstraintsInfoC = $cValue;
        $cValue = $this->ffi->vkSetBufferCollectionBufferConstraintsFUCHSIA(
            $deviceC,
            $collectionC,
            $pBufferConstraintsInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkBufferCollectionFUCHSIA $collection VkBufferCollectionFUCHSIA
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageConstraintsInfoFUCHSIA> $pImageConstraintsInfo const VkImageConstraintsInfoFUCHSIA*
     * returns VkResult
     */
    public function vkSetBufferCollectionImageConstraintsFUCHSIA(
        struct\VkDevice $device,
        struct\VkBufferCollectionFUCHSIA $collection,
        util\ObjectPointer $pImageConstraintsInfo,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $collection;
        $cValue = $phpValue->cdata;
        $collectionC = $cValue;
        $phpValue = $pImageConstraintsInfo;
        $cValue = $phpValue->cdata;
        $pImageConstraintsInfoC = $cValue;
        $cValue = $this->ffi->vkSetBufferCollectionImageConstraintsFUCHSIA(
            $deviceC,
            $collectionC,
            $pImageConstraintsInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkBufferCollectionFUCHSIA $collection VkBufferCollectionFUCHSIA
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyBufferCollectionFUCHSIA(
        struct\VkDevice $device,
        struct\VkBufferCollectionFUCHSIA $collection,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $collection;
        $cValue = $phpValue->cdata;
        $collectionC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyBufferCollectionFUCHSIA(
            $deviceC,
            $collectionC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkBufferCollectionFUCHSIA $collection VkBufferCollectionFUCHSIA
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBufferCollectionPropertiesFUCHSIA> $pProperties VkBufferCollectionPropertiesFUCHSIA*
     * returns VkResult
     */
    public function vkGetBufferCollectionPropertiesFUCHSIA(
        struct\VkDevice $device,
        struct\VkBufferCollectionFUCHSIA $collection,
        util\ObjectPointer $pProperties,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $collection;
        $cValue = $phpValue->cdata;
        $collectionC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetBufferCollectionPropertiesFUCHSIA(
            $deviceC,
            $collectionC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCudaModuleCreateInfoNV> $pCreateInfo const VkCudaModuleCreateInfoNV*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCudaModuleNV> $pModule VkCudaModuleNV*
     * returns VkResult
     */
    public function vkCreateCudaModuleNV(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pModule,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pModule;
        $cValue = $phpValue->cdata;
        $pModuleC = $cValue;
        $cValue = $this->ffi->vkCreateCudaModuleNV(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pModuleC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkCudaModuleNV $module VkCudaModuleNV
     * @param \iggyvolz\vulkan\util\IntPointer $pCacheSize size_t*
     * @param \iggyvolz\vulkan\util\Pointer $pCacheData void*
     * returns VkResult
     */
    public function vkGetCudaModuleCacheNV(
        struct\VkDevice $device,
        struct\VkCudaModuleNV $module,
        util\IntPointer $pCacheSize,
        util\Pointer $pCacheData,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $module;
        $cValue = $phpValue->cdata;
        $moduleC = $cValue;
        $phpValue = $pCacheSize;
        $cValue = $phpValue->cdata;
        $pCacheSizeC = $cValue;
        $phpValue = $pCacheData;
        $cValue = $phpValue->cdata;
        $pCacheDataC = $cValue;
        $cValue = $this->ffi->vkGetCudaModuleCacheNV(
            $deviceC,
            $moduleC,
            $pCacheSizeC,
            $pCacheDataC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCudaFunctionCreateInfoNV> $pCreateInfo const VkCudaFunctionCreateInfoNV*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCudaFunctionNV> $pFunction VkCudaFunctionNV*
     * returns VkResult
     */
    public function vkCreateCudaFunctionNV(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pFunction,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pFunction;
        $cValue = $phpValue->cdata;
        $pFunctionC = $cValue;
        $cValue = $this->ffi->vkCreateCudaFunctionNV(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pFunctionC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkCudaModuleNV $module VkCudaModuleNV
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyCudaModuleNV(
        struct\VkDevice $device,
        struct\VkCudaModuleNV $module,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $module;
        $cValue = $phpValue->cdata;
        $moduleC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyCudaModuleNV(
            $deviceC,
            $moduleC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkCudaFunctionNV $function VkCudaFunctionNV
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyCudaFunctionNV(
        struct\VkDevice $device,
        struct\VkCudaFunctionNV $function,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $function;
        $cValue = $phpValue->cdata;
        $functionC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyCudaFunctionNV(
            $deviceC,
            $functionC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCudaLaunchInfoNV> $pLaunchInfo const VkCudaLaunchInfoNV*
     */
    public function vkCmdCudaLaunchKernelNV(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pLaunchInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pLaunchInfo;
        $cValue = $phpValue->cdata;
        $pLaunchInfoC = $cValue;
        $cValue = $this->ffi->vkCmdCudaLaunchKernelNV(
            $commandBufferC,
            $pLaunchInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRenderingInfo> $pRenderingInfo const VkRenderingInfo*
     */
    public function vkCmdBeginRendering(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pRenderingInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pRenderingInfo;
        $cValue = $phpValue->cdata;
        $pRenderingInfoC = $cValue;
        $cValue = $this->ffi->vkCmdBeginRendering(
            $commandBufferC,
            $pRenderingInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     */
    public function vkCmdEndRendering(struct\VkCommandBuffer $commandBuffer): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $cValue = $this->ffi->vkCmdEndRendering(
            $commandBufferC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDescriptorSetBindingReferenceVALVE> $pBindingReference const VkDescriptorSetBindingReferenceVALVE*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDescriptorSetLayoutHostMappingInfoVALVE> $pHostMapping VkDescriptorSetLayoutHostMappingInfoVALVE*
     */
    public function vkGetDescriptorSetLayoutHostMappingInfoVALVE(
        struct\VkDevice $device,
        util\ObjectPointer $pBindingReference,
        util\ObjectPointer $pHostMapping,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pBindingReference;
        $cValue = $phpValue->cdata;
        $pBindingReferenceC = $cValue;
        $phpValue = $pHostMapping;
        $cValue = $phpValue->cdata;
        $pHostMappingC = $cValue;
        $cValue = $this->ffi->vkGetDescriptorSetLayoutHostMappingInfoVALVE(
            $deviceC,
            $pBindingReferenceC,
            $pHostMappingC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkDescriptorSet $descriptorSet VkDescriptorSet
     * @param \iggyvolz\vulkan\util\Pointer $ppData void**
     */
    public function vkGetDescriptorSetHostMappingVALVE(
        struct\VkDevice $device,
        struct\VkDescriptorSet $descriptorSet,
        util\Pointer $ppData,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $descriptorSet;
        $cValue = $phpValue->cdata;
        $descriptorSetC = $cValue;
        $phpValue = $ppData;
        $cValue = $phpValue->cdata;
        $ppDataC = $cValue;
        $cValue = $this->ffi->vkGetDescriptorSetHostMappingVALVE(
            $deviceC,
            $descriptorSetC,
            $ppDataC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMicromapCreateInfoEXT> $pCreateInfo const VkMicromapCreateInfoEXT*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMicromapEXT> $pMicromap VkMicromapEXT*
     * returns VkResult
     */
    public function vkCreateMicromapEXT(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pMicromap,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pMicromap;
        $cValue = $phpValue->cdata;
        $pMicromapC = $cValue;
        $cValue = $this->ffi->vkCreateMicromapEXT(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pMicromapC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $infoCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMicromapBuildInfoEXT> $pInfos const VkMicromapBuildInfoEXT*
     */
    public function vkCmdBuildMicromapsEXT(
        struct\VkCommandBuffer $commandBuffer,
        int $infoCount,
        util\ObjectPointer $pInfos,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $infoCount;
        $cValue = $phpValue;
        $infoCountC = $cValue;
        $phpValue = $pInfos;
        $cValue = $phpValue->cdata;
        $pInfosC = $cValue;
        $cValue = $this->ffi->vkCmdBuildMicromapsEXT(
            $commandBufferC,
            $infoCountC,
            $pInfosC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation VkDeferredOperationKHR
     * @param int $infoCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMicromapBuildInfoEXT> $pInfos const VkMicromapBuildInfoEXT*
     * returns VkResult
     */
    public function vkBuildMicromapsEXT(
        struct\VkDevice $device,
        struct\VkDeferredOperationKHR $deferredOperation,
        int $infoCount,
        util\ObjectPointer $pInfos,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $deferredOperation;
        $cValue = $phpValue->cdata;
        $deferredOperationC = $cValue;
        $phpValue = $infoCount;
        $cValue = $phpValue;
        $infoCountC = $cValue;
        $phpValue = $pInfos;
        $cValue = $phpValue->cdata;
        $pInfosC = $cValue;
        $cValue = $this->ffi->vkBuildMicromapsEXT(
            $deviceC,
            $deferredOperationC,
            $infoCountC,
            $pInfosC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkMicromapEXT $micromap VkMicromapEXT
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyMicromapEXT(
        struct\VkDevice $device,
        struct\VkMicromapEXT $micromap,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $micromap;
        $cValue = $phpValue->cdata;
        $micromapC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyMicromapEXT(
            $deviceC,
            $micromapC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyMicromapInfoEXT> $pInfo const VkCopyMicromapInfoEXT*
     */
    public function vkCmdCopyMicromapEXT(struct\VkCommandBuffer $commandBuffer, util\ObjectPointer $pInfo): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->ffi->vkCmdCopyMicromapEXT(
            $commandBufferC,
            $pInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation VkDeferredOperationKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyMicromapInfoEXT> $pInfo const VkCopyMicromapInfoEXT*
     * returns VkResult
     */
    public function vkCopyMicromapEXT(
        struct\VkDevice $device,
        struct\VkDeferredOperationKHR $deferredOperation,
        util\ObjectPointer $pInfo,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $deferredOperation;
        $cValue = $phpValue->cdata;
        $deferredOperationC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->ffi->vkCopyMicromapEXT(
            $deviceC,
            $deferredOperationC,
            $pInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyMicromapToMemoryInfoEXT> $pInfo const VkCopyMicromapToMemoryInfoEXT*
     */
    public function vkCmdCopyMicromapToMemoryEXT(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->ffi->vkCmdCopyMicromapToMemoryEXT(
            $commandBufferC,
            $pInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation VkDeferredOperationKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyMicromapToMemoryInfoEXT> $pInfo const VkCopyMicromapToMemoryInfoEXT*
     * returns VkResult
     */
    public function vkCopyMicromapToMemoryEXT(
        struct\VkDevice $device,
        struct\VkDeferredOperationKHR $deferredOperation,
        util\ObjectPointer $pInfo,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $deferredOperation;
        $cValue = $phpValue->cdata;
        $deferredOperationC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->ffi->vkCopyMicromapToMemoryEXT(
            $deviceC,
            $deferredOperationC,
            $pInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyMemoryToMicromapInfoEXT> $pInfo const VkCopyMemoryToMicromapInfoEXT*
     */
    public function vkCmdCopyMemoryToMicromapEXT(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->ffi->vkCmdCopyMemoryToMicromapEXT(
            $commandBufferC,
            $pInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkDeferredOperationKHR $deferredOperation VkDeferredOperationKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCopyMemoryToMicromapInfoEXT> $pInfo const VkCopyMemoryToMicromapInfoEXT*
     * returns VkResult
     */
    public function vkCopyMemoryToMicromapEXT(
        struct\VkDevice $device,
        struct\VkDeferredOperationKHR $deferredOperation,
        util\ObjectPointer $pInfo,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $deferredOperation;
        $cValue = $phpValue->cdata;
        $deferredOperationC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $cValue = $this->ffi->vkCopyMemoryToMicromapEXT(
            $deviceC,
            $deferredOperationC,
            $pInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $micromapCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMicromapEXT> $pMicromaps const VkMicromapEXT*
     * @param \\iggyvolz\vulkan\enum\VkQueryType $queryType VkQueryType
     * @param \\iggyvolz\vulkan\struct\VkQueryPool $queryPool VkQueryPool
     * @param int $firstQuery uint32_t
     */
    public function vkCmdWriteMicromapsPropertiesEXT(
        struct\VkCommandBuffer $commandBuffer,
        int $micromapCount,
        util\ObjectPointer $pMicromaps,
        enum\VkQueryType $queryType,
        struct\VkQueryPool $queryPool,
        int $firstQuery,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $micromapCount;
        $cValue = $phpValue;
        $micromapCountC = $cValue;
        $phpValue = $pMicromaps;
        $cValue = $phpValue->cdata;
        $pMicromapsC = $cValue;
        $phpValue = $queryType;
        $cValue = $phpValue->value;
        $queryTypeC = $cValue;
        $phpValue = $queryPool;
        $cValue = $phpValue->cdata;
        $queryPoolC = $cValue;
        $phpValue = $firstQuery;
        $cValue = $phpValue;
        $firstQueryC = $cValue;
        $cValue = $this->ffi->vkCmdWriteMicromapsPropertiesEXT(
            $commandBufferC,
            $micromapCountC,
            $pMicromapsC,
            $queryTypeC,
            $queryPoolC,
            $firstQueryC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param int $micromapCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMicromapEXT> $pMicromaps const VkMicromapEXT*
     * @param \\iggyvolz\vulkan\enum\VkQueryType $queryType VkQueryType
     * @param int $dataSize size_t
     * @param \iggyvolz\vulkan\util\Pointer $pData void*
     * @param int $stride size_t
     * returns VkResult
     */
    public function vkWriteMicromapsPropertiesEXT(
        struct\VkDevice $device,
        int $micromapCount,
        util\ObjectPointer $pMicromaps,
        enum\VkQueryType $queryType,
        int $dataSize,
        util\Pointer $pData,
        int $stride,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $micromapCount;
        $cValue = $phpValue;
        $micromapCountC = $cValue;
        $phpValue = $pMicromaps;
        $cValue = $phpValue->cdata;
        $pMicromapsC = $cValue;
        $phpValue = $queryType;
        $cValue = $phpValue->value;
        $queryTypeC = $cValue;
        $phpValue = $dataSize;
        $cValue = $phpValue;
        $dataSizeC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $phpValue = $stride;
        $cValue = $phpValue;
        $strideC = $cValue;
        $cValue = $this->ffi->vkWriteMicromapsPropertiesEXT(
            $deviceC,
            $micromapCountC,
            $pMicromapsC,
            $queryTypeC,
            $dataSizeC,
            $pDataC,
            $strideC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMicromapVersionInfoEXT> $pVersionInfo const VkMicromapVersionInfoEXT*
     * @param \iggyvolz\vulkan\util\Pointer $pCompatibility VkAccelerationStructureCompatibilityKHR*
     */
    public function vkGetDeviceMicromapCompatibilityEXT(
        struct\VkDevice $device,
        util\ObjectPointer $pVersionInfo,
        util\Pointer $pCompatibility,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pVersionInfo;
        $cValue = $phpValue->cdata;
        $pVersionInfoC = $cValue;
        $phpValue = $pCompatibility;
        $cValue = $phpValue->cdata;
        $pCompatibilityC = $cValue;
        $cValue = $this->ffi->vkGetDeviceMicromapCompatibilityEXT(
            $deviceC,
            $pVersionInfoC,
            $pCompatibilityC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\enum\VkAccelerationStructureBuildTypeKHR $buildType VkAccelerationStructureBuildTypeKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMicromapBuildInfoEXT> $pBuildInfo const VkMicromapBuildInfoEXT*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMicromapBuildSizesInfoEXT> $pSizeInfo VkMicromapBuildSizesInfoEXT*
     */
    public function vkGetMicromapBuildSizesEXT(
        struct\VkDevice $device,
        enum\VkAccelerationStructureBuildTypeKHR $buildType,
        util\ObjectPointer $pBuildInfo,
        util\ObjectPointer $pSizeInfo,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $buildType;
        $cValue = $phpValue->value;
        $buildTypeC = $cValue;
        $phpValue = $pBuildInfo;
        $cValue = $phpValue->cdata;
        $pBuildInfoC = $cValue;
        $phpValue = $pSizeInfo;
        $cValue = $phpValue->cdata;
        $pSizeInfoC = $cValue;
        $cValue = $this->ffi->vkGetMicromapBuildSizesEXT(
            $deviceC,
            $buildTypeC,
            $pBuildInfoC,
            $pSizeInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkShaderModule $shaderModule VkShaderModule
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkShaderModuleIdentifierEXT> $pIdentifier VkShaderModuleIdentifierEXT*
     */
    public function vkGetShaderModuleIdentifierEXT(
        struct\VkDevice $device,
        struct\VkShaderModule $shaderModule,
        util\ObjectPointer $pIdentifier,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $shaderModule;
        $cValue = $phpValue->cdata;
        $shaderModuleC = $cValue;
        $phpValue = $pIdentifier;
        $cValue = $phpValue->cdata;
        $pIdentifierC = $cValue;
        $cValue = $this->ffi->vkGetShaderModuleIdentifierEXT(
            $deviceC,
            $shaderModuleC,
            $pIdentifierC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkShaderModuleCreateInfo> $pCreateInfo const VkShaderModuleCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkShaderModuleIdentifierEXT> $pIdentifier VkShaderModuleIdentifierEXT*
     */
    public function vkGetShaderModuleCreateInfoIdentifierEXT(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pIdentifier,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pIdentifier;
        $cValue = $phpValue->cdata;
        $pIdentifierC = $cValue;
        $cValue = $this->ffi->vkGetShaderModuleCreateInfoIdentifierEXT(
            $deviceC,
            $pCreateInfoC,
            $pIdentifierC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkImage $image VkImage
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkImageSubresource2KHR> $pSubresource const VkImageSubresource2KHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSubresourceLayout2KHR> $pLayout VkSubresourceLayout2KHR*
     */
    public function vkGetImageSubresourceLayout2KHR(
        struct\VkDevice $device,
        struct\VkImage $image,
        util\ObjectPointer $pSubresource,
        util\ObjectPointer $pLayout,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $image;
        $cValue = $phpValue->cdata;
        $imageC = $cValue;
        $phpValue = $pSubresource;
        $cValue = $phpValue->cdata;
        $pSubresourceC = $cValue;
        $phpValue = $pLayout;
        $cValue = $phpValue->cdata;
        $pLayoutC = $cValue;
        $cValue = $this->ffi->vkGetImageSubresourceLayout2KHR(
            $deviceC,
            $imageC,
            $pSubresourceC,
            $pLayoutC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipelineInfoEXT> $pPipelineInfo const VkPipelineInfoEXT*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBaseOutStructure> $pPipelineProperties VkBaseOutStructure*
     * returns VkResult
     */
    public function vkGetPipelinePropertiesEXT(
        struct\VkDevice $device,
        util\ObjectPointer $pPipelineInfo,
        util\ObjectPointer $pPipelineProperties,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pPipelineInfo;
        $cValue = $phpValue->cdata;
        $pPipelineInfoC = $cValue;
        $phpValue = $pPipelineProperties;
        $cValue = $phpValue->cdata;
        $pPipelinePropertiesC = $cValue;
        $cValue = $this->ffi->vkGetPipelinePropertiesEXT(
            $deviceC,
            $pPipelineInfoC,
            $pPipelinePropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkExportMetalObjectsInfoEXT> $pMetalObjectsInfo VkExportMetalObjectsInfoEXT*
     */
    public function vkExportMetalObjectsEXT(struct\VkDevice $device, util\ObjectPointer $pMetalObjectsInfo): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pMetalObjectsInfo;
        $cValue = $phpValue->cdata;
        $pMetalObjectsInfoC = $cValue;
        $cValue = $this->ffi->vkExportMetalObjectsEXT(
            $deviceC,
            $pMetalObjectsInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkFramebuffer $framebuffer VkFramebuffer
     * @param \iggyvolz\vulkan\util\IntPointer $pPropertiesCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkTilePropertiesQCOM> $pProperties VkTilePropertiesQCOM*
     * returns VkResult
     */
    public function vkGetFramebufferTilePropertiesQCOM(
        struct\VkDevice $device,
        struct\VkFramebuffer $framebuffer,
        util\IntPointer $pPropertiesCount,
        util\ObjectPointer $pProperties,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $framebuffer;
        $cValue = $phpValue->cdata;
        $framebufferC = $cValue;
        $phpValue = $pPropertiesCount;
        $cValue = $phpValue->cdata;
        $pPropertiesCountC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetFramebufferTilePropertiesQCOM(
            $deviceC,
            $framebufferC,
            $pPropertiesCountC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkRenderingInfo> $pRenderingInfo const VkRenderingInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkTilePropertiesQCOM> $pProperties VkTilePropertiesQCOM*
     * returns VkResult
     */
    public function vkGetDynamicRenderingTilePropertiesQCOM(
        struct\VkDevice $device,
        util\ObjectPointer $pRenderingInfo,
        util\ObjectPointer $pProperties,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pRenderingInfo;
        $cValue = $phpValue->cdata;
        $pRenderingInfoC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetDynamicRenderingTilePropertiesQCOM(
            $deviceC,
            $pRenderingInfoC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkOpticalFlowImageFormatInfoNV> $pOpticalFlowImageFormatInfo const VkOpticalFlowImageFormatInfoNV*
     * @param \iggyvolz\vulkan\util\IntPointer $pFormatCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkOpticalFlowImageFormatPropertiesNV> $pImageFormatProperties VkOpticalFlowImageFormatPropertiesNV*
     * returns VkResult
     */
    public function vkGetPhysicalDeviceOpticalFlowImageFormatsNV(
        struct\VkPhysicalDevice $physicalDevice,
        util\ObjectPointer $pOpticalFlowImageFormatInfo,
        util\IntPointer $pFormatCount,
        util\ObjectPointer $pImageFormatProperties,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pOpticalFlowImageFormatInfo;
        $cValue = $phpValue->cdata;
        $pOpticalFlowImageFormatInfoC = $cValue;
        $phpValue = $pFormatCount;
        $cValue = $phpValue->cdata;
        $pFormatCountC = $cValue;
        $phpValue = $pImageFormatProperties;
        $cValue = $phpValue->cdata;
        $pImageFormatPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceOpticalFlowImageFormatsNV(
            $physicalDeviceC,
            $pOpticalFlowImageFormatInfoC,
            $pFormatCountC,
            $pImageFormatPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkOpticalFlowSessionCreateInfoNV> $pCreateInfo const VkOpticalFlowSessionCreateInfoNV*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkOpticalFlowSessionNV> $pSession VkOpticalFlowSessionNV*
     * returns VkResult
     */
    public function vkCreateOpticalFlowSessionNV(
        struct\VkDevice $device,
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pSession,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pSession;
        $cValue = $phpValue->cdata;
        $pSessionC = $cValue;
        $cValue = $this->ffi->vkCreateOpticalFlowSessionNV(
            $deviceC,
            $pCreateInfoC,
            $pAllocatorC,
            $pSessionC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkOpticalFlowSessionNV $session VkOpticalFlowSessionNV
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyOpticalFlowSessionNV(
        struct\VkDevice $device,
        struct\VkOpticalFlowSessionNV $session,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $session;
        $cValue = $phpValue->cdata;
        $sessionC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyOpticalFlowSessionNV(
            $deviceC,
            $sessionC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkOpticalFlowSessionNV $session VkOpticalFlowSessionNV
     * @param \\iggyvolz\vulkan\enum\VkOpticalFlowSessionBindingPointNV $bindingPoint VkOpticalFlowSessionBindingPointNV
     * @param \\iggyvolz\vulkan\struct\VkImageView $view VkImageView
     * @param \\iggyvolz\vulkan\enum\VkImageLayout $layout VkImageLayout
     * returns VkResult
     */
    public function vkBindOpticalFlowSessionImageNV(
        struct\VkDevice $device,
        struct\VkOpticalFlowSessionNV $session,
        enum\VkOpticalFlowSessionBindingPointNV $bindingPoint,
        struct\VkImageView $view,
        enum\VkImageLayout $layout,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $session;
        $cValue = $phpValue->cdata;
        $sessionC = $cValue;
        $phpValue = $bindingPoint;
        $cValue = $phpValue->value;
        $bindingPointC = $cValue;
        $phpValue = $view;
        $cValue = $phpValue->cdata;
        $viewC = $cValue;
        $phpValue = $layout;
        $cValue = $phpValue->value;
        $layoutC = $cValue;
        $cValue = $this->ffi->vkBindOpticalFlowSessionImageNV(
            $deviceC,
            $sessionC,
            $bindingPointC,
            $viewC,
            $layoutC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \\iggyvolz\vulkan\struct\VkOpticalFlowSessionNV $session VkOpticalFlowSessionNV
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkOpticalFlowExecuteInfoNV> $pExecuteInfo const VkOpticalFlowExecuteInfoNV*
     */
    public function vkCmdOpticalFlowExecuteNV(
        struct\VkCommandBuffer $commandBuffer,
        struct\VkOpticalFlowSessionNV $session,
        util\ObjectPointer $pExecuteInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $session;
        $cValue = $phpValue->cdata;
        $sessionC = $cValue;
        $phpValue = $pExecuteInfo;
        $cValue = $phpValue->cdata;
        $pExecuteInfoC = $cValue;
        $cValue = $this->ffi->vkCmdOpticalFlowExecuteNV(
            $commandBufferC,
            $sessionC,
            $pExecuteInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDeviceFaultCountsEXT> $pFaultCounts VkDeviceFaultCountsEXT*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDeviceFaultInfoEXT> $pFaultInfo VkDeviceFaultInfoEXT*
     * returns VkResult
     */
    public function vkGetDeviceFaultInfoEXT(
        struct\VkDevice $device,
        util\ObjectPointer $pFaultCounts,
        util\ObjectPointer $pFaultInfo,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pFaultCounts;
        $cValue = $phpValue->cdata;
        $pFaultCountsC = $cValue;
        $phpValue = $pFaultInfo;
        $cValue = $phpValue->cdata;
        $pFaultInfoC = $cValue;
        $cValue = $this->ffi->vkGetDeviceFaultInfoEXT(
            $deviceC,
            $pFaultCountsC,
            $pFaultInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDepthBiasInfoEXT> $pDepthBiasInfo const VkDepthBiasInfoEXT*
     */
    public function vkCmdSetDepthBias2EXT(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pDepthBiasInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pDepthBiasInfo;
        $cValue = $phpValue->cdata;
        $pDepthBiasInfoC = $cValue;
        $cValue = $this->ffi->vkCmdSetDepthBias2EXT(
            $commandBufferC,
            $pDepthBiasInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkReleaseSwapchainImagesInfoEXT> $pReleaseInfo const VkReleaseSwapchainImagesInfoEXT*
     * returns VkResult
     */
    public function vkReleaseSwapchainImagesEXT(
        struct\VkDevice $device,
        util\ObjectPointer $pReleaseInfo,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pReleaseInfo;
        $cValue = $phpValue->cdata;
        $pReleaseInfoC = $cValue;
        $cValue = $this->ffi->vkReleaseSwapchainImagesEXT(
            $deviceC,
            $pReleaseInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDeviceImageSubresourceInfoKHR> $pInfo const VkDeviceImageSubresourceInfoKHR*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSubresourceLayout2KHR> $pLayout VkSubresourceLayout2KHR*
     */
    public function vkGetDeviceImageSubresourceLayoutKHR(
        struct\VkDevice $device,
        util\ObjectPointer $pInfo,
        util\ObjectPointer $pLayout,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pInfo;
        $cValue = $phpValue->cdata;
        $pInfoC = $cValue;
        $phpValue = $pLayout;
        $cValue = $phpValue->cdata;
        $pLayoutC = $cValue;
        $cValue = $this->ffi->vkGetDeviceImageSubresourceLayoutKHR(
            $deviceC,
            $pInfoC,
            $pLayoutC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryMapInfoKHR> $pMemoryMapInfo const VkMemoryMapInfoKHR*
     * @param \iggyvolz\vulkan\util\Pointer $ppData void**
     * returns VkResult
     */
    public function vkMapMemory2KHR(
        struct\VkDevice $device,
        util\ObjectPointer $pMemoryMapInfo,
        util\Pointer $ppData,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pMemoryMapInfo;
        $cValue = $phpValue->cdata;
        $pMemoryMapInfoC = $cValue;
        $phpValue = $ppData;
        $cValue = $phpValue->cdata;
        $ppDataC = $cValue;
        $cValue = $this->ffi->vkMapMemory2KHR(
            $deviceC,
            $pMemoryMapInfoC,
            $ppDataC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkMemoryUnmapInfoKHR> $pMemoryUnmapInfo const VkMemoryUnmapInfoKHR*
     * returns VkResult
     */
    public function vkUnmapMemory2KHR(struct\VkDevice $device, util\ObjectPointer $pMemoryUnmapInfo): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pMemoryUnmapInfo;
        $cValue = $phpValue->cdata;
        $pMemoryUnmapInfoC = $cValue;
        $cValue = $this->ffi->vkUnmapMemory2KHR(
            $deviceC,
            $pMemoryUnmapInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param int $createInfoCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkShaderCreateInfoEXT> $pCreateInfos const VkShaderCreateInfoEXT*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkShaderEXT> $pShaders VkShaderEXT*
     * returns VkResult
     */
    public function vkCreateShadersEXT(
        struct\VkDevice $device,
        int $createInfoCount,
        util\ObjectPointer $pCreateInfos,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pShaders,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $createInfoCount;
        $cValue = $phpValue;
        $createInfoCountC = $cValue;
        $phpValue = $pCreateInfos;
        $cValue = $phpValue->cdata;
        $pCreateInfosC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pShaders;
        $cValue = $phpValue->cdata;
        $pShadersC = $cValue;
        $cValue = $this->ffi->vkCreateShadersEXT(
            $deviceC,
            $createInfoCountC,
            $pCreateInfosC,
            $pAllocatorC,
            $pShadersC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkShaderEXT $shader VkShaderEXT
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     */
    public function vkDestroyShaderEXT(
        struct\VkDevice $device,
        struct\VkShaderEXT $shader,
        util\ObjectPointer $pAllocator,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $shader;
        $cValue = $phpValue->cdata;
        $shaderC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $cValue = $this->ffi->vkDestroyShaderEXT(
            $deviceC,
            $shaderC,
            $pAllocatorC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkShaderEXT $shader VkShaderEXT
     * @param \iggyvolz\vulkan\util\IntPointer $pDataSize size_t*
     * @param \iggyvolz\vulkan\util\Pointer $pData void*
     * returns VkResult
     */
    public function vkGetShaderBinaryDataEXT(
        struct\VkDevice $device,
        struct\VkShaderEXT $shader,
        util\IntPointer $pDataSize,
        util\Pointer $pData,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $shader;
        $cValue = $phpValue->cdata;
        $shaderC = $cValue;
        $phpValue = $pDataSize;
        $cValue = $phpValue->cdata;
        $pDataSizeC = $cValue;
        $phpValue = $pData;
        $cValue = $phpValue->cdata;
        $pDataC = $cValue;
        $cValue = $this->ffi->vkGetShaderBinaryDataEXT(
            $deviceC,
            $shaderC,
            $pDataSizeC,
            $pDataC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $stageCount uint32_t
     * @param \iggyvolz\vulkan\util\Pointer $pStages const VkShaderStageFlagBits*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkShaderEXT> $pShaders const VkShaderEXT*
     */
    public function vkCmdBindShadersEXT(
        struct\VkCommandBuffer $commandBuffer,
        int $stageCount,
        util\Pointer $pStages,
        util\ObjectPointer $pShaders,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $stageCount;
        $cValue = $phpValue;
        $stageCountC = $cValue;
        $phpValue = $pStages;
        $cValue = $phpValue->cdata;
        $pStagesC = $cValue;
        $phpValue = $pShaders;
        $cValue = $phpValue->cdata;
        $pShadersC = $cValue;
        $cValue = $this->ffi->vkCmdBindShadersEXT(
            $commandBufferC,
            $stageCountC,
            $pStagesC,
            $pShadersC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \iggyvolz\vulkan\util\Pointer $buffer const struct _screen_buffer*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkScreenBufferPropertiesQNX> $pProperties VkScreenBufferPropertiesQNX*
     * returns VkResult
     */
    public function vkGetScreenBufferPropertiesQNX(
        struct\VkDevice $device,
        util\Pointer $buffer,
        util\ObjectPointer $pProperties,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $buffer;
        $cValue = $phpValue->cdata;
        $bufferC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetScreenBufferPropertiesQNX(
            $deviceC,
            $bufferC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice VkPhysicalDevice
     * @param \iggyvolz\vulkan\util\IntPointer $pPropertyCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkCooperativeMatrixPropertiesKHR> $pProperties VkCooperativeMatrixPropertiesKHR*
     * returns VkResult
     */
    public function vkGetPhysicalDeviceCooperativeMatrixPropertiesKHR(
        struct\VkPhysicalDevice $physicalDevice,
        util\IntPointer $pPropertyCount,
        util\ObjectPointer $pProperties,
    ): enum\VkResult
    {
        $phpValue = $physicalDevice;
        $cValue = $phpValue->cdata;
        $physicalDeviceC = $cValue;
        $phpValue = $pPropertyCount;
        $cValue = $phpValue->cdata;
        $pPropertyCountC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->ffi->vkGetPhysicalDeviceCooperativeMatrixPropertiesKHR(
            $physicalDeviceC,
            $pPropertyCountC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkPipeline $executionGraph VkPipeline
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkExecutionGraphPipelineScratchSizeAMDX> $pSizeInfo VkExecutionGraphPipelineScratchSizeAMDX*
     * returns VkResult
     */
    public function vkGetExecutionGraphPipelineScratchSizeAMDX(
        struct\VkDevice $device,
        struct\VkPipeline $executionGraph,
        util\ObjectPointer $pSizeInfo,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $executionGraph;
        $cValue = $phpValue->cdata;
        $executionGraphC = $cValue;
        $phpValue = $pSizeInfo;
        $cValue = $phpValue->cdata;
        $pSizeInfoC = $cValue;
        $cValue = $this->ffi->vkGetExecutionGraphPipelineScratchSizeAMDX(
            $deviceC,
            $executionGraphC,
            $pSizeInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkPipeline $executionGraph VkPipeline
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipelineShaderStageNodeCreateInfoAMDX> $pNodeInfo const VkPipelineShaderStageNodeCreateInfoAMDX*
     * @param \iggyvolz\vulkan\util\IntPointer $pNodeIndex uint32_t*
     * returns VkResult
     */
    public function vkGetExecutionGraphPipelineNodeIndexAMDX(
        struct\VkDevice $device,
        struct\VkPipeline $executionGraph,
        util\ObjectPointer $pNodeInfo,
        util\IntPointer $pNodeIndex,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $executionGraph;
        $cValue = $phpValue->cdata;
        $executionGraphC = $cValue;
        $phpValue = $pNodeInfo;
        $cValue = $phpValue->cdata;
        $pNodeInfoC = $cValue;
        $phpValue = $pNodeIndex;
        $cValue = $phpValue->cdata;
        $pNodeIndexC = $cValue;
        $cValue = $this->ffi->vkGetExecutionGraphPipelineNodeIndexAMDX(
            $deviceC,
            $executionGraphC,
            $pNodeInfoC,
            $pNodeIndexC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkPipelineCache $pipelineCache VkPipelineCache
     * @param int $createInfoCount uint32_t
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkExecutionGraphPipelineCreateInfoAMDX> $pCreateInfos const VkExecutionGraphPipelineCreateInfoAMDX*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPipeline> $pPipelines VkPipeline*
     * returns VkResult
     */
    public function vkCreateExecutionGraphPipelinesAMDX(
        struct\VkDevice $device,
        struct\VkPipelineCache $pipelineCache,
        int $createInfoCount,
        util\ObjectPointer $pCreateInfos,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pPipelines,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $pipelineCache;
        $cValue = $phpValue->cdata;
        $pipelineCacheC = $cValue;
        $phpValue = $createInfoCount;
        $cValue = $phpValue;
        $createInfoCountC = $cValue;
        $phpValue = $pCreateInfos;
        $cValue = $phpValue->cdata;
        $pCreateInfosC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pPipelines;
        $cValue = $phpValue->cdata;
        $pPipelinesC = $cValue;
        $cValue = $this->ffi->vkCreateExecutionGraphPipelinesAMDX(
            $deviceC,
            $pipelineCacheC,
            $createInfoCountC,
            $pCreateInfosC,
            $pAllocatorC,
            $pPipelinesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $scratch VkDeviceAddress
     */
    public function vkCmdInitializeGraphScratchMemoryAMDX(struct\VkCommandBuffer $commandBuffer, int $scratch): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $scratch;
        $cValue = $phpValue;
        $scratchC = $cValue;
        $cValue = $this->ffi->vkCmdInitializeGraphScratchMemoryAMDX(
            $commandBufferC,
            $scratchC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $scratch VkDeviceAddress
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDispatchGraphCountInfoAMDX> $pCountInfo const VkDispatchGraphCountInfoAMDX*
     */
    public function vkCmdDispatchGraphAMDX(
        struct\VkCommandBuffer $commandBuffer,
        int $scratch,
        util\ObjectPointer $pCountInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $scratch;
        $cValue = $phpValue;
        $scratchC = $cValue;
        $phpValue = $pCountInfo;
        $cValue = $phpValue->cdata;
        $pCountInfoC = $cValue;
        $cValue = $this->ffi->vkCmdDispatchGraphAMDX(
            $commandBufferC,
            $scratchC,
            $pCountInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $scratch VkDeviceAddress
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkDispatchGraphCountInfoAMDX> $pCountInfo const VkDispatchGraphCountInfoAMDX*
     */
    public function vkCmdDispatchGraphIndirectAMDX(
        struct\VkCommandBuffer $commandBuffer,
        int $scratch,
        util\ObjectPointer $pCountInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $scratch;
        $cValue = $phpValue;
        $scratchC = $cValue;
        $phpValue = $pCountInfo;
        $cValue = $phpValue->cdata;
        $pCountInfoC = $cValue;
        $cValue = $this->ffi->vkCmdDispatchGraphIndirectAMDX(
            $commandBufferC,
            $scratchC,
            $pCountInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param int $scratch VkDeviceAddress
     * @param int $countInfo VkDeviceAddress
     */
    public function vkCmdDispatchGraphIndirectCountAMDX(
        struct\VkCommandBuffer $commandBuffer,
        int $scratch,
        int $countInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $scratch;
        $cValue = $phpValue;
        $scratchC = $cValue;
        $phpValue = $countInfo;
        $cValue = $phpValue;
        $countInfoC = $cValue;
        $cValue = $this->ffi->vkCmdDispatchGraphIndirectCountAMDX(
            $commandBufferC,
            $scratchC,
            $countInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBindDescriptorSetsInfoKHR> $pBindDescriptorSetsInfo const VkBindDescriptorSetsInfoKHR*
     */
    public function vkCmdBindDescriptorSets2KHR(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pBindDescriptorSetsInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pBindDescriptorSetsInfo;
        $cValue = $phpValue->cdata;
        $pBindDescriptorSetsInfoC = $cValue;
        $cValue = $this->ffi->vkCmdBindDescriptorSets2KHR(
            $commandBufferC,
            $pBindDescriptorSetsInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPushConstantsInfoKHR> $pPushConstantsInfo const VkPushConstantsInfoKHR*
     */
    public function vkCmdPushConstants2KHR(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pPushConstantsInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pPushConstantsInfo;
        $cValue = $phpValue->cdata;
        $pPushConstantsInfoC = $cValue;
        $cValue = $this->ffi->vkCmdPushConstants2KHR(
            $commandBufferC,
            $pPushConstantsInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPushDescriptorSetInfoKHR> $pPushDescriptorSetInfo const VkPushDescriptorSetInfoKHR*
     */
    public function vkCmdPushDescriptorSet2KHR(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pPushDescriptorSetInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pPushDescriptorSetInfo;
        $cValue = $phpValue->cdata;
        $pPushDescriptorSetInfoC = $cValue;
        $cValue = $this->ffi->vkCmdPushDescriptorSet2KHR(
            $commandBufferC,
            $pPushDescriptorSetInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkPushDescriptorSetWithTemplateInfoKHR> $pPushDescriptorSetWithTemplateInfo const VkPushDescriptorSetWithTemplateInfoKHR*
     */
    public function vkCmdPushDescriptorSetWithTemplate2KHR(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pPushDescriptorSetWithTemplateInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pPushDescriptorSetWithTemplateInfo;
        $cValue = $phpValue->cdata;
        $pPushDescriptorSetWithTemplateInfoC = $cValue;
        $cValue = $this->ffi->vkCmdPushDescriptorSetWithTemplate2KHR(
            $commandBufferC,
            $pPushDescriptorSetWithTemplateInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSetDescriptorBufferOffsetsInfoEXT> $pSetDescriptorBufferOffsetsInfo const VkSetDescriptorBufferOffsetsInfoEXT*
     */
    public function vkCmdSetDescriptorBufferOffsets2EXT(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pSetDescriptorBufferOffsetsInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pSetDescriptorBufferOffsetsInfo;
        $cValue = $phpValue->cdata;
        $pSetDescriptorBufferOffsetsInfoC = $cValue;
        $cValue = $this->ffi->vkCmdSetDescriptorBufferOffsets2EXT(
            $commandBufferC,
            $pSetDescriptorBufferOffsetsInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer VkCommandBuffer
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkBindDescriptorBufferEmbeddedSamplersInfoEXT> $pBindDescriptorBufferEmbeddedSamplersInfo const VkBindDescriptorBufferEmbeddedSamplersInfoEXT*
     */
    public function vkCmdBindDescriptorBufferEmbeddedSamplers2EXT(
        struct\VkCommandBuffer $commandBuffer,
        util\ObjectPointer $pBindDescriptorBufferEmbeddedSamplersInfo,
    ): void
    {
        $phpValue = $commandBuffer;
        $cValue = $phpValue->cdata;
        $commandBufferC = $cValue;
        $phpValue = $pBindDescriptorBufferEmbeddedSamplersInfo;
        $cValue = $phpValue->cdata;
        $pBindDescriptorBufferEmbeddedSamplersInfoC = $cValue;
        $cValue = $this->ffi->vkCmdBindDescriptorBufferEmbeddedSamplers2EXT(
            $commandBufferC,
            $pBindDescriptorBufferEmbeddedSamplersInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain VkSwapchainKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkLatencySleepModeInfoNV> $pSleepModeInfo const VkLatencySleepModeInfoNV*
     * returns VkResult
     */
    public function vkSetLatencySleepModeNV(
        struct\VkDevice $device,
        struct\VkSwapchainKHR $swapchain,
        util\ObjectPointer $pSleepModeInfo,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $swapchain;
        $cValue = $phpValue->cdata;
        $swapchainC = $cValue;
        $phpValue = $pSleepModeInfo;
        $cValue = $phpValue->cdata;
        $pSleepModeInfoC = $cValue;
        $cValue = $this->ffi->vkSetLatencySleepModeNV(
            $deviceC,
            $swapchainC,
            $pSleepModeInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain VkSwapchainKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkLatencySleepInfoNV> $pSleepInfo const VkLatencySleepInfoNV*
     * returns VkResult
     */
    public function vkLatencySleepNV(
        struct\VkDevice $device,
        struct\VkSwapchainKHR $swapchain,
        util\ObjectPointer $pSleepInfo,
    ): enum\VkResult
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $swapchain;
        $cValue = $phpValue->cdata;
        $swapchainC = $cValue;
        $phpValue = $pSleepInfo;
        $cValue = $phpValue->cdata;
        $pSleepInfoC = $cValue;
        $cValue = $this->ffi->vkLatencySleepNV(
            $deviceC,
            $swapchainC,
            $pSleepInfoC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain VkSwapchainKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkSetLatencyMarkerInfoNV> $pLatencyMarkerInfo const VkSetLatencyMarkerInfoNV*
     */
    public function vkSetLatencyMarkerNV(
        struct\VkDevice $device,
        struct\VkSwapchainKHR $swapchain,
        util\ObjectPointer $pLatencyMarkerInfo,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $swapchain;
        $cValue = $phpValue->cdata;
        $swapchainC = $cValue;
        $phpValue = $pLatencyMarkerInfo;
        $cValue = $phpValue->cdata;
        $pLatencyMarkerInfoC = $cValue;
        $cValue = $this->ffi->vkSetLatencyMarkerNV(
            $deviceC,
            $swapchainC,
            $pLatencyMarkerInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkDevice $device VkDevice
     * @param \\iggyvolz\vulkan\struct\VkSwapchainKHR $swapchain VkSwapchainKHR
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkGetLatencyMarkerInfoNV> $pLatencyMarkerInfo VkGetLatencyMarkerInfoNV*
     */
    public function vkGetLatencyTimingsNV(
        struct\VkDevice $device,
        struct\VkSwapchainKHR $swapchain,
        util\ObjectPointer $pLatencyMarkerInfo,
    ): void
    {
        $phpValue = $device;
        $cValue = $phpValue->cdata;
        $deviceC = $cValue;
        $phpValue = $swapchain;
        $cValue = $phpValue->cdata;
        $swapchainC = $cValue;
        $phpValue = $pLatencyMarkerInfo;
        $cValue = $phpValue->cdata;
        $pLatencyMarkerInfoC = $cValue;
        $cValue = $this->ffi->vkGetLatencyTimingsNV(
            $deviceC,
            $swapchainC,
            $pLatencyMarkerInfoC,
        );
    }

    /**
     * @param \\iggyvolz\vulkan\struct\VkQueue $queue VkQueue
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkOutOfBandQueueTypeInfoNV> $pQueueTypeInfo const VkOutOfBandQueueTypeInfoNV*
     */
    public function vkQueueNotifyOutOfBandNV(struct\VkQueue $queue, util\ObjectPointer $pQueueTypeInfo): void
    {
        $phpValue = $queue;
        $cValue = $phpValue->cdata;
        $queueC = $cValue;
        $phpValue = $pQueueTypeInfo;
        $cValue = $phpValue->cdata;
        $pQueueTypeInfoC = $cValue;
        $cValue = $this->ffi->vkQueueNotifyOutOfBandNV(
            $queueC,
            $pQueueTypeInfoC,
        );
    }
}
