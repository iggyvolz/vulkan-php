<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkFaultCallbackInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "faultCount" => $this->getFaultCount(),
          "pFaults" => $this->getPFaults(),
          "pfnFaultCallback" => $this->getPfnFaultCallback(),
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
        \FFI $ffi,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|int $faultCount = null,
        mixed $pFaults = null,
        mixed $pfnFaultCallback = null,
    ): self {
        $self = new self( $ffi->new('VkFaultCallbackInfo', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($faultCount)) $self->setFaultCount($faultCount);
        if(!is_null($pFaults)) $self->setPFaults($pFaults);
        if(!is_null($pfnFaultCallback)) $self->setPfnFaultCallback($pfnFaultCallback);
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
    public function getFaultCount(): int
    {
        $cValue = $this->cdata->faultCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setFaultCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->faultCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPFaults(): mixed
    {
        $cValue = $this->cdata->pFaults;
        throw new \LogicException("Dummy transformer - VkFaultData*!");
        return $phpValue;
    }

    public function setPFaults(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer - VkFaultData*!");
        $this->cdata->pFaults = $cValue;
    }

    /**
     * void* /
     */
    public function getPfnFaultCallback(): mixed
    {
        $cValue = $this->cdata->pfnFaultCallback;
        throw new \LogicException("Dummy transformer - PFN_vkFaultCallbackFunction!");
        return $phpValue;
    }

    public function setPfnFaultCallback(mixed $phpValue): void
    {
        throw new \LogicException("Dummy transformer - PFN_vkFaultCallbackFunction!");
        $this->cdata->pfnFaultCallback = $cValue;
    }
}
