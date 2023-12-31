<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDebugMarkerMarkerInfoEXT
{
    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \FFI $ffi,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        ?string $pMarkerName = null,
        null|array $color = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDebugMarkerMarkerInfoEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($pMarkerName)) $self->setPMarkerName($pMarkerName);
        if(!is_null($color)) $self->setColor($color);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * const char* /
     */
    public function getPMarkerName(): ?string
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pMarkerName;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPMarkerName(?string $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->pMarkerName = $cValue;
    }

    /**
     * float/[4]
     */
    public function getColor(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->color;
        $phpValue = [$cValue[0],$cValue[1],$cValue[2],$cValue[3],$cValue[4]];
        return $phpValue;
    }

    public function setColor(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue[0] = $phpValue[0];
        $cValue[1] = $phpValue[1];
        $cValue[2] = $phpValue[2];
        $cValue[3] = $phpValue[3];
        $cValue[4] = $phpValue[4];
        $this->cdata->color = $cValue;
    }
}
