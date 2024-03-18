<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkAccelerationStructureInfoNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "type" => $this->getType(),
          "flags" => $this->getFlags(),
          "instanceCount" => $this->getInstanceCount(),
          "geometryCount" => $this->getGeometryCount(),
          "pGeometries" => $this->getPGeometries(),
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
        mixed $type = null,
        null|array $flags = null,
        null|int $instanceCount = null,
        null|int $geometryCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pGeometries = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkAccelerationStructureInfoNV', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($type)) $self->setType($type);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($instanceCount)) $self->setInstanceCount($instanceCount);
        if(!is_null($geometryCount)) $self->setGeometryCount($geometryCount);
        if(!is_null($pGeometries)) $self->setPGeometries($pGeometries);
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
    public function getType(): mixed
    {
        $cValue = $this->cdata->type;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setType(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->type = $cValue;
    }

    /**
     * VkBuildAccelerationStructureFlagsNV/
     */
    public function getFlags(): array
    {
        $cValue = $this->cdata->flags;
        $phpValue = [];
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $cValue = 0;
        $this->cdata->flags = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getInstanceCount(): int
    {
        $cValue = $this->cdata->instanceCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setInstanceCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->instanceCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getGeometryCount(): int
    {
        $cValue = $this->cdata->geometryCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setGeometryCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->geometryCount = $cValue;
    }

    /**
     * VkGeometryNV* /
     */
    public function getPGeometries(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pGeometries;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkGeometryNV', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPGeometries(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pGeometries = $cValue;
    }
}
