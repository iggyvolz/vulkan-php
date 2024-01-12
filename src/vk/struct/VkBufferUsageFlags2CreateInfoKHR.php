<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkBufferUsageFlags2CreateInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "usage" => $this->getUsage(),
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
        null|array $usage = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkBufferUsageFlags2CreateInfoKHR', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($usage)) $self->setUsage($usage);
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
     * VkBufferUsageFlags2KHR/
     */
    public function getUsage(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->usage;
        $phpValue = \iggyvolz\vulkan\enum\VkBufferUsageFlagBits2KHR::fromInt($cValue);
        return $phpValue;
    }

    public function setUsage(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkBufferUsageFlagBits2KHR::toInt(...$phpValue);
        $this->cdata->usage = $cValue;
    }
}
