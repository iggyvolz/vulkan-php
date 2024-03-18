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
        $self = new self( $vulkan->ffi->new('VkImportMemoryBufferCollectionFUCHSIA', false));
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
     * VkBufferCollectionFUCHSIA/
     */
    public function getCollection(): VkBufferCollectionFUCHSIA
    {
        $cValue = $this->cdata->collection;
        $phpValue = new \iggyvolz\vulkan\struct\VkBufferCollectionFUCHSIA($cValue, $ffi);
        return $phpValue;
    }

    public function setCollection(VkBufferCollectionFUCHSIA $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->collection = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIndex(): int
    {
        $cValue = $this->cdata->index;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setIndex(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->index = $cValue;
    }
}
