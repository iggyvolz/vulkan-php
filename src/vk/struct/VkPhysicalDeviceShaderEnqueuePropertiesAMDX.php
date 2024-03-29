<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceShaderEnqueuePropertiesAMDX implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "maxExecutionGraphDepth" => $this->getMaxExecutionGraphDepth(),
          "maxExecutionGraphShaderOutputNodes" => $this->getMaxExecutionGraphShaderOutputNodes(),
          "maxExecutionGraphShaderPayloadSize" => $this->getMaxExecutionGraphShaderPayloadSize(),
          "maxExecutionGraphShaderPayloadCount" => $this->getMaxExecutionGraphShaderPayloadCount(),
          "executionGraphDispatchAddressAlignment" => $this->getExecutionGraphDispatchAddressAlignment(),
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
        null|int $maxExecutionGraphDepth = null,
        null|int $maxExecutionGraphShaderOutputNodes = null,
        null|int $maxExecutionGraphShaderPayloadSize = null,
        null|int $maxExecutionGraphShaderPayloadCount = null,
        null|int $executionGraphDispatchAddressAlignment = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceShaderEnqueuePropertiesAMDX', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($maxExecutionGraphDepth)) $self->setMaxExecutionGraphDepth($maxExecutionGraphDepth);
        if(!is_null($maxExecutionGraphShaderOutputNodes)) $self->setMaxExecutionGraphShaderOutputNodes($maxExecutionGraphShaderOutputNodes);
        if(!is_null($maxExecutionGraphShaderPayloadSize)) $self->setMaxExecutionGraphShaderPayloadSize($maxExecutionGraphShaderPayloadSize);
        if(!is_null($maxExecutionGraphShaderPayloadCount)) $self->setMaxExecutionGraphShaderPayloadCount($maxExecutionGraphShaderPayloadCount);
        if(!is_null($executionGraphDispatchAddressAlignment)) $self->setExecutionGraphDispatchAddressAlignment($executionGraphDispatchAddressAlignment);
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
    public function getMaxExecutionGraphDepth(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxExecutionGraphDepth;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxExecutionGraphDepth(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxExecutionGraphDepth = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxExecutionGraphShaderOutputNodes(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxExecutionGraphShaderOutputNodes;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxExecutionGraphShaderOutputNodes(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxExecutionGraphShaderOutputNodes = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxExecutionGraphShaderPayloadSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxExecutionGraphShaderPayloadSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxExecutionGraphShaderPayloadSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxExecutionGraphShaderPayloadSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxExecutionGraphShaderPayloadCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxExecutionGraphShaderPayloadCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxExecutionGraphShaderPayloadCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxExecutionGraphShaderPayloadCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getExecutionGraphDispatchAddressAlignment(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->executionGraphDispatchAddressAlignment;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setExecutionGraphDispatchAddressAlignment(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->executionGraphDispatchAddressAlignment = $cValue;
    }
}
