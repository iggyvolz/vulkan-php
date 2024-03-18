<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkImageBlit2 implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "srcSubresource" => $this->getSrcSubresource(),
          "srcOffsets" => $this->getSrcOffsets(),
          "dstSubresource" => $this->getDstSubresource(),
          "dstOffsets" => $this->getDstOffsets(),
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
        null|VkImageSubresourceLayers $srcSubresource = null,
        mixed $srcOffsets = null,
        null|VkImageSubresourceLayers $dstSubresource = null,
        mixed $dstOffsets = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkImageBlit2', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($srcSubresource)) $self->setSrcSubresource($srcSubresource);
        if(!is_null($srcOffsets)) $self->setSrcOffsets($srcOffsets);
        if(!is_null($dstSubresource)) $self->setDstSubresource($dstSubresource);
        if(!is_null($dstOffsets)) $self->setDstOffsets($dstOffsets);
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
     * VkImageSubresourceLayers/
     */
    public function getSrcSubresource(): VkImageSubresourceLayers
    {
        $cValue = $this->cdata->srcSubresource;
        $phpValue = new \iggyvolz\vulkan\struct\VkImageSubresourceLayers($cValue, $ffi);
        return $phpValue;
    }

    public function setSrcSubresource(VkImageSubresourceLayers $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->srcSubresource = $cValue;
    }

    /**
     * void* /
     */
    public function getSrcOffsets(): mixed
    {
        $cValue = $this->cdata->srcOffsets;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setSrcOffsets(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->srcOffsets = $cValue;
    }

    /**
     * VkImageSubresourceLayers/
     */
    public function getDstSubresource(): VkImageSubresourceLayers
    {
        $cValue = $this->cdata->dstSubresource;
        $phpValue = new \iggyvolz\vulkan\struct\VkImageSubresourceLayers($cValue, $ffi);
        return $phpValue;
    }

    public function setDstSubresource(VkImageSubresourceLayers $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->dstSubresource = $cValue;
    }

    /**
     * void* /
     */
    public function getDstOffsets(): mixed
    {
        $cValue = $this->cdata->dstOffsets;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setDstOffsets(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->dstOffsets = $cValue;
    }
}
