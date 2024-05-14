<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkRenderPassAttachmentBeginInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "attachmentCount" => $this->getAttachmentCount(),
          "pAttachments" => $this->getPAttachments(),
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
        null|int $attachmentCount = null,
        null|VkImageView $pAttachments = null,
    ): self {
        $self = new self( $ffi->new('VkRenderPassAttachmentBeginInfo', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($attachmentCount)) $self->setAttachmentCount($attachmentCount);
        if(!is_null($pAttachments)) $self->setPAttachments($pAttachments);
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
     * VkImageView* /
     */
    public function getPAttachments(): VkImageView
    {
        $cValue = $this->cdata->pAttachments;
        $phpValue = new \iggyvolz\vulkan\struct\VkImageView($cValue);
        return $phpValue;
    }

    public function setPAttachments(VkImageView $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pAttachments = $cValue;
    }
}
