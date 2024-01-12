<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkExportMemoryAllocateInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "handleTypes" => $this->getHandleTypes(),
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
        null|array $handleTypes = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkExportMemoryAllocateInfo', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($handleTypes)) $self->setHandleTypes($handleTypes);
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
     * VkExternalMemoryHandleTypeFlags/
     */
    public function getHandleTypes(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->handleTypes;
        $phpValue = \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setHandleTypes(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits::toInt(...$phpValue);
        $this->cdata->handleTypes = $cValue;
    }
}
