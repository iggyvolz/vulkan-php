<?php

namespace iggyvolz\vulkan\util;

final readonly class Version
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
    public function toInt(): int
    {
        return ($this->variant << 29) | ($this->major << 22) | ($this->minor << 12) | ($this->patch);
    }
    public function compareTo(Version $other): int
    {
        if($this->variant !== $other->variant) {
            throw new \RuntimeException("Cannot compare versions of different variants");
        }
        return $this->toInt() <=> $other->toInt();
    }
    public function lessThan(Version $other): bool
    {
        return $this->compareTo($other) < 0;
    }
    public function equalTo(Version $other): bool
    {
        return $this->compareTo($other) === 0;
    }
    public function greaterThan(Version $other): bool
    {
        return $this->compareTo($other) > 0;
    }
    public function __toString(): string
    {
        return "$this->major.$this->minor.$this->patch-$this->variant";
    }
}