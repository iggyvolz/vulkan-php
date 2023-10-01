<?php

namespace iggyvolz\vulkan\util;

use iggyvolz\vulkan\enum\VkResult;

readonly abstract class ResultEvent implements \Throwable
{
    private array $bt;
    public function __construct(public VkResult $result)
    {
        $this->bt = array_slice(debug_backtrace(), 1);
    }

    public function getMessage(): string
    {
        return $this->result->name;
    }

    public function getCode()
    {
        return $this->result->value;
    }

    public function getFile(): string
    {
        return $this->bt[0]["file"];
    }

    public function getLine(): int
    {
        return $this->bt[0]["line"];
    }

    public function getTrace(): array
    {
        return $this->bt;
    }

    public function getTraceAsString(): string
    {
        ob_start();
        var_dump($this->getTrace());
        return ob_get_clean();
    }

    public function getPrevious(): ?\Throwable
    {
        return null;
    }

    public function __toString(): string
    {
        return static::class . " in " . $this->getFile() . ":" . $this->getLine() . "\nStack trace:\n" . $this->getTraceAsString();
    }
}