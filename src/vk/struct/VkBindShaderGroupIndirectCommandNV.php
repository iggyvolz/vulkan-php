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
    ) {
    }

    public static function create(\iggyvolz\vulkan\Vulkan $vulkan, null|int $groupIndex = null): self
    {
        $self = new self( $vulkan->ffi->new('VkBindShaderGroupIndirectCommandNV', false));
        if(!is_null($groupIndex)) $self->setGroupIndex($groupIndex);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getGroupIndex(): int
    {
        $cValue = $this->cdata->groupIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setGroupIndex(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->groupIndex = $cValue;
    }
}
