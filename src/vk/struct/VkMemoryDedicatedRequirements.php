<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkMemoryDedicatedRequirements implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "prefersDedicatedAllocation" => $this->getPrefersDedicatedAllocation(),
          "requiresDedicatedAllocation" => $this->getRequiresDedicatedAllocation(),
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
        null|bool $prefersDedicatedAllocation = null,
        null|bool $requiresDedicatedAllocation = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkMemoryDedicatedRequirements', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($prefersDedicatedAllocation)) $self->setPrefersDedicatedAllocation($prefersDedicatedAllocation);
        if(!is_null($requiresDedicatedAllocation)) $self->setRequiresDedicatedAllocation($requiresDedicatedAllocation);
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
    public function getPrefersDedicatedAllocation(): bool
    {
        $cValue = $this->cdata->prefersDedicatedAllocation;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setPrefersDedicatedAllocation(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->prefersDedicatedAllocation = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getRequiresDedicatedAllocation(): bool
    {
        $cValue = $this->cdata->requiresDedicatedAllocation;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setRequiresDedicatedAllocation(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->requiresDedicatedAllocation = $cValue;
    }
}
