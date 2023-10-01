<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceVulkan12Properties
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
        null|\iggyvolz\vulkan\util\OpaquePointer $pNext = null,
        null|\iggyvolz\vulkan\enum\VkDriverId $driverID = null,
        null|string $driverName = null,
        null|string $driverInfo = null,
        null|VkConformanceVersion $conformanceVersion = null,
        null|\iggyvolz\vulkan\enum\VkShaderFloatControlsIndependence $denormBehaviorIndependence = null,
        null|\iggyvolz\vulkan\enum\VkShaderFloatControlsIndependence $roundingModeIndependence = null,
        null|bool $shaderSignedZeroInfNanPreserveFloat16 = null,
        null|bool $shaderSignedZeroInfNanPreserveFloat32 = null,
        null|bool $shaderSignedZeroInfNanPreserveFloat64 = null,
        null|bool $shaderDenormPreserveFloat16 = null,
        null|bool $shaderDenormPreserveFloat32 = null,
        null|bool $shaderDenormPreserveFloat64 = null,
        null|bool $shaderDenormFlushToZeroFloat16 = null,
        null|bool $shaderDenormFlushToZeroFloat32 = null,
        null|bool $shaderDenormFlushToZeroFloat64 = null,
        null|bool $shaderRoundingModeRTEFloat16 = null,
        null|bool $shaderRoundingModeRTEFloat32 = null,
        null|bool $shaderRoundingModeRTEFloat64 = null,
        null|bool $shaderRoundingModeRTZFloat16 = null,
        null|bool $shaderRoundingModeRTZFloat32 = null,
        null|bool $shaderRoundingModeRTZFloat64 = null,
        null|int $maxUpdateAfterBindDescriptorsInAllPools = null,
        null|bool $shaderUniformBufferArrayNonUniformIndexingNative = null,
        null|bool $shaderSampledImageArrayNonUniformIndexingNative = null,
        null|bool $shaderStorageBufferArrayNonUniformIndexingNative = null,
        null|bool $shaderStorageImageArrayNonUniformIndexingNative = null,
        null|bool $shaderInputAttachmentArrayNonUniformIndexingNative = null,
        null|bool $robustBufferAccessUpdateAfterBind = null,
        null|bool $quadDivergentImplicitLod = null,
        null|int $maxPerStageDescriptorUpdateAfterBindSamplers = null,
        null|int $maxPerStageDescriptorUpdateAfterBindUniformBuffers = null,
        null|int $maxPerStageDescriptorUpdateAfterBindStorageBuffers = null,
        null|int $maxPerStageDescriptorUpdateAfterBindSampledImages = null,
        null|int $maxPerStageDescriptorUpdateAfterBindStorageImages = null,
        null|int $maxPerStageDescriptorUpdateAfterBindInputAttachments = null,
        null|int $maxPerStageUpdateAfterBindResources = null,
        null|int $maxDescriptorSetUpdateAfterBindSamplers = null,
        null|int $maxDescriptorSetUpdateAfterBindUniformBuffers = null,
        null|int $maxDescriptorSetUpdateAfterBindUniformBuffersDynamic = null,
        null|int $maxDescriptorSetUpdateAfterBindStorageBuffers = null,
        null|int $maxDescriptorSetUpdateAfterBindStorageBuffersDynamic = null,
        null|int $maxDescriptorSetUpdateAfterBindSampledImages = null,
        null|int $maxDescriptorSetUpdateAfterBindStorageImages = null,
        null|int $maxDescriptorSetUpdateAfterBindInputAttachments = null,
        mixed $supportedDepthResolveModes = null,
        mixed $supportedStencilResolveModes = null,
        null|bool $independentResolveNone = null,
        null|bool $independentResolve = null,
        null|bool $filterMinmaxSingleComponentFormats = null,
        null|bool $filterMinmaxImageComponentMapping = null,
        null|int $maxTimelineSemaphoreValueDifference = null,
        mixed $framebufferIntegerColorSampleCounts = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceVulkan12Properties', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($driverID)) $self->setDriverID($driverID);
        if(!is_null($driverName)) $self->setDriverName($driverName);
        if(!is_null($driverInfo)) $self->setDriverInfo($driverInfo);
        if(!is_null($conformanceVersion)) $self->setConformanceVersion($conformanceVersion);
        if(!is_null($denormBehaviorIndependence)) $self->setDenormBehaviorIndependence($denormBehaviorIndependence);
        if(!is_null($roundingModeIndependence)) $self->setRoundingModeIndependence($roundingModeIndependence);
        if(!is_null($shaderSignedZeroInfNanPreserveFloat16)) $self->setShaderSignedZeroInfNanPreserveFloat16($shaderSignedZeroInfNanPreserveFloat16);
        if(!is_null($shaderSignedZeroInfNanPreserveFloat32)) $self->setShaderSignedZeroInfNanPreserveFloat32($shaderSignedZeroInfNanPreserveFloat32);
        if(!is_null($shaderSignedZeroInfNanPreserveFloat64)) $self->setShaderSignedZeroInfNanPreserveFloat64($shaderSignedZeroInfNanPreserveFloat64);
        if(!is_null($shaderDenormPreserveFloat16)) $self->setShaderDenormPreserveFloat16($shaderDenormPreserveFloat16);
        if(!is_null($shaderDenormPreserveFloat32)) $self->setShaderDenormPreserveFloat32($shaderDenormPreserveFloat32);
        if(!is_null($shaderDenormPreserveFloat64)) $self->setShaderDenormPreserveFloat64($shaderDenormPreserveFloat64);
        if(!is_null($shaderDenormFlushToZeroFloat16)) $self->setShaderDenormFlushToZeroFloat16($shaderDenormFlushToZeroFloat16);
        if(!is_null($shaderDenormFlushToZeroFloat32)) $self->setShaderDenormFlushToZeroFloat32($shaderDenormFlushToZeroFloat32);
        if(!is_null($shaderDenormFlushToZeroFloat64)) $self->setShaderDenormFlushToZeroFloat64($shaderDenormFlushToZeroFloat64);
        if(!is_null($shaderRoundingModeRTEFloat16)) $self->setShaderRoundingModeRTEFloat16($shaderRoundingModeRTEFloat16);
        if(!is_null($shaderRoundingModeRTEFloat32)) $self->setShaderRoundingModeRTEFloat32($shaderRoundingModeRTEFloat32);
        if(!is_null($shaderRoundingModeRTEFloat64)) $self->setShaderRoundingModeRTEFloat64($shaderRoundingModeRTEFloat64);
        if(!is_null($shaderRoundingModeRTZFloat16)) $self->setShaderRoundingModeRTZFloat16($shaderRoundingModeRTZFloat16);
        if(!is_null($shaderRoundingModeRTZFloat32)) $self->setShaderRoundingModeRTZFloat32($shaderRoundingModeRTZFloat32);
        if(!is_null($shaderRoundingModeRTZFloat64)) $self->setShaderRoundingModeRTZFloat64($shaderRoundingModeRTZFloat64);
        if(!is_null($maxUpdateAfterBindDescriptorsInAllPools)) $self->setMaxUpdateAfterBindDescriptorsInAllPools($maxUpdateAfterBindDescriptorsInAllPools);
        if(!is_null($shaderUniformBufferArrayNonUniformIndexingNative)) $self->setShaderUniformBufferArrayNonUniformIndexingNative($shaderUniformBufferArrayNonUniformIndexingNative);
        if(!is_null($shaderSampledImageArrayNonUniformIndexingNative)) $self->setShaderSampledImageArrayNonUniformIndexingNative($shaderSampledImageArrayNonUniformIndexingNative);
        if(!is_null($shaderStorageBufferArrayNonUniformIndexingNative)) $self->setShaderStorageBufferArrayNonUniformIndexingNative($shaderStorageBufferArrayNonUniformIndexingNative);
        if(!is_null($shaderStorageImageArrayNonUniformIndexingNative)) $self->setShaderStorageImageArrayNonUniformIndexingNative($shaderStorageImageArrayNonUniformIndexingNative);
        if(!is_null($shaderInputAttachmentArrayNonUniformIndexingNative)) $self->setShaderInputAttachmentArrayNonUniformIndexingNative($shaderInputAttachmentArrayNonUniformIndexingNative);
        if(!is_null($robustBufferAccessUpdateAfterBind)) $self->setRobustBufferAccessUpdateAfterBind($robustBufferAccessUpdateAfterBind);
        if(!is_null($quadDivergentImplicitLod)) $self->setQuadDivergentImplicitLod($quadDivergentImplicitLod);
        if(!is_null($maxPerStageDescriptorUpdateAfterBindSamplers)) $self->setMaxPerStageDescriptorUpdateAfterBindSamplers($maxPerStageDescriptorUpdateAfterBindSamplers);
        if(!is_null($maxPerStageDescriptorUpdateAfterBindUniformBuffers)) $self->setMaxPerStageDescriptorUpdateAfterBindUniformBuffers($maxPerStageDescriptorUpdateAfterBindUniformBuffers);
        if(!is_null($maxPerStageDescriptorUpdateAfterBindStorageBuffers)) $self->setMaxPerStageDescriptorUpdateAfterBindStorageBuffers($maxPerStageDescriptorUpdateAfterBindStorageBuffers);
        if(!is_null($maxPerStageDescriptorUpdateAfterBindSampledImages)) $self->setMaxPerStageDescriptorUpdateAfterBindSampledImages($maxPerStageDescriptorUpdateAfterBindSampledImages);
        if(!is_null($maxPerStageDescriptorUpdateAfterBindStorageImages)) $self->setMaxPerStageDescriptorUpdateAfterBindStorageImages($maxPerStageDescriptorUpdateAfterBindStorageImages);
        if(!is_null($maxPerStageDescriptorUpdateAfterBindInputAttachments)) $self->setMaxPerStageDescriptorUpdateAfterBindInputAttachments($maxPerStageDescriptorUpdateAfterBindInputAttachments);
        if(!is_null($maxPerStageUpdateAfterBindResources)) $self->setMaxPerStageUpdateAfterBindResources($maxPerStageUpdateAfterBindResources);
        if(!is_null($maxDescriptorSetUpdateAfterBindSamplers)) $self->setMaxDescriptorSetUpdateAfterBindSamplers($maxDescriptorSetUpdateAfterBindSamplers);
        if(!is_null($maxDescriptorSetUpdateAfterBindUniformBuffers)) $self->setMaxDescriptorSetUpdateAfterBindUniformBuffers($maxDescriptorSetUpdateAfterBindUniformBuffers);
        if(!is_null($maxDescriptorSetUpdateAfterBindUniformBuffersDynamic)) $self->setMaxDescriptorSetUpdateAfterBindUniformBuffersDynamic($maxDescriptorSetUpdateAfterBindUniformBuffersDynamic);
        if(!is_null($maxDescriptorSetUpdateAfterBindStorageBuffers)) $self->setMaxDescriptorSetUpdateAfterBindStorageBuffers($maxDescriptorSetUpdateAfterBindStorageBuffers);
        if(!is_null($maxDescriptorSetUpdateAfterBindStorageBuffersDynamic)) $self->setMaxDescriptorSetUpdateAfterBindStorageBuffersDynamic($maxDescriptorSetUpdateAfterBindStorageBuffersDynamic);
        if(!is_null($maxDescriptorSetUpdateAfterBindSampledImages)) $self->setMaxDescriptorSetUpdateAfterBindSampledImages($maxDescriptorSetUpdateAfterBindSampledImages);
        if(!is_null($maxDescriptorSetUpdateAfterBindStorageImages)) $self->setMaxDescriptorSetUpdateAfterBindStorageImages($maxDescriptorSetUpdateAfterBindStorageImages);
        if(!is_null($maxDescriptorSetUpdateAfterBindInputAttachments)) $self->setMaxDescriptorSetUpdateAfterBindInputAttachments($maxDescriptorSetUpdateAfterBindInputAttachments);
        if(!is_null($supportedDepthResolveModes)) $self->setSupportedDepthResolveModes($supportedDepthResolveModes);
        if(!is_null($supportedStencilResolveModes)) $self->setSupportedStencilResolveModes($supportedStencilResolveModes);
        if(!is_null($independentResolveNone)) $self->setIndependentResolveNone($independentResolveNone);
        if(!is_null($independentResolve)) $self->setIndependentResolve($independentResolve);
        if(!is_null($filterMinmaxSingleComponentFormats)) $self->setFilterMinmaxSingleComponentFormats($filterMinmaxSingleComponentFormats);
        if(!is_null($filterMinmaxImageComponentMapping)) $self->setFilterMinmaxImageComponentMapping($filterMinmaxImageComponentMapping);
        if(!is_null($maxTimelineSemaphoreValueDifference)) $self->setMaxTimelineSemaphoreValueDifference($maxTimelineSemaphoreValueDifference);
        if(!is_null($framebufferIntegerColorSampleCounts)) $self->setFramebufferIntegerColorSampleCounts($framebufferIntegerColorSampleCounts);
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
    public function getPNext(): \iggyvolz\vulkan\util\OpaquePointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\OpaquePointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * VkDriverId/
     */
    public function getDriverID(): \iggyvolz\vulkan\enum\VkDriverId
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->driverID;
        $phpValue = \iggyvolz\vulkan\enum\VkDriverId::from($cValue);
        return $phpValue;
    }

    public function setDriverID(\iggyvolz\vulkan\enum\VkDriverId $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->driverID = $cValue;
    }

    /**
     * char/[256]
     */
    public function getDriverName(): string
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->driverName;
        $tempString = \FFI::string($cValue, 256); $phpValue = \substr($tempString, 0, \strpos($tempString, "\0"));
        return $phpValue;
    }

    public function setDriverName(string $phpValue): void
    {
        $ffi = $this->ffi;
        \FFI::memcpy($cValue, $phpValue, 256);
        $this->cdata->driverName = $cValue;
    }

    /**
     * char/[256]
     */
    public function getDriverInfo(): string
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->driverInfo;
        $tempString = \FFI::string($cValue, 256); $phpValue = \substr($tempString, 0, \strpos($tempString, "\0"));
        return $phpValue;
    }

    public function setDriverInfo(string $phpValue): void
    {
        $ffi = $this->ffi;
        \FFI::memcpy($cValue, $phpValue, 256);
        $this->cdata->driverInfo = $cValue;
    }

    /**
     * VkConformanceVersion/
     */
    public function getConformanceVersion(): VkConformanceVersion
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->conformanceVersion;
        $phpValue = new \iggyvolz\vulkan\struct\VkConformanceVersion($cValue, $ffi);
        return $phpValue;
    }

    public function setConformanceVersion(VkConformanceVersion $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->conformanceVersion = $cValue;
    }

    /**
     * VkShaderFloatControlsIndependence/
     */
    public function getDenormBehaviorIndependence(): \iggyvolz\vulkan\enum\VkShaderFloatControlsIndependence
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->denormBehaviorIndependence;
        $phpValue = \iggyvolz\vulkan\enum\VkShaderFloatControlsIndependence::from($cValue);
        return $phpValue;
    }

    public function setDenormBehaviorIndependence(
        \iggyvolz\vulkan\enum\VkShaderFloatControlsIndependence $phpValue,
    ): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->denormBehaviorIndependence = $cValue;
    }

    /**
     * VkShaderFloatControlsIndependence/
     */
    public function getRoundingModeIndependence(): \iggyvolz\vulkan\enum\VkShaderFloatControlsIndependence
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->roundingModeIndependence;
        $phpValue = \iggyvolz\vulkan\enum\VkShaderFloatControlsIndependence::from($cValue);
        return $phpValue;
    }

    public function setRoundingModeIndependence(
        \iggyvolz\vulkan\enum\VkShaderFloatControlsIndependence $phpValue,
    ): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->roundingModeIndependence = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderSignedZeroInfNanPreserveFloat16(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderSignedZeroInfNanPreserveFloat16;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderSignedZeroInfNanPreserveFloat16(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderSignedZeroInfNanPreserveFloat16 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderSignedZeroInfNanPreserveFloat32(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderSignedZeroInfNanPreserveFloat32;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderSignedZeroInfNanPreserveFloat32(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderSignedZeroInfNanPreserveFloat32 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderSignedZeroInfNanPreserveFloat64(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderSignedZeroInfNanPreserveFloat64;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderSignedZeroInfNanPreserveFloat64(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderSignedZeroInfNanPreserveFloat64 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderDenormPreserveFloat16(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderDenormPreserveFloat16;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderDenormPreserveFloat16(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderDenormPreserveFloat16 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderDenormPreserveFloat32(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderDenormPreserveFloat32;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderDenormPreserveFloat32(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderDenormPreserveFloat32 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderDenormPreserveFloat64(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderDenormPreserveFloat64;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderDenormPreserveFloat64(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderDenormPreserveFloat64 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderDenormFlushToZeroFloat16(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderDenormFlushToZeroFloat16;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderDenormFlushToZeroFloat16(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderDenormFlushToZeroFloat16 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderDenormFlushToZeroFloat32(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderDenormFlushToZeroFloat32;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderDenormFlushToZeroFloat32(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderDenormFlushToZeroFloat32 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderDenormFlushToZeroFloat64(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderDenormFlushToZeroFloat64;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderDenormFlushToZeroFloat64(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderDenormFlushToZeroFloat64 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderRoundingModeRTEFloat16(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderRoundingModeRTEFloat16;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderRoundingModeRTEFloat16(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderRoundingModeRTEFloat16 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderRoundingModeRTEFloat32(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderRoundingModeRTEFloat32;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderRoundingModeRTEFloat32(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderRoundingModeRTEFloat32 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderRoundingModeRTEFloat64(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderRoundingModeRTEFloat64;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderRoundingModeRTEFloat64(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderRoundingModeRTEFloat64 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderRoundingModeRTZFloat16(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderRoundingModeRTZFloat16;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderRoundingModeRTZFloat16(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderRoundingModeRTZFloat16 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderRoundingModeRTZFloat32(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderRoundingModeRTZFloat32;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderRoundingModeRTZFloat32(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderRoundingModeRTZFloat32 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderRoundingModeRTZFloat64(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderRoundingModeRTZFloat64;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderRoundingModeRTZFloat64(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderRoundingModeRTZFloat64 = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxUpdateAfterBindDescriptorsInAllPools(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxUpdateAfterBindDescriptorsInAllPools;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxUpdateAfterBindDescriptorsInAllPools(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxUpdateAfterBindDescriptorsInAllPools = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderUniformBufferArrayNonUniformIndexingNative(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderUniformBufferArrayNonUniformIndexingNative;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderUniformBufferArrayNonUniformIndexingNative(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderUniformBufferArrayNonUniformIndexingNative = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderSampledImageArrayNonUniformIndexingNative(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderSampledImageArrayNonUniformIndexingNative;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderSampledImageArrayNonUniformIndexingNative(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderSampledImageArrayNonUniformIndexingNative = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderStorageBufferArrayNonUniformIndexingNative(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderStorageBufferArrayNonUniformIndexingNative;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderStorageBufferArrayNonUniformIndexingNative(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderStorageBufferArrayNonUniformIndexingNative = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderStorageImageArrayNonUniformIndexingNative(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderStorageImageArrayNonUniformIndexingNative;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderStorageImageArrayNonUniformIndexingNative(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderStorageImageArrayNonUniformIndexingNative = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderInputAttachmentArrayNonUniformIndexingNative(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->shaderInputAttachmentArrayNonUniformIndexingNative;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderInputAttachmentArrayNonUniformIndexingNative(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderInputAttachmentArrayNonUniformIndexingNative = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getRobustBufferAccessUpdateAfterBind(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->robustBufferAccessUpdateAfterBind;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setRobustBufferAccessUpdateAfterBind(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->robustBufferAccessUpdateAfterBind = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getQuadDivergentImplicitLod(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->quadDivergentImplicitLod;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setQuadDivergentImplicitLod(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->quadDivergentImplicitLod = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxPerStageDescriptorUpdateAfterBindSamplers(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxPerStageDescriptorUpdateAfterBindSamplers;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPerStageDescriptorUpdateAfterBindSamplers(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPerStageDescriptorUpdateAfterBindSamplers = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxPerStageDescriptorUpdateAfterBindUniformBuffers(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxPerStageDescriptorUpdateAfterBindUniformBuffers;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPerStageDescriptorUpdateAfterBindUniformBuffers(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPerStageDescriptorUpdateAfterBindUniformBuffers = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxPerStageDescriptorUpdateAfterBindStorageBuffers(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxPerStageDescriptorUpdateAfterBindStorageBuffers;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPerStageDescriptorUpdateAfterBindStorageBuffers(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPerStageDescriptorUpdateAfterBindStorageBuffers = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxPerStageDescriptorUpdateAfterBindSampledImages(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxPerStageDescriptorUpdateAfterBindSampledImages;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPerStageDescriptorUpdateAfterBindSampledImages(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPerStageDescriptorUpdateAfterBindSampledImages = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxPerStageDescriptorUpdateAfterBindStorageImages(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxPerStageDescriptorUpdateAfterBindStorageImages;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPerStageDescriptorUpdateAfterBindStorageImages(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPerStageDescriptorUpdateAfterBindStorageImages = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxPerStageDescriptorUpdateAfterBindInputAttachments(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxPerStageDescriptorUpdateAfterBindInputAttachments;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPerStageDescriptorUpdateAfterBindInputAttachments(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPerStageDescriptorUpdateAfterBindInputAttachments = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxPerStageUpdateAfterBindResources(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxPerStageUpdateAfterBindResources;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPerStageUpdateAfterBindResources(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPerStageUpdateAfterBindResources = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDescriptorSetUpdateAfterBindSamplers(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxDescriptorSetUpdateAfterBindSamplers;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDescriptorSetUpdateAfterBindSamplers(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDescriptorSetUpdateAfterBindSamplers = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDescriptorSetUpdateAfterBindUniformBuffers(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxDescriptorSetUpdateAfterBindUniformBuffers;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDescriptorSetUpdateAfterBindUniformBuffers(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDescriptorSetUpdateAfterBindUniformBuffers = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDescriptorSetUpdateAfterBindUniformBuffersDynamic(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxDescriptorSetUpdateAfterBindUniformBuffersDynamic;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDescriptorSetUpdateAfterBindUniformBuffersDynamic(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDescriptorSetUpdateAfterBindUniformBuffersDynamic = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDescriptorSetUpdateAfterBindStorageBuffers(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxDescriptorSetUpdateAfterBindStorageBuffers;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDescriptorSetUpdateAfterBindStorageBuffers(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDescriptorSetUpdateAfterBindStorageBuffers = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDescriptorSetUpdateAfterBindStorageBuffersDynamic(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxDescriptorSetUpdateAfterBindStorageBuffersDynamic;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDescriptorSetUpdateAfterBindStorageBuffersDynamic(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDescriptorSetUpdateAfterBindStorageBuffersDynamic = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDescriptorSetUpdateAfterBindSampledImages(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxDescriptorSetUpdateAfterBindSampledImages;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDescriptorSetUpdateAfterBindSampledImages(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDescriptorSetUpdateAfterBindSampledImages = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDescriptorSetUpdateAfterBindStorageImages(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxDescriptorSetUpdateAfterBindStorageImages;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDescriptorSetUpdateAfterBindStorageImages(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDescriptorSetUpdateAfterBindStorageImages = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDescriptorSetUpdateAfterBindInputAttachments(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxDescriptorSetUpdateAfterBindInputAttachments;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDescriptorSetUpdateAfterBindInputAttachments(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDescriptorSetUpdateAfterBindInputAttachments = $cValue;
    }

    /**
     * void* /
     */
    public function getSupportedDepthResolveModes(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->supportedDepthResolveModes;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setSupportedDepthResolveModes(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->supportedDepthResolveModes = $cValue;
    }

    /**
     * void* /
     */
    public function getSupportedStencilResolveModes(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->supportedStencilResolveModes;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setSupportedStencilResolveModes(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->supportedStencilResolveModes = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIndependentResolveNone(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->independentResolveNone;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIndependentResolveNone(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->independentResolveNone = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIndependentResolve(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->independentResolve;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setIndependentResolve(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->independentResolve = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFilterMinmaxSingleComponentFormats(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->filterMinmaxSingleComponentFormats;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setFilterMinmaxSingleComponentFormats(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->filterMinmaxSingleComponentFormats = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFilterMinmaxImageComponentMapping(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->filterMinmaxImageComponentMapping;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setFilterMinmaxImageComponentMapping(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->filterMinmaxImageComponentMapping = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getMaxTimelineSemaphoreValueDifference(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxTimelineSemaphoreValueDifference;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxTimelineSemaphoreValueDifference(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxTimelineSemaphoreValueDifference = $cValue;
    }

    /**
     * void* /
     */
    public function getFramebufferIntegerColorSampleCounts(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->framebufferIntegerColorSampleCounts;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setFramebufferIntegerColorSampleCounts(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->framebufferIntegerColorSampleCounts = $cValue;
    }
}
