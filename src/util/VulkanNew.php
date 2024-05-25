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
    public function __construct(/** @internal  */public readonly FFIProxy $ffi, public readonly VkInstance $instance, private readonly array $extensions)
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
     */
    public function call(string $method, mixed ...$params): mixed
    {
//        echo "$method\n";
        return $this->ffi->cast("PFN_PHP_$method", $this->ffi->vkGetInstanceProcAddr($this->instance->cdata, $method))(...$params);
    }
}