<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkAcquireNextImageInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "swapchain" => $this->getSwapchain(),
          "timeout" => $this->getTimeout(),
          "semaphore" => $this->getSemaphore(),
          "fence" => $this->getFence(),
          "deviceMask" => $this->getDeviceMask(),
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
        null|VkSwapchainKHR $swapchain = null,
        null|int $timeout = null,
        null|VkSemaphore $semaphore = null,
        null|VkFence $fence = null,
        null|int $deviceMask = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkAcquireNextImageInfoKHR', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($swapchain)) $self->setSwapchain($swapchain);
        if(!is_null($timeout)) $self->setTimeout($timeout);
        if(!is_null($semaphore)) $self->setSemaphore($semaphore);
        if(!is_null($fence)) $self->setFence($fence);
        if(!is_null($deviceMask)) $self->setDeviceMask($deviceMask);
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
     * VkSwapchainKHR/
     */
    public function getSwapchain(): VkSwapchainKHR
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->swapchain;
        $phpValue = new \iggyvolz\vulkan\struct\VkSwapchainKHR($cValue, $ffi);
        return $phpValue;
    }

    public function setSwapchain(VkSwapchainKHR $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->swapchain = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getTimeout(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->timeout;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setTimeout(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->timeout = $cValue;
    }

    /**
     * VkSemaphore/
     */
    public function getSemaphore(): VkSemaphore
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->semaphore;
        $phpValue = new \iggyvolz\vulkan\struct\VkSemaphore($cValue, $ffi);
        return $phpValue;
    }

    public function setSemaphore(VkSemaphore $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->semaphore = $cValue;
    }

    /**
     * VkFence/
     */
    public function getFence(): VkFence
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->fence;
        $phpValue = new \iggyvolz\vulkan\struct\VkFence($cValue, $ffi);
        return $phpValue;
    }

    public function setFence(VkFence $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->fence = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDeviceMask(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->deviceMask;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDeviceMask(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->deviceMask = $cValue;
    }
}
