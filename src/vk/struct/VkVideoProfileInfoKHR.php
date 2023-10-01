<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoProfileInfoKHR
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
        null|\iggyvolz\vulkan\enum\VkVideoCodecOperationFlagBitsKHR $videoCodecOperation = null,
        mixed $chromaSubsampling = null,
        mixed $lumaBitDepth = null,
        mixed $chromaBitDepth = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoProfileInfoKHR', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($videoCodecOperation)) $self->setVideoCodecOperation($videoCodecOperation);
        if(!is_null($chromaSubsampling)) $self->setChromaSubsampling($chromaSubsampling);
        if(!is_null($lumaBitDepth)) $self->setLumaBitDepth($lumaBitDepth);
        if(!is_null($chromaBitDepth)) $self->setChromaBitDepth($chromaBitDepth);
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
     * VkVideoCodecOperationFlagBitsKHR/
     */
    public function getVideoCodecOperation(): \iggyvolz\vulkan\enum\VkVideoCodecOperationFlagBitsKHR
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->videoCodecOperation;
        $phpValue = \iggyvolz\vulkan\enum\VkVideoCodecOperationFlagBitsKHR::from($cValue);
        return $phpValue;
    }

    public function setVideoCodecOperation(\iggyvolz\vulkan\enum\VkVideoCodecOperationFlagBitsKHR $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->videoCodecOperation = $cValue;
    }

    /**
     * void* /
     */
    public function getChromaSubsampling(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->chromaSubsampling;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setChromaSubsampling(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->chromaSubsampling = $cValue;
    }

    /**
     * void* /
     */
    public function getLumaBitDepth(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->lumaBitDepth;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setLumaBitDepth(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->lumaBitDepth = $cValue;
    }

    /**
     * void* /
     */
    public function getChromaBitDepth(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->chromaBitDepth;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setChromaBitDepth(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->chromaBitDepth = $cValue;
    }
}
