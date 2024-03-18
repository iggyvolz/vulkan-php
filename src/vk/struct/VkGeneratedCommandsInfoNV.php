<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkGeneratedCommandsInfoNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "pipelineBindPoint" => $this->getPipelineBindPoint(),
          "pipeline" => $this->getPipeline(),
          "indirectCommandsLayout" => $this->getIndirectCommandsLayout(),
          "streamCount" => $this->getStreamCount(),
          "pStreams" => $this->getPStreams(),
          "sequencesCount" => $this->getSequencesCount(),
          "preprocessBuffer" => $this->getPreprocessBuffer(),
          "preprocessOffset" => $this->getPreprocessOffset(),
          "preprocessSize" => $this->getPreprocessSize(),
          "sequencesCountBuffer" => $this->getSequencesCountBuffer(),
          "sequencesCountOffset" => $this->getSequencesCountOffset(),
          "sequencesIndexBuffer" => $this->getSequencesIndexBuffer(),
          "sequencesIndexOffset" => $this->getSequencesIndexOffset(),
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
        null|\iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint = null,
        null|VkPipeline $pipeline = null,
        null|VkIndirectCommandsLayoutNV $indirectCommandsLayout = null,
        null|int $streamCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pStreams = null,
        null|int $sequencesCount = null,
        null|VkBuffer $preprocessBuffer = null,
        null|int $preprocessOffset = null,
        null|int $preprocessSize = null,
        null|VkBuffer $sequencesCountBuffer = null,
        null|int $sequencesCountOffset = null,
        null|VkBuffer $sequencesIndexBuffer = null,
        null|int $sequencesIndexOffset = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkGeneratedCommandsInfoNV', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($pipelineBindPoint)) $self->setPipelineBindPoint($pipelineBindPoint);
        if(!is_null($pipeline)) $self->setPipeline($pipeline);
        if(!is_null($indirectCommandsLayout)) $self->setIndirectCommandsLayout($indirectCommandsLayout);
        if(!is_null($streamCount)) $self->setStreamCount($streamCount);
        if(!is_null($pStreams)) $self->setPStreams($pStreams);
        if(!is_null($sequencesCount)) $self->setSequencesCount($sequencesCount);
        if(!is_null($preprocessBuffer)) $self->setPreprocessBuffer($preprocessBuffer);
        if(!is_null($preprocessOffset)) $self->setPreprocessOffset($preprocessOffset);
        if(!is_null($preprocessSize)) $self->setPreprocessSize($preprocessSize);
        if(!is_null($sequencesCountBuffer)) $self->setSequencesCountBuffer($sequencesCountBuffer);
        if(!is_null($sequencesCountOffset)) $self->setSequencesCountOffset($sequencesCountOffset);
        if(!is_null($sequencesIndexBuffer)) $self->setSequencesIndexBuffer($sequencesIndexBuffer);
        if(!is_null($sequencesIndexOffset)) $self->setSequencesIndexOffset($sequencesIndexOffset);
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
     * VkPipelineBindPoint/
     */
    public function getPipelineBindPoint(): \iggyvolz\vulkan\enum\VkPipelineBindPoint
    {
        $cValue = $this->cdata->pipelineBindPoint;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineBindPoint::from($cValue);
        return $phpValue;
    }

    public function setPipelineBindPoint(\iggyvolz\vulkan\enum\VkPipelineBindPoint $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->pipelineBindPoint = $cValue;
    }

    /**
     * VkPipeline/
     */
    public function getPipeline(): VkPipeline
    {
        $cValue = $this->cdata->pipeline;
        $phpValue = new \iggyvolz\vulkan\struct\VkPipeline($cValue, $ffi);
        return $phpValue;
    }

    public function setPipeline(VkPipeline $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pipeline = $cValue;
    }

    /**
     * VkIndirectCommandsLayoutNV/
     */
    public function getIndirectCommandsLayout(): VkIndirectCommandsLayoutNV
    {
        $cValue = $this->cdata->indirectCommandsLayout;
        $phpValue = new \iggyvolz\vulkan\struct\VkIndirectCommandsLayoutNV($cValue, $ffi);
        return $phpValue;
    }

    public function setIndirectCommandsLayout(VkIndirectCommandsLayoutNV $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->indirectCommandsLayout = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStreamCount(): int
    {
        $cValue = $this->cdata->streamCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStreamCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->streamCount = $cValue;
    }

    /**
     * VkIndirectCommandsStreamNV* /
     */
    public function getPStreams(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pStreams;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkIndirectCommandsStreamNV', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPStreams(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pStreams = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSequencesCount(): int
    {
        $cValue = $this->cdata->sequencesCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSequencesCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->sequencesCount = $cValue;
    }

    /**
     * VkBuffer/
     */
    public function getPreprocessBuffer(): VkBuffer
    {
        $cValue = $this->cdata->preprocessBuffer;
        $phpValue = new \iggyvolz\vulkan\struct\VkBuffer($cValue, $ffi);
        return $phpValue;
    }

    public function setPreprocessBuffer(VkBuffer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->preprocessBuffer = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getPreprocessOffset(): int
    {
        $cValue = $this->cdata->preprocessOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPreprocessOffset(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->preprocessOffset = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getPreprocessSize(): int
    {
        $cValue = $this->cdata->preprocessSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPreprocessSize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->preprocessSize = $cValue;
    }

    /**
     * VkBuffer/
     */
    public function getSequencesCountBuffer(): VkBuffer
    {
        $cValue = $this->cdata->sequencesCountBuffer;
        $phpValue = new \iggyvolz\vulkan\struct\VkBuffer($cValue, $ffi);
        return $phpValue;
    }

    public function setSequencesCountBuffer(VkBuffer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->sequencesCountBuffer = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getSequencesCountOffset(): int
    {
        $cValue = $this->cdata->sequencesCountOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSequencesCountOffset(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->sequencesCountOffset = $cValue;
    }

    /**
     * VkBuffer/
     */
    public function getSequencesIndexBuffer(): VkBuffer
    {
        $cValue = $this->cdata->sequencesIndexBuffer;
        $phpValue = new \iggyvolz\vulkan\struct\VkBuffer($cValue, $ffi);
        return $phpValue;
    }

    public function setSequencesIndexBuffer(VkBuffer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->sequencesIndexBuffer = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getSequencesIndexOffset(): int
    {
        $cValue = $this->cdata->sequencesIndexOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSequencesIndexOffset(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->sequencesIndexOffset = $cValue;
    }
}
