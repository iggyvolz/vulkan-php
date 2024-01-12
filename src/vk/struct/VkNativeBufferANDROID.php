<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkNativeBufferANDROID implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "handle" => $this->getHandle(),
          "stride" => $this->getStride(),
          "format" => $this->getFormat(),
          "usage" => $this->getUsage(),
          "usage2" => $this->getUsage2(),
        ];
    }

    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \iggyvolz\vulkan\Vulkan $vulkan,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|\iggyvolz\vulkan\util\Pointer $handle = null,
        null|int $stride = null,
        null|int $format = null,
        null|int $usage = null,
        null|VkNativeBufferUsage2ANDROID $usage2 = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkNativeBufferANDROID', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($handle)) $self->setHandle($handle);
        if(!is_null($stride)) $self->setStride($stride);
        if(!is_null($format)) $self->setFormat($format);
        if(!is_null($usage)) $self->setUsage($usage);
        if(!is_null($usage2)) $self->setUsage2($usage2);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * void* /
     */
    public function getHandle(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->handle;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setHandle(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->handle = $cValue;
    }

    /**
     * int16_t/
     */
    public function getStride(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->stride;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStride(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->stride = $cValue;
    }

    /**
     * int16_t/
     */
    public function getFormat(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->format;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setFormat(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->format = $cValue;
    }

    /**
     * int16_t/
     */
    public function getUsage(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->usage;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setUsage(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->usage = $cValue;
    }

    /**
     * VkNativeBufferUsage2ANDROID/
     */
    public function getUsage2(): VkNativeBufferUsage2ANDROID
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->usage2;
        $phpValue = new \iggyvolz\vulkan\struct\VkNativeBufferUsage2ANDROID($cValue, $ffi);
        return $phpValue;
    }

    public function setUsage2(VkNativeBufferUsage2ANDROID $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->usage2 = $cValue;
    }
}
