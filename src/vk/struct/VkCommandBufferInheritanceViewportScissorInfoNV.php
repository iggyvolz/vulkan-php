<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkCommandBufferInheritanceViewportScissorInfoNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "viewportScissor2D" => $this->getViewportScissor2D(),
          "viewportDepthCount" => $this->getViewportDepthCount(),
          "pViewportDepths" => $this->getPViewportDepths(),
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
        null|bool $viewportScissor2D = null,
        null|int $viewportDepthCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pViewportDepths = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkCommandBufferInheritanceViewportScissorInfoNV', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($viewportScissor2D)) $self->setViewportScissor2D($viewportScissor2D);
        if(!is_null($viewportDepthCount)) $self->setViewportDepthCount($viewportDepthCount);
        if(!is_null($pViewportDepths)) $self->setPViewportDepths($pViewportDepths);
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
     * uint32_t/
     */
    public function getViewportScissor2D(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->viewportScissor2D;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setViewportScissor2D(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->viewportScissor2D = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getViewportDepthCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->viewportDepthCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setViewportDepthCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->viewportDepthCount = $cValue;
    }

    /**
     * VkViewport* /
     */
    public function getPViewportDepths(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pViewportDepths;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkViewport', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPViewportDepths(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pViewportDepths = $cValue;
    }
}
