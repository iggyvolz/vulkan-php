<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkImageDrmFormatModifierListCreateInfoEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "drmFormatModifierCount" => $this->getDrmFormatModifierCount(),
          "pDrmFormatModifiers" => $this->getPDrmFormatModifiers(),
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
        null|int $drmFormatModifierCount = null,
        null|\iggyvolz\vulkan\util\IntPointer $pDrmFormatModifiers = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkImageDrmFormatModifierListCreateInfoEXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($drmFormatModifierCount)) $self->setDrmFormatModifierCount($drmFormatModifierCount);
        if(!is_null($pDrmFormatModifiers)) $self->setPDrmFormatModifiers($pDrmFormatModifiers);
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
    public function getDrmFormatModifierCount(): int
    {
        $cValue = $this->cdata->drmFormatModifierCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDrmFormatModifierCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->drmFormatModifierCount = $cValue;
    }

    /**
     * uint64_t* /
     */
    public function getPDrmFormatModifiers(): \iggyvolz\vulkan\util\IntPointer
    {
        $cValue = $this->cdata->pDrmFormatModifiers;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPDrmFormatModifiers(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pDrmFormatModifiers = $cValue;
    }
}
