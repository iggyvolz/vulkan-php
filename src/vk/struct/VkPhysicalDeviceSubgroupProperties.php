<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceSubgroupProperties
{
    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \FFI $ffi,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|int $subgroupSize = null,
        null|array $supportedStages = null,
        null|array $supportedOperations = null,
        null|bool $quadOperationsInAllStages = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceSubgroupProperties', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($subgroupSize)) $self->setSubgroupSize($subgroupSize);
        if(!is_null($supportedStages)) $self->setSupportedStages($supportedStages);
        if(!is_null($supportedOperations)) $self->setSupportedOperations($supportedOperations);
        if(!is_null($quadOperationsInAllStages)) $self->setQuadOperationsInAllStages($quadOperationsInAllStages);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSubgroupSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->subgroupSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSubgroupSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->subgroupSize = $cValue;
    }

    /**
     * VkShaderStageFlags/
     */
    public function getSupportedStages(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->supportedStages;
        $phpValue = \iggyvolz\vulkan\enum\VkShaderStageFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setSupportedStages(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkShaderStageFlagBits::toInt(...$phpValue);
        $this->cdata->supportedStages = $cValue;
    }

    /**
     * VkSubgroupFeatureFlags/
     */
    public function getSupportedOperations(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->supportedOperations;
        $phpValue = \iggyvolz\vulkan\enum\VkSubgroupFeatureFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setSupportedOperations(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkSubgroupFeatureFlagBits::toInt(...$phpValue);
        $this->cdata->supportedOperations = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getQuadOperationsInAllStages(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->quadOperationsInAllStages;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setQuadOperationsInAllStages(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->quadOperationsInAllStages = $cValue;
    }
}
