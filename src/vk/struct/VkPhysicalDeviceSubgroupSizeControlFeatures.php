<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceSubgroupSizeControlFeatures implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "subgroupSizeControl" => $this->getSubgroupSizeControl(),
          "computeFullSubgroups" => $this->getComputeFullSubgroups(),
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
        null|bool $subgroupSizeControl = null,
        null|bool $computeFullSubgroups = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceSubgroupSizeControlFeatures', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($subgroupSizeControl)) $self->setSubgroupSizeControl($subgroupSizeControl);
        if(!is_null($computeFullSubgroups)) $self->setComputeFullSubgroups($computeFullSubgroups);
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
    public function getSubgroupSizeControl(): bool
    {
        $cValue = $this->cdata->subgroupSizeControl;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSubgroupSizeControl(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->subgroupSizeControl = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getComputeFullSubgroups(): bool
    {
        $cValue = $this->cdata->computeFullSubgroups;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setComputeFullSubgroups(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->computeFullSubgroups = $cValue;
    }
}
