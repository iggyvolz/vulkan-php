<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDevicePrimitivesGeneratedQueryFeaturesEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "primitivesGeneratedQuery" => $this->getPrimitivesGeneratedQuery(),
          "primitivesGeneratedQueryWithRasterizerDiscard" => $this->getPrimitivesGeneratedQueryWithRasterizerDiscard(),
          "primitivesGeneratedQueryWithNonZeroStreams" => $this->getPrimitivesGeneratedQueryWithNonZeroStreams(),
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
        null|bool $primitivesGeneratedQuery = null,
        null|bool $primitivesGeneratedQueryWithRasterizerDiscard = null,
        null|bool $primitivesGeneratedQueryWithNonZeroStreams = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDevicePrimitivesGeneratedQueryFeaturesEXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($primitivesGeneratedQuery)) $self->setPrimitivesGeneratedQuery($primitivesGeneratedQuery);
        if(!is_null($primitivesGeneratedQueryWithRasterizerDiscard)) $self->setPrimitivesGeneratedQueryWithRasterizerDiscard($primitivesGeneratedQueryWithRasterizerDiscard);
        if(!is_null($primitivesGeneratedQueryWithNonZeroStreams)) $self->setPrimitivesGeneratedQueryWithNonZeroStreams($primitivesGeneratedQueryWithNonZeroStreams);
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
     * uint32_t/
     */
    public function getPrimitivesGeneratedQuery(): bool
    {
        $cValue = $this->cdata->primitivesGeneratedQuery;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setPrimitivesGeneratedQuery(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->primitivesGeneratedQuery = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPrimitivesGeneratedQueryWithRasterizerDiscard(): bool
    {
        $cValue = $this->cdata->primitivesGeneratedQueryWithRasterizerDiscard;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setPrimitivesGeneratedQueryWithRasterizerDiscard(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->primitivesGeneratedQueryWithRasterizerDiscard = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPrimitivesGeneratedQueryWithNonZeroStreams(): bool
    {
        $cValue = $this->cdata->primitivesGeneratedQueryWithNonZeroStreams;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setPrimitivesGeneratedQueryWithNonZeroStreams(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->primitivesGeneratedQueryWithNonZeroStreams = $cValue;
    }
}
