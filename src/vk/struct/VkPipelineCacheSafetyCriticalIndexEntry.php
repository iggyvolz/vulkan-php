<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineCacheSafetyCriticalIndexEntry implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "pipelineIdentifier" => $this->getPipelineIdentifier(),
          "pipelineMemorySize" => $this->getPipelineMemorySize(),
          "jsonSize" => $this->getJsonSize(),
          "jsonOffset" => $this->getJsonOffset(),
          "stageIndexCount" => $this->getStageIndexCount(),
          "stageIndexStride" => $this->getStageIndexStride(),
          "stageIndexOffset" => $this->getStageIndexOffset(),
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
        null|string $pipelineIdentifier = null,
        null|int $pipelineMemorySize = null,
        null|int $jsonSize = null,
        null|int $jsonOffset = null,
        null|int $stageIndexCount = null,
        null|int $stageIndexStride = null,
        null|int $stageIndexOffset = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineCacheSafetyCriticalIndexEntry', false));
        if(!is_null($pipelineIdentifier)) $self->setPipelineIdentifier($pipelineIdentifier);
        if(!is_null($pipelineMemorySize)) $self->setPipelineMemorySize($pipelineMemorySize);
        if(!is_null($jsonSize)) $self->setJsonSize($jsonSize);
        if(!is_null($jsonOffset)) $self->setJsonOffset($jsonOffset);
        if(!is_null($stageIndexCount)) $self->setStageIndexCount($stageIndexCount);
        if(!is_null($stageIndexStride)) $self->setStageIndexStride($stageIndexStride);
        if(!is_null($stageIndexOffset)) $self->setStageIndexOffset($stageIndexOffset);
        return $self;
    }

    /**
     * char/[16]
     */
    public function getPipelineIdentifier(): string
    {
        $cValue = $this->cdata->pipelineIdentifier;
        $tempString = \FFI::string($cValue, 16); $phpValue = \substr($tempString, 0, \strpos($tempString, "\0"));
        return $phpValue;
    }

    public function setPipelineIdentifier(string $phpValue): void
    {
        \FFI::memcpy($cValue, $phpValue, 16);
        $this->cdata->pipelineIdentifier = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getPipelineMemorySize(): int
    {
        $cValue = $this->cdata->pipelineMemorySize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPipelineMemorySize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->pipelineMemorySize = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getJsonSize(): int
    {
        $cValue = $this->cdata->jsonSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setJsonSize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->jsonSize = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getJsonOffset(): int
    {
        $cValue = $this->cdata->jsonOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setJsonOffset(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->jsonOffset = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStageIndexCount(): int
    {
        $cValue = $this->cdata->stageIndexCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStageIndexCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->stageIndexCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStageIndexStride(): int
    {
        $cValue = $this->cdata->stageIndexStride;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStageIndexStride(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->stageIndexStride = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getStageIndexOffset(): int
    {
        $cValue = $this->cdata->stageIndexOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStageIndexOffset(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->stageIndexOffset = $cValue;
    }
}
