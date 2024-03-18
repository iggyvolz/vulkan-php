<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkAccelerationStructureMotionInstanceNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "type" => $this->getType(),
          "flags" => $this->getFlags(),
          "data" => $this->getData(),
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
        null|\iggyvolz\vulkan\enum\VkAccelerationStructureMotionInstanceTypeNV $type = null,
        null|array $flags = null,
        mixed $data = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkAccelerationStructureMotionInstanceNV', false));
        if(!is_null($type)) $self->setType($type);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($data)) $self->setData($data);
        return $self;
    }

    /**
     * VkAccelerationStructureMotionInstanceTypeNV/
     */
    public function getType(): \iggyvolz\vulkan\enum\VkAccelerationStructureMotionInstanceTypeNV
    {
        $cValue = $this->cdata->type;
        $phpValue = \iggyvolz\vulkan\enum\VkAccelerationStructureMotionInstanceTypeNV::from($cValue);
        return $phpValue;
    }

    public function setType(\iggyvolz\vulkan\enum\VkAccelerationStructureMotionInstanceTypeNV $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->type = $cValue;
    }

    /**
     * VkAccelerationStructureMotionInstanceFlagsNV/
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
     * void* /
     */
    public function getData(): mixed
    {
        $cValue = $this->cdata->data;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setData(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer!");
        $this->cdata->data = $cValue;
    }
}
