<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDepthBiasRepresentationInfoEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "depthBiasRepresentation" => $this->getDepthBiasRepresentation(),
          "depthBiasExact" => $this->getDepthBiasExact(),
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
        null|\iggyvolz\vulkan\enum\VkDepthBiasRepresentationEXT $depthBiasRepresentation = null,
        null|bool $depthBiasExact = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDepthBiasRepresentationInfoEXT', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($depthBiasRepresentation)) $self->setDepthBiasRepresentation($depthBiasRepresentation);
        if(!is_null($depthBiasExact)) $self->setDepthBiasExact($depthBiasExact);
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
     * VkDepthBiasRepresentationEXT/
     */
    public function getDepthBiasRepresentation(): \iggyvolz\vulkan\enum\VkDepthBiasRepresentationEXT
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->depthBiasRepresentation;
        $phpValue = \iggyvolz\vulkan\enum\VkDepthBiasRepresentationEXT::from($cValue);
        return $phpValue;
    }

    public function setDepthBiasRepresentation(\iggyvolz\vulkan\enum\VkDepthBiasRepresentationEXT $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->depthBiasRepresentation = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDepthBiasExact(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->depthBiasExact;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDepthBiasExact(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->depthBiasExact = $cValue;
    }
}
