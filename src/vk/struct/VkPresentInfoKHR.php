<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPresentInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "waitSemaphoreCount" => $this->getWaitSemaphoreCount(),
          "pWaitSemaphores" => $this->getPWaitSemaphores(),
          "swapchainCount" => $this->getSwapchainCount(),
          "pSwapchains" => $this->getPSwapchains(),
          "pImageIndices" => $this->getPImageIndices(),
          "pResults" => $this->getPResults(),
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
        null|int $waitSemaphoreCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pWaitSemaphores = null,
        null|int $swapchainCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pSwapchains = null,
        null|\iggyvolz\vulkan\util\IntPointer $pImageIndices = null,
        null|\iggyvolz\vulkan\util\Pointer $pResults = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPresentInfoKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($waitSemaphoreCount)) $self->setWaitSemaphoreCount($waitSemaphoreCount);
        if(!is_null($pWaitSemaphores)) $self->setPWaitSemaphores($pWaitSemaphores);
        if(!is_null($swapchainCount)) $self->setSwapchainCount($swapchainCount);
        if(!is_null($pSwapchains)) $self->setPSwapchains($pSwapchains);
        if(!is_null($pImageIndices)) $self->setPImageIndices($pImageIndices);
        if(!is_null($pResults)) $self->setPResults($pResults);
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
    public function getWaitSemaphoreCount(): int
    {
        $cValue = $this->cdata->waitSemaphoreCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setWaitSemaphoreCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->waitSemaphoreCount = $cValue;
    }

    /**
     * VkSemaphore* /
     */
    public function getPWaitSemaphores(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pWaitSemaphores;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkSemaphore', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPWaitSemaphores(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pWaitSemaphores = $cValue;
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
     * VkSwapchainKHR* /
     */
    public function getPSwapchains(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $cValue = $this->cdata->pSwapchains;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkSwapchainKHR', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPSwapchains(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pSwapchains = $cValue;
    }

    /**
     * uint32_t* /
     */
    public function getPImageIndices(): \iggyvolz\vulkan\util\IntPointer
    {
        $cValue = $this->cdata->pImageIndices;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPImageIndices(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pImageIndices = $cValue;
    }

    /**
     * void* /
     */
    public function getPResults(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pResults;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPResults(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pResults = $cValue;
    }
}
