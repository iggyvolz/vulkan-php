<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkRenderPassStripeSubmitInfoARM implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "stripeSemaphoreInfoCount" => $this->getStripeSemaphoreInfoCount(),
          "pStripeSemaphoreInfos" => $this->getPStripeSemaphoreInfos(),
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
        null|int $stripeSemaphoreInfoCount = null,
        null|VkSemaphoreSubmitInfo $pStripeSemaphoreInfos = null,
    ): self {
        $self = new self( $ffi->new('VkRenderPassStripeSubmitInfoARM', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($stripeSemaphoreInfoCount)) $self->setStripeSemaphoreInfoCount($stripeSemaphoreInfoCount);
        if(!is_null($pStripeSemaphoreInfos)) $self->setPStripeSemaphoreInfos($pStripeSemaphoreInfos);
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
    public function getStripeSemaphoreInfoCount(): int
    {
        $cValue = $this->cdata->stripeSemaphoreInfoCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStripeSemaphoreInfoCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->stripeSemaphoreInfoCount = $cValue;
    }

    /**
     * VkSemaphoreSubmitInfo* /
     */
    public function getPStripeSemaphoreInfos(): VkSemaphoreSubmitInfo
    {
        $cValue = $this->cdata->pStripeSemaphoreInfos;
        $phpValue = new \iggyvolz\vulkan\struct\VkSemaphoreSubmitInfo($cValue);
        return $phpValue;
    }

    public function setPStripeSemaphoreInfos(VkSemaphoreSubmitInfo $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pStripeSemaphoreInfos = $cValue;
    }
}
