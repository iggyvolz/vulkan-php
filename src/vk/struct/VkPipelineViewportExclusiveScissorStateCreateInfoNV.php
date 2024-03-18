<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineViewportExclusiveScissorStateCreateInfoNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "exclusiveScissorCount" => $this->getExclusiveScissorCount(),
          "pExclusiveScissors" => $this->getPExclusiveScissors(),
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
        null|int $exclusiveScissorCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pExclusiveScissors = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineViewportExclusiveScissorStateCreateInfoNV', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($exclusiveScissorCount)) $self->setExclusiveScissorCount($exclusiveScissorCount);
        if(!is_null($pExclusiveScissors)) $self->setPExclusiveScissors($pExclusiveScissors);
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
    public function getExclusiveScissorCount(): int
    {
        $cValue = $this->cdata->exclusiveScissorCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setExclusiveScissorCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->exclusiveScissorCount = $cValue;
    }

    /**
     * VkRect2D* /
     */
    public function getPExclusiveScissors(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pExclusiveScissors;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkRect2D', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPExclusiveScissors(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pExclusiveScissors = $cValue;
    }
}
