<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDeviceImageMemoryRequirements implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "pCreateInfo" => $this->getPCreateInfo(),
          "planeAspect" => $this->getPlaneAspect(),
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
        null|\iggyvolz\vulkan\util\ObjectPointer $pCreateInfo = null,
        null|\iggyvolz\vulkan\enum\VkImageAspectFlagBits $planeAspect = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDeviceImageMemoryRequirements', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($pCreateInfo)) $self->setPCreateInfo($pCreateInfo);
        if(!is_null($planeAspect)) $self->setPlaneAspect($planeAspect);
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
     * VkImageCreateInfo* /
     */
    public function getPCreateInfo(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pCreateInfo;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkImageCreateInfo', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPCreateInfo(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pCreateInfo = $cValue;
    }

    /**
     * VkImageAspectFlagBits/
     */
    public function getPlaneAspect(): \iggyvolz\vulkan\enum\VkImageAspectFlagBits
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->planeAspect;
        $phpValue = \iggyvolz\vulkan\enum\VkImageAspectFlagBits::from($cValue);
        return $phpValue;
    }

    public function setPlaneAspect(\iggyvolz\vulkan\enum\VkImageAspectFlagBits $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->planeAspect = $cValue;
    }
}
