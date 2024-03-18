<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkAccelerationStructureGeometryKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "geometryType" => $this->getGeometryType(),
          "geometry" => $this->getGeometry(),
          "flags" => $this->getFlags(),
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
        null|\iggyvolz\vulkan\enum\VkGeometryTypeKHR $geometryType = null,
        mixed $geometry = null,
        null|array $flags = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkAccelerationStructureGeometryKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($geometryType)) $self->setGeometryType($geometryType);
        if(!is_null($geometry)) $self->setGeometry($geometry);
        if(!is_null($flags)) $self->setFlags($flags);
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
     * VkGeometryTypeKHR/
     */
    public function getGeometryType(): \iggyvolz\vulkan\enum\VkGeometryTypeKHR
    {
        $cValue = $this->cdata->geometryType;
        $phpValue = \iggyvolz\vulkan\enum\VkGeometryTypeKHR::from($cValue);
        return $phpValue;
    }

    public function setGeometryType(\iggyvolz\vulkan\enum\VkGeometryTypeKHR $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->geometryType = $cValue;
    }

    /**
     * void* /
     */
    public function getGeometry(): mixed
    {
        $cValue = $this->cdata->geometry;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setGeometry(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->geometry = $cValue;
    }

    /**
     * VkGeometryFlagsKHR/
     */
    public function getFlags(): array
    {
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkGeometryFlagBitsKHR::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkGeometryFlagBitsKHR::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }
}
