<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkMutableDescriptorTypeCreateInfoEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "mutableDescriptorTypeListCount" => $this->getMutableDescriptorTypeListCount(),
          "pMutableDescriptorTypeLists" => $this->getPMutableDescriptorTypeLists(),
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
        null|int $mutableDescriptorTypeListCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pMutableDescriptorTypeLists = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkMutableDescriptorTypeCreateInfoEXT', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($mutableDescriptorTypeListCount)) $self->setMutableDescriptorTypeListCount($mutableDescriptorTypeListCount);
        if(!is_null($pMutableDescriptorTypeLists)) $self->setPMutableDescriptorTypeLists($pMutableDescriptorTypeLists);
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
     * uint32_t/
     */
    public function getMutableDescriptorTypeListCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->mutableDescriptorTypeListCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMutableDescriptorTypeListCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->mutableDescriptorTypeListCount = $cValue;
    }

    /**
     * VkMutableDescriptorTypeListEXT* /
     */
    public function getPMutableDescriptorTypeLists(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pMutableDescriptorTypeLists;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkMutableDescriptorTypeListEXT', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPMutableDescriptorTypeLists(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pMutableDescriptorTypeLists = $cValue;
    }
}
