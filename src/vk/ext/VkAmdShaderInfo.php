<?php

namespace iggyvolz\vulkan\ext;

class VkAmdShaderInfo
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkPipeline $pipeline
     * @param \iggyvolz\vulkan\enum\VkShaderStageFlagBits $shaderStage
     * @param \iggyvolz\vulkan\enum\VkShaderInfoTypeAMD $infoType
     * @param \iggyvolz\vulkan\util\IntPointer $pInfoSize
     * @param \iggyvolz\vulkan\util\Pointer $pInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetShaderInfoAMD(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkPipeline $pipeline,
        \iggyvolz\vulkan\enum\VkShaderStageFlagBits $shaderStage,
        \iggyvolz\vulkan\enum\VkShaderInfoTypeAMD $infoType,
        \iggyvolz\vulkan\util\IntPointer $pInfoSize,
        \iggyvolz\vulkan\util\Pointer $pInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pipeline;
        // VkPipeline => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $pipeline = $cValue;
        $phpValue = $shaderStage;
        // VkShaderStageFlagBits => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $shaderStage = $cValue;
        $phpValue = $infoType;
        // VkShaderInfoTypeAMD => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $infoType = $cValue;
        $phpValue = $pInfoSize;
        // size_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfoSize = $cValue;
        $phpValue = $pInfo;
        // void* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
        $cValue = $this->vulkan->call("vkGetShaderInfoAMD", $device, $pipeline, $shaderStage, $infoType, $pInfoSize, $pInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }
}
