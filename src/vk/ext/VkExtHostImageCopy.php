<?php

namespace iggyvolz\vulkan\ext;

class VkExtHostImageCopy
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkCopyMemoryToImageInfoEXT $pCopyMemoryToImageInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkCopyMemoryToImageEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkCopyMemoryToImageInfoEXT $pCopyMemoryToImageInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCopyMemoryToImageInfo;
        // const VkCopyMemoryToImageInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCopyMemoryToImageInfo = $cValue;
        $cValue = $this->vulkan->call("vkCopyMemoryToImageEXT", $device, $pCopyMemoryToImageInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkCopyImageToMemoryInfoEXT $pCopyImageToMemoryInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkCopyImageToMemoryEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkCopyImageToMemoryInfoEXT $pCopyImageToMemoryInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCopyImageToMemoryInfo;
        // const VkCopyImageToMemoryInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCopyImageToMemoryInfo = $cValue;
        $cValue = $this->vulkan->call("vkCopyImageToMemoryEXT", $device, $pCopyImageToMemoryInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkCopyImageToImageInfoEXT $pCopyImageToImageInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkCopyImageToImageEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkCopyImageToImageInfoEXT $pCopyImageToImageInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCopyImageToImageInfo;
        // const VkCopyImageToImageInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCopyImageToImageInfo = $cValue;
        $cValue = $this->vulkan->call("vkCopyImageToImageEXT", $device, $pCopyImageToImageInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param int $transitionCount
     * @param \iggyvolz\vulkan\struct\VkHostImageLayoutTransitionInfoEXT $pTransitions
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkTransitionImageLayoutEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        int $transitionCount,
        \iggyvolz\vulkan\struct\VkHostImageLayoutTransitionInfoEXT $pTransitions,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $transitionCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $transitionCount = $cValue;
        $phpValue = $pTransitions;
        // const VkHostImageLayoutTransitionInfoEXT* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pTransitions = $cValue;
        $cValue = $this->vulkan->call("vkTransitionImageLayoutEXT", $device, $transitionCount, $pTransitions);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }
}
