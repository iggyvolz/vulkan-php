<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceOpacityMicromapPropertiesEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "maxOpacity2StateSubdivisionLevel" => $this->getMaxOpacity2StateSubdivisionLevel(),
          "maxOpacity4StateSubdivisionLevel" => $this->getMaxOpacity4StateSubdivisionLevel(),
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
        null|int $maxOpacity2StateSubdivisionLevel = null,
        null|int $maxOpacity4StateSubdivisionLevel = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceOpacityMicromapPropertiesEXT', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($maxOpacity2StateSubdivisionLevel)) $self->setMaxOpacity2StateSubdivisionLevel($maxOpacity2StateSubdivisionLevel);
        if(!is_null($maxOpacity4StateSubdivisionLevel)) $self->setMaxOpacity4StateSubdivisionLevel($maxOpacity4StateSubdivisionLevel);
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
    public function getMaxOpacity2StateSubdivisionLevel(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxOpacity2StateSubdivisionLevel;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxOpacity2StateSubdivisionLevel(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxOpacity2StateSubdivisionLevel = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxOpacity4StateSubdivisionLevel(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxOpacity4StateSubdivisionLevel;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxOpacity4StateSubdivisionLevel(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxOpacity4StateSubdivisionLevel = $cValue;
    }
}
