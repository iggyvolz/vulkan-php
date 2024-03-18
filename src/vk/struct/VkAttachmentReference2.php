<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkAttachmentReference2 implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "attachment" => $this->getAttachment(),
          "layout" => $this->getLayout(),
          "aspectMask" => $this->getAspectMask(),
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
        null|int $attachment = null,
        null|\iggyvolz\vulkan\enum\VkImageLayout $layout = null,
        null|array $aspectMask = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkAttachmentReference2', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($attachment)) $self->setAttachment($attachment);
        if(!is_null($layout)) $self->setLayout($layout);
        if(!is_null($aspectMask)) $self->setAspectMask($aspectMask);
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
    public function getAttachment(): int
    {
        $cValue = $this->cdata->attachment;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setAttachment(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->attachment = $cValue;
    }

    /**
     * VkImageLayout/
     */
    public function getLayout(): \iggyvolz\vulkan\enum\VkImageLayout
    {
        $cValue = $this->cdata->layout;
        $phpValue = \iggyvolz\vulkan\enum\VkImageLayout::from($cValue);
        return $phpValue;
    }

    public function setLayout(\iggyvolz\vulkan\enum\VkImageLayout $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->layout = $cValue;
    }

    /**
     * VkImageAspectFlags/
     */
    public function getAspectMask(): array
    {
        $cValue = $this->cdata->aspectMask;
        $phpValue = \iggyvolz\vulkan\enum\VkImageAspectFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setAspectMask(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkImageAspectFlagBits::toInt(...$phpValue);
        $this->cdata->aspectMask = $cValue;
    }
}
