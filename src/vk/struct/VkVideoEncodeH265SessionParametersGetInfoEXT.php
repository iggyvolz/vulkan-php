<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoEncodeH265SessionParametersGetInfoEXT
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
        null|bool $writeStdVPS = null,
        null|bool $writeStdSPS = null,
        null|bool $writeStdPPS = null,
        null|int $stdVPSId = null,
        null|int $stdSPSId = null,
        null|int $stdPPSId = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoEncodeH265SessionParametersGetInfoEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($writeStdVPS)) $self->setWriteStdVPS($writeStdVPS);
        if(!is_null($writeStdSPS)) $self->setWriteStdSPS($writeStdSPS);
        if(!is_null($writeStdPPS)) $self->setWriteStdPPS($writeStdPPS);
        if(!is_null($stdVPSId)) $self->setStdVPSId($stdVPSId);
        if(!is_null($stdSPSId)) $self->setStdSPSId($stdSPSId);
        if(!is_null($stdPPSId)) $self->setStdPPSId($stdPPSId);
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
    public function getWriteStdVPS(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->writeStdVPS;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setWriteStdVPS(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->writeStdVPS = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getWriteStdSPS(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->writeStdSPS;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setWriteStdSPS(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->writeStdSPS = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getWriteStdPPS(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->writeStdPPS;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setWriteStdPPS(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->writeStdPPS = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStdVPSId(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->stdVPSId;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStdVPSId(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->stdVPSId = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStdSPSId(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->stdSPSId;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStdSPSId(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->stdSPSId = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStdPPSId(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->stdPPSId;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStdPPSId(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->stdPPSId = $cValue;
    }
}
