<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkLayerSettingEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "pLayerName" => $this->getPLayerName(),
          "pSettingName" => $this->getPSettingName(),
          "type" => $this->getType(),
          "valueCount" => $this->getValueCount(),
          "pValues" => $this->getPValues(),
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
        ?string $pLayerName = null,
        ?string $pSettingName = null,
        null|\iggyvolz\vulkan\enum\VkLayerSettingTypeEXT $type = null,
        null|int $valueCount = null,
        null|\iggyvolz\vulkan\util\Pointer $pValues = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkLayerSettingEXT', false));
        if(!is_null($pLayerName)) $self->setPLayerName($pLayerName);
        if(!is_null($pSettingName)) $self->setPSettingName($pSettingName);
        if(!is_null($type)) $self->setType($type);
        if(!is_null($valueCount)) $self->setValueCount($valueCount);
        if(!is_null($pValues)) $self->setPValues($pValues);
        return $self;
    }

    /**
     * const char* /
     */
    public function getPLayerName(): ?string
    {
        $cValue = $this->cdata->pLayerName;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPLayerName(?string $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->pLayerName = $cValue;
    }

    /**
     * const char* /
     */
    public function getPSettingName(): ?string
    {
        $cValue = $this->cdata->pSettingName;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPSettingName(?string $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->pSettingName = $cValue;
    }

    /**
     * VkLayerSettingTypeEXT/
     */
    public function getType(): \iggyvolz\vulkan\enum\VkLayerSettingTypeEXT
    {
        $cValue = $this->cdata->type;
        $phpValue = \iggyvolz\vulkan\enum\VkLayerSettingTypeEXT::from($cValue);
        return $phpValue;
    }

    public function setType(\iggyvolz\vulkan\enum\VkLayerSettingTypeEXT $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->type = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getValueCount(): int
    {
        $cValue = $this->cdata->valueCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setValueCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->valueCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPValues(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pValues;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPValues(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pValues = $cValue;
    }
}
