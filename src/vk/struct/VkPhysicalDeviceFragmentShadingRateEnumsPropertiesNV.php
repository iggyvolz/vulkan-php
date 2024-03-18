<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceFragmentShadingRateEnumsPropertiesNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "maxFragmentShadingRateInvocationCount" => $this->getMaxFragmentShadingRateInvocationCount(),
        ];
    }

    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|\iggyvolz\vulkan\enum\VkSampleCountFlagBits $maxFragmentShadingRateInvocationCount = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceFragmentShadingRateEnumsPropertiesNV', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($maxFragmentShadingRateInvocationCount)) $self->setMaxFragmentShadingRateInvocationCount($maxFragmentShadingRateInvocationCount);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * VkSampleCountFlagBits/
     */
    public function getMaxFragmentShadingRateInvocationCount(): \iggyvolz\vulkan\enum\VkSampleCountFlagBits
    {
        $cValue = $this->cdata->maxFragmentShadingRateInvocationCount;
        $phpValue = \iggyvolz\vulkan\enum\VkSampleCountFlagBits::from($cValue);
        return $phpValue;
    }

    public function setMaxFragmentShadingRateInvocationCount(
        \iggyvolz\vulkan\enum\VkSampleCountFlagBits $phpValue,
    ): void
    {
        $cValue = $phpValue->value;
        $this->cdata->maxFragmentShadingRateInvocationCount = $cValue;
    }
}
