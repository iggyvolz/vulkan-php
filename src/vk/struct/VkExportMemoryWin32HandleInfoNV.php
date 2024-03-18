<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkExportMemoryWin32HandleInfoNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "pAttributes" => $this->getPAttributes(),
          "dwAccess" => $this->getDwAccess(),
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
        null|\iggyvolz\vulkan\util\Pointer $pAttributes = null,
        null|int $dwAccess = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkExportMemoryWin32HandleInfoNV', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($pAttributes)) $self->setPAttributes($pAttributes);
        if(!is_null($dwAccess)) $self->setDwAccess($dwAccess);
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
     * void* /
     */
    public function getPAttributes(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pAttributes;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPAttributes(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pAttributes = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDwAccess(): int
    {
        $cValue = $this->cdata->dwAccess;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDwAccess(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->dwAccess = $cValue;
    }
}
