<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDeviceGroupPresentInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "swapchainCount" => $this->getSwapchainCount(),
          "pDeviceMasks" => $this->getPDeviceMasks(),
          "mode" => $this->getMode(),
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
        null|int $swapchainCount = null,
        null|\iggyvolz\vulkan\util\IntPointer $pDeviceMasks = null,
        null|\iggyvolz\vulkan\enum\VkDeviceGroupPresentModeFlagBitsKHR $mode = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDeviceGroupPresentInfoKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($swapchainCount)) $self->setSwapchainCount($swapchainCount);
        if(!is_null($pDeviceMasks)) $self->setPDeviceMasks($pDeviceMasks);
        if(!is_null($mode)) $self->setMode($mode);
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
    public function getSwapchainCount(): int
    {
        $cValue = $this->cdata->swapchainCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSwapchainCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->swapchainCount = $cValue;
    }

    /**
     * uint32_t* /
     */
    public function getPDeviceMasks(): \iggyvolz\vulkan\util\IntPointer
    {
        $cValue = $this->cdata->pDeviceMasks;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPDeviceMasks(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pDeviceMasks = $cValue;
    }

    /**
     * VkDeviceGroupPresentModeFlagBitsKHR/
     */
    public function getMode(): \iggyvolz\vulkan\enum\VkDeviceGroupPresentModeFlagBitsKHR
    {
        $cValue = $this->cdata->mode;
        $phpValue = \iggyvolz\vulkan\enum\VkDeviceGroupPresentModeFlagBitsKHR::from($cValue);
        return $phpValue;
    }

    public function setMode(\iggyvolz\vulkan\enum\VkDeviceGroupPresentModeFlagBitsKHR $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->mode = $cValue;
    }
}
