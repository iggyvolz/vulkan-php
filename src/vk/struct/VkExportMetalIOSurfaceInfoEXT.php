<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkExportMetalIOSurfaceInfoEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "image" => $this->getImage(),
          "ioSurface" => $this->getIoSurface(),
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
        null|VkImage $image = null,
        mixed $ioSurface = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkExportMetalIOSurfaceInfoEXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($image)) $self->setImage($image);
        if(!is_null($ioSurface)) $self->setIoSurface($ioSurface);
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
     * VkImage/
     */
    public function getImage(): VkImage
    {
        $cValue = $this->cdata->image;
        $phpValue = new \iggyvolz\vulkan\struct\VkImage($cValue, $ffi);
        return $phpValue;
    }

    public function setImage(VkImage $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->image = $cValue;
    }

    /**
     * void* /
     */
    public function getIoSurface(): mixed
    {
        $cValue = $this->cdata->ioSurface;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setIoSurface(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->ioSurface = $cValue;
    }
}
