<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkMultiviewPerViewRenderAreasRenderPassBeginInfoQCOM implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "perViewRenderAreaCount" => $this->getPerViewRenderAreaCount(),
          "pPerViewRenderAreas" => $this->getPPerViewRenderAreas(),
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
        null|int $perViewRenderAreaCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pPerViewRenderAreas = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkMultiviewPerViewRenderAreasRenderPassBeginInfoQCOM', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($perViewRenderAreaCount)) $self->setPerViewRenderAreaCount($perViewRenderAreaCount);
        if(!is_null($pPerViewRenderAreas)) $self->setPPerViewRenderAreas($pPerViewRenderAreas);
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
    public function getPerViewRenderAreaCount(): int
    {
        $cValue = $this->cdata->perViewRenderAreaCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPerViewRenderAreaCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->perViewRenderAreaCount = $cValue;
    }

    /**
     * VkRect2D* /
     */
    public function getPPerViewRenderAreas(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pPerViewRenderAreas;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkRect2D', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPPerViewRenderAreas(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pPerViewRenderAreas = $cValue;
    }
}
