<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPresentRegionKHR
{
    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \FFI $ffi,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|int $rectangleCount = null,
        null|\iggyvolz\vulkan\util\OpaquePointer $pRectangles = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPresentRegionKHR', false), $vulkan->ffi);
        if(!is_null($rectangleCount)) $self->setRectangleCount($rectangleCount);
        if(!is_null($pRectangles)) $self->setPRectangles($pRectangles);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getRectangleCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->rectangleCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setRectangleCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->rectangleCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPRectangles(): \iggyvolz\vulkan\util\OpaquePointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pRectangles;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPRectangles(\iggyvolz\vulkan\util\OpaquePointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pRectangles = $cValue;
    }
}
