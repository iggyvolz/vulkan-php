<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkRenderPassCreationFeedbackInfoEXT
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

    public static function create(\iggyvolz\vulkan\Vulkan $vulkan, null|int $postMergeSubpassCount = null): self
    {
        $self = new self( $vulkan->ffi->new('VkRenderPassCreationFeedbackInfoEXT', false), $vulkan->ffi);
        if(!is_null($postMergeSubpassCount)) $self->setPostMergeSubpassCount($postMergeSubpassCount);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getPostMergeSubpassCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->postMergeSubpassCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPostMergeSubpassCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->postMergeSubpassCount = $cValue;
    }
}
