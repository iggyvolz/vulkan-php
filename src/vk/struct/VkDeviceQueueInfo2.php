<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDeviceQueueInfo2 implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "queueFamilyIndex" => $this->getQueueFamilyIndex(),
          "queueIndex" => $this->getQueueIndex(),
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
        null|array $flags = null,
        null|int $queueFamilyIndex = null,
        null|int $queueIndex = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDeviceQueueInfo2', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($queueFamilyIndex)) $self->setQueueFamilyIndex($queueFamilyIndex);
        if(!is_null($queueIndex)) $self->setQueueIndex($queueIndex);
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
     * VkDeviceQueueCreateFlags/
     */
    public function getFlags(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkDeviceQueueCreateFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkDeviceQueueCreateFlagBits::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getQueueFamilyIndex(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->queueFamilyIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setQueueFamilyIndex(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->queueFamilyIndex = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getQueueIndex(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->queueIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setQueueIndex(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->queueIndex = $cValue;
    }
}
