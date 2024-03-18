<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceDescriptorBufferFeaturesEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "descriptorBuffer" => $this->getDescriptorBuffer(),
          "descriptorBufferCaptureReplay" => $this->getDescriptorBufferCaptureReplay(),
          "descriptorBufferImageLayoutIgnored" => $this->getDescriptorBufferImageLayoutIgnored(),
          "descriptorBufferPushDescriptors" => $this->getDescriptorBufferPushDescriptors(),
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
        null|bool $descriptorBuffer = null,
        null|bool $descriptorBufferCaptureReplay = null,
        null|bool $descriptorBufferImageLayoutIgnored = null,
        null|bool $descriptorBufferPushDescriptors = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceDescriptorBufferFeaturesEXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($descriptorBuffer)) $self->setDescriptorBuffer($descriptorBuffer);
        if(!is_null($descriptorBufferCaptureReplay)) $self->setDescriptorBufferCaptureReplay($descriptorBufferCaptureReplay);
        if(!is_null($descriptorBufferImageLayoutIgnored)) $self->setDescriptorBufferImageLayoutIgnored($descriptorBufferImageLayoutIgnored);
        if(!is_null($descriptorBufferPushDescriptors)) $self->setDescriptorBufferPushDescriptors($descriptorBufferPushDescriptors);
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
    public function getDescriptorBuffer(): bool
    {
        $cValue = $this->cdata->descriptorBuffer;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorBuffer(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorBuffer = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorBufferCaptureReplay(): bool
    {
        $cValue = $this->cdata->descriptorBufferCaptureReplay;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorBufferCaptureReplay(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorBufferCaptureReplay = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorBufferImageLayoutIgnored(): bool
    {
        $cValue = $this->cdata->descriptorBufferImageLayoutIgnored;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorBufferImageLayoutIgnored(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorBufferImageLayoutIgnored = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDescriptorBufferPushDescriptors(): bool
    {
        $cValue = $this->cdata->descriptorBufferPushDescriptors;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDescriptorBufferPushDescriptors(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->descriptorBufferPushDescriptors = $cValue;
    }
}
