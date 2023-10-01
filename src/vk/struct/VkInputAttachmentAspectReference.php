<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkInputAttachmentAspectReference
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
        null|int $subpass = null,
        null|int $inputAttachmentIndex = null,
        mixed $aspectMask = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkInputAttachmentAspectReference', false), $vulkan->ffi);
        if(!is_null($subpass)) $self->setSubpass($subpass);
        if(!is_null($inputAttachmentIndex)) $self->setInputAttachmentIndex($inputAttachmentIndex);
        if(!is_null($aspectMask)) $self->setAspectMask($aspectMask);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getSubpass(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->subpass;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSubpass(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->subpass = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getInputAttachmentIndex(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->inputAttachmentIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setInputAttachmentIndex(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->inputAttachmentIndex = $cValue;
    }

    /**
     * void* /
     */
    public function getAspectMask(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->aspectMask;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setAspectMask(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->aspectMask = $cValue;
    }
}
