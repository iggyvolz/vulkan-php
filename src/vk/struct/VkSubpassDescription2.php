<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSubpassDescription2 implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "pipelineBindPoint" => $this->getPipelineBindPoint(),
          "viewMask" => $this->getViewMask(),
          "inputAttachmentCount" => $this->getInputAttachmentCount(),
          "pInputAttachments" => $this->getPInputAttachments(),
          "colorAttachmentCount" => $this->getColorAttachmentCount(),
          "pColorAttachments" => $this->getPColorAttachments(),
          "pResolveAttachments" => $this->getPResolveAttachments(),
          "pDepthStencilAttachment" => $this->getPDepthStencilAttachment(),
          "preserveAttachmentCount" => $this->getPreserveAttachmentCount(),
          "pPreserveAttachments" => $this->getPPreserveAttachments(),
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
        null|array $flags = null,
        null|\iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint = null,
        null|int $viewMask = null,
        null|int $inputAttachmentCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pInputAttachments = null,
        null|int $colorAttachmentCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pColorAttachments = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pResolveAttachments = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pDepthStencilAttachment = null,
        null|int $preserveAttachmentCount = null,
        null|\iggyvolz\vulkan\util\IntPointer $pPreserveAttachments = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSubpassDescription2', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($pipelineBindPoint)) $self->setPipelineBindPoint($pipelineBindPoint);
        if(!is_null($viewMask)) $self->setViewMask($viewMask);
        if(!is_null($inputAttachmentCount)) $self->setInputAttachmentCount($inputAttachmentCount);
        if(!is_null($pInputAttachments)) $self->setPInputAttachments($pInputAttachments);
        if(!is_null($colorAttachmentCount)) $self->setColorAttachmentCount($colorAttachmentCount);
        if(!is_null($pColorAttachments)) $self->setPColorAttachments($pColorAttachments);
        if(!is_null($pResolveAttachments)) $self->setPResolveAttachments($pResolveAttachments);
        if(!is_null($pDepthStencilAttachment)) $self->setPDepthStencilAttachment($pDepthStencilAttachment);
        if(!is_null($preserveAttachmentCount)) $self->setPreserveAttachmentCount($preserveAttachmentCount);
        if(!is_null($pPreserveAttachments)) $self->setPPreserveAttachments($pPreserveAttachments);
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
     * VkSubpassDescriptionFlags/
     */
    public function getFlags(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkSubpassDescriptionFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkSubpassDescriptionFlagBits::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * VkPipelineBindPoint/
     */
    public function getPipelineBindPoint(): \iggyvolz\vulkan\enum\VkPipelineBindPoint
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pipelineBindPoint;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineBindPoint::from($cValue);
        return $phpValue;
    }

    public function setPipelineBindPoint(\iggyvolz\vulkan\enum\VkPipelineBindPoint $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->pipelineBindPoint = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getViewMask(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->viewMask;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setViewMask(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->viewMask = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getInputAttachmentCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->inputAttachmentCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setInputAttachmentCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->inputAttachmentCount = $cValue;
    }

    /**
     * VkAttachmentReference2* /
     */
    public function getPInputAttachments(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pInputAttachments;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkAttachmentReference2', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPInputAttachments(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pInputAttachments = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getColorAttachmentCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->colorAttachmentCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setColorAttachmentCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->colorAttachmentCount = $cValue;
    }

    /**
     * VkAttachmentReference2* /
     */
    public function getPColorAttachments(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pColorAttachments;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkAttachmentReference2', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPColorAttachments(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pColorAttachments = $cValue;
    }

    /**
     * VkAttachmentReference2* /
     */
    public function getPResolveAttachments(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pResolveAttachments;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkAttachmentReference2', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPResolveAttachments(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pResolveAttachments = $cValue;
    }

    /**
     * VkAttachmentReference2* /
     */
    public function getPDepthStencilAttachment(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pDepthStencilAttachment;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkAttachmentReference2', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPDepthStencilAttachment(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pDepthStencilAttachment = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPreserveAttachmentCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->preserveAttachmentCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPreserveAttachmentCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->preserveAttachmentCount = $cValue;
    }

    /**
     * uint32_t* /
     */
    public function getPPreserveAttachments(): \iggyvolz\vulkan\util\IntPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pPreserveAttachments;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPPreserveAttachments(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pPreserveAttachments = $cValue;
    }
}
