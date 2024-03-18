<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkAttachmentSampleCountInfoAMD implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "colorAttachmentCount" => $this->getColorAttachmentCount(),
          "pColorAttachmentSamples" => $this->getPColorAttachmentSamples(),
          "depthStencilAttachmentSamples" => $this->getDepthStencilAttachmentSamples(),
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
        null|int $colorAttachmentCount = null,
        null|\iggyvolz\vulkan\util\Pointer $pColorAttachmentSamples = null,
        null|\iggyvolz\vulkan\enum\VkSampleCountFlagBits $depthStencilAttachmentSamples = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkAttachmentSampleCountInfoAMD', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($colorAttachmentCount)) $self->setColorAttachmentCount($colorAttachmentCount);
        if(!is_null($pColorAttachmentSamples)) $self->setPColorAttachmentSamples($pColorAttachmentSamples);
        if(!is_null($depthStencilAttachmentSamples)) $self->setDepthStencilAttachmentSamples($depthStencilAttachmentSamples);
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
    public function getColorAttachmentCount(): int
    {
        $cValue = $this->cdata->colorAttachmentCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setColorAttachmentCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->colorAttachmentCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPColorAttachmentSamples(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pColorAttachmentSamples;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPColorAttachmentSamples(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pColorAttachmentSamples = $cValue;
    }

    /**
     * VkSampleCountFlagBits/
     */
    public function getDepthStencilAttachmentSamples(): \iggyvolz\vulkan\enum\VkSampleCountFlagBits
    {
        $cValue = $this->cdata->depthStencilAttachmentSamples;
        $phpValue = \iggyvolz\vulkan\enum\VkSampleCountFlagBits::from($cValue);
        return $phpValue;
    }

    public function setDepthStencilAttachmentSamples(\iggyvolz\vulkan\enum\VkSampleCountFlagBits $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->depthStencilAttachmentSamples = $cValue;
    }
}
