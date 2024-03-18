<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceShaderFloat16Int8FeaturesKHR implements \JsonSerializable
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
    ) {
    }

    public static function create(\iggyvolz\vulkan\Vulkan $vulkan): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceShaderFloat16Int8FeaturesKHR', false));
        return $self;
    }
}
