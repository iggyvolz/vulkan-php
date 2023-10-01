<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoEncodeH264NaluSliceInfoEXT
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
        null|\iggyvolz\vulkan\util\OpaquePointer $pNext = null,
        null|int $constantQp = null,
        mixed $pStdSliceHeader = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoEncodeH264NaluSliceInfoEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($constantQp)) $self->setConstantQp($constantQp);
        if(!is_null($pStdSliceHeader)) $self->setPStdSliceHeader($pStdSliceHeader);
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
    public function getPNext(): \iggyvolz\vulkan\util\OpaquePointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\OpaquePointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * int32_t/
     */
    public function getConstantQp(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->constantQp;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setConstantQp(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->constantQp = $cValue;
    }

    /**
     * void* /
     */
    public function getPStdSliceHeader(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pStdSliceHeader;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPStdSliceHeader(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->pStdSliceHeader = $cValue;
    }
}
