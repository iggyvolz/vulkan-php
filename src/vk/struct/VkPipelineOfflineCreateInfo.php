<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineOfflineCreateInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "pipelineIdentifier" => $this->getPipelineIdentifier(),
          "matchControl" => $this->getMatchControl(),
          "poolEntrySize" => $this->getPoolEntrySize(),
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
        null|\Ramsey\Uuid\UuidInterface $pipelineIdentifier = null,
        null|\iggyvolz\vulkan\enum\VkPipelineMatchControl $matchControl = null,
        null|int $poolEntrySize = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineOfflineCreateInfo', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($pipelineIdentifier)) $self->setPipelineIdentifier($pipelineIdentifier);
        if(!is_null($matchControl)) $self->setMatchControl($matchControl);
        if(!is_null($poolEntrySize)) $self->setPoolEntrySize($poolEntrySize);
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
     * uint8_t/[16]
     */
    public function getPipelineIdentifier(): \Ramsey\Uuid\UuidInterface
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pipelineIdentifier;
        $phpValue = \Ramsey\Uuid\Uuid::fromBytes(\FFI::string($cValue, 16));
        return $phpValue;
    }

    public function setPipelineIdentifier(\Ramsey\Uuid\UuidInterface $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $ffi->new("uint8_t[16]"); $ffi->memcpy($cValue, $phpValue->getBytes(), 16);
        $this->cdata->pipelineIdentifier = $cValue;
    }

    /**
     * VkPipelineMatchControl/
     */
    public function getMatchControl(): \iggyvolz\vulkan\enum\VkPipelineMatchControl
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->matchControl;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineMatchControl::from($cValue);
        return $phpValue;
    }

    public function setMatchControl(\iggyvolz\vulkan\enum\VkPipelineMatchControl $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->matchControl = $cValue;
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
}
