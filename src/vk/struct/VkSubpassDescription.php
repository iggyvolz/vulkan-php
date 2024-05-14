<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSubpassDescription implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "flags" => $this->getFlags(),
          "pipelineBindPoint" => $this->getPipelineBindPoint(),
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
    ) {
    }

    public static function create(
        \FFI $ffi,
        null|array $flags = null,
        null|\iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint = null,
        null|int $inputAttachmentCount = null,
        null|VkAttachmentReference $pInputAttachments = null,
        null|int $colorAttachmentCount = null,
        null|VkAttachmentReference $pColorAttachments = null,
        null|VkAttachmentReference $pResolveAttachments = null,
        null|VkAttachmentReference $pDepthStencilAttachment = null,
        null|int $preserveAttachmentCount = null,
        null|\iggyvolz\vulkan\util\IntPointer $pPreserveAttachments = null,
    ): self {
        $self = new self( $ffi->new('VkSubpassDescription', false));
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($pipelineBindPoint)) $self->setPipelineBindPoint($pipelineBindPoint);
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
     * VkSubpassDescriptionFlags/
     */
    public function getFlags(): array
    {
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkSubpassDescriptionFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkSubpassDescriptionFlagBits::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * VkPipelineBindPoint/
     */
    public function getPipelineBindPoint(): \iggyvolz\vulkan\enum\VkPipelineBindPoint
    {
        $cValue = $this->cdata->pipelineBindPoint;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineBindPoint::from($cValue);
        return $phpValue;
    }

    public function setPipelineBindPoint(\iggyvolz\vulkan\enum\VkPipelineBindPoint $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->pipelineBindPoint = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getInputAttachmentCount(): int
    {
        $cValue = $this->cdata->inputAttachmentCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setInputAttachmentCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->inputAttachmentCount = $cValue;
    }

    /**
     * VkAttachmentReference* /
     */
    public function getPInputAttachments(): VkAttachmentReference
    {
        $cValue = $this->cdata->pInputAttachments;
        $phpValue = new \iggyvolz\vulkan\struct\VkAttachmentReference($cValue);
        return $phpValue;
    }

    public function setPInputAttachments(VkAttachmentReference $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pInputAttachments = $cValue;
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
     * VkAttachmentReference* /
     */
    public function getPColorAttachments(): VkAttachmentReference
    {
        $cValue = $this->cdata->pColorAttachments;
        $phpValue = new \iggyvolz\vulkan\struct\VkAttachmentReference($cValue);
        return $phpValue;
    }

    public function setPColorAttachments(VkAttachmentReference $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pColorAttachments = $cValue;
    }

    /**
     * VkAttachmentReference* /
     */
    public function getPResolveAttachments(): VkAttachmentReference
    {
        $cValue = $this->cdata->pResolveAttachments;
        $phpValue = new \iggyvolz\vulkan\struct\VkAttachmentReference($cValue);
        return $phpValue;
    }

    public function setPResolveAttachments(VkAttachmentReference $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pResolveAttachments = $cValue;
    }

    /**
     * VkAttachmentReference* /
     */
    public function getPDepthStencilAttachment(): VkAttachmentReference
    {
        $cValue = $this->cdata->pDepthStencilAttachment;
        $phpValue = new \iggyvolz\vulkan\struct\VkAttachmentReference($cValue);
        return $phpValue;
    }

    public function setPDepthStencilAttachment(VkAttachmentReference $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pDepthStencilAttachment = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPreserveAttachmentCount(): int
    {
        $cValue = $this->cdata->preserveAttachmentCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPreserveAttachmentCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->preserveAttachmentCount = $cValue;
    }

    /**
     * uint32_t* /
     */
    public function getPPreserveAttachments(): \iggyvolz\vulkan\util\IntPointer
    {
        $cValue = $this->cdata->pPreserveAttachments;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPPreserveAttachments(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pPreserveAttachments = $cValue;
    }
}
