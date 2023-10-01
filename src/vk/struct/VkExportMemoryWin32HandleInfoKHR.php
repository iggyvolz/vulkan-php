<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkExportMemoryWin32HandleInfoKHR
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
        mixed $pAttributes = null,
        null|int $dwAccess = null,
        mixed $name = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkExportMemoryWin32HandleInfoKHR', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($pAttributes)) $self->setPAttributes($pAttributes);
        if(!is_null($dwAccess)) $self->setDwAccess($dwAccess);
        if(!is_null($name)) $self->setName($name);
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
    public function getPAttributes(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pAttributes;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPAttributes(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->pAttributes = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDwAccess(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->dwAccess;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDwAccess(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->dwAccess = $cValue;
    }

    /**
     * void* /
     */
    public function getName(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->name;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setName(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->name = $cValue;
    }
}
