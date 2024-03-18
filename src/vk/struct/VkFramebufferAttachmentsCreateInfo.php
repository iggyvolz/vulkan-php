<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkFramebufferAttachmentsCreateInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "attachmentImageInfoCount" => $this->getAttachmentImageInfoCount(),
          "pAttachmentImageInfos" => $this->getPAttachmentImageInfos(),
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
        null|int $attachmentImageInfoCount = null,
        null|\iggyvolz\vulkan\util\Pointer $pAttachmentImageInfos = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkFramebufferAttachmentsCreateInfo', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($attachmentImageInfoCount)) $self->setAttachmentImageInfoCount($attachmentImageInfoCount);
        if(!is_null($pAttachmentImageInfos)) $self->setPAttachmentImageInfos($pAttachmentImageInfos);
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
    public function getAttachmentImageInfoCount(): int
    {
        $cValue = $this->cdata->attachmentImageInfoCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setAttachmentImageInfoCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->attachmentImageInfoCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPAttachmentImageInfos(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pAttachmentImageInfos;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPAttachmentImageInfos(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pAttachmentImageInfos = $cValue;
    }
}
