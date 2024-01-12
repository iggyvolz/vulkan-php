<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkShaderResourceUsageAMD implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "numUsedVgprs" => $this->getNumUsedVgprs(),
          "numUsedSgprs" => $this->getNumUsedSgprs(),
          "ldsSizePerLocalWorkGroup" => $this->getLdsSizePerLocalWorkGroup(),
          "ldsUsageSizeInBytes" => $this->getLdsUsageSizeInBytes(),
          "scratchMemUsageInBytes" => $this->getScratchMemUsageInBytes(),
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
        null|int $numUsedVgprs = null,
        null|int $numUsedSgprs = null,
        null|int $ldsSizePerLocalWorkGroup = null,
        null|int $ldsUsageSizeInBytes = null,
        null|int $scratchMemUsageInBytes = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkShaderResourceUsageAMD', false), $vulkan);
        if(!is_null($numUsedVgprs)) $self->setNumUsedVgprs($numUsedVgprs);
        if(!is_null($numUsedSgprs)) $self->setNumUsedSgprs($numUsedSgprs);
        if(!is_null($ldsSizePerLocalWorkGroup)) $self->setLdsSizePerLocalWorkGroup($ldsSizePerLocalWorkGroup);
        if(!is_null($ldsUsageSizeInBytes)) $self->setLdsUsageSizeInBytes($ldsUsageSizeInBytes);
        if(!is_null($scratchMemUsageInBytes)) $self->setScratchMemUsageInBytes($scratchMemUsageInBytes);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getNumUsedVgprs(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->numUsedVgprs;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setNumUsedVgprs(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->numUsedVgprs = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getNumUsedSgprs(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->numUsedSgprs;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setNumUsedSgprs(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->numUsedSgprs = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getLdsSizePerLocalWorkGroup(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->ldsSizePerLocalWorkGroup;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setLdsSizePerLocalWorkGroup(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->ldsSizePerLocalWorkGroup = $cValue;
    }

    /**
     * size_t/
     */
    public function getLdsUsageSizeInBytes(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->ldsUsageSizeInBytes;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setLdsUsageSizeInBytes(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->ldsUsageSizeInBytes = $cValue;
    }

    /**
     * size_t/
     */
    public function getScratchMemUsageInBytes(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->scratchMemUsageInBytes;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setScratchMemUsageInBytes(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->scratchMemUsageInBytes = $cValue;
    }
}
