<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDrawMeshTasksIndirectCommandEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "groupCountX" => $this->getGroupCountX(),
          "groupCountY" => $this->getGroupCountY(),
          "groupCountZ" => $this->getGroupCountZ(),
        ];
    }

    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|int $groupCountX = null,
        null|int $groupCountY = null,
        null|int $groupCountZ = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDrawMeshTasksIndirectCommandEXT', false));
        if(!is_null($groupCountX)) $self->setGroupCountX($groupCountX);
        if(!is_null($groupCountY)) $self->setGroupCountY($groupCountY);
        if(!is_null($groupCountZ)) $self->setGroupCountZ($groupCountZ);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getGroupCountX(): int
    {
        $cValue = $this->cdata->groupCountX;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setGroupCountX(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->groupCountX = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getGroupCountY(): int
    {
        $cValue = $this->cdata->groupCountY;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setGroupCountY(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->groupCountY = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getGroupCountZ(): int
    {
        $cValue = $this->cdata->groupCountZ;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setGroupCountZ(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->groupCountZ = $cValue;
    }
}
