<?php

namespace iggyvolz\vulkan\ext;

class VkKhrPipelineExecutableProperties
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkPipelineInfoKHR $pPipelineInfo
     * @param \iggyvolz\vulkan\util\IntPointer $pExecutableCount
     */
    public function vkGetPipelineExecutablePropertiesKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkPipelineInfoKHR $pPipelineInfo,
        \iggyvolz\vulkan\util\IntPointer $pExecutableCount,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pPipelineInfo;
        // const VkPipelineInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pPipelineInfo = $cValue;
        $phpValue = $pExecutableCount;
        // uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pExecutableCount = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkPipelineExecutableInfoKHR $pExecutableInfo
     * @param \iggyvolz\vulkan\util\IntPointer $pStatisticCount
     */
    public function vkGetPipelineExecutableStatisticsKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkPipelineExecutableInfoKHR $pExecutableInfo,
        \iggyvolz\vulkan\util\IntPointer $pStatisticCount,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pExecutableInfo;
        // const VkPipelineExecutableInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pExecutableInfo = $cValue;
        $phpValue = $pStatisticCount;
        // uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pStatisticCount = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkPipelineExecutableInfoKHR $pExecutableInfo
     * @param \iggyvolz\vulkan\util\IntPointer $pInternalRepresentationCount
     */
    public function vkGetPipelineExecutableInternalRepresentationsKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkPipelineExecutableInfoKHR $pExecutableInfo,
        \iggyvolz\vulkan\util\IntPointer $pInternalRepresentationCount,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pExecutableInfo;
        // const VkPipelineExecutableInfoKHR* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pExecutableInfo = $cValue;
        $phpValue = $pInternalRepresentationCount;
        // uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pInternalRepresentationCount = $cValue;
    }
}
