<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkImportMetalTextureInfoEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "plane" => $this->getPlane(),
          "mtlTexture" => $this->getMtlTexture(),
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
        null|\iggyvolz\vulkan\enum\VkImageAspectFlagBits $plane = null,
        mixed $mtlTexture = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkImportMetalTextureInfoEXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($plane)) $self->setPlane($plane);
        if(!is_null($mtlTexture)) $self->setMtlTexture($mtlTexture);
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
     * VkImageAspectFlagBits/
     */
    public function getPlane(): \iggyvolz\vulkan\enum\VkImageAspectFlagBits
    {
        $cValue = $this->cdata->plane;
        $phpValue = \iggyvolz\vulkan\enum\VkImageAspectFlagBits::from($cValue);
        return $phpValue;
    }

    public function setPlane(\iggyvolz\vulkan\enum\VkImageAspectFlagBits $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->plane = $cValue;
    }

    /**
     * void* /
     */
    public function getMtlTexture(): mixed
    {
        $cValue = $this->cdata->mtlTexture;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setMtlTexture(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->mtlTexture = $cValue;
    }
}
