<?php

namespace iggyvolz\vulkan\ext;

class VkKhrObjectRefresh
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkRefreshObjectListKHR $pRefreshObjects
     * @return void
     */
    public function vkCmdRefreshObjectsKHR(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkRefreshObjectListKHR $pRefreshObjects,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pRefreshObjects;
        // const VkRefreshObjectListKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pRefreshObjects = $cValue;
        $cValue = $this->vulkan->call("vkCmdRefreshObjectsKHR", $commandBuffer, $pRefreshObjects);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\util\IntPointer $pRefreshableObjectTypeCount
     * @param \iggyvolz\vulkan\util\Pointer $pRefreshableObjectTypes
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetPhysicalDeviceRefreshableObjectTypesKHR(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\util\IntPointer $pRefreshableObjectTypeCount,
        \iggyvolz\vulkan\util\Pointer $pRefreshableObjectTypes,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $pRefreshableObjectTypeCount;
        // uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pRefreshableObjectTypeCount = $cValue;
        $phpValue = $pRefreshableObjectTypes;
        // VkObjectType* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pRefreshableObjectTypes = $cValue;
        $cValue = $this->vulkan->call("vkGetPhysicalDeviceRefreshableObjectTypesKHR", $physicalDevice, $pRefreshableObjectTypeCount, $pRefreshableObjectTypes);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }
}
