<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDebugUtilsMessengerCreateInfoEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "messageSeverity" => $this->getMessageSeverity(),
          "messageType" => $this->getMessageType(),
          "pfnUserCallback" => $this->getPfnUserCallback(),
          "pUserData" => $this->getPUserData(),
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
        null|array $messageSeverity = null,
        null|array $messageType = null,
        mixed $pfnUserCallback = null,
        null|\iggyvolz\vulkan\util\Pointer $pUserData = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDebugUtilsMessengerCreateInfoEXT', false), $vulkan);
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
     * VkDebugUtilsMessengerCreateFlagsEXT/
     */
    public function getFlags(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = [];
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = 0;
        $this->cdata->flags = $cValue;
    }

    /**
     * VkDebugUtilsMessageSeverityFlagsEXT/
     */
    public function getMessageSeverity(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->messageSeverity;
        $phpValue = \iggyvolz\vulkan\enum\VkDebugUtilsMessageSeverityFlagBitsEXT::fromInt($cValue);
        return $phpValue;
    }

    public function setMessageSeverity(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkDebugUtilsMessageSeverityFlagBitsEXT::toInt(...$phpValue);
        $this->cdata->messageSeverity = $cValue;
    }

    /**
     * VkDebugUtilsMessageTypeFlagsEXT/
     */
    public function getMessageType(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->messageType;
        $phpValue = \iggyvolz\vulkan\enum\VkDebugUtilsMessageTypeFlagBitsEXT::fromInt($cValue);
        return $phpValue;
    }

    public function setMessageType(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkDebugUtilsMessageTypeFlagBitsEXT::toInt(...$phpValue);
        $this->cdata->messageType = $cValue;
    }

    /**
     * void* /
     */
    public function getPfnUserCallback(): mixed
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pfnUserCallback;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPfnUserCallback(mixed $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->pfnUserCallback = $cValue;
    }

    /**
     * void* /
     */
    public function getPUserData(): \iggyvolz\vulkan\util\Pointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pUserData;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPUserData(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pUserData = $cValue;
    }
}
