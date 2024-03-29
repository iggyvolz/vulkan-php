<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkAccelerationStructureCreateInfoNV implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "compactedSize" => $this->getCompactedSize(),
          "info" => $this->getInfo(),
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
        null|int $compactedSize = null,
        null|VkAccelerationStructureInfoNV $info = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkAccelerationStructureCreateInfoNV', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($compactedSize)) $self->setCompactedSize($compactedSize);
        if(!is_null($info)) $self->setInfo($info);
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
     * uint64_t/
     */
    public function getCompactedSize(): int
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->compactedSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCompactedSize(int $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue;
        $this->cdata->compactedSize = $cValue;
    }

    /**
     * VkAccelerationStructureInfoNV/
     */
    public function getInfo(): VkAccelerationStructureInfoNV
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->info;
        $phpValue = new \iggyvolz\vulkan\struct\VkAccelerationStructureInfoNV($cValue, $ffi);
        return $phpValue;
    }

    public function setInfo(VkAccelerationStructureInfoNV $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->info = $cValue;
    }
}
