<?php

declare(strict_types=1);

namespace iggyvolz\vulkan\struct;

final class VkVideoEncodeH264SessionParametersGetInfoKHR implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
          '_type' => static::class,
          "sType" => $this->getSType(),
          "pNext" => $this->getPNext(),
          "writeStdSPS" => $this->getWriteStdSPS(),
          "writeStdPPS" => $this->getWriteStdPPS(),
          "stdSPSId" => $this->getStdSPSId(),
          "stdPPSId" => $this->getStdPPSId(),
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
        null|bool $writeStdSPS = null,
        null|bool $writeStdPPS = null,
        null|int $stdSPSId = null,
        null|int $stdPPSId = null,
    ): self
    {
        $self = new self( $vulkan->ffi->new('VkVideoEncodeH264SessionParametersGetInfoKHR', false));
        if(!is_null($sType)) $self->setSType($sType);
        if(!is_null($pNext)) $self->setPNext($pNext);
        if(!is_null($writeStdSPS)) $self->setWriteStdSPS($writeStdSPS);
        if(!is_null($writeStdPPS)) $self->setWriteStdPPS($writeStdPPS);
        if(!is_null($stdSPSId)) $self->setStdSPSId($stdSPSId);
        if(!is_null($stdPPSId)) $self->setStdPPSId($stdPPSId);
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
    public function getWriteStdSPS(): bool
    {
        $cValue = $this->cdata->writeStdSPS;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setWriteStdSPS(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->writeStdSPS = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getWriteStdPPS(): bool
    {
        $cValue = $this->cdata->writeStdPPS;
        $phpValue = ($cValue === 1);
        return $phpValue;
    }

    public function setWriteStdPPS(bool $phpValue): void
    {
        $cValue = $phpValue ? 1 : 0;
        $this->cdata->writeStdPPS = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStdSPSId(): int
    {
        $cValue = $this->cdata->stdSPSId;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStdSPSId(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->stdSPSId = $cValue;
    }

    /**
     * uint32_t/
     */
    public function getStdPPSId(): int
    {
        $cValue = $this->cdata->stdPPSId;
        $phpValue = $cValue;
        return $phpValue;
    }

    public function setStdPPSId(int $phpValue): void
    {
        $cValue = $phpValue;
        $this->cdata->stdPPSId = $cValue;
    }
}
