<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkRenderingAreaInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "viewMask" => $this->getViewMask(),
          "colorAttachmentCount" => $this->getColorAttachmentCount(),
          "pColorAttachmentFormats" => $this->getPColorAttachmentFormats(),
          "depthAttachmentFormat" => $this->getDepthAttachmentFormat(),
          "stencilAttachmentFormat" => $this->getStencilAttachmentFormat(),
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
        null|int $viewMask = null,
        null|int $colorAttachmentCount = null,
        null|\iggyvolz\vulkan\util\Pointer $pColorAttachmentFormats = null,
        null|\iggyvolz\vulkan\enum\VkFormat $depthAttachmentFormat = null,
        null|\iggyvolz\vulkan\enum\VkFormat $stencilAttachmentFormat = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkRenderingAreaInfoKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($viewMask)) $self->setViewMask($viewMask);
        if(!is_null($colorAttachmentCount)) $self->setColorAttachmentCount($colorAttachmentCount);
        if(!is_null($pColorAttachmentFormats)) $self->setPColorAttachmentFormats($pColorAttachmentFormats);
        if(!is_null($depthAttachmentFormat)) $self->setDepthAttachmentFormat($depthAttachmentFormat);
        if(!is_null($stencilAttachmentFormat)) $self->setStencilAttachmentFormat($stencilAttachmentFormat);
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
    public function getViewMask(): int
    {
        $cValue = $this->cdata->viewMask;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setViewMask(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->viewMask = $cValue;
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
    public function getPColorAttachmentFormats(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pColorAttachmentFormats;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPColorAttachmentFormats(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pColorAttachmentFormats = $cValue;
    }

    /**
     * VkFormat/
     */
    public function getDepthAttachmentFormat(): \iggyvolz\vulkan\enum\VkFormat
    {
        $cValue = $this->cdata->depthAttachmentFormat;
        $phpValue = \iggyvolz\vulkan\enum\VkFormat::from($cValue);
        return $phpValue;
    }

    public function setDepthAttachmentFormat(\iggyvolz\vulkan\enum\VkFormat $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->depthAttachmentFormat = $cValue;
    }

    /**
     * VkFormat/
     */
    public function getStencilAttachmentFormat(): \iggyvolz\vulkan\enum\VkFormat
    {
        $cValue = $this->cdata->stencilAttachmentFormat;
        $phpValue = \iggyvolz\vulkan\enum\VkFormat::from($cValue);
        return $phpValue;
    }

    public function setStencilAttachmentFormat(\iggyvolz\vulkan\enum\VkFormat $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->stencilAttachmentFormat = $cValue;
    }
}
