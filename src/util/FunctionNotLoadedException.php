<?php

namespace iggyvolz\vulkan\util;

class FunctionNotLoadedException extends \Exception
{
    public function __construct(string $name)
    {
        parent::__construct("Function $name not loaded");
    }
}