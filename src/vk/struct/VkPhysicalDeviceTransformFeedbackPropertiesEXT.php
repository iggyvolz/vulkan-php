<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPhysicalDeviceTransformFeedbackPropertiesEXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "maxTransformFeedbackStreams" => $this->getMaxTransformFeedbackStreams(),
          "maxTransformFeedbackBuffers" => $this->getMaxTransformFeedbackBuffers(),
          "maxTransformFeedbackBufferSize" => $this->getMaxTransformFeedbackBufferSize(),
          "maxTransformFeedbackStreamDataSize" => $this->getMaxTransformFeedbackStreamDataSize(),
          "maxTransformFeedbackBufferDataSize" => $this->getMaxTransformFeedbackBufferDataSize(),
          "maxTransformFeedbackBufferDataStride" => $this->getMaxTransformFeedbackBufferDataStride(),
          "transformFeedbackQueries" => $this->getTransformFeedbackQueries(),
          "transformFeedbackStreamsLinesTriangles" => $this->getTransformFeedbackStreamsLinesTriangles(),
          "transformFeedbackRasterizationStreamSelect" => $this->getTransformFeedbackRasterizationStreamSelect(),
          "transformFeedbackDraw" => $this->getTransformFeedbackDraw(),
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
        null|int $maxTransformFeedbackStreams = null,
        null|int $maxTransformFeedbackBuffers = null,
        null|int $maxTransformFeedbackBufferSize = null,
        null|int $maxTransformFeedbackStreamDataSize = null,
        null|int $maxTransformFeedbackBufferDataSize = null,
        null|int $maxTransformFeedbackBufferDataStride = null,
        null|bool $transformFeedbackQueries = null,
        null|bool $transformFeedbackStreamsLinesTriangles = null,
        null|bool $transformFeedbackRasterizationStreamSelect = null,
        null|bool $transformFeedbackDraw = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPhysicalDeviceTransformFeedbackPropertiesEXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($maxTransformFeedbackStreams)) $self->setMaxTransformFeedbackStreams($maxTransformFeedbackStreams);
        if(!is_null($maxTransformFeedbackBuffers)) $self->setMaxTransformFeedbackBuffers($maxTransformFeedbackBuffers);
        if(!is_null($maxTransformFeedbackBufferSize)) $self->setMaxTransformFeedbackBufferSize($maxTransformFeedbackBufferSize);
        if(!is_null($maxTransformFeedbackStreamDataSize)) $self->setMaxTransformFeedbackStreamDataSize($maxTransformFeedbackStreamDataSize);
        if(!is_null($maxTransformFeedbackBufferDataSize)) $self->setMaxTransformFeedbackBufferDataSize($maxTransformFeedbackBufferDataSize);
        if(!is_null($maxTransformFeedbackBufferDataStride)) $self->setMaxTransformFeedbackBufferDataStride($maxTransformFeedbackBufferDataStride);
        if(!is_null($transformFeedbackQueries)) $self->setTransformFeedbackQueries($transformFeedbackQueries);
        if(!is_null($transformFeedbackStreamsLinesTriangles)) $self->setTransformFeedbackStreamsLinesTriangles($transformFeedbackStreamsLinesTriangles);
        if(!is_null($transformFeedbackRasterizationStreamSelect)) $self->setTransformFeedbackRasterizationStreamSelect($transformFeedbackRasterizationStreamSelect);
        if(!is_null($transformFeedbackDraw)) $self->setTransformFeedbackDraw($transformFeedbackDraw);
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
    public function getMaxTransformFeedbackStreams(): int
    {
        $cValue = $this->cdata->maxTransformFeedbackStreams;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxTransformFeedbackStreams(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxTransformFeedbackStreams = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxTransformFeedbackBuffers(): int
    {
        $cValue = $this->cdata->maxTransformFeedbackBuffers;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxTransformFeedbackBuffers(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxTransformFeedbackBuffers = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getMaxTransformFeedbackBufferSize(): int
    {
        $cValue = $this->cdata->maxTransformFeedbackBufferSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxTransformFeedbackBufferSize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxTransformFeedbackBufferSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxTransformFeedbackStreamDataSize(): int
    {
        $cValue = $this->cdata->maxTransformFeedbackStreamDataSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxTransformFeedbackStreamDataSize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxTransformFeedbackStreamDataSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxTransformFeedbackBufferDataSize(): int
    {
        $cValue = $this->cdata->maxTransformFeedbackBufferDataSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxTransformFeedbackBufferDataSize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxTransformFeedbackBufferDataSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxTransformFeedbackBufferDataStride(): int
    {
        $cValue = $this->cdata->maxTransformFeedbackBufferDataStride;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxTransformFeedbackBufferDataStride(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->maxTransformFeedbackBufferDataStride = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getTransformFeedbackQueries(): bool
    {
        $cValue = $this->cdata->transformFeedbackQueries;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setTransformFeedbackQueries(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->transformFeedbackQueries = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getTransformFeedbackStreamsLinesTriangles(): bool
    {
        $cValue = $this->cdata->transformFeedbackStreamsLinesTriangles;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setTransformFeedbackStreamsLinesTriangles(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->transformFeedbackStreamsLinesTriangles = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getTransformFeedbackRasterizationStreamSelect(): bool
    {
        $cValue = $this->cdata->transformFeedbackRasterizationStreamSelect;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setTransformFeedbackRasterizationStreamSelect(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->transformFeedbackRasterizationStreamSelect = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getTransformFeedbackDraw(): bool
    {
        $cValue = $this->cdata->transformFeedbackDraw;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setTransformFeedbackDraw(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->transformFeedbackDraw = $cValue;
    }
}
