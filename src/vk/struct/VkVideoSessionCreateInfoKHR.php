<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoSessionCreateInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "queueFamilyIndex" => $this->getQueueFamilyIndex(),
          "flags" => $this->getFlags(),
          "pVideoProfile" => $this->getPVideoProfile(),
          "pictureFormat" => $this->getPictureFormat(),
          "maxCodedExtent" => $this->getMaxCodedExtent(),
          "referencePictureFormat" => $this->getReferencePictureFormat(),
          "maxDpbSlots" => $this->getMaxDpbSlots(),
          "maxActiveReferencePictures" => $this->getMaxActiveReferencePictures(),
          "pStdHeaderVersion" => $this->getPStdHeaderVersion(),
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
        null|int $queueFamilyIndex = null,
        null|array $flags = null,
        null|\iggyvolz\vulkan\util\Pointer $pVideoProfile = null,
        null|\iggyvolz\vulkan\enum\VkFormat $pictureFormat = null,
        null|VkExtent2D $maxCodedExtent = null,
        null|\iggyvolz\vulkan\enum\VkFormat $referencePictureFormat = null,
        null|int $maxDpbSlots = null,
        null|int $maxActiveReferencePictures = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pStdHeaderVersion = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoSessionCreateInfoKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($queueFamilyIndex)) $self->setQueueFamilyIndex($queueFamilyIndex);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($pVideoProfile)) $self->setPVideoProfile($pVideoProfile);
        if(!is_null($pictureFormat)) $self->setPictureFormat($pictureFormat);
        if(!is_null($maxCodedExtent)) $self->setMaxCodedExtent($maxCodedExtent);
        if(!is_null($referencePictureFormat)) $self->setReferencePictureFormat($referencePictureFormat);
        if(!is_null($maxDpbSlots)) $self->setMaxDpbSlots($maxDpbSlots);
        if(!is_null($maxActiveReferencePictures)) $self->setMaxActiveReferencePictures($maxActiveReferencePictures);
        if(!is_null($pStdHeaderVersion)) $self->setPStdHeaderVersion($pStdHeaderVersion);
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
    public function getQueueFamilyIndex(): int
    {
        $cValue = $this->cdata->queueFamilyIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setQueueFamilyIndex(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->queueFamilyIndex = $cValue;
    }

    /**
     * VkVideoSessionCreateFlagsKHR/
     */
    public function getFlags(): array
    {
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkVideoSessionCreateFlagBitsKHR::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkVideoSessionCreateFlagBitsKHR::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * void* /
     */
    public function getPVideoProfile(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pVideoProfile;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPVideoProfile(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pVideoProfile = $cValue;
    }

    /**
     * VkFormat/
     */
    public function getPictureFormat(): \iggyvolz\vulkan\enum\VkFormat
    {
        $cValue = $this->cdata->pictureFormat;
        $phpValue = \iggyvolz\vulkan\enum\VkFormat::from($cValue);
        return $phpValue;
    }

    public function setPictureFormat(\iggyvolz\vulkan\enum\VkFormat $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->pictureFormat = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getMaxCodedExtent(): VkExtent2D
    {
        $cValue = $this->cdata->maxCodedExtent;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setMaxCodedExtent(VkExtent2D $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->maxCodedExtent = $cValue;
    }

    /**
     * VkFormat/
     */
    public function getReferencePictureFormat(): \iggyvolz\vulkan\enum\VkFormat
    {
        $cValue = $this->cdata->referencePictureFormat;
        $phpValue = \iggyvolz\vulkan\enum\VkFormat::from($cValue);
        return $phpValue;
    }

    public function setReferencePictureFormat(\iggyvolz\vulkan\enum\VkFormat $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->referencePictureFormat = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxDpbSlots(): int
    {
        $cValue = $this->cdata->maxDpbSlots;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxDpbSlots(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxDpbSlots = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxActiveReferencePictures(): int
    {
        $cValue = $this->cdata->maxActiveReferencePictures;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxActiveReferencePictures(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxActiveReferencePictures = $cValue;
    }

    /**
     * VkExtensionProperties* /
     */
    public function getPStdHeaderVersion(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pStdHeaderVersion;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkExtensionProperties', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPStdHeaderVersion(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pStdHeaderVersion = $cValue;
    }
}
