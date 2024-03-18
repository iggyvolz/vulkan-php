<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceDisplacementMicromapPropertiesNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "maxDisplacementMicromapSubdivisionLevel" => $this->getMaxDisplacementMicromapSubdivisionLevel(),
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
        null|int $maxDisplacementMicromapSubdivisionLevel = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceDisplacementMicromapPropertiesNV', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($maxDisplacementMicromapSubdivisionLevel)) $self->setMaxDisplacementMicromapSubdivisionLevel($maxDisplacementMicromapSubdivisionLevel);
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
    public function getMaxDisplacementMicromapSubdivisionLevel(): int
    {
        $cValue = $this->cdata->maxDisplacementMicromapSubdivisionLevel;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDisplacementMicromapSubdivisionLevel(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxDisplacementMicromapSubdivisionLevel = $cValue;
    }
}
