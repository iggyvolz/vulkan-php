<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkRefreshObjectKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "objectType" => $this->getObjectType(),
          "objectHandle" => $this->getObjectHandle(),
          "flags" => $this->getFlags(),
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
        null|\iggyvolz\vulkan\enum\VkObjectType $objectType = null,
        null|int $objectHandle = null,
        null|array $flags = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkRefreshObjectKHR', false), $vulkan);
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
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->objectType;
        $phpValue = \iggyvolz\vulkan\enum\VkObjectType::from($cValue);
        return $phpValue;
    }

    public function setObjectType(\iggyvolz\vulkan\enum\VkObjectType $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->objectType = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getObjectHandle(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->objectHandle;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setObjectHandle(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->objectHandle = $cValue;
    }

    /**
     * VkRefreshObjectFlagsKHR/
     */
    public function getFlags(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkRefreshObjectFlagBitsKHR::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkRefreshObjectFlagBitsKHR::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }
}
