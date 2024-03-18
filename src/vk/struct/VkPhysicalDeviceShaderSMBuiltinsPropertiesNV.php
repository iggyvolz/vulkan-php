<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceShaderSMBuiltinsPropertiesNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "shaderSMCount" => $this->getShaderSMCount(),
          "shaderWarpsPerSM" => $this->getShaderWarpsPerSM(),
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
        null|int $shaderSMCount = null,
        null|int $shaderWarpsPerSM = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceShaderSMBuiltinsPropertiesNV', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($shaderSMCount)) $self->setShaderSMCount($shaderSMCount);
        if(!is_null($shaderWarpsPerSM)) $self->setShaderWarpsPerSM($shaderWarpsPerSM);
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
    public function getShaderSMCount(): int
    {
        $cValue = $this->cdata->shaderSMCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setShaderSMCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->shaderSMCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderWarpsPerSM(): int
    {
        $cValue = $this->cdata->shaderWarpsPerSM;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setShaderWarpsPerSM(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->shaderWarpsPerSM = $cValue;
    }
}
