<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkAttachmentReference
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
        null|int $attachment = null,
        null|\iggyvolz\vulkan\enum\VkImageLayout $layout = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkAttachmentReference', false), $vulkan->ffi);
        if(!is_null($attachment)) $self->setAttachment($attachment);
        if(!is_null($layout)) $self->setLayout($layout);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getAttachment(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->attachment;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setAttachment(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->attachment = $cValue;
    }

    /**
     * VkImageLayout/
     */
    public function getLayout(): \iggyvolz\vulkan\enum\VkImageLayout
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->layout;
        $phpValue = \iggyvolz\vulkan\enum\VkImageLayout::from($cValue);
        return $phpValue;
    }

    public function setLayout(\iggyvolz\vulkan\enum\VkImageLayout $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->layout = $cValue;
    }
}
