<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDrmFormatModifierPropertiesEXT
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
        null|int $drmFormatModifier = null,
        null|int $drmFormatModifierPlaneCount = null,
        mixed $drmFormatModifierTilingFeatures = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDrmFormatModifierPropertiesEXT', false), $vulkan->ffi);
        if(!is_null($drmFormatModifier)) $self->setDrmFormatModifier($drmFormatModifier);
        if(!is_null($drmFormatModifierPlaneCount)) $self->setDrmFormatModifierPlaneCount($drmFormatModifierPlaneCount);
        if(!is_null($drmFormatModifierTilingFeatures)) $self->setDrmFormatModifierTilingFeatures($drmFormatModifierTilingFeatures);
        return $self;
    }

    /**
     * uint64_t/
     */
    public function getDrmFormatModifier(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->drmFormatModifier;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDrmFormatModifier(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->drmFormatModifier = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDrmFormatModifierPlaneCount(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->drmFormatModifierPlaneCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDrmFormatModifierPlaneCount(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->drmFormatModifierPlaneCount = $cValue;
    }

    /**
     * void* /
     */
    public function getDrmFormatModifierTilingFeatures(): mixed
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->drmFormatModifierTilingFeatures;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setDrmFormatModifierTilingFeatures(mixed $phpValue): void
    {
        $ffi = $this->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->drmFormatModifierTilingFeatures = $cValue;
    }
}
