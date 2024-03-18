<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoEncodeH264SessionParametersAddInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "stdSPSCount" => $this->getStdSPSCount(),
          "pStdSPSs" => $this->getPStdSPSs(),
          "stdPPSCount" => $this->getStdPPSCount(),
          "pStdPPSs" => $this->getPStdPPSs(),
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
        null|int $stdSPSCount = null,
        null|\iggyvolz\vulkan\util\Pointer $pStdSPSs = null,
        null|int $stdPPSCount = null,
        null|\iggyvolz\vulkan\util\Pointer $pStdPPSs = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoEncodeH264SessionParametersAddInfoKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($stdSPSCount)) $self->setStdSPSCount($stdSPSCount);
        if(!is_null($pStdSPSs)) $self->setPStdSPSs($pStdSPSs);
        if(!is_null($stdPPSCount)) $self->setStdPPSCount($stdPPSCount);
        if(!is_null($pStdPPSs)) $self->setPStdPPSs($pStdPPSs);
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
    public function getStdSPSCount(): int
    {
        $cValue = $this->cdata->stdSPSCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStdSPSCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->stdSPSCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPStdSPSs(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pStdSPSs;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPStdSPSs(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pStdSPSs = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStdPPSCount(): int
    {
        $cValue = $this->cdata->stdPPSCount;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStdPPSCount(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->stdPPSCount = $cValue;
    }

    /**
     * void* /
     */
    public function getPStdPPSs(): \iggyvolz\vulkan\util\Pointer
    {
        $cValue = $this->cdata->pStdPPSs;
        $phpValue = new \iggyvolz\vulkan\util\OpaquePointer($cValue, $this->vulkan);
        return $phpValue;
    }

    public function setPStdPPSs(\iggyvolz\vulkan\util\Pointer $phpValue): void
    {
        $cValue = $phpValue->cdata;
        $this->cdata->pStdPPSs = $cValue;
    }
}
