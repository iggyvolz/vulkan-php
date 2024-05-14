<?php

namespace iggyvolz\vulkan\ext;

class VkKhrDeferredHostOperations
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     */
    public function vkCreateDeferredOperationKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ) {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDeferredOperationKHR $operation
     * @param \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator
     * @return void
     */
    public function vkDestroyDeferredOperationKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDeferredOperationKHR $operation,
        \iggyvolz\vulkan\struct\VkAllocationCallbacks $pAllocator,
    ): void {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $operation;
        // VkDeferredOperationKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $operation = $cValue;
        $phpValue = $pAllocator;
        // const VkAllocationCallbacks* => iggyvolz\vulkan\generator\Transformer\ConstPointerTransformer
        $cValue = $phpValue->cdata;
        $pAllocator = $cValue;
        $cValue = $this->vulkan->call("vkDestroyDeferredOperationKHR", $device, $operation, $pAllocator);
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDeferredOperationKHR $operation
     * @return int
     */
    public function vkGetDeferredOperationMaxConcurrencyKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDeferredOperationKHR $operation,
    ): int {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $operation;
        // VkDeferredOperationKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $operation = $cValue;
        $cValue = $this->vulkan->call("vkGetDeferredOperationMaxConcurrencyKHR", $device, $operation);
        // uint32_t => iggyvolz\vulkan\generator\Transformer\PassThroughTransformer
        $phpValue = $cValue;
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDeferredOperationKHR $operation
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkGetDeferredOperationResultKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDeferredOperationKHR $operation,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $operation;
        // VkDeferredOperationKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $operation = $cValue;
        $cValue = $this->vulkan->call("vkGetDeferredOperationResultKHR", $device, $operation);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkDevice $device
     * @param \iggyvolz\vulkan\struct\VkDeferredOperationKHR $operation
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkDeferredOperationJoinKHR(
        \iggyvolz\vulkan\struct\VkDevice $device,
        \iggyvolz\vulkan\struct\VkDeferredOperationKHR $operation,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $device;
        // VkDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $device = $cValue;
        $phpValue = $operation;
        // VkDeferredOperationKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $operation = $cValue;
        $cValue = $this->vulkan->call("vkDeferredOperationJoinKHR", $device, $operation);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }
}
