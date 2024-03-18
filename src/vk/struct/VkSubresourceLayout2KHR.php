<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSubresourceLayout2KHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "subresourceLayout" => $this->getSubresourceLayout(),
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
        null|VkSubresourceLayout $subresourceLayout = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSubresourceLayout2KHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($subresourceLayout)) $self->setSubresourceLayout($subresourceLayout);
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
     * VkSubresourceLayout/
     */
    public function getSubresourceLayout(): VkSubresourceLayout
    {
        $cValue = $this->cdata->subresourceLayout;
        $phpValue = new \iggyvolz\vulkan\struct\VkSubresourceLayout($cValue, $ffi);
        return $phpValue;
    }

    public function setSubresourceLayout(VkSubresourceLayout $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->subresourceLayout = $cValue;
    }
}
