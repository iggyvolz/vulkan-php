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
        $self = new self( $vulkan->ffi->new('VkAccelerationStructureCreateInfoNV', false));
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
     * uint64_t/
     */
    public function getCompactedSize(): int
    {
        $cValue = $this->cdata->compactedSize;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setCompactedSize(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->compactedSize = $cValue;
    }

    /**
     * VkAccelerationStructureInfoNV/
     */
    public function getInfo(): VkAccelerationStructureInfoNV
    {
        $cValue = $this->cdata->info;
        $phpValue = new \iggyvolz\vulkan\struct\VkAccelerationStructureInfoNV($cValue, $ffi);
        return $phpValue;
    }

    public function setInfo(VkAccelerationStructureInfoNV $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->info = $cValue;
    }
}
