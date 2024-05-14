<?php

namespace iggyvolz\vulkan\ext;

class VkIntelPerformanceQuery
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkInitializePerformanceApiInfoINTEL $pInitializeInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkInitializePerformanceApiINTEL(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkInitializePerformanceApiInfoINTEL $pInitializeInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pInitializeInfo;
        // const VkInitializePerformanceApiInfoINTEL* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pInitializeInfo = $cValue;
        $cValue = $this->vulkan->call("vkInitializePerformanceApiINTEL", $device, $pInitializeInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @return void
     */
    public function vkUninitializePerformanceApiINTEL(\iggyvolz\vulkan\struct\VkDevice $device): void
    {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $cValue = $this->vulkan->call("vkUninitializePerformanceApiINTEL", $device);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkPerformanceMarkerInfoINTEL $pMarkerInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkCmdSetPerformanceMarkerINTEL(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkPerformanceMarkerInfoINTEL $pMarkerInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pMarkerInfo;
        // const VkPerformanceMarkerInfoINTEL* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pMarkerInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetPerformanceMarkerINTEL", $commandBuffer, $pMarkerInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkPerformanceStreamMarkerInfoINTEL $pMarkerInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkCmdSetPerformanceStreamMarkerINTEL(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkPerformanceStreamMarkerInfoINTEL $pMarkerInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pMarkerInfo;
        // const VkPerformanceStreamMarkerInfoINTEL* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pMarkerInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetPerformanceStreamMarkerINTEL", $commandBuffer, $pMarkerInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer
     * @param \iggyvolz\vulkan\struct\VkPerformanceOverrideInfoINTEL $pOverrideInfo
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkCmdSetPerformanceOverrideINTEL(
        \iggyvolz\vulkan\struct\VkCommandBuffer $commandBuffer,
        \iggyvolz\vulkan\struct\VkPerformanceOverrideInfoINTEL $pOverrideInfo,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $commandBuffer;
        // VkCommandBuffer => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $commandBuffer = $cValue;
        $phpValue = $pOverrideInfo;
        // const VkPerformanceOverrideInfoINTEL* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pOverrideInfo = $cValue;
        $cValue = $this->vulkan->call("vkCmdSetPerformanceOverrideINTEL", $commandBuffer, $pOverrideInfo);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkPerformanceConfigurationAcquireInfoINTEL $pAcquireInfo
     */
    public function vkAcquirePerformanceConfigurationINTEL(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkPerformanceConfigurationAcquireInfoINTEL $pAcquireInfo,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pAcquireInfo;
        // const VkPerformanceConfigurationAcquireInfoINTEL* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAcquireInfo = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkPerformanceConfigurationINTEL $configuration
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkReleasePerformanceConfigurationINTEL(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkPerformanceConfigurationINTEL $configuration,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $configuration;
        // VkPerformanceConfigurationINTEL => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $configuration = $cValue;
        $cValue = $this->vulkan->call("vkReleasePerformanceConfigurationINTEL", $device, $configuration);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkQueue $queue
     * @param \iggyvolz\vulkan\struct\VkPerformanceConfigurationINTEL $configuration
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkQueueSetPerformanceConfigurationINTEL(
        \iggyvolz\vulkan\struct\VkQueue $queue,
        \iggyvolz\vulkan\struct\VkPerformanceConfigurationINTEL $configuration,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $queue;
        // VkQueue => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $queue = $cValue;
        $phpValue = $configuration;
        // VkPerformanceConfigurationINTEL => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $configuration = $cValue;
        $cValue = $this->vulkan->call("vkQueueSetPerformanceConfigurationINTEL", $queue, $configuration);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\enum\VkPerformanceParameterTypeINTEL $parameter
     */
    public function vkGetPerformanceParameterINTEL(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\enum\VkPerformanceParameterTypeINTEL $parameter,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $parameter;
        // VkPerformanceParameterTypeINTEL => iggyvolz\vulkan\generator\Transformer\EnumTransformer
        $cValue = $phpValue->value;
        $parameter = $cValue;
    }
}
