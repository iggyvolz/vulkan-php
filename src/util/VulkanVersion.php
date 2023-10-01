<?php

namespace iggyvolz\vulkan\util;

final readonly class VulkanVersion
{
    public function __construct(
        public int $major,
        public int $minor,
        public int $patch = 0,
        public int $variant = 0
    )
    {
    }
    public static function from(int $version): self
    {
        // magic constants that I got from a header somewhere
        return new self(
            major: ($version >> 22) & 0x7F,
            minor: ($version >> 12) & 0x3FF,
            patch: $version & 0xFFF,
            variant: $version >> 29
        );
    }
    public function __toString(): string
    {
        return "$this->major.$this->minor.$this->patch.$this->variant";
    }
}