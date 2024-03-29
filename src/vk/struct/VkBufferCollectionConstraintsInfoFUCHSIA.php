<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkBufferCollectionConstraintsInfoFUCHSIA implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "minBufferCount" => $this->getMinBufferCount(),
          "maxBufferCount" => $this->getMaxBufferCount(),
          "minBufferCountForCamping" => $this->getMinBufferCountForCamping(),
          "minBufferCountForDedicatedSlack" => $this->getMinBufferCountForDedicatedSlack(),
          "minBufferCountForSharedSlack" => $this->getMinBufferCountForSharedSlack(),
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
        null|int $minBufferCount = null,
        null|int $maxBufferCount = null,
        null|int $minBufferCountForCamping = null,
        null|int $minBufferCountForDedicatedSlack = null,
        null|int $minBufferCountForSharedSlack = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkBufferCollectionConstraintsInfoFUCHSIA', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($minBufferCount)) $self->setMinBufferCount($minBufferCount);
        if(!is_null($maxBufferCount)) $self->setMaxBufferCount($maxBufferCount);
        if(!is_null($minBufferCountForCamping)) $self->setMinBufferCountForCamping($minBufferCountForCamping);
        if(!is_null($minBufferCountForDedicatedSlack)) $self->setMinBufferCountForDedicatedSlack($minBufferCountForDedicatedSlack);
        if(!is_null($minBufferCountForSharedSlack)) $self->setMinBufferCountForSharedSlack($minBufferCountForSharedSlack);
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
     * uint32_t/
     */
    public function getMinBufferCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->minBufferCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinBufferCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->minBufferCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMaxBufferCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->maxBufferCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMaxBufferCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->maxBufferCount = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMinBufferCountForCamping(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->minBufferCountForCamping;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinBufferCountForCamping(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->minBufferCountForCamping = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMinBufferCountForDedicatedSlack(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->minBufferCountForDedicatedSlack;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinBufferCountForDedicatedSlack(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->minBufferCountForDedicatedSlack = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getMinBufferCountForSharedSlack(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->minBufferCountForSharedSlack;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMinBufferCountForSharedSlack(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->minBufferCountForSharedSlack = $cValue;
    }
}
