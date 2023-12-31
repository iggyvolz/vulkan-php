<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkAmigoProfilingSubmitInfoSEC
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
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|int $firstDrawTimestamp = null,
        null|int $swapBufferTimestamp = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkAmigoProfilingSubmitInfoSEC', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($firstDrawTimestamp)) $self->setFirstDrawTimestamp($firstDrawTimestamp);
        if(!is_null($swapBufferTimestamp)) $self->setSwapBufferTimestamp($swapBufferTimestamp);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getFirstDrawTimestamp(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->firstDrawTimestamp;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setFirstDrawTimestamp(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->firstDrawTimestamp = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getSwapBufferTimestamp(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->swapBufferTimestamp;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSwapBufferTimestamp(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->swapBufferTimestamp = $cValue;
    }
}
