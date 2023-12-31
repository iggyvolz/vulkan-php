<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoEncodeH265SessionParametersAddInfoKHR
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
        null|int $stdVPSCount = null,
        null|\iggyvolz\vulkan\util\Pointer $pStdVPSs = null,
        null|int $stdSPSCount = null,
        null|\iggyvolz\vulkan\util\Pointer $pStdSPSs = null,
        null|int $stdPPSCount = null,
        null|\iggyvolz\vulkan\util\Pointer $pStdPPSs = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoEncodeH265SessionParametersAddInfoKHR', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($stdVPSCount)) $self->setStdVPSCount($stdVPSCount);
        if(!is_null($pStdVPSs)) $self->setPStdVPSs($pStdVPSs);
        if(!is_null($stdSPSCount)) $self->setStdSPSCount($stdSPSCount);
        if(!is_null($pStdSPSs)) $self->setPStdSPSs($pStdSPSs);
        if(!is_null($stdPPSCount)) $self->setStdPPSCount($stdPPSCount);
        if(!is_null($pStdPPSs)) $self->setPStdPPSs($pStdPPSs);
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
    public function getStdVPSCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->stdVPSCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStdVPSCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->stdVPSCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPStdVPSs(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pStdVPSs;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPStdVPSs(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pStdVPSs = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStdSPSCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->stdSPSCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStdSPSCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->stdSPSCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPStdSPSs(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pStdSPSs;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPStdSPSs(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pStdSPSs = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStdPPSCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->stdPPSCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStdPPSCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->stdPPSCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPStdPPSs(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pStdPPSs;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPStdPPSs(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pStdPPSs = $cValue;
    }
}
