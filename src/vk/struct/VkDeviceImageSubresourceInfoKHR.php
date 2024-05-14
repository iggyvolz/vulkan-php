<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDeviceImageSubresourceInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "pCreateInfo" => $this->getPCreateInfo(),
          "pSubresource" => $this->getPSubresource(),
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
        \FFI $ffi,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|VkImageCreateInfo $pCreateInfo = null,
        null|VkImageSubresource2KHR $pSubresource = null,
    ): self {
        $self = new self( $ffi->new('VkDeviceImageSubresourceInfoKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($pCreateInfo)) $self->setPCreateInfo($pCreateInfo);
        if(!is_null($pSubresource)) $self->setPSubresource($pSubresource);
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
     * VkImageCreateInfo* /
     */
    public function getPCreateInfo(): VkImageCreateInfo
    {
        $cValue = $this->cdata->pCreateInfo;
        $phpValue = new \iggyvolz\vulkan\struct\VkImageCreateInfo($cValue);
        return $phpValue;
    }

    public function setPCreateInfo(VkImageCreateInfo $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pCreateInfo = $cValue;
    }

    /**
     * VkImageSubresource2KHR* /
     */
    public function getPSubresource(): VkImageSubresource2KHR
    {
        $cValue = $this->cdata->pSubresource;
        $phpValue = new \iggyvolz\vulkan\struct\VkImageSubresource2KHR($cValue);
        return $phpValue;
    }

    public function setPSubresource(VkImageSubresource2KHR $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pSubresource = $cValue;
    }
}
