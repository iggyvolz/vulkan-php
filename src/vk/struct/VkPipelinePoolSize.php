<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelinePoolSize implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "poolEntrySize" => $this->getPoolEntrySize(),
          "poolEntryCount" => $this->getPoolEntryCount(),
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
        null|int $poolEntrySize = null,
        null|int $poolEntryCount = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelinePoolSize', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($poolEntrySize)) $self->setPoolEntrySize($poolEntrySize);
        if(!is_null($poolEntryCount)) $self->setPoolEntryCount($poolEntryCount);
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
     * uint64_t/
     */
    public function getPoolEntrySize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->poolEntrySize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPoolEntrySize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->poolEntrySize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPoolEntryCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->poolEntryCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPoolEntryCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->poolEntryCount = $cValue;
    }
}
