<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkGeneratedCommandsMemoryRequirementsInfoNV implements \JsonSerializable
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
          "maxSequencesCount" => $this->getMaxSequencesCount(),
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
        null|int $maxSequencesCount = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkGeneratedCommandsMemoryRequirementsInfoNV', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($pipelineBindPoint)) $self->setPipelineBindPoint($pipelineBindPoint);
        if(!is_null($pipeline)) $self->setPipeline($pipeline);
        if(!is_null($indirectCommandsLayout)) $self->setIndirectCommandsLayout($indirectCommandsLayout);
        if(!is_null($maxSequencesCount)) $self->setMaxSequencesCount($maxSequencesCount);
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
    public function getMaxSequencesCount(): int
    {
        $cValue = $this->cdata->maxSequencesCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxSequencesCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxSequencesCount = $cValue;
    }
}
