<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkWaylandSurfaceCreateInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "display" => $this->getDisplay(),
          "surface" => $this->getSurface(),
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
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|array $flags = null,
        null|\iggyvolz\vulkan\util\Pointer $display = null,
        null|\iggyvolz\vulkan\util\Pointer $surface = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkWaylandSurfaceCreateInfoKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($display)) $self->setDisplay($display);
        if(!is_null($surface)) $self->setSurface($surface);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * VkWaylandSurfaceCreateFlagsKHR/
     */
    public function getFlags(): array
    {
        $cValue = $this->cdata->flags;
        $phpValue = [];
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $cValue = 0;
        $this->cdata->flags = $cValue;
    }

    /**
     * void* /
     */
    public function getDisplay(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->display;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setDisplay(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->display = $cValue;
    }

    /**
     * void* /
     */
    public function getSurface(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->surface;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setSurface(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->surface = $cValue;
    }
}
