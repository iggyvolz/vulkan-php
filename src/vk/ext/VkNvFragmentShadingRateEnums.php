<?php

namespace iggyvolz\vulkan\ext;

class VkNvFragmentShadingRateEnums
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\enum\VkFragmentShadingRateNV $shadingRate
     * @param mixed $combinerOps
     * @return void
     */
    public function vkCmdSetFragmentShadingRateEnumNV(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\enum\VkFragmentShadingRateNV $shadingRate,
        mixed $combinerOps,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $shadingRate;
        // VkFragmentShadingRateNV => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $shadingRate = $cValue;
        $phpValue = $combinerOps;
        // const VkFragmentShadingRateCombinerOpKHR    [2] => iggyvolz\vulkan\generator\Transformer\DummyTransformer
        throw new \LogicException("Dummy transformer - const VkFragmentShadingRateCombinerOpKHR[2]!");
        $combinerOps = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetFragmentShadingRateEnumNV", $commandBuffer, $shadingRate, $combinerOps);
    }
}
