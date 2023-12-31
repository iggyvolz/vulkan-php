<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkRenderPassSubpassFeedbackInfoEXT
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
        null|\iggyvolz\vulkan\enum\VkSubpassMergeStatusEXT $subpassMergeStatus = null,
        null|string $description = null,
        null|int $postMergeIndex = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkRenderPassSubpassFeedbackInfoEXT', false), $vulkan->ffi);
        if(!is_null($subpassMergeStatus)) $self->setSubpassMergeStatus($subpassMergeStatus);
        if(!is_null($description)) $self->setDescription($description);
        if(!is_null($postMergeIndex)) $self->setPostMergeIndex($postMergeIndex);
        return $self;
    }

    /**
     * VkSubpassMergeStatusEXT/
     */
    public function getSubpassMergeStatus(): \iggyvolz\vulkan\enum\VkSubpassMergeStatusEXT
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->subpassMergeStatus;
        $phpValue = \iggyvolz\vulkan\enum\VkSubpassMergeStatusEXT::from($cValue);
        return $phpValue;
    }

    public function setSubpassMergeStatus(\iggyvolz\vulkan\enum\VkSubpassMergeStatusEXT $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->subpassMergeStatus = $cValue;
    }

    /**
     * char/[256]
     */
    public function getDescription(): string
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->description;
        $tempString = \FFI::string($cValue, 256); $phpValue = \substr($tempString, 0, \strpos($tempString, "\0"));
        return $phpValue;
    }

    public function setDescription(string $phpValue): void
    {
        $ffi = $this->ffi;
        \FFI::memcpy($cValue, $phpValue, 256);
        $this->cdata->description = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPostMergeIndex(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->postMergeIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPostMergeIndex(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->postMergeIndex = $cValue;
    }
}
