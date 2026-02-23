<?php
#[Attribute(Attribute::TARGET_METHOD | Attribute::TARGET_FUNCTION)]
class Spem {
    public function __construct(public string $lib, public string $cMethod)
    {
    }
}