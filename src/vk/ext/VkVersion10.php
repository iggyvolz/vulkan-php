<?php

namespace iggyvolz\vulkan\ext;

class VkVersion10
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkInstanceCreateInfo $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateInstance(
        \iggyvolz\vulkan\struct\VkInstanceCreateInfo $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $pCreateInfo;
        // const VkInstanceCreateInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkInstance $instance
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroyInstance(
        \iggyvolz\vulkan\struct\VkInstance $instance,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $instance;
        // VkInstance => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $instance = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroyInstance", $instance, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkInstance $instance
     */
    public function vkEnumeratePhysicalDevices(\iggyvolz\vulkan\struct\VkInstance $instance)
    {
        $phpValue = $instance;
        // VkInstance => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $instance = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param ?string $pName
     * @return mixed
     */
    public function vkGetDeviceProcAddr(\iggyvolz\vulkan\struct\VkDevice $device, ?string $pName): mixed
    {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pName;
        // const char* => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $pName = $cValue;
        $cValue = $this->vulkan->call("vkGetDeviceProcAddr", $device, $pName);
        // PFN_vkVoidFunction => iggyvolz\vulkan\generator\Transformer\DummyTransformer
        throw new \LogicException("Dummy transformer - PFN_vkVoidFunction!");
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkInstance $instance
     * @param ?string $pName
     * @return mixed
     */
    public function vkGetInstanceProcAddr(\iggyvolz\vulkan\struct\VkInstance $instance, ?string $pName): mixed
    {
        $phpValue = $instance;
        // VkInstance => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $instance = $cValue;
        $phpValue = $pName;
        // const char* => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $pName = $cValue;
        $cValue = $this->vulkan->call("vkGetInstanceProcAddr", $instance, $pName);
        // PFN_vkVoidFunction => iggyvolz\vulkan\generator\Transformer\DummyTransformer
        throw new \LogicException("Dummy transformer - PFN_vkVoidFunction!");
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     */
    public function vkGetPhysicalDeviceProperties(\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice)
    {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\util\IntPointer $pQueueFamilyPropertyCount
     */
    public function vkGetPhysicalDeviceQueueFamilyProperties(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\util\IntPointer $pQueueFamilyPropertyCount,
    ) {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $pQueueFamilyPropertyCount;
        // uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pQueueFamilyPropertyCount = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     */
    public function vkGetPhysicalDeviceMemoryProperties(\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice)
    {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\util\Pointer $pFeatures
     * @return void
     */
    public function vkGetPhysicalDeviceFeatures(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\util\Pointer $pFeatures,
    ): void {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $pFeatures;
        // VkPhysicalDeviceFeatures* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pFeatures = $cValue;
        $cValue = $this->vulkan->call("vkGetPhysicalDeviceFeatures", $physicalDevice, $pFeatures);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\enum\VkFormat $format
     */
    public function vkGetPhysicalDeviceFormatProperties(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\enum\VkFormat $format,
    ) {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $format;
        // VkFormat => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $format = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\enum\VkFormat $format
     * @param \iggyvolz\vulkan\enum\VkImageType $type
     * @param \iggyvolz\vulkan\enum\VkImageTiling $tiling
     * @param list<\iggyvolz\vulkan\enum\VkImageUsageFlagBits> $usage
     * @param list<\iggyvolz\vulkan\enum\VkImageCreateFlagBits> $flags
     */
    public function vkGetPhysicalDeviceImageFormatProperties(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\enum\VkFormat $format,
        \iggyvolz\vulkan\enum\VkImageType $type,
        \iggyvolz\vulkan\enum\VkImageTiling $tiling,
        array $usage,
        array $flags,
    ) {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $format;
        // VkFormat => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $format = $cValue;
        $phpValue = $type;
        // VkImageType => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $type = $cValue;
        $phpValue = $tiling;
        // VkImageTiling => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $tiling = $cValue;
        $phpValue = $usage;
        // VkImageUsageFlags => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkImageUsageFlagBits::toInt(...$phpValue);
        $usage = $cValue;
        $phpValue = $flags;
        // VkImageCreateFlags => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkImageCreateFlagBits::toInt(...$phpValue);
        $flags = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\struct\VkDeviceCreateInfo $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateDevice(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\struct\VkDeviceCreateInfo $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $pCreateInfo;
        // const VkDeviceCreateInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroyDevice(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroyDevice", $device, $pAllocator);
    }

    public function vkEnumerateInstanceLayerProperties()
    {
    }

    /**
     * @param ?string $pLayerName
     */
    public function vkEnumerateInstanceExtensionProperties(?string $pLayerName)
    {
        $phpValue = $pLayerName;
        // const char* => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $pLayerName = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     */
    public function vkEnumerateDeviceLayerProperties(\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice)
    {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param ?string $pLayerName
     */
    public function vkEnumerateDeviceExtensionProperties(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        ?string $pLayerName,
    ) {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $pLayerName;
        // const char* => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $pLayerName = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param int $queueFamilyIndex
     * @param int $queueIndex
     */
    public function vkGetDeviceQueue(\iggyvolz\vulkan\struct\VkDevice $device, int $queueFamilyIndex, int $queueIndex)
    {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $queueFamilyIndex;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $queueFamilyIndex = $cValue;
        $phpValue = $queueIndex;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $queueIndex = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkQueue $queue
     * @param int $submitCount
     * @param \iggyvolz\vulkan\struct\VkSubmitInfo $pSubmits
     * @param \iggyvolz\vulkan\struct\VkFence $fence
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkQueueSubmit(
        \iggyvolz\vulkan\struct\VkQueue $queue,
        int $submitCount,
        \iggyvolz\vulkan\struct\VkSubmitInfo $pSubmits,
        \iggyvolz\vulkan\struct\VkFence $fence,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $queue;
        // VkQueue => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $queue = $cValue;
        $phpValue = $submitCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $submitCount = $cValue;
        $phpValue = $pSubmits;
        // const VkSubmitInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pSubmits = $cValue;
        $phpValue = $fence;
        // VkFence => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $fence = $cValue;
        $cValue = $this->vulkan->call("vkQueueSubmit", $queue, $submitCount, $pSubmits, $fence);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkQueue $queue
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkQueueWaitIdle(\iggyvolz\vulkan\struct\VkQueue $queue): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $queue;
        // VkQueue => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $queue = $cValue;
        $cValue = $this->vulkan->call("vkQueueWaitIdle", $queue);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkDeviceWaitIdle(\iggyvolz\vulkan\struct\VkDevice $device): \iggyvolz\vulkan\enum\VkResult
    {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $cValue = $this->vulkan->call("vkDeviceWaitIdle", $device);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkMemoryAllocateInfo $pAllocateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkAllocateMemory(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkMemoryAllocateInfo $pAllocateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pAllocateInfo;
        // const VkMemoryAllocateInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDeviceMemory $memory
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkFreeMemory(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDeviceMemory $memory,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $memory;
        // VkDeviceMemory => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $memory = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkFreeMemory", $device, $memory, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDeviceMemory $memory
     * @param int $offset
     * @param int $size
     * @param list<\iggyvolz\vulkan\enum\VkMemoryMapFlagBits> $flags
     * @param \iggyvolz\vulkan\util\Pointer $ppData
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkMapMemory(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDeviceMemory $memory,
        int $offset,
        int $size,
        array $flags,
        \iggyvolz\vulkan\util\Pointer $ppData,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $memory;
        // VkDeviceMemory => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $memory = $cValue;
        $phpValue = $offset;
        // VkDeviceSize => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $offset = $cValue;
        $phpValue = $size;
        // VkDeviceSize => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $size = $cValue;
        $phpValue = $flags;
        // VkMemoryMapFlags => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkMemoryMapFlagBits::toInt(...$phpValue);
        $flags = $cValue;
        $phpValue = $ppData;
        // void** => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $ppData = $cValue;
        $cValue = $this->vulkan->call("vkMapMemory", $device, $memory, $offset, $size, $flags, $ppData);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDeviceMemory $memory
     * @return void
     */
    public function vkUnmapMemory(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDeviceMemory $memory,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $memory;
        // VkDeviceMemory => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $memory = $cValue;
        $cValue = $this->vulkan->call("vkUnmapMemory", $device, $memory);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param int $memoryRangeCount
     * @param \iggyvolz\vulkan\struct\VkMappedMemoryRange $pMemoryRanges
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkFlushMappedMemoryRanges(
        \iggyvolz\vulkan\struct\VkDevice $device,
        int $memoryRangeCount,
        \iggyvolz\vulkan\struct\VkMappedMemoryRange $pMemoryRanges,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $memoryRangeCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $memoryRangeCount = $cValue;
        $phpValue = $pMemoryRanges;
        // const VkMappedMemoryRange* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pMemoryRanges = $cValue;
        $cValue = $this->vulkan->call("vkFlushMappedMemoryRanges", $device, $memoryRangeCount, $pMemoryRanges);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param int $memoryRangeCount
     * @param \iggyvolz\vulkan\struct\VkMappedMemoryRange $pMemoryRanges
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkInvalidateMappedMemoryRanges(
        \iggyvolz\vulkan\struct\VkDevice $device,
        int $memoryRangeCount,
        \iggyvolz\vulkan\struct\VkMappedMemoryRange $pMemoryRanges,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $memoryRangeCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $memoryRangeCount = $cValue;
        $phpValue = $pMemoryRanges;
        // const VkMappedMemoryRange* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pMemoryRanges = $cValue;
        $cValue = $this->vulkan->call("vkInvalidateMappedMemoryRanges", $device, $memoryRangeCount, $pMemoryRanges);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDeviceMemory $memory
     * @param \iggyvolz\vulkan\util\Pointer $pCommittedMemoryInBytes
     * @return void
     */
    public function vkGetDeviceMemoryCommitment(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDeviceMemory $memory,
        \iggyvolz\vulkan\util\Pointer $pCommittedMemoryInBytes,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $memory;
        // VkDeviceMemory => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $memory = $cValue;
        $phpValue = $pCommittedMemoryInBytes;
        // VkDeviceSize* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pCommittedMemoryInBytes = $cValue;
        $cValue = $this->vulkan->call("vkGetDeviceMemoryCommitment", $device, $memory, $pCommittedMemoryInBytes);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkBuffer $buffer
     */
    public function vkGetBufferMemoryRequirements(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkBuffer $buffer,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $buffer;
        // VkBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $buffer = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkBuffer $buffer
     * @param \iggyvolz\vulkan\struct\VkDeviceMemory $memory
     * @param int $memoryOffset
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkBindBufferMemory(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkBuffer $buffer,
        \iggyvolz\vulkan\struct\VkDeviceMemory $memory,
        int $memoryOffset,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $buffer;
        // VkBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $buffer = $cValue;
        $phpValue = $memory;
        // VkDeviceMemory => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $memory = $cValue;
        $phpValue = $memoryOffset;
        // VkDeviceSize => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $memoryOffset = $cValue;
        $cValue = $this->vulkan->call("vkBindBufferMemory", $device, $buffer, $memory, $memoryOffset);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkImage $image
     */
    public function vkGetImageMemoryRequirements(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkImage $image,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $image;
        // VkImage => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $image = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkImage $image
     * @param \iggyvolz\vulkan\struct\VkDeviceMemory $memory
     * @param int $memoryOffset
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkBindImageMemory(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkImage $image,
        \iggyvolz\vulkan\struct\VkDeviceMemory $memory,
        int $memoryOffset,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $image;
        // VkImage => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $image = $cValue;
        $phpValue = $memory;
        // VkDeviceMemory => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $memory = $cValue;
        $phpValue = $memoryOffset;
        // VkDeviceSize => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $memoryOffset = $cValue;
        $cValue = $this->vulkan->call("vkBindImageMemory", $device, $image, $memory, $memoryOffset);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkImage $image
     * @param \iggyvolz\vulkan\util\IntPointer $pSparseMemoryRequirementCount
     */
    public function vkGetImageSparseMemoryRequirements(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkImage $image,
        \iggyvolz\vulkan\util\IntPointer $pSparseMemoryRequirementCount,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $image;
        // VkImage => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $image = $cValue;
        $phpValue = $pSparseMemoryRequirementCount;
        // uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pSparseMemoryRequirementCount = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\enum\VkFormat $format
     * @param \iggyvolz\vulkan\enum\VkImageType $type
     * @param \iggyvolz\vulkan\enum\VkSampleCountFlagBits $samples
     * @param list<\iggyvolz\vulkan\enum\VkImageUsageFlagBits> $usage
     * @param \iggyvolz\vulkan\enum\VkImageTiling $tiling
     * @param \iggyvolz\vulkan\util\IntPointer $pPropertyCount
     */
    public function vkGetPhysicalDeviceSparseImageFormatProperties(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\enum\VkFormat $format,
        \iggyvolz\vulkan\enum\VkImageType $type,
        \iggyvolz\vulkan\enum\VkSampleCountFlagBits $samples,
        array $usage,
        \iggyvolz\vulkan\enum\VkImageTiling $tiling,
        \iggyvolz\vulkan\util\IntPointer $pPropertyCount,
    ) {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $format;
        // VkFormat => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $format = $cValue;
        $phpValue = $type;
        // VkImageType => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $type = $cValue;
        $phpValue = $samples;
        // VkSampleCountFlagBits => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $samples = $cValue;
        $phpValue = $usage;
        // VkImageUsageFlags => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkImageUsageFlagBits::toInt(...$phpValue);
        $usage = $cValue;
        $phpValue = $tiling;
        // VkImageTiling => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $tiling = $cValue;
        $phpValue = $pPropertyCount;
        // uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pPropertyCount = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkQueue $queue
     * @param int $bindInfoCount
     * @param \iggyvolz\vulkan\struct\VkBindSparseInfo $pBindInfo
     * @param \iggyvolz\vulkan\struct\VkFence $fence
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkQueueBindSparse(
        \iggyvolz\vulkan\struct\VkQueue $queue,
        int $bindInfoCount,
        \iggyvolz\vulkan\struct\VkBindSparseInfo $pBindInfo,
        \iggyvolz\vulkan\struct\VkFence $fence,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $queue;
        // VkQueue => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $queue = $cValue;
        $phpValue = $bindInfoCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $bindInfoCount = $cValue;
        $phpValue = $pBindInfo;
        // const VkBindSparseInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pBindInfo = $cValue;
        $phpValue = $fence;
        // VkFence => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $fence = $cValue;
        $cValue = $this->vulkan->call("vkQueueBindSparse", $queue, $bindInfoCount, $pBindInfo, $fence);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkFenceCreateInfo $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateFence(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkFenceCreateInfo $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCreateInfo;
        // const VkFenceCreateInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkFence $fence
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroyFence(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkFence $fence,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $fence;
        // VkFence => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $fence = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroyFence", $device, $fence, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param int $fenceCount
     * @param \iggyvolz\vulkan\struct\VkFence $pFences
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkResetFences(
        \iggyvolz\vulkan\struct\VkDevice $device,
        int $fenceCount,
        \iggyvolz\vulkan\struct\VkFence $pFences,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $fenceCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $fenceCount = $cValue;
        $phpValue = $pFences;
        // const VkFence* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pFences = $cValue;
        $cValue = $this->vulkan->call("vkResetFences", $device, $fenceCount, $pFences);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkFence $fence
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetFenceStatus(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkFence $fence,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $fence;
        // VkFence => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $fence = $cValue;
        $cValue = $this->vulkan->call("vkGetFenceStatus", $device, $fence);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param int $fenceCount
     * @param \iggyvolz\vulkan\struct\VkFence $pFences
     * @param bool $waitAll
     * @param int $timeout
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkWaitForFences(
        \iggyvolz\vulkan\struct\VkDevice $device,
        int $fenceCount,
        \iggyvolz\vulkan\struct\VkFence $pFences,
        bool $waitAll,
        int $timeout,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $fenceCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $fenceCount = $cValue;
        $phpValue = $pFences;
        // const VkFence* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pFences = $cValue;
        $phpValue = $waitAll;
        // VkBool32 => iggyvolz\vulkan\generator\Transformer\BoolTransformer
        $cValue = $phpValue ? 1 : 0;
        $waitAll = $cValue;
        $phpValue = $timeout;
        // uint64_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $timeout = $cValue;
        $cValue = $this->vulkan->call("vkWaitForFences", $device, $fenceCount, $pFences, $waitAll, $timeout);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkSemaphoreCreateInfo $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateSemaphore(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkSemaphoreCreateInfo $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCreateInfo;
        // const VkSemaphoreCreateInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkSemaphore $semaphore
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroySemaphore(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkSemaphore $semaphore,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $semaphore;
        // VkSemaphore => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $semaphore = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroySemaphore", $device, $semaphore, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkEventCreateInfo $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateEvent(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkEventCreateInfo $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCreateInfo;
        // const VkEventCreateInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkEvent $event
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroyEvent(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkEvent $event,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $event;
        // VkEvent => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $event = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroyEvent", $device, $event, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkEvent $event
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetEventStatus(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkEvent $event,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $event;
        // VkEvent => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $event = $cValue;
        $cValue = $this->vulkan->call("vkGetEventStatus", $device, $event);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkEvent $event
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkSetEvent(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkEvent $event,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $event;
        // VkEvent => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $event = $cValue;
        $cValue = $this->vulkan->call("vkSetEvent", $device, $event);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkEvent $event
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkResetEvent(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkEvent $event,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $event;
        // VkEvent => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $event = $cValue;
        $cValue = $this->vulkan->call("vkResetEvent", $device, $event);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkQueryPoolCreateInfo $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateQueryPool(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkQueryPoolCreateInfo $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCreateInfo;
        // const VkQueryPoolCreateInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkQueryPool $queryPool
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroyQueryPool(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkQueryPool $queryPool,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $queryPool;
        // VkQueryPool => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $queryPool = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroyQueryPool", $device, $queryPool, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkQueryPool $queryPool
     * @param int $firstQuery
     * @param int $queryCount
     * @param int $dataSize
     * @param \iggyvolz\vulkan\util\Pointer $pData
     * @param int $stride
     * @param list<\iggyvolz\vulkan\enum\VkQueryResultFlagBits> $flags
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetQueryPoolResults(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkQueryPool $queryPool,
        int $firstQuery,
        int $queryCount,
        int $dataSize,
        \iggyvolz\vulkan\util\Pointer $pData,
        int $stride,
        array $flags,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $queryPool;
        // VkQueryPool => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $queryPool = $cValue;
        $phpValue = $firstQuery;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $firstQuery = $cValue;
        $phpValue = $queryCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $queryCount = $cValue;
        $phpValue = $dataSize;
        // size_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $dataSize = $cValue;
        $phpValue = $pData;
        // void* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pData = $cValue;
        $phpValue = $stride;
        // VkDeviceSize => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $stride = $cValue;
        $phpValue = $flags;
        // VkQueryResultFlags => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkQueryResultFlagBits::toInt(...$phpValue);
        $flags = $cValue;
        $cValue = $this->vulkan->call("vkGetQueryPoolResults", $device, $queryPool, $firstQuery, $queryCount, $dataSize, $pData, $stride, $flags);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkBufferCreateInfo $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateBuffer(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkBufferCreateInfo $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCreateInfo;
        // const VkBufferCreateInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkBuffer $buffer
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroyBuffer(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkBuffer $buffer,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $buffer;
        // VkBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $buffer = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroyBuffer", $device, $buffer, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkBufferViewCreateInfo $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateBufferView(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkBufferViewCreateInfo $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCreateInfo;
        // const VkBufferViewCreateInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkBufferView $bufferView
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroyBufferView(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkBufferView $bufferView,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $bufferView;
        // VkBufferView => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $bufferView = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroyBufferView", $device, $bufferView, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkImageCreateInfo $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateImage(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkImageCreateInfo $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCreateInfo;
        // const VkImageCreateInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkImage $image
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroyImage(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkImage $image,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $image;
        // VkImage => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $image = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroyImage", $device, $image, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkImage $image
     * @param \iggyvolz\vulkan\struct\VkImageSubresource $pSubresource
     */
    public function vkGetImageSubresourceLayout(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkImage $image,
        \iggyvolz\vulkan\struct\VkImageSubresource $pSubresource,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $image;
        // VkImage => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $image = $cValue;
        $phpValue = $pSubresource;
        // const VkImageSubresource* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pSubresource = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkImageViewCreateInfo $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateImageView(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkImageViewCreateInfo $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCreateInfo;
        // const VkImageViewCreateInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkImageView $imageView
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroyImageView(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkImageView $imageView,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $imageView;
        // VkImageView => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $imageView = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroyImageView", $device, $imageView, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkShaderModuleCreateInfo $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateShaderModule(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkShaderModuleCreateInfo $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCreateInfo;
        // const VkShaderModuleCreateInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkShaderModule $shaderModule
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroyShaderModule(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkShaderModule $shaderModule,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $shaderModule;
        // VkShaderModule => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $shaderModule = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroyShaderModule", $device, $shaderModule, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkPipelineCacheCreateInfo $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreatePipelineCache(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkPipelineCacheCreateInfo $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCreateInfo;
        // const VkPipelineCacheCreateInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkPipelineCache $pipelineCache
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroyPipelineCache(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkPipelineCache $pipelineCache,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pipelineCache;
        // VkPipelineCache => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $pipelineCache = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroyPipelineCache", $device, $pipelineCache, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkPipelineCache $pipelineCache
     * @param \iggyvolz\vulkan\util\IntPointer $pDataSize
     * @param \iggyvolz\vulkan\util\Pointer $pData
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetPipelineCacheData(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkPipelineCache $pipelineCache,
        \iggyvolz\vulkan\util\IntPointer $pDataSize,
        \iggyvolz\vulkan\util\Pointer $pData,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pipelineCache;
        // VkPipelineCache => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $pipelineCache = $cValue;
        $phpValue = $pDataSize;
        // size_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pDataSize = $cValue;
        $phpValue = $pData;
        // void* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pData = $cValue;
        $cValue = $this->vulkan->call("vkGetPipelineCacheData", $device, $pipelineCache, $pDataSize, $pData);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkPipelineCache $dstCache
     * @param int $srcCacheCount
     * @param \iggyvolz\vulkan\struct\VkPipelineCache $pSrcCaches
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkMergePipelineCaches(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkPipelineCache $dstCache,
        int $srcCacheCount,
        \iggyvolz\vulkan\struct\VkPipelineCache $pSrcCaches,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $dstCache;
        // VkPipelineCache => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $dstCache = $cValue;
        $phpValue = $srcCacheCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $srcCacheCount = $cValue;
        $phpValue = $pSrcCaches;
        // const VkPipelineCache* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pSrcCaches = $cValue;
        $cValue = $this->vulkan->call("vkMergePipelineCaches", $device, $dstCache, $srcCacheCount, $pSrcCaches);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkPipelineCache $pipelineCache
     * @param int $createInfoCount
     * @param \iggyvolz\vulkan\struct\VkGraphicsPipelineCreateInfo $pCreateInfos
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateGraphicsPipelines(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkPipelineCache $pipelineCache,
        int $createInfoCount,
        \iggyvolz\vulkan\struct\VkGraphicsPipelineCreateInfo $pCreateInfos,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pipelineCache;
        // VkPipelineCache => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $pipelineCache = $cValue;
        $phpValue = $createInfoCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $createInfoCount = $cValue;
        $phpValue = $pCreateInfos;
        // const VkGraphicsPipelineCreateInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfos = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkPipelineCache $pipelineCache
     * @param int $createInfoCount
     * @param \iggyvolz\vulkan\struct\VkComputePipelineCreateInfo $pCreateInfos
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateComputePipelines(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkPipelineCache $pipelineCache,
        int $createInfoCount,
        \iggyvolz\vulkan\struct\VkComputePipelineCreateInfo $pCreateInfos,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pipelineCache;
        // VkPipelineCache => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $pipelineCache = $cValue;
        $phpValue = $createInfoCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $createInfoCount = $cValue;
        $phpValue = $pCreateInfos;
        // const VkComputePipelineCreateInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfos = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkPipeline $pipeline
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroyPipeline(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkPipeline $pipeline,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pipeline;
        // VkPipeline => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $pipeline = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroyPipeline", $device, $pipeline, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkPipelineLayoutCreateInfo $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreatePipelineLayout(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkPipelineLayoutCreateInfo $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCreateInfo;
        // const VkPipelineLayoutCreateInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkPipelineLayout $pipelineLayout
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroyPipelineLayout(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkPipelineLayout $pipelineLayout,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pipelineLayout;
        // VkPipelineLayout => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $pipelineLayout = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroyPipelineLayout", $device, $pipelineLayout, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkSamplerCreateInfo $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateSampler(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkSamplerCreateInfo $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCreateInfo;
        // const VkSamplerCreateInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkSampler $sampler
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroySampler(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkSampler $sampler,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $sampler;
        // VkSampler => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $sampler = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroySampler", $device, $sampler, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDescriptorSetLayoutCreateInfo $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateDescriptorSetLayout(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDescriptorSetLayoutCreateInfo $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCreateInfo;
        // const VkDescriptorSetLayoutCreateInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDescriptorSetLayout $descriptorSetLayout
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroyDescriptorSetLayout(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDescriptorSetLayout $descriptorSetLayout,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $descriptorSetLayout;
        // VkDescriptorSetLayout => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $descriptorSetLayout = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroyDescriptorSetLayout", $device, $descriptorSetLayout, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDescriptorPoolCreateInfo $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateDescriptorPool(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDescriptorPoolCreateInfo $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCreateInfo;
        // const VkDescriptorPoolCreateInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDescriptorPool $descriptorPool
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroyDescriptorPool(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDescriptorPool $descriptorPool,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $descriptorPool;
        // VkDescriptorPool => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $descriptorPool = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroyDescriptorPool", $device, $descriptorPool, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDescriptorPool $descriptorPool
     * @param list<void> $flags
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkResetDescriptorPool(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDescriptorPool $descriptorPool,
        array $flags,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $descriptorPool;
        // VkDescriptorPool => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $descriptorPool = $cValue;
        $phpValue = $flags;
        // VkDescriptorPoolResetFlags => iggyvolz\vulkan\generator\Transformer\LonelyFlagsTransformer
        $cValue = 0;
        $flags = $cValue;
        $cValue = $this->vulkan->call("vkResetDescriptorPool", $device, $descriptorPool, $flags);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDescriptorSetAllocateInfo $pAllocateInfo
     */
    public function vkAllocateDescriptorSets(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDescriptorSetAllocateInfo $pAllocateInfo,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pAllocateInfo;
        // const VkDescriptorSetAllocateInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocateInfo = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDescriptorPool $descriptorPool
     * @param int $descriptorSetCount
     * @param \iggyvolz\vulkan\struct\VkDescriptorSet $pDescriptorSets
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkFreeDescriptorSets(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDescriptorPool $descriptorPool,
        int $descriptorSetCount,
        \iggyvolz\vulkan\struct\VkDescriptorSet $pDescriptorSets,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $descriptorPool;
        // VkDescriptorPool => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $descriptorPool = $cValue;
        $phpValue = $descriptorSetCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $descriptorSetCount = $cValue;
        $phpValue = $pDescriptorSets;
        // const VkDescriptorSet* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pDescriptorSets = $cValue;
        $cValue = $this->vulkan->call("vkFreeDescriptorSets", $device, $descriptorPool, $descriptorSetCount, $pDescriptorSets);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param int $descriptorWriteCount
     * @param \iggyvolz\vulkan\struct\VkWriteDescriptorSet $pDescriptorWrites
     * @param int $descriptorCopyCount
     * @param \iggyvolz\vulkan\struct\VkCopyDescriptorSet $pDescriptorCopies
     * @return void
     */
    public function vkUpdateDescriptorSets(
        \iggyvolz\vulkan\struct\VkDevice $device,
        int $descriptorWriteCount,
        \iggyvolz\vulkan\struct\VkWriteDescriptorSet $pDescriptorWrites,
        int $descriptorCopyCount,
        \iggyvolz\vulkan\struct\VkCopyDescriptorSet $pDescriptorCopies,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $descriptorWriteCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $descriptorWriteCount = $cValue;
        $phpValue = $pDescriptorWrites;
        // const VkWriteDescriptorSet* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pDescriptorWrites = $cValue;
        $phpValue = $descriptorCopyCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $descriptorCopyCount = $cValue;
        $phpValue = $pDescriptorCopies;
        // const VkCopyDescriptorSet* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pDescriptorCopies = $cValue;
        $cValue = $this->vulkan->call("vkUpdateDescriptorSets", $device, $descriptorWriteCount, $pDescriptorWrites, $descriptorCopyCount, $pDescriptorCopies);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkFramebufferCreateInfo $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateFramebuffer(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkFramebufferCreateInfo $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCreateInfo;
        // const VkFramebufferCreateInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkFramebuffer $framebuffer
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroyFramebuffer(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkFramebuffer $framebuffer,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $framebuffer;
        // VkFramebuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $framebuffer = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroyFramebuffer", $device, $framebuffer, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkRenderPassCreateInfo $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateRenderPass(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkRenderPassCreateInfo $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCreateInfo;
        // const VkRenderPassCreateInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkRenderPass $renderPass
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroyRenderPass(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkRenderPass $renderPass,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $renderPass;
        // VkRenderPass => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $renderPass = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroyRenderPass", $device, $renderPass, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkRenderPass $renderPass
     */
    public function vkGetRenderAreaGranularity(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkRenderPass $renderPass,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $renderPass;
        // VkRenderPass => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $renderPass = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkCommandPoolCreateInfo $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateCommandPool(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkCommandPoolCreateInfo $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCreateInfo;
        // const VkCommandPoolCreateInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkCommandPool $commandPool
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroyCommandPool(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkCommandPool $commandPool,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $commandPool;
        // VkCommandPool => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandPool = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroyCommandPool", $device, $commandPool, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkCommandPool $commandPool
     * @param list<\iggyvolz\vulkan\enum\VkCommandPoolResetFlagBits> $flags
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkResetCommandPool(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkCommandPool $commandPool,
        array $flags,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $commandPool;
        // VkCommandPool => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandPool = $cValue;
        $phpValue = $flags;
        // VkCommandPoolResetFlags => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkCommandPoolResetFlagBits::toInt(...$phpValue);
        $flags = $cValue;
        $cValue = $this->vulkan->call("vkResetCommandPool", $device, $commandPool, $flags);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkCommandBufferAllocateInfo $pAllocateInfo
     */
    public function vkAllocateCommandBuffers(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkCommandBufferAllocateInfo $pAllocateInfo,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pAllocateInfo;
        // const VkCommandBufferAllocateInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocateInfo = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkCommandPool $commandPool
     * @param int $commandBufferCount
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $pCommandBuffers
     * @return void
     */
    public function vkFreeCommandBuffers(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkCommandPool $commandPool,
        int $commandBufferCount,
        \iggyvolz\vulkan\struct\VkCommandBuffer $pCommandBuffers,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $commandPool;
        // VkCommandPool => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandPool = $cValue;
        $phpValue = $commandBufferCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $commandBufferCount = $cValue;
        $phpValue = $pCommandBuffers;
        // const VkCommandBuffer* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCommandBuffers = $cValue;
        $cValue = $this->vulkan->call("vkFreeCommandBuffers", $device, $commandPool, $commandBufferCount, $pCommandBuffers);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkCommandBufferBeginInfo $pBeginInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkBeginCommandBuffer(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkCommandBufferBeginInfo $pBeginInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pBeginInfo;
        // const VkCommandBufferBeginInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pBeginInfo = $cValue;
        $cValue = $this->vulkan->call("vkBeginCommandBuffer", $commandBuffer, $pBeginInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkEndCommandBuffer(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $cValue = $this->vulkan->call("vkEndCommandBuffer", $commandBuffer);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param list<\iggyvolz\vulkan\enum\VkCommandBufferResetFlagBits> $flags
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkResetCommandBuffer(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        array $flags,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $flags;
        // VkCommandBufferResetFlags => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkCommandBufferResetFlagBits::toInt(...$phpValue);
        $flags = $cValue;
        $cValue = $this->vulkan->call("vkResetCommandBuffer", $commandBuffer, $flags);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint
     * @param \iggyvolz\vulkan\struct\VkPipeline $pipeline
     * @return void
     */
    public function vkCmdBindPipeline(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint,
        \iggyvolz\vulkan\struct\VkPipeline $pipeline,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pipelineBindPoint;
        // VkPipelineBindPoint => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $pipelineBindPoint = $cValue;
        $phpValue = $pipeline;
        // VkPipeline => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $pipeline = $cValue;
        $cValue = $this->vulkan->call("vkCmdBindPipeline", $commandBuffer, $pipelineBindPoint, $pipeline);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $firstViewport
     * @param int $viewportCount
     * @param \iggyvolz\vulkan\struct\VkViewport $pViewports
     * @return void
     */
    public function vkCmdSetViewport(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $firstViewport,
        int $viewportCount,
        \iggyvolz\vulkan\struct\VkViewport $pViewports,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $firstViewport;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $firstViewport = $cValue;
        $phpValue = $viewportCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $viewportCount = $cValue;
        $phpValue = $pViewports;
        // const VkViewport* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pViewports = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetViewport", $commandBuffer, $firstViewport, $viewportCount, $pViewports);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $firstScissor
     * @param int $scissorCount
     * @param \iggyvolz\vulkan\struct\VkRect2D $pScissors
     * @return void
     */
    public function vkCmdSetScissor(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $firstScissor,
        int $scissorCount,
        \iggyvolz\vulkan\struct\VkRect2D $pScissors,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $firstScissor;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $firstScissor = $cValue;
        $phpValue = $scissorCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $scissorCount = $cValue;
        $phpValue = $pScissors;
        // const VkRect2D* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pScissors = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetScissor", $commandBuffer, $firstScissor, $scissorCount, $pScissors);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param float $lineWidth
     * @return void
     */
    public function vkCmdSetLineWidth(\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer, float $lineWidth): void
    {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $lineWidth;
        // float => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $lineWidth = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetLineWidth", $commandBuffer, $lineWidth);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param float $depthBiasConstantFactor
     * @param float $depthBiasClamp
     * @param float $depthBiasSlopeFactor
     * @return void
     */
    public function vkCmdSetDepthBias(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        float $depthBiasConstantFactor,
        float $depthBiasClamp,
        float $depthBiasSlopeFactor,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $depthBiasConstantFactor;
        // float => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $depthBiasConstantFactor = $cValue;
        $phpValue = $depthBiasClamp;
        // float => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $depthBiasClamp = $cValue;
        $phpValue = $depthBiasSlopeFactor;
        // float => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $depthBiasSlopeFactor = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetDepthBias", $commandBuffer, $depthBiasConstantFactor, $depthBiasClamp, $depthBiasSlopeFactor);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param mixed $blendConstants
     * @return void
     */
    public function vkCmdSetBlendConstants(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        mixed $blendConstants,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $blendConstants;
        // const float [4] => iggyvolz\vulkan\generator\Transformer\DummyTransformer
        throw new \LogicException("Dummy transformer - const float[4]!");
        $blendConstants = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetBlendConstants", $commandBuffer, $blendConstants);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param float $minDepthBounds
     * @param float $maxDepthBounds
     * @return void
     */
    public function vkCmdSetDepthBounds(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        float $minDepthBounds,
        float $maxDepthBounds,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $minDepthBounds;
        // float => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $minDepthBounds = $cValue;
        $phpValue = $maxDepthBounds;
        // float => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $maxDepthBounds = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetDepthBounds", $commandBuffer, $minDepthBounds, $maxDepthBounds);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param list<\iggyvolz\vulkan\enum\VkStencilFaceFlagBits> $faceMask
     * @param int $compareMask
     * @return void
     */
    public function vkCmdSetStencilCompareMask(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        array $faceMask,
        int $compareMask,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $faceMask;
        // VkStencilFaceFlags => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkStencilFaceFlagBits::toInt(...$phpValue);
        $faceMask = $cValue;
        $phpValue = $compareMask;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $compareMask = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetStencilCompareMask", $commandBuffer, $faceMask, $compareMask);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param list<\iggyvolz\vulkan\enum\VkStencilFaceFlagBits> $faceMask
     * @param int $writeMask
     * @return void
     */
    public function vkCmdSetStencilWriteMask(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        array $faceMask,
        int $writeMask,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $faceMask;
        // VkStencilFaceFlags => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkStencilFaceFlagBits::toInt(...$phpValue);
        $faceMask = $cValue;
        $phpValue = $writeMask;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $writeMask = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetStencilWriteMask", $commandBuffer, $faceMask, $writeMask);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param list<\iggyvolz\vulkan\enum\VkStencilFaceFlagBits> $faceMask
     * @param int $reference
     * @return void
     */
    public function vkCmdSetStencilReference(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        array $faceMask,
        int $reference,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $faceMask;
        // VkStencilFaceFlags => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkStencilFaceFlagBits::toInt(...$phpValue);
        $faceMask = $cValue;
        $phpValue = $reference;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $reference = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetStencilReference", $commandBuffer, $faceMask, $reference);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint
     * @param \iggyvolz\vulkan\struct\VkPipelineLayout $layout
     * @param int $firstSet
     * @param int $descriptorSetCount
     * @param \iggyvolz\vulkan\struct\VkDescriptorSet $pDescriptorSets
     * @param int $dynamicOffsetCount
     * @param \iggyvolz\vulkan\util\IntPointer $pDynamicOffsets
     * @return void
     */
    public function vkCmdBindDescriptorSets(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint,
        \iggyvolz\vulkan\struct\VkPipelineLayout $layout,
        int $firstSet,
        int $descriptorSetCount,
        \iggyvolz\vulkan\struct\VkDescriptorSet $pDescriptorSets,
        int $dynamicOffsetCount,
        \iggyvolz\vulkan\util\IntPointer $pDynamicOffsets,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pipelineBindPoint;
        // VkPipelineBindPoint => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $pipelineBindPoint = $cValue;
        $phpValue = $layout;
        // VkPipelineLayout => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $layout = $cValue;
        $phpValue = $firstSet;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $firstSet = $cValue;
        $phpValue = $descriptorSetCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $descriptorSetCount = $cValue;
        $phpValue = $pDescriptorSets;
        // const VkDescriptorSet* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pDescriptorSets = $cValue;
        $phpValue = $dynamicOffsetCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $dynamicOffsetCount = $cValue;
        $phpValue = $pDynamicOffsets;
        // const uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pDynamicOffsets = $cValue;
        $cValue = $this->vulkan->call("vkCmdBindDescriptorSets", $commandBuffer, $pipelineBindPoint, $layout, $firstSet, $descriptorSetCount, $pDescriptorSets, $dynamicOffsetCount, $pDynamicOffsets);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkBuffer $buffer
     * @param int $offset
     * @param \iggyvolz\vulkan\enum\VkIndexType $indexType
     * @return void
     */
    public function vkCmdBindIndexBuffer(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkBuffer $buffer,
        int $offset,
        \iggyvolz\vulkan\enum\VkIndexType $indexType,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $buffer;
        // VkBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $buffer = $cValue;
        $phpValue = $offset;
        // VkDeviceSize => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $offset = $cValue;
        $phpValue = $indexType;
        // VkIndexType => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $indexType = $cValue;
        $cValue = $this->vulkan->call("vkCmdBindIndexBuffer", $commandBuffer, $buffer, $offset, $indexType);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $firstBinding
     * @param int $bindingCount
     * @param \iggyvolz\vulkan\struct\VkBuffer $pBuffers
     * @param \iggyvolz\vulkan\util\Pointer $pOffsets
     * @return void
     */
    public function vkCmdBindVertexBuffers(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $firstBinding,
        int $bindingCount,
        \iggyvolz\vulkan\struct\VkBuffer $pBuffers,
        \iggyvolz\vulkan\util\Pointer $pOffsets,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $firstBinding;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $firstBinding = $cValue;
        $phpValue = $bindingCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $bindingCount = $cValue;
        $phpValue = $pBuffers;
        // const VkBuffer* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pBuffers = $cValue;
        $phpValue = $pOffsets;
        // const VkDeviceSize* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pOffsets = $cValue;
        $cValue = $this->vulkan->call("vkCmdBindVertexBuffers", $commandBuffer, $firstBinding, $bindingCount, $pBuffers, $pOffsets);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $vertexCount
     * @param int $instanceCount
     * @param int $firstVertex
     * @param int $firstInstance
     * @return void
     */
    public function vkCmdDraw(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $vertexCount,
        int $instanceCount,
        int $firstVertex,
        int $firstInstance,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $vertexCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $vertexCount = $cValue;
        $phpValue = $instanceCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $instanceCount = $cValue;
        $phpValue = $firstVertex;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $firstVertex = $cValue;
        $phpValue = $firstInstance;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $firstInstance = $cValue;
        $cValue = $this->vulkan->call("vkCmdDraw", $commandBuffer, $vertexCount, $instanceCount, $firstVertex, $firstInstance);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $indexCount
     * @param int $instanceCount
     * @param int $firstIndex
     * @param int $vertexOffset
     * @param int $firstInstance
     * @return void
     */
    public function vkCmdDrawIndexed(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $indexCount,
        int $instanceCount,
        int $firstIndex,
        int $vertexOffset,
        int $firstInstance,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $indexCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $indexCount = $cValue;
        $phpValue = $instanceCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $instanceCount = $cValue;
        $phpValue = $firstIndex;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $firstIndex = $cValue;
        $phpValue = $vertexOffset;
        // int32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $vertexOffset = $cValue;
        $phpValue = $firstInstance;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $firstInstance = $cValue;
        $cValue = $this->vulkan->call("vkCmdDrawIndexed", $commandBuffer, $indexCount, $instanceCount, $firstIndex, $vertexOffset, $firstInstance);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkBuffer $buffer
     * @param int $offset
     * @param int $drawCount
     * @param int $stride
     * @return void
     */
    public function vkCmdDrawIndirect(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkBuffer $buffer,
        int $offset,
        int $drawCount,
        int $stride,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $buffer;
        // VkBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $buffer = $cValue;
        $phpValue = $offset;
        // VkDeviceSize => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $offset = $cValue;
        $phpValue = $drawCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $drawCount = $cValue;
        $phpValue = $stride;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $stride = $cValue;
        $cValue = $this->vulkan->call("vkCmdDrawIndirect", $commandBuffer, $buffer, $offset, $drawCount, $stride);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkBuffer $buffer
     * @param int $offset
     * @param int $drawCount
     * @param int $stride
     * @return void
     */
    public function vkCmdDrawIndexedIndirect(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkBuffer $buffer,
        int $offset,
        int $drawCount,
        int $stride,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $buffer;
        // VkBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $buffer = $cValue;
        $phpValue = $offset;
        // VkDeviceSize => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $offset = $cValue;
        $phpValue = $drawCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $drawCount = $cValue;
        $phpValue = $stride;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $stride = $cValue;
        $cValue = $this->vulkan->call("vkCmdDrawIndexedIndirect", $commandBuffer, $buffer, $offset, $drawCount, $stride);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $groupCountX
     * @param int $groupCountY
     * @param int $groupCountZ
     * @return void
     */
    public function vkCmdDispatch(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $groupCountX,
        int $groupCountY,
        int $groupCountZ,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $groupCountX;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $groupCountX = $cValue;
        $phpValue = $groupCountY;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $groupCountY = $cValue;
        $phpValue = $groupCountZ;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $groupCountZ = $cValue;
        $cValue = $this->vulkan->call("vkCmdDispatch", $commandBuffer, $groupCountX, $groupCountY, $groupCountZ);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkBuffer $buffer
     * @param int $offset
     * @return void
     */
    public function vkCmdDispatchIndirect(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkBuffer $buffer,
        int $offset,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $buffer;
        // VkBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $buffer = $cValue;
        $phpValue = $offset;
        // VkDeviceSize => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $offset = $cValue;
        $cValue = $this->vulkan->call("vkCmdDispatchIndirect", $commandBuffer, $buffer, $offset);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkBuffer $srcBuffer
     * @param \iggyvolz\vulkan\struct\VkBuffer $dstBuffer
     * @param int $regionCount
     * @param \iggyvolz\vulkan\struct\VkBufferCopy $pRegions
     * @return void
     */
    public function vkCmdCopyBuffer(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkBuffer $srcBuffer,
        \iggyvolz\vulkan\struct\VkBuffer $dstBuffer,
        int $regionCount,
        \iggyvolz\vulkan\struct\VkBufferCopy $pRegions,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $srcBuffer;
        // VkBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $srcBuffer = $cValue;
        $phpValue = $dstBuffer;
        // VkBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $dstBuffer = $cValue;
        $phpValue = $regionCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $regionCount = $cValue;
        $phpValue = $pRegions;
        // const VkBufferCopy* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pRegions = $cValue;
        $cValue = $this->vulkan->call("vkCmdCopyBuffer", $commandBuffer, $srcBuffer, $dstBuffer, $regionCount, $pRegions);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkImage $srcImage
     * @param \iggyvolz\vulkan\enum\VkImageLayout $srcImageLayout
     * @param \iggyvolz\vulkan\struct\VkImage $dstImage
     * @param \iggyvolz\vulkan\enum\VkImageLayout $dstImageLayout
     * @param int $regionCount
     * @param \iggyvolz\vulkan\struct\VkImageCopy $pRegions
     * @return void
     */
    public function vkCmdCopyImage(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkImage $srcImage,
        \iggyvolz\vulkan\enum\VkImageLayout $srcImageLayout,
        \iggyvolz\vulkan\struct\VkImage $dstImage,
        \iggyvolz\vulkan\enum\VkImageLayout $dstImageLayout,
        int $regionCount,
        \iggyvolz\vulkan\struct\VkImageCopy $pRegions,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $srcImage;
        // VkImage => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $srcImage = $cValue;
        $phpValue = $srcImageLayout;
        // VkImageLayout => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $srcImageLayout = $cValue;
        $phpValue = $dstImage;
        // VkImage => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $dstImage = $cValue;
        $phpValue = $dstImageLayout;
        // VkImageLayout => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $dstImageLayout = $cValue;
        $phpValue = $regionCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $regionCount = $cValue;
        $phpValue = $pRegions;
        // const VkImageCopy* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pRegions = $cValue;
        $cValue = $this->vulkan->call("vkCmdCopyImage", $commandBuffer, $srcImage, $srcImageLayout, $dstImage, $dstImageLayout, $regionCount, $pRegions);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkImage $srcImage
     * @param \iggyvolz\vulkan\enum\VkImageLayout $srcImageLayout
     * @param \iggyvolz\vulkan\struct\VkImage $dstImage
     * @param \iggyvolz\vulkan\enum\VkImageLayout $dstImageLayout
     * @param int $regionCount
     * @param \iggyvolz\vulkan\struct\VkImageBlit $pRegions
     * @param \iggyvolz\vulkan\enum\VkFilter $filter
     * @return void
     */
    public function vkCmdBlitImage(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkImage $srcImage,
        \iggyvolz\vulkan\enum\VkImageLayout $srcImageLayout,
        \iggyvolz\vulkan\struct\VkImage $dstImage,
        \iggyvolz\vulkan\enum\VkImageLayout $dstImageLayout,
        int $regionCount,
        \iggyvolz\vulkan\struct\VkImageBlit $pRegions,
        \iggyvolz\vulkan\enum\VkFilter $filter,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $srcImage;
        // VkImage => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $srcImage = $cValue;
        $phpValue = $srcImageLayout;
        // VkImageLayout => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $srcImageLayout = $cValue;
        $phpValue = $dstImage;
        // VkImage => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $dstImage = $cValue;
        $phpValue = $dstImageLayout;
        // VkImageLayout => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $dstImageLayout = $cValue;
        $phpValue = $regionCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $regionCount = $cValue;
        $phpValue = $pRegions;
        // const VkImageBlit* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pRegions = $cValue;
        $phpValue = $filter;
        // VkFilter => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $filter = $cValue;
        $cValue = $this->vulkan->call("vkCmdBlitImage", $commandBuffer, $srcImage, $srcImageLayout, $dstImage, $dstImageLayout, $regionCount, $pRegions, $filter);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkBuffer $srcBuffer
     * @param \iggyvolz\vulkan\struct\VkImage $dstImage
     * @param \iggyvolz\vulkan\enum\VkImageLayout $dstImageLayout
     * @param int $regionCount
     * @param \iggyvolz\vulkan\struct\VkBufferImageCopy $pRegions
     * @return void
     */
    public function vkCmdCopyBufferToImage(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkBuffer $srcBuffer,
        \iggyvolz\vulkan\struct\VkImage $dstImage,
        \iggyvolz\vulkan\enum\VkImageLayout $dstImageLayout,
        int $regionCount,
        \iggyvolz\vulkan\struct\VkBufferImageCopy $pRegions,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $srcBuffer;
        // VkBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $srcBuffer = $cValue;
        $phpValue = $dstImage;
        // VkImage => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $dstImage = $cValue;
        $phpValue = $dstImageLayout;
        // VkImageLayout => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $dstImageLayout = $cValue;
        $phpValue = $regionCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $regionCount = $cValue;
        $phpValue = $pRegions;
        // const VkBufferImageCopy* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pRegions = $cValue;
        $cValue = $this->vulkan->call("vkCmdCopyBufferToImage", $commandBuffer, $srcBuffer, $dstImage, $dstImageLayout, $regionCount, $pRegions);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkImage $srcImage
     * @param \iggyvolz\vulkan\enum\VkImageLayout $srcImageLayout
     * @param \iggyvolz\vulkan\struct\VkBuffer $dstBuffer
     * @param int $regionCount
     * @param \iggyvolz\vulkan\struct\VkBufferImageCopy $pRegions
     * @return void
     */
    public function vkCmdCopyImageToBuffer(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkImage $srcImage,
        \iggyvolz\vulkan\enum\VkImageLayout $srcImageLayout,
        \iggyvolz\vulkan\struct\VkBuffer $dstBuffer,
        int $regionCount,
        \iggyvolz\vulkan\struct\VkBufferImageCopy $pRegions,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $srcImage;
        // VkImage => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $srcImage = $cValue;
        $phpValue = $srcImageLayout;
        // VkImageLayout => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $srcImageLayout = $cValue;
        $phpValue = $dstBuffer;
        // VkBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $dstBuffer = $cValue;
        $phpValue = $regionCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $regionCount = $cValue;
        $phpValue = $pRegions;
        // const VkBufferImageCopy* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pRegions = $cValue;
        $cValue = $this->vulkan->call("vkCmdCopyImageToBuffer", $commandBuffer, $srcImage, $srcImageLayout, $dstBuffer, $regionCount, $pRegions);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkBuffer $dstBuffer
     * @param int $dstOffset
     * @param int $dataSize
     * @param \iggyvolz\vulkan\util\Pointer $pData
     * @return void
     */
    public function vkCmdUpdateBuffer(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkBuffer $dstBuffer,
        int $dstOffset,
        int $dataSize,
        \iggyvolz\vulkan\util\Pointer $pData,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $dstBuffer;
        // VkBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $dstBuffer = $cValue;
        $phpValue = $dstOffset;
        // VkDeviceSize => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $dstOffset = $cValue;
        $phpValue = $dataSize;
        // VkDeviceSize => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $dataSize = $cValue;
        $phpValue = $pData;
        // const void* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pData = $cValue;
        $cValue = $this->vulkan->call("vkCmdUpdateBuffer", $commandBuffer, $dstBuffer, $dstOffset, $dataSize, $pData);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkBuffer $dstBuffer
     * @param int $dstOffset
     * @param int $size
     * @param int $data
     * @return void
     */
    public function vkCmdFillBuffer(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkBuffer $dstBuffer,
        int $dstOffset,
        int $size,
        int $data,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $dstBuffer;
        // VkBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $dstBuffer = $cValue;
        $phpValue = $dstOffset;
        // VkDeviceSize => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $dstOffset = $cValue;
        $phpValue = $size;
        // VkDeviceSize => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $size = $cValue;
        $phpValue = $data;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $data = $cValue;
        $cValue = $this->vulkan->call("vkCmdFillBuffer", $commandBuffer, $dstBuffer, $dstOffset, $size, $data);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkImage $image
     * @param \iggyvolz\vulkan\enum\VkImageLayout $imageLayout
     * @param \iggyvolz\vulkan\util\Pointer $pColor
     * @param int $rangeCount
     * @param \iggyvolz\vulkan\struct\VkImageSubresourceRange $pRanges
     * @return void
     */
    public function vkCmdClearColorImage(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkImage $image,
        \iggyvolz\vulkan\enum\VkImageLayout $imageLayout,
        \iggyvolz\vulkan\util\Pointer $pColor,
        int $rangeCount,
        \iggyvolz\vulkan\struct\VkImageSubresourceRange $pRanges,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $image;
        // VkImage => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $image = $cValue;
        $phpValue = $imageLayout;
        // VkImageLayout => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $imageLayout = $cValue;
        $phpValue = $pColor;
        // const VkClearColorValue* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pColor = $cValue;
        $phpValue = $rangeCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $rangeCount = $cValue;
        $phpValue = $pRanges;
        // const VkImageSubresourceRange* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pRanges = $cValue;
        $cValue = $this->vulkan->call("vkCmdClearColorImage", $commandBuffer, $image, $imageLayout, $pColor, $rangeCount, $pRanges);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkImage $image
     * @param \iggyvolz\vulkan\enum\VkImageLayout $imageLayout
     * @param \iggyvolz\vulkan\struct\VkClearDepthStencilValue $pDepthStencil
     * @param int $rangeCount
     * @param \iggyvolz\vulkan\struct\VkImageSubresourceRange $pRanges
     * @return void
     */
    public function vkCmdClearDepthStencilImage(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkImage $image,
        \iggyvolz\vulkan\enum\VkImageLayout $imageLayout,
        \iggyvolz\vulkan\struct\VkClearDepthStencilValue $pDepthStencil,
        int $rangeCount,
        \iggyvolz\vulkan\struct\VkImageSubresourceRange $pRanges,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $image;
        // VkImage => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $image = $cValue;
        $phpValue = $imageLayout;
        // VkImageLayout => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $imageLayout = $cValue;
        $phpValue = $pDepthStencil;
        // const VkClearDepthStencilValue* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pDepthStencil = $cValue;
        $phpValue = $rangeCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $rangeCount = $cValue;
        $phpValue = $pRanges;
        // const VkImageSubresourceRange* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pRanges = $cValue;
        $cValue = $this->vulkan->call("vkCmdClearDepthStencilImage", $commandBuffer, $image, $imageLayout, $pDepthStencil, $rangeCount, $pRanges);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $attachmentCount
     * @param \iggyvolz\vulkan\struct\VkClearAttachment $pAttachments
     * @param int $rectCount
     * @param \iggyvolz\vulkan\struct\VkClearRect $pRects
     * @return void
     */
    public function vkCmdClearAttachments(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $attachmentCount,
        \iggyvolz\vulkan\struct\VkClearAttachment $pAttachments,
        int $rectCount,
        \iggyvolz\vulkan\struct\VkClearRect $pRects,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $attachmentCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $attachmentCount = $cValue;
        $phpValue = $pAttachments;
        // const VkClearAttachment* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAttachments = $cValue;
        $phpValue = $rectCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $rectCount = $cValue;
        $phpValue = $pRects;
        // const VkClearRect* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pRects = $cValue;
        $cValue = $this->vulkan->call("vkCmdClearAttachments", $commandBuffer, $attachmentCount, $pAttachments, $rectCount, $pRects);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkImage $srcImage
     * @param \iggyvolz\vulkan\enum\VkImageLayout $srcImageLayout
     * @param \iggyvolz\vulkan\struct\VkImage $dstImage
     * @param \iggyvolz\vulkan\enum\VkImageLayout $dstImageLayout
     * @param int $regionCount
     * @param \iggyvolz\vulkan\struct\VkImageResolve $pRegions
     * @return void
     */
    public function vkCmdResolveImage(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkImage $srcImage,
        \iggyvolz\vulkan\enum\VkImageLayout $srcImageLayout,
        \iggyvolz\vulkan\struct\VkImage $dstImage,
        \iggyvolz\vulkan\enum\VkImageLayout $dstImageLayout,
        int $regionCount,
        \iggyvolz\vulkan\struct\VkImageResolve $pRegions,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $srcImage;
        // VkImage => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $srcImage = $cValue;
        $phpValue = $srcImageLayout;
        // VkImageLayout => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $srcImageLayout = $cValue;
        $phpValue = $dstImage;
        // VkImage => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $dstImage = $cValue;
        $phpValue = $dstImageLayout;
        // VkImageLayout => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $dstImageLayout = $cValue;
        $phpValue = $regionCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $regionCount = $cValue;
        $phpValue = $pRegions;
        // const VkImageResolve* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pRegions = $cValue;
        $cValue = $this->vulkan->call("vkCmdResolveImage", $commandBuffer, $srcImage, $srcImageLayout, $dstImage, $dstImageLayout, $regionCount, $pRegions);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkEvent $event
     * @param list<\iggyvolz\vulkan\enum\VkPipelineStageFlagBits> $stageMask
     * @return void
     */
    public function vkCmdSetEvent(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkEvent $event,
        array $stageMask,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $event;
        // VkEvent => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $event = $cValue;
        $phpValue = $stageMask;
        // VkPipelineStageFlags => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits::toInt(...$phpValue);
        $stageMask = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetEvent", $commandBuffer, $event, $stageMask);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkEvent $event
     * @param list<\iggyvolz\vulkan\enum\VkPipelineStageFlagBits> $stageMask
     * @return void
     */
    public function vkCmdResetEvent(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkEvent $event,
        array $stageMask,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $event;
        // VkEvent => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $event = $cValue;
        $phpValue = $stageMask;
        // VkPipelineStageFlags => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits::toInt(...$phpValue);
        $stageMask = $cValue;
        $cValue = $this->vulkan->call("vkCmdResetEvent", $commandBuffer, $event, $stageMask);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $eventCount
     * @param \iggyvolz\vulkan\struct\VkEvent $pEvents
     * @param list<\iggyvolz\vulkan\enum\VkPipelineStageFlagBits> $srcStageMask
     * @param list<\iggyvolz\vulkan\enum\VkPipelineStageFlagBits> $dstStageMask
     * @param int $memoryBarrierCount
     * @param \iggyvolz\vulkan\struct\VkMemoryBarrier $pMemoryBarriers
     * @param int $bufferMemoryBarrierCount
     * @param \iggyvolz\vulkan\struct\VkBufferMemoryBarrier $pBufferMemoryBarriers
     * @param int $imageMemoryBarrierCount
     * @param \iggyvolz\vulkan\struct\VkImageMemoryBarrier $pImageMemoryBarriers
     * @return void
     */
    public function vkCmdWaitEvents(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $eventCount,
        \iggyvolz\vulkan\struct\VkEvent $pEvents,
        array $srcStageMask,
        array $dstStageMask,
        int $memoryBarrierCount,
        \iggyvolz\vulkan\struct\VkMemoryBarrier $pMemoryBarriers,
        int $bufferMemoryBarrierCount,
        \iggyvolz\vulkan\struct\VkBufferMemoryBarrier $pBufferMemoryBarriers,
        int $imageMemoryBarrierCount,
        \iggyvolz\vulkan\struct\VkImageMemoryBarrier $pImageMemoryBarriers,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $eventCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $eventCount = $cValue;
        $phpValue = $pEvents;
        // const VkEvent* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pEvents = $cValue;
        $phpValue = $srcStageMask;
        // VkPipelineStageFlags => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits::toInt(...$phpValue);
        $srcStageMask = $cValue;
        $phpValue = $dstStageMask;
        // VkPipelineStageFlags => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits::toInt(...$phpValue);
        $dstStageMask = $cValue;
        $phpValue = $memoryBarrierCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $memoryBarrierCount = $cValue;
        $phpValue = $pMemoryBarriers;
        // const VkMemoryBarrier* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pMemoryBarriers = $cValue;
        $phpValue = $bufferMemoryBarrierCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $bufferMemoryBarrierCount = $cValue;
        $phpValue = $pBufferMemoryBarriers;
        // const VkBufferMemoryBarrier* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pBufferMemoryBarriers = $cValue;
        $phpValue = $imageMemoryBarrierCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $imageMemoryBarrierCount = $cValue;
        $phpValue = $pImageMemoryBarriers;
        // const VkImageMemoryBarrier* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pImageMemoryBarriers = $cValue;
        $cValue = $this->vulkan->call("vkCmdWaitEvents", $commandBuffer, $eventCount, $pEvents, $srcStageMask, $dstStageMask, $memoryBarrierCount, $pMemoryBarriers, $bufferMemoryBarrierCount, $pBufferMemoryBarriers, $imageMemoryBarrierCount, $pImageMemoryBarriers);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param list<\iggyvolz\vulkan\enum\VkPipelineStageFlagBits> $srcStageMask
     * @param list<\iggyvolz\vulkan\enum\VkPipelineStageFlagBits> $dstStageMask
     * @param list<\iggyvolz\vulkan\enum\VkDependencyFlagBits> $dependencyFlags
     * @param int $memoryBarrierCount
     * @param \iggyvolz\vulkan\struct\VkMemoryBarrier $pMemoryBarriers
     * @param int $bufferMemoryBarrierCount
     * @param \iggyvolz\vulkan\struct\VkBufferMemoryBarrier $pBufferMemoryBarriers
     * @param int $imageMemoryBarrierCount
     * @param \iggyvolz\vulkan\struct\VkImageMemoryBarrier $pImageMemoryBarriers
     * @return void
     */
    public function vkCmdPipelineBarrier(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        array $srcStageMask,
        array $dstStageMask,
        array $dependencyFlags,
        int $memoryBarrierCount,
        \iggyvolz\vulkan\struct\VkMemoryBarrier $pMemoryBarriers,
        int $bufferMemoryBarrierCount,
        \iggyvolz\vulkan\struct\VkBufferMemoryBarrier $pBufferMemoryBarriers,
        int $imageMemoryBarrierCount,
        \iggyvolz\vulkan\struct\VkImageMemoryBarrier $pImageMemoryBarriers,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $srcStageMask;
        // VkPipelineStageFlags => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits::toInt(...$phpValue);
        $srcStageMask = $cValue;
        $phpValue = $dstStageMask;
        // VkPipelineStageFlags => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits::toInt(...$phpValue);
        $dstStageMask = $cValue;
        $phpValue = $dependencyFlags;
        // VkDependencyFlags => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkDependencyFlagBits::toInt(...$phpValue);
        $dependencyFlags = $cValue;
        $phpValue = $memoryBarrierCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $memoryBarrierCount = $cValue;
        $phpValue = $pMemoryBarriers;
        // const VkMemoryBarrier* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pMemoryBarriers = $cValue;
        $phpValue = $bufferMemoryBarrierCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $bufferMemoryBarrierCount = $cValue;
        $phpValue = $pBufferMemoryBarriers;
        // const VkBufferMemoryBarrier* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pBufferMemoryBarriers = $cValue;
        $phpValue = $imageMemoryBarrierCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $imageMemoryBarrierCount = $cValue;
        $phpValue = $pImageMemoryBarriers;
        // const VkImageMemoryBarrier* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pImageMemoryBarriers = $cValue;
        $cValue = $this->vulkan->call("vkCmdPipelineBarrier", $commandBuffer, $srcStageMask, $dstStageMask, $dependencyFlags, $memoryBarrierCount, $pMemoryBarriers, $bufferMemoryBarrierCount, $pBufferMemoryBarriers, $imageMemoryBarrierCount, $pImageMemoryBarriers);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkQueryPool $queryPool
     * @param int $query
     * @param list<\iggyvolz\vulkan\enum\VkQueryControlFlagBits> $flags
     * @return void
     */
    public function vkCmdBeginQuery(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkQueryPool $queryPool,
        int $query,
        array $flags,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $queryPool;
        // VkQueryPool => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $queryPool = $cValue;
        $phpValue = $query;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $query = $cValue;
        $phpValue = $flags;
        // VkQueryControlFlags => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkQueryControlFlagBits::toInt(...$phpValue);
        $flags = $cValue;
        $cValue = $this->vulkan->call("vkCmdBeginQuery", $commandBuffer, $queryPool, $query, $flags);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkQueryPool $queryPool
     * @param int $query
     * @return void
     */
    public function vkCmdEndQuery(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkQueryPool $queryPool,
        int $query,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $queryPool;
        // VkQueryPool => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $queryPool = $cValue;
        $phpValue = $query;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $query = $cValue;
        $cValue = $this->vulkan->call("vkCmdEndQuery", $commandBuffer, $queryPool, $query);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkQueryPool $queryPool
     * @param int $firstQuery
     * @param int $queryCount
     * @return void
     */
    public function vkCmdResetQueryPool(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkQueryPool $queryPool,
        int $firstQuery,
        int $queryCount,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $queryPool;
        // VkQueryPool => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $queryPool = $cValue;
        $phpValue = $firstQuery;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $firstQuery = $cValue;
        $phpValue = $queryCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $queryCount = $cValue;
        $cValue = $this->vulkan->call("vkCmdResetQueryPool", $commandBuffer, $queryPool, $firstQuery, $queryCount);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\enum\VkPipelineStageFlagBits $pipelineStage
     * @param \iggyvolz\vulkan\struct\VkQueryPool $queryPool
     * @param int $query
     * @return void
     */
    public function vkCmdWriteTimestamp(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\enum\VkPipelineStageFlagBits $pipelineStage,
        \iggyvolz\vulkan\struct\VkQueryPool $queryPool,
        int $query,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pipelineStage;
        // VkPipelineStageFlagBits => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $pipelineStage = $cValue;
        $phpValue = $queryPool;
        // VkQueryPool => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $queryPool = $cValue;
        $phpValue = $query;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $query = $cValue;
        $cValue = $this->vulkan->call("vkCmdWriteTimestamp", $commandBuffer, $pipelineStage, $queryPool, $query);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkQueryPool $queryPool
     * @param int $firstQuery
     * @param int $queryCount
     * @param \iggyvolz\vulkan\struct\VkBuffer $dstBuffer
     * @param int $dstOffset
     * @param int $stride
     * @param list<\iggyvolz\vulkan\enum\VkQueryResultFlagBits> $flags
     * @return void
     */
    public function vkCmdCopyQueryPoolResults(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkQueryPool $queryPool,
        int $firstQuery,
        int $queryCount,
        \iggyvolz\vulkan\struct\VkBuffer $dstBuffer,
        int $dstOffset,
        int $stride,
        array $flags,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $queryPool;
        // VkQueryPool => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $queryPool = $cValue;
        $phpValue = $firstQuery;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $firstQuery = $cValue;
        $phpValue = $queryCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $queryCount = $cValue;
        $phpValue = $dstBuffer;
        // VkBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $dstBuffer = $cValue;
        $phpValue = $dstOffset;
        // VkDeviceSize => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $dstOffset = $cValue;
        $phpValue = $stride;
        // VkDeviceSize => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $stride = $cValue;
        $phpValue = $flags;
        // VkQueryResultFlags => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkQueryResultFlagBits::toInt(...$phpValue);
        $flags = $cValue;
        $cValue = $this->vulkan->call("vkCmdCopyQueryPoolResults", $commandBuffer, $queryPool, $firstQuery, $queryCount, $dstBuffer, $dstOffset, $stride, $flags);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkPipelineLayout $layout
     * @param list<\iggyvolz\vulkan\enum\VkShaderStageFlagBits> $stageFlags
     * @param int $offset
     * @param int $size
     * @param \iggyvolz\vulkan\util\Pointer $pValues
     * @return void
     */
    public function vkCmdPushConstants(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkPipelineLayout $layout,
        array $stageFlags,
        int $offset,
        int $size,
        \iggyvolz\vulkan\util\Pointer $pValues,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $layout;
        // VkPipelineLayout => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $layout = $cValue;
        $phpValue = $stageFlags;
        // VkShaderStageFlags => iggyvolz\vulkan\generator\Transformer\FlagsTransformer
        $cValue = \iggyvolz\vulkan\enum\VkShaderStageFlagBits::toInt(...$phpValue);
        $stageFlags = $cValue;
        $phpValue = $offset;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $offset = $cValue;
        $phpValue = $size;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $size = $cValue;
        $phpValue = $pValues;
        // const void* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pValues = $cValue;
        $cValue = $this->vulkan->call("vkCmdPushConstants", $commandBuffer, $layout, $stageFlags, $offset, $size, $pValues);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkRenderPassBeginInfo $pRenderPassBegin
     * @param \iggyvolz\vulkan\enum\VkSubpassContents $contents
     * @return void
     */
    public function vkCmdBeginRenderPass(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkRenderPassBeginInfo $pRenderPassBegin,
        \iggyvolz\vulkan\enum\VkSubpassContents $contents,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pRenderPassBegin;
        // const VkRenderPassBeginInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pRenderPassBegin = $cValue;
        $phpValue = $contents;
        // VkSubpassContents => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $contents = $cValue;
        $cValue = $this->vulkan->call("vkCmdBeginRenderPass", $commandBuffer, $pRenderPassBegin, $contents);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\enum\VkSubpassContents $contents
     * @return void
     */
    public function vkCmdNextSubpass(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\enum\VkSubpassContents $contents,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $contents;
        // VkSubpassContents => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $contents = $cValue;
        $cValue = $this->vulkan->call("vkCmdNextSubpass", $commandBuffer, $contents);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @return void
     */
    public function vkCmdEndRenderPass(\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer): void
    {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $cValue = $this->vulkan->call("vkCmdEndRenderPass", $commandBuffer);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $commandBufferCount
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $pCommandBuffers
     * @return void
     */
    public function vkCmdExecuteCommands(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $commandBufferCount,
        \iggyvolz\vulkan\struct\VkCommandBuffer $pCommandBuffers,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $commandBufferCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $commandBufferCount = $cValue;
        $phpValue = $pCommandBuffers;
        // const VkCommandBuffer* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCommandBuffers = $cValue;
        $cValue = $this->vulkan->call("vkCmdExecuteCommands", $commandBuffer, $commandBufferCount, $pCommandBuffers);
    }
}
