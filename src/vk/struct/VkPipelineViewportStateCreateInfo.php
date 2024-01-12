<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineViewportStateCreateInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "viewportCount" => $this->getViewportCount(),
          "pViewports" => $this->getPViewports(),
          "scissorCount" => $this->getScissorCount(),
          "pScissors" => $this->getPScissors(),
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
        null|int $viewportCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pViewports = null,
        null|int $scissorCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pScissors = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineViewportStateCreateInfo', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($viewportCount)) $self->setViewportCount($viewportCount);
        if(!is_null($pViewports)) $self->setPViewports($pViewports);
        if(!is_null($scissorCount)) $self->setScissorCount($scissorCount);
        if(!is_null($pScissors)) $self->setPScissors($pScissors);
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
     * VkPipelineViewportStateCreateFlags/
     */
    public function getFlags(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = [];
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = 0;
        $this->cdata->flags = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getViewportCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->viewportCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setViewportCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->viewportCount = $cValue;
    }

    /**
     * VkViewport* /
     */
    public function getPViewports(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pViewports;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkViewport', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPViewports(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pViewports = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getScissorCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->scissorCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setScissorCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->scissorCount = $cValue;
    }

    /**
     * VkRect2D* /
     */
    public function getPScissors(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pScissors;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkRect2D', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPScissors(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pScissors = $cValue;
    }
}
