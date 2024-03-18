<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVertexInputBindingDescription2EXT implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "binding" => $this->getBinding(),
          "stride" => $this->getStride(),
          "inputRate" => $this->getInputRate(),
          "divisor" => $this->getDivisor(),
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
        null|int $binding = null,
        null|int $stride = null,
        null|\iggyvolz\vulkan\enum\VkVertexInputRate $inputRate = null,
        null|int $divisor = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVertexInputBindingDescription2EXT', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($binding)) $self->setBinding($binding);
        if(!is_null($stride)) $self->setStride($stride);
        if(!is_null($inputRate)) $self->setInputRate($inputRate);
        if(!is_null($divisor)) $self->setDivisor($divisor);
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
    public function getBinding(): int
    {
        $cValue = $this->cdata->binding;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setBinding(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->binding = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStride(): int
    {
        $cValue = $this->cdata->stride;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStride(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->stride = $cValue;
    }

    /**
     * VkVertexInputRate/
     */
    public function getInputRate(): \iggyvolz\vulkan\enum\VkVertexInputRate
    {
        $cValue = $this->cdata->inputRate;
        $phpValue = \iggyvolz\vulkan\enum\VkVertexInputRate::from($cValue);
        return $phpValue;
    }

    public function setInputRate(\iggyvolz\vulkan\enum\VkVertexInputRate $phpValue): void
    {
        $cValue = $phpValue->value;
        $this->cdata->inputRate = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getDivisor(): int
    {
        $cValue = $this->cdata->divisor;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setDivisor(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->divisor = $cValue;
    }
}
