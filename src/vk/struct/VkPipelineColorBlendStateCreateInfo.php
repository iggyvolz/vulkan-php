<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineColorBlendStateCreateInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "logicOpEnable" => $this->getLogicOpEnable(),
          "logicOp" => $this->getLogicOp(),
          "attachmentCount" => $this->getAttachmentCount(),
          "pAttachments" => $this->getPAttachments(),
          "blendConstants" => $this->getBlendConstants(),
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
        null|array $flags = null,
        null|bool $logicOpEnable = null,
        null|\iggyvolz\vulkan\enum\VkLogicOp $logicOp = null,
        null|int $attachmentCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pAttachments = null,
        null|array $blendConstants = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineColorBlendStateCreateInfo', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($logicOpEnable)) $self->setLogicOpEnable($logicOpEnable);
        if(!is_null($logicOp)) $self->setLogicOp($logicOp);
        if(!is_null($attachmentCount)) $self->setAttachmentCount($attachmentCount);
        if(!is_null($pAttachments)) $self->setPAttachments($pAttachments);
        if(!is_null($blendConstants)) $self->setBlendConstants($blendConstants);
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
     * VkPipelineColorBlendStateCreateFlags/
     */
    public function getFlags(): array
    {
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineColorBlendStateCreateFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkPipelineColorBlendStateCreateFlagBits::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getLogicOpEnable(): bool
    {
        $cValue = $this->cdata->logicOpEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setLogicOpEnable(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->logicOpEnable = $cValue;
    }

    /**
     * VkLogicOp/
     */
    public function getLogicOp(): \iggyvolz\vulkan\enum\VkLogicOp
    {
        $cValue = $this->cdata->logicOp;
        $phpValue = \iggyvolz\vulkan\enum\VkLogicOp::from($cValue);
        return $phpValue;
    }

    public function setLogicOp(\iggyvolz\vulkan\enum\VkLogicOp $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->logicOp = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getAttachmentCount(): int
    {
        $cValue = $this->cdata->attachmentCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setAttachmentCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->attachmentCount = $cValue;
    }

    /**
     * VkPipelineColorBlendAttachmentState* /
     */
    public function getPAttachments(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pAttachments;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkPipelineColorBlendAttachmentState', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPAttachments(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pAttachments = $cValue;
    }

    /**
     * float/[4]
     */
    public function getBlendConstants(): array
    {
        $cValue = $this->cdata->blendConstants;
        $phpValue = [$cValue[0],$cValue[1],$cValue[2],$cValue[3],$cValue[4]];
        return $phpValue;
    }

    public function setBlendConstants(array $phpValue): void
    {
        $cValue[0] = $phpValue[0];
        $cValue[1] = $phpValue[1];
        $cValue[2] = $phpValue[2];
        $cValue[3] = $phpValue[3];
        $cValue[4] = $phpValue[4];
        $this->cdata->blendConstants = $cValue;
    }
}
