<?php

namespace iggyvolz\vulkan\ext;

class VkKhrFragmentShadingRate
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkExtent2D $pFragmentSize
     * @param mixed $combinerOps
     * @return void
     */
    public function vkCmdSetFragmentShadingRateKHR(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkExtent2D $pFragmentSize,
        mixed $combinerOps,
    ): void {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pFragmentSize;
        // const VkExtent2D* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pFragmentSize = $cValue;
        $phpValue = $combinerOps;
        // const VkFragmentShadingRateCombinerOpKHR    [2] => iggyvolz\vulkan\generator\Transformer\DummyTransformer
        throw new \LogicException("Dummy transformer - const VkFragmentShadingRateCombinerOpKHR[2]!");
        $combinerOps = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetFragmentShadingRateKHR", $commandBuffer, $pFragmentSize, $combinerOps);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\util\IntPointer $pFragmentShadingRateCount
     */
    public function vkGetPhysicalDeviceFragmentShadingRatesKHR(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\util\IntPointer $pFragmentShadingRateCount,
    ) {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $pFragmentShadingRateCount;
        // uint32_t* => iggyvolz\vulkan\generator\Transformer\IntPointerTransformer
        $cValue = $phpValue->cdata;
        $pFragmentShadingRateCount = $cValue;
    }
}
