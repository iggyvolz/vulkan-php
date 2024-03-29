<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceBorderColorSwizzleFeaturesEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "borderColorSwizzle" => $this->getBorderColorSwizzle(),
          "borderColorSwizzleFromImage" => $this->getBorderColorSwizzleFromImage(),
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
        null|bool $borderColorSwizzle = null,
        null|bool $borderColorSwizzleFromImage = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceBorderColorSwizzleFeaturesEXT', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($borderColorSwizzle)) $self->setBorderColorSwizzle($borderColorSwizzle);
        if(!is_null($borderColorSwizzleFromImage)) $self->setBorderColorSwizzleFromImage($borderColorSwizzleFromImage);
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
    public function getBorderColorSwizzle(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->borderColorSwizzle;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setBorderColorSwizzle(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->borderColorSwizzle = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getBorderColorSwizzleFromImage(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->borderColorSwizzleFromImage;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setBorderColorSwizzleFromImage(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->borderColorSwizzleFromImage = $cValue;
    }
}
