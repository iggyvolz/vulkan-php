<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineCreationFeedbackCreateInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "pPipelineCreationFeedback" => $this->getPPipelineCreationFeedback(),
          "pipelineStageCreationFeedbackCount" => $this->getPipelineStageCreationFeedbackCount(),
          "pPipelineStageCreationFeedbacks" => $this->getPPipelineStageCreationFeedbacks(),
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
        null|\iggyvolz\vulkan\util\ObjectPointer $pPipelineCreationFeedback = null,
        null|int $pipelineStageCreationFeedbackCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pPipelineStageCreationFeedbacks = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineCreationFeedbackCreateInfo', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($pPipelineCreationFeedback)) $self->setPPipelineCreationFeedback($pPipelineCreationFeedback);
        if(!is_null($pipelineStageCreationFeedbackCount)) $self->setPipelineStageCreationFeedbackCount($pipelineStageCreationFeedbackCount);
        if(!is_null($pPipelineStageCreationFeedbacks)) $self->setPPipelineStageCreationFeedbacks($pPipelineStageCreationFeedbacks);
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
     * VkPipelineCreationFeedback* /
     */
    public function getPPipelineCreationFeedback(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pPipelineCreationFeedback;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkPipelineCreationFeedback', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPPipelineCreationFeedback(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pPipelineCreationFeedback = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPipelineStageCreationFeedbackCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pipelineStageCreationFeedbackCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPipelineStageCreationFeedbackCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->pipelineStageCreationFeedbackCount = $cValue;
    }

    /**
     * VkPipelineCreationFeedback* /
     */
    public function getPPipelineStageCreationFeedbacks(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pPipelineStageCreationFeedbacks;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkPipelineCreationFeedback', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPPipelineStageCreationFeedbacks(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pPipelineStageCreationFeedbacks = $cValue;
    }
}
