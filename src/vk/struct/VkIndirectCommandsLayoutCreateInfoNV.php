<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkIndirectCommandsLayoutCreateInfoNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "flags" => $this->getFlags(),
          "pipelineBindPoint" => $this->getPipelineBindPoint(),
          "tokenCount" => $this->getTokenCount(),
          "pTokens" => $this->getPTokens(),
          "streamCount" => $this->getStreamCount(),
          "pStreamStrides" => $this->getPStreamStrides(),
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
        null|\iggyvolz\vulkan\enum\VkPipelineBindPoint $pipelineBindPoint = null,
        null|int $tokenCount = null,
        null|\iggyvolz\vulkan\util\ObjectPointer $pTokens = null,
        null|int $streamCount = null,
        null|\iggyvolz\vulkan\util\IntPointer $pStreamStrides = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkIndirectCommandsLayoutCreateInfoNV', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($flags)) $self->setFlags($flags);
        if(!is_null($pipelineBindPoint)) $self->setPipelineBindPoint($pipelineBindPoint);
        if(!is_null($tokenCount)) $self->setTokenCount($tokenCount);
        if(!is_null($pTokens)) $self->setPTokens($pTokens);
        if(!is_null($streamCount)) $self->setStreamCount($streamCount);
        if(!is_null($pStreamStrides)) $self->setPStreamStrides($pStreamStrides);
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
     * VkIndirectCommandsLayoutUsageFlagsNV/
     */
    public function getFlags(): array
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->flags;
        $phpValue = \iggyvolz\vulkan\enum\VkIndirectCommandsLayoutUsageFlagBitsNV::fromInt($cValue);
        return $phpValue;
    }

    public function setFlags(array $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkIndirectCommandsLayoutUsageFlagBitsNV::toInt(...$phpValue);
        $this->cdata->flags = $cValue;
    }

    /**
     * VkPipelineBindPoint/
     */
    public function getPipelineBindPoint(): \iggyvolz\vulkan\enum\VkPipelineBindPoint
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pipelineBindPoint;
        $phpValue = \iggyvolz\vulkan\enum\VkPipelineBindPoint::from($cValue);
        return $phpValue;
    }

    public function setPipelineBindPoint(\iggyvolz\vulkan\enum\VkPipelineBindPoint $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->value;
        $this->cdata->pipelineBindPoint = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getTokenCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->tokenCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setTokenCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->tokenCount = $cValue;
    }

    /**
     * VkIndirectCommandsLayoutTokenNV* /
     */
    public function getPTokens(): \iggyvolz\vulkan\util\ObjectPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pTokens;
        $phpValue = new \iggyvolz\vulkan\util\ObjectPointer('VkIndirectCommandsLayoutTokenNV', $cValue, $ffi); /** PTRANS */
        return $phpValue;
    }

    public function setPTokens(\iggyvolz\vulkan\util\ObjectPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pTokens = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStreamCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->streamCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStreamCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->streamCount = $cValue;
    }

    /**
     * uint32_t* /
     */
    public function getPStreamStrides(): \iggyvolz\vulkan\util\IntPointer
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->pStreamStrides;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPStreamStrides(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pStreamStrides = $cValue;
    }
}
