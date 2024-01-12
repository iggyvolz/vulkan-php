<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkPipelineFragmentShadingRateStateCreateInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "fragmentSize" => $this->getFragmentSize(),
          "combinerOps" => $this->getCombinerOps(),
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
        null|VkExtent2D $fragmentSize = null,
        mixed $combinerOps = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkPipelineFragmentShadingRateStateCreateInfoKHR', false), $vulkan);
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($fragmentSize)) $self->setFragmentSize($fragmentSize);
        if(!is_null($combinerOps)) $self->setCombinerOps($combinerOps);
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
     * VkExtent2D/
     */
    public function getFragmentSize(): VkExtent2D
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->fragmentSize;
        $phpValue = new \iggyvolz\vulkan\struct\VkExtent2D($cValue, $ffi);
        return $phpValue;
    }

    public function setFragmentSize(VkExtent2D $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $phpValue->cdata;
        $this->cdata->fragmentSize = $cValue;
    }

    /**
     * void* /
     */
    public function getCombinerOps(): mixed
    {
        $ffi = $this->vulkan->ffi;
        $cValue = $this->cdata->combinerOps;
        throw new \LogicException("Dummy transformer!");
        return $phpValue;
    }

    public function setCombinerOps(mixed $phpValue): void
    {
        $ffi = $this->vulkan->ffi;
        throw new \LogicException("Dummy transformer!");
        $this->cdata->combinerOps = $cValue;
    }
}
