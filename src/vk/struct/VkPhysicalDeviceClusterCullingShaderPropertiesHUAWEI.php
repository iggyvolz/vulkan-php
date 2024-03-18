<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceClusterCullingShaderPropertiesHUAWEI implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "maxWorkGroupCount" => $this->getMaxWorkGroupCount(),
          "maxWorkGroupSize" => $this->getMaxWorkGroupSize(),
          "maxOutputClusterCount" => $this->getMaxOutputClusterCount(),
          "indirectBufferOffsetAlignment" => $this->getIndirectBufferOffsetAlignment(),
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
        mixed $maxWorkGroupCount = null,
        mixed $maxWorkGroupSize = null,
        null|int $maxOutputClusterCount = null,
        null|int $indirectBufferOffsetAlignment = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceClusterCullingShaderPropertiesHUAWEI', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($maxWorkGroupCount)) $self->setMaxWorkGroupCount($maxWorkGroupCount);
        if(!is_null($maxWorkGroupSize)) $self->setMaxWorkGroupSize($maxWorkGroupSize);
        if(!is_null($maxOutputClusterCount)) $self->setMaxOutputClusterCount($maxOutputClusterCount);
        if(!is_null($indirectBufferOffsetAlignment)) $self->setIndirectBufferOffsetAlignment($indirectBufferOffsetAlignment);
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
     * void* /
     */
    public function getMaxWorkGroupCount(): mixed
    {
        $cValue = $this->cdata->maxWorkGroupCount;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setMaxWorkGroupCount(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->maxWorkGroupCount = $cValue;
    }

    /**
     * void* /
     */
    public function getMaxWorkGroupSize(): mixed
    {
        $cValue = $this->cdata->maxWorkGroupSize;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setMaxWorkGroupSize(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->maxWorkGroupSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxOutputClusterCount(): int
    {
        $cValue = $this->cdata->maxOutputClusterCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxOutputClusterCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxOutputClusterCount = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getIndirectBufferOffsetAlignment(): int
    {
        $cValue = $this->cdata->indirectBufferOffsetAlignment;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setIndirectBufferOffsetAlignment(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->indirectBufferOffsetAlignment = $cValue;
    }
}
