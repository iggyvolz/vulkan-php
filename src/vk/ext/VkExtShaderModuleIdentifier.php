<?php

namespace iggyvolz\vulkan\ext;

class VkExtShaderModuleIdentifier
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkShaderModule $shaderModule
     */
    public function vkGetShaderModuleIdentifierEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkShaderModule $shaderModule,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $shaderModule;
        // VkShaderModule => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $shaderModule = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkShaderModuleCreateInfo $pCreateInfo
     */
    public function vkGetShaderModuleCreateInfoIdentifierEXT(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkShaderModuleCreateInfo $pCreateInfo,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCreateInfo;
        // const VkShaderModuleCreateInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
    }
}
