<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkSubpassFragmentDensityMapOffsetEndInfoQCOM implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "fragmentDensityOffsetCount" => $this->getFragmentDensityOffsetCount(),
          "pFragmentDensityOffsets" => $this->getPFragmentDensityOffsets(),
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
        \FFI $ffi,
        null|\iggyvolz\vulkan\enum\VkStructureType $sType = null,
        null|\iggyvolz\vulkan\util\Pointer $pNext = null,
        null|int $fragmentDensityOffsetCount = null,
        null|VkOffset2D $pFragmentDensityOffsets = null,
    ): self {
        $self = new self( $ffi->new('VkSubpassFragmentDensityMapOffsetEndInfoQCOM', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($fragmentDensityOffsetCount)) $self->setFragmentDensityOffsetCount($fragmentDensityOffsetCount);
        if(!is_null($pFragmentDensityOffsets)) $self->setPFragmentDensityOffsets($pFragmentDensityOffsets);
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
    public function getFragmentDensityOffsetCount(): int
    {
        $cValue = $this->cdata->fragmentDensityOffsetCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setFragmentDensityOffsetCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->fragmentDensityOffsetCount = $cValue;
    }

    /**
     * VkOffset2D* /
     */
    public function getPFragmentDensityOffsets(): VkOffset2D
    {
        $cValue = $this->cdata->pFragmentDensityOffsets;
        $phpValue = new \iggyvolz\vulkan\struct\VkOffset2D($cValue);
        return $phpValue;
    }

    public function setPFragmentDensityOffsets(VkOffset2D $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pFragmentDensityOffsets = $cValue;
    }
}
