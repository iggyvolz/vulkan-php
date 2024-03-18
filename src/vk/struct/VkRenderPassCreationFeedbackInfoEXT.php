<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkRenderPassCreationFeedbackInfoEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "postMergeSubpassCount" => $this->getPostMergeSubpassCount(),
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

    public static function create(\iggyvolz\vulkan\Vulkan $vulkan, null|int $postMergeSubpassCount = null): self
    {
        $self = new self( $vulkan->ffi->new('VkRenderPassCreationFeedbackInfoEXT', false));
        if(!is_null($postMergeSubpassCount)) $self->setPostMergeSubpassCount($postMergeSubpassCount);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getPostMergeSubpassCount(): int
    {
        $cValue = $this->cdata->postMergeSubpassCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPostMergeSubpassCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->postMergeSubpassCount = $cValue;
    }
}
