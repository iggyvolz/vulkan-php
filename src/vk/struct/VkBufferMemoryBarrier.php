<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkBufferMemoryBarrier implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "srcAccessMask" => $this->getSrcAccessMask(),
          "dstAccessMask" => $this->getDstAccessMask(),
          "srcQueueFamilyIndex" => $this->getSrcQueueFamilyIndex(),
          "dstQueueFamilyIndex" => $this->getDstQueueFamilyIndex(),
          "buffer" => $this->getBuffer(),
          "offset" => $this->getOffset(),
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
        null|array $srcAccessMask = null,
        null|array $dstAccessMask = null,
        null|int $srcQueueFamilyIndex = null,
        null|int $dstQueueFamilyIndex = null,
        null|VkBuffer $buffer = null,
        null|int $offset = null,
        null|int $size = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkBufferMemoryBarrier', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($srcAccessMask)) $self->setSrcAccessMask($srcAccessMask);
        if(!is_null($dstAccessMask)) $self->setDstAccessMask($dstAccessMask);
        if(!is_null($srcQueueFamilyIndex)) $self->setSrcQueueFamilyIndex($srcQueueFamilyIndex);
        if(!is_null($dstQueueFamilyIndex)) $self->setDstQueueFamilyIndex($dstQueueFamilyIndex);
        if(!is_null($buffer)) $self->setBuffer($buffer);
        if(!is_null($offset)) $self->setOffset($offset);
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
     * VkAccessFlags/
     */
    public function getSrcAccessMask(): array
    {
        $cValue = $this->cdata->srcAccessMask;
        $phpValue = \iggyvolz\vulkan\enum\VkAccessFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setSrcAccessMask(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkAccessFlagBits::toInt(...$phpValue);
        $this->cdata->srcAccessMask = $cValue;
    }

    /**
     * VkAccessFlags/
     */
    public function getDstAccessMask(): array
    {
        $cValue = $this->cdata->dstAccessMask;
        $phpValue = \iggyvolz\vulkan\enum\VkAccessFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setDstAccessMask(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkAccessFlagBits::toInt(...$phpValue);
        $this->cdata->dstAccessMask = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSrcQueueFamilyIndex(): int
    {
        $cValue = $this->cdata->srcQueueFamilyIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSrcQueueFamilyIndex(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->srcQueueFamilyIndex = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDstQueueFamilyIndex(): int
    {
        $cValue = $this->cdata->dstQueueFamilyIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDstQueueFamilyIndex(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->dstQueueFamilyIndex = $cValue;
    }

    /**
     * VkBuffer/
     */
    public function getBuffer(): VkBuffer
    {
        $cValue = $this->cdata->buffer;
        $phpValue = new \iggyvolz\vulkan\struct\VkBuffer($cValue, $ffi);
        return $phpValue;
    }

    public function setBuffer(VkBuffer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->buffer = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getOffset(): int
    {
        $cValue = $this->cdata->offset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setOffset(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->offset = $cValue;
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
