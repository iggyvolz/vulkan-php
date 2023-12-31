<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceShaderCoreProperties2AMD
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
        null|array $shaderCoreFeatures = null,
        null|int $activeComputeUnitCount = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceShaderCoreProperties2AMD', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($shaderCoreFeatures)) $self->setShaderCoreFeatures($shaderCoreFeatures);
        if(!is_null($activeComputeUnitCount)) $self->setActiveComputeUnitCount($activeComputeUnitCount);
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
     * VkShaderCorePropertiesFlagsAMD/
     */
    public function getShaderCoreFeatures(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderCoreFeatures;
        $phpValue = \iggyvolz\vulkan\enum\VkShaderCorePropertiesFlagBitsAMD::fromInt($cValue);
        return $phpValue;
    }

    public function setShaderCoreFeatures(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkShaderCorePropertiesFlagBitsAMD::toInt(...$phpValue);
        $this->cdata->shaderCoreFeatures = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getActiveComputeUnitCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->activeComputeUnitCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setActiveComputeUnitCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->activeComputeUnitCount = $cValue;
    }
}
