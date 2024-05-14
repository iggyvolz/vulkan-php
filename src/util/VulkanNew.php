<?php

namespace iggyvolz\vulkan\util;

use Exception;
use FFI;
use iggyvolz\vulkan\struct\VkInstance;
use Psr\Container\ContainerInterface;
use Psr\Container\NotFoundExceptionInterface;

class VulkanNew implements ContainerInterface
{

    /**
     * @param list<string> $extensions
     */
    public function __construct(/** @internal  */public readonly FFI $ffi, public readonly VkInstance $instance, private readonly array $extensions)
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
        return in_array($id, $this->extensions);
    }

    /**
     * @internal
     * @param list<mixed> $params
     */
    public function call(string $method, array ...$params): mixed
    {
        return $this->ffi->vkGetInstanceProcAddr($this->instance->cdata, $method)(...$params);
    }
}