<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceShaderImageAtomicInt64FeaturesEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "shaderImageInt64Atomics" => $this->getShaderImageInt64Atomics(),
          "sparseImageInt64Atomics" => $this->getSparseImageInt64Atomics(),
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
        null|bool $shaderImageInt64Atomics = null,
        null|bool $sparseImageInt64Atomics = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceShaderImageAtomicInt64FeaturesEXT', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($shaderImageInt64Atomics)) $self->setShaderImageInt64Atomics($shaderImageInt64Atomics);
        if(!is_null($sparseImageInt64Atomics)) $self->setSparseImageInt64Atomics($sparseImageInt64Atomics);
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
    public function getShaderImageInt64Atomics(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->shaderImageInt64Atomics;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderImageInt64Atomics(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderImageInt64Atomics = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSparseImageInt64Atomics(): bool
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->sparseImageInt64Atomics;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSparseImageInt64Atomics(bool $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->sparseImageInt64Atomics = $cValue;
    }
}
