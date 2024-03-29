<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceDepthBiasControlFeaturesEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "depthBiasControl" => $this->getDepthBiasControl(),
          "leastRepresentableValueForceUnormRepresentation" => $this->getLeastRepresentableValueForceUnormRepresentation(),
          "floatRepresentation" => $this->getFloatRepresentation(),
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
        null|bool $depthBiasControl = null,
        null|bool $leastRepresentableValueForceUnormRepresentation = null,
        null|bool $floatRepresentation = null,
        null|bool $depthBiasExact = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceDepthBiasControlFeaturesEXT', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($depthBiasControl)) $self->setDepthBiasControl($depthBiasControl);
        if(!is_null($leastRepresentableValueForceUnormRepresentation)) $self->setLeastRepresentableValueForceUnormRepresentation($leastRepresentableValueForceUnormRepresentation);
        if(!is_null($floatRepresentation)) $self->setFloatRepresentation($floatRepresentation);
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
     * uint32_t/
     */
    public function getDepthBiasControl(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->depthBiasControl;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDepthBiasControl(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->depthBiasControl = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getLeastRepresentableValueForceUnormRepresentation(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->leastRepresentableValueForceUnormRepresentation;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setLeastRepresentableValueForceUnormRepresentation(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->leastRepresentableValueForceUnormRepresentation = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFloatRepresentation(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->floatRepresentation;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setFloatRepresentation(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->floatRepresentation = $cValue;
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
