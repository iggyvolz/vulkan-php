<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceDeviceGeneratedCommandsPropertiesNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "maxGraphicsShaderGroupCount" => $this->getMaxGraphicsShaderGroupCount(),
          "maxIndirectSequenceCount" => $this->getMaxIndirectSequenceCount(),
          "maxIndirectCommandsTokenCount" => $this->getMaxIndirectCommandsTokenCount(),
          "maxIndirectCommandsStreamCount" => $this->getMaxIndirectCommandsStreamCount(),
          "maxIndirectCommandsTokenOffset" => $this->getMaxIndirectCommandsTokenOffset(),
          "maxIndirectCommandsStreamStride" => $this->getMaxIndirectCommandsStreamStride(),
          "minSequencesCountBufferOffsetAlignment" => $this->getMinSequencesCountBufferOffsetAlignment(),
          "minSequencesIndexBufferOffsetAlignment" => $this->getMinSequencesIndexBufferOffsetAlignment(),
          "minIndirectCommandsBufferOffsetAlignment" => $this->getMinIndirectCommandsBufferOffsetAlignment(),
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
        null|int $maxGraphicsShaderGroupCount = null,
        null|int $maxIndirectSequenceCount = null,
        null|int $maxIndirectCommandsTokenCount = null,
        null|int $maxIndirectCommandsStreamCount = null,
        null|int $maxIndirectCommandsTokenOffset = null,
        null|int $maxIndirectCommandsStreamStride = null,
        null|int $minSequencesCountBufferOffsetAlignment = null,
        null|int $minSequencesIndexBufferOffsetAlignment = null,
        null|int $minIndirectCommandsBufferOffsetAlignment = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceDeviceGeneratedCommandsPropertiesNV', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($maxGraphicsShaderGroupCount)) $self->setMaxGraphicsShaderGroupCount($maxGraphicsShaderGroupCount);
        if(!is_null($maxIndirectSequenceCount)) $self->setMaxIndirectSequenceCount($maxIndirectSequenceCount);
        if(!is_null($maxIndirectCommandsTokenCount)) $self->setMaxIndirectCommandsTokenCount($maxIndirectCommandsTokenCount);
        if(!is_null($maxIndirectCommandsStreamCount)) $self->setMaxIndirectCommandsStreamCount($maxIndirectCommandsStreamCount);
        if(!is_null($maxIndirectCommandsTokenOffset)) $self->setMaxIndirectCommandsTokenOffset($maxIndirectCommandsTokenOffset);
        if(!is_null($maxIndirectCommandsStreamStride)) $self->setMaxIndirectCommandsStreamStride($maxIndirectCommandsStreamStride);
        if(!is_null($minSequencesCountBufferOffsetAlignment)) $self->setMinSequencesCountBufferOffsetAlignment($minSequencesCountBufferOffsetAlignment);
        if(!is_null($minSequencesIndexBufferOffsetAlignment)) $self->setMinSequencesIndexBufferOffsetAlignment($minSequencesIndexBufferOffsetAlignment);
        if(!is_null($minIndirectCommandsBufferOffsetAlignment)) $self->setMinIndirectCommandsBufferOffsetAlignment($minIndirectCommandsBufferOffsetAlignment);
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
    public function getMaxGraphicsShaderGroupCount(): int
    {
        $cValue = $this->cdata->maxGraphicsShaderGroupCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxGraphicsShaderGroupCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxGraphicsShaderGroupCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxIndirectSequenceCount(): int
    {
        $cValue = $this->cdata->maxIndirectSequenceCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxIndirectSequenceCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxIndirectSequenceCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxIndirectCommandsTokenCount(): int
    {
        $cValue = $this->cdata->maxIndirectCommandsTokenCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxIndirectCommandsTokenCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxIndirectCommandsTokenCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxIndirectCommandsStreamCount(): int
    {
        $cValue = $this->cdata->maxIndirectCommandsStreamCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxIndirectCommandsStreamCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxIndirectCommandsStreamCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxIndirectCommandsTokenOffset(): int
    {
        $cValue = $this->cdata->maxIndirectCommandsTokenOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxIndirectCommandsTokenOffset(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxIndirectCommandsTokenOffset = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxIndirectCommandsStreamStride(): int
    {
        $cValue = $this->cdata->maxIndirectCommandsStreamStride;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxIndirectCommandsStreamStride(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxIndirectCommandsStreamStride = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMinSequencesCountBufferOffsetAlignment(): int
    {
        $cValue = $this->cdata->minSequencesCountBufferOffsetAlignment;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinSequencesCountBufferOffsetAlignment(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->minSequencesCountBufferOffsetAlignment = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMinSequencesIndexBufferOffsetAlignment(): int
    {
        $cValue = $this->cdata->minSequencesIndexBufferOffsetAlignment;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinSequencesIndexBufferOffsetAlignment(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->minSequencesIndexBufferOffsetAlignment = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMinIndirectCommandsBufferOffsetAlignment(): int
    {
        $cValue = $this->cdata->minIndirectCommandsBufferOffsetAlignment;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinIndirectCommandsBufferOffsetAlignment(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->minIndirectCommandsBufferOffsetAlignment = $cValue;
    }
}
