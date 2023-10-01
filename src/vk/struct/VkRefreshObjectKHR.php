<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkRefreshObjectKHR
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
        null|\iggyvolz\vulkan\enum\VkObjectType $objectType = null,
        null|int $objectHandle = null,
        mixed $flags = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkRefreshObjectKHR', false), $vulkan->ffi);
        if(!is_null($objectType)) $self->setObjectType($objectType);
        if(!is_null($objectHandle)) $self->setObjectHandle($objectHandle);
        if(!is_null($flags)) $self->setFlags($flags);
        return $self;
    }

    /**
     * VkObjectType/
     */
    public function getObjectType(): \iggyvolz\vulkan\enum\VkObjectType
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->objectType;
        $phpValue = \iggyvolz\vulkan\enum\VkObjectType::from($cValue);
        return $phpValue;
    }

    public function setObjectType(\iggyvolz\vulkan\enum\VkObjectType $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->objectType = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getObjectHandle(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->objectHandle;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setObjectHandle(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->objectHandle = $cValue;
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
}
