<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceImage2DViewOf3DFeaturesEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "image2DViewOf3D" => $this->getImage2DViewOf3D(),
          "sampler2DViewOf3D" => $this->getSampler2DViewOf3D(),
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
        null|bool $image2DViewOf3D = null,
        null|bool $sampler2DViewOf3D = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceImage2DViewOf3DFeaturesEXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($image2DViewOf3D)) $self->setImage2DViewOf3D($image2DViewOf3D);
        if(!is_null($sampler2DViewOf3D)) $self->setSampler2DViewOf3D($sampler2DViewOf3D);
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
    public function getImage2DViewOf3D(): bool
    {
        $cValue = $this->cdata->image2DViewOf3D;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setImage2DViewOf3D(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->image2DViewOf3D = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSampler2DViewOf3D(): bool
    {
        $cValue = $this->cdata->sampler2DViewOf3D;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSampler2DViewOf3D(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->sampler2DViewOf3D = $cValue;
    }
}
