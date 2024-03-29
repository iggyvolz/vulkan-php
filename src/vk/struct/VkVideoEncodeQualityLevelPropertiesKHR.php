<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoEncodeQualityLevelPropertiesKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "preferredRateControlMode" => $this->getPreferredRateControlMode(),
          "preferredRateControlLayerCount" => $this->getPreferredRateControlLayerCount(),
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
        null|\iggyvolz\vulkan\enum\VkVideoEncodeRateControlModeFlagBitsKHR $preferredRateControlMode = null,
        null|int $preferredRateControlLayerCount = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoEncodeQualityLevelPropertiesKHR', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($preferredRateControlMode)) $self->setPreferredRateControlMode($preferredRateControlMode);
        if(!is_null($preferredRateControlLayerCount)) $self->setPreferredRateControlLayerCount($preferredRateControlLayerCount);
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
     * VkVideoEncodeRateControlModeFlagBitsKHR/
     */
    public function getPreferredRateControlMode(): \iggyvolz\vulkan\enum\VkVideoEncodeRateControlModeFlagBitsKHR
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->preferredRateControlMode;
        $phpValue = \iggyvolz\vulkan\enum\VkVideoEncodeRateControlModeFlagBitsKHR::from($cValue);
        return $phpValue;
    }

    public function setPreferredRateControlMode(
        \iggyvolz\vulkan\enum\VkVideoEncodeRateControlModeFlagBitsKHR $phpValue,
    ): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->preferredRateControlMode = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPreferredRateControlLayerCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->preferredRateControlLayerCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPreferredRateControlLayerCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->preferredRateControlLayerCount = $cValue;
    }
}
