<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkImageViewSlicedCreateInfoEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "sliceOffset" => $this->getSliceOffset(),
          "sliceCount" => $this->getSliceCount(),
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
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|int $sliceOffset = null,
        null|int $sliceCount = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkImageViewSlicedCreateInfoEXT', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($sliceOffset)) $self->setSliceOffset($sliceOffset);
        if(!is_null($sliceCount)) $self->setSliceCount($sliceCount);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSliceOffset(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sliceOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSliceOffset(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->sliceOffset = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSliceCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sliceCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSliceCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->sliceCount = $cValue;
    }
}
