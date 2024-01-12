<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkWriteDescriptorSetInlineUniformBlockEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
        ];
    }

    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \iggyvolz\vulkan\Vulkan $vulkan,
    ) {
    }

    public static function create(\iggyvolz\vulkan\Vulkan $vulkan): self
    {
        $self = new self( $vulkan->ffi->new('VkWriteDescriptorSetInlineUniformBlockEXT', false), $vulkan);
        return $self;
    }
}
