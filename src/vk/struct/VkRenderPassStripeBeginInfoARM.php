<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkRenderPassStripeBeginInfoARM implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "stripeInfoCount" => $this->getStripeInfoCount(),
          "pStripeInfos" => $this->getPStripeInfos(),
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
        \FFI $ffi,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|int $stripeInfoCount = null,
        null|VkRenderPassStripeInfoARM $pStripeInfos = null,
    ): self {
        $self = new self( $ffi->new('VkRenderPassStripeBeginInfoARM', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($stripeInfoCount)) $self->setStripeInfoCount($stripeInfoCount);
        if(!is_null($pStripeInfos)) $self->setPStripeInfos($pStripeInfos);
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
    public function getStripeInfoCount(): int
    {
        $cValue = $this->cdata->stripeInfoCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStripeInfoCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->stripeInfoCount = $cValue;
    }

    /**
     * VkRenderPassStripeInfoARM* /
     */
    public function getPStripeInfos(): VkRenderPassStripeInfoARM
    {
        $cValue = $this->cdata->pStripeInfos;
        $phpValue = new \iggyvolz\vulkan\struct\VkRenderPassStripeInfoARM($cValue);
        return $phpValue;
    }

    public function setPStripeInfos(VkRenderPassStripeInfoARM $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pStripeInfos = $cValue;
    }
}
