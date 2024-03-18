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
        $self = new self( $vulkan->ffi->new('VkMutableDescriptorTypeCreateInfoEXT', false));
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
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMutableDescriptorTypeListCount(): int
    {
        $cValue = $this->cdata->mutableDescriptorTypeListCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMutableDescriptorTypeListCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->mutableDescriptorTypeListCount = $cValue;
    }

    /**
     * VkMutableDescriptorTypeListEXT* /
     */
    public function getPMutableDescriptorTypeLists(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pMutableDescriptorTypeLists;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkMutableDescriptorTypeListEXT', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPMutableDescriptorTypeLists(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pMutableDescriptorTypeLists = $cValue;
    }
}
