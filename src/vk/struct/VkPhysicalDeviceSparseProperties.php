<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceSparseProperties implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "residencyStandard2DBlockShape" => $this->getResidencyStandard2DBlockShape(),
          "residencyStandard2DMultisampleBlockShape" => $this->getResidencyStandard2DMultisampleBlockShape(),
          "residencyStandard3DBlockShape" => $this->getResidencyStandard3DBlockShape(),
          "residencyAlignedMipSize" => $this->getResidencyAlignedMipSize(),
          "residencyNonResidentStrict" => $this->getResidencyNonResidentStrict(),
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
        null|bool $residencyStandard2DBlockShape = null,
        null|bool $residencyStandard2DMultisampleBlockShape = null,
        null|bool $residencyStandard3DBlockShape = null,
        null|bool $residencyAlignedMipSize = null,
        null|bool $residencyNonResidentStrict = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceSparseProperties', false), $vulkan);
        if(!is_null($residencyStandard2DBlockShape)) $self->setResidencyStandard2DBlockShape($residencyStandard2DBlockShape);
        if(!is_null($residencyStandard2DMultisampleBlockShape)) $self->setResidencyStandard2DMultisampleBlockShape($residencyStandard2DMultisampleBlockShape);
        if(!is_null($residencyStandard3DBlockShape)) $self->setResidencyStandard3DBlockShape($residencyStandard3DBlockShape);
        if(!is_null($residencyAlignedMipSize)) $self->setResidencyAlignedMipSize($residencyAlignedMipSize);
        if(!is_null($residencyNonResidentStrict)) $self->setResidencyNonResidentStrict($residencyNonResidentStrict);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getResidencyStandard2DBlockShape(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->residencyStandard2DBlockShape;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setResidencyStandard2DBlockShape(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->residencyStandard2DBlockShape = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getResidencyStandard2DMultisampleBlockShape(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->residencyStandard2DMultisampleBlockShape;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setResidencyStandard2DMultisampleBlockShape(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->residencyStandard2DMultisampleBlockShape = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getResidencyStandard3DBlockShape(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->residencyStandard3DBlockShape;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setResidencyStandard3DBlockShape(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->residencyStandard3DBlockShape = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getResidencyAlignedMipSize(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->residencyAlignedMipSize;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setResidencyAlignedMipSize(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->residencyAlignedMipSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getResidencyNonResidentStrict(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->residencyNonResidentStrict;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setResidencyNonResidentStrict(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->residencyNonResidentStrict = $cValue;
    }
}
