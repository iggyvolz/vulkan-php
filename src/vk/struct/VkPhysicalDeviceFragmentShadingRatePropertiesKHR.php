<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceFragmentShadingRatePropertiesKHR
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
        null|VkExtent2D $minFragmentShadingRateAttachmentTexelSize = null,
        null|VkExtent2D $maxFragmentShadingRateAttachmentTexelSize = null,
        null|int $maxFragmentShadingRateAttachmentTexelSizeAspectRatio = null,
        null|bool $primitiveFragmentShadingRateWithMultipleViewports = null,
        null|bool $layeredShadingRateAttachments = null,
        null|bool $fragmentShadingRateNonTrivialCombinerOps = null,
        null|VkExtent2D $maxFragmentSize = null,
        null|int $maxFragmentSizeAspectRatio = null,
        null|int $maxFragmentShadingRateCoverageSamples = null,
        null|\iggyvolz\vulkan\enum\VkSampleCountFlagBits $maxFragmentShadingRateRasterizationSamples = null,
        null|bool $fragmentShadingRateWithShaderDepthStencilWrites = null,
        null|bool $fragmentShadingRateWithSampleMask = null,
        null|bool $fragmentShadingRateWithShaderSampleMask = null,
        null|bool $fragmentShadingRateWithConservativeRasterization = null,
        null|bool $fragmentShadingRateWithFragmentShaderInterlock = null,
        null|bool $fragmentShadingRateWithCustomSampleLocations = null,
        null|bool $fragmentShadingRateStrictMultiplyCombiner = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceFragmentShadingRatePropertiesKHR', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($minFragmentShadingRateAttachmentTexelSize)) $self->setMinFragmentShadingRateAttachmentTexelSize($minFragmentShadingRateAttachmentTexelSize);
        if(!is_null($maxFragmentShadingRateAttachmentTexelSize)) $self->setMaxFragmentShadingRateAttachmentTexelSize($maxFragmentShadingRateAttachmentTexelSize);
        if(!is_null($maxFragmentShadingRateAttachmentTexelSizeAspectRatio)) $self->setMaxFragmentShadingRateAttachmentTexelSizeAspectRatio($maxFragmentShadingRateAttachmentTexelSizeAspectRatio);
        if(!is_null($primitiveFragmentShadingRateWithMultipleViewports)) $self->setPrimitiveFragmentShadingRateWithMultipleViewports($primitiveFragmentShadingRateWithMultipleViewports);
        if(!is_null($layeredShadingRateAttachments)) $self->setLayeredShadingRateAttachments($layeredShadingRateAttachments);
        if(!is_null($fragmentShadingRateNonTrivialCombinerOps)) $self->setFragmentShadingRateNonTrivialCombinerOps($fragmentShadingRateNonTrivialCombinerOps);
        if(!is_null($maxFragmentSize)) $self->setMaxFragmentSize($maxFragmentSize);
        if(!is_null($maxFragmentSizeAspectRatio)) $self->setMaxFragmentSizeAspectRatio($maxFragmentSizeAspectRatio);
        if(!is_null($maxFragmentShadingRateCoverageSamples)) $self->setMaxFragmentShadingRateCoverageSamples($maxFragmentShadingRateCoverageSamples);
        if(!is_null($maxFragmentShadingRateRasterizationSamples)) $self->setMaxFragmentShadingRateRasterizationSamples($maxFragmentShadingRateRasterizationSamples);
        if(!is_null($fragmentShadingRateWithShaderDepthStencilWrites)) $self->setFragmentShadingRateWithShaderDepthStencilWrites($fragmentShadingRateWithShaderDepthStencilWrites);
        if(!is_null($fragmentShadingRateWithSampleMask)) $self->setFragmentShadingRateWithSampleMask($fragmentShadingRateWithSampleMask);
        if(!is_null($fragmentShadingRateWithShaderSampleMask)) $self->setFragmentShadingRateWithShaderSampleMask($fragmentShadingRateWithShaderSampleMask);
        if(!is_null($fragmentShadingRateWithConservativeRasterization)) $self->setFragmentShadingRateWithConservativeRasterization($fragmentShadingRateWithConservativeRasterization);
        if(!is_null($fragmentShadingRateWithFragmentShaderInterlock)) $self->setFragmentShadingRateWithFragmentShaderInterlock($fragmentShadingRateWithFragmentShaderInterlock);
        if(!is_null($fragmentShadingRateWithCustomSampleLocations)) $self->setFragmentShadingRateWithCustomSampleLocations($fragmentShadingRateWithCustomSampleLocations);
        if(!is_null($fragmentShadingRateStrictMultiplyCombiner)) $self->setFragmentShadingRateStrictMultiplyCombiner($fragmentShadingRateStrictMultiplyCombiner);
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
     * VkExtent2D/
     */
    public function getMinFragmentShadingRateAttachmentTexelSize(): VkExtent2D
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->minFragmentShadingRateAttachmentTexelSize;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setMinFragmentShadingRateAttachmentTexelSize(VkExtent2D $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->minFragmentShadingRateAttachmentTexelSize = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getMaxFragmentShadingRateAttachmentTexelSize(): VkExtent2D
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxFragmentShadingRateAttachmentTexelSize;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setMaxFragmentShadingRateAttachmentTexelSize(VkExtent2D $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->maxFragmentShadingRateAttachmentTexelSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxFragmentShadingRateAttachmentTexelSizeAspectRatio(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxFragmentShadingRateAttachmentTexelSizeAspectRatio;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxFragmentShadingRateAttachmentTexelSizeAspectRatio(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxFragmentShadingRateAttachmentTexelSizeAspectRatio = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPrimitiveFragmentShadingRateWithMultipleViewports(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->primitiveFragmentShadingRateWithMultipleViewports;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setPrimitiveFragmentShadingRateWithMultipleViewports(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->primitiveFragmentShadingRateWithMultipleViewports = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getLayeredShadingRateAttachments(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->layeredShadingRateAttachments;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setLayeredShadingRateAttachments(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->layeredShadingRateAttachments = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFragmentShadingRateNonTrivialCombinerOps(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->fragmentShadingRateNonTrivialCombinerOps;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setFragmentShadingRateNonTrivialCombinerOps(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->fragmentShadingRateNonTrivialCombinerOps = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getMaxFragmentSize(): VkExtent2D
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxFragmentSize;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setMaxFragmentSize(VkExtent2D $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->maxFragmentSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxFragmentSizeAspectRatio(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxFragmentSizeAspectRatio;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxFragmentSizeAspectRatio(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxFragmentSizeAspectRatio = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxFragmentShadingRateCoverageSamples(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxFragmentShadingRateCoverageSamples;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxFragmentShadingRateCoverageSamples(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxFragmentShadingRateCoverageSamples = $cValue;
    }

    /**
     * VkSampleCountFlagBits/
     */
    public function getMaxFragmentShadingRateRasterizationSamples(): \iggyvolz\vulkan\enum\VkSampleCountFlagBits
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxFragmentShadingRateRasterizationSamples;
        $phpValue = \iggyvolz\vulkan\enum\VkSampleCountFlagBits::from($cValue);
        return $phpValue;
    }

    public function setMaxFragmentShadingRateRasterizationSamples(
        \iggyvolz\vulkan\enum\VkSampleCountFlagBits $phpValue,
    ): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->maxFragmentShadingRateRasterizationSamples = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFragmentShadingRateWithShaderDepthStencilWrites(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->fragmentShadingRateWithShaderDepthStencilWrites;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setFragmentShadingRateWithShaderDepthStencilWrites(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->fragmentShadingRateWithShaderDepthStencilWrites = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFragmentShadingRateWithSampleMask(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->fragmentShadingRateWithSampleMask;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setFragmentShadingRateWithSampleMask(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->fragmentShadingRateWithSampleMask = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFragmentShadingRateWithShaderSampleMask(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->fragmentShadingRateWithShaderSampleMask;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setFragmentShadingRateWithShaderSampleMask(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->fragmentShadingRateWithShaderSampleMask = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFragmentShadingRateWithConservativeRasterization(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->fragmentShadingRateWithConservativeRasterization;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setFragmentShadingRateWithConservativeRasterization(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->fragmentShadingRateWithConservativeRasterization = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFragmentShadingRateWithFragmentShaderInterlock(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->fragmentShadingRateWithFragmentShaderInterlock;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setFragmentShadingRateWithFragmentShaderInterlock(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->fragmentShadingRateWithFragmentShaderInterlock = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFragmentShadingRateWithCustomSampleLocations(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->fragmentShadingRateWithCustomSampleLocations;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setFragmentShadingRateWithCustomSampleLocations(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->fragmentShadingRateWithCustomSampleLocations = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFragmentShadingRateStrictMultiplyCombiner(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->fragmentShadingRateStrictMultiplyCombiner;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setFragmentShadingRateStrictMultiplyCombiner(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->fragmentShadingRateStrictMultiplyCombiner = $cValue;
    }
}
