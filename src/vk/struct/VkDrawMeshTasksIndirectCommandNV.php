<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDrawMeshTasksIndirectCommandNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "taskCount" => $this->getTaskCount(),
          "firstTask" => $this->getFirstTask(),
        ];
    }

    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \iggyvolz\vulkan\Vulkan $vulkan,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|int $taskCount = null,
        null|int $firstTask = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDrawMeshTasksIndirectCommandNV', false), $vulkan);
        if(!is_null($taskCount)) $self->setTaskCount($taskCount);
        if(!is_null($firstTask)) $self->setFirstTask($firstTask);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getTaskCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->taskCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setTaskCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->taskCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFirstTask(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->firstTask;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setFirstTask(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->firstTask = $cValue;
    }
}
