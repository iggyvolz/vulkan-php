<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkBufferCreateInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "size" => $this->getSize(),
          "usage" => $this->getUsage(),
          "sharingMode" => $this->getSharingMode(),
          "queueFamilyIndexCount" => $this->getQueueFamilyIndexCount(),
          "pQueueFamilyIndices" => $this->getPQueueFamilyIndices(),
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
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|array $flags = null,
        null|int $size = null,
        null|array $usage = null,
        null|\iggyvolz\vulkan\enum\VkSharingMode $sharingMode = null,
        null|int $queueFamilyIndexCount = null,
        null|\iggyvolz\vulkan\util\IntPointer $pQueueFamilyIndices = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkBufferCreateInfo', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($size)) $self->setSize($size);
        if(!is_null($usage)) $self->setUsage($usage);
        if(!is_null($sharingMode)) $self->setSharingMode($sharingMode);
        if(!is_null($queueFamilyIndexCount)) $self->setQueueFamilyIndexCount($queueFamilyIndexCount);
        if(!is_null($pQueueFamilyIndices)) $self->setPQueueFamilyIndices($pQueueFamilyIndices);
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
     * VkBufferCreateFlags/
     */
    public function getFlags(): array
    {
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkBufferCreateFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkBufferCreateFlagBits::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getSize(): int
    {
        $cValue = $this->cdata->size;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setSize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->size = $cValue;
    }

    /**
     * VkBufferUsageFlags/
     */
    public function getUsage(): array
    {
        $cValue = $this->cdata->usage;
        $phpValue = \iggyvolz\vulkan\enum\VkBufferUsageFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setUsage(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkBufferUsageFlagBits::toInt(...$phpValue);
        $this->cdata->usage = $cValue;
    }

    /**
     * VkSharingMode/
     */
    public function getSharingMode(): \iggyvolz\vulkan\enum\VkSharingMode
    {
        $cValue = $this->cdata->sharingMode;
        $phpValue = \iggyvolz\vulkan\enum\VkSharingMode::from($cValue);
        return $phpValue;
    }

    public function setSharingMode(\iggyvolz\vulkan\enum\VkSharingMode $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->sharingMode = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getQueueFamilyIndexCount(): int
    {
        $cValue = $this->cdata->queueFamilyIndexCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setQueueFamilyIndexCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->queueFamilyIndexCount = $cValue;
    }

    /**
     * uint32_t* /
     */
    public function getPQueueFamilyIndices(): \iggyvolz\vulkan\util\IntPointer
    {
        $cValue = $this->cdata->pQueueFamilyIndices;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPQueueFamilyIndices(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pQueueFamilyIndices = $cValue;
    }
}
