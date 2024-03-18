<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceShaderAtomicFloatFeaturesEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "shaderBufferFloat32Atomics" => $this->getShaderBufferFloat32Atomics(),
          "shaderBufferFloat32AtomicAdd" => $this->getShaderBufferFloat32AtomicAdd(),
          "shaderBufferFloat64Atomics" => $this->getShaderBufferFloat64Atomics(),
          "shaderBufferFloat64AtomicAdd" => $this->getShaderBufferFloat64AtomicAdd(),
          "shaderSharedFloat32Atomics" => $this->getShaderSharedFloat32Atomics(),
          "shaderSharedFloat32AtomicAdd" => $this->getShaderSharedFloat32AtomicAdd(),
          "shaderSharedFloat64Atomics" => $this->getShaderSharedFloat64Atomics(),
          "shaderSharedFloat64AtomicAdd" => $this->getShaderSharedFloat64AtomicAdd(),
          "shaderImageFloat32Atomics" => $this->getShaderImageFloat32Atomics(),
          "shaderImageFloat32AtomicAdd" => $this->getShaderImageFloat32AtomicAdd(),
          "sparseImageFloat32Atomics" => $this->getSparseImageFloat32Atomics(),
          "sparseImageFloat32AtomicAdd" => $this->getSparseImageFloat32AtomicAdd(),
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
        null|bool $shaderBufferFloat32Atomics = null,
        null|bool $shaderBufferFloat32AtomicAdd = null,
        null|bool $shaderBufferFloat64Atomics = null,
        null|bool $shaderBufferFloat64AtomicAdd = null,
        null|bool $shaderSharedFloat32Atomics = null,
        null|bool $shaderSharedFloat32AtomicAdd = null,
        null|bool $shaderSharedFloat64Atomics = null,
        null|bool $shaderSharedFloat64AtomicAdd = null,
        null|bool $shaderImageFloat32Atomics = null,
        null|bool $shaderImageFloat32AtomicAdd = null,
        null|bool $sparseImageFloat32Atomics = null,
        null|bool $sparseImageFloat32AtomicAdd = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceShaderAtomicFloatFeaturesEXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($shaderBufferFloat32Atomics)) $self->setShaderBufferFloat32Atomics($shaderBufferFloat32Atomics);
        if(!is_null($shaderBufferFloat32AtomicAdd)) $self->setShaderBufferFloat32AtomicAdd($shaderBufferFloat32AtomicAdd);
        if(!is_null($shaderBufferFloat64Atomics)) $self->setShaderBufferFloat64Atomics($shaderBufferFloat64Atomics);
        if(!is_null($shaderBufferFloat64AtomicAdd)) $self->setShaderBufferFloat64AtomicAdd($shaderBufferFloat64AtomicAdd);
        if(!is_null($shaderSharedFloat32Atomics)) $self->setShaderSharedFloat32Atomics($shaderSharedFloat32Atomics);
        if(!is_null($shaderSharedFloat32AtomicAdd)) $self->setShaderSharedFloat32AtomicAdd($shaderSharedFloat32AtomicAdd);
        if(!is_null($shaderSharedFloat64Atomics)) $self->setShaderSharedFloat64Atomics($shaderSharedFloat64Atomics);
        if(!is_null($shaderSharedFloat64AtomicAdd)) $self->setShaderSharedFloat64AtomicAdd($shaderSharedFloat64AtomicAdd);
        if(!is_null($shaderImageFloat32Atomics)) $self->setShaderImageFloat32Atomics($shaderImageFloat32Atomics);
        if(!is_null($shaderImageFloat32AtomicAdd)) $self->setShaderImageFloat32AtomicAdd($shaderImageFloat32AtomicAdd);
        if(!is_null($sparseImageFloat32Atomics)) $self->setSparseImageFloat32Atomics($sparseImageFloat32Atomics);
        if(!is_null($sparseImageFloat32AtomicAdd)) $self->setSparseImageFloat32AtomicAdd($sparseImageFloat32AtomicAdd);
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
    public function getShaderBufferFloat32Atomics(): bool
    {
        $cValue = $this->cdata->shaderBufferFloat32Atomics;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderBufferFloat32Atomics(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderBufferFloat32Atomics = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderBufferFloat32AtomicAdd(): bool
    {
        $cValue = $this->cdata->shaderBufferFloat32AtomicAdd;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderBufferFloat32AtomicAdd(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderBufferFloat32AtomicAdd = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderBufferFloat64Atomics(): bool
    {
        $cValue = $this->cdata->shaderBufferFloat64Atomics;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderBufferFloat64Atomics(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderBufferFloat64Atomics = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderBufferFloat64AtomicAdd(): bool
    {
        $cValue = $this->cdata->shaderBufferFloat64AtomicAdd;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderBufferFloat64AtomicAdd(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderBufferFloat64AtomicAdd = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderSharedFloat32Atomics(): bool
    {
        $cValue = $this->cdata->shaderSharedFloat32Atomics;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderSharedFloat32Atomics(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderSharedFloat32Atomics = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderSharedFloat32AtomicAdd(): bool
    {
        $cValue = $this->cdata->shaderSharedFloat32AtomicAdd;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderSharedFloat32AtomicAdd(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderSharedFloat32AtomicAdd = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderSharedFloat64Atomics(): bool
    {
        $cValue = $this->cdata->shaderSharedFloat64Atomics;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderSharedFloat64Atomics(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderSharedFloat64Atomics = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderSharedFloat64AtomicAdd(): bool
    {
        $cValue = $this->cdata->shaderSharedFloat64AtomicAdd;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderSharedFloat64AtomicAdd(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderSharedFloat64AtomicAdd = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderImageFloat32Atomics(): bool
    {
        $cValue = $this->cdata->shaderImageFloat32Atomics;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderImageFloat32Atomics(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderImageFloat32Atomics = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderImageFloat32AtomicAdd(): bool
    {
        $cValue = $this->cdata->shaderImageFloat32AtomicAdd;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderImageFloat32AtomicAdd(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderImageFloat32AtomicAdd = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSparseImageFloat32Atomics(): bool
    {
        $cValue = $this->cdata->sparseImageFloat32Atomics;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSparseImageFloat32Atomics(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->sparseImageFloat32Atomics = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSparseImageFloat32AtomicAdd(): bool
    {
        $cValue = $this->cdata->sparseImageFloat32AtomicAdd;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSparseImageFloat32AtomicAdd(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->sparseImageFloat32AtomicAdd = $cValue;
    }
}
