<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkBindBufferMemoryDeviceGroupInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "deviceIndexCount" => $this->getDeviceIndexCount(),
          "pDeviceIndices" => $this->getPDeviceIndices(),
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
        null|int $deviceIndexCount = null,
        null|\iggyvolz\vulkan\util\IntPointer $pDeviceIndices = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkBindBufferMemoryDeviceGroupInfo', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($deviceIndexCount)) $self->setDeviceIndexCount($deviceIndexCount);
        if(!is_null($pDeviceIndices)) $self->setPDeviceIndices($pDeviceIndices);
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
    public function getDeviceIndexCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->deviceIndexCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDeviceIndexCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->deviceIndexCount = $cValue;
    }

    /**
     * uint32_t* /
     */
    public function getPDeviceIndices(): \iggyvolz\vulkan\util\IntPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pDeviceIndices;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPDeviceIndices(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pDeviceIndices = $cValue;
    }
}
