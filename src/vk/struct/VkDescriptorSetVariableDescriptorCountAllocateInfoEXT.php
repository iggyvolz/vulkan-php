<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDescriptorSetVariableDescriptorCountAllocateInfoEXT
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

    public static function create(\iggyvolz\vulkan\Vulkan $vulkan): self
    {
        $self = new self( $vulkan->ffi->new('VkDescriptorSetVariableDescriptorCountAllocateInfoEXT', false), $vulkan->ffi);
        return $self;
    }
}
