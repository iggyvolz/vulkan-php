<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceWorkgroupMemoryExplicitLayoutFeaturesKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "workgroupMemoryExplicitLayout" => $this->getWorkgroupMemoryExplicitLayout(),
          "workgroupMemoryExplicitLayoutScalarBlockLayout" => $this->getWorkgroupMemoryExplicitLayoutScalarBlockLayout(),
          "workgroupMemoryExplicitLayout8BitAccess" => $this->getWorkgroupMemoryExplicitLayout8BitAccess(),
          "workgroupMemoryExplicitLayout16BitAccess" => $this->getWorkgroupMemoryExplicitLayout16BitAccess(),
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
        null|bool $workgroupMemoryExplicitLayout = null,
        null|bool $workgroupMemoryExplicitLayoutScalarBlockLayout = null,
        null|bool $workgroupMemoryExplicitLayout8BitAccess = null,
        null|bool $workgroupMemoryExplicitLayout16BitAccess = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceWorkgroupMemoryExplicitLayoutFeaturesKHR', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($workgroupMemoryExplicitLayout)) $self->setWorkgroupMemoryExplicitLayout($workgroupMemoryExplicitLayout);
        if(!is_null($workgroupMemoryExplicitLayoutScalarBlockLayout)) $self->setWorkgroupMemoryExplicitLayoutScalarBlockLayout($workgroupMemoryExplicitLayoutScalarBlockLayout);
        if(!is_null($workgroupMemoryExplicitLayout8BitAccess)) $self->setWorkgroupMemoryExplicitLayout8BitAccess($workgroupMemoryExplicitLayout8BitAccess);
        if(!is_null($workgroupMemoryExplicitLayout16BitAccess)) $self->setWorkgroupMemoryExplicitLayout16BitAccess($workgroupMemoryExplicitLayout16BitAccess);
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
    public function getWorkgroupMemoryExplicitLayout(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->workgroupMemoryExplicitLayout;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setWorkgroupMemoryExplicitLayout(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->workgroupMemoryExplicitLayout = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getWorkgroupMemoryExplicitLayoutScalarBlockLayout(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->workgroupMemoryExplicitLayoutScalarBlockLayout;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setWorkgroupMemoryExplicitLayoutScalarBlockLayout(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->workgroupMemoryExplicitLayoutScalarBlockLayout = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getWorkgroupMemoryExplicitLayout8BitAccess(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->workgroupMemoryExplicitLayout8BitAccess;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setWorkgroupMemoryExplicitLayout8BitAccess(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->workgroupMemoryExplicitLayout8BitAccess = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getWorkgroupMemoryExplicitLayout16BitAccess(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->workgroupMemoryExplicitLayout16BitAccess;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setWorkgroupMemoryExplicitLayout16BitAccess(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->workgroupMemoryExplicitLayout16BitAccess = $cValue;
    }
}
