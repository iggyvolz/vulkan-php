<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSemaphoreSubmitInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "semaphore" => $this->getSemaphore(),
          "value" => $this->getValue(),
          "stageMask" => $this->getStageMask(),
          "deviceIndex" => $this->getDeviceIndex(),
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
        null|VkSemaphore $semaphore = null,
        null|int $value = null,
        null|array $stageMask = null,
        null|int $deviceIndex = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkSemaphoreSubmitInfo', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($semaphore)) $self->setSemaphore($semaphore);
        if(!is_null($value)) $self->setValue($value);
        if(!is_null($stageMask)) $self->setStageMask($stageMask);
        if(!is_null($deviceIndex)) $self->setDeviceIndex($deviceIndex);
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
     * uint64_t/
     */
    public function getValue(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->value;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setValue(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->value = $cValue;
    }

    /**
     * VkPipelineStageFlags2/
     */
    public function getStageMask(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->stageMask;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits2::fromInt($cValue);
        return $phpValue;
    }

    public function setStageMask(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkPipelineStageFlagBits2::toInt(...$phpValue);
        $this->cdata->stageMask = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDeviceIndex(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->deviceIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDeviceIndex(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->deviceIndex = $cValue;
    }
}
