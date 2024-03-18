<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkMemoryGetSciBufInfoNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "memory" => $this->getMemory(),
          "handleType" => $this->getHandleType(),
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
        null|VkDeviceMemory $memory = null,
        null|\iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits $handleType = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkMemoryGetSciBufInfoNV', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($memory)) $self->setMemory($memory);
        if(!is_null($handleType)) $self->setHandleType($handleType);
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
     * VkDeviceMemory/
     */
    public function getMemory(): VkDeviceMemory
    {
        $cValue = $this->cdata->memory;
        $phpValue = new \iggyvolz\vulkan\struct\VkDeviceMemory($cValue, $ffi);
        return $phpValue;
    }

    public function setMemory(VkDeviceMemory $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->memory = $cValue;
    }

    /**
     * VkExternalMemoryHandleTypeFlagBits/
     */
    public function getHandleType(): \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits
    {
        $cValue = $this->cdata->handleType;
        $phpValue = \iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits::from($cValue);
        return $phpValue;
    }

    public function setHandleType(\iggyvolz\vulkan\enum\VkExternalMemoryHandleTypeFlagBits $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->handleType = $cValue;
    }
}
