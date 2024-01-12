<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkMultisampledRenderToSingleSampledInfoEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "multisampledRenderToSingleSampledEnable" => $this->getMultisampledRenderToSingleSampledEnable(),
          "rasterizationSamples" => $this->getRasterizationSamples(),
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
        null|bool $multisampledRenderToSingleSampledEnable = null,
        null|\iggyvolz\vulkan\enum\VkSampleCountFlagBits $rasterizationSamples = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkMultisampledRenderToSingleSampledInfoEXT', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($multisampledRenderToSingleSampledEnable)) $self->setMultisampledRenderToSingleSampledEnable($multisampledRenderToSingleSampledEnable);
        if(!is_null($rasterizationSamples)) $self->setRasterizationSamples($rasterizationSamples);
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
    public function getMultisampledRenderToSingleSampledEnable(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->multisampledRenderToSingleSampledEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setMultisampledRenderToSingleSampledEnable(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->multisampledRenderToSingleSampledEnable = $cValue;
    }

    /**
     * VkSampleCountFlagBits/
     */
    public function getRasterizationSamples(): \iggyvolz\vulkan\enum\VkSampleCountFlagBits
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->rasterizationSamples;
        $phpValue = \iggyvolz\vulkan\enum\VkSampleCountFlagBits::from($cValue);
        return $phpValue;
    }

    public function setRasterizationSamples(\iggyvolz\vulkan\enum\VkSampleCountFlagBits $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->rasterizationSamples = $cValue;
    }
}
