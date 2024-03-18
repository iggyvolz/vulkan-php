<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceRenderPassStripedPropertiesARM implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "renderPassStripeGranularity" => $this->getRenderPassStripeGranularity(),
          "maxRenderPassStripes" => $this->getMaxRenderPassStripes(),
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
        null|VkExtent2D $renderPassStripeGranularity = null,
        null|int $maxRenderPassStripes = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceRenderPassStripedPropertiesARM', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($renderPassStripeGranularity)) $self->setRenderPassStripeGranularity($renderPassStripeGranularity);
        if(!is_null($maxRenderPassStripes)) $self->setMaxRenderPassStripes($maxRenderPassStripes);
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
     * VkExtent2D/
     */
    public function getRenderPassStripeGranularity(): VkExtent2D
    {
        $cValue = $this->cdata->renderPassStripeGranularity;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setRenderPassStripeGranularity(VkExtent2D $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->renderPassStripeGranularity = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxRenderPassStripes(): int
    {
        $cValue = $this->cdata->maxRenderPassStripes;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxRenderPassStripes(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxRenderPassStripes = $cValue;
    }
}
