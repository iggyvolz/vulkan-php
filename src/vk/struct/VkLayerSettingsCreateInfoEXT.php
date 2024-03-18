<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkLayerSettingsCreateInfoEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "settingCount" => $this->getSettingCount(),
          "pSettings" => $this->getPSettings(),
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
        null|int $settingCount = null,
        null|\iggyvolz\vulkan\util\Pointer $pSettings = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkLayerSettingsCreateInfoEXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($settingCount)) $self->setSettingCount($settingCount);
        if(!is_null($pSettings)) $self->setPSettings($pSettings);
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
    public function getSettingCount(): int
    {
        $cValue = $this->cdata->settingCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSettingCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->settingCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPSettings(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pSettings;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPSettings(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pSettings = $cValue;
    }
}
