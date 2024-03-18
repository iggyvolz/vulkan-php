<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceShaderAtomicFloat2FeaturesEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "shaderBufferFloat16Atomics" => $this->getShaderBufferFloat16Atomics(),
          "shaderBufferFloat16AtomicAdd" => $this->getShaderBufferFloat16AtomicAdd(),
          "shaderBufferFloat16AtomicMinMax" => $this->getShaderBufferFloat16AtomicMinMax(),
          "shaderBufferFloat32AtomicMinMax" => $this->getShaderBufferFloat32AtomicMinMax(),
          "shaderBufferFloat64AtomicMinMax" => $this->getShaderBufferFloat64AtomicMinMax(),
          "shaderSharedFloat16Atomics" => $this->getShaderSharedFloat16Atomics(),
          "shaderSharedFloat16AtomicAdd" => $this->getShaderSharedFloat16AtomicAdd(),
          "shaderSharedFloat16AtomicMinMax" => $this->getShaderSharedFloat16AtomicMinMax(),
          "shaderSharedFloat32AtomicMinMax" => $this->getShaderSharedFloat32AtomicMinMax(),
          "shaderSharedFloat64AtomicMinMax" => $this->getShaderSharedFloat64AtomicMinMax(),
          "shaderImageFloat32AtomicMinMax" => $this->getShaderImageFloat32AtomicMinMax(),
          "sparseImageFloat32AtomicMinMax" => $this->getSparseImageFloat32AtomicMinMax(),
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
        null|bool $shaderBufferFloat16Atomics = null,
        null|bool $shaderBufferFloat16AtomicAdd = null,
        null|bool $shaderBufferFloat16AtomicMinMax = null,
        null|bool $shaderBufferFloat32AtomicMinMax = null,
        null|bool $shaderBufferFloat64AtomicMinMax = null,
        null|bool $shaderSharedFloat16Atomics = null,
        null|bool $shaderSharedFloat16AtomicAdd = null,
        null|bool $shaderSharedFloat16AtomicMinMax = null,
        null|bool $shaderSharedFloat32AtomicMinMax = null,
        null|bool $shaderSharedFloat64AtomicMinMax = null,
        null|bool $shaderImageFloat32AtomicMinMax = null,
        null|bool $sparseImageFloat32AtomicMinMax = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceShaderAtomicFloat2FeaturesEXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($shaderBufferFloat16Atomics)) $self->setShaderBufferFloat16Atomics($shaderBufferFloat16Atomics);
        if(!is_null($shaderBufferFloat16AtomicAdd)) $self->setShaderBufferFloat16AtomicAdd($shaderBufferFloat16AtomicAdd);
        if(!is_null($shaderBufferFloat16AtomicMinMax)) $self->setShaderBufferFloat16AtomicMinMax($shaderBufferFloat16AtomicMinMax);
        if(!is_null($shaderBufferFloat32AtomicMinMax)) $self->setShaderBufferFloat32AtomicMinMax($shaderBufferFloat32AtomicMinMax);
        if(!is_null($shaderBufferFloat64AtomicMinMax)) $self->setShaderBufferFloat64AtomicMinMax($shaderBufferFloat64AtomicMinMax);
        if(!is_null($shaderSharedFloat16Atomics)) $self->setShaderSharedFloat16Atomics($shaderSharedFloat16Atomics);
        if(!is_null($shaderSharedFloat16AtomicAdd)) $self->setShaderSharedFloat16AtomicAdd($shaderSharedFloat16AtomicAdd);
        if(!is_null($shaderSharedFloat16AtomicMinMax)) $self->setShaderSharedFloat16AtomicMinMax($shaderSharedFloat16AtomicMinMax);
        if(!is_null($shaderSharedFloat32AtomicMinMax)) $self->setShaderSharedFloat32AtomicMinMax($shaderSharedFloat32AtomicMinMax);
        if(!is_null($shaderSharedFloat64AtomicMinMax)) $self->setShaderSharedFloat64AtomicMinMax($shaderSharedFloat64AtomicMinMax);
        if(!is_null($shaderImageFloat32AtomicMinMax)) $self->setShaderImageFloat32AtomicMinMax($shaderImageFloat32AtomicMinMax);
        if(!is_null($sparseImageFloat32AtomicMinMax)) $self->setSparseImageFloat32AtomicMinMax($sparseImageFloat32AtomicMinMax);
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
    public function getShaderBufferFloat16Atomics(): bool
    {
        $cValue = $this->cdata->shaderBufferFloat16Atomics;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderBufferFloat16Atomics(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderBufferFloat16Atomics = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderBufferFloat16AtomicAdd(): bool
    {
        $cValue = $this->cdata->shaderBufferFloat16AtomicAdd;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderBufferFloat16AtomicAdd(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderBufferFloat16AtomicAdd = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderBufferFloat16AtomicMinMax(): bool
    {
        $cValue = $this->cdata->shaderBufferFloat16AtomicMinMax;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderBufferFloat16AtomicMinMax(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderBufferFloat16AtomicMinMax = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderBufferFloat32AtomicMinMax(): bool
    {
        $cValue = $this->cdata->shaderBufferFloat32AtomicMinMax;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderBufferFloat32AtomicMinMax(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderBufferFloat32AtomicMinMax = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderBufferFloat64AtomicMinMax(): bool
    {
        $cValue = $this->cdata->shaderBufferFloat64AtomicMinMax;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderBufferFloat64AtomicMinMax(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderBufferFloat64AtomicMinMax = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderSharedFloat16Atomics(): bool
    {
        $cValue = $this->cdata->shaderSharedFloat16Atomics;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderSharedFloat16Atomics(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderSharedFloat16Atomics = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderSharedFloat16AtomicAdd(): bool
    {
        $cValue = $this->cdata->shaderSharedFloat16AtomicAdd;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderSharedFloat16AtomicAdd(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderSharedFloat16AtomicAdd = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderSharedFloat16AtomicMinMax(): bool
    {
        $cValue = $this->cdata->shaderSharedFloat16AtomicMinMax;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderSharedFloat16AtomicMinMax(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderSharedFloat16AtomicMinMax = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderSharedFloat32AtomicMinMax(): bool
    {
        $cValue = $this->cdata->shaderSharedFloat32AtomicMinMax;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderSharedFloat32AtomicMinMax(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderSharedFloat32AtomicMinMax = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderSharedFloat64AtomicMinMax(): bool
    {
        $cValue = $this->cdata->shaderSharedFloat64AtomicMinMax;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderSharedFloat64AtomicMinMax(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderSharedFloat64AtomicMinMax = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderImageFloat32AtomicMinMax(): bool
    {
        $cValue = $this->cdata->shaderImageFloat32AtomicMinMax;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderImageFloat32AtomicMinMax(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderImageFloat32AtomicMinMax = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getSparseImageFloat32AtomicMinMax(): bool
    {
        $cValue = $this->cdata->sparseImageFloat32AtomicMinMax;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setSparseImageFloat32AtomicMinMax(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->sparseImageFloat32AtomicMinMax = $cValue;
    }
}
