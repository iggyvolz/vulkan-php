<?php

namespace iggyvolz\vulkan;

use Throwable;

class VulkanException extends \Exception
{
    public function __construct(public readonly Result $result, ?Throwable $previous = null)
    {
        parent::__construct($result->name, $result->value, $previous);
    }
    public static function assert(Result|int $result, ?Throwable $previous = null): void
    {
        if(is_int($result)) $result = Result::from($result);
        if($result !== Result::SUCCESS) throw new self($result, $previous);
    }
}