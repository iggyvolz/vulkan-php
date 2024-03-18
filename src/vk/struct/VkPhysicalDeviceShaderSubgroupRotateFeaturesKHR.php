<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceShaderSubgroupRotateFeaturesKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "shaderSubgroupRotate" => $this->getShaderSubgroupRotate(),
          "shaderSubgroupRotateClustered" => $this->getShaderSubgroupRotateClustered(),
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
        null|bool $shaderSubgroupRotate = null,
        null|bool $shaderSubgroupRotateClustered = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceShaderSubgroupRotateFeaturesKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($shaderSubgroupRotate)) $self->setShaderSubgroupRotate($shaderSubgroupRotate);
        if(!is_null($shaderSubgroupRotateClustered)) $self->setShaderSubgroupRotateClustered($shaderSubgroupRotateClustered);
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
    public function getShaderSubgroupRotate(): bool
    {
        $cValue = $this->cdata->shaderSubgroupRotate;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderSubgroupRotate(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderSubgroupRotate = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getShaderSubgroupRotateClustered(): bool
    {
        $cValue = $this->cdata->shaderSubgroupRotateClustered;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setShaderSubgroupRotateClustered(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->shaderSubgroupRotateClustered = $cValue;
    }
}
