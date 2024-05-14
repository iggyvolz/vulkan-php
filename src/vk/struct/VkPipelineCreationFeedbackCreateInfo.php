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
    ) {
    }

    public static function create(
        \FFI $ffi,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        mixed $pPipelineCreationFeedback = null,
        null|int $pipelineStageCreationFeedbackCount = null,
        mixed $pPipelineStageCreationFeedbacks = null,
    ): self {
        $self = new self( $ffi->new('VkPipelineCreationFeedbackCreateInfo', false));
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
     * void* /
     */
    public function getPPipelineCreationFeedback(): mixed
    {
        $cValue = $this->cdata->pPipelineCreationFeedback;
        throw new \LogicException("Dummy transformer - VkPipelineCreationFeedback*!");
        return $phpValue;
    }

    public function setPPipelineCreationFeedback(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer - VkPipelineCreationFeedback*!");
        $this->cdata->pPipelineCreationFeedback = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPipelineStageCreationFeedbackCount(): int
    {
        $cValue = $this->cdata->pipelineStageCreationFeedbackCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPipelineStageCreationFeedbackCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->pipelineStageCreationFeedbackCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPPipelineStageCreationFeedbacks(): mixed
    {
        $cValue = $this->cdata->pPipelineStageCreationFeedbacks;
        throw new \LogicException("Dummy transformer - VkPipelineCreationFeedback*!");
        return $phpValue;
    }

    public function setPPipelineStageCreationFeedbacks(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer - VkPipelineCreationFeedback*!");
        $this->cdata->pPipelineStageCreationFeedbacks = $cValue;
    }
}
