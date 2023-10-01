<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkGeneratedCommandsInfoNV
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
        $self = new self( $vulkan->ffi->new('VkGeneratedCommandsInfoNV', false), $vulkan->ffi);
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
     * VkPipelineBindPoint/
     */
    public function getPipelineBindPoint(): \iggyvolz\vulkan\enum\VkPipelineBindPoint
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pipelineBindPoint;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineBindPoint::from($cValue);
        return $phpValue;
    }

    public function setPipelineBindPoint(\iggyvolz\vulkan\enum\VkPipelineBindPoint $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->pipelineBindPoint = $cValue;
    }

    /**
     * VkPipeline/
     */
    public function getPipeline(): VkPipeline
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pipeline;
        $phpValue = new \iggyvolz\vulkan\struct\VkPipeline($cValue, $ffi);
        return $phpValue;
    }

    public function setPipeline(VkPipeline $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pipeline = $cValue;
    }

    /**
     * VkIndirectCommandsLayoutNV/
     */
    public function getIndirectCommandsLayout(): VkIndirectCommandsLayoutNV
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->indirectCommandsLayout;
        $phpValue = new \iggyvolz\vulkan\struct\VkIndirectCommandsLayoutNV($cValue, $ffi);
        return $phpValue;
    }

    public function setIndirectCommandsLayout(VkIndirectCommandsLayoutNV $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->indirectCommandsLayout = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStreamCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->streamCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStreamCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->streamCount = $cValue;
    }

    /**
     * VkIndirectCommandsStreamNV* /
     */
    public function getPStreams(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pStreams;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkIndirectCommandsStreamNV', $cValue, $ffi);
        return $phpValue;
    }

    public function setPStreams(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pStreams = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSequencesCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->sequencesCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSequencesCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->sequencesCount = $cValue;
    }

    /**
     * VkBuffer/
     */
    public function getPreprocessBuffer(): VkBuffer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->preprocessBuffer;
        $phpValue = new \iggyvolz\vulkan\struct\VkBuffer($cValue, $ffi);
        return $phpValue;
    }

    public function setPreprocessBuffer(VkBuffer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->preprocessBuffer = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getPreprocessOffset(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->preprocessOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPreprocessOffset(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->preprocessOffset = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getPreprocessSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->preprocessSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPreprocessSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->preprocessSize = $cValue;
    }

    /**
     * VkBuffer/
     */
    public function getSequencesCountBuffer(): VkBuffer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->sequencesCountBuffer;
        $phpValue = new \iggyvolz\vulkan\struct\VkBuffer($cValue, $ffi);
        return $phpValue;
    }

    public function setSequencesCountBuffer(VkBuffer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->sequencesCountBuffer = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getSequencesCountOffset(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->sequencesCountOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSequencesCountOffset(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->sequencesCountOffset = $cValue;
    }

    /**
     * VkBuffer/
     */
    public function getSequencesIndexBuffer(): VkBuffer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->sequencesIndexBuffer;
        $phpValue = new \iggyvolz\vulkan\struct\VkBuffer($cValue, $ffi);
        return $phpValue;
    }

    public function setSequencesIndexBuffer(VkBuffer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->sequencesIndexBuffer = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getSequencesIndexOffset(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->sequencesIndexOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSequencesIndexOffset(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->sequencesIndexOffset = $cValue;
    }
}
