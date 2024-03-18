<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkIndirectCommandsLayoutTokenNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "tokenType" => $this->getTokenType(),
          "stream" => $this->getStream(),
          "offset" => $this->getOffset(),
          "vertexBindingUnit" => $this->getVertexBindingUnit(),
          "vertexDynamicStride" => $this->getVertexDynamicStride(),
          "pushconstantPipelineLayout" => $this->getPushconstantPipelineLayout(),
          "pushconstantShaderStageFlags" => $this->getPushconstantShaderStageFlags(),
          "pushconstantOffset" => $this->getPushconstantOffset(),
          "pushconstantSize" => $this->getPushconstantSize(),
          "indirectStateFlags" => $this->getIndirectStateFlags(),
          "indexTypeCount" => $this->getIndexTypeCount(),
          "pIndexTypes" => $this->getPIndexTypes(),
          "pIndexTypeValues" => $this->getPIndexTypeValues(),
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
        null|\iggyvolz\vulkan\enum\VkIndirectCommandsTokenTypeNV $tokenType = null,
        null|int $stream = null,
        null|int $offset = null,
        null|int $vertexBindingUnit = null,
        null|bool $vertexDynamicStride = null,
        null|VkPipelineLayout $pushconstantPipelineLayout = null,
        null|array $pushconstantShaderStageFlags = null,
        null|int $pushconstantOffset = null,
        null|int $pushconstantSize = null,
        null|array $indirectStateFlags = null,
        null|int $indexTypeCount = null,
        null|\iggyvolz\vulkan\util\Pointer $pIndexTypes = null,
        null|\iggyvolz\vulkan\util\IntPointer $pIndexTypeValues = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkIndirectCommandsLayoutTokenNV', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($tokenType)) $self->setTokenType($tokenType);
        if(!is_null($stream)) $self->setStream($stream);
        if(!is_null($offset)) $self->setOffset($offset);
        if(!is_null($vertexBindingUnit)) $self->setVertexBindingUnit($vertexBindingUnit);
        if(!is_null($vertexDynamicStride)) $self->setVertexDynamicStride($vertexDynamicStride);
        if(!is_null($pushconstantPipelineLayout)) $self->setPushconstantPipelineLayout($pushconstantPipelineLayout);
        if(!is_null($pushconstantShaderStageFlags)) $self->setPushconstantShaderStageFlags($pushconstantShaderStageFlags);
        if(!is_null($pushconstantOffset)) $self->setPushconstantOffset($pushconstantOffset);
        if(!is_null($pushconstantSize)) $self->setPushconstantSize($pushconstantSize);
        if(!is_null($indirectStateFlags)) $self->setIndirectStateFlags($indirectStateFlags);
        if(!is_null($indexTypeCount)) $self->setIndexTypeCount($indexTypeCount);
        if(!is_null($pIndexTypes)) $self->setPIndexTypes($pIndexTypes);
        if(!is_null($pIndexTypeValues)) $self->setPIndexTypeValues($pIndexTypeValues);
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
     * VkIndirectCommandsTokenTypeNV/
     */
    public function getTokenType(): \iggyvolz\vulkan\enum\VkIndirectCommandsTokenTypeNV
    {
        $cValue = $this->cdata->tokenType;
        $phpValue = \iggyvolz\vulkan\enum\VkIndirectCommandsTokenTypeNV::from($cValue);
        return $phpValue;
    }

    public function setTokenType(\iggyvolz\vulkan\enum\VkIndirectCommandsTokenTypeNV $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->tokenType = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStream(): int
    {
        $cValue = $this->cdata->stream;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStream(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->stream = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getOffset(): int
    {
        $cValue = $this->cdata->offset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setOffset(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->offset = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getVertexBindingUnit(): int
    {
        $cValue = $this->cdata->vertexBindingUnit;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setVertexBindingUnit(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->vertexBindingUnit = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getVertexDynamicStride(): bool
    {
        $cValue = $this->cdata->vertexDynamicStride;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setVertexDynamicStride(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->vertexDynamicStride = $cValue;
    }

    /**
     * VkPipelineLayout/
     */
    public function getPushconstantPipelineLayout(): VkPipelineLayout
    {
        $cValue = $this->cdata->pushconstantPipelineLayout;
        $phpValue = new \iggyvolz\vulkan\struct\VkPipelineLayout($cValue, $ffi);
        return $phpValue;
    }

    public function setPushconstantPipelineLayout(VkPipelineLayout $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pushconstantPipelineLayout = $cValue;
    }

    /**
     * VkShaderStageFlags/
     */
    public function getPushconstantShaderStageFlags(): array
    {
        $cValue = $this->cdata->pushconstantShaderStageFlags;
        $phpValue = \iggyvolz\vulkan\enum\VkShaderStageFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setPushconstantShaderStageFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkShaderStageFlagBits::toInt(...$phpValue);
        $this->cdata->pushconstantShaderStageFlags = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPushconstantOffset(): int
    {
        $cValue = $this->cdata->pushconstantOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPushconstantOffset(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->pushconstantOffset = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPushconstantSize(): int
    {
        $cValue = $this->cdata->pushconstantSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPushconstantSize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->pushconstantSize = $cValue;
    }

    /**
     * VkIndirectStateFlagsNV/
     */
    public function getIndirectStateFlags(): array
    {
        $cValue = $this->cdata->indirectStateFlags;
        $phpValue = \iggyvolz\vulkan\enum\VkIndirectStateFlagBitsNV::fromInt($cValue);
        return $phpValue;
    }

    public function setIndirectStateFlags(array $phpValue): void
    {
        $cValue = \iggyvolz\vulkan\enum\VkIndirectStateFlagBitsNV::toInt(...$phpValue);
        $this->cdata->indirectStateFlags = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIndexTypeCount(): int
    {
        $cValue = $this->cdata->indexTypeCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setIndexTypeCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->indexTypeCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPIndexTypes(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pIndexTypes;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPIndexTypes(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pIndexTypes = $cValue;
    }

    /**
     * uint32_t* /
     */
    public function getPIndexTypeValues(): \iggyvolz\vulkan\util\IntPointer
    {
        $cValue = $this->cdata->pIndexTypeValues;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPIndexTypeValues(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pIndexTypeValues = $cValue;
    }
}
