<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceRobustness2PropertiesEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "robustStorageBufferAccessSizeAlignment" => $this->getRobustStorageBufferAccessSizeAlignment(),
          "robustUniformBufferAccessSizeAlignment" => $this->getRobustUniformBufferAccessSizeAlignment(),
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
        null|int $robustStorageBufferAccessSizeAlignment = null,
        null|int $robustUniformBufferAccessSizeAlignment = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceRobustness2PropertiesEXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($robustStorageBufferAccessSizeAlignment)) $self->setRobustStorageBufferAccessSizeAlignment($robustStorageBufferAccessSizeAlignment);
        if(!is_null($robustUniformBufferAccessSizeAlignment)) $self->setRobustUniformBufferAccessSizeAlignment($robustUniformBufferAccessSizeAlignment);
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
     * uint64_t/
     */
    public function getRobustStorageBufferAccessSizeAlignment(): int
    {
        $cValue = $this->cdata->robustStorageBufferAccessSizeAlignment;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setRobustStorageBufferAccessSizeAlignment(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->robustStorageBufferAccessSizeAlignment = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getRobustUniformBufferAccessSizeAlignment(): int
    {
        $cValue = $this->cdata->robustUniformBufferAccessSizeAlignment;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setRobustUniformBufferAccessSizeAlignment(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->robustUniformBufferAccessSizeAlignment = $cValue;
    }
}
