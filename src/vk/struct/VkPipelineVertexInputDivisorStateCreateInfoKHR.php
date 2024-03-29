<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineVertexInputDivisorStateCreateInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "vertexBindingDivisorCount" => $this->getVertexBindingDivisorCount(),
          "pVertexBindingDivisors" => $this->getPVertexBindingDivisors(),
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
        null|int $vertexBindingDivisorCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pVertexBindingDivisors = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineVertexInputDivisorStateCreateInfoKHR', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($vertexBindingDivisorCount)) $self->setVertexBindingDivisorCount($vertexBindingDivisorCount);
        if(!is_null($pVertexBindingDivisors)) $self->setPVertexBindingDivisors($pVertexBindingDivisors);
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
    public function getVertexBindingDivisorCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->vertexBindingDivisorCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setVertexBindingDivisorCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->vertexBindingDivisorCount = $cValue;
    }

    /**
     * VkVertexInputBindingDivisorDescriptionKHR* /
     */
    public function getPVertexBindingDivisors(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pVertexBindingDivisors;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkVertexInputBindingDivisorDescriptionKHR', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPVertexBindingDivisors(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pVertexBindingDivisors = $cValue;
    }
}
