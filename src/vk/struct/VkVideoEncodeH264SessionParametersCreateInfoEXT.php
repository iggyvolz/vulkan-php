<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoEncodeH264SessionParametersCreateInfoEXT
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
        null|int $maxStdSPSCount = null,
        null|int $maxStdPPSCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pParametersAddInfo = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoEncodeH264SessionParametersCreateInfoEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($maxStdSPSCount)) $self->setMaxStdSPSCount($maxStdSPSCount);
        if(!is_null($maxStdPPSCount)) $self->setMaxStdPPSCount($maxStdPPSCount);
        if(!is_null($pParametersAddInfo)) $self->setPParametersAddInfo($pParametersAddInfo);
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
     * uint32_t/
     */
    public function getMaxStdSPSCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxStdSPSCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxStdSPSCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxStdSPSCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxStdPPSCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxStdPPSCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxStdPPSCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxStdPPSCount = $cValue;
    }

    /**
     * VkVideoEncodeH264SessionParametersAddInfoEXT* /
     */
    public function getPParametersAddInfo(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pParametersAddInfo;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkVideoEncodeH264SessionParametersAddInfoEXT', $cValue, $ffi);
        return $phpValue;
    }

    public function setPParametersAddInfo(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pParametersAddInfo = $cValue;
    }
}
