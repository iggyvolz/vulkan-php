<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceShaderCoreBuiltinsPropertiesARM implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "shaderCoreMask" => $this->getShaderCoreMask(),
          "shaderCoreCount" => $this->getShaderCoreCount(),
          "shaderWarpsPerCore" => $this->getShaderWarpsPerCore(),
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
        null|int $shaderCoreMask = null,
        null|int $shaderCoreCount = null,
        null|int $shaderWarpsPerCore = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceShaderCoreBuiltinsPropertiesARM', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($shaderCoreMask)) $self->setShaderCoreMask($shaderCoreMask);
        if(!is_null($shaderCoreCount)) $self->setShaderCoreCount($shaderCoreCount);
        if(!is_null($shaderWarpsPerCore)) $self->setShaderWarpsPerCore($shaderWarpsPerCore);
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
     * uint64_t/
     */
    public function getShaderCoreMask(): int
    {
        $cValue = $this->cdata->shaderCoreMask;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setShaderCoreMask(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->shaderCoreMask = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderCoreCount(): int
    {
        $cValue = $this->cdata->shaderCoreCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setShaderCoreCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->shaderCoreCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderWarpsPerCore(): int
    {
        $cValue = $this->cdata->shaderWarpsPerCore;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setShaderWarpsPerCore(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->shaderWarpsPerCore = $cValue;
    }
}
