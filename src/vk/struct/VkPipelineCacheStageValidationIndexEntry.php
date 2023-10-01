<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineCacheStageValidationIndexEntry
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
        null|int $codeSize = null,
        null|int $codeOffset = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineCacheStageValidationIndexEntry', false), $vulkan->ffi);
        if(!is_null($codeSize)) $self->setCodeSize($codeSize);
        if(!is_null($codeOffset)) $self->setCodeOffset($codeOffset);
        return $self;
    }

    /**
     * uint64_t/
     */
    public function getCodeSize(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->codeSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCodeSize(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->codeSize = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getCodeOffset(): int
    {
        $ffi = $this->ffi;
        $cValue = $this->cdata->codeOffset;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCodeOffset(int $phpValue): void
    {
        $ffi = $this->ffi;
        $cValue = $phpValue;
        $this->cdata->codeOffset = $cValue;
    }
}
