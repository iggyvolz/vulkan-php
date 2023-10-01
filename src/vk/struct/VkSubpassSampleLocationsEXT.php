<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSubpassSampleLocationsEXT
{
    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \FFI $ffi,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|int $subpassIndex = null,
        null|VkSampleLocationsInfoEXT $sampleLocationsInfo = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSubpassSampleLocationsEXT', false), $vulkan->ffi);
        if(!is_null($subpassIndex)) $self->setSubpassIndex($subpassIndex);
        if(!is_null($sampleLocationsInfo)) $self->setSampleLocationsInfo($sampleLocationsInfo);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getSubpassIndex(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->subpassIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSubpassIndex(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->subpassIndex = $cValue;
    }

    /**
     * VkSampleLocationsInfoEXT/
     */
    public function getSampleLocationsInfo(): VkSampleLocationsInfoEXT
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->sampleLocationsInfo;
        $phpValue = new \iggyvolz\vulkan\struct\VkSampleLocationsInfoEXT($cValue, $ffi);
        return $phpValue;
    }

    public function setSampleLocationsInfo(VkSampleLocationsInfoEXT $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->sampleLocationsInfo = $cValue;
    }
}
