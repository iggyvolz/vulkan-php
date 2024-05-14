<?php

namespace iggyvolz\vulkan\ext;

class VkExtAcquireXlibDisplay
{
    public function __construct(
        public \iggyvolz\vulkan\util\VulkanNew $vulkan,
    ) {
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\util\Pointer $dpy
     * @param \iggyvolz\vulkan\struct\VkDisplayKHR $display
     * @return \iggyvolz\vulkan\enum\VkResult
     */
    public function vkAcquireXlibDisplayEXT(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\util\Pointer $dpy,
        \iggyvolz\vulkan\struct\VkDisplayKHR $display,
    ): \iggyvolz\vulkan\enum\VkResult {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $dpy;
        // Display* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $dpy = $cValue;
        $phpValue = $display;
        // VkDisplayKHR => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $display = $cValue;
        $cValue = $this->vulkan->call("vkAcquireXlibDisplayEXT", $physicalDevice, $dpy, $display);
        // VkResult => iggyvolz\vulkan\generator\Transformer\VkResultTransformer
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice
     * @param \iggyvolz\vulkan\util\Pointer $dpy
     * @param mixed $rrOutput
     */
    public function vkGetRandROutputDisplayEXT(
        \iggyvolz\vulkan\struct\VkPhysicalDevice $physicalDevice,
        \iggyvolz\vulkan\util\Pointer $dpy,
        mixed $rrOutput,
    ) {
        $phpValue = $physicalDevice;
        // VkPhysicalDevice => iggyvolz\vulkan\generator\Transformer\StructTransformer
        $cValue = $phpValue->cdata;
        $physicalDevice = $cValue;
        $phpValue = $dpy;
        // Display* => iggyvolz\vulkan\generator\Transformer\OpaquePointerTransformer
        $cValue = $phpValue->cdata;
        $dpy = $cValue;
        $phpValue = $rrOutput;
        // RROutput => iggyvolz\vulkan\generator\Transformer\DummyTransformer
        throw new \LogicException("Dummy transformer - RROutput!");
        $rrOutput = $cValue;
    }
}
