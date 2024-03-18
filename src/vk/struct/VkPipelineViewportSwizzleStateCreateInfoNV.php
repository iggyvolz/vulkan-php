<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineViewportSwizzleStateCreateInfoNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "viewportCount" => $this->getViewportCount(),
          "pViewportSwizzles" => $this->getPViewportSwizzles(),
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
        null|int $viewportCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pViewportSwizzles = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineViewportSwizzleStateCreateInfoNV', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($viewportCount)) $self->setViewportCount($viewportCount);
        if(!is_null($pViewportSwizzles)) $self->setPViewportSwizzles($pViewportSwizzles);
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
     * VkPipelineViewportSwizzleStateCreateFlagsNV/
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
     * uint32_t/
     */
    public function getViewportCount(): int
    {
        $cValue = $this->cdata->viewportCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setViewportCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->viewportCount = $cValue;
    }

    /**
     * VkViewportSwizzleNV* /
     */
    public function getPViewportSwizzles(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pViewportSwizzles;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkViewportSwizzleNV', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPViewportSwizzles(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pViewportSwizzles = $cValue;
    }
}
