<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkAttachmentSampleLocationsEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "attachmentIndex" => $this->getAttachmentIndex(),
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
        null|int $attachmentIndex = null,
        null|VkSampleLocationsInfoEXT $sampleLocationsInfo = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkAttachmentSampleLocationsEXT', false), $vulkan);
        if(!is_null($attachmentIndex)) $self->setAttachmentIndex($attachmentIndex);
        if(!is_null($sampleLocationsInfo)) $self->setSampleLocationsInfo($sampleLocationsInfo);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getAttachmentIndex(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->attachmentIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setAttachmentIndex(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->attachmentIndex = $cValue;
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
