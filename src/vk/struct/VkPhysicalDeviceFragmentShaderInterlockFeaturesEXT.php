<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceFragmentShaderInterlockFeaturesEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "fragmentShaderSampleInterlock" => $this->getFragmentShaderSampleInterlock(),
          "fragmentShaderPixelInterlock" => $this->getFragmentShaderPixelInterlock(),
          "fragmentShaderShadingRateInterlock" => $this->getFragmentShaderShadingRateInterlock(),
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
        null|bool $fragmentShaderSampleInterlock = null,
        null|bool $fragmentShaderPixelInterlock = null,
        null|bool $fragmentShaderShadingRateInterlock = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceFragmentShaderInterlockFeaturesEXT', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($fragmentShaderSampleInterlock)) $self->setFragmentShaderSampleInterlock($fragmentShaderSampleInterlock);
        if(!is_null($fragmentShaderPixelInterlock)) $self->setFragmentShaderPixelInterlock($fragmentShaderPixelInterlock);
        if(!is_null($fragmentShaderShadingRateInterlock)) $self->setFragmentShaderShadingRateInterlock($fragmentShaderShadingRateInterlock);
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
    public function getFragmentShaderSampleInterlock(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->fragmentShaderSampleInterlock;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setFragmentShaderSampleInterlock(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->fragmentShaderSampleInterlock = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFragmentShaderPixelInterlock(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->fragmentShaderPixelInterlock;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setFragmentShaderPixelInterlock(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->fragmentShaderPixelInterlock = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getFragmentShaderShadingRateInterlock(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->fragmentShaderShadingRateInterlock;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setFragmentShaderShadingRateInterlock(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->fragmentShaderShadingRateInterlock = $cValue;
    }
}
