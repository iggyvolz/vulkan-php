<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceZeroInitializeWorkgroupMemoryFeatures implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "shaderZeroInitializeWorkgroupMemory" => $this->getShaderZeroInitializeWorkgroupMemory(),
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
        null|bool $shaderZeroInitializeWorkgroupMemory = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceZeroInitializeWorkgroupMemoryFeatures', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($shaderZeroInitializeWorkgroupMemory)) $self->setShaderZeroInitializeWorkgroupMemory($shaderZeroInitializeWorkgroupMemory);
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
    public function getShaderZeroInitializeWorkgroupMemory(): bool
    {
        $cValue = $this->cdata->shaderZeroInitializeWorkgroupMemory;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderZeroInitializeWorkgroupMemory(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderZeroInitializeWorkgroupMemory = $cValue;
    }
}
