<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDrmFormatModifierPropertiesList2EXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "drmFormatModifierCount" => $this->getDrmFormatModifierCount(),
          "pDrmFormatModifierProperties" => $this->getPDrmFormatModifierProperties(),
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
        null|int $drmFormatModifierCount = null,
        null|\iggyvolz\vulkan\util\Pointer $pDrmFormatModifierProperties = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDrmFormatModifierPropertiesList2EXT', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($drmFormatModifierCount)) $self->setDrmFormatModifierCount($drmFormatModifierCount);
        if(!is_null($pDrmFormatModifierProperties)) $self->setPDrmFormatModifierProperties($pDrmFormatModifierProperties);
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
    public function getDrmFormatModifierCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->drmFormatModifierCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDrmFormatModifierCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->drmFormatModifierCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPDrmFormatModifierProperties(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pDrmFormatModifierProperties;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPDrmFormatModifierProperties(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pDrmFormatModifierProperties = $cValue;
    }
}
