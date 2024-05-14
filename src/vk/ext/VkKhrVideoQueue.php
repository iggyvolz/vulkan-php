<?php

namespace iggyvolz\vulkan\ext;

class VkKhrVideoQueue
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\util\Pointer $pVideoProfile
     */
    public function vkGetPhysicalDeviceVideoCapabilitiesKHR(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\util\Pointer $pVideoProfile,
    ) {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $pVideoProfile;
        // const VkVideoProfileInfoKHR* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pVideoProfile = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\struct\VkPhysicalDeviceVideoFormatInfoKHR $pVideoFormatInfo
     * @param \iggyvolz\vulkan\util\IntPointer $pVideoFormatPropertyCount
     */
    public function vkGetPhysicalDeviceVideoFormatPropertiesKHR(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\struct\VkPhysicalDeviceVideoFormatInfoKHR $pVideoFormatInfo,
        \iggyvolz\vulkan\util\IntPointer $pVideoFormatPropertyCount,
    ) {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $pVideoFormatInfo;
        // const VkPhysicalDeviceVideoFormatInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pVideoFormatInfo = $cValue;
        $phpValue = $pVideoFormatPropertyCount;
        // uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pVideoFormatPropertyCount = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkVideoSessionCreateInfoKHR $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateVideoSessionKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkVideoSessionCreateInfoKHR $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCreateInfo;
        // const VkVideoSessionCreateInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkVideoSessionKHR $videoSession
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroyVideoSessionKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkVideoSessionKHR $videoSession,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $videoSession;
        // VkVideoSessionKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $videoSession = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroyVideoSessionKHR", $device, $videoSession, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkVideoSessionParametersCreateInfoKHR $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateVideoSessionParametersKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkVideoSessionParametersCreateInfoKHR $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCreateInfo;
        // const VkVideoSessionParametersCreateInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkVideoSessionParametersKHR $videoSessionParameters
     * @param \iggyvolz\vulkan\struct\VkVideoSessionParametersUpdateInfoKHR $pUpdateInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkUpdateVideoSessionParametersKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkVideoSessionParametersKHR $videoSessionParameters,
        \iggyvolz\vulkan\struct\VkVideoSessionParametersUpdateInfoKHR $pUpdateInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $videoSessionParameters;
        // VkVideoSessionParametersKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $videoSessionParameters = $cValue;
        $phpValue = $pUpdateInfo;
        // const VkVideoSessionParametersUpdateInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pUpdateInfo = $cValue;
        $cValue = $this->vulkan->call("vkUpdateVideoSessionParametersKHR", $device, $videoSessionParameters, $pUpdateInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkVideoSessionParametersKHR $videoSessionParameters
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroyVideoSessionParametersKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkVideoSessionParametersKHR $videoSessionParameters,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $videoSessionParameters;
        // VkVideoSessionParametersKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $videoSessionParameters = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroyVideoSessionParametersKHR", $device, $videoSessionParameters, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkVideoSessionKHR $videoSession
     * @param \iggyvolz\vulkan\util\IntPointer $pMemoryRequirementsCount
     */
    public function vkGetVideoSessionMemoryRequirementsKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkVideoSessionKHR $videoSession,
        \iggyvolz\vulkan\util\IntPointer $pMemoryRequirementsCount,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $videoSession;
        // VkVideoSessionKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $videoSession = $cValue;
        $phpValue = $pMemoryRequirementsCount;
        // uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pMemoryRequirementsCount = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkVideoSessionKHR $videoSession
     * @param int $bindSessionMemoryInfoCount
     * @param \iggyvolz\vulkan\struct\VkBindVideoSessionMemoryInfoKHR $pBindSessionMemoryInfos
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkBindVideoSessionMemoryKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkVideoSessionKHR $videoSession,
        int $bindSessionMemoryInfoCount,
        \iggyvolz\vulkan\struct\VkBindVideoSessionMemoryInfoKHR $pBindSessionMemoryInfos,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $videoSession;
        // VkVideoSessionKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $videoSession = $cValue;
        $phpValue = $bindSessionMemoryInfoCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $bindSessionMemoryInfoCount = $cValue;
        $phpValue = $pBindSessionMemoryInfos;
        // const VkBindVideoSessionMemoryInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pBindSessionMemoryInfos = $cValue;
        $cValue = $this->vulkan->call("vkBindVideoSessionMemoryKHR", $device, $videoSession, $bindSessionMemoryInfoCount, $pBindSessionMemoryInfos);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkVideoBeginCodingInfoKHR $pBeginInfo
     * @return void
     */
    public function vkCmdBeginVideoCodingKHR(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkVideoBeginCodingInfoKHR $pBeginInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pBeginInfo;
        // const VkVideoBeginCodingInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pBeginInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdBeginVideoCodingKHR", $commandBuffer, $pBeginInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkVideoCodingControlInfoKHR $pCodingControlInfo
     * @return void
     */
    public function vkCmdControlVideoCodingKHR(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkVideoCodingControlInfoKHR $pCodingControlInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pCodingControlInfo;
        // const VkVideoCodingControlInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCodingControlInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdControlVideoCodingKHR", $commandBuffer, $pCodingControlInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkVideoEndCodingInfoKHR $pEndCodingInfo
     * @return void
     */
    public function vkCmdEndVideoCodingKHR(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkVideoEndCodingInfoKHR $pEndCodingInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pEndCodingInfo;
        // const VkVideoEndCodingInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pEndCodingInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdEndVideoCodingKHR", $commandBuffer, $pEndCodingInfo);
    }
}
