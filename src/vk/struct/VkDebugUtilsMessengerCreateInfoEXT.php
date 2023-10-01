<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDebugUtilsMessengerCreateInfoEXT
{
    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \FFI $ffi,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\OpaquePointer $pNext = null,
        mixed $flags = null,
        mixed $messageSeverity = null,
        mixed $messageType = null,
        mixed $pfnUserCallback = null,
        null|\iggyvolz\vulkan\util\OpaquePointer $pUserData = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDebugUtilsMessengerCreateInfoEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($messageSeverity)) $self->setMessageSeverity($messageSeverity);
        if(!is_null($messageType)) $self->setMessageType($messageType);
        if(!is_null($pfnUserCallback)) $self->setPfnUserCallback($pfnUserCallback);
        if(!is_null($pUserData)) $self->setPUserData($pUserData);
        return $self;
    }

    /**
     * VkStructureType/
     */
    public function getSType(): \iggyvolz\vulkan\enum\VkStructureType
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\OpaquePointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\OpaquePointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * void* /
     */
    public function getFlags(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->flags;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setFlags(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->flags = $cValue;
    }

    /**
     * void* /
     */
    public function getMessageSeverity(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->messageSeverity;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setMessageSeverity(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->messageSeverity = $cValue;
    }

    /**
     * void* /
     */
    public function getMessageType(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->messageType;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setMessageType(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->messageType = $cValue;
    }

    /**
     * void* /
     */
    public function getPfnUserCallback(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pfnUserCallback;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPfnUserCallback(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->pfnUserCallback = $cValue;
    }

    /**
     * void* /
     */
    public function getPUserData(): \iggyvolz\vulkan\util\OpaquePointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pUserData;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPUserData(\iggyvolz\vulkan\util\OpaquePointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pUserData = $cValue;
    }
}
