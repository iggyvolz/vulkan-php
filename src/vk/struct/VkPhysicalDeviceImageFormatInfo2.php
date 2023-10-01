<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceImageFormatInfo2
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
        null|\iggyvolz\vulkan\enum\VkFormat $format = null,
        null|\iggyvolz\vulkan\enum\VkImageType $type = null,
        null|\iggyvolz\vulkan\enum\VkImageTiling $tiling = null,
        mixed $usage = null,
        mixed $flags = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceImageFormatInfo2', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($format)) $self->setFormat($format);
        if(!is_null($type)) $self->setType($type);
        if(!is_null($tiling)) $self->setTiling($tiling);
        if(!is_null($usage)) $self->setUsage($usage);
        if(!is_null($flags)) $self->setFlags($flags);
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
     * VkFormat/
     */
    public function getFormat(): \iggyvolz\vulkan\enum\VkFormat
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->format;
        $phpValue = \iggyvolz\vulkan\enum\VkFormat::from($cValue);
        return $phpValue;
    }

    public function setFormat(\iggyvolz\vulkan\enum\VkFormat $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->format = $cValue;
    }

    /**
     * VkImageType/
     */
    public function getType(): \iggyvolz\vulkan\enum\VkImageType
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->type;
        $phpValue = \iggyvolz\vulkan\enum\VkImageType::from($cValue);
        return $phpValue;
    }

    public function setType(\iggyvolz\vulkan\enum\VkImageType $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->type = $cValue;
    }

    /**
     * VkImageTiling/
     */
    public function getTiling(): \iggyvolz\vulkan\enum\VkImageTiling
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->tiling;
        $phpValue = \iggyvolz\vulkan\enum\VkImageTiling::from($cValue);
        return $phpValue;
    }

    public function setTiling(\iggyvolz\vulkan\enum\VkImageTiling $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->tiling = $cValue;
    }

    /**
     * void* /
     */
    public function getUsage(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->usage;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setUsage(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->usage = $cValue;
    }

    /**
     * void* /
     */
    public function getFlags(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->flags;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setFlags(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->flags = $cValue;
    }
}
