<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoDecodeH264ProfileInfoKHR
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
        mixed $stdProfileIdc = null,
        null|\iggyvolz\vulkan\enum\VkVideoDecodeH264PictureLayoutFlagBitsKHR $pictureLayout = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoDecodeH264ProfileInfoKHR', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($stdProfileIdc)) $self->setStdProfileIdc($stdProfileIdc);
        if(!is_null($pictureLayout)) $self->setPictureLayout($pictureLayout);
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
     * void* /
     */
    public function getStdProfileIdc(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->stdProfileIdc;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setStdProfileIdc(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->stdProfileIdc = $cValue;
    }

    /**
     * VkVideoDecodeH264PictureLayoutFlagBitsKHR/
     */
    public function getPictureLayout(): \iggyvolz\vulkan\enum\VkVideoDecodeH264PictureLayoutFlagBitsKHR
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pictureLayout;
        $phpValue = \iggyvolz\vulkan\enum\VkVideoDecodeH264PictureLayoutFlagBitsKHR::from($cValue);
        return $phpValue;
    }

    public function setPictureLayout(\iggyvolz\vulkan\enum\VkVideoDecodeH264PictureLayoutFlagBitsKHR $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->pictureLayout = $cValue;
    }
}
