<?php

namespace iggyvolz\vulkan\ext;

class VkNvDeviceGeneratedCommands
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param bool $isPreprocessed
     * @param \iggyvolz\vulkan\struct\VkGeneratedCommandsInfoNV $pGeneratedCommandsInfo
     * @return void
     */
    public function vkCmdExecuteGeneratedCommandsNV(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        bool $isPreprocessed,
        \iggyvolz\vulkan\struct\VkGeneratedCommandsInfoNV $pGeneratedCommandsInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $isPreprocessed;
        // VkBool32 => iggyvolz\vulkan\generator\Transformer\BoolTransformer
        $cValue = $phpValue ? 1 : 0;
        $isPreprocessed = $cValue;
        $phpValue = $pGeneratedCommandsInfo;
        // const VkGeneratedCommandsInfoNV* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pGeneratedCommandsInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdExecuteGeneratedCommandsNV", $commandBuffer, $isPreprocessed, $pGeneratedCommandsInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkGeneratedCommandsInfoNV $pGeneratedCommandsInfo
     * @return void
     */
    public function vkCmdPreprocessGeneratedCommandsNV(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkGeneratedCommandsInfoNV $pGeneratedCommandsInfo,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pGeneratedCommandsInfo;
        // const VkGeneratedCommandsInfoNV* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pGeneratedCommandsInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdPreprocessGeneratedCommandsNV", $commandBuffer, $pGeneratedCommandsInfo);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint
     * @param \iggyvolz\vulkan\struct\VkPipeline $pipeline
     * @param int $groupIndex
     * @return void
     */
    public function vkCmdBindPipelineShaderGroupNV(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint,
        \iggyvolz\vulkan\struct\VkPipeline $pipeline,
        int $groupIndex,
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
        $phpValue = $groupIndex;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $groupIndex = $cValue;
        $cValue = $this->vulkan->call("vkCmdBindPipelineShaderGroupNV", $commandBuffer, $pipelineBindPoint, $pipeline, $groupIndex);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkGeneratedCommandsMemoryRequirementsInfoNV $pInfo
     */
    public function vkGetGeneratedCommandsMemoryRequirementsNV(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkGeneratedCommandsMemoryRequirementsInfoNV $pInfo,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pInfo;
        // const VkGeneratedCommandsMemoryRequirementsInfoNV* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInfo = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkIndirectCommandsLayoutCreateInfoNV $pCreateInfo
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateIndirectCommandsLayoutNV(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkIndirectCommandsLayoutCreateInfoNV $pCreateInfo,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pCreateInfo;
        // const VkIndirectCommandsLayoutCreateInfoNV* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pCreateInfo = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkIndirectCommandsLayoutNV $indirectCommandsLayout
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroyIndirectCommandsLayoutNV(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkIndirectCommandsLayoutNV $indirectCommandsLayout,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $indirectCommandsLayout;
        // VkIndirectCommandsLayoutNV => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $indirectCommandsLayout = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroyIndirectCommandsLayoutNV", $device, $indirectCommandsLayout, $pAllocator);
    }
}
