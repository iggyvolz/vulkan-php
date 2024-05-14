<?php

namespace iggyvolz\vulkan\ext;

class VkNvMemoryDecompression
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $decompressRegionCount
     * @param \iggyvolz\vulkan\struct\VkDecompressMemoryRegionNV $pDecompressMemoryRegions
     * @return void
     */
    public function vkCmdDecompressMemoryNV(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $decompressRegionCount,
        \iggyvolz\vulkan\struct\VkDecompressMemoryRegionNV $pDecompressMemoryRegions,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $decompressRegionCount;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $decompressRegionCount = $cValue;
        $phpValue = $pDecompressMemoryRegions;
        // const VkDecompressMemoryRegionNV* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pDecompressMemoryRegions = $cValue;
        $cValue = $this->vulkan->call("vkCmdDecompressMemoryNV", $commandBuffer, $decompressRegionCount, $pDecompressMemoryRegions);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param int $indirectCommandsAddress
     * @param int $indirectCommandsCountAddress
     * @param int $stride
     * @return void
     */
    public function vkCmdDecompressMemoryIndirectCountNV(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        int $indirectCommandsAddress,
        int $indirectCommandsCountAddress,
        int $stride,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $indirectCommandsAddress;
        // VkDeviceAddress => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $indirectCommandsAddress = $cValue;
        $phpValue = $indirectCommandsCountAddress;
        // VkDeviceAddress => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $indirectCommandsCountAddress = $cValue;
        $phpValue = $stride;
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $cValue = $phpValue;
        $stride = $cValue;
        $cValue = $this->vulkan->call("vkCmdDecompressMemoryIndirectCountNV", $commandBuffer, $indirectCommandsAddress, $indirectCommandsCountAddress, $stride);
    }
}
