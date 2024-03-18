<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkLatencySleepModeInfoNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "lowLatencyMode" => $this->getLowLatencyMode(),
          "lowLatencyBoost" => $this->getLowLatencyBoost(),
          "minimumIntervalUs" => $this->getMinimumIntervalUs(),
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
        null|bool $lowLatencyMode = null,
        null|bool $lowLatencyBoost = null,
        null|int $minimumIntervalUs = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkLatencySleepModeInfoNV', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($lowLatencyMode)) $self->setLowLatencyMode($lowLatencyMode);
        if(!is_null($lowLatencyBoost)) $self->setLowLatencyBoost($lowLatencyBoost);
        if(!is_null($minimumIntervalUs)) $self->setMinimumIntervalUs($minimumIntervalUs);
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
    public function getLowLatencyMode(): bool
    {
        $cValue = $this->cdata->lowLatencyMode;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setLowLatencyMode(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->lowLatencyMode = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getLowLatencyBoost(): bool
    {
        $cValue = $this->cdata->lowLatencyBoost;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setLowLatencyBoost(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->lowLatencyBoost = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMinimumIntervalUs(): int
    {
        $cValue = $this->cdata->minimumIntervalUs;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinimumIntervalUs(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->minimumIntervalUs = $cValue;
    }
}
