<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkBindShaderGroupIndirectCommandNV
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

    public static function create(\iggyvolz\vulkan\Vulkan $vulkan, null|int $groupIndex = null): self
    {
        $self = new self( $vulkan->ffi->new('VkBindShaderGroupIndirectCommandNV', false), $vulkan->ffi);
        if(!is_null($groupIndex)) $self->setGroupIndex($groupIndex);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getGroupIndex(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->groupIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setGroupIndex(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->groupIndex = $cValue;
    }
}
