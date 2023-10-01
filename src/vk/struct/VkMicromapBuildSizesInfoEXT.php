<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkMicromapBuildSizesInfoEXT
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
        null|int $micromapSize = null,
        null|int $buildScratchSize = null,
        null|bool $discardable = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkMicromapBuildSizesInfoEXT', false), $vulkan->ffi);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($micromapSize)) $self->setMicromapSize($micromapSize);
        if(!is_null($buildScratchSize)) $self->setBuildScratchSize($buildScratchSize);
        if(!is_null($discardable)) $self->setDiscardable($discardable);
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
     * uint64_t/
     */
    public function getMicromapSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->micromapSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMicromapSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->micromapSize = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getBuildScratchSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->buildScratchSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBuildScratchSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->buildScratchSize = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDiscardable(): bool
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->discardable;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setDiscardable(bool $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->discardable = $cValue;
    }
}
