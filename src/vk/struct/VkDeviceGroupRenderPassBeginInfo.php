<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDeviceGroupRenderPassBeginInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "deviceMask" => $this->getDeviceMask(),
          "deviceRenderAreaCount" => $this->getDeviceRenderAreaCount(),
          "pDeviceRenderAreas" => $this->getPDeviceRenderAreas(),
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
        null|int $deviceMask = null,
        null|int $deviceRenderAreaCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pDeviceRenderAreas = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDeviceGroupRenderPassBeginInfo', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($deviceMask)) $self->setDeviceMask($deviceMask);
        if(!is_null($deviceRenderAreaCount)) $self->setDeviceRenderAreaCount($deviceRenderAreaCount);
        if(!is_null($pDeviceRenderAreas)) $self->setPDeviceRenderAreas($pDeviceRenderAreas);
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
    public function getDeviceMask(): int
    {
        $cValue = $this->cdata->deviceMask;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDeviceMask(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->deviceMask = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDeviceRenderAreaCount(): int
    {
        $cValue = $this->cdata->deviceRenderAreaCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDeviceRenderAreaCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->deviceRenderAreaCount = $cValue;
    }

    /**
     * VkRect2D* /
     */
    public function getPDeviceRenderAreas(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pDeviceRenderAreas;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkRect2D', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPDeviceRenderAreas(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pDeviceRenderAreas = $cValue;
    }
}
