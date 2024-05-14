<?php

namespace iggyvolz\vulkan\ext;

class VkVersion11
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\util\IntPointer $pApiVersion
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkEnumerateInstanceVersion(
        \iggyvolz\vulkan\util\IntPointer $pApiVersion,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $pApiVersion;
        // uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pApiVersion = $cValue;
        $cValue = $this->vulkan->call("vkEnumerateInstanceVersion", $pApiVersion);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     */
    public function vkGetPhysicalDeviceFeatures2(\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice)
    {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     */
    public function vkGetPhysicalDeviceProperties2(\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice)
    {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\enum\VkFormat $format
     */
    public function vkGetPhysicalDeviceFormatProperties2(
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
     * @param \iggyvolz\vulkan\struct\VkPhysicalDeviceImageFormatInfo2 $pImageFormatInfo
     */
    public function vkGetPhysicalDeviceImageFormatProperties2(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\struct\VkPhysicalDeviceImageFormatInfo2 $pImageFormatInfo,
    ) {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $pImageFormatInfo;
        // const VkPhysicalDeviceImageFormatInfo2* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pImageFormatInfo = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\util\IntPointer $pQueueFamilyPropertyCount
     */
    public function vkGetPhysicalDeviceQueueFamilyProperties2(
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
    public function vkGetPhysicalDeviceMemoryProperties2(\iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice)
    {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\struct\VkPhysicalDeviceSparseImageFormatInfo2 $pFormatInfo
     * @param \iggyvolz\vulkan\util\IntPointer $pPropertyCount
     */
    public function vkGetPhysicalDeviceSparseImageFormatProperties2(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\struct\VkPhysicalDeviceSparseImageFormatInfo2 $pFormatInfo,
        \iggyvolz\vulkan\util\IntPointer $pPropertyCount,
    ) {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $pFormatInfo;
        // const VkPhysicalDeviceSparseImageFormatInfo2* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pFormatInfo = $cValue;
        $phpValue = $pPropertyCount;
        // uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pPropertyCount = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkCommandPool $commandPool
     * @param list<void> $flags
     * @return void
     */
    public function vkTrimCommandPool(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkCommandPool $commandPool,
        array $flags,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $commandPool;
        // VkCommandPool => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandPool = $cValue;
        $phpValue = $flags;
        // VkCommandPoolTrimFlags => iggyvolz\vulkan\generator\Transformer\LonelyFlagsTransformer
        $cValue = 0;
        $flags = $cValue;
        $cValue = $this->vulkan->call("vkTrimCommandPool", $device, $commandPool, $flags);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\struct\VkPhysicalDeviceExternalBufferInfo $pExternalBufferInfo
     */
    public function vkGetPhysicalDeviceExternalBufferProperties(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\struct\VkPhysicalDeviceExternalBufferInfo $pExternalBufferInfo,
    ) {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $pExternalBufferInfo;
        // const VkPhysicalDeviceExternalBufferInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pExternalBufferInfo = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\struct\VkPhysicalDeviceExternalSemaphoreInfo $pExternalSemaphoreInfo
     */
    public function vkGetPhysicalDeviceExternalSemaphoreProperties(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\struct\VkPhysicalDeviceExternalSemaphoreInfo $pExternalSemaphoreInfo,
    ) {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $pExternalSemaphoreInfo;
        // const VkPhysicalDeviceExternalSemaphoreInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pExternalSemaphoreInfo = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\struct\VkPhysicalDeviceExternalFenceInfo $pExternalFenceInfo
     */
    public function vkGetPhysicalDeviceExternalFenceProperties(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\struct\VkPhysicalDeviceExternalFenceInfo $pExternalFenceInfo,
    ) {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $pExternalFenceInfo;
        // const VkPhysicalDeviceExternalFenceInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pExternalFenceInfo = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkInstance $instance
     */
    public function vkEnumeratePhysicalDeviceGroups(\iggyvolz\vulkan\struct\VkInstance $instance)
    {
        $phpValue = $instance;
        // VkInstance => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $instance = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param int $heapIndex
     * @param int $localDeviceIndex
     * @param int $remoteDeviceIndex
     * @param \iggyvolz\vulkan\util\Pointer $pPeerMemoryFeatures
     * @return void
     */
    public function vkGetDeviceGroupPeerMemoryFeatures(
        \iggyvolz\vulkan\struct\VkDevice $device,
        int $heapIndex,
        int $localDeviceIndex,
        int $remoteDeviceIndex,
        \iggyvolz\vulkan\util\Pointer $pPeerMemoryFeatures,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $heapIndex;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $heapIndex = $cValue;
        $phpValue = $localDeviceIndex;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $localDeviceIndex = $cValue;
        $phpValue = $remoteDeviceIndex;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $remoteDeviceIndex = $cValue;
        $phpValue = $pPeerMemoryFeatures;
        // VkPeerMemoryFeatureFlags* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pPeerMemoryFeatures = $cValue;
        $cValue = $this->vulkan->call("vkGetDeviceGroupPeerMemoryFeatures", $device, $heapIndex, $localDeviceIndex, $remoteDeviceIndex, $pPeerMemoryFeatures);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param int $bindInfoCount
     * @param \iggyvolz\vulkan\struct\VkBindBufferMemoryInfo $pBindInfos
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkBindBufferMemory2(
        \iggyvolz\vulkan\struct\VkDevice $device,
        int $bindInfoCount,
        \iggyvolz\vulkan\struct\VkBindBufferMemoryInfo $pBindInfos,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $bindInfoCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $bindInfoCount = $cValue;
        $phpValue = $pBindInfos;
        // const VkBindBufferMemoryInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pBindInfos = $cValue;
        $cValue = $this->vulkan->call("vkBindBufferMemory2", $device, $bindInfoCount, $pBindInfos);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param int $bindInfoCount
     * @param \iggyvolz\vulkan\struct\VkBindImageMemoryInfo $pBindInfos
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkBindImageMemory2(
        \iggyvolz\vulkan\struct\VkDevice $device,
        int $bindInfoCount,
        \iggyvolz\vulkan\struct\VkBindImageMemoryInfo $pBindInfos,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $bindInfoCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $bindInfoCount = $cValue;
        $phpValue = $pBindInfos;
        // const VkBindImageMemoryInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pBindInfos = $cValue;
        $cValue = $this->vulkan->call("vkBindImageMemory2", $device, $bindInfoCount, $pBindInfos);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $deviceMask
     * @return void
     */
    public function vkCmdSetDeviceMask(\iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer, int $deviceMask): void
    {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $deviceMask;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $deviceMask = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetDeviceMask", $commandBuffer, $deviceMask);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $baseGroupX
     * @param int $baseGroupY
     * @param int $baseGroupZ
     * @param int $groupCountX
     * @param int $groupCountY
     * @param int $groupCountZ
     * @return void
     */
    public function vkCmdDispatchBase(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $baseGroupX,
        int $baseGroupY,
        int $baseGroupZ,
        int $groupCountX,
        int $groupCountY,
        int $groupCountZ,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $baseGroupX;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $baseGroupX = $cValue;
        $phpValue = $baseGroupY;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $baseGroupY = $cValue;
        $phpValue = $baseGroupZ;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $baseGroupZ = $cValue;
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
        $cValue = $this->vulkan->call("vkCmdDispatchBase", $commandBuffer, $baseGroupX, $baseGroupY, $baseGroupZ, $groupCountX, $groupCountY, $groupCountZ);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDescriptorUpdateTemplateCreateInfo $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateDescriptorUpdateTemplate(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDescriptorUpdateTemplateCreateInfo $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCreateInfo;
        // const VkDescriptorUpdateTemplateCreateInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDescriptorUpdateTemplate $descriptorUpdateTemplate
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroyDescriptorUpdateTemplate(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDescriptorUpdateTemplate $descriptorUpdateTemplate,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $descriptorUpdateTemplate;
        // VkDescriptorUpdateTemplate => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $descriptorUpdateTemplate = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroyDescriptorUpdateTemplate", $device, $descriptorUpdateTemplate, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDescriptorSet $descriptorSet
     * @param \iggyvolz\vulkan\struct\VkDescriptorUpdateTemplate $descriptorUpdateTemplate
     * @param \iggyvolz\vulkan\util\Pointer $pData
     * @return void
     */
    public function vkUpdateDescriptorSetWithTemplate(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDescriptorSet $descriptorSet,
        \iggyvolz\vulkan\struct\VkDescriptorUpdateTemplate $descriptorUpdateTemplate,
        \iggyvolz\vulkan\util\Pointer $pData,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $descriptorSet;
        // VkDescriptorSet => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $descriptorSet = $cValue;
        $phpValue = $descriptorUpdateTemplate;
        // VkDescriptorUpdateTemplate => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $descriptorUpdateTemplate = $cValue;
        $phpValue = $pData;
        // const void* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pData = $cValue;
        $cValue = $this->vulkan->call("vkUpdateDescriptorSetWithTemplate", $device, $descriptorSet, $descriptorUpdateTemplate, $pData);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkBufferMemoryRequirementsInfo2 $pInfo
     */
    public function vkGetBufferMemoryRequirements2(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkBufferMemoryRequirementsInfo2 $pInfo,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pInfo;
        // const VkBufferMemoryRequirementsInfo2* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkImageMemoryRequirementsInfo2 $pInfo
     */
    public function vkGetImageMemoryRequirements2(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkImageMemoryRequirementsInfo2 $pInfo,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pInfo;
        // const VkImageMemoryRequirementsInfo2* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkImageSparseMemoryRequirementsInfo2 $pInfo
     * @param \iggyvolz\vulkan\util\IntPointer $pSparseMemoryRequirementCount
     */
    public function vkGetImageSparseMemoryRequirements2(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkImageSparseMemoryRequirementsInfo2 $pInfo,
        \iggyvolz\vulkan\util\IntPointer $pSparseMemoryRequirementCount,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pInfo;
        // const VkImageSparseMemoryRequirementsInfo2* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
        $phpValue = $pSparseMemoryRequirementCount;
        // uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pSparseMemoryRequirementCount = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkSamplerYcbcrConversionCreateInfo $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateSamplerYcbcrConversion(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkSamplerYcbcrConversionCreateInfo $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCreateInfo;
        // const VkSamplerYcbcrConversionCreateInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkSamplerYcbcrConversion $ycbcrConversion
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroySamplerYcbcrConversion(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkSamplerYcbcrConversion $ycbcrConversion,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $ycbcrConversion;
        // VkSamplerYcbcrConversion => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $ycbcrConversion = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroySamplerYcbcrConversion", $device, $ycbcrConversion, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDeviceQueueInfo2 $pQueueInfo
     */
    public function vkGetDeviceQueue2(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDeviceQueueInfo2 $pQueueInfo,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pQueueInfo;
        // const VkDeviceQueueInfo2* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pQueueInfo = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDescriptorSetLayoutCreateInfo $pCreateInfo
     */
    public function vkGetDescriptorSetLayoutSupport(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDescriptorSetLayoutCreateInfo $pCreateInfo,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCreateInfo;
        // const VkDescriptorSetLayoutCreateInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
    }
}
