<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineViewportWScalingStateCreateInfoNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "viewportWScalingEnable" => $this->getViewportWScalingEnable(),
          "viewportCount" => $this->getViewportCount(),
          "pViewportWScalings" => $this->getPViewportWScalings(),
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
        null|bool $viewportWScalingEnable = null,
        null|int $viewportCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pViewportWScalings = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineViewportWScalingStateCreateInfoNV', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($viewportWScalingEnable)) $self->setViewportWScalingEnable($viewportWScalingEnable);
        if(!is_null($viewportCount)) $self->setViewportCount($viewportCount);
        if(!is_null($pViewportWScalings)) $self->setPViewportWScalings($pViewportWScalings);
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
    public function getViewportWScalingEnable(): bool
    {
        $cValue = $this->cdata->viewportWScalingEnable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setViewportWScalingEnable(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->viewportWScalingEnable = $cValue;
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
     * VkViewportWScalingNV* /
     */
    public function getPViewportWScalings(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pViewportWScalings;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkViewportWScalingNV', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPViewportWScalings(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pViewportWScalings = $cValue;
    }
}
