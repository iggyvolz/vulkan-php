<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkIndirectCommandsLayoutTokenNV
{
    /**
     * @internal
     */
    public function __construct(
        /** @internal */
        public \FFI\CData $cdata,
        /** @internal */
        public \FFI $ffi,
    ) {
    }

    public static function create(
        \iggyvolz\vulkan\Vulkan $vulkan,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\OpaquePointer $pNext = null,
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
        mixed $pIndexTypes = null,
        null|\iggyvolz\vulkan\util\IntPointer $pIndexTypeValues = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkIndirectCommandsLayoutTokenNV', false), $vulkan->ffi);
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
        $ffi = $this->ffi;
        $cValue = $this->cdata->sType;
        $phpValue = \iggyvolz\vulkan\enum\VkStructureType::from($cValue);
        return $phpValue;
    }

    public function setSType(\iggyvolz\vulkan\enum\VkStructureType $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->sType = $cValue;
    }

    /**
     * void* /
     */
    public function getPNext(): \iggyvolz\vulkan\util\OpaquePointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pNext;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $ffi);
        return $phpValue;
    }

    public function setPNext(\iggyvolz\vulkan\util\OpaquePointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pNext = $cValue;
    }

    /**
     * VkIndirectCommandsTokenTypeNV/
     */
    public function getTokenType(): \iggyvolz\vulkan\enum\VkIndirectCommandsTokenTypeNV
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->tokenType;
        $phpValue = \iggyvolz\vulkan\enum\VkIndirectCommandsTokenTypeNV::from($cValue);
        return $phpValue;
    }

    public function setTokenType(\iggyvolz\vulkan\enum\VkIndirectCommandsTokenTypeNV $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->value;
        $this->cdata->tokenType = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStream(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->stream;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStream(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->stream = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getOffset(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->offset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setOffset(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->offset = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getVertexBindingUnit(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->vertexBindingUnit;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setVertexBindingUnit(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->vertexBindingUnit = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getVertexDynamicStride(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->vertexDynamicStride;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setVertexDynamicStride(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->vertexDynamicStride = $cValue;
    }

    /**
     * VkPipelineLayout/
     */
    public function getPushconstantPipelineLayout(): VkPipelineLayout
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pushconstantPipelineLayout;
        $phpValue = new \iggyvolz\vulkan\struct\VkPipelineLayout($cValue, $ffi);
        return $phpValue;
    }

    public function setPushconstantPipelineLayout(VkPipelineLayout $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pushconstantPipelineLayout = $cValue;
    }

    /**
     * VkShaderStageFlags/
     */
    public function getPushconstantShaderStageFlags(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pushconstantShaderStageFlags;
        $phpValue = \iggyvolz\vulkan\enum\VkShaderStageFlagBits::fromInt($cValue);
        return $phpValue;
    }

    public function setPushconstantShaderStageFlags(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkShaderStageFlagBits::toInt(...$phpValue);
        $this->cdata->pushconstantShaderStageFlags = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPushconstantOffset(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pushconstantOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPushconstantOffset(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->pushconstantOffset = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getPushconstantSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pushconstantSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setPushconstantSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->pushconstantSize = $cValue;
    }

    /**
     * VkIndirectStateFlagsNV/
     */
    public function getIndirectStateFlags(): array
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->indirectStateFlags;
        $phpValue = \iggyvolz\vulkan\enum\VkIndirectStateFlagBitsNV::fromInt($cValue);
        return $phpValue;
    }

    public function setIndirectStateFlags(array $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = \iggyvolz\vulkan\enum\VkIndirectStateFlagBitsNV::toInt(...$phpValue);
        $this->cdata->indirectStateFlags = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getIndexTypeCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->indexTypeCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setIndexTypeCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->indexTypeCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPIndexTypes(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pIndexTypes;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setPIndexTypes(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->pIndexTypes = $cValue;
    }

    /**
     * uint32_t* /
     */
    public function getPIndexTypeValues(): \iggyvolz\vulkan\util\IntPointer
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->pIndexTypeValues;
        $phpValue = $cValue->get();
        return $phpValue;
    }

    public function setPIndexTypeValues(\iggyvolz\vulkan\util\IntPointer $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->pIndexTypeValues = $cValue;
    }
}
