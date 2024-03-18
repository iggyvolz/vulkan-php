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
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|int $rectangleCount = null,
        null|\iggyvolz\vulkan\util\Pointer $pRectangles = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPresentRegionKHR', false));
        if(!is_null($rectangleCount)) $self->setRectangleCount($rectangleCount);
        if(!is_null($pRectangles)) $self->setPRectangles($pRectangles);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getRectangleCount(): int
    {
        $cValue = $this->cdata->rectangleCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setRectangleCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->rectangleCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPRectangles(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pRectangles;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPRectangles(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pRectangles = $cValue;
    }
}
