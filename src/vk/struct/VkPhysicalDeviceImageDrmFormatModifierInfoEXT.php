<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceImageDrmFormatModifierInfoEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "drmFormatModifier" => $this->getDrmFormatModifier(),
          "sharingMode" => $this->getSharingMode(),
          "queueFamilyIndexCount" => $this->getQueueFamilyIndexCount(),
          "pQueueFamilyIndices" => $this->getPQueueFamilyIndices(),
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
        null|int $drmFormatModifier = null,
        null|\iggyvolz\vulkan\enum\VkSharingMode $sharingMode = null,
        null|int $queueFamilyIndexCount = null,
        null|\iggyvolz\vulkan\util\IntPointer $pQueueFamilyIndices = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceImageDrmFormatModifierInfoEXT', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($drmFormatModifier)) $self->setDrmFormatModifier($drmFormatModifier);
        if(!is_null($sharingMode)) $self->setSharingMode($sharingMode);
        if(!is_null($queueFamilyIndexCount)) $self->setQueueFamilyIndexCount($queueFamilyIndexCount);
        if(!is_null($pQueueFamilyIndices)) $self->setPQueueFamilyIndices($pQueueFamilyIndices);
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
     * uint64_t/
     */
    public function getDrmFormatModifier(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->drmFormatModifier;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDrmFormatModifier(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->drmFormatModifier = $cValue;
    }

    /**
     * VkSharingMode/
     */
    public function getSharingMode(): \iggyvolz\vulkan\enum\VkSharingMode
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sharingMode;
        $phpValue = \iggyvolz\vulkan\enum\VkSharingMode::from($cValue);
        return $phpValue;
    }

    public function setSharingMode(\iggyvolz\vulkan\enum\VkSharingMode $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sharingMode = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getQueueFamilyIndexCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->queueFamilyIndexCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setQueueFamilyIndexCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->queueFamilyIndexCount = $cValue;
    }

    /**
     * uint32_t* /
     */
    public function getPQueueFamilyIndices(): \iggyvolz\vulkan\util\IntPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pQueueFamilyIndices;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPQueueFamilyIndices(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pQueueFamilyIndices = $cValue;
    }
}
