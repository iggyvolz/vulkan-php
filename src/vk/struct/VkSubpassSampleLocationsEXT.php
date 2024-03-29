<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSubpassSampleLocationsEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "subpassIndex" => $this->getSubpassIndex(),
          "sampleLocationsInfo" => $this->getSampleLocationsInfo(),
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
        null|int $subpassIndex = null,
        null|VkSampleLocationsInfoEXT $sampleLocationsInfo = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSubpassSampleLocationsEXT', false), $vulkan);
        if(!is_null($subpassIndex)) $self->setSubpassIndex($subpassIndex);
        if(!is_null($sampleLocationsInfo)) $self->setSampleLocationsInfo($sampleLocationsInfo);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getSubpassIndex(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->subpassIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSubpassIndex(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->subpassIndex = $cValue;
    }

    /**
     * VkSampleLocationsInfoEXT/
     */
    public function getSampleLocationsInfo(): VkSampleLocationsInfoEXT
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sampleLocationsInfo;
        $phpValue = new \iggyvolz\vulkan\struct\VkSampleLocationsInfoEXT($cValue, $ffi);
        return $phpValue;
    }

    public function setSampleLocationsInfo(VkSampleLocationsInfoEXT $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->sampleLocationsInfo = $cValue;
    }
}
