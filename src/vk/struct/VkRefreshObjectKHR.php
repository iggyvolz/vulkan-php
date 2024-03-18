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
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkObjectType $objectType = null,
        null|int $objectHandle = null,
        null|array $flags = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkRefreshObjectKHR', false));
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
        $cValue = $this->cdata->objectType;
        $phpValue = \iggyvolz\vulkan\enum\VkObjectType::from($cValue);
        return $phpValue;
    }

    public function setObjectType(\iggyvolz\vulkan\enum\VkObjectType $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->objectType = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getObjectHandle(): int
    {
        $cValue = $this->cdata->objectHandle;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setObjectHandle(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->objectHandle = $cValue;
    }

    /**
     * VkRefreshObjectFlagsKHR/
     */
    public function getFlags(): array
    {
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkRefreshObjectFlagBitsKHR::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkRefreshObjectFlagBitsKHR::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }
}
