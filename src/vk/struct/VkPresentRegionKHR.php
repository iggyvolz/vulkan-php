<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPresentRegionKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "rectangleCount" => $this->getRectangleCount(),
          "pRectangles" => $this->getPRectangles(),
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
        null|int $rectangleCount = null,
        null|\iggyvolz\vulkan\util\Pointer $pRectangles = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPresentRegionKHR', false), $vulkan);
        if(!is_null($rectangleCount)) $self->setRectangleCount($rectangleCount);
        if(!is_null($pRectangles)) $self->setPRectangles($pRectangles);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getRectangleCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->rectangleCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setRectangleCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->rectangleCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPRectangles(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pRectangles;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPRectangles(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pRectangles = $cValue;
    }
}
