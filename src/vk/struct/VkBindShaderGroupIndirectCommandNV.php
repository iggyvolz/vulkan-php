<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkBindShaderGroupIndirectCommandNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "groupIndex" => $this->getGroupIndex(),
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

    public static function create(\iggyvolz\vulkan\Vulkan $vulkan, null|int $groupIndex = null): self
    {
        $self = new self( $vulkan->ffi->new('VkBindShaderGroupIndirectCommandNV', false), $vulkan);
        if(!is_null($groupIndex)) $self->setGroupIndex($groupIndex);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getGroupIndex(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->groupIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setGroupIndex(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->groupIndex = $cValue;
    }
}
