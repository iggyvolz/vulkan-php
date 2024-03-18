<?php

namespace iggyvolz\vulkan\util;

use Exception;
use FFI;
use FFI\CData;
use Psr\Container\ContainerInterface;
use Psr\Container\NotFoundExceptionInterface;

class VulkanNew implements ContainerInterface
{

    /**
     * @param FFI $ffi
     * @param CData $instance
     * @param list<string> $extensions
     */
    public function __construct(public readonly FFI $ffi, public readonly CData $instance, private readonly array $extensions)
    {
    }

    private array $values = [];

    /**
     * @template T
     * @param class-string<T> $id
     * @return T
     * @throws NotFoundExceptionInterface
     */
    public function get(string $id): object
    {
        if(!$this->has($id)) throw new class extends Exception implements NotFoundExceptionInterface {};
        return $this->values[$id] ??= new $id($this);
    }

    public function has(string $id): bool
    {
        return array_key_exists($id, $this->extensions);
    }
}