<?php

declare(strict_types=1);

namespace iggyvolz\vulkan;

class Vulkan
{
    use util\VulkanBase;

    /**
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkInstanceCreateInfo> $pCreateInfo const VkInstanceCreateInfo*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkAllocationCallbacks> $pAllocator const VkAllocationCallbacks*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkInstance> $pInstance VkInstance*
     * returns VkResult
     */
    public function createInstance(
        util\ObjectPointer $pCreateInfo,
        util\ObjectPointer $pAllocator,
        util\ObjectPointer $pInstance,
    ): enum\VkResult
    {
        $phpValue = $pCreateInfo;
        $cValue = $phpValue->cdata;
        $pCreateInfoC = $cValue;
        $phpValue = $pAllocator;
        $cValue = $phpValue->cdata;
        $pAllocatorC = $cValue;
        $phpValue = $pInstance;
        $cValue = $phpValue->cdata;
        $pInstanceC = $cValue;
        $cValue = $this->exec('vkCreateInstance',
            $pCreateInfoC,
            $pAllocatorC,
            $pInstanceC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\IntPointer $pApiVersion uint32_t*
     * returns VkResult
     */
    public function enumerateInstanceVersion(util\IntPointer $pApiVersion): enum\VkResult
    {
        $phpValue = $pApiVersion;
        $cValue = $phpValue->cdata;
        $pApiVersionC = $cValue;
        $cValue = $this->exec('vkEnumerateInstanceVersion',
            $pApiVersionC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param \iggyvolz\vulkan\util\IntPointer $pPropertyCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkLayerProperties> $pProperties VkLayerProperties*
     * returns VkResult
     */
    public function enumerateInstanceLayerProperties(
        util\IntPointer $pPropertyCount,
        util\ObjectPointer $pProperties,
    ): enum\VkResult
    {
        $phpValue = $pPropertyCount;
        $cValue = $phpValue->cdata;
        $pPropertyCountC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->exec('vkEnumerateInstanceLayerProperties',
            $pPropertyCountC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @return list<\iggyvolz\vulkan\struct\VkLayerProperties>
     */
    public function getInstanceLayerProperties(): array
    {
        $count = \iggyvolz\vulkan\util\IntPointer::new('uint32_t', $this);
        $this->enumerateInstanceLayerProperties(...[...\func_get_args(), $count, \iggyvolz\vulkan\util\ObjectPointer::null($this)])->assert(\iggyvolz\vulkan\enum\VkResult::Incomplete);
        $ptr = \iggyvolz\vulkan\util\ObjectPointer::new($this, '\\iggyvolz\\vulkan\\struct\\VkLayerProperties', $count->get());
        $this->enumerateInstanceLayerProperties(...[...\func_get_args(), $count, $ptr])->assert();
        return $ptr->getLen($count->get());
    }

    /**
     * @param ?string $pLayerName const char*
     * @param \iggyvolz\vulkan\util\IntPointer $pPropertyCount uint32_t*
     * @param \iggyvolz\vulkan\util\ObjectPointer<\iggyvolz\vulkan\struct\VkExtensionProperties> $pProperties VkExtensionProperties*
     * returns VkResult
     */
    public function enumerateInstanceExtensionProperties(
        ?string $pLayerName,
        util\IntPointer $pPropertyCount,
        util\ObjectPointer $pProperties,
    ): enum\VkResult
    {
        $phpValue = $pLayerName;
        $cValue = $phpValue;
        $pLayerNameC = $cValue;
        $phpValue = $pPropertyCount;
        $cValue = $phpValue->cdata;
        $pPropertyCountC = $cValue;
        $phpValue = $pProperties;
        $cValue = $phpValue->cdata;
        $pPropertiesC = $cValue;
        $cValue = $this->exec('vkEnumerateInstanceExtensionProperties',
            $pLayerNameC,
            $pPropertyCountC,
            $pPropertiesC,
        );
        $phpValue = \iggyvolz\vulkan\enum\VkResult::from($cValue);
        return $phpValue;
    }

    /**
     * @param ?string pLayerName
     * @return list<\iggyvolz\vulkan\struct\VkExtensionProperties>
     */
    public function getInstanceExtensionProperties(?string $pLayerName): array
    {
        $count = \iggyvolz\vulkan\util\IntPointer::new('uint32_t', $this);
        $this->enumerateInstanceExtensionProperties(...[...\func_get_args(), $count, \iggyvolz\vulkan\util\ObjectPointer::null($this)])->assert(\iggyvolz\vulkan\enum\VkResult::Incomplete);
        $ptr = \iggyvolz\vulkan\util\ObjectPointer::new($this, '\\iggyvolz\\vulkan\\struct\\VkExtensionProperties', $count->get());
        $this->enumerateInstanceExtensionProperties(...[...\func_get_args(), $count, $ptr])->assert();
        return $ptr->getLen($count->get());
    }
}
