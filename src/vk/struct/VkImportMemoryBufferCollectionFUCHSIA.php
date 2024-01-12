<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkImportMemoryBufferCollectionFUCHSIA implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "collection" => $this->getCollection(),
          "index" => $this->getIndex(),
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
        null|VkBufferCollectionFUCHSIA $collection = null,
        null|int $index = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkImportMemoryBufferCollectionFUCHSIA', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($collection)) $self->setCollection($collection);
        if(!is_null($index)) $self->setIndex($index);
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
     * VkBufferCollectionFUCHSIA/
     */
    public function getCollection(): VkBufferCollectionFUCHSIA
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->collection;
        $phpValue = new \iggyvolz\vulkan\struct\VkBufferCollectionFUCHSIA($cValue, $ffi);
        return $phpValue;
    }

    public function setCollection(VkBufferCollectionFUCHSIA $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->collection = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIndex(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->index;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setIndex(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->index = $cValue;
    }
}
