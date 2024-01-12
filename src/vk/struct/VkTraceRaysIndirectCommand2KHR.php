<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkTraceRaysIndirectCommand2KHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "raygenShaderRecordAddress" => $this->getRaygenShaderRecordAddress(),
          "raygenShaderRecordSize" => $this->getRaygenShaderRecordSize(),
          "missShaderBindingTableAddress" => $this->getMissShaderBindingTableAddress(),
          "missShaderBindingTableSize" => $this->getMissShaderBindingTableSize(),
          "missShaderBindingTableStride" => $this->getMissShaderBindingTableStride(),
          "hitShaderBindingTableAddress" => $this->getHitShaderBindingTableAddress(),
          "hitShaderBindingTableSize" => $this->getHitShaderBindingTableSize(),
          "hitShaderBindingTableStride" => $this->getHitShaderBindingTableStride(),
          "callableShaderBindingTableAddress" => $this->getCallableShaderBindingTableAddress(),
          "callableShaderBindingTableSize" => $this->getCallableShaderBindingTableSize(),
          "callableShaderBindingTableStride" => $this->getCallableShaderBindingTableStride(),
          "width" => $this->getWidth(),
          "height" => $this->getHeight(),
          "depth" => $this->getDepth(),
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
        null|int $raygenShaderRecordAddress = null,
        null|int $raygenShaderRecordSize = null,
        null|int $missShaderBindingTableAddress = null,
        null|int $missShaderBindingTableSize = null,
        null|int $missShaderBindingTableStride = null,
        null|int $hitShaderBindingTableAddress = null,
        null|int $hitShaderBindingTableSize = null,
        null|int $hitShaderBindingTableStride = null,
        null|int $callableShaderBindingTableAddress = null,
        null|int $callableShaderBindingTableSize = null,
        null|int $callableShaderBindingTableStride = null,
        null|int $width = null,
        null|int $height = null,
        null|int $depth = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkTraceRaysIndirectCommand2KHR', false), $vulkan);
        if(!is_null($raygenShaderRecordAddress)) $self->setRaygenShaderRecordAddress($raygenShaderRecordAddress);
        if(!is_null($raygenShaderRecordSize)) $self->setRaygenShaderRecordSize($raygenShaderRecordSize);
        if(!is_null($missShaderBindingTableAddress)) $self->setMissShaderBindingTableAddress($missShaderBindingTableAddress);
        if(!is_null($missShaderBindingTableSize)) $self->setMissShaderBindingTableSize($missShaderBindingTableSize);
        if(!is_null($missShaderBindingTableStride)) $self->setMissShaderBindingTableStride($missShaderBindingTableStride);
        if(!is_null($hitShaderBindingTableAddress)) $self->setHitShaderBindingTableAddress($hitShaderBindingTableAddress);
        if(!is_null($hitShaderBindingTableSize)) $self->setHitShaderBindingTableSize($hitShaderBindingTableSize);
        if(!is_null($hitShaderBindingTableStride)) $self->setHitShaderBindingTableStride($hitShaderBindingTableStride);
        if(!is_null($callableShaderBindingTableAddress)) $self->setCallableShaderBindingTableAddress($callableShaderBindingTableAddress);
        if(!is_null($callableShaderBindingTableSize)) $self->setCallableShaderBindingTableSize($callableShaderBindingTableSize);
        if(!is_null($callableShaderBindingTableStride)) $self->setCallableShaderBindingTableStride($callableShaderBindingTableStride);
        if(!is_null($width)) $self->setWidth($width);
        if(!is_null($height)) $self->setHeight($height);
        if(!is_null($depth)) $self->setDepth($depth);
        return $self;
    }

    /**
     * uint64_t/
     */
    public function getRaygenShaderRecordAddress(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->raygenShaderRecordAddress;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setRaygenShaderRecordAddress(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->raygenShaderRecordAddress = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getRaygenShaderRecordSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->raygenShaderRecordSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setRaygenShaderRecordSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->raygenShaderRecordSize = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getMissShaderBindingTableAddress(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->missShaderBindingTableAddress;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMissShaderBindingTableAddress(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->missShaderBindingTableAddress = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getMissShaderBindingTableSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->missShaderBindingTableSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMissShaderBindingTableSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->missShaderBindingTableSize = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getMissShaderBindingTableStride(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->missShaderBindingTableStride;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setMissShaderBindingTableStride(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->missShaderBindingTableStride = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getHitShaderBindingTableAddress(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->hitShaderBindingTableAddress;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setHitShaderBindingTableAddress(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->hitShaderBindingTableAddress = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getHitShaderBindingTableSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->hitShaderBindingTableSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setHitShaderBindingTableSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->hitShaderBindingTableSize = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getHitShaderBindingTableStride(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->hitShaderBindingTableStride;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setHitShaderBindingTableStride(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->hitShaderBindingTableStride = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getCallableShaderBindingTableAddress(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->callableShaderBindingTableAddress;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCallableShaderBindingTableAddress(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->callableShaderBindingTableAddress = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getCallableShaderBindingTableSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->callableShaderBindingTableSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCallableShaderBindingTableSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->callableShaderBindingTableSize = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getCallableShaderBindingTableStride(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->callableShaderBindingTableStride;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCallableShaderBindingTableStride(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->callableShaderBindingTableStride = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getWidth(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->width;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setWidth(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->width = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getHeight(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->height;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setHeight(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->height = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDepth(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->depth;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDepth(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->depth = $cValue;
    }
}
