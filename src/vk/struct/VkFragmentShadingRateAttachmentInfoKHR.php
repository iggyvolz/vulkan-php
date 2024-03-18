<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkFragmentShadingRateAttachmentInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "pFragmentShadingRateAttachment" => $this->getPFragmentShadingRateAttachment(),
          "shadingRateAttachmentTexelSize" => $this->getShadingRateAttachmentTexelSize(),
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
        null|\iggyvolz\vulkan\util\ObjectPointer $pFragmentShadingRateAttachment = null,
        null|VkExtent2D $shadingRateAttachmentTexelSize = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkFragmentShadingRateAttachmentInfoKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($pFragmentShadingRateAttachment)) $self->setPFragmentShadingRateAttachment($pFragmentShadingRateAttachment);
        if(!is_null($shadingRateAttachmentTexelSize)) $self->setShadingRateAttachmentTexelSize($shadingRateAttachmentTexelSize);
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
     * VkAttachmentReference2* /
     */
    public function getPFragmentShadingRateAttachment(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pFragmentShadingRateAttachment;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkAttachmentReference2', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPFragmentShadingRateAttachment(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pFragmentShadingRateAttachment = $cValue;
    }

    /**
     * VkExtent2D/
     */
    public function getShadingRateAttachmentTexelSize(): VkExtent2D
    {
        $cValue = $this->cdata->shadingRateAttachmentTexelSize;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setShadingRateAttachmentTexelSize(VkExtent2D $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->shadingRateAttachmentTexelSize = $cValue;
    }
}
