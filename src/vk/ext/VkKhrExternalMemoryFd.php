<?php

namespace iggyvolz\vulkan\ext;

class VkKhrExternalMemoryFd
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkMemoryGetFdInfoKHR $pGetFdInfo
     * @param \iggyvolz\vulkan\util\IntPointer $pFd
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetMemoryFdKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkMemoryGetFdInfoKHR $pGetFdInfo,
        \iggyvolz\vulkan\util\IntPointer $pFd,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pGetFdInfo;
        // const VkMemoryGetFdInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pGetFdInfo = $cValue;
        $phpValue = $pFd;
        // int* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pFd = $cValue;
        $cValue = $this->vulkan->call("vkGetMemoryFdKHR", $device, $pGetFdInfo, $pFd);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits $handleType
     * @param int $fd
     */
    public function vkGetMemoryFdPropertiesKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits $handleType,
        int $fd,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $handleType;
        // VkExternalMemoryHandleTypeFlagBits => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $handleType = $cValue;
        $phpValue = $fd;
        // int => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $fd = $cValue;
    }
}
