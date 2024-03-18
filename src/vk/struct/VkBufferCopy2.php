<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkBufferCopy2 implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "srcOffset" => $this->getSrcOffset(),
          "dstOffset" => $this->getDstOffset(),
          "size" => $this->getSize(),
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
        null|int $srcOffset = null,
        null|int $dstOffset = null,
        null|int $size = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkBufferCopy2', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($srcOffset)) $self->setSrcOffset($srcOffset);
        if(!is_null($dstOffset)) $self->setDstOffset($dstOffset);
        if(!is_null($size)) $self->setSize($size);
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
     * uint64_t/
     */
    public function getSrcOffset(): int
    {
        $cValue = $this->cdata->srcOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSrcOffset(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->srcOffset = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getDstOffset(): int
    {
        $cValue = $this->cdata->dstOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDstOffset(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->dstOffset = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getSize(): int
    {
        $cValue = $this->cdata->size;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->size = $cValue;
    }
}
