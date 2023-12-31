<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoEncodeH264GopRemainingFrameInfoKHR
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
        null|bool $useGopRemainingFrames = null,
        null|int $gopRemainingI = null,
        null|int $gopRemainingP = null,
        null|int $gopRemainingB = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoEncodeH264GopRemainingFrameInfoKHR', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($useGopRemainingFrames)) $self->setUseGopRemainingFrames($useGopRemainingFrames);
        if(!is_null($gopRemainingI)) $self->setGopRemainingI($gopRemainingI);
        if(!is_null($gopRemainingP)) $self->setGopRemainingP($gopRemainingP);
        if(!is_null($gopRemainingB)) $self->setGopRemainingB($gopRemainingB);
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
     * uint32_t/
     */
    public function getUseGopRemainingFrames(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->useGopRemainingFrames;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setUseGopRemainingFrames(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->useGopRemainingFrames = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getGopRemainingI(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->gopRemainingI;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setGopRemainingI(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->gopRemainingI = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getGopRemainingP(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->gopRemainingP;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setGopRemainingP(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->gopRemainingP = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getGopRemainingB(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->gopRemainingB;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setGopRemainingB(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->gopRemainingB = $cValue;
    }
}
