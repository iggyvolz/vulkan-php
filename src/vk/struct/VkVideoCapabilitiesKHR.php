<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoCapabilitiesKHR
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
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|array $flags = null,
        null|int $minBitstreamBufferOffsetAlignment = null,
        null|int $minBitstreamBufferSizeAlignment = null,
        null|VkExtent2D $pictureAccessGranularity = null,
        null|VkExtent2D $minCodedExtent = null,
        null|VkExtent2D $maxCodedExtent = null,
        null|int $maxDpbSlots = null,
        null|int $maxActiveReferencePictures = null,
        null|VkExtensionProperties $stdHeaderVersion = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoCapabilitiesKHR', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($minBitstreamBufferOffsetAlignment)) $self->setMinBitstreamBufferOffsetAlignment($minBitstreamBufferOffsetAlignment);
        if(!is_null($minBitstreamBufferSizeAlignment)) $self->setMinBitstreamBufferSizeAlignment($minBitstreamBufferSizeAlignment);
        if(!is_null($pictureAccessGranularity)) $self->setPictureAccessGranularity($pictureAccessGranularity);
        if(!is_null($minCodedExtent)) $self->setMinCodedExtent($minCodedExtent);
        if(!is_null($maxCodedExtent)) $self->setMaxCodedExtent($maxCodedExtent);
        if(!is_null($maxDpbSlots)) $self->setMaxDpbSlots($maxDpbSlots);
        if(!is_null($maxActiveReferencePictures)) $self->setMaxActiveReferencePictures($maxActiveReferencePictures);
        if(!is_null($stdHeaderVersion)) $self->setStdHeaderVersion($stdHeaderVersion);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * VkVideoCapabilityFlagsKHR/
     */
    public function getFlags(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkVideoCapabilityFlagBitsKHR::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkVideoCapabilityFlagBitsKHR::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getMinBitstreamBufferOffsetAlignment(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->minBitstreamBufferOffsetAlignment;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinBitstreamBufferOffsetAlignment(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->minBitstreamBufferOffsetAlignment = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getMinBitstreamBufferSizeAlignment(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->minBitstreamBufferSizeAlignment;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinBitstreamBufferSizeAlignment(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->minBitstreamBufferSizeAlignment = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getPictureAccessGranularity(): VkExtent2D
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pictureAccessGranularity;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setPictureAccessGranularity(VkExtent2D $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pictureAccessGranularity = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getMinCodedExtent(): VkExtent2D
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->minCodedExtent;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setMinCodedExtent(VkExtent2D $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->minCodedExtent = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getMaxCodedExtent(): VkExtent2D
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxCodedExtent;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setMaxCodedExtent(VkExtent2D $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->maxCodedExtent = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDpbSlots(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxDpbSlots;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDpbSlots(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxDpbSlots = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxActiveReferencePictures(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->maxActiveReferencePictures;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxActiveReferencePictures(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->maxActiveReferencePictures = $cValue;
    }

    /**
     * VkExtensionProperties/
     */
    public function getStdHeaderVersion(): VkExtensionProperties
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->stdHeaderVersion;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtensionProperties($cValue, $ffi);
        return $phpValue;
    }

    public function setStdHeaderVersion(VkExtensionProperties $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->stdHeaderVersion = $cValue;
    }
}
