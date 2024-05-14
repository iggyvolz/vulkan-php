<?php

namespace iggyvolz\vulkan\ext;

class VkNvDeviceGeneratedCommandsCompute
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint
     * @param \iggyvolz\vulkan\struct\VkPipeline $pipeline
     * @return void
     */
    public function vkCmdUpdatePipelineIndirectBufferNV(
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
        $cValue = $this->vulkan->call("vkCmdUpdatePipelineIndirectBufferNV", $commandBuffer, $pipelineBindPoint, $pipeline);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkComputePipelineCreateInfo $pCreateInfo
     */
    public function vkGetPipelineIndirectMemoryRequirementsNV(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkComputePipelineCreateInfo $pCreateInfo,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCreateInfo;
        // const VkComputePipelineCreateInfo* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkPipelineIndirectDeviceAddressInfoNV $pInfo
     * @return int
     */
    public function vkGetPipelineIndirectDeviceAddressNV(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkPipelineIndirectDeviceAddressInfoNV $pInfo,
    ): int {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pInfo;
        // const VkPipelineIndirectDeviceAddressInfoNV* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
        $cValue = $this->vulkan->call("vkGetPipelineIndirectDeviceAddressNV", $device, $pInfo);
        // VkDeviceAddress => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $phpValue = $cValue;
        return $phpValue;
    }
}
