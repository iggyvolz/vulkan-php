<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoEncodeRateControlInfoKHR
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
        null|array $flags = null,
        null|\iggyvolz\vulkan\enum\VkVideoEncodeRateControlModeFlagBitsKHR $rateControlMode = null,
        null|int $layerCount = null,
        null|\iggyvolz\vulkan\util\Pointer $pLayers = null,
        null|int $virtualBufferSizeInMs = null,
        null|int $initialVirtualBufferSizeInMs = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoEncodeRateControlInfoKHR', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($rateControlMode)) $self->setRateControlMode($rateControlMode);
        if(!is_null($layerCount)) $self->setLayerCount($layerCount);
        if(!is_null($pLayers)) $self->setPLayers($pLayers);
        if(!is_null($virtualBufferSizeInMs)) $self->setVirtualBufferSizeInMs($virtualBufferSizeInMs);
        if(!is_null($initialVirtualBufferSizeInMs)) $self->setInitialVirtualBufferSizeInMs($initialVirtualBufferSizeInMs);
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
     * VkVideoEncodeRateControlFlagsKHR/
     */
    public function getFlags(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = [];
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = 0;
        $this->cdata->flags = $cValue;
    }

    /**
     * VkVideoEncodeRateControlModeFlagBitsKHR/
     */
    public function getRateControlMode(): \iggyvolz\vulkan\enum\VkVideoEncodeRateControlModeFlagBitsKHR
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->rateControlMode;
        $phpValue = \iggyvolz\vulkan\enum\VkVideoEncodeRateControlModeFlagBitsKHR::from($cValue);
        return $phpValue;
    }

    public function setRateControlMode(\iggyvolz\vulkan\enum\VkVideoEncodeRateControlModeFlagBitsKHR $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->rateControlMode = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getLayerCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->layerCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setLayerCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->layerCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPLayers(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pLayers;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPLayers(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pLayers = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getVirtualBufferSizeInMs(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->virtualBufferSizeInMs;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setVirtualBufferSizeInMs(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->virtualBufferSizeInMs = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getInitialVirtualBufferSizeInMs(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->initialVirtualBufferSizeInMs;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setInitialVirtualBufferSizeInMs(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->initialVirtualBufferSizeInMs = $cValue;
    }
}
