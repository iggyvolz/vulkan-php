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
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|string $pipelineIdentifier = null,
        null|\iggyvolz\vulkan\enum\VkPipelineMatchControl $matchControl = null,
        null|int $poolEntrySize = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineOfflineCreateInfo', false));
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
     * char/[16]
     */
    public function getPipelineIdentifier(): string
    {
        $cValue = $this->cdata->pipelineIdentifier;
        $tempString = \FFI::string($cValue, 16); $phpValue = \substr($tempString, 0, \strpos($tempString, "\0"));
        return $phpValue;
    }

    public function setPipelineIdentifier(string $phpValue): void
    {
        \FFI::memcpy($cValue, $phpValue, 16);
        $this->cdata->pipelineIdentifier = $cValue;
    }

    /**
     * VkPipelineMatchControl/
     */
    public function getMatchControl(): \iggyvolz\vulkan\enum\VkPipelineMatchControl
    {
        $cValue = $this->cdata->matchControl;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineMatchControl::from($cValue);
        return $phpValue;
    }

    public function setMatchControl(\iggyvolz\vulkan\enum\VkPipelineMatchControl $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->matchControl = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getPoolEntrySize(): int
    {
        $cValue = $this->cdata->poolEntrySize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPoolEntrySize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->poolEntrySize = $cValue;
    }
}
