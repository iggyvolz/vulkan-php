<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoEncodeH264QpEXT
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
        null|int $qpI = null,
        null|int $qpP = null,
        null|int $qpB = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoEncodeH264QpEXT', false), $vulkan->ffi);
        if(!is_null($qpI)) $self->setQpI($qpI);
        if(!is_null($qpP)) $self->setQpP($qpP);
        if(!is_null($qpB)) $self->setQpB($qpB);
        return $self;
    }

    /**
     * int32_t/
     */
    public function getQpI(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->qpI;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setQpI(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->qpI = $cValue;
    }

    /**
     * int32_t/
     */
    public function getQpP(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->qpP;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setQpP(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->qpP = $cValue;
    }

    /**
     * int32_t/
     */
    public function getQpB(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->qpB;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setQpB(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->qpB = $cValue;
    }
}
