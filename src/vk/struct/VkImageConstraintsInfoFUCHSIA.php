<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkImageConstraintsInfoFUCHSIA implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "formatConstraintsCount" => $this->getFormatConstraintsCount(),
          "pFormatConstraints" => $this->getPFormatConstraints(),
          "bufferCollectionConstraints" => $this->getBufferCollectionConstraints(),
          "flags" => $this->getFlags(),
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
        null|int $formatConstraintsCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pFormatConstraints = null,
        mixed $bufferCollectionConstraints = null,
        null|array $flags = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkImageConstraintsInfoFUCHSIA', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($formatConstraintsCount)) $self->setFormatConstraintsCount($formatConstraintsCount);
        if(!is_null($pFormatConstraints)) $self->setPFormatConstraints($pFormatConstraints);
        if(!is_null($bufferCollectionConstraints)) $self->setBufferCollectionConstraints($bufferCollectionConstraints);
        if(!is_null($flags)) $self->setFlags($flags);
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
    public function getFormatConstraintsCount(): int
    {
        $cValue = $this->cdata->formatConstraintsCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setFormatConstraintsCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->formatConstraintsCount = $cValue;
    }

    /**
     * VkImageFormatConstraintsInfoFUCHSIA* /
     */
    public function getPFormatConstraints(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pFormatConstraints;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkImageFormatConstraintsInfoFUCHSIA', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPFormatConstraints(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pFormatConstraints = $cValue;
    }

    /**
     * void* /
     */
    public function getBufferCollectionConstraints(): mixed
    {
        $cValue = $this->cdata->bufferCollectionConstraints;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setBufferCollectionConstraints(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->bufferCollectionConstraints = $cValue;
    }

    /**
     * VkImageConstraintsInfoFlagsFUCHSIA/
     */
    public function getFlags(): array
    {
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkImageConstraintsInfoFlagBitsFUCHSIA::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkImageConstraintsInfoFlagBitsFUCHSIA::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }
}
