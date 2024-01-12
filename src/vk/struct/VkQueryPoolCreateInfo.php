<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkQueryPoolCreateInfo implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "queryType" => $this->getQueryType(),
          "queryCount" => $this->getQueryCount(),
          "pipelineStatistics" => $this->getPipelineStatistics(),
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
        null|\iggyvolz\vulkan\enum\VkQueryType $queryType = null,
        null|int $queryCount = null,
        null|array $pipelineStatistics = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkQueryPoolCreateInfo', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($queryType)) $self->setQueryType($queryType);
        if(!is_null($queryCount)) $self->setQueryCount($queryCount);
        if(!is_null($pipelineStatistics)) $self->setPipelineStatistics($pipelineStatistics);
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
     * VkQueryPoolCreateFlags/
     */
    public function getFlags(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkQueryPoolCreateFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkQueryPoolCreateFlagBits::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * VkQueryType/
     */
    public function getQueryType(): \iggyvolz\vulkan\enum\VkQueryType
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->queryType;
        $phpValue = \iggyvolz\vulkan\enum\VkQueryType::from($cValue);
        return $phpValue;
    }

    public function setQueryType(\iggyvolz\vulkan\enum\VkQueryType $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->queryType = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getQueryCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->queryCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setQueryCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->queryCount = $cValue;
    }

    /**
     * VkQueryPipelineStatisticFlags/
     */
    public function getPipelineStatistics(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pipelineStatistics;
        $phpValue = \iggyvolz\vulkan\enum\VkQueryPipelineStatisticFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setPipelineStatistics(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkQueryPipelineStatisticFlagBits::toInt(...$phpValue);
        $this->cdata->pipelineStatistics = $cValue;
    }
}
