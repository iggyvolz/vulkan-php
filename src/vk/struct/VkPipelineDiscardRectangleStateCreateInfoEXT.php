<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineDiscardRectangleStateCreateInfoEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "discardRectangleMode" => $this->getDiscardRectangleMode(),
          "discardRectangleCount" => $this->getDiscardRectangleCount(),
          "pDiscardRectangles" => $this->getPDiscardRectangles(),
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
        null|array $flags = null,
        null|\iggyvolz\vulkan\enum\VkDiscardRectangleModeEXT $discardRectangleMode = null,
        null|int $discardRectangleCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pDiscardRectangles = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineDiscardRectangleStateCreateInfoEXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($discardRectangleMode)) $self->setDiscardRectangleMode($discardRectangleMode);
        if(!is_null($discardRectangleCount)) $self->setDiscardRectangleCount($discardRectangleCount);
        if(!is_null($pDiscardRectangles)) $self->setPDiscardRectangles($pDiscardRectangles);
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
     * VkPipelineDiscardRectangleStateCreateFlagsEXT/
     */
    public function getFlags(): array
    {
        $cValue = $this->cdata->flags;
        $phpValue = [];
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $cValue = 0;
        $this->cdata->flags = $cValue;
    }

    /**
     * VkDiscardRectangleModeEXT/
     */
    public function getDiscardRectangleMode(): \iggyvolz\vulkan\enum\VkDiscardRectangleModeEXT
    {
        $cValue = $this->cdata->discardRectangleMode;
        $phpValue = \iggyvolz\vulkan\enum\VkDiscardRectangleModeEXT::from($cValue);
        return $phpValue;
    }

    public function setDiscardRectangleMode(\iggyvolz\vulkan\enum\VkDiscardRectangleModeEXT $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->discardRectangleMode = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDiscardRectangleCount(): int
    {
        $cValue = $this->cdata->discardRectangleCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDiscardRectangleCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->discardRectangleCount = $cValue;
    }

    /**
     * VkRect2D* /
     */
    public function getPDiscardRectangles(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pDiscardRectangles;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkRect2D', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPDiscardRectangles(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pDiscardRectangles = $cValue;
    }
}
