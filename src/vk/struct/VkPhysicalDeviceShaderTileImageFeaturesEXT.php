<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceShaderTileImageFeaturesEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "shaderTileImageColorReadAccess" => $this->getShaderTileImageColorReadAccess(),
          "shaderTileImageDepthReadAccess" => $this->getShaderTileImageDepthReadAccess(),
          "shaderTileImageStencilReadAccess" => $this->getShaderTileImageStencilReadAccess(),
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
        null|bool $shaderTileImageColorReadAccess = null,
        null|bool $shaderTileImageDepthReadAccess = null,
        null|bool $shaderTileImageStencilReadAccess = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceShaderTileImageFeaturesEXT', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($shaderTileImageColorReadAccess)) $self->setShaderTileImageColorReadAccess($shaderTileImageColorReadAccess);
        if(!is_null($shaderTileImageDepthReadAccess)) $self->setShaderTileImageDepthReadAccess($shaderTileImageDepthReadAccess);
        if(!is_null($shaderTileImageStencilReadAccess)) $self->setShaderTileImageStencilReadAccess($shaderTileImageStencilReadAccess);
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
    public function getShaderTileImageColorReadAccess(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->shaderTileImageColorReadAccess;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderTileImageColorReadAccess(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderTileImageColorReadAccess = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderTileImageDepthReadAccess(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->shaderTileImageDepthReadAccess;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderTileImageDepthReadAccess(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderTileImageDepthReadAccess = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderTileImageStencilReadAccess(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->shaderTileImageStencilReadAccess;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderTileImageStencilReadAccess(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderTileImageStencilReadAccess = $cValue;
    }
}
