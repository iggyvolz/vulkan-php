<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkImportFenceWin32HandleInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "fence" => $this->getFence(),
          "flags" => $this->getFlags(),
          "handleType" => $this->getHandleType(),
          "handle" => $this->getHandle(),
          "name" => $this->getName(),
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
        null|VkFence $fence = null,
        null|array $flags = null,
        null|\iggyvolz\vulkan\enum\VkExternalFenceHandleTypeFlagBits $handleType = null,
        null|\iggyvolz\vulkan\util\Pointer $handle = null,
        null|\iggyvolz\vulkan\util\Pointer $name = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkImportFenceWin32HandleInfoKHR', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($fence)) $self->setFence($fence);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($handleType)) $self->setHandleType($handleType);
        if(!is_null($handle)) $self->setHandle($handle);
        if(!is_null($name)) $self->setName($name);
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
     * VkFenceImportFlags/
     */
    public function getFlags(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkFenceImportFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkFenceImportFlagBits::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * VkExternalFenceHandleTypeFlagBits/
     */
    public function getHandleType(): \iggyvolz\vulkan\enum\VkExternalFenceHandleTypeFlagBits
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->handleType;
        $phpValue = \iggyvolz\vulkan\enum\VkExternalFenceHandleTypeFlagBits::from($cValue);
        return $phpValue;
    }

    public function setHandleType(\iggyvolz\vulkan\enum\VkExternalFenceHandleTypeFlagBits $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->handleType = $cValue;
    }

    /**
     * void* /
     */
    public function getHandle(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->handle;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setHandle(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->handle = $cValue;
    }

    /**
     * void* /
     */
    public function getName(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->name;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setName(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->name = $cValue;
    }
}
