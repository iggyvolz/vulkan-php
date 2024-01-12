<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceVertexAttributeDivisorPropertiesKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "maxVertexAttribDivisor" => $this->getMaxVertexAttribDivisor(),
          "supportsNonZeroFirstInstance" => $this->getSupportsNonZeroFirstInstance(),
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
        null|int $maxVertexAttribDivisor = null,
        null|bool $supportsNonZeroFirstInstance = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceVertexAttributeDivisorPropertiesKHR', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($maxVertexAttribDivisor)) $self->setMaxVertexAttribDivisor($maxVertexAttribDivisor);
        if(!is_null($supportsNonZeroFirstInstance)) $self->setSupportsNonZeroFirstInstance($supportsNonZeroFirstInstance);
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
    public function getMaxVertexAttribDivisor(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxVertexAttribDivisor;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxVertexAttribDivisor(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxVertexAttribDivisor = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSupportsNonZeroFirstInstance(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->supportsNonZeroFirstInstance;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSupportsNonZeroFirstInstance(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->supportsNonZeroFirstInstance = $cValue;
    }
}
