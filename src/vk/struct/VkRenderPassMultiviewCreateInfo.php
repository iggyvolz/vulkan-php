<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkRenderPassMultiviewCreateInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "subpassCount" => $this->getSubpassCount(),
          "pViewMasks" => $this->getPViewMasks(),
          "dependencyCount" => $this->getDependencyCount(),
          "pViewOffsets" => $this->getPViewOffsets(),
          "correlationMaskCount" => $this->getCorrelationMaskCount(),
          "pCorrelationMasks" => $this->getPCorrelationMasks(),
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
        null|int $subpassCount = null,
        null|\iggyvolz\vulkan\util\IntPointer $pViewMasks = null,
        null|int $dependencyCount = null,
        null|\iggyvolz\vulkan\util\Pointer $pViewOffsets = null,
        null|int $correlationMaskCount = null,
        null|\iggyvolz\vulkan\util\IntPointer $pCorrelationMasks = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkRenderPassMultiviewCreateInfo', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($subpassCount)) $self->setSubpassCount($subpassCount);
        if(!is_null($pViewMasks)) $self->setPViewMasks($pViewMasks);
        if(!is_null($dependencyCount)) $self->setDependencyCount($dependencyCount);
        if(!is_null($pViewOffsets)) $self->setPViewOffsets($pViewOffsets);
        if(!is_null($correlationMaskCount)) $self->setCorrelationMaskCount($correlationMaskCount);
        if(!is_null($pCorrelationMasks)) $self->setPCorrelationMasks($pCorrelationMasks);
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
    public function getSubpassCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->subpassCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSubpassCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->subpassCount = $cValue;
    }

    /**
     * uint32_t* /
     */
    public function getPViewMasks(): \iggyvolz\vulkan\util\IntPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pViewMasks;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPViewMasks(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pViewMasks = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDependencyCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->dependencyCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDependencyCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->dependencyCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPViewOffsets(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pViewOffsets;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPViewOffsets(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pViewOffsets = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getCorrelationMaskCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->correlationMaskCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCorrelationMaskCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->correlationMaskCount = $cValue;
    }

    /**
     * uint32_t* /
     */
    public function getPCorrelationMasks(): \iggyvolz\vulkan\util\IntPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pCorrelationMasks;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPCorrelationMasks(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pCorrelationMasks = $cValue;
    }
}
