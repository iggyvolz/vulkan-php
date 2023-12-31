<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceDescriptorBufferPropertiesEXT
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
        null|bool $combinedImageSamplerDescriptorSingleArray = null,
        null|bool $bufferlessPushDescriptors = null,
        null|bool $allowSamplerImageViewPostSubmitCreation = null,
        null|int $descriptorBufferOffsetAlignment = null,
        null|int $maxDescriptorBufferBindings = null,
        null|int $maxResourceDescriptorBufferBindings = null,
        null|int $maxSamplerDescriptorBufferBindings = null,
        null|int $maxEmbeddedImmutableSamplerBindings = null,
        null|int $maxEmbeddedImmutableSamplers = null,
        null|int $bufferCaptureReplayDescriptorDataSize = null,
        null|int $imageCaptureReplayDescriptorDataSize = null,
        null|int $imageViewCaptureReplayDescriptorDataSize = null,
        null|int $samplerCaptureReplayDescriptorDataSize = null,
        null|int $accelerationStructureCaptureReplayDescriptorDataSize = null,
        null|int $samplerDescriptorSize = null,
        null|int $combinedImageSamplerDescriptorSize = null,
        null|int $sampledImageDescriptorSize = null,
        null|int $storageImageDescriptorSize = null,
        null|int $uniformTexelBufferDescriptorSize = null,
        null|int $robustUniformTexelBufferDescriptorSize = null,
        null|int $storageTexelBufferDescriptorSize = null,
        null|int $robustStorageTexelBufferDescriptorSize = null,
        null|int $uniformBufferDescriptorSize = null,
        null|int $robustUniformBufferDescriptorSize = null,
        null|int $storageBufferDescriptorSize = null,
        null|int $robustStorageBufferDescriptorSize = null,
        null|int $inputAttachmentDescriptorSize = null,
        null|int $accelerationStructureDescriptorSize = null,
        null|int $maxSamplerDescriptorBufferRange = null,
        null|int $maxResourceDescriptorBufferRange = null,
        null|int $samplerDescriptorBufferAddressSpaceSize = null,
        null|int $resourceDescriptorBufferAddressSpaceSize = null,
        null|int $descriptorBufferAddressSpaceSize = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceDescriptorBufferPropertiesEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($combinedImageSamplerDescriptorSingleArray)) $self->setCombinedImageSamplerDescriptorSingleArray($combinedImageSamplerDescriptorSingleArray);
        if(!is_null($bufferlessPushDescriptors)) $self->setBufferlessPushDescriptors($bufferlessPushDescriptors);
        if(!is_null($allowSamplerImageViewPostSubmitCreation)) $self->setAllowSamplerImageViewPostSubmitCreation($allowSamplerImageViewPostSubmitCreation);
        if(!is_null($descriptorBufferOffsetAlignment)) $self->setDescriptorBufferOffsetAlignment($descriptorBufferOffsetAlignment);
        if(!is_null($maxDescriptorBufferBindings)) $self->setMaxDescriptorBufferBindings($maxDescriptorBufferBindings);
        if(!is_null($maxResourceDescriptorBufferBindings)) $self->setMaxResourceDescriptorBufferBindings($maxResourceDescriptorBufferBindings);
        if(!is_null($maxSamplerDescriptorBufferBindings)) $self->setMaxSamplerDescriptorBufferBindings($maxSamplerDescriptorBufferBindings);
        if(!is_null($maxEmbeddedImmutableSamplerBindings)) $self->setMaxEmbeddedImmutableSamplerBindings($maxEmbeddedImmutableSamplerBindings);
        if(!is_null($maxEmbeddedImmutableSamplers)) $self->setMaxEmbeddedImmutableSamplers($maxEmbeddedImmutableSamplers);
        if(!is_null($bufferCaptureReplayDescriptorDataSize)) $self->setBufferCaptureReplayDescriptorDataSize($bufferCaptureReplayDescriptorDataSize);
        if(!is_null($imageCaptureReplayDescriptorDataSize)) $self->setImageCaptureReplayDescriptorDataSize($imageCaptureReplayDescriptorDataSize);
        if(!is_null($imageViewCaptureReplayDescriptorDataSize)) $self->setImageViewCaptureReplayDescriptorDataSize($imageViewCaptureReplayDescriptorDataSize);
        if(!is_null($samplerCaptureReplayDescriptorDataSize)) $self->setSamplerCaptureReplayDescriptorDataSize($samplerCaptureReplayDescriptorDataSize);
        if(!is_null($accelerationStructureCaptureReplayDescriptorDataSize)) $self->setAccelerationStructureCaptureReplayDescriptorDataSize($accelerationStructureCaptureReplayDescriptorDataSize);
        if(!is_null($samplerDescriptorSize)) $self->setSamplerDescriptorSize($samplerDescriptorSize);
        if(!is_null($combinedImageSamplerDescriptorSize)) $self->setCombinedImageSamplerDescriptorSize($combinedImageSamplerDescriptorSize);
        if(!is_null($sampledImageDescriptorSize)) $self->setSampledImageDescriptorSize($sampledImageDescriptorSize);
        if(!is_null($storageImageDescriptorSize)) $self->setStorageImageDescriptorSize($storageImageDescriptorSize);
        if(!is_null($uniformTexelBufferDescriptorSize)) $self->setUniformTexelBufferDescriptorSize($uniformTexelBufferDescriptorSize);
        if(!is_null($robustUniformTexelBufferDescriptorSize)) $self->setRobustUniformTexelBufferDescriptorSize($robustUniformTexelBufferDescriptorSize);
        if(!is_null($storageTexelBufferDescriptorSize)) $self->setStorageTexelBufferDescriptorSize($storageTexelBufferDescriptorSize);
        if(!is_null($robustStorageTexelBufferDescriptorSize)) $self->setRobustStorageTexelBufferDescriptorSize($robustStorageTexelBufferDescriptorSize);
        if(!is_null($uniformBufferDescriptorSize)) $self->setUniformBufferDescriptorSize($uniformBufferDescriptorSize);
        if(!is_null($robustUniformBufferDescriptorSize)) $self->setRobustUniformBufferDescriptorSize($robustUniformBufferDescriptorSize);
        if(!is_null($storageBufferDescriptorSize)) $self->setStorageBufferDescriptorSize($storageBufferDescriptorSize);
        if(!is_null($robustStorageBufferDescriptorSize)) $self->setRobustStorageBufferDescriptorSize($robustStorageBufferDescriptorSize);
        if(!is_null($inputAttachmentDescriptorSize)) $self->setInputAttachmentDescriptorSize($inputAttachmentDescriptorSize);
        if(!is_null($accelerationStructureDescriptorSize)) $self->setAccelerationStructureDescriptorSize($accelerationStructureDescriptorSize);
        if(!is_null($maxSamplerDescriptorBufferRange)) $self->setMaxSamplerDescriptorBufferRange($maxSamplerDescriptorBufferRange);
        if(!is_null($maxResourceDescriptorBufferRange)) $self->setMaxResourceDescriptorBufferRange($maxResourceDescriptorBufferRange);
        if(!is_null($samplerDescriptorBufferAddressSpaceSize)) $self->setSamplerDescriptorBufferAddressSpaceSize($samplerDescriptorBufferAddressSpaceSize);
        if(!is_null($resourceDescriptorBufferAddressSpaceSize)) $self->setResourceDescriptorBufferAddressSpaceSize($resourceDescriptorBufferAddressSpaceSize);
        if(!is_null($descriptorBufferAddressSpaceSize)) $self->setDescriptorBufferAddressSpaceSize($descriptorBufferAddressSpaceSize);
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
    public function getCombinedImageSamplerDescriptorSingleArray(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->combinedImageSamplerDescriptorSingleArray;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setCombinedImageSamplerDescriptorSingleArray(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->combinedImageSamplerDescriptorSingleArray = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBufferlessPushDescriptors(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->bufferlessPushDescriptors;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setBufferlessPushDescriptors(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->bufferlessPushDescriptors = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getAllowSamplerImageViewPostSubmitCreation(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->allowSamplerImageViewPostSubmitCreation;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setAllowSamplerImageViewPostSubmitCreation(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->allowSamplerImageViewPostSubmitCreation = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getDescriptorBufferOffsetAlignment(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->descriptorBufferOffsetAlignment;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDescriptorBufferOffsetAlignment(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->descriptorBufferOffsetAlignment = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDescriptorBufferBindings(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxDescriptorBufferBindings;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDescriptorBufferBindings(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDescriptorBufferBindings = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxResourceDescriptorBufferBindings(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxResourceDescriptorBufferBindings;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxResourceDescriptorBufferBindings(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxResourceDescriptorBufferBindings = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxSamplerDescriptorBufferBindings(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxSamplerDescriptorBufferBindings;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxSamplerDescriptorBufferBindings(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxSamplerDescriptorBufferBindings = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxEmbeddedImmutableSamplerBindings(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxEmbeddedImmutableSamplerBindings;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxEmbeddedImmutableSamplerBindings(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxEmbeddedImmutableSamplerBindings = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxEmbeddedImmutableSamplers(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxEmbeddedImmutableSamplers;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxEmbeddedImmutableSamplers(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxEmbeddedImmutableSamplers = $cValue;
    }

    /**
     * size_t/
     */
    public function getBufferCaptureReplayDescriptorDataSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->bufferCaptureReplayDescriptorDataSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBufferCaptureReplayDescriptorDataSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->bufferCaptureReplayDescriptorDataSize = $cValue;
    }

    /**
     * size_t/
     */
    public function getImageCaptureReplayDescriptorDataSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->imageCaptureReplayDescriptorDataSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setImageCaptureReplayDescriptorDataSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->imageCaptureReplayDescriptorDataSize = $cValue;
    }

    /**
     * size_t/
     */
    public function getImageViewCaptureReplayDescriptorDataSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->imageViewCaptureReplayDescriptorDataSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setImageViewCaptureReplayDescriptorDataSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->imageViewCaptureReplayDescriptorDataSize = $cValue;
    }

    /**
     * size_t/
     */
    public function getSamplerCaptureReplayDescriptorDataSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->samplerCaptureReplayDescriptorDataSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSamplerCaptureReplayDescriptorDataSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->samplerCaptureReplayDescriptorDataSize = $cValue;
    }

    /**
     * size_t/
     */
    public function getAccelerationStructureCaptureReplayDescriptorDataSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->accelerationStructureCaptureReplayDescriptorDataSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setAccelerationStructureCaptureReplayDescriptorDataSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->accelerationStructureCaptureReplayDescriptorDataSize = $cValue;
    }

    /**
     * size_t/
     */
    public function getSamplerDescriptorSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->samplerDescriptorSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSamplerDescriptorSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->samplerDescriptorSize = $cValue;
    }

    /**
     * size_t/
     */
    public function getCombinedImageSamplerDescriptorSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->combinedImageSamplerDescriptorSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCombinedImageSamplerDescriptorSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->combinedImageSamplerDescriptorSize = $cValue;
    }

    /**
     * size_t/
     */
    public function getSampledImageDescriptorSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->sampledImageDescriptorSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSampledImageDescriptorSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->sampledImageDescriptorSize = $cValue;
    }

    /**
     * size_t/
     */
    public function getStorageImageDescriptorSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->storageImageDescriptorSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStorageImageDescriptorSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->storageImageDescriptorSize = $cValue;
    }

    /**
     * size_t/
     */
    public function getUniformTexelBufferDescriptorSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->uniformTexelBufferDescriptorSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setUniformTexelBufferDescriptorSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->uniformTexelBufferDescriptorSize = $cValue;
    }

    /**
     * size_t/
     */
    public function getRobustUniformTexelBufferDescriptorSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->robustUniformTexelBufferDescriptorSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setRobustUniformTexelBufferDescriptorSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->robustUniformTexelBufferDescriptorSize = $cValue;
    }

    /**
     * size_t/
     */
    public function getStorageTexelBufferDescriptorSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->storageTexelBufferDescriptorSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStorageTexelBufferDescriptorSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->storageTexelBufferDescriptorSize = $cValue;
    }

    /**
     * size_t/
     */
    public function getRobustStorageTexelBufferDescriptorSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->robustStorageTexelBufferDescriptorSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setRobustStorageTexelBufferDescriptorSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->robustStorageTexelBufferDescriptorSize = $cValue;
    }

    /**
     * size_t/
     */
    public function getUniformBufferDescriptorSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->uniformBufferDescriptorSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setUniformBufferDescriptorSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->uniformBufferDescriptorSize = $cValue;
    }

    /**
     * size_t/
     */
    public function getRobustUniformBufferDescriptorSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->robustUniformBufferDescriptorSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setRobustUniformBufferDescriptorSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->robustUniformBufferDescriptorSize = $cValue;
    }

    /**
     * size_t/
     */
    public function getStorageBufferDescriptorSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->storageBufferDescriptorSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStorageBufferDescriptorSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->storageBufferDescriptorSize = $cValue;
    }

    /**
     * size_t/
     */
    public function getRobustStorageBufferDescriptorSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->robustStorageBufferDescriptorSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setRobustStorageBufferDescriptorSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->robustStorageBufferDescriptorSize = $cValue;
    }

    /**
     * size_t/
     */
    public function getInputAttachmentDescriptorSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->inputAttachmentDescriptorSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setInputAttachmentDescriptorSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->inputAttachmentDescriptorSize = $cValue;
    }

    /**
     * size_t/
     */
    public function getAccelerationStructureDescriptorSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->accelerationStructureDescriptorSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setAccelerationStructureDescriptorSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->accelerationStructureDescriptorSize = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getMaxSamplerDescriptorBufferRange(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxSamplerDescriptorBufferRange;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxSamplerDescriptorBufferRange(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxSamplerDescriptorBufferRange = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getMaxResourceDescriptorBufferRange(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxResourceDescriptorBufferRange;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxResourceDescriptorBufferRange(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxResourceDescriptorBufferRange = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getSamplerDescriptorBufferAddressSpaceSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->samplerDescriptorBufferAddressSpaceSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSamplerDescriptorBufferAddressSpaceSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->samplerDescriptorBufferAddressSpaceSize = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getResourceDescriptorBufferAddressSpaceSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->resourceDescriptorBufferAddressSpaceSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setResourceDescriptorBufferAddressSpaceSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->resourceDescriptorBufferAddressSpaceSize = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getDescriptorBufferAddressSpaceSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->descriptorBufferAddressSpaceSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDescriptorBufferAddressSpaceSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->descriptorBufferAddressSpaceSize = $cValue;
    }
}
