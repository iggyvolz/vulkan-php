<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceMultiviewProperties implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "maxMultiviewViewCount" => $this->getMaxMultiviewViewCount(),
          "maxMultiviewInstanceIndex" => $this->getMaxMultiviewInstanceIndex(),
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
        null|int $maxMultiviewViewCount = null,
        null|int $maxMultiviewInstanceIndex = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceMultiviewProperties', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($maxMultiviewViewCount)) $self->setMaxMultiviewViewCount($maxMultiviewViewCount);
        if(!is_null($maxMultiviewInstanceIndex)) $self->setMaxMultiviewInstanceIndex($maxMultiviewInstanceIndex);
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
     * uint32_t/
     */
    public function getMaxMultiviewViewCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxMultiviewViewCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxMultiviewViewCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxMultiviewViewCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxMultiviewInstanceIndex(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxMultiviewInstanceIndex;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxMultiviewInstanceIndex(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxMultiviewInstanceIndex = $cValue;
    }
}
