<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineCacheHeaderVersionSafetyCriticalOne implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "headerVersionOne" => $this->getHeaderVersionOne(),
          "validationVersion" => $this->getValidationVersion(),
          "implementationData" => $this->getImplementationData(),
          "pipelineIndexCount" => $this->getPipelineIndexCount(),
          "pipelineIndexStride" => $this->getPipelineIndexStride(),
          "pipelineIndexOffset" => $this->getPipelineIndexOffset(),
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
        null|VkPipelineCacheHeaderVersionOne $headerVersionOne = null,
        null|\iggyvolz\vulkan\enum\VkPipelineCacheValidationVersion $validationVersion = null,
        null|int $implementationData = null,
        null|int $pipelineIndexCount = null,
        null|int $pipelineIndexStride = null,
        null|int $pipelineIndexOffset = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineCacheHeaderVersionSafetyCriticalOne', false), $vulkan);
        if(!is_null($headerVersionOne)) $self->setHeaderVersionOne($headerVersionOne);
        if(!is_null($validationVersion)) $self->setValidationVersion($validationVersion);
        if(!is_null($implementationData)) $self->setImplementationData($implementationData);
        if(!is_null($pipelineIndexCount)) $self->setPipelineIndexCount($pipelineIndexCount);
        if(!is_null($pipelineIndexStride)) $self->setPipelineIndexStride($pipelineIndexStride);
        if(!is_null($pipelineIndexOffset)) $self->setPipelineIndexOffset($pipelineIndexOffset);
        return $self;
    }

    /**
     * VkPipelineCacheHeaderVersionOne/
     */
    public function getHeaderVersionOne(): VkPipelineCacheHeaderVersionOne
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->headerVersionOne;
        $phpValue = new \iggyvolz\vulkan\struct\VkPipelineCacheHeaderVersionOne($cValue, $ffi);
        return $phpValue;
    }

    public function setHeaderVersionOne(VkPipelineCacheHeaderVersionOne $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->headerVersionOne = $cValue;
    }

    /**
     * VkPipelineCacheValidationVersion/
     */
    public function getValidationVersion(): \iggyvolz\vulkan\enum\VkPipelineCacheValidationVersion
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->validationVersion;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineCacheValidationVersion::from($cValue);
        return $phpValue;
    }

    public function setValidationVersion(\iggyvolz\vulkan\enum\VkPipelineCacheValidationVersion $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->validationVersion = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getImplementationData(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->implementationData;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setImplementationData(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->implementationData = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPipelineIndexCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pipelineIndexCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPipelineIndexCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->pipelineIndexCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPipelineIndexStride(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pipelineIndexStride;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPipelineIndexStride(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->pipelineIndexStride = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getPipelineIndexOffset(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pipelineIndexOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPipelineIndexOffset(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->pipelineIndexOffset = $cValue;
    }
}
