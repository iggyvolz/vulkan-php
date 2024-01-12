<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineVertexInputStateCreateInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "vertexBindingDescriptionCount" => $this->getVertexBindingDescriptionCount(),
          "pVertexBindingDescriptions" => $this->getPVertexBindingDescriptions(),
          "vertexAttributeDescriptionCount" => $this->getVertexAttributeDescriptionCount(),
          "pVertexAttributeDescriptions" => $this->getPVertexAttributeDescriptions(),
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
        null|array $flags = null,
        null|int $vertexBindingDescriptionCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pVertexBindingDescriptions = null,
        null|int $vertexAttributeDescriptionCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pVertexAttributeDescriptions = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineVertexInputStateCreateInfo', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($vertexBindingDescriptionCount)) $self->setVertexBindingDescriptionCount($vertexBindingDescriptionCount);
        if(!is_null($pVertexBindingDescriptions)) $self->setPVertexBindingDescriptions($pVertexBindingDescriptions);
        if(!is_null($vertexAttributeDescriptionCount)) $self->setVertexAttributeDescriptionCount($vertexAttributeDescriptionCount);
        if(!is_null($pVertexAttributeDescriptions)) $self->setPVertexAttributeDescriptions($pVertexAttributeDescriptions);
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
     * VkPipelineVertexInputStateCreateFlags/
     */
    public function getFlags(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = [];
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = 0;
        $this->cdata->flags = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getVertexBindingDescriptionCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->vertexBindingDescriptionCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setVertexBindingDescriptionCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->vertexBindingDescriptionCount = $cValue;
    }

    /**
     * VkVertexInputBindingDescription* /
     */
    public function getPVertexBindingDescriptions(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pVertexBindingDescriptions;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkVertexInputBindingDescription', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPVertexBindingDescriptions(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pVertexBindingDescriptions = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getVertexAttributeDescriptionCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->vertexAttributeDescriptionCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setVertexAttributeDescriptionCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->vertexAttributeDescriptionCount = $cValue;
    }

    /**
     * VkVertexInputAttributeDescription* /
     */
    public function getPVertexAttributeDescriptions(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pVertexAttributeDescriptions;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkVertexInputAttributeDescription', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPVertexAttributeDescriptions(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pVertexAttributeDescriptions = $cValue;
    }
}
