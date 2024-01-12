<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkDispatchGraphCountInfoAMDX implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "count" => $this->getCount(),
          "infos" => $this->getInfos(),
          "stride" => $this->getStride(),
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
        null|int $count = null,
        mixed $infos = null,
        null|int $stride = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkDispatchGraphCountInfoAMDX', false), $vulkan);
        if(!is_null($count)) $self->setCount($count);
        if(!is_null($infos)) $self->setInfos($infos);
        if(!is_null($stride)) $self->setStride($stride);
        return $self;
    }

    /**
     * uint32_t/
     */
    public function getCount(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->count;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCount(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->count = $cValue;
    }

    /**
     * void* /
     */
    public function getInfos(): mixed
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->infos;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setInfos(mixed $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->infos = $cValue;
    }

    /**
     * uint64_t/
     */
    public function getStride(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->stride;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStride(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->stride = $cValue;
    }
}
