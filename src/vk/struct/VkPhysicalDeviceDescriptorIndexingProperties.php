<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceDescriptorIndexingProperties implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "maxUpdateAfterBindDescriptorsInAllPools" => $this->getMaxUpdateAfterBindDescriptorsInAllPools(),
          "shaderUniformBufferArrayNonUniformIndexingNative" => $this->getShaderUniformBufferArrayNonUniformIndexingNative(),
          "shaderSampledImageArrayNonUniformIndexingNative" => $this->getShaderSampledImageArrayNonUniformIndexingNative(),
          "shaderStorageBufferArrayNonUniformIndexingNative" => $this->getShaderStorageBufferArrayNonUniformIndexingNative(),
          "shaderStorageImageArrayNonUniformIndexingNative" => $this->getShaderStorageImageArrayNonUniformIndexingNative(),
          "shaderInputAttachmentArrayNonUniformIndexingNative" => $this->getShaderInputAttachmentArrayNonUniformIndexingNative(),
          "robustBufferAccessUpdateAfterBind" => $this->getRobustBufferAccessUpdateAfterBind(),
          "quadDivergentImplicitLod" => $this->getQuadDivergentImplicitLod(),
          "maxPerStageDescriptorUpdateAfterBindSamplers" => $this->getMaxPerStageDescriptorUpdateAfterBindSamplers(),
          "maxPerStageDescriptorUpdateAfterBindUniformBuffers" => $this->getMaxPerStageDescriptorUpdateAfterBindUniformBuffers(),
          "maxPerStageDescriptorUpdateAfterBindStorageBuffers" => $this->getMaxPerStageDescriptorUpdateAfterBindStorageBuffers(),
          "maxPerStageDescriptorUpdateAfterBindSampledImages" => $this->getMaxPerStageDescriptorUpdateAfterBindSampledImages(),
          "maxPerStageDescriptorUpdateAfterBindStorageImages" => $this->getMaxPerStageDescriptorUpdateAfterBindStorageImages(),
          "maxPerStageDescriptorUpdateAfterBindInputAttachments" => $this->getMaxPerStageDescriptorUpdateAfterBindInputAttachments(),
          "maxPerStageUpdateAfterBindResources" => $this->getMaxPerStageUpdateAfterBindResources(),
          "maxDescriptorSetUpdateAfterBindSamplers" => $this->getMaxDescriptorSetUpdateAfterBindSamplers(),
          "maxDescriptorSetUpdateAfterBindUniformBuffers" => $this->getMaxDescriptorSetUpdateAfterBindUniformBuffers(),
          "maxDescriptorSetUpdateAfterBindUniformBuffersDynamic" => $this->getMaxDescriptorSetUpdateAfterBindUniformBuffersDynamic(),
          "maxDescriptorSetUpdateAfterBindStorageBuffers" => $this->getMaxDescriptorSetUpdateAfterBindStorageBuffers(),
          "maxDescriptorSetUpdateAfterBindStorageBuffersDynamic" => $this->getMaxDescriptorSetUpdateAfterBindStorageBuffersDynamic(),
          "maxDescriptorSetUpdateAfterBindSampledImages" => $this->getMaxDescriptorSetUpdateAfterBindSampledImages(),
          "maxDescriptorSetUpdateAfterBindStorageImages" => $this->getMaxDescriptorSetUpdateAfterBindStorageImages(),
          "maxDescriptorSetUpdateAfterBindInputAttachments" => $this->getMaxDescriptorSetUpdateAfterBindInputAttachments(),
        ];
    }

    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \iggyvolz\vulkan\Vulkan $vulkan,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
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
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceDescriptorIndexingProperties', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
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
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxUpdateAfterBindDescriptorsInAllPools(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxUpdateAfterBindDescriptorsInAllPools;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxUpdateAfterBindDescriptorsInAllPools(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxUpdateAfterBindDescriptorsInAllPools = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderUniformBufferArrayNonUniformIndexingNative(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->shaderUniformBufferArrayNonUniformIndexingNative;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderUniformBufferArrayNonUniformIndexingNative(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderUniformBufferArrayNonUniformIndexingNative = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderSampledImageArrayNonUniformIndexingNative(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->shaderSampledImageArrayNonUniformIndexingNative;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderSampledImageArrayNonUniformIndexingNative(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderSampledImageArrayNonUniformIndexingNative = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderStorageBufferArrayNonUniformIndexingNative(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->shaderStorageBufferArrayNonUniformIndexingNative;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderStorageBufferArrayNonUniformIndexingNative(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderStorageBufferArrayNonUniformIndexingNative = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderStorageImageArrayNonUniformIndexingNative(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->shaderStorageImageArrayNonUniformIndexingNative;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderStorageImageArrayNonUniformIndexingNative(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderStorageImageArrayNonUniformIndexingNative = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderInputAttachmentArrayNonUniformIndexingNative(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->shaderInputAttachmentArrayNonUniformIndexingNative;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderInputAttachmentArrayNonUniformIndexingNative(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderInputAttachmentArrayNonUniformIndexingNative = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getRobustBufferAccessUpdateAfterBind(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->robustBufferAccessUpdateAfterBind;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setRobustBufferAccessUpdateAfterBind(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->robustBufferAccessUpdateAfterBind = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getQuadDivergentImplicitLod(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->quadDivergentImplicitLod;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setQuadDivergentImplicitLod(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->quadDivergentImplicitLod = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxPerStageDescriptorUpdateAfterBindSamplers(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxPerStageDescriptorUpdateAfterBindSamplers;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPerStageDescriptorUpdateAfterBindSamplers(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPerStageDescriptorUpdateAfterBindSamplers = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxPerStageDescriptorUpdateAfterBindUniformBuffers(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxPerStageDescriptorUpdateAfterBindUniformBuffers;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPerStageDescriptorUpdateAfterBindUniformBuffers(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPerStageDescriptorUpdateAfterBindUniformBuffers = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxPerStageDescriptorUpdateAfterBindStorageBuffers(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxPerStageDescriptorUpdateAfterBindStorageBuffers;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPerStageDescriptorUpdateAfterBindStorageBuffers(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPerStageDescriptorUpdateAfterBindStorageBuffers = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxPerStageDescriptorUpdateAfterBindSampledImages(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxPerStageDescriptorUpdateAfterBindSampledImages;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPerStageDescriptorUpdateAfterBindSampledImages(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPerStageDescriptorUpdateAfterBindSampledImages = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxPerStageDescriptorUpdateAfterBindStorageImages(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxPerStageDescriptorUpdateAfterBindStorageImages;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPerStageDescriptorUpdateAfterBindStorageImages(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPerStageDescriptorUpdateAfterBindStorageImages = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxPerStageDescriptorUpdateAfterBindInputAttachments(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxPerStageDescriptorUpdateAfterBindInputAttachments;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPerStageDescriptorUpdateAfterBindInputAttachments(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPerStageDescriptorUpdateAfterBindInputAttachments = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxPerStageUpdateAfterBindResources(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxPerStageUpdateAfterBindResources;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxPerStageUpdateAfterBindResources(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxPerStageUpdateAfterBindResources = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDescriptorSetUpdateAfterBindSamplers(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxDescriptorSetUpdateAfterBindSamplers;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDescriptorSetUpdateAfterBindSamplers(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDescriptorSetUpdateAfterBindSamplers = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDescriptorSetUpdateAfterBindUniformBuffers(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxDescriptorSetUpdateAfterBindUniformBuffers;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDescriptorSetUpdateAfterBindUniformBuffers(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDescriptorSetUpdateAfterBindUniformBuffers = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDescriptorSetUpdateAfterBindUniformBuffersDynamic(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxDescriptorSetUpdateAfterBindUniformBuffersDynamic;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDescriptorSetUpdateAfterBindUniformBuffersDynamic(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDescriptorSetUpdateAfterBindUniformBuffersDynamic = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDescriptorSetUpdateAfterBindStorageBuffers(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxDescriptorSetUpdateAfterBindStorageBuffers;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDescriptorSetUpdateAfterBindStorageBuffers(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDescriptorSetUpdateAfterBindStorageBuffers = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDescriptorSetUpdateAfterBindStorageBuffersDynamic(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxDescriptorSetUpdateAfterBindStorageBuffersDynamic;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDescriptorSetUpdateAfterBindStorageBuffersDynamic(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDescriptorSetUpdateAfterBindStorageBuffersDynamic = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDescriptorSetUpdateAfterBindSampledImages(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxDescriptorSetUpdateAfterBindSampledImages;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDescriptorSetUpdateAfterBindSampledImages(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDescriptorSetUpdateAfterBindSampledImages = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDescriptorSetUpdateAfterBindStorageImages(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxDescriptorSetUpdateAfterBindStorageImages;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDescriptorSetUpdateAfterBindStorageImages(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDescriptorSetUpdateAfterBindStorageImages = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDescriptorSetUpdateAfterBindInputAttachments(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxDescriptorSetUpdateAfterBindInputAttachments;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDescriptorSetUpdateAfterBindInputAttachments(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDescriptorSetUpdateAfterBindInputAttachments = $cValue;
    }
}
