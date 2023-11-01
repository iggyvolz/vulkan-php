<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDebugUtilsMessengerCallbackDataEXT
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
        null|array $flags = null,
        ?string $pMessageIdName = null,
        null|int $messageIdNumber = null,
        ?string $pMessage = null,
        null|int $queueLabelCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pQueueLabels = null,
        null|int $cmdBufLabelCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pCmdBufLabels = null,
        null|int $objectCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pObjects = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDebugUtilsMessengerCallbackDataEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($pMessageIdName)) $self->setPMessageIdName($pMessageIdName);
        if(!is_null($messageIdNumber)) $self->setMessageIdNumber($messageIdNumber);
        if(!is_null($pMessage)) $self->setPMessage($pMessage);
        if(!is_null($queueLabelCount)) $self->setQueueLabelCount($queueLabelCount);
        if(!is_null($pQueueLabels)) $self->setPQueueLabels($pQueueLabels);
        if(!is_null($cmdBufLabelCount)) $self->setCmdBufLabelCount($cmdBufLabelCount);
        if(!is_null($pCmdBufLabels)) $self->setPCmdBufLabels($pCmdBufLabels);
        if(!is_null($objectCount)) $self->setObjectCount($objectCount);
        if(!is_null($pObjects)) $self->setPObjects($pObjects);
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
     * VkDebugUtilsMessengerCallbackDataFlagsEXT/
     */
    public function getFlags(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = [];
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = 0;
        $this->cdata->flags = $cValue;
    }

    /**
     * const char* /
     */
    public function getPMessageIdName(): ?string
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pMessageIdName;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPMessageIdName(?string $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->pMessageIdName = $cValue;
    }

    /**
     * int32_t/
     */
    public function getMessageIdNumber(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->messageIdNumber;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMessageIdNumber(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->messageIdNumber = $cValue;
    }

    /**
     * const char* /
     */
    public function getPMessage(): ?string
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pMessage;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPMessage(?string $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->pMessage = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getQueueLabelCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->queueLabelCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setQueueLabelCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->queueLabelCount = $cValue;
    }

    /**
     * VkDebugUtilsLabelEXT* /
     */
    public function getPQueueLabels(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pQueueLabels;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkDebugUtilsLabelEXT', $cValue, $ffi);
        return $phpValue;
    }

    public function setPQueueLabels(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pQueueLabels = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getCmdBufLabelCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->cmdBufLabelCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCmdBufLabelCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->cmdBufLabelCount = $cValue;
    }

    /**
     * VkDebugUtilsLabelEXT* /
     */
    public function getPCmdBufLabels(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pCmdBufLabels;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkDebugUtilsLabelEXT', $cValue, $ffi);
        return $phpValue;
    }

    public function setPCmdBufLabels(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pCmdBufLabels = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getObjectCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->objectCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setObjectCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->objectCount = $cValue;
    }

    /**
     * VkDebugUtilsObjectNameInfoEXT* /
     */
    public function getPObjects(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pObjects;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkDebugUtilsObjectNameInfoEXT', $cValue, $ffi);
        return $phpValue;
    }

    public function setPObjects(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pObjects = $cValue;
    }
}
